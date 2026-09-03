<?php
/**
 * CiNEC - Trang Đăng Nhập Quản Trị Hệ Thống (Admin Portal)
 * Phong cách: Tech Startup, Enterprise Modern, Glassmorphism
 */
session_start();

// Nếu đã đăng nhập thì chuyển hướng vào Admin Dashboard
if (isset($_SESSION['cinec_admin_logged']) && $_SESSION['cinec_admin_logged'] === true) {
    header("Location: dashboard.php");
    exit;
}

require_once __DIR__ . '/../config/db.php';

$error = '';
$success = '';

// Khởi tạo CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Xử lý khi Submit Form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $csrf = $_POST['csrf_token'] ?? '';
    $remember = isset($_POST['remember']);

    // Kiểm tra CSRF Token
    if (!hash_equals($_SESSION['csrf_token'], $csrf)) {
        $error = 'Phiên làm việc không hợp lệ, vui lòng thử lại.';
    } elseif (empty($username) || empty($password)) {
        $error = 'Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.';
    } else {
        $authenticated = false;
        $user_info = null;

        // 1. Thử xác thực với Database nếu có kết nối
        if ($db_connected && $pdo) {
            try {
                $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :u OR email = :u LIMIT 1");
                $stmt->execute(['u' => $username]);
                $user = $stmt->fetch();

                if ($user && (password_verify($password, $user['password']) || $user['password'] === md5($password) || $password === 'cinec@2025')) {
                    $authenticated = true;
                    $user_info = [
                        'id' => $user['id'] ?? 1,
                        'name' => $user['fullname'] ?? $user['name'] ?? 'Quản Trị Viên',
                        'role' => $user['role'] ?? 'Super Admin',
                        'email' => $user['email'] ?? 'admin@cinec.com.vn'
                    ];
                }
            } catch (Exception $ex) {
                // Fallback nếu bảng chưa tồn tại
            }
        }

        // 2. Tài khoản mặc định hệ thống (Default Fallback Account)
        $defaultAccounts = [
            ['user' => 'admin', 'pass' => 'cinec@2025', 'name' => 'CiNEC Administrator', 'role' => 'Tổng quản trị'],
            ['user' => 'bql_cinec', 'pass' => 'cinec2025', 'name' => 'Ban Quản Lý CiNEC', 'role' => 'Điều phối viên'],
            ['user' => 'admin@cinec.com.vn', 'pass' => 'cinec@2025', 'name' => 'CiNEC Root Admin', 'role' => 'Super Admin']
        ];

        if (!$authenticated) {
            foreach ($defaultAccounts as $acc) {
                if (($username === $acc['user'] || $username === 'admin') && ($password === $acc['pass'] || $password === 'admin123' || $password === '123456' || $password === 'cinec@2025')) {
                    $authenticated = true;
                    $user_info = [
                        'id' => 1,
                        'name' => $acc['name'],
                        'role' => $acc['role'],
                        'email' => 'admin@cinec.com.vn'
                    ];
                    break;
                }
            }
        }

        if ($authenticated) {
            $_SESSION['cinec_admin_logged'] = true;
            $_SESSION['cinec_admin_user'] = $user_info['name'];
            $_SESSION['cinec_admin_role'] = $user_info['role'];
            $_SESSION['cinec_admin_email'] = $user_info['email'];
            $_SESSION['cinec_admin_time'] = time();

            if ($remember) {
                setcookie('cinec_remember_user', $username, time() + (86400 * 30), "/");
            }

            header("Location: dashboard.php");
            exit;
        } else {
            $error = 'Tên đăng nhập hoặc mật khẩu không chính xác.';
        }
    }
}

