<?php
$page_title = "CiNEC Impact - Tác Động Hệ Sinh Thái Đổi Mới Sáng Tạo";
require_once 'config/db.php';
require_once 'includes/header.php';
?>

<!-- TOÀN BỘ GIAO DIỆN IMPACT: CHUẨN XÁC THEO FIGMA (NODE 115:2362) -->
<div class="bg-[#F7FAFD] min-h-screen pt-28 pb-20 relative overflow-hidden">

    <!-- Đồ họa nền công nghệ phía trên bên phải (Hero Right Graphic) -->
    <div class="absolute top-0 right-0 w-[820px] max-w-[65vw] h-[480px] pointer-events-none opacity-40 mix-blend-multiply overflow-hidden z-0 hidden sm:block">
        <img src="assets/img/impact_hero_bg.png" alt="Impact Decor" class="w-full h-full object-cover object-left-top">
        <div class="absolute inset-0 bg-gradient-to-l from-transparent via-[#F7FAFD]/40 to-[#F7FAFD]"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#F7FAFD]"></div>
    </div>

    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-24 relative z-10 space-y-12">

        <!-- ================================================================= -->
        <!-- BREADCRUMB & HERO HEADER                                          -->
        <!-- ================================================================= -->
        <div class="space-y-4 pt-2">
            <!-- Breadcrumb điều hướng -->
            <nav class="flex items-center gap-2 text-sm text-[#062AAD] font-medium" aria-label="Breadcrumb">
                <a href="index.php" class="hover:underline transition-all">Trang chủ</a>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-400"></i>
                <span class="font-semibold text-[#062AAD]">Impact</span>
            </nav>

            <!-- Tiêu đề lớn & Thuyết minh -->
            <div class="space-y-3 max-w-3xl">
                <h1 class="text-3xl sm:text-4xl md:text-[40px] font-bold text-[#062AAD] tracking-tight leading-tight">
                    CiNEC <span class="text-[#7BC612]">Impact</span>
                </h1>
                <p class="text-sm md:text-base text-[#5B5B5B] leading-relaxed font-normal">
                    CiNEC cam kết tạo ra tác động tích cực và bền vững cho hệ sinh thái đổi mới sáng tạo của Cà Mau và khu vực Đồng bằng sông Cửu Long.
                </p>
            </div>
        </div>

        <!-- ================================================================= -->
        <!-- SECTION 1: DASHBOARD TỔNG QUAN (3 THẺ BIỂU ĐỒ FIGMA GỐC)          -->
        <!-- ================================================================= -->
        <section class="space-y-6">
            <h2 class="text-xl md:text-2xl font-bold text-[#062AAD]">
                Dashboard tổng quan
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">
                
                <!-- Card 1: Số liệu nổi bật năm 2025 -->
                <div class="bg-white rounded-xl p-6 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md transition-all duration-300 flex flex-col justify-between space-y-4">
                    <h3 class="text-lg md:text-xl font-bold text-[#062AAD]">
                        Số liệu nổi bật năm 2025
                    </h3>
                    <div class="w-full flex items-center justify-center my-auto py-2">
                        <img src="assets/img/impact_chart_solieu.png" alt="Biểu đồ số liệu nổi bật năm 2025" class="w-full max-h-[220px] object-contain">
                    </div>
                    <p class="text-xs md:text-[13px] text-[#5B5B5B] text-center font-medium pt-2 border-t border-slate-50">
                        Số liệu cập nhật đến 31/12/2025
                    </p>
                </div>

                <!-- Card 2: Tác động theo lĩnh vực -->
                <div class="bg-white rounded-xl p-6 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md transition-all duration-300 flex flex-col justify-between space-y-4">
                    <h3 class="text-lg md:text-xl font-bold text-[#062AAD]">
                        Tác động theo lĩnh vực
                    </h3>
                    <div class="w-full flex items-center justify-center my-auto py-2">
                        <img src="assets/img/impact_chart_linhvuc.png" alt="Biểu đồ tác động theo lĩnh vực" class="w-full max-h-[220px] object-contain">
                    </div>
                </div>

                <!-- Card 3: Phân bổ hỗ trợ cho Startup -->
                <div class="bg-white rounded-xl p-6 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md transition-all duration-300 flex flex-col justify-between space-y-4">
                    <h3 class="text-lg md:text-xl font-bold text-[#062AAD]">
                        Phân bổ hỗ trợ cho Startup
                    </h3>
                    <div class="w-full flex items-center justify-center my-auto py-2">
                        <img src="assets/img/impact_chart_phanbo.png" alt="Biểu đồ phân bổ hỗ trợ cho Startup" class="w-full max-h-[220px] object-contain">
                    </div>
                </div>

            </div>
        </section>

        <!-- ================================================================= -->
        <!-- SECTION 2: TÁC ĐỘNG NỔI BẬT (4 THẺ THÀNH TỰU NGANG)               -->
        <!-- ================================================================= -->
        <section class="space-y-6">
            <h2 class="text-xl md:text-2xl font-bold text-[#062AAD]">
                Tác động nổi bật
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Thẻ 1: Kinh tế -->
                <div class="bg-white rounded-xl p-5 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-[rgba(5,166,245,0.1)] flex items-center justify-center shrink-0 p-2 overflow-hidden">
                        <img src="assets/img/impact_icon_kinhte.png" alt="Kinh tế" class="w-7 h-7 object-contain">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-[#062AAD]">Kinh tế</h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            Hỗ trợ tạo ra doanh thu ước tính hơn 150 tỷ đồng cho các startup trong hệ sinh thái.
                        </p>
                    </div>
                </div>

                <!-- Thẻ 2: Việc làm -->
                <div class="bg-white rounded-xl p-5 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-[rgba(5,166,245,0.1)] flex items-center justify-center shrink-0 p-2 overflow-hidden">
                        <img src="assets/img/impact_icon_vieclam.png" alt="Việc làm" class="w-7 h-7 object-contain">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-[#062AAD]">Việc làm</h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            Tạo ra hơn 500+ việc làm trực tiếp và gián tiếp cho cộng đồng địa phương.
                        </p>
                    </div>
                </div>

                <!-- Thẻ 3: Đổi mới sáng tạo -->
                <div class="bg-white rounded-xl p-5 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-[rgba(5,166,245,0.1)] flex items-center justify-center shrink-0 p-2 overflow-hidden">
                        <img src="assets/img/impact_icon_doimoi.png" alt="Đổi mới sáng tạo" class="w-7 h-7 object-contain">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-[#062AAD]">Đổi mới sáng tạo</h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            Thúc đẩy hơn 80 giải pháp đổi mới được ứng dụng và thương mại hóa thành công.
                        </p>
                    </div>
                </div>

                <!-- Thẻ 4: Cộng đồng -->
                <div class="bg-white rounded-xl p-5 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-[rgba(5,166,245,0.1)] flex items-center justify-center shrink-0 p-2 overflow-hidden">
                        <img src="assets/img/impact_icon_congdong.png" alt="Cộng đồng" class="w-7 h-7 object-contain">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-[#062AAD]">Cộng đồng</h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            Lan tỏa văn hóa đổi mới sáng tạo đến hơn 10.000+ sinh viên và thanh niên tại khu vực.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- ================================================================= -->
        <!-- SECTION 3: CÂU CHUYỆN TÁC ĐỘNG (3 THẺ CÂU CHUYỆN NỀN ẢNH THỰC TẾ) -->
        <!-- ================================================================= -->
        <section class="space-y-6">
            <h2 class="text-xl md:text-2xl font-bold text-[#062AAD]">
                Câu chuyện tác động
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Story 1 -->
                <div class="relative rounded-2xl overflow-hidden shadow-md group min-h-[224px] p-6 flex flex-col justify-between border border-slate-200/50">
                    <!-- Ảnh nền câu chuyện -->
                    <img src="assets/img/impact_story_bg.png" alt="Nền tảng quản lý ao nuôi thông minh" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <!-- Lớp phủ gradient mờ tối bảo đảm độ tương phản chữ -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/65 to-slate-900/35"></div>

                    <!-- Nội dung nổi phía trên -->
                    <div class="relative z-10 space-y-2">
                        <span class="inline-block bg-[#7BC612] text-white text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                            Chuyển đổi số
                        </span>
                        <h3 class="text-base md:text-[17px] font-semibold text-white leading-snug">
                            Nền tảng quản lý ao nuôi thông minh<br>Made in Cà Mau
                        </h3>
                    </div>

                    <div class="relative z-10 pt-2">
                        <p class="text-xs md:text-sm text-slate-200 leading-relaxed font-normal">
                            Giải pháp giúp 200+ hộ nuôi tôm tăng năng suất 20% và giảm chi phí 15%.
                        </p>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="relative rounded-2xl overflow-hidden shadow-md group min-h-[224px] p-6 flex flex-col justify-between border border-slate-200/50">
                    <!-- Ảnh nền câu chuyện -->
                    <img src="assets/img/impact_story_bg.png" alt="Nền tảng quản lý ao nuôi thông minh" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <!-- Lớp phủ gradient mờ tối bảo đảm độ tương phản chữ -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/65 to-slate-900/35"></div>

                    <!-- Nội dung nổi phía trên -->
                    <div class="relative z-10 space-y-2">
                        <span class="inline-block bg-[#7BC612] text-white text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                            Chuyển đổi số
                        </span>
                        <h3 class="text-base md:text-[17px] font-semibold text-white leading-snug">
                            Nền tảng quản lý ao nuôi thông minh<br>Made in Cà Mau
                        </h3>
                    </div>

                    <div class="relative z-10 pt-2">
                        <p class="text-xs md:text-sm text-slate-200 leading-relaxed font-normal">
                            Giải pháp giúp 200+ hộ nuôi tôm tăng năng suất 20% và giảm chi phí 15%.
                        </p>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="relative rounded-2xl overflow-hidden shadow-md group min-h-[224px] p-6 flex flex-col justify-between border border-slate-200/50">
                    <!-- Ảnh nền câu chuyện -->
                    <img src="assets/img/impact_story_bg.png" alt="Nền tảng quản lý ao nuôi thông minh" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <!-- Lớp phủ gradient mờ tối bảo đảm độ tương phản chữ -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/65 to-slate-900/35"></div>

                    <!-- Nội dung nổi phía trên -->
                    <div class="relative z-10 space-y-2">
                        <span class="inline-block bg-[#7BC612] text-white text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                            Chuyển đổi số
                        </span>
                        <h3 class="text-base md:text-[17px] font-semibold text-white leading-snug">
                            Nền tảng quản lý ao nuôi thông minh<br>Made in Cà Mau
                        </h3>
                    </div>

                    <div class="relative z-10 pt-2">
                        <p class="text-xs md:text-sm text-slate-200 leading-relaxed font-normal">
                            Giải pháp giúp 200+ hộ nuôi tôm tăng năng suất 20% và giảm chi phí 15%.
                        </p>
                    </div>
                </div>

            </div>
        </section>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
