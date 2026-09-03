<?php
$page_title = "CINEC HUB - Không gian kết nối & Cộng đồng";
require_once 'config/db.php';
require_once 'includes/header.php';

$program = $mockPrograms['HUB'];
?>

<div class="bg-[#FAFCFF] min-h-screen pt-28 pb-16">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-12">

        <!-- BREADCRUMB -->
        <nav class="flex items-center gap-2 text-body-xs font-semibold text-slate-500">
            <a href="index.php" class="hover:text-cinecPrimary transition-colors">Trang chủ</a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
            <a href="chuong-trinh.php" class="hover:text-cinecPrimary transition-colors">Chương trình</a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
            <span class="text-blue-600 font-bold">CINEC HUB</span>
        </nav>

        <!-- HERO SECTION BANNER -->
        <div class="bg-gradient-to-br from-blue-900 via-cyan-900 to-[#02185D] rounded-[32px] p-8 md:p-14 text-white shadow-2xl relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute right-40 -bottom-20 w-80 h-80 bg-cyan-500/20 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 max-w-4xl space-y-6">
                <div class="inline-flex items-center gap-2 bg-blue-500/20 border border-blue-400/30 text-blue-200 px-4 py-1.5 rounded-full text-body-xs font-extrabold uppercase tracking-wider backdrop-blur-md">
                    <i data-lucide="users" class="w-4 h-4 text-blue-300"></i>
                    <?php echo $program['badge']; ?>
                </div>

                <h1 class="text-h3 md:text-h1 font-extrabold tracking-tight leading-tight">
                    <?php echo $program['code']; ?> - <?php echo $program['name']; ?>
                </h1>

                <p class="text-body-xs md:text-body-sm text-blue-100/90 font-light leading-relaxed max-w-3xl">
                    <?php echo $program['desc']; ?>
                </p>

                <!-- Key Metrics Grid -->
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-blue-700/50 max-w-2xl">
                    <?php foreach ($program['key_metrics'] as $metric): ?>
                        <div>
                            <div class="text-h4 md:text-h3 font-black text-cyan-300"><?php echo $metric['number']; ?></div>
                            <div class="text-[11px] md:text-body-xs text-blue-200/80 font-medium"><?php echo $metric['label']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="#register-section" class="inline-flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white font-extrabold text-body-sm px-6 py-3.5 rounded-full transition-all shadow-lg hover:shadow-blue-500/30">
                        <span>Tham gia cộng đồng CINEC HUB</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                    <a href="gioi-thieu.php#facilities" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white font-bold text-body-sm px-6 py-3.5 rounded-full transition-all border border-white/20">
                        <span>Khám phá không gian Coworking</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- MAIN FUNCTION & TARGET AUDIENCE SECTION -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-4 flex items-start gap-5">
                <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 border border-blue-200 shadow-2xs mt-1">
                    <i data-lucide="network" class="w-7 h-7"></i>
                </div>
                <div class="space-y-2">
                    <span class="text-[10px] font-black uppercase tracking-wider text-blue-600">ĐỊNH VỊ CHỨC NĂNG</span>
                    <h2 class="text-h4 font-extrabold text-[#02185D]">Chức Năng Chính</h2>
                    <p class="text-body-xs text-slate-600 leading-relaxed">
                        <?php echo $program['main_function']; ?> Cung cấp hạ tầng kết nối vật lý và trực tuyến, tối ưu hóa giao lưu chuyên môn, tổ chức sự kiện cộng đồng và hỗ trợ tiếp cận cơ sở dữ liệu chuyên gia chất lượng cao.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-4 flex items-start gap-5">
                <div class="w-14 h-14 rounded-2xl bg-cyan-50 text-cyan-600 flex items-center justify-center shrink-0 border border-cyan-200 shadow-2xs mt-1">
                    <i data-lucide="user-check" class="w-7 h-7"></i>
                </div>
                <div class="space-y-2">
                    <span class="text-[10px] font-black uppercase tracking-wider text-cyan-600">ĐỐI TƯỢNG HƯỚNG TỚI</span>
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
                <span class="text-body-xs font-black uppercase tracking-wider text-blue-600">HOẠT ĐỘNG CHỦ ĐẠO</span>
                <h2 class="text-h3 font-extrabold text-[#02185D]">Hoạt Động Cốt Lõi Tại CINEC HUB</h2>
                <p class="text-body-xs text-slate-500">Kết nối con người và tài nguyên sáng tạo không khoảng cách</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($program['core_activities'] as $index => $activity): ?>
                    <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 space-y-4 flex flex-col justify-between group">
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center border border-blue-100 group-hover:scale-110 transition-transform">
                                <i data-lucide="<?php echo $activity['icon']; ?>" class="w-6 h-6"></i>
                            </div>
                            <span class="text-[10px] font-extrabold text-slate-400">HOẠT ĐỘNG 0<?php echo $index + 1; ?></span>
                            <h3 class="text-body-md font-extrabold text-[#02185D] group-hover:text-blue-600 transition-colors">
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
        <div class="bg-blue-950 text-white rounded-3xl p-8 md:p-12 space-y-8 shadow-xl">
            <div class="text-center space-y-2 max-w-2xl mx-auto">
                <span class="text-body-xs font-black uppercase tracking-wider text-cyan-300">KẾT QUẢ ĐẦU RA</span>
                <h2 class="text-h3 font-extrabold text-white">Đầu Ra Đạt Được Khi Gia Nhập HUB</h2>
                <p class="text-body-xs text-blue-200/80 font-light">Giá trị lâu dài mang lại cho các cá nhân và doanh nghiệp thành viên</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($program['outputs'] as $out): ?>
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-6 space-y-3 hover:bg-white/15 transition-all">
                        <div class="w-10 h-10 rounded-xl bg-blue-500/30 text-cyan-300 flex items-center justify-center">
                            <i data-lucide="<?php echo $out['icon']; ?>" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-body-md font-extrabold text-white"><?php echo $out['title']; ?></h3>
                        <p class="text-body-xs text-blue-200/80 font-light leading-relaxed"><?php echo $out['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- REGISTRATION FORM SECTION -->
        <div id="register-section" class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200/80 shadow-md max-w-4xl mx-auto space-y-8">
            <div class="text-center space-y-2">
                <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center mx-auto border border-blue-200">
                    <i data-lucide="user-plus" class="w-6 h-6"></i>
                </div>
                <h2 class="text-h3 font-extrabold text-[#02185D]">Đăng Ký Gia Nhập CINEC HUB</h2>
                <p class="text-body-xs text-slate-500">Trở thành thành viên chính thức để nhận thông tin Workshop & đặt chỗ Coworking Space miễn phí.</p>
            </div>

            <form action="lien-he.php" method="GET" class="space-y-6">
                <input type="hidden" name="program" value="HUB">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Họ và tên *</label>
                        <input type="text" required placeholder="Nguyễn Văn A" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 text-body-xs">
                    </div>

                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Số điện thoại *</label>
                        <input type="tel" required placeholder="0901234567" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 text-body-xs">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Email liên hệ *</label>
                        <input type="email" required placeholder="example@gmail.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 text-body-xs">
                    </div>

                    <div class="space-y-2">
                        <label class="text-body-xs font-bold text-slate-700">Nhu cầu tham gia</label>
                        <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 text-body-xs text-slate-700">
                            <option>Đăng ký thành viên cộng đồng</option>
                            <option>Đặt chỗ Coworking Space</option>
                            <option>Tham gia các Workshop & Talkshow</option>
                            <option>Đăng ký trở thành Cố vấn / Mentor</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white font-extrabold text-body-sm rounded-xl shadow-lg transition-all">
                    Gửi Đăng Ký Thành Viên
                </button>
            </form>
        </div>

        <!-- OTHER PROGRAMS NAV BAR -->
        <div class="pt-8 border-t border-slate-200">
            <h3 class="text-body-xs font-extrabold text-slate-400 uppercase tracking-wider mb-4 text-center">Khám phá các chương trình khác</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="chuong-trinh-talent.php" class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-purple-500 text-center space-y-1 transition-all group">
                    <span class="text-body-xs font-bold text-[#02185D] group-hover:text-purple-600 block">CINEC TALENT</span>
                    <span class="text-[10px] text-slate-400">Ươm mầm tài năng</span>
                </a>
                <a href="chuong-trinh-inno.php" class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-emerald-500 text-center space-y-1 transition-all group">
                    <span class="text-body-xs font-bold text-[#02185D] group-hover:text-emerald-600 block">CINEC INNO</span>
                    <span class="text-[10px] text-slate-400">Đổi mới sáng tạo</span>
                </a>
                <a href="chuong-trinh-start.php" class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-amber-500 text-center space-y-1 transition-all group">
                    <span class="text-body-xs font-bold text-[#02185D] group-hover:text-amber-600 block">CINEC START</span>
                    <span class="text-[10px] text-slate-400">Bệ phóng khởi nghiệp</span>
                </a>
                <a href="chuong-trinh-launch.php" class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-rose-500 text-center space-y-1 transition-all group">
                    <span class="text-body-xs font-bold text-[#02185D] group-hover:text-rose-600 block">CINEC LAUNCH</span>
                    <span class="text-[10px] text-slate-400">Tăng tốc & Ra mắt</span>
                </a>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
