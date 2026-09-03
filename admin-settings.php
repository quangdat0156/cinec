<?php
require_once 'includes/admin-layout.php';

// Xử lý lưu cấu hình hệ thống
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        // Trang chủ
        'hero_tagline' => trim($_POST['hero_tagline'] ?? 'INNOVATE TOGETHER'),
        'hero_title_main' => trim($_POST['hero_title_main'] ?? 'Khởi đầu Cho'),
        'hero_title_accent' => trim($_POST['hero_title_accent'] ?? 'Một Tương Lai Mới'),
        'hero_desc' => trim($_POST['hero_desc'] ?? 'CiNEC là nền tảng kết nối con người, công nghệ và nguồn lực, ươm mầm ý tưởng - đồng hành cùng startup - kiến tạo giá trị - phát triển bền vững.'),
        'hero_video_title' => trim($_POST['hero_video_title'] ?? 'CINEC – Nơi khởi nguồn đổi mới sáng tạo'),
        'stat_events' => trim($_POST['stat_events'] ?? '120+'),
        'stat_startups' => trim($_POST['stat_startups'] ?? '350+'),
        'stat_mentors' => trim($_POST['stat_mentors'] ?? '180+'),
        'stat_partners' => trim($_POST['stat_partners'] ?? '25+'),
        'cta_banner_title' => trim($_POST['cta_banner_title'] ?? 'Sẵn Sàng Đổi Mới Cùng CiNEC?'),
        'cta_banner_desc' => trim($_POST['cta_banner_desc'] ?? 'Tham gia cộng đồng khởi nghiệp và đổi mới sáng tạo lớn nhất Cà Mau ngay hôm nay.'),

        // Liên hệ
        'site_hotline' => trim($_POST['site_hotline'] ?? '0908736777'),
        'site_hotline_display' => trim($_POST['site_hotline_display'] ?? '0908736777'),
        'site_email' => trim($_POST['site_email'] ?? 'contact@cinec.com.vn'),
        'site_address' => trim($_POST['site_address'] ?? 'Toà nhà CiNEC, số 16 - 18 Cù Chính Lan, phường Bạc Liêu, Cà Mau, Vietnam'),
        'site_working_hours' => trim($_POST['site_working_hours'] ?? 'Thời gian hỗ trợ: Luôn mở cửa (Thứ 2 - Thứ 7: 08:00 - 17:30)'),

        // Footer
        'footer_slogan' => trim($_POST['footer_slogan'] ?? 'Kết nối - Ươm tạo - Tăng tốc - Đổi mới để kiến tạo tương lai cho Cà Mau và cộng đồng.'),
        'footer_copyright' => trim($_POST['footer_copyright'] ?? '@2025 CINEC. All rights reserved.'),
        'social_facebook' => trim($_POST['social_facebook'] ?? 'https://facebook.com'),
        'social_linkedin' => trim($_POST['social_linkedin'] ?? 'https://linkedin.com'),
        'social_youtube' => trim($_POST['social_youtube'] ?? 'https://youtube.com'),
    ];

    save_settings($data);
    $_SESSION['flash_success'] = 'Đã lưu toàn bộ cấu hình Trang Chủ, Liên Hệ và Footer thành công!';
    header("Location: admin-settings.php");
    exit;
}

$settings = get_settings();

admin_header("Cài Đặt Hệ Thống", "settings");
?>

