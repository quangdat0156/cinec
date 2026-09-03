<?php
$page_title = "Doanh nghiệp số Cà Mau (Ca Mau Digital SME)";
require_once 'config/db.php';
require_once 'includes/header.php';

$program = $mockPrograms['SME'];
?>

<div class="bg-[#FAFCFF] min-h-screen pt-28 pb-16">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-12">

        <!-- BREADCRUMB -->
        <nav class="flex items-center gap-2 text-body-xs font-semibold text-slate-500">
            <a href="index.php" class="hover:text-cinecPrimary transition-colors">Trang chủ</a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
            <a href="chuong-trinh.php" class="hover:text-cinecPrimary transition-colors">Chương trình</a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
            <span class="text-emerald-600 font-bold"><?php echo $program['title']; ?></span>
        </nav>

        <!-- HERO SECTION BANNER -->
        <div class="bg-gradient-to-br from-emerald-900 via-teal-900 to-[#02185D] rounded-[32px] p-8 md:p-14 text-white shadow-2xl relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-96 h-96 bg-emerald-500/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute right-40 -bottom-20 w-80 h-80 bg-teal-500/20 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 max-w-4xl space-y-6">
                <div class="flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center gap-2 bg-emerald-500/20 border border-emerald-400/30 text-emerald-200 px-4 py-1.5 rounded-full text-body-xs font-extrabold uppercase tracking-wider backdrop-blur-md">
                        <i data-lucide="shopping-bag" class="w-4 h-4 text-emerald-300"></i>
                        <?php echo $program['badge']; ?>
                    </span>
                </div>

                <h1 class="text-h3 md:text-h1 font-extrabold tracking-tight leading-tight">
                    <?php echo $program['title']; ?>
                </h1>
                <p class="text-body-xs font-bold text-emerald-300 tracking-wider uppercase">
                    <?php echo $program['sub_title']; ?>
                </p>

                <p class="text-body-xs md:text-body-sm text-emerald-100/90 font-light leading-relaxed max-w-3xl">
                    <?php echo $program['desc']; ?>
                </p>

                <!-- Key Metrics Grid -->
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-emerald-700/50 max-w-2xl">
                    <?php foreach ($program['key_metrics'] as $metric): ?>
                        <div>
                            <div class="text-h4 md:text-h3 font-black text-emerald-300"><?php echo $metric['number']; ?></div>
                            <div class="text-[11px] md:text-body-xs text-emerald-200/80 font-medium"><?php echo $metric['label']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="#register-section" class="inline-flex items-center gap-2 bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold text-body-sm px-6 py-3.5 rounded-full transition-all shadow-lg hover:shadow-emerald-500/30">
                        <span>Đăng ký nhận Voucher Chuyển đổi số</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                    <a href="lien-he.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white font-bold text-body-sm px-6 py-3.5 rounded-full transition-all border border-white/20">
                        <span>Số hóa sản phẩm OCOP Cà Mau</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- MAIN FUNCTION & TARGET AUDIENCE SECTION -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-4 flex items-start gap-5">
                <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 border border-emerald-200 shadow-2xs mt-1">
                    <i data-lucide="ticket" class="w-7 h-7"></i>
                </div>
                <div class="space-y-2">
                    <span class="text-[10px] font-black uppercase tracking-wider text-emerald-600">ĐỊNH VỊ CHỨC NĂNG</span>
                    <h2 class="text-h4 font-extrabold text-[#02185D]">Chức Năng Chính</h2>
                    <p class="text-body-xs text-slate-600 leading-relaxed">
                        <?php echo $program['main_function']; ?> Cấp Voucher chuyển đổi số gắn nhà cung cấp thẩm định, phân công Mentor theo dõi KPI sau 90 ngày, ứng dụng AI, TMĐT, Logistics số và nâng giá trị OCOP.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-4 flex items-start gap-5">
                <div class="w-14 h-14 rounded-2xl bg-teal-50 text-teal-600 flex items-center justify-center shrink-0 border border-teal-200 shadow-2xs mt-1">
                    <i data-lucide="building-2" class="w-7 h-7"></i>
                </div>
                <div class="space-y-2">
                    <span class="text-[10px] font-black uppercase tracking-wider text-teal-600">ĐỐI TƯỢNG HƯỚNG TỚI</span>
                    <h2 class="text-h4 font-extrabold text-[#02185D]">Đối Tượng Tham Gia</h2>
                    <p class="text-body-xs text-slate-600 leading-relaxed">
                        <?php echo $program['target_audience']; ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- CORE ACTIVITIES SECTION -->
        <div class="space-y-6">
            <div class="text-center space-y-2 max-w-2xl mx-auto">
                <span class="text-body-xs font-black uppercase tracking-wider text-emerald-600">NỘI DUNG CHỦ YẾU</span>
                <h2 class="text-h3 font-extrabold text-[#02185D]">Hoạt Động Trọng Tâm Cho Doanh Nghiệp Số</h2>
                <p class="text-body-xs text-slate-500">Chuyển đổi số thực chiến đo lường hiệu quả bằng KPI sau 90 ngày</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($program['core_activities'] as $index => $activity): ?>
                    <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 space-y-4 flex flex-col justify-between group">
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center border border-emerald-100 group-hover:scale-110 transition-transform">
                                <i data-lucide="<?php echo $activity['icon']; ?>" class="w-6 h-6"></i>
                            </div>
                            <span class="text-[10px] font-extrabold text-slate-400">HOẠT ĐỘNG 0<?php echo $index + 1; ?></span>
                            <h3 class="text-body-md font-extrabold text-[#02185D] group-hover:text-emerald-600 transition-colors">
                                <?php echo $activity['title']; ?>
                            </h3>
                            <p class="text-body-xs text-slate-500 font-light leading-relaxed">
                                <?php echo $activity['desc']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- DELIVERABLES / OUTPUTS SECTION -->
        <div class="bg-emerald-950 text-white rounded-3xl p-8 md:p-12 space-y-8 shadow-xl">
            <div class="text-center space-y-2 max-w-2xl mx-auto">
                <span class="text-body-xs font-black uppercase tracking-wider text-emerald-300">KẾT QUẢ ĐẦU RA</span>
                <h2 class="text-h3 font-extrabold text-white">Sản Phẩm Đầu Ra Đạt Được</h2>
                <p class="text-body-xs text-emerald-200/80 font-light">Voucher Chuyển đổi số, nâng chuẩn OCOP và báo cáo đo lường năng suất doanh nghiệp</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($program['outputs'] as $out): ?>
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-6 space-y-3 hover:bg-white/15 transition-all">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/30 text-emerald-300 flex items-center justify-center">
                            <i data-lucide="<?php echo $out['icon']; ?>" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-body-md font-extrabold text-white"><?php echo $out['title']; ?></h3>
                        <p class="text-body-xs text-emerald-200/80 font-light leading-relaxed"><?php echo $out['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- REGISTRATION FORM SECTION -->
        <div id="register-section" class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200/80 shadow-md max-w-4xl mx-auto space-y-8">
            <div class="text-center space-y-2">
                <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mx-auto border border-emerald-200">
                    <i data-lucide="ticket" class="w-6 h-6"></i>
                </div>
                <h2 class="text-h3 font-extrabold text-[#02185D]">Đăng Ký Nhận Voucher Chuyển Đổi Số Ca Mau Digital SME</h2>
                <p class="text-body-xs text-slate-500">Dành cho các doanh nghiệp SME, Hợp tác xã, Hộ kinh doanh & Chủ thể OCOP tỉnh Cà Mau.</p>
            </div>

            <form action="lien-he.php" method="GET" class="space-y-6">
                <input type="hidden" name="program" value="SME">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Tên Doanh nghiệp / HTX / Hộ kinh doanh *</label>
                        <input type="text" required placeholder="HTX Nông nghiệp / Công ty SME..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-500 text-body-xs">
                    </div>

                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Người đại diện liên hệ *</label>
                        <input type="text" required placeholder="Nguyễn Văn A" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-500 text-body-xs">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Số điện thoại / Email *</label>
                        <input type="text" required placeholder="0901234567 / example@gmail.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-500 text-body-xs">
                    </div>

                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Loại hình đơn vị</label>
                        <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-500 text-body-xs text-slate-700">
                            <option>Doanh nghiệp nhỏ và vừa (SME)</option>
                            <option>Hợp tác xã (HTX)</option>
                            <option>Chủ thể OCOP Cà Mau</option>
                            <option>Hộ kinh doanh / Doanh nghiệp 1 người (OPC)</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-body-xs font-bold text-slate-700">Nhu cầu Chuyển đổi số lớn nhất hiện tại</label>
                    <textarea rows="4" placeholder="Nhập nhu cầu về phần mềm bán hàng, bán hàng sàn TMĐT, ứng dụng AI hay Logistics số..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-500 text-body-xs"></textarea>
                </div>

                <button type="submit" class="w-full py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-body-sm rounded-xl shadow-lg transition-all">
                    Đăng Ký Nhận Voucher CĐS
                </button>
            </form>
        </div>

        <!-- OTHER PROGRAMS NAV BAR -->
        <div class="pt-8 border-t border-slate-200">
            <h3 class="text-body-xs font-extrabold text-slate-400 uppercase tracking-wider mb-4 text-center">Các chương trình thành phần khác</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="chuong-trinh-platform.php" class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-blue-500 text-center space-y-1 transition-all group">
                    <span class="text-body-xs font-bold text-[#02185D] group-hover:text-blue-600 block">1. Nền tảng Đổi mới sáng tạo</span>
                    <span class="text-[10px] text-slate-400">Sandbox, Dữ liệu Đổi mới sáng tạo, Chỉ số PII</span>
                </a>
                <a href="chuong-trinh-journey.php" class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-amber-500 text-center space-y-1 transition-all group">
                    <span class="text-body-xs font-bold text-[#02185D] group-hover:text-amber-600 block">2. Hành trình Khởi nghiệp</span>
                    <span class="text-[10px] text-slate-400">4 bước liên thông & Đồng tài trợ 1:1</span>
                </a>
                <a href="chuong-trinh-talent.php" class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-purple-500 text-center space-y-1 transition-all group">
                    <span class="text-body-xs font-bold text-[#02185D] group-hover:text-purple-600 block">4. Nhân tài số</span>
                    <span class="text-[10px] text-slate-400">Học bổng tài năng số & Mô hình ĐH Khởi nghiệp</span>
                </a>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
