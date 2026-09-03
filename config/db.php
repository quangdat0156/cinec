<?php
/**
 * Tệp kết nối Cơ sở dữ liệu MySQL bằng PDO.
 * Triển khai cơ chế TỰ ĐỘNG FALLBACK sang Mockup Data nếu mất kết nối DB.
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'tinhocnhuy_cinec');
define('DB_USER', 'tinhocnhuy_cinec');
define('DB_PASS', 'tinhocnhuy_cinec'); // Hoặc mật khẩu tương ứng của bạn

$db_connected = false;
$pdo = null;

try {
    // Thử kết nối cơ sở dữ liệu với PDO
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    $db_connected = true;
} catch (PDOException $e) {
    // Nếu kết nối lỗi, ghi nhận lỗi và sử dụng dữ liệu Mockup
    $db_error_message = $e->getMessage();
    $db_connected = false;
}

require_once __DIR__ . '/../includes/image-optimizer.php';

// ==========================================
// DỮ LIỆU MOCKUP CHUẨN ĐỀ ÁN CÀ MAU
// ==========================================

$mockPrograms = [
    'PLATFORM' => [
        'id' => 'PLATFORM',
        'code' => 'INNOVATION PLATFORM',
        'title' => 'Nền tảng Đổi mới sáng tạo',
        'name' => 'Nền tảng Đổi mới sáng tạo Cà Mau',
        'short_name' => 'Nền tảng Đổi mới sáng tạo',
        'sub_title' => 'Ca Mau Innovation Platform',
        'slug' => 'chuong-trinh-platform.php',
        'icon' => 'layers',
        'badge' => 'Thể chế & Dữ liệu',
        'color' => 'from-blue-600 to-indigo-600',
        'bg_light' => 'bg-blue-50',
        'text_color' => 'text-blue-600',
        'border_color' => 'border-blue-200',
        'short_desc' => 'Khung chính sách Sandbox, Nền tảng dữ liệu ra quyết định và đo lường Chỉ số PII cấp tỉnh.',
        'main_function' => 'Kiến tạo thể chế, khung chính sách sandbox, nền tảng dữ liệu điều hành và đo lường Chỉ số PII cấp tỉnh.',
        'desc' => 'Chương trình thành phần số 01 chịu trách nhiệm kiến tạo hạ tầng thể chế, môi trường chính sách, quy chế thử nghiệm Sandbox, đo lường Bộ chỉ số Đổi mới sáng tạo cấp địa phương (PII) và xây dựng mạng lưới chuyên gia, hội đồng tư vấn dẫn dắt toàn hệ sinh thái Cà Mau.',
        'target_audience' => 'Toàn hệ sinh thái: Doanh nghiệp, tổ chức, viện trường, học sinh, sinh viên và người dân Cà Mau.',
        'core_activities' => [
            ['title' => 'Khung chính sách & Quy chế Sandbox', 'desc' => 'Xây dựng quy chế thử nghiệm thể chế cho các mô hình kinh doanh & công nghệ mới.', 'icon' => 'file-text'],
            ['title' => 'Nền tảng Dữ liệu Đổi mới sáng tạo Cà Mau', 'desc' => 'Hệ thống dữ liệu số tập trung hỗ trợ lãnh đạo & doanh nghiệp ra quyết định chính xác.', 'icon' => 'database'],
            ['title' => 'Đo & Cải thiện Chỉ số PII', 'desc' => 'Theo dõi, đánh giá và giải pháp thúc đẩy Bộ chỉ số Đổi mới sáng tạo cấp địa phương.', 'icon' => 'bar-chart-3'],
            ['title' => 'Truyền thông & Mạng lưới Cố vấn', 'desc' => 'Kết nối mạng lưới chuyên gia, các hội đồng tư vấn và lan tỏa tinh thần đổi mới sáng tạo.', 'icon' => 'globe']
        ],
        'outputs' => [
            ['title' => 'Quy chế Sandbox chính thức', 'desc' => 'Khung pháp lý cho phép thử nghiệm mô hình mới an toàn.', 'icon' => 'shield-check'],
            ['title' => 'Báo cáo Chỉ số PII hàng năm', 'desc' => 'Đánh giá xếp hạng và dư địa cải thiện PII tỉnh Cà Mau.', 'icon' => 'pie-chart'],
            ['title' => 'Mạng lưới Hội đồng Chuyên gia', 'desc' => 'Cơ sở dữ liệu chuyên gia tư vấn chiến lược cho tỉnh.', 'icon' => 'users']
        ],
        'key_metrics' => [
            ['number' => '100%', 'label' => 'Bao phủ hệ sinh thái'],
            ['number' => 'Sandbox', 'label' => 'Quy chế thử nghiệm'],
            ['number' => 'PII Top', 'label' => 'Mục tiêu chỉ số PII']
        ]
    ],
    'JOURNEY' => [
        'id' => 'JOURNEY',
        'code' => 'STARTUP JOURNEY',
        'title' => 'Hành trình Khởi nghiệp',
        'name' => 'Khởi nghiệp - Ươm tạo - Tăng tốc Cà Mau',
        'short_name' => 'Hành trình Khởi nghiệp',
        'sub_title' => 'Ca Mau Startup Journey',
        'slug' => 'chuong-trinh-journey.php',
        'icon' => 'rocket',
        'badge' => 'Ươm tạo & Tăng tốc',
        'color' => 'from-amber-500 to-orange-600',
        'bg_light' => 'bg-amber-50',
        'text_color' => 'text-amber-600',
        'border_color' => 'border-amber-200',
        'short_desc' => 'Quy trình liên thông 4 bước: Săn nguồn cuộc thi ➔ Ươm tạo 6-12 tháng ➔ Tăng tốc 1:1 ➔ Mở rộng thị trường.',
        'main_function' => 'Vận hành quy trình 04 bước liên thông hỗ trợ khởi nghiệp từ ý tưởng sơ khai đến phát triển bứt phá và gọi vốn.',
        'desc' => 'Chương trình thành phần số 02 vận hành quy trình 04 bước liên thông từ săn tìm ý tưởng cuộc thi, ươm tạo 6-12 tháng tại Lab dùng chung, tăng tốc 3-6 tháng đồng tài trợ 1:1 đến mở rộng quy mô, gọi vốn và chiếm lĩnh thị trường.',
        'target_audience' => 'Cá nhân, nhóm, doanh nghiệp khởi nghiệp từ ý tưởng đến tăng trưởng.',
        'core_activities' => [
            ['title' => 'Bước 1: Săn nguồn & Tiền ươm tạo', 'desc' => 'Tìm kiếm dự án tiềm năng qua các cuộc thi khởi nghiệp và tài trợ vốn mồi giai đoạn đầu.', 'icon' => 'search'],
            ['title' => 'Bước 2: Ươm tạo 6-12 tháng', 'desc' => 'Huấn luyện chuyên sâu kết hợp sử dụng Lab phòng thí nghiệm kỹ thuật dùng chung.', 'icon' => 'cpu'],
            ['title' => 'Bước 3: Tăng tốc 3-6 tháng (Đồng tài trợ 1:1)', 'desc' => 'Tăng tốc doanh thu với cơ chế đồng tài trợ vốn đối ứng 1:1 từ ngân sách.', 'icon' => 'trending-up'],
            ['title' => 'Bước 4: Mở rộng thị trường & Gọi vốn', 'desc' => 'Kết nối Quỹ đầu tư mạo hiểm, mở rộng quy mô thị trường trong và ngoài nước.', 'icon' => 'globe-2']
        ],
        'outputs' => [
            ['title' => 'Quy trình liên thông 4 bước', 'desc' => 'Hệ thống hỗ trợ startup liên tục không bị đứt gãy.', 'icon' => 'repeat'],
            ['title' => 'Doanh nghiệp Startup thành công', 'desc' => 'Các startup hoàn thiện sản phẩm, có doanh thu & gọi vốn.', 'icon' => 'award'],
            ['title' => 'Quỹ đồng tài trợ 1:1', 'desc' => 'Cơ chế giải ngân tài trợ vốn đối ứng minh bạch.', 'icon' => 'coins']
        ],
        'key_metrics' => [
            ['number' => '4 Bước', 'label' => 'Quy trình liên thông'],
            ['number' => '6-12Th', 'label' => 'Ươm tạo kỹ thuật Lab'],
            ['number' => '1:1', 'label' => 'Cơ chế đồng tài trợ']
        ]
    ],
    'SME' => [
        'id' => 'SME',
        'code' => 'DIGITAL SME',
        'title' => 'Doanh nghiệp số',
        'name' => 'Doanh nghiệp số Cà Mau',
        'short_name' => 'Doanh nghiệp số',
        'sub_title' => 'Ca Mau Digital SME',
        'slug' => 'chuong-trinh-sme.php',
        'icon' => 'shopping-bag',
        'badge' => 'Chuyển đổi số & OCOP',
        'color' => 'from-emerald-600 to-teal-500',
        'bg_light' => 'bg-emerald-50',
        'text_color' => 'text-emerald-600',
        'border_color' => 'border-emerald-200',
        'short_desc' => 'Voucher CĐS + Mentor KPI 90 ngày; ứng dụng AI, TMĐT, Logistics số & Nâng giá trị OCOP.',
        'main_function' => 'Thúc đẩy chuyển đổi số thực chiến cho doanh nghiệp SME, HTX, hộ kinh doanh và nâng cao giá trị sản phẩm OCOP Cà Mau.',
        'desc' => 'Chương trình thành phần số 03 tập trung chuyển đổi số thực chiến cho lực lượng doanh nghiệp trụ cột của tỉnh Cà Mau. Thông qua cơ chế Voucher CĐS gắn nhà cung cấp thẩm định, kết hợp Mentor theo dõi KPI 90 ngày, ứng dụng AI, Thương mại điện tử, Logistics số để nâng tầm chuỗi giá trị nông sản & OCOP.',
        'target_audience' => 'Doanh nghiệp nhỏ và vừa (SME), Hợp tác xã, Hộ kinh doanh, Chủ thể OCOP, Doanh nghiệp 1 người (OPC).',
        'core_activities' => [
            ['title' => 'Voucher CĐS & Thẩm định nhà cung cấp', 'desc' => 'Cấp voucher giảm chi phí phần mềm/công nghệ từ nhà cung cấp uy tín.', 'icon' => 'ticket'],
            ['title' => 'Mentor & Đánh giá KPI 90 ngày', 'desc' => 'Cố vấn đồng hành đo lường hiệu quả chuyển đổi số sau 90 ngày áp dụng.', 'icon' => 'check-square'],
            ['title' => 'Ứng dụng AI, Dữ liệu & TMĐT', 'desc' => 'Đưa AI vào quản trị, số hóa quy trình và đẩy mạnh bán hàng trên sàn TMĐT.', 'icon' => 'sparkles'],
            ['title' => 'Logistics số & Nâng tầm OCOP', 'desc' => 'Tối ưu hóa chuỗi cung ứng, truy xuất nguồn gốc và nâng giá trị OCOP Cà Mau.', 'icon' => 'truck']
        ],
        'outputs' => [
            ['title' => 'Voucher Chuyển đổi số', 'desc' => 'Hàng trăm doanh nghiệp/hộ kinh doanh nhận hỗ trợ.', 'icon' => 'badge-check'],
            ['title' => 'Sản phẩm OCOP số hóa', 'desc' => 'Nâng chuẩn OCOP trên các nền tảng TMĐT & xuất khẩu.', 'icon' => 'star'],
            ['title' => 'Báo cáo KPI CĐS 90 ngày', 'desc' => 'Đo lường tăng trưởng doanh thu & năng suất rõ rệt.', 'icon' => 'line-chart']
        ],
        'key_metrics' => [
            ['number' => '90 Ngày', 'label' => 'Đo lường KPI CĐS'],
            ['number' => 'Voucher', 'label' => 'Hỗ trợ công nghệ'],
            ['number' => 'OCOP', 'label' => 'Nâng chuẩn đặc sản']
        ]
    ],
    'TALENT' => [
        'id' => 'TALENT',
        'code' => 'CAMAU TALENT',
        'title' => 'Nhân tài số',
        'name' => 'Nhân tài số Cà Mau',
        'short_name' => 'Nhân tài số',
        'sub_title' => 'Ca Mau Talent',
        'slug' => 'chuong-trinh-talent.php',
        'icon' => 'graduation-cap',
        'badge' => 'Học bổng & Nhân lực',
        'color' => 'from-purple-600 to-pink-600',
        'bg_light' => 'bg-purple-50',
        'text_color' => 'text-purple-600',
        'border_color' => 'border-purple-200',
        'short_desc' => 'Học bổng tài năng theo nhóm năng lực; Giáo dục khởi nghiệp / Đại học khởi nghiệp & Kinh tế sáng tạo.',
        'main_function' => 'Thu hút, đào tạo và phát triển lực lượng nhân tài số, kỹ sư, nhà nghiên cứu và xây dựng mạng lưới tri thức Cà Mau.',
        'desc' => 'Chương trình thành phần số 04 hướng tới con người - nhân tố quyết định sự phát triển bền vững. Thông qua chính sách học bổng tài năng theo nhóm năng lực, thúc đẩy mô hình Đại học khởi nghiệp, quy tụ mạng lưới nhân tài số trong/ngoài tỉnh và phát triển nền Kinh tế sáng tạo Cà Mau.',
        'target_audience' => 'Thanh niên, sinh viên, kỹ sư, nhà nghiên cứu, freelancer, maker, chuyên gia số.',
        'core_activities' => [
            ['title' => 'Học bổng Tài năng theo Nhóm năng lực', 'desc' => 'Trao học bổng đào tạo chuyên sâu về AI, Công nghệ số, Lập trình & Đổi mới sáng tạo.', 'icon' => 'award'],
            ['title' => 'Giáo dục Khởi nghiệp & ĐH Khởi nghiệp', 'desc' => 'Đưa tư duy khởi nghiệp & đổi mới sáng tạo vào các trường đại học, cao đẳng địa phương.', 'icon' => 'book-open'],
            ['title' => 'Mạng lưới Nhân tài Trong & Ngoài tỉnh', 'desc' => 'Kết nối mạng lưới chuyên gia, kiều bào và trí thức Cà Mau toàn cầu.', 'icon' => 'network'],
            ['title' => 'Phát triển Kinh tế Sáng tạo', 'desc' => 'Ươm mầm các ngành kinh tế dựa trên tri thức, văn hóa & công nghệ số.', 'icon' => 'palette']
        ],
        'outputs' => [
            ['title' => 'Quỹ Học bổng Nhân tài số', 'desc' => 'Hàng trăm học bổng chất lượng cao cho thanh niên Cà Mau.', 'icon' => 'gift'],
            ['title' => 'Mô hình Đại học Khởi nghiệp', 'desc' => 'Hệ thống giáo dục gắn liền với thực tiễn khởi nghiệp.', 'icon' => 'school'],
            ['title' => 'Mạng lưới Chuyên gia Tri thức', 'desc' => 'Cộng đồng nhân tài số đồng hành phát triển quê hương.', 'icon' => 'users']
        ],
        'key_metrics' => [
            ['number' => '100+', 'label' => 'Suất học bổng chuyên sâu'],
            ['number' => 'ĐH KNiệp', 'label' => 'Mô hình giáo dục'],
            ['number' => 'Global', 'label' => 'Mạng lưới nhân tài Cà Mau']
        ]
    ]
];

$mockPartners = [
    [
        'name' => 'BCA Group',
        'logo' => 'assets/img/partner_bca.png',
        'category' => 'enterprise',
        'category_name' => 'Doanh nghiệp / Tập đoàn',
        'url' => '#'
    ],
    [
        'name' => 'KVIP Hub Bạc Liêu',
        'logo' => 'assets/img/partner_kvip.png',
        'category' => 'association',
        'category_name' => 'Hiệp hội / Tổ chức',
        'url' => '#'
    ],
    [
        'name' => 'NIIC - Trung tâm Đổi mới Sáng tạo',
        'logo' => 'assets/img/partner_niic.png',
        'category' => 'education',
        'category_name' => 'Đại học / Viện nghiên cứu',
        'url' => '#'
    ],
    [
        'name' => 'DX Cà Mau',
        'logo' => 'assets/img/partner_dxcamau.png',
        'category' => 'government',
        'category_name' => 'Cơ quan Nhà nước',
        'url' => '#'
    ],
    [
        'name' => 'Sở KH&CN Cà Mau',
        'logo' => 'assets/img/partner_skhcn.png',
        'category' => 'government',
        'category_name' => 'Cơ quan Nhà nước',
        'url' => '#'
    ],
    [
        'name' => 'VinaCapital',
        'logo' => 'assets/img/partner_vinacapital.png',
        'category' => 'fund',
        'category_name' => 'Quỹ đầu tư',
        'url' => '#'
    ],
    [
        'name' => 'Bạc Liêu Startup Network',
        'logo' => 'assets/img/partner_bln.png',
        'category' => 'association',
        'category_name' => 'Hiệp hội / Tổ chức',
        'url' => '#'
    ],
    [
        'name' => 'Đại học Cần Thơ',
        'logo' => 'assets/img/partner_ctu.png',
        'category' => 'education',
        'category_name' => 'Đại học / Viện nghiên cứu',
        'url' => '#'
    ],
    [
        'name' => 'Tập đoàn Lộc Trời',
        'logo' => 'assets/img/partner_loctroi.png',
        'category' => 'enterprise',
        'category_name' => 'Doanh nghiệp / Tập đoàn',
        'url' => '#'
    ],
    [
        'name' => 'VCCI Cần Thơ',
        'logo' => 'assets/img/partner_vcci.png',
        'category' => 'association',
        'category_name' => 'Hiệp hội / Tổ chức',
        'url' => '#'
    ]
];

$mockEvents = [
    [
        'id' => 1,
        'title' => 'Diễn đàn Khởi nghiệp Đổi mới Sáng tạo Cà Mau - Bạc Liêu 2026',
        'status' => 'ongoing', // ongoing, upcoming, completed
        'status_text' => 'Đang diễn ra',
        'date_day' => '15',
        'date_month' => 'Th07',
        'date_full' => '15 tháng 7, 2026',
        'time' => '08:00 - 17:00',
        'location' => 'Hội trường Lớn, Tòa nhà CINEC, TP. Cà Mau',
        'desc' => 'Nơi kết nối các nhà hoạch định chính sách, doanh nghiệp công nghệ hàng đầu và startups vùng ĐBSCL.',
        'image' => 'assets/img/event_forum.jpg'
    ],
    [
        'id' => 2,
        'title' => 'Hội thảo Chuyển đổi số & Ứng dụng AI trong Nông nghiệp Thủy sản Công nghệ cao',
        'status' => 'upcoming',
        'status_text' => 'Sắp diễn ra',
        'date_day' => '28',
        'date_month' => 'Th07',
        'date_full' => '28 tháng 7, 2026',
        'time' => '13:30 - 17:00',
        'location' => 'Phòng Hội thảo KVIP Hub, TP. Bạc Liêu',
        'desc' => 'Giới thiệu các giải pháp IoT giám sát nguồn nước nuôi tôm siêu thâm canh và phân tích hình ảnh AI dự báo dịch bệnh.',
        'image' => 'assets/img/event_ai_agri.jpg'
    ],
    [
        'id' => 3,
        'title' => 'Workshop: Kỹ năng gọi vốn và chuẩn bị Pitch Deck chuyên nghiệp cho Startup',
        'status' => 'upcoming',
        'status_text' => 'Sắp diễn ra',
        'date_day' => '10',
        'date_month' => 'Th08',
        'date_full' => '10 tháng 8, 2026',
        'time' => '09:00 - 11:30',
        'location' => 'Không gian Co-working, CINEC HUB Cà Mau',
        'desc' => 'Làm việc trực tiếp cùng các chuyên gia tài chính từ VinaCapital và NIIC để hoàn thiện bài thuyết trình gọi vốn.',
        'image' => 'assets/img/event_pitching.jpg'
    ],
    [
        'id' => 4,
        'title' => 'Triển lãm Techfest Mekong 2026 & Kết nối Đầu tư Công nghệ',
        'status' => 'completed',
        'status_text' => 'Đã diễn ra',
        'date_day' => '12',
        'date_month' => 'Th06',
        'date_full' => '12 tháng 6, 2026',
        'time' => '08:00 - 18:00',
        'location' => 'Trung tâm Hội nghị Tỉnh Cà Mau',
        'desc' => 'Sự kiện thường niên thu hút hơn 100 gian hàng khởi nghiệp và hơn 2,000 lượt khách tham quan, trải nghiệm công nghệ.',
        'image' => 'assets/img/event_techfest.jpg'
    ]
];

$mockNews = [
    [
        'id' => 1,
        'title' => 'CINEC chính thức ra mắt hệ sinh thái hỗ trợ khởi nghiệp toàn diện tại Cà Mau - Bạc Liêu',
        'category' => 'startup',
        'category_name' => 'Khởi nghiệp',
        'date' => '25/06/2026',
        'author' => 'Ban Biên Tập CINEC',
        'summary' => 'Sự kiện đánh dấu cột mốc quan trọng trong việc thúc đẩy đổi mới sáng tạo, chuyển giao khoa học kỹ thuật và xây dựng không gian làm việc chuyên nghiệp tại khu vực bán đảo Cà Mau.',
        'image' => 'assets/img/news_launch.jpg',
        'featured' => true
    ],
    [
        'id' => 2,
        'title' => 'Chính sách hỗ trợ thuế và hạ tầng mặt bằng cho các doanh nghiệp đổi mới sáng tạo từ năm 2026',
        'category' => 'policy',
        'category_name' => 'Chính sách',
        'date' => '28/06/2026',
        'author' => 'Thế Anh',
        'summary' => 'Ủy ban nhân dân tỉnh ban hành nghị quyết mới nhằm giảm thiểu rủi ro pháp lý và chi phí ban đầu cho các dự án khởi nghiệp sáng tạo.',
        'image' => 'assets/img/news_policy.jpg',
        'featured' => false
    ],
    [
        'id' => 3,
        'title' => 'Ứng dụng công nghệ IoT và AI trong nuôi tôm siêu thâm canh đạt hiệu quả năng suất đột phá',
        'category' => 'technology',
        'category_name' => 'Công nghệ',
        'date' => '18/06/2026',
        'author' => 'Minh Nhật',
        'summary' => 'Một mô hình startup do CINEC ươm tạo đã ứng dụng thành công cảm biến thông minh tự động hóa toàn bộ quy trình đo độ mặn và pH.',
        'image' => 'assets/img/news_iot.jpg',
        'featured' => false
    ],
    [
        'id' => 4,
        'title' => 'Quỹ đầu tư mạo hiểm VinaCapital kết nối khảo sát các dự án nông nghiệp xanh tại CINEC HUB Bạc Liêu',
        'category' => 'investment',
        'category_name' => 'Đầu tư',
        'date' => '12/06/2026',
        'author' => 'Khánh Linh',
        'summary' => 'Các dự án sản xuất muối hữu cơ và ống hút sinh học thân thiện môi trường đang lọt vào tầm ngắm gọi vốn hạt giống.',
        'image' => 'assets/img/news_invest.jpg',
        'featured' => false
    ],
    [
        'id' => 5,
        'title' => 'Thúc đẩy chuyển đổi số và áp dụng chỉ số ESG cho các doanh nghiệp SME trên địa bàn tỉnh',
        'category' => 'policy',
        'category_name' => 'Chính sách',
        'date' => '05/06/2026',
        'author' => 'Quốc Khánh',
        'summary' => 'Chương trình hợp tác toàn diện giữa CINEC và các tổ chức quốc tế nhằm nâng cao năng lực phát triển bền vững của doanh nghiệp.',
        'image' => 'assets/img/news_esg.jpg',
        'featured' => false
    ]
];

$mockTeam = [
    [
        'name' => 'Nguyễn Văn A',
        'role' => 'Giám đốc',
        'org' => 'Trung tâm CINEC',
        'avatar' => 'assets/img/avatar_director.jpg',
        'bio' => 'Hơn 15 năm kinh nghiệm trong quản lý và thúc đẩy các chính sách chuyển giao khoa học công nghệ, phát triển cộng đồng khởi nghiệp.',
        'linkedin' => '#'
    ],
    [
        'name' => 'Phạm Thùy Linh',
        'role' => 'Phó Giám đốc',
        'org' => 'Trung tâm CINEC',
        'avatar' => 'assets/img/avatar_deputy1.jpg',
        'bio' => 'Chuyên gia tư vấn ươm tạo doanh nghiệp khởi nghiệp, thiết kế các chương trình đào tạo kỹ năng số và tư duy đổi mới sáng tạo.',
        'linkedin' => '#'
    ],
    [
        'name' => 'Trần Trung C',
        'role' => 'Phó Giám đốc',
        'org' => 'Trung tâm CINEC',
        'avatar' => 'assets/img/avatar_deputy2.jpg',
        'bio' => 'Phụ trách mảng kết nối đầu tư, xúc tiến thương mại và xây dựng hạ tầng kỹ thuật hỗ trợ các phòng lab đổi mới sáng tạo.',
        'linkedin' => '#'
    ]
];

$mockAdvisors = [
    [
        'name' => 'TS. Nguyễn Minh Triết',
        'role' => 'Cố vấn Đổi mới sáng tạo',
        'org' => 'Viện Khoa học & Công nghệ ĐBSCL',
        'avatar' => 'assets/img/advisor_triet.jpg'
    ],
    [
        'name' => 'Bà Lê Hoàng Uyên Vy',
        'role' => 'Cố vấn Đầu tư',
        'org' => 'Quỹ đầu tư mạo hiểm Do Ventures',
        'avatar' => 'assets/img/advisor_vy.jpg'
    ],
    [
        'name' => 'Ông Trần Anh Tuấn',
        'role' => 'Chuyên gia Công nghệ',
        'org' => 'Cựu Kiến trúc sư giải pháp Tập đoàn AWS',
        'avatar' => 'assets/img/advisor_tuan.jpg'
    ]
];

$mockStartups = [
    [
        'name' => 'Cà Mau ShrimpTech',
        'field' => 'Nông nghiệp thông minh',
        'desc' => 'Thiết bị IoT giám sát chỉ số nước ao nuôi tôm tự động kết nối app điện thoại.'
    ],
    [
        'name' => 'Bac Lieu Salt Organic',
        'field' => 'Sản phẩm bản địa',
        'desc' => 'Quy trình sản xuất muối thảo dược vi lượng tinh khiết thân thiện sức khỏe.'
    ],
    [
        'name' => 'EcoStraw Mekong',
        'field' => 'Môi trường & Tuần hoàn',
        'desc' => 'Ống hút tự nhiên làm từ cây bồn bồn bản địa Cà Mau có khả năng tự phân hủy.'
    ]
];

$mockImpact = [
    'companies' => [
        'value' => '150+',
        'label' => 'Doanh nghiệp hỗ trợ',
        'desc' => 'Cung cấp các gói tư vấn chuyển đổi số, thiết bị công nghệ và đào tạo kỹ năng số.'
    ],
    'investment' => [
        'value' => '$5M+',
        'label' => 'Tổng vốn đầu tư kết nối',
        'desc' => 'Thông qua các diễn đàn gọi vốn và kết nối các quỹ đầu tư mạo hiểm khu vực.'
    ],
    'projects' => [
        'value' => '45+',
        'label' => 'Dự án ươm tạo thành công',
        'desc' => 'Nhiều dự án đã đưa sản phẩm ra thị trường và đạt các giải thưởng khởi nghiệp quốc gia.'
    ],
    'outreach' => [
        'value' => '12K+',
        'label' => 'Sinh viên & Thanh niên tiếp cận',
        'desc' => 'Thông qua các ngày hội khởi nghiệp học đường và workshop truyền cảm hứng.'
    ]
];

// ==========================================
// AUTO-INITIALIZATION CHO DATABASE MYSQL NẾU CÓ KẾT NỐI
// ==========================================
if ($db_connected && $pdo) {
    try {
        // Tự động khởi tạo bảng nếu chưa có
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS `users` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `username` VARCHAR(50) NOT NULL UNIQUE,
              `password` VARCHAR(255) NOT NULL,
              `fullname` VARCHAR(100) NOT NULL,
              `email` VARCHAR(100) NOT NULL,
              `role` VARCHAR(50) DEFAULT 'Super Admin',
              `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

            CREATE TABLE IF NOT EXISTS `events` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `title` VARCHAR(255) NOT NULL,
              `status` ENUM('ongoing', 'upcoming', 'completed') DEFAULT 'upcoming',
              `status_text` VARCHAR(50) DEFAULT 'Sắp diễn ra',
              `date_day` VARCHAR(10) NOT NULL,
              `date_month` VARCHAR(20) NOT NULL,
              `date_full` VARCHAR(100) NOT NULL,
              `time` VARCHAR(50) NOT NULL,
              `location` VARCHAR(255) NOT NULL,
              `desc` TEXT,
              `image` VARCHAR(255) DEFAULT 'assets/img/event_forum.jpg',
              `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

            CREATE TABLE IF NOT EXISTS `news` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `title` VARCHAR(255) NOT NULL,
              `category` VARCHAR(50) NOT NULL,
              `category_name` VARCHAR(100) NOT NULL,
              `date` VARCHAR(30) NOT NULL,
              `author` VARCHAR(100) DEFAULT 'Ban Biên Tập CINEC',
              `summary` TEXT NOT NULL,
              `image` VARCHAR(255) DEFAULT 'assets/img/news_launch.jpg',
              `featured` TINYINT(1) DEFAULT 0,
              `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

            CREATE TABLE IF NOT EXISTS `partners` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `name` VARCHAR(255) NOT NULL,
              `logo` VARCHAR(255) NOT NULL,
              `category` VARCHAR(50) NOT NULL,
              `category_name` VARCHAR(100) NOT NULL,
              `url` VARCHAR(255) DEFAULT '#',
              `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

            CREATE TABLE IF NOT EXISTS `contacts` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `fullname` VARCHAR(100) NOT NULL,
              `email` VARCHAR(100) NOT NULL,
              `phone` VARCHAR(30) NOT NULL,
              `organization` VARCHAR(255) DEFAULT NULL,
              `program_interest` VARCHAR(100) DEFAULT NULL,
              `message` TEXT NOT NULL,
              `status` ENUM('new', 'processing', 'completed') DEFAULT 'new',
              `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

            CREATE TABLE IF NOT EXISTS `settings` (
              `key_name` VARCHAR(100) PRIMARY KEY,
              `key_value` TEXT NOT NULL,
              `description` VARCHAR(255) DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ");
    } catch (Exception $e) {
        // Ghi nhận lỗi mềm và dùng JSON/Mockup
    }
}

// ==========================================
// JSON PERSISTENCE ENGINE (HỖ TRỢ SONG SONG ĐỒNG BỘ)
// ==========================================
$dataDir = __DIR__ . '/../data';
if (!is_dir($dataDir)) {
    @mkdir($dataDir, 0777, true);
}

function read_json_data($file, $default = []) {
    global $dataDir;
    $filePath = $dataDir . '/' . $file;
    if (file_exists($filePath)) {
        $content = file_get_contents($filePath);
        $decoded = json_decode($content, true);
        if (is_array($decoded)) {
            return $decoded;
        }
    }
    // Ghi file mặc định lần đầu
    write_json_data($file, $default);
    return $default;
}

function write_json_data($file, $data) {
    global $dataDir;
    $filePath = $dataDir . '/' . $file;
    @file_put_contents($filePath, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// ==========================================
// CRUD CÁC CHƯƠNG TRÌNH ĐMST (PROGRAMS)
// ==========================================
function get_programs() {
    global $db_connected, $pdo, $mockPrograms;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM programs ORDER BY id ASC");
            $data = $stmt->fetchAll();
            if (!empty($data)) {
                $result = [];
                foreach ($data as $item) {
                    $item['core_activities'] = !empty($item['core_activities']) ? json_decode($item['core_activities'], true) : [];
                    $item['outputs'] = !empty($item['outputs']) ? json_decode($item['outputs'], true) : [];
                    $item['key_metrics'] = !empty($item['key_metrics']) ? json_decode($item['key_metrics'], true) : [];
                    $result[$item['id']] = $item;
                }
                return $result;
            }
        } catch (Exception $e) {}
    }
    return read_json_data('programs.json', $mockPrograms);
}

function get_program_by_id($id) {
    $programs = get_programs();
    return $programs[$id] ?? null;
}

function save_program($data) {
    global $db_connected, $pdo;
    $id = $data['id'] ?? '';
    if (empty($id)) return false;

    // 1. Lưu vào MySQL nếu có kết nối
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->prepare("
                INSERT INTO programs (`id`, `code`, `title`, `name`, `short_name`, `sub_title`, `slug`, `icon`, `badge`, `color`, `bg_light`, `text_color`, `border_color`, `short_desc`, `main_function`, `desc`, `target_audience`, `core_activities`, `outputs`, `key_metrics`)
                VALUES (:id, :code, :title, :name, :short_name, :sub_title, :slug, :icon, :badge, :color, :bg_light, :text_color, :border_color, :short_desc, :main_function, :desc, :target_audience, :core_activities, :outputs, :key_metrics)
                ON DUPLICATE KEY UPDATE
                `code` = VALUES(`code`), `title` = VALUES(`title`), `name` = VALUES(`name`), `short_name` = VALUES(`short_name`), `sub_title` = VALUES(`sub_title`),
                `slug` = VALUES(`slug`), `icon` = VALUES(`icon`), `badge` = VALUES(`badge`), `color` = VALUES(`color`), `bg_light` = VALUES(`bg_light`),
                `text_color` = VALUES(`text_color`), `border_color` = VALUES(`border_color`), `short_desc` = VALUES(`short_desc`), `main_function` = VALUES(`main_function`),
                `desc` = VALUES(`desc`), `target_audience` = VALUES(`target_audience`), `core_activities` = VALUES(`core_activities`), `outputs` = VALUES(`outputs`), `key_metrics` = VALUES(`key_metrics`)
            ");
            $stmt->execute([
                ':id' => $id,
                ':code' => $data['code'] ?? '',
                ':title' => $data['title'] ?? '',
                ':name' => $data['name'] ?? '',
                ':short_name' => $data['short_name'] ?? '',
                ':sub_title' => $data['sub_title'] ?? '',
                ':slug' => $data['slug'] ?? '',
                ':icon' => $data['icon'] ?? 'layers',
                ':badge' => $data['badge'] ?? '',
                ':color' => $data['color'] ?? 'from-blue-600 to-indigo-600',
                ':bg_light' => $data['bg_light'] ?? 'bg-blue-50',
                ':text_color' => $data['text_color'] ?? 'text-blue-600',
                ':border_color' => $data['border_color'] ?? 'border-blue-200',
                ':short_desc' => $data['short_desc'] ?? '',
                ':main_function' => $data['main_function'] ?? '',
                ':desc' => $data['desc'] ?? '',
                ':target_audience' => $data['target_audience'] ?? '',
                ':core_activities' => json_encode($data['core_activities'] ?? [], JSON_UNESCAPED_UNICODE),
                ':outputs' => json_encode($data['outputs'] ?? [], JSON_UNESCAPED_UNICODE),
                ':key_metrics' => json_encode($data['key_metrics'] ?? [], JSON_UNESCAPED_UNICODE),
            ]);
        } catch (Exception $e) {}
    }

    // 2. Lưu vào JSON
    $programs = get_programs();
    $programs[$id] = array_merge($programs[$id] ?? [], $data);
    write_json_data('programs.json', $programs);
    return true;
}

// ==========================================
// CRUD SỰ KIỆN (EVENTS)
// ==========================================
function get_events($limit = null, $status = null) {
    global $db_connected, $pdo, $mockEvents;
    if ($db_connected && $pdo) {
        try {
            $sql = "SELECT * FROM events";
            $params = [];
            if ($status) {
                $sql .= " WHERE status = :status";
                $params['status'] = $status;
            }
            $sql .= " ORDER BY id DESC";
            if ($limit) {
                $sql .= " LIMIT " . (int)$limit;
            }
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);
            $data = $stmt->fetchAll();
            if (!empty($data)) return $data;
        } catch (Exception $e) {}
    }

    $events = read_json_data('events.json', $mockEvents);
    if ($status) {
        $events = array_values(array_filter($events, fn($item) => ($item['status'] ?? '') == $status));
    }
    if ($limit) {
        $events = array_slice($events, 0, $limit);
    }
    return $events;
}

function get_event_by_id($id) {
    global $db_connected, $pdo;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->prepare("SELECT * FROM events WHERE id = :id LIMIT 1");
            $stmt->execute(['id' => $id]);
            $res = $stmt->fetch();
            if ($res) return $res;
        } catch (Exception $e) {}
    }
    $events = get_events();
    foreach ($events as $ev) {
        if (($ev['id'] ?? 0) == $id) return $ev;
    }
    return null;
}

function save_event($data) {
    global $db_connected, $pdo;
    $id = isset($data['id']) && is_numeric($data['id']) ? (int)$data['id'] : null;

    if ($db_connected && $pdo) {
        try {
            if ($id) {
                $stmt = $pdo->prepare("
                    UPDATE events SET 
                        `title` = :title, `status` = :status, `status_text` = :status_text,
                        `date_day` = :date_day, `date_month` = :date_month, `date_full` = :date_full,
                        `time` = :time, `location` = :location, `desc` = :desc, `content` = :content, `image` = :image
                    WHERE `id` = :id
                ");
                $stmt->execute([
                    ':id' => $id,
                    ':title' => $data['title'],
                    ':status' => $data['status'] ?? 'upcoming',
                    ':status_text' => $data['status_text'] ?? 'Sắp diễn ra',
                    ':date_day' => $data['date_day'] ?? '01',
                    ':date_month' => $data['date_month'] ?? 'Th01',
                    ':date_full' => $data['date_full'] ?? '',
                    ':time' => $data['time'] ?? '08:00 - 17:00',
                    ':location' => $data['location'] ?? '',
                    ':desc' => $data['desc'] ?? '',
                    ':content' => $data['content'] ?? '',
                    ':image' => $data['image'] ?? 'assets/img/event_forum.jpg',
                ]);
            } else {
                $stmt = $pdo->prepare("
                    INSERT INTO events (`title`, `status`, `status_text`, `date_day`, `date_month`, `date_full`, `time`, `location`, `desc`, `content`, `image`)
                    VALUES (:title, :status, :status_text, :date_day, :date_month, :date_full, :time, :location, :desc, :content, :image)
                ");
                $stmt->execute([
                    ':title' => $data['title'],
                    ':status' => $data['status'] ?? 'upcoming',
                    ':status_text' => $data['status_text'] ?? 'Sắp diễn ra',
                    ':date_day' => $data['date_day'] ?? '01',
                    ':date_month' => $data['date_month'] ?? 'Th01',
                    ':date_full' => $data['date_full'] ?? '',
                    ':time' => $data['time'] ?? '08:00 - 17:00',
                    ':location' => $data['location'] ?? '',
                    ':desc' => $data['desc'] ?? '',
                    ':content' => $data['content'] ?? '',
                    ':image' => $data['image'] ?? 'assets/img/event_forum.jpg',
                ]);
                $id = (int)$pdo->lastInsertId();
            }
        } catch (Exception $e) {}
    }

    // Đồng bộ JSON
    $events = read_json_data('events.json', get_events());
    if ($id) {
        $found = false;
        foreach ($events as &$ev) {
            if (($ev['id'] ?? 0) == $id) {
                $ev = array_merge($ev, $data, ['id' => $id]);
                $found = true;
                break;
            }
        }
        if (!$found) {
            $events[] = array_merge($data, ['id' => $id]);
        }
    } else {
        $maxId = 0;
        foreach ($events as $ev) {
            if (($ev['id'] ?? 0) > $maxId) $maxId = $ev['id'];
        }
        $data['id'] = $maxId + 1;
        $events[] = $data;
    }
    write_json_data('events.json', $events);
    return true;
}

function delete_event($id) {
    global $db_connected, $pdo;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->prepare("DELETE FROM events WHERE id = :id");
            $stmt->execute(['id' => $id]);
        } catch (Exception $e) {}
    }
    $events = read_json_data('events.json', get_events());
    $events = array_values(array_filter($events, fn($item) => ($item['id'] ?? 0) != $id));
    write_json_data('events.json', $events);
    return true;
}

// ==========================================
// CRUD TIN TỨC & INSIGHT (NEWS)
// ==========================================
function get_news($limit = null, $featured = null) {
    global $db_connected, $pdo, $mockNews;
    if ($db_connected && $pdo) {
        try {
            $sql = "SELECT * FROM news";
            $params = [];
            if ($featured !== null) {
                $sql .= " WHERE featured = :featured";
                $params['featured'] = $featured ? 1 : 0;
            }
            $sql .= " ORDER BY id DESC";
            if ($limit) {
                $sql .= " LIMIT " . (int)$limit;
            }
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);
            $data = $stmt->fetchAll();
            if (!empty($data)) {
                foreach ($data as &$n) {
                    $n['featured'] = (bool)$n['featured'];
                }
                return $data;
            }
        } catch (Exception $e) {}
    }

    $news = read_json_data('news.json', $mockNews);
    if ($featured !== null) {
        $news = array_values(array_filter($news, fn($item) => ($item['featured'] ?? false) == (bool)$featured));
    }
    if ($limit) {
        $news = array_slice($news, 0, $limit);
    }
    return $news;
}

function get_news_by_id($id) {
    global $db_connected, $pdo;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->prepare("SELECT * FROM news WHERE id = :id LIMIT 1");
            $stmt->execute(['id' => $id]);
            $res = $stmt->fetch();
            if ($res) {
                $res['featured'] = (bool)$res['featured'];
                return $res;
            }
        } catch (Exception $e) {}
    }
    $news = get_news();
    foreach ($news as $n) {
        if (($n['id'] ?? 0) == $id) return $n;
    }
    return null;
}

function save_news($data) {
    global $db_connected, $pdo;
    $id = isset($data['id']) && is_numeric($data['id']) ? (int)$data['id'] : null;

    if ($db_connected && $pdo) {
        try {
            if ($id) {
                $stmt = $pdo->prepare("
                    UPDATE news SET 
                        `title` = :title, `category` = :category, `category_name` = :category_name,
                        `date` = :date, `author` = :author, `summary` = :summary, `content` = :content,
                        `image` = :image, `featured` = :featured
                    WHERE `id` = :id
                ");
                $stmt->execute([
                    ':id' => $id,
                    ':title' => $data['title'],
                    ':category' => $data['category'] ?? 'startup',
                    ':category_name' => $data['category_name'] ?? 'Khởi nghiệp',
                    ':date' => $data['date'] ?? date('d/m/Y'),
                    ':author' => $data['author'] ?? 'Ban Biên Tập CINEC',
                    ':summary' => $data['summary'] ?? '',
                    ':content' => $data['content'] ?? '',
                    ':image' => $data['image'] ?? 'assets/img/news_launch.jpg',
                    ':featured' => !empty($data['featured']) ? 1 : 0,
                ]);
            } else {
                $stmt = $pdo->prepare("
                    INSERT INTO news (`title`, `category`, `category_name`, `date`, `author`, `summary`, `content`, `image`, `featured`)
                    VALUES (:title, :category, :category_name, :date, :author, :summary, :content, :image, :featured)
                ");
                $stmt->execute([
                    ':title' => $data['title'],
                    ':category' => $data['category'] ?? 'startup',
                    ':category_name' => $data['category_name'] ?? 'Khởi nghiệp',
                    ':date' => $data['date'] ?? date('d/m/Y'),
                    ':author' => $data['author'] ?? 'Ban Biên Tập CINEC',
                    ':summary' => $data['summary'] ?? '',
                    ':content' => $data['content'] ?? '',
                    ':image' => $data['image'] ?? 'assets/img/news_launch.jpg',
                    ':featured' => !empty($data['featured']) ? 1 : 0,
                ]);
                $id = (int)$pdo->lastInsertId();
            }
        } catch (Exception $e) {}
    }

    // Đồng bộ JSON
    $news = read_json_data('news.json', get_news());
    if ($id) {
        $found = false;
        foreach ($news as &$n) {
            if (($n['id'] ?? 0) == $id) {
                $n = array_merge($n, $data, ['id' => $id, 'featured' => !empty($data['featured'])]);
                $found = true;
                break;
            }
        }
        if (!$found) {
            $news[] = array_merge($data, ['id' => $id, 'featured' => !empty($data['featured'])]);
        }
    } else {
        $maxId = 0;
        foreach ($news as $n) {
            if (($n['id'] ?? 0) > $maxId) $maxId = $n['id'];
        }
        $data['id'] = $maxId + 1;
        $data['featured'] = !empty($data['featured']);
        $news[] = $data;
    }
    write_json_data('news.json', $news);
    return true;
}

function delete_news($id) {
    global $db_connected, $pdo;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->prepare("DELETE FROM news WHERE id = :id");
            $stmt->execute(['id' => $id]);
        } catch (Exception $e) {}
    }
    $news = read_json_data('news.json', get_news());
    $news = array_values(array_filter($news, fn($item) => ($item['id'] ?? 0) != $id));
    write_json_data('news.json', $news);
    return true;
}

// ==========================================
// CRUD ĐỐI TÁC (PARTNERS)
// ==========================================
function get_partners() {
    global $db_connected, $pdo, $mockPartners;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM partners ORDER BY id DESC");
            $data = $stmt->fetchAll();
            if (!empty($data)) return $data;
        } catch (Exception $e) {}
    }
    return read_json_data('partners.json', $mockPartners);
}

function get_partner_by_id($id) {
    $partners = get_partners();
    foreach ($partners as $p) {
        if (($p['id'] ?? 0) == $id) return $p;
    }
    return null;
}

function save_partner($data) {
    global $db_connected, $pdo;
    $id = isset($data['id']) && is_numeric($data['id']) ? (int)$data['id'] : null;

    if ($db_connected && $pdo) {
        try {
            if ($id) {
                $stmt = $pdo->prepare("
                    UPDATE partners SET `name` = :name, `logo` = :logo, `category` = :category, `category_name` = :category_name, `url` = :url
                    WHERE `id` = :id
                ");
                $stmt->execute([
                    ':id' => $id,
                    ':name' => $data['name'],
                    ':logo' => $data['logo'] ?? 'assets/img/partner_bca.png',
                    ':category' => $data['category'] ?? 'enterprise',
                    ':category_name' => $data['category_name'] ?? 'Doanh nghiệp',
                    ':url' => $data['url'] ?? '#',
                ]);
            } else {
                $stmt = $pdo->prepare("
                    INSERT INTO partners (`name`, `logo`, `category`, `category_name`, `url`)
                    VALUES (:name, :logo, :category, :category_name, :url)
                ");
                $stmt->execute([
                    ':name' => $data['name'],
                    ':logo' => $data['logo'] ?? 'assets/img/partner_bca.png',
                    ':category' => $data['category'] ?? 'enterprise',
                    ':category_name' => $data['category_name'] ?? 'Doanh nghiệp',
                    ':url' => $data['url'] ?? '#',
                ]);
                $id = (int)$pdo->lastInsertId();
            }
        } catch (Exception $e) {}
    }

    $partners = read_json_data('partners.json', get_partners());
    if ($id) {
        $found = false;
        foreach ($partners as &$p) {
            if (($p['id'] ?? 0) == $id) {
                $p = array_merge($p, $data, ['id' => $id]);
                $found = true;
                break;
            }
        }
        if (!$found) $partners[] = array_merge($data, ['id' => $id]);
    } else {
        $maxId = 0;
        foreach ($partners as $p) {
            if (($p['id'] ?? 0) > $maxId) $maxId = $p['id'];
        }
        $data['id'] = $maxId + 1;
        $partners[] = $data;
    }
    write_json_data('partners.json', $partners);
    return true;
}

function delete_partner($id) {
    global $db_connected, $pdo;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->prepare("DELETE FROM partners WHERE id = :id");
            $stmt->execute(['id' => $id]);
        } catch (Exception $e) {}
    }
    $partners = read_json_data('partners.json', get_partners());
    $partners = array_values(array_filter($partners, fn($item) => ($item['id'] ?? 0) != $id));
    write_json_data('partners.json', $partners);
    return true;
}

// ==========================================
// CRUD HỘP THƯ LIÊN HỆ & ĐĂNG KÝ (CONTACTS)
// ==========================================
function get_contacts() {
    global $db_connected, $pdo;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM contacts ORDER BY id DESC");
            $data = $stmt->fetchAll();
            if (!empty($data)) return $data;
        } catch (Exception $e) {}
    }
    return read_json_data('contacts.json', [
        [
            'id' => 1,
            'fullname' => 'Nguyễn Minh Trí',
            'email' => 'tri.nguyen@example.com',
            'phone' => '0912 345 678',
            'organization' => 'HTX Nuôi Tôm Công Nghệ Cao Cà Mau',
            'program_interest' => 'Doanh nghiệp số (Voucher CĐS)',
            'message' => 'Chúng tôi có nhu cầu ứng dụng IoT giám sát môi trường nước và chuyển đổi số quy trình xuất khẩu tôm.',
            'status' => 'new',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'id' => 2,
            'fullname' => 'Lê Thanh Mai',
            'email' => 'mai.le@startup.vn',
            'phone' => '0988 765 432',
            'organization' => 'Dự án EcoStraw',
            'program_interest' => 'Hành trình Khởi nghiệp (Ươm tạo & Vốn)',
            'message' => 'Startup của tôi đã phát triển xong mẫu ống hút sinh học từ bồn bồn, muốn tham gia ươm tạo và kết nối quỹ đầu tư.',
            'status' => 'processing',
            'created_at' => date('Y-m-d H:i:s', strtotime('-1 day'))
        ]
    ]);
}

function save_contact($data) {
    global $db_connected, $pdo;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->prepare("
                INSERT INTO contacts (`fullname`, `email`, `phone`, `organization`, `program_interest`, `message`, `status`)
                VALUES (:fullname, :email, :phone, :organization, :program_interest, :message, :status)
            ");
            $stmt->execute([
                ':fullname' => $data['fullname'],
                ':email' => $data['email'],
                ':phone' => $data['phone'] ?? '',
                ':organization' => $data['organization'] ?? '',
                ':program_interest' => $data['program_interest'] ?? 'Tư vấn chung',
                ':message' => $data['message'] ?? '',
                ':status' => $data['status'] ?? 'new',
            ]);
        } catch (Exception $e) {}
    }

    $contacts = get_contacts();
    $maxId = 0;
    foreach ($contacts as $c) {
        if (($c['id'] ?? 0) > $maxId) $maxId = $c['id'];
    }
    $data['id'] = $maxId + 1;
    $data['created_at'] = date('Y-m-d H:i:s');
    array_unshift($contacts, $data);
    write_json_data('contacts.json', $contacts);
    return true;
}

function update_contact_status($id, $status) {
    global $db_connected, $pdo;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->prepare("UPDATE contacts SET status = :status WHERE id = :id");
            $stmt->execute([':status' => $status, ':id' => $id]);
        } catch (Exception $e) {}
    }
    $contacts = get_contacts();
    foreach ($contacts as &$c) {
        if (($c['id'] ?? 0) == $id) {
            $c['status'] = $status;
            break;
        }
    }
    write_json_data('contacts.json', $contacts);
    return true;
}

function delete_contact($id) {
    global $db_connected, $pdo;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->prepare("DELETE FROM contacts WHERE id = :id");
            $stmt->execute([':id' => $id]);
        } catch (Exception $e) {}
    }
    $contacts = get_contacts();
    $contacts = array_values(array_filter($contacts, fn($c) => ($c['id'] ?? 0) != $id));
    write_json_data('contacts.json', $contacts);
    return true;
}

// ==========================================
// CRUD QUẢN LÝ GIỚI THIỆU (ABOUT MODULE)
// ==========================================
function get_about_info() {
    global $mockTeam, $mockAdvisors, $mockStartups;
    $defaultAbout = [
        'hero_title' => 'Trung tâm Khởi nghiệp và Đổi mới sáng tạo',
        'hero_desc' => 'Trung tâm Khởi nghiệp và Đổi mới sáng tạo tỉnh Cà Mau thực hiện chức năng nghiên cứu, hoạt động sự nghiệp và cung cấp dịch vụ liên quan đến hỗ trợ và phát triển doanh nghiệp khởi nghiệp, hệ sinh thái khởi nghiệp, khởi nghiệp sáng tạo, thúc đẩy đổi mới sáng tạo của tỉnh Cà Mau, góp phần đổi mới mô hình tăng trưởng dựa trên nền tảng khoa học và công nghệ.',
        'vision' => 'Đến 2030, CiNEC là đầu mối đổi mới sáng tạo dẫn dắt Đồng bằng sông Cửu Long, kết nối quốc gia và quốc tế.',
        'mission' => 'Ươm tạo doanh nghiệp đổi mới, thúc đẩy ứng dụng khoa học, công nghệ và chuyển đổi số, góp phần chuyển đổi mô hình tăng trưởng bền vững cho tỉnh Cà Mau.',
        'values' => [
            ['title' => 'Đổi mới', 'desc' => 'Luôn tiên phong và đột phá'],
            ['title' => 'Kết nối', 'desc' => 'Mạng lưới đồng hành toàn diện'],
            ['title' => 'Thực chiến', 'desc' => 'Hành động vì kết quả bền vững'],
            ['title' => 'Bản địa', 'desc' => 'Tận dụng thế mạnh địa phương'],
            ['title' => 'Vươn xa', 'desc' => 'Hội nhập khu vực và toàn cầu']
        ],
        'team' => $mockTeam,
        'advisors' => $mockAdvisors,
        'startups' => $mockStartups
    ];
    return read_json_data('about.json', $defaultAbout);
}

function save_about_info($data) {
    $current = get_about_info();
    $updated = array_merge($current, $data);
    write_json_data('about.json', $updated);
    return true;
}

function get_team() {
    $about = get_about_info();
    return $about['team'] ?? [];
}

function save_team_member($member) {
    $about = get_about_info();
    $team = $about['team'] ?? [];
    $id = isset($member['id']) ? (int)$member['id'] : null;

    if ($id) {
        foreach ($team as &$m) {
            if (($m['id'] ?? 0) == $id) {
                $m = array_merge($m, $member);
                break;
            }
        }
    } else {
        $maxId = 0;
        foreach ($team as $m) {
            if (($m['id'] ?? 0) > $maxId) $maxId = $m['id'];
        }
        $member['id'] = $maxId + 1;
        $team[] = $member;
    }
    $about['team'] = $team;
    save_about_info($about);
    return true;
}

function delete_team_member($id) {
    $about = get_about_info();
    $team = array_values(array_filter($about['team'] ?? [], fn($m) => ($m['id'] ?? 0) != $id));
    $about['team'] = $team;
    save_about_info($about);
    return true;
}

// ==========================================
// CRUD QUẢN LÝ IMPACT (IMPACT MODULE)
// ==========================================
function get_impact_info() {
    global $mockImpact;
    $defaultImpact = [
        'hero_title' => 'CiNEC Impact',
        'hero_subtitle' => 'Tác Động Hệ Sinh Thái Đổi Mới Sáng Tạo',
        'hero_desc' => 'CINEC cam kết tạo ra tác động tích cực và bền vững cho hệ sinh thái đổi mới sáng tạo của Cà Mau và khu vực Đồng bằng sông Cửu Long.',
        'metrics' => $mockImpact,
        'pii_index' => [
            'score' => 'Top 3',
            'label' => 'Mục tiêu Chỉ số PII ĐBSCL',
            'desc' => 'Đẩy mạnh các chỉ số thành phần về thể chế, nhân lực và sản phẩm tri thức sáng tạo.'
        ],
        'economic_impact' => [
            ['title' => 'Tăng trưởng Doanh thu SME', 'number' => '+28%', 'desc' => 'Sau khi tham gia gói Voucher Chuyển đổi số và KPI 90 ngày.'],
            ['title' => 'Việc làm Công nghệ mới', 'number' => '1,200+', 'desc' => 'Được tạo ra từ các startup và doanh nghiệp số được ươm tạo.'],
            ['title' => 'Sản phẩm OCOP Số hóa', 'number' => '85+', 'desc' => 'Đưa lên các sàn thương mại điện tử và truy xuất nguồn gốc số.']
        ]
    ];
    return read_json_data('impact.json', $defaultImpact);
}

function save_impact_info($data) {
    $current = get_impact_info();
    $updated = array_merge($current, $data);
    write_json_data('impact.json', $updated);
    return true;
}

// ==========================================
// CRUD CÀI ĐẶT & THỐNG KÊ TRANG CHỦ (SETTINGS)
// ==========================================
function get_settings() {
    global $db_connected, $pdo;
    $defaultSettings = [
        'stat_events' => '120+',
        'stat_startups' => '350+',
        'stat_mentors' => '180+',
        'stat_partners' => '25+',
        'site_hotline' => '0290 3838 888',
        'site_email' => 'contact@cinec.com.vn',
        'site_address' => 'Toà nhà CiNEC, số 16 - 18 Cù Chính Lan, phường Bạc Liêu, Cà Mau, Vietnam',
    ];

    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->query("SELECT `key_name`, `key_value` FROM settings");
            $rows = $stmt->fetchAll();
            if (!empty($rows)) {
                $dbSettings = array_column($rows, 'key_value', 'key_name');
                return array_merge($defaultSettings, $dbSettings);
            }
        } catch (Exception $e) {}
    }
    return read_json_data('settings.json', $defaultSettings);
}

function save_settings($data) {
    global $db_connected, $pdo;
    if ($db_connected && $pdo) {
        try {
            $stmt = $pdo->prepare("
                INSERT INTO settings (`key_name`, `key_value`) VALUES (:k, :v)
                ON DUPLICATE KEY UPDATE `key_value` = VALUES(`key_value`)
            ");
            foreach ($data as $k => $v) {
                $stmt->execute([':k' => $k, ':v' => $v]);
            }
        } catch (Exception $e) {}
    }
    $current = get_settings();
    $updated = array_merge($current, $data);
    write_json_data('settings.json', $updated);
    return true;
}

