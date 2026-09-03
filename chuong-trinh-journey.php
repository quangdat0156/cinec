<?php
$page_title = "Hành trình Khởi nghiệp Cà Mau (Ca Mau Startup Journey)";
require_once 'config/db.php';
require_once 'includes/header.php';

$program = $mockPrograms['JOURNEY'];
?>

<div class="bg-[#FAFCFF] min-h-screen pt-28 pb-16">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-12">

        <!-- BREADCRUMB -->
        <nav class="flex items-center gap-2 text-body-xs font-semibold text-slate-500">
            <a href="index.php" class="hover:text-cinecPrimary transition-colors">Trang chủ</a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
            <a href="chuong-trinh.php" class="hover:text-cinecPrimary transition-colors">Chương trình</a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
            <span class="text-amber-600 font-bold"><?php echo $program['title']; ?></span>
        </nav>

        <!-- HERO SECTION BANNER -->
        <div class="bg-gradient-to-br from-amber-900 via-orange-900 to-[#02185D] rounded-[32px] p-8 md:p-14 text-white shadow-2xl relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-96 h-96 bg-amber-500/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute right-40 -bottom-20 w-80 h-80 bg-orange-500/20 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 max-w-4xl space-y-6">
                <div class="flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center gap-2 bg-amber-500/20 border border-amber-400/30 text-amber-200 px-4 py-1.5 rounded-full text-body-xs font-extrabold uppercase tracking-wider backdrop-blur-md">
                        <i data-lucide="rocket" class="w-4 h-4 text-amber-300"></i>
                        <?php echo $program['badge']; ?>
                    </span>
                </div>

                <h1 class="text-h3 md:text-h1 font-extrabold tracking-tight leading-tight">
                    <?php echo $program['title']; ?>
                </h1>
                <p class="text-body-xs font-bold text-amber-300 tracking-wider uppercase">
                    <?php echo $program['sub_title']; ?>
                </p>

                <p class="text-body-xs md:text-body-sm text-amber-100/90 font-light leading-relaxed max-w-3xl">
                    <?php echo $program['desc']; ?>
                </p>

                <!-- Key Metrics Grid -->
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-amber-700/50 max-w-2xl">
                    <?php foreach ($program['key_metrics'] as $metric): ?>
                        <div>
                            <div class="text-h4 md:text-h3 font-black text-amber-300"><?php echo $metric['number']; ?></div>
                            <div class="text-[11px] md:text-body-xs text-amber-200/80 font-medium"><?php echo $metric['label']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="#register-section" class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-600 text-white font-extrabold text-body-sm px-6 py-3.5 rounded-full transition-all shadow-lg hover:shadow-amber-500/30">
                        <span>Đăng ký tham gia 4 bước liên thông</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                    <a href="lien-he.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white font-bold text-body-sm px-6 py-3.5 rounded-full transition-all border border-white/20">
                        <span>Tìm hiểu cơ chế Đồng tài trợ 1:1</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- 4-STEP PROCESS ROADMAP VISUAL -->
        <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-6">
            <div class="text-center space-y-2">
                <span class="text-body-xs font-black uppercase tracking-wider text-amber-600">QUY TRÌNH HỖ TRỢ LIÊN THÔNG 04 BƯỚC</span>
                <h2 class="text-h3 font-extrabold text-[#02185D]">Hành Trình Khởi Nghiệp Chuẩn Hóa Cà Mau</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Step 1 -->
                <div class="bg-amber-50/50 rounded-2xl p-5 border border-amber-200/80 space-y-3">
                    <div class="w-8 h-8 rounded-full bg-amber-600 text-white font-black text-xs flex items-center justify-center">1</div>
                    <h3 class="text-body-xs font-extrabold text-amber-900">Tìm nguồn & Tiền ươm tạo</h3>
                    <p class="text-[11px] text-slate-600 leading-relaxed">Săn nguồn ý tưởng từ các cuộc thi khởi nghiệp cấp tỉnh & vùng, cấp vốn mồi tiền ươm tạo.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-amber-50/50 rounded-2xl p-5 border border-amber-200/80 space-y-3">
                    <div class="w-8 h-8 rounded-full bg-amber-600 text-white font-black text-xs flex items-center justify-center">2</div>
                    <h3 class="text-body-xs font-extrabold text-amber-900">Ươm tạo 6-12 tháng</h3>
                    <p class="text-[11px] text-slate-600 leading-relaxed">Ươm tạo tại Lab dùng chung, hoàn thiện mẫu sản phẩm MVP và tư vấn mô hình kinh doanh.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-amber-50/50 rounded-2xl p-5 border border-amber-200/80 space-y-3">
                    <div class="w-8 h-8 rounded-full bg-amber-600 text-white font-black text-xs flex items-center justify-center">3</div>
                    <h3 class="text-body-xs font-extrabold text-amber-900">Tăng tốc 3-6 tháng (1:1)</h3>
                    <p class="text-[11px] text-slate-600 leading-relaxed">Tăng tốc tăng trưởng kinh doanh kết hợp chính sách ngân sách đồng tài trợ đối ứng 1:1.</p>
                </div>

                <!-- Step 4 -->
                <div class="bg-amber-50/50 rounded-2xl p-5 border border-amber-200/80 space-y-3">
                    <div class="w-8 h-8 rounded-full bg-amber-600 text-white font-black text-xs flex items-center justify-center">4</div>
                    <h3 class="text-body-xs font-extrabold text-amber-900">Mở rộng quy mô & Vốn</h3>
                    <p class="text-[11px] text-slate-600 leading-relaxed">Kết nối các Quỹ đầu tư mạo hiểm, mở rộng kênh phân phối thị trường vùng & quốc tế.</p>
                </div>
            </div>
        </div>

        <!-- MAIN FUNCTION & TARGET AUDIENCE SECTION -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-4 flex items-start gap-5">
                <div class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 border border-amber-200 shadow-2xs mt-1">
                    <i data-lucide="shield-check" class="w-7 h-7"></i>
                </div>
                <div class="space-y-2">
                    <span class="text-[10px] font-black uppercase tracking-wider text-amber-600">ĐỊNH VỊ CHỨC NĂNG</span>
                    <h2 class="text-h4 font-extrabold text-[#02185D]">Chức Năng Chính</h2>
                    <p class="text-body-xs text-slate-600 leading-relaxed">
                        <?php echo $program['main_function']; ?>
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-4 flex items-start gap-5">
                <div class="w-14 h-14 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center shrink-0 border border-orange-200 shadow-2xs mt-1">
                    <i data-lucide="target" class="w-7 h-7"></i>
                </div>
                <div class="space-y-2">
                    <span class="text-[10px] font-black uppercase tracking-wider text-orange-600">ĐỐI TƯỢNG HƯỚNG TỚI</span>
                    <h2 class="text-h4 font-extrabold text-[#02185D]">Đối Tượng Tham Gia</h2>
                    <p class="text-body-xs text-slate-600 leading-relaxed">
                        <?php echo $program['target_audience']; ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- DELIVERABLES / OUTPUTS SECTION -->
        <div class="bg-amber-950 text-white rounded-3xl p-8 md:p-12 space-y-8 shadow-xl">
            <div class="text-center space-y-2 max-w-2xl mx-auto">
                <span class="text-body-xs font-black uppercase tracking-wider text-amber-300">KẾT QUẢ ĐẦU RA</span>
                <h2 class="text-h3 font-extrabold text-white">Đầu Ra Đạt Được Của Chương Trình</h2>
                <p class="text-body-xs text-amber-200/80 font-light">Sự trưởng thành bền vững của các doanh nghiệp startup Cà Mau</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($program['outputs'] as $out): ?>
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-6 space-y-3 hover:bg-white/15 transition-all">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/30 text-amber-300 flex items-center justify-center">
                            <i data-lucide="<?php echo $out['icon']; ?>" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-body-md font-extrabold text-white"><?php echo $out['title']; ?></h3>
                        <p class="text-body-xs text-amber-200/80 font-light leading-relaxed"><?php echo $out['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- REGISTRATION FORM SECTION -->
        <div id="register-section" class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200/80 shadow-md max-w-4xl mx-auto space-y-8">
            <div class="text-center space-y-2">
                <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center mx-auto border border-amber-200">
                    <i data-lucide="rocket" class="w-6 h-6"></i>
                </div>
                <h2 class="text-h3 font-extrabold text-[#02185D]">Đăng Ký Khởi Nghiệp Cùng Ca Mau Startup Journey</h2>
                <p class="text-body-xs text-slate-500">Dành cho cá nhân, nhóm sáng lập và doanh nghiệp khởi nghiệp Đổi mới sáng tạo trên địa bàn tỉnh Cà Mau.</p>
            </div>

            <form action="lien-he.php" method="GET" class="space-y-6">
                <input type="hidden" name="program" value="JOURNEY">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Họ và tên người đại diện *</label>
                        <input type="text" required placeholder="Nguyễn Văn A" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-amber-500 text-body-xs">
                    </div>

                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Tên Dự án / Startup</label>
                        <input type="text" placeholder="Dự án Cà Mau Startup..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-amber-500 text-body-xs">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Email *</label>
                        <input type="email" required placeholder="example@gmail.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-amber-500 text-body-xs">
                    </div>

                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Giai đoạn đăng ký hỗ trợ</label>
                        <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-amber-500 text-body-xs text-slate-700">
                            <option>Bước 1: Tham gia cuộc thi & Vốn mồi tiền ươm tạo</option>
                            <option>Bước 2: Ươm tạo 6-12 tháng tại Lab dùng chung</option>
                            <option>Bước 3: Tăng tốc 3-6 tháng & Đồng tài trợ 1:1</option>
                            <option>Bước 4: Mở rộng quy mô & Gọi vốn đầu tư</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-body-xs font-bold text-slate-700">Mô tả ngắn gọn về ý tưởng / sản phẩm & nhu cầu tài trợ đối ứng</label>
                    <textarea rows="4" placeholder="Nêu rõ sản phẩm, thị trường mục tiêu và số vốn đối ứng cần đồng tài trợ..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-amber-500 text-body-xs"></textarea>
                </div>

                <button type="submit" class="w-full py-4 bg-amber-600 hover:bg-amber-700 text-white font-extrabold text-body-sm rounded-xl shadow-lg transition-all">
                    Nộp Hồ Sơ Khởi Nghiệp
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
                <a href="chuong-trinh-sme.php" class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-emerald-500 text-center space-y-1 transition-all group">
                    <span class="text-body-xs font-bold text-[#02185D] group-hover:text-emerald-600 block">3. Doanh nghiệp số</span>
                    <span class="text-[10px] text-slate-400">Voucher CĐS, Mentor KPI 90 ngày & OCOP</span>
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
