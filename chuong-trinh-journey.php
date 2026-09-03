<?php
require_once 'config/db.php';
require_once 'config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
$page_title = $is_en ? "Ca Mau Startup Journey (Incubation & Acceleration) - CiNEC" : "Hành trình Khởi nghiệp Cà Mau (Ca Mau Startup Journey) - CiNEC";
require_once 'includes/header.php';

$program = $mockPrograms['JOURNEY'];
$current_prog = 'JOURNEY';
?>

<!-- TRANG CHƯƠNG TRÌNH 02: HÀNH TRÌNH KHỞI NGHIỆP BILINGUAL -->
<div class="bg-[#F7FAFD] min-h-screen pt-28 pb-20 font-sans">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-10">

        <!-- THANH CHUYỂN ĐỔI 4 CHƯƠNG TRÌNH THÀNH PHẦN (Pill Switcher) -->
        <div class="bg-white rounded-2xl lg:rounded-full p-2 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] grid grid-cols-2 lg:grid-cols-4 gap-2">
            <a href="chuong-trinh-platform.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all text-slate-600 hover:text-[#062AAD] hover:bg-blue-50/50">
                <i data-lucide="layers" class="w-4 h-4"></i>
                <span><?php echo __('prog_platform_title'); ?></span>
            </a>
            <a href="chuong-trinh-journey.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all bg-[#D97706] text-white shadow-md">
                <i data-lucide="rocket" class="w-4 h-4 text-amber-200"></i>
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

        <!-- HERO BANNER KÍNH MỜ CAO CẤP (Figma Dark Navy với quầng sáng Amber/Gold) -->
        <div class="relative rounded-[28px] lg:rounded-[36px] bg-gradient-to-br from-[#02155B] via-[#091b5a] to-[#2c1a06] text-white p-8 sm:p-12 lg:p-16 overflow-hidden shadow-2xl border border-amber-500/30">
            <!-- Quầng sáng hiệu ứng nền -->
            <div class="absolute -right-24 -top-24 w-96 h-96 bg-[#D97706]/25 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute right-1/4 -bottom-24 w-80 h-80 bg-amber-400/15 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 max-w-4xl space-y-6 text-left">
                <!-- Badges -->
                <div class="flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center gap-2 bg-amber-500/20 border border-amber-400/40 text-amber-200 px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider backdrop-blur-md">
                        <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                        <?php echo $is_en ? 'COMPONENT PROGRAM 02' : 'CHƯƠNG TRÌNH THÀNH PHẦN 02'; ?>
                    </span>
                    <span class="inline-flex items-center gap-1.5 bg-white/10 text-white/90 px-3 py-1 rounded-full text-[11px] font-medium border border-white/20">
                        <i data-lucide="repeat" class="w-3.5 h-3.5 text-amber-300"></i>
                        <?php echo $is_en ? '4-Step Incubation Pipeline' : 'Quy trình liên thông 4 bước'; ?>
                    </span>
                </div>

                <!-- Tiêu đề lớn -->
                <div class="space-y-2">
                    <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-bold tracking-tight leading-tight text-white">
                        <?php echo $is_en ? 'Ca Mau Startup Journey' : 'Hành Trình Khởi Nghiệp Cà Mau'; ?>
                    </h1>
                    <p class="text-[13px] font-bold uppercase tracking-widest text-[#C1FF72]">
                        <?php echo $is_en ? 'Ca Mau Startup Journey (Sourcing • Incubation • Acceleration • Scaling)' : 'Ca Mau Startup Journey (Săn nguồn • Ươm tạo • Tăng tốc • Mở rộng)'; ?>
                    </p>
                </div>

                <!-- Đoạn mô tả -->
                <p class="text-[15px] sm:text-[16px] text-amber-100/90 font-normal leading-relaxed max-w-3xl">
                    <?php echo $is_en 
                        ? 'A comprehensive 04-step incubation pipeline: sourcing projects via annual competitions, 6-12 month incubation with shared technical laboratories, 3-6 month acceleration with 1:1 co-funding, through market scaling and venture capital access.'
                        : 'Quy trình hỗ trợ liên thông 04 bước khép kín từ săn tìm ý tưởng cuộc thi, ươm tạo 6-12 tháng tại Lab dùng chung, tăng tốc doanh thu có cơ chế đồng tài trợ 1:1 từ ngân sách, đến mở rộng quy mô thị trường và gọi vốn đầu tư mạo hiểm.'; ?>
                </p>

                <!-- 3 Thẻ chỉ số Glassmorphism -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 max-w-2xl">
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-amber-300 leading-tight"><?php echo $is_en ? '4 Steps' : '4 Bước'; ?></div>
                        <div class="text-[12px] text-amber-200/80 font-medium"><?php echo $is_en ? 'Continuous incubation pipeline' : 'Quy trình liên thông khép kín'; ?></div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-amber-300 leading-tight">6 - 12M</div>
                        <div class="text-[12px] text-amber-200/80 font-medium"><?php echo $is_en ? 'Shared Lab incubation' : 'Ươm tạo tại Lab dùng chung'; ?></div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-amber-300 leading-tight">1 : 1</div>
                        <div class="text-[12px] text-amber-200/80 font-medium"><?php echo $is_en ? 'Matching co-funding' : 'Đồng tài trợ vốn đối ứng'; ?></div>
                    </div>
                </div>

                <!-- Nút CTA -->
                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="#dang-ky" class="bg-[#D97706] hover:bg-amber-500 text-white font-semibold text-[14px] rounded-full pl-6 pr-2 py-2 transition-all duration-300 shadow-lg hover:shadow-amber-500/30 inline-flex items-center gap-3 group">
                        <span><?php echo $is_en ? 'Submit Startup Proposal' : 'Nộp hồ sơ dự án khởi nghiệp'; ?></span>
                        <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </a>
                    <a href="doi-tac.php?tab=mentors" class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-semibold text-[14px] rounded-full px-6 py-3 transition-all duration-300">
                        <span><?php echo $is_en ? 'Find Startup Mentors' : 'Tìm chuyên gia Mentors'; ?></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- SƠ ĐỒ ROADMAP QUY TRÌNH LIÊN THÔNG 4 BƯỚC -->
        <div class="space-y-6 text-left">
            <div class="space-y-1">
                <span class="text-[11px] font-bold uppercase tracking-wider text-[#D97706]">
                    <?php echo $is_en ? 'EXECUTION ROADMAP' : 'TIẾN TRÌNH THỰC THI'; ?>
                </span>
                <h2 class="text-[24px] sm:text-[28px] font-bold text-[#062AAD]">
                    <?php echo $is_en ? '04-Step Continuous Startup Pipeline' : 'Quy Trình Liên Thông 04 Bước Hỗ Trợ Khởi Nghiệp'; ?>
                </h2>
                <p class="text-[14px] text-[#5B5B5B] max-w-3xl">
                    <?php echo $is_en 
                        ? 'An unbroken support model accompanying founders from raw concepts to market scaling and investment readiness.'
                        : 'Mô hình hỗ trợ liên tục không đứt gãy, đồng hành cùng nhà sáng lập từ giai đoạn ý tưởng sơ khai đến khi doanh nghiệp sẵn sàng tăng trưởng và gọi vốn.'; ?>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                <!-- Bước 1 -->
                <div class="bg-white rounded-[24px] p-6 border-2 border-amber-200 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 relative group">
                    <div class="flex items-center justify-between">
                        <span class="text-[12px] font-bold uppercase px-3 py-1 rounded-full bg-amber-50 text-amber-700 border border-amber-200">
                            <?php echo $is_en ? 'STEP 1' : 'BƯỚC 1'; ?>
                        </span>
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center">
                            <i data-lucide="search" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[17px] font-bold text-[#02185D] group-hover:text-amber-700 transition-colors">
                            <?php echo $is_en ? 'Sourcing & Pre-Incubation' : 'Săn Nguồn & Tiền Ươm Tạo'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Scouting high-potential ideas through annual startup competitions. Supplying seed funding and early business model refinement.'
                                : 'Tìm kiếm ý tưởng xuất sắc thông qua các cuộc thi khởi nghiệp Cà Mau hàng năm. Cung cấp gói vốn mồi giai đoạn sơ khai và định hình mô hình kinh doanh ban đầu.'; ?>
                        </p>
                    </div>
                    <div class="pt-2 border-t border-slate-100 flex items-center gap-2 text-[12px] text-amber-700 font-semibold">
                        <i data-lucide="check-circle" class="w-4 h-4"></i>
                        <span><?php echo $is_en ? 'Seed Grants & Selection' : 'Vốn mồi & Tuyển chọn'; ?></span>
                    </div>
                </div>

                <!-- Bước 2 -->
                <div class="bg-white rounded-[24px] p-6 border-2 border-amber-300 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 relative group">
                    <div class="flex items-center justify-between">
                        <span class="text-[12px] font-bold uppercase px-3 py-1 rounded-full bg-amber-100/70 text-amber-800 border border-amber-300">
                            <?php echo $is_en ? 'STEP 2' : 'BƯỚC 2'; ?>
                        </span>
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center">
                            <i data-lucide="cpu" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[17px] font-bold text-[#02185D] group-hover:text-amber-700 transition-colors">
                            <?php echo $is_en ? '6 - 12 Month Incubation' : 'Ươm Tạo 6 - 12 Tháng'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Intensive mentoring and access to shared technical labs, prototyping support for Minimum Viable Products (MVP) and IP filing.'
                                : 'Huấn luyện kỹ năng chuyên sâu kết hợp sử dụng phòng thí nghiệm kỹ thuật (Lab) dùng chung, hỗ trợ hoàn thiện mẫu thử nghiệm (MVP) và đăng ký sở hữu trí tuệ.'; ?>
                        </p>
                    </div>
                    <div class="pt-2 border-t border-slate-100 flex items-center gap-2 text-[12px] text-amber-700 font-semibold">
                        <i data-lucide="check-circle" class="w-4 h-4"></i>
                        <span><?php echo $is_en ? 'MVP Product Delivery' : 'Hoàn thiện sản phẩm MVP'; ?></span>
                    </div>
                </div>

                <!-- Bước 3 -->
                <div class="bg-white rounded-[24px] p-6 border-2 border-amber-400 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 relative group">
                    <div class="flex items-center justify-between">
                        <span class="text-[12px] font-bold uppercase px-3 py-1 rounded-full bg-amber-500 text-white font-bold">
                            <?php echo $is_en ? 'STEP 3' : 'BƯỚC 3'; ?>
                        </span>
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center">
                            <i data-lucide="trending-up" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[17px] font-bold text-[#02185D] group-hover:text-amber-700 transition-colors">
                            <?php echo $is_en ? 'Acceleration (1:1 Co-funding)' : 'Tăng Tốc (Đồng tài trợ 1:1)'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'A 3-6 month growth sprint accelerating sales traction with a transparent 1:1 matching grant mechanism from provincial innovation funds.'
                                : 'Chương trình tăng tốc 3-6 tháng giúp startup tăng trưởng doanh số với cơ chế đồng tài trợ vốn đối ứng 1:1 từ ngân sách tỉnh Cà Mau một cách minh bạch.'; ?>
                        </p>
                    </div>
                    <div class="pt-2 border-t border-slate-100 flex items-center gap-2 text-[12px] text-amber-700 font-semibold">
                        <i data-lucide="check-circle" class="w-4 h-4"></i>
                        <span><?php echo $is_en ? '1:1 Matching Grants' : 'Đồng tài trợ vốn đối ứng 1:1'; ?></span>
                    </div>
                </div>

                <!-- Bước 4 -->
                <div class="bg-white rounded-[24px] p-6 border-2 border-[#062AAD]/30 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 relative group">
                    <div class="flex items-center justify-between">
                        <span class="text-[12px] font-bold uppercase px-3 py-1 rounded-full bg-[#062AAD] text-white font-bold">
                            <?php echo $is_en ? 'STEP 4' : 'BƯỚC 4'; ?>
                        </span>
                        <div class="w-10 h-10 rounded-xl bg-blue-500/10 text-[#062AAD] flex items-center justify-center">
                            <i data-lucide="globe-2" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[17px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">
                            <?php echo $is_en ? 'Scaling & Capital Raise' : 'Mở Rộng & Gọi Vốn'; ?>
                        </h4>
                        <p class="text-[13px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Direct connections with venture capital funds (VCs), angel investors, and market distribution expansion nationwide.'
                                : 'Kết nối trực tiếp mạng lưới các Quỹ đầu tư mạo hiểm (VCs), nhà đầu tư thiên thần (Angels) và hỗ trợ mở rộng kênh phân phối ra thị trường cả nước.'; ?>
                        </p>
                    </div>
                    <div class="pt-2 border-t border-slate-100 flex items-center gap-2 text-[12px] text-[#062AAD] font-semibold">
                        <i data-lucide="check-circle" class="w-4 h-4"></i>
                        <span><?php echo $is_en ? 'Investor Demo Day & Expansion' : 'Kết nối Quỹ đầu tư & Mở rộng'; ?></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- FORM NỘP HỒ SƠ DỰ ÁN KHỞI NGHIỆP -->
        <div id="dang-ky" class="bg-white rounded-[28px] lg:rounded-[36px] p-8 sm:p-12 border border-slate-200/80 shadow-md">
            <div class="max-w-2xl mx-auto space-y-6 text-center">
                <div class="inline-flex items-center gap-2 bg-amber-50 border border-amber-200 text-amber-700 px-4 py-1 rounded-full text-[12px] font-bold uppercase tracking-wider">
                    <i data-lucide="rocket" class="w-3.5 h-3.5"></i>
                    <?php echo $is_en ? 'STARTUP APPLICATION' : 'NỘP HỒ SƠ KHỞI NGHIỆP'; ?>
                </div>
                <div class="space-y-2">
                    <h3 class="text-[24px] sm:text-[30px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Apply for Ca Mau Startup Journey' : 'Đăng Ký Tham Gia Hành Trình Khởi Nghiệp'; ?>
                    </h3>
                    <p class="text-[14px] text-[#5B5B5B]">
                        <?php echo $is_en 
                            ? 'Submit your startup pitch to receive evaluation from the CiNEC Advisory Board and qualify for incubation services and 1:1 matching grants.'
                            : 'Gửi hồ sơ dự án của bạn để nhận đánh giá từ Hội đồng chuyên gia CiNEC và cơ hội tiếp cận gói ươm tạo cũng như cơ chế đồng tài trợ vốn 1:1.'; ?>
                    </p>
                </div>

                <form class="space-y-4 text-left pt-2" onsubmit="event.preventDefault(); alert('<?php echo $is_en ? 'Thank you! Your startup proposal has been received.' : 'Cảm ơn bạn! Hồ sơ dự án khởi nghiệp đã được tiếp nhận.'; ?>'); this.reset();">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Founder / Representative Name *' : 'Người đại diện / Sáng lập viên *'; ?></label>
                            <input type="text" required placeholder="<?php echo $is_en ? 'John Doe' : 'Nguyễn Văn A'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-amber-500">
                        </div>
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Startup / Project Name *' : 'Tên dự án / Startup *'; ?></label>
                            <input type="text" required placeholder="<?php echo $is_en ? 'Project name...' : 'Tên dự án khởi nghiệp...'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-amber-500">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Contact Email *' : 'Email liên hệ *'; ?></label>
                            <input type="email" required placeholder="founder@startup.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-amber-500">
                        </div>
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Phone Number *' : 'Số điện thoại *'; ?></label>
                            <input type="tel" required placeholder="0901234567" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-amber-500">
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Current Stage of Project *' : 'Giai đoạn hiện tại của dự án *'; ?></label>
                        <select class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-amber-500 bg-white">
                            <option><?php echo $is_en ? 'Stage 1: Idea / Seeking Seed Grant' : 'Giai đoạn 1: Ý tưởng sơ khai / Tìm vốn mồi'; ?></option>
                            <option><?php echo $is_en ? 'Stage 2: MVP Ready / Needs Lab Incubation' : 'Giai đoạn 2: Đã có mẫu thử nghiệm (MVP) / Cần ươm tạo'; ?></option>
                            <option><?php echo $is_en ? 'Stage 3: Early Traction / Needs 1:1 Acceleration' : 'Giai đoạn 3: Đã có doanh thu ban đầu / Cần tăng tốc 1:1'; ?></option>
                            <option><?php echo $is_en ? 'Stage 4: Market Scaling / Seeking VC Investment' : 'Giai đoạn 4: Mở rộng thị trường / Cần gọi vốn Quỹ đầu tư'; ?></option>
                        </select>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Brief Problem & Solution Description' : 'Mô tả tóm tắt giải pháp & sản phẩm'; ?></label>
                        <textarea rows="3" placeholder="<?php echo $is_en ? 'Describe your problem, solution, product, and market target...' : 'Giới thiệu vấn đề bạn đang giải quyết, sản phẩm là gì và tiềm năng thị trường...'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-amber-500"></textarea>
                    </div>
                    <div class="text-center pt-2">
                        <button type="submit" class="bg-[#D97706] hover:bg-amber-600 text-white font-semibold text-[14px] rounded-full px-8 py-3.5 transition-all shadow-md hover:shadow-lg inline-flex items-center gap-2">
                            <span><?php echo $is_en ? 'Submit Application' : 'Nộp Hồ Sơ Đăng Ký'; ?></span>
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
