<?php
$page_title = "CINEC - Hệ sinh thái Đổi mới sáng tạo & Khởi nghiệp Cà Mau - Bạc Liêu";
require_once 'config/db.php';
require_once 'includes/header.php';

// Lấy dữ liệu mẫu cho trang chủ
$programs = get_programs();
$events = get_events(4);
$news = get_news(3);
$partners = get_partners();
?>

<!-- HERO SECTION: Khớp 100% Figma -->
<section class="relative bg-white overflow-hidden pt-32 pb-20 lg:pt-36 lg:pb-24 min-h-[620px] lg:min-h-[740px] flex items-center">
    <!-- Ảnh phong cảnh Cà Mau (mũi tàu Bạc Liêu) chiếm nửa màn hình bên phải -->
    <div class="absolute right-0 top-0 bottom-0 w-full lg:w-[48%] h-full hidden lg:block overflow-hidden z-0">
        <img src="assets/img/hero-bg.jpg" alt="CINEC Campus" class="w-full h-full object-cover" style="object-position: center 15%;">
        <!-- Gradient chuyển tiếp mượt mà sang trắng tinh khiết -->
        <div class="absolute inset-y-0 left-0 w-40 bg-gradient-to-r from-white to-transparent pointer-events-none"></div>
    </div>
    
    <!-- Nền ảnh di động -->
    <div class="absolute inset-0 bg-cover block lg:hidden z-0 opacity-20" style="background-image: url('assets/img/hero-bg.jpg'); background-position: center;"></div>
 
    <!-- Nội dung chính Hero -->
    <div class="relative max-w-[1440px] mx-auto w-full px-4 md:px-12 2xl:px-20 my-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center z-10">
        <!-- Cột trái: Văn bản & CTA (7/12 cột) -->
        <div class="lg:col-span-7 flex flex-col items-start text-left space-y-5 lg:space-y-7 text-slate-800">
            <!-- Tag INNOVATE TOGETHER -->
            <div class="inline-flex items-center gap-2 bg-blue-50/80 border border-blue-200/60 text-[#062AAD] px-4 py-1.5 rounded-full text-caption font-extrabold tracking-wider w-fit shadow-2xs">
                <span class="w-2 h-2 rounded-full bg-[#062AAD] animate-pulse"></span>
                INNOVATE TOGETHER
            </div>
            
            <!-- Tiêu đề chuẩn Figma -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl 2xl:text-[54px] font-black leading-[1.18] tracking-tight text-[#02185D]">
                Khởi đầu Cho <br> Một <span class="text-[#71A800] font-black">Tương Lai</span> <span class="font-playball text-[#71A800] text-5xl lg:text-7xl ml-1 inline-block transform -rotate-6 filter drop-shadow-xs">Mới</span>
            </h1>
            
            <!-- Mô tả chuẩn Figma -->
            <p class="text-body-sm md:text-body-lg text-slate-600 max-w-xl leading-relaxed font-normal">
                CiNEC là nền tảng kết nối con người, công nghệ và nguồn lực, ươm mầm ý tưởng - đồng hành cùng startup - kiến tạo giá trị - phát triển bền vững.
            </p>
            
            <!-- Nút bấm CTA chuẩn Figma -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 pt-2 w-full">
                <a href="chuong-trinh.php" class="group w-full sm:w-auto flex items-center justify-between sm:justify-start gap-4 bg-gradient-to-r from-[#05A6F5] to-[#062AAD] hover:from-[#062AAD] hover:to-[#02185D] text-white font-extrabold text-body-sm rounded-full pl-6 pr-2 py-2 shadow-md shadow-blue-500/25 hover:shadow-lg hover:shadow-blue-600/35 hover:-translate-y-0.5 transition-all duration-300">
                    <span>Khám Phá Chương Trình</span>
                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1 shadow-sm shrink-0">
                        <i data-lucide="arrow-right" class="w-5 h-5 text-[#062AAD]"></i>
                    </span>
                </a>
                
                <a href="gioi-thieu.php" class="group w-full sm:w-auto flex items-center justify-between sm:justify-start gap-4 bg-white/90 backdrop-blur-xs border border-slate-200/80 text-slate-700 hover:text-[#062AAD] hover:bg-slate-50 hover:border-slate-300 rounded-full pl-6 pr-2 py-2 transition-all duration-300 shadow-2xs hover:shadow-sm hover:-translate-y-0.5">
                    <span>Tìm Hiểu Về CiNEC</span>
                    <span class="w-10 h-10 rounded-full bg-slate-100/80 flex items-center justify-center transition-transform duration-300 group-hover:scale-105 shrink-0">
                        <i data-lucide="play" class="w-4 h-4 text-slate-500 fill-slate-500"></i>
                    </span>
                </a>
            </div>
        </div>
        
        <!-- Cột phải giữ khoảng trống layout Grid (5/12 cột) -->
        <div class="lg:col-span-5 hidden lg:block"></div>
    </div>
 
    <!-- Hộp Widget Video Play tròn nằm đè góc dưới trái của ảnh phong cảnh chuẩn Figma -->
    <div class="hidden lg:block absolute right-4 md:right-12 2xl:right-20 bottom-28 z-20">
        <a href="gioi-thieu.php" class="group flex items-center gap-4 bg-[#02185D]/70 backdrop-blur-xl border border-white/25 rounded-[24px] p-3.5 pl-4 pr-6 shadow-2xl hover:shadow-glow-blue transition-all duration-300 hover:bg-[#02185D]/85 hover:-translate-y-1 cursor-pointer max-w-[320px]">
            <div class="w-12 h-12 rounded-full bg-[#C1FF72] flex items-center justify-center text-slate-900 shadow-lg group-hover:scale-105 transition-transform duration-300 shrink-0 relative">
                <span class="absolute inset-0 rounded-full bg-[#C1FF72]/40 animate-ping"></span>
                <i data-lucide="play" class="w-5 h-5 text-slate-900 fill-slate-900 ml-0.5 relative z-10"></i>
            </div>
            <div class="text-left text-white space-y-0.5 min-w-[160px]">
                <span class="text-[11px] font-extrabold block leading-tight text-slate-100">CiNEC - Nơi khơi nguồn<br>đổi mới sáng tạo</span>
                <span class="text-[9px] font-extrabold text-[#C1FF72] block uppercase tracking-widest mt-1">Xem video giới thiệu</span>
            </div>
        </a>
    </div>
</section>

<!-- BANNER STATS NỔI NẰM GIỮA HAI SECTION -->
<div class="relative w-full lg:max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 z-20 -mt-16 lg:-mt-20">
    <div class="bg-white/95 backdrop-blur-md rounded-3xl shadow-hover-card border border-slate-200/80 p-6 md:p-8 grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 items-center">
        <!-- Stat 1 -->
        <div class="flex items-center gap-4 group">
            <div class="w-13 h-13 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center shrink-0 border border-blue-100/60 shadow-2xs group-hover:scale-105 group-hover:bg-blue-100/70 transition-all">
                <i data-lucide="calendar" class="w-6 h-6"></i>
            </div>
            <div>
                <span class="stat-counter text-3xl lg:text-4xl font-black text-[#062AAD] tracking-tight block leading-none" data-target="120+">120+</span>
                <span class="text-[11px] text-slate-500 font-bold block mt-1.5">Sự kiện đã tổ chức</span>
            </div>
        </div>

        <!-- Stat 2 -->
        <div class="flex items-center gap-4 group">
            <div class="w-13 h-13 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center shrink-0 border border-blue-100/60 shadow-2xs group-hover:scale-105 group-hover:bg-blue-100/70 transition-all">
                <i data-lucide="rocket" class="w-6 h-6"></i>
            </div>
            <div>
                <span class="stat-counter text-3xl lg:text-4xl font-black text-[#062AAD] tracking-tight block leading-none" data-target="350+">350+</span>
                <span class="text-[11px] text-slate-500 font-bold block mt-1.5">Starups được hỗ trợ</span>
            </div>
        </div>

        <!-- Stat 3 -->
        <div class="flex items-center gap-4 group">
            <div class="w-13 h-13 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center shrink-0 border border-blue-100/60 shadow-2xs group-hover:scale-105 group-hover:bg-blue-100/70 transition-all">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <div>
                <span class="stat-counter text-3xl lg:text-4xl font-black text-[#062AAD] tracking-tight block leading-none" data-target="180+">180+</span>
                <span class="text-[11px] text-slate-500 font-bold block mt-1.5">Mentors & Chuyên gia</span>
            </div>
        </div>

        <!-- Stat 4 -->
        <div class="flex items-center gap-4 group">
            <div class="w-13 h-13 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center shrink-0 border border-blue-100/60 shadow-2xs group-hover:scale-105 group-hover:bg-blue-100/70 transition-all">
                <i data-lucide="globe" class="w-6 h-6"></i>
            </div>
            <div>
                <span class="stat-counter text-3xl lg:text-4xl font-black text-[#062AAD] tracking-tight block leading-none" data-target="25+">25+</span>
                <span class="text-[11px] text-slate-500 font-bold block mt-1.5">Đối tác trong & ngoài nước</span>
            </div>
        </div>
    </div>
</div>

<!-- SECTION SERVICES (Sơ đồ Mindmap Dịch Vụ Hỗ Trợ Đổi Mới Sáng Tạo) -->
<section id="services-section" class="pt-16 pb-8 bg-[#F4F8FC]">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-8">
        <div class="text-left max-w-2xl space-y-2.5">
            <span class="text-body-xs font-black text-[#062AAD] uppercase tracking-widest block">CHƯƠNG TRÌNH NỔI BẬT</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-[#02185D] leading-[1.25] tracking-tight">Đồng hành cùng bạn <br class="hidden lg:inline"> trên hành trình đổi mới</h2>
        </div>

        <!-- MOCKUP MINDMAP TRỰC QUAN FIGMA (Desktop 1440px) -->
        <div class="hidden lg:block relative w-[1200px] h-[500px] mx-auto">
            <!-- Vòng tròn SVG vẽ kết nối gấp khúc vuông góc (Orthogonal) chuẩn Figma -->
            <svg class="absolute inset-0 w-full h-full pointer-events-none" viewBox="0 0 1200 500">
                <!-- Nhánh bên trái (Màu xanh dương) -->
                <!-- C1: Chính sách & Pháp lý (390, 81) xuất phát từ (515, 165) - Bo góc R=16px -->
                <path d="M 390 81 H 499 Q 515 81 515 97 V 165" stroke="#05A6F5" stroke-width="1.5" stroke-dasharray="5 4" fill="none"/>
                <!-- C2: Viện - Trường (295, 181) xuất phát từ (484, 219) - Bo góc kép R=8px -->
                <path d="M 295 181 H 392 Q 400 181 400 189 V 211 Q 400 219 408 219 H 484" stroke="#05A6F5" stroke-width="1.5" stroke-dasharray="5 4" fill="none"/>
                <!-- C3: Kết nối Thị trường (295, 301) xuất phát từ (484, 281) - Bo góc kép R=8px -->
                <path d="M 295 301 H 392 Q 400 301 400 293 V 289 Q 400 281 408 281 H 484" stroke="#05A6F5" stroke-width="1.5" stroke-dasharray="5 4" fill="none"/>
                <!-- C4: Không gian Sáng tạo (390, 401) xuất phát từ (515, 335) - Bo góc R=16px -->
                <path d="M 390 401 H 499 Q 515 401 515 385 V 335" stroke="#05A6F5" stroke-width="1.5" stroke-dasharray="5 4" fill="none"/>
                
                <!-- Nhánh bên phải (Màu xanh lá) -->
                <!-- C5: Đào tạo & Phát triển (810, 81) xuất phát từ (685, 165) - Bo góc R=16px -->
                <path d="M 810 81 H 701 Q 685 81 685 97 V 165" stroke="#71A800" stroke-width="1.5" stroke-dasharray="5 4" fill="none"/>
                <!-- C6: Vốn & Đầu tư (905, 181) xuất phát từ (716, 219) - Bo góc kép R=8px -->
                <path d="M 905 181 H 758 Q 750 181 750 189 V 211 Q 750 219 742 219 H 716" stroke="#71A800" stroke-width="1.5" stroke-dasharray="5 4" fill="none"/>
                <!-- C7: Ươm tạo & Tăng tốc (905, 301) xuất phát từ (716, 281) - Bo góc kép R=8px -->
                <path d="M 905 301 H 758 Q 750 301 750 293 V 289 Q 750 281 742 281 H 716" stroke="#71A800" stroke-width="1.5" stroke-dasharray="5 4" fill="none"/>
                <!-- C8: Mentor & Cố vấn (810, 401) xuất phát từ (685, 335) - Bo góc R=16px -->
                <path d="M 810 401 H 701 Q 685 401 685 385 V 335" stroke="#71A800" stroke-width="1.5" stroke-dasharray="5 4" fill="none"/>
                
                <!-- Các chấm tròn công nghệ kết nối xuất phát từ tâm R=120, tâm thực (600, 250) -->
                <circle cx="515" cy="165" r="3.5" fill="#062AAD"/>
                <circle cx="484" cy="219" r="3.5" fill="#062AAD"/>
                <circle cx="484" cy="281" r="3.5" fill="#062AAD"/>
                <circle cx="515" cy="335" r="3.5" fill="#062AAD"/>
                
                <circle cx="685" cy="165" r="3.5" fill="#71A800"/>
                <circle cx="716" cy="219" r="3.5" fill="#71A800"/>
                <circle cx="716" cy="281" r="3.5" fill="#71A800"/>
                <circle cx="685" cy="335" r="3.5" fill="#71A800"/>
                
                <!-- Đầu nối vào card -->
                <circle cx="390" cy="81" r="3.5" fill="#062AAD"/>
                <circle cx="295" cy="181" r="3.5" fill="#062AAD"/>
                <circle cx="295" cy="301" r="3.5" fill="#062AAD"/>
                <circle cx="390" cy="401" r="3.5" fill="#062AAD"/>
                
                <circle cx="810" cy="81" r="3.5" fill="#71A800"/>
                <circle cx="905" cy="181" r="3.5" fill="#71A800"/>
                <circle cx="905" cy="301" r="3.5" fill="#71A800"/>
                <circle cx="810" cy="401" r="3.5" fill="#71A800"/>
            </svg>

            <!-- TÂM TRÒN: CINEC LOGO TRÒN KÉP FIGMA (Đường kính 240px chuẩn Figma, nền trắng tinh khiết không viền thừa) -->
            <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10 w-[240px] h-[240px] bg-white/95 backdrop-blur-md rounded-full border border-slate-200/90 shadow-hover-card flex justify-center items-center p-2.5">
                <div class="w-[218px] h-[218px] rounded-full border border-dashed border-[#71A800]/30 flex flex-col justify-center items-center p-3 text-center bg-gradient-to-b from-white to-slate-50/50">
                    <!-- Logo CINEC -->
                    <img src="assets/img/logo-web-cinec.png" alt="CiNEC Logo" class="h-7 w-auto mb-2.5 object-contain">
                    
                    <p class="text-[10px] text-slate-500 font-bold leading-normal">
                        Kết nối - Ươm tạo - Tăng tốc<br>
                        Kiến tạo tương lai cho<br>
                        Cà Mau và cộng đồng
                    </p>
                </div>
            </div>

            <!-- CÁC NÚT DỊCH VỤ XUNG QUANH (Bố cục hình cánh cung ôm tròn, w-280px rộng rãi, bo tròn 18px chuẩn Figma) -->
            <!-- 1. Chính sách & Pháp lý (Trái 1 - Gần tâm) -->
            <div class="absolute left-[110px] top-[40px] w-[280px] h-[82px] bg-white/95 backdrop-blur-xs border border-slate-200/80 rounded-[18px] px-4 py-3 shadow-premium hover:border-[#05A6F5] hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-full bg-[#E8F5FF] text-[#05A6F5] flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                    <i data-lucide="scale" class="w-4.5 h-4.5"></i>
                </div>
                <div class="text-left min-w-0">
                    <span class="text-[13px] font-extrabold text-[#062AAD] block leading-tight">Chính sách & Pháp lý</span>
                    <span class="text-[10px] text-slate-500 font-medium block mt-0.5 leading-snug">Quy định pháp luật và bảo hộ sở hữu trí tuệ</span>
                </div>
            </div>

            <!-- 2. Viện - Trường (Trái 2 - Xa tâm) -->
            <div class="absolute left-[15px] top-[140px] w-[280px] h-[82px] bg-white/95 backdrop-blur-xs border border-slate-200/80 rounded-[18px] px-4 py-3 shadow-premium hover:border-[#05A6F5] hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-full bg-[#E8F5FF] text-[#05A6F5] flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                    <i data-lucide="landmark" class="w-4.5 h-4.5"></i>
                </div>
                <div class="text-left min-w-0">
                    <span class="text-[13px] font-extrabold text-[#062AAD] block leading-tight">Viện - Trường</span>
                    <span class="text-[10px] text-slate-500 font-medium block mt-0.5 leading-snug">Chuyển giao công nghệ và hợp tác nhân sự</span>
                </div>
            </div>

            <!-- 3. Kết nối Thị trường (Trái 3 - Xa tâm) -->
            <div class="absolute left-[15px] top-[260px] w-[280px] h-[82px] bg-white/95 backdrop-blur-xs border border-slate-200/80 rounded-[18px] px-4 py-3 shadow-premium hover:border-[#05A6F5] hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-full bg-[#E8F5FF] text-[#05A6F5] flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                    <i data-lucide="trending-up" class="w-4.5 h-4.5"></i>
                </div>
                <div class="text-left min-w-0">
                    <span class="text-[13px] font-extrabold text-[#062AAD] block leading-tight">Kết nối Thị trường</span>
                    <span class="text-[10px] text-slate-500 font-medium block mt-0.5 leading-snug">Mở rộng thị trường và kết nối đối tác</span>
                </div>
            </div>

            <!-- 4. Không gian Sáng tạo (Trái 4 - Gần tâm) -->
            <div class="absolute left-[110px] top-[360px] w-[280px] h-[82px] bg-white/95 backdrop-blur-xs border border-slate-200/80 rounded-[18px] px-4 py-3 shadow-premium hover:border-[#05A6F5] hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-full bg-[#E8F5FF] text-[#05A6F5] flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                    <i data-lucide="activity" class="w-4.5 h-4.5"></i>
                </div>
                <div class="text-left min-w-0">
                    <span class="text-[13px] font-extrabold text-[#062AAD] block leading-tight">Không gian Sáng tạo</span>
                    <span class="text-[10px] text-slate-500 font-medium block mt-0.5 leading-snug">Workspace hiện đại và hạ tầng kỹ thuật</span>
                </div>
            </div>

            <!-- 5. Đào tạo & Phát triển (Phải 1 - Gần tâm) -->
            <div class="absolute right-[110px] top-[40px] w-[280px] h-[82px] bg-white/95 backdrop-blur-xs border border-slate-200/80 rounded-[18px] px-4 py-3 shadow-premium hover:border-lime-400 hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-full bg-[#F0FBE0] text-[#71A800] flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                    <i data-lucide="graduation-cap" class="w-4.5 h-4.5"></i>
                </div>
                <div class="text-left min-w-0">
                    <span class="text-[13px] font-extrabold text-[#71A800] block leading-tight">Đào tạo & Phát triển</span>
                    <span class="text-[10px] text-slate-500 font-medium block mt-0.5 leading-snug">Kỹ năng kinh doanh và quản lý chuyên nghiệp</span>
                </div>
            </div>

            <!-- 6. Vốn & Đầu tư (Phải 2 - Xa tâm) -->
            <div class="absolute right-[15px] top-[140px] w-[280px] h-[82px] bg-white/95 backdrop-blur-xs border border-slate-200/80 rounded-[18px] px-4 py-3 shadow-premium hover:border-lime-400 hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-full bg-[#F0FBE0] text-[#71A800] flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                    <i data-lucide="dollar-sign" class="w-4.5 h-4.5"></i>
                </div>
                <div class="text-left min-w-0">
                    <span class="text-[13px] font-extrabold text-[#71A800] block leading-tight">Vốn & Đầu tư</span>
                    <span class="text-[10px] text-slate-500 font-medium block mt-0.5 leading-snug">Quy định pháp luật và bảo hộ sở hữu trí tuệ</span>
                </div>
            </div>

            <!-- 7. Ươm tạo & Tăng tốc (Phải 3 - Xa tâm) -->
            <div class="absolute right-[15px] top-[260px] w-[280px] h-[82px] bg-white/95 backdrop-blur-xs border border-slate-200/80 rounded-[18px] px-4 py-3 shadow-premium hover:border-lime-400 hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-full bg-[#F0FBE0] text-[#71A800] flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                    <i data-lucide="leaf" class="w-4.5 h-4.5"></i>
                </div>
                <div class="text-left min-w-0">
                    <span class="text-[13px] font-extrabold text-[#71A800] block leading-tight">Ươm tạo & Tăng tốc</span>
                    <span class="text-[10px] text-slate-500 font-medium block mt-0.5 leading-snug">Môi trường chuyên nghiệp và lộ trình đào tạo</span>
                </div>
            </div>

            <!-- 8. Mentor & Cố vấn (Phải 4 - Gần tâm) -->
            <div class="absolute right-[110px] top-[360px] w-[280px] h-[82px] bg-white/95 backdrop-blur-xs border border-slate-200/80 rounded-[18px] px-4 py-3 shadow-premium hover:border-lime-400 hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-full bg-[#F0FBE0] text-[#71A800] flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                    <i data-lucide="users" class="w-4.5 h-4.5"></i>
                </div>
                <div class="text-left min-w-0">
                    <span class="text-[13px] font-extrabold text-[#71A800] block leading-tight">Mentor & Cố vấn</span>
                    <span class="text-[10px] text-slate-500 font-medium block mt-0.5 leading-snug">Mạng lưới chuyên gia và hỗ trợ chiến lược</span>
                </div>
            </div>
        </div>

        <!-- MÓC NỐI MOBILE DRAWER LIST (Mobile 402px) -->
        <div class="block lg:hidden grid grid-cols-1 md:grid-cols-2 gap-4">
            <?php 
            $services = [
                ['name' => 'Chính sách & Pháp lý', 'icon' => 'scale'],
                ['name' => 'Viện - Trường', 'icon' => 'landmark'],
                ['name' => 'Kết nối Thị trường', 'icon' => 'trending-up'],
                ['name' => 'Không gian Sáng tạo', 'icon' => 'activity'],
                ['name' => 'Đào tạo & Phát triển', 'icon' => 'graduation-cap'],
                ['name' => 'Vốn & Đầu tư', 'icon' => 'dollar-sign'],
                ['name' => 'Ươm tạo & Tăng tốc', 'icon' => 'leaf'],
                ['name' => 'Mentor & Cố vấn', 'icon' => 'users']
            ];
            foreach ($services as $srv):
            ?>
                <div class="bg-white border border-slate-200/80 rounded-2xl px-5 py-4 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#062AAD] flex items-center justify-center shrink-0 border border-blue-100/60 shadow-2xs">
                        <i data-lucide="<?php echo $srv['icon']; ?>" class="w-5 h-5"></i>
                    </div>
                    <span class="text-body-xs font-bold text-slate-800"><?php echo $srv['name']; ?></span>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- SECTION SỰ KIỆN & TIN TỨC (Split Layout 2 cột Desktop bọc trong card trắng lớn chuẩn Figma) -->
<section class="pt-10 pb-8 bg-[#FAFCFF] border-t border-slate-100/80">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- CỘT TRÁI: Sự kiện sắp diễn ra bọc trong Card lớn (6/12 cột) -->
        <div class="lg:col-span-6 bg-white border border-slate-200/80 rounded-[28px] shadow-sm hover:shadow-premium transition-all duration-300 p-6 md:p-8 space-y-5">
            <div class="flex justify-between items-center border-b border-slate-100 pb-3.5">
                <h3 class="text-body-md font-extrabold text-[#062AAD] uppercase tracking-wider">SỰ KIỆN SẮP DIỄN RA</h3>
                <a href="su-kien.php" class="text-body-xs font-bold text-[#05A6F5] hover:text-[#062AAD] transition-colors flex items-center gap-1 group">
                    <span>Xem tất cả</span>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform"></i>
                </a>
            </div>
            
            <!-- Danh sách sự kiện mẫu Figma -->
            <div class="space-y-3.5 mt-3">
                <?php foreach ($events as $event): ?>
                    <div class="bg-white border border-slate-100 rounded-2xl p-3.5 hover:shadow-hover-card hover:-translate-y-0.5 hover:border-blue-200/70 transition-all duration-300 flex items-center justify-between gap-4 group cursor-pointer">
                        <div class="flex items-center gap-4 min-w-0 flex-1">
                            <!-- Khối lịch ngày tháng chuẩn Figma -->
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-b from-blue-50 to-blue-100/50 text-[#062AAD] flex flex-col justify-center items-center shrink-0 font-extrabold border border-blue-200/60 shadow-2xs group-hover:scale-105 transition-transform">
                                <span class="text-body-lg leading-none font-black"><?php echo $event['date_day']; ?></span>
                                <span class="text-[10px] uppercase mt-1 leading-none text-slate-400 font-bold"><?php echo $event['date_month']; ?></span>
                            </div>
                            
                            <!-- Thông tin sự kiện -->
                            <div class="min-w-0 space-y-1 flex-1">
                                <h4 class="text-body-xs font-bold text-slate-800 group-hover:text-[#062AAD] transition-colors truncate">
                                    <?php echo $event['title']; ?>
                                </h4>
                                <div class="flex items-center gap-3 text-[10px] text-slate-400 font-medium">
                                    <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#05A6F5]"></i> <?php echo $event['time']; ?></span>
                                    <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#05A6F5]"></i> <?php echo $event['location']; ?></span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Nút mũi tên tròn xanh nhạt chuẩn Figma -->
                        <div class="w-8 h-8 rounded-full bg-blue-50 text-[#062AAD] group-hover:bg-[#062AAD] group-hover:text-white flex items-center justify-center transition-all shrink-0 shadow-2xs">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- CỘT PHẢI: Tin tức & Insight bọc trong Card lớn (6/12 cột) -->
        <div class="lg:col-span-6 bg-white border border-slate-200/80 rounded-[28px] shadow-sm hover:shadow-premium transition-all duration-300 p-6 md:p-8 space-y-5">
            <div class="flex justify-between items-center border-b border-slate-100 pb-3.5">
                <h3 class="text-body-md font-extrabold text-[#062AAD] uppercase tracking-wider">TIN TỨC & INSIGHT</h3>
                <a href="tin-tuc.php" class="text-body-xs font-bold text-[#05A6F5] hover:text-[#062AAD] transition-colors flex items-center gap-1 group">
                    <span>Xem tất cả</span>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform"></i>
                </a>
            </div>
            
            <div class="space-y-4 mt-3">
                <!-- Bài viết lớn ở trên cùng (Featured) -->
                <div class="bg-white rounded-[24px] overflow-hidden hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 group flex flex-col cursor-pointer border border-slate-100">
                    <div class="h-[160px] md:h-[170px] w-full relative overflow-hidden bg-slate-900">
                        <img src="assets/img/intro-building.jpg" alt="Featured News Cover" class="w-full h-full object-cover opacity-75 transition-transform duration-500 group-hover:scale-105">
                        
                        <!-- Lớp phủ tối gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent"></div>
                        
                        <!-- Chữ ĐỔI MỚI TỪ CÀ MAU to đè lên ảnh theo Figma -->
                        <div class="absolute bottom-6 left-6 right-6">
                            <h4 class="text-white text-h4 font-extrabold leading-tight tracking-wide drop-shadow-md">
                                Đổi Mới Từ Cà Mau
                            </h4>
                        </div>

                        <!-- Tag đè góc trái ảnh -->
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="px-2.5 py-1 text-[9px] font-extrabold rounded-full bg-[#062AAD] text-white uppercase tracking-wider shadow-sm">Chuyển đổi số</span>
                            <span class="px-2.5 py-1 text-[9px] font-extrabold rounded-full bg-[#71A800] text-white uppercase tracking-wider shadow-sm">Nổi bật</span>
                        </div>
                    </div>
                    
                    <!-- Meta info dưới ảnh (Không lặp lại tiêu đề theo Figma) -->
                    <div class="p-3 pt-3 border-t border-slate-50 flex items-center gap-2 text-[10px] text-slate-400 font-bold">
                        <span>20/05/2025</span>
                        <span>&bull;</span>
                        <span>5 Phút đọc</span>
                    </div>
                </div>
                
                <!-- Danh sách 2 bài viết nhỏ hơn ở dưới xếp dọc dạng List chuẩn Figma -->
                <div class="space-y-3.5 pt-3 border-t border-slate-100">
                    <!-- Bài nhỏ 1 -->
                    <div class="flex gap-3 group cursor-pointer items-start p-1.5 rounded-xl hover:bg-slate-50/80 transition-colors">
                        <!-- Thumbnail nhỏ bên trái -->
                        <div class="w-[106px] h-[74px] rounded-xl overflow-hidden relative bg-slate-900 shrink-0 border border-slate-100/50 shadow-2xs">
                            <img src="assets/img/hero-bg.jpg" alt="News Thumbnail" class="w-full h-full object-cover opacity-70 transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 to-transparent"></div>
                            <span class="absolute top-2 left-2 px-2 py-0.5 text-[9px] font-bold rounded-full bg-[#062AAD] text-white shadow-sm">Khởi nghiệp</span>
                        </div>
                        <!-- Tiêu đề & Thông tin bên phải -->
                        <div class="space-y-1.5 flex-1 min-w-0">
                            <h4 class="text-[12px] font-bold text-slate-800 group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                Đánh Thức Con Tàu Khởi Nghiệp Cực Nam
                            </h4>
                            <div class="flex items-center gap-2 text-[10px] text-slate-400 font-medium">
                                <span>20/05/2025</span>
                                <span>&bull;</span>
                                <span>5 phút đọc</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bài nhỏ 2 -->
                    <div class="flex gap-3 group cursor-pointer items-start p-1.5 rounded-xl hover:bg-slate-50/80 transition-colors">
                        <!-- Thumbnail nhỏ bên trái -->
                        <div class="w-[106px] h-[74px] rounded-xl overflow-hidden relative bg-slate-900 shrink-0 border border-slate-100/50 shadow-2xs">
                            <img src="assets/img/office.png" alt="News Thumbnail" class="w-full h-full object-cover opacity-70 transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 to-transparent"></div>
                            <span class="absolute top-2 left-2 px-2 py-0.5 text-[9px] font-bold rounded-full bg-[#71A800] text-white shadow-sm">Công nghệ</span>
                        </div>
                        <!-- Tiêu đề & Thông tin bên phải -->
                        <div class="space-y-1.5 flex-1 min-w-0">
                            <h4 class="text-[12px] font-bold text-slate-800 group-hover:text-[#062AAD] transition-colors line-clamp-2 leading-snug">
                                Cà Mau đẩy mạnh chuyển đổi số hướng tới phát triển bền vững.
                            </h4>
                            <div class="flex items-center gap-2 text-[10px] text-slate-400 font-medium">
                                <span>20/05/2025</span>
                                <span>&bull;</span>
                                <span>5 phút đọc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- SECTION MẠNG LƯỚI ĐỐI TÁC (Tĩnh 5 cột theo Figma) -->
<section class="pt-8 pb-4 bg-white overflow-hidden border-t border-slate-100/80">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 flex justify-between items-end mb-8">
        <h3 class="text-body-md font-extrabold text-[#02185D] uppercase tracking-wider">ĐỐI TÁC CỦA CHÚNG TÔI</h3>
        <a href="doi-tac.php" class="text-body-xs font-bold text-[#062AAD] hover:text-[#05A6F5] transition-colors flex items-center gap-1 group">
            <span>Xem tất cả</span>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform"></i>
        </a>
    </div>
    
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 grid grid-cols-2 md:grid-cols-5 gap-6">
        <!-- Logo 1: DBC (Danang Biotechnology Center) -->
        <div class="bg-white border border-slate-200/80 rounded-2xl px-4 py-3.5 flex items-center justify-center hover:border-[#05A6F5] shadow-2xs hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 h-[88px] md:h-[100px] group cursor-pointer">
            <svg class="h-[48px] md:h-[54px] w-auto opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all" viewBox="0 0 160 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Biểu tượng chiếc lá lồng ADN bên trái -->
                <g transform="translate(4, 2) scale(1.05)">
                    <path d="M16 2C26 8 28 22 20 32C14 26 12 18 16 2Z" fill="#71A800" opacity="0.25"/>
                    <path d="M16 2C6 8 4 22 12 32C18 26 20 18 16 2Z" fill="#71A800" opacity="0.15"/>
                    <path d="M16 2C24 10 24 26 16 36C8 26 8 10 16 2Z" stroke="#71A800" stroke-width="2" stroke-linecap="round"/>
                    <path d="M12 12C16 14 16 18 20 20" stroke="#71A800" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M20 12C16 14 16 18 12 20" stroke="#05A6F5" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12 20C16 22 16 26 20 28" stroke="#71A800" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M20 20C16 22 16 26 12 28" stroke="#05A6F5" stroke-width="1.5" stroke-linecap="round"/>
                    <circle cx="12" cy="12" r="1.5" fill="#71A800"/>
                    <circle cx="20" cy="12" r="1.5" fill="#05A6F5"/>
                    <circle cx="20" cy="20" r="1.5" fill="#71A800"/>
                    <circle cx="12" cy="20" r="1.5" fill="#05A6F5"/>
                    <circle cx="12" cy="28" r="1.5" fill="#71A800"/>
                    <circle cx="20" cy="28" r="1.5" fill="#05A6F5"/>
                </g>
                <text x="46" y="24" font-family="'Plus Jakarta Sans', 'Inter', sans-serif" font-weight="900" font-size="22" fill="#71A800" letter-spacing="1">DBC</text>
                <text x="46" y="34" font-family="'Plus Jakarta Sans', 'Inter', sans-serif" font-weight="800" font-size="6.5" fill="#94A3B8" letter-spacing="0.2">DANANG BIOTECHNOLOGY CENTER</text>
            </svg>
        </div>
        <!-- Logo 2: KVIP -->
        <div class="bg-white border border-slate-200/80 rounded-2xl px-4 py-3.5 flex items-center justify-center hover:border-[#05A6F5] shadow-2xs hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 h-[88px] md:h-[100px] group cursor-pointer">
            <svg class="h-[48px] md:h-[54px] w-auto opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all" viewBox="0 0 160 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Biểu tượng vòng xoáy 3D đỏ/xanh KVIP -->
                <g transform="translate(6, 4) scale(1.05)">
                    <path d="M16 6C11 6 6 11 6 16C6 21 11 26 16 26C21 26 24 23 25 18H20C19 20 17 21 16 21C13 21 11 19 11 16C11 13 13 11 16 11H25C24 7 21 6 16 6Z" fill="#0255a5"/>
                    <path d="M20 26C25 26 30 21 30 16C30 11 25 6 20 6C15 6 12 9 11 14H16C17 12 19 11 20 11C23 11 25 13 25 16C25 19 23 21 20 21H11C12 25 15 26 20 26Z" fill="#dc2626" opacity="0.9"/>
                    <circle cx="16" cy="16" r="2.5" fill="#ffffff"/>
                    <circle cx="20" cy="16" r="2.5" fill="#ffffff"/>
                </g>
                <text x="46" y="24" font-family="'Plus Jakarta Sans', 'Inter', sans-serif" font-weight="900" font-size="22" fill="#1E293B" letter-spacing="1">KVIP</text>
                <text x="46" y="34" font-family="'Plus Jakarta Sans', 'Inter', sans-serif" font-weight="800" font-size="6.5" fill="#94A3B8" letter-spacing="0.2">Korea Vietnam Incubator Park</text>
            </svg>
        </div>
        <!-- Logo 3: NIIC -->
        <div class="bg-white border border-slate-200/80 rounded-2xl px-4 py-3.5 flex items-center justify-center hover:border-[#05A6F5] shadow-2xs hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 h-[88px] md:h-[100px] group cursor-pointer">
            <svg class="h-[48px] md:h-[54px] w-auto opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all" viewBox="0 0 160 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(18, 22) scale(0.8)">
                    <path d="M0 0C-5 -15 5 -15 0 0" fill="#dc2626"/>
                    <path d="M0 0C5 -15 15 -5 0 0" fill="#ea580c"/>
                    <path d="M0 0C15 -5 15 5 0 0" fill="#ca8a04"/>
                    <path d="M0 0C15 5 5 15 0 0" fill="#16a34a"/>
                    <path d="M0 0C5 15 -5 15 0 0" fill="#2563eb"/>
                    <path d="M0 0C-5 15 -15 5 0 0" fill="#4f46e5"/>
                    <path d="M0 0C-15 5 -15 -5 0 0" fill="#9333ea"/>
                    <path d="M0 0C-15 -5 -5 -15 0 0" fill="#db2777"/>
                </g>
                <text x="48" y="27" font-family="'Plus Jakarta Sans', 'Inter', sans-serif" font-weight="900" font-size="24" fill="#02185D" letter-spacing="1">NIIC</text>
            </svg>
        </div>
        <!-- Logo 4: NIIC -->
        <div class="bg-white border border-slate-200/80 rounded-2xl px-4 py-3.5 flex items-center justify-center hover:border-[#05A6F5] shadow-2xs hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 h-[88px] md:h-[100px] group cursor-pointer">
            <svg class="h-[48px] md:h-[54px] w-auto opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all" viewBox="0 0 160 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(18, 22) scale(0.8)">
                    <path d="M0 0C-5 -15 5 -15 0 0" fill="#dc2626"/>
                    <path d="M0 0C5 -15 15 -5 0 0" fill="#ea580c"/>
                    <path d="M0 0C15 -5 15 5 0 0" fill="#ca8a04"/>
                    <path d="M0 0C15 5 5 15 0 0" fill="#16a34a"/>
                    <path d="M0 0C5 15 -5 15 0 0" fill="#2563eb"/>
                    <path d="M0 0C-5 15 -15 5 0 0" fill="#4f46e5"/>
                    <path d="M0 0C-15 5 -15 -5 0 0" fill="#9333ea"/>
                    <path d="M0 0C-15 -5 -5 -15 0 0" fill="#db2777"/>
                </g>
                <text x="48" y="27" font-family="'Plus Jakarta Sans', 'Inter', sans-serif" font-weight="900" font-size="24" fill="#02185D" letter-spacing="1">NIIC</text>
            </svg>
        </div>
        <!-- Logo 5: NIIC -->
        <div class="bg-white border border-slate-200/80 rounded-2xl px-4 py-3.5 flex items-center justify-center hover:border-[#05A6F5] shadow-2xs hover:shadow-hover-card hover:-translate-y-0.5 transition-all duration-300 h-[88px] md:h-[100px] group cursor-pointer">
            <svg class="h-[48px] md:h-[54px] w-auto opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all" viewBox="0 0 160 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(18, 22) scale(0.8)">
                    <path d="M0 0C-5 -15 5 -15 0 0" fill="#dc2626"/>
                    <path d="M0 0C5 -15 15 -5 0 0" fill="#ea580c"/>
                    <path d="M0 0C15 -5 15 5 0 0" fill="#ca8a04"/>
                    <path d="M0 0C15 5 5 15 0 0" fill="#16a34a"/>
                    <path d="M0 0C5 15 -5 15 0 0" fill="#2563eb"/>
                    <path d="M0 0C-5 15 -15 5 0 0" fill="#4f46e5"/>
                    <path d="M0 0C-15 5 -15 -5 0 0" fill="#9333ea"/>
                    <path d="M0 0C-15 -5 -5 -15 0 0" fill="#db2777"/>
                </g>
                <text x="48" y="27" font-family="'Plus Jakarta Sans', 'Inter', sans-serif" font-weight="900" font-size="24" fill="#02185D" letter-spacing="1">NIIC</text>
            </svg>
        </div>
    </div>
</section>

<!-- SECTION CTA BANNER: Khung lưới công nghệ 3D vector xanh đậm -->
<section class="pt-8 pb-16 bg-white">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20">
        <!-- Banner container - Căn lề trái chuẩn Figma -->
        <div class="bg-gradient-to-br from-[#02185D] via-[#062AAD] to-[#02185D] text-white rounded-[32px] p-8 md:p-14 relative overflow-hidden shadow-2xl border border-blue-900/40 flex flex-col items-start text-left space-y-6 md:space-y-8">
            <!-- Background Lines mô phỏng con tàu và lưới công nghệ 3D -->
            <div class="absolute inset-0 bg-cover bg-center opacity-20 mix-blend-overlay" style="background-image: url('assets/img/hero-bg.jpg');"></div>
            <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-blue-400/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -left-20 -top-20 w-80 h-80 bg-lime-300/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#02185D] via-[#02185D]/90 to-transparent"></div>
            
            <div class="relative z-10 max-w-2xl space-y-3.5">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold leading-[1.25] tracking-tight text-white">
                    Sẵn sàng đưa ý tưởng của bạn <br>
                    vươn xa cùng CINEC?
                </h2>
                <p class="text-body-xs md:text-body-sm text-slate-200 font-light max-w-lg leading-relaxed">
                    Hãy gia nhập hệ sinh thái đổi mới sáng tạo để nhận các gói hỗ trợ chuyển đổi số, ươm tạo doanh nghiệp khởi nghiệp và kết nối quỹ đầu tư mạo hiểm cấp vùng.
                </p>
            </div>
            
            <!-- Nút CTA nằm trái -->
            <a href="lien-he.php" class="relative z-10 group inline-flex items-center justify-center gap-3 bg-gradient-to-r from-[#05A6F5] to-blue-500 hover:from-blue-500 hover:to-[#062AAD] text-white font-extrabold text-body-sm rounded-full pl-7 pr-2.5 py-2.5 shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:-translate-y-0.5 transition-all duration-300">
                <span>Đăng ký ngay</span>
                <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1 shadow-sm">
                    <i data-lucide="arrow-right" class="w-4 h-4 text-[#062AAD]"></i>
                </span>
            </a>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
