<?php
require_once __DIR__ . '/../includes/admin-layout.php';

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
    header("Location: settings.php");
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

<form action="settings.php" method="POST" class="space-y-8">

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
                    <label class="block font-bold text-slate-700 flex items-center gap-1.5 text-[13px]">
                        <svg class="w-3.5 h-3.5 fill-[#1877F2]" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        Facebook URL
                    </label>
                    <input type="text" name="social_facebook" value="<?php echo htmlspecialchars($settings['social_facebook'] ?? 'https://facebook.com'); ?>" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none text-[13px]">
                </div>

                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700 flex items-center gap-1.5 text-[13px]">
                        <svg class="w-3.5 h-3.5 fill-[#0A66C2]" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        Linkedin URL
                    </label>
                    <input type="text" name="social_linkedin" value="<?php echo htmlspecialchars($settings['social_linkedin'] ?? 'https://linkedin.com'); ?>" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none text-[13px]">
                </div>

                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700 flex items-center gap-1.5 text-[13px]">
                        <svg class="w-3.5 h-3.5 fill-[#FF0000]" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        Youtube URL
                    </label>
                    <input type="text" name="social_youtube" value="<?php echo htmlspecialchars($settings['social_youtube'] ?? 'https://youtube.com'); ?>" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none text-[13px]">
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
