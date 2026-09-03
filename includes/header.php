<?php
if (!isset($page_title)) {
    $page_title = "CINEC - Hệ sinh thái Đổi mới sáng tạo Cà Mau - Bạc Liêu";
}
?>
<!DOCTYPE html>
<html lang="vi" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <!-- Meta SEO -->
    <meta name="description" content="CINEC - Hệ sinh thái Đổi mới sáng tạo và Khởi nghiệp Cà Mau - Bạc Liêu. Thúc đẩy khởi nghiệp sáng tạo, chuyển đổi số và phát triển xanh bền vững.">
    <meta name="keywords" content="CINEC, Khởi nghiệp Cà Mau, Đổi mới sáng tạo Bạc Liêu, INNO, START, HUB, Chuyển đổi số">
    <meta name="author" content="CINEC">
    <link class="favicon" rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Google Fonts: Plus Jakarta Sans, Be Vietnam Pro, Inter & Playball -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@300;400;500;600;700;800&family=Playball&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                screens: {
                    'sm': '640px',
                    'md': '768px',
                    'lg': '1024px',
                    'xl': '1280px',
                    '2xl': '1440px', // Khớp chuẩn Desktop figma 1440px
                },
                extend: {
                    colors: {
                        cinecPrimary: '#062AAD',     // Xanh dương đậm chủ đạo
                        cinecSecondary: '#05A6F5',   // Xanh dương nhạt phụ trợ
                        cinecAcent: '#C1FF72',       // Xanh neon/lime tạo điểm nhấn
                        cinecDarkBlue: '#02185D',    // Xanh đen
                        cinecBg: '#FAFCFF',          // Nền sáng đồng bộ
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Be Vietnam Pro', 'Inter', 'sans-serif'],
                        playball: ['Playball', 'cursive'],
                    },
                    fontSize: {
                        // Áp dụng scale kích thước chuẩn từ Figma Design System với letter-spacing và line-height tối ưu
                        'h1': ['52px', { lineHeight: '1.18', letterSpacing: '-0.025em' }],
                        'h2': ['36px', { lineHeight: '1.25', letterSpacing: '-0.02em' }],
                        'h3': ['28px', { lineHeight: '1.3', letterSpacing: '-0.015em' }],
                        'h4': ['22px', { lineHeight: '1.35', letterSpacing: '-0.01em' }],
                        'h5': ['18px', { lineHeight: '1.4' }],
                        'body-lg': ['16px', { lineHeight: '1.65' }],
                        'body-md': ['14px', { lineHeight: '1.65' }],
                        'body-sm': ['13px', { lineHeight: '1.6' }],
                        'body-xs': ['12px', { lineHeight: '1.55' }],
                        'caption': ['11px', { lineHeight: '1.5' }],
                    },
                    spacing: {
                        '128': '32rem',
                    },
                    boxShadow: {
                        'subtle': '0 2px 10px rgba(6, 42, 173, 0.04)',
                        'premium': '0 10px 30px -10px rgba(6, 42, 173, 0.08), 0 2px 6px rgba(6, 42, 173, 0.02)',
                        'hover-card': '0 20px 40px -12px rgba(6, 42, 173, 0.14), 0 4px 12px rgba(6, 42, 173, 0.04)',
                        'glow-blue': '0 8px 25px rgba(6, 42, 173, 0.25)',
                        'glow-lime': '0 8px 25px rgba(193, 255, 114, 0.35)',
                    }
                }
            }
        }
    </script>
    
    <!-- Lucide Icons Library -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Plus Jakarta Sans', 'Be Vietnam Pro', 'Inter', sans-serif;
            background-color: #FAFCFF;
            color: #1e293b;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        /* Hiệu ứng mượt mà */
        .reveal-on-scroll {
            opacity: 1;
            transform: translateY(0);
        }

        /* Nav link hover underline animation */
        .nav-link-hover {
            position: relative;
        }
        .nav-link-hover::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #05A6F5, #062AAD);
            border-radius: 99px;
            transition: all 0.25s ease-out;
            transform: translateX(-50%);
        }
        .nav-link-hover:hover::after {
            width: 80%;
        }
        
        /* Dropdown Hover Animation */
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .dropdown-hover:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        /* Logo Marquee Animation */
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            animation: marquee 25s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
        
        /* Khóa cứng nền trong suốt cho wrapper header để chống cache JS cũ làm đục góc */
        #main-header, #header-wrapper {
            background-color: transparent !important;
            background: transparent !important;
            box-shadow: none !important;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <!-- HEADER: Floating Capsule (Z-index: 50) trôi nổi đè lên Hero -->
    <div id="header-wrapper" class="fixed top-0 left-0 right-0 z-50 w-full pt-4 lg:pt-6 bg-transparent !bg-transparent transition-all duration-300">
        <header id="main-header" class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 transition-all duration-300 bg-transparent !bg-transparent">
            <!-- Capsule trắng chứa nội dung menu -->
            <div id="header-capsule" class="bg-white rounded-2xl lg:rounded-full shadow-premium border border-slate-100/60 px-4 py-2 flex items-center justify-between w-full h-14 lg:h-20 transition-all duration-300">
                
                <!-- LOGO: CINEC logo image -->
                <a href="index.php" class="flex items-center focus:outline-none">
                    <img src="assets/img/logo-web-cinec.png" alt="CiNEC Logo" class="h-8 md:h-10 w-auto object-contain">
                </a>

                <!-- MENU (Giữa) - Desktop 1440px -->
                <nav class="hidden lg:flex items-center gap-6 xl:gap-8">
                    <a href="index.php" class="nav-link-hover text-body-sm font-semibold hover:text-cinecPrimary transition-colors py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-cinecPrimary font-bold' : 'text-slate-600'; ?>">Trang chủ</a>
                    <a href="gioi-thieu.php" class="nav-link-hover text-body-sm font-semibold hover:text-cinecPrimary transition-colors py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'gioi-thieu.php' ? 'text-cinecPrimary font-bold' : 'text-slate-600'; ?>">Giới thiệu</a>
                    
                    <!-- DROPDOWN CHƯƠNG TRÌNH -->
                    <div class="relative group py-2">
                        <a href="chuong-trinh.php" class="nav-link-hover flex items-center gap-1.5 text-body-sm font-semibold hover:text-cinecPrimary transition-colors <?php echo strpos(basename($_SERVER['PHP_SELF']), 'chuong-trinh') !== false ? 'text-cinecPrimary font-bold' : 'text-slate-600'; ?>">
                            Chương trình
                            <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180 text-slate-400 group-hover:text-cinecPrimary"></i>
                        </a>
                        
                        <!-- Mega Dropdown Menu (04 Chương trình thành phần) -->
                        <div class="absolute left-1/2 -translate-x-1/2 top-full pt-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform -translate-y-2 group-hover:translate-y-0 z-50 w-[430px]">
                            <div class="bg-white/95 backdrop-blur-xl rounded-2xl p-3 shadow-hover-card border border-slate-200/80 space-y-1">
                                <a href="chuong-trinh-platform.php" class="flex items-center gap-3 p-2 rounded-xl hover:bg-blue-50/70 transition-all group/item">
                                    <div class="w-8 h-8 rounded-lg bg-blue-100/70 text-blue-600 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                        <i data-lucide="layers" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-body-xs font-bold text-slate-800 group-hover/item:text-blue-600 transition-colors">Nền tảng Đổi mới sáng tạo</div>
                                        <div class="text-[11px] text-slate-500 font-normal">Sandbox, Dữ liệu Đổi mới sáng tạo & Chỉ số PII</div>
                                    </div>
                                </a>

                                <a href="chuong-trinh-journey.php" class="flex items-center gap-3 p-2 rounded-xl hover:bg-amber-50/70 transition-all group/item">
                                    <div class="w-8 h-8 rounded-lg bg-amber-100/70 text-amber-600 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                        <i data-lucide="rocket" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-body-xs font-bold text-slate-800 group-hover/item:text-amber-600 transition-colors">Hành trình Khởi nghiệp</div>
                                        <div class="text-[11px] text-slate-500 font-normal">Quy trình 4 bước liên thông & Đồng tài trợ 1:1</div>
                                    </div>
                                </a>

                                <a href="chuong-trinh-sme.php" class="flex items-center gap-3 p-2 rounded-xl hover:bg-emerald-50/70 transition-all group/item">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-100/70 text-emerald-600 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                        <i data-lucide="shopping-bag" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-body-xs font-bold text-slate-800 group-hover/item:text-emerald-600 transition-colors">Doanh nghiệp số</div>
                                        <div class="text-[11px] text-slate-500 font-normal">Voucher CĐS, Mentor KPI 90 ngày & Nâng chuẩn OCOP</div>
                                    </div>
                                </a>

                                <a href="chuong-trinh-talent.php" class="flex items-center gap-3 p-2 rounded-xl hover:bg-purple-50/70 transition-all group/item">
                                    <div class="w-8 h-8 rounded-lg bg-purple-100/70 text-purple-600 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                        <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-body-xs font-bold text-slate-800 group-hover/item:text-purple-600 transition-colors">Nhân tài số</div>
                                        <div class="text-[11px] text-slate-500 font-normal">Học bổng tài năng số & Mô hình Đại học Khởi nghiệp</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- MENU SỰ KIỆN -->
                    <div class="relative py-2">
                        <a href="su-kien.php" class="nav-link-hover text-body-sm font-semibold hover:text-cinecPrimary transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'su-kien.php' ? 'text-cinecPrimary font-bold' : 'text-slate-600'; ?>">
                            Sự kiện
                        </a>
                    </div>
                    
                    <!-- MENU TIN TỨC -->
                    <div class="relative py-2">
                        <a href="tin-tuc.php" class="nav-link-hover text-body-sm font-semibold hover:text-cinecPrimary transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'tin-tuc.php' ? 'text-cinecPrimary font-bold' : 'text-slate-600'; ?>">
                            Tin tức & Insight
                        </a>
                    </div>
                    
                    <a href="impact.php" class="nav-link-hover text-body-sm font-semibold hover:text-cinecPrimary transition-colors py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'impact.php' ? 'text-cinecPrimary font-bold' : 'text-slate-600'; ?>">Impact</a>
                    <a href="doi-tac.php" class="nav-link-hover text-body-sm font-semibold hover:text-cinecPrimary transition-colors py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'doi-tac.php' ? 'text-cinecPrimary font-bold' : 'text-slate-600'; ?>">Đối tác</a>
                </nav>

                <!-- CỤM CHUYỂN NGỮ & LIÊN HỆ (Phải) -->
                <div class="hidden lg:flex items-center gap-5">
                    
                    <!-- Bộ chuyển ngôn ngữ Switcher Toggle kiểu Figma (Ảnh 2) -->
                    <div class="flex items-center bg-white border border-[#062AAD]/25 hover:border-[#062AAD] rounded-full p-1 w-16 h-8 justify-between relative cursor-pointer group transition-all duration-300 shadow-2xs">
                        <!-- Chấm tròn màu xanh dương bên trái -->
                        <span class="w-6 h-6 rounded-full bg-[#062AAD] flex items-center justify-center text-white text-[9px] font-bold transition-transform duration-300 shadow-xs"></span>
                        <!-- Chữ VN bên phải -->
                        <span class="text-[10px] font-extrabold text-[#062AAD] pr-2.5 tracking-wider">VN</span>
                    </div>
                    
                    <!-- Nút liên hệ Pill-shape màu tươi sáng gradient từ Figma -->
                    <a href="lien-he.php" class="group flex items-center gap-3 bg-gradient-to-r from-cinecSecondary to-cinecPrimary hover:from-cinecPrimary hover:to-[#02185D] text-white font-extrabold text-body-sm rounded-full pl-6 pr-2 py-2 shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-600/30 hover:-translate-y-0.5 transition-all duration-300">
                        <span>Liên hệ</span>
                        <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1 shadow-sm">
                            <i data-lucide="arrow-right" class="w-4 h-4 text-cinecPrimary"></i>
                        </span>
                    </a>
                </div>

                <!-- MOBILE ACTIONS (Hamburger chuẩn Figma Mobile) -->
                <div class="flex lg:hidden items-center">
                    <!-- Nút Hamburger Menu -->
                    <button id="mobile-menu-btn" class="p-1 text-[#062AAD] hover:text-cinecSecondary focus:outline-none" aria-label="Toggle Menu">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </header>
    </div>

    <!-- MOBILE DRAWER: Sidebar trượt mượt mà (Z-index: 99) -->
    <div id="mobile-drawer" class="fixed inset-0 z-[99] pointer-events-none transition-all duration-300">
        <!-- Lớp phủ mờ (Overlay) -->
        <div id="drawer-overlay" class="absolute inset-0 bg-slate-900/0 backdrop-blur-none transition-all duration-300"></div>
        
        <!-- Nội dung Drawer -->
        <div id="drawer-content" class="absolute right-0 top-0 bottom-0 w-80 max-w-[85vw] bg-white shadow-2xl flex flex-col translate-x-full transition-transform duration-300 ease-out p-6 pointer-events-auto">
            <!-- Header Drawer -->
            <div class="flex items-center justify-between pb-6 border-b border-slate-100">
                <a href="index.php" class="flex items-center focus:outline-none">
                    <img src="assets/img/logo-web-cinec.png" alt="CiNEC Logo" class="h-8 w-auto object-contain">
                </a>
                <button id="close-drawer-btn" class="p-2 text-slate-500 hover:text-red-500 hover:bg-slate-50 rounded-lg transition-colors focus:outline-none">
                    <i data-lucide="x" class="w-6 h-6"></i>
                </button>
            </div>
            
            <!-- Navigation Links -->
            <nav class="flex-1 py-6 overflow-y-auto space-y-2">
                <a href="index.php" class="flex items-center justify-between px-4 py-3 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'bg-blue-50 text-cinecPrimary' : ''; ?>">
                    Trang chủ
                </a>
                <a href="gioi-thieu.php" class="flex items-center justify-between px-4 py-3 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'gioi-thieu.php' ? 'bg-blue-50 text-cinecPrimary' : ''; ?>">
                    Giới thiệu
                </a>
                
                <!-- Accordion Chương trình Mobile -->
                <div class="space-y-1">
                    <button onclick="toggleMobileAccordion()" class="w-full flex items-center justify-between px-4 py-3 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 focus:outline-none">
                        Chương trình
                        <i id="accordion-arrow" data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-200"></i>
                    </button>
                    <div id="mobile-accordion-content" class="hidden pl-6 pr-2 py-2 space-y-1 bg-slate-50/55 rounded-xl border border-slate-100">
                        <a href="chuong-trinh-platform.php" class="block py-2 px-3 text-body-sm font-semibold text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">1. Nền tảng Đổi mới sáng tạo</a>
                        <a href="chuong-trinh-journey.php" class="block py-2 px-3 text-body-sm font-semibold text-slate-600 hover:text-amber-600 hover:bg-amber-50 rounded-lg">2. Hành trình Khởi nghiệp</a>
                        <a href="chuong-trinh-sme.php" class="block py-2 px-3 text-body-sm font-semibold text-slate-600 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg">3. Doanh nghiệp số</a>
                        <a href="chuong-trinh-talent.php" class="block py-2 px-3 text-body-sm font-semibold text-slate-600 hover:text-purple-600 hover:bg-purple-50 rounded-lg">4. Nhân tài số</a>
                    </div>
                </div>

                <a href="su-kien.php" class="flex items-center justify-between px-4 py-3 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'su-kien.php' ? 'bg-blue-50 text-cinecPrimary' : ''; ?>">
                    Sự kiện
                </a>
                <a href="tin-tuc.php" class="flex items-center justify-between px-4 py-3 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'tin-tuc.php' ? 'bg-blue-50 text-cinecPrimary' : ''; ?>">
                    Tin tức & Insight
                </a>
                <a href="impact.php" class="flex items-center justify-between px-4 py-3 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'impact.php' ? 'bg-blue-50 text-cinecPrimary' : ''; ?>">
                    Impact
                </a>
                <a href="doi-tac.php" class="flex items-center justify-between px-4 py-3 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'doi-tac.php' ? 'bg-blue-50 text-cinecPrimary' : ''; ?>">
                    Đối tác
                </a>
            </nav>
            
            <!-- Footer Drawer -->
            <div class="pt-6 border-t border-slate-100 space-y-4">
                <a href="lien-he.php" class="w-full flex items-center justify-center gap-2 bg-cinecPrimary text-white font-bold py-3 rounded-xl hover:bg-cinecSecondary transition-all">
                    Liên hệ ngay <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </div>
    
    <!-- MAIN CONTENT WRAPPER -->
    <main class="flex-grow">
