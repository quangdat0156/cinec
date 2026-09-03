<?php
require_once 'includes/admin-layout.php';

$about = get_about_info();

// Xử lý lưu thông tin chung / Tầm nhìn / Sứ mệnh / Nhân sự
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'save_general') {
        $about['hero_title'] = trim($_POST['hero_title'] ?? $about['hero_title']);
        $about['hero_desc'] = trim($_POST['hero_desc'] ?? $about['hero_desc']);
        $about['vision'] = trim($_POST['vision'] ?? $about['vision']);
        $about['mission'] = trim($_POST['mission'] ?? $about['mission']);

        save_about_info($about);
        $_SESSION['flash_success'] = 'Cập nhật Tầm nhìn, Sứ mệnh & Giới thiệu thành công!';
    } elseif ($action === 'save_team_member') {
        $id = !empty($_POST['member_id']) ? (int)$_POST['member_id'] : null;
        $name = trim($_POST['member_name'] ?? '');
        $role = trim($_POST['member_role'] ?? '');
        $org = trim($_POST['member_org'] ?? 'Trung tâm CiNEC');
        $bio = trim($_POST['member_bio'] ?? '');
        $linkedin = trim($_POST['member_linkedin'] ?? '#');

        // Tải avatar trực tiếp từ máy tính & tối ưu hóa WebP
        $avatar = trim($_POST['member_avatar_url'] ?? 'assets/img/avatar_director.jpg');
        if (!empty($_FILES['avatar_file']['tmp_name'])) {
            $uploadedPath = upload_and_optimize_image($_FILES['avatar_file'], 'team', 500, 85);
            if ($uploadedPath) {
                $avatar = $uploadedPath;
            }
        }

        if (!empty($name)) {
            $memberData = [
                'id' => $id,
                'name' => $name,
                'role' => $role,
                'org' => $org,
                'avatar' => $avatar,
                'bio' => $bio,
                'linkedin' => $linkedin
            ];
            save_team_member($memberData);
            $_SESSION['flash_success'] = $id ? 'Cập nhật nhân sự và tối ưu ảnh đại diện WebP thành công!' : 'Thêm nhân sự mới và tối ưu ảnh đại diện WebP thành công!';
        }
    } elseif ($action === 'delete_team_member') {
        $id = (int)($_POST['member_id'] ?? 0);
        if ($id > 0) {
            delete_team_member($id);
            $_SESSION['flash_success'] = 'Đã xóa nhân sự khỏi danh sách!';
        }
    }

    header("Location: admin-about.php");
    exit;
}

$about = get_about_info();
$team = $about['team'] ?? [];
$advisors = $about['advisors'] ?? [];
$startups = $about['startups'] ?? [];

admin_header("Quản Lý Giới Thiệu", "about");
?>

