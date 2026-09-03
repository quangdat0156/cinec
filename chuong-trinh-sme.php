<?php
require_once 'config/db.php';
require_once 'config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
$page_title = $is_en ? "Ca Mau Digital SME & OCOP Transformation - CiNEC" : "Doanh nghiệp số Cà Mau (Ca Mau Digital SME) - CiNEC";
require_once 'includes/header.php';

$program = $mockPrograms['SME'];
$current_prog = 'SME';
?>

<!-- TRANG CHƯƠNG TRÌNH 03: DOANH NGHIỆP SỐ BILINGUAL -->
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
            <a href="chuong-trinh-sme.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all bg-[#059669] text-white shadow-md">
                <i data-lucide="shopping-bag" class="w-4 h-4 text-emerald-200"></i>
                <span><?php echo __('prog_sme_title'); ?></span>
            </a>
            <a href="chuong-trinh-talent.php" class="flex items-center justify-center gap-2.5 px-4 py-3 rounded-xl lg:rounded-full text-[13.5px] font-semibold transition-all text-slate-600 hover:text-[#7C3AED] hover:bg-purple-50/50">
                <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                <span><?php echo __('prog_talent_title'); ?></span>
            </a>
        </div>

        <!-- HERO BANNER KÍNH MỜ CAO CẤP (Figma Dark Navy với quầng sáng Emerald/Teal) -->
        <div class="relative rounded-[28px] lg:rounded-[36px] bg-gradient-to-br from-[#02155B] via-[#04244d] to-[#043324] text-white p-8 sm:p-12 lg:p-16 overflow-hidden shadow-2xl border border-emerald-500/30">
            <!-- Quầng sáng hiệu ứng nền -->
            <div class="absolute -right-24 -top-24 w-96 h-96 bg-[#059669]/25 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute right-1/4 -bottom-24 w-80 h-80 bg-teal-400/15 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 max-w-4xl space-y-6 text-left">
                <!-- Badges -->
                <div class="flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center gap-2 bg-emerald-500/20 border border-emerald-400/40 text-emerald-200 px-3.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider backdrop-blur-md">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <?php echo $is_en ? 'COMPONENT PROGRAM 03' : 'CHƯƠNG TRÌNH THÀNH PHẦN 03'; ?>
                    </span>
                    <span class="inline-flex items-center gap-1.5 bg-white/10 text-white/90 px-3 py-1 rounded-full text-[11px] font-medium border border-white/20">
                        <i data-lucide="ticket" class="w-3.5 h-3.5 text-emerald-300"></i>
                        <?php echo $is_en ? 'Digital Vouchers & OCOP Upgrading' : 'Voucher CĐS & Nâng chuẩn OCOP'; ?>
                    </span>
                </div>

                <!-- Tiêu đề lớn -->
                <div class="space-y-2">
                    <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-bold tracking-tight leading-tight text-white">
                        <?php echo $is_en ? 'Ca Mau Digital Enterprise' : 'Doanh Nghiệp Số Cà Mau'; ?>
                    </h1>
                    <p class="text-[13px] font-bold uppercase tracking-widest text-[#C1FF72]">
                        Ca Mau Digital SME & OCOP Transformation
                    </p>
                </div>

                <!-- Đoạn mô tả -->
                <p class="text-[15px] sm:text-[16px] text-emerald-100/90 font-normal leading-relaxed max-w-3xl">
                    <?php echo $is_en 
                        ? 'Empowering small and medium enterprises (SMEs) and cooperatives with technology vouchers, hands-on 90-day KPI mentorship, and upgrading key Ca Mau OCOP specialties on digital marketplaces.'
                        : 'Hỗ trợ doanh nghiệp vừa và nhỏ (SMEs), hợp tác xã nông nghiệp chuyển đổi số thông qua các gói Voucher công nghệ, huấn luyện chuyên sâu Mentor KPI 90 ngày và nâng chuẩn sản phẩm chủ lực OCOP Cà Mau.'; ?>
                </p>

                <!-- 3 Thẻ chỉ số Glassmorphism -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 max-w-2xl">
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-emerald-300 leading-tight">100+</div>
                        <div class="text-[12px] text-emerald-200/80 font-medium"><?php echo $is_en ? 'SMEs receiving vouchers' : 'Doanh nghiệp nhận Voucher CĐS'; ?></div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-emerald-300 leading-tight"><?php echo $is_en ? '90 Days' : '90 Ngày'; ?></div>
                        <div class="text-[12px] text-emerald-200/80 font-medium"><?php echo $is_en ? '1:1 KPI Mentorship' : 'Huấn luyện Mentor KPI 1:1'; ?></div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-4 text-left">
                        <div class="text-[26px] lg:text-[30px] font-bold text-emerald-300 leading-tight">50+ OCOP</div>
                        <div class="text-[12px] text-emerald-200/80 font-medium"><?php echo $is_en ? 'QR Traceability standards' : 'Nâng chuẩn số & Truy xuất nguồn gốc'; ?></div>
                    </div>
                </div>

                <!-- Nút CTA -->
                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="#dang-ky" class="bg-[#059669] hover:bg-emerald-500 text-white font-semibold text-[14px] rounded-full pl-6 pr-2 py-2 transition-all duration-300 shadow-lg hover:shadow-emerald-500/30 inline-flex items-center gap-3 group">
                        <span><?php echo $is_en ? 'Apply for Digital Voucher' : 'Đăng ký nhận Voucher Chuyển đổi số'; ?></span>
                        <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </a>
                    <a href="doi-tac.php?tab=mentors" class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-semibold text-[14px] rounded-full px-6 py-3 transition-all duration-300">
                        <span><?php echo $is_en ? 'Join 90-Day Mentorship' : 'Đăng ký Mentor KPI 90 ngày'; ?></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- KHỐI ĐỊNH VỊ CHỨC NĂNG & ĐỐI TƯỢNG HƯỚNG TỚI (2 Cột) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
            <div class="bg-white rounded-[24px] p-6 sm:p-8 border border-slate-200/80 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.06)] space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[#059669]/10 text-[#059669] flex items-center justify-center border border-[#059669]/20">
                    <i data-lucide="compass" class="w-6 h-6"></i>
                </div>
                <div class="space-y-1.5">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-[#059669]">
                        <?php echo $is_en ? 'CORE FUNCTION' : 'ĐỊNH VỊ CHỨC NĂNG'; ?>
                    </span>
                    <h3 class="text-[20px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Main Objectives' : 'Chức Năng Chính'; ?>
                    </h3>
                    <p class="text-[14px] text-[#5B5B5B] leading-relaxed">
                        <?php echo $is_en 
                            ? 'Fostering digital capabilities, transferring practical technological solutions, optimizing supply chains, and elevating Ca Mau’s authentic agricultural brands into the digital economy.'
                            : 'Thúc đẩy năng lực số hóa, chuyển giao ứng dụng công nghệ thực tiễn, tối ưu hóa chuỗi cung ứng và nâng tầm thương hiệu nông sản đặc thù của tỉnh Cà Mau trên không gian kinh tế số.'; ?>
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
                        <?php echo $is_en ? 'Supported Entities' : 'Đối Tượng Hỗ Trợ'; ?>
                    </h3>
                    <p class="text-[14px] text-[#5B5B5B] leading-relaxed">
                        <?php echo $is_en 
                            ? 'Small and medium enterprises (SMEs), business households, agricultural cooperatives, seafood processing facilities, and OCOP producers across Ca Mau province.'
                            : 'Doanh nghiệp vừa và nhỏ (SMEs), hộ kinh doanh cá thể, hợp tác xã nông nghiệp, cơ sở sản xuất chế biến thủy hải sản và các chủ thể OCOP trên toàn địa bàn tỉnh Cà Mau.'; ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- 3 GÓI GIẢI PHÁP TRỌNG TÂM CỦA DOANH NGHIỆP SỐ -->
        <div class="space-y-6 text-left">
            <div class="space-y-1">
                <span class="text-[11px] font-bold uppercase tracking-wider text-[#059669]">
                    <?php echo $is_en ? 'ACTION PACKAGES' : 'GIẢI PHÁP HÀNH ĐỘNG'; ?>
                </span>
                <h2 class="text-[24px] sm:text-[28px] font-bold text-[#062AAD]">
                    <?php echo $is_en ? '03 Practical Action Pillars' : '3 Hợp Phần Giải Pháp Thực Tiễn'; ?>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Gói 1: Voucher CĐS -->
                <div class="bg-white rounded-[24px] p-6 sm:p-8 border-2 border-emerald-200 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-[#059669] flex items-center justify-center border border-emerald-200 group-hover:scale-105 transition-transform">
                        <i data-lucide="ticket" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[18px] font-bold text-[#02185D] group-hover:text-[#059669] transition-colors">
                            <?php echo $is_en ? 'Digital Transformation Voucher' : 'Gói Voucher Chuyển Đổi Số'; ?>
                        </h4>
                        <p class="text-[14px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Subsidizing enterprise adoption of cloud ERP, smart accounting, digital signatures, e-invoicing, and omni-channel e-commerce systems.'
                                : 'Cấp kinh phí hỗ trợ doanh nghiệp tiếp cận phần mềm quản trị bán hàng, kế toán thông minh, chữ ký số, hóa đơn điện tử và nền tảng bán hàng đa kênh.'; ?>
                        </p>
                    </div>
                    <ul class="pt-2 border-t border-slate-100 space-y-2 text-[13px] text-[#5B5B5B]">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-600"></i> <?php echo $is_en ? '1 year free software licensing' : 'Miễn phí 1 năm sử dụng phần mềm'; ?></li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-600"></i> <?php echo $is_en ? 'On-site technical integration support' : 'Hỗ trợ tích hợp kỹ thuật tận nơi'; ?></li>
                    </ul>
                </div>

                <!-- Gói 2: Mentor KPI 90 ngày -->
                <div class="bg-white rounded-[24px] p-6 sm:p-8 border-2 border-emerald-300 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100/70 text-emerald-700 flex items-center justify-center border border-emerald-300 group-hover:scale-105 transition-transform">
                        <i data-lucide="target" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[18px] font-bold text-[#02185D] group-hover:text-[#059669] transition-colors">
                            <?php echo $is_en ? '90-Day KPI Mentorship' : 'Huấn Luyện Mentor KPI 90 Ngày'; ?>
                        </h4>
                        <p class="text-[14px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? '1:1 advisory with top industry mentors, setting clear growth targets, restructuring operations, and accelerating revenue within 90 days.'
                                : 'Mô hình đồng hành 1:1 cùng các chuyên gia hàng đầu, thiết lập mục tiêu tăng trưởng rõ ràng, tái cấu trúc vận hành và gia tăng doanh số trong 90 ngày.'; ?>
                        </p>
                    </div>
                    <ul class="pt-2 border-t border-slate-100 space-y-2 text-[13px] text-[#5B5B5B]">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-600"></i> <?php echo $is_en ? 'Digital readiness assessment' : 'Đánh giá hiện trạng năng lực số'; ?></li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-600"></i> <?php echo $is_en ? 'Measurable KPI growth commitments' : 'Cam kết KPI tăng trưởng đo đếm được'; ?></li>
                    </ul>
                </div>

                <!-- Gói 3: Nâng chuẩn OCOP -->
                <div class="bg-white rounded-[24px] p-6 sm:p-8 border-2 border-emerald-400 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 space-y-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-500 text-white flex items-center justify-center group-hover:scale-105 transition-transform">
                        <i data-lucide="sparkles" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-[18px] font-bold text-[#02185D] group-hover:text-[#059669] transition-colors">
                            <?php echo $is_en ? 'Upgrading Ca Mau OCOP Specialties' : 'Nâng Chuẩn Đặc Sản OCOP Cà Mau'; ?>
                        </h4>
                        <p class="text-[14px] text-[#5B5B5B] leading-relaxed">
                            <?php echo $is_en 
                                ? 'Establishing digital brand identities, blockchain QR code traceability for Ca Mau Crab, Ecological Shrimp, U Minh Forest Honey, and cross-border e-commerce.'
                                : 'Xây dựng bộ nhận diện số, tem truy xuất nguồn gốc QR Code Blockchain cho Cua Cà Mau, Tôm sinh thái, Mật ong rừng U Minh, kết nối sàn TMĐT quốc tế.'; ?>
                        </p>
                    </div>
                    <ul class="pt-2 border-t border-slate-100 space-y-2 text-[13px] text-[#5B5B5B]">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-600"></i> <?php echo $is_en ? 'Standardized packaging & digital identity' : 'Chuẩn hóa bao bì & Nhận diện số'; ?></li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-600"></i> <?php echo $is_en ? 'Listing on major e-commerce platforms' : 'Đưa sản phẩm lên sàn TMĐT lớn'; ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- FORM ĐĂNG KÝ NHẬN VOUCHER CĐS & HỖ TRỢ -->
        <div id="dang-ky" class="bg-white rounded-[28px] lg:rounded-[36px] p-8 sm:p-12 border border-slate-200/80 shadow-md">
            <div class="max-w-2xl mx-auto space-y-6 text-center">
                <div class="inline-flex items-center gap-2 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-1 rounded-full text-[12px] font-bold uppercase tracking-wider">
                    <i data-lucide="ticket" class="w-3.5 h-3.5"></i>
                    <?php echo $is_en ? 'DIGITAL VOUCHER REGISTRATION' : 'ĐĂNG KÝ VOUCHER CĐS'; ?>
                </div>
                <div class="space-y-2">
                    <h3 class="text-[24px] sm:text-[30px] font-bold text-[#062AAD]">
                        <?php echo $is_en ? 'Apply for Digital Enterprise Support' : 'Đăng Ký Nhận Gói Hỗ Trợ Doanh Nghiệp Số'; ?>
                    </h3>
                    <p class="text-[14px] text-[#5B5B5B]">
                        <?php echo $is_en 
                            ? 'Enterprises and cooperatives submit your requests for the CiNEC Coordination Board to review and allocate technology vouchers or schedule 90-day KPI mentorship.'
                            : 'Doanh nghiệp và Hợp tác xã gửi yêu cầu để Ban điều phối CiNEC khảo sát và cấp phát gói Voucher chuyển đổi số hoặc xếp lịch Mentor KPI.'; ?>
                    </p>
                </div>

                <form class="space-y-4 text-left pt-2" onsubmit="event.preventDefault(); alert('<?php echo $is_en ? 'Thank you! Your voucher application has been submitted.' : 'Cảm ơn bạn! Đơn đăng ký nhận Voucher CĐS đã được ghi nhận.'; ?>'); this.reset();">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Representative Name *' : 'Họ và tên người đại diện *'; ?></label>
                            <input type="text" required placeholder="<?php echo $is_en ? 'John Doe' : 'Nguyễn Văn A'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-emerald-500">
                        </div>
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Enterprise / Cooperative Name *' : 'Tên doanh nghiệp / Hợp tác xã *'; ?></label>
                            <input type="text" required placeholder="<?php echo $is_en ? 'Company / Cooperative name...' : 'Công ty TNHH / HTX...'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-emerald-500">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Contact Email *' : 'Email liên hệ *'; ?></label>
                            <input type="email" required placeholder="contact@company.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-emerald-500">
                        </div>
                        <div class="space-y-1">
                            <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Phone Number *' : 'Số điện thoại *'; ?></label>
                            <input type="tel" required placeholder="0901234567" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-emerald-500">
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Desired Support Package *' : 'Gói hỗ trợ mong muốn *'; ?></label>
                        <select class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-emerald-500 bg-white">
                            <option><?php echo $is_en ? 'Package 1: Management Software & Digital Sales Voucher' : 'Gói 1: Voucher phần mềm quản trị & Bán hàng số'; ?></option>
                            <option><?php echo $is_en ? 'Package 2: 90-Day KPI Mentorship' : 'Gói 2: Huấn luyện Mentor KPI 90 ngày'; ?></option>
                            <option><?php echo $is_en ? 'Package 3: OCOP Upgrading & QR Traceability' : 'Gói 3: Nâng chuẩn sản phẩm OCOP & Truy xuất nguồn gốc QR'; ?></option>
                            <option><?php echo $is_en ? 'All of the above' : 'Tất cả các gói trên'; ?></option>
                        </select>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[13px] font-semibold text-slate-700"><?php echo $is_en ? 'Current Operational Bottlenecks' : 'Khó khăn hiện tại của doanh nghiệp'; ?></label>
                        <textarea rows="3" placeholder="<?php echo $is_en ? 'Briefly describe your challenges in operations, customer reach, or sales...' : 'Mô tả tóm tắt điểm nghẽn trong quản lý, bán hàng hoặc tiếp cận khách hàng...'; ?>" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-[14px] focus:outline-none focus:border-emerald-500"></textarea>
                    </div>
                    <div class="text-center pt-2">
                        <button type="submit" class="bg-[#059669] hover:bg-emerald-600 text-white font-semibold text-[14px] rounded-full px-8 py-3.5 transition-all shadow-md hover:shadow-lg inline-flex items-center gap-2">
                            <span><?php echo $is_en ? 'Submit Voucher Request' : 'Gửi Yêu Cầu Nhận Voucher'; ?></span>
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
