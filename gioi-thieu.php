<?php
$page_title = "Giới Thiệu - CINEC Cà Mau";
require_once 'config/db.php';
require_once 'includes/header.php';
?>

<!-- CHỦ ĐỀ GIỚI THIỆU: KHỚP 100% FIGMA & ẢNH MẪU CỦA BẠN -->
<div class="bg-[#FAFCFF] min-h-screen pt-28 pb-16">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-10">

        <!-- SECTION 1: HERO TOP BANNER ARCHITECTURAL BUILDING IMAGE & INTRO -->
        <div class="space-y-6">
            <!-- Card Ảnh Tòa Nhà Trung Tâm Khởi Nghiệp Cà Mau -->
            <div class="relative rounded-[32px] overflow-hidden border border-slate-200/80 shadow-md aspect-[21/9] md:aspect-[25/9] w-full bg-slate-900">
                <img src="assets/img/intro-building.jpg" alt="Trung tâm Khởi nghiệp CiNEC" class="w-full h-full object-cover">
                <!-- Overlay gradient nhẹ bên dưới -->
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 via-transparent to-transparent"></div>
            </div>

            <!-- Tiêu đề & Đoạn Văn Giới Thiệu Chuẩn Figma -->
            <div class="max-w-4xl mx-auto text-center space-y-4 pt-2">
                <h1 class="text-h4 md:text-h3 font-extrabold text-[#062AAD] tracking-tight">
                    [Trung tâm Khởi nghiệp và Đổi mới sáng tạo]
                </h1>
                <p class="text-body-xs md:text-body-sm text-slate-600 leading-relaxed font-normal">
                    Trung tâm Khởi nghiệp và Đổi mới sáng tạo tỉnh Cà Mau thực hiện chức năng nghiên cứu, hoạt động sự nghiệp và cung cấp dịch vụ liên quan đến hỗ trợ và phát triển doanh nghiệp khởi nghiệp, hệ sinh thái khởi nghiệp, khởi nghiệp sáng tạo, thúc đẩy đổi mới sáng tạo của tỉnh Cà Mau, góp phần đổi mới mô hình tăng trưởng dựa trên nền tảng khoa học và công nghệ.
                </p>
            </div>
        </div>

        <!-- SECTION 2: TẦM NHÌN & SỨ MỆNH (2 CONTAINER TRẮNG SONG SONG) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1: Tầm Nhìn -->
            <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-3 flex items-start gap-4">
                <div class="w-12 h-12 rounded-full bg-blue-50 text-[#05A6F5] flex items-center justify-center shrink-0 border border-blue-100/60 mt-0.5">
                    <i data-lucide="eye" class="w-6 h-6"></i>
                </div>
                <div class="space-y-2">
                    <h2 class="text-h4 font-extrabold text-[#062AAD]">Tầm Nhìn</h2>
                    <p class="text-body-xs text-slate-500 leading-relaxed font-normal">
                        Đến 2030, CiNEC là đầu mối đổi mới sáng tạo dẫn dắt Đồng bằng sông Cửu Long, kết nối quốc gia và quốc tế.
                    </p>
                </div>
            </div>

            <!-- Card 2: Sứ Mệnh -->
            <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-3 flex items-start gap-4">
                <div class="w-12 h-12 rounded-full bg-blue-50 text-[#05A6F5] flex items-center justify-center shrink-0 border border-blue-100/60 mt-0.5">
                    <i data-lucide="target" class="w-6 h-6"></i>
                </div>
                <div class="space-y-2">
                    <h2 class="text-h4 font-extrabold text-[#062AAD]">Sứ Mệnh</h2>
                    <p class="text-body-xs text-slate-500 leading-relaxed font-normal">
                        Ươm tạo doanh nghiệp đổi mới, thúc đẩy ứng dụng khoa học, công nghệ và chuyển đổi số, góp phần chuyển đổi mô hình tăng trưởng bền vững cho tỉnh Cà Mau.
                    </p>
                </div>
            </div>
        </div>

        <!-- SECTION 3: GIÁ TRỊ CỐT LÕI (1 CONTAINER TRẮNG BỌC 5 CỘT) -->
        <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-8">
            <!-- Icon & Tiêu đề chính -->
            <div class="text-center space-y-2">
                <div class="w-12 h-12 rounded-full bg-blue-50 text-[#05A6F5] flex items-center justify-center mx-auto border border-blue-100/60">
                    <i data-lucide="shield-check" class="w-6 h-6"></i>
                </div>
                <h2 class="text-h4 font-extrabold text-[#062AAD]">Giá Trị Cốt Lõi</h2>
            </div>

            <!-- Lưới 5 Cột Giá Trị Cốt Lõi -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 text-center divide-y md:divide-y-0 md:divide-x divide-slate-100">
                <!-- 1. Con Người -->
                <div class="pt-4 md:pt-0 md:px-3 space-y-1.5">
                    <h3 class="text-body-xs font-extrabold text-[#062AAD]">Con Người</h3>
                    <p class="text-[11px] text-slate-500 leading-snug font-normal">
                        Lấy con người làm trọng tâm phát triển.
                    </p>
                </div>

                <!-- 2. Đổi Mới -->
                <div class="pt-4 md:pt-0 md:px-3 space-y-1.5">
                    <h3 class="text-body-xs font-extrabold text-[#062AAD]">Đổi Mới</h3>
                    <p class="text-[11px] text-slate-500 leading-snug font-normal">
                        Tôn trọng trong mọi hợp tác.
                    </p>
                </div>

                <!-- 3. Tôn Trọng -->
                <div class="pt-4 md:pt-0 md:px-3 space-y-1.5">
                    <h3 class="text-body-xs font-extrabold text-[#062AAD]">Tôn Trọng</h3>
                    <p class="text-[11px] text-slate-500 leading-snug font-normal">
                        Đổi mới không ngừng nghỉ.
                    </p>
                </div>

                <!-- 4. Trách Nhiệm -->
                <div class="pt-4 md:pt-0 md:px-3 space-y-1.5">
                    <h3 class="text-body-xs font-extrabold text-[#062AAD]">Trách Nhiệm</h3>
                    <p class="text-[11px] text-slate-500 leading-snug font-normal">
                        Trách nhiệm với cộng đồng và tương lai.
                    </p>
                </div>

                <!-- 5. Hài Lòng -->
                <div class="pt-4 md:pt-0 md:px-3 space-y-1.5">
                    <h3 class="text-body-xs font-extrabold text-[#062AAD]">Hài Lòng</h3>
                    <p class="text-[11px] text-slate-500 leading-snug font-normal">
                        Lấy sự hài lòng của người dân và doanh nghiệp làm thước đo hiệu quả.
                    </p>
                </div>
            </div>
        </div>

        <!-- SECTION 4: CHỨC NĂNG (TEXT BÊN TRÁI + ẢNH NỘI THẤT BÊN PHẢI) -->
        <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <!-- Cột trái: Văn bản chức năng -->
            <div class="lg:col-span-6 space-y-4">
                <h2 class="text-h3 font-extrabold text-[#062AAD]">Chức Năng</h2>
                <p class="text-body-xs text-slate-600 leading-relaxed font-normal">
                    Trung tâm Khởi nghiệp và Đổi mới sáng tạo tỉnh Cà Mau thực hiện chức năng nghiên cứu, hoạt động sự nghiệp và cung cấp dịch vụ liên quan đến hỗ trợ và phát triển doanh nghiệp khởi nghiệp, hệ sinh thái khởi nghiệp, khởi nghiệp sáng tạo, thúc đẩy đổi mới sáng tạo của tỉnh Cà Mau, góp phần đổi mới mô hình tăng trưởng dựa trên nền tảng khoa học và công nghệ.
                </p>
            </div>

            <!-- Cột phải: Ảnh nội thất trung tâm CiNEC -->
            <div class="lg:col-span-6 rounded-2xl overflow-hidden border border-slate-200/70 shadow-sm aspect-[16/10] bg-slate-100">
                <img src="assets/img/office.png" alt="Không gian làm việc CiNEC" class="w-full h-full object-cover">
            </div>
        </div>

    </div>

    <!-- SECTION 5: BAN LÃNH ĐẠO (NỀN GRADIENT SÓNG NƯỚC XANH VÀ 3 CARD) -->
    <div class="relative mt-16 pt-16 pb-20 bg-gradient-to-b from-[#FAFCFF] via-[#EBF5FF] to-[#02185D]/10 overflow-hidden">
        
        <!-- Đồ họa sóng nước mờ dưới nền (SVG Wave Decor) -->
        <svg class="absolute bottom-0 left-0 right-0 w-full h-48 opacity-30 pointer-events-none" viewBox="0 0 1440 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 100 C300 160 600 40 900 120 C1200 200 1440 80 1440 80 V200 H0 Z" fill="#05A6F5"/>
            <path d="M0 140 C400 80 700 180 1100 100 C1300 60 1440 120 1440 120 V200 H0 Z" fill="#062AAD" opacity="0.6"/>
        </svg>

        <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 relative z-10 space-y-10">
            <!-- Tiêu đề Ban Lãnh Đạo -->
            <div class="text-center space-y-1">
                <h2 class="text-h3 font-extrabold text-[#02185D]">Ban Lãnh Đạo</h2>
                <p class="text-body-xs text-slate-500 font-medium">
                    Đội ngũ lãnh đạo tâm huyết, giàu kinh nghiệm trong lĩnh vực đổi mới sáng tạo
                </p>
            </div>

            <!-- Lưới 3 Card Ban Lãnh Đạo -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                
                <!-- Leader 1: Phạm Thúy B -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-premium text-center space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100 shadow-sm">
                        <img src="assets/img/leader_female.jpg" alt="Phạm Thúy B" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-body-md font-extrabold text-[#02185D]">Phạm Thúy B</h3>
                        <p class="text-body-xs font-bold text-slate-500">Phó Giám Đốc</p>
                        <p class="text-[11px] font-extrabold text-slate-400">Trung Tâm CiNEC</p>
                    </div>
                    <a href="#" class="inline-flex w-8 h-8 rounded-full bg-blue-50 text-[#062AAD] hover:bg-[#062AAD] hover:text-white items-center justify-center transition-colors">
                        <i data-lucide="linkedin" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Leader 2: Nguyễn Văn A (Giám đốc) -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-premium text-center space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100 shadow-sm">
                        <img src="assets/img/leader_male1.jpg" alt="Nguyễn Văn A" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-body-md font-extrabold text-[#02185D]">Nguyễn Văn A</h3>
                        <p class="text-body-xs font-bold text-slate-500">Giám Đốc</p>
                        <p class="text-[11px] font-extrabold text-slate-400">Trung Tâm CiNEC</p>
                    </div>
                    <a href="#" class="inline-flex w-8 h-8 rounded-full bg-blue-50 text-[#062AAD] hover:bg-[#062AAD] hover:text-white items-center justify-center transition-colors">
                        <i data-lucide="linkedin" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Leader 3: Trần Trung C -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-premium text-center space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-100 shadow-sm">
                        <img src="assets/img/leader_male2.jpg" alt="Trần Trung C" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-body-md font-extrabold text-[#02185D]">Trần Trung C</h3>
                        <p class="text-body-xs font-bold text-slate-500">Phó Giám Đốc</p>
                        <p class="text-[11px] font-extrabold text-slate-400">Trung Tâm CiNEC</p>
                    </div>
                    <a href="#" class="inline-flex w-8 h-8 rounded-full bg-blue-50 text-[#062AAD] hover:bg-[#062AAD] hover:text-white items-center justify-center transition-colors">
                        <i data-lucide="linkedin" class="w-4 h-4"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
