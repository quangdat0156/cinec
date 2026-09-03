<?php
$page_title = "CINEC - Hệ sinh thái Đổi mới sáng tạo & Khởi nghiệp Cà Mau - Bạc Liêu";
require_once 'config/db.php';
require_once 'includes/header.php';

// Lấy dữ liệu mẫu
$programs = get_programs();
$events = get_events(4);
$news = get_news(3);
$partners = get_partners();
?>

<!-- TRANG CHỦ CHUẨN 100% THIẾT KẾ FIGMA HỖ TRỢ SONG NGỮ (VI / EN) -->
<div class="bg-[#F7FAFD] overflow-hidden font-sans text-slate-800">

    <!-- ========================================================================= -->
    <!-- SECTION 1: HERO TOP BANNER (Desktop: 12:2 | Mobile: Frame 59:390)         -->
    <!-- ========================================================================= -->
    <section class="relative bg-white overflow-hidden pt-28 pb-16 lg:pt-36 lg:pb-32 min-h-[580px] lg:min-h-[720px] flex items-center">
        
        <!-- Ảnh phong cảnh Cà Mau bên phải trên Desktop (hero-bg.jpg) -->
        <div class="absolute right-0 top-0 bottom-0 w-full lg:w-[54%] h-full hidden lg:block overflow-hidden z-0 pointer-events-none"
             style="background-image: url('assets/img/hero-bg.jpg'); background-position: right center; background-repeat: no-repeat; background-size: cover;">
            <!-- Lớp phủ gradient chuyển tiếp mượt mà sang nền trắng bên trái -->
            <div class="absolute inset-y-0 left-0 w-48 bg-gradient-to-r from-white via-white/80 to-transparent pointer-events-none"></div>
        </div>

        <!-- Ảnh nền mờ cho thiết bị di động (image 41 / 59:338) -->
        <div class="absolute inset-0 bg-cover block lg:hidden z-0 opacity-15 pointer-events-none" 
             style="background-image: url('assets/img/hero-bg.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>

        <!-- HỘP WIDGET XEM VIDEO GIỚI THIỆU TRÊN DESKTOP (Frame 2147223341: Kính mờ trong suốt nhìn xuyên cảnh) -->
        <div class="hidden lg:block absolute right-8 xl:right-16 2xl:right-24 bottom-24 z-30">
            <a href="https://www.youtube.com/watch?v=RrLEWgSEnmk" 
               onclick="openCinecVideoModal(event, 'RrLEWgSEnmk')" 
               class="group flex items-center gap-4 bg-slate-900/25 hover:bg-slate-900/40 backdrop-blur-xl saturate-150 border border-white/40 hover:border-white/60 rounded-[24px] p-3.5 pl-4 pr-6 shadow-[0_12px_40px_0_rgba(0,0,0,0.25)] hover:scale-[1.03] transition-all duration-300 cursor-pointer w-[335px] h-[116px]">
                
                <!-- Nút Play bọc hộp kính mờ squircle + nút tròn xanh lá chuẩn Figma (Frame 13:16) -->
                <div class="w-[68px] h-[68px] rounded-2xl bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform shadow-inner">
                    <div class="w-12 h-12 rounded-full bg-[#71A800] group-hover:bg-[#86c500] flex items-center justify-center text-white shadow-md">
                        <i data-lucide="play" class="w-5 h-5 text-white fill-white ml-0.5"></i>
                    </div>
                </div>
                
                <!-- Nội dung chữ 2 dòng chuẩn Figma (Frame 13:19) -->
                <div class="text-left text-white space-y-1 min-w-0">
                    <span class="text-[14px] font-bold block leading-snug text-white drop-shadow-md group-hover:text-cyan-100 transition-colors">
                        <?php echo __('hero_video_title'); ?>
                    </span>
                    <span class="text-[12px] font-bold text-[#C1FF72] group-hover:text-white flex items-center gap-1.5 transition-colors drop-shadow-xs">
                        <span><?php echo __('hero_video_action'); ?></span>
                        <i data-lucide="arrow-up-right" class="w-3.5 h-3.5 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                    </span>
                </div>
            </a>
        </div>

        <!-- Nội dung chính Hero Container -->
        <div class="relative max-w-[1440px] mx-auto w-full px-4 md:px-12 2xl:px-20 my-auto grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center z-10">
            
            <!-- Cột trái: Văn bản & Nút bấm CTA (7/12 cột) -->
            <div class="lg:col-span-7 flex flex-col items-start text-left space-y-5 lg:space-y-6">
                
                <!-- Tag INNOVATE TOGETHER (Frame 59:359) -->
                <div class="inline-flex items-center gap-2 bg-blue-50/90 border border-blue-200/60 text-[#062AAD] px-3.5 py-1 rounded-full text-[12px] font-bold tracking-wider w-fit shadow-2xs">
                    <span class="w-2 h-2 rounded-full bg-[#05A6F5] animate-pulse"></span>
                    <?php echo __('hero_tag'); ?>
                </div>
                
                <!-- Tiêu đề chuẩn Typography Figma (Node 11:76 & Mobile 59:361) -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[52px] font-bold leading-[1.18] tracking-tight text-[#02185D]">
                    <?php echo __('hero_title_1'); ?> <br>
                    <?php echo __('hero_title_2'); ?> <span class="font-playball text-[#71A800] text-4xl sm:text-6xl lg:text-[68px] ml-1 inline-block font-normal"><?php echo __('hero_title_3'); ?></span>
                </h1>
                
                <!-- Mô tả chuẩn Figma (59:362) -->
                <p class="text-[14px] sm:text-[15px] text-[#5B5B5B] max-w-xl leading-relaxed font-normal">
                    <?php echo __('hero_desc'); ?>
                </p>
                
                <!-- 2 Nút Action CTA chuẩn Figma (Frame 59:363) -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 pt-2 w-full sm:w-auto">
                    <!-- Nút Khám Phá Chương Trình -->
                    <a href="chuong-trinh.php" class="bg-[#062AAD] hover:bg-[#02185D] text-white font-semibold text-[14px] rounded-full pl-6 pr-2 py-2.5 transition-all duration-300 shadow-md hover:shadow-lg inline-flex items-center justify-between sm:justify-start gap-3 group">
                        <span><?php echo __('hero_btn_programs'); ?></span>
                        <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1">
                            <i data-lucide="arrow-right" class="w-4 h-4 text-white"></i>
                        </span>
                    </a>
                    
                    <!-- Nút Tìm Hiểu Về CiNEC -->
                    <a href="gioi-thieu.php" class="bg-white border border-slate-200 hover:border-[#062AAD] hover:bg-slate-50 text-slate-700 hover:text-[#062AAD] font-semibold text-[14px] rounded-full px-6 py-3 transition-all duration-300 shadow-2xs inline-flex items-center justify-center gap-2.5">
                        <span><?php echo __('hero_btn_about'); ?></span>
                        <span class="w-6 h-6 rounded-full bg-slate-100 flex items-center justify-center">
                            <i data-lucide="play" class="w-3 h-3 text-slate-600 fill-slate-600 ml-0.5"></i>
                        </span>
                    </a>
                </div>

                <!-- CARD XEM VIDEO GIỚI THIỆU TRÊN DI ĐỘNG (Frame 2147223520 & Frame 59:382 chuẩn Figma Mobile) -->
                <div class="block lg:hidden w-full pt-3">
                    <a href="https://www.youtube.com/watch?v=RrLEWgSEnmk" 
                       onclick="openCinecVideoModal(event, 'RrLEWgSEnmk')" 
                       class="group flex items-center justify-between gap-3 bg-slate-900/90 hover:bg-slate-900 backdrop-blur-md border border-white/20 rounded-2xl p-3.5 shadow-xl transition-all duration-300 cursor-pointer w-full">
                        <div class="flex items-center gap-3.5 min-w-0">
                            <!-- Nút tròn xanh neon play (Frame 59:383) -->
                            <div class="w-12 h-12 rounded-2xl bg-[#C1FF72] flex items-center justify-center text-[#71A800] shrink-0 shadow-sm group-hover:scale-105 transition-transform">
                                <i data-lucide="play" class="w-5 h-5 fill-[#71A800] text-[#71A800] ml-0.5"></i>
                            </div>
                            <!-- 2 Dòng chữ chuẩn Figma Mobile (59:387 & 59:388) -->
                            <div class="text-left text-white min-w-0 space-y-0.5">
                                <span class="text-[13px] font-bold block leading-tight text-white group-hover:text-cyan-200 transition-colors truncate">
                                    <?php echo __('hero_video_title'); ?>
                                </span>
                                <span class="text-[12px] font-medium text-[#C1FF72] flex items-center gap-1">
                                    <span><?php echo __('hero_video_action'); ?></span>
                                    <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                        </div>
                        <div class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center text-white/80 shrink-0">
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Cột phải giữ khoảng trống layout Grid trên Desktop -->
            <div class="lg:col-span-5 hidden lg:block"></div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SECTION 2: STATS METRIC BAR (Desktop: 13:91 | Mobile: Frame 59:425)       -->
    <!-- ========================================================================= -->
    <div class="relative max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 z-20 -mt-6 sm:-mt-14">
        <div class="bg-white rounded-[24px] lg:rounded-[32px] p-5 sm:p-8 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.08)] grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 items-center">
            
            <!-- Stat 1: 120+ Sự kiện (59:426) -->
            <div class="flex items-center gap-3 sm:gap-4 group">
                <div class="w-11 h-11 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-[#F3FBFF] text-[#062AAD] flex items-center justify-center shrink-0 border border-blue-100 group-hover:scale-105 transition-transform">
                    <i data-lucide="calendar" class="w-5 h-5 sm:w-7 sm:h-7 text-[#062AAD]"></i>
                </div>
                <div class="text-left">
                    <span class="text-[22px] sm:text-[28px] lg:text-[32px] font-bold text-[#062AAD] tracking-tight block leading-tight">120+</span>
                    <span class="text-[11.5px] sm:text-[13px] text-[#5B5B5B] font-medium block"><?php echo __('stat_events'); ?></span>
                </div>
            </div>

            <!-- Stat 2: 350+ Startups (59:433) -->
            <div class="flex items-center gap-3 sm:gap-4 group">
                <div class="w-11 h-11 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-[#F3FBFF] text-[#062AAD] flex items-center justify-center shrink-0 border border-blue-100 group-hover:scale-105 transition-transform">
                    <i data-lucide="rocket" class="w-5 h-5 sm:w-7 sm:h-7 text-[#062AAD]"></i>
                </div>
                <div class="text-left">
                    <span class="text-[22px] sm:text-[28px] lg:text-[32px] font-bold text-[#062AAD] tracking-tight block leading-tight">350+</span>
                    <span class="text-[11.5px] sm:text-[13px] text-[#5B5B5B] font-medium block"><?php echo __('stat_startups'); ?></span>
                </div>
            </div>

            <!-- Stat 3: 25+ Đối tác (59:447 - Chuẩn vị trí Figma Mobile dưới bên trái) -->
            <div class="flex items-center gap-3 sm:gap-4 group">
                <div class="w-11 h-11 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-[#F3FBFF] text-[#062AAD] flex items-center justify-center shrink-0 border border-blue-100 group-hover:scale-105 transition-transform">
                    <i data-lucide="globe" class="w-5 h-5 sm:w-7 sm:h-7 text-[#062AAD]"></i>
                </div>
                <div class="text-left">
                    <span class="text-[22px] sm:text-[28px] lg:text-[32px] font-bold text-[#062AAD] tracking-tight block leading-tight">25+</span>
                    <span class="text-[11.5px] sm:text-[13px] text-[#5B5B5B] font-medium block"><?php echo __('stat_partners'); ?></span>
                </div>
            </div>

            <!-- Stat 4: 180+ Mentors (59:440 - Chuẩn vị trí Figma Mobile dưới bên phải) -->
            <div class="flex items-center gap-3 sm:gap-4 group">
                <div class="w-11 h-11 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-[#F3FBFF] text-[#062AAD] flex items-center justify-center shrink-0 border border-blue-100 group-hover:scale-105 transition-transform">
                    <i data-lucide="users" class="w-5 h-5 sm:w-7 sm:h-7 text-[#062AAD]"></i>
                </div>
                <div class="text-left">
                    <span class="text-[22px] sm:text-[28px] lg:text-[32px] font-bold text-[#062AAD] tracking-tight block leading-tight">180+</span>
                    <span class="text-[11.5px] sm:text-[13px] text-[#5B5B5B] font-medium block"><?php echo __('stat_mentors'); ?></span>
                </div>
            </div>

        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- SECTION 3: SƠ ĐỒ CHƯƠNG TRÌNH NỔI BẬT (Desktop: 18:103 | Mobile: 59:513) -->
    <!-- ========================================================================= -->
    <section class="pt-14 pb-10">
        <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-8">
            
            <!-- Tiêu đề Section chuẩn Figma (59:515 & 59:516) -->
            <div class="text-left space-y-1.5">
                <span class="text-[12px] font-bold text-[#062AAD] uppercase tracking-wider block"><?php echo __('prog_sec_badge'); ?></span>
                <h2 class="text-[24px] sm:text-[32px] font-bold text-[#02185D] tracking-tight leading-tight">
                    <?php echo __('prog_sec_title'); ?>
                </h2>
            </div>

            <!-- SƠ ĐỒ MINDMAP CHUẨN FIGMA TRÊN DESKTOP (Frame 79:601) -->
            <div class="hidden lg:block relative w-full max-w-[1070px] mx-auto">
                <img src="assets/img/home_mindmap_diagram.png" alt="Sơ đồ hệ sinh thái CiNEC" class="w-full h-auto object-contain mx-auto drop-shadow-xs">
            </div>

            <!-- SƠ ĐỒ MINDMAP & 4 TRỤ CỘT TRỰC QUAN TRÊN MOBILE (Frame 59:513) -->
            <div class="block lg:hidden space-y-4">
                <!-- Visual Mindmap Sơ đồ hiển thị rõ trên mobile -->
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-xs flex items-center justify-center">
                    <img src="assets/img/home_mindmap_diagram.png" alt="Sơ đồ hệ sinh thái CiNEC" class="w-full h-auto object-contain">
                </div>

                <!-- 4 Capsule Cards điều hướng nhanh đến 4 chương trình thành phần -->
                <div class="grid grid-cols-2 gap-3">
                    <a href="chuong-trinh-platform.php" class="bg-white p-3 rounded-2xl border border-blue-100 shadow-2xs hover:border-[#062AAD] transition-all text-left space-y-1 group">
                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#062AAD] flex items-center justify-center font-bold text-xs">01</div>
                        <h4 class="text-[13px] font-bold text-[#062AAD] group-hover:underline"><?php echo __('prog_platform_title'); ?></h4>
                        <p class="text-[11px] text-slate-500 line-clamp-1">Sandbox & PII</p>
                    </a>

                    <a href="chuong-trinh-journey.php" class="bg-white p-3 rounded-2xl border border-amber-100 shadow-2xs hover:border-amber-500 transition-all text-left space-y-1 group">
                        <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-xs">02</div>
                        <h4 class="text-[13px] font-bold text-amber-700 group-hover:underline"><?php echo __('prog_journey_title'); ?></h4>
                        <p class="text-[11px] text-slate-500 line-clamp-1">4-Step Journey</p>
                    </a>

                    <a href="chuong-trinh-sme.php" class="bg-white p-3 rounded-2xl border border-emerald-100 shadow-2xs hover:border-emerald-500 transition-all text-left space-y-1 group">
                        <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-xs">03</div>
                        <h4 class="text-[13px] font-bold text-emerald-700 group-hover:underline"><?php echo __('prog_sme_title'); ?></h4>
                        <p class="text-[11px] text-slate-500 line-clamp-1">Voucher CĐS</p>
                    </a>

                    <a href="chuong-trinh-talent.php" class="bg-white p-3 rounded-2xl border border-purple-100 shadow-2xs hover:border-purple-500 transition-all text-left space-y-1 group">
                        <div class="w-8 h-8 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center font-bold text-xs">04</div>
                        <h4 class="text-[13px] font-bold text-purple-700 group-hover:underline"><?php echo __('prog_talent_title'); ?></h4>
                        <p class="text-[11px] text-slate-500 line-clamp-1">Scholarships & Lab</p>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SECTION 4: HAI CỘT SỰ KIỆN & TIN TỨC (Desktop: 13:347 | Mobile: 59:763)   -->
    <!-- ========================================================================= -->
    <section class="pt-4 pb-12">
        <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- CỘT TRÁI: SỰ KIỆN SẮP DIỄN RA (Desktop: 6 Cột | Mobile: Frame 59:764) -->
            <div class="lg:col-span-6 bg-white rounded-[24px] lg:rounded-[32px] p-5 sm:p-8 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.08)] space-y-5 text-left">
                <div class="flex justify-between items-center border-b border-slate-100 pb-3">
                    <h3 class="text-[16px] sm:text-[18px] font-bold text-[#062AAD] uppercase tracking-wider"><?php echo __('events_sec_title'); ?></h3>
                    <a href="su-kien.php" class="text-[13px] font-semibold text-[#062AAD] hover:text-[#05A6F5] transition-colors inline-flex items-center gap-1 group">
                        <span><?php echo __('view_all'); ?></span>
                        <i data-lucide="chevron-right" class="w-4 h-4 group-hover:translate-x-0.5 transition-transform"></i>
                    </a>
                </div>
                
                <!-- Danh sách 4 sự kiện chuẩn thẻ thanh ngang Figma (Frame 59:771) -->
                <div class="space-y-3">
                    <?php 
                    $events_list = [
                        ['day' => '25', 'month' => 'MAY', 'title' => 'CiNEC Launch Demo Day 2025', 'time' => '08:00 - 17:00', 'location' => __('event_default_loc')],
                        ['day' => '25', 'month' => 'MAY', 'title' => 'CiNEC Launch Demo Day 2025', 'time' => '08:00 - 17:00', 'location' => __('event_default_loc')],
                        ['day' => '25', 'month' => 'MAY', 'title' => 'CiNEC Launch Demo Day 2025', 'time' => '08:00 - 17:00', 'location' => __('event_default_loc')],
                        ['day' => '25', 'month' => 'MAY', 'title' => 'CiNEC Launch Demo Day 2025', 'time' => '08:00 - 17:00', 'location' => __('event_default_loc')]
                    ];
                    foreach ($events_list as $ev): 
                    ?>
                        <div class="bg-white border border-slate-100 hover:border-blue-200 rounded-2xl p-3 hover:shadow-xs transition-all duration-300 flex items-center justify-between gap-3 group cursor-pointer" onclick="window.location.href='su-kien-chi-tiet.php';">
                            <div class="flex items-center gap-3 min-w-0 flex-1">
                                <!-- Khối ngày tháng chuẩn Figma (Frame 59:774) -->
                                <div class="w-[52px] h-[52px] sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-[#F3FBFF] text-[#062AAD] flex flex-col justify-center items-center shrink-0 font-bold border border-blue-100 group-hover:scale-105 transition-transform">
                                    <span class="text-[18px] sm:text-[20px] leading-none font-bold"><?php echo $ev['day']; ?></span>
                                    <span class="text-[10px] uppercase mt-1 leading-none text-[#062AAD] font-semibold"><?php echo $ev['month']; ?></span>
                                </div>
                                
                                <!-- Thông tin sự kiện (Frame 59:777) -->
                                <div class="min-w-0 space-y-1 flex-1">
                                    <h4 class="text-[13.5px] sm:text-[15px] font-bold text-slate-800 group-hover:text-[#062AAD] transition-colors truncate">
                                        <?php echo $ev['title']; ?>
                                    </h4>
                                    <div class="flex flex-wrap items-center gap-x-3 gap-y-0.5 text-[11.5px] sm:text-[12px] text-[#5B5B5B] font-medium">
                                        <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3.5 h-3.5 text-[#062AAD]"></i> <?php echo $ev['time']; ?></span>
                                        <span class="flex items-center gap-1 truncate"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#062AAD]"></i> <?php echo $ev['location']; ?></span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Nút mũi tên tròn chuẩn Figma (Frame 59:788) -->
                            <div class="w-8 h-8 rounded-full bg-[#F3FBFF] text-[#062AAD] group-hover:bg-[#062AAD] group-hover:text-white flex items-center justify-center transition-all shrink-0">
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- CỘT PHẢI: TIN TỨC & INSIGHT (Desktop: 6 Cột | Mobile: Frame 59:852) -->
            <div class="lg:col-span-6 bg-white rounded-[24px] lg:rounded-[32px] p-5 sm:p-8 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.08)] space-y-5 text-left">
                <div class="flex justify-between items-center border-b border-slate-100 pb-3">
                    <h3 class="text-[16px] sm:text-[18px] font-bold text-[#062AAD] uppercase tracking-wider"><?php echo __('news_sec_title'); ?></h3>
                    <a href="tin-tuc.php" class="text-[13px] font-semibold text-[#062AAD] hover:text-[#05A6F5] transition-colors inline-flex items-center gap-1 group">
                        <span><?php echo __('view_all'); ?></span>
                        <i data-lucide="chevron-right" class="w-4 h-4 group-hover:translate-x-0.5 transition-transform"></i>
                    </a>
                </div>
                
                <div class="space-y-4">
                    <!-- Bài viết lớn trên cùng chuẩn Figma Frame 59:860 -->
                    <a href="tin-tuc.php" class="block relative rounded-2xl overflow-hidden hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group border border-slate-100 h-[150px] sm:h-[210px] w-full bg-slate-900">
                        <img src="assets/img/tintuc_art2.png" alt="Đổi Mới Từ Cà Mau" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        
                        <!-- Lớp phủ gradient tối tăng tương phản chữ -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent pointer-events-none"></div>
                        
                        <!-- 2 Tag: Chuyển đổi số & Nổi bật chuẩn Figma Frame 59:861 -->
                        <div class="absolute top-3.5 left-3.5 flex items-center gap-2 z-10">
                            <span class="bg-white text-[#062AAD] text-[10px] font-bold px-2.5 py-0.5 rounded-full uppercase tracking-wider shadow-xs"><?php echo __('news_tag_digital'); ?></span>
                            <span class="bg-[#71A800] text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full uppercase tracking-wider shadow-xs"><?php echo __('news_tag_featured'); ?></span>
                        </div>
                        
                        <!-- Tiêu đề & Ngày đăng ở chân ảnh chuẩn Figma Frame 59:866 -->
                        <div class="absolute bottom-3 left-3.5 right-3.5 space-y-0.5 z-10 text-left">
                            <h4 class="text-white text-[16px] sm:text-[20px] font-bold leading-snug drop-shadow-md group-hover:text-[#C1FF72] transition-colors">
                                <?php echo current_lang() === 'en' ? 'Innovation From Ca Mau' : 'Đổi Mới Từ Cà Mau'; ?>
                            </h4>
                            <div class="flex items-center gap-2 text-white/80 text-[11.5px] font-medium">
                                <span>20/05/2025</span>
                                <span>•</span>
                                <span>5 <?php echo __('news_read_time'); ?></span>
                            </div>
                        </div>
                    </a>
                    
                    <!-- 2 Bài viết nhỏ hơn dạng List bên dưới chuẩn Figma Frame 59:870 & 59:877 -->
                    <div class="space-y-3 pt-1">
                        <!-- Bài nhỏ 1 -->
                        <a href="tin-tuc.php" class="flex gap-3.5 group cursor-pointer items-center p-2 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="w-[95px] sm:w-[110px] h-[64px] sm:h-[72px] rounded-xl overflow-hidden bg-slate-100 shrink-0 border border-slate-100">
                                <img src="assets/img/tintuc_art1.png" alt="Đánh Thức Con Tàu Khởi Nghiệp Cực Nam" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="space-y-1 flex-1 min-w-0">
                                <h4 class="text-[13.5px] sm:text-[14px] font-bold text-slate-800 group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                    <?php echo current_lang() === 'en' ? 'Awakening Southernmost Startup Vessel' : 'Đánh Thức Con Tàu Khởi Nghiệp Cực Nam'; ?>
                                </h4>
                                <div class="flex items-center gap-2 text-[11.5px] text-slate-400">
                                    <span>20/05/2025</span>
                                    <span>•</span>
                                    <span>5 <?php echo __('news_read_time'); ?></span>
                                </div>
                            </div>
                        </a>
                        
                        <!-- Bài nhỏ 2 -->
                        <a href="tin-tuc.php" class="flex gap-3.5 group cursor-pointer items-center p-2 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="w-[95px] sm:w-[110px] h-[64px] sm:h-[72px] rounded-xl overflow-hidden bg-slate-100 shrink-0 border border-slate-100">
                                <img src="assets/img/home_news_art2.png" alt="Cà Mau đẩy mạnh chuyển đổi số" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="space-y-1 flex-1 min-w-0">
                                <h4 class="text-[13.5px] sm:text-[14px] font-bold text-slate-800 group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                    <?php echo current_lang() === 'en' ? 'Ca Mau boosts digital transformation for sustainable growth.' : 'Cà Mau đẩy mạnh chuyển đổi số hướng tới phát triển bền vững.'; ?>
                                </h4>
                                <div class="flex items-center gap-2 text-[11.5px] text-slate-400">
                                    <span>20/05/2025</span>
                                    <span>•</span>
                                    <span>5 <?php echo __('news_read_time'); ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SECTION 5: MẠNG LƯỚI ĐỐI TÁC (Desktop: 19:187 | Mobile: Frame 59:929)     -->
    <!-- ========================================================================= -->
    <section class="pt-2 pb-12">
        <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-5">
            <div class="flex justify-between items-center text-left">
                <h3 class="text-[13px] sm:text-[14px] font-bold text-[#062AAD] uppercase tracking-wider"><?php echo __('partners_sec_title'); ?></h3>
                <a href="doi-tac.php" class="text-[13px] font-semibold text-[#062AAD] hover:text-[#05A6F5] transition-colors inline-flex items-center gap-1 group">
                    <span><?php echo __('view_all'); ?></span>
                    <i data-lucide="chevron-right" class="w-4 h-4 group-hover:translate-x-0.5 transition-transform"></i>
                </a>
            </div>
            
            <!-- Logo Đối Tác: Cuộn ngang trên Mobile (Frame 59:929) & Lưới trên Desktop -->
            <div class="flex md:grid md:grid-cols-5 gap-3.5 sm:gap-4 overflow-x-auto pb-2 md:pb-0 scrollbar-none snap-x">
                <!-- 1. DBC -->
                <div class="min-w-[132px] md:min-w-0 h-[76px] md:h-24 bg-white border border-slate-200/70 rounded-2xl p-3 flex items-center justify-center shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group cursor-pointer snap-start shrink-0 md:shrink">
                    <img src="assets/img/partner_logo_dbc.png" alt="DBC" class="max-h-9 md:max-h-12 max-w-[100px] md:max-w-[130px] object-contain group-hover:scale-105 transition-transform">
                </div>

                <!-- 2. KVIP -->
                <div class="min-w-[132px] md:min-w-0 h-[76px] md:h-24 bg-white border border-slate-200/70 rounded-2xl p-3 flex items-center justify-center shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group cursor-pointer snap-start shrink-0 md:shrink">
                    <img src="assets/img/partner_logo_kvip.png" alt="KVIP" class="max-h-9 md:max-h-12 max-w-[100px] md:max-w-[130px] object-contain group-hover:scale-105 transition-transform">
                </div>

                <!-- 3. NIIC -->
                <div class="min-w-[132px] md:min-w-0 h-[76px] md:h-24 bg-white border border-slate-200/70 rounded-2xl p-3 flex items-center justify-center shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group cursor-pointer snap-start shrink-0 md:shrink">
                    <img src="assets/img/partner_logo_niic.png" alt="NIIC" class="max-h-9 md:max-h-12 max-w-[100px] md:max-w-[130px] object-contain group-hover:scale-105 transition-transform">
                </div>

                <!-- 4. IOI -->
                <div class="min-w-[132px] md:min-w-0 h-[76px] md:h-24 bg-white border border-slate-200/70 rounded-2xl p-3 flex items-center justify-center shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group cursor-pointer snap-start shrink-0 md:shrink">
                    <img src="assets/img/partner_logo_ioi.png" alt="IOI" class="max-h-9 md:max-h-12 max-w-[100px] md:max-w-[130px] object-contain group-hover:scale-105 transition-transform">
                </div>

                <!-- 5. Google for Startups / Đối tác chiến lược -->
                <div class="min-w-[132px] md:min-w-0 h-[76px] md:h-24 bg-white border border-slate-200/70 rounded-2xl p-3 flex items-center justify-center shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group cursor-pointer snap-start shrink-0 md:shrink">
                    <img src="assets/img/partner_logo_niic.png" alt="Google for Startups" class="max-h-9 md:max-h-12 max-w-[100px] md:max-w-[130px] object-contain group-hover:scale-105 transition-transform">
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SECTION 6: CTA BANNER (Desktop: Frame 19:186 | Mobile: Frame 59:1142)     -->
    <!-- ========================================================================= -->
    <section class="pt-2 pb-16">
        <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20">
            
            <!-- Banner Desktop: Ảnh đồ họa gốc Figma (Frame 19:186) -->
            <div class="hidden sm:block">
                <a href="lien-he.php" class="block relative rounded-[28px] lg:rounded-[36px] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 group cursor-pointer border border-blue-900/30">
                    <img src="assets/img/home_cta_bg.png" alt="<?php echo __('cta_title'); ?>" class="w-full h-auto object-cover group-hover:scale-[1.01] transition-transform duration-500">
                </a>
            </div>

            <!-- Banner Mobile: Thiết kế responsive HTML chuẩn Figma Mobile Frame 59:994 -->
            <div class="block sm:hidden">
                <div class="rounded-[24px] bg-gradient-to-r from-[#02185D] via-[#02185D] to-[#062AAD] p-6 text-left relative overflow-hidden shadow-xl border border-blue-900/40 space-y-4">
                    <!-- Đồ họa nền mờ -->
                    <div class="absolute -right-10 -bottom-10 w-44 h-44 bg-[#05A6F5]/20 rounded-full blur-2xl pointer-events-none"></div>
                    
                    <h3 class="text-[20px] font-bold text-white leading-tight">
                        <?php echo __('cta_title'); ?>
                    </h3>
                    
                    <p class="text-[13px] text-slate-200 leading-relaxed font-normal">
                        <?php echo __('cta_desc'); ?>
                    </p>
                    
                    <div class="pt-1">
                        <a href="lien-he.php" class="bg-[#062AAD] hover:bg-[#02185D] text-white font-semibold text-[13.5px] rounded-full pl-5 pr-2 py-2 transition-all duration-300 shadow-md inline-flex items-center gap-3 group border border-white/20">
                            <span><?php echo __('cta_btn'); ?></span>
                            <span class="w-7 h-7 rounded-full bg-white/20 flex items-center justify-center transition-transform group-hover:translate-x-1">
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-white"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>

<!-- MODAL XEM VIDEO YOUTUBE CINEC CHUẨN POPUP -->
<div id="cinec-video-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-md hidden flex items-center justify-center p-4 transition-all duration-300">
    <div class="relative w-full max-w-4xl bg-slate-900 rounded-3xl overflow-hidden shadow-2xl border border-white/10 aspect-video">
        <!-- Nút đóng -->
        <button onclick="closeCinecVideoModal()" class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-black/60 hover:bg-black/90 text-white flex items-center justify-center transition-colors">
            <i data-lucide="x" class="w-5 h-5"></i>
        </button>
        <!-- Iframe Video -->
        <iframe id="cinec-youtube-iframe" class="w-full h-full" src="" title="Video Giới Thiệu CiNEC" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>

<script>
function openCinecVideoModal(event, videoId) {
    if (event) event.preventDefault();
    const modal = document.getElementById('cinec-video-modal');
    const iframe = document.getElementById('cinec-youtube-iframe');
    if (modal && iframe) {
        iframe.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0';
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
}

function closeCinecVideoModal() {
    const modal = document.getElementById('cinec-video-modal');
    const iframe = document.getElementById('cinec-youtube-iframe');
    if (modal && iframe) {
        iframe.src = '';
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }
}

// Bấm phím Escape hoặc bấm ngoài nền để đóng modal
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeCinecVideoModal();
});
document.getElementById('cinec-video-modal')?.addEventListener('click', function(e) {
    if (e.target === this) closeCinecVideoModal();
});
</script>

<?php
require_once 'includes/footer.php';
?>
