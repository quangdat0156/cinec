<?php
require_once 'config/db.php';
require_once 'config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
$page_title = $is_en ? "News & Insights - CiNEC Innovation Ca Mau" : "Tin tức & Insight - CINEC Cà Mau";
require_once 'includes/header.php';

// Lấy danh sách tin tức từ CSDL / Mock Data
$all_news = get_news();
?>

<!-- BREADCRUMBS BAR (Chuẩn Figma Node 61:334) -->
<div class="bg-[#F7FAFD] pt-28 pb-4 font-sans">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 text-[14px] leading-[20px] font-medium text-[#062AAD] flex items-center gap-2">
        <a href="index.php" class="hover:text-[#05A6F5] transition-colors flex items-center gap-1">
            <?php echo __('nav_home'); ?>
        </a>
        <i data-lucide="chevron-right" class="w-4 h-4 text-[#062AAD]/70 shrink-0"></i>
        <span class="font-semibold text-[#062AAD]"><?php echo __('nav_news'); ?></span>
    </div>
</div>

<!-- HERO BANNER (Chuẩn Figma Frame 2147223445) -->
<section class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 font-sans">
    <div class="relative bg-[#02155B] bg-cover bg-right bg-no-repeat rounded-[24px] lg:rounded-[32px] overflow-hidden min-h-[200px] lg:min-h-[242px] flex items-center shadow-lg border border-blue-950"
         style="background-image: url('assets/img/tintuc_hero_clean.png'); background-position: right center;">
        
        <div class="relative z-10 px-6 sm:px-10 lg:px-14 py-8 max-w-2xl space-y-2.5 text-left">
            <h1 class="text-[30px] sm:text-[36px] lg:text-[40px] font-bold leading-[1.2] lg:leading-[48px] tracking-tight text-white">
                <?php echo $is_en ? 'News & Insights' : 'Tin tức & Insight'; ?>
            </h1>
            <p class="text-[14px] sm:text-[15px] leading-[22px] font-normal text-slate-200/90 max-w-lg">
                <?php echo $is_en 
                    ? 'Stay updated on innovation trends, digital transformation and sustainable growth in Ca Mau'
                    : 'Cập nhật xu hướng đổi mới sáng tạo, chuyển đổi số và phát triển bền vững'; ?>
            </p>
        </div>
    </div>
</section>

<!-- MAIN CONTENT CONTAINER (2 CỘT: TRÁI 7/12 & PHẢI 5/12 - Chuẩn Figma Frame 2147223461) -->
<section class="py-10 lg:py-12 bg-[#F7FAFD] font-sans">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
        
        <!-- CỘT TRÁI (7/12 CỘT) - CHUYÊN ĐỀ NỔI BẬT & BÀI VIẾT MỚI NHẤT -->
        <div class="lg:col-span-7 space-y-10">
            
            <!-- KHỐI 1: CHUYÊN ĐỀ NỔI BẬT (3 Card hàng ngang - Chuẩn Figma Frame 2147223496) -->
            <div class="space-y-4">
                <h2 class="text-[24px] leading-[32px] font-semibold text-[#062AAD] text-left">
                    <?php echo $is_en ? 'Featured Topics' : 'Chuyên đề nổi bật'; ?>
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5 lg:gap-4 text-left">
                    <!-- Card 1: Chuyển đổi số -->
                    <div class="bg-white rounded-xl p-4 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] flex items-center gap-3.5 hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-[#05A6F5]/10 text-[#05A6F5] flex items-center justify-center shrink-0 group-hover:bg-[#062AAD] group-hover:text-white transition-colors duration-300">
                            <i data-lucide="trending-up" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <h3 class="text-[16px] leading-[24px] font-semibold text-[#062AAD] group-hover:text-[#05A6F5] transition-colors truncate">
                                <?php echo $is_en ? 'Digital Transformation' : 'Chuyển đổi số'; ?>
                            </h3>
                            <p class="text-[13px] leading-[20px] font-medium text-[#5B5B5B]">
                                <?php echo $is_en ? '126 articles' : '126 bài viết'; ?>
                            </p>
                        </div>
                    </div>

                    <!-- Card 2: AI & Công nghệ -->
                    <div class="bg-white rounded-xl p-4 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] flex items-center gap-3.5 hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-[#05A6F5]/10 text-[#05A6F5] flex items-center justify-center shrink-0 group-hover:bg-[#062AAD] group-hover:text-white transition-colors duration-300">
                            <i data-lucide="cpu" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <h3 class="text-[16px] leading-[24px] font-semibold text-[#062AAD] group-hover:text-[#05A6F5] transition-colors truncate">
                                <?php echo $is_en ? 'AI & Technology' : 'AI & Công nghệ'; ?>
                            </h3>
                            <p class="text-[13px] leading-[20px] font-medium text-[#5B5B5B]">
                                <?php echo $is_en ? '98 articles' : '98 bài viết'; ?>
                            </p>
                        </div>
                    </div>

                    <!-- Card 3: ESG & Phát triển bền vững -->
                    <div class="bg-white rounded-xl p-4 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] flex items-center gap-3.5 hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 group cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-[#C1FF72] text-[#02185D] flex items-center justify-center shrink-0 group-hover:bg-[#7BC612] group-hover:text-white transition-colors duration-300">
                            <i data-lucide="leaf" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <h3 class="text-[16px] leading-[24px] font-semibold text-[#062AAD] group-hover:text-[#05A6F5] transition-colors truncate">
                                <?php echo $is_en ? 'ESG & Sustainability' : 'ESG & Phát triển bền vững'; ?>
                            </h3>
                            <p class="text-[13px] leading-[20px] font-medium text-[#5B5B5B]">
                                <?php echo $is_en ? '75 articles' : '75 bài viết'; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KHỐI 2: BÀI VIẾT MỚI NHẤT (Danh sách 4 bài ngang - Chuẩn Figma Frame 2147223497) -->
            <div class="space-y-5">
                <h2 class="text-[24px] leading-[32px] font-semibold text-[#062AAD] text-left">
                    <?php echo $is_en ? 'Latest Articles' : 'Bài viết mới nhất'; ?>
                </h2>

                <div class="space-y-4">
                    <!-- Bài 1: Đánh Thức Con Tàu Khởi Nghiệp Cực Nam -->
                    <article class="bg-white rounded-2xl p-4 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex flex-col sm:flex-row items-center gap-4 lg:gap-5 group cursor-pointer">
                        <div class="w-full sm:w-[248px] h-[152px] rounded-xl overflow-hidden bg-slate-100 shrink-0 relative">
                            <img src="assets/img/tintuc_art1.png" alt="Đánh Thức Con Tàu Khởi Nghiệp Cực Nam" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="flex-1 flex flex-col justify-between h-full min-w-0 w-full text-left py-0.5">
                            <div class="space-y-1.5">
                                <span class="inline-block px-3 py-0.5 rounded-full bg-[#EBF5FF] text-[#062AAD] text-[12px] font-medium tracking-normal">
                                    <?php echo $is_en ? 'AI & Technology' : 'AI & Công Nghệ'; ?>
                                </span>
                                <h3 class="text-[16px] leading-[24px] font-semibold text-[#062AAD] group-hover:text-[#05A6F5] transition-colors line-clamp-1">
                                    <?php echo $is_en ? 'Awakening the Southernmost Startup Vessel' : 'Đánh Thức Con Tàu Khởi Nghiệp Cực Nam'; ?>
                                </h3>
                                <p class="text-[12px] leading-[16px] font-medium text-[#5B5B5B] line-clamp-2">
                                    <?php echo $is_en ? 'Key Bottlenecks to Untangle in the Regional Ecosystem' : 'Những Nút Thắt Cần Tháo Gỡ'; ?>
                                </p>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-auto">
                                <div class="text-[10px] leading-[16px] font-normal text-[#A6A7AA] flex items-center gap-2">
                                    <span>14/04/2026</span>
                                    <span>&bull;</span>
                                    <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                </div>
                                <div class="w-6 h-6 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center shrink-0 shadow-sm group-hover:translate-x-1 transition-transform">
                                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Bài 2: Đổi Mới Từ Cà Mau -->
                    <article class="bg-white rounded-2xl p-4 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex flex-col sm:flex-row items-center gap-4 lg:gap-5 group cursor-pointer">
                        <div class="w-full sm:w-[248px] h-[152px] rounded-xl overflow-hidden bg-slate-100 shrink-0 relative">
                            <img src="assets/img/tintuc_art2.png" alt="Đổi Mới Từ Cà Mau" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="flex-1 flex flex-col justify-between h-full min-w-0 w-full text-left py-0.5">
                            <div class="space-y-1.5">
                                <span class="inline-block px-3 py-0.5 rounded-full bg-[#EBF5FF] text-[#062AAD] text-[12px] font-medium tracking-normal">
                                    <?php echo $is_en ? 'Digital Transformation' : 'Chuyển đổi số'; ?>
                                </span>
                                <h3 class="text-[16px] leading-[24px] font-semibold text-[#062AAD] group-hover:text-[#05A6F5] transition-colors line-clamp-1">
                                    <?php echo $is_en ? 'Innovating from Ca Mau' : 'Đổi Mới Từ Cà Mau'; ?>
                                </h3>
                                <p class="text-[12px] leading-[16px] font-medium text-[#5B5B5B] line-clamp-2">
                                    <?php echo $is_en ? 'Building a pragmatic startup and innovation ecosystem in the Mekong Delta.' : 'Xây dựng hệ sinh thái khởi nghiệp và đổi mới sáng tạo thực chất.'; ?>
                                </p>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-auto">
                                <div class="text-[10px] leading-[16px] font-normal text-[#A6A7AA] flex items-center gap-2">
                                    <span>14/04/2026</span>
                                    <span>&bull;</span>
                                    <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                </div>
                                <div class="w-6 h-6 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center shrink-0 shadow-sm group-hover:translate-x-1 transition-transform">
                                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Bài 3: Startup - động lực tăng trưởng của một địa phương -->
                    <article class="bg-white rounded-2xl p-4 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex flex-col sm:flex-row items-center gap-4 lg:gap-5 group cursor-pointer">
                        <div class="w-full sm:w-[248px] h-[152px] rounded-xl overflow-hidden bg-slate-100 shrink-0 relative">
                            <img src="assets/img/tintuc_art3.png" alt="Startup - động lực tăng trưởng" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="flex-1 flex flex-col justify-between h-full min-w-0 w-full text-left py-0.5">
                            <div class="space-y-1.5">
                                <span class="inline-block px-3 py-0.5 rounded-full bg-[#EBF5FF] text-[#062AAD] text-[12px] font-medium tracking-normal">
                                    <?php echo $is_en ? 'ESG & Sustainability' : 'ESG & Phát triển bền vững'; ?>
                                </span>
                                <h3 class="text-[16px] leading-[24px] font-semibold text-[#062AAD] group-hover:text-[#05A6F5] transition-colors line-clamp-1">
                                    <?php echo $is_en ? 'STARTUPS - ENGINE OF LOCAL ECONOMIC GROWTH' : 'STARTUP - ĐỘNG LỰC TĂNG TRƯỞNG CỦA MỘT ĐỊA PHƯƠNG'; ?>
                                </h3>
                                <p class="text-[12px] leading-[16px] font-medium text-[#5B5B5B] line-clamp-2">
                                    <?php echo $is_en ? 'AI is becoming the strategic tool unlocking operational agility, rapid decisions, and customer experience.' : 'AI đang trở thành công cụ chiến lược giúp doanh nghiệp tối ưu vận hành, ra quyết định nhanh và nâng cao trải nghiệm khách hàng.'; ?>
                                </p>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-auto">
                                <div class="text-[10px] leading-[16px] font-normal text-[#A6A7AA] flex items-center gap-2">
                                    <span>14/04/2026</span>
                                    <span>&bull;</span>
                                    <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                </div>
                                <div class="w-6 h-6 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center shrink-0 shadow-sm group-hover:translate-x-1 transition-transform">
                                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Bài 4: Ứng dụng AI trong quản trị doanh nghiệp -->
                    <article class="bg-white rounded-2xl p-4 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex flex-col sm:flex-row items-center gap-4 lg:gap-5 group cursor-pointer">
                        <div class="w-full sm:w-[248px] h-[152px] rounded-xl overflow-hidden bg-slate-100 shrink-0 relative">
                            <img src="assets/img/tintuc_art4.png" alt="Ứng dụng AI trong quản trị doanh nghiệp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="flex-1 flex flex-col justify-between h-full min-w-0 w-full text-left py-0.5">
                            <div class="space-y-1.5">
                                <span class="inline-block px-3 py-0.5 rounded-full bg-[#EBF5FF] text-[#062AAD] text-[12px] font-medium tracking-normal">
                                    <?php echo $is_en ? 'AI & Technology' : 'AI & Công Nghệ'; ?>
                                </span>
                                <h3 class="text-[16px] leading-[24px] font-semibold text-[#062AAD] group-hover:text-[#05A6F5] transition-colors line-clamp-1">
                                    <?php echo $is_en ? 'AI in Enterprise Management: An Inevitable Trend in the Digital Age' : 'Ứng dụng AI trong quản trị doanh nghiệp: Xu hướng tất yếu trong kỳ nguyên số'; ?>
                                </h3>
                                <p class="text-[12px] leading-[16px] font-medium text-[#5B5B5B] line-clamp-2">
                                    <?php echo $is_en ? 'AI is becoming the strategic tool unlocking operational agility, rapid decisions, and customer experience.' : 'AI đang trở thành công cụ chiến lược giúp doanh nghiệp tối ưu vận hành, ra quyết định nhanh và nâng cao trải nghiệm khách hàng.'; ?>
                                </p>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-auto">
                                <div class="text-[10px] leading-[16px] font-normal text-[#A6A7AA] flex items-center gap-2">
                                    <span>14/04/2026</span>
                                    <span>&bull;</span>
                                    <span><?php echo $is_en ? '5 min read' : '5 phút đọc'; ?></span>
                                </div>
                                <div class="w-6 h-6 rounded-full bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white flex items-center justify-center shrink-0 shadow-sm group-hover:translate-x-1 transition-transform">
                                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PHÂN TRANG -->
                <nav class="flex items-center justify-center gap-2 pt-6" aria-label="Phân trang bài viết">
                    <button class="w-10 h-10 rounded-lg bg-white border border-slate-200/80 text-slate-500 hover:border-[#062AAD] hover:text-[#062AAD] flex items-center justify-center transition-colors shadow-2xs" aria-label="Trang trước">
                        <i data-lucide="chevron-left" class="w-4 h-4"></i>
                    </button>
                    
                    <button class="w-10 h-10 rounded-lg bg-[#062AAD] text-white text-[16px] font-medium flex items-center justify-center shadow-xs">
                        1
                    </button>
                    
                    <button class="w-10 h-10 rounded-lg bg-white border border-slate-200/80 text-[#373737] hover:border-[#062AAD] hover:text-[#062AAD] text-[16px] font-medium flex items-center justify-center transition-colors shadow-2xs">
                        2
                    </button>
                    
                    <button class="w-10 h-10 rounded-lg bg-white border border-slate-200/80 text-[#373737] hover:border-[#062AAD] hover:text-[#062AAD] text-[16px] font-medium flex items-center justify-center transition-colors shadow-2xs">
                        3
                    </button>
                    
                    <span class="w-10 h-10 flex items-center justify-center text-[#555555] font-medium text-[16px]">
                        ...
                    </span>
                    
                    <button class="w-10 h-10 rounded-lg bg-white border border-slate-200/80 text-[#373737] hover:border-[#062AAD] hover:text-[#062AAD] text-[16px] font-medium flex items-center justify-center transition-colors shadow-2xs">
                        10
                    </button>
                    
                    <button class="w-10 h-10 rounded-lg bg-white border border-slate-200/80 text-slate-500 hover:border-[#062AAD] hover:text-[#062AAD] flex items-center justify-center transition-colors shadow-2xs" aria-label="Trang tiếp">
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </button>
                </nav>
            </div>

        </div>

        <!-- CỘT PHẢI (5/12 CỘT) - TÌM KIẾM, DANH MỤC, BÀI VIẾT XEM NHIỀU & BẢNG TIN -->
        <div class="lg:col-span-5 space-y-6 text-left">
            
            <!-- WIDGET 1: THANH TÌM KIẾM BÀI VIẾT -->
            <form action="tin-tuc.php" method="GET" class="relative bg-white rounded-lg p-2.5 px-4 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] flex items-center gap-3">
                <i data-lucide="search" class="w-4 h-4 text-[#A6A7AA] shrink-0"></i>
                <input type="text" name="q" placeholder="<?php echo $is_en ? 'Search articles...' : 'Tìm kiếm bài viết'; ?>" class="w-full bg-transparent text-[14px] text-slate-800 placeholder-[#A6A7AA] focus:outline-none font-medium">
            </form>

            <!-- WIDGET 2: DANH MỤC -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] space-y-4">
                <h2 class="text-[24px] leading-[32px] font-semibold text-[#062AAD]">
                    <?php echo $is_en ? 'Categories' : 'Danh mục'; ?>
                </h2>

                <div class="space-y-1.5">
                    <a href="tin-tuc.php" class="bg-[#EBF5FF] text-[#062AAD] font-semibold text-[16px] leading-[24px] rounded-lg px-4 py-3 flex items-center justify-between transition-colors">
                        <span><?php echo $is_en ? 'All Topics' : 'Tất cả'; ?></span>
                        <span>448</span>
                    </a>
                    
                    <a href="tin-tuc.php?category=digital" class="text-[#5B5B5B] hover:text-[#062AAD] hover:bg-slate-50 font-semibold text-[16px] leading-[24px] rounded-lg px-4 py-2.5 flex items-center justify-between transition-colors">
                        <span><?php echo $is_en ? 'Digital Transformation' : 'Chuyển đổi số'; ?></span>
                        <span class="text-[#5B5B5B]">126</span>
                    </a>

                    <a href="tin-tuc.php?category=ai" class="text-[#5B5B5B] hover:text-[#062AAD] hover:bg-slate-50 font-semibold text-[16px] leading-[24px] rounded-lg px-4 py-2.5 flex items-center justify-between transition-colors">
                        <span><?php echo $is_en ? 'AI & Technology' : 'AI & Công nghệ'; ?></span>
                        <span class="text-[#5B5B5B]">98</span>
                    </a>

                    <a href="tin-tuc.php?category=esg" class="text-[#5B5B5B] hover:text-[#062AAD] hover:bg-slate-50 font-semibold text-[16px] leading-[24px] rounded-lg px-4 py-2.5 flex items-center justify-between transition-colors">
                        <span><?php echo $is_en ? 'ESG & Sustainability' : 'ESG & Phát triển bền vững'; ?></span>
                        <span class="text-[#5B5B5B]">75</span>
                    </a>

                    <a href="tin-tuc.php?category=cinec" class="text-[#5B5B5B] hover:text-[#062AAD] hover:bg-slate-50 font-semibold text-[16px] leading-[24px] rounded-lg px-4 py-2.5 flex items-center justify-between transition-colors">
                        <span><?php echo $is_en ? 'CiNEC Activities' : 'Hoạt động CiNEC'; ?></span>
                        <span class="text-[#5B5B5B]">189</span>
                    </a>
                </div>
            </div>

            <!-- WIDGET 3: BÀI VIẾT XEM NHIỀU -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] space-y-4">
                <h2 class="text-[24px] leading-[32px] font-semibold text-[#062AAD]">
                    <?php echo $is_en ? 'Most Read Articles' : 'Bài viết xem nhiều'; ?>
                </h2>

                <div class="space-y-3.5">
                    <!-- Pop 1 -->
                    <div class="flex items-center gap-3.5 group cursor-pointer">
                        <img src="assets/img/tintuc_pop1.png" alt="Đánh Thức Con Tàu Khởi Nghiệp Cực Nam" class="w-[100px] h-[76px] rounded-lg object-cover shrink-0 bg-slate-100 group-hover:opacity-90 transition-opacity">
                        <div class="space-y-1 min-w-0">
                            <h4 class="text-[12px] leading-[16px] font-semibold text-[#062AAD] group-hover:text-[#05A6F5] transition-colors line-clamp-2">
                                <?php echo $is_en ? 'Awakening the Southernmost Startup Vessel' : 'Đánh Thức Con Tàu Khởi Nghiệp Cực Nam'; ?>
                            </h4>
                            <div class="text-[10px] leading-[16px] font-normal text-[#A6A7AA]">
                                14/04/2026
                            </div>
                        </div>
                    </div>

                    <!-- Pop 2 -->
                    <div class="flex items-center gap-3.5 group cursor-pointer">
                        <img src="assets/img/tintuc_pop2.png" alt="Đổi Mới Từ Cà Mau" class="w-[100px] h-[76px] rounded-lg object-cover shrink-0 bg-slate-100 group-hover:opacity-90 transition-opacity">
                        <div class="space-y-1 min-w-0">
                            <h4 class="text-[12px] leading-[16px] font-semibold text-[#062AAD] group-hover:text-[#05A6F5] transition-colors line-clamp-2">
                                <?php echo $is_en ? 'Innovating from Ca Mau' : 'Đổi Mới Từ Cà Mau'; ?>
                            </h4>
                            <div class="text-[10px] leading-[16px] font-normal text-[#A6A7AA]">
                                14/04/2026
                            </div>
                        </div>
                    </div>

                    <!-- Pop 3 -->
                    <div class="flex items-center gap-3.5 group cursor-pointer">
                        <img src="assets/img/tintuc_pop3.png" alt="STARTUP - ĐỘNG LỰC TĂNG TRƯỞNG CỦA MỘT ĐỊA PHƯƠNG" class="w-[100px] h-[76px] rounded-lg object-cover shrink-0 bg-slate-100 group-hover:opacity-90 transition-opacity">
                        <div class="space-y-1 min-w-0">
                            <h4 class="text-[12px] leading-[16px] font-semibold text-[#062AAD] group-hover:text-[#05A6F5] transition-colors line-clamp-2">
                                <?php echo $is_en ? 'STARTUP - ENGINE OF LOCAL GROWTH' : 'STARTUP - ĐỘNG LỰC TĂNG TRƯỞNG CỦA MỘT ĐỊA PHƯƠNG'; ?>
                            </h4>
                            <div class="text-[10px] leading-[16px] font-normal text-[#A6A7AA]">
                                14/04/2026
                            </div>
                        </div>
                    </div>

                    <!-- Pop 4 -->
                    <div class="flex items-center gap-3.5 group cursor-pointer">
                        <img src="assets/img/tintuc_pop4.png" alt="Ứng dụng AI trong quản trị doanh nghiệp" class="w-[100px] h-[76px] rounded-lg object-cover shrink-0 bg-slate-100 group-hover:opacity-90 transition-opacity">
                        <div class="space-y-1 min-w-0">
                            <h4 class="text-[12px] leading-[16px] font-semibold text-[#062AAD] group-hover:text-[#05A6F5] transition-colors line-clamp-2">
                                <?php echo $is_en ? 'AI in Enterprise Management: Strategic Digital Shift' : 'Ứng dụng AI trong quản trị doanh nghiệp: Xu hướng tất yếu trong kỳ nguyên số'; ?>
                            </h4>
                            <div class="text-[10px] leading-[16px] font-normal text-[#A6A7AA]">
                                14/04/2026
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WIDGET 4: ĐĂNG KÝ NHẬN BẢNG TIN -->
            <div class="bg-[#02155B] text-white rounded-2xl p-6 shadow-lg border border-blue-950 space-y-4">
                <div class="space-y-1.5">
                    <h2 class="text-[24px] leading-[32px] font-semibold text-white">
                        <?php echo $is_en ? 'Subscribe to Newsletter' : 'Đăng ký nhận bảng tin'; ?>
                    </h2>
                    <p class="text-[14px] leading-[20px] font-medium text-[#A6A7AA]">
                        <?php echo $is_en ? 'Receive the latest articles and insights on regional innovation and startups.' : 'Nhận những bài viết và thông tin mới nhất về đổi mới sáng tạo và khởi nghiệp.'; ?>
                    </p>
                </div>

                <form onsubmit="event.preventDefault(); alert('<?php echo $is_en ? 'Thank you for subscribing to CiNEC Newsletter!' : 'Cảm ơn bạn đã đăng ký nhận bản tin CINEC!'; ?>');" class="space-y-3">
                    <div class="bg-white rounded-lg p-1 pl-3.5 flex items-center justify-between gap-2 shadow-inner">
                        <input type="email" required placeholder="<?php echo $is_en ? 'Enter your email' : 'Nhập email của bạn'; ?>" class="w-full bg-transparent text-[14px] text-slate-800 placeholder-[#A6A7AA] focus:outline-none font-medium">
                        <button type="submit" class="w-8 h-8 rounded-md bg-transparent hover:bg-slate-100 text-[#062AAD] flex items-center justify-center shrink-0 transition-colors" aria-label="Gửi đăng ký">
                            <i data-lucide="send" class="w-4 h-4 text-[#062AAD]"></i>
                        </button>
                    </div>

                    <p class="text-[12.5px] leading-[18px] font-normal text-slate-400">
                        <?php echo $is_en ? 'By subscribing, you agree to CiNEC Privacy Policy.' : 'Bằng việc đăng ký, bạn đồng ý với chính sách bảo mật của CINEC.'; ?>
                    </p>
                </form>
            </div>

        </div>

    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