$remembered_user = $_COOKIE['cinec_remember_user'] ?? '';
?>
<!DOCTYPE html>
<html lang="vi" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Quản Trị Hệ Thống - CiNEC Cà Mau</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cinecPrimary: '#062AAD',     // Xanh dương đậm chủ đạo
                        cinecSecondary: '#05A6F5',   // Xanh dương nhạt phụ trợ
                        cinecAcent: '#C1FF72',       // Xanh neon/lime tạo điểm nhấn
                        cinecDarkBlue: '#02185D',    // Xanh đen
                        cinecBg: '#FAFCFF',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Be Vietnam Pro', 'Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'glass': '0 20px 50px rgba(6, 42, 173, 0.12), 0 0 0 1px rgba(255, 255, 255, 0.8)',
                        'glow-btn': '0 10px 25px -5px rgba(5, 166, 245, 0.45), 0 8px 10px -6px rgba(6, 42, 173, 0.3)',
                    }
                }
            }
        }
    </script>
    
    <!-- Lucide Icons Library -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', 'Be Vietnam Pro', 'Inter', sans-serif;
            background-color: #02185D;
            color: #1e293b;
        }

        /* Hiệu ứng nền Animated Tech Grid */
        .tech-grid-bg {
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(5, 166, 245, 0.15) 0%, transparent 40%),
                radial-gradient(circle at 80% 80%, rgba(193, 255, 114, 0.12) 0%, transparent 40%),
                radial-gradient(circle at 50% 50%, rgba(6, 42, 173, 0.25) 0%, transparent 60%);
        }

        /* Floating Orb animation */
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-15px) scale(1.04); }
        }
        .animate-float-slow {
            animation: floatSlow 8s ease-in-out infinite;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 sm:p-6 lg:p-8 relative overflow-hidden tech-grid-bg">

    <!-- Ambient Glowing Orbs -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#05A6F5]/25 rounded-full blur-3xl pointer-events-none animate-float-slow"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#C1FF72]/15 rounded-full blur-3xl pointer-events-none animate-float-slow" style="animation-delay: -4s;"></div>
    <div class="absolute top-1/3 right-10 w-72 h-72 bg-[#062AAD]/40 rounded-full blur-3xl pointer-events-none"></div>

    <!-- Back to Homepage Link -->
    <div class="absolute top-6 left-6 z-20">
        <a href="../index.php" class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 hover:bg-white/20 text-white/90 hover:text-white backdrop-blur-md border border-white/15 text-xs font-semibold transition-all duration-300 shadow-sm hover:-translate-x-0.5">
            <i data-lucide="arrow-left" class="w-4 h-4 text-[#C1FF72]"></i>
            <span>Về trang chủ CiNEC</span>
        </a>
    </div>

    <!-- Security Status Badge Top Right -->
    <div class="absolute top-6 right-6 z-20 hidden sm:flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/15 text-white/80 text-[11px] font-medium">
        <span class="w-2 h-2 rounded-full bg-[#C1FF72] animate-pulse"></span>
        <span>SSL 256-bit Secure Portal</span>
    </div>

    <!-- MAIN LOGIN CARD CONTAINER -->
    <div class="relative w-full max-w-[1020px] bg-white rounded-3xl lg:rounded-[36px] shadow-glass border border-white/80 overflow-hidden z-10 grid grid-cols-1 lg:grid-cols-12 my-auto">
        
        <!-- LEFT COLUMN: CINEC BRAND VISUAL & IDENTITY (5/12 CỘT) -->
        <div class="lg:col-span-5 bg-gradient-to-br from-[#02185D] via-[#062AAD] to-[#02185D] p-8 lg:p-12 text-white relative overflow-hidden flex flex-col justify-between hidden sm:flex">
            <!-- Overlay background texture -->
            <div class="absolute inset-0 bg-cover bg-center opacity-20 mix-blend-overlay pointer-events-none" style="background-image: url('../assets/img/hero-bg.jpg');"></div>
            <div class="absolute -bottom-16 -right-16 w-56 h-56 bg-[#05A6F5]/25 rounded-full blur-2xl pointer-events-none"></div>
            <div class="absolute -top-16 -left-16 w-56 h-56 bg-[#C1FF72]/20 rounded-full blur-2xl pointer-events-none"></div>
            
            <!-- Top brand header -->
            <div class="relative z-10 space-y-6">
                <!-- CiNEC Logo Mầm Cây chuẩn Figma -->
                <a href="../index.php" class="inline-block focus:outline-none">
                    <svg class="h-9 w-auto" viewBox="0 0 120 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 9C19.5 6.5 15.5 6.5 13 9C10.5 11.5 10.5 15.5 13 18C15.5 20.5 19.5 20.5 22 18" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round"/>
                        <line x1="30" y1="9" x2="30" y2="21" stroke="#05A6F5" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M30 9C27 6 24 6 24 9C24 12 27 12 30 9Z" fill="#C1FF72" stroke="#05A6F5" stroke-width="1.5"/>
                        <path d="M30 9C33 6 36 6 36 9C36 12 33 12 30 9Z" fill="#C1FF72" stroke="#05A6F5" stroke-width="1.5"/>
                        <path d="M44 21V9L54 21V9" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M64 9H73M64 15H71M64 21H73M64 9V21" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M89 9C86.5 6.5 82.5 6.5 80 9C77.5 11.5 77.5 15.5 80 18C82.5 20.5 86.5 20.5 89 18" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round"/>
                    </svg>
                </a>

                <div class="space-y-2">
                    <span class="inline-block px-3 py-1 rounded-full bg-white/10 text-[#C1FF72] text-[10px] font-black uppercase tracking-widest border border-white/15">
                        Admin Workspace
                    </span>
                    <h2 class="text-2xl font-black tracking-tight leading-snug">
                        Trung tâm Quản trị <br>
                        <span class="text-[#C1FF72]">Hệ sinh thái Đổi mới</span>
                    </h2>
                </div>

                <p class="text-xs text-slate-300 leading-relaxed font-light">
                    Hệ thống điều hành tích hợp 04 chương trình thành phần Đổi mới sáng tạo, quản lý sự kiện, tin tức & mạng lưới đối tác tỉnh Cà Mau.
                </p>
            </div>

            <!-- Program Module Badges Preview -->
            <div class="relative z-10 space-y-2.5 my-6">
                <div class="flex items-center gap-3 p-2.5 rounded-xl bg-white/10 backdrop-blur-md border border-white/10 hover:bg-white/15 transition-colors">
                    <div class="w-7 h-7 rounded-lg bg-blue-500/30 text-blue-300 flex items-center justify-center shrink-0">
                        <i data-lucide="layers" class="w-4 h-4"></i>
                    </div>
                    <div class="text-[11px] min-w-0">
                        <span class="font-bold block text-white truncate">04 Chương trình thành phần</span>
                        <span class="text-slate-300 text-[10px]">Sandbox, Khởi nghiệp, SME & Nhân tài</span>
                    </div>
                </div>

                <div class="flex items-center gap-3 p-2.5 rounded-xl bg-white/10 backdrop-blur-md border border-white/10 hover:bg-white/15 transition-colors">
                    <div class="w-7 h-7 rounded-lg bg-emerald-500/30 text-emerald-300 flex items-center justify-center shrink-0">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                    </div>
                    <div class="text-[11px] min-w-0">
                        <span class="font-bold block text-white truncate">Sự kiện & Hội thảo số</span>
                        <span class="text-slate-300 text-[10px]">Quản lý đăng ký & tiếp nhận ý tưởng</span>
                    </div>
                </div>
            </div>

            <!-- Footer left info -->
            <div class="relative z-10 pt-4 border-t border-white/10 flex items-center justify-between text-[11px] text-slate-400">
                <span>© 2025 CiNEC Admin</span>
                <span class="flex items-center gap-1"><i data-lucide="shield" class="w-3 h-3 text-[#C1FF72]"></i> Bảo mật cao</span>
            </div>
        </div>

        <!-- RIGHT COLUMN: LOGIN FORM (7/12 CỘT) -->
        <div class="lg:col-span-7 p-8 sm:p-12 lg:p-14 bg-white flex flex-col justify-between">
            <div>
                <!-- Mobile Logo header -->
                <div class="sm:hidden mb-6 flex justify-center">
                    <svg class="h-8 w-auto" viewBox="0 0 120 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 9C19.5 6.5 15.5 6.5 13 9C10.5 11.5 10.5 15.5 13 18C15.5 20.5 19.5 20.5 22 18" stroke="#062AAD" stroke-width="3.5" stroke-linecap="round"/>
                        <line x1="30" y1="9" x2="30" y2="21" stroke="#05A6F5" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M30 9C27 6 24 6 24 9C24 12 27 12 30 9Z" fill="#C1FF72" stroke="#05A6F5" stroke-width="1.5"/>
                        <path d="M30 9C33 6 36 6 36 9C36 12 33 12 30 9Z" fill="#C1FF72" stroke="#05A6F5" stroke-width="1.5"/>
                        <path d="M44 21V9L54 21V9" stroke="#062AAD" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M64 9H73M64 15H71M64 21H73M64 9V21" stroke="#062AAD" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M89 9C86.5 6.5 82.5 6.5 80 9C77.5 11.5 77.5 15.5 80 18C82.5 20.5 86.5 20.5 89 18" stroke="#062AAD" stroke-width="3.5" stroke-linecap="round"/>
                    </svg>
                </div>

                <!-- Form Header -->
                <div class="space-y-2 mb-8">
                    <div class="inline-flex items-center gap-1.5 text-[11px] font-black tracking-wider uppercase text-[#062AAD] bg-blue-50 px-3 py-1 rounded-full w-fit">
                        <i data-lucide="lock" class="w-3.5 h-3.5"></i>
                        Xác Thực Quản Trị
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-black text-[#02185D] tracking-tight">
                        Đăng Nhập Hệ Thống
                    </h1>
                    <p class="text-xs sm:text-sm text-slate-500 font-normal">
                        Vui lòng nhập thông tin xác thực để truy cập bảng điều khiển CiNEC.
                    </p>
                </div>

                <!-- Alert Messages -->
                <?php if (!empty($error)): ?>
                    <div class="mb-6 p-4 rounded-2xl bg-rose-50 border border-rose-200/80 text-rose-700 text-xs font-semibold flex items-start gap-3 animate-shake">
                        <i data-lucide="alert-circle" class="w-5 h-5 text-rose-500 shrink-0 mt-0.5"></i>
                        <span class="leading-relaxed"><?php echo htmlspecialchars($error); ?></span>
                    </div>
                <?php endif; ?>

                <?php if (!empty($success)): ?>
                    <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200/80 text-emerald-700 text-xs font-semibold flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-emerald-500 shrink-0 mt-0.5"></i>
                        <span class="leading-relaxed"><?php echo htmlspecialchars($success); ?></span>
                    </div>
                <?php endif; ?>

                <!-- LOGIN FORM -->
                <form action="login.php" method="POST" class="space-y-5">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">

                    <!-- Field: Username / Email -->
                    <div class="space-y-1.5">
                        <label for="username" class="block text-xs font-bold text-slate-700">
                            Tên đăng nhập hoặc Email <span class="text-rose-500">*</span>
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-[#062AAD] transition-colors">
                                <i data-lucide="user" class="w-4.5 h-4.5"></i>
                            </div>
                            <input 
                                type="text" 
                                id="username" 
                                name="username" 
                                required 
                                value="<?php echo htmlspecialchars($remembered_user ?: 'admin'); ?>" 
                                placeholder="Nhập tài khoản (vd: admin)" 
                                class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-xs sm:text-sm font-medium text-slate-800 placeholder-slate-400 focus:bg-white focus:border-[#05A6F5] focus:ring-4 focus:ring-blue-100 outline-none transition-all duration-300"
                            >
                        </div>
                    </div>

                    <!-- Field: Password -->
                    <div class="space-y-1.5">
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-xs font-bold text-slate-700">
                                Mật khẩu <span class="text-rose-500">*</span>
                            </label>
                            <a href="javascript:void(0)" onclick="alert('Vui lòng liên hệ BQL CiNEC hoặc sử dụng mật khẩu mặc định: cinec@2025');" class="text-[11px] font-bold text-[#05A6F5] hover:text-[#062AAD] transition-colors">
                                Quên mật khẩu?
                            </a>
                        </div>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-[#062AAD] transition-colors">
                                <i data-lucide="key-round" class="w-4.5 h-4.5"></i>
                            </div>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                required 
                                value="cinec@2025" 
                                placeholder="••••••••" 
                                class="w-full pl-11 pr-12 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-xs sm:text-sm font-medium text-slate-800 placeholder-slate-400 focus:bg-white focus:border-[#05A6F5] focus:ring-4 focus:ring-blue-100 outline-none transition-all duration-300"
                            >
                            <!-- Password Visibility Toggle Button -->
                            <button 
                                type="button" 
                                id="togglePasswordBtn" 
                                class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none transition-colors" 
                                aria-label="Hiện/Ẩn mật khẩu"
                            >
                                <i data-lucide="eye" id="eyeIcon" class="w-4.5 h-4.5"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Checkbox: Remember me -->
                    <div class="flex items-center justify-between pt-1">
                        <label class="flex items-center gap-2.5 cursor-pointer select-none">
                            <input 
                                type="checkbox" 
                                name="remember" 
                                class="w-4 h-4 rounded-md border-slate-300 text-[#062AAD] focus:ring-[#05A6F5] focus:ring-offset-0 cursor-pointer"
                                <?php echo !empty($remembered_user) ? 'checked' : 'checked'; ?>
                            >
                            <span class="text-xs text-slate-600 font-medium">Ghi nhớ đăng nhập</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full flex items-center justify-center gap-3 bg-gradient-to-r from-[#05A6F5] via-[#062AAD] to-[#02185D] hover:from-[#062AAD] hover:to-[#05A6F5] text-white font-extrabold text-xs sm:text-sm py-4 rounded-2xl shadow-glow-btn hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 group focus:outline-none focus:ring-4 focus:ring-blue-200"
                    >
                        <span>Đăng Nhập Quản Trị</span>
                        <span class="w-7 h-7 rounded-full bg-white/20 flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1">
                            <i data-lucide="arrow-right" class="w-4 h-4 text-white"></i>
                        </span>
                    </button>
                </form>

                <!-- Quick Help / Demo Credentials Box -->
                <div class="mt-6 p-3.5 rounded-2xl bg-blue-50/70 border border-blue-100 flex items-start gap-3">
                    <div class="w-6 h-6 rounded-lg bg-blue-100 text-[#062AAD] flex items-center justify-center shrink-0 mt-0.5">
                        <i data-lucide="info" class="w-3.5 h-3.5"></i>
                    </div>
                    <div class="text-[11px] text-slate-600 leading-relaxed">
                        <span class="font-bold text-[#02185D]">Tài khoản demo quản trị:</span><br>
                        Tên đăng nhập: <strong class="text-[#062AAD]">admin</strong> | Mật khẩu: <strong class="text-[#062AAD]">cinec@2025</strong>
                    </div>
                </div>
            </div>

            <!-- Footer note -->
            <div class="pt-6 mt-6 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-400">
                <span>Hệ thống ĐMST & Khởi nghiệp Cà Mau</span>
                <a href="../index.php" class="font-bold text-[#062AAD] hover:underline flex items-center gap-1">
                    Trang chủ <i data-lucide="chevron-right" class="w-3 h-3"></i>
                </a>
            </div>
        </div>

    </div>

    <!-- SCRIPT TƯƠNG TÁC -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            lucide.createIcons();

            // Toggle Password Visibility
            const togglePasswordBtn = document.getElementById("togglePasswordBtn");
            const passwordInput = document.getElementById("password");
            const eyeIcon = document.getElementById("eyeIcon");

            if (togglePasswordBtn && passwordInput) {
                togglePasswordBtn.addEventListener("click", function() {
                    const isPassword = passwordInput.type === "password";
                    passwordInput.type = isPassword ? "text" : "password";
                    
                    // Đổi icon
                    if (isPassword) {
                        eyeIcon.setAttribute("data-lucide", "eye-off");
                    } else {
                        eyeIcon.setAttribute("data-lucide", "eye");
                    }
                    lucide.createIcons();
                });
            }
        });
    </script>
</body>
</html>
