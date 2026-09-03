<?php
$page_title = "Liên Hệ & Kết Nối - CINEC Cà Mau";
require_once 'config/db.php';
require_once 'includes/header.php';
?>

<!-- TRANG LIÊN HỆ: KHỚP 100% ẢNH FIGMA CỦA BẠN -->
<div class="bg-[#FAFCFF] min-h-screen pt-28 pb-16">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-8">

        <!-- BREADCRUMBS BAR -->
        <div class="text-[11px] font-medium text-slate-500 flex items-center gap-1.5 text-left">
            <a href="index.php" class="hover:text-[#062AAD] transition-colors">Trang chủ</a>
            <span>&gt;</span>
            <span class="text-[#062AAD] font-bold">Liên hệ</span>
        </div>

        <!-- TOP HERO SECTION (NỀN TRẮNG SÁNG KÈM ẢNH ĐỒ HỌA MẠNG LƯỚI CẦU SỐ CẢNH SANG TRỌNG FIGMA) -->
        <div class="relative bg-white rounded-3xl p-6 md:p-10 border border-slate-200/80 shadow-sm overflow-hidden grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <!-- Đồ họa mảng cầu số / công nghệ mờ bên phải -->
            <div class="absolute right-0 top-0 bottom-0 w-full lg:w-1/2 opacity-30 bg-cover bg-right pointer-events-none mix-blend-multiply hidden md:block" style="background-image: url('assets/img/hero-bg.jpg');"></div>

            <!-- Cột trái: Tiêu đề & Tổng đài hỗ trợ -->
            <div class="lg:col-span-7 space-y-6 text-left relative z-10">
                <div class="space-y-2">
                    <h1 class="text-h3 md:text-h2 font-extrabold text-[#062AAD] leading-tight">
                        Liên hệ & Kết nối
                    </h1>
                    <p class="text-body-xs text-slate-500 font-normal leading-relaxed max-w-lg">
                        CiNEC luôn sẵn sàng lắng nghe và đồng hành cùng bạn.<br class="hidden sm:inline"> Hãy liên hệ với chúng tôi để được hỗ trợ nhanh chóng và hiệu quả.
                    </p>
                </div>

                <!-- Box Tổng đài hỗ trợ trắng viền mờ chuẩn Figma -->
                <div class="inline-flex items-center gap-4 bg-white border border-slate-200/80 rounded-2xl p-4 shadow-sm">
                    <div class="w-12 h-12 rounded-2xl bg-[#062AAD] text-white flex items-center justify-center font-bold shadow-md shrink-0">
                        <i data-lucide="headset" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-0.5 text-left">
                        <span class="text-[10px] uppercase tracking-wider text-slate-400 font-extrabold block">Tổng đài hỗ trợ</span>
                        <a href="tel:0908736777" class="text-h4 font-black text-[#02185D] hover:text-[#062AAD] transition-colors block leading-none">
                            0908736777
                        </a>
                        <span class="text-[10px] text-slate-400 font-medium block">
                            Thời gian hỗ trợ: Luôn mở cửa
                        </span>
                    </div>
                </div>
            </div>

            <!-- Cột phải giữ khoảng trống layout -->
            <div class="lg:col-span-5 hidden lg:block"></div>
        </div>

        <!-- MAIN CONTENT CONTAINER: FORM LIÊN HỆ & THÔNG TIN LIÊN HỆ (BỌC CONTAINER TRẮNG CHUẨN FIGMA) -->
        <div class="bg-white rounded-3xl p-6 md:p-10 border border-slate-200/80 shadow-sm grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <!-- CỘT TRÁI: FORM GỬI YÊU CẦU LIÊN HỆ (7/12 CỘT) -->
            <div class="lg:col-span-7 space-y-6 text-left">
