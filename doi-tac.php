<?php
require_once 'config/db.php';
require_once 'config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
$page_title = $is_en ? "CiNEC Partners - Innovation & Startup Ecosystem" : "Đối Tác CiNEC - Hệ sinh thái Đổi mới sáng tạo Cà Mau";
require_once 'includes/header.php';

// Active Tab từ URL tham số ?tab=... (Mặc định: quy-dau-tu)
$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'quy-dau-tu';
?>

<!-- TRANG ĐỐI TÁC CHUẨN 100% CẤU TRÚC FIGMA (Node 115:2351 BILINGUAL) -->
<div class="bg-[#F7FAFD] min-h-screen pt-28 pb-20 font-sans">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-12">

        <!-- BREADCRUMBS BAR (Chuẩn Figma Node 97:753) -->
        <nav class="flex items-center gap-2 text-[14px] leading-[20px] font-medium text-[#062AAD]" aria-label="Breadcrumb">
            <a href="index.php" class="hover:text-[#05A6F5] transition-colors"><?php echo __('nav_home'); ?></a>
            <i data-lucide="chevron-right" class="w-4 h-4 text-[#062AAD]/70 shrink-0"></i>
            <span class="font-semibold text-[#062AAD]"><?php echo __('nav_partners'); ?></span>
        </nav>

        <!-- HERO TOP BANNER (Chuẩn Figma Frame 2147223430) -->
        <div class="relative bg-white rounded-[24px] lg:rounded-[32px] p-6 sm:p-10 lg:p-12 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] overflow-hidden min-h-[340px] lg:min-h-[380px] flex items-center">
            
            <div class="absolute right-0 top-0 bottom-0 w-full lg:w-[52%] h-full bg-contain bg-right bg-no-repeat pointer-events-none hidden lg:block"
                 style="background-image: url('assets/img/doitac_hero_graphic.png'); background-position: right center;">
            </div>

            <!-- Khối văn bản & CTA bên trái -->
            <div class="relative z-10 max-w-2xl space-y-5 text-left">
                <div class="space-y-2.5">
                    <h1 class="text-[32px] sm:text-[40px] lg:text-[48px] font-bold text-[#062AAD] leading-[1.15] tracking-tight">
                        <?php echo $is_en ? 'CiNEC' : 'Đối tác'; ?> <span class="text-[#71A800]"><?php echo $is_en ? 'Partners' : 'CiNEC'; ?></span>
                    </h1>
                    <p class="text-[16px] sm:text-[17px] font-semibold text-[#02185D] leading-snug">
                        <?php echo $is_en 
                            ? 'Accompany - Connect - Shaping the Future of Innovation'
                            : 'Đồng hành - Kết nối - Kiến tạo tương lai đổi mới sáng tạo'; ?>
                    </p>
                    <p class="text-[14px] sm:text-[15px] text-[#5B5B5B] font-normal leading-relaxed max-w-xl">
                        <?php echo $is_en 
                            ? 'CiNEC collaborates with venture funds, incubators, universities, and industry mentors to empower startups to commercialize and scale internationally, bolstering regional socioeconomic prosperity.'
                            : 'CiNEC hợp tác cùng các tổ chức, quỹ đầu tư, chuyên gia và doanh nghiệp để hỗ trợ startup phát triển, thương mại hóa và vươn ra thị trường quốc tế, đóng góp vào sự phát triển kinh tế - xã hội bền vững của Cà Mau.'; ?>
                    </p>
                </div>

                <!-- 2 Nút Action CTA chuẩn Figma -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="lien-he.php" class="bg-[#062AAD] hover:bg-[#02185D] text-white font-semibold text-[14px] rounded-full pl-6 pr-2 py-2 transition-all duration-300 shadow-md hover:shadow-lg inline-flex items-center gap-3 group">
                        <span><?php echo $is_en ? 'Become a Partner' : 'Trở thành đối tác'; ?></span>
                        <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1">
                            <i data-lucide="arrow-right" class="w-4 h-4 text-white"></i>
                        </span>
                    </a>
                    
                    <a href="assets/tailieu/ho-so-doi-tac-cinec.pdf" target="_blank" download class="bg-white border border-slate-200/90 hover:border-[#062AAD] hover:bg-slate-50 text-[#062AAD] font-semibold text-[14px] rounded-full px-6 py-3 transition-all duration-300 shadow-xs inline-flex items-center gap-2">
                        <span><?php echo $is_en ? 'Download Partner Dossier' : 'Tải hồ sơ đối tác CiNEC'; ?></span>
                        <i data-lucide="download" class="w-4 h-4 text-[#062AAD]"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- SECTION 2: CƠ HỘI HỢP TÁC & TÀI TRỢ CÙNG CINEC (4 Thẻ hàng ngang - Chuẩn Figma Frame 2147223633) -->
        <section class="space-y-8">
            <h2 class="text-[26px] sm:text-[30px] lg:text-[32px] font-bold text-[#062AAD] text-center tracking-tight">
                <?php echo $is_en ? 'Partnership & Sponsorship Opportunities' : 'Cơ hội hợp tác & tài trợ cùng CiNEC'; ?>
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1: Tài trợ chiến lược -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between items-center text-center space-y-4 group">
                    <div class="w-20 h-20 flex items-center justify-center shrink-0">
                        <img src="assets/img/doitac_ic_chienluoc.png" alt="Tài trợ chiến lược" class="w-16 h-16 object-contain group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="space-y-2 flex-1">
                        <h3 class="text-[18px] font-bold text-[#062AAD]"><?php echo $is_en ? 'Strategic Sponsorship' : 'Tài trợ chiến lược'; ?></h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed font-normal">
                            <?php echo $is_en ? 'Long-term partnership with CiNEC across core incubation programs, flagship summits, and innovation labs.' : 'Đồng hành dài hạn cùng CINEC trong các chương trình ươm tạo, sự kiện và hoạt động đổi mới sáng tạo.'; ?>
                        </p>
                    </div>
                    <a href="doi-tac.php?tab=hop-tac-tai-tro#partner-tabs-section" class="text-[13px] font-semibold text-[#062AAD] hover:text-[#05A6F5] inline-flex items-center gap-1.5 transition-colors pt-2 group-hover:translate-x-0.5">
                        <span><?php echo $is_en ? 'View Details' : 'Xem chi tiết'; ?></span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Card 2: Tài trợ chương trình -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between items-center text-center space-y-4 group">
                    <div class="w-20 h-20 flex items-center justify-center shrink-0">
                        <img src="assets/img/doitac_ic_chuongtrinh.png" alt="Tài trợ chương trình" class="w-16 h-16 object-contain group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="space-y-2 flex-1">
                        <h3 class="text-[18px] font-bold text-[#062AAD]"><?php echo $is_en ? 'Program Sponsorship' : 'Tài trợ chương trình'; ?></h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed font-normal">
                            <?php echo $is_en ? 'Sponsor targeted competitions, hackathons, masterclasses, and acceleration workshops.' : 'Tài trợ cho các chương trình cụ thể như cuộc thi, hackathon, workshop, đào tạo, v.v.'; ?>
                        </p>
                    </div>
                    <a href="doi-tac.php?tab=hop-tac-tai-tro#partner-tabs-section" class="text-[13px] font-semibold text-[#062AAD] hover:text-[#05A6F5] inline-flex items-center gap-1.5 transition-colors pt-2 group-hover:translate-x-0.5">
                        <span><?php echo $is_en ? 'View Details' : 'Xem chi tiết'; ?></span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Card 3: Truyền thông & thương hiệu -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between items-center text-center space-y-4 group">
                    <div class="w-20 h-20 flex items-center justify-center shrink-0">
                        <img src="assets/img/doitac_ic_truyenthong.png" alt="Truyền thông & thương hiệu" class="w-16 h-16 object-contain group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="space-y-2 flex-1">
                        <h3 class="text-[18px] font-bold text-[#062AAD]"><?php echo $is_en ? 'Media & Brand Elevation' : 'Truyền thông & thương hiệu'; ?></h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed font-normal">
                            <?php echo $is_en ? 'Broadcast your brand across CiNEC media channels and nationwide partner ecosystems.' : 'Quảng bá thương hiệu trên các kênh truyền thông của CINEC và trong hệ sinh thái đó.'; ?>
                        </p>
                    </div>
                    <a href="doi-tac.php?tab=hop-tac-tai-tro#partner-tabs-section" class="text-[13px] font-semibold text-[#062AAD] hover:text-[#05A6F5] inline-flex items-center gap-1.5 transition-colors pt-2 group-hover:translate-x-0.5">
                        <span><?php echo $is_en ? 'View Details' : 'Xem chi tiết'; ?></span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Card 4: Cộng đồng & trách nhiệm xã hội -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between items-center text-center space-y-4 group">
                    <div class="w-20 h-20 flex items-center justify-center shrink-0">
                        <img src="assets/img/doitac_ic_congdong.png" alt="Cộng đồng & trách nhiệm xã hội" class="w-16 h-16 object-contain group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="space-y-2 flex-1">
                        <h3 class="text-[18px] font-bold text-[#062AAD]"><?php echo $is_en ? 'Community & CSR Impact' : 'Cộng đồng & trách nhiệm xã hội'; ?></h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed font-normal">
                            <?php echo $is_en ? 'Join CiNEC in advancing community digital literacy, youth scholarships, and green development.' : 'Cùng CINEC đóng góp cho cộng đồng, phát triển nguồn nhân lực và hỗ trợ startup địa phương.'; ?>
                        </p>
                    </div>
                    <a href="doi-tac.php?tab=hop-tac-tai-tro#partner-tabs-section" class="text-[13px] font-semibold text-[#062AAD] hover:text-[#05A6F5] inline-flex items-center gap-1.5 transition-colors pt-2 group-hover:translate-x-0.5">
                        <span><?php echo $is_en ? 'View Details' : 'Xem chi tiết'; ?></span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- SECTION 3: THANH BỘ LỌC TABS & NỘI DUNG 6 HẠNG MỤC CHUẨN FIGMA (Frame 2147223619) -->
        <div id="partner-tabs-section" class="space-y-10 pt-4">
            
            <!-- THANH 6 TAB PHÂN LOẠI ĐỐI TÁC CHUẨN FIGMA -->
            <div class="flex items-center justify-center gap-4 lg:gap-8 border-b border-slate-200/80 pb-2 overflow-x-auto text-[15px] font-semibold scrollbar-none">
                <a href="doi-tac.php?tab=quy-dau-tu#partner-tabs-section" class="shrink-0 pb-3 transition-all <?php echo $active_tab == 'quy-dau-tu' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-bold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    <?php echo $is_en ? 'Investment Funds' : 'Quỹ đầu tư'; ?>
                </a>
                <a href="doi-tac.php?tab=ban-co-van#partner-tabs-section" class="shrink-0 pb-3 transition-all <?php echo $active_tab == 'ban-co-van' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-bold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    <?php echo $is_en ? 'Advisory Board' : 'Ban cố vấn'; ?>
                </a>
                <a href="doi-tac.php?tab=mentors#partner-tabs-section" class="shrink-0 pb-3 transition-all <?php echo $active_tab == 'mentors' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-bold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    <?php echo $is_en ? 'Mentors & Experts' : 'Mentors'; ?>
                </a>
                <a href="doi-tac.php?tab=du-an-khoi-nghiep#partner-tabs-section" class="shrink-0 pb-3 transition-all <?php echo $active_tab == 'du-an-khoi-nghiep' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-bold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    <?php echo $is_en ? 'Startup Projects' : 'Dự án khởi nghiệp'; ?>
                </a>
                <a href="doi-tac.php?tab=doanh-nghiep-khoi-nghiep#partner-tabs-section" class="shrink-0 pb-3 transition-all <?php echo $active_tab == 'doanh-nghiep-khoi-nghiep' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-bold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    <?php echo $is_en ? 'Startup Enterprises' : 'Doanh nghiệp khởi nghiệp'; ?>
                </a>
                <a href="doi-tac.php?tab=hop-tac-tai-tro#partner-tabs-section" class="shrink-0 pb-3 transition-all <?php echo $active_tab == 'hop-tac-tai-tro' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-bold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    <?php echo $is_en ? 'Partnership & Sponsorship' : 'Hợp tác & tài trợ'; ?>
                </a>
            </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 1: QUỸ ĐẦU TƯ (FIGMA FRAME: Đối tác - Quỹ đầu tư 97:890)        -->
            <!-- ========================================================================= -->
            <?php if ($active_tab == 'quy-dau-tu'): ?>
                <div class="space-y-6 text-left">
                    <div class="space-y-2 max-w-3xl">
                        <h3 class="text-[24px] font-bold text-[#062AAD]">
                            <?php echo $is_en ? 'Investment Funds & Venture Capital' : 'Quỹ đầu tư đồng hành'; ?>
                        </h3>
                        <p class="text-[14px] text-[#5B5B5B] font-normal leading-relaxed">
                            <?php echo $is_en 
                                ? 'CiNEC connects startups with reputable domestic and international VC funds, facilitating fundraising, scaling, and market expansion.'
                                : 'CiNEC kết nối startup với các quỹ đầu tư uy tín trong và ngoài nước, hỗ trợ gọi vốn, tăng trưởng và mở rộng thị trường.'; ?>
                        </p>
                        <div class="pt-1">
                            <a href="lien-he.php" class="inline-flex items-center gap-2 border border-blue-200/80 text-[#062AAD] hover:bg-blue-50 font-semibold text-[13px] rounded-full px-5 py-2 transition-colors">
                                <span><?php echo $is_en ? 'Explore Partnership Programs' : 'Xem chương trình hợp tác'; ?></span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Lưới 10 Card Logo Quỹ Đầu Tư Chuẩn Figma (Frame 97:891) -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 lg:gap-5">
                        
                        <!-- Card 1: DBC -->
                        <div class="bg-white border border-slate-200/70 rounded-2xl p-4 h-32 flex flex-col items-center justify-center shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer space-y-2 text-center">
                            <div class="h-14 flex items-center justify-center">
                                <img src="assets/img/partner_logo_dbc.png" alt="DBC" class="max-h-12 max-w-[130px] object-contain group-hover:scale-105 transition-transform">
                            </div>
                            <span class="text-[12px] text-[#5B5B5B] font-medium"><?php echo $is_en ? 'Investment Fund' : 'Quỹ đầu tư'; ?></span>
                        </div>

                        <!-- Card 2: KVIP -->
                        <div class="bg-white border border-slate-200/70 rounded-2xl p-4 h-32 flex flex-col items-center justify-center shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer space-y-2 text-center">
                            <div class="h-14 flex items-center justify-center">
                                <img src="assets/img/partner_logo_kvip.png" alt="KVIP" class="max-h-12 max-w-[130px] object-contain group-hover:scale-105 transition-transform">
                            </div>
                            <span class="text-[12px] text-[#5B5B5B] font-medium"><?php echo $is_en ? 'Startup Support Fund' : 'Quỹ hỗ trợ khởi nghiệp'; ?></span>
                        </div>

                        <!-- Card 3: NIIC -->
                        <div class="bg-white border border-slate-200/70 rounded-2xl p-4 h-32 flex flex-col items-center justify-center shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer space-y-2 text-center">
                            <div class="h-14 flex items-center justify-center">
                                <img src="assets/img/partner_logo_niic.png" alt="NIIC" class="max-h-12 max-w-[130px] object-contain group-hover:scale-105 transition-transform">
                            </div>
                            <span class="text-[12px] text-[#5B5B5B] font-medium"><?php echo $is_en ? 'Investment Fund' : 'Quỹ đầu tư'; ?></span>
                        </div>

                        <!-- Card 4: KVIP -->
                        <div class="bg-white border border-slate-200/70 rounded-2xl p-4 h-32 flex flex-col items-center justify-center shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer space-y-2 text-center">
                            <div class="h-14 flex items-center justify-center">
                                <img src="assets/img/partner_logo_kvip.png" alt="KVIP" class="max-h-12 max-w-[130px] object-contain group-hover:scale-105 transition-transform">
                            </div>
                            <span class="text-[12px] text-[#5B5B5B] font-medium"><?php echo $is_en ? 'Startup Support Fund' : 'Quỹ hỗ trợ khởi nghiệp'; ?></span>
                        </div>

                        <!-- Card 5: DBC -->
                        <div class="bg-white border border-slate-200/70 rounded-2xl p-4 h-32 flex flex-col items-center justify-center shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer space-y-2 text-center">
                            <div class="h-14 flex items-center justify-center">
                                <img src="assets/img/partner_logo_dbc.png" alt="DBC" class="max-h-12 max-w-[130px] object-contain group-hover:scale-105 transition-transform">
                            </div>
                            <span class="text-[12px] text-[#5B5B5B] font-medium"><?php echo $is_en ? 'Investment Fund' : 'Quỹ đầu tư'; ?></span>
                        </div>
                    </div>
                </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 2: BAN CỐ VẤN (FIGMA FRAME: Đối tác - Ban cố vấn 97:1443)       -->
            <!-- ========================================================================= -->
            <?php elseif ($active_tab == 'ban-co-van'): ?>
                <div class="space-y-8 text-left">
                    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 border-b border-slate-200 pb-4">
                        <div class="space-y-2 max-w-3xl">
                            <h3 class="text-[24px] font-bold text-[#062AAD]">
                                <?php echo $is_en ? 'Specialized Advisory Board' : 'Ban cố vấn chuyên môn'; ?>
                            </h3>
                            <p class="text-[14px] text-[#5B5B5B] font-normal leading-relaxed">
                                <?php echo $is_en 
                                    ? 'Distinguished industry leaders and senior experts partnering with CiNEC to steer strategic directions and empower regional startups.'
                                    : 'Các chuyên gia, nhà lãnh đạo giàu kinh nghiệm trong nhiều lĩnh vực đồng hành cùng CINEC định hướng chiến lược và hỗ trợ startup.'; ?>
                            </p>
                        </div>
                        <a href="lien-he.php" class="inline-flex items-center gap-2 border border-blue-200/80 text-[#062AAD] hover:bg-blue-50 font-semibold text-[13px] rounded-full px-5 py-2 transition-colors shrink-0">
                            <span><?php echo $is_en ? 'Explore Partnership Programs' : 'Xem chương trình hợp tác'; ?></span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                    <!-- Lưới Card Ban Cố Vấn -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Advisory 1 -->
                        <div class="bg-white rounded-2xl p-5 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] flex flex-col justify-between hover:shadow-md hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_female.jpg" alt="TS. Nguyễn Thùy A" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[11px] font-bold uppercase text-[#05A6F5] tracking-wider">
                                        <?php echo $is_en ? 'Innovation & Entrepreneurship' : 'Đổi Mới Sáng Tạo & Khởi Nghiệp'; ?>
                                    </span>
                                    <h4 class="text-[17px] font-bold text-[#062AAD]">TS. Nguyễn Thùy A</h4>
                                    <p class="text-[13px] text-[#5B5B5B] font-medium">
                                        <?php echo $is_en ? 'Senior Innovation & Startup Specialist' : 'Chuyên gia Đổi mới sáng tạo & Khởi nghiệp'; ?>
                                    </p>
                                </div>
                                <p class="text-[13px] text-[#5B5B5B] line-clamp-3 leading-relaxed">
                                    <?php echo $is_en 
                                        ? '15+ years of strategic corporate advising, Sandbox policymaking, and innovation ecosystem building across the Mekong Delta region.'
                                        : '15+ năm cố vấn chiến lược doanh nghiệp, hoạch định chính sách Sandbox và hệ sinh thái ĐMST khu vực ĐBSCL.'; ?>
                                </p>
                            </div>
                            <!-- Icon mạng xã hội / Liên hệ -->
                            <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] font-semibold text-slate-400">
                                    <?php echo $is_en ? 'Connect with expert:' : 'Kết nối chuyên gia:'; ?>
                                </span>
                                <div class="flex items-center gap-2">
                                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-lg border border-[#062AAD]/30 text-[#062AAD] hover:bg-[#062AAD] hover:text-white flex items-center justify-center transition-all duration-300 shadow-2xs" aria-label="LinkedIn">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                    <a href="mailto:contact@cinec.com.vn" class="w-7 h-7 rounded-lg border border-slate-200 text-slate-500 hover:border-[#062AAD] hover:text-[#062AAD] hover:bg-blue-50/50 flex items-center justify-center transition-all duration-300 shadow-2xs" aria-label="Email">
                                        <i data-lucide="mail" class="w-3.5 h-3.5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Advisory 2 -->
                        <div class="bg-white rounded-2xl p-5 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] flex flex-col justify-between hover:shadow-md hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_male1.jpg" alt="GS. TS. Trần Văn B" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[11px] font-bold uppercase text-blue-600 tracking-wider">
                                        <?php echo $is_en ? 'Digital Transformation & Economy' : 'Chuyển Đổi Số & Kinh Tế Số'; ?>
                                    </span>
                                    <h4 class="text-[17px] font-bold text-[#062AAD]">GS. TS. Trần Văn B</h4>
                                    <p class="text-[13px] text-[#5B5B5B] font-medium">
                                        <?php echo $is_en ? 'Former Director, Innovation Research Institute' : 'Nguyên Viện trưởng Viện Nghiên cứu ĐMST'; ?>
                                    </p>
                                </div>
                                <p class="text-[13px] text-[#5B5B5B] line-clamp-3 leading-relaxed">
                                    <?php echo $is_en 
                                        ? 'Leading expert in big data, artificial intelligence, and provincial PII innovation index measurement frameworks.'
                                        : 'Chuyên gia đầu ngành về dữ liệu số, trí tuệ nhân tạo và các đề án đo lường Bộ chỉ số PII cấp tỉnh.'; ?>
                                </p>
                            </div>
                            <!-- Icon mạng xã hội / Liên hệ -->
                            <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] font-semibold text-slate-400">
                                    <?php echo $is_en ? 'Connect with expert:' : 'Kết nối chuyên gia:'; ?>
                                </span>
                                <div class="flex items-center gap-2">
                                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-lg border border-[#062AAD]/30 text-[#062AAD] hover:bg-[#062AAD] hover:text-white flex items-center justify-center transition-all duration-300 shadow-2xs" aria-label="LinkedIn">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                    <a href="mailto:contact@cinec.com.vn" class="w-7 h-7 rounded-lg border border-slate-200 text-slate-500 hover:border-[#062AAD] hover:text-[#062AAD] hover:bg-blue-50/50 flex items-center justify-center transition-all duration-300 shadow-2xs" aria-label="Email">
                                        <i data-lucide="mail" class="w-3.5 h-3.5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Advisory 3 -->
                        <div class="bg-white rounded-2xl p-5 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] flex flex-col justify-between hover:shadow-md hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_male2.jpg" alt="Ông Lê Hoàng C" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[11px] font-bold uppercase text-amber-600 tracking-wider">
                                        <?php echo $is_en ? 'Technology Commercialization' : 'Thương Mại Hóa Công Nghệ'; ?>
                                    </span>
                                    <h4 class="text-[17px] font-bold text-[#062AAD]">Ông Lê Hoàng C</h4>
                                    <p class="text-[13px] text-[#5B5B5B] font-medium">
                                        <?php echo $is_en ? 'Managing Director, Mekong Venture Capital' : 'Giám đốc Quỹ Đầu tư Mạo hiểm Mekong'; ?>
                                    </p>
                                </div>
                                <p class="text-[13px] text-[#5B5B5B] line-clamp-3 leading-relaxed">
                                    <?php echo $is_en 
                                        ? 'Incubation project appraisal, seed capital structuring, and angel investor syndicate networking across domestic and global markets.'
                                        : 'Thẩm định dự án ươm tạo, cấu trúc vốn mồi và liên kết mạng lưới nhà đầu tư thiên thần trong và ngoài nước.'; ?>
                                </p>
                            </div>
                            <!-- Icon mạng xã hội / Liên hệ -->
                            <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-[11px] font-semibold text-slate-400">
                                    <?php echo $is_en ? 'Connect with expert:' : 'Kết nối chuyên gia:'; ?>
                                </span>
                                <div class="flex items-center gap-2">
                                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-lg border border-[#062AAD]/30 text-[#062AAD] hover:bg-[#062AAD] hover:text-white flex items-center justify-center transition-all duration-300 shadow-2xs" aria-label="LinkedIn">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                    <a href="mailto:contact@cinec.com.vn" class="w-7 h-7 rounded-lg border border-slate-200 text-slate-500 hover:border-[#062AAD] hover:text-[#062AAD] hover:bg-blue-50/50 flex items-center justify-center transition-all duration-300 shadow-2xs" aria-label="Email">
                                        <i data-lucide="mail" class="w-3.5 h-3.5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 3: MENTORS (FIGMA FRAME: Đối tác - Mentors 97:2219)             -->
            <!-- ========================================================================= -->
            <?php elseif ($active_tab == 'mentors'): ?>
                <div class="space-y-8 text-left">
                    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 border-b border-slate-200 pb-4">
                        <div class="space-y-2 max-w-2xl">
                            <h3 class="text-[24px] font-bold text-[#062AAD]">
                                <?php echo $is_en ? 'Dedicated Mentors' : 'Mentors đồng hành'; ?>
                            </h3>
                            <p class="text-[14px] text-[#5B5B5B] font-normal leading-relaxed">
                                <?php echo $is_en 
                                    ? 'A dedicated network of entrepreneurs, industry leaders, and executives guiding startups from ideation to scale-up and fundraising.'
                                    : 'Đội ngũ mentor là doanh nhân, chuyên gia, nhà quản lý hỗ trợ startup từ giai đoạn ý tưởng đến tăng trưởng và gọi vốn.'; ?>
                            </p>
                        </div>

                        <button onclick="openMentorModal('<?php echo $is_en ? 'CiNEC Assigns Suitable Mentor' : 'CiNEC chỉ định Mentor phù hợp'; ?>', 'assets/img/intro-building.jpg', '<?php echo $is_en ? 'Expert Appraisal Board' : 'Ban chuyên môn thẩm định'; ?>')" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-to-r from-[#062AAD] to-[#05A6F5] hover:from-[#02185D] hover:to-[#062AAD] text-white font-semibold text-[13px] transition-all shadow-md hover:-translate-y-0.5 shrink-0">
                            <i data-lucide="calendar-plus" class="w-4 h-4 text-[#C1FF72]"></i>
                            <span><?php echo $is_en ? 'Book 1:1 Mentor Session' : 'Đăng ký kết nối Mentor 1:1'; ?></span>
                        </button>
                    </div>

                    <!-- Lưới Mentor Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Mentor 1 -->
                        <div class="bg-white rounded-2xl p-5 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] flex flex-col justify-between hover:shadow-md hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/avatar_deputy1.jpg" alt="TS. Trần Đình Cương" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold uppercase text-[#05A6F5] tracking-wider">
                                        <?php echo $is_en ? 'Aquaculture AI & IoT' : 'AI & IoT Thủy Sản'; ?>
                                    </span>
                                    <h4 class="text-[16px] font-bold text-[#062AAD]">TS. Trần Đình Cương</h4>
                                    <p class="text-[12px] text-[#5B5B5B] font-medium">
                                        <?php echo $is_en ? 'Institute of Innovation & AI' : 'Viện Đổi Mới Sáng Tạo & AI'; ?>
                                    </p>
                                </div>
                                <p class="text-[12px] text-[#5B5B5B] line-clamp-2 leading-relaxed">
                                    <?php echo $is_en 
                                        ? 'Advisor on AI brackish water quality monitoring and seafood supply chain automation.'
                                        : 'Cố vấn giải pháp AI giám sát môi trường nước mặn và tự động hóa chuỗi cung ứng thủy sản.'; ?>
                                </p>
                            </div>

                            <button onclick="openMentorModal('TS. Trần Đình Cương', 'assets/img/avatar_deputy1.jpg', '<?php echo $is_en ? 'Lead Advisor - Aquaculture AI & IoT' : 'Cố vấn Trưởng AI & IoT Thủy Sản'; ?>')" class="w-full py-2 px-3 rounded-lg bg-blue-50 hover:bg-[#062AAD] text-[#062AAD] hover:text-white font-semibold text-[12px] transition-all flex items-center justify-center gap-1.5 border border-blue-100">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                <span><?php echo $is_en ? 'Book Appointment' : 'Đặt lịch hẹn'; ?></span>
                            </button>
                        </div>

                        <!-- Mentor 2 -->
                        <div class="bg-white rounded-2xl p-5 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] flex flex-col justify-between hover:shadow-md hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_female.jpg" alt="ThS. Lê Hoàng Yến" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold uppercase text-amber-600 tracking-wider">
                                        <?php echo $is_en ? 'Fundraising & Finance' : 'Gọi Vốn & Tài Chính'; ?>
                                    </span>
                                    <h4 class="text-[16px] font-bold text-[#062AAD]">ThS. Lê Hoàng Yến</h4>
                                    <p class="text-[12px] text-[#5B5B5B] font-medium">
                                        <?php echo $is_en ? 'Mekong Startup Investment Fund' : 'Quỹ Đầu Tư Khởi Nghiệp ĐBSCL'; ?>
                                    </p>
                                </div>
                                <p class="text-[12px] text-[#5B5B5B] line-clamp-2 leading-relaxed">
                                    <?php echo $is_en 
                                        ? 'Advisor on Seed round pitch deck preparation and 1:1 matching capital disbursement.'
                                        : 'Cố vấn hoàn thiện Pitch Deck gọi vốn hạt giống (Seed) và cơ chế giải ngân đối ứng 1:1.'; ?>
                                </p>
                            </div>

                            <button onclick="openMentorModal('ThS. Lê Hoàng Yến', 'assets/img/leader_female.jpg', '<?php echo $is_en ? 'Fundraising & Finance Specialist' : 'Chuyên Gia Gọi Vốn & Tài Chính'; ?>')" class="w-full py-2 px-3 rounded-lg bg-amber-50 hover:bg-amber-600 text-amber-800 hover:text-white font-semibold text-[12px] transition-all flex items-center justify-center gap-1.5 border border-amber-200">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                <span><?php echo $is_en ? 'Book Appointment' : 'Đặt lịch hẹn'; ?></span>
                            </button>
                        </div>

                        <!-- Mentor 3 -->
                        <div class="bg-white rounded-2xl p-5 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] flex flex-col justify-between hover:shadow-md hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_male1.jpg" alt="KS. Vũ Minh Trí" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold uppercase text-emerald-600 tracking-wider">
                                        <?php echo $is_en ? 'SME Digital Transformation' : 'Chuyển Đổi Số SME'; ?>
                                    </span>
                                    <h4 class="text-[16px] font-bold text-[#062AAD]">KS. Vũ Minh Trí</h4>
                                    <p class="text-[12px] text-[#5B5B5B] font-medium">
                                        <?php echo $is_en ? 'Software & IT Association' : 'Hiệp Hội Phần Mềm & CNTT'; ?>
                                    </p>
                                </div>
                                <p class="text-[12px] text-[#5B5B5B] line-clamp-2 leading-relaxed">
                                    <?php echo $is_en 
                                        ? 'Guiding digital transformation vouchers, agile ERP implementation, and 90-day KPI frameworks.'
                                        : 'Hỗ trợ gói Voucher CĐS, triển khai hệ thống quản trị ERP tinh gọn và chỉ số KPI 90 ngày.'; ?>
                                </p>
                            </div>

                            <button onclick="openMentorModal('KS. Vũ Minh Trí', 'assets/img/leader_male1.jpg', '<?php echo $is_en ? 'SME Digital Acceleration Advisor' : 'Cố Vấn Tăng Tốc Doanh Nghiệp Số SME'; ?>')" class="w-full py-2 px-3 rounded-lg bg-emerald-50 hover:bg-emerald-600 text-emerald-800 hover:text-white font-semibold text-[12px] transition-all flex items-center justify-center gap-1.5 border border-emerald-200">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                <span><?php echo $is_en ? 'Book Appointment' : 'Đặt lịch hẹn'; ?></span>
                            </button>
                        </div>

                        <!-- Mentor 4 -->
                        <div class="bg-white rounded-2xl p-5 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] flex flex-col justify-between hover:shadow-md hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/avatar_deputy2.jpg" alt="LS. Nguyễn Thu Trang" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold uppercase text-purple-600 tracking-wider">
                                        <?php echo $is_en ? 'Legal & Intellectual Property' : 'Pháp Lý & SHTT'; ?>
                                    </span>
                                    <h4 class="text-[16px] font-bold text-[#062AAD]">LS. Nguyễn Thu Trang</h4>
                                    <p class="text-[12px] text-[#5B5B5B] font-medium">
                                        <?php echo $is_en ? 'Mekong IP Law Office' : 'Văn Phòng Luật IP Mekong'; ?>
                                    </p>
                                </div>
                                <p class="text-[12px] text-[#5B5B5B] line-clamp-2 leading-relaxed">
                                    <?php echo $is_en 
                                        ? 'Advising on IP registration, OCOP trademark protection, and founders partnership agreements.'
                                        : 'Tư vấn đăng ký sở hữu trí tuệ, bảo hộ nhãn hiệu nông nghiệp OCOP và thỏa thuận sáng lập.'; ?>
                                </p>
                            </div>

                            <button onclick="openMentorModal('LS. Nguyễn Thu Trang', 'assets/img/avatar_deputy2.jpg', '<?php echo $is_en ? 'Legal & Intellectual Property Advisor' : 'Cố Vấn Pháp Lý & Sở Hữu Trí Tuệ'; ?>')" class="w-full py-2 px-3 rounded-lg bg-purple-50 hover:bg-purple-600 text-purple-800 hover:text-white font-semibold text-[12px] transition-all flex items-center justify-center gap-1.5 border border-purple-200">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                <span><?php echo $is_en ? 'Book Appointment' : 'Đặt lịch hẹn'; ?></span>
                            </button>
                        </div>
                    </div>
                </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 4: DỰ ÁN KHỞI NGHIỆP (FIGMA FRAME: 97:2709)                       -->
            <!-- ========================================================================= -->
            <?php elseif ($active_tab == 'du-an-khoi-nghiep'): ?>
                <div class="space-y-8 text-left">
                    <!-- Header hàng ngang chuẩn Figma Frame 97:3191 -->
                    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 border-b border-slate-200/80 pb-4">
                        <div class="space-y-2 max-w-3xl">
                            <h3 class="text-[24px] font-bold text-[#062AAD]">
                                <?php echo $is_en ? 'Featured Startup Projects' : 'Dự án khởi nghiệp nổi bật'; ?>
                            </h3>
                            <p class="text-[14px] text-[#5B5B5B] font-normal leading-relaxed">
                                <?php echo $is_en 
                                    ? 'Showcase of exemplary startups within the CiNEC ecosystem delivering breakthrough innovations and high growth potential.'
                                    : 'Các startup tiêu biểu trong hệ sinh thái CINEC với những giải pháp đổi mới sáng tạo và tiềm năng phát triển mạnh mẽ.'; ?>
                            </p>
                        </div>
                        <a href="lien-he.php" class="inline-flex items-center gap-2 border border-blue-200/80 text-[#062AAD] hover:bg-blue-50 font-semibold text-[13px] rounded-full px-5 py-2 transition-colors shrink-0">
                            <span><?php echo $is_en ? 'Explore Partnership Programs' : 'Xem chương trình hợp tác'; ?></span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                    <!-- Tiêu đề phân mục: Bài viết mới nhất (Figma Frame 112:735) -->
                    <div class="space-y-6">
                        <h4 class="text-[20px] font-bold text-[#02185D]">
                            <?php echo $is_en ? 'Latest Articles & Project Highlights' : 'Bài viết mới nhất'; ?>
                        </h4>

                        <!-- Lưới 4 Card Dự Án Chuẩn Figma Frame 112:734 -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            
                            <!-- Card 1: Đánh Thức Con Tàu Khởi Nghiệp Cực Nam -->
                            <article class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div>
                                    <div class="aspect-[16/10] w-full overflow-hidden bg-slate-100">
                                        <img src="assets/img/tintuc_art1.png" alt="Đánh Thức Con Tàu Khởi Nghiệp Cực Nam" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    </div>
                                    <div class="p-5 space-y-2.5">
                                        <div class="flex items-center">
                                            <span class="bg-[#71A800]/10 text-[#71A800] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                                <?php echo $is_en ? 'Incubation' : 'Ươm tạo'; ?>
                                            </span>
                                        </div>
                                        <h5 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                            <?php echo $is_en ? 'Awakening the Southernmost Startup Vessel' : 'Đánh Thức Con Tàu Khởi Nghiệp Cực Nam'; ?>
                                        </h5>
                                        <p class="text-[13px] text-[#5B5B5B] line-clamp-2 font-normal leading-relaxed">
                                            <?php echo $is_en 
                                                ? 'Key bottlenecks to overcome in propelling Ca Mau innovation ecosystems to international markets.'
                                                : 'Những Nút Thắt Cần Tháo Gỡ để đưa hệ sinh thái vươn xa thị trường quốc tế.'; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </article>

                            <!-- Card 2: Đổi Mới Từ Cà Mau -->
                            <article class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div>
                                    <div class="aspect-[16/10] w-full overflow-hidden bg-slate-100">
                                        <img src="assets/img/tintuc_art2.png" alt="Đổi Mới Từ Cà Mau" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    </div>
                                    <div class="p-5 space-y-2.5">
                                        <div class="flex items-center">
                                            <span class="bg-[#05A6F5]/10 text-[#05A6F5] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                                <?php echo $is_en ? 'Acceleration' : 'Tăng tốc'; ?>
                                            </span>
                                        </div>
                                        <h5 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                            <?php echo $is_en ? 'Innovation Born from Ca Mau' : 'Đổi Mới Từ Cà Mau'; ?>
                                        </h5>
                                        <p class="text-[13px] text-[#5B5B5B] line-clamp-2 font-normal leading-relaxed">
                                            <?php echo $is_en 
                                                ? 'Constructing a practical, resilient, and enduring startup innovation ecosystem in the province.'
                                                : 'Xây dựng hệ sinh thái khởi nghiệp và đổi mới sáng tạo thực chất và bền vững.'; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </article>

                            <!-- Card 3: STARTUP - ĐỘNG LỰC TĂNG TRƯỞNG -->
                            <article class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div>
                                    <div class="aspect-[16/10] w-full overflow-hidden bg-slate-100">
                                        <img src="assets/img/tintuc_art3.png" alt="STARTUP - ĐỘNG LỰC TĂNG TRƯỞNG CỦA MỘT ĐỊA PHƯƠNG" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    </div>
                                    <div class="p-5 space-y-2.5">
                                        <div class="flex items-center">
                                            <span class="bg-[#062AAD]/10 text-[#062AAD] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                                <?php echo $is_en ? 'Fundraising' : 'Gọi vốn'; ?>
                                            </span>
                                        </div>
                                        <h5 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                            <?php echo $is_en ? 'STARTUPS - ECONOMIC GROWTH ENGINE OF REGIONS' : 'STARTUP - ĐỘNG LỰC TĂNG TRƯỞNG CỦA MỘT ĐỊA PHƯƠNG'; ?>
                                        </h5>
                                        <p class="text-[13px] text-[#5B5B5B] line-clamp-2 font-normal leading-relaxed">
                                            <?php echo $is_en 
                                                ? 'AI and data governance transforming regional enterprises to optimize operational efficiency and capital velocity.'
                                                : 'AI đang trở thành công cụ chiến lược giúp doanh nghiệp tối ưu vận hành, ra quyết định nhanh.'; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </article>

                            <!-- Card 4: Ứng dụng AI trong quản trị doanh nghiệp -->
                            <article class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div>
                                    <div class="aspect-[16/10] w-full overflow-hidden bg-slate-100">
                                        <img src="assets/img/tintuc_art4.png" alt="Ứng dụng AI trong quản trị doanh nghiệp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    </div>
                                    <div class="p-5 space-y-2.5">
                                        <div class="flex items-center">
                                            <span class="bg-[#71A800]/10 text-[#71A800] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                                <?php echo $is_en ? 'Incubation' : 'Ươm tạo'; ?>
                                            </span>
                                        </div>
                                        <h5 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                            <?php echo $is_en ? 'Applying AI in Enterprise Management: An Inevitable Trend' : 'Ứng dụng AI trong quản trị doanh nghiệp: Xu hướng tất yếu'; ?>
                                        </h5>
                                        <p class="text-[13px] text-[#5B5B5B] line-clamp-2 font-normal leading-relaxed">
                                            <?php echo $is_en 
                                                ? 'AI is becoming a vital cornerstone enabling local SMEs to modernize operations and delight customers.'
                                                : 'AI đang trở thành công cụ chiến lược giúp doanh nghiệp tối ưu vận hành, nâng cao trải nghiệm.'; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                        </div>

                        <!-- THANH PHÂN TRANG CHUẨN FIGMA (Frame 2147223506: 40x40px, rounded-lg) -->
                        <div class="flex items-center justify-center gap-2 pt-6">
                            <button class="w-10 h-10 rounded-lg border border-slate-200/80 bg-white text-slate-400 flex items-center justify-center hover:bg-slate-50 transition-colors shadow-2xs">
                                <i data-lucide="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button class="w-10 h-10 rounded-lg bg-[#062AAD] text-white font-bold text-[14px] flex items-center justify-center shadow-xs">
                                1
                            </button>
                            <button class="w-10 h-10 rounded-lg border border-slate-200/80 bg-white text-slate-600 font-semibold text-[14px] flex items-center justify-center hover:bg-slate-50 transition-colors shadow-2xs">
                                2
                            </button>
                            <button class="w-10 h-10 rounded-lg border border-slate-200/80 bg-white text-slate-600 font-semibold text-[14px] flex items-center justify-center hover:bg-slate-50 transition-colors shadow-2xs">
                                3
                            </button>
                            <span class="w-10 h-10 flex items-center justify-center text-slate-400 font-bold text-[14px]">
                                ...
                            </span>
                            <button class="w-10 h-10 rounded-lg border border-slate-200/80 bg-white text-slate-600 font-semibold text-[14px] flex items-center justify-center hover:bg-slate-50 transition-colors shadow-2xs">
                                10
                            </button>
                            <button class="w-10 h-10 rounded-lg border border-slate-200/80 bg-white text-slate-600 flex items-center justify-center hover:bg-slate-50 transition-colors shadow-2xs">
                                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 5: DOANH NGHIỆP KHỞI NGHIỆP (FIGMA FRAME: 136:3634)              -->
            <!-- ========================================================================= -->
            <?php elseif ($active_tab == 'doanh-nghiep-khoi-nghiep'): ?>
                <div class="space-y-8 text-left">
                    <!-- Header hàng ngang chuẩn Figma Frame 136:4564 -->
                    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 border-b border-slate-200/80 pb-4">
                        <div class="space-y-2 max-w-3xl">
                            <h3 class="text-[24px] font-bold text-[#062AAD]">
                                <?php echo $is_en ? 'Startup Enterprises' : 'Doanh nghiệp khởi nghiệp'; ?>
                            </h3>
                            <p class="text-[14px] text-[#5B5B5B] font-normal leading-relaxed">
                                <?php echo $is_en 
                                    ? 'Promising ventures actively incubated, accelerated, and supported by CiNEC in the regional innovation ecosystem.'
                                    : 'Các startup tiêu biểu đang được CiNEC ươm tạo, tăng tốc và hỗ trợ phát triển.'; ?>
                            </p>
                        </div>
                        <a href="lien-he.php" class="inline-flex items-center gap-2 border border-blue-200/80 text-[#062AAD] hover:bg-blue-50 font-semibold text-[13px] rounded-full px-5 py-2 transition-colors shrink-0">
                            <span><?php echo $is_en ? 'View All Startups' : 'Xem tất cả startup'; ?></span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                    <!-- Tiêu đề phân mục: Bài viết mới nhất (Figma Frame 136:3967) -->
                    <div class="space-y-6">
                        <h4 class="text-[20px] font-bold text-[#02185D]">
                            <?php echo $is_en ? 'Featured Startups & Portfolios' : 'Bài viết mới nhất'; ?>
                        </h4>

                        <!-- Lưới Startup Cards chuẩn Figma Frame 136:3872 - 136:4024 -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            
                            <!-- Startup 1: Cargors -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div class="p-5 space-y-4">
                                    <div class="h-28 rounded-xl bg-slate-50/80 border border-slate-100 flex items-center justify-center p-4 group-hover:bg-blue-50/40 transition-colors">
                                        <img src="assets/img/startup_cargors.svg" alt="Cargors" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[18px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">Cargors</h5>
                                        <span class="bg-[#71A800]/10 text-[#71A800] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                            <?php echo $is_en ? 'Incubation' : 'Ươm tạo'; ?>
                                        </span>
                                    </div>
                                    <p class="text-[13px] text-[#5B5B5B] line-clamp-2">
                                        <?php echo $is_en 
                                            ? 'Smart freight logistics platform optimizing regional agricultural & seafood supply chains.'
                                            : 'Nền tảng logistics vận tải thông minh kết nối chuỗi cung ứng Cà Mau.'; ?>
                                    </p>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Startup 2: AI4Cosmetics -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div class="p-5 space-y-4">
                                    <div class="h-28 rounded-xl bg-slate-50/80 border border-slate-100 flex items-center justify-center p-4 group-hover:bg-pink-50/40 transition-colors">
                                        <img src="assets/img/startup_ai4.svg" alt="AI4Cosmetics" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[18px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">AI4Cosmetics</h5>
                                        <span class="bg-[#71A800]/10 text-[#71A800] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                            <?php echo $is_en ? 'Incubation' : 'Ươm tạo'; ?>
                                        </span>
                                    </div>
                                    <p class="text-[13px] text-[#5B5B5B] line-clamp-2">
                                        <?php echo $is_en 
                                            ? 'Biotech and artificial intelligence personalized organic skincare formulas.'
                                            : 'Công nghệ sinh học và trí tuệ nhân tạo cá nhân hóa mỹ phẩm sinh học.'; ?>
                                    </p>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Startup 3: Anym -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div class="p-5 space-y-4">
                                    <div class="h-28 rounded-xl bg-slate-50/80 border border-slate-100 flex items-center justify-center p-4 group-hover:bg-blue-50/40 transition-colors">
                                        <img src="assets/img/startup_anym.svg" alt="Anym" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[18px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">Anym</h5>
                                        <span class="bg-[#71A800]/10 text-[#71A800] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                            <?php echo $is_en ? 'Incubation' : 'Ươm tạo'; ?>
                                        </span>
                                    </div>
                                    <p class="text-[13px] text-[#5B5B5B] line-clamp-2">
                                        <?php echo $is_en 
                                            ? 'E-commerce for southernmost specialties and integrated local digital payment gateways.'
                                            : 'Thương mại điện tử đặc sản vùng Cực Nam và giải pháp thanh toán số.'; ?>
                                    </p>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Startup 4: ClearVue -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div class="p-5 space-y-4">
                                    <div class="h-28 rounded-xl bg-slate-50/80 border border-slate-100 flex items-center justify-center p-4 group-hover:bg-emerald-50/40 transition-colors">
                                        <img src="assets/img/startup_clearvue.svg" alt="ClearVue" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[18px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">ClearVue</h5>
                                        <span class="bg-[#71A800]/10 text-[#71A800] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                            <?php echo $is_en ? 'Incubation' : 'Ươm tạo'; ?>
                                        </span>
                                    </div>
                                    <p class="text-[13px] text-[#5B5B5B] line-clamp-2">
                                        <?php echo $is_en 
                                            ? 'Automated aquaculture environmental monitoring and IoT solutions for intensive shrimp farms.'
                                            : 'Giám sát môi trường tự động và công nghệ IoT đầm tôm công nghệ cao.'; ?>
                                    </p>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Startup 5: Biolytics AI -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div class="p-5 space-y-4">
                                    <div class="h-28 rounded-xl bg-slate-50/80 border border-slate-100 flex items-center justify-center p-4 group-hover:bg-green-50/40 transition-colors">
                                        <img src="assets/img/startup_biolytics.svg" alt="Biolytics AI" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[18px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">Biolytics AI</h5>
                                        <span class="bg-[#71A800]/10 text-[#71A800] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                            <?php echo $is_en ? 'Incubation' : 'Ươm tạo'; ?>
                                        </span>
                                    </div>
                                    <p class="text-[13px] text-[#5B5B5B] line-clamp-2">
                                        <?php echo $is_en 
                                            ? 'Biological data analytics and low-emission regenerative agriculture digital solutions.'
                                            : 'Phân tích sinh học và giải pháp số liệu nông nghiệp giảm phát thải.'; ?>
                                    </p>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Startup 6: AiSpeak -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div class="p-5 space-y-4">
                                    <div class="h-28 rounded-xl bg-slate-50/80 border border-slate-100 flex items-center justify-center p-4 group-hover:bg-indigo-50/40 transition-colors">
                                        <img src="assets/img/startup_aispeak.svg" alt="AiSpeak" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[18px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">AiSpeak</h5>
                                        <span class="bg-[#71A800]/10 text-[#71A800] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                            <?php echo $is_en ? 'Incubation' : 'Ươm tạo'; ?>
                                        </span>
                                    </div>
                                    <p class="text-[13px] text-[#5B5B5B] line-clamp-2">
                                        <?php echo $is_en 
                                            ? 'AI digital skills and intelligent foreign language coaching platform for regional workforce.'
                                            : 'Nền tảng đào tạo kỹ năng số và ngoại ngữ thông minh cho nhân lực địa phương.'; ?>
                                    </p>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Startup 7: AngelRock -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div class="p-5 space-y-4">
                                    <div class="h-28 rounded-xl bg-slate-50/80 border border-slate-100 flex items-center justify-center p-4 group-hover:bg-amber-50/40 transition-colors">
                                        <img src="assets/img/startup_angelrock.svg" alt="AngelRock" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[18px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">AngelRock</h5>
                                        <span class="bg-[#71A800]/10 text-[#71A800] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                            <?php echo $is_en ? 'Incubation' : 'Ươm tạo'; ?>
                                        </span>
                                    </div>
                                    <p class="text-[13px] text-[#5B5B5B] line-clamp-2">
                                        <?php echo $is_en 
                                            ? 'Micro-investment syndication and seed funding platform for regional startups.'
                                            : 'Hệ sinh thái kết nối vốn mồi và đầu tư vi mô cho doanh nghiệp ĐMST.'; ?>
                                    </p>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Startup 8: Cargors Scale -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                                <div class="p-5 space-y-4">
                                    <div class="h-28 rounded-xl bg-slate-50/80 border border-slate-100 flex items-center justify-center p-4 group-hover:bg-blue-50/40 transition-colors">
                                        <img src="assets/img/startup_cargors.svg" alt="Cargors Hub" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[18px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">Cargors Hub</h5>
                                        <span class="bg-[#05A6F5]/10 text-[#05A6F5] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                            <?php echo $is_en ? 'Acceleration' : 'Tăng tốc'; ?>
                                        </span>
                                    </div>
                                    <p class="text-[13px] text-[#5B5B5B] line-clamp-2">
                                        <?php echo $is_en 
                                            ? 'Intelligent transit hub and export-import automation for aquaculture logistics.'
                                            : 'Trung tâm trung chuyển thông minh và tự động hóa xuất nhập khẩu.'; ?>
                                    </p>
                                </div>
                                <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-slate-100 text-[12px] text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <span>14/04/2026</span>
                                        <span>•</span>
                                        <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                    </div>
                                    <a href="tin-tuc.php" class="w-8 h-8 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center group-hover:scale-110 transition-transform shadow-xs">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- THANH PHÂN TRANG CHUẨN FIGMA (Frame 2147223506) -->
                        <div class="flex items-center justify-center gap-2 pt-6">
                            <button class="w-10 h-10 rounded-lg border border-slate-200/80 bg-white text-slate-400 flex items-center justify-center hover:bg-slate-50 transition-colors shadow-2xs">
                                <i data-lucide="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button class="w-10 h-10 rounded-lg bg-[#062AAD] text-white font-bold text-[14px] flex items-center justify-center shadow-xs">
                                1
                            </button>
                            <button class="w-10 h-10 rounded-lg border border-slate-200/80 bg-white text-slate-600 font-semibold text-[14px] flex items-center justify-center hover:bg-slate-50 transition-colors shadow-2xs">
                                2
                            </button>
                            <button class="w-10 h-10 rounded-lg border border-slate-200/80 bg-white text-slate-600 font-semibold text-[14px] flex items-center justify-center hover:bg-slate-50 transition-colors shadow-2xs">
                                3
                            </button>
                            <span class="w-10 h-10 flex items-center justify-center text-slate-400 font-bold text-[14px]">
                                ...
                            </span>
                            <button class="w-10 h-10 rounded-lg border border-slate-200/80 bg-white text-slate-600 font-semibold text-[14px] flex items-center justify-center hover:bg-slate-50 transition-colors shadow-2xs">
                                10
                            </button>
                            <button class="w-10 h-10 rounded-lg border border-slate-200/80 bg-white text-slate-600 flex items-center justify-center hover:bg-slate-50 transition-colors shadow-2xs">
                                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 6: HỢP TÁC & TÀI TRỢ (FIGMA FRAME: 100:3202)                      -->
            <!-- ========================================================================= -->
            <?php elseif ($active_tab == 'hop-tac-tai-tro'): ?>
                <div class="space-y-12 text-left">
                    
                    <!-- SECTION 1: 2 CỘT SONG SONG CHUẨN FIGMA Frame 2147223626 (1180x540) -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                        
                        <!-- CỘT TRÁI (Figma Frame 2147223645: Thông tin & 3 khối lợi ích) -->
                        <div class="lg:col-span-7 space-y-6">
                            <div class="space-y-3">
                                <h3 class="text-[28px] sm:text-[32px] font-bold text-[#062AAD] leading-tight">
                                    <?php echo $is_en ? 'Partnership & Sponsorship' : 'Hợp tác & Tài trợ'; ?>
                                </h3>
                                <p class="text-[15px] text-[#5B5B5B] font-normal leading-relaxed">
                                    <?php echo $is_en 
                                        ? 'Partnering with CiNEC offers organizations brand visibility, access to the regional innovation community, and strategic contributions to the southernmost startup ecosystem.'
                                        : 'Đồng hành cùng CiNEC, Quý đối tác sẽ có cơ hội quảng bá thương hiệu, kết nối cộng đồng đổi mới sáng tạo và đóng góp vào sự phát triển của hệ sinh thái startup địa phương.'; ?>
                                </p>
                                <div class="pt-1">
                                    <a href="#sponsor-tiers-grid" class="inline-flex items-center gap-2 border border-blue-200/90 text-[#062AAD] hover:bg-blue-50 font-semibold text-[14px] rounded-full px-5 py-2.5 transition-colors">
                                        <span><?php echo $is_en ? 'Explore Sponsorship Packages' : 'Xem chương trình hợp tác'; ?></span>
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- 3 Khối giá trị đồng hành (Figma Frame 2147223644) -->
                            <div class="space-y-4 pt-2">
                                
                                <!-- Item 1 -->
                                <div class="flex items-start gap-4 p-4 rounded-2xl bg-white border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] hover:border-[#062AAD]/30 transition-all">
                                    <div class="w-14 h-14 rounded-2xl bg-[#05A6F5]/10 flex items-center justify-center shrink-0">
                                        <i data-lucide="award" class="w-7 h-7 text-[#05A6F5]"></i>
                                    </div>
                                    <div class="space-y-1">
                                        <h4 class="text-[16px] font-bold text-[#02185D]">
                                            <?php echo $is_en ? 'Brand Expansion & Pioneering Positioning' : 'Mở rộng thương hiệu & Định vị tiên phong'; ?>
                                        </h4>
                                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                                            <?php echo $is_en 
                                                ? 'Brand presence across regional innovation forums, thematic symposia, and CiNEC official media portals.'
                                                : 'Hiện diện thương hiệu tại các diễn đàn ĐMST cấp vùng, hội thảo chuyên đề và cổng truyền thông chính thức của CiNEC.'; ?>
                                        </p>
                                    </div>
                                </div>

                                <!-- Item 2 -->
                                <div class="flex items-start gap-4 p-4 rounded-2xl bg-white border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] hover:border-[#062AAD]/30 transition-all">
                                    <div class="w-14 h-14 rounded-2xl bg-[#062AAD]/10 flex items-center justify-center shrink-0">
                                        <i data-lucide="network" class="w-7 h-7 text-[#062AAD]"></i>
                                    </div>
                                    <div class="space-y-1">
                                        <h4 class="text-[16px] font-bold text-[#02185D]">
                                            <?php echo $is_en ? 'Access to Senior Experts & VC Networks' : 'Kết nối mạng lưới chuyên gia & Quỹ đầu tư'; ?>
                                        </h4>
                                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                                            <?php echo $is_en 
                                                ? 'Direct networking with 50+ domestic and international investment funds, alongside 100+ executive business mentors.'
                                                : 'Tiếp cận trực tiếp hơn 50+ quỹ đầu tư trong và ngoài nước, cùng mạng lưới hơn 100+ cố vấn doanh nghiệp cấp cao.'; ?>
                                        </p>
                                    </div>
                                </div>

                                <!-- Item 3 -->
                                <div class="flex items-start gap-4 p-4 rounded-2xl bg-white border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] hover:border-[#062AAD]/30 transition-all">
                                    <div class="w-14 h-14 rounded-2xl bg-[#71A800]/10 flex items-center justify-center shrink-0">
                                        <i data-lucide="rocket" class="w-7 h-7 text-[#71A800]"></i>
                                    </div>
                                    <div class="space-y-1">
                                        <h4 class="text-[16px] font-bold text-[#02185D]">
                                            <?php echo $is_en ? 'Exclusive Dealflow & Investment Opportunities' : 'Tiếp cận Dealflow & Cơ hội đầu tư độc quyền'; ?>
                                        </h4>
                                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                                            <?php echo $is_en 
                                                ? 'Priority appraisal and co-investment rights in high-growth startup ventures graduating from CiNEC Launch.'
                                                : 'Ưu tiên thẩm định và tham gia rót vốn vào các dự án khởi nghiệp tiềm năng cao trong chương trình CiNEC Launch.'; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CỘT PHẢI (Figma Frame 2147223453: Form Đăng ký hợp tác & tài trợ) -->
                        <div class="lg:col-span-5">
                            <div class="bg-white rounded-[24px] p-6 sm:p-8 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] space-y-5">
                                <div class="space-y-1 text-left border-b border-slate-100 pb-3">
                                    <h4 class="text-[20px] font-bold text-[#02185D]">
                                        <?php echo $is_en ? 'Partnership & Sponsorship Inquiry' : 'Đăng ký hợp tác & tài trợ'; ?>
                                    </h4>
                                    <p class="text-[13px] text-slate-400">
                                        <?php echo $is_en ? 'Partner with CiNEC today!' : 'Tham gia sự kiện ngay hôm nay!'; ?>
                                    </p>
                                </div>

                                <form onsubmit="event.preventDefault(); alert('<?php echo $is_en ? 'Thank you! CiNEC Partnership Team will contact you within 24 hours.' : 'Cảm ơn Quý đối tác! Ban phát triển hợp tác CiNEC sẽ liên hệ phản hồi trong 24 giờ.'; ?>');" class="space-y-3.5">
                                    <!-- Họ và tên -->
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                            <i data-lucide="user" class="w-4 h-4"></i>
                                        </span>
                                        <input type="text" required placeholder="<?php echo $is_en ? 'Full Name *' : 'Họ và tên *'; ?>" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-[14px] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#062AAD] focus:bg-white transition-colors">
                                    </div>

                                    <!-- Email -->
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                            <i data-lucide="mail" class="w-4 h-4"></i>
                                        </span>
                                        <input type="email" required placeholder="<?php echo $is_en ? 'Business Email *' : 'Email *'; ?>" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-[14px] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#062AAD] focus:bg-white transition-colors">
                                    </div>

                                    <!-- Số điện thoại -->
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                            <i data-lucide="phone" class="w-4 h-4"></i>
                                        </span>
                                        <input type="tel" required placeholder="<?php echo $is_en ? 'Phone Number *' : 'Số điện thoại *'; ?>" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-[14px] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#062AAD] focus:bg-white transition-colors">
                                    </div>

                                    <!-- Gói tài trợ quan tâm -->
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                            <i data-lucide="tag" class="w-4 h-4"></i>
                                        </span>
                                        <select required class="w-full pl-10 pr-8 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-[14px] text-slate-700 focus:outline-none focus:border-[#062AAD] focus:bg-white transition-colors appearance-none">
                                            <option value=""><?php echo $is_en ? 'Select Sponsorship Package *' : 'Gói tài trợ quan tâm *'; ?></option>
                                            <option><?php echo $is_en ? 'Bronze Tier (20,000,000 VND / year)' : 'Tài trợ Đồng (20.000.000 VNĐ / năm)'; ?></option>
                                            <option><?php echo $is_en ? 'Silver Tier (50,000,000 VND / year)' : 'Tài trợ Bạc (50.000.000 VNĐ / năm)'; ?></option>
                                            <option><?php echo $is_en ? 'Gold Tier (100,000,000 VND / year)' : 'Tài trợ Vàng (100.000.000 VNĐ / năm)'; ?></option>
                                            <option><?php echo $is_en ? 'Diamond Tier (200,000,000+ VND / year)' : 'Tài trợ Kim Cương (200.000.000+ VNĐ / năm)'; ?></option>
                                            <option><?php echo $is_en ? 'Training & Hackathon Co-organizer' : 'Đồng hành chương trình Đào tạo / Hackathon'; ?></option>
                                            <option><?php echo $is_en ? 'VC Fund Partnership & Seed Matching' : 'Hợp tác Quỹ đầu tư / Cung cấp vốn mồi'; ?></option>
                                        </select>
                                        <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-400">
                                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                                        </span>
                                    </div>

                                    <!-- Nội dung liên hệ -->
                                    <div>
                                        <textarea rows="3" placeholder="<?php echo $is_en ? 'Partnership inquiry / message...' : 'Nội dung liên hệ...'; ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-[14px] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#062AAD] focus:bg-white transition-colors"></textarea>
                                    </div>

                                    <!-- Nút Gửi thông tin -->
                                    <button type="submit" class="w-full bg-[#062AAD] hover:bg-[#02185D] text-white font-semibold text-[14px] rounded-full py-3 transition-all duration-300 shadow-md flex items-center justify-center gap-2 group">
                                        <span><?php echo $is_en ? 'Submit Registration' : 'Gửi thông tin'; ?></span>
                                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 2: CÁC GÓI TÀI TRỢ CHUẨN FIGMA Frame 2147223648 (1180x625) -->
                    <div id="sponsor-tiers-grid" class="space-y-6 pt-6">
                        <div class="text-center sm:text-left space-y-1">
                            <h4 class="text-[24px] font-bold text-[#062AAD]">
                                <?php echo $is_en ? 'Sponsorship Tiers' : 'Các gói tài trợ'; ?>
                            </h4>
                            <p class="text-[14px] text-[#5B5B5B]">
                                <?php echo $is_en ? 'Long-term partnership with CiNEC accelerating southernmost innovation' : 'Đồng hành dài hạn cùng CiNEC phát triển hệ sinh thái ĐMST Cực Nam'; ?>
                            </p>
                        </div>

                        <!-- Lưới 4 Thẻ Tier Tài Trợ -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            
                            <!-- Tier 1: TÀI TRỢ ĐỒNG (Frame 2147223649) -->
                            <div class="bg-white rounded-2xl p-6 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between space-y-6 text-left">
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <span class="text-[12px] font-bold uppercase tracking-wider text-amber-800 bg-amber-50 px-3 py-1 rounded-full">
                                            <?php echo $is_en ? 'BRONZE TIER' : 'TÀI TRỢ ĐỒNG'; ?>
                                        </span>
                                        <div class="w-9 h-9 rounded-full bg-amber-50 flex items-center justify-center text-amber-700">
                                            <i data-lucide="medal" class="w-5 h-5"></i>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div class="text-[24px] font-bold text-[#02185D] leading-tight">20.000.000 VNĐ</div>
                                        <div class="text-[12px] text-slate-400 font-medium">/ <?php echo $is_en ? 'year' : 'năm'; ?></div>
                                    </div>

                                    <ul class="space-y-2.5 text-[13px] text-[#5B5B5B] pt-2 border-t border-slate-100">
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#71A800] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'Logo displayed on CiNEC official website' : 'Hiển thị logo trên website chính thức của CiNEC'; ?></span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#71A800] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? '02 VIP tickets to attend Demo Day events' : '02 vé VIP tham dự sự kiện Demo Day'; ?></span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#71A800] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'Periodic innovation ecosystem newsletter' : 'Nhận bản tin hệ sinh thái ĐMST định kỳ'; ?></span>
                                        </li>
                                    </ul>
                                </div>

                                <a href="#sponsor-form" class="w-full text-center border border-slate-200 hover:border-[#062AAD] hover:bg-[#062AAD] hover:text-white text-[#062AAD] font-semibold text-[13px] rounded-full py-2.5 transition-colors block">
                                    <?php echo $is_en ? 'Register Sponsorship' : 'Đăng ký tài trợ'; ?>
                                </a>
                            </div>

                            <!-- Tier 2: TÀI TRỢ BẠC (Frame 2147223650) -->
                            <div class="bg-white rounded-2xl p-6 border border-blue-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between space-y-6 text-left">
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <span class="text-[12px] font-bold uppercase tracking-wider text-slate-700 bg-slate-100 px-3 py-1 rounded-full">
                                            <?php echo $is_en ? 'SILVER TIER' : 'TÀI TRỢ BẠC'; ?>
                                        </span>
                                        <div class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-slate-600">
                                            <i data-lucide="medal" class="w-5 h-5"></i>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div class="text-[24px] font-bold text-[#062AAD] leading-tight">50.000.000 VNĐ</div>
                                        <div class="text-[12px] text-slate-400 font-medium">/ <?php echo $is_en ? 'year' : 'năm'; ?></div>
                                    </div>

                                    <ul class="space-y-2.5 text-[13px] text-[#5B5B5B] pt-2 border-t border-slate-100">
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#71A800] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'All benefits of the Bronze Tier package' : 'Toàn bộ quyền lợi của gói Tài trợ Đồng'; ?></span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#71A800] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'Product showcase booth at 02 regional events' : 'Đặt booth trưng bày sản phẩm tại 02 sự kiện'; ?></span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#71A800] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? '01 featured media article on CiNEC portal' : '01 bài viết truyền thông trên cổng thông tin'; ?></span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#71A800] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'Access dealflow of 10 featured startups' : 'Tiếp cận dealflow 10 dự án tiêu biểu'; ?></span>
                                        </li>
                                    </ul>
                                </div>

                                <a href="#sponsor-form" class="w-full text-center bg-[#062AAD] hover:bg-[#05A6F5] text-white font-semibold text-[13px] rounded-full py-2.5 transition-colors block shadow-xs">
                                    <?php echo $is_en ? 'Register Sponsorship' : 'Đăng ký tài trợ'; ?>
                                </a>
                            </div>

                            <!-- Tier 3: TÀI TRỢ VÀNG (Frame 2147223651) -->
                            <div class="bg-white rounded-2xl p-6 border-2 border-[#71A800] shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between space-y-6 relative text-left">
                                <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-[#71A800] text-white text-[10px] font-bold px-3 py-0.5 rounded-full uppercase tracking-wider">
                                    <?php echo $is_en ? 'RECOMMENDED' : 'TIÊU BIỂU'; ?>
                                </span>
                                
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <span class="text-[12px] font-bold uppercase tracking-wider text-yellow-800 bg-yellow-50 px-3 py-1 rounded-full">
                                            <?php echo $is_en ? 'GOLD TIER' : 'TÀI TRỢ VÀNG'; ?>
                                        </span>
                                        <div class="w-9 h-9 rounded-full bg-yellow-50 flex items-center justify-center text-yellow-600">
                                            <i data-lucide="crown" class="w-5 h-5"></i>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div class="text-[24px] font-bold text-[#02185D] leading-tight">100.000.000 VNĐ</div>
                                        <div class="text-[12px] text-slate-400 font-medium">/ <?php echo $is_en ? 'year' : 'năm'; ?></div>
                                    </div>

                                    <ul class="space-y-2.5 text-[13px] text-[#5B5B5B] pt-2 border-t border-slate-100">
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#71A800] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'All benefits of the Silver Tier package' : 'Toàn bộ quyền lợi của gói Tài trợ Bạc'; ?></span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#71A800] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'Co-organize 01 Hackathon or Tech Workshop' : 'Đồng tổ chức 01 Hackathon / Workshop'; ?></span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#71A800] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'Keynote speaker slot at thematic panel' : 'Diễn giả tại phiên thảo luận chuyên sâu'; ?></span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#71A800] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'Exclusive Seed round dealflow co-investment rights' : 'Quyền lợi tiếp cận Dealflow độc quyền Seed'; ?></span>
                                        </li>
                                    </ul>
                                </div>

                                <a href="#sponsor-form" class="w-full text-center bg-[#71A800] hover:bg-[#5e8b00] text-white font-semibold text-[13px] rounded-full py-2.5 transition-colors block shadow-xs">
                                    <?php echo $is_en ? 'Register Sponsorship' : 'Đăng ký tài trợ'; ?>
                                </a>
                            </div>

                            <!-- Tier 4: TÀI TRỢ KIM CƯƠNG (Frame 2147223652) -->
                            <div class="bg-gradient-to-b from-[#02185D] to-[#062AAD] text-white rounded-2xl p-6 shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between space-y-6 text-left">
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <span class="text-[12px] font-bold uppercase tracking-wider text-slate-900 bg-[#C1FF72] px-3 py-1 rounded-full">
                                            <?php echo $is_en ? 'DIAMOND TIER' : 'TÀI TRỢ KIM CƯƠNG'; ?>
                                        </span>
                                        <div class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-[#C1FF72]">
                                            <i data-lucide="sparkles" class="w-5 h-5"></i>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div class="text-[24px] font-bold text-white leading-tight">200.000.000+ VNĐ</div>
                                        <div class="text-[12px] text-blue-200 font-medium">/ <?php echo $is_en ? 'year' : 'năm'; ?></div>
                                    </div>

                                    <ul class="space-y-2.5 text-[13px] text-blue-100 pt-2 border-t border-white/10">
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#C1FF72] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'Exclusive strategic partner by industry vertical' : 'Đối tác chiến lược độc quyền theo ngành'; ?></span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#C1FF72] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'Title naming sponsor for CiNEC Grand Finale Award' : 'Đặt tên giải thưởng chung kết Startup CiNEC'; ?></span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#C1FF72] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'Keynote address at Southernmost Innovation Summit' : 'Phát biểu chính tại Diễn đàn ĐMST Cực Nam'; ?></span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i data-lucide="check" class="w-4 h-4 text-[#C1FF72] shrink-0 mt-0.5"></i>
                                            <span><?php echo $is_en ? 'First-look matching fund investment prerogative' : 'Quyền ưu tiên rót vốn đối ứng dự án xuất sắc'; ?></span>
                                        </li>
                                    </ul>
                                </div>

                                <a href="#sponsor-form" class="w-full text-center bg-[#C1FF72] hover:bg-white text-slate-900 font-bold text-[13px] rounded-full py-2.5 transition-colors block shadow-xs">
                                    <?php echo $is_en ? 'Contact for Consultation' : 'Liên hệ tư vấn'; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>

        <!-- SECTION 4: ĐỐI TÁC CHIẾN LƯỢC (5 CARD LOGO LỚN CHUẨN FIGMA Frame 2147223631) -->
        <section class="space-y-6 pt-6">
            <h2 class="text-[24px] sm:text-[28px] font-bold text-[#062AAD] text-center tracking-tight">
                <?php echo $is_en ? 'Strategic Partners' : 'Đối tác chiến lược'; ?>
            </h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 lg:gap-5">
                <!-- 1. DBC -->
                <div class="bg-white border border-slate-200/70 rounded-2xl p-4 h-28 flex items-center justify-center shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                    <img src="assets/img/partner_logo_dbc.png" alt="DBC" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform duration-300">
                </div>

                <!-- 2. KVIP -->
                <div class="bg-white border border-slate-200/70 rounded-2xl p-4 h-28 flex items-center justify-center shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                    <img src="assets/img/partner_logo_kvip.png" alt="KVIP" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform duration-300">
                </div>

                <!-- 3. NIIC -->
                <div class="bg-white border border-slate-200/70 rounded-2xl p-4 h-28 flex items-center justify-center shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                    <img src="assets/img/partner_logo_niic.png" alt="NIIC" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform duration-300">
                </div>

                <!-- 4. INSTITUTE OF INNOVATION -->
                <div class="bg-white border border-slate-200/70 rounded-2xl p-4 h-28 flex items-center justify-center shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                    <img src="assets/img/partner_logo_ioi.png" alt="Institute of Innovation" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform duration-300">
                </div>

                <!-- 5. NIIC -->
                <div class="bg-white border border-slate-200/70 rounded-2xl p-4 h-28 flex items-center justify-center shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                    <img src="assets/img/partner_logo_niic.png" alt="NIIC" class="max-h-12 max-w-[140px] object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </section>

    </div>
</div>

<?php
require_once 'includes/mentor-modal.php';
require_once 'includes/footer.php';
?>
