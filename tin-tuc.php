<?php
$page_title = "Tin Tức & Insight - CINEC Cà Mau";
require_once 'config/db.php';
require_once 'includes/header.php';
?>

<!-- BREADCRUMBS BAR -->
<div class="bg-[#FAFCFF] pt-28 pb-3">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 text-[11px] font-medium text-slate-500 flex items-center gap-1.5">
        <a href="index.php" class="hover:text-[#062AAD] transition-colors">Trang chủ</a>
        <span>&gt;</span>
        <span class="text-[#062AAD] font-bold">Tin tức & Insight</span>
    </div>
</div>

<!-- HERO TOP BANNER (DARK BLUE TECH GLOBE BANNER) -->
<section class="relative bg-gradient-to-r from-[#02185D] via-[#02185D]/95 to-[#062AAD] text-white overflow-hidden shadow-2xl py-12">
    <!-- Đồ họa mảng cầu số / mạng lưới xanh góc phải -->
    <div class="absolute right-0 top-0 bottom-0 w-full lg:w-1/2 opacity-35 bg-cover bg-right pointer-events-none mix-blend-screen" style="background-image: url('assets/img/hero-bg.jpg');"></div>
    
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 relative z-10 space-y-3 text-left">
        <h1 class="text-h3 md:text-h2 font-extrabold text-white leading-tight">
            Tin tức & Insight
        </h1>
        <p class="text-body-xs md:text-body-sm text-blue-200 font-light max-w-lg leading-relaxed">
            Cập nhật xu hướng đổi mới sáng tạo, chuyển đổi số và<br class="hidden sm:inline"> phát triển bền vững
        </p>
    </div>
</section>