<?php
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
        $contact_error = 'Vui lòng điền đầy đủ Họ tên, Email và Số điện thoại!';
    }
}
?>

                <div class="space-y-1">
                    <h2 class="text-h4 font-extrabold text-[#02185D]">Gửi yêu cầu liên hệ</h2>
                    <p class="text-body-xs text-slate-500 font-normal">
                        Vui lòng điền thông tin bên dưới, chúng tôi sẽ phản hồi trong thời gian sớm nhất.
                    </p>
                </div>

                <?php if ($contact_sent): ?>
                    <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-600 shrink-0"></i>
                        <span>Cảm ơn bạn! Yêu cầu liên hệ đã được gửi thành công đến Ban Quản Lý CiNEC. Chúng tôi sẽ sớm liên hệ lại.</span>
                    </div>
                <?php endif; ?>

                <?php if (!empty($contact_error)): ?>
                    <div class="p-4 rounded-2xl bg-rose-50 border border-rose-200 text-rose-800 text-xs font-semibold flex items-center gap-3">
                        <i data-lucide="alert-circle" class="w-5 h-5 text-rose-600 shrink-0"></i>
                        <span><?php echo htmlspecialchars($contact_error); ?></span>
                    </div>
                <?php endif; ?>

                <form action="lien-he.php" method="POST" class="space-y-4">
                    <input type="hidden" name="action" value="contact_submit">
                    <!-- Row 1: Họ tên & Email -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label class="text-body-xs font-bold text-slate-700 block">Họ và tên <span class="text-red-500">*</span></label>
                            <input type="text" name="fullname" required placeholder="Nhập họ và tên" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200/80 rounded-xl text-body-xs focus:outline-none focus:border-[#062AAD]">
                        </div>
                        <div class="space-y-1.5">
                            <label class="text-body-xs font-bold text-slate-700 block">Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email" required placeholder="Nhập email" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200/80 rounded-xl text-body-xs focus:outline-none focus:border-[#062AAD]">
                        </div>
                    </div>

                    <!-- Row 2: SĐT & Chủ đề -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label class="text-body-xs font-bold text-slate-700 block">Số điện thoại <span class="text-red-500">*</span></label>
                            <input type="tel" name="phone" required placeholder="Nhập số điện thoại" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200/80 rounded-xl text-body-xs focus:outline-none focus:border-[#062AAD]">
                        </div>
                        <div class="space-y-1.5">
                            <label class="text-body-xs font-bold text-slate-700 block">Chủ đề <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <select name="subject" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200/80 rounded-xl text-body-xs text-slate-500 focus:outline-none focus:border-[#062AAD] appearance-none">
                                    <option value="Tư vấn Ươm tạo Startup">Tư vấn Ươm tạo Startup</option>
                                    <option value="Đăng ký Nền tảng Đổi mới sáng tạo">Đăng ký Nền tảng Đổi mới sáng tạo</option>
                                    <option value="Đăng ký Doanh nghiệp số (Voucher CĐS)">Đăng ký Doanh nghiệp số (Voucher CĐS)</option>
                                    <option value="Đăng ký Học bổng Nhân tài số">Đăng ký Học bổng Nhân tài số</option>
                                    <option value="Hợp tác Đối tác & Viện Trường">Hợp tác Đối tác & Viện Trường</option>
                                    <option value="Thuê Không gian Sáng tạo (Workspace)">Thuê Không gian Sáng tạo (Workspace)</option>
                                    <option value="Đầu tư & Kết nối Quỹ">Đầu tư & Kết nối Quỹ</option>
                                    <option value="Khác">Khác</option>
                                </select>
                                <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Row 3: Nội dung tin nhắn -->
                    <div class="space-y-1.5">
                        <label class="text-body-xs font-bold text-slate-700 block">Nội dung tin nhắn <span class="text-red-500">*</span></label>
                        <textarea name="message" required rows="4" placeholder="Nhập nội dung tin nhắn của bạn..." class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200/80 rounded-xl text-body-xs focus:outline-none focus:border-[#062AAD]"></textarea>
                    </div>

                    <!-- Checkbox điều khoản -->
                    <div class="flex items-center gap-2 pt-1">
                        <input type="checkbox" id="agree" checked class="w-4 h-4 rounded border-slate-300 text-[#062AAD] focus:ring-0">
                        <label for="agree" class="text-[11px] text-slate-500 font-medium cursor-pointer">
                            Tôi đồng ý với <a href="#" class="text-[#062AAD] font-bold underline">Chính sách bảo mật</a> và <a href="#" class="text-[#062AAD] font-bold underline">Điều khoản sử dụng</a> của CiNEC.
                        </label>
                    </div>

                    <!-- Submit Button Pill chuẩn Figma -->
                    <div class="pt-2">
                        <button type="submit" class="bg-gradient-to-r from-[#05A6F5] to-[#062AAD] text-white font-extrabold text-body-xs rounded-full px-8 py-3 transition-all duration-300 shadow-md inline-flex items-center gap-2.5 hover:shadow-lg">
                            <span>Gửi yêu cầu</span>
                            <i data-lucide="send" class="w-4 h-4"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- CỘT PHẢI: THÔNG TIN LIÊN HỆ (5/12 CỘT) -->
            <div class="lg:col-span-5 space-y-6 text-left">
                <div class="space-y-1">
                    <h2 class="text-h4 font-extrabold text-[#02185D]">Thông tin liên hệ</h2>
                    <p class="text-body-xs text-slate-500 font-normal">
                        Kết nối với CiNEC qua các kênh chính thức
                    </p>
                </div>

                <div class="space-y-3.5">
                    <!-- Item 1: Địa chỉ -->
                    <div class="bg-[#FAFCFF] border border-slate-100 rounded-2xl p-4 flex items-start gap-4 hover:border-blue-200 transition-all">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-[#05A6F5] flex items-center justify-center shrink-0 border border-blue-100/60 mt-0.5">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <span class="text-body-xs font-extrabold text-[#02185D] block">Địa chỉ</span>
                            <p class="text-[11px] text-slate-500 leading-relaxed font-normal">
                                Toà nhà CiNEC, số 16 - 18 Cù Chính Lan, phường Bạc Liêu, Cà Mau, Vietnam
                            </p>
                        </div>
                    </div>

                    <!-- Item 2: Điện thoại -->
                    <div class="bg-[#FAFCFF] border border-slate-100 rounded-2xl p-4 flex items-start gap-4 hover:border-blue-200 transition-all">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-[#05A6F5] flex items-center justify-center shrink-0 border border-blue-100/60 mt-0.5">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <span class="text-body-xs font-extrabold text-[#02185D] block">Điện thoại</span>
                            <p class="text-[11px] text-slate-500 font-bold">
                                090 873 6777
                            </p>
                        </div>
                    </div>

                    <!-- Item 3: Email -->
                    <div class="bg-[#FAFCFF] border border-slate-100 rounded-2xl p-4 flex items-start gap-4 hover:border-blue-200 transition-all">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-[#05A6F5] flex items-center justify-center shrink-0 border border-blue-100/60 mt-0.5">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <span class="text-body-xs font-extrabold text-[#02185D] block">Email</span>
                            <p class="text-[11px] text-slate-500 font-normal">
                                cinecvietnam@gmail.com
                            </p>
                        </div>
                    </div>

                    <!-- Item 4: Website -->
                    <div class="bg-[#FAFCFF] border border-slate-100 rounded-2xl p-4 flex items-start gap-4 hover:border-blue-200 transition-all">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-[#05A6F5] flex items-center justify-center shrink-0 border border-blue-100/60 mt-0.5">
                            <i data-lucide="globe" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <span class="text-body-xs font-extrabold text-[#02185D] block">Website</span>
                            <p class="text-[11px] text-slate-500 font-normal">
                                cinec.com.vn
                            </p>
                        </div>
                    </div>

                    <!-- Item 5: Giờ làm việc -->
                    <div class="bg-[#FAFCFF] border border-slate-100 rounded-2xl p-4 flex items-start gap-4 hover:border-blue-200 transition-all">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-[#05A6F5] flex items-center justify-center shrink-0 border border-blue-100/60 mt-0.5">
                            <i data-lucide="clock" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <span class="text-body-xs font-extrabold text-[#02185D] block">Giờ làm việc</span>
                            <p class="text-[11px] text-slate-500 font-normal">
                                Luôn mở cửa
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- SECTION EMBEDDED BẢN ĐỒ GOOGLE MAPS TÍCH HỢP GOOGLE MAPS PLACE LINK GỐC CỦA BẠN -->
        <div class="w-full h-[460px] rounded-3xl overflow-hidden shadow-premium border border-slate-200/80 bg-slate-100 relative">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d698.8062376589186!2d105.72653807658897!3d9.293401736584991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a109005165d81b%3A0x3c632d72bfa3471e!2zVHJ1bmcgdMOibSBLaOG7n2kgbmdoaeG7h3AgdsOgIMSQ4buVaSBt4bubaSBzw6FuZyB04bqhbyAoQ2lORUMp!5e1!3m2!1sen!2s!4v1785342209351!5m2!1sen!2s" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
