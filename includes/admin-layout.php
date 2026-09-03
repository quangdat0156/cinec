<?php
/**
 * Layout Header & Sidebar chung cho Backend Admin CiNEC
 */
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config/db.php';

function admin_header($page_title = "Quản Trị Hệ Thống", $active_menu = "dashboard") {
    if (!isset($_SESSION['cinec_admin_logged']) || $_SESSION['cinec_admin_logged'] !== true) {
        header("Location: admin-login.php");
        exit;
    }

    $admin_user = $_SESSION['cinec_admin_user'] ?? 'Administrator';
    $admin_role = $_SESSION['cinec_admin_role'] ?? 'Super Admin';

    // Đếm số lượng thông báo / liên hệ mới
    $contacts = get_contacts();
    $newContactsCount = count(array_filter($contacts, fn($c) => ($c['status'] ?? '') === 'new'));

    // Lấy Flash message nếu có
    $flash_success = $_SESSION['flash_success'] ?? '';
    $flash_error = $_SESSION['flash_error'] ?? '';
    unset($_SESSION['flash_success'], $_SESSION['flash_error']);
    ?>
    <!DOCTYPE html>
    <html lang="vi" class="h-full">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($page_title); ?> - CiNEC Admin</title>
        
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
                            cinecPrimary: '#062AAD',
                            cinecSecondary: '#05A6F5',
                            cinecAcent: '#C1FF72',
                            cinecDarkBlue: '#02185D',
                            cinecBg: '#FAFCFF',
                        },
                        fontFamily: {
                            sans: ['Plus Jakarta Sans', 'Be Vietnam Pro', 'Inter', 'sans-serif'],
                        },
                        boxShadow: {
                            'subtle': '0 2px 10px rgba(6, 42, 173, 0.04)',
                            'premium': '0 10px 30px -10px rgba(6, 42, 173, 0.08), 0 2px 6px rgba(6, 42, 173, 0.02)',
                            'hover-card': '0 20px 40px -12px rgba(6, 42, 173, 0.14), 0 4px 12px rgba(6, 42, 173, 0.04)',
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
                background-color: #F8FAFC;
            }
            .custom-scrollbar::-webkit-scrollbar {
                width: 5px;
                height: 5px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: #f1f5f9;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: #cbd5e1;
                border-radius: 4px;
            }
        </style>
    </head>
    <body class="min-h-screen flex bg-[#F8FAFC] antialiased text-slate-800">

        <!-- ADMIN SIDEBAR (DESKTOP) -->
        <aside class="w-72 bg-[#02185D] text-white flex flex-col justify-between hidden lg:flex shrink-0 fixed inset-y-0 left-0 z-50 shadow-xl">
            <div class="flex flex-col h-full overflow-y-auto custom-scrollbar p-5 space-y-6">
                <!-- Brand logo -->
                <div class="pt-2 px-2 flex items-center justify-between">
                    <a href="admin-dashboard.php" class="flex items-center gap-3 focus:outline-none">
                        <svg class="h-8 w-auto" viewBox="0 0 120 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 9C19.5 6.5 15.5 6.5 13 9C10.5 11.5 10.5 15.5 13 18C15.5 20.5 19.5 20.5 22 18" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round"/>
                            <line x1="30" y1="9" x2="30" y2="21" stroke="#05A6F5" stroke-width="3.5" stroke-linecap="round"/>
                            <path d="M30 9C27 6 24 6 24 9C24 12 27 12 30 9Z" fill="#C1FF72" stroke="#05A6F5" stroke-width="1.5"/>
                            <path d="M30 9C33 6 36 6 36 9C36 12 33 12 30 9Z" fill="#C1FF72" stroke="#05A6F5" stroke-width="1.5"/>
                            <path d="M44 21V9L54 21V9" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M64 9H73M64 15H71M64 21H73M64 9V21" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M89 9C86.5 6.5 82.5 6.5 80 9C77.5 11.5 77.5 15.5 80 18C82.5 20.5 86.5 20.5 89 18" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>

                <div class="px-2 py-2 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10 flex items-center justify-between text-[11px]">
                    <span class="text-slate-300 font-medium">Bảng Quản Trị</span>
                    <span class="px-2 py-0.5 rounded-full bg-[#C1FF72] text-[#02185D] font-extrabold text-[10px] uppercase">
                        v2.0 Hosting
                    </span>
                </div>

                <!-- Navigation Links -->
                <nav class="space-y-1.5 text-xs font-bold">
                    <div class="text-[10px] font-black uppercase text-slate-400 px-3 pt-2 pb-1 tracking-wider">Tổng Quan</div>
                    
                    <a href="admin-dashboard.php" class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl transition-all <?php echo $active_menu === 'dashboard' ? 'bg-[#05A6F5] text-white shadow-md' : 'text-slate-300 hover:bg-white/10 hover:text-white'; ?>">
                        <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
                        <span>Bảng Điều Khiển</span>
                    </a>

                    <div class="text-[10px] font-black uppercase text-slate-400 px-3 pt-3 pb-1 tracking-wider">Quản Lý Nội Dung</div>

                    <a href="admin-about.php" class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl transition-all <?php echo $active_menu === 'about' ? 'bg-[#05A6F5] text-white shadow-md' : 'text-slate-300 hover:bg-white/10 hover:text-white'; ?>">
                        <i data-lucide="building-2" class="w-4 h-4"></i>
                        <span>Quản Lý Giới Thiệu</span>
                    </a>

                    <a href="admin-programs.php" class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl transition-all <?php echo $active_menu === 'programs' ? 'bg-[#05A6F5] text-white shadow-md' : 'text-slate-300 hover:bg-white/10 hover:text-white'; ?>">
                        <i data-lucide="layers" class="w-4 h-4"></i>
                        <span>Quản Lý Chương Trình</span>
                    </a>

                    <a href="admin-events.php" class="flex items-center justify-between px-3.5 py-2.5 rounded-2xl transition-all <?php echo $active_menu === 'events' ? 'bg-[#05A6F5] text-white shadow-md' : 'text-slate-300 hover:bg-white/10 hover:text-white'; ?>">
                        <div class="flex items-center gap-3">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            <span>Quản Lý Sự Kiện</span>
                        </div>
                    </a>

                    <a href="admin-news.php" class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl transition-all <?php echo $active_menu === 'news' ? 'bg-[#05A6F5] text-white shadow-md' : 'text-slate-300 hover:bg-white/10 hover:text-white'; ?>">
                        <i data-lucide="newspaper" class="w-4 h-4"></i>
                        <span>Quản Lý Tin Tức & Insight</span>
                    </a>

                    <a href="admin-impact.php" class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl transition-all <?php echo $active_menu === 'impact' ? 'bg-[#05A6F5] text-white shadow-md' : 'text-slate-300 hover:bg-white/10 hover:text-white'; ?>">
                        <i data-lucide="trending-up" class="w-4 h-4"></i>
                        <span>Quản Lý Impact</span>
                    </a>

                    <a href="admin-partners.php" class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl transition-all <?php echo $active_menu === 'partners' ? 'bg-[#05A6F5] text-white shadow-md' : 'text-slate-300 hover:bg-white/10 hover:text-white'; ?>">
                        <i data-lucide="globe" class="w-4 h-4"></i>
                        <span>Quản Lý Đối Tác</span>
                    </a>

                    <div class="text-[10px] font-black uppercase text-slate-400 px-3 pt-3 pb-1 tracking-wider">Hệ Thống & Tương Tác</div>

                    <a href="admin-contacts.php" class="flex items-center justify-between px-3.5 py-2.5 rounded-2xl transition-all <?php echo $active_menu === 'contacts' ? 'bg-[#05A6F5] text-white shadow-md' : 'text-slate-300 hover:bg-white/10 hover:text-white'; ?>">
                        <div class="flex items-center gap-3">
                            <i data-lucide="mail" class="w-4 h-4"></i>
                            <span>Đơn Đăng Ký & Tư Vấn</span>
                        </div>
                        <?php if ($newContactsCount > 0): ?>
                            <span class="px-2 py-0.5 rounded-full bg-rose-500 text-white text-[10px] font-black">
                                <?php echo $newContactsCount; ?>
                            </span>
                        <?php endif; ?>
                    </a>

                    <a href="admin-settings.php" class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl transition-all <?php echo $active_menu === 'settings' ? 'bg-[#05A6F5] text-white shadow-md' : 'text-slate-300 hover:bg-white/10 hover:text-white'; ?>">
                        <i data-lucide="sliders-horizontal" class="w-4 h-4"></i>
                        <span>Cài Đặt Hệ Thống</span>
                    </a>
                </nav>
            </div>

            <!-- Footer Sidebar info -->
            <div class="p-4 border-t border-white/10 bg-black/20 flex items-center justify-between">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-[#05A6F5] to-[#C1FF72] text-[#02185D] flex items-center justify-center font-black text-xs shrink-0">
                        AD
                    </div>
                    <div class="min-w-0">
                        <div class="text-xs font-bold truncate text-white"><?php echo htmlspecialchars($admin_user); ?></div>
                        <div class="text-[10px] text-slate-400 truncate"><?php echo htmlspecialchars($admin_role); ?></div>
                    </div>
                </div>
                <a href="admin-logout.php" title="Đăng xuất" class="p-2 text-slate-400 hover:text-rose-400 rounded-lg hover:bg-white/10 transition-colors">
                    <i data-lucide="log-out" class="w-4 h-4"></i>
                </a>
            </div>
        </aside>

        <!-- MAIN LAYOUT WRAPPER (Offset for fixed sidebar) -->
        <div class="flex-1 flex flex-col min-w-0 lg:pl-72">
            
            <!-- TOP BAR -->
            <header class="bg-white border-b border-slate-200 sticky top-0 z-40 h-16 flex items-center justify-between px-4 sm:px-8 shadow-xs">
                <!-- Left Title / Breadcrumbs -->
                <div class="flex items-center gap-3">
                    <div class="lg:hidden">
                        <button onclick="toggleMobileSidebar()" class="p-2 text-slate-600 hover:bg-slate-100 rounded-xl focus:outline-none">
                            <i data-lucide="menu" class="w-5 h-5"></i>
                        </button>
                    </div>
                    <div>
                        <h1 class="text-sm sm:text-base font-extrabold text-[#02185D] leading-none">
                            <?php echo htmlspecialchars($page_title); ?>
                        </h1>
                    </div>
                </div>

                <!-- Right Quick Links -->
                <div class="flex items-center gap-3">
                    <a href="index.php" target="_blank" class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold transition-all shadow-2xs">
                        <i data-lucide="external-link" class="w-3.5 h-3.5 text-[#062AAD]"></i>
                        <span class="hidden sm:inline">Xem Trang Chủ</span>
                    </a>
                    
                    <a href="admin-logout.php" class="p-2 rounded-xl text-slate-400 hover:text-rose-600 hover:bg-rose-50 transition-colors" title="Đăng xuất">
                        <i data-lucide="power" class="w-4 h-4"></i>
                    </a>
                </div>
            </header>

            <!-- FLASH ALERTS -->
            <div class="max-w-[1440px] w-full mx-auto px-4 sm:px-8 pt-6">
                <?php if (!empty($flash_success)): ?>
                    <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center justify-between gap-3 shadow-xs">
                        <div class="flex items-center gap-2.5">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-600 shrink-0"></i>
                            <span><?php echo htmlspecialchars($flash_success); ?></span>
                        </div>
                        <button onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-800"><i data-lucide="x" class="w-4 h-4"></i></button>
                    </div>
                <?php endif; ?>

                <?php if (!empty($flash_error)): ?>
                    <div class="p-4 rounded-2xl bg-rose-50 border border-rose-200 text-rose-800 text-xs font-semibold flex items-center justify-between gap-3 shadow-xs">
                        <div class="flex items-center gap-2.5">
                            <i data-lucide="alert-circle" class="w-5 h-5 text-rose-600 shrink-0"></i>
                            <span><?php echo htmlspecialchars($flash_error); ?></span>
                        </div>
                        <button onclick="this.parentElement.remove()" class="text-rose-500 hover:text-rose-800"><i data-lucide="x" class="w-4 h-4"></i></button>
                    </div>
                <?php endif; ?>
            </div>

            <!-- PAGE CONTENT CONTAINER -->
            <main class="flex-1 max-w-[1440px] w-full mx-auto px-4 sm:px-8 py-6 space-y-6">
    <?php
}

function admin_footer() {
    ?>
            </main>

            <!-- FOOTER -->
            <footer class="bg-white border-t border-slate-200 py-4 px-8 text-center sm:text-left flex flex-col sm:flex-row items-center justify-between text-xs text-slate-400 gap-2">
                <span>© 2025 CiNEC - Trung tâm Khởi nghiệp & Đổi mới sáng tạo Cà Mau.</span>
                <span>Hệ thống Quản trị MySQL Hosting</span>
            </footer>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                lucide.createIcons();
            });

            function toggleMobileSidebar() {
                alert("Bạn có thể điều hướng bằng thanh sidebar trên màn hình lớn hoặc chọn trực tiếp các module.");
            }
        </script>
    </body>
    </html>
    <?php
}
