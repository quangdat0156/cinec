<?php
$page_title = "Giới Thiệu - CINEC Cà Mau";
require_once 'config/db.php';
require_once 'includes/header.php';
?>

<!-- TOÀN BỘ GIAO DIỆN GIỚI THIỆU: CHUẨN XÁC THEO FIGMA (NODE 115:2355) -->
<div class="bg-[#F7FAFD] min-h-screen pt-28 pb-20 overflow-hidden relative">

    <!-- Ảnh nền mờ phía trên (Hero Background Fade) -->
    <div class="absolute top-0 left-0 right-0 h-[620px] pointer-events-none opacity-40 mix-blend-multiply overflow-hidden z-0">
        <img src="assets/img/hero_bg_gioithieu.png" alt="CINEC Background" class="w-full h-full object-cover object-top">
        <div class="absolute inset-0 bg-gradient-to-b from-[#F7FAFD]/40 via-transparent to-[#F7FAFD]"></div>
    </div>

    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-24 relative z-10 space-y-12">

        <!-- ================================================================= -->
        <!-- SECTION 1: HERO & LỜI MỞ ĐẦU                                      -->
        <!-- ================================================================= -->
        <section class="space-y-8">
            <!-- Banner Tòa Nhà Trung Tâm Khởi Nghiệp CiNEC -->
            <div class="relative rounded-[32px] overflow-hidden border border-slate-200/80 shadow-md aspect-[16/8] md:aspect-[24/9] w-full bg-slate-900 group">
                <img src="assets/img/hero_bg_gioithieu.png" alt="Trung tâm Khởi nghiệp và Đổi mới sáng tạo Cà Mau" class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/50 via-transparent to-transparent"></div>
            </div>

            <!-- Tiêu đề & Lời giới thiệu trung tâm chuẩn Figma -->
            <div class="max-w-4xl mx-auto text-center space-y-3 pt-2">
                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-[28px] font-bold text-[#062AAD] tracking-tight">
                    [Trung tâm Khởi nghiệp và Đổi mới sáng tạo]
                </h1>
                <p class="text-sm md:text-base text-[#5B5B5B] leading-relaxed font-normal">
                    Trung tâm Khởi nghiệp và Đổi mới sáng tạo tỉnh Cà Mau thực hiện chức năng nghiên cứu, hoạt động sự nghiệp và cung cấp dịch vụ liên quan đến hỗ trợ và phát triển doanh nghiệp khởi nghiệp, hệ sinh thái khởi nghiệp, khởi nghiệp sáng tạo, thúc đẩy đổi mới sáng tạo của tỉnh Cà Mau, góp phần đổi mới mô hình tăng trưởng dựa trên nền tảng khoa học và công nghệ.
                </p>
            </div>
        </section>

        <!-- ================================================================= -->
        <!-- SECTION 2: TẦM NHÌN & SỨ MỆNH (2 CARD SONG SONG CHUẨN FIGMA)      -->
        <!-- ================================================================= -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1: Tầm Nhìn -->
            <div class="bg-white rounded-2xl p-6 md:p-8 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.25)] space-y-4 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-[rgba(5,166,245,0.1)] text-[#05A6F5] flex items-center justify-center shrink-0">
                        <i data-lucide="eye" class="w-6 h-6"></i>
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold text-[#062AAD]">Tầm Nhìn</h2>
                </div>
                <p class="text-sm md:text-base text-[#5B5B5B] leading-relaxed">
                    Đến 2030, CiNEC là đầu mối đổi mới sáng tạo dẫn dắt Đồng bằng sông Cửu Long, kết nối quốc gia và quốc tế.
                </p>
            </div>

            <!-- Card 2: Sứ Mệnh -->
            <div class="bg-white rounded-2xl p-6 md:p-8 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.25)] space-y-4 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-[rgba(5,166,245,0.1)] text-[#05A6F5] flex items-center justify-center shrink-0">
                        <i data-lucide="target" class="w-6 h-6"></i>
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold text-[#062AAD]">Sứ Mệnh</h2>
                </div>
                <p class="text-sm md:text-base text-[#5B5B5B] leading-relaxed">
                    Ươm tạo doanh nghiệp đổi mới, thúc đẩy ứng dụng khoa học, công nghệ và chuyển đổi số, góp phần chuyển đổi mô hình tăng trưởng bền vững cho tỉnh Cà Mau.
                </p>
            </div>
        </section>

        <!-- ================================================================= -->
        <!-- SECTION 3: GIÁ TRỊ CỐT LÕI (CARD BỌC 5 CỘT PHÂN CÁCH ĐỨNG)        -->
        <!-- ================================================================= -->
        <section class="bg-white rounded-2xl p-6 md:p-8 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.25)] space-y-8">
            <!-- Icon & Tiêu đề -->
            <div class="flex items-center justify-center gap-3">
                <div class="w-12 h-12 rounded-full bg-[rgba(5,166,245,0.1)] text-[#05A6F5] flex items-center justify-center shrink-0">
                    <i data-lucide="shield-check" class="w-6 h-6"></i>
                </div>
                <h2 class="text-xl md:text-2xl font-bold text-[#062AAD]">Giá Trị Cốt Lõi</h2>
            </div>

            <!-- 5 Cột giá trị với vạch ngăn mờ đứng (Figma Dividers) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-6 text-center divide-y md:divide-y-0 md:divide-x divide-[rgba(5,166,245,0.15)]">
                <!-- 1. Con Người -->
                <div class="pt-4 md:pt-0 md:px-3 space-y-2">
                    <h3 class="text-base font-semibold text-[#062AAD]">Con Người</h3>
                    <p class="text-[13px] text-[#5B5B5B] leading-relaxed font-normal">
                        Lấy con người làm trọng tâm phát triển.
                    </p>
                </div>

                <!-- 2. Đổi Mới -->
                <div class="pt-4 md:pt-0 md:px-3 space-y-2">
                    <h3 class="text-base font-semibold text-[#062AAD]">Đổi Mới</h3>
                    <p class="text-[13px] text-[#5B5B5B] leading-relaxed font-normal">
                        Đổi mới không ngừng nghỉ.
                    </p>
                </div>

                <!-- 3. Tôn Trọng -->
                <div class="pt-4 md:pt-0 md:px-3 space-y-2">
                    <h3 class="text-base font-semibold text-[#062AAD]">Tôn Trọng</h3>
                    <p class="text-[13px] text-[#5B5B5B] leading-relaxed font-normal">
                        Tôn trọng trong mọi hợp tác.
                    </p>
                </div>

                <!-- 4. Trách Nhiệm -->
                <div class="pt-4 md:pt-0 md:px-3 space-y-2">
                    <h3 class="text-base font-semibold text-[#062AAD]">Trách Nhiệm</h3>
                    <p class="text-[13px] text-[#5B5B5B] leading-relaxed font-normal">
                        Trách nhiệm với cộng đồng và tương lai.
                    </p>
                </div>

                <!-- 5. Hài Lòng -->
                <div class="pt-4 md:pt-0 md:px-3 space-y-2">
                    <h3 class="text-base font-semibold text-[#062AAD]">Hài Lòng</h3>
                    <p class="text-[13px] text-[#5B5B5B] leading-relaxed font-normal">
                        Lấy sự hài lòng của người dân và doanh nghiệp làm thước đo hiệu quả.
                    </p>
                </div>
            </div>
        </section>

        <!-- ================================================================= -->
        <!-- SECTION 4: CHỨC NĂNG (BỐ CỤC 2 CỘT: TEXT + HÌNH ẢNH THỰC TẾ)     -->
        <!-- ================================================================= -->
        <section class="bg-white rounded-[32px] p-6 md:p-10 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.25)] grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <!-- Cột trái: Văn bản chức năng -->
            <div class="lg:col-span-6 space-y-4">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-[#062AAD]">Chức Năng</h2>
                <p class="text-sm md:text-base text-[#5B5B5B] leading-relaxed font-normal">
                    Trung tâm Khởi nghiệp và Đổi mới sáng tạo tỉnh Cà Mau thực hiện chức năng nghiên cứu, hoạt động sự nghiệp và cung cấp dịch vụ liên quan đến hỗ trợ và phát triển doanh nghiệp khởi nghiệp, hệ sinh thái khởi nghiệp, khởi nghiệp sáng tạo, thúc đẩy đổi mới sáng tạo của tỉnh Cà Mau, góp phần đổi mới mô hình tăng trưởng dựa trên nền tảng khoa học và công nghệ.
                </p>
            </div>

            <!-- Cột phải: Hình ảnh văn phòng trung tâm CiNEC -->
            <div class="lg:col-span-6 rounded-2xl overflow-hidden border border-slate-100 shadow-sm aspect-[16/9] md:aspect-[16/10] bg-slate-100">
                <img src="assets/img/chuc_nang_office.png" alt="Không gian làm việc CiNEC" class="w-full h-full object-cover">
            </div>
        </section>

        <!-- ================================================================= -->
        <!-- SECTION 5: BAN LÃNH ĐẠO (ĐỒ HỌA VÒM CONG VÀ ẢNH CHÂN DUNG FIGMA) -->
        <!-- ================================================================= -->
        <section class="relative pt-6 pb-8 space-y-8">
            <!-- Đồ họa nền cong lượn sóng phía dưới -->
            <div class="absolute inset-x-0 bottom-[-40px] h-[400px] pointer-events-none opacity-30 mix-blend-multiply overflow-hidden -z-10">
                <img src="assets/img/bg_decor_gioithieu.png" alt="Background Decor" class="w-full h-full object-cover object-bottom">
            </div>

            <!-- Tiêu đề Ban Lãnh Đạo -->
            <div class="text-center space-y-2">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-[#062AAD]">Ban Lãnh Đạo</h2>
                <p class="text-sm md:text-base text-[#5B5B5B]">
                    Đội ngũ lãnh đạo tâm huyết, giàu kinh nghiệm trong lĩnh vực đổi mới sáng tạo
                </p>
            </div>

            <!-- Lưới 3 Card Lãnh Đạo -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-5xl mx-auto justify-center">
                
                <!-- 1. Phạm Thùy B -->
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] text-center flex flex-col items-center gap-3.5 hover:-translate-y-1.5 transition-all duration-300 group">
                    <!-- Khung vòm hình ảnh (Arch Decoration Figma) -->
                    <div class="w-[200px] h-[224px] rounded-lg bg-[#F3FBFF] relative overflow-hidden flex items-end justify-center shadow-inner">
                        <div class="w-[210px] h-[210px] rounded-t-full bg-[rgba(5,166,245,0.1)] absolute bottom-0"></div>
                        <img src="assets/img/leader_pham_thuy_b.png" alt="Phạm Thùy B" class="w-[185px] h-auto object-cover relative z-10 group-hover:scale-105 transition-transform duration-500">
                    </div>
                    
                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-[#062AAD]">Phạm Thùy B</h3>
                        <p class="text-xs text-slate-800 font-medium">Phó Giám Đốc</p>
                        <p class="text-[11px] text-slate-500 font-medium">Trung Tâm CiNEC</p>
                    </div>

                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-6 h-6 rounded border-2 border-[#062AAD] text-[#062AAD] flex items-center justify-center hover:bg-[#062AAD] hover:text-white transition-colors" aria-label="LinkedIn Profile">
                        <i data-lucide="linkedin" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- 2. Nguyễn Văn A (Giám Đốc) -->
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] text-center flex flex-col items-center gap-3.5 hover:-translate-y-1.5 transition-all duration-300 group">
                    <!-- Khung vòm hình ảnh (Arch Decoration Figma) -->
                    <div class="w-[200px] h-[224px] rounded-lg bg-[#F3FBFF] relative overflow-hidden flex items-end justify-center shadow-inner">
                        <div class="w-[210px] h-[210px] rounded-t-full bg-[rgba(5,166,245,0.1)] absolute bottom-0"></div>
                        <img src="assets/img/leader_nguyen_van_a.png" alt="Nguyễn Văn A" class="w-[185px] h-auto object-cover relative z-10 group-hover:scale-105 transition-transform duration-500">
                    </div>
                    
                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-[#062AAD]">Nguyễn Văn A</h3>
                        <p class="text-xs text-slate-800 font-medium">Giám Đốc</p>
                        <p class="text-[11px] text-slate-500 font-medium">Trung Tâm CiNEC</p>
                    </div>

                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-6 h-6 rounded border-2 border-[#062AAD] text-[#062AAD] flex items-center justify-center hover:bg-[#062AAD] hover:text-white transition-colors" aria-label="LinkedIn Profile">
                        <i data-lucide="linkedin" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- 3. Trần Trung C -->
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-[0_2px_4px_0_rgba(0,0,0,0.1)] text-center flex flex-col items-center gap-3.5 hover:-translate-y-1.5 transition-all duration-300 group">
                    <!-- Khung vòm hình ảnh (Arch Decoration Figma) -->
                    <div class="w-[200px] h-[224px] rounded-lg bg-[#F3FBFF] relative overflow-hidden flex items-end justify-center shadow-inner">
                        <div class="w-[210px] h-[210px] rounded-t-full bg-[rgba(5,166,245,0.1)] absolute bottom-0"></div>
                        <img src="assets/img/leader_tran_trung_c.png" alt="Trần Trung C" class="w-[185px] h-auto object-cover relative z-10 group-hover:scale-105 transition-transform duration-500">
                    </div>
                    
                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-[#062AAD]">Trần Trung C</h3>
                        <p class="text-xs text-slate-800 font-medium">Phó Giám Đốc</p>
                        <p class="text-[11px] text-slate-500 font-medium">Trung Tâm CiNEC</p>
                    </div>

                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-6 h-6 rounded border-2 border-[#062AAD] text-[#062AAD] flex items-center justify-center hover:bg-[#062AAD] hover:text-white transition-colors" aria-label="LinkedIn Profile">
                        <i data-lucide="linkedin" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

            </div>
        </section>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
