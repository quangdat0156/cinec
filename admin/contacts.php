<?php
require_once __DIR__ . '/../includes/admin-layout.php';

// Xử lý đổi trạng thái hoặc xóa đơn
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $id = (int)($_POST['id'] ?? 0);

    if ($action === 'update_status' && $id > 0) {
        $status = $_POST['status'] ?? 'new';
        update_contact_status($id, $status);
        $_SESSION['flash_success'] = 'Cập nhật trạng thái xử lý thành công!';
    } elseif ($action === 'delete' && $id > 0) {
        delete_contact($id);
        $_SESSION['flash_success'] = 'Đã xóa đơn đăng ký thành công!';
    }

    header("Location: contacts.php");
    exit;
}

$contacts = get_contacts();

admin_header("Hộp Thư Đăng Ký & Tư Vấn", "contacts");
?>

<!-- TOP ACTION HEADER -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-xl font-black text-[#02185D]">Danh Sách Đơn Đăng Ký & Liên Hệ</h2>
        <p class="text-xs text-slate-500">Tiếp nhận và quản lý thông tin đăng ký tham gia 04 chương trình ĐMST từ khách hàng</p>
    </div>
    
    <div class="text-xs text-slate-500 font-bold bg-white px-4 py-2 rounded-2xl border border-slate-200 shadow-2xs">
        Tổng số: <span class="text-[#062AAD]"><?php echo count($contacts); ?> đơn</span>
    </div>
</div>

<!-- CONTACTS LIST TABLE -->
<div class="bg-white rounded-3xl border border-slate-200/80 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-[#02185D] font-extrabold uppercase text-[11px]">
                    <th class="py-3.5 px-4 w-14 text-center">ID</th>
                    <th class="py-3.5 px-4 w-48">Người Gửi / Đơn Vị</th>
                    <th class="py-3.5 px-4 w-44">Liên Hệ</th>
                    <th class="py-3.5 px-4">Chương Trình & Nội Dung</th>
                    <th class="py-3.5 px-4 w-36 text-center">Trạng Thái</th>
                    <th class="py-3.5 px-4 w-28 text-right">Thao Tác</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 font-medium text-slate-700">
                <?php if (empty($contacts)): ?>
                    <tr>
                        <td colspan="6" class="py-8 text-center text-slate-400">Chưa có đơn đăng ký hoặc liên hệ nào.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($contacts as $c): ?>
                        <tr class="hover:bg-slate-50/70 transition-colors">
                            <td class="py-4 px-4 text-center font-bold text-slate-400"><?php echo $c['id']; ?></td>
                            <td class="py-4 px-4 space-y-0.5">
                                <div class="font-bold text-sm text-[#02185D]"><?php echo htmlspecialchars($c['fullname']); ?></div>
                                <div class="text-[11px] text-slate-500 font-normal"><?php echo htmlspecialchars($c['organization'] ?: 'Cá nhân'); ?></div>
                                <div class="text-[10px] text-slate-400"><?php echo htmlspecialchars($c['created_at'] ?? ''); ?></div>
                            </td>
                            <td class="py-4 px-4 space-y-1 text-[11px]">
                                <div class="flex items-center gap-1.5 text-slate-700 font-bold">
                                    <i data-lucide="phone" class="w-3 h-3 text-[#05A6F5]"></i>
                                    <a href="tel:<?php echo htmlspecialchars($c['phone']); ?>" class="hover:underline"><?php echo htmlspecialchars($c['phone']); ?></a>
                                </div>
                                <div class="flex items-center gap-1.5 text-slate-500">
                                    <i data-lucide="mail" class="w-3 h-3 text-slate-400"></i>
                                    <a href="mailto:<?php echo htmlspecialchars($c['email']); ?>" class="hover:underline truncate max-w-[140px]"><?php echo htmlspecialchars($c['email']); ?></a>
                                </div>
                            </td>
                            <td class="py-4 px-4 space-y-1">
                                <?php if (strpos($c['program_interest'] ?? '', 'Đặt lịch hẹn Mentor') !== false): ?>
                                    <span class="inline-block px-2.5 py-0.5 rounded-full bg-purple-50 text-purple-700 text-[10px] font-black border border-purple-200">
                                        <i data-lucide="calendar-check" class="w-3 h-3 inline mr-1"></i>
                                        <?php echo htmlspecialchars($c['program_interest']); ?>
                                    </span>
                                <?php else: ?>
                                    <span class="inline-block px-2.5 py-0.5 rounded-full bg-blue-50 text-[#062AAD] text-[10px] font-extrabold border border-blue-200">
                                        <?php echo htmlspecialchars($c['program_interest'] ?? 'Tư vấn chung'); ?>
                                    </span>
                                <?php endif; ?>
                                <p class="text-[11px] text-slate-700 bg-slate-50 p-2.5 rounded-xl border border-slate-200/70 leading-relaxed whitespace-pre-line font-medium"><?php echo htmlspecialchars($c['message']); ?></p>
                            </td>
                            <td class="py-4 px-4 text-center">
                                <form action="contacts.php" method="POST">
                                    <input type="hidden" name="action" value="update_status">
                                    <input type="hidden" name="id" value="<?php echo $c['id']; ?>">
                                    <select name="status" onchange="this.form.submit()" class="px-2.5 py-1 rounded-xl text-[11px] font-bold border outline-none cursor-pointer transition-colors <?php 
                                        echo ($c['status'] ?? '') === 'new' ? 'bg-rose-50 text-rose-700 border-rose-200' : 
                                            (($c['status'] ?? '') === 'processing' ? 'bg-amber-50 text-amber-700 border-amber-200' : 'bg-emerald-50 text-emerald-700 border-emerald-200'); 
                                    ?>">
                                        <option value="new" <?php echo ($c['status'] ?? '') === 'new' ? 'selected' : ''; ?>>🔴 Mới tiếp nhận</option>
                                        <option value="processing" <?php echo ($c['status'] ?? '') === 'processing' ? 'selected' : ''; ?>>🟡 Đang tư vấn</option>
                                        <option value="completed" <?php echo ($c['status'] ?? '') === 'completed' ? 'selected' : ''; ?>>🟢 Đã hoàn tất</option>
                                    </select>
                                </form>
                            </td>
                            <td class="py-4 px-4 text-right">
                                <button 
                                    onclick="confirmDeleteContact(<?php echo $c['id']; ?>, '<?php echo htmlspecialchars(addslashes($c['fullname'])); ?>')"
                                    class="p-2 rounded-xl text-slate-400 hover:text-rose-600 hover:bg-rose-50 transition-colors"
                                    title="Xóa đơn"
                                >
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- FORM XÓA ẨN -->
<form id="deleteContactForm" action="contacts.php" method="POST" class="hidden">
    <input type="hidden" name="action" value="delete">
    <input type="hidden" name="id" id="deleteContactId" value="">
</form>

<script>
    function confirmDeleteContact(id, name) {
        if (confirm("Bạn có chắc chắn muốn xóa đơn của \"" + name + "\" không?")) {
            document.getElementById("deleteContactId").value = id;
            document.getElementById("deleteContactForm").submit();
        }
    }
</script>

<?php
admin_footer();
?>
