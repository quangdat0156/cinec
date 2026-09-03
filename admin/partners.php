<?php
require_once __DIR__ . '/../includes/admin-layout.php';

// Xử lý hành động POST (Thêm / Sửa / Xóa)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'create' || $action === 'update') {
        $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;
        $name = trim($_POST['name'] ?? '');
        $category = $_POST['category'] ?? 'enterprise';
        $categoriesMap = [
            'enterprise' => 'Doanh nghiệp / Tập đoàn',
            'association' => 'Hiệp hội / Tổ chức',
            'education' => 'Đại học / Viện nghiên cứu',
            'government' => 'Cơ quan Nhà nước',
            'fund' => 'Quỹ đầu tư'
        ];
        $category_name = $categoriesMap[$category] ?? 'Đối tác';
        $url = trim($_POST['url'] ?? '#');

        // Tải logo trực tiếp từ máy tính & nén WebP
        $logo = trim($_POST['logo_url'] ?? '../assets/img/partner_bca.png');
        if (!empty($_FILES['logo_file']['tmp_name'])) {
            $uploadedPath = upload_and_optimize_image($_FILES['logo_file'], 'partners', 600, 85);
            if ($uploadedPath) {
                $logo = $uploadedPath;
            }
        }

        if (!empty($name)) {
            $data = [
                'id' => $id,
                'name' => $name,
                'category' => $category,
                'category_name' => $category_name,
                'logo' => $logo,
                'url' => $url,
            ];
            save_partner($data);
            $_SESSION['flash_success'] = $id ? 'Cập nhật đối tác và tối ưu logo WebP thành công!' : 'Thêm đối tác mới và tối ưu logo WebP thành công!';
        } else {
            $_SESSION['flash_error'] = 'Tên đối tác không được để trống!';
        }
    } elseif ($action === 'delete') {
        $id = (int)($_POST['id'] ?? 0);
        if ($id > 0) {
            delete_partner($id);
            $_SESSION['flash_success'] = 'Đã xóa đối tác thành công!';
        }
    }

    header("Location: partners.php");
    exit;
}

$filterCategory = $_GET['category'] ?? '';
$partnersList = get_partners();
if ($filterCategory) {
    $partnersList = array_values(array_filter($partnersList, fn($p) => ($p['category'] ?? '') === $filterCategory));
}

admin_header("Quản Lý Mạng Lưới Đối Tác", "partners");
?>

