<?php
// Nếu có query parameter id hoặc action=detail thì nạp trang chi tiết sự kiện
if (isset($_GET['id']) || (isset($_GET['view']) && $_GET['view'] == 'detail')) {
    require_once 'su-kien-chi-tiet.php';
    exit;
}

$page_title = "Sự Kiện & Hoạt Động - CINEC";
require_once 'config/db.php';
require_once 'includes/header.php';

$all_events = [
    [
        'id' => 1,
        'title' => 'Hội thảo chuyên đề: Trí tuệ nhân tạo (AI) và chuyển đổi số',
        'category' => 'Hội thảo & Chuyển đổi số',
        'status' => 'SẮP DIỄN RA',
        'status_bg' => 'bg-[#71A800]',
        'date_day' => '14',
        'date_month' => 'APR',
        'date_full' => '14/04/2026',
        'time' => '07:30 - 11:00',
        'location' => 'Hội trường Tầng 2 - Toà nhà VNPT Cà Mau',
        'image' => 'assets/img/hero-bg.jpg',
        'desc' => 'Hội thảo quy tụ chuyên gia, doanh nghiệp và các đơn vị công nghệ cùng chia sẻ giải pháp thực tế, dễ áp dụng cho doanh nghiệp vừa và nhỏ.'
    ],
    [
        'id' => 2,
        'title' => 'CiNEC Launch Demo Day 2026 - Ngày hội Gọi vốn Đầu tư',
        'category' => 'Gọi vốn & Ươm tạo',
        'status' => 'SẮP DIỄN RA',
        'status_bg' => 'bg-[#71A800]',
        'date_day' => '25',
        'date_month' => 'MAY',
        'date_full' => '25/05/2026',
        'time' => '08:00 - 17:00',
        'location' => 'Không gian sáng tạo CiNEC',
        'image' => 'assets/img/intro-building.jpg',
        'desc' => 'Sự kiện pitching quy tụ 20+ dự án khởi nghiệp tiềm năng nhất khu vực ĐBSCL gặp gỡ các quỹ đầu tư mạo hiểm.'
    ],
    [
        'id' => 3,
        'title' => 'Diễn đàn Kết nối Đầu tư Start-up Cực Nam 2026',
        'category' => 'Kết nối thị trường',
        'status' => 'SẮP DIỄN RA',
        'status_bg' => 'bg-[#71A800]',
        'date_day' => '10',
        'date_month' => 'JUN',
        'date_full' => '10/06/2026',
        'time' => '08:30 - 16:30',
        'location' => 'Trung tâm Hội nghị Tỉnh Cà Mau',
        'image' => 'assets/img/office.png',
        'desc' => 'Tạo cầu nối trực tiếp giữa các mô hình kinh doanh đổi mới sáng tạo với hệ sinh thái đầu tư và đối tác thương mại.'
    ],
    [
        'id' => 4,
        'title' => 'Workshop Khởi nghiệp Nông nghiệp Xanh & Bền vững',
        'category' => 'Nông nghiệp xanh',
        'status' => 'SẮP DIỄN RA',
        'status_bg' => 'bg-[#71A800]',
        'date_day' => '05',
        'date_month' => 'JUL',
        'date_full' => '05/07/2026',
        'time' => '08:00 - 11:30',
        'location' => 'Chi nhánh CiNEC Bạc Liêu',
        'image' => 'assets/img/hero-bg.jpg',
        'desc' => 'Đào tạo và ứng dụng công nghệ sinh học, tiêu chuẩn ESG trong nâng cao giá trị thủy hải sản và nông sản vùng.'
    ],
    [
        'id' => 5,
        'title' => 'Tọa đàm Chính sách & Bảo hộ Sở hữu Trí tuệ Doanh nghiệp',
        'category' => 'Pháp lý & Chính sách',
        'status' => 'ĐANG MỞ ĐĂNG KÝ',
        'status_bg' => 'bg-[#05A6F5]',
        'date_day' => '18',
        'date_month' => 'AUG',
        'date_full' => '18/08/2026',
        'time' => '13:30 - 17:00',
        'location' => 'Hội trường CiNEC Center',
        'image' => 'assets/img/intro-building.jpg',
        'desc' => 'Tư vấn chuyên sâu quy định pháp luật, bảo hộ thương hiệu và tài sản trí tuệ cho doanh nghiệp khởi nghiệp.'
    ],
    [
        'id' => 6,
        'title' => 'Ngày hội Chuyển giao Công nghệ & Kích cầu Thị trường 2026',
        'category' => 'Chuyển giao công nghệ',
        'status' => 'ĐANG MỞ ĐĂNG KÝ',
        'status_bg' => 'bg-[#05A6F5]',
        'date_day' => '22',
        'date_month' => 'SEP',
        'date_full' => '22/09/2026',
        'time' => '08:00 - 17:00',
        'location' => 'Trung tâm Hội chợ Triển lãm Cà Mau',
        'image' => 'assets/img/office.png',
        'desc' => 'Trưng bày giải pháp công nghệ mới, kết nối viện nghiên cứu - trường đại học với các doanh nghiệp sản xuất.'
    ]
];
?>

