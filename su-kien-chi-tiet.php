<?php
$page_title = "Chi Tiết Sự Kiện - Hội thảo chuyên đề: Trí tuệ nhân tạo (AI) và chuyển đổi số";
require_once 'config/db.php';
require_once 'includes/header.php';
?>

<!-- BREADCRUMBS BAR -->
<div class="bg-[#FAFCFF] pt-28 pb-3">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 text-[11px] font-medium text-slate-500 flex items-center gap-1.5">
        <a href="index.php" class="hover:text-[#062AAD] transition-colors">Trang chủ</a>
        <span>&gt;</span>
        <a href="su-kien.php" class="hover:text-[#062AAD] transition-colors">Sự kiện</a>
        <span>&gt;</span>
        <span class="text-[#062AAD] font-bold truncate">Hội thảo chuyên đề: Trí tuệ nhân tạo(AI) và chuyển đổi số</span>
    </div>
</div>

<!-- SECTION 1: HERO EVENT BANNER & FLOATING REGISTRATION FORM -->
<section class="relative bg-gradient-to-r from-[#02185D] via-[#02185D]/95 to-[#062AAD] text-white overflow-hidden shadow-2xl py-12">
    <!-- Ảnh nền mờ overlay -->
    <div class="absolute inset-0 bg-cover bg-center opacity-25 mix-blend-overlay pointer-events-none" style="background-image: url('assets/img/hero-bg.jpg');"></div>
    
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <!-- CỘT TRÁI: THÔNG TIN SỰ KIỆN CHÍNH (7/12 CỘT) -->
        <div class="lg:col-span-7 space-y-6 text-left">
            <span class="bg-[#C1FF72] text-slate-900 text-[10px] font-black uppercase tracking-wider px-3.5 py-1 rounded-full inline-block">
                SỰ KIỆN SẮP DIỄN RA
            </span>
            
            <div class="space-y-2">
                <h1 class="text-h3 md:text-h2 font-extrabold leading-tight text-white">
                    Hội thảo chuyên đề: Trí tuệ nhân tạo(AI) và chuyển đổi số
                </h1>
                <p class="text-body-sm font-bold text-blue-200">
                    Từ nhận thức &rarr; Hành động
                </p>
            </div>
            
            <p class="text-body-xs text-slate-300 font-normal leading-relaxed max-w-xl">
                Hội thảo quy tụ chuyên gia, doanh nghiệp và các đơn vị công nghệ cùng chia sẻ giải pháp thực tế, dễ áp dụng cho doanh nghiệp vừa và nhỏ.
            </p>
            
            <div class="space-y-3 pt-2 text-body-xs font-medium text-slate-200">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-[#C1FF72]">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                    </div>
                    <span>14/04/2026</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-[#C1FF72]">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                    </div>
                    <span>07:30 - 11:00</span>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-[#C1FF72] shrink-0 mt-0.5">
                        <i data-lucide="map-pin" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <span class="font-bold block">Hội trường Tầng 2 - Toà nhà VNPT Cà Mau</span>
                        <span class="text-slate-300 text-[11px]">Số 03 Lưu Tấn Tài, P. Tân Thành, tỉnh Cà Mau</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CỘT PHẢI: FORM ĐĂNG KÝ THAM DỰ (5/12 CỘT) -->
        <div class="lg:col-span-5">
            <div class="bg-white rounded-3xl p-6 shadow-2xl text-slate-800 space-y-4 border border-slate-100">
                <div class="space-y-0.5">
                    <h2 class="text-h4 font-extrabold text-[#02185D]">Đăng ký tham dự</h2>
                    <p class="text-[11px] font-medium text-slate-400">Tham gia sự kiện ngay hôm nay!</p>
                </div>

                <form class="space-y-3">
                    <!-- Form Field 1: Họ tên -->
                    <div class="relative">
                        <i data-lucide="user" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
                        <input type="text" placeholder="Họ và tên" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-body-xs focus:outline-none focus:border-[#062AAD]">
                    </div>

                    <!-- Form Field 2: Email -->
                    <div class="relative">
                        <i data-lucide="mail" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
                        <input type="email" placeholder="Email" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-body-xs focus:outline-none focus:border-[#062AAD]">
                    </div>

                    <!-- Form Field 3: SĐT -->
                    <div class="relative">
                        <i data-lucide="phone" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
                        <input type="tel" placeholder="Số điện thoại" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-body-xs focus:outline-none focus:border-[#062AAD]">
                    </div>

                    <!-- Form Field 4: Đơn vị / Tổ chức -->
                    <div class="relative">
                        <i data-lucide="building" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
                        <select class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-body-xs text-slate-500 focus:outline-none focus:border-[#062AAD] appearance-none">
                            <option>Đơn vị / Tổ chức</option>
                            <option>Doanh nghiệp SME</option>
                            <option>Startup</option>
                            <option>Trường Đại học / Viện</option>
                            <option>Cơ quan nhà nước</option>
                        </select>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none"></i>
                    </div>

                    <!-- Form Field 5: Bạn là? -->
                    <div class="relative">
                        <i data-lucide="user-check" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
                        <select class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-body-xs text-slate-500 focus:outline-none focus:border-[#062AAD] appearance-none">
                            <option>Bạn là? (Nhà đầu tư/Startup/Khác)</option>
                            <option>Nhà đầu tư</option>
                            <option>Startup / Chủ dự án</option>
                            <option>Chuyên gia / Mentor</option>
                            <option>Sinh viên / Học sinh</option>
                            <option>Khác</option>
                        </select>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none"></i>
                    </div>

                    <!-- Nút Submit -->
                    <button type="button" class="w-full bg-[#02185D] hover:bg-[#062AAD] text-white font-extrabold text-body-xs rounded-full py-3 transition-all duration-300 shadow-md flex items-center justify-center gap-2 mt-2">
                        <span>Đăng ký ngay</span>
                        <span class="w-5 h-5 rounded-full bg-white flex items-center justify-center">
                            <i data-lucide="arrow-right" class="w-3 h-3 text-[#02185D]"></i>
                        </span>
                    </button>
                </form>

                <p class="text-[10px] text-slate-400 text-center font-medium block">
                    Hạn đăng ký: 11/04/2026
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: LỊCH TRÌNH SỰ KIỆN (LEFT 6/12) & DIỄN GIẢ & BAN GIÁM KHẢO (RIGHT 6/12) -->
<section class="py-12 bg-[#FAFCFF]">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- CỘT TRÁI: LỊCH TRÌNH SỰ KIỆN (6/12 CỘT) -->
        <div class="lg:col-span-6 bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-6">
            <h2 class="text-h4 font-extrabold text-[#02185D]">Lịch trình sự kiện</h2>

            <!-- TIMETABLE LIST KHỚP FIGMA -->
            <div class="space-y-3 text-body-xs">
                <!-- Row 1 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">08:00 - 08:30</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Đón khách - Check in</span>
                </div>
                <!-- Row 2 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">08:00 - 08:05</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Tuyên bố lý do, giới thiệu đại biểu</span>
                </div>
                <!-- Row 3 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">08:05 - 08:15</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Trình chiếu Video giới thiệu đơn vị chủ trì cDXA</span>
                </div>
                <!-- Row 4 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">08:15 - 08:20</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Phát biểu Khai mạc</span>
                </div>
                <!-- Row 5 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">08:20 - 08:35</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Chia sẻ thực tế chuyển đổi số trong doanh nghiệp và kết quả thực tiễn</span>
                </div>
                <!-- Row 6 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">08:35 - 08:50</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Xu hướng AI và lộ trình chuyển đổi số cho doanh nghiệp</span>
                </div>
                <!-- Row 7 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">08:50 - 09:05</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Khai phóng vận hành bằng chuyển đổi số tích hợp AI - Giải pháp quản trị doanh nghiệp toàn diện</span>
                </div>
                <!-- Row 8 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">09:05 - 09:20</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Giải pháp hợp đồng điện tử cho doanh nghiệp</span>
                </div>
                <!-- Row 9 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">09:20 - 09:45</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Nghỉ giữa giờ - tham quan khu trải nghiệm</span>
                </div>
                <!-- Row 10 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">08:45 - 10:25</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Giới thiệu Chương trình hỗ trợ doanh nghiệp chuyển đổi số</span>
                </div>
                <!-- Row 11 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">10:25 - 10:45</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Giới thiệu và nền tảng Hỗ trợ Chuyển đổi số trong doanh nghiệp (SME) tỉnh Cà Mau và phát động CaMauConnect - kết nối hệ sinh thái chuyển đổi số hỗ trợ doanh nghiệp</span>
                </div>
                <!-- Row 12 -->
                <div class="flex items-center justify-between gap-2 border-b border-dashed border-slate-200 pb-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">10:45 - 10:55</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Phát biểu chỉ đạo</span>
                </div>
                <!-- Row 13 -->
                <div class="flex items-center justify-between gap-2">
                    <span class="font-extrabold text-[#062AAD] shrink-0 w-24">10:55 - 11:00</span>
                    <span class="text-slate-400 text-[10px] font-mono">--------------------</span>
                    <span class="text-slate-700 font-medium text-right flex-1">Chụp ảnh lưu niệm</span>
                </div>
            </div>

            <div class="pt-2">
                <a href="#" class="inline-flex items-center gap-2 border border-blue-200 text-[#062AAD] hover:bg-blue-50 font-bold text-body-xs rounded-full px-5 py-2.5 transition-colors shadow-sm">
                    Tải agenda chi tiết <i data-lucide="arrow-down" class="w-4 h-4"></i>
                </a>
            </div>
        </div>

        <!-- CỘT PHẢI: DIỄN GIẢ & BAN GIÁM KHẢO (6/12 CỘT) -->
        <div class="lg:col-span-6 space-y-6">
            <div class="flex items-center justify-between">
                <h2 class="text-h4 font-extrabold text-[#02185D]">Diễn giả & Ban giám khảo</h2>
                <a href="#" class="text-body-xs font-bold text-[#062AAD] hover:text-[#05A6F5] flex items-center gap-1 transition-colors">
                    Xem tất cả <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>

            <!-- LƯỚI 6 CARD DIỄN GIẢ (3x2 Grid) -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                <!-- Speaker 1 -->
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm text-center space-y-2 hover:-translate-y-1 transition-all">
                    <img src="assets/img/leader_female.jpg" alt="Phạm Thúy B" class="w-full aspect-square rounded-xl object-cover">
                    <div class="space-y-0.5">
                        <h4 class="text-[12px] font-extrabold text-[#02185D]">Phạm Thúy B</h4>
                        <p class="text-[10px] font-bold text-slate-500">Phó Giám Đốc</p>
                        <p class="text-[9px] font-bold text-slate-400">Trung Tâm CiNEC</p>
                    </div>
                    <a href="#" class="w-6 h-6 rounded-full bg-blue-50 text-[#062AAD] inline-flex items-center justify-center">
                        <i data-lucide="linkedin" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Speaker 2 -->
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm text-center space-y-2 hover:-translate-y-1 transition-all">
                    <img src="assets/img/leader_male1.jpg" alt="Nguyễn Văn A" class="w-full aspect-square rounded-xl object-cover">
                    <div class="space-y-0.5">
                        <h4 class="text-[12px] font-extrabold text-[#02185D]">Nguyễn Văn A</h4>
                        <p class="text-[10px] font-bold text-slate-500">Giám Đốc</p>
                        <p class="text-[9px] font-bold text-slate-400">Trung Tâm CiNEC</p>
                    </div>
                    <a href="#" class="w-6 h-6 rounded-full bg-blue-50 text-[#062AAD] inline-flex items-center justify-center">
                        <i data-lucide="linkedin" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Speaker 3 -->
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm text-center space-y-2 hover:-translate-y-1 transition-all">
                    <img src="assets/img/leader_male2.jpg" alt="Trần Trung C" class="w-full aspect-square rounded-xl object-cover">
                    <div class="space-y-0.5">
                        <h4 class="text-[12px] font-extrabold text-[#02185D]">Trần Trung C</h4>
                        <p class="text-[10px] font-bold text-slate-500">Giám Đốc</p>
                        <p class="text-[9px] font-bold text-slate-400">Trung Tâm CiNEC</p>
                    </div>
                    <a href="#" class="w-6 h-6 rounded-full bg-blue-50 text-[#062AAD] inline-flex items-center justify-center">
                        <i data-lucide="linkedin" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Speaker 4 -->
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm text-center space-y-2 hover:-translate-y-1 transition-all">
                    <img src="assets/img/leader_female.jpg" alt="Phạm Thúy B" class="w-full aspect-square rounded-xl object-cover">
                    <div class="space-y-0.5">
                        <h4 class="text-[12px] font-extrabold text-[#02185D]">Phạm Thúy B</h4>
                        <p class="text-[10px] font-bold text-slate-500">Phó Giám Đốc</p>
                        <p class="text-[9px] font-bold text-slate-400">Trung Tâm CiNEC</p>
                    </div>
                    <a href="#" class="w-6 h-6 rounded-full bg-blue-50 text-[#062AAD] inline-flex items-center justify-center">
                        <i data-lucide="linkedin" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Speaker 5 -->
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm text-center space-y-2 hover:-translate-y-1 transition-all">
                    <img src="assets/img/leader_male1.jpg" alt="Nguyễn Văn A" class="w-full aspect-square rounded-xl object-cover">
                    <div class="space-y-0.5">
                        <h4 class="text-[12px] font-extrabold text-[#02185D]">Nguyễn Văn A</h4>
                        <p class="text-[10px] font-bold text-slate-500">Giám Đốc</p>
                        <p class="text-[9px] font-bold text-slate-400">Trung Tâm CiNEC</p>
                    </div>
                    <a href="#" class="w-6 h-6 rounded-full bg-blue-50 text-[#062AAD] inline-flex items-center justify-center">
                        <i data-lucide="linkedin" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Speaker 6 -->
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm text-center space-y-2 hover:-translate-y-1 transition-all">
                    <img src="assets/img/leader_male2.jpg" alt="Trần Trung C" class="w-full aspect-square rounded-xl object-cover">
                    <div class="space-y-0.5">
                        <h4 class="text-[12px] font-extrabold text-[#02185D]">Trần Trung C</h4>
                        <p class="text-[10px] font-bold text-slate-500">Giám Đốc</p>
                        <p class="text-[9px] font-bold text-slate-400">Trung Tâm CiNEC</p>
                    </div>
                    <a href="#" class="w-6 h-6 rounded-full bg-blue-50 text-[#062AAD] inline-flex items-center justify-center">
                        <i data-lucide="linkedin" class="w-3.5 h-3.5"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- SECTION 3: THAM GIA ĐỂ NHẬN ĐƯỢC GÌ? (LEFT 7/12) & ĐỐI TƯỢNG THAM GIA (RIGHT 5/12) -->
<section class="py-8 bg-[#FAFCFF] pb-16">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- CONTAINER TRÁI: THAM GIA ĐỂ NHẬN ĐƯỢC GÌ? (7/12 CỘT) -->
        <div class="lg:col-span-7 bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-6">
            <h2 class="text-h4 font-extrabold text-[#02185D]">Tham gia để nhận được gì?</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Benefit 1 -->
                <div class="space-y-1">
                    <h3 class="text-body-xs font-extrabold text-[#062AAD]">Kết nối chuyên gia</h3>
                    <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                        Gặp gỡ các chuyên gia AI & chuyển đổi số hàng đầu
                    </p>
                </div>

                <!-- Benefit 2 -->
                <div class="space-y-1">
                    <h3 class="text-body-xs font-extrabold text-[#062AAD]">Tối ưu vận hành</h3>
                    <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                        Khám phá cách số hóa quy trình và nâng cao hiệu suất doanh nghiệp
                    </p>
                </div>

                <!-- Benefit 3 -->
                <div class="space-y-1">
                    <h3 class="text-body-xs font-extrabold text-[#062AAD]">Cập nhật xu hướng AI</h3>
                    <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                        Nắm bắt xu hướng AI mới nhất dành cho doanh nghiệp địa phương
                    </p>
                </div>

                <!-- Benefit 4 -->
                <div class="space-y-1">
                    <h3 class="text-body-xs font-extrabold text-[#062AAD]">Hỗ trợ chuyển đổi số</h3>
                    <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                        Tiếp cận chương trình hỗ trợ và nền tảng dành cho doanh nghiệp Cà Mau
                    </p>
                </div>
            </div>
        </div>

        <!-- CONTAINER PHẢI: ĐỐI TƯỢNG THAM GIA (5/12 CỘT) -->
        <div class="lg:col-span-5 bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-4">
            <h2 class="text-h4 font-extrabold text-[#02185D]">Đối tượng tham gia</h2>

            <ul class="space-y-3 text-body-xs text-slate-600 font-medium">
                <li class="flex items-start gap-2">
                    <span class="text-[#062AAD] font-extrabold">•</span>
                    <span>Doanh nghiệp vừa và nhỏ</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-[#062AAD] font-extrabold">•</span>
                    <span>Hộ kinh doanh, startup</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-[#062AAD] font-extrabold">•</span>
                    <span>Lãnh đạo, quản lý quan tâm ứng dụng AI & chuyển đổi số</span>
                </li>
            </ul>
        </div>

    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
