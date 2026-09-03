<?php
require_once 'config/db.php';
require_once 'config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
$page_title = $is_en ? "Ca Mau Innovation Platform (CiNEC Platform)" : "Nền tảng Đổi mới sáng tạo Cà Mau (Ca Mau Innovation Platform) - CiNEC";
require_once 'includes/header.php';

$program = $mockPrograms['PLATFORM'];
$current_prog = 'PLATFORM';
?>

<!-- TRANG CHƯƠNG TRÌNH 01: NỀN TẢNG ĐỔI MỚI SÁNG TẠO BILINGUAL -->
<div class="bg-[#F7FAFD] min-h-screen pt-28 pb-20 font-sans">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-10">

        <!-- THANH CHUYỂN ĐỔI 4 CHƯƠNG TRÌNH THÀNH PHẦN (Pill Switcher) -->
        <div class="bg-white rounded-2xl lg:rounded-full p-2 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] grid grid-cols-2 lg:grid-cols-4 gap-2">
            <a href="chuong-trinh-platform.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all bg-[#062AAD] text-white shadow-md">
                <i data-lucide="layers" class="w-4 h-4 text-cyan-300"></i>
                <span><?php echo __('prog_platform_title'); ?></span>
            </a>
            <a href="chuong-trinh-journey.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all text-slate-600 hover:text-[#D97706] hover:bg-amber-50/50">
                <i data-lucide="rocket" class="w-4 h-4"></i>
                <span><?php echo __('prog_journey_title'); ?></span>
            </a>
            <a href="chuong-trinh-sme.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all text-slate-600 hover:text-[#059669] hover:bg-emerald-50/50">
                <i data-lucide="shopping-bag" class="w-4 h-4"></i>
                <span><?php echo __('prog_sme_title'); ?></span>
            </a>
            <a href="chuong-trinh-talent.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all text-slate-600 hover:text-[#7C3AED] hover:bg-purple-50/50">
                <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                <span><?php echo __('prog_talent_title'); ?></span>
            </a>
        </div>

        <!-- HERO BANNER KÍNH MỜ CAO CẤP (Figma CiNEC Dark Navy) -->
        <div class="relative rounded-[28px] lg:rounded-[36px] bg-gradient-to-br from-[#02155B] via-[#062AAD] to-[#041a75] text-white p-8 sm:p-12 lg:p-16 overflow-hidden shadow-2xl border border-blue-800/40">
            <!-- Quầng sáng hiệu ứng nền -->
            <div class="absolute -right-24 -top-24 w-96 h-96 bg-[#05A6F5]/25 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute right-1/4 -bottom-24 w-80 h-80 bg-blue-400/15 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 max-w-4xl space-y-6 text-left">
                <!-- Badges -->
                <div class="flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center gap-2 bg-blue-500/20 border border-blue-400/40 text-cyan-200 px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider backdrop-blur-md">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                        <?php echo $is_en ? 'COMPONENT PROGRAM 01' : 'CHƯƠNG TRÌNH THÀNH PHẦN 01'; ?>
                    </span>
                    <span class="inline-flex items-center gap-1.5 bg-white/10 text-white/90 px-3 py-1 rounded-full text-[11px] font-medium border border-white/20">
                        <i data-lucide="shield-check" class="w-3.5 h-3.5 text-cyan-300"></i>
                        <?php echo $is_en ? 'Institutions & Open Data' : 'Thể chế & Dữ liệu số'; ?>
                    </span>
                </div>

                <!-- Tiêu đề lớn -->
                <div class="space-y-2">
                    <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-bold tracking-tight leading-tight text-white">
                        <?php echo $is_en ? 'Ca Mau Innovation Platform' : 'Nền Tảng Đổi Mới Sáng Tạo Cà Mau'; ?>
                    </h1>
                    <p class="text-[13px] font-bold uppercase tracking-widest text-[#C1FF72]">
                        Ca Mau Innovation Platform (CiNEC Platform)
                    </p>
                </div>

                <!-- Đoạn mô tả -->
                <p class="text-[15px] sm:text-[16px] text-blue-100/90 font-normal leading-relaxed max-w-3xl">
                    <?php echo $is_en 
                        ? 'Establishing institutional frameworks, Sandbox testing policies, digital decision-making databases, and strategic solutions to elevate Ca Mau’s Provincial Innovation Index (PII), laying a firm foundation for the regional ecosystem.'
                        : 'Kiến tạo thể chế, khung chính sách thử nghiệm Sandbox, cổng dữ liệu số phục vụ điều hành và chiến lược nâng cao Bộ chỉ số Đổi mới sáng tạo cấp địa phương (PII), làm nền móng vững chắc cho toàn hệ sinh thái tỉnh Cà Mau.'; ?>
                </p>

                <!-- 3 Thẻ chỉ số Glassmorphism -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 max-w-2xl">
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-cyan-300 leading-tight">100%</div>
                        <div class="text-[12px] text-blue-200/80 font-medium"><?php echo $is_en ? 'Ecosystem coverage' : 'Bao phủ hệ sinh thái'; ?></div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-cyan-300 leading-tight">Sandbox</div>
                        <div class="text-[12px] text-blue-200/80 font-medium"><?php echo $is_en ? 'Open testing policies' : 'Quy chế thử nghiệm mở'; ?></div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-cyan-300 leading-tight">PII Index</div>
                        <div class="text-[12px] text-blue-200/80 font-medium"><?php echo $is_en ? 'Provincial rank improvement' : 'Cải thiện chỉ số cấp tỉnh'; ?></div>
                    </div>
                </div>

                <!-- Nút CTA -->
                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="#dang-ky" class="bg-[#05A6F5] hover:bg-cyan-400 text-white hover:text-slate-900 font-semibold text-[14px] rounded-full pl-6 pr-2 py-2 transition-all duration-300 shadow-lg hover:shadow-cyan-500/30 inline-flex items-center gap-3 group">
                        <span><?php echo $is_en ? 'Join Innovation Network' : 'Đăng ký tham gia Mạng lưới ĐMST'; ?></span>
                        <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </a>
                    <a href="lien-he.php" class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-semibold text-[14px] rounded-full px-6 py-3 transition-all duration-300">
                        <span><?php echo $is_en ? 'Propose Sandbox Framework' : 'Đề xuất Khung thử nghiệm Sandbox'; ?></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- KHỐI ĐỊNH VỊ CHỨC NĂNG & ĐỐI TƯỢNG HƯỚNG TỚI (2 Cột) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
            <div class="bg-white rounded-[24px] p-6 sm:p-8 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[#05A6F5]/10 text-[#05A6F5] flex items-center justify-center border border-[#05A6F5]/20">
                    <i data-lucide="compass" class="w-6 h-6"></i>
                </div>
                <div class="space-y-1.5">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-[#05A6F5]">
                        <?php echo $is_en ? 'CORE FUNCTION' : 'ĐỊNH VỊ CHỨC NĂNG'; ?>
                    </span>
                    <h3 class="text-[20px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Main Objectives' : 'Chức Năng Chính'; ?>
                    </h3>
                    <p class="text-[14px] text-[#5B5B5B] leading-relaxed">
                        <?php echo $is_en 
                            ? 'Institutional infrastructure, controlled Sandbox regulatory frameworks for new technologies and business models, digital operational databases, and action plans to boost Ca Mau’s PII Index.'
                            : 'Hạ tầng thể chế, quy chế sandbox thử nghiệm cho các công nghệ và mô hình kinh doanh mới, hệ thống cơ sở dữ liệu số hỗ trợ điều hành và kế hoạch hành động cải thiện Bộ chỉ số Đổi mới sáng tạo (PII) tỉnh Cà Mau.'; ?>
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-[24px] p-6 sm:p-8 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[#062AAD]/10 text-[#062AAD] flex items-center justify-center border border-[#062AAD]/20">
                    <i data-lucide="users" class="w-6 h-6"></i>
                </div>
                <div class="space-y-1.5">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-[#062AAD]">
                        <?php echo $is_en ? 'TARGET BENEFICIARIES' : 'ĐỐI TƯỢNG HƯỚNG TỚI'; ?>
                    </span>
                    <h3 class="text-[20px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Participants' : 'Đối Tượng Tham Gia'; ?>
                    </h3>
                    <p class="text-[14px] text-[#5B5B5B] leading-relaxed">
                        <?php echo $is_en 
                            ? 'The entire innovation ecosystem: Enterprises, research institutes, universities, cooperatives, advisors, mentors, and the startup community across Ca Mau province.'
                            : 'Toàn hệ sinh thái đổi mới sáng tạo: Doanh nghiệp, tổ chức khoa học công nghệ, trường đại học, viện nghiên cứu, hợp tác xã, chuyên gia cố vấn và cộng đồng khởi nghiệp trên địa bàn tỉnh Cà Mau.'; ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- 4 TRỤ CỘT TRỌNG TÂM THỰC THI (Lưới 4 Card chuẩn Figma) -->
        <div class="space-y-6 text-left">
            <div class="space-y-1">
                <span class="text-[11px] font-bold uppercase tracking-wider text-[#05A6F5]">
                    <?php echo $is_en ? 'KEY IMPLEMENTATION PILLARS' : 'NỘI DUNG CHỦ YẾU'; ?>
                </span>
                <h2 class="text-[24px] sm:text-[28px] font-bold text-[#062AAD]">
                    <?php echo $is_en ? '04 Core Action Pillars' : '4 Trụ Cột Triển Khai Chương Trình'; ?>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Trụ cột 1 -->
                <div class="bg-white rounded-[24px] p-6 border border-slate-200/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center border border-blue-200/60 group-hover:scale-105 transition-transform">
                        <i data-lucide="scale" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">
                            <?php echo $is_en ? 'Policy Framework & Sandbox' : 'Khung Chính Sách & Quy Chế Sandbox'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Building a safe, controlled regulatory testing environment for digital business models, circular agriculture, and carbon credits.'
                                : 'Xây dựng môi trường pháp lý thử nghiệm an toàn có kiểm soát cho các mô hình kinh doanh số, nông nghiệp tuần hoàn và tín chỉ carbon.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Trụ cột 2 -->
                <div class="bg-white rounded-[24px] p-6 border border-slate-200/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-cyan-50 text-[#05A6F5] flex items-center justify-center border border-cyan-200/60 group-hover:scale-105 transition-transform">
                        <i data-lucide="database" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">
                            <?php echo $is_en ? 'Ca Mau Innovation Data Portal' : 'Cổng Dữ Liệu ĐMST Cà Mau'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Gathering, analyzing, and sharing open data on technology, IP, enterprises, and markets to support timely policy-making.'
                                : 'Thu thập, phân tích và chia sẻ dữ liệu mở về công nghệ, sở hữu trí tuệ, doanh nghiệp và thị trường hỗ trợ ra quyết định kịp thời.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Trụ cột 3 -->
                <div class="bg-white rounded-[24px] p-6 border border-slate-200/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center border border-blue-200/60 group-hover:scale-105 transition-transform">
                        <i data-lucide="bar-chart-3" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">
                            <?php echo $is_en ? 'Measuring & Boosting PII Index' : 'Đo Lường & Thúc Đẩy Chỉ Số PII'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Annual monitoring system for 52 local PII indicators, identifying bottlenecks, and proposing tailored improvement roadmaps.'
                                : 'Hệ thống giám sát 52 chỉ số PII cấp địa phương hàng năm, nhận diện điểm nghẽn và đề xuất gói giải pháp cải thiện cụ thể.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Trụ cột 4 -->
                <div class="bg-white rounded-[24px] p-6 border border-slate-200/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-cyan-50 text-[#05A6F5] flex items-center justify-center border border-cyan-200/60 group-hover:scale-105 transition-transform">
                        <i data-lucide="network" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">
                            <?php echo $is_en ? 'Expert & Advisor Network' : 'Mạng Lưới Chuyên Gia & Cố Vấn'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Over 180 leading domestic and global experts participating in strategic advisory councils and policy consultations for Ca Mau.'
                                : 'Hơn 180 chuyên gia đầu ngành trong nước và quốc tế tham gia các hội đồng tư vấn chiến lược, phản biện chính sách cho tỉnh.'; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FORM ĐĂNG KÝ THAM GIA MẠNG LƯỚI / ĐỀ XUẤT SANDBOX -->
        <div id="dang-ky" class="bg-white rounded-[28px] lg:rounded-[36px] p-8 sm:p-12 border border-slate-200/80 shadow-md">
            <div class="max-w-2xl mx-auto space-y-6 text-center">
                <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200/60 text-[#062AAD] px-4 py-1 rounded-full text-[12px] font-bold uppercase tracking-wider">
                    <i data-lucide="send" class="w-3.5 h-3.5"></i>
                    <?php echo $is_en ? 'PARTICIPATION REGISTRATION' : 'ĐĂNG KÝ THAM GIA'; ?>
                </div>
                <div class="space-y-2">
                    <h3 class="text-[24px] sm:text-[30px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Join Ca Mau Innovation Network' : 'Đăng Ký Tham Gia Mạng Lưới Đổi Mới Sáng Tạo'; ?>
                    </h3>
                    <p class="text-[14px] text-[#5B5B5B]">
                        <?php echo $is_en 
                            ? 'Submit your individual or organizational profile to connect into the expert database and receive the latest Sandbox policy releases.'
                            : 'Hãy gửi thông tin của bạn hoặc tổ chức để được kết nối vào cơ sở dữ liệu chuyên gia và nhận các bản tin chính sách Sandbox mới nhất.'; ?>
                    </p>
                </div>

                <form class="space-y-4 text-left pt-2" onsubmit="event.preventDefault(); alert('<?php echo $is_en ? 'Thank you! Your registration has been submitted to CiNEC Platform Coordination Board.' : 'Cảm ơn bạn! Thông tin đăng ký đã được chuyển đến Ban điều phối CiNEC Platform.'; ?>'); this.reset();">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Full Name *' : 'Họ và tên *'; ?></label>
                            <input type="text" required placeholder="<?php echo $is_en ? 'John Doe' : 'Nguyễn Văn A'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-[#062AAD]">
                        </div>
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Organization / Company' : 'Tên cơ quan / Doanh nghiệp'; ?></label>
                            <input type="text" placeholder="<?php echo $is_en ? 'Company / University / Institute...' : 'Công ty / Trường / Viện...'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-[#062AAD]">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Email Address *' : 'Email liên hệ *'; ?></label>
                            <input type="email" required placeholder="email@example.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-[#062AAD]">
                        </div>
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Phone Number *' : 'Số điện thoại *'; ?></label>
                            <input type="tel" required placeholder="0901234567" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-[#062AAD]">
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Field of interest or Sandbox proposal' : 'Lĩnh vực quan tâm hoặc đề xuất Sandbox'; ?></label>
                        <textarea rows="3" placeholder="<?php echo $is_en ? 'Briefly describe your proposed contribution or testing model...' : 'Mô tả tóm tắt nội dung bạn muốn đóng góp hoặc đề xuất...'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-[#062AAD]"></textarea>
                    </div>
                    <div class="text-center pt-2">
                        <button type="submit" class="bg-[#062AAD] hover:bg-[#02185D] text-white font-semibold text-[14px] rounded-full px-8 py-3.5 transition-all shadow-md hover:shadow-lg inline-flex items-center gap-2">
                            <span><?php echo $is_en ? 'Submit Application' : 'Gửi Hồ Sơ Tham Gia'; ?></span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