<!-- TRANG DANH SÁCH SỰ KIỆN (EVENTS LISTING PAGE) -->
<div class="bg-[#FAFCFF] min-h-screen pt-28 pb-16">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-10">

        <!-- HEADER SECTION: TIÊU ĐỀ & THANH TÌM KIẾM BỘ LỌC -->
        <div class="space-y-6">
            <div class="text-left space-y-2">
                <span class="text-body-xs font-extrabold text-[#062AAD] uppercase tracking-widest block">SỰ KIỆN & HOẠT ĐỘNG</span>
                <h1 class="text-h3 md:text-h2 font-extrabold text-[#02185D] leading-tight">
                    Đồng hành cùng hệ sinh thái<br>đổi mới sáng tạo Cà Mau
                </h1>
                <p class="text-body-xs text-slate-500 max-w-xl leading-relaxed">
                    Nơi hội tụ các chương trình đào tạo, hội thảo chuyên đề, sự kiện kết nối đầu tư và ươm tạo doanh nghiệp.
                </p>
            </div>

            <!-- THANH TÌM KIẾM & BỘ LỌC TABS -->
            <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4 bg-white p-4 rounded-3xl border border-slate-200/80 shadow-sm">
                <!-- Tabs Lọc Trạng Thái -->
                <div class="flex items-center gap-2 overflow-x-auto pb-2 md:pb-0 scrollbar-none">
                    <button class="px-5 py-2 rounded-full bg-[#062AAD] text-white font-extrabold text-body-xs shadow-sm shrink-0">
                        Tất cả sự kiện
                    </button>
                    <button class="px-5 py-2 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200 font-bold text-body-xs transition-colors shrink-0">
                        Sắp diễn ra
                    </button>
                    <button class="px-5 py-2 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200 font-bold text-body-xs transition-colors shrink-0">
                        Đang mở đăng ký
                    </button>
                    <button class="px-5 py-2 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200 font-bold text-body-xs transition-colors shrink-0">
                        Đã diễn ra
                    </button>
                </div>

                <!-- Ô Tìm Kiếm -->
                <div class="relative min-w-[260px]">
                    <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
                    <input type="text" placeholder="Tìm kiếm sự kiện..." class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-full text-body-xs focus:outline-none focus:border-[#062AAD]">
                </div>
            </div>
        </div>

        <!-- FEATURED EVENT HERO CARD (SỰ KIỆN NỔI BẬT TIÊU ĐIỂM) -->
        <div class="bg-white rounded-[32px] border border-slate-200/80 shadow-premium overflow-hidden grid grid-cols-1 lg:grid-cols-12 gap-0">
            <!-- Ảnh Sự Kiện Bên Trái (7/12) -->
            <div class="lg:col-span-7 relative aspect-[16/10] bg-slate-900 overflow-hidden">
                <img src="<?php echo $all_events[0]['image']; ?>" alt="Featured Event" class="w-full h-full object-cover">
                <div class="absolute top-4 left-4">
                    <span class="bg-[#71A800] text-white text-[10px] font-black uppercase tracking-wider px-3.5 py-1 rounded-full shadow-md">
                        <?php echo $all_events[0]['status']; ?>
                    </span>
                </div>
            </div>

            <!-- Thông Tin Chi Tiết Bên Phải (5/12) -->
            <div class="lg:col-span-5 p-6 md:p-8 flex flex-col justify-between space-y-6">
                <div class="space-y-3">
                    <span class="text-[11px] font-extrabold text-[#05A6F5] uppercase tracking-wider block">
                        <?php echo $all_events[0]['category']; ?>
                    </span>
                    <h2 class="text-h4 font-extrabold text-[#02185D] hover:text-[#062AAD] transition-colors leading-snug">
                        <?php echo $all_events[0]['title']; ?>
                    </h2>
                    <p class="text-body-xs text-slate-500 leading-relaxed font-normal">
                        <?php echo $all_events[0]['desc']; ?>
                    </p>
                </div>

                <div class="space-y-4 pt-4 border-t border-slate-100">
                    <div class="space-y-2 text-body-xs text-slate-600 font-medium">
                        <div class="flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4 text-[#05A6F5]"></i>
                            <span><?php echo $all_events[0]['date_full']; ?></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="clock" class="w-4 h-4 text-[#05A6F5]"></i>
                            <span><?php echo $all_events[0]['time']; ?></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="map-pin" class="w-4 h-4 text-[#05A6F5]"></i>
                            <span class="line-clamp-1"><?php echo $all_events[0]['location']; ?></span>
                        </div>
                    </div>

                    <!-- Nút Chuyển Vào Trang Chi Tiết Sự Kiện -->
                    <a href="su-kien-chi-tiet.php" class="w-full bg-[#02185D] hover:bg-[#062AAD] text-white font-extrabold text-body-xs rounded-full py-3 px-6 transition-all duration-300 shadow-md flex items-center justify-center gap-2 group">
                        <span>Xem chi tiết & Đăng ký</span>
                        <span class="w-5 h-5 rounded-full bg-white flex items-center justify-center transition-transform group-hover:translate-x-1">
                            <i data-lucide="arrow-right" class="w-3 h-3 text-[#02185D]"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <!-- LƯỚI DANH SÁCH 6 SỰ KIỆN (GRID 3 CỘT KHỚP FIGMA) -->
        <div class="space-y-6">
            <h2 class="text-h4 font-extrabold text-[#02185D]">Tất cả sự kiện</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($all_events as $ev): ?>
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-200/80 hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group flex flex-col justify-between">
                        <!-- Cover Image & Badge Ngày -->
                        <div class="relative aspect-video bg-slate-900 overflow-hidden">
                            <img src="<?php echo $ev['image']; ?>" alt="Event Cover" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 left-4 <?php echo $ev['status_bg']; ?> text-white text-[9px] font-black uppercase tracking-wider px-3 py-1 rounded-full shadow-sm">
                                <?php echo $ev['status']; ?>
                            </span>
                            
                            <!-- Badge Lịch Ngày Tháng Góc Phải -->
                            <div class="absolute bottom-4 right-4 bg-white/95 backdrop-blur-sm rounded-2xl p-2.5 shadow-md text-center min-w-[56px] border border-slate-100">
                                <span class="block text-h5 font-extrabold text-[#062AAD] leading-none"><?php echo $ev['date_day']; ?></span>
                                <span class="block text-[10px] font-extrabold uppercase text-slate-500 mt-1"><?php echo $ev['date_month']; ?></span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                            <div class="space-y-2">
                                <span class="text-[10px] font-extrabold text-[#05A6F5] uppercase tracking-wider block">
                                    <?php echo $ev['category']; ?>
                                </span>
                                <h3 class="text-body-md font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                    <?php echo $ev['title']; ?>
                                </h3>
                                <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-2">
                                    <?php echo $ev['desc']; ?>
                                </p>
                            </div>

                            <div class="space-y-3 pt-3 border-t border-slate-100">
                                <div class="space-y-1.5 text-body-xs text-slate-500 font-medium">
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="clock" class="w-3.5 h-3.5 text-[#05A6F5]"></i>
                                        <span><?php echo $ev['time']; ?></span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#05A6F5]"></i>
                                        <span class="line-clamp-1"><?php echo $ev['location']; ?></span>
                                    </div>
                                </div>

                                <a href="su-kien-chi-tiet.php" class="w-full bg-blue-50 hover:bg-[#062AAD] text-[#062AAD] hover:text-white font-extrabold text-body-xs rounded-full py-2.5 px-4 transition-all duration-300 flex items-center justify-center gap-2 group-hover:bg-[#062AAD] group-hover:text-white mt-2">
                                    <span>Xem chi tiết & Đăng ký</span>
                                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
