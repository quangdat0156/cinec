<?php
/**
 * Động Cơ Đa Ngôn Ngữ Song Ngữ (Bilingual System: Tiếng Việt & English) Cho CiNEC
 * Chỉ chuyển ngữ cho các trang và nội dung đã có bản dịch chuẩn.
 * Các nội dung/trang chưa có bản dịch sẽ tự động giữ nguyên ngôn ngữ gốc (Tiếng Việt).
 */
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. Nhận diện chuyển đổi ngôn ngữ qua URL param ?lang=vi hoặc ?lang=en
if (isset($_GET['lang']) && in_array(strtolower($_GET['lang']), ['vi', 'en'])) {
    $selected_lang = strtolower($_GET['lang']);
    $_SESSION['cinec_lang'] = $selected_lang;
    $_COOKIE['cinec_lang'] = $selected_lang;
    setcookie('cinec_lang', $selected_lang, time() + (365 * 24 * 3600), '/');
}

/**
 * Lấy mã ngôn ngữ hiện tại ('vi' hoặc 'en')
 */
function current_lang() {
    if (isset($_SESSION['cinec_lang']) && in_array($_SESSION['cinec_lang'], ['vi', 'en'])) {
        return $_SESSION['cinec_lang'];
    }
    if (isset($_COOKIE['cinec_lang']) && in_array($_COOKIE['cinec_lang'], ['vi', 'en'])) {
        return $_COOKIE['cinec_lang'];
    }
    return 'vi'; // Mặc định là Tiếng Việt
}

/**
 * Sinh link chuyển đổi ngôn ngữ giữ nguyên URL hiện tại
 */
function lang_switch_url($target_lang) {
    $uri = $_SERVER['REQUEST_URI'] ?? 'index.php';
    $parts = parse_url($uri);
    $path = $parts['path'] ?? 'index.php';
    $query = [];
    if (!empty($parts['query'])) {
        parse_str($parts['query'], $query);
    }
    $query['lang'] = $target_lang;
    return $path . '?' . http_build_query($query);
}

/**
 * Kho từ điển song ngữ chuẩn bị sẵn cho hệ thống CiNEC
 */