<!-- TOP ACTION HEADER -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-xl font-black text-[#02185D]">Quản Lý Trang Giới Thiệu CiNEC</h2>
        <p class="text-xs text-slate-500">Tùy chỉnh thông tin giới thiệu, Tầm nhìn - Sứ mệnh, Đội ngũ ban lãnh đạo và tải ảnh đại diện WebP</p>
    </div>
    
    <div class="flex items-center gap-3">
        <a href="gioi-thieu.php" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-white border border-slate-200 text-slate-700 text-xs font-bold hover:bg-slate-50 transition-all shadow-xs">
            <i data-lucide="external-link" class="w-4 h-4 text-[#05A6F5]"></i>
            <span>Xem Trang Giới Thiệu</span>
        </a>
    </div>
</div>

<div class="space-y-8">

    <!-- 1. TỔNG QUAN, TẦM NHÌN & SỨ MỆNH -->
    <form action="admin-about.php" method="POST" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-xs space-y-6">
        <input type="hidden" name="action" value="save_general">

        <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#062AAD] flex items-center justify-center font-bold">
                <i data-lucide="info" class="w-5 h-5"></i>
            </div>
            <div>
                <h3 class="text-base font-black text-[#02185D]">1. Giới Thiệu Chung & Tầm Nhìn - Sứ Mệnh</h3>
                <p class="text-xs text-slate-400">Hiển thị ở phần đầu trang Giới thiệu (Hero Intro & Vision/Mission cards)</p>
            </div>
        </div>

        <div class="space-y-4 text-xs">
            <div class="space-y-1.5">
                <label class="block font-bold text-slate-700">Tiêu Đề Giới Thiệu Chính</label>
                <input type="text" name="hero_title" value="<?php echo htmlspecialchars($about['hero_title'] ?? 'Trung tâm Khởi nghiệp và Đổi mới sáng tạo'); ?>" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
            </div>

            <div class="space-y-1.5">
                <label class="block font-bold text-slate-700">Đoạn Văn Thuyết Minh Giới Thiệu Chức Năng</label>
                <textarea name="hero_desc" rows="3" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none leading-relaxed"><?php echo htmlspecialchars($about['hero_desc'] ?? ''); ?></textarea>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                <div class="space-y-1.5 bg-blue-50/50 p-4 rounded-2xl border border-blue-100">
                    <label class="block font-bold text-[#062AAD] flex items-center gap-1.5">
                        <i data-lucide="eye" class="w-4 h-4 text-[#05A6F5]"></i> Tầm Nhìn (Vision)
                    </label>
                    <textarea name="vision" rows="3" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-slate-700 focus:border-[#05A6F5] outline-none"><?php echo htmlspecialchars($about['vision'] ?? ''); ?></textarea>
                </div>

                <div class="space-y-1.5 bg-emerald-50/50 p-4 rounded-2xl border border-emerald-100">
                    <label class="block font-bold text-emerald-800 flex items-center gap-1.5">
                        <i data-lucide="target" class="w-4 h-4 text-emerald-600"></i> Sứ Mệnh (Mission)
                    </label>
                    <textarea name="mission" rows="3" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-slate-700 focus:border-[#05A6F5] outline-none"><?php echo htmlspecialchars($about['mission'] ?? ''); ?></textarea>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-end pt-2">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-xl bg-[#062AAD] hover:bg-[#05A6F5] text-white font-bold text-xs transition-all shadow-sm">
                <i data-lucide="save" class="w-4 h-4"></i>
                <span>Lưu Thay Đổi Giới Thiệu</span>
            </button>
        </div>
    </form>

    <!-- 2. QUẢN LÝ ĐỘI NGŨ BAN LÃNH ĐẠO & CÁN BỘ -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-xs space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-b border-slate-100 pb-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold">
                    <i data-lucide="users" class="w-5 h-5"></i>
                </div>
                <div>
                    <h3 class="text-base font-black text-[#02185D]">2. Đội Ngũ Ban Giám Đốc & Cán Bộ CiNEC</h3>
                    <p class="text-xs text-slate-400">Tải ảnh avatar trực tiếp từ máy tính (Tự động nén WebP) và quản lý nhân sự</p>
                </div>
            </div>

            <button onclick="openCreateMemberModal()" class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-[#062AAD] hover:bg-[#05A6F5] text-white text-xs font-bold transition-all shadow-sm self-start sm:self-auto">
                <i data-lucide="plus-circle" class="w-4 h-4"></i>
                <span>Thêm Nhân Sự Mới</span>
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <?php foreach ($team as $idx => $m): 
                $mId = $m['id'] ?? ($idx + 1);
            ?>
                <div class="p-5 rounded-2xl border border-slate-200 hover:border-[#05A6F5] hover:shadow-md transition-all flex flex-col justify-between space-y-4 bg-white">
                    <div class="space-y-3">
                        <div class="flex items-center gap-3.5">
                            <div class="w-14 h-14 rounded-2xl overflow-hidden bg-slate-100 border border-slate-200 shrink-0">
                                <img src="<?php echo htmlspecialchars($m['avatar'] ?? 'assets/img/avatar_director.jpg'); ?>" alt="Avatar" class="w-full h-full object-cover">
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-black text-[#02185D] truncate"><?php echo htmlspecialchars($m['name']); ?></h4>
                                <span class="text-[11px] font-bold text-[#05A6F5] block truncate"><?php echo htmlspecialchars($m['role']); ?></span>
                                <span class="text-[10px] text-slate-400 block truncate"><?php echo htmlspecialchars($m['org'] ?? 'Trung tâm CiNEC'); ?></span>
                            </div>
                        </div>
                        <p class="text-[11px] text-slate-500 line-clamp-3 leading-relaxed"><?php echo htmlspecialchars($m['bio'] ?? ''); ?></p>
                    </div>

                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-[10px] text-slate-400">Thành viên #<?php echo $mId; ?></span>
                        <div class="flex items-center gap-1.5">
                            <button 
                                onclick='openEditMemberModal(<?php echo json_encode(array_merge($m, ["id" => $mId]), JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP|JSON_UNESCAPED_UNICODE); ?>)'
                                class="p-1.5 text-slate-500 hover:text-[#062AAD] hover:bg-blue-50 rounded-lg transition-colors"
                                title="Sửa"
                            >
                                <i data-lucide="edit-3" class="w-4 h-4"></i>
                            </button>
                            <button 
                                onclick="confirmDeleteMember(<?php echo $mId; ?>, '<?php echo htmlspecialchars(addslashes($m['name'])); ?>')"
                                class="p-1.5 text-slate-500 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-colors"
                                title="Xóa"
                            >
                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<!-- MODAL THÊM / SỬA NHÂN SỰ (TẢI AVATAR TRỰC TIẾP) -->
<div id="memberModal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-3xl shadow-2xl border border-slate-200 w-full max-w-lg max-h-[90vh] overflow-y-auto custom-scrollbar p-6 sm:p-8 space-y-6">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
            <h3 id="modalMemberTitle" class="text-base font-black text-[#02185D]">Thêm Nhân Sự Mới</h3>
            <button onclick="closeMemberModal()" class="p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-50 rounded-xl">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <form action="admin-about.php" method="POST" enctype="multipart/form-data" class="space-y-4 text-xs">
            <input type="hidden" name="action" value="save_team_member">
            <input type="hidden" name="member_id" id="memberId" value="">
            <input type="hidden" name="member_avatar_url" id="memberAvatarUrl" value="">

            <div>
                <label class="block font-bold text-slate-700 mb-1">Họ Và Tên <span class="text-rose-500">*</span></label>
                <input type="text" name="member_name" id="memberName" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Chức Vụ</label>
                    <input type="text" name="member_role" id="memberRole" placeholder="Giám đốc / Phó Giám đốc..." class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Đơn Vị</label>
                    <input type="text" name="member_org" id="memberOrg" placeholder="Trung tâm CiNEC" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
            </div>

            <!-- TẢI AVATAR TRỰC TIẾP TỪ MÁY TÍNH -->
            <div class="space-y-2">
                <label class="block font-bold text-slate-700">Ảnh Đại Diện (Tải trực tiếp từ máy tính - Nén WebP tự động)</label>

                <div class="grid grid-cols-1 sm:grid-cols-12 gap-3 items-center">
                    <div class="sm:col-span-8">
                        <label for="avatarFileInput" class="flex flex-col items-center justify-center border-2 border-dashed border-slate-300 hover:border-[#05A6F5] bg-slate-50 hover:bg-blue-50/50 rounded-2xl p-3 cursor-pointer transition-all text-center group">
                            <i data-lucide="upload-cloud" class="w-6 h-6 text-slate-400 group-hover:text-[#05A6F5] mb-1"></i>
                            <span class="font-bold text-slate-700 group-hover:text-[#062AAD] text-[11px]">Chọn ảnh đại diện từ máy tính</span>
                            <input type="file" id="avatarFileInput" name="avatar_file" accept="image/*" class="hidden" onchange="previewAvatar(this)">
                        </label>
                    </div>

                    <div class="sm:col-span-4 flex items-center gap-2 bg-slate-50 p-2 rounded-2xl border border-slate-200">
                        <div class="w-14 h-14 rounded-2xl overflow-hidden bg-slate-200 border border-slate-300 shrink-0">
                            <img id="avatarPreview" src="assets/img/avatar_director.jpg" alt="Avatar" class="w-full h-full object-cover">
                        </div>
                        <div class="min-w-0">
                            <span id="avatarFileName" class="text-[10px] font-bold text-slate-700 truncate block">Ảnh hiện tại</span>
                            <button type="button" onclick="resetAvatar()" class="text-[10px] text-rose-500 hover:underline">Đặt lại</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Tiểu Sử / Kinh Nghiệm</label>
                <textarea name="member_bio" id="memberBio" rows="3" placeholder="Mô tả kinh nghiệm và lĩnh vực phụ trách..." class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none"></textarea>
            </div>

            <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                <button type="button" onclick="closeMemberModal()" class="px-4 py-2.5 rounded-xl border border-slate-200 font-bold text-slate-600 hover:bg-slate-50">Hủy</button>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#062AAD] hover:bg-[#05A6F5] text-white font-bold transition-all shadow-md">Lưu Nhân Sự</button>
            </div>
        </form>

    </div>
</div>

<!-- FORM XÓA NHÂN SỰ ẨN -->
<form id="deleteMemberForm" action="admin-about.php" method="POST" class="hidden">
    <input type="hidden" name="action" value="delete_team_member">
    <input type="hidden" name="member_id" id="deleteMemberId" value="">
</form>

<script>
    const memberModal = document.getElementById("memberModal");
    const avatarFileInput = document.getElementById("avatarFileInput");
    const avatarPreview = document.getElementById("avatarPreview");
    const avatarFileName = document.getElementById("avatarFileName");
    const memberAvatarUrl = document.getElementById("memberAvatarUrl");

    function previewAvatar(input) {
        if (input.files && input.files[0]) {
            const file = input.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                avatarPreview.src = e.target.result;
                avatarFileName.innerText = file.name;
            };
            reader.readAsDataURL(file);
        }
    }

    function resetAvatar() {
        avatarFileInput.value = "";
        avatarPreview.src = memberAvatarUrl.value || "assets/img/avatar_director.jpg";
        avatarFileName.innerText = memberAvatarUrl.value ? "Ảnh hiện tại" : "Chưa chọn";
    }

    function openCreateMemberModal() {
        document.getElementById("modalMemberTitle").innerText = "Thêm Nhân Sự Mới";
        document.getElementById("memberId").value = "";
        document.getElementById("memberName").value = "";
        document.getElementById("memberRole").value = "Cán bộ chuyên trách";
        document.getElementById("memberOrg").value = "Trung tâm CiNEC";
        document.getElementById("memberAvatarUrl").value = "assets/img/avatar_deputy1.jpg";
        avatarFileInput.value = "";
        avatarPreview.src = "assets/img/avatar_deputy1.jpg";
        avatarFileName.innerText = "Mặc định";
        document.getElementById("memberBio").value = "";
        memberModal.classList.remove("hidden");
    }

    function openEditMemberModal(m) {
        document.getElementById("modalMemberTitle").innerText = "Chỉnh Sửa Nhân Sự";
        document.getElementById("memberId").value = m.id || "";
        document.getElementById("memberName").value = m.name || "";
        document.getElementById("memberRole").value = m.role || "";
        document.getElementById("memberOrg").value = m.org || "Trung tâm CiNEC";
        document.getElementById("memberAvatarUrl").value = m.avatar || "assets/img/avatar_director.jpg";
        avatarFileInput.value = "";
        avatarPreview.src = m.avatar || "assets/img/avatar_director.jpg";
        avatarFileName.innerText = "Ảnh hiện tại";
        document.getElementById("memberBio").value = m.bio || "";
        memberModal.classList.remove("hidden");
    }

    function closeMemberModal() {
        memberModal.classList.add("hidden");
    }

    function confirmDeleteMember(id, name) {
        if (confirm("Bạn có chắc chắn muốn xóa nhân sự \"" + name + "\" không?")) {
            document.getElementById("deleteMemberId").value = id;
            document.getElementById("deleteMemberForm").submit();
        }
    }
</script>

<?php
admin_footer();
?>
