<?php
require_once __DIR__ . '/../includes/admin-layout.php';

// Xử lý hành động POST (Thêm / Sửa / Xóa)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'create' || $action === 'update') {
        $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;
        $title = trim($_POST['title'] ?? '');
        $category = $_POST['category'] ?? 'startup';
        $categoriesMap = [
            'startup' => 'Khởi nghiệp',
            'policy' => 'Chính sách',
            'technology' => 'Công nghệ',
            'investment' => 'Đầu tư'
        ];
        $category_name = $categoriesMap[$category] ?? 'Tin tức';
        $date = trim($_POST['date'] ?? date('d/m/Y'));
        $author = trim($_POST['author'] ?? 'Ban Biên Tập CINEC');
        $summary = trim($_POST['summary'] ?? '');
        $content = $_POST['content'] ?? '';
        $featured = isset($_POST['featured']);

        // Xử lý upload ảnh trực tiếp từ máy tính & tối ưu hóa WebP
        $image = trim($_POST['image_url'] ?? '../assets/img/news_launch.jpg');
        if (!empty($_FILES['image_file']['tmp_name'])) {
            $uploadedPath = upload_and_optimize_image($_FILES['image_file'], 'news', 1400, 82);
            if ($uploadedPath) {
                $image = $uploadedPath;
            }
        }

        if (!empty($title)) {
            $data = [
                'id' => $id,
                'title' => $title,
                'category' => $category,
                'category_name' => $category_name,
                'date' => $date,
                'author' => $author,
                'summary' => $summary,
                'content' => $content,
                'image' => $image,
                'featured' => $featured,
            ];
            save_news($data);
            $_SESSION['flash_success'] = $id ? 'Cập nhật bài viết và tối ưu ảnh WebP thành công!' : 'Đăng bài viết mới và tối ưu ảnh WebP thành công!';
        } else {
            $_SESSION['flash_error'] = 'Tiêu đề bài viết không được để trống!';
        }
    } elseif ($action === 'delete') {
        $id = (int)($_POST['id'] ?? 0);
        if ($id > 0) {
            delete_news($id);
            $_SESSION['flash_success'] = 'Đã xóa bài viết thành công!';
        }
    }

    header("Location: news.php");
    exit;
}

$filterCategory = $_GET['category'] ?? '';
$newsList = get_news();
if ($filterCategory) {
    $newsList = array_values(array_filter($newsList, fn($n) => ($n['category'] ?? '') === $filterCategory));
}

admin_header("Quản Lý Tin Tức & Insight", "news");
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
        min-height: 280px;
        background-color: #ffffff;
    }
    .ql-editor {
        min-height: 280px;
    }
</style>