<!-- TOP ACTION HEADER -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-xl font-black text-[#02185D]">Danh Sách Mạng Lưới Đối Tác CiNEC</h2>
        <p class="text-xs text-slate-500">Tải logo trực tiếp từ máy tính (Nén WebP trong suốt) & Quản lý doanh nghiệp, quỹ, viện trường</p>
    </div>
    
    <div class="flex items-center gap-3">
        <button onclick="openCreateModal()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-2xl bg-[#062AAD] hover:bg-[#05A6F5] text-white text-xs font-bold transition-all shadow-md hover:-translate-y-0.5">
            <i data-lucide="plus-circle" class="w-4 h-4"></i>
            <span>Thêm Đối Tác Mới</span>
        </button>
    </div>
</div>

<!-- FILTER BAR -->
<div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-xs flex flex-wrap items-center justify-between gap-4">
    <div class="flex items-center gap-2 text-xs font-bold text-slate-600">
        <span class="text-slate-400">Phân loại:</span>
        <a href="partners.php" class="px-3 py-1.5 rounded-xl <?php echo empty($filterCategory) ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Tất cả</a>
        <a href="partners.php?category=enterprise" class="px-3 py-1.5 rounded-xl <?php echo $filterCategory === 'enterprise' ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Doanh nghiệp</a>
        <a href="partners.php?category=education" class="px-3 py-1.5 rounded-xl <?php echo $filterCategory === 'education' ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Viện trường</a>
        <a href="partners.php?category=government" class="px-3 py-1.5 rounded-xl <?php echo $filterCategory === 'government' ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Nhà nước</a>
        <a href="partners.php?category=fund" class="px-3 py-1.5 rounded-xl <?php echo $filterCategory === 'fund' ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Quỹ đầu tư</a>
    </div>

    <div class="text-xs text-slate-400">
        Tổng cộng: <strong class="text-slate-700"><?php echo count($partnersList); ?></strong> đối tác
    </div>
</div>

<!-- PARTNERS TABLE -->
<div class="bg-white rounded-3xl border border-slate-200/80 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-[#02185D] font-extrabold uppercase text-[11px]">
                    <th class="py-3.5 px-4 w-14 text-center">ID</th>
                    <th class="py-3.5 px-4 w-28 text-center">Logo</th>
                    <th class="py-3.5 px-4">Tên Đơn Vị / Đối Tác</th>
                    <th class="py-3.5 px-4 w-40 text-center">Phân Loại</th>
                    <th class="py-3.5 px-4 w-32">Website</th>
                    <th class="py-3.5 px-4 w-28 text-right">Thao Tác</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 font-medium text-slate-700">
                <?php if (empty($partnersList)): ?>
                    <tr>
                        <td colspan="6" class="py-8 text-center text-slate-400">Chưa có đối tác nào. Hãy thêm đối tác đầu tiên!</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($partnersList as $p): ?>
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-4 px-4 text-center font-bold text-slate-400"><?php echo $p['id']; ?></td>
                            <td class="py-4 px-4 text-center">
                                <div class="w-20 h-10 mx-auto rounded-xl bg-white border border-slate-200 p-1.5 flex items-center justify-center shadow-xs">
                                    <img src="<?php echo htmlspecialchars($p['logo'] ?: '../assets/img/partner_bca.png'); ?>" alt="Logo" class="max-w-full max-h-full object-contain">
                                </div>
                            </td>
                            <td class="py-4 px-4 font-extrabold text-sm text-[#02185D]">
                                <?php echo htmlspecialchars($p['name']); ?>
                            </td>
                            <td class="py-4 px-4 text-center">
                                <span class="px-2.5 py-1 rounded-full bg-blue-50 text-[#062AAD] text-[10px] font-extrabold border border-blue-200">
                                    <?php echo htmlspecialchars($p['category_name'] ?: 'Đối tác'); ?>
                                </span>
                            </td>
                            <td class="py-4 px-4">
                                <?php if (!empty($p['url']) && $p['url'] !== '#'): ?>
                                    <a href="<?php echo htmlspecialchars($p['url']); ?>" target="_blank" class="text-[#05A6F5] hover:underline flex items-center gap-1">
                                        <span>Liên kết</span>
                                        <i data-lucide="external-link" class="w-3 h-3"></i>
                                    </a>
                                <?php else: ?>
                                    <span class="text-slate-300">-</span>
                                <?php endif; ?>
                            </td>
                            <td class="py-4 px-4 text-right">
                                <div class="flex items-center justify-end gap-1.5">
                                    <button 
                                        onclick='openEditModal(<?php echo json_encode($p, JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP|JSON_UNESCAPED_UNICODE); ?>)'
                                        class="p-2 rounded-xl text-slate-600 hover:text-[#062AAD] hover:bg-blue-50 transition-colors"
                                        title="Chỉnh sửa đối tác"
                                    >
                                        <i data-lucide="edit-3" class="w-4 h-4"></i>
                                    </button>
                                    <button 
                                        onclick="confirmDelete(<?php echo $p['id']; ?>, '<?php echo htmlspecialchars(addslashes($p['name'])); ?>')"
                                        class="p-2 rounded-xl text-slate-600 hover:text-rose-600 hover:bg-rose-50 transition-colors"
                                        title="Xóa đối tác"
                                    >
                                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- MODAL THÊM / SỬA ĐỐI TÁC (TẢI ẢNH LOGO WEBP) -->
<div id="partnerModal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-3xl shadow-2xl border border-slate-200 w-full max-w-lg max-h-[90vh] overflow-y-auto custom-scrollbar p-6 sm:p-8 space-y-6">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
            <h3 id="modalTitle" class="text-base font-black text-[#02185D]">Thêm Đối Tác Mới</h3>
            <button onclick="closeModal()" class="p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-50 rounded-xl">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <form action="partners.php" method="POST" enctype="multipart/form-data" class="space-y-4 text-xs">
            <input type="hidden" name="action" id="formAction" value="create">
            <input type="hidden" name="id" id="partnerId" value="">
            <input type="hidden" name="logo_url" id="partnerLogoUrl" value="">

            <div>
                <label class="block font-bold text-slate-700 mb-1">Tên Đơn Vị / Doanh Nghiệp <span class="text-rose-500">*</span></label>
                <input type="text" name="name" id="partnerName" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Phân Loại Nhóm</label>
                    <select name="category" id="partnerCategory" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                        <option value="enterprise">Doanh nghiệp / Tập đoàn</option>
                        <option value="association">Hiệp hội / Tổ chức</option>
                        <option value="education">Đại học / Viện nghiên cứu</option>
                        <option value="government">Cơ quan Nhà nước</option>
                        <option value="fund">Quỹ đầu tư</option>
                    </select>
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Website URL</label>
                    <input type="text" name="url" id="partnerUrl" placeholder="https://..." class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
            </div>

            <!-- TẢI LOGO TRỰC TIẾP TỪ MÁY TÍNH -->
            <div class="space-y-2">
                <div class="flex items-center justify-between">
                    <label class="block font-bold text-slate-700">Logo Đối Tác (Tải từ máy tính - PNG trong suốt, JPG, SVG, WebP)</label>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-12 gap-3 items-center">
                    <div class="sm:col-span-8">
                        <label for="logoFileInput" class="flex flex-col items-center justify-center border-2 border-dashed border-slate-300 hover:border-[#05A6F5] bg-slate-50 hover:bg-blue-50/50 rounded-2xl p-3 cursor-pointer transition-all text-center group">
                            <i data-lucide="upload-cloud" class="w-6 h-6 text-slate-400 group-hover:text-[#05A6F5] mb-1"></i>
                            <span class="font-bold text-slate-700 group-hover:text-[#062AAD] text-[11px]">Chọn file logo từ máy tính</span>
                            <input type="file" id="logoFileInput" name="logo_file" accept="image/*" class="hidden" onchange="previewPartnerLogo(this)">
                        </label>
                    </div>

                    <div class="sm:col-span-4 flex items-center gap-2 bg-slate-50 p-2 rounded-2xl border border-slate-200">
                        <div class="w-16 h-12 rounded-xl bg-white border border-slate-300 p-1 flex items-center justify-center shrink-0">
                            <img id="partnerLogoPreview" src="../assets/img/partner_bca.png" alt="Logo" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="min-w-0">
                            <span id="partnerLogoName" class="text-[10px] font-bold text-slate-700 truncate block">Logo hiện tại</span>
                            <button type="button" onclick="resetPartnerLogo()" class="text-[10px] text-rose-500 hover:underline">Đặt lại</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                <button type="button" onclick="closeModal()" class="px-4 py-2.5 rounded-xl border border-slate-200 font-bold text-slate-600 hover:bg-slate-50">Hủy</button>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#062AAD] hover:bg-[#05A6F5] text-white font-bold transition-all shadow-md">Lưu Đối Tác</button>
            </div>
        </form>

    </div>
</div>

<!-- FORM XÓA ẨN -->
<form id="deleteForm" action="partners.php" method="POST" class="hidden">
    <input type="hidden" name="action" value="delete">
    <input type="hidden" name="id" id="deleteId" value="">
</form>

<script>
    const modal = document.getElementById("partnerModal");
    const logoFileInput = document.getElementById("logoFileInput");
    const partnerLogoPreview = document.getElementById("partnerLogoPreview");
    const partnerLogoName = document.getElementById("partnerLogoName");
    const partnerLogoUrl = document.getElementById("partnerLogoUrl");

    function previewPartnerLogo(input) {
        if (input.files && input.files[0]) {
            const file = input.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                partnerLogoPreview.src = e.target.result;
                partnerLogoName.innerText = file.name;
            };
            reader.readAsDataURL(file);
        }
    }

    function resetPartnerLogo() {
        logoFileInput.value = "";
        partnerLogoPreview.src = partnerLogoUrl.value || "../assets/img/partner_bca.png";
        partnerLogoName.innerText = partnerLogoUrl.value ? "Logo hiện tại" : "Chưa chọn";
    }

    function openCreateModal() {
        document.getElementById("modalTitle").innerText = "Thêm Đối Tác Mới";
        document.getElementById("formAction").value = "create";
        document.getElementById("partnerId").value = "";
        document.getElementById("partnerName").value = "";
        document.getElementById("partnerCategory").value = "enterprise";
        document.getElementById("partnerUrl").value = "#";
        document.getElementById("partnerLogoUrl").value = "../assets/img/partner_bca.png";
        logoFileInput.value = "";
        partnerLogoPreview.src = "../assets/img/partner_bca.png";
        partnerLogoName.innerText = "Mặc định";
        modal.classList.remove("hidden");
    }

    function openEditModal(p) {
        document.getElementById("modalTitle").innerText = "Chỉnh Sửa Đối Tác";
        document.getElementById("formAction").value = "update";
        document.getElementById("partnerId").value = p.id || "";
        document.getElementById("partnerName").value = p.name || "";
        document.getElementById("partnerCategory").value = p.category || "enterprise";
        document.getElementById("partnerUrl").value = p.url || "";
        document.getElementById("partnerLogoUrl").value = p.logo || "../assets/img/partner_bca.png";
        logoFileInput.value = "";
        partnerLogoPreview.src = p.logo || "../assets/img/partner_bca.png";
        partnerLogoName.innerText = "Logo hiện tại";
        modal.classList.remove("hidden");
    }

    function closeModal() {
        modal.classList.add("hidden");
    }

    function confirmDelete(id, name) {
        if (confirm("Bạn có chắc chắn muốn xóa đối tác: \"" + name + "\" không?")) {
            document.getElementById("deleteId").value = id;
            document.getElementById("deleteForm").submit();
        }
    }
</script>

<?php
admin_footer();
?>