<!-- TOP ACTION HEADER -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-xl font-black text-[#02185D]">Cài Đặt Hệ Thống & Giao Diện</h2>
        <p class="text-xs text-slate-500">Tùy biến nội dung Trang Chủ, Thông tin Liên hệ và Chân trang (Footer)</p>
    </div>
</div>

<form action="admin-settings.php" method="POST" class="space-y-8">

    <!-- 1. CẤU HÌNH TRANG CHỦ (HOMEPAGE SETTINGS) -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-xs space-y-6">
        <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#062AAD] flex items-center justify-center font-bold">
                <i data-lucide="home" class="w-5 h-5"></i>
            </div>
            <div>
                <h3 class="text-base font-black text-[#02185D]">1. Cấu Hình Nội Dung Trang Chủ (Hero & Thống Kê)</h3>
                <p class="text-xs text-slate-400">Hiển thị ở khu vực Hero đầu trang và Banner số liệu trang chủ</p>
            </div>
        </div>

        <div class="space-y-4 text-xs">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700">Tagline Pill</label>
                    <input type="text" name="hero_tagline" value="<?php echo htmlspecialchars($settings['hero_tagline'] ?? 'INNOVATE TOGETHER'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-bold text-[#062AAD] focus:bg-white outline-none">
                </div>
                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700">Tiêu Đề Dòng 1</label>
                    <input type="text" name="hero_title_main" value="<?php echo htmlspecialchars($settings['hero_title_main'] ?? 'Khởi đầu Cho'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-black text-[#02185D] focus:bg-white outline-none">
                </div>
                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700">Tiêu Đề Dòng 2 (Accent Xanh Lá)</label>
                    <input type="text" name="hero_title_accent" value="<?php echo htmlspecialchars($settings['hero_title_accent'] ?? 'Một Tương Lai Mới'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-black text-lime-600 focus:bg-white outline-none">
                </div>
            </div>

            <div class="space-y-1.5">
                <label class="block font-bold text-slate-700">Đoạn Văn Giới Thiệu Hero</label>
                <textarea name="hero_desc" rows="2" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none leading-relaxed"><?php echo htmlspecialchars($settings['hero_desc'] ?? 'CiNEC là nền tảng kết nối con người, công nghệ và nguồn lực, ươm mầm ý tưởng - đồng hành cùng startup - kiến tạo giá trị - phát triển bền vững.'); ?></textarea>
            </div>

            <!-- 04 Thống kê đếm số -->
            <div class="pt-2">
                <label class="block font-bold text-slate-700 mb-2">04 Con Số Thống Kê Đếm Số Trang Chủ</label>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                    <div class="bg-blue-50/50 p-3.5 rounded-2xl border border-blue-100 space-y-1">
                        <span class="text-[10px] font-bold text-[#062AAD]">1. Sự Kiện Tổ Chức</span>
                        <input type="text" name="stat_events" value="<?php echo htmlspecialchars($settings['stat_events'] ?? '120+'); ?>" class="w-full px-3 py-1.5 bg-white border border-slate-200 rounded-xl font-black text-[#062AAD] outline-none">
                    </div>
                    <div class="bg-amber-50/50 p-3.5 rounded-2xl border border-amber-100 space-y-1">
                        <span class="text-[10px] font-bold text-amber-800">2. Startup Hỗ Trợ</span>
                        <input type="text" name="stat_startups" value="<?php echo htmlspecialchars($settings['stat_startups'] ?? '350+'); ?>" class="w-full px-3 py-1.5 bg-white border border-slate-200 rounded-xl font-black text-amber-600 outline-none">
                    </div>
                    <div class="bg-purple-50/50 p-3.5 rounded-2xl border border-purple-100 space-y-1">
                        <span class="text-[10px] font-bold text-purple-800">3. Mentors & Chuyên Gia</span>
                        <input type="text" name="stat_mentors" value="<?php echo htmlspecialchars($settings['stat_mentors'] ?? '180+'); ?>" class="w-full px-3 py-1.5 bg-white border border-slate-200 rounded-xl font-black text-purple-600 outline-none">
                    </div>
                    <div class="bg-emerald-50/50 p-3.5 rounded-2xl border border-emerald-100 space-y-1">
                        <span class="text-[10px] font-bold text-emerald-800">4. Đối Tác Đồng Hành</span>
                        <input type="text" name="stat_partners" value="<?php echo htmlspecialchars($settings['stat_partners'] ?? '25+'); ?>" class="w-full px-3 py-1.5 bg-white border border-slate-200 rounded-xl font-black text-emerald-600 outline-none">
                    </div>
                </div>
            </div>

            <!-- Banner CTA cuối trang chủ -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 border-t border-slate-100">
                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700">Tiêu Đề Banner CTA Cuối Trang</label>
                    <input type="text" name="cta_banner_title" value="<?php echo htmlspecialchars($settings['cta_banner_title'] ?? 'Sẵn Sàng Đổi Mới Cùng CiNEC?'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-bold text-slate-800 focus:bg-white outline-none">
                </div>
                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700">Mô Tả Banner CTA</label>
                    <input type="text" name="cta_banner_desc" value="<?php echo htmlspecialchars($settings['cta_banner_desc'] ?? 'Tham gia cộng đồng khởi nghiệp và đổi mới sáng tạo lớn nhất Cà Mau ngay hôm nay.'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none">
                </div>
            </div>
        </div>
    </div>

    <!-- 2. CẤU HÌNH LIÊN HỆ & TRỤ SỞ (CONTACT SETTINGS) -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-xs space-y-6">
        <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold">
                <i data-lucide="headset" class="w-5 h-5"></i>
            </div>
            <div>
                <h3 class="text-base font-black text-[#02185D]">2. Cấu Hình Thông Tin Liên Hệ & Tổng Đài</h3>
                <p class="text-xs text-slate-400">Hiển thị tại Trang Liên Hệ và Khối Hotline</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
            <div class="space-y-1.5">
                <label class="block font-bold text-slate-700">Tổng Đài Hỗ Trợ (Hotline)</label>
                <input type="text" name="site_hotline" value="<?php echo htmlspecialchars($settings['site_hotline'] ?? '0908736777'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-bold text-[#062AAD] focus:bg-white outline-none">
            </div>

            <div class="space-y-1.5">
                <label class="block font-bold text-slate-700">Email Tiếp Nhận</label>
                <input type="email" name="site_email" value="<?php echo htmlspecialchars($settings['site_email'] ?? 'contact@cinec.com.vn'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none">
            </div>

            <div class="space-y-1.5">
                <label class="block font-bold text-slate-700">Thời Gian Hỗ Trợ</label>
                <input type="text" name="site_working_hours" value="<?php echo htmlspecialchars($settings['site_working_hours'] ?? 'Thời gian hỗ trợ: Luôn mở cửa'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none">
            </div>

            <div class="sm:col-span-3 space-y-1.5">
                <label class="block font-bold text-slate-700">Địa Chỉ Trụ Sở CiNEC</label>
                <input type="text" name="site_address" value="<?php echo htmlspecialchars($settings['site_address'] ?? 'Toà nhà CiNEC, số 16 - 18 Cù Chính Lan, phường Bạc Liêu, Cà Mau, Vietnam'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none">
            </div>
        </div>
    </div>

    <!-- 3. CẤU HÌNH CHÂN TRANG & MẠNG XÃ HỘI (FOOTER SETTINGS) -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-xs space-y-6">
        <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
            <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold">
                <i data-lucide="layout" class="w-5 h-5"></i>
            </div>
            <div>
                <h3 class="text-base font-black text-[#02185D]">3. Cấu Hình Chân Trang (Footer & Mạng Xã Hội)</h3>
                <p class="text-xs text-slate-400">Hiển thị ở chân trang toàn bộ website</p>
            </div>
        </div>

        <div class="space-y-4 text-xs">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700">Slogan Chân Trang</label>
                    <textarea name="footer_slogan" rows="2" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none leading-relaxed"><?php echo htmlspecialchars($settings['footer_slogan'] ?? 'Kết nối - Ươm tạo - Tăng tốc - Đổi mới để kiến tạo tương lai cho Cà Mau và cộng đồng.'); ?></textarea>
                </div>

                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700">Thông Tin Bản Quyền (Copyright)</label>
                    <input type="text" name="footer_copyright" value="<?php echo htmlspecialchars($settings['footer_copyright'] ?? '@2025 CINEC. All rights reserved.'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none">
                </div>
            </div>

            <!-- Mạng xã hội -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700 flex items-center gap-1">
                        <i data-lucide="facebook" class="w-3.5 h-3.5 text-blue-600"></i> Facebook URL
                    </label>
                    <input type="text" name="social_facebook" value="<?php echo htmlspecialchars($settings['social_facebook'] ?? 'https://facebook.com'); ?>" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none">
                </div>

                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700 flex items-center gap-1">
                        <i data-lucide="linkedin" class="w-3.5 h-3.5 text-blue-500"></i> Linkedin URL
                    </label>
                    <input type="text" name="social_linkedin" value="<?php echo htmlspecialchars($settings['social_linkedin'] ?? 'https://linkedin.com'); ?>" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none">
                </div>

                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700 flex items-center gap-1">
                        <i data-lucide="youtube" class="w-3.5 h-3.5 text-red-600"></i> Youtube URL
                    </label>
                    <input type="text" name="social_youtube" value="<?php echo htmlspecialchars($settings['social_youtube'] ?? 'https://youtube.com'); ?>" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none">
                </div>
            </div>
        </div>
    </div>

    <!-- SUBMIT BUTTON -->
    <div class="flex items-center justify-end">
        <button type="submit" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-2xl bg-[#062AAD] hover:bg-[#05A6F5] text-white text-xs font-bold transition-all shadow-md hover:-translate-y-0.5">
            <i data-lucide="save" class="w-4 h-4"></i>
            <span>Lưu Toàn Bộ Cấu Hình Hệ Thống</span>
        </button>
    </div>

</form>

<?php
admin_footer();
?>
