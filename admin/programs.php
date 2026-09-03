<?php
require_once __DIR__ . '/../includes/admin-layout.php';

// Xử lý cập nhật thông tin chương trình
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    if (!empty($id)) {
        $existing = get_program_by_id($id);
        if ($existing) {
            $existing['title'] = trim($_POST['title'] ?? $existing['title']);
            $existing['sub_title'] = trim($_POST['sub_title'] ?? $existing['sub_title']);
            $existing['badge'] = trim($_POST['badge'] ?? $existing['badge']);
            $existing['short_desc'] = trim($_POST['short_desc'] ?? $existing['short_desc']);
            $existing['main_function'] = trim($_POST['main_function'] ?? $existing['main_function']);
            $existing['desc'] = trim($_POST['desc'] ?? $existing['desc']);
            $existing['target_audience'] = trim($_POST['target_audience'] ?? $existing['target_audience']);
            
            // Xử lý key metrics
            if (isset($_POST['metric_num_0'])) {
                $existing['key_metrics'] = [
                    ['number' => trim($_POST['metric_num_0']), 'label' => trim($_POST['metric_lbl_0'])],
                    ['number' => trim($_POST['metric_num_1']), 'label' => trim($_POST['metric_lbl_1'])],
                    ['number' => trim($_POST['metric_num_2']), 'label' => trim($_POST['metric_lbl_2'])],
                ];
            }

            save_program($existing);
            $_SESSION['flash_success'] = "Cập nhật thông tin chương trình \"{$existing['title']}\" thành công!";
        }
    }
    header("Location: programs.php");
    exit;
}

$programs = get_programs();

admin_header("Quản Lý 04 Chương Trình ĐMST", "programs");
?>

