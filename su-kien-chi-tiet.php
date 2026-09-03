<?php
require_once 'config/db.php';
require_once 'config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
$page_title = $is_en ? "Seminar: Artificial Intelligence (AI) & Digital Transformation - CiNEC" : "Hội thảo chuyên đề: Trí tuệ nhân tạo (AI) và chuyển đổi số - CiNEC";
require_once 'includes/header.php';
?>

<!-- TRANG CHI TIẾT SỰ KIỆN (CHUẨN FIGMA NODE 115:2357 BILINGUAL) -->
<div class="bg-[#F7FAFD] min-h-screen pt-24 pb-20 font-sans text-slate-800">

    <!-- BREADCRUMB (Frame 2147223444 [39:232]) -->
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 py-4">
        <nav class="flex items-center gap-2 text-[13px] font-normal text-slate-500">
            <a href="index.php" class="hover:text-[#062AAD] transition-colors"><?php echo __('nav_home'); ?></a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
            <a href="su-kien.php" class="hover:text-[#062AAD] transition-colors"><?php echo __('nav_events'); ?></a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
            <span class="text-[#062AAD] font-semibold truncate max-w-[320px] sm:max-w-none">
                <?php echo $is_en ? 'Specialized Seminar: AI & Digital Transformation' : 'Hội thảo chuyên đề: Trí tuệ nhân tạo (AI) và chuyển đổi số'; ?>
            </span>
        </nav>
    </div>

    <!-- SECTION 1: HERO EVENT BANNER & FLOATING REGISTRATION CARD (Frame 2147223445 [39:252]) -->
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20">
        <div class="relative rounded-[28px] lg:rounded-[36px] bg-[#02185D] text-white p-8 sm:p-12 lg:p-14 overflow-hidden shadow-2xl border border-blue-900/60 min-h-[568px] flex items-center">
            
            <!-- Đồ họa ảnh nền gốc Figma (Image 26 [39:253]) -->
            <div class="absolute right-0 top-0 bottom-0 w-full lg:w-[60%] opacity-35 lg:opacity-75 pointer-events-none mix-blend-luminosity overflow-hidden">
                <img src="assets/img/sukien_hero_bg.png" alt="Event Hero Graphic" class="w-full h-full object-cover object-center lg:object-right">
                <div class="absolute inset-0 bg-gradient-to-r from-[#02185D] via-[#02185D]/80 to-transparent"></div>
            </div>
            
            <!-- Quầng sáng bổ trợ -->
            <div class="absolute -left-20 -top-20 w-80 h-80 bg-[#062AAD]/40 rounded-full blur-3xl pointer-events-none"></div>

            <!-- Nội dung 2 cột: Thông tin bên trái & Form đăng ký nổi bên phải -->
            <div class="relative z-10 w-full grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- CỘT TRÁI: THÔNG TIN SỰ KIỆN CHÍNH (7/12 cột - Frame 2147223452 [39:294]) -->
                <div class="lg:col-span-7 space-y-6 text-left">
                    
                    <!-- Badge trạng thái (Frame 2147223446 [39:256]) -->
                    <div>
                        <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-[#C1FF72] text-[#02185D] text-[11px] font-bold uppercase tracking-wider shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-[#02185D] animate-ping"></span>
                            <?php echo $is_en ? 'UPCOMING EVENT' : 'SỰ KIỆN SẮP DIỄN RA'; ?>
                        </span>
                    </div>

                    <!-- Tiêu đề lớn & Khẩu hiệu (Frame 2147223447 [39:260]) -->
                    <div class="space-y-3">
                        <h1 class="text-2xl sm:text-3xl lg:text-[40px] font-bold text-white tracking-tight leading-[1.25]">
                            <?php echo $is_en ? 'Specialized Seminar: Artificial Intelligence (AI) and Digital Transformation' : 'Hội thảo chuyên đề: Trí tuệ nhân tạo (AI) và chuyển đổi số'; ?>
                        </h1>
                        <p class="text-[15px] font-semibold text-[#C1FF72] flex items-center gap-2">
                            <span><?php echo $is_en ? 'From Awareness' : 'Từ nhận thức'; ?></span>
                            <span class="text-cyan-300">&rarr;</span>
                            <span><?php echo $is_en ? 'Action' : 'Hành động'; ?></span>
                        </p>
                        <p class="text-[14px] sm:text-[15px] text-slate-200 font-normal leading-relaxed max-w-xl">
                            <?php echo $is_en 
                                ? 'Gathering industry experts, enterprises, and tech leaders to share pragmatic, highly deployable solutions for regional SMEs.'
                                : 'Hội thảo quy tụ chuyên gia, doanh nghiệp và các đơn vị công nghệ cùng chia sẻ giải pháp thực tế, dễ áp dụng cho doanh nghiệp vừa và nhỏ.'; ?>
                        </p>
                    </div>

                    <!-- 3 Khối Meta thông tin (Frame 2147223448 [39:271]) -->
                    <div class="pt-2 space-y-3.5 border-t border-white/15 max-w-xl">
                        <!-- Ngày diễn ra -->
                        <div class="flex items-center gap-3 text-[14px] text-slate-100">
                            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center text-cyan-300 shrink-0 border border-white/15">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                            </div>
                            <span class="font-semibold text-white">14/04/2026</span>
                        </div>

                        <!-- Giờ diễn ra -->
                        <div class="flex items-center gap-3 text-[14px] text-slate-100">
                            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center text-cyan-300 shrink-0 border border-white/15">
                                <i data-lucide="clock" class="w-4 h-4"></i>
                            </div>
                            <span class="font-semibold text-white">07:30 – 11:00</span>
                        </div>

                        <!-- Địa điểm -->
                        <div class="flex items-start gap-3 text-[14px] text-slate-100">
                            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center text-cyan-300 shrink-0 border border-white/15 mt-0.5">
                                <i data-lucide="map-pin" class="w-4 h-4"></i>
                            </div>
                            <span class="leading-snug text-slate-200">
                                <?php echo $is_en ? '2nd Floor Auditorium – VNPT Ca Mau Building' : 'Hội trường Tầng 2 – Toà nhà VNPT Cà Mau'; ?><br>
                                <span class="text-[13px] text-slate-300"><?php echo $is_en ? '03 Luu Tan Tai St., Tan Thanh Ward, Ca Mau' : 'Số 03 Lưu Tấn Tài, P. Tân Thành, tỉnh Cà Mau'; ?></span>
                            </span>
                        </div>
                    </div>

                </div>

                <!-- CỘT PHẢI: CARD FORM ĐĂNG KÝ NỔI (5/12 cột - Frame 2147223453 [39:297]) -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="bg-white rounded-[28px] p-6 sm:p-8 shadow-2xl border border-slate-100 w-full max-w-[380px] text-slate-800 space-y-5">
                        
                        <div class="text-left space-y-1">
                            <h3 class="text-[20px] font-bold text-[#062AAD]">
                                <?php echo $is_en ? 'Register for Event' : 'Đăng ký tham dự'; ?>
                            </h3>
                            <p class="text-[13px] text-slate-500">
                                <?php echo $is_en ? 'Reserve your seat today!' : 'Tham gia sự kiện ngay hôm nay!'; ?>
                            </p>
                        </div>

                        <form class="space-y-3 text-left" onsubmit="event.preventDefault(); alert('<?php echo $is_en ? 'Congratulations! Your event registration is successful. Check-in QR will be emailed to you.' : 'Chúc mừng bạn đã đăng ký tham dự Hội thảo thành công! Ban tổ chức sẽ gửi mã check-in qua Email.'; ?>'); this.reset();">
                            <!-- Họ và tên -->
                            <div class="relative">
                                <span class="absolute left-3.5 top-3 text-slate-400">
                                    <i data-lucide="user" class="w-4 h-4"></i>
                                </span>
                                <input type="text" required placeholder="<?php echo $is_en ? 'Full Name' : 'Họ và tên'; ?>" class="w-full pl-10 pr-3.5 py-2.5 rounded-xl border border-slate-200 text-[13.5px] focus:outline-none focus:border-[#062AAD] focus:ring-1 focus:ring-[#062AAD] transition-all bg-slate-50/50 focus:bg-white">
                            </div>

                            <!-- Email -->
                            <div class="relative">
                                <span class="absolute left-3.5 top-3 text-slate-400">
                                    <i data-lucide="mail" class="w-4 h-4"></i>
                                </span>
                                <input type="email" required placeholder="Email" class="w-full pl-10 pr-3.5 py-2.5 rounded-xl border border-slate-200 text-[13.5px] focus:outline-none focus:border-[#062AAD] focus:ring-1 focus:ring-[#062AAD] transition-all bg-slate-50/50 focus:bg-white">
                            </div>

                            <!-- Số điện thoại -->
                            <div class="relative">
                                <span class="absolute left-3.5 top-3 text-slate-400">
                                    <i data-lucide="phone" class="w-4 h-4"></i>
                                </span>
                                <input type="tel" required placeholder="<?php echo $is_en ? 'Phone Number' : 'Số điện thoại'; ?>" class="w-full pl-10 pr-3.5 py-2.5 rounded-xl border border-slate-200 text-[13.5px] focus:outline-none focus:border-[#062AAD] focus:ring-1 focus:ring-[#062AAD] transition-all bg-slate-50/50 focus:bg-white">
                            </div>

                            <!-- Đơn vị / Tổ chức -->
                            <div class="relative">
                                <span class="absolute left-3.5 top-3 text-slate-400">
                                    <i data-lucide="building-2" class="w-4 h-4"></i>
                                </span>
                                <input type="text" placeholder="<?php echo $is_en ? 'Organization / Company' : 'Đơn vị / Tổ chức'; ?>" class="w-full pl-10 pr-3.5 py-2.5 rounded-xl border border-slate-200 text-[13.5px] focus:outline-none focus:border-[#062AAD] focus:ring-1 focus:ring-[#062AAD] transition-all bg-slate-50/50 focus:bg-white">
                            </div>

                            <!-- Bạn là? -->
                            <div class="relative">
                                <span class="absolute left-3.5 top-3 text-slate-400">
                                    <i data-lucide="users" class="w-4 h-4"></i>
                                </span>
                                <select class="w-full pl-10 pr-8 py-2.5 rounded-xl border border-slate-200 text-[13.5px] focus:outline-none focus:border-[#062AAD] focus:ring-1 focus:ring-[#062AAD] transition-all bg-slate-50/50 focus:bg-white appearance-none cursor-pointer text-slate-700">
                                    <option value="" disabled selected><?php echo $is_en ? 'You are? (Investor / Startup / Other)' : 'Bạn là? (Nhà đầu tư / Startup / Khác)'; ?></option>
                                    <option value="startup"><?php echo $is_en ? 'Founder / Startup' : 'Nhà sáng lập / Startup'; ?></option>
                                    <option value="investor"><?php echo $is_en ? 'Investor / Venture Capital' : 'Nhà đầu tư / Quỹ đầu tư'; ?></option>
                                    <option value="sme"><?php echo $is_en ? 'SME Enterprise' : 'Doanh nghiệp vừa và nhỏ (SME)'; ?></option>
                                    <option value="student"><?php echo $is_en ? 'Student / Academic' : 'Học sinh / Sinh viên'; ?></option>
                                    <option value="other"><?php echo $is_en ? 'Other interested participant' : 'Cá nhân quan tâm khác'; ?></option>
                                </select>
                                <span class="absolute right-3.5 top-3.5 pointer-events-none text-slate-400">
                                    <i data-lucide="chevron-down" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>

                            <!-- Nút Đăng ký ngay -->
                            <div class="pt-1">
                                <button type="submit" class="w-full bg-[#062AAD] hover:bg-[#02185D] text-white font-semibold text-[14px] rounded-full py-3 px-6 shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center gap-2 group">
                                    <span><?php echo $is_en ? 'Register Now' : 'Đăng ký ngay'; ?></span>
                                    <span class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1">
                                        <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-white"></i>
                                    </span>
                                </button>
                            </div>

                            <!-- Hạn đăng ký -->
                            <div class="text-center pt-1">
                                <span class="text-[12px] text-slate-400 font-medium">
                                    <?php echo $is_en ? 'Deadline: 11/04/2026' : 'Hạn đăng ký: 11/04/2026'; ?>
                                </span>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- SECTION 2: LỊCH TRÌNH SỰ KIỆN (6/12) & DIỄN GIẢ (6/12) (Frame 2147223461 [39:363]) -->
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 pt-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
            
            <!-- CỘT TRÁI: LỊCH TRÌNH SỰ KIỆN (6/12 cột - Frame 2147223466 [39:370]) -->
            <div class="lg:col-span-6 space-y-6 text-left">
                <div class="border-b border-slate-200 pb-3">
                    <h2 class="text-[22px] sm:text-[24px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Event Agenda' : 'Lịch trình sự kiện'; ?>
                    </h2>
                </div>

                <!-- Danh sách Timeline 11 mốc Figma chuẩn gạch ngang Line 6 -->
                <div class="space-y-3.5">
                    
                    <!-- 08:00 - 08:30 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">08:00 - 08:30</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] font-semibold text-slate-800"><?php echo $is_en ? 'Guest Welcoming & Check-in' : 'Đón khách - Check in'; ?></span>
                    </div>

                    <!-- 08:00 - 08:05 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">08:00 - 08:05</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] text-slate-700"><?php echo $is_en ? 'Opening remarks & Delegates introduction' : 'Tuyên bố lý do, giới thiệu đại biểu'; ?></span>
                    </div>

                    <!-- 08:05 - 08:15 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">08:05 - 08:15</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] text-slate-700"><?php echo $is_en ? 'Video presentation: Introducing cDXA presiding unit' : 'Trình chiếu Video giới thiệu đơn vị chủ trì cDXA'; ?></span>
                    </div>

                    <!-- 08:15 - 08:20 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">08:15 - 08:20</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] font-semibold text-slate-800"><?php echo $is_en ? 'Opening Keynote Speech' : 'Phát biểu Khai mạc'; ?></span>
                    </div>

                    <!-- 08:20 - 08:35 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">08:20 - 08:35</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] text-slate-700 leading-snug"><?php echo $is_en ? 'Case Studies: Real-world Digital Transformation Results' : 'Chia sẻ thực tế chuyển đổi số trong doanh nghiệp và kết quả thực tiễn'; ?></span>
                    </div>

                    <!-- 08:35 - 08:50 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">08:35 - 08:50</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] font-semibold text-[#062AAD] leading-snug"><?php echo $is_en ? 'AI Trends and Digital Roadmaps for Businesses' : 'Xu hướng AI và lộ trình chuyển đổi số cho doanh nghiệp'; ?></span>
                    </div>

                    <!-- 08:50 - 09:05 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">08:50 - 09:05</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] text-slate-700 leading-snug"><?php echo $is_en ? 'Unlocking Operations with AI - Comprehensive ERP & Workflow' : 'Khai phóng vận hành bằng chuyển đổi số tích hợp AI - Giải pháp quản trị doanh nghiệp toàn diện'; ?></span>
                    </div>

                    <!-- 09:05 - 09:20 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">09:05 - 09:20</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] text-slate-700"><?php echo $is_en ? 'E-Contract and Digital Signature Solutions for SMEs' : 'Giải pháp hợp đồng điện tử cho doanh nghiệp'; ?></span>
                    </div>

                    <!-- 09:20 - 09:45 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors bg-amber-50/50">
                        <span class="text-[13px] font-bold text-amber-600 shrink-0 w-24">09:20 - 09:45</span>
                        <div class="w-6 border-t-2 border-amber-400 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] font-semibold text-amber-800"><?php echo $is_en ? 'Coffee Break & Tech Experience Showcase' : 'Nghỉ giữa giờ - tham quan khu trải nghiệm'; ?></span>
                    </div>

                    <!-- 09:45 - 10:25 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">09:45 - 10:25</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] text-slate-700 leading-snug"><?php echo $is_en ? 'Introduction to Provincial Digital Voucher Support' : 'Giới thiệu Chương trình hỗ trợ doanh nghiệp chuyển đổi số'; ?></span>
                    </div>

                    <!-- 10:25 - 10:45 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">10:25 - 10:45</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] text-slate-700 leading-snug"><?php echo $is_en ? 'Launch of CaMauConnect: Ecosystem Platform' : 'Giới thiệu nền tảng Hỗ trợ Chuyển đổi số trong doanh nghiệp (SME) tỉnh Cà Mau và phát động CaMauConnect - kết nối hệ sinh thái'; ?></span>
                    </div>

                    <!-- 10:45 - 10:55 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">10:45 - 10:55</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] font-semibold text-slate-800"><?php echo $is_en ? 'Leadership Remarks & Directives' : 'Phát biểu chỉ đạo'; ?></span>
                    </div>

                    <!-- 10:55 - 11:00 -->
                    <div class="flex items-start gap-4 p-2.5 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="text-[13px] font-bold text-[#062AAD] shrink-0 w-24">10:55 - 11:00</span>
                        <div class="w-6 border-t-2 border-[#062AAD]/30 mt-2 shrink-0"></div>
                        <span class="text-[13.5px] text-slate-700"><?php echo $is_en ? 'Commemorative Photo Session' : 'Chụp ảnh lưu niệm'; ?></span>
                    </div>

                </div>

                <!-- Nút Tải agenda chi tiết (Frame 2147223605 [91:641]) -->
                <div class="pt-3">
                    <a href="#register" onclick="alert('<?php echo $is_en ? 'Preparing detailed Agenda PDF download...' : 'Đang chuẩn bị tải tài liệu Agenda chi tiết PDF...'; ?>');" class="inline-flex items-center gap-2.5 px-6 py-2.5 rounded-full border border-[#062AAD] text-[#062AAD] hover:bg-[#062AAD] hover:text-white font-semibold text-[13.5px] transition-all duration-300 shadow-2xs group">
                        <span><?php echo $is_en ? 'Download Full Agenda' : 'Tải agenda chi tiết'; ?></span>
                        <i data-lucide="download" class="w-4 h-4 transition-transform group-hover:translate-y-0.5"></i>
                    </a>
                </div>
            </div>

            <!-- CỘT PHẢI: DIỄN GIẢ & BAN GIÁM KHẢO (6/12 cột - Frame 2147223467 [39:371]) -->
            <div class="lg:col-span-6 space-y-6 text-left">
                <div class="border-b border-slate-200 pb-3 flex items-center justify-between">
                    <h2 class="text-[22px] sm:text-[24px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Speakers & Advisory Panel' : 'Diễn giả & Ban giám khảo'; ?>
                    </h2>
                    <a href="doi-tac.php?tab=mentors" class="text-[13px] text-[#062AAD] hover:underline font-semibold flex items-center gap-1">
                        <span><?php echo $is_en ? 'View all' : 'Xem tất cả'; ?></span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Lưới 6 Thẻ Diễn Giả (3 Cột x 2 Hàng) chuẩn Figma Arch Shape -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    
                    <!-- 1. Phạm Thùy B -->
                    <div class="bg-white rounded-2xl p-3.5 border border-slate-200/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 text-center flex flex-col items-center justify-between space-y-3 group">
                        <div class="w-full aspect-[4/5] rounded-xl bg-[#F3FBFF] relative overflow-hidden flex items-end justify-center">
                            <div class="w-full aspect-square rounded-t-full bg-[rgba(5,166,245,0.12)] absolute bottom-0"></div>
                            <img src="assets/img/leader_pham_thuy_b.png" alt="Phạm Thùy B" class="w-[85%] h-auto object-cover relative z-10 group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-[13px] font-bold text-[#062AAD]">Phạm Thùy B</h4>
                            <p class="text-[11px] font-medium text-slate-700"><?php echo $is_en ? 'Deputy Director' : 'Phó Giám Đốc'; ?></p>
                            <p class="text-[10px] text-slate-400">CiNEC Center</p>
                        </div>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-lg border border-[#062AAD]/30 text-[#062AAD] hover:bg-[#062AAD] hover:text-white flex items-center justify-center transition-colors shadow-2xs" aria-label="LinkedIn">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>

                    <!-- 2. Nguyễn Văn A -->
                    <div class="bg-white rounded-2xl p-3.5 border border-slate-200/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 text-center flex flex-col items-center justify-between space-y-3 group">
                        <div class="w-full aspect-[4/5] rounded-xl bg-[#F3FBFF] relative overflow-hidden flex items-end justify-center">
                            <div class="w-full aspect-square rounded-t-full bg-[rgba(5,166,245,0.12)] absolute bottom-0"></div>
                            <img src="assets/img/leader_nguyen_van_a.png" alt="Nguyễn Văn A" class="w-[85%] h-auto object-cover relative z-10 group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-[13px] font-bold text-[#062AAD]">Nguyễn Văn A</h4>
                            <p class="text-[11px] font-medium text-slate-700"><?php echo $is_en ? 'Managing Director' : 'Giám Đốc'; ?></p>
                            <p class="text-[10px] text-slate-400">CiNEC Center</p>
                        </div>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-lg border border-[#062AAD]/30 text-[#062AAD] hover:bg-[#062AAD] hover:text-white flex items-center justify-center transition-colors shadow-2xs" aria-label="LinkedIn">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>

                    <!-- 3. Trần Trung C -->
                    <div class="bg-white rounded-2xl p-3.5 border border-slate-200/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 text-center flex flex-col items-center justify-between space-y-3 group">
                        <div class="w-full aspect-[4/5] rounded-xl bg-[#F3FBFF] relative overflow-hidden flex items-end justify-center">
                            <div class="w-full aspect-square rounded-t-full bg-[rgba(5,166,245,0.12)] absolute bottom-0"></div>
                            <img src="assets/img/leader_tran_trung_c.png" alt="Trần Trung C" class="w-[85%] h-auto object-cover relative z-10 group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-[13px] font-bold text-[#062AAD]">Trần Trung C</h4>
                            <p class="text-[11px] font-medium text-slate-700"><?php echo $is_en ? 'Deputy Director' : 'Phó Giám Đốc'; ?></p>
                            <p class="text-[10px] text-slate-400">CiNEC Center</p>
                        </div>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-lg border border-[#062AAD]/30 text-[#062AAD] hover:bg-[#062AAD] hover:text-white flex items-center justify-center transition-colors shadow-2xs" aria-label="LinkedIn">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>

                    <!-- 4. TS. Nguyễn Thùy A -->
                    <div class="bg-white rounded-2xl p-3.5 border border-slate-200/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 text-center flex flex-col items-center justify-between space-y-3 group">
                        <div class="w-full aspect-[4/5] rounded-xl bg-slate-100 relative overflow-hidden">
                            <img src="assets/img/leader_female.jpg" alt="TS. Nguyễn Thùy A" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-[13px] font-bold text-[#062AAD]">TS. Nguyễn Thùy A</h4>
                            <p class="text-[11px] font-medium text-slate-700"><?php echo $is_en ? 'Innovation Expert' : 'Chuyên gia ĐMST'; ?></p>
                            <p class="text-[10px] text-slate-400"><?php echo $is_en ? 'Chief Advisor' : 'Cố vấn Trưởng'; ?></p>
                        </div>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-lg border border-[#062AAD]/30 text-[#062AAD] hover:bg-[#062AAD] hover:text-white flex items-center justify-center transition-colors shadow-2xs" aria-label="LinkedIn">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>

                    <!-- 5. GS. TS. Trần Văn B -->
                    <div class="bg-white rounded-2xl p-3.5 border border-slate-200/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 text-center flex flex-col items-center justify-between space-y-3 group">
                        <div class="w-full aspect-[4/5] rounded-xl bg-slate-100 relative overflow-hidden">
                            <img src="assets/img/leader_male1.jpg" alt="GS. TS. Trần Văn B" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-[13px] font-bold text-[#062AAD]">GS. TS. Trần Văn B</h4>
                            <p class="text-[11px] font-medium text-slate-700"><?php echo $is_en ? 'AI & Data Specialist' : 'Chuyên gia AI & Dữ liệu'; ?></p>
                            <p class="text-[10px] text-slate-400"><?php echo $is_en ? 'Institute for Innovation' : 'Viện Nghiên cứu ĐMST'; ?></p>
                        </div>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-lg border border-[#062AAD]/30 text-[#062AAD] hover:bg-[#062AAD] hover:text-white flex items-center justify-center transition-colors shadow-2xs" aria-label="LinkedIn">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>

                    <!-- 6. Ông Lê Hoàng C -->
                    <div class="bg-white rounded-2xl p-3.5 border border-slate-200/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 text-center flex flex-col items-center justify-between space-y-3 group">
                        <div class="w-full aspect-[4/5] rounded-xl bg-slate-100 relative overflow-hidden">
                            <img src="assets/img/leader_male2.jpg" alt="Ông Lê Hoàng C" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-[13px] font-bold text-[#062AAD]">Ông Lê Hoàng C</h4>
                            <p class="text-[11px] font-medium text-slate-700"><?php echo $is_en ? 'Director, Mekong Fund' : 'Giám đốc Quỹ Mekong'; ?></p>
                            <p class="text-[10px] text-slate-400"><?php echo $is_en ? 'Venture Capital' : 'Đầu tư mạo hiểm'; ?></p>
                        </div>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-lg border border-[#062AAD]/30 text-[#062AAD] hover:bg-[#062AAD] hover:text-white flex items-center justify-center transition-colors shadow-2xs" aria-label="LinkedIn">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- SECTION 3: THAM GIA ĐỂ NHẬN ĐƯỢC GÌ? (7/12) & ĐỐI TƯỢNG THAM GIA (5/12) (Frame 2147223483 [39:566]) -->
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 pt-16">
        <div class="bg-white rounded-[28px] lg:rounded-[36px] p-8 sm:p-12 border border-slate-200/80 shadow-xs">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                
                <!-- CỘT TRÁI: THAM GIA ĐỂ NHẬN ĐƯỢC GÌ? (7/12 cột - Frame 2147223484 [40:592]) -->
                <div class="lg:col-span-7 space-y-6 text-left">
                    <h2 class="text-[22px] sm:text-[24px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Key Takeaways & Benefits' : 'Tham gia để nhận được gì?'; ?>
                    </h2>

                    <!-- Lưới 4 Hộp Lợi Ích (2x2 Grid) chuẩn Figma -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        
                        <!-- Lợi ích 1 -->
                        <div class="space-y-2 p-4 rounded-2xl bg-blue-50/40 border border-blue-100/60 hover:border-blue-200 transition-colors">
                            <div class="flex items-center gap-2 text-[#062AAD]">
                                <i data-lucide="users" class="w-5 h-5 text-[#05A6F5]"></i>
                                <h4 class="text-[16px] font-bold text-[#062AAD]"><?php echo $is_en ? 'Expert Networking' : 'Kết nối chuyên gia'; ?></h4>
                            </div>
                            <p class="text-[13.5px] text-[#5B5B5B] leading-relaxed">
                                <?php echo $is_en ? 'Engage with premier AI and digital transformation specialists nationally and globally.' : 'Gặp gỡ các chuyên gia AI & chuyển đổi số hàng đầu trong và ngoài nước.'; ?>
                            </p>
                        </div>

                        <!-- Lợi ích 2 -->
                        <div class="space-y-2 p-4 rounded-2xl bg-blue-50/40 border border-blue-100/60 hover:border-blue-200 transition-colors">
                            <div class="flex items-center gap-2 text-[#062AAD]">
                                <i data-lucide="zap" class="w-5 h-5 text-[#05A6F5]"></i>
                                <h4 class="text-[16px] font-bold text-[#062AAD]"><?php echo $is_en ? 'Optimized Operations' : 'Tối ưu vận hành'; ?></h4>
                            </div>
                            <p class="text-[13.5px] text-[#5B5B5B] leading-relaxed">
                                <?php echo $is_en ? 'Discover actionable methods to digitize processes and drastically enhance productivity.' : 'Khám phá cách số hóa quy trình và nâng cao hiệu suất doanh nghiệp thiết thực.'; ?>
                            </p>
                        </div>

                        <!-- Lợi ích 3 -->
                        <div class="space-y-2 p-4 rounded-2xl bg-blue-50/40 border border-blue-100/60 hover:border-blue-200 transition-colors">
                            <div class="flex items-center gap-2 text-[#062AAD]">
                                <i data-lucide="cpu" class="w-5 h-5 text-[#05A6F5]"></i>
                                <h4 class="text-[16px] font-bold text-[#062AAD]"><?php echo $is_en ? 'Latest AI Trends' : 'Cập nhật xu hướng AI'; ?></h4>
                            </div>
                            <p class="text-[13.5px] text-[#5B5B5B] leading-relaxed">
                                <?php echo $is_en ? 'Grasp practical AI trends customized for regional SMEs and traditional sectors.' : 'Nắm bắt xu hướng AI mới nhất dành cho doanh nghiệp địa phương thực thi.'; ?>
                            </p>
                        </div>

                        <!-- Lợi ích 4 -->
                        <div class="space-y-2 p-4 rounded-2xl bg-blue-50/40 border border-blue-100/60 hover:border-blue-200 transition-colors">
                            <div class="flex items-center gap-2 text-[#062AAD]">
                                <i data-lucide="shield-check" class="w-5 h-5 text-[#05A6F5]"></i>
                                <h4 class="text-[16px] font-bold text-[#062AAD]"><?php echo $is_en ? 'Digital Voucher Access' : 'Hỗ trợ chuyển đổi số'; ?></h4>
                            </div>
                            <p class="text-[13.5px] text-[#5B5B5B] leading-relaxed">
                                <?php echo $is_en ? 'Qualify for provincial digital transformation voucher subsidies and platforms.' : 'Tiếp cận chương trình hỗ trợ Voucher và nền tảng dành cho doanh nghiệp Cà Mau.'; ?>
                            </p>
                        </div>

                    </div>
                </div>

                <!-- CỘT PHẢI: ĐỐI TƯỢNG THAM GIA (5/12 cột - Frame 2147223485 [40:620]) -->
                <div class="lg:col-span-5 space-y-6 text-left">
                    <h2 class="text-[22px] sm:text-[24px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Who Should Attend' : 'Đối tượng tham gia'; ?>
                    </h2>

                    <div class="bg-[#F3FBFF] rounded-2xl p-6 sm:p-7 border border-blue-100 space-y-4">
                        <ul class="space-y-3.5 text-[14px] text-slate-700 font-medium">
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#062AAD] mt-2 shrink-0"></span>
                                <span><?php echo $is_en ? 'Small and medium enterprises (SMEs) across Ca Mau and Mekong region' : 'Doanh nghiệp vừa và nhỏ (SMEs) trên địa bàn tỉnh'; ?></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#062AAD] mt-2 shrink-0"></span>
                                <span><?php echo $is_en ? 'Individual business households, agricultural cooperatives, startup projects' : 'Hộ kinh doanh cá thể, hợp tác xã, dự án startup'; ?></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#062AAD] mt-2 shrink-0"></span>
                                <span><?php echo $is_en ? 'Executives, business leaders interested in applying AI & digital tools' : 'Lãnh đạo, quản lý quan tâm ứng dụng AI & chuyển đổi số'; ?></span>
                            </li>
                        </ul>

                        <div class="pt-2 border-t border-blue-200/60">
                            <p class="text-[12.5px] text-slate-500 leading-relaxed">
                                <?php echo $is_en ? '* 100% Free registration. Priority granted to entities registered before 11/04/2026.' : '* Sự kiện hoàn toàn miễn phí tham dự. Ưu tiên các đơn vị đăng ký trước ngày 11/04/2026.'; ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<?php
require_once 'includes/footer.php';
?>
