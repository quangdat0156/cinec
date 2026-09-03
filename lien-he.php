<?php
require_once 'config/db.php';
require_once 'config/lang.php';
$lang = current_lang();
$is_en = ($lang === 'en');
$page_title = $is_en ? "Contact & Connect - CiNEC Ca Mau" : "Liên Hệ & Kết Nối - CINEC Cà Mau";
require_once 'includes/header.php';

$contact_sent = false;
$contact_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'contact_submit') {
    $fullname = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? 'Tư vấn chung');
    $message = trim($_POST['message'] ?? '');

    if (!empty($fullname) && !empty($email) && !empty($phone)) {
        save_contact([
            'fullname' => $fullname,
            'email' => $email,
            'phone' => $phone,
            'organization' => '',
            'program_interest' => $subject,
            'message' => $message,
            'status' => 'new',
        ]);
        $contact_sent = true;
    } else {
        $contact_error = $is_en ? 'Please fill in your Full Name, Email, and Phone Number!' : 'Vui lòng điền đầy đủ Họ tên, Email và Số điện thoại!';
    }
}
?>

<!-- TRANG LIÊN HỆ & KẾT NỐI BILINGUAL -->
<div class="bg-[#F7FAFD] min-h-screen pt-28 pb-20 font-sans">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-10">

        <!-- BREADCRUMBS BAR (Chuẩn Figma Node 74:63) -->
        <nav class="flex items-center gap-2 text-[14px] leading-[20px] font-medium text-[#062AAD]" aria-label="Breadcrumb">
            <a href="index.php" class="hover:text-[#05A6F5] transition-colors"><?php echo __('nav_home'); ?></a>
            <i data-lucide="chevron-right" class="w-4 h-4 text-[#062AAD]/70 shrink-0"></i>
            <span class="font-semibold text-[#062AAD]"><?php echo __('nav_contact'); ?></span>
        </nav>

        <!-- TOP HERO BANNER (Chuẩn Figma Frame 2147223430 / 74:62) -->
        <div class="relative bg-white rounded-[24px] lg:rounded-[32px] p-6 sm:p-10 lg:p-12 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] overflow-hidden min-h-[320px] lg:min-h-[360px] flex items-center">
            
            <div class="absolute right-0 top-0 bottom-0 w-full lg:w-[54%] h-full bg-contain bg-right bg-no-repeat pointer-events-none hidden lg:block"
                 style="background-image: url('assets/img/lienhe_hero_graphic.png'); background-position: right center;">
            </div>

            <!-- Cột trái: Tiêu đề, Thuyết minh & Thẻ Hotline -->
            <div class="relative z-10 max-w-xl space-y-6 text-left">
                <div class="space-y-3">
                    <h1 class="text-[36px] sm:text-[42px] lg:text-[48px] font-bold text-[#062AAD] leading-[1.15] tracking-tight">
                        <?php echo $is_en ? 'Contact & Connect' : 'Liên hệ & Kết nối'; ?>
                    </h1>
                    <p class="text-[14px] sm:text-[15px] text-[#5B5B5B] font-normal leading-relaxed">
                        <?php echo $is_en 
                            ? 'CiNEC is always ready to listen and partner with you.<br class="hidden sm:inline"> Reach out to our team for prompt and dedicated assistance.'
                            : 'CiNEC luôn sẵn sàng lắng nghe và đồng hành cùng bạn.<br class="hidden sm:inline"> Hãy liên hệ với chúng tôi để được hỗ trợ nhanh chóng và hiệu quả.'; ?>
                    </p>
                </div>

                <!-- Thẻ Hotline Tổng đài hỗ trợ chuẩn Figma -->
                <div class="inline-flex items-center gap-4 bg-white border border-slate-200/80 rounded-2xl p-4 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.08)] hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-full bg-[#062AAD] text-white flex items-center justify-center font-bold shadow-xs shrink-0">
                        <i data-lucide="headset" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-0.5 text-left">
                        <span class="text-[11px] uppercase tracking-wider text-slate-400 font-bold block">
                            <?php echo $is_en ? 'Support Hotline' : 'Tổng đài hỗ trợ'; ?>
                        </span>
                        <a href="tel:0908736777" class="text-[24px] font-black text-[#02185D] hover:text-[#062AAD] transition-colors block leading-tight tracking-tight">
                            0908 736 777
                        </a>
                        <span class="text-[12px] text-slate-500 font-medium block">
                            <?php echo $is_en ? 'Operating Hours: 24/7 Always Open' : 'Thời gian hỗ trợ: Luôn mở cửa'; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAIN CONTAINER: FORM LIÊN HỆ & THÔNG TIN LIÊN HỆ -->
        <div class="bg-white rounded-[24px] lg:rounded-[32px] p-6 sm:p-10 lg:p-12 border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)]">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- CỘT TRÁI: FORM GỬI YÊU CẦU LIÊN HỆ -->
                <div class="lg:col-span-7 space-y-6 text-left lg:border-r lg:border-slate-200/70 lg:pr-12">
                    <div class="space-y-1.5">
                        <h2 class="text-[24px] sm:text-[28px] font-bold text-[#02185D] tracking-tight">
                            <?php echo $is_en ? 'Send an Inquiry' : 'Gửi yêu cầu liên hệ'; ?>
                        </h2>
                        <p class="text-[14px] text-[#5B5B5B] font-normal leading-relaxed">
                            <?php echo $is_en 
                                ? 'Please fill in the information below; our coordination board will respond promptly.'
                                : 'Vui lòng điền thông tin bên dưới, chúng tôi sẽ phản hồi trong thời gian sớm nhất.'; ?>
                        </p>
                    </div>

                    <?php if ($contact_sent): ?>
                        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-[13px] font-semibold flex items-center gap-3 shadow-xs">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-600 shrink-0"></i>
                            <span><?php echo $is_en ? 'Thank you! Your inquiry has been sent to CiNEC Management Board. We will contact you soon.' : 'Cảm ơn bạn! Yêu cầu liên hệ đã được gửi thành công đến Ban Quản Lý CiNEC. Chúng tôi sẽ sớm liên hệ lại.'; ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($contact_error)): ?>
                        <div class="p-4 rounded-2xl bg-rose-50 border border-rose-200 text-rose-800 text-[13px] font-semibold flex items-center gap-3 shadow-xs">
                            <i data-lucide="alert-circle" class="w-5 h-5 text-rose-600 shrink-0"></i>
                            <span><?php echo htmlspecialchars($contact_error); ?></span>
                        </div>
                    <?php endif; ?>

                    <form action="lien-he.php" method="POST" class="space-y-4">
                        <input type="hidden" name="action" value="contact_submit">
                        
                        <!-- Row 1: Họ tên & Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="text-[13px] font-semibold text-slate-700 block"><?php echo $is_en ? 'Full Name' : 'Họ và tên'; ?> <span class="text-rose-500">*</span></label>
                                <input type="text" name="fullname" required placeholder="<?php echo $is_en ? 'Enter your full name' : 'Nhập họ và tên'; ?>" class="w-full px-4 py-3 bg-slate-50 border border-slate-200/80 rounded-xl text-[14px] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#062AAD] focus:bg-white transition-colors">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-[13px] font-semibold text-slate-700 block">Email <span class="text-rose-500">*</span></label>
                                <input type="email" name="email" required placeholder="<?php echo $is_en ? 'Enter email address' : 'Nhập email'; ?>" class="w-full px-4 py-3 bg-slate-50 border border-slate-200/80 rounded-xl text-[14px] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#062AAD] focus:bg-white transition-colors">
                            </div>
                        </div>

                        <!-- Row 2: SĐT & Chủ đề -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="text-[13px] font-semibold text-slate-700 block"><?php echo $is_en ? 'Phone Number' : 'Số điện thoại'; ?> <span class="text-rose-500">*</span></label>
                                <input type="tel" name="phone" required placeholder="<?php echo $is_en ? 'Enter phone number' : 'Nhập số điện thoại'; ?>" class="w-full px-4 py-3 bg-slate-50 border border-slate-200/80 rounded-xl text-[14px] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#062AAD] focus:bg-white transition-colors">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-[13px] font-semibold text-slate-700 block"><?php echo $is_en ? 'Subject' : 'Chủ đề'; ?> <span class="text-rose-500">*</span></label>
                                <div class="relative">
                                    <select name="subject" class="w-full px-4 py-3 bg-slate-50 border border-slate-200/80 rounded-xl text-[14px] text-slate-700 focus:outline-none focus:border-[#062AAD] focus:bg-white appearance-none transition-colors">
                                        <option value="<?php echo $is_en ? 'Startup Incubation Consultation' : 'Tư vấn Ươm tạo Startup'; ?>"><?php echo $is_en ? 'Startup Incubation Consultation' : 'Tư vấn Ươm tạo Startup'; ?></option>
                                        <option value="<?php echo $is_en ? 'Innovation Platform & Sandbox' : 'Đăng ký Nền tảng Đổi mới sáng tạo'; ?>"><?php echo $is_en ? 'Innovation Platform & Sandbox' : 'Đăng ký Nền tảng Đổi mới sáng tạo'; ?></option>
                                        <option value="<?php echo $is_en ? 'Digital SME (Voucher Grant)' : 'Đăng ký Doanh nghiệp số (Voucher CĐS)'; ?>"><?php echo $is_en ? 'Digital SME (Voucher Grant)' : 'Đăng ký Doanh nghiệp số (Voucher CĐS)'; ?></option>
                                        <option value="<?php echo $is_en ? 'Digital Talent Scholarship' : 'Đăng ký Học bổng Nhân tài số'; ?>"><?php echo $is_en ? 'Digital Talent Scholarship' : 'Đăng ký Học bổng Nhân tài số'; ?></option>
                                        <option value="<?php echo $is_en ? 'Partnership & University Alliance' : 'Hợp tác Đối tác & Viện Trường'; ?>"><?php echo $is_en ? 'Partnership & University Alliance' : 'Hợp tác Đối tác & Viện Trường'; ?></option>
                                        <option value="<?php echo $is_en ? 'Coworking Space Rental' : 'Thuê Không gian Sáng tạo (Workspace)'; ?>"><?php echo $is_en ? 'Coworking Space Rental' : 'Thuê Không gian Sáng tạo (Workspace)'; ?></option>
                                        <option value="<?php echo $is_en ? 'Investment & VC Matchmaking' : 'Đầu tư & Kết nối Quỹ'; ?>"><?php echo $is_en ? 'Investment & VC Matchmaking' : 'Đầu tư & Kết nối Quỹ'; ?></option>
                                        <option value="<?php echo $is_en ? 'Other Inquiries' : 'Khác'; ?>"><?php echo $is_en ? 'Other Inquiries' : 'Khác'; ?></option>
                                    </select>
                                    <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Row 3: Nội dung tin nhắn -->
                        <div class="space-y-1.5">
                            <label class="text-[13px] font-semibold text-slate-700 block"><?php echo $is_en ? 'Message Content' : 'Nội dung tin nhắn'; ?> <span class="text-rose-500">*</span></label>
                            <textarea name="message" required rows="4" placeholder="<?php echo $is_en ? 'Type your message here...' : 'Nhập nội dung tin nhắn của bạn...'; ?>" class="w-full px-4 py-3 bg-slate-50 border border-slate-200/80 rounded-xl text-[14px] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#062AAD] focus:bg-white transition-colors"></textarea>
                        </div>

                        <!-- Checkbox điều khoản chuẩn Figma -->
                        <div class="flex items-center gap-2.5 pt-1">
                            <input type="checkbox" id="agree" required checked class="w-4 h-4 rounded border-slate-300 text-[#062AAD] focus:ring-0 cursor-pointer">
                            <label for="agree" class="text-[12px] text-[#5B5B5B] font-normal cursor-pointer select-none">
                                <?php echo $is_en ? 'I agree to CiNEC ' : 'Tôi đồng ý với '; ?><a href="#" class="text-[#062AAD] font-semibold hover:underline"><?php echo $is_en ? 'Privacy Policy' : 'Chính sách bảo mật'; ?></a><?php echo $is_en ? ' and ' : ' và '; ?><a href="#" class="text-[#062AAD] font-semibold hover:underline"><?php echo $is_en ? 'Terms of Service' : 'Điều khoản sử dụng'; ?></a>.
                            </label>
                        </div>

                        <!-- Submit Button Pill chuẩn Figma -->
                        <div class="pt-2">
                            <button type="submit" class="bg-[#062AAD] hover:bg-[#02185D] text-white font-semibold text-[14px] rounded-full px-8 py-3.5 transition-all duration-300 shadow-md hover:shadow-lg inline-flex items-center gap-2.5 group">
                                <span><?php echo $is_en ? 'Send Inquiry' : 'Gửi yêu cầu'; ?></span>
                                <i data-lucide="send" class="w-4 h-4 group-hover:translate-x-0.5 transition-transform"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- CỘT PHẢI: THÔNG TIN LIÊN HỆ -->
                <div class="lg:col-span-5 space-y-6 text-left">
                    <div class="space-y-1.5">
                        <h2 class="text-[24px] sm:text-[28px] font-bold text-[#02185D] tracking-tight">
                            <?php echo $is_en ? 'Contact Information' : 'Thông tin liên hệ'; ?>
                        </h2>
                        <p class="text-[14px] text-[#5B5B5B] font-normal leading-relaxed">
                            <?php echo $is_en ? 'Connect with CiNEC through official channels' : 'Kết nối với CiNEC qua các kênh chính thức'; ?>
                        </p>
                    </div>

                    <div class="space-y-3.5">
                        <!-- Item 1: Địa chỉ -->
                        <div class="bg-white border border-slate-200/70 rounded-2xl p-4 flex items-start gap-4 hover:border-[#062AAD]/40 hover:shadow-xs transition-all duration-300">
                            <div class="w-11 h-11 rounded-xl bg-[#05A6F5]/10 text-[#05A6F5] flex items-center justify-center shrink-0 border border-[#05A6F5]/20 mt-0.5">
                                <i data-lucide="map-pin" class="w-5 h-5"></i>
                            </div>
                            <div class="space-y-1 min-w-0">
                                <span class="text-[14px] font-bold text-[#02185D] block"><?php echo $is_en ? 'Headquarters' : 'Địa chỉ'; ?></span>
                                <p class="text-[13px] text-[#5B5B5B] leading-relaxed font-normal">
                                    <?php echo __('footer_address'); ?>
                                </p>
                            </div>
                        </div>

                        <!-- Item 2: Điện thoại -->
                        <div class="bg-white border border-slate-200/70 rounded-2xl p-4 flex items-start gap-4 hover:border-[#062AAD]/40 hover:shadow-xs transition-all duration-300">
                            <div class="w-11 h-11 rounded-xl bg-[#05A6F5]/10 text-[#05A6F5] flex items-center justify-center shrink-0 border border-[#05A6F5]/20 mt-0.5">
                                <i data-lucide="phone" class="w-5 h-5"></i>
                            </div>
                            <div class="space-y-1 min-w-0">
                                <span class="text-[14px] font-bold text-[#02185D] block"><?php echo $is_en ? 'Phone' : 'Điện thoại'; ?></span>
                                <a href="tel:0908736777" class="text-[13px] text-[#062AAD] font-semibold hover:underline block">
                                    090 873 6777
                                </a>
                            </div>
                        </div>

                        <!-- Item 3: Email -->
                        <div class="bg-white border border-slate-200/70 rounded-2xl p-4 flex items-start gap-4 hover:border-[#062AAD]/40 hover:shadow-xs transition-all duration-300">
                            <div class="w-11 h-11 rounded-xl bg-[#05A6F5]/10 text-[#05A6F5] flex items-center justify-center shrink-0 border border-[#05A6F5]/20 mt-0.5">
                                <i data-lucide="mail" class="w-5 h-5"></i>
                            </div>
                            <div class="space-y-1 min-w-0">
                                <span class="text-[14px] font-bold text-[#02185D] block">Email</span>
                                <a href="mailto:cinecvietnam@gmail.com" class="text-[13px] text-[#062AAD] font-semibold hover:underline block">
                                    cinecvietnam@gmail.com
                                </a>
                            </div>
                        </div>

                        <!-- Item 4: Website -->
                        <div class="bg-white border border-slate-200/70 rounded-2xl p-4 flex items-start gap-4 hover:border-[#062AAD]/40 hover:shadow-xs transition-all duration-300">
                            <div class="w-11 h-11 rounded-xl bg-[#05A6F5]/10 text-[#05A6F5] flex items-center justify-center shrink-0 border border-[#05A6F5]/20 mt-0.5">
                                <i data-lucide="globe" class="w-5 h-5"></i>
                            </div>
                            <div class="space-y-1 min-w-0">
                                <span class="text-[14px] font-bold text-[#02185D] block">Website</span>
                                <a href="https://cinec.com.vn" target="_blank" class="text-[13px] text-[#062AAD] font-semibold hover:underline block">
                                    cinec.com.vn
                                </a>
                            </div>
                        </div>

                        <!-- Item 5: Giờ làm việc -->
                        <div class="bg-white border border-slate-200/70 rounded-2xl p-4 flex items-start gap-4 hover:border-[#062AAD]/40 hover:shadow-xs transition-all duration-300">
                            <div class="w-11 h-11 rounded-xl bg-[#05A6F5]/10 text-[#05A6F5] flex items-center justify-center shrink-0 border border-[#05A6F5]/20 mt-0.5">
                                <i data-lucide="clock" class="w-5 h-5"></i>
                            </div>
                            <div class="space-y-1 min-w-0">
                                <span class="text-[14px] font-bold text-[#02185D] block"><?php echo $is_en ? 'Working Hours' : 'Giờ làm việc'; ?></span>
                                <p class="text-[13px] text-[#5B5B5B] font-normal">
                                    <?php echo $is_en ? '24/7 Always Open' : 'Luôn mở cửa'; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- SECTION BẢN ĐỒ VỊ TRÍ CHUẨN FIGMA -->
        <div class="relative w-full rounded-[24px] lg:rounded-[32px] overflow-hidden border border-slate-200/70 shadow-[0px_2px_4px_0px_rgba(0,0,0,0.1)] group">
            <img src="assets/img/lienhe_map.png" alt="Bản đồ Toà nhà CiNEC, Bạc Liêu, Cà Mau" class="w-full h-[360px] sm:h-[420px] lg:h-[460px] object-cover object-center">

            <!-- Overlay thanh định vị mở Google Maps chỉ đường -->
            <div class="absolute bottom-5 left-5 right-5 sm:right-auto bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-2xl p-4 shadow-lg flex items-center justify-between gap-4 max-w-md">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-[#062AAD] text-white flex items-center justify-center shrink-0 shadow-xs">
                        <i data-lucide="map-pin" class="w-5 h-5 text-[#C1FF72]"></i>
                    </div>
                    <div>
                        <h4 class="text-[14px] font-bold text-[#02185D] leading-tight">CiNEC Building Ca Mau</h4>
                        <p class="text-[12px] text-slate-500">16 - 18 Cu Chinh Lan St., Ca Mau</p>
                    </div>
                </div>
                <a href="https://maps.google.com/?q=Toà+nhà+CiNEC+Cù+Chính+Lan+Cà+Mau" target="_blank" rel="noopener noreferrer" class="shrink-0 bg-[#062AAD] hover:bg-[#05A6F5] text-white text-[12px] font-bold px-4 py-2 rounded-full transition-colors inline-flex items-center gap-1.5 shadow-xs">
                    <span><?php echo $is_en ? 'Get Directions' : 'Chỉ đường'; ?></span>
                    <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
                </a>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
