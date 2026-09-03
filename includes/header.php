<?php
if (!isset($page_title)) {
    $page_title = "CINEC - Hệ sinh thái Đổi mới sáng tạo Cà Mau - Bạc Liêu";
}
require_once __DIR__ . '/../config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
?>
<!DOCTYPE html>
<html lang="<?php echo $is_en ? 'en' : 'vi'; ?>" class="scroll-smooth">
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
                        cinecPrimary: '#062AAD',     // Xanh dương đậm chủ đạo (Primary)
                        cinecSecondary: '#05A6F5',   // Xanh dương nhạt phụ trợ (Secondary)
                        cinecAcent: '#C1FF72',       // Xanh lime neon điểm nhấn (Accent)
                        cinecLime: '#7BC612',        // Xanh lá đậm điểm nhấn
                        cinecDarkBlue: '#02155B',    // Xanh đen đậm
                        cinecBg: '#F7FAFD',          // Nền chuẩn Figma Design Systems (#F7FAFD)
                        cinecTextMain: '#062AAD',    // Màu chữ tiêu đề
                        cinecTextBody: '#5B5B5B',    // Màu chữ nội dung (#5B5B5B)
                        cinecTextMuted: '#A6A7AA',   // Màu chữ phụ
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        inter: ['Inter', 'sans-serif'],
                        playball: ['Playball', 'cursive'],
                    },
                    fontSize: {
                        'h1': ['56px', { lineHeight: '64px', letterSpacing: '-0.02em', fontWeight: '700' }],
                        'h2': ['40px', { lineHeight: '48px', letterSpacing: '-0.02em', fontWeight: '700' }],
                        'h3': ['32px', { lineHeight: '40px', letterSpacing: '-0.015em', fontWeight: '600' }],
                        'h4': ['24px', { lineHeight: '32px', letterSpacing: '-0.01em', fontWeight: '600' }],
                        'h5': ['20px', { lineHeight: '28px', fontWeight: '600' }],
                        'body-lg': ['16px', { lineHeight: '24px' }],
                        'body-md': ['14px', { lineHeight: '20px' }],
                        'body-sm': ['12px', { lineHeight: '16px' }],
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
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        /* Typography Rules */
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: #5B5B5B;
            background-color: #F7FAFD;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Inter', sans-serif;
            color: #062AAD;
        }

        .font-playball {
            font-family: 'Playball', cursive;
        }

        /* Nav link hover indicator effect */
        .nav-link-hover {
            position: relative;
        }
        .nav-link-hover::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: #062AAD;
            transition: all 0.25s ease-in-out;
            transform: translateX(-50%);
            border-radius: 9999px;
        }
        .nav-link-hover:hover::after {
            width: 80%;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #F7FAFD;
        }
        ::-webkit-scrollbar-thumb {
            background: #CBD5E1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94A3B8;
        }

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

                <!-- MENU (Giữa) - Desktop 1440px chuẩn Figma Inter 14px font-medium -->
                <nav class="hidden lg:flex items-center gap-6 xl:gap-7">
                    <a href="index.php" class="nav-link-hover text-[14px] leading-5 font-medium hover:text-cinecPrimary transition-colors py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-cinecPrimary !font-bold' : 'text-slate-600'; ?>">
                        <?php echo __('nav_home'); ?>
                    </a>
                    <a href="gioi-thieu.php" class="nav-link-hover text-[14px] leading-5 font-medium hover:text-cinecPrimary transition-colors py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'gioi-thieu.php' ? 'text-cinecPrimary !font-bold' : 'text-slate-600'; ?>">
                        <?php echo __('nav_about'); ?>
                    </a>
                    
                    <!-- DROPDOWN CHƯƠNG TRÌNH -->
                    <div class="relative group py-2">
                        <a href="chuong-trinh.php" class="nav-link-hover flex items-center gap-1.5 text-[14px] leading-5 font-medium hover:text-cinecPrimary transition-colors <?php echo strpos(basename($_SERVER['PHP_SELF']), 'chuong-trinh') !== false ? 'text-cinecPrimary !font-bold' : 'text-slate-600'; ?>">
                            <?php echo __('nav_programs'); ?>
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
                                        <div class="text-[13px] font-bold text-slate-800 group-hover/item:text-blue-600 transition-colors"><?php echo __('prog_platform_title'); ?></div>
                                        <div class="text-[11.5px] text-slate-500 font-normal"><?php echo __('prog_platform_desc'); ?></div>
                                    </div>
                                </a>

                                <a href="chuong-trinh-journey.php" class="flex items-center gap-3 p-2 rounded-xl hover:bg-amber-50/70 transition-all group/item">
                                    <div class="w-8 h-8 rounded-lg bg-amber-100/70 text-amber-600 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                        <i data-lucide="rocket" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-[13px] font-bold text-slate-800 group-hover/item:text-amber-600 transition-colors"><?php echo __('prog_journey_title'); ?></div>
                                        <div class="text-[11.5px] text-slate-500 font-normal"><?php echo __('prog_journey_desc'); ?></div>
                                    </div>
                                </a>

                                <a href="chuong-trinh-sme.php" class="flex items-center gap-3 p-2 rounded-xl hover:bg-emerald-50/70 transition-all group/item">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-100/70 text-emerald-600 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                        <i data-lucide="shopping-bag" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-[13px] font-bold text-slate-800 group-hover/item:text-emerald-600 transition-colors"><?php echo __('prog_sme_title'); ?></div>
                                        <div class="text-[11.5px] text-slate-500 font-normal"><?php echo __('prog_sme_desc'); ?></div>
                                    </div>
                                </a>

                                <a href="chuong-trinh-talent.php" class="flex items-center gap-3 p-2 rounded-xl hover:bg-purple-50/70 transition-all group/item">
                                    <div class="w-8 h-8 rounded-lg bg-purple-100/70 text-purple-600 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                        <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-[13px] font-bold text-slate-800 group-hover/item:text-purple-600 transition-colors"><?php echo __('prog_talent_title'); ?></div>
                                        <div class="text-[11.5px] text-slate-500 font-normal"><?php echo __('prog_talent_desc'); ?></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- MENU SỰ KIỆN -->
                    <div class="relative py-2">
                        <a href="su-kien.php" class="nav-link-hover text-[14px] leading-5 font-medium hover:text-cinecPrimary transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'su-kien.php' ? 'text-cinecPrimary !font-bold' : 'text-slate-600'; ?>">
                            <?php echo __('nav_events'); ?>
                        </a>
                    </div>
                    
                    <!-- MENU TIN TỨC -->
                    <div class="relative py-2">
                        <a href="tin-tuc.php" class="nav-link-hover text-[14px] leading-5 font-medium hover:text-cinecPrimary transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'tin-tuc.php' ? 'text-cinecPrimary !font-bold' : 'text-slate-600'; ?>">
                            <?php echo __('nav_news'); ?>
                        </a>
                    </div>
                    
                    <a href="impact.php" class="nav-link-hover text-[14px] leading-5 font-medium hover:text-cinecPrimary transition-colors py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'impact.php' ? 'text-cinecPrimary !font-bold' : 'text-slate-600'; ?>">
                        <?php echo __('nav_impact'); ?>
                    </a>
                    <a href="doi-tac.php" class="nav-link-hover text-[14px] leading-5 font-medium hover:text-cinecPrimary transition-colors py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'doi-tac.php' ? 'text-cinecPrimary !font-bold' : 'text-slate-600'; ?>">
                        <?php echo __('nav_partners'); ?>
                    </a>
                </nav>

                <!-- CỤM CÔNG TẮC CHUYỂN NGỮ & LIÊN HỆ (Phải) -->
                <div class="hidden lg:flex items-center gap-4">
                    
                    <!-- CÔNG TẮC BẬT TẮT CHUYỂN NGÔN NGỮ CHUẨN FIGMA GỐC (BẬT SANG EN HOẶC VỀ VI) -->
                    <button onclick="toggleCinecLanguage()" 
                            type="button" 
                            class="group flex items-center bg-white border border-[#062AAD]/30 hover:border-[#062AAD] rounded-full p-1 w-16 h-8 justify-between relative cursor-pointer transition-all duration-300 shadow-2xs focus:outline-none"
                            title="<?php echo $is_en ? 'Chuyển sang Tiếng Việt' : 'Switch to English'; ?>"
                            aria-label="Toggle Language">
                        
                        <!-- Nhãn EN bên phải (khi đang ở VN) -->
                        <span class="text-[11px] font-bold text-[#062AAD] pr-1.5 tracking-wider absolute right-1.5 transition-opacity duration-300 <?php echo !$is_en ? 'opacity-100' : 'opacity-0 pointer-events-none'; ?>">
                            EN
                        </span>
                        
                        <!-- Nhãn VN bên trái (khi đang ở EN) -->
                        <span class="text-[11px] font-bold text-[#062AAD] pl-1.5 tracking-wider absolute left-1.5 transition-opacity duration-300 <?php echo $is_en ? 'opacity-100' : 'opacity-0 pointer-events-none'; ?>">
                            VN
                        </span>
                        
                        <!-- Nút trượt tròn xanh chuẩn Figma (Frame 2147223331) -->
                        <span class="w-6 h-6 rounded-full bg-[#062AAD] flex items-center justify-center text-white text-[9px] font-extrabold transition-transform duration-300 shadow-xs transform <?php echo !$is_en ? 'translate-x-0' : 'translate-x-8'; ?>">
                            <?php echo $is_en ? 'EN' : 'VN'; ?>
                        </span>
                    </button>
                    
                    <!-- Nút liên hệ Pill-shape chuẩn Figma: Inter 15px font-semibold -->
                    <a href="lien-he.php" class="group flex items-center gap-3 bg-[#062AAD] hover:bg-[#02185D] text-white font-semibold text-[14px] rounded-full pl-5 pr-1.5 py-1.5 shadow-md hover:shadow-lg transition-all duration-300">
                        <span><?php echo __('nav_contact'); ?></span>
                        <span class="w-7 h-7 rounded-full bg-white flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1 shadow-xs">
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-[#062AAD]"></i>
                        </span>
                    </a>
                </div>

                <!-- MOBILE ACTIONS (Công tắc & Hamburger Mobile) -->
                <div class="flex lg:hidden items-center gap-3">
                    <!-- Công tắc bật tắt ngôn ngữ trên Mobile Header -->
                    <button onclick="toggleCinecLanguage()" 
                            type="button" 
                            class="group flex items-center bg-white border border-[#062AAD]/30 rounded-full p-0.5 w-14 h-7 justify-between relative cursor-pointer shadow-2xs focus:outline-none"
                            aria-label="Toggle Language Mobile">
                        <span class="text-[9px] font-bold text-[#062AAD] absolute <?php echo !$is_en ? 'right-1.5' : 'left-1.5'; ?>">
                            <?php echo !$is_en ? 'EN' : 'VN'; ?>
                        </span>
                        <span class="w-5 h-5 rounded-full bg-[#062AAD] flex items-center justify-center text-white text-[8px] font-bold transition-transform duration-300 shadow-xs transform <?php echo !$is_en ? 'translate-x-0' : 'translate-x-7'; ?>">
                            <?php echo $is_en ? 'EN' : 'VN'; ?>
                        </span>
                    </button>

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
            <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                <a href="index.php" class="flex items-center focus:outline-none">
                    <img src="assets/img/logo-web-cinec.png" alt="CiNEC Logo" class="h-8 w-auto object-contain">
                </a>
                <button id="close-drawer-btn" class="p-2 text-slate-500 hover:text-red-500 hover:bg-slate-50 rounded-lg transition-colors focus:outline-none">
                    <i data-lucide="x" class="w-6 h-6"></i>
                </button>
            </div>

            <!-- Công tắc chuyển ngôn ngữ trong Drawer Mobile -->
            <div class="flex items-center justify-between bg-slate-50 p-3 rounded-2xl border border-slate-100 mt-4 mb-2">
                <span class="text-xs font-bold text-slate-700">
                    <?php echo $is_en ? 'Language: English' : 'Ngôn ngữ: Tiếng Việt'; ?>
                </span>
                <button onclick="toggleCinecLanguage()" 
                        type="button" 
                        class="group flex items-center bg-white border border-[#062AAD]/30 rounded-full p-1 w-16 h-8 justify-between relative cursor-pointer shadow-2xs focus:outline-none">
                    <span class="text-[11px] font-bold text-[#062AAD] absolute <?php echo !$is_en ? 'right-2' : 'left-2'; ?>">
                        <?php echo !$is_en ? 'EN' : 'VN'; ?>
                    </span>
                    <span class="w-6 h-6 rounded-full bg-[#062AAD] flex items-center justify-center text-white text-[9px] font-bold transition-transform duration-300 shadow-xs transform <?php echo !$is_en ? 'translate-x-0' : 'translate-x-8'; ?>">
                        <?php echo $is_en ? 'EN' : 'VN'; ?>
                    </span>
                </button>
            </div>
            
            <!-- Navigation Links -->
            <nav class="flex-1 py-4 overflow-y-auto space-y-1.5">
                <a href="index.php" class="flex items-center justify-between px-4 py-2.5 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'bg-blue-50 text-cinecPrimary font-bold' : ''; ?>">
                    <?php echo __('nav_home'); ?>
                </a>
                <a href="gioi-thieu.php" class="flex items-center justify-between px-4 py-2.5 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'gioi-thieu.php' ? 'bg-blue-50 text-cinecPrimary font-bold' : ''; ?>">
                    <?php echo __('nav_about'); ?>
                </a>
                
                <!-- Accordion Chương trình Mobile -->
                <div class="space-y-1">
                    <button onclick="toggleMobileAccordion()" class="w-full flex items-center justify-between px-4 py-2.5 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 focus:outline-none">
                        <span><?php echo __('nav_programs'); ?></span>
                        <i id="accordion-arrow" data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-200"></i>
                    </button>
                    <div id="mobile-accordion-content" class="hidden pl-4 pr-2 py-2 space-y-1 bg-slate-50/70 rounded-xl border border-slate-100">
                        <a href="chuong-trinh-platform.php" class="block py-2 px-3 text-xs font-semibold text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">1. <?php echo __('prog_platform_title'); ?></a>
                        <a href="chuong-trinh-journey.php" class="block py-2 px-3 text-xs font-semibold text-slate-600 hover:text-amber-600 hover:bg-amber-50 rounded-lg">2. <?php echo __('prog_journey_title'); ?></a>
                        <a href="chuong-trinh-sme.php" class="block py-2 px-3 text-xs font-semibold text-slate-600 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg">3. <?php echo __('prog_sme_title'); ?></a>
                        <a href="chuong-trinh-talent.php" class="block py-2 px-3 text-xs font-semibold text-slate-600 hover:text-purple-600 hover:bg-purple-50 rounded-lg">4. <?php echo __('prog_talent_title'); ?></a>
                    </div>
                </div>

                <a href="su-kien.php" class="flex items-center justify-between px-4 py-2.5 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'su-kien.php' ? 'bg-blue-50 text-cinecPrimary font-bold' : ''; ?>">
                    <?php echo __('nav_events'); ?>
                </a>
                <a href="tin-tuc.php" class="flex items-center justify-between px-4 py-2.5 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'tin-tuc.php' ? 'bg-blue-50 text-cinecPrimary font-bold' : ''; ?>">
                    <?php echo __('nav_news'); ?>
                </a>
                <a href="impact.php" class="flex items-center justify-between px-4 py-2.5 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'impact.php' ? 'bg-blue-50 text-cinecPrimary font-bold' : ''; ?>">
                    <?php echo __('nav_impact'); ?>
                </a>
                <a href="doi-tac.php" class="flex items-center justify-between px-4 py-2.5 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 hover:text-cinecPrimary transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'doi-tac.php' ? 'bg-blue-50 text-cinecPrimary font-bold' : ''; ?>">
                    <?php echo __('nav_partners'); ?>
                </a>
            </nav>
            
            <!-- Footer Drawer -->
            <div class="pt-4 border-t border-slate-100 space-y-3">
                <a href="lien-he.php" class="w-full flex items-center justify-center gap-2 bg-cinecPrimary text-white font-bold py-2.5 rounded-xl hover:bg-cinecSecondary transition-all text-xs">
                    <?php echo __('nav_contact'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </div>
    
    <!-- MAIN CONTENT WRAPPER -->
    <main class="flex-grow">

    <!-- JAVASCRIPT ĐIỀU KHIỂN CÔNG TẮC NGÔN NGỮ CHỈ DỊCH TRANG ĐÃ CÓ BẢN DỊCH -->
    <script>
        function toggleCinecLanguage() {
            var currentLang = '<?php echo $lang; ?>';
            var newLang = (currentLang === 'vi') ? 'en' : 'vi';

            // Dọn dẹp triệt để bất kỳ cookie googtrans cũ nào nếu có
            var d = window.location.hostname;
            while (d.includes('.')) {
                document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" + d;
                document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=." + d;
                d = d.substring(d.indexOf('.') + 1);
            }
            document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
            localStorage.removeItem('googtrans');
            sessionStorage.removeItem('googtrans');

            // Lưu cài đặt ngôn ngữ cho CiNEC (lưu 1 năm)
            document.cookie = "cinec_lang=" + newLang + "; path=/; max-age=31536000; SameSite=Lax";
            localStorage.setItem("cinec_lang", newLang);

            // Chuyển hướng kèm query param để PHP session cập nhật tức thì
            var url = new URL(window.location.href);
            url.searchParams.set('lang', newLang);
            window.location.href = url.toString();
        }

        // Tự động kiểm tra và đồng bộ trạng thái khi chuyển sang bất kỳ trang nào
        document.addEventListener("DOMContentLoaded", function() {
            var savedLang = localStorage.getItem("cinec_lang");
            var phpLang = '<?php echo $lang; ?>';
            if (savedLang && savedLang !== phpLang && !window.location.search.includes('lang=')) {
                var url = new URL(window.location.href);
                url.searchParams.set('lang', savedLang);
                window.location.replace(url.toString());
            }
        });
    </script>
