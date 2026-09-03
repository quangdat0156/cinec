<?php
// Nếu có query parameter id hoặc action=detail thì chuyển hướng trang chi tiết sự kiện
if (isset($_GET['id']) || (isset($_GET['view']) && $_GET['view'] == 'detail')) {
    require_once 'su-kien-chi-tiet.php';
    exit;
}

require_once 'config/db.php';
require_once 'config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
$page_title = $is_en ? "Events & Activities - CiNEC Innovation Center" : "Sự Kiện & Hoạt Động - Trung Tâm Khởi Nghiệp & ĐMST CiNEC";
require_once 'includes/header.php';

$all_events = [
    [
        'id' => 1,
        'title' => 'Hội thảo chuyên đề: Trí tuệ nhân tạo (AI) và chuyển đổi số',
        'title_en' => 'Specialized Seminar: Artificial Intelligence (AI) and Digital Transformation',
        'category' => 'Chuyển đổi số & AI',
        'category_en' => 'Digital & AI',
        'category_slug' => 'ai-dx',
        'status' => 'SẮP DIỄN RA',
        'status_en' => 'UPCOMING',
        'status_bg' => 'bg-[#C1FF72] text-[#02185D]',
        'is_featured' => true,
        'date_day' => '14',
        'date_month' => 'Tháng 4',
        'date_month_en' => 'Apr',
        'date_year' => '2026',
        'date_full' => '14/04/2026',
        'time' => '07:30 – 11:00',
        'location' => 'Hội trường Tầng 2 – Toà nhà VNPT Cà Mau',
        'location_en' => '2nd Floor Hall – VNPT Ca Mau Building',
        'address' => 'Số 03 Lưu Tấn Tài, P. Tân Thành, tỉnh Cà Mau',
        'address_en' => '03 Luu Tan Tai St., Tan Thanh Ward, Ca Mau',
        'image' => 'assets/img/sukien_hero_bg.png',
        'desc' => 'Hội thảo quy tụ chuyên gia, doanh nghiệp và các đơn vị công nghệ cùng chia sẻ giải pháp thực tế, dễ áp dụng cho doanh nghiệp vừa và nhỏ.',
        'desc_en' => 'Gathering industry experts, enterprises, and tech leaders to share pragmatic, highly deployable solutions for SMEs in Ca Mau.',
        'link' => 'su-kien-chi-tiet.php'
    ],
    [
        'id' => 2,
        'title' => 'CiNEC Launch Demo Day 2026 - Ngày hội Gọi vốn Đầu tư',
        'title_en' => 'CiNEC Launch Demo Day 2026 - Venture Capital & Investment Showcase',
        'category' => 'Gọi vốn & Demo Day',
        'category_en' => 'Funding & Demo Day',
        'category_slug' => 'funding',
        'status' => 'SẮP DIỄN RA',
        'status_en' => 'UPCOMING',
        'status_bg' => 'bg-[#062AAD] text-white',
        'is_featured' => false,
        'date_day' => '25',
        'date_month' => 'Tháng 5',
        'date_month_en' => 'May',
        'date_year' => '2026',
        'date_full' => '25/05/2026',
        'time' => '08:00 – 17:00',
        'location' => 'Không gian Sáng tạo CiNEC Center',
        'location_en' => 'CiNEC Innovation Space',
        'address' => 'Trung tâm Hành chính tỉnh Cà Mau',
        'address_en' => 'Ca Mau Provincial Administrative Center',
        'image' => 'assets/img/office.png',
        'desc' => 'Sự kiện pitching quy tụ 20+ dự án khởi nghiệp tiềm năng nhất khu vực ĐBSCL gặp gỡ các quỹ đầu tư mạo hiểm và nhà đầu tư thiên thần.',
        'desc_en' => 'Pitching showcase gathering 20+ promising Mekong Delta startups to connect directly with VC funds and angel investors.',
        'link' => 'su-kien-chi-tiet.php?id=2'
    ],
    [
        'id' => 3,
        'title' => 'Diễn đàn Kết nối Đầu tư & Phát triển Start-up Cực Nam 2026',
        'title_en' => 'Southernmost Regional Startup Investment & Development Forum 2026',
        'category' => 'Hội thảo & Diễn đàn',
        'category_en' => 'Forum & Conference',
        'category_slug' => 'forum',
        'status' => 'ĐANG MỞ ĐĂNG KÝ',
        'status_en' => 'OPEN FOR REGISTRATION',
        'status_bg' => 'bg-cyan-500 text-white',
        'is_featured' => false,
        'date_day' => '10',
        'date_month' => 'Tháng 6',
        'date_month_en' => 'Jun',
        'date_year' => '2026',
        'date_full' => '10/06/2026',
        'time' => '08:30 – 16:30',
        'location' => 'Trung tâm Hội nghị Tỉnh Cà Mau',
        'location_en' => 'Ca Mau Provincial Convention Center',
        'address' => 'Đường Lê Duẩn, TP. Cà Mau',
        'address_en' => 'Le Duan St., Ca Mau City',
        'image' => 'assets/img/intro-building.jpg',
        'desc' => 'Tạo cầu nối trực tiếp giữa các mô hình kinh doanh đổi mới sáng tạo với hệ sinh thái đầu tư mạo hiểm và các đối tác thương mại đa ngành.',
        'desc_en' => 'Building direct bridges between innovative business models, venture capital ecosystems, and multi-sector commercial partners.',
        'link' => 'su-kien-chi-tiet.php?id=3'
    ],
    [
        'id' => 4,
        'title' => 'Workshop Khởi nghiệp Nông nghiệp Xanh & Phát triển Bền vững',
        'title_en' => 'Green Agriculture & Sustainable Development Startup Workshop',
        'category' => 'Hội thảo & Diễn đàn',
        'category_en' => 'Forum & Conference',
        'category_slug' => 'forum',
        'status' => 'SẮP DIỄN RA',
        'status_en' => 'UPCOMING',
        'status_bg' => 'bg-emerald-600 text-white',
        'is_featured' => false,
        'date_day' => '05',
        'date_month' => 'Tháng 7',
        'date_month_en' => 'Jul',
        'date_year' => '2026',
        'date_full' => '05/07/2026',
        'time' => '08:00 – 11:30',
        'location' => 'Hội trường CiNEC Phân hiệu Bạc Liêu',
        'location_en' => 'CiNEC Bac Lieu Campus Hall',
        'address' => 'Khu Công nghệ cao Bạc Liêu',
        'address_en' => 'Bac Lieu High-Tech Zone',
        'image' => 'assets/img/hero-bg.jpg',
        'desc' => 'Đào tạo và chuyển giao ứng dụng công nghệ sinh học, tiêu chuẩn ESG trong chuỗi giá trị tôm, cua và nông đặc sản rừng U Minh.',
        'desc_en' => 'Training and tech-transfer in biotechnology and ESG criteria across shrimp, crab, and U Minh forest agricultural value chains.',
        'link' => 'su-kien-chi-tiet.php?id=4'
    ],
    [
        'id' => 5,
        'title' => 'Tọa đàm Chính sách & Bảo hộ Sở hữu Trí tuệ cho Doanh nghiệp',
        'title_en' => 'Intellectual Property Protection & Policy Consultation for Enterprises',
        'category' => 'Chuyển đổi số & AI',
        'category_en' => 'Digital & AI',
        'category_slug' => 'ai-dx',
        'status' => 'ĐANG MỞ ĐĂNG KÝ',
        'status_en' => 'OPEN FOR REGISTRATION',
        'status_bg' => 'bg-cyan-500 text-white',
        'is_featured' => false,
        'date_day' => '18',
        'date_month' => 'Tháng 8',
        'date_month_en' => 'Aug',
        'date_year' => '2026',
        'date_full' => '18/08/2026',
        'time' => '13:30 – 17:00',
        'location' => 'Hội trường Trung tâm Đổi mới sáng tạo CiNEC',
        'location_en' => 'CiNEC Innovation Center Auditorium',
        'address' => 'Số 03 Lưu Tấn Tài, P. Tân Thành, tỉnh Cà Mau',
        'address_en' => '03 Luu Tan Tai St., Tan Thanh Ward, Ca Mau',
        'image' => 'assets/img/office.png',
        'desc' => 'Tư vấn chuyên sâu quy định pháp luật, cơ chế thử nghiệm Sandbox, đăng ký bản quyền sáng chế và nhãn hiệu bảo hộ OCOP.',
        'desc_en' => 'In-depth guidance on IP regulations, Sandbox pilot policies, patents, and geographical branding for OCOP products.',
        'link' => 'su-kien-chi-tiet.php?id=5'
    ],
    [
        'id' => 6,
        'title' => 'Ngày hội Chuyển giao Công nghệ & Kích cầu Đổi mới Sáng tạo 2026',
        'title_en' => 'Tech Transfer & Regional Innovation Stimulus Expo 2026',
        'category' => 'Hội thảo & Diễn đàn',
        'category_en' => 'Forum & Conference',
        'category_slug' => 'forum',
        'status' => 'ĐANG MỞ ĐĂNG KÝ',
        'status_en' => 'OPEN FOR REGISTRATION',
        'status_bg' => 'bg-cyan-500 text-white',
        'is_featured' => false,
        'date_day' => '22',
        'date_month' => 'Tháng 9',
        'date_month_en' => 'Sep',
        'date_year' => '2026',
        'date_full' => '22/09/2026',
        'time' => '08:00 – 17:00',
        'location' => 'Trung tâm Triển lãm & Xúc tiến Thương mại Cà Mau',
        'location_en' => 'Ca Mau Trade Promotion & Exhibition Center',
        'address' => 'Quảng trường Phan Ngọc Hiển, TP. Cà Mau',
        'address_en' => 'Phan Ngoc Hien Square, Ca Mau City',
        'image' => 'assets/img/intro-building.jpg',
        'desc' => 'Trưng bày 50+ giải pháp công nghệ mới, cầu nối trực tiếp giữa Viện trường nghiên cứu với mạng lưới doanh nghiệp sản xuất vùng.',
        'desc_en' => 'Exhibiting 50+ emerging tech solutions, bridging universities, research institutions, and regional manufacturing networks.',
        'link' => 'su-kien-chi-tiet.php?id=6'
    ]
];
?>

