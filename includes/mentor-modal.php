<?php
/**
 * Mentor Booking Modal Component - CiNEC (Bilingual Support)
 * Tự động chọn đúng chuyên gia (không cần chọn lại dropdown)
 * 3 lựa chọn hình thức gặp: Gặp tại VP CiNEC, Địa điểm khác, Họp Online
 */
$is_en_modal = function_exists('current_lang') && current_lang() === 'en';
?>

<!-- MODAL ĐẶT LỊCH HẸN MENTOR -->
<div id="mentorBookingModal" class="fixed inset-0 z-50 bg-slate-950/70 backdrop-blur-xs flex items-center justify-center p-3 sm:p-6 hidden font-sans">
    <div class="bg-white rounded-3xl shadow-2xl border border-slate-200 w-full max-w-xl max-h-[92vh] flex flex-col overflow-hidden animate-in fade-in zoom-in-95 duration-200">
        
        <!-- Header Modal -->
        <div class="p-6 bg-gradient-to-r from-[#02185D] via-[#062AAD] to-[#05A6F5] text-white flex items-center justify-between shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-2xl bg-white/15 backdrop-blur-md flex items-center justify-center text-[#C1FF72] border border-white/20">
                    <i data-lucide="calendar-check-2" class="w-5 h-5"></i>
                </div>
                <div class="text-left">
                    <h3 class="text-base font-extrabold text-white">
                        <?php echo $is_en_modal ? 'Book a Session with Mentor' : 'Đặt Lịch Hẹn Chuyên Gia Mentor'; ?>
                    </h3>
                    <p class="text-[11px] text-blue-100 font-light">
                        <?php echo $is_en_modal ? '1:1 advisory session empowering innovation & startup projects' : 'Tư vấn 1:1 đồng hành cùng dự án đổi mới sáng tạo & khởi nghiệp'; ?>
                    </p>
                </div>
            </div>
            <button onclick="closeMentorModal()" class="p-2 text-white/70 hover:text-white hover:bg-white/10 rounded-xl transition-colors">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <!-- Body Form -->
        <form action="dat-lich-mentor.php" method="POST" class="flex-1 overflow-y-auto custom-scrollbar p-6 space-y-4 text-xs text-left">
            <input type="hidden" name="action" value="book_mentor">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? 'doi-tac.php?tab=mentors'); ?>">
            <input type="hidden" name="mentor_name" id="mentorNameHidden" value="Chuyên gia CiNEC">

            <!-- 1. KHỐI HIỂN THỊ CHUYÊN GIA ĐÃ CHỌN -->
            <div class="bg-blue-50/70 p-3.5 rounded-2xl border border-blue-100 flex items-center gap-3.5">
                <div class="w-12 h-12 rounded-xl overflow-hidden bg-white border border-blue-200 shrink-0 shadow-xs">
                    <img id="mentorModalAvatar" src="assets/img/avatar_deputy1.jpg" alt="Mentor" class="w-full h-full object-cover">
                </div>
                <div class="min-w-0 flex-1">
                    <span class="text-[10px] font-black uppercase text-[#05A6F5] tracking-wider block">
                        <?php echo $is_en_modal ? 'Designated Mentor' : 'Chuyên Gia Cố Vấn'; ?>
                    </span>
                    <h4 id="mentorModalName" class="text-sm font-extrabold text-[#02185D] truncate">TS. Trần Đình Cương</h4>
                    <p id="mentorModalRole" class="text-[11px] text-slate-500 font-medium truncate">Cố vấn Trưởng AI & IoT Thủy Sản</p>
                </div>
            </div>

            <!-- 2. Thông tin người đặt -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="space-y-1">
                    <label class="block font-bold text-slate-700"><?php echo $is_en_modal ? 'Full Name' : 'Họ Và Tên'; ?> <span class="text-rose-500">*</span></label>
                    <input type="text" name="fullname" required placeholder="<?php echo $is_en_modal ? 'Your full name' : 'Nguyễn Văn A'; ?>" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
                <div class="space-y-1">
                    <label class="block font-bold text-slate-700"><?php echo $is_en_modal ? 'Phone Number' : 'Số Điện Thoại'; ?> <span class="text-rose-500">*</span></label>
                    <input type="tel" name="phone" required placeholder="0908 xxx xxx" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="space-y-1">
                    <label class="block font-bold text-slate-700"><?php echo $is_en_modal ? 'Email Address' : 'Email Tiếp Nhận'; ?></label>
                    <input type="email" name="email" placeholder="email@domain.com" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
                <div class="space-y-1">
                    <label class="block font-bold text-slate-700"><?php echo $is_en_modal ? 'Project / Organization' : 'Tên Dự Án / Doanh Nghiệp'; ?></label>
                    <input type="text" name="organization" placeholder="<?php echo $is_en_modal ? 'Startup / SME / Individual...' : 'Startup / HTX / Doanh nghiệp...'; ?>" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
            </div>

            <!-- 3. BA LỰA CHỌN HÌNH THỨC GẶP -->
            <div class="space-y-2 pt-1">
                <label class="block font-extrabold text-slate-800 text-xs">
                    <?php echo $is_en_modal ? 'Meeting Format' : 'Hình Thức Gặp Mentor'; ?> <span class="text-rose-500">*</span>:
                </label>

                <div class="grid grid-cols-1 gap-2.5">
                    <!-- Lựa chọn 1: Gặp tại văn phòng CiNEC -->
                    <label class="flex items-start gap-3 p-3 rounded-2xl border border-slate-200 hover:border-[#05A6F5] hover:bg-blue-50/40 transition-all cursor-pointer bg-slate-50/60 has-[:checked]:border-[#05A6F5] has-[:checked]:bg-blue-50/70 has-[:checked]:ring-2 has-[:checked]:ring-[#05A6F5]/20">
                        <input type="radio" name="meeting_type" value="office" checked onchange="toggleMeetingLocation(this.value)" class="mt-0.5 w-4 h-4 text-[#062AAD] focus:ring-[#05A6F5]">
                        <div class="space-y-0.5">
                            <div class="font-extrabold text-[#02185D] flex items-center gap-1.5">
                                <i data-lucide="building-2" class="w-3.5 h-3.5 text-[#05A6F5]"></i>
                                <span><?php echo $is_en_modal ? 'Meet at CiNEC Headquarters' : 'Gặp tại văn phòng CiNEC'; ?></span>
                            </div>
                            <p class="text-[11px] text-slate-500 font-normal">
                                <?php echo $is_en_modal ? 'CiNEC Building, 16 - 18 Cu Chinh Lan St., Ca Mau (Executive Advisory Room)' : 'Toà nhà CiNEC, số 16 - 18 Cù Chính Lan, P. Bạc Liêu, TP. Cà Mau (Phòng họp chuyên gia)'; ?>
                            </p>
                        </div>
                    </label>

                    <!-- Lựa chọn 2: Địa điểm khác -->
                    <label class="flex items-start gap-3 p-3 rounded-2xl border border-slate-200 hover:border-amber-400 hover:bg-amber-50/40 transition-all cursor-pointer bg-slate-50/60 has-[:checked]:border-amber-500 has-[:checked]:bg-amber-50/70 has-[:checked]:ring-2 has-[:checked]:ring-amber-500/20">
                        <input type="radio" name="meeting_type" value="custom_location" onchange="toggleMeetingLocation(this.value)" class="mt-0.5 w-4 h-4 text-amber-600 focus:ring-amber-500">
                        <div class="space-y-0.5 flex-1">
                            <div class="font-extrabold text-slate-800 flex items-center gap-1.5">
                                <i data-lucide="map-pin" class="w-3.5 h-3.5 text-amber-600"></i>
                                <span><?php echo $is_en_modal ? 'Alternative In-Person Location' : 'Địa điểm khác'; ?></span>
                            </div>
                            <p class="text-[11px] text-slate-500 font-normal">
                                <?php echo $is_en_modal ? 'Propose an alternative convenient location (Coffee shop, startup office...)' : 'Đề xuất địa điểm gặp mặt phù hợp với bạn (Quán Cafe, Trụ sở doanh nghiệp / HTX...)'; ?>
                            </p>
                            
                            <div id="customLocationBox" class="hidden pt-2">
                                <input type="text" name="custom_location_detail" placeholder="<?php echo $is_en_modal ? 'Specify proposed address...' : 'Nhập địa chỉ cụ thể đề xuất...'; ?>" class="w-full px-3 py-2 bg-white border border-amber-300 rounded-xl text-[11px] font-medium text-slate-800 focus:outline-none">
                            </div>
                        </div>
                    </label>

                    <!-- Lựa chọn 3: Họp Online -->
                    <label class="flex items-start gap-3 p-3 rounded-2xl border border-slate-200 hover:border-purple-400 hover:bg-purple-50/40 transition-all cursor-pointer bg-slate-50/60 has-[:checked]:border-purple-500 has-[:checked]:bg-purple-50/70 has-[:checked]:ring-2 has-[:checked]:ring-purple-500/20">
                        <input type="radio" name="meeting_type" value="online" onchange="toggleMeetingLocation(this.value)" class="mt-0.5 w-4 h-4 text-purple-600 focus:ring-purple-500">
                        <div class="space-y-0.5">
                            <div class="font-extrabold text-slate-800 flex items-center gap-1.5">
                                <i data-lucide="video" class="w-3.5 h-3.5 text-purple-600"></i>
                                <span><?php echo $is_en_modal ? 'Virtual Meeting (Online)' : 'Họp trực tuyến (Online)'; ?></span>
                            </div>
                            <p class="text-[11px] text-slate-500 font-normal">
                                <?php echo $is_en_modal ? '1:1 video call via Google Meet / Zoom (Link sent via Email & SMS)' : 'Trao đổi 1:1 qua Google Meet / Zoom (Link phòng họp sẽ được gửi qua Email & Zalo của bạn)'; ?>
                            </p>
                        </div>
                    </label>
                </div>
            </div>

            <!-- 4. Thời gian dự kiến & Nội dung -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">
                <div class="space-y-1">
                    <label class="block font-bold text-slate-700"><?php echo $is_en_modal ? 'Preferred Date' : 'Ngày Hẹn Mong Muốn'; ?></label>
                    <input type="date" name="preferred_date" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
                <div class="space-y-1">
                    <label class="block font-bold text-slate-700"><?php echo $is_en_modal ? 'Preferred Time Slot' : 'Khung Giờ'; ?></label>
                    <select name="preferred_time" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                        <option value="08:30 - 10:00 (Sáng)">08:30 - 10:00 (<?php echo $is_en_modal ? 'Morning' : 'Sáng'; ?>)</option>
                        <option value="10:00 - 11:30 (Sáng)">10:00 - 11:30 (<?php echo $is_en_modal ? 'Morning' : 'Sáng'; ?>)</option>
                        <option value="14:00 - 15:30 (Chiều)">14:00 - 15:30 (<?php echo $is_en_modal ? 'Afternoon' : 'Chiều'; ?>)</option>
                        <option value="15:30 - 17:00 (Chiều)">15:30 - 17:00 (<?php echo $is_en_modal ? 'Afternoon' : 'Chiều'; ?>)</option>
                    </select>
                </div>
            </div>

            <div class="space-y-1">
                <label class="block font-bold text-slate-700"><?php echo $is_en_modal ? 'Session Agenda / Questions for Mentor' : 'Nội Dung / Vấn Đề Cần Mentor Tư Vấn'; ?></label>
                <textarea name="message" rows="2" placeholder="<?php echo $is_en_modal ? 'Summary of bottlenecks, goals to address (Fundraising, AI tech, OCOP standards, legal...)' : 'Mô tả tóm tắt khó khăn, mục tiêu cần giải đáp (Vốn, công nghệ AI, nâng chuẩn OCOP, pháp lý...)'; ?>" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none leading-relaxed"></textarea>
            </div>

            <!-- Nút gửi -->
            <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-3">
                <button type="button" onclick="closeMentorModal()" class="px-5 py-2.5 rounded-xl border border-slate-200 font-bold text-slate-600 hover:bg-slate-50">
                    <?php echo $is_en_modal ? 'Cancel' : 'Đóng'; ?>
                </button>
                <button type="submit" class="px-7 py-2.5 rounded-xl bg-gradient-to-r from-[#062AAD] to-[#05A6F5] hover:from-[#02185D] hover:to-[#062AAD] text-white font-bold transition-all shadow-md flex items-center gap-2">
                    <i data-lucide="send" class="w-4 h-4 text-[#C1FF72]"></i>
                    <span><?php echo $is_en_modal ? 'Confirm Appointment' : 'Xác Nhận Đặt Lịch Hẹn'; ?></span>
                </button>
            </div>
        </form>

    </div>
