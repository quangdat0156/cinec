<?php
require_once __DIR__ . '/../includes/admin-layout.php';

// Xử lý hành động POST (Thêm / Sửa / Xóa)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'create' || $action === 'update') {
        $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;
        $title = trim($_POST['title'] ?? '');
        $status = $_POST['status'] ?? 'upcoming';
        $status_text = $status === 'ongoing' ? 'Đang diễn ra' : ($status === 'completed' ? 'Đã diễn ra' : 'Sắp diễn ra');
        $date_day = trim($_POST['date_day'] ?? '01');
        $date_month = trim($_POST['date_month'] ?? 'Th01');
        $date_full = trim($_POST['date_full'] ?? ($date_day . ' ' . $date_month . ', 2026'));
        $time = trim($_POST['time'] ?? '08:00 - 17:00');
        $location = trim($_POST['location'] ?? '');
        $desc = trim($_POST['desc'] ?? '');
        $content = $_POST['content'] ?? '';

        // Xử lý tải ảnh trực tiếp từ máy tính & tối ưu hóa WebP
        $image = trim($_POST['image_url'] ?? '../assets/img/event_forum.jpg');
        if (!empty($_FILES['image_file']['tmp_name'])) {
            $uploadedPath = upload_and_optimize_image($_FILES['image_file'], 'events', 1400, 82);
            if ($uploadedPath) {
                $image = $uploadedPath;
            }
        }

        if (!empty($title)) {
            $data = [
                'id' => $id,
                'title' => $title,
                'status' => $status,
                'status_text' => $status_text,
                'date_day' => $date_day,
                'date_month' => $date_month,
                'date_full' => $date_full,
                'time' => $time,
                'location' => $location,
                'desc' => $desc,
                'content' => $content,
                'image' => $image,
            ];
            save_event($data);
            $_SESSION['flash_success'] = $id ? 'Cập nhật sự kiện và tối ưu ảnh WebP thành công!' : 'Thêm sự kiện mới và tối ưu ảnh WebP thành công!';
        } else {
            $_SESSION['flash_error'] = 'Tiêu đề sự kiện không được để trống!';
        }
    } elseif ($action === 'delete') {
        $id = (int)($_POST['id'] ?? 0);
        if ($id > 0) {
            delete_event($id);
            $_SESSION['flash_success'] = 'Đã xóa sự kiện thành công!';
        }
    }

    header("Location: events.php");
    exit;
}

// Lấy danh sách sự kiện theo bộ lọc
$filterStatus = $_GET['status'] ?? '';
$events = get_events(null, $filterStatus ?: null);

admin_header("Quản Lý Sự Kiện & Hội Thảo", "events");
?>

<!-- Quill.js Rich Text Editor CSS -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
<!-- Quill.js Rich Text Editor JS -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

<style>
    .ql-toolbar.ql-snow {
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
        border-color: #e2e8f0;
        background-color: #f8fafc;
    }
    .ql-container.ql-snow {
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
        border-color: #e2e8f0;
        font-family: 'Plus Jakarta Sans', 'Be Vietnam Pro', sans-serif;
        font-size: 0.875rem;
        min-height: 250px;
        background-color: #ffffff;
    }
    .ql-editor {
        min-height: 250px;
    }
</style>

