<?php
require_once 'config/db.php';
require_once 'config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
$page_title = $is_en ? "Ca Mau Digital Talent & Innovation Academy - CiNEC" : "Nhân tài số Cà Mau (Ca Mau Digital Talent) - CiNEC";
require_once 'includes/header.php';

$program = $mockPrograms['TALENT'];
$current_prog = 'TALENT';
?>

<!-- TRANG CHƯƠNG TRÌNH 04: NHÂN TÀI SỐ BILINGUAL -->
<div class="bg-[#F7FAFD] min-h-screen pt-28 pb-20 font-sans">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-10">

        <!-- THANH CHUYỂN ĐỔI 4 CHƯƠNG TRÌNH THÀNH PHẦN (Pill Switcher) -->
        <div class="bg-white rounded-2xl lg:rounded-full p-2 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] grid grid-cols-2 lg:grid-cols-4 gap-2">
            <a href="chuong-trinh-platform.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all text-slate-600 hover:text-[#062AAD] hover:bg-blue-50/50">
                <i data-lucide="layers" class="w-4 h-4"></i>
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
            <a href="chuong-trinh-talent.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all bg-[#7C3AED] text-white shadow-md">
                <i data-lucide="graduation-cap" class="w-4 h-4 text-purple-200"></i>
                <span><?php echo __('prog_talent_title'); ?></span>
            </a>
        </div>

        <!-- HERO BANNER KÍNH MỜ CAO CẤP (Figma Dark Navy với quầng sáng Purple/Indigo) -->
        <div class="relative rounded-[28px] lg:rounded-[36px] bg-gradient-to-br from-[#02155B] via-[#1a1354] to-[#340954] text-white p-8 sm:p-12 lg:p-16 overflow-hidden shadow-2xl border border-purple-500/30">
            <!-- Quầng sáng hiệu ứng nền -->
            <div class="absolute -right-24 -top-24 w-96 h-96 bg-[#7C3AED]/25 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute right-1/4 -bottom-24 w-80 h-80 bg-purple-400/15 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 max-w-4xl space-y-6 text-left">
                <!-- Badges -->
                <div class="flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center gap-2 bg-purple-500/20 border border-purple-400/40 text-purple-200 px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider backdrop-blur-md">
                        <span class="w-2 h-2 rounded-full bg-purple-400 animate-pulse"></span>
                        <?php echo $is_en ? 'COMPONENT PROGRAM 04' : 'CHƯƠNG TRÌNH THÀNH PHẦN 04'; ?>
                    </span>
                    <span class="inline-flex items-center gap-1.5 bg-white/10 text-white/90 px-3 py-1 rounded-full text-[11px] font-medium border border-white/20">
                        <i data-lucide="sparkles" class="w-3.5 h-3.5 text-purple-300"></i>
                        <?php echo $is_en ? 'Scholarships & Entrepreneurial Universities' : 'Học bổng & Đại học Khởi nghiệp'; ?>
                    </span>
                </div>

                <!-- Tiêu đề lớn -->
                <div class="space-y-2">
                    <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-bold tracking-tight leading-tight text-white">
                        <?php echo $is_en ? 'Ca Mau Digital Talent' : 'Nhân Tài Số Cà Mau'; ?>
                    </h1>
                    <p class="text-[13px] font-bold uppercase tracking-widest text-[#C1FF72]">
                        Ca Mau Digital Talent & Innovation Academy
                    </p>
                </div>

                <!-- Đoạn mô tả -->
                <p class="text-[15px] sm:text-[16px] text-purple-100/90 font-normal leading-relaxed max-w-3xl">
                    <?php echo $is_en 
                        ? 'Cultivating future digital talent for Ca Mau through advanced scholarships in AI, Data, Emerging Tech, and accelerating Entrepreneurial University models across local colleges and universities.'
                        : 'Ươm mầm và phát triển thế hệ tài năng số tương lai cho tỉnh Cà Mau thông qua các gói học bổng chuyên sâu về AI, Dữ liệu, Công nghệ mới và chuyển đổi mô hình Đại học Khởi nghiệp trong các trường Cao đẳng, Đại học địa phương.'; ?>
                </p>

                <!-- 3 Thẻ chỉ số Glassmorphism -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 max-w-2xl">
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-purple-300 leading-tight">500+</div>
                        <div class="text-[12px] text-purple-200/80 font-medium"><?php echo $is_en ? 'Students & engineers trained' : 'Học sinh, sinh viên được đào tạo'; ?></div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-purple-300 leading-tight">50+</div>
                        <div class="text-[12px] text-purple-200/80 font-medium"><?php echo $is_en ? 'Talent scholarships awarded' : 'Suất học bổng tài năng số'; ?></div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-purple-300 leading-tight">10+</div>
                        <div class="text-[12px] text-purple-200/80 font-medium"><?php echo $is_en ? 'Partner universities & colleges' : 'Trường Đại học, Cao đẳng liên kết'; ?></div>
                    </div>
                </div>

                <!-- Nút CTA -->
                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="#dang-ky" class="bg-[#7C3AED] hover:bg-purple-600 text-white font-semibold text-[14px] rounded-full pl-6 pr-2 py-2 transition-all duration-300 shadow-lg hover:shadow-purple-500/30 inline-flex items-center gap-3 group">
                        <span><?php echo $is_en ? 'Apply for Talent Scholarship' : 'Đăng ký Học bổng Tài năng số'; ?></span>
                        <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </a>
                    <a href="chuong-trinh-journey.php" class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-semibold text-[14px] rounded-full px-6 py-3 transition-all duration-300">
                        <span><?php echo $is_en ? 'Join Innovation Bootcamp' : 'Tham gia Bootcamp Khởi nghiệp'; ?></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- KHỐI ĐỊNH VỊ CHỨC NĂNG & ĐỐI TƯỢNG HƯỚNG TỚI (2 Cột) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
            <div class="bg-white rounded-[24px] p-6 sm:p-8 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[#7C3AED]/10 text-[#7C3AED] flex items-center justify-center border border-[#7C3AED]/20">
                    <i data-lucide="compass" class="w-6 h-6"></i>
                </div>
                <div class="space-y-1.5">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-[#7C3AED]">
                        <?php echo $is_en ? 'CORE FUNCTION' : 'ĐỊNH VỊ CHỨC NĂNG'; ?>
                    </span>
                    <h3 class="text-[20px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Main Objectives' : 'Chức Năng Chính'; ?>
                    </h3>
                    <p class="text-[14px] text-[#5B5B5B] leading-relaxed">
                        <?php echo $is_en 
                            ? 'Discovering, nurturing, and retaining high-caliber human resources in digital tech, equipping innovation mindsets, and commercializing scientific research into real-world applications.'
                            : 'Phát hiện, bồi dưỡng và giữ chân nguồn nhân lực chất lượng cao trong các lĩnh vực công nghệ số, trang bị tư duy đổi mới sáng tạo và chuyển giao kết quả nghiên cứu khoa học vào đời sống.'; ?>
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
                        <?php echo $is_en ? 'Supported Participants' : 'Đối Tượng Hỗ Trợ'; ?>
                    </h3>
                    <p class="text-[14px] text-[#5B5B5B] leading-relaxed">
                        <?php echo $is_en 
                            ? 'Talented high school students, college and university students, young intellectuals, lecturers, researchers, and professionals seeking digital upskilling in Ca Mau.'
                            : 'Học sinh THPT tài năng, sinh viên các trường Đại học, Cao đẳng, thanh niên trí thức, giảng viên, nhà nghiên cứu trẻ và người lao động có nguyện vọng nâng cao kỹ năng số tại Cà Mau.'; ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- 4 HỢP PHẦN TRỌNG TÂM CỦA NHÂN TÀI SỐ -->
        <div class="space-y-6 text-left">
            <div class="space-y-1">
                <span class="text-[11px] font-bold uppercase tracking-wider text-[#7C3AED]">
                    <?php echo $is_en ? 'ACTION PILLARS' : 'CHƯƠNG TRÌNH HÀNH ĐỘNG'; ?>
                </span>
                <h2 class="text-[24px] sm:text-[28px] font-bold text-[#062AAD]">
                    <?php echo $is_en ? '04 Talent Development Pillars' : '4 Hợp Phần Phát Triển Nguồn Nhân Lực'; ?>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Hợp phần 1 -->
                <div class="bg-white rounded-[24px] p-6 border-2 border-purple-200 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-purple-50 text-[#7C3AED] flex items-center justify-center border border-purple-200 group-hover:scale-105 transition-transform">
                        <i data-lucide="award" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#7C3AED] transition-colors">
                            <?php echo $is_en ? 'Digital Talent Scholarships' : 'Học Bổng Tài Năng Số'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Full and partial tuition funding for international certification courses in Artificial Intelligence (AI), Data Analytics, and Full-stack Development.'
                                : 'Tài trợ toàn phần hoặc bán phần học phí các khóa đào tạo chứng chỉ quốc tế về Trí tuệ nhân tạo (AI), Phân tích dữ liệu và Lập trình ứng dụng.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Hợp phần 2 -->
                <div class="bg-white rounded-[24px] p-6 border-2 border-purple-300 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-purple-100 text-[#7C3AED] flex items-center justify-center border border-purple-300 group-hover:scale-105 transition-transform">
                        <i data-lucide="landmark" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#7C3AED] transition-colors">
                            <?php echo $is_en ? 'Entrepreneurial Universities' : 'Đại Học Khởi Nghiệp'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Partnering with Binh Duong University (Ca Mau Campus) and Community College to establish Fablabs and student startup clubs.'
                                : 'Liên kết với Đại học Bình Dương (Phân hiệu Cà Mau), CĐ Cộng đồng thành lập không gian Fablab và Câu lạc bộ khởi nghiệp sinh viên.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Hợp phần 3 -->
                <div class="bg-white rounded-[24px] p-6 border-2 border-purple-400 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-purple-500 text-white flex items-center justify-center group-hover:scale-105 transition-transform">
                        <i data-lucide="flame" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#7C3AED] transition-colors">
                            <?php echo $is_en ? 'Hands-on Innovation Bootcamps' : 'Bootcamp ĐMST Thực Chiến'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Intensive 3-7 day training sprints solving real-world challenges for local enterprises using Design Thinking methodologies.'
                                : 'Các kỳ huấn luyện tập trung từ 3 - 7 ngày giải quyết các bài toán thực tiễn của doanh nghiệp địa phương theo phương pháp Design Thinking.'; ?>
                        </p>
                    </div>
                </div>

                <!-- Hợp phần 4 -->
                <div class="bg-white rounded-[24px] p-6 border-2 border-[#062AAD]/30 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#062AAD] flex items-center justify-center border border-blue-200 group-hover:scale-105 transition-transform">
                        <i data-lucide="briefcase" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[16px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">
                            <?php echo $is_en ? 'Career & Placement Bridge' : 'Cầu Nối Tuyển Dụng & Việc Làm'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Directly matching graduates into startups at CiNEC incubator and our network of digital enterprises across Ca Mau.'
                                : 'Kết nối học viên tốt nghiệp trực tiếp với các dự án khởi nghiệp trong vườn ươm CiNEC và mạng lưới doanh nghiệp số tại Cà Mau.'; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FORM ĐĂNG KÝ HỌC BỔNG / KHÓA ĐÀO TẠO -->
        <div id="dang-ky" class="bg-white rounded-[28px] lg:rounded-[36px] p-8 sm:p-12 border border-slate-200/80 shadow-md">
            <div class="max-w-2xl mx-auto space-y-6 text-center">
                <div class="inline-flex items-center gap-2 bg-purple-50 border border-purple-200 text-purple-700 px-4 py-1 rounded-full text-[12px] font-bold uppercase tracking-wider">
                    <i data-lucide="graduation-cap" class="w-3.5 h-3.5"></i>
                    <?php echo $is_en ? 'TALENT SCHOLARSHIP REGISTRATION' : 'ĐĂNG KÝ HỌC BỔNG SỐ'; ?>
                </div>
                <div class="space-y-2">
                    <h3 class="text-[24px] sm:text-[30px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Apply for Digital Talent Scholarship' : 'Đăng Ký Xét Tuyển Học Bổng Nhân Tài Số'; ?>
                    </h3>
                    <p class="text-[14px] text-[#5B5B5B]">
                        <?php echo $is_en 
                            ? 'Students and young professionals submit your profiles for review by the scholarship council and interview scheduling.'
                            : 'Học sinh, sinh viên hoặc người đi làm gửi thông tin để được hội đồng xét duyệt học bổng và xếp lịch phỏng vấn tham gia khóa đào tạo.'; ?>
                    </p>
                </div>

                <form class="space-y-4 text-left pt-2" onsubmit="event.preventDefault(); alert('<?php echo $is_en ? 'Thank you! Your scholarship application has been submitted.' : 'Cảm ơn bạn! Hồ sơ xin xét duyệt học bổng đã được gửi đi.'; ?>'); this.reset();">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Applicant Full Name *' : 'Họ và tên học viên *'; ?></label>
                            <input type="text" required placeholder="<?php echo $is_en ? 'John Doe' : 'Nguyễn Văn A'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-purple-500">
                        </div>
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'School / Organization' : 'Trường / Đơn vị công tác'; ?></label>
                            <input type="text" placeholder="<?php echo $is_en ? 'University / High School / Company...' : 'Đại học / THPT / Công ty...'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-purple-500">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Personal Email *' : 'Email cá nhân *'; ?></label>
                            <input type="email" required placeholder="student@example.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-purple-500">
                        </div>
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Phone Number *' : 'Số điện thoại *'; ?></label>
                            <input type="tel" required placeholder="0901234567" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-purple-500">
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Desired Training Track *' : 'Chương trình muốn ứng tuyển *'; ?></label>
                        <select class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-purple-500 bg-white">
                            <option><?php echo $is_en ? 'Artificial Intelligence & Data Talent Scholarship' : 'Học bổng Tài năng Trí tuệ nhân tạo (AI & Data)'; ?></option>
                            <option><?php echo $is_en ? 'Web & Mobile App Development Scholarship' : 'Học bổng Lập trình Web & Ứng dụng Di động'; ?></option>
                            <option><?php echo $is_en ? 'Student Innovation & Entrepreneurship Bootcamp' : 'Bootcamp Đổi mới sáng tạo & Khởi nghiệp sinh viên'; ?></option>
                            <option><?php echo $is_en ? 'Join Student Startup Club' : 'Đăng ký tham gia Câu lạc bộ Khởi nghiệp'; ?></option>
                        </select>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Motivation & Key Achievements (if any)' : 'Lý do ứng tuyển & Thành tích nổi bật (nếu có)'; ?></label>
                        <textarea rows="3" placeholder="<?php echo $is_en ? 'Share your tech passion or projects you participated in...' : 'Chia sẻ đam mê công nghệ hoặc dự án bạn từng tham gia...'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-purple-500"></textarea>
                    </div>
                    <div class="text-center pt-2">
                        <button type="submit" class="bg-[#7C3AED] hover:bg-purple-700 text-white font-semibold text-[14px] rounded-full px-8 py-3.5 transition-all shadow-md hover:shadow-lg inline-flex items-center gap-2">
                            <span><?php echo $is_en ? 'Submit Application' : 'Gửi Hồ Sơ Ứng Tuyển'; ?></span>
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