<!-- TRANG DANH SÁCH SỰ KIỆN BILINGUAL -->
<div class="bg-[#F8FAFC] min-h-screen pt-24 pb-20 font-sans text-slate-800">

    <!-- BREADCRUMB -->
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 py-4">
        <nav class="flex items-center gap-2 text-[13px] font-normal text-slate-500">
            <a href="index.php" class="hover:text-[#062AAD] transition-colors"><?php echo __('nav_home'); ?></a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
            <span class="text-[#062AAD] font-semibold"><?php echo __('nav_events'); ?></span>
        </nav>
    </div>

    <!-- HERO HEADER BANNER ĐẲNG CẤP -->
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 pb-10">
        <div class="relative rounded-[28px] lg:rounded-[36px] bg-[#02185D] text-white p-8 sm:p-12 lg:p-14 overflow-hidden shadow-xl border border-blue-900/60">
            <!-- Quầng sáng hiệu ứng nền -->
            <div class="absolute -right-24 -top-24 w-96 h-96 bg-[#062AAD]/50 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-cyan-500/20 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="relative z-10 max-w-3xl space-y-5 text-left">
                <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/10 text-cyan-300 text-[12px] font-semibold border border-white/15">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                    <?php echo $is_en ? 'CA MAU INNOVATION EVENTS & CONFERENCES' : 'SỰ KIỆN & DIỄN ĐÀN ĐỔI MỚI SÁNG TẠO CÀ MAU'; ?>
                </span>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white leading-tight">
                    <?php echo $is_en ? 'Connecting Ideas & Inspiring Startup Talents' : 'Không gian Kết nối Ý tưởng & Hội tụ Tài năng Khởi nghiệp'; ?>
                </h1>

                <p class="text-[15px] sm:text-[16px] text-slate-200 font-normal leading-relaxed">
                    <?php echo $is_en 
                        ? 'A convergence of specialized symposiums, venture capital Demo Days, hands-on workshops, and digital forums accelerating sustainable economic growth.'
                        : 'Nơi quy tụ các hội thảo chuyên sâu, ngày hội gọi vốn Demo Day, workshop thực chiến và diễn đàn chuyển đổi số thúc đẩy tăng trưởng kinh tế vùng Cực Nam.'; ?>
                </p>

                <!-- 3 Thống kê nhanh Glassmorphism -->
                <div class="pt-4 grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/15">
                        <span class="text-2xl lg:text-3xl font-bold text-white block">24+</span>
                        <span class="text-[12px] text-slate-300 font-medium"><?php echo $is_en ? 'Annual Events' : 'Sự kiện thường niên'; ?></span>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/15">
                        <span class="text-2xl lg:text-3xl font-bold text-[#C1FF72] block">1.500+</span>
                        <span class="text-[12px] text-slate-300 font-medium"><?php echo $is_en ? 'Participating Businesses' : 'Doanh nghiệp tham gia'; ?></span>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/15">
                        <span class="text-2xl lg:text-3xl font-bold text-cyan-300 block">100%</span>
                        <span class="text-[12px] text-slate-300 font-medium"><?php echo $is_en ? 'Free Registration & Support' : 'Miễn phí & Hỗ trợ kết nối'; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT CONTAINER -->
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-12">

        <!-- SỰ KIỆN TIÊU ĐIỂM (FEATURED EVENT CARD) -->
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#062AAD]"></span>
                    <h2 class="text-[20px] sm:text-[22px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Featured Upcoming Event' : 'Sự kiện tiêu điểm sắp diễn ra'; ?>
                    </h2>
                </div>
                <span class="text-[12px] text-slate-500 font-medium hidden sm:inline-block">
                    <?php echo $is_en ? 'Register early for VIP invitations' : 'Đăng ký tham dự sớm để nhận vé mời VIP'; ?>
                </span>
            </div>

            <div class="bg-white rounded-[28px] lg:rounded-[32px] border border-slate-200/80 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden grid grid-cols-1 lg:grid-cols-12 gap-0 group">
                <!-- Ảnh sự kiện bên trái (7/12) -->
                <div class="lg:col-span-7 relative min-h-[280px] lg:min-h-[380px] bg-[#02185D] overflow-hidden">
                    <img src="<?php echo $all_events[0]['image']; ?>" alt="<?php echo htmlspecialchars($all_events[0]['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    
                    <!-- Badge trạng thái neon -->
                    <div class="absolute top-5 left-5">
                        <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-[#C1FF72] text-[#02185D] text-[11px] font-bold uppercase tracking-wider shadow-md">
                            <span class="w-2 h-2 rounded-full bg-[#02185D] animate-ping"></span>
                            <?php echo $is_en ? $all_events[0]['status_en'] : $all_events[0]['status']; ?>
                        </span>
                    </div>

                    <!-- Ngày tháng góc dưới ảnh -->
                    <div class="absolute bottom-5 left-5 text-white flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-white/20 backdrop-blur-md border border-white/30 flex flex-col items-center justify-center text-center">
                            <span class="text-[18px] font-black leading-none text-white"><?php echo $all_events[0]['date_day']; ?></span>
                            <span class="text-[10px] font-bold uppercase text-cyan-300"><?php echo $is_en ? $all_events[0]['date_month_en'] : $all_events[0]['date_month']; ?></span>
                        </div>
                        <div>
                            <span class="text-[13px] font-semibold text-slate-200 block"><?php echo $all_events[0]['time']; ?></span>
                            <span class="text-[12px] text-slate-300"><?php echo $is_en ? $all_events[0]['location_en'] : $all_events[0]['location']; ?></span>
                        </div>
                    </div>
                </div>

                <!-- Thông tin sự kiện bên phải (5/12) -->
                <div class="lg:col-span-5 p-6 sm:p-8 lg:p-10 flex flex-col justify-between space-y-6 text-left">
                    <div class="space-y-3.5">
                        <span class="text-[12px] font-bold text-[#062AAD] uppercase tracking-wider block">
                            <?php echo $is_en ? $all_events[0]['category_en'] : $all_events[0]['category']; ?>
                        </span>

                        <h3 class="text-xl sm:text-2xl font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors leading-snug">
                            <a href="<?php echo $all_events[0]['link']; ?>">
                                <?php echo $is_en ? $all_events[0]['title_en'] : $all_events[0]['title']; ?>
                            </a>
                        </h3>

                        <p class="text-[14px] text-[#5B5B5B] leading-relaxed font-normal">
                            <?php echo $is_en ? $all_events[0]['desc_en'] : $all_events[0]['desc']; ?>
                        </p>
                    </div>

                    <div class="space-y-4 pt-4 border-t border-slate-100">
                        <div class="space-y-2 text-[13px] text-slate-600">
                            <div class="flex items-center gap-2.5">
                                <i data-lucide="map-pin" class="w-4 h-4 text-[#062AAD] shrink-0"></i>
                                <span class="truncate"><?php echo $is_en ? $all_events[0]['address_en'] : $all_events[0]['address']; ?></span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <i data-lucide="ticket" class="w-4 h-4 text-[#062AAD] shrink-0"></i>
                                <span class="font-medium text-emerald-700"><?php echo $is_en ? 'Free Admission (Curated Seats)' : 'Miễn phí vé tham dự (Có xét duyệt)'; ?></span>
                            </div>
                        </div>

                        <a href="<?php echo $all_events[0]['link']; ?>" class="w-full bg-[#062AAD] hover:bg-[#02185D] text-white font-semibold text-[14px] rounded-full py-3.5 px-6 shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center gap-2 group/btn">
                            <span><?php echo $is_en ? 'View Details & Register' : 'Xem chi tiết & Đăng ký'; ?></span>
                            <span class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center transition-transform duration-300 group-hover/btn:translate-x-1">
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-white"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- BỘ LỌC TABS & Ô TÌM KIẾM -->
        <div class="bg-white rounded-2xl p-3 sm:p-4 border border-slate-200/80 shadow-xs flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
            
            <!-- Filter Tabs Pills -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 md:pb-0 scrollbar-none" id="event-filters">
                <button onclick="filterEvents('all', this)" class="filter-tab-btn active px-4 py-2 rounded-full bg-[#062AAD] text-white text-[13px] font-semibold transition-all shrink-0">
                    <?php echo $is_en ? 'All Events' : 'Tất cả sự kiện'; ?>
                </button>
                <button onclick="filterEvents('ai-dx', this)" class="filter-tab-btn px-4 py-2 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 text-[13px] font-medium transition-all shrink-0">
                    <?php echo $is_en ? 'Digital & AI' : 'Chuyển đổi số & AI'; ?>
                </button>
                <button onclick="filterEvents('funding', this)" class="filter-tab-btn px-4 py-2 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 text-[13px] font-medium transition-all shrink-0">
                    <?php echo $is_en ? 'Funding & Demo Day' : 'Gọi vốn & Demo Day'; ?>
                </button>
                <button onclick="filterEvents('forum', this)" class="filter-tab-btn px-4 py-2 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 text-[13px] font-medium transition-all shrink-0">
                    <?php echo $is_en ? 'Forums & Conferences' : 'Hội thảo & Diễn đàn'; ?>
                </button>
            </div>

            <!-- Ô Tìm Kiếm sự kiện -->
            <div class="relative min-w-[240px]">
                <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
                <input type="text" id="event-search" oninput="searchEvents(this.value)" placeholder="<?php echo $is_en ? 'Search event titles...' : 'Tìm kiếm tên sự kiện...'; ?>" class="w-full pl-9 pr-4 py-2 rounded-full bg-slate-50 border border-slate-200 text-[13px] focus:outline-none focus:border-[#062AAD] focus:bg-white transition-all">
            </div>

        </div>

        <!-- LƯỚI DANH SÁCH SỰ KIỆN (GRID 3 CỘT) -->
        <div class="space-y-6">
            <div class="flex items-center justify-between">
                <h3 class="text-[18px] font-bold text-[#062AAD]">
                    <?php echo $is_en ? 'Event Calendar' : 'Danh sách sự kiện'; ?>
                </h3>
                <span class="text-[13px] text-slate-500 font-medium" id="event-count">
                    <?php echo $is_en ? 'Showing ' . count($all_events) . ' events' : 'Hiển thị ' . count($all_events) . ' sự kiện'; ?>
                </span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8" id="events-grid">
                <?php foreach ($all_events as $ev): ?>
                    <div class="event-card bg-white rounded-3xl overflow-hidden border border-slate-200/80 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col justify-between" data-category="<?php echo $ev['category_slug']; ?>" data-title="<?php echo strtolower($is_en ? $ev['title_en'] : $ev['title']); ?>">
                        
                        <!-- Ảnh Thumbnail & Badge Ngày Tháng -->
                        <div class="relative aspect-[16/10] bg-slate-900 overflow-hidden">
                            <img src="<?php echo $ev['image']; ?>" alt="<?php echo htmlspecialchars($is_en ? $ev['title_en'] : $ev['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            
                            <!-- Badge trạng thái -->
                            <span class="absolute top-3.5 left-3.5 <?php echo $ev['status_bg']; ?> text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow-xs">
                                <?php echo $is_en ? $ev['status_en'] : $ev['status']; ?>
                            </span>

                            <!-- Box Ngày Tháng Square Góc Phải Chuẩn UI -->
                            <div class="absolute bottom-3.5 right-3.5 bg-white/95 backdrop-blur-sm rounded-xl p-2 shadow-md text-center min-w-[52px] border border-slate-100">
                                <span class="block text-[18px] font-black text-[#062AAD] leading-none"><?php echo $ev['date_day']; ?></span>
                                <span class="block text-[10px] font-bold uppercase text-slate-500 mt-0.5"><?php echo $is_en ? $ev['date_month_en'] : $ev['date_month']; ?></span>
                            </div>
                        </div>

                        <!-- Content Thông Tin -->
                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4 text-left">
                            <div class="space-y-2">
                                <span class="text-[11px] font-bold text-[#062AAD] uppercase tracking-wider block">
                                    <?php echo $is_en ? $ev['category_en'] : $ev['category']; ?>
                                </span>
                                
                                <h4 class="text-[16px] font-bold text-slate-900 group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                    <a href="<?php echo $ev['link']; ?>">
                                        <?php echo $is_en ? $ev['title_en'] : $ev['title']; ?>
                                    </a>
                                </h4>

                                <p class="text-[13px] text-slate-500 leading-relaxed line-clamp-2">
                                    <?php echo $is_en ? $ev['desc_en'] : $ev['desc']; ?>
                                </p>
                            </div>

                            <!-- Meta thời gian & Nút xem chi tiết -->
                            <div class="space-y-3.5 pt-3 border-t border-slate-100">
                                <div class="space-y-1.5 text-[12.5px] text-slate-500 font-medium">
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="clock" class="w-3.5 h-3.5 text-[#062AAD]"></i>
                                        <span><?php echo $ev['time']; ?></span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#062AAD]"></i>
                                        <span class="line-clamp-1"><?php echo $is_en ? $ev['location_en'] : $ev['location']; ?></span>
                                    </div>
                                </div>

                                <a href="<?php echo $ev['link']; ?>" class="w-full py-2.5 px-4 rounded-full bg-blue-50 text-[#062AAD] hover:bg-[#062AAD] hover:text-white font-semibold text-[13px] transition-all duration-300 flex items-center justify-center gap-2 group-hover:bg-[#062AAD] group-hover:text-white">
                                    <span><?php echo $is_en ? 'View Details & Register' : 'Xem chi tiết & Đăng ký'; ?></span>
                                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- BANNER KẾT NỐI HỢP TÁC TỔ CHỨC SỰ KIỆN -->
        <div class="rounded-[28px] bg-gradient-to-r from-[#02185D] via-[#02185D] to-[#062AAD] text-white p-8 sm:p-12 text-left relative overflow-hidden shadow-lg border border-blue-900/40">
            <div class="relative z-10 max-w-2xl space-y-4">
                <span class="text-[11px] font-bold uppercase tracking-widest text-cyan-300">
                    <?php echo $is_en ? 'CO-HOSTING & PARTNERSHIP' : 'HỢP TÁC & ĐỒNG TỔ CHỨC'; ?>
                </span>
                <h3 class="text-2xl sm:text-3xl font-bold text-white">
                    <?php echo $is_en ? 'Looking to Co-host a Seminar or Workshop with CiNEC?' : 'Bạn muốn tổ chức Hội thảo hoặc Workshop cùng CiNEC?'; ?>
                </h3>
                <p class="text-[14px] text-slate-200 leading-relaxed font-normal">
                    <?php echo $is_en 
                        ? 'CiNEC provides comprehensive venue support, expert panels, extensive media coverage, and direct access to regional business ecosystems.'
                        : 'CiNEC hỗ trợ toàn diện về không gian hội thảo hiện đại, kết nối mạng lưới chuyên gia, truyền thông và tiếp cận cộng đồng doanh nghiệp địa phương.'; ?>
                </p>
                <div class="pt-2 flex flex-wrap items-center gap-4">
                    <a href="lien-he.php" class="px-6 py-3 rounded-full bg-white text-[#02185D] hover:bg-cyan-50 font-bold text-[13.5px] transition-all duration-300 shadow-md">
                        <?php echo $is_en ? 'Partner With Us' : 'Đăng ký phối hợp tổ chức'; ?>
                    </a>
                    <a href="tel:02903888999" class="px-6 py-3 rounded-full border border-white/30 text-white hover:bg-white/10 font-semibold text-[13.5px] transition-all duration-300 flex items-center gap-2">
                        <i data-lucide="phone" class="w-4 h-4 text-cyan-300"></i>
                        <span>Hotline: (0290) 3888 999</span>
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- SCRIPT BỘ LỌC TỰ ĐỘNG -->
<script>
function filterEvents(category, btn) {
    document.querySelectorAll('.filter-tab-btn').forEach(b => {
        b.classList.remove('bg-[#062AAD]', 'text-white');
        b.classList.add('bg-slate-100', 'text-slate-700');
    });
    btn.classList.remove('bg-slate-100', 'text-slate-700');
    btn.classList.add('bg-[#062AAD]', 'text-white');

    const cards = document.querySelectorAll('.event-card');
    let visibleCount = 0;
    cards.forEach(card => {
        if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = 'flex';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });
    var countTpl = '<?php echo $is_en ? "Showing {N} events" : "Hiển thị {N} sự kiện"; ?>';
    document.getElementById('event-count').textContent = countTpl.replace('{N}', visibleCount);
}

function searchEvents(query) {
    const term = query.toLowerCase().trim();
    const cards = document.querySelectorAll('.event-card');
    let visibleCount = 0;
    cards.forEach(card => {
        const title = card.getAttribute('data-title') || '';
        if (title.includes(term)) {
            card.style.display = 'flex';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });
    var countTpl = '<?php echo $is_en ? "Showing {N} events" : "Hiển thị {N} sự kiện"; ?>';
    document.getElementById('event-count').textContent = countTpl.replace('{N}', visibleCount);
}
</script>

<?php
require_once 'includes/footer.php';
?>
