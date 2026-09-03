<?php
$page_title = "CiNEC Impact - Tác Động Hệ Sinh Thái Đổi Mới Sáng Tạo";
require_once 'config/db.php';
require_once 'includes/header.php';
?>

<!-- TRANG IMPACT CHUẨN 100% CẤU TRÚC FIGMA (TỐI ƯU HÌNH ẢNH BANNER & BIỂU ĐỒ TRÒN HOÀN HẢO) -->
<div class="bg-[#FAFCFF] min-h-screen pt-28 pb-16">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-12">

        <!-- BREADCRUMBS BAR CHUẨN FIGMA -->
        <div class="text-[11px] font-medium text-slate-500 flex items-center gap-1.5 text-left">
            <a href="index.php" class="hover:text-[#062AAD] transition-colors">Trang chủ</a>
            <span>&gt;</span>
            <span class="text-[#062AAD] font-bold">Impact</span>
        </div>

        <!-- HERO TOP BANNER (NỀN SÁNG VỚI HÌNH ẢNH CẦU CẦU QUỐC TẾ & QUẢ CẦU CÔNG NGHỆ GÓC PHẢI KHỚP FIGMA) -->
        <div class="relative bg-white rounded-3xl p-6 md:p-10 border border-slate-200/80 shadow-sm overflow-hidden grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <!-- Cột trái: Tiêu đề & Thuyết minh -->
            <div class="lg:col-span-7 space-y-3 text-left relative z-10">
                <h1 class="text-h3 md:text-h2 font-extrabold text-[#02185D] leading-tight">
                    CiNEC <span class="text-[#71A800]">Impact</span>
                </h1>
                <p class="text-body-xs md:text-body-sm text-slate-500 font-normal leading-relaxed max-w-xl">
                    CINEC cam kết tạo ra tác động tích cực và bền vững cho hệ sinh thái<br class="hidden sm:inline"> đổi mới sáng tạo của Cà Mau và khu vực Đồng bằng sông Cửu Long.
                </p>
            </div>

            <!-- Cột phải: Khung Đồ Họa Cầu Cầu & Quả Cầu Số Rõ Nét Nổi Bật Chuẩn Figma -->
            <div class="lg:col-span-5 relative h-56 md:h-64 rounded-2xl overflow-hidden shadow-md border border-slate-100 hidden md:block">
                <!-- Ảnh Cầu Cần Thơ / Cầu Cà Mau & Đô thị sáng -->
                <img src="assets/img/intro-building.jpg" alt="City & Bridge Impact" class="w-full h-full object-cover">
                
                <!-- Lớp phủ quả cầu công nghệ phát sáng hiệu ứng Glassmorphism mờ -->
                <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/40 to-transparent flex items-center justify-end pr-4">
                    <div class="relative w-48 h-48 rounded-full bg-gradient-to-br from-[#062AAD]/20 via-[#05A6F5]/20 to-[#71A800]/20 backdrop-blur-sm border border-white/60 p-4 flex items-center justify-center animate-pulse">
                        <img src="assets/img/hero-bg.jpg" class="w-40 h-40 rounded-full object-cover mix-blend-overlay opacity-80">
                        <div class="absolute inset-0 rounded-full border-2 border-dashed border-[#05A6F5]/60 animate-spin" style="animation-duration: 20s;"></div>
                        <!-- Icon mạng lưới vệ tinh -->
                        <div class="absolute top-2 right-4 w-7 h-7 rounded-full bg-[#062AAD] text-white flex items-center justify-center shadow-md">
                            <i data-lucide="globe" class="w-4 h-4"></i>
                        </div>
                        <div class="absolute bottom-3 left-3 w-7 h-7 rounded-full bg-[#71A800] text-white flex items-center justify-center shadow-md">
                            <i data-lucide="trending-up" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- SECTION 1: DASHBOARD TỔNG QUAN (3 ANALYTICS CHARTS CARDS GRID CHUẨN FIGMA) -->
        <div class="space-y-6 text-left">
            <h2 class="text-h3 font-extrabold text-[#02185D]">
                Dashboard tổng quan
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- CARD 1: SỐ LIỆU NỔI BẬT NĂM 2025 (VERTICAL BAR CHART FIGMA) -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm space-y-4 hover:shadow-premium transition-all flex flex-col justify-between">
                    <div>
                        <h3 class="text-body-md font-extrabold text-[#02185D] mb-6">Số liệu nổi bật năm 2025</h3>
                        
                        <!-- Biểu đồ Cột SVG Visual Canvas -->
                        <div class="h-44 flex items-end justify-between gap-3 pt-4 pb-2 px-2 border-b border-slate-200/80">
                            <!-- Col 1 -->
                            <div class="flex-1 flex flex-col items-center gap-1 group">
                                <span class="text-[10px] font-black text-[#062AAD]">200+</span>
                                <div class="w-full bg-gradient-to-t from-[#062AAD] to-[#05A6F5] rounded-t-lg transition-all group-hover:brightness-110" style="height: 120px;"></div>
                                <span class="text-[9px] text-slate-400 font-medium text-center line-clamp-1">Startup</span>
                            </div>
                            <!-- Col 2 -->
                            <div class="flex-1 flex flex-col items-center gap-1 group">
                                <span class="text-[10px] font-black text-[#05A6F5]">120+</span>
                                <div class="w-full bg-[#05A6F5] rounded-t-lg transition-all group-hover:brightness-110" style="height: 75px;"></div>
                                <span class="text-[9px] text-slate-400 font-medium text-center line-clamp-1">Tập huấn</span>
                            </div>
                            <!-- Col 3 -->
                            <div class="flex-1 flex flex-col items-center gap-1 group">
                                <span class="text-[10px] font-black text-[#062AAD]">180+</span>
                                <div class="w-full bg-[#062AAD] rounded-t-lg transition-all group-hover:brightness-110" style="height: 105px;"></div>
                                <span class="text-[9px] text-slate-400 font-medium text-center line-clamp-1">Mentors</span>
                            </div>
                            <!-- Col 4 -->
                            <div class="flex-1 flex flex-col items-center gap-1 group">
                                <span class="text-[10px] font-black text-[#71A800]">25+</span>
                                <div class="w-full bg-[#71A800] rounded-t-lg transition-all group-hover:brightness-110" style="height: 35px;"></div>
                                <span class="text-[9px] text-slate-400 font-medium text-center line-clamp-1">Quỹ</span>
                            </div>
                            <!-- Col 5 -->
                            <div class="flex-1 flex flex-col items-center gap-1 group">
                                <span class="text-[10px] font-black text-[#2E7D32]">5+</span>
                                <div class="w-full bg-[#2E7D32] rounded-t-lg transition-all group-hover:brightness-110" style="height: 20px;"></div>
                                <span class="text-[9px] text-slate-400 font-medium text-center line-clamp-1">Quốc tế</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-[10px] text-slate-400 font-medium pt-2">Số liệu cập nhật đến 31/12/2025</p>
                </div>

                <!-- CARD 2: TÁC ĐỘNG THEO LĨNH VỰC (BIỂU ĐỒ TRÒN DONUT CHUẨN TRÒN 100% PERFECT CIRCLE) -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm space-y-4 hover:shadow-premium transition-all flex flex-col justify-between">
                    <div>
                        <h3 class="text-body-md font-extrabold text-[#02185D] mb-4">Tác động theo lĩnh vực</h3>
                        
                        <!-- Biểu đồ Donut SVG Tròn Hoàn Hảo (Tỷ lệ aspect-square 1:1) -->
                        <div class="flex items-center justify-between gap-4 py-2">
                            <!-- Canvas SVG Donut 100% Tròn xoe -->
                            <div class="relative w-36 h-36 aspect-square shrink-0 flex items-center justify-center">
                                <svg class="w-full h-full transform -rotate-90" viewBox="0 0 42 42">
                                    <!-- Nền vòng tròn nhạt -->
                                    <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#F1F5F9" stroke-width="5"></circle>
                                    
                                    <!-- Segment 1: 40% Deep Blue (#02185D) -->
                                    <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#02185D" stroke-width="5.5" stroke-dasharray="40 60" stroke-dashoffset="0"></circle>
                                    
                                    <!-- Segment 2: 25% Sky Blue (#05A6F5) -->
                                    <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#05A6F5" stroke-width="5.5" stroke-dasharray="25 75" stroke-dashoffset="-40"></circle>
                                    
                                    <!-- Segment 3: 20% Lime Green (#71A800) -->
                                    <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#71A800" stroke-width="5.5" stroke-dasharray="20 80" stroke-dashoffset="-65"></circle>
                                    
                                    <!-- Segment 4: 15% Purple (#8E24AA) -->
                                    <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#8E24AA" stroke-width="5.5" stroke-dasharray="15 85" stroke-dashoffset="-85"></circle>
                                </svg>
                            </div>

                            <!-- Legend List Right -->
                            <div class="space-y-2 text-[10px] font-bold flex-1 min-w-0">
                                <div class="flex items-center gap-2 text-slate-700">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#02185D] shrink-0"></span>
                                    <span class="truncate">Chuyển đổi số <b class="text-[#02185D]">40%</b></span>
                                </div>
                                <div class="flex items-center gap-2 text-slate-700">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#05A6F5] shrink-0"></span>
                                    <span class="truncate">Nông nghiệp <b class="text-[#05A6F5]">25%</b></span>
                                </div>
                                <div class="flex items-center gap-2 text-slate-700">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#71A800] shrink-0"></span>
                                    <span class="truncate">Năng lượng xanh <b class="text-[#71A800]">20%</b></span>
                                </div>
                                <div class="flex items-center gap-2 text-slate-700">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#8E24AA] shrink-0"></span>
                                    <span class="truncate">Du lịch & Dịch vụ <b class="text-[#8E24AA]">15%</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 3: PHÂN BỐ HỖ TRỢ CHO STARTUP (BIỂU ĐỒ TRÒN DONUT CHUẨN TRÒN 100% PERFECT CIRCLE) -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm space-y-4 hover:shadow-premium transition-all flex flex-col justify-between">
                    <div>
                        <h3 class="text-body-md font-extrabold text-[#02185D] mb-4">Phân bố hỗ trợ cho Startup</h3>
                        
                        <!-- Biểu đồ Donut SVG Tròn Hoàn Hảo (Tỷ lệ aspect-square 1:1) -->
                        <div class="flex items-center justify-between gap-4 py-2">
                            <!-- Canvas SVG Donut 100% Tròn xoe -->
                            <div class="relative w-36 h-36 aspect-square shrink-0 flex items-center justify-center">
                                <svg class="w-full h-full transform -rotate-90" viewBox="0 0 42 42">
                                    <!-- Nền vòng tròn nhạt -->
                                    <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#F1F5F9" stroke-width="5"></circle>
                                    
                                    <!-- Segment 1: 65% Deep Blue (#062AAD) -->
                                    <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#062AAD" stroke-width="5.5" stroke-dasharray="65 35" stroke-dashoffset="0"></circle>
                                    
                                    <!-- Segment 2: 35% Lime Green (#71A800) -->
                                    <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#71A800" stroke-width="5.5" stroke-dasharray="35 65" stroke-dashoffset="-65"></circle>
                                </svg>
                            </div>

                            <!-- Legend List Right -->
                            <div class="space-y-3 text-[10px] font-bold flex-1 min-w-0">
                                <div class="flex items-start gap-2 text-slate-700">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#062AAD] shrink-0 mt-0.5"></span>
                                    <div>
                                        <span class="block text-slate-600 font-medium">Ươm tạo (Incubation)</span>
                                        <span class="text-body-xs font-black text-[#062AAD]">65%</span>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2 text-slate-700">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#71A800] shrink-0 mt-0.5"></span>
                                    <div>
                                        <span class="block text-slate-600 font-medium">Tăng tốc (Acceleration)</span>
                                        <span class="text-body-xs font-black text-[#71A800]">35%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- SECTION 2: TÁC ĐỘNG NỔI BẬT (4 CARDS GRID CHUẨN FIGMA) -->
        <div class="space-y-6 text-left">
            <h2 class="text-h3 font-extrabold text-[#02185D]">
                Tác động nổi bật
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1: Kinh tế -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center border border-blue-100/60 group-hover:bg-[#062AAD] group-hover:text-white transition-colors">
                        <i data-lucide="trending-up" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-1.5">
                        <h3 class="text-body-md font-extrabold text-[#02185D]">Kinh tế</h3>
                        <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                            Hỗ trợ tạo ra doanh thu ước tính hơn 150 tỷ đồng cho các startup trong hệ sinh thái.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Việc làm -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center border border-blue-100/60 group-hover:bg-[#062AAD] group-hover:text-white transition-colors">
                        <i data-lucide="users" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-1.5">
                        <h3 class="text-body-md font-extrabold text-[#02185D]">Việc làm</h3>
                        <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                            Tạo ra hơn 500+ việc làm trực tiếp và gián tiếp cho cộng đồng địa phương.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Đổi mới sáng tạo -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center border border-blue-100/60 group-hover:bg-[#062AAD] group-hover:text-white transition-colors">
                        <i data-lucide="lightbulb" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-1.5">
                        <h3 class="text-body-md font-extrabold text-[#02185D]">Đổi mới sáng tạo</h3>
                        <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                            Thúc đẩy hơn 80 giải pháp đổi mới được ứng dụng và thương mại hóa thành công.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Cộng đồng -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center border border-blue-100/60 group-hover:bg-[#062AAD] group-hover:text-white transition-colors">
                        <i data-lucide="globe" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-1.5">
                        <h3 class="text-body-md font-extrabold text-[#02185D]">Cộng đồng</h3>
                        <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                            Lan tỏa văn hóa đổi mới sáng tạo đến hơn 10.000+ sinh viên và thanh niên tại khu vực.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 3: CÂU CHUYỆN TÁC ĐỘNG (3 CARD ẢNH CÓ TAG XANH NEON CHUẨN FIGMA) -->
        <div class="space-y-6 text-left">
            <h2 class="text-h3 font-extrabold text-[#02185D]">
                Câu chuyện tác động
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Story 1 -->
                <div class="relative h-64 rounded-3xl overflow-hidden shadow-md group cursor-pointer border border-slate-200/80">
                    <img src="assets/img/hero-bg.jpg" alt="Impact Story" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#02185D] via-[#02185D]/60 to-transparent p-6 flex flex-col justify-between">
                        <div>
                            <span class="bg-[#71A800] text-white text-[9px] font-black uppercase tracking-wider px-3 py-1 rounded-full shadow-sm inline-block">
                                Chuyển đổi số
                            </span>
                        </div>
                        <div class="space-y-1.5 text-left">
                            <h3 class="text-body-md font-extrabold text-white leading-snug group-hover:text-[#C1FF72] transition-colors">
                                Nền tảng quản lý ao nuôi thông minh Made in Cà Mau
                            </h3>
                            <p class="text-[11px] text-slate-200 font-light leading-relaxed line-clamp-2">
                                Giải pháp giúp 200+ hộ nuôi tôm tăng năng suất 20% và giảm chi phí 15%.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="relative h-64 rounded-3xl overflow-hidden shadow-md group cursor-pointer border border-slate-200/80">
                    <img src="assets/img/intro-building.jpg" alt="Impact Story" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#02185D] via-[#02185D]/60 to-transparent p-6 flex flex-col justify-between">
                        <div>
                            <span class="bg-[#71A800] text-white text-[9px] font-black uppercase tracking-wider px-3 py-1 rounded-full shadow-sm inline-block">
                                Chuyển đổi số
                            </span>
                        </div>
                        <div class="space-y-1.5 text-left">
                            <h3 class="text-body-md font-extrabold text-white leading-snug group-hover:text-[#C1FF72] transition-colors">
                                Nền tảng quản lý ao nuôi thông minh Made in Cà Mau
                            </h3>
                            <p class="text-[11px] text-slate-200 font-light leading-relaxed line-clamp-2">
                                Giải pháp giúp 200+ hộ nuôi tôm tăng năng suất 20% và giảm chi phí 15%.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="relative h-64 rounded-3xl overflow-hidden shadow-md group cursor-pointer border border-slate-200/80">
                    <img src="assets/img/office.png" alt="Impact Story" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#02185D] via-[#02185D]/60 to-transparent p-6 flex flex-col justify-between">
                        <div>
                            <span class="bg-[#71A800] text-white text-[9px] font-black uppercase tracking-wider px-3 py-1 rounded-full shadow-sm inline-block">
                                Chuyển đổi số
                            </span>
                        </div>
                        <div class="space-y-1.5 text-left">
                            <h3 class="text-body-md font-extrabold text-white leading-snug group-hover:text-[#C1FF72] transition-colors">
                                Nền tảng quản lý ao nuôi thông minh Made in Cà Mau
                            </h3>
                            <p class="text-[11px] text-slate-200 font-light leading-relaxed line-clamp-2">
                                Giải pháp giúp 200+ hộ nuôi tôm tăng năng suất 20% và giảm chi phí 15%.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
