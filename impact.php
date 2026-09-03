<?php
require_once 'config/db.php';
require_once 'config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
$page_title = $is_en ? "CiNEC Impact - Regional Ecosystem Impact & Metrics" : "CiNEC Impact - Tác Động Hệ Sinh Thái Đổi Mới Sáng Tạo";
require_once 'includes/header.php';
?>

<!-- TOÀN BỘ GIAO DIỆN IMPACT: CHUẨN XÁC THEO FIGMA (NODE 115:2362 BILINGUAL) -->
<div class="bg-[#F7FAFD] min-h-screen pt-28 pb-20 relative overflow-hidden font-sans">

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
        <div class="space-y-4 pt-2 text-left">
            <!-- Breadcrumb điều hướng -->
            <nav class="flex items-center gap-2 text-sm text-[#062AAD] font-medium" aria-label="Breadcrumb">
                <a href="index.php" class="hover:underline transition-all"><?php echo __('nav_home'); ?></a>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-400"></i>
                <span class="font-semibold text-[#062AAD]">Impact</span>
            </nav>

            <!-- Tiêu đề lớn & Thuyết minh -->
            <div class="space-y-3 max-w-3xl">
                <h1 class="text-3xl sm:text-4xl md:text-[40px] font-bold text-[#062AAD] tracking-tight leading-tight">
                    CiNEC <span class="text-[#7BC612]">Impact</span>
                </h1>
                <p class="text-sm md:text-base text-[#5B5B5B] leading-relaxed font-normal">
                    <?php echo $is_en 
                        ? 'CiNEC is committed to creating measurable, sustainable, and positive socioeconomic impact for the innovation ecosystem of Ca Mau and the Mekong Delta.'
                        : 'CiNEC cam kết tạo ra tác động tích cực và bền vững cho hệ sinh thái đổi mới sáng tạo của Cà Mau và khu vực Đồng bằng sông Cửu Long.'; ?>
                </p>
            </div>
        </div>

        <!-- ================================================================= -->
        <!-- SECTION 1: DASHBOARD TỔNG QUAN (3 THẺ BIỂU ĐỒ FIGMA GỐC)          -->
        <!-- ================================================================= -->
        <section class="space-y-6 text-left">
            <h2 class="text-xl md:text-2xl font-bold text-[#062AAD]">
                <?php echo $is_en ? 'Impact Dashboard Overview' : 'Dashboard tổng quan'; ?>
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">
                
                <!-- Card 1: Số liệu nổi bật năm 2025 -->
                <div class="bg-white rounded-xl p-6 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md transition-all duration-300 flex flex-col justify-between space-y-4">
                    <h3 class="text-lg md:text-xl font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Key Metrics 2025' : 'Số liệu nổi bật năm 2025'; ?>
                    </h3>
                    <div class="w-full flex items-center justify-center my-auto py-2">
                        <img src="assets/img/impact_chart_solieu.png" alt="Biểu đồ số liệu nổi bật năm 2025" class="w-full max-h-[220px] object-contain">
                    </div>
                    <p class="text-xs md:text-[13px] text-[#5B5B5B] text-center font-medium pt-2 border-t border-slate-50">
                        <?php echo $is_en ? 'Data updated through 31/12/2025' : 'Số liệu cập nhật đến 31/12/2025'; ?>
                    </p>
                </div>

                <!-- Card 2: Tác động theo lĩnh vực -->
                <div class="bg-white rounded-xl p-6 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md transition-all duration-300 flex flex-col justify-between space-y-4">
                    <h3 class="text-lg md:text-xl font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Impact by Sector' : 'Tác động theo lĩnh vực'; ?>
                    </h3>
                    <div class="w-full flex items-center justify-center my-auto py-2">
                        <img src="assets/img/impact_chart_linhvuc.png" alt="Biểu đồ tác động theo lĩnh vực" class="w-full max-h-[220px] object-contain">
                    </div>
                </div>

                <!-- Card 3: Phân bổ hỗ trợ cho Startup -->
                <div class="bg-white rounded-xl p-6 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md transition-all duration-300 flex flex-col justify-between space-y-4">
                    <h3 class="text-lg md:text-xl font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Startup Support Allocation' : 'Phân bổ hỗ trợ cho Startup'; ?>
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
        <section class="space-y-6 text-left">
            <h2 class="text-xl md:text-2xl font-bold text-[#062AAD]">
                <?php echo $is_en ? 'Key Achievements' : 'Tác động nổi bật'; ?>
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Thẻ 1: Kinh tế -->
                <div class="bg-white rounded-xl p-5 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-[rgba(5,166,245,0.1)] flex items-center justify-center shrink-0 p-2 overflow-hidden">
                        <img src="assets/img/impact_icon_kinhte.png" alt="Kinh tế" class="w-7 h-7 object-contain">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-[#062AAD]"><?php echo $is_en ? 'Economy' : 'Kinh tế'; ?></h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en ? 'Generated an estimated VND 150+ billion in gross revenue for ecosystem startups.' : 'Hỗ trợ tạo ra doanh thu ước tính hơn 150 tỷ đồng cho các startup trong hệ sinh thái.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Thẻ 2: Việc làm -->
                <div class="bg-white rounded-xl p-5 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-[rgba(5,166,245,0.1)] flex items-center justify-center shrink-0 p-2 overflow-hidden">
                        <img src="assets/img/impact_icon_vieclam.png" alt="Việc làm" class="w-7 h-7 object-contain">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-[#062AAD]"><?php echo $is_en ? 'Employment' : 'Việc làm'; ?></h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en ? 'Created 500+ direct and indirect quality tech and business jobs.' : 'Tạo ra hơn 500+ việc làm trực tiếp và gián tiếp cho cộng đồng địa phương.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Thẻ 3: Đổi mới sáng tạo -->
                <div class="bg-white rounded-xl p-5 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-[rgba(5,166,245,0.1)] flex items-center justify-center shrink-0 p-2 overflow-hidden">
                        <img src="assets/img/impact_icon_doimoi.png" alt="Đổi mới sáng tạo" class="w-7 h-7 object-contain">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-[#062AAD]"><?php echo $is_en ? 'Innovation' : 'Đổi mới sáng tạo'; ?></h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en ? 'Catalyzed 80+ innovative solutions deployed and commercialized successfully.' : 'Thúc đẩy hơn 80 giải pháp đổi mới được ứng dụng và thương mại hóa thành công.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Thẻ 4: Cộng đồng -->
                <div class="bg-white rounded-xl p-5 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-[rgba(5,166,245,0.1)] flex items-center justify-center shrink-0 p-2 overflow-hidden">
                        <img src="assets/img/impact_icon_congdong.png" alt="Cộng đồng" class="w-7 h-7 object-contain">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-[#062AAD]"><?php echo $is_en ? 'Community' : 'Cộng đồng'; ?></h3>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en ? 'Spread entrepreneurship mindset to 10,000+ university and college students.' : 'Lan tỏa văn hóa đổi mới sáng tạo đến hơn 10.000+ sinh viên và thanh niên tại khu vực.'; ?>
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- ================================================================= -->
        <!-- SECTION 3: CÂU CHUYỆN TÁC ĐỘNG (3 THẺ CÂU CHUYỆN NỀN ẢNH THỰC TẾ) -->
        <!-- ================================================================= -->
        <section class="space-y-6 text-left">
            <h2 class="text-xl md:text-2xl font-bold text-[#062AAD]">
                <?php echo $is_en ? 'Impact Case Studies' : 'Câu chuyện tác động'; ?>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Story 1 -->
                <div class="relative rounded-2xl overflow-hidden shadow-md group min-h-[224px] p-6 flex flex-col justify-between border border-slate-200/50">
                    <img src="assets/img/impact_story_bg.png" alt="Nền tảng quản lý ao nuôi thông minh" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/65 to-slate-900/35"></div>

                    <div class="relative z-10 space-y-2">
                        <span class="inline-block bg-[#7BC612] text-white text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                            <?php echo $is_en ? 'Digital Transformation' : 'Chuyển đổi số'; ?>
                        </span>
                        <h3 class="text-base md:text-[17px] font-semibold text-white leading-snug">
                            <?php echo $is_en ? 'Smart Aquaculture Management Platform<br>Made in Ca Mau' : 'Nền tảng quản lý ao nuôi thông minh<br>Made in Cà Mau'; ?>
                        </h3>
                    </div>

                    <div class="relative z-10 pt-2">
                        <p class="text-xs md:text-sm text-slate-200 leading-relaxed font-normal">
                            <?php echo $is_en ? 'Solution empowering 200+ shrimp farming households to boost yields by 20% and reduce costs by 15%.' : 'Giải pháp giúp 200+ hộ nuôi tôm tăng năng suất 20% và giảm chi phí 15%.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="relative rounded-2xl overflow-hidden shadow-md group min-h-[224px] p-6 flex flex-col justify-between border border-slate-200/50">
                    <img src="assets/img/impact_story_bg.png" alt="Truy xuất nguồn gốc cua Cà Mau" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/65 to-slate-900/35"></div>

                    <div class="relative z-10 space-y-2">
                        <span class="inline-block bg-[#05A6F5] text-white text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                            <?php echo $is_en ? 'Blockchain Traceability' : 'Blockchain & OCOP'; ?>
                        </span>
                        <h3 class="text-base md:text-[17px] font-semibold text-white leading-snug">
                            <?php echo $is_en ? 'Ca Mau Crab Traceability Stamp<br>Export Accreditation' : 'Tem Số Hóa Chuỗi Cua Cà Mau<br>Xuất khẩu chính ngạch'; ?>
                        </h3>
                    </div>

                    <div class="relative z-10 pt-2">
                        <p class="text-xs md:text-sm text-slate-200 leading-relaxed font-normal">
                            <?php echo $is_en ? 'Elevating premium Ca Mau crab values by 35% through QR verification on international e-commerce.' : 'Nâng tầm giá trị cua biển Cà Mau tăng 35% nhờ định danh số trên các sàn TMĐT quốc tế.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="relative rounded-2xl overflow-hidden shadow-md group min-h-[224px] p-6 flex flex-col justify-between border border-slate-200/50">
                    <img src="assets/img/impact_story_bg.png" alt="Vườn ươm tài năng số" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/65 to-slate-900/35"></div>

                    <div class="relative z-10 space-y-2">
                        <span class="inline-block bg-[#7C3AED] text-white text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                            <?php echo $is_en ? 'Digital Talent Hub' : 'Vườn ươm Nhân tài'; ?>
                        </span>
                        <h3 class="text-base md:text-[17px] font-semibold text-white leading-snug">
                            <?php echo $is_en ? 'Local AI Developer Incubator<br>Serving Global Markets' : 'Lực lượng lập trình viên AI Cà Mau<br>Cung ứng toàn quốc'; ?>
                        </h3>
                    </div>

                    <div class="relative z-10 pt-2">
                        <p class="text-xs md:text-sm text-slate-200 leading-relaxed font-normal">
                            <?php echo $is_en ? 'Connecting 100+ provincial youth with high-income tech careers without leaving their hometown.' : 'Kết nối 100+ thanh niên địa phương có việc làm thu nhập cao ngay tại quê nhà.'; ?>
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
