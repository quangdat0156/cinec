<?php
require_once 'config/db.php';
require_once 'config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
$page_title = $is_en ? "Ca Mau Innovation & Startup Programs - CiNEC" : "Các Chương Trình Thành Phần Đổi Mới Sáng Tạo Cà Mau - CiNEC";
require_once 'includes/header.php';

$programs_list = $mockPrograms;
$current_prog = 'OVERVIEW';
?>

<!-- MAIN PROGRAMS HUB PAGE BILINGUAL -->
<div class="bg-[#F7FAFD] min-h-screen pt-28 pb-20 font-sans">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-10">

        <!-- THANH CHUYỂN ĐỔI 4 CHƯƠNG TRÌNH THÀNH PHẦN (Pill Switcher) -->
        <div class="bg-white rounded-2xl lg:rounded-full p-2 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] grid grid-cols-2 lg:grid-cols-4 gap-2">
            <a href="chuong-trinh-platform.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all text-slate-600 hover:text-[#062AAD] hover:bg-blue-50/50">
                <i data-lucide="layers" class="w-4 h-4 text-blue-600"></i>
                <span><?php echo __('prog_platform_title'); ?></span>
            </a>
            <a href="chuong-trinh-journey.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all text-slate-600 hover:text-[#D97706] hover:bg-amber-50/50">
                <i data-lucide="rocket" class="w-4 h-4 text-amber-600"></i>
                <span><?php echo __('prog_journey_title'); ?></span>
            </a>
            <a href="chuong-trinh-sme.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all text-slate-600 hover:text-[#059669] hover:bg-emerald-50/50">
                <i data-lucide="shopping-bag" class="w-4 h-4 text-emerald-600"></i>
                <span><?php echo __('prog_sme_title'); ?></span>
            </a>
            <a href="chuong-trinh-talent.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all text-slate-600 hover:text-[#7C3AED] hover:bg-purple-50/50">
                <i data-lucide="graduation-cap" class="w-4 h-4 text-purple-600"></i>
                <span><?php echo __('prog_talent_title'); ?></span>
            </a>
        </div>

        <!-- BREADCRUMB & HERO HEADER -->
        <div class="space-y-4 text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50 border border-blue-200/60 text-[#062AAD] font-bold text-[12px] uppercase tracking-wider">
                <i data-lucide="layers" class="w-4 h-4 text-[#05A6F5]"></i>
                <?php echo $is_en ? 'INTEGRATED SYSTEM OF 04 INNOVATION PILLARS' : 'HỆ THỐNG TÍCH HỢP 04 CHƯƠNG TRÌNH THÀNH PHẦN'; ?>
            </div>
            
            <h1 class="text-3xl sm:text-4xl lg:text-[44px] font-bold text-[#062AAD] tracking-tight leading-tight">
                <?php echo $is_en ? 'Ca Mau Innovation & Entrepreneurship Programs' : 'Chương Trình Đổi Mới Sáng Tạo & Khởi Nghiệp Cà Mau'; ?>
            </h1>
            
            <p class="text-[15px] text-[#5B5B5B] leading-relaxed font-normal max-w-3xl mx-auto">
                <?php echo $is_en 
                    ? 'A closed-loop integrated ecosystem of 4 programs accelerating institutional Sandbox policy, startup incubation, SME digital transformation, and regional talent empowerment across Ca Mau.'
                    : 'Hệ sinh thái 04 chương trình thành phần vận hành theo cơ chế liên thông khép kín, thúc đẩy hoàn thiện thể chế Sandbox, ươm tạo startup, trợ lực chuyển đổi số doanh nghiệp và bồi dưỡng nhân tài số tỉnh Cà Mau.'; ?>
            </p>

            <!-- STATS COUNTER BADGES -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-4 max-w-3xl mx-auto">
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] text-center space-y-1">
                    <div class="text-[24px] font-bold text-[#062AAD]">Sandbox</div>
                    <div class="text-[11px] text-slate-400 font-semibold uppercase"><?php echo $is_en ? 'Policy Sandbox' : 'Khung thử nghiệm'; ?></div>
                </div>
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] text-center space-y-1">
                    <div class="text-[24px] font-bold text-[#D97706]"><?php echo $is_en ? '4 Steps' : '4 Bước'; ?></div>
                    <div class="text-[11px] text-slate-400 font-semibold uppercase"><?php echo $is_en ? 'Startup Journey' : 'Hành trình Khởi nghiệp'; ?></div>
                </div>
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] text-center space-y-1">
                    <div class="text-[24px] font-bold text-[#059669]"><?php echo $is_en ? 'Digital Voucher' : 'Voucher CĐS'; ?></div>
                    <div class="text-[11px] text-slate-400 font-semibold uppercase"><?php echo $is_en ? 'SME & OCOP' : 'Doanh nghiệp số & OCOP'; ?></div>
                </div>
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] text-center space-y-1">
                    <div class="text-[24px] font-bold text-[#7C3AED]"><?php echo $is_en ? 'Scholarship' : 'Học bổng'; ?></div>
                    <div class="text-[11px] text-slate-400 font-semibold uppercase"><?php echo $is_en ? 'Digital Talents' : 'Nhân tài số Cà Mau'; ?></div>
                </div>
            </div>
        </div>

        <!-- SUMMARY COMPARISON TABLE MATCHING DOCUMENT IMAGE -->
        <div class="bg-white rounded-[24px] lg:rounded-[32px] p-6 md:p-8 border border-slate-200/80 shadow-xs space-y-6 overflow-hidden text-left">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-[20px] sm:text-[24px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Summary Table of 04 Innovation Pillars' : 'Bảng Tổng Hợp 04 Chương Trình Thành Phần'; ?>
                    </h2>
                    <p class="text-[13px] text-slate-500">
                        <?php echo $is_en ? 'Integrated architecture under the Ca Mau Provincial Innovation Ecosystem Masterplan' : 'Cấu trúc tích hợp theo Đề án Đổi mới sáng tạo và Phát triển hệ sinh thái tỉnh Cà Mau'; ?>
                    </p>
                </div>
                <span class="hidden sm:inline-block px-3 py-1 bg-blue-50 text-[#062AAD] text-[11px] font-bold rounded-full border border-blue-200/60">
                    <?php echo $is_en ? 'Synchronized System' : 'Hệ thống đồng bộ'; ?>
                </span>
            </div>

            <!-- Table Responsive -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-[13.5px]">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200 text-[#062AAD] font-bold uppercase text-[11px] tracking-wider">
                            <th class="py-3.5 px-4 w-12 text-center"><?php echo $is_en ? 'No.' : 'STT'; ?></th>
                            <th class="py-3.5 px-4 w-56"><?php echo $is_en ? 'Program Name' : 'Tên chương trình'; ?></th>
                            <th class="py-3.5 px-4 min-w-[320px]"><?php echo $is_en ? 'Key Content' : 'Nội dung chủ yếu'; ?></th>
                            <th class="py-3.5 px-4 min-w-[240px]"><?php echo $is_en ? 'Target Beneficiaries' : 'Đối tượng thụ hưởng'; ?></th>
                            <th class="py-3.5 px-4 w-40 text-center"><?php echo $is_en ? 'Key Focus' : 'Trọng tâm thực thi'; ?></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 font-normal text-slate-700">
                        <!-- Program 1 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-4 px-4 font-bold text-center text-[#062AAD]">1</td>
                            <td class="py-4 px-4 font-bold text-[#02185D]">
                                <a href="chuong-trinh-platform.php" class="hover:text-[#062AAD] transition-colors">
                                    <?php echo __('prog_platform_title'); ?><br>
                                    <span class="text-[11.5px] text-slate-400 font-normal">(Ca Mau Innovation Platform)</span>
                                </a>
                            </td>
                            <td class="py-4 px-4 leading-relaxed text-[#5B5B5B]">
                                <?php echo $is_en 
                                    ? 'Regulatory Sandbox framework; data platform for decision-making; PII Index monitoring & improvement; media & community; expert networks and advisory councils.'
                                    : 'Khung chính sách và Quy chế sandbox; nền tảng dữ liệu phục vụ ra quyết định; đo và cải thiện Chỉ số PII; truyền thông, cộng đồng; mạng lưới chuyên gia và các hội đồng tư vấn.'; ?>
                            </td>
                            <td class="py-4 px-4 text-slate-600">
                                <?php echo $is_en ? 'Entire ecosystem: enterprises, startups, students, researchers, citizens.' : 'Toàn hệ sinh thái: doanh nghiệp, tổ chức, học sinh, sinh viên, người dân'; ?>
                            </td>
                            <td class="py-4 px-4 text-center font-bold text-blue-600">
                                <?php echo $is_en ? 'Sandbox & PII' : 'Thể chế & PII'; ?>
                            </td>
                        </tr>

                        <!-- Program 2 -->
                        <tr class="hover:bg-slate-50/60 transition-colors bg-amber-50/20">
                            <td class="py-4 px-4 font-bold text-center text-amber-600">2</td>
                            <td class="py-4 px-4 font-bold text-[#02185D]">
                                <a href="chuong-trinh-journey.php" class="hover:text-amber-600 transition-colors">
                                    <?php echo __('prog_journey_title'); ?><br>
                                    <span class="text-[11.5px] text-slate-400 font-normal">(Startup - Incubation - Acceleration)</span>
                                </a>
                            </td>
                            <td class="py-4 px-4 leading-relaxed text-[#5B5B5B]">
                                <?php echo $is_en 
                                    ? '4-step continuous incubation: (1) Sourcing via competitions & pre-incubation; (2) 6-12 month incubation with shared labs; (3) 3-6 month acceleration + 1:1 co-funding; (4) Scaling, capital & market access.'
                                    : 'Quy trình hỗ trợ liên thông gồm 04 bước: (1) Tìm nguồn từ cuộc thi + tiền ươm tạo; (2) Ươm tạo 6-12 tháng với lab dùng chung; (3) Tăng tốc 3-6 tháng + đồng tài trợ 1:1; (4) Kết nối, mở rộng quy mô, vốn, thị trường.'; ?>
                            </td>
                            <td class="py-4 px-4 text-slate-600">
                                <?php echo $is_en ? 'Individuals, teams, and startups from idea to growth.' : 'Cá nhân, nhóm, doanh nghiệp khởi nghiệp từ ý tưởng đến tăng trưởng'; ?>
                            </td>
                            <td class="py-4 px-4 text-center font-bold text-amber-600">
                                <?php echo $is_en ? '4-Step Incubation' : '4 Bước liên thông'; ?>
                            </td>
                        </tr>

                        <!-- Program 3 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-4 px-4 font-bold text-center text-emerald-600">3</td>
                            <td class="py-4 px-4 font-bold text-[#02185D]">
                                <a href="chuong-trinh-sme.php" class="hover:text-emerald-600 transition-colors">
                                    <?php echo __('prog_sme_title'); ?><br>
                                    <span class="text-[11.5px] text-slate-400 font-normal">(Ca Mau Digital SME)</span>
                                </a>
                            </td>
                            <td class="py-4 px-4 leading-relaxed text-[#5B5B5B]">
                                <?php echo $is_en 
                                    ? 'Digital vouchers paired with verified vendors + 90-day KPI mentorship; adoption of AI, data, e-commerce, digital logistics; elevating OCOP standards.'
                                    : 'Voucher chuyển đổi số gắn nhà cung cấp được thẩm định + mentor + KPI sau 90 ngày; ứng dụng AI, dữ liệu, thương mại điện tử, logistics số; nâng giá trị OCOP.'; ?>
                            </td>
                            <td class="py-4 px-4 text-slate-600">
                                <?php echo $is_en ? 'SMEs, cooperatives, household businesses, OCOP producers.' : 'Doanh nghiệp nhỏ và vừa, hợp tác xã, hộ kinh doanh, chủ thể OCOP, doanh nghiệp 1 người'; ?>
                            </td>
                            <td class="py-4 px-4 text-center font-bold text-emerald-600">
                                <?php echo $is_en ? 'Vouchers & OCOP' : 'Voucher CĐS & OCOP'; ?>
                            </td>
                        </tr>

                        <!-- Program 4 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-4 px-4 font-bold text-center text-purple-600">4</td>
                            <td class="py-4 px-4 font-bold text-[#02185D]">
                                <a href="chuong-trinh-talent.php" class="hover:text-purple-600 transition-colors">
                                    <?php echo __('prog_talent_title'); ?><br>
                                    <span class="text-[11.5px] text-slate-400 font-normal">(Ca Mau Talent)</span>
                                </a>
                            </td>
                            <td class="py-4 px-4 leading-relaxed text-[#5B5B5B]">
                                <?php echo $is_en 
                                    ? 'Competency-based talent scholarships; entrepreneurship education & university models; domestic & overseas talent network; creative economy.'
                                    : 'Học bổng tài năng theo nhóm năng lực; giáo dục khởi nghiệp và đại học khởi nghiệp; mạng lưới nhân tài trong và ngoài tỉnh; kinh tế sáng tạo.'; ?>
                            </td>
                            <td class="py-4 px-4 text-slate-600">
                                <?php echo $is_en ? 'Youth, students, engineers, researchers, freelancers, makers.' : 'Thanh niên, sinh viên, kỹ sư, nhà nghiên cứu, freelancer, maker'; ?>
                            </td>
                            <td class="py-4 px-4 text-center font-bold text-purple-600">
                                <?php echo $is_en ? 'Scholarship & Labs' : 'Học bổng & Tri thức'; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 4 PROGRAM DETAILED CARDS GRID -->
        <div class="space-y-6 text-left">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-[#05A6F5]">
                        <?php echo $is_en ? 'PROGRAM DETAILS' : 'CHI TIẾT CHƯƠNG TRÌNH'; ?>
                    </span>
                    <h2 class="text-[24px] sm:text-[28px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'System of 04 Innovation Pillars' : 'Hệ Thống 04 Trụ Cột Đổi Mới Sáng Tạo'; ?>
                    </h2>
                </div>
                <span class="text-[13px] text-slate-500 font-medium hidden sm:inline-block">
                    <?php echo $is_en ? 'Click to view roadmap and apply' : 'Nhấp để xem lộ trình và nộp hồ sơ'; ?>
                </span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <?php foreach ($programs_list as $key => $prog): ?>
                    <div class="bg-white rounded-[24px] p-6 sm:p-8 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between space-y-6 group">
                        
                        <div class="space-y-4">
                            <!-- Header Card: Badge & Title -->
                            <div class="flex items-start justify-between gap-4">
                                <div class="flex items-center gap-3.5">
                                    <div class="w-12 h-12 rounded-2xl <?php echo $prog['bg_light']; ?> <?php echo $prog['text_color']; ?> flex items-center justify-center shrink-0 border <?php echo $prog['border_color']; ?> group-hover:scale-105 transition-transform">
                                        <i data-lucide="<?php echo $prog['icon']; ?>" class="w-6 h-6"></i>
                                    </div>
                                    <div>
                                        <span class="text-[11px] font-bold uppercase tracking-wider <?php echo $prog['text_color']; ?> block">
                                            <?php echo $is_en ? ($prog['sub_title_en'] ?? $prog['sub_title']) : $prog['sub_title']; ?>
                                        </span>
                                        <h3 class="text-[18px] sm:text-[20px] font-bold text-[#02185D] group-hover:text-[#062AAD] transition-colors">
                                            <?php echo $is_en ? ($prog['title_en'] ?? $prog['title']) : $prog['title']; ?>
                                        </h3>
                                    </div>
                                </div>
                                
                                <div class="text-right shrink-0">
                                    <span class="text-[11px] font-bold px-3 py-1 rounded-full <?php echo $prog['bg_light']; ?> <?php echo $prog['text_color']; ?> block border <?php echo $prog['border_color']; ?>">
                                        <?php echo $is_en ? ($prog['badge_en'] ?? $prog['badge']) : $prog['badge']; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Core Function -->
                            <div class="bg-slate-50 rounded-2xl p-4 border border-slate-100 space-y-1">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">
                                    <?php echo $is_en ? 'MAIN CONTENT' : 'NỘI DUNG CHỦ YẾU'; ?>
                                </span>
                                <p class="text-[13px] font-semibold text-slate-800 leading-relaxed">
                                    <?php echo $is_en ? ($prog['short_desc_en'] ?? $prog['short_desc']) : $prog['short_desc']; ?>
                                </p>
                            </div>

                            <!-- Target Audience -->
                            <div class="space-y-1">
                                <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">
                                    <?php echo $is_en ? 'Target Beneficiaries:' : 'Đối tượng thụ hưởng:'; ?>
                                </span>
                                <p class="text-[13px] text-slate-600 bg-slate-50/70 p-3 rounded-xl border border-slate-100 leading-relaxed">
                                    <i data-lucide="users" class="w-3.5 h-3.5 text-[#062AAD] inline-block mr-1"></i>
                                    <?php echo $is_en ? ($prog['target_audience_en'] ?? $prog['target_audience']) : $prog['target_audience']; ?>
                                </p>
                            </div>

                            <!-- Core Activities preview -->
                            <div class="space-y-2">
                                <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">
                                    <?php echo $is_en ? 'Key Focus Activities:' : 'Hoạt động trọng tâm:'; ?>
                                </span>
                                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-[12.5px] text-[#5B5B5B]">
                                    <?php foreach ($prog['core_activities'] as $act): ?>
                                        <li class="flex items-center gap-2">
                                            <i data-lucide="check-circle-2" class="w-4 h-4 text-[#71A800] shrink-0"></i>
                                            <span class="font-medium truncate"><?php echo $is_en ? ($act['title_en'] ?? $act['title']) : $act['title']; ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Card Action -->
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-4">
                            <!-- Metrics summary -->
                            <div class="flex items-center gap-4">
                                <?php foreach (array_slice($prog['key_metrics'], 0, 2) as $met): ?>
                                    <div>
                                        <div class="text-[14px] font-bold text-[#062AAD]"><?php echo $met['number']; ?></div>
                                        <div class="text-[10.5px] text-slate-400 font-medium"><?php echo $is_en ? ($met['label_en'] ?? $met['label']) : $met['label']; ?></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <a href="<?php echo $prog['slug']; ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#062AAD] hover:bg-[#02185D] text-white font-semibold text-[13px] shadow-sm hover:shadow-md transition-all duration-300 group-hover:translate-x-0.5">
                                <span><?php echo $is_en ? 'View Details' : 'Xem chi tiết'; ?></span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- CTA REGISTRATION FOOTER BANNER -->
        <div class="relative rounded-[24px] lg:rounded-[32px] overflow-hidden bg-gradient-to-r from-[#062AAD] via-[#02185D] to-[#04244d] text-white p-8 md:p-14 shadow-xl text-left">
            <div class="relative z-10 max-w-3xl space-y-4">
                <span class="inline-block px-3.5 py-1 rounded-full bg-white/15 backdrop-blur-md text-[#C1FF72] font-bold text-[11px] uppercase tracking-wider border border-white/20">
                    <?php echo $is_en ? 'Ca Mau Innovation & Startups' : 'Đổi mới sáng tạo & Khởi nghiệp Cà Mau'; ?>
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold leading-tight">
                    <?php echo $is_en ? 'Partner With 04 Innovation Pillars of Ca Mau' : 'Đồng Hành Cùng 04 Chương Trình Đổi Mới Sáng Tạo Tỉnh Cà Mau'; ?>
                </h2>
                <p class="text-[14px] sm:text-[15px] text-slate-200 font-normal leading-relaxed">
                    <?php echo $is_en 
                        ? 'Contact the CiNEC Coordination Board for direct guidance on application procedures for Digital Transformation Vouchers, Startup Incubation, Talent Scholarships, or Regulatory Sandbox testing.'
                        : 'Liên hệ với Ban điều phối CiNEC để nhận hướng dẫn chi tiết nộp hồ sơ tham gia các gói hỗ trợ Voucher Chuyển đổi số, Ươm tạo startup, Học bổng tài năng hoặc Khung thử nghiệm Sandbox.'; ?>
                </p>
                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="lien-he.php" class="inline-flex items-center gap-2 bg-[#71A800] hover:bg-[#86c500] text-white font-semibold text-[14px] px-6 py-3 rounded-full transition-all shadow-md">
                        <span><?php echo $is_en ? 'Apply & Register Now' : 'Đăng ký tham gia ngay'; ?></span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                    <a href="gioi-thieu.php" class="inline-flex items-center gap-2 border border-white/30 text-white font-semibold text-[14px] px-6 py-3 rounded-full hover:bg-white/10 transition-colors">
                        <span><?php echo $is_en ? 'Discover Masterplan' : 'Tìm hiểu Đề án Đổi mới sáng tạo'; ?></span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