<!-- MAIN CONTENT CONTAINER (2 CỘT: TRÁI 7/12 & PHẢI 5/12) -->
<section class="py-12 bg-[#FAFCFF]">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- CỘT TRÁI (7/12 CỘT) - CHUYÊN ĐỀ NỔI BẬT & BÀI VIẾT MỚI NHẤT -->
        <div class="lg:col-span-7 space-y-10">
            
            <!-- SECTION CHUYÊN ĐỀ NỔI BẬT (3 CARD HÀNG NGANG) -->
            <div class="space-y-4">
                <h2 class="text-h4 font-extrabold text-[#02185D]">Chuyên đề nổi bật</h2>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <!-- Card 1: Chuyển đổi số -->
                    <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm flex items-center gap-3.5 hover:shadow-premium hover:-translate-y-0.5 transition-all cursor-pointer group">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-[#05A6F5] flex items-center justify-center shrink-0 border border-blue-100/60 group-hover:bg-[#062AAD] group-hover:text-white transition-colors">
                            <i data-lucide="trending-up" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h3 class="text-body-xs font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors">Chuyển đổi số</h3>
                            <p class="text-[11px] text-slate-400 font-normal">126 bài viết</p>
                        </div>
                    </div>

                    <!-- Card 2: AI & Công nghệ -->
                    <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm flex items-center gap-3.5 hover:shadow-premium hover:-translate-y-0.5 transition-all cursor-pointer group">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-[#05A6F5] flex items-center justify-center shrink-0 border border-blue-100/60 group-hover:bg-[#062AAD] group-hover:text-white transition-colors">
                            <i data-lucide="cpu" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h3 class="text-body-xs font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors">AI & Công nghệ</h3>
                            <p class="text-[11px] text-slate-400 font-normal">98 bài viết</p>
                        </div>
                    </div>

                    <!-- Card 3: ESG & Phát triển bền vững -->
                    <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm flex items-center gap-3.5 hover:shadow-premium hover:-translate-y-0.5 transition-all cursor-pointer group">
                        <div class="w-10 h-10 rounded-full bg-lime-50 text-[#71A800] flex items-center justify-center shrink-0 border border-lime-100/60 group-hover:bg-[#71A800] group-hover:text-white transition-colors">
                            <i data-lucide="leaf" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h3 class="text-body-xs font-extrabold text-[#02185D] group-hover:text-[#71A800] transition-colors">ESG & Phát triển</h3>
                            <p class="text-[11px] text-slate-400 font-normal">75 bài viết</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION BÀI VIẾT MỚI NHẤT (DANH SÁCH 4 BÀI HÀNG NGANG KHỚP 100% FIGMA) -->
            <div class="space-y-6">
                <h2 class="text-h4 font-extrabold text-[#02185D]">Bài viết mới nhất</h2>

                <div class="space-y-5">
                    <!-- Article 1 -->
                    <div class="bg-white rounded-3xl p-4 border border-slate-200/80 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col sm:flex-row items-center gap-5 group cursor-pointer">
                        <div class="w-full sm:w-52 h-36 rounded-2xl overflow-hidden bg-slate-900 shrink-0 relative">
                            <img src="assets/img/hero-bg.jpg" alt="Article Cover" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="flex-1 space-y-2.5 min-w-0 w-full text-left">
                            <span class="inline-block px-3 py-1 rounded-full bg-blue-50 text-[#05A6F5] text-[10px] font-extrabold uppercase tracking-wider">
                                AI & Công nghệ
                            </span>
                            <h3 class="text-body-md font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors leading-snug line-clamp-2">
                                Đánh Thức Con Tàu Khởi Nghiệp Cực Nam
                            </h3>
                            <p class="text-body-xs text-slate-500 font-normal line-clamp-2">
                                Những Nút Thắt Cần Tháo Gỡ
                            </p>
                            <div class="text-[11px] text-slate-400 font-medium pt-1">
                                14/04/2026 &bull; 5 phút đọc
                            </div>
                        </div>
                        <div class="w-9 h-9 rounded-full bg-[#062AAD] text-white flex items-center justify-center shrink-0 self-center sm:self-center shadow-md group-hover:bg-[#05A6F5] transition-colors">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </div>

                    <!-- Article 2 -->
                    <div class="bg-white rounded-3xl p-4 border border-slate-200/80 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col sm:flex-row items-center gap-5 group cursor-pointer">
                        <div class="w-full sm:w-52 h-36 rounded-2xl overflow-hidden bg-slate-900 shrink-0 relative">
                            <img src="assets/img/intro-building.jpg" alt="Article Cover" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="flex-1 space-y-2.5 min-w-0 w-full text-left">
                            <span class="inline-block px-3 py-1 rounded-full bg-blue-50 text-[#05A6F5] text-[10px] font-extrabold uppercase tracking-wider">
                                Chuyển đổi số
                            </span>
                            <h3 class="text-body-md font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors leading-snug line-clamp-2">
                                Đổi Mới Từ Cà Mau
                            </h3>
                            <p class="text-body-xs text-slate-500 font-normal line-clamp-2">
                                Xây dựng hệ sinh thái khởi nghiệp và đổi mới sáng tạo thực chất.
                            </p>
                            <div class="text-[11px] text-slate-400 font-medium pt-1">
                                14/04/2026 &bull; 5 phút đọc
                            </div>
                        </div>
                        <div class="w-9 h-9 rounded-full bg-[#062AAD] text-white flex items-center justify-center shrink-0 self-center sm:self-center shadow-md group-hover:bg-[#05A6F5] transition-colors">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div class="bg-white rounded-3xl p-4 border border-slate-200/80 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col sm:flex-row items-center gap-5 group cursor-pointer">
                        <div class="w-full sm:w-52 h-36 rounded-2xl overflow-hidden bg-slate-900 shrink-0 relative">
                            <img src="assets/img/ui-elements.png" alt="Article Cover" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="flex-1 space-y-2.5 min-w-0 w-full text-left">
                            <span class="inline-block px-3 py-1 rounded-full bg-lime-50 text-[#71A800] text-[10px] font-extrabold uppercase tracking-wider">
                                ESG & Phát triển bền vững
                            </span>
                            <h3 class="text-body-md font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors leading-snug line-clamp-2">
                                Startup - động lực tăng trưởng của một địa phương
                            </h3>
                            <p class="text-body-xs text-slate-500 font-normal line-clamp-2">
                                AI đang trở thành công cụ chiến lược giúp doanh nghiệp tối ưu vận hành, ra quyết định nhanh và nâng cao trải nghiệm khách hàng.
                            </p>
                            <div class="text-[11px] text-slate-400 font-medium pt-1">
                                14/04/2026 &bull; 5 phút đọc
                            </div>
                        </div>
                        <div class="w-9 h-9 rounded-full bg-[#062AAD] text-white flex items-center justify-center shrink-0 self-center sm:self-center shadow-md group-hover:bg-[#05A6F5] transition-colors">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </div>

                    <!-- Article 4 -->
                    <div class="bg-white rounded-3xl p-4 border border-slate-200/80 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col sm:flex-row items-center gap-5 group cursor-pointer">
                        <div class="w-full sm:w-52 h-36 rounded-2xl overflow-hidden bg-slate-900 shrink-0 relative">
                            <img src="assets/img/office.png" alt="Article Cover" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="flex-1 space-y-2.5 min-w-0 w-full text-left">
                            <span class="inline-block px-3 py-1 rounded-full bg-blue-50 text-[#05A6F5] text-[10px] font-extrabold uppercase tracking-wider">
                                AI & Công nghệ
                            </span>
                            <h3 class="text-body-md font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors leading-snug line-clamp-2">
                                Ứng dụng AI trong quản trị doanh nghiệp: Xu hướng tất yếu
                            </h3>
                            <p class="text-body-xs text-slate-500 font-normal line-clamp-2">
                                AI đang trở thành công cụ chiến lược giúp doanh nghiệp tối ưu vận hành, ra quyết định nhanh và nâng cao trải nghiệm khách hàng.
                            </p>
                            <div class="text-[11px] text-slate-400 font-medium pt-1">
                                14/04/2026 &bull; 5 phút đọc
                            </div>
                        </div>
                        <div class="w-9 h-9 rounded-full bg-[#062AAD] text-white flex items-center justify-center shrink-0 self-center sm:self-center shadow-md group-hover:bg-[#05A6F5] transition-colors">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>

                <!-- PHÂN TRANG (PAGINATION NÚT TRÒN KHỚP FIGMA) -->
                <div class="flex items-center justify-center gap-2 pt-6">
                    <button class="w-9 h-9 rounded-full bg-white border border-slate-200 text-slate-500 hover:border-[#062AAD] flex items-center justify-center text-body-xs font-bold shadow-sm transition-colors">
                        <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    </button>
                    <button class="w-9 h-9 rounded-full bg-[#062AAD] text-white flex items-center justify-center text-body-xs font-extrabold shadow-md">
                        1
                    </button>
                    <button class="w-9 h-9 rounded-full bg-white border border-slate-200 text-slate-600 hover:border-[#062AAD] flex items-center justify-center text-body-xs font-bold shadow-sm transition-colors">
                        2
                    </button>
                    <button class="w-9 h-9 rounded-full bg-white border border-slate-200 text-slate-600 hover:border-[#062AAD] flex items-center justify-center text-body-xs font-bold shadow-sm transition-colors">
                        3
                    </button>
                    <span class="text-slate-400 text-body-xs px-1 font-bold">...</span>
                    <button class="w-9 h-9 rounded-full bg-white border border-slate-200 text-slate-600 hover:border-[#062AAD] flex items-center justify-center text-body-xs font-bold shadow-sm transition-colors">
                        10
                    </button>
                    <button class="w-9 h-9 rounded-full bg-white border border-slate-200 text-slate-500 hover:border-[#062AAD] flex items-center justify-center text-body-xs font-bold shadow-sm transition-colors">
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>

        </div>

        <!-- CỘT PHẢI (5/12 CỘT) - TÌM KIẾM, DANH MỤC, BÀI VIẾT XEM NHIỀU & BẢNG TIN -->
        <div class="lg:col-span-5 space-y-6">
            
            <!-- WIDGET 1: THANH TÌM KIẾM BÀI VIẾT -->
            <div class="relative bg-white rounded-2xl p-2 border border-slate-200/80 shadow-sm">
                <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-4 top-1/2 -translate-y-1/2"></i>
                <input type="text" placeholder="Tìm kiếm bài viết" class="w-full pl-10 pr-4 py-2 bg-transparent text-body-xs text-slate-700 focus:outline-none">
            </div>

            <!-- WIDGET 2: DANH MỤC (CATEGORY BOX KHỚP 100% FIGMA) -->
            <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                <h2 class="text-h4 font-extrabold text-[#02185D]">Danh mục</h2>

                <div class="space-y-1.5 text-body-xs">
                    <!-- Item Active: Tất cả -->
                    <a href="#" class="bg-[#EBF5FF] text-[#062AAD] font-extrabold rounded-2xl px-4 py-3 flex items-center justify-between transition-all">
                        <span>Tất cả</span>
                        <span>448</span>
                    </a>
                    
                    <!-- Item: Chuyển đổi số -->
                    <a href="#" class="text-slate-600 font-medium hover:text-[#062AAD] rounded-2xl px-4 py-2.5 flex items-center justify-between hover:bg-slate-50 transition-all">
                        <span>Chuyển đổi số</span>
                        <span class="font-bold text-slate-400">126</span>
                    </a>

                    <!-- Item: AI & Công nghệ -->
                    <a href="#" class="text-slate-600 font-medium hover:text-[#062AAD] rounded-2xl px-4 py-2.5 flex items-center justify-between hover:bg-slate-50 transition-all">
                        <span>AI & Công nghệ</span>
                        <span class="font-bold text-slate-400">98</span>
                    </a>

                    <!-- Item: ESG & Phát triển bền vững -->
                    <a href="#" class="text-slate-600 font-medium hover:text-[#062AAD] rounded-2xl px-4 py-2.5 flex items-center justify-between hover:bg-slate-50 transition-all">
                        <span>ESG & Phát triển bền vững</span>
                        <span class="font-bold text-slate-400">75</span>
                    </a>

                    <!-- Item: Hoạt động CINEC -->
                    <a href="#" class="text-slate-600 font-medium hover:text-[#062AAD] rounded-2xl px-4 py-2.5 flex items-center justify-between hover:bg-slate-50 transition-all">
                        <span>Hoạt động CINEC</span>
                        <span class="font-bold text-slate-400">189</span>
                    </a>
                </div>
            </div>

            <!-- WIDGET 3: BÀI VIẾT XEM NHIỀU (POPULAR POSTS KHỚP FIGMA) -->
            <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                <h2 class="text-h4 font-extrabold text-[#02185D]">Bài viết xem nhiều</h2>

                <div class="space-y-4">
                    <!-- Pop 1 -->
                    <div class="flex items-center gap-3.5 group cursor-pointer border-b border-slate-100 pb-3 last:border-0 last:pb-0">
                        <img src="assets/img/hero-bg.jpg" alt="Popular Post Thumbnail" class="w-20 h-14 rounded-xl object-cover shrink-0">
                        <div class="space-y-1">
                            <h4 class="text-[12px] font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                Đánh Thức Con Tàu Khởi Nghiệp Cực Nam
                            </h4>
                            <div class="text-[10px] text-slate-400 font-medium">14/04/2026</div>
                        </div>
                    </div>

                    <!-- Pop 2 -->
                    <div class="flex items-center gap-3.5 group cursor-pointer border-b border-slate-100 pb-3 last:border-0 last:pb-0">
                        <img src="assets/img/intro-building.jpg" alt="Popular Post Thumbnail" class="w-20 h-14 rounded-xl object-cover shrink-0">
                        <div class="space-y-1">
                            <h4 class="text-[12px] font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                Đổi Mới Từ Cà Mau
                            </h4>
                            <div class="text-[10px] text-slate-400 font-medium">14/04/2026</div>
                        </div>
                    </div>

                    <!-- Pop 3 -->
                    <div class="flex items-center gap-3.5 group cursor-pointer border-b border-slate-100 pb-3 last:border-0 last:pb-0">
                        <img src="assets/img/ui-elements.png" alt="Popular Post Thumbnail" class="w-20 h-14 rounded-xl object-cover shrink-0">
                        <div class="space-y-1">
                            <h4 class="text-[12px] font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                STARTUP - ĐỘNG LỰC TĂNG TRƯỞNG CỦA...
                            </h4>
                            <div class="text-[10px] text-slate-400 font-medium">14/04/2026</div>
                        </div>
                    </div>

                    <!-- Pop 4 -->
                    <div class="flex items-center gap-3.5 group cursor-pointer">
                        <img src="assets/img/office.png" alt="Popular Post Thumbnail" class="w-20 h-14 rounded-xl object-cover shrink-0">
                        <div class="space-y-1">
                            <h4 class="text-[12px] font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                Ứng dụng AI trong quản trị doanh nghiệp...
                            </h4>
                            <div class="text-[10px] text-slate-400 font-medium">14/04/2026</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WIDGET 4: ĐĂNG KÝ NHẬN BẢNG TIN (NEWSLETTER BLUE BOX FIGMA) -->
            <div class="bg-[#02185D] text-white rounded-3xl p-6 shadow-xl space-y-4">
                <div class="space-y-1">
                    <h2 class="text-h4 font-extrabold text-white">Đăng ký nhận bảng tin</h2>
                    <p class="text-body-xs text-blue-200 font-light leading-relaxed">
                        Nhận những bài viết và thông tin mới nhất về đổi mới sáng tạo và khởi nghiệp.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-1.5 flex items-center justify-between gap-2 shadow-inner">
                    <input type="email" placeholder="Nhập email của bạn" class="w-full bg-transparent pl-3 text-body-xs text-slate-800 focus:outline-none placeholder-slate-400">
                    <button class="w-9 h-9 rounded-xl bg-[#062AAD] hover:bg-[#05A6F5] text-white flex items-center justify-center shrink-0 transition-colors shadow-md">
                        <i data-lucide="send" class="w-4 h-4"></i>
                    </button>
                </div>

                <p class="text-[10px] text-blue-300 font-light leading-snug">
                    Bằng việc đăng ký, bạn đồng ý với chính sách bảo mật của CiNEC.
                </p>
            </div>

        </div>

    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