<!-- TOP ACTION HEADER -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-xl font-black text-[#02185D]">Hệ Thống 04 Chương Trình Đổi Mới Sáng Tạo</h2>
        <p class="text-xs text-slate-500">Chỉnh sửa nội dung, chỉ số mục tiêu và chức năng cốt lõi của các chương trình</p>
    </div>
    
    <div class="flex items-center gap-3">
        <a href="chuong-trinh.php" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-white border border-slate-200 text-slate-700 text-xs font-bold hover:bg-slate-50 transition-all shadow-xs">
            <i data-lucide="external-link" class="w-4 h-4 text-[#05A6F5]"></i>
            <span>Xem Trang Tổng Quan</span>
        </a>
    </div>
</div>

<!-- 04 PROGRAMS CARDS GRID -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <?php foreach ($programs as $prog): ?>
        <div class="bg-white rounded-3xl border border-slate-200/80 shadow-xs overflow-hidden flex flex-col justify-between hover:shadow-md transition-all">
            
            <!-- Program Header -->
            <div class="p-6 border-b border-slate-100 bg-slate-50/50 flex items-start justify-between gap-4">
                <div class="flex items-center gap-3.5">
                    <div class="w-12 h-12 rounded-2xl <?php echo $prog['bg_light']; ?> <?php echo $prog['text_color']; ?> flex items-center justify-center font-black text-xl border border-slate-200/60 shadow-xs">
                        <i data-lucide="<?php echo $prog['icon']; ?>" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-400"><?php echo $prog['code']; ?></span>
                        <h3 class="text-base font-black text-[#02185D] leading-tight"><?php echo $prog['title']; ?></h3>
                        <div class="text-xs text-[#05A6F5] font-semibold"><?php echo $prog['sub_title']; ?></div>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-full <?php echo $prog['bg_light']; ?> <?php echo $prog['text_color']; ?> text-xs font-extrabold border border-slate-200/60 shrink-0">
                    <?php echo $prog['badge']; ?>
                </span>
            </div>

            <!-- Program Body -->
            <div class="p-6 space-y-4 text-xs">
                <div>
                    <span class="font-bold text-slate-700 block mb-1">Mô tả tóm tắt:</span>
                    <p class="text-slate-600 bg-slate-50 p-3 rounded-xl border border-slate-100 leading-relaxed"><?php echo htmlspecialchars($prog['short_desc']); ?></p>
                </div>

                <div>
                    <span class="font-bold text-slate-700 block mb-1">Đối tượng phục vụ:</span>
                    <p class="text-slate-500 italic"><?php echo htmlspecialchars($prog['target_audience'] ?? 'Toàn hệ sinh thái'); ?></p>
                </div>

                <!-- Key metrics list -->
                <div>
                    <span class="font-bold text-slate-700 block mb-2">Chỉ số nổi bật (Key Metrics):</span>
                    <div class="grid grid-cols-3 gap-2">
                        <?php foreach ($prog['key_metrics'] ?? [] as $km): ?>
                            <div class="bg-blue-50/60 p-2.5 rounded-xl border border-blue-100/80 text-center">
                                <span class="text-sm font-black text-[#062AAD] block"><?php echo htmlspecialchars($km['number']); ?></span>
                                <span class="text-[10px] text-slate-500 block leading-tight mt-0.5"><?php echo htmlspecialchars($km['label']); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Program Footer Action -->
            <div class="p-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
                <a href="<?php echo $prog['slug']; ?>" target="_blank" class="text-xs font-bold text-slate-600 hover:text-[#062AAD] flex items-center gap-1">
                    <span>Xem trang con</span> <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                </a>

                <button 
                    onclick='openEditProgramModal(<?php echo json_encode($prog, JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP|JSON_UNESCAPED_UNICODE); ?>)'
                    class="px-4 py-2 rounded-xl bg-[#062AAD] hover:bg-[#05A6F5] text-white text-xs font-bold transition-all shadow-xs flex items-center gap-1.5"
                >
                    <i data-lucide="edit-3" class="w-3.5 h-3.5"></i>
                    <span>Chỉnh Sửa Chương Trình</span>
                </button>
            </div>

        </div>
    <?php endforeach; ?>
</div>

<!-- MODAL SỬA CHƯƠNG TRÌNH -->
<div id="progModal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-3xl shadow-2xl border border-slate-200 w-full max-w-2xl max-h-[90vh] overflow-y-auto custom-scrollbar p-6 sm:p-8 space-y-6">
        
        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
            <h3 id="modalProgTitle" class="text-base font-black text-[#02185D]">Chỉnh Sửa Chương Trình</h3>
            <button onclick="closeProgModal()" class="p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-50 rounded-xl">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <form action="programs.php" method="POST" class="space-y-4 text-xs">
            <input type="hidden" name="id" id="progId" value="">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Tên Tiếng Việt <span class="text-rose-500">*</span></label>
                    <input type="text" name="title" id="progTitleInput" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Tiêu Đề Phụ (English)</label>
                    <input type="text" name="sub_title" id="progSubTitle" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Thẻ Badge / Trọng Tâm</label>
                    <input type="text" name="badge" id="progBadge" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Đối Tượng Phục Vụ</label>
                    <input type="text" name="target_audience" id="progAudience" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Mô Tả Tóm Tắt (Hiển thị thẻ Card)</label>
                <textarea name="short_desc" id="progShortDesc" rows="2" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none"></textarea>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Chức Năng Chính</label>
                <textarea name="main_function" id="progMainFunction" rows="2" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none"></textarea>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Mô Tả Chi Tiết Đề Án</label>
                <textarea name="desc" id="progDesc" rows="3" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none"></textarea>
            </div>

            <!-- Key Metrics Form Fields -->
            <div class="pt-2">
                <label class="block font-bold text-slate-700 mb-2">Chỉ Số Trọng Tâm (03 Chỉ số)</label>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200 space-y-1.5">
                        <span class="text-[10px] font-bold text-slate-500">Chỉ số 1</span>
                        <input type="text" name="metric_num_0" id="m_num_0" placeholder="100%" class="w-full px-3 py-1.5 bg-white border border-slate-200 rounded-lg font-bold text-[#062AAD]">
                        <input type="text" name="metric_lbl_0" id="m_lbl_0" placeholder="Nhãn" class="w-full px-3 py-1.5 bg-white border border-slate-200 rounded-lg text-slate-600">
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200 space-y-1.5">
                        <span class="text-[10px] font-bold text-slate-500">Chỉ số 2</span>
                        <input type="text" name="metric_num_1" id="m_num_1" placeholder="4 Bước" class="w-full px-3 py-1.5 bg-white border border-slate-200 rounded-lg font-bold text-[#062AAD]">
                        <input type="text" name="metric_lbl_1" id="m_lbl_1" placeholder="Nhãn" class="w-full px-3 py-1.5 bg-white border border-slate-200 rounded-lg text-slate-600">
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200 space-y-1.5">
                        <span class="text-[10px] font-bold text-slate-500">Chỉ số 3</span>
                        <input type="text" name="metric_num_2" id="m_num_2" placeholder="Voucher" class="w-full px-3 py-1.5 bg-white border border-slate-200 rounded-lg font-bold text-[#062AAD]">
                        <input type="text" name="metric_lbl_2" id="m_lbl_2" placeholder="Nhãn" class="w-full px-3 py-1.5 bg-white border border-slate-200 rounded-lg text-slate-600">
                    </div>
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                <button type="button" onclick="closeProgModal()" class="px-4 py-2.5 rounded-xl border border-slate-200 font-bold text-slate-600 hover:bg-slate-50">Hủy</button>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#062AAD] hover:bg-[#05A6F5] text-white font-bold transition-all shadow-md">Lưu Cập Nhật</button>
            </div>
        </form>

    </div>
</div>

<script>
    const progModal = document.getElementById("progModal");

    function openEditProgramModal(prog) {
        document.getElementById("modalProgTitle").innerText = "Chỉnh Sửa Chương Trình: " + prog.title;
        document.getElementById("progId").value = prog.id;
        document.getElementById("progTitleInput").value = prog.title || "";
        document.getElementById("progSubTitle").value = prog.sub_title || "";
        document.getElementById("progBadge").value = prog.badge || "";
        document.getElementById("progAudience").value = prog.target_audience || "";
        document.getElementById("progShortDesc").value = prog.short_desc || "";
        document.getElementById("progMainFunction").value = prog.main_function || "";
        document.getElementById("progDesc").value = prog.desc || "";

        const km = prog.key_metrics || [];
        document.getElementById("m_num_0").value = km[0] ? km[0].number : "";
        document.getElementById("m_lbl_0").value = km[0] ? km[0].label : "";
        document.getElementById("m_num_1").value = km[1] ? km[1].number : "";
        document.getElementById("m_lbl_1").value = km[1] ? km[1].label : "";
        document.getElementById("m_num_2").value = km[2] ? km[2].number : "";
        document.getElementById("m_lbl_2").value = km[2] ? km[2].label : "";

        progModal.classList.remove("hidden");
    }

    function closeProgModal() {
        progModal.classList.add("hidden");
    }
</script>

<?php
admin_footer();
?>