<!-- TOP ACTION HEADER -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-xl font-black text-[#02185D]">Danh Sách Sự Kiện & Hội Thảo</h2>
        <p class="text-xs text-slate-500">Tải ảnh sự kiện trực tiếp từ máy tính (Nén WebP tự động) & Soạn thảo lịch trình chi tiết</p>
    </div>
    
    <div class="flex items-center gap-3">
        <button onclick="openCreateModal()" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-2xl bg-[#062AAD] hover:bg-[#05A6F5] text-white text-xs font-bold transition-all shadow-md hover:-translate-y-0.5">
            <i data-lucide="plus-circle" class="w-4 h-4"></i>
            <span>Soạn Sự Kiện Mới</span>
        </button>
    </div>
</div>

<!-- FILTER BAR -->
<div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-xs flex flex-wrap items-center justify-between gap-4">
    <div class="flex items-center gap-2 text-xs font-bold text-slate-600">
        <span class="text-slate-400">Trạng thái:</span>
        <a href="events.php" class="px-3 py-1.5 rounded-xl <?php echo empty($filterStatus) ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Tất cả</a>
        <a href="events.php?status=upcoming" class="px-3 py-1.5 rounded-xl <?php echo $filterStatus === 'upcoming' ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Sắp diễn ra</a>
        <a href="events.php?status=ongoing" class="px-3 py-1.5 rounded-xl <?php echo $filterStatus === 'ongoing' ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Đang diễn ra</a>
        <a href="events.php?status=completed" class="px-3 py-1.5 rounded-xl <?php echo $filterStatus === 'completed' ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Đã kết thúc</a>
    </div>

    <div class="text-xs text-slate-400">
        Tổng cộng: <strong class="text-slate-700"><?php echo count($events); ?></strong> sự kiện
    </div>
</div>

<!-- EVENTS TABLE -->
<div class="bg-white rounded-3xl border border-slate-200/80 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-[#02185D] font-extrabold uppercase text-[11px]">
                    <th class="py-3.5 px-4 w-14 text-center">ID</th>
                    <th class="py-3.5 px-4 w-28">Thời Gian</th>
                    <th class="py-3.5 px-4">Tên Sự Kiện & Địa Điểm</th>
                    <th class="py-3.5 px-4 w-32 text-center">Trạng Thái</th>
                    <th class="py-3.5 px-4 w-32 text-right">Thao Tác</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 font-medium text-slate-700">
                <?php if (empty($events)): ?>
                    <tr>
                        <td colspan="5" class="py-8 text-center text-slate-400">Chưa có sự kiện nào. Hãy thêm sự kiện đầu tiên!</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($events as $ev): ?>
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-4 px-4 text-center font-bold text-slate-400"><?php echo $ev['id']; ?></td>
                            <td class="py-4 px-4">
                                <div class="w-14 h-14 rounded-2xl bg-blue-50 text-[#062AAD] flex flex-col justify-center items-center font-black border border-blue-100">
                                    <span class="text-sm leading-none"><?php echo htmlspecialchars($ev['date_day']); ?></span>
                                    <span class="text-[9px] uppercase mt-0.5 text-slate-400"><?php echo htmlspecialchars($ev['date_month']); ?></span>
                                </div>
                            </td>
                            <td class="py-4 px-4 space-y-1">
                                <div class="font-extrabold text-sm text-[#02185D]"><?php echo htmlspecialchars($ev['title']); ?></div>
                                <div class="flex items-center gap-3 text-slate-400 text-[11px]">
                                    <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#05A6F5]"></i> <?php echo htmlspecialchars($ev['time']); ?></span>
                                    <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#05A6F5]"></i> <?php echo htmlspecialchars($ev['location']); ?></span>
                                </div>
                                <div class="text-[11px] text-slate-500 line-clamp-1"><?php echo htmlspecialchars($ev['desc']); ?></div>
                            </td>
                            <td class="py-4 px-4 text-center">
                                <?php if (($ev['status'] ?? '') === 'ongoing'): ?>
                                    <span class="px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-600 text-[10px] font-extrabold border border-emerald-200">Đang diễn ra</span>
                                <?php elseif (($ev['status'] ?? '') === 'completed'): ?>
                                    <span class="px-2.5 py-1 rounded-full bg-slate-100 text-slate-500 text-[10px] font-extrabold border border-slate-200">Đã kết thúc</span>
                                <?php else: ?>
                                    <span class="px-2.5 py-1 rounded-full bg-blue-50 text-[#062AAD] text-[10px] font-extrabold border border-blue-200">Sắp diễn ra</span>
                                <?php endif; ?>
                            </td>
                            <td class="py-4 px-4 text-right">
                                <div class="flex items-center justify-end gap-1.5">
                                    <button 
                                        onclick='openEditModal(<?php echo json_encode($ev, JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP|JSON_UNESCAPED_UNICODE); ?>)'
                                        class="p-2 rounded-xl text-slate-600 hover:text-[#062AAD] hover:bg-blue-50 transition-colors"
                                        title="Chỉnh sửa sự kiện"
                                    >
                                        <i data-lucide="edit-3" class="w-4 h-4"></i>
                                    </button>
                                    <button 
                                        onclick="confirmDelete(<?php echo $ev['id']; ?>, '<?php echo htmlspecialchars(addslashes($ev['title'])); ?>')"
                                        class="p-2 rounded-xl text-slate-600 hover:text-rose-600 hover:bg-rose-50 transition-colors"
                                        title="Xóa sự kiện"
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

<!-- MODAL TRÌNH SOẠN THẢO SỰ KIỆN (RICH TEXT EDITOR + UPLOAD ẢNH WEBP) -->
<div id="eventModal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-3 sm:p-6 hidden">
    <div class="bg-white rounded-3xl shadow-2xl border border-slate-200 w-full max-w-4xl max-h-[92vh] flex flex-col overflow-hidden">
        
        <!-- Modal Header -->
        <div class="p-6 border-b border-slate-100 flex items-center justify-between shrink-0 bg-slate-50/50">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-blue-50 text-[#062AAD] flex items-center justify-center font-bold">
                    <i data-lucide="calendar-plus" class="w-5 h-5"></i>
                </div>
                <div>
                    <h3 id="modalTitle" class="text-base font-black text-[#02185D]">Soạn Thảo Sự Kiện</h3>
                    <p class="text-[11px] text-slate-400">Trình soạn thảo chi tiết chương trình nghị sự & Tải ảnh tối ưu WebP tự động</p>
                </div>
            </div>
            <button onclick="closeModal()" class="p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-100 rounded-xl">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <!-- Modal Body (Form) -->
        <form id="eventForm" action="events.php" method="POST" enctype="multipart/form-data" onsubmit="handleEventFormSubmit()" class="flex-1 overflow-y-auto custom-scrollbar p-6 space-y-5 text-xs">
            <input type="hidden" name="action" id="formAction" value="create">
            <input type="hidden" name="id" id="eventId" value="">
            <input type="hidden" name="content" id="hiddenEventContent" value="">
            <input type="hidden" name="image_url" id="eventImageUrl" value="">

            <div>
                <label class="block font-bold text-slate-700 mb-1">Tên Sự Kiện / Hội Thảo <span class="text-rose-500">*</span></label>
                <input type="text" name="title" id="eventTitle" required placeholder="Nhập tên sự kiện nổi bật..." class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-bold text-slate-800 text-sm focus:bg-white focus:border-[#05A6F5] outline-none">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Ngày (số)</label>
                    <input type="text" name="date_day" id="eventDateDay" placeholder="15" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Tháng (Th07, Th08...)</label>
                    <input type="text" name="date_month" id="eventDateMonth" placeholder="Th07" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Khung Giờ</label>
                    <input type="text" name="time" id="eventTime" placeholder="08:00 - 17:00" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Trạng Thái</label>
                    <select name="status" id="eventStatus" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                        <option value="upcoming">Sắp diễn ra</option>
                        <option value="ongoing">Đang diễn ra</option>
                        <option value="completed">Đã diễn ra</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Địa Điểm Tổ Chức</label>
                <input type="text" name="location" id="eventLocation" placeholder="Hội trường Lớn, Tòa nhà CiNEC, TP. Cà Mau" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
            </div>

            <!-- KHỐI TẢI ẢNH BÌA SỰ KIỆN TRỰC TIẾP & PREVIEW -->
            <div class="space-y-2">
                <div class="flex items-center justify-between">
                    <label class="block font-bold text-slate-700">Ảnh Bìa Sự Kiện (Tải từ máy tính - Hỗ trợ mọi định dạng)</label>
                    <span class="text-[10px] text-emerald-600 font-bold flex items-center gap-1">
                        <i data-lucide="zap" class="w-3 h-3"></i> Tự động chuyển đổi & nén WebP
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center">
                    <!-- Dropzone upload file -->
                    <div class="sm:col-span-8">
                        <label for="eventFileInput" class="flex flex-col items-center justify-center border-2 border-dashed border-slate-300 hover:border-[#05A6F5] bg-slate-50 hover:bg-blue-50/50 rounded-2xl p-4 cursor-pointer transition-all text-center group">
                            <i data-lucide="upload-cloud" class="w-7 h-7 text-slate-400 group-hover:text-[#05A6F5] mb-1.5 transition-colors"></i>
                            <span class="font-bold text-slate-700 group-hover:text-[#062AAD]">Chọn tệp ảnh từ máy tính hoặc kéo thả vào đây</span>
                            <span class="text-[11px] text-slate-400 mt-0.5">Tự động nén chất lượng cao giúp trang tải nhanh</span>
                            <input type="file" id="eventFileInput" name="image_file" accept="image/*" class="hidden" onchange="previewEventImage(this)">
                        </label>
                    </div>

                    <!-- Image Preview Box -->
                    <div class="sm:col-span-4 flex items-center gap-3 bg-slate-50 p-2.5 rounded-2xl border border-slate-200">
                        <div class="w-20 h-16 rounded-xl overflow-hidden bg-slate-200 border border-slate-300 shrink-0">
                            <img id="eventImagePreview" src="../assets/img/event_forum.jpg" alt="Preview" class="w-full h-full object-cover">
                        </div>
                        <div class="min-w-0">
                            <span class="text-[10px] text-slate-400 block">Xem trước ảnh bìa</span>
                            <span id="eventFileName" class="text-[11px] font-bold text-slate-700 truncate block">Ảnh hiện tại</span>
                            <button type="button" onclick="resetEventImagePreview()" class="text-[10px] text-rose-500 hover:underline mt-0.5 font-bold">Đặt lại</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Mô Tả Tóm Tắt (Short Summary)</label>
                <textarea name="desc" id="eventDesc" rows="2" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none" placeholder="Tóm tắt ngắn gọn 1-2 câu về mục tiêu sự kiện..."></textarea>
            </div>

            <!-- TRÌNH SOẠN THẢO QUILL.JS CHO NỘI DUNG SỰ KIỆN -->
            <div class="space-y-1.5">
                <div class="flex items-center justify-between">
                    <label class="block font-bold text-slate-700">Chương Trình Nghị Sự & Nội Dung Chi Tiết (WYSIWYG Editor)</label>
                    <span class="text-[10px] text-slate-400">Lịch trình chi tiết, danh sách diễn giả, link đăng ký tài liệu</span>
                </div>
                <div id="event-editor-container"></div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                <button type="button" onclick="closeModal()" class="px-5 py-2.5 rounded-xl border border-slate-200 font-bold text-slate-600 hover:bg-slate-50">Hủy</button>
                <button type="submit" class="px-7 py-2.5 rounded-xl bg-[#062AAD] hover:bg-[#05A6F5] text-white font-bold transition-all shadow-md flex items-center gap-2">
                    <i data-lucide="save" class="w-4 h-4"></i>
                    <span>Lưu Sự Kiện</span>
                </button>
            </div>
        </form>

    </div>
</div>

<!-- FORM XÓA ẨN -->
<form id="deleteForm" action="events.php" method="POST" class="hidden">
    <input type="hidden" name="action" value="delete">
    <input type="hidden" name="id" id="deleteId" value="">
</form>

<script>
    const modal = document.getElementById("eventModal");
    const eventImagePreview = document.getElementById("eventImagePreview");
    const eventFileName = document.getElementById("eventFileName");
    const eventFileInput = document.getElementById("eventFileInput");
    const eventImageUrl = document.getElementById("eventImageUrl");
    let eventQuill;

    document.addEventListener("DOMContentLoaded", function() {
        // Khởi tạo Quill Editor cho sự kiện
        eventQuill = new Quill('#event-editor-container', {
            theme: 'snow',
            placeholder: 'Nhập nội dung chương trình nghị sự, diễn giả và lịch trình sự kiện chi tiết...',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, 3, 4, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    ['blockquote', 'code-block'],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'align': [] }],
                    ['link', 'image', 'video'],
                    ['clean']
                ]
            }
        });
    });

    function previewEventImage(input) {
        if (input.files && input.files[0]) {
            const file = input.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                eventImagePreview.src = e.target.result;
                eventFileName.innerText = file.name + " (" + Math.round(file.size / 1024) + " KB)";
            };
            reader.readAsDataURL(file);
        }
    }

    function resetEventImagePreview() {
        eventFileInput.value = "";
        eventImagePreview.src = eventImageUrl.value || "../assets/img/event_forum.jpg";
        eventFileName.innerText = eventImageUrl.value ? "Ảnh hiện tại" : "Chưa chọn tệp";
    }

    function openCreateModal() {
        document.getElementById("modalTitle").innerText = "Soạn Thảo Sự Kiện Mới";
        document.getElementById("formAction").value = "create";
        document.getElementById("eventId").value = "";
        document.getElementById("eventTitle").value = "";
        document.getElementById("eventDateDay").value = "15";
        document.getElementById("eventDateMonth").value = "Th08";
        document.getElementById("eventStatus").value = "upcoming";
        document.getElementById("eventTime").value = "08:00 - 17:00";
        document.getElementById("eventLocation").value = "Hội trường Lớn, Tòa nhà CiNEC, TP. Cà Mau";
        document.getElementById("eventDesc").value = "";
        document.getElementById("eventImageUrl").value = "../assets/img/event_forum.jpg";
        eventFileInput.value = "";
        eventImagePreview.src = "../assets/img/event_forum.jpg";
        eventFileName.innerText = "Ảnh mặc định";
        if (eventQuill) {
            eventQuill.root.innerHTML = "<h3>Chương trình nghị sự</h3><ul><li>08:00 - 08:30: Đón tiếp đại biểu</li><li>08:30 - 10:00: Phiên thảo luận chuyên đề</li><li>10:00 - 11:30: Tọa đàm & Kết nối đầu tư</li></ul>";
        }
        modal.classList.remove("hidden");
    }

    function openEditModal(ev) {
        document.getElementById("modalTitle").innerText = "Chỉnh Sửa Sự Kiện #" + ev.id;
        document.getElementById("formAction").value = "update";
        document.getElementById("eventId").value = ev.id;
        document.getElementById("eventTitle").value = ev.title || "";
        document.getElementById("eventDateDay").value = ev.date_day || "";
        document.getElementById("eventDateMonth").value = ev.date_month || "";
        document.getElementById("eventStatus").value = ev.status || "upcoming";
        document.getElementById("eventTime").value = ev.time || "";
        document.getElementById("eventLocation").value = ev.location || "";
        document.getElementById("eventDesc").value = ev.desc || "";
        document.getElementById("eventImageUrl").value = ev.image || "../assets/img/event_forum.jpg";
        eventFileInput.value = "";
        eventImagePreview.src = ev.image || "../assets/img/event_forum.jpg";
        eventFileName.innerText = "Ảnh hiện tại";
        
        if (eventQuill) {
            eventQuill.root.innerHTML = ev.content || ("<p>" + (ev.desc || "Nội dung sự kiện...") + "</p>");
        }
        modal.classList.remove("hidden");
    }

    function closeModal() {
        modal.classList.add("hidden");
    }

    function handleEventFormSubmit() {
        if (eventQuill) {
            document.getElementById("hiddenEventContent").value = eventQuill.root.innerHTML;
        }
    }

    function confirmDelete(id, title) {
        if (confirm("Bạn có chắc chắn muốn xóa sự kiện: \"" + title + "\" không?")) {
            document.getElementById("deleteId").value = id;
            document.getElementById("deleteForm").submit();
        }
    }
</script>

<?php
admin_footer();
?>