<!-- TOP ACTION HEADER -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-xl font-black text-[#02185D]">Danh Sách Tin Tức & Bài Viết Insight</h2>
        <p class="text-xs text-slate-500">Tải ảnh trực tiếp từ máy tính (Tự động nén WebP siêu nhẹ) & Soạn thảo bài viết WYSIWYG</p>
    </div>
    
    <div class="flex items-center gap-3">
        <button onclick="openCreateModal()" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-2xl bg-[#062AAD] hover:bg-[#05A6F5] text-white text-xs font-bold transition-all shadow-md hover:-translate-y-0.5">
            <i data-lucide="plus-circle" class="w-4 h-4"></i>
            <span>Soạn Bài Viết Mới</span>
        </button>
    </div>
</div>

<!-- FILTER BAR -->
<div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-xs flex flex-wrap items-center justify-between gap-4">
    <div class="flex items-center gap-2 text-xs font-bold text-slate-600">
        <span class="text-slate-400">Chuyên mục:</span>
        <a href="news.php" class="px-3 py-1.5 rounded-xl <?php echo empty($filterCategory) ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Tất cả</a>
        <a href="news.php?category=startup" class="px-3 py-1.5 rounded-xl <?php echo $filterCategory === 'startup' ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Khởi nghiệp</a>
        <a href="news.php?category=policy" class="px-3 py-1.5 rounded-xl <?php echo $filterCategory === 'policy' ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Chính sách</a>
        <a href="news.php?category=technology" class="px-3 py-1.5 rounded-xl <?php echo $filterCategory === 'technology' ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Công nghệ</a>
        <a href="news.php?category=investment" class="px-3 py-1.5 rounded-xl <?php echo $filterCategory === 'investment' ? 'bg-[#062AAD] text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'; ?>">Đầu tư</a>
    </div>

    <div class="text-xs text-slate-400">
        Tổng cộng: <strong class="text-slate-700"><?php echo count($newsList); ?></strong> bài viết
    </div>
</div>

<!-- NEWS TABLE -->
<div class="bg-white rounded-3xl border border-slate-200/80 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-[#02185D] font-extrabold uppercase text-[11px]">
                    <th class="py-3.5 px-4 w-14 text-center">ID</th>
                    <th class="py-3.5 px-4 w-28">Hình Ảnh</th>
                    <th class="py-3.5 px-4">Tiêu Đề & Tóm Tắt</th>
                    <th class="py-3.5 px-4 w-32 text-center">Chuyên Mục</th>
                    <th class="py-3.5 px-4 w-28 text-center">Nổi Bật</th>
                    <th class="py-3.5 px-4 w-28 text-right">Thao Tác</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 font-medium text-slate-700">
                <?php if (empty($newsList)): ?>
                    <tr>
                        <td colspan="6" class="py-8 text-center text-slate-400">Chưa có bài viết nào. Hãy thêm bài viết đầu tiên!</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($newsList as $n): ?>
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-4 px-4 text-center font-bold text-slate-400"><?php echo $n['id']; ?></td>
                            <td class="py-4 px-4">
                                <div class="w-20 h-14 rounded-xl overflow-hidden bg-slate-100 border border-slate-200 shrink-0">
                                    <img src="<?php echo htmlspecialchars($n['image'] ?: '../assets/img/news_launch.jpg'); ?>" alt="Cover" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="py-4 px-4 space-y-1">
                                <div class="font-extrabold text-sm text-[#02185D]"><?php echo htmlspecialchars($n['title']); ?></div>
                                <div class="flex items-center gap-3 text-slate-400 text-[11px]">
                                    <span><i data-lucide="calendar" class="w-3 h-3 text-[#05A6F5] inline mr-1"></i><?php echo htmlspecialchars($n['date']); ?></span>
                                    <span><i data-lucide="user" class="w-3 h-3 text-[#05A6F5] inline mr-1"></i><?php echo htmlspecialchars($n['author'] ?: 'CiNEC'); ?></span>
                                </div>
                                <p class="text-[11px] text-slate-500 line-clamp-1"><?php echo htmlspecialchars($n['summary']); ?></p>
                            </td>
                            <td class="py-4 px-4 text-center">
                                <span class="px-2.5 py-1 rounded-full bg-blue-50 text-[#062AAD] text-[10px] font-extrabold border border-blue-200">
                                    <?php echo htmlspecialchars($n['category_name'] ?: 'Tin tức'); ?>
                                </span>
                            </td>
                            <td class="py-4 px-4 text-center">
                                <?php if (!empty($n['featured'])): ?>
                                    <span class="px-2 py-0.5 rounded-full bg-amber-50 text-amber-600 text-[10px] font-extrabold border border-amber-200">★ Nổi bật</span>
                                <?php else: ?>
                                    <span class="text-slate-300 text-[11px]">-</span>
                                <?php endif; ?>
                            </td>
                            <td class="py-4 px-4 text-right">
                                <div class="flex items-center justify-end gap-1.5">
                                    <button 
                                        onclick='openEditModal(<?php echo json_encode($n, JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP|JSON_UNESCAPED_UNICODE); ?>)'
                                        class="p-2 rounded-xl text-slate-600 hover:text-[#062AAD] hover:bg-blue-50 transition-colors"
                                        title="Chỉnh sửa bài viết"
                                    >
                                        <i data-lucide="edit-3" class="w-4 h-4"></i>
                                    </button>
                                    <button 
                                        onclick="confirmDelete(<?php echo $n['id']; ?>, '<?php echo htmlspecialchars(addslashes($n['title'])); ?>')"
                                        class="p-2 rounded-xl text-slate-600 hover:text-rose-600 hover:bg-rose-50 transition-colors"
                                        title="Xóa bài viết"
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

<!-- MODAL TRÌNH SOẠN THẢO BÀI VIẾT (RICH TEXT EDITOR + UPLOAD ẢNH TỐI ƯU WEBP) -->
<div id="newsModal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-3 sm:p-6 hidden">
    <div class="bg-white rounded-3xl shadow-2xl border border-slate-200 w-full max-w-4xl max-h-[92vh] flex flex-col overflow-hidden">
        
        <!-- Modal Header -->
        <div class="p-6 border-b border-slate-100 flex items-center justify-between shrink-0 bg-slate-50/50">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-blue-50 text-[#062AAD] flex items-center justify-center font-bold">
                    <i data-lucide="file-edit" class="w-5 h-5"></i>
                </div>
                <div>
                    <h3 id="modalTitle" class="text-base font-black text-[#02185D]">Soạn Thảo Bài Viết</h3>
                    <p class="text-[11px] text-slate-400">Trình soạn thảo văn bản phong phú & Tải ảnh trực tiếp tối ưu WebP tự động</p>
                </div>
            </div>
            <button onclick="closeModal()" class="p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-100 rounded-xl">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <!-- Modal Body (Form) -->
        <form id="newsForm" action="news.php" method="POST" enctype="multipart/form-data" onsubmit="handleFormSubmit()" class="flex-1 overflow-y-auto custom-scrollbar p-6 space-y-5 text-xs">
            <input type="hidden" name="action" id="formAction" value="create">
            <input type="hidden" name="id" id="newsId" value="">
            <input type="hidden" name="content" id="hiddenContent" value="">
            <input type="hidden" name="image_url" id="newsImageUrl" value="">

            <div>
                <label class="block font-bold text-slate-700 mb-1">Tiêu Đề Bài Viết <span class="text-rose-500">*</span></label>
                <input type="text" name="title" id="newsTitle" required placeholder="Nhập tiêu đề bài viết rõ ràng, hấp dẫn..." class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-bold text-slate-800 text-sm focus:bg-white focus:border-[#05A6F5] outline-none">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Chuyên Mục</label>
                    <select name="category" id="newsCategory" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                        <option value="startup">Khởi nghiệp</option>
                        <option value="policy">Chính sách</option>
                        <option value="technology">Công nghệ</option>
                        <option value="investment">Đầu tư</option>
                    </select>
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Tác Giả / Nguồn</label>
                    <input type="text" name="author" id="newsAuthor" placeholder="Ban Biên Tập CINEC" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Ngày Đăng</label>
                    <input type="text" name="date" id="newsDate" placeholder="<?php echo date('d/m/Y'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
            </div>

            <!-- KHỐI TẢI ẢNH BÌA TRỰC TIẾP TỪ MÁY TÍNH & PREVIEW -->
            <div class="space-y-2">
                <div class="flex items-center justify-between">
                    <label class="block font-bold text-slate-700">Ảnh Bìa Bài Viết (Hỗ trợ JPG, PNG, WEBP, GIF, SVG, BMP, HEIC)</label>
                    <span class="text-[10px] text-emerald-600 font-bold flex items-center gap-1">
                        <i data-lucide="zap" class="w-3 h-3"></i> Tự động nén WebP siêu nhẹ khi tải lên
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center">
                    <!-- Dropzone upload file -->
                    <div class="sm:col-span-8">
                        <label for="imageFileInput" class="flex flex-col items-center justify-center border-2 border-dashed border-slate-300 hover:border-[#05A6F5] bg-slate-50 hover:bg-blue-50/50 rounded-2xl p-4 cursor-pointer transition-all text-center group">
                            <i data-lucide="upload-cloud" class="w-7 h-7 text-slate-400 group-hover:text-[#05A6F5] mb-1.5 transition-colors"></i>
                            <span class="font-bold text-slate-700 group-hover:text-[#062AAD]">Chọn tệp ảnh từ máy tính hoặc kéo thả vào đây</span>
                            <span class="text-[11px] text-slate-400 mt-0.5">Hỗ trợ đầy đủ định dạng ảnh. Kích thước tự động tối ưu</span>
                            <input type="file" id="imageFileInput" name="image_file" accept="image/*" class="hidden" onchange="previewSelectedImage(this)">
                        </label>
                    </div>

                    <!-- Image Preview Box -->
                    <div class="sm:col-span-4 flex items-center gap-3 bg-slate-50 p-2.5 rounded-2xl border border-slate-200">
                        <div class="w-20 h-16 rounded-xl overflow-hidden bg-slate-200 border border-slate-300 shrink-0">
                            <img id="imagePreview" src="../assets/img/news_launch.jpg" alt="Preview" class="w-full h-full object-cover">
                        </div>
                        <div class="min-w-0">
                            <span class="text-[10px] text-slate-400 block">Xem trước ảnh bìa</span>
                            <span id="imageFileName" class="text-[11px] font-bold text-slate-700 truncate block">Ảnh hiện tại</span>
                            <button type="button" onclick="resetImagePreview()" class="text-[10px] text-rose-500 hover:underline mt-0.5 font-bold">Đặt lại</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between pt-1">
                <label class="flex items-center gap-2 cursor-pointer select-none bg-amber-50 px-3.5 py-2 rounded-xl border border-amber-200">
                    <input type="checkbox" name="featured" id="newsFeatured" class="w-4 h-4 rounded border-amber-300 text-[#062AAD]">
                    <span class="font-bold text-amber-900 text-[11px]">★ Đánh dấu bài Nổi bật trên Trang Chủ & Tin Tức</span>
                </label>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Đoạn Tóm Tắt (Summary / Teaser)</label>
                <textarea name="summary" id="newsSummary" rows="2" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none" placeholder="Tóm tắt ngắn gọn 1-2 câu nội dung cốt lõi của bài viết..."></textarea>
            </div>

            <!-- TRÌNH SOẠN THẢO QUILL.JS (RICH TEXT EDITOR) -->
            <div class="space-y-1.5">
                <div class="flex items-center justify-between">
                    <label class="block font-bold text-slate-700">Nội Dung Chi Tiết Bài Viết (Trình soạn thảo WYSIWYG)</label>
                    <span class="text-[10px] text-slate-400">Hỗ trợ chèn ảnh, video, định dạng tiêu đề, danh sách</span>
                </div>
                <div id="editor-container"></div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                <button type="button" onclick="closeModal()" class="px-5 py-2.5 rounded-xl border border-slate-200 font-bold text-slate-600 hover:bg-slate-50">Hủy</button>
                <button type="submit" class="px-7 py-2.5 rounded-xl bg-[#062AAD] hover:bg-[#05A6F5] text-white font-bold transition-all shadow-md flex items-center gap-2">
                    <i data-lucide="send" class="w-4 h-4"></i>
                    <span>Lưu & Đăng Bài Viết</span>
                </button>
            </div>
        </form>

    </div>
</div>

<!-- FORM XÓA ẨN -->
<form id="deleteForm" action="news.php" method="POST" class="hidden">
    <input type="hidden" name="action" value="delete">
    <input type="hidden" name="id" id="deleteId" value="">
</form>

<script>
    const modal = document.getElementById("newsModal");
    const imagePreview = document.getElementById("imagePreview");
    const imageFileName = document.getElementById("imageFileName");
    const imageFileInput = document.getElementById("imageFileInput");
    const newsImageUrl = document.getElementById("newsImageUrl");
    let quill;

    document.addEventListener("DOMContentLoaded", function() {
        // Khởi tạo Quill Editor
        quill = new Quill('#editor-container', {
            theme: 'snow',
            placeholder: 'Bắt đầu viết nội dung chi tiết bài viết tại đây...',
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

    function previewSelectedImage(input) {
        if (input.files && input.files[0]) {
            const file = input.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imageFileName.innerText = file.name + " (" + Math.round(file.size / 1024) + " KB)";
            };
            reader.readAsDataURL(file);
        }
    }

    function resetImagePreview() {
        imageFileInput.value = "";
        imagePreview.src = newsImageUrl.value || "../assets/img/news_launch.jpg";
        imageFileName.innerText = newsImageUrl.value ? "Ảnh hiện tại" : "Chưa chọn tệp";
    }

    function openCreateModal() {
        document.getElementById("modalTitle").innerText = "Soạn Bài Viết Mới";
        document.getElementById("formAction").value = "create";
        document.getElementById("newsId").value = "";
        document.getElementById("newsTitle").value = "";
        document.getElementById("newsCategory").value = "startup";
        document.getElementById("newsDate").value = "<?php echo date('d/m/Y'); ?>";
        document.getElementById("newsAuthor").value = "Ban Biên Tập CINEC";
        document.getElementById("newsSummary").value = "";
        document.getElementById("newsImageUrl").value = "../assets/img/news_launch.jpg";
        imageFileInput.value = "";
        imagePreview.src = "../assets/img/news_launch.jpg";
        imageFileName.innerText = "Ảnh mặc định";
        document.getElementById("newsFeatured").checked = false;
        if (quill) {
            quill.root.innerHTML = "<p>Nội dung chi tiết bài viết đang được cập nhật...</p>";
        }
        modal.classList.remove("hidden");
    }

    function openEditModal(n) {
        document.getElementById("modalTitle").innerText = "Chỉnh Sửa Bài Viết #" + n.id;
        document.getElementById("formAction").value = "update";
        document.getElementById("newsId").value = n.id;
        document.getElementById("newsTitle").value = n.title || "";
        document.getElementById("newsCategory").value = n.category || "startup";
        document.getElementById("newsDate").value = n.date || "";
        document.getElementById("newsAuthor").value = n.author || "";
        document.getElementById("newsSummary").value = n.summary || "";
        document.getElementById("newsImageUrl").value = n.image || "../assets/img/news_launch.jpg";
        imageFileInput.value = "";
        imagePreview.src = n.image || "../assets/img/news_launch.jpg";
        imageFileName.innerText = "Ảnh hiện tại";
        document.getElementById("newsFeatured").checked = !!n.featured;
        
        if (quill) {
            quill.root.innerHTML = n.content || n.summary || "<p>Nội dung chi tiết...</p>";
        }
        modal.classList.remove("hidden");
    }

    function closeModal() {
        modal.classList.add("hidden");
    }

    function handleFormSubmit() {
        if (quill) {
            document.getElementById("hiddenContent").value = quill.root.innerHTML;
        }
    }

    function confirmDelete(id, title) {
        if (confirm("Bạn có chắc chắn muốn xóa bài viết: \"" + title + "\" không?")) {
            document.getElementById("deleteId").value = id;
            document.getElementById("deleteForm").submit();
        }
    }
</script>

<?php
admin_footer();
?>