$GLOBALS['CINEC_TRANSLATIONS'] = [
    // MENU & ĐIỀU HƯỚNG
    'nav_home' => ['vi' => 'Trang chủ', 'en' => 'Home'],
    'nav_about' => ['vi' => 'Giới thiệu', 'en' => 'About Us'],
    'nav_programs' => ['vi' => 'Chương trình', 'en' => 'Programs'],
    'nav_events' => ['vi' => 'Sự kiện', 'en' => 'Events'],
    'nav_news' => ['vi' => 'Tin tức & Insight', 'en' => 'News & Insights'],
    'nav_impact' => ['vi' => 'Impact', 'en' => 'Impact'],
    'nav_partners' => ['vi' => 'Đối tác', 'en' => 'Partners'],
    'nav_contact' => ['vi' => 'Liên hệ', 'en' => 'Contact'],
    'nav_admin' => ['vi' => 'Quản trị', 'en' => 'Admin Portal'],
    'nav_mentor_booking' => ['vi' => 'Đặt lịch Mentor', 'en' => 'Book Mentor'],

    // 04 TRỤ CỘT CHƯƠNG TRÌNH
    'prog_platform_title' => ['vi' => 'Nền tảng Đổi mới sáng tạo', 'en' => 'Innovation Platform'],
    'prog_platform_desc' => ['vi' => 'Sandbox, Dữ liệu ĐMST & Chỉ số PII', 'en' => 'Sandbox, Innovation Data & PII Index'],
    'prog_journey_title' => ['vi' => 'Hành trình Khởi nghiệp', 'en' => 'Startup Journey'],
    'prog_journey_desc' => ['vi' => 'Quy trình 4 bước liên thông & Đồng tài trợ 1:1', 'en' => '4-Step Incubation & 1:1 Co-funding'],
    'prog_sme_title' => ['vi' => 'Doanh nghiệp số', 'en' => 'Digital Enterprise'],
    'prog_sme_desc' => ['vi' => 'Voucher CĐS, Mentor KPI 90 ngày & Nâng chuẩn OCOP', 'en' => 'Digital Voucher, 90-Day KPI & OCOP Standards'],
    'prog_talent_title' => ['vi' => 'Nhân tài số', 'en' => 'Digital Talent'],
    'prog_talent_desc' => ['vi' => 'Học bổng tài năng số & Mô hình Đại học Khởi nghiệp', 'en' => 'Talent Scholarships & University Labs'],

    // HERO TOP BANNER
    'hero_tag' => ['vi' => 'INNOVATE TOGETHER', 'en' => 'INNOVATE TOGETHER'],
    'hero_title_1' => ['vi' => 'Khởi đầu Cho', 'en' => 'Beginning of A'],
    'hero_title_2' => ['vi' => 'Một Tương Lai', 'en' => 'Brand New'],
    'hero_title_3' => ['vi' => 'Mới', 'en' => 'Future'],
    'hero_desc' => [
        'vi' => 'CiNEC là nền tảng kết nối con người, công nghệ và nguồn lực, ươm mầm ý tưởng - đồng hành cùng startup - kiến tạo giá trị - phát triển bền vững.',
        'en' => 'CiNEC connects people, technology and resources, nurturing ideas - supporting startups - creating value - fostering sustainable growth.'
    ],
    'hero_btn_programs' => ['vi' => 'Khám Phá Chương Trình', 'en' => 'Explore Programs'],
    'hero_btn_about' => ['vi' => 'Tìm Hiểu Về CiNEC', 'en' => 'Discover CiNEC'],
    'hero_video_title' => ['vi' => 'CiNEC - Nơi khơi nguồn đổi mới sáng tạo', 'en' => 'CiNEC - Where Innovation Begins'],
    'hero_video_action' => ['vi' => 'Xem video giới thiệu', 'en' => 'Watch Introduction Video'],

    // THỐNG KÊ (METRICS)
    'stat_events' => ['vi' => 'Sự kiện đã tổ chức', 'en' => 'Organized Events'],
    'stat_startups' => ['vi' => 'Starups được hỗ trợ', 'en' => 'Supported Startups'],
    'stat_partners' => ['vi' => 'Đối tác trong & ngoài nước', 'en' => 'Domestic & Global Partners'],
    'stat_mentors' => ['vi' => 'Mentors & Chuyên gia', 'en' => 'Mentors & Experts'],

    // SECTION CHƯƠNG TRÌNH
    'prog_sec_badge' => ['vi' => 'CHƯƠNG TRÌNH NỔI BẬT', 'en' => 'FEATURED PROGRAMS'],
    'prog_sec_title' => [
        'vi' => 'Đồng hành cùng bạn trên hành trình đổi mới',
        'en' => 'Accompanying You On Your Innovation Journey'
    ],

    // SECTION SỰ KIỆN
    'events_sec_title' => ['vi' => 'SỰ KIỆN SẮP DIỄN RA', 'en' => 'UPCOMING EVENTS'],
    'view_all' => ['vi' => 'Xem tất cả', 'en' => 'View All'],
    'view_detail' => ['vi' => 'Xem chi tiết', 'en' => 'View Details'],
    'event_default_loc' => ['vi' => 'Không gian sáng tạo CiNEC', 'en' => 'CiNEC Innovation Space'],
    'event_time' => ['vi' => 'Thời gian', 'en' => 'Time'],
    'event_location' => ['vi' => 'Địa điểm', 'en' => 'Location'],
    'event_register_now' => ['vi' => 'Đăng ký tham dự ngay', 'en' => 'Register for Event'],

    // SECTION TIN TỨC
    'news_sec_title' => ['vi' => 'TIN TỨC & INSIGHT', 'en' => 'NEWS & INSIGHTS'],
    'news_tag_digital' => ['vi' => 'Chuyển đổi số', 'en' => 'Digital Transformation'],
    'news_tag_featured' => ['vi' => 'Nổi bật', 'en' => 'Featured'],
    'news_read_time' => ['vi' => 'Phút đọc', 'en' => 'Min Read'],

    // SECTION ĐỐI TÁC
    'partners_sec_title' => ['vi' => 'ĐỐI TÁC CỦA CHÚNG TÔI', 'en' => 'OUR STRATEGIC PARTNERS'],

    // CTA BANNER
    'cta_title' => [
        'vi' => 'Sẵn sàng đưa ý tưởng của bạn vươn xa cùng CiNEC?',
        'en' => 'Ready To Elevate Your Ideas With CiNEC?'
    ],
    'cta_desc' => [
        'vi' => 'Hãy đăng ký ngay để nhận tư vấn và tham gia hệ sinh thái đổi mới sáng tạo.',
        'en' => 'Register today for expert mentoring and join our regional innovation ecosystem.'
    ],
    'cta_btn' => ['vi' => 'Đăng ký ngay', 'en' => 'Register Now'],

    // TRANG GIỚI THIỆU (ABOUT US)
    'about_center_title' => [
        'vi' => '[Trung tâm Khởi nghiệp và Đổi mới sáng tạo]',
        'en' => '[Center for Entrepreneurship & Innovation]'
    ],
    'about_center_desc' => [
        'vi' => 'Trung tâm Khởi nghiệp và Đổi mới sáng tạo tỉnh Cà Mau thực hiện chức năng nghiên cứu, hoạt động sự nghiệp và cung cấp dịch vụ liên quan đến hỗ trợ và phát triển doanh nghiệp khởi nghiệp, hệ sinh thái khởi nghiệp, khởi nghiệp sáng tạo, thúc đẩy đổi mới sáng tạo của tỉnh Cà Mau, góp phần đổi mới mô hình tăng trưởng dựa trên nền tảng khoa học và công nghệ.',
        'en' => 'Ca Mau Center for Entrepreneurship & Innovation conducts research, incubation programs, and support services to develop startups, innovation ecosystems, and drive science-technology-based growth across Ca Mau and the Mekong Delta.'
    ],
    'about_vision_title' => ['vi' => 'Tầm Nhìn', 'en' => 'Our Vision'],
    'about_vision_desc' => [
        'vi' => 'Trở thành trung tâm ươm tạo và thúc đẩy đổi mới sáng tạo kiểu mẫu tại khu vực Đồng bằng Sông Cửu Long, đưa Cà Mau trở thành điểm đến khởi nghiệp công nghệ và chuyển đổi xanh bền vững.',
        'en' => 'To become the premier incubation and innovation hub in the Mekong Delta, positioning Ca Mau as a regional destination for tech entrepreneurship and sustainable green transition.'
    ],
    'about_mission_title' => ['vi' => 'Sứ Mệnh', 'en' => 'Our Mission'],
    'about_mission_desc' => [
        'vi' => 'Đồng hành, hỗ trợ và trang bị nguồn lực tối ưu cho các doanh nghiệp, dự án khởi nghiệp sáng tạo; khơi dậy tiềm năng con người và tài nguyên bản địa thông qua công nghệ và tri thức.',
        'en' => 'Partner with and equip startups and creative ventures with optimal capital and technical resources; unlocking regional human and natural potential through technology and knowledge.'
    ],
    'about_leadership_title' => ['vi' => 'Ban Lãnh Đạo', 'en' => 'Leadership Board'],
    'about_advisors_title' => ['vi' => 'Ban Cố Vấn & Chuyên Gia', 'en' => 'Advisory Board & Experts'],
    'about_facilities_title' => ['vi' => 'Cơ Sở Vật Chất Hiện Đại', 'en' => 'Modern Facilities'],

    // FOOTER
    'footer_mission' => [
        'vi' => 'Kết nối - Ươm tạo - Tăng tốc - Đổi mới để kiến tạo tương lai cho Cà Mau và cộng đồng.',
        'en' => 'Connect - Incubate - Accelerate - Innovate to shape the future of Ca Mau and the community.'
    ],
    'footer_col_about' => ['vi' => 'VỀ CINEC', 'en' => 'ABOUT CINEC'],
    'footer_col_programs' => ['vi' => 'CHƯƠNG TRÌNH', 'en' => 'PROGRAMS'],
    'footer_col_support' => ['vi' => 'HỖ TRỢ', 'en' => 'SUPPORT'],
    'footer_col_contact' => ['vi' => 'LIÊN HỆ', 'en' => 'CONTACT US'],
    'footer_rights' => ['vi' => '© 2025 CINEC. Bảo lưu mọi quyền.', 'en' => '© 2025 CINEC. All rights reserved.'],
    'footer_privacy' => ['vi' => 'Chính sách bảo mật', 'en' => 'Privacy Policy'],
    'footer_terms' => ['vi' => 'Điều khoản sử dụng', 'en' => 'Terms of Service'],
    'footer_address' => [
        'vi' => 'Toà nhà CiNEC, số 16 - 18 Cù Chính Lan, phường Bạc Liêu, Cà Mau, Vietnam',
        'en' => 'CiNEC Building, 16 - 18 Cu Chinh Lan St., Bac Lieu Ward, Ca Mau, Vietnam'
    ],
];

/**
 * Hàm tra cứu bản dịch theo key
 * - Nếu đang ở tiếng Anh VÀ có bản dịch tiếng Anh: trả về bản dịch tiếng Anh
 * - Nếu KHÔNG có bản dịch tiếng Anh: tự động giữ nguyên bản gốc Tiếng Việt
 * @param string $key Mã khóa từ điển
 * @param string $default Giá trị mặc định nếu không tìm thấy
 * @return string Chuỗi hiển thị
 */
function __($key, $default = '') {
    $lang = current_lang();
    if ($lang === 'en' && !empty($GLOBALS['CINEC_TRANSLATIONS'][$key]['en'])) {
        return $GLOBALS['CINEC_TRANSLATIONS'][$key]['en'];
    }
    if (!empty($GLOBALS['CINEC_TRANSLATIONS'][$key]['vi'])) {
        return $GLOBALS['CINEC_TRANSLATIONS'][$key]['vi'];
    }
    return !empty($default) ? $default : $key;
}

/**
 * Alias của hàm __()
 */
function t($key, $default = '') {
    return __($key, $default);
}
