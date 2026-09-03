<?php
$page_title = "Đối Tác CiNEC - Chuẩn 100% Figma";
require_once 'config/db.php';
require_once 'includes/header.php';

// Active Tab từ URL tham số ?tab=... (Mặc định: quy-dau-tu)
$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'quy-dau-tu';
?>

<!-- TRANG ĐỐI TÁC CHUẨN 100% CẤU TRÚC FIGMA -->
<div class="bg-[#FAFCFF] min-h-screen pt-28 pb-16">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-12">

        <!-- BREADCRUMBS BAR CHUẨN FIGMA -->
        <div class="text-[11px] font-medium text-slate-500 flex items-center gap-1.5 text-left">
            <a href="index.php" class="hover:text-[#062AAD] transition-colors">Trang chủ</a>
            <span>&gt;</span>
            <span class="text-[#062AAD] font-bold">Đối tác</span>
        </div>

        <!-- HERO TOP BANNER CHUẨN FIGMA -->
        <div class="relative bg-white rounded-3xl p-6 md:p-10 border border-slate-200/80 shadow-sm overflow-hidden grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <!-- Đồ họa mờ phong điện quạt gió & hạ tầng công nghệ -->
            <div class="absolute right-0 top-0 bottom-0 w-full lg:w-1/2 opacity-30 bg-cover bg-right pointer-events-none mix-blend-multiply hidden md:block" style="background-image: url('assets/img/hero-bg.jpg');"></div>

            <div class="lg:col-span-8 space-y-5 text-left relative z-10">
                <div class="space-y-2">
                    <h1 class="text-h3 md:text-h2 font-extrabold text-[#02185D] leading-tight">
                        Đối tác <span class="text-[#71A800]">CiNEC</span>
                    </h1>
                    <p class="text-body-sm font-extrabold text-[#02185D]">
                        Đồng hành - Kết nối - Kiến tạo tương lai đổi mới sáng tạo
                    </p>
                    <p class="text-body-xs text-slate-500 font-normal leading-relaxed max-w-xl">
                        CiNEC hợp tác cùng các tổ chức, quỹ đầu tư, chuyên gia và doanh nghiệp để hỗ trợ startup phát triển, thương mại hóa và vươn ra thị trường quốc tế, đóng góp vào sự phát triển kinh tế - xã hội bền vững của Cà Mau.
                    </p>
                </div>

                <!-- 2 Nút Action CTA chuẩn Figma -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="lien-he.php" class="bg-[#062AAD] hover:bg-[#05A6F5] text-white font-extrabold text-body-xs rounded-full px-6 py-3 transition-all duration-300 shadow-md inline-flex items-center gap-2">
                        <span>Trở thành đối tác</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                    
                    <a href="#" class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 font-bold text-body-xs rounded-full px-6 py-3 transition-all duration-300 shadow-sm inline-flex items-center gap-2">
                        <span>Tải hồ sơ đối tác CiNEC</span>
                        <i data-lucide="download" class="w-4 h-4 text-slate-500"></i>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-4 hidden lg:block"></div>
        </div>

        <!-- SECTION 2: CƠ HỘI HỢP TÁC & TÀI TRỢ CÙNG CINEC (4 CARDS GRID CHUẨN FIGMA) -->
        <div class="space-y-8">
            <h2 class="text-h3 font-extrabold text-[#062AAD] text-center">
                Cơ hội hợp tác & tài trợ cùng CiNEC
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1: Tài trợ chiến lược -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between items-center text-center space-y-4 group">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center border border-blue-100/60 group-hover:bg-[#062AAD] group-hover:text-white transition-colors">
                        <i data-lucide="building-2" class="w-7 h-7"></i>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-body-xs font-extrabold text-[#02185D]">Tài trợ chiến lược</h3>
                        <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                            Đồng hành dài hạn cùng CINEC trong các chương trình ươm tạo, sự kiện và hoạt động đổi mới sáng tạo.
                        </p>
                    </div>
                    <a href="doi-tac.php?tab=hop-tac-tai-tro#partner-tabs-section" class="text-[11px] font-extrabold text-[#062AAD] hover:text-[#05A6F5] inline-flex items-center gap-1 transition-colors">
                        Xem chi tiết <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Card 2: Tài trợ chương trình -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between items-center text-center space-y-4 group">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center border border-blue-100/60 group-hover:bg-[#062AAD] group-hover:text-white transition-colors">
                        <i data-lucide="users" class="w-7 h-7"></i>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-body-xs font-extrabold text-[#02185D]">Tài trợ chương trình</h3>
                        <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                            Tài trợ cho các chương trình cụ thể như cuộc thi, hackathon, workshop, đào tạo, v.v.
                        </p>
                    </div>
                    <a href="doi-tac.php?tab=hop-tac-tai-tro#partner-tabs-section" class="text-[11px] font-extrabold text-[#062AAD] hover:text-[#05A6F5] inline-flex items-center gap-1 transition-colors">
                        Xem chi tiết <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Card 3: Truyền thông & thương hiệu -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between items-center text-center space-y-4 group">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center border border-blue-100/60 group-hover:bg-[#062AAD] group-hover:text-white transition-colors">
                        <i data-lucide="megaphone" class="w-7 h-7"></i>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-body-xs font-extrabold text-[#02185D]">Truyền thông & thương hiệu</h3>
                        <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                            Quảng bá thương hiệu trên các kênh truyền thông của CINEC và trong hệ sinh thái đó.
                        </p>
                    </div>
                    <a href="doi-tac.php?tab=hop-tac-tai-tro#partner-tabs-section" class="text-[11px] font-extrabold text-[#062AAD] hover:text-[#05A6F5] inline-flex items-center gap-1 transition-colors">
                        Xem chi tiết <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Card 4: Cộng đồng & trách nhiệm xã hội -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between items-center text-center space-y-4 group">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center border border-blue-100/60 group-hover:bg-[#062AAD] group-hover:text-white transition-colors">
                        <i data-lucide="heart-handshake" class="w-7 h-7"></i>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-body-xs font-extrabold text-[#02185D]">Cộng đồng & trách nhiệm xã hội</h3>
                        <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                            Cùng CINEC đóng góp cho cộng đồng, phát triển nguồn nhân lực và hỗ trợ startup địa phương.
                        </p>
                    </div>
                    <a href="doi-tac.php?tab=hop-tac-tai-tro#partner-tabs-section" class="text-[11px] font-extrabold text-[#062AAD] hover:text-[#05A6F5] inline-flex items-center gap-1 transition-colors">
                        Xem chi tiết <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- SECTION 3: THANH BỘ LỌC TABS & NỘI DUNG 6 HẠNG MỤC CHUẨN FIGMA -->
        <div id="partner-tabs-section" class="space-y-8 pt-4">
            <!-- THANH 6 TAB PHÂN LOẠI ĐỐI TÁC CHUẨN FIGMA -->
            <div class="flex items-center justify-center gap-4 lg:gap-8 border-b border-slate-200/80 pb-2 overflow-x-auto text-body-xs font-bold scrollbar-none">
                <a href="doi-tac.php?tab=quy-dau-tu#partner-tabs-section" class="shrink-0 pb-2.5 transition-colors <?php echo $active_tab == 'quy-dau-tu' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-extrabold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    Quỹ đầu tư
                </a>
                <a href="doi-tac.php?tab=ban-co-van#partner-tabs-section" class="shrink-0 pb-2.5 transition-colors <?php echo $active_tab == 'ban-co-van' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-extrabold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    Ban cố vấn
                </a>
                <a href="doi-tac.php?tab=mentors#partner-tabs-section" class="shrink-0 pb-2.5 transition-colors <?php echo $active_tab == 'mentors' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-extrabold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    Mentors
                </a>
                <a href="doi-tac.php?tab=du-an-khoi-nghiep#partner-tabs-section" class="shrink-0 pb-2.5 transition-colors <?php echo $active_tab == 'du-an-khoi-nghiep' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-extrabold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    Dự án khởi nghiệp
                </a>
                <a href="doi-tac.php?tab=doanh-nghiep-khoi-nghiep#partner-tabs-section" class="shrink-0 pb-2.5 transition-colors <?php echo $active_tab == 'doanh-nghiep-khoi-nghiep' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-extrabold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    Doanh nghiệp khởi nghiệp
                </a>
                <a href="doi-tac.php?tab=hop-tac-tai-tro#partner-tabs-section" class="shrink-0 pb-2.5 transition-colors <?php echo $active_tab == 'hop-tac-tai-tro' ? 'text-[#062AAD] border-b-2 border-[#062AAD] font-extrabold' : 'text-slate-500 hover:text-[#062AAD]'; ?>">
                    Hợp tác & tài trợ
                </a>
            </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 1: QUỸ ĐẦU TƯ (FIGMA FRAME: Đối tác - Quỹ đầu tư) -->
            <!-- ========================================================================= -->
            <?php if ($active_tab == 'quy-dau-tu'): ?>
                <div class="space-y-6 text-left">
                    <div class="space-y-2 max-w-3xl">
                        <h3 class="text-h4 font-extrabold text-[#02185D]">Quỹ đầu tư đồng hành</h3>
                        <p class="text-body-xs text-slate-500 font-normal leading-relaxed">
                            CiNEC kết nối startup với các quỹ đầu tư uy tín trong và ngoài nước, hỗ trợ gọi vốn, tăng trưởng và mở rộng thị trường.
                        </p>
                        <div class="pt-1">
                            <a href="lien-he.php" class="inline-flex items-center gap-1.5 border border-blue-200 text-[#062AAD] hover:bg-blue-50 font-extrabold text-[11px] rounded-full px-4 py-1.5 transition-colors">
                                <span>Xem chương trình hợp tác</span>
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Lưới 10 Card Logo Quỹ Đầu Tư Chuẩn Figma -->
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-5">
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-28 flex flex-col items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer space-y-1 text-center">
                            <span class="font-black text-xl text-[#2E7D32] tracking-wider group-hover:scale-105 transition-transform">DBC</span>
                            <span class="text-[10px] text-slate-400 font-bold">Quỹ đầu tư</span>
                        </div>
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-28 flex flex-col items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer space-y-1 text-center">
                            <div class="flex items-center gap-1">
                                <span class="w-3.5 h-3.5 rounded-full bg-red-600 inline-block"></span>
                                <span class="font-black text-xl text-[#02185D] tracking-wider group-hover:scale-105 transition-transform">KVIP</span>
                            </div>
                            <span class="text-[10px] text-slate-400 font-bold">Quỹ hỗ trợ khởi nghiệp</span>
                        </div>
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-28 flex flex-col items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer space-y-1 text-center">
                            <span class="font-black text-xl text-[#D81B60] tracking-wider group-hover:scale-105 transition-transform">NIIC</span>
                            <span class="text-[10px] text-slate-400 font-bold">Quỹ đầu tư</span>
                        </div>
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-28 flex flex-col items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer space-y-1 text-center">
                            <span class="font-black text-xl text-[#2E7D32] tracking-wider group-hover:scale-105 transition-transform">DBC</span>
                            <span class="text-[10px] text-slate-400 font-bold">Quỹ hỗ trợ khởi nghiệp</span>
                        </div>
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-28 flex flex-col items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer space-y-1 text-center">
                            <span class="font-black text-xl text-[#2E7D32] tracking-wider group-hover:scale-105 transition-transform">DBC</span>
                            <span class="text-[10px] text-slate-400 font-bold">Quỹ hỗ trợ khởi nghiệp</span>
                        </div>
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-28 flex flex-col items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer space-y-1 text-center">
                            <span class="font-black text-xl text-[#2E7D32] tracking-wider group-hover:scale-105 transition-transform">DBC</span>
                            <span class="text-[10px] text-slate-400 font-bold">Quỹ đầu tư</span>
                        </div>
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-28 flex flex-col items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer space-y-1 text-center">
                            <div class="flex items-center gap-1">
                                <span class="w-3.5 h-3.5 rounded-full bg-red-600 inline-block"></span>
                                <span class="font-black text-xl text-[#02185D] tracking-wider group-hover:scale-105 transition-transform">KVIP</span>
                            </div>
                            <span class="text-[10px] text-slate-400 font-bold">Quỹ hỗ trợ khởi nghiệp</span>
                        </div>
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-28 flex flex-col items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer space-y-1 text-center">
                            <span class="font-black text-xl text-[#D81B60] tracking-wider group-hover:scale-105 transition-transform">NIIC</span>
                            <span class="text-[10px] text-slate-400 font-bold">Quỹ đầu tư</span>
                        </div>
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-28 flex flex-col items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer space-y-1 text-center">
                            <span class="font-black text-xl text-[#2E7D32] tracking-wider group-hover:scale-105 transition-transform">DBC</span>
                            <span class="text-[10px] text-slate-400 font-bold">Quỹ hỗ trợ khởi nghiệp</span>
                        </div>
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-28 flex flex-col items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer space-y-1 text-center">
                            <span class="font-black text-xl text-[#2E7D32] tracking-wider group-hover:scale-105 transition-transform">DBC</span>
                            <span class="text-[10px] text-slate-400 font-bold">Quỹ hỗ trợ khởi nghiệp</span>
                        </div>
                    </div>
                </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 2: BAN CỐ VẤN (FIGMA FRAME: Đối tác - Ban cố vấn) -->
            <!-- ========================================================================= -->
            <?php elseif ($active_tab == 'ban-co-van'): ?>
                <div class="space-y-8 text-left">
                    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 border-b border-slate-200 pb-4">
                        <div class="space-y-2 max-w-3xl">
                            <h3 class="text-h4 font-extrabold text-[#02185D]">Hội Đồng Cố Vấn Chuyên Môn CiNEC</h3>
                            <p class="text-body-xs text-slate-500 font-normal leading-relaxed">
                                Các chuyên gia, nhà khoa học và lãnh đạo giàu kinh nghiệm trong nhiều lĩnh vực đồng hành cùng CiNEC định hướng chiến lược, hoàn thiện thể chế và thẩm định đề án đổi mới sáng tạo.
                            </p>
                        </div>
                    </div>

                    <!-- Lưới Card Ban Cố Vấn Cùng Kiểu Khung Avatar Với Mentors (Không Có Nút Đặt Lịch Hẹn) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">
                        <!-- Advisory 1 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_female.jpg" alt="TS. Nguyễn Thùy A" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-[#05A6F5] tracking-wider">Đổi Mới Sáng Tạo & Khởi Nghiệp</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">TS. Nguyễn Thùy A</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Chuyên gia Cao cấp Đổi mới sáng tạo</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-3 leading-relaxed">15+ năm cố vấn chiến lược doanh nghiệp, hoạch định chính sách Sandbox và hệ sinh thái ĐMST khu vực ĐBSCL.</p>
                            </div>
                        </div>

                        <!-- Advisory 2 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_male1.jpg" alt="GS. TS. Trần Văn B" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-blue-600 tracking-wider">Chuyển Đổi Số & Kinh Tế Số</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">GS. TS. Trần Văn B</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Nguyên Viện trưởng Viện Nghiên cứu ĐMST</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-3 leading-relaxed">Chuyên gia đầu ngành về dữ liệu số, trí tuệ nhân tạo và các đề án đo lường Bộ chỉ số PII cấp tỉnh.</p>
                            </div>
                        </div>

                        <!-- Advisory 3 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_male2.jpg" alt="Ông Lê Hoàng C" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-amber-600 tracking-wider">Thương Mại Hóa Công Nghệ</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">Ông Lê Hoàng C</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Giám đốc Quỹ Đầu tư Mạo hiểm Mekong</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-3 leading-relaxed">Thẩm định dự án ươm tạo, cấu trúc vốn mồi và liên kết mạng lưới nhà đầu tư thiên thần trong và ngoài nước.</p>
                            </div>
                        </div>

                        <!-- Advisory 4 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_female.jpg" alt="Bà Phạm Thị D" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-purple-600 tracking-wider">Sở Hữu Trí Tuệ & Pháp Lý</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">Bà Phạm Thị D</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Luật sư Điều hành IP Mekong Law Firm</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-3 leading-relaxed">Cố vấn bảo hộ sáng chế nông nghiệp, nhãn hiệu tập thể OCOP và cơ chế pháp lý thử nghiệm công nghệ mới.</p>
                            </div>
                        </div>

                        <!-- Advisory 5 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_male1.jpg" alt="Ông Vũ Minh E" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-emerald-600 tracking-wider">Quản Trị & Chuỗi Cung Ứng</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">Ông Vũ Minh E</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Chủ tịch Hiệp hội Doanh nghiệp</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-3 leading-relaxed">Kết nối chuỗi cung ứng logistics thủy hải sản và chương trình thúc đẩy doanh nghiệp số SME.</p>
                            </div>
                        </div>

                        <!-- Advisory 6 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_male2.jpg" alt="TS. Đặng Quốc F" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-teal-600 tracking-wider">Nông Nghiệp Xanh & ESG</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">TS. Đặng Quốc F</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Chuyên gia Môi trường & Kinh tế Tuần hoàn</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-3 leading-relaxed">Cố vấn các tiêu chuẩn ESG, giảm phát thải carbon và mô hình tăng trưởng kinh tế xanh cho tỉnh Cà Mau.</p>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 3: MENTORS (FIGMA FRAME: Đối tác - Mentors) -->
            <!-- ========================================================================= -->
            <?php elseif ($active_tab == 'mentors'): ?>
                <div class="space-y-8 text-left">
                    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 border-b border-slate-200 pb-4">
                        <div class="space-y-2 max-w-2xl">
                            <h3 class="text-h4 font-extrabold text-[#02185D]">Mentors & Chuyên Gia Đồng Hành</h3>
                            <p class="text-body-xs text-slate-500 font-normal leading-relaxed">
                                Đội ngũ mentor là doanh nhân, chuyên gia, nhà quản lý hỗ trợ startup từ giai đoạn ý tưởng đến tăng trưởng, mở rộng thị trường và gọi vốn 1:1.
                            </p>
                        </div>

                        <button onclick="openMentorModal('CiNEC chỉ định Mentor phù hợp', 'assets/img/intro-building.jpg', 'Ban chuyên môn thẩm định')" class="inline-flex items-center gap-2 px-5 py-3 rounded-2xl bg-gradient-to-r from-[#062AAD] to-[#05A6F5] hover:from-[#02185D] hover:to-[#062AAD] text-white font-extrabold text-xs transition-all shadow-md hover:-translate-y-0.5 shrink-0">
                            <i data-lucide="calendar-plus" class="w-4 h-4 text-[#C1FF72]"></i>
                            <span>Đăng ký kết nối Mentor 1:1</span>
                        </button>
                    </div>

                    <?php if (!empty($_SESSION['flash_booking_success'])): ?>
                        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 p-4 rounded-2xl flex items-center justify-between text-xs font-bold shadow-xs">
                            <div class="flex items-center gap-2.5">
                                <i data-lucide="check-circle" class="w-5 h-5 text-emerald-600 shrink-0"></i>
                                <span><?php echo $_SESSION['flash_booking_success']; unset($_SESSION['flash_booking_success']); ?></span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Lưới Mentor Cards Chuẩn Figma Kèm Nút Đặt Lịch Trực Tiếp -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        
                        <!-- Mentor 1 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/avatar_deputy1.jpg" alt="TS. Trần Đình Cương" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-[#05A6F5] tracking-wider">AI & IoT Thủy Sản</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">TS. Trần Đình Cương</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Viện Đổi Mới Sáng Tạo & AI</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-2 leading-relaxed">Cố vấn giải pháp AI giám sát môi trường nước mặn và tự động hóa chuỗi cung ứng thủy sản.</p>
                            </div>

                            <button onclick="openMentorModal('TS. Trần Đình Cương', 'assets/img/avatar_deputy1.jpg', 'Cố vấn Trưởng AI & IoT Thủy Sản')" class="w-full py-2.5 px-3 rounded-xl bg-blue-50 hover:bg-[#062AAD] text-[#062AAD] hover:text-white font-bold text-xs transition-all flex items-center justify-center gap-1.5 border border-blue-100">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                <span>Đặt lịch hẹn</span>
                            </button>
                        </div>

                        <!-- Mentor 2 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_female.jpg" alt="ThS. Lê Hoàng Yến" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-amber-600 tracking-wider">Gọi Vốn & Tài Chính</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">ThS. Lê Hoàng Yến</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Quỹ Đầu Tư Khởi Nghiệp ĐBSCL</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-2 leading-relaxed">Cố vấn hoàn thiện Pitch Deck gọi vốn hạt giống (Seed) và cơ chế giải ngân đối ứng 1:1.</p>
                            </div>

                            <button onclick="openMentorModal('ThS. Lê Hoàng Yến', 'assets/img/leader_female.jpg', 'Chuyên Gia Gọi Vốn & Tài Chính')" class="w-full py-2.5 px-3 rounded-xl bg-amber-50 hover:bg-amber-600 text-amber-800 hover:text-white font-bold text-xs transition-all flex items-center justify-center gap-1.5 border border-amber-200">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                <span>Đặt lịch hẹn</span>
                            </button>
                        </div>

                        <!-- Mentor 3 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_male1.jpg" alt="KS. Vũ Minh Trí" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-emerald-600 tracking-wider">Chuyển Đổi Số SME</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">KS. Vũ Minh Trí</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Hiệp Hội Phần Mềm & CNTT</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-2 leading-relaxed">Hỗ trợ gói Voucher CĐS, triển khai hệ thống quản trị ERP tinh gọn và chỉ số KPI 90 ngày.</p>
                            </div>

                            <button onclick="openMentorModal('KS. Vũ Minh Trí', 'assets/img/leader_male1.jpg', 'Cố Vấn Tăng Tốc Doanh Nghiệp Số SME')" class="w-full py-2.5 px-3 rounded-xl bg-emerald-50 hover:bg-emerald-600 text-emerald-800 hover:text-white font-bold text-xs transition-all flex items-center justify-center gap-1.5 border border-emerald-200">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                <span>Đặt lịch hẹn</span>
                            </button>
                        </div>

                        <!-- Mentor 4 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/avatar_deputy2.jpg" alt="LS. Nguyễn Thu Trang" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-purple-600 tracking-wider">Pháp Lý & SHTT</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">LS. Nguyễn Thu Trang</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Văn Phòng Luật IP Mekong</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-2 leading-relaxed">Tư vấn đăng ký sở hữu trí tuệ, bảo hộ nhãn hiệu nông nghiệp OCOP và thỏa thuận sáng lập.</p>
                            </div>

                            <button onclick="openMentorModal('LS. Nguyễn Thu Trang', 'assets/img/avatar_deputy2.jpg', 'Cố Vấn Pháp Lý & Sở Hữu Trí Tuệ')" class="w-full py-2.5 px-3 rounded-xl bg-purple-50 hover:bg-purple-600 text-purple-800 hover:text-white font-bold text-xs transition-all flex items-center justify-center gap-1.5 border border-purple-200">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                <span>Đặt lịch hẹn</span>
                            </button>
                        </div>

                        <!-- Mentor 5 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_male2.jpg" alt="Nguyễn Thành Nam" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-blue-600 tracking-wider">TMĐT & Chuỗi Cung Ứng</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">Nguyễn Thành Nam</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">E-commerce Accelerator</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-2 leading-relaxed">Tối ưu gian hàng số sàn TMĐT, livestream bán lẻ đa kênh và logistics liên tỉnh.</p>
                            </div>

                            <button onclick="openMentorModal('Nguyễn Thành Nam', 'assets/img/leader_male2.jpg', 'Mentor Thương Mại Điện Tử & OCOP')" class="w-full py-2.5 px-3 rounded-xl bg-blue-50 hover:bg-[#062AAD] text-[#062AAD] hover:text-white font-bold text-xs transition-all flex items-center justify-center gap-1.5 border border-blue-100">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                <span>Đặt lịch hẹn</span>
                            </button>
                        </div>

                        <!-- Mentor 6 -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group space-y-4">
                            <div class="space-y-3">
                                <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100">
                                    <img src="assets/img/leader_female.jpg" alt="Vũ Thị Thanh" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-black uppercase text-rose-600 tracking-wider">Nhân Sự & Văn Hóa</span>
                                    <h4 class="text-body-sm font-extrabold text-[#02185D]">Vũ Thị Thanh</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Talent HR Hub</p>
                                </div>
                                <p class="text-[11px] text-slate-600 line-clamp-2 leading-relaxed">Cố vấn thu hút nhân tài số, xây dựng văn hóa Agile và chính sách cổ phần ESOP.</p>
                            </div>

                            <button onclick="openMentorModal('Vũ Thị Thanh', 'assets/img/leader_female.jpg', 'Mentor Nhân Sự & Văn Hóa Doanh Nghiệp')" class="w-full py-2.5 px-3 rounded-xl bg-rose-50 hover:bg-rose-600 text-rose-800 hover:text-white font-bold text-xs transition-all flex items-center justify-center gap-1.5 border border-rose-200">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                <span>Đặt lịch hẹn</span>
                            </button>
                        </div>

                    </div>
                </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 4: DỰ ÁN KHỎI NGHIỆP (FIGMA FRAME: Đối tác - Dự án khởi nghiệp) -->
            <!-- ========================================================================= -->
            <?php elseif ($active_tab == 'du-an-khoi-nghiep'): ?>
                <div class="space-y-6 text-left">
                    <div class="space-y-2 max-w-3xl">
                        <h3 class="text-h4 font-extrabold text-[#02185D]">Dự án khởi nghiệp nổi bật</h3>
                        <p class="text-body-xs text-slate-500 font-normal leading-relaxed">
                            Các startup tiêu biểu trong hệ sinh thái CINEC với những giải pháp đổi mới sáng tạo và tiềm năng phát triển mạnh mẽ.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Project 1: Cargors -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm space-y-4 hover:shadow-premium hover:-translate-y-1 transition-all">
                            <div class="w-full h-36 rounded-2xl overflow-hidden bg-slate-900">
                                <img src="assets/img/hero-bg.jpg" class="w-full h-full object-cover">
                            </div>
                            <div class="space-y-1">
                                <span class="bg-[#71A800] text-white text-[9px] font-black uppercase px-2.5 py-0.5 rounded-full">Ươm tạo</span>
                                <h4 class="text-body-xs font-extrabold text-[#02185D] pt-1">Cargors AI</h4>
                                <p class="text-[11px] text-slate-500">Nền tảng logistics vận tải thông minh Cà Mau</p>
                            </div>
                        </div>

                        <!-- Project 2: AI4Cosmetics -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm space-y-4 hover:shadow-premium hover:-translate-y-1 transition-all">
                            <div class="w-full h-36 rounded-2xl overflow-hidden bg-slate-900">
                                <img src="assets/img/intro-building.jpg" class="w-full h-full object-cover">
                            </div>
                            <div class="space-y-1">
                                <span class="bg-[#05A6F5] text-white text-[9px] font-black uppercase px-2.5 py-0.5 rounded-full">Tăng tốc</span>
                                <h4 class="text-body-xs font-extrabold text-[#02185D] pt-1">AI4Cosmetics</h4>
                                <p class="text-[11px] text-slate-500">Ứng dụng AI cá nhân hóa mỹ phẩm sinh học</p>
                            </div>
                        </div>

                        <!-- Project 3: Anym -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm space-y-4 hover:shadow-premium hover:-translate-y-1 transition-all">
                            <div class="w-full h-36 rounded-2xl overflow-hidden bg-slate-900">
                                <img src="assets/img/office.png" class="w-full h-full object-cover">
                            </div>
                            <div class="space-y-1">
                                <span class="bg-[#062AAD] text-white text-[9px] font-black uppercase px-2.5 py-0.5 rounded-full">Gọi vốn</span>
                                <h4 class="text-body-xs font-extrabold text-[#02185D] pt-1">Anym Tech</h4>
                                <p class="text-[11px] text-slate-500">Thương mại điện tử đặc sản vùng Cực Nam</p>
                            </div>
                        </div>

                        <!-- Project 4: ClearVue -->
                        <div class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-sm space-y-4 hover:shadow-premium hover:-translate-y-1 transition-all">
                            <div class="w-full h-36 rounded-2xl overflow-hidden bg-slate-900">
                                <img src="assets/img/ui-elements.png" class="w-full h-full object-cover">
                            </div>
                            <div class="space-y-1">
                                <span class="bg-[#71A800] text-white text-[9px] font-black uppercase px-2.5 py-0.5 rounded-full">Ươm tạo</span>
                                <h4 class="text-body-xs font-extrabold text-[#02185D] pt-1">ClearVue AI</h4>
                                <p class="text-[11px] text-slate-500">Giám sát thông minh đầm tôm tự động</p>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 5: DOANH NGHIỆP KHỎI NGHIỆP (FIGMA FRAME: Doanh nghiệp khởi nghiệp) -->
            <!-- ========================================================================= -->
            <?php elseif ($active_tab == 'doanh-nghiep-khoi-nghiep'): ?>
                <div class="space-y-6 text-left">
                    <div class="space-y-2 max-w-3xl">
                        <h3 class="text-h4 font-extrabold text-[#02185D]">Doanh nghiệp khởi nghiệp tiêu biểu</h3>
                        <p class="text-body-xs text-slate-500 font-normal leading-relaxed">
                            Các startup tiêu biểu đang được CiNEC ươm tạo, tăng tốc và hỗ trợ phát triển.
                        </p>
                        <div class="pt-1">
                            <a href="lien-he.php" class="inline-flex items-center gap-1.5 border border-blue-200 text-[#062AAD] hover:bg-blue-50 font-extrabold text-[11px] rounded-full px-4 py-1.5 transition-colors">
                                <span>Xem tất cả startup</span>
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Enterprise 1: Cargors -->
                        <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm space-y-3 hover:shadow-premium hover:-translate-y-1 transition-all">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center font-black text-xl">
                                CG
                            </div>
                            <div class="space-y-1">
                                <h4 class="text-body-xs font-extrabold text-[#02185D]">Công ty CP Cargors</h4>
                                <p class="text-[11px] text-slate-500">Lĩnh vực: Logistics & AI</p>
                                <span class="text-[10px] text-[#71A800] font-bold block pt-1">Đã tốt nghiệp CiNEC Launch 2025</span>
                            </div>
                        </div>

                        <!-- Enterprise 2: AI4Cosmetics -->
                        <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm space-y-3 hover:shadow-premium hover:-translate-y-1 transition-all">
                            <div class="w-12 h-12 rounded-2xl bg-pink-50 text-[#D81B60] flex items-center justify-center font-black text-xl">
                                AI4
                            </div>
                            <div class="space-y-1">
                                <h4 class="text-body-xs font-extrabold text-[#02185D]">Công ty AI4Cosmetics</h4>
                                <p class="text-[11px] text-slate-500">Lĩnh vực: Công nghệ sinh học</p>
                                <span class="text-[10px] text-[#71A800] font-bold block pt-1">Đã tốt nghiệp CiNEC Launch 2025</span>
                            </div>
                        </div>

                        <!-- Enterprise 3: Anym -->
                        <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm space-y-3 hover:shadow-premium hover:-translate-y-1 transition-all">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#05A6F5] flex items-center justify-center font-black text-xl">
                                AN
                            </div>
                            <div class="space-y-1">
                                <h4 class="text-body-xs font-extrabold text-[#02185D]">Công ty TNHH Anym Tech</h4>
                                <p class="text-[11px] text-slate-500">Lĩnh vực: Thương mại điện tử</p>
                                <span class="text-[10px] text-[#71A800] font-bold block pt-1">Đã tốt nghiệp CiNEC Launch 2025</span>
                            </div>
                        </div>

                        <!-- Enterprise 4: ClearVue -->
                        <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm space-y-3 hover:shadow-premium hover:-translate-y-1 transition-all">
                            <div class="w-12 h-12 rounded-2xl bg-green-50 text-[#2E7D32] flex items-center justify-center font-black text-xl">
                                CV
                            </div>
                            <div class="space-y-1">
                                <h4 class="text-body-xs font-extrabold text-[#02185D]">Công ty ClearVue AI</h4>
                                <p class="text-[11px] text-slate-500">Lĩnh vực: IoT & Thủy sản</p>
                                <span class="text-[10px] text-[#71A800] font-bold block pt-1">Đã tốt nghiệp CiNEC Launch 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- ========================================================================= -->
            <!-- VIEW TAB 6: HỢP TÁC & TÀI TRỢ (FIGMA FRAME: Đối tác - Hợp tác & tài trợ) -->
            <!-- ========================================================================= -->
            <?php elseif ($active_tab == 'hop-tac-tai-tro'): ?>
                <div class="space-y-10 text-left">
                    <div class="space-y-2 max-w-3xl">
                        <h3 class="text-h4 font-extrabold text-[#02185D]">Hợp tác & Tài trợ cùng CiNEC</h3>
                        <p class="text-body-xs text-slate-500 font-normal leading-relaxed">
                            Đồng hành cùng CiNEC, Quý đối tác sẽ có cơ hội quảng bá thương hiệu, kết nối cộng đồng đổi mới sáng tạo và đóng góp vào sự phát triển của hệ sinh thái startup địa phương.
                        </p>
                    </div>

                    <!-- GÓI TÀI TRỢ CHUẨN FIGMA (4 TIER CARDS GRID) -->
                    <div class="space-y-6">
                        <h4 class="text-body-md font-extrabold text-[#02185D]">Các gói tài trợ</h4>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Tier 1: Đồng -->
                            <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm space-y-6 text-center hover:shadow-premium hover:-translate-y-1 transition-all flex flex-col justify-between">
                                <div class="space-y-2">
                                    <span class="text-[10px] font-black uppercase tracking-wider text-amber-700 bg-amber-50 px-3 py-1 rounded-full inline-block">TÀI TRỢ ĐỒNG</span>
                                    <div class="text-h3 font-black text-[#02185D] pt-2">20.000.000 <span class="text-xs text-slate-400 font-bold">VNĐ/năm</span></div>
                                    <p class="text-[11px] text-slate-500">Quyền lợi hiển thị logo thương hiệu trên cổng CiNEC và tham dự 02 sự kiện networking.</p>
                                </div>
                                <a href="#sponsor-form" class="w-full bg-slate-100 hover:bg-[#062AAD] hover:text-white text-[#062AAD] font-extrabold text-body-xs rounded-full py-2.5 transition-colors block">
                                    Đăng ký tài trợ
                                </a>
                            </div>

                            <!-- Tier 2: Bạc -->
                            <div class="bg-white rounded-3xl p-6 border border-blue-200 shadow-sm space-y-6 text-center hover:shadow-premium hover:-translate-y-1 transition-all flex flex-col justify-between">
                                <div class="space-y-2">
                                    <span class="text-[10px] font-black uppercase tracking-wider text-slate-600 bg-slate-100 px-3 py-1 rounded-full inline-block">TÀI TRỢ BẠC</span>
                                    <div class="text-h3 font-black text-[#062AAD] pt-2">50.000.000 <span class="text-xs text-slate-400 font-bold">VNĐ/năm</span></div>
                                    <p class="text-[11px] text-slate-500">Quyền lợi đặt gian hàng trưng bày tại Ngày hội Demo Day và truyền thông báo chí.</p>
                                </div>
                                <a href="#sponsor-form" class="w-full bg-[#062AAD] hover:bg-[#05A6F5] text-white font-extrabold text-body-xs rounded-full py-2.5 transition-colors block">
                                    Đăng ký tài trợ
                                </a>
                            </div>

                            <!-- Tier 3: Vàng -->
                            <div class="bg-white rounded-3xl p-6 border-2 border-[#71A800] shadow-md space-y-6 text-center hover:shadow-premium hover:-translate-y-1 transition-all relative flex flex-col justify-between">
                                <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-[#71A800] text-white text-[9px] font-black px-3 py-0.5 rounded-full uppercase">HOT</span>
                                <div class="space-y-2">
                                    <span class="text-[10px] font-black uppercase tracking-wider text-yellow-700 bg-yellow-50 px-3 py-1 rounded-full inline-block">TÀI TRỢ VÀNG</span>
                                    <div class="text-h3 font-black text-[#02185D] pt-2">100.000.000 <span class="text-xs text-slate-400 font-bold">VNĐ/năm</span></div>
                                    <p class="text-[11px] text-slate-500">Quyền lợi đồng tổ chức 01 Hackathon chuyên đề và quyền tiếp cận Dealflow đầu tiên.</p>
                                </div>
                                <a href="#sponsor-form" class="w-full bg-[#71A800] hover:bg-[#2E7D32] text-white font-extrabold text-body-xs rounded-full py-2.5 transition-colors block">
                                    Đăng ký tài trợ
                                </a>
                            </div>

                            <!-- Tier 4: Kim Cương -->
                            <div class="bg-gradient-to-b from-[#02185D] to-[#062AAD] text-white rounded-3xl p-6 shadow-xl space-y-6 text-center hover:-translate-y-1 transition-all flex flex-col justify-between">
                                <div class="space-y-2">
                                    <span class="text-[10px] font-black uppercase tracking-wider text-slate-900 bg-[#C1FF72] px-3 py-1 rounded-full inline-block">TÀI TRỢ KIM CƯƠNG</span>
                                    <div class="text-h3 font-black text-white pt-2">200.000.000+ <span class="text-xs text-blue-200 font-bold">VNĐ/năm</span></div>
                                    <p class="text-[11px] text-blue-200">Đặc quyền đối tác chiến lược độc quyền ngành, đặt tên giải thưởng và phát biểu chính.</p>
                                </div>
                                <a href="#sponsor-form" class="w-full bg-[#C1FF72] hover:bg-white text-slate-900 font-extrabold text-body-xs rounded-full py-2.5 transition-colors block">
                                    Liên hệ tư vấn
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- FORM ĐĂNG KÝ HỢP TÁC & TÀI TRỢ CHUẨN FIGMA -->
                    <div id="sponsor-form" class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm max-w-2xl mx-auto space-y-4">
                        <div class="space-y-1 text-center">
                            <h4 class="text-h4 font-extrabold text-[#02185D]">Đăng ký hợp tác & tài trợ</h4>
                            <p class="text-body-xs text-slate-400">Tham gia hệ sinh thái ngay hôm nay!</p>
                        </div>

                        <form class="space-y-3">
                            <input type="text" placeholder="Họ và tên *" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-body-xs focus:outline-none focus:border-[#062AAD]">
                            <input type="email" placeholder="Email *" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-body-xs focus:outline-none focus:border-[#062AAD]">
                            <input type="tel" placeholder="Số điện thoại *" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-body-xs focus:outline-none focus:border-[#062AAD]">
                            <select class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-body-xs text-slate-600 focus:outline-none focus:border-[#062AAD]">
                                <option>Gói tài trợ quan tâm *</option>
                                <option>Tài trợ Đồng (20 triệu)</option>
                                <option>Tài trợ Bạc (50 triệu)</option>
                                <option>Tài trợ Vàng (100 triệu)</option>
                                <option>Tài trợ Kim Cương (200+ triệu)</option>
                            </select>
                            <textarea rows="3" placeholder="Nội dung liên hệ" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-body-xs focus:outline-none focus:border-[#062AAD]"></textarea>
                            <button type="button" class="w-full bg-[#02185D] hover:bg-[#062AAD] text-white font-extrabold text-body-xs rounded-full py-3 transition-colors shadow-md">
                                Gửi thông tin
                            </button>
                        </form>
                    </div>
                </div>
            <?php endif; ?>

        </div>

        <!-- SECTION 4: ĐỐI TÁC CHIẾN LƯỢC (5 CARD LOGO LỚN CHUẨN FIGMA) -->
        <div class="space-y-6 pt-4">
            <h2 class="text-h3 font-extrabold text-[#062AAD] text-center">
                Đối tác chiến lược
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-5 gap-5">
                <!-- 1. DBC -->
                <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-24 flex items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer">
                    <span class="font-black text-2xl text-[#2E7D32] tracking-wider group-hover:scale-105 transition-transform">DBC</span>
                </div>

                <!-- 2. KVIP -->
                <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-24 flex items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer">
                    <div class="flex items-center gap-1">
                        <span class="w-4 h-4 rounded-full bg-red-600 inline-block"></span>
                        <span class="font-black text-2xl text-[#02185D] tracking-wider group-hover:scale-105 transition-transform">KVIP</span>
                    </div>
                </div>

                <!-- 3. NIIC -->
                <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-24 flex items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer">
                    <span class="font-black text-2xl text-[#D81B60] tracking-wider group-hover:scale-105 transition-transform">NIIC</span>
                </div>

                <!-- 4. INSTITUTE OF INNOVATION -->
                <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-24 flex flex-col items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer">
                    <span class="font-black text-xs text-[#062AAD] tracking-wider group-hover:scale-105 transition-transform text-center uppercase">
                        INSTITUTE OF<br>INNOVATION
                    </span>
                </div>

                <!-- 5. NIIC -->
                <div class="bg-white border border-slate-200/80 rounded-2xl p-4 h-24 flex items-center justify-center shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all group cursor-pointer">
                    <span class="font-black text-2xl text-[#D81B60] tracking-wider group-hover:scale-105 transition-transform">NIIC</span>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'includes/mentor-modal.php';
require_once 'includes/footer.php';
?>