</div>

<script>
    const mentorModal = document.getElementById("mentorBookingModal");
    const customLocationBox = document.getElementById("customLocationBox");
    const mentorNameHidden = document.getElementById("mentorNameHidden");
    const mentorModalName = document.getElementById("mentorModalName");
    const mentorModalRole = document.getElementById("mentorModalRole");
    const mentorModalAvatar = document.getElementById("mentorModalAvatar");

    function openMentorModal(mentorName = 'Chuyên gia CiNEC', mentorAvatar = 'assets/img/avatar_deputy1.jpg', mentorRole = 'Cố vấn chuyên môn') {
        if (mentorModal) {
            if (mentorNameHidden) mentorNameHidden.value = mentorName;
            if (mentorModalName) mentorModalName.innerText = mentorName;
            if (mentorModalRole) mentorModalRole.innerText = mentorRole;
            if (mentorModalAvatar && mentorAvatar) mentorModalAvatar.src = mentorAvatar;
            mentorModal.classList.remove("hidden");
        }
    }

    function closeMentorModal() {
        if (mentorModal) {
            mentorModal.classList.add("hidden");
        }
    }

    function toggleMeetingLocation(value) {
        if (customLocationBox) {
            if (value === 'custom_location') {
                customLocationBox.classList.remove('hidden');
            } else {
                customLocationBox.classList.add('hidden');
            }
        }
    }
</script>
