<?php
require_once 'includes/admin-layout.php';

$impact = get_impact_info();

// Xử lý lưu thông tin Impact
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $impact['hero_title'] = trim($_POST['hero_title'] ?? $impact['hero_title']);
    $impact['hero_subtitle'] = trim($_POST['hero_subtitle'] ?? $impact['hero_subtitle']);
    $impact['hero_desc'] = trim($_POST['hero_desc'] ?? $impact['hero_desc']);

    // Cập nhật 4 metrics
    $impact['metrics']['companies']['value'] = trim($_POST['metric_comp_val'] ?? '150+');
    $impact['metrics']['companies']['desc'] = trim($_POST['metric_comp_desc'] ?? '');

    $impact['metrics']['investment']['value'] = trim($_POST['metric_inv_val'] ?? '$5M+');
    $impact['metrics']['investment']['desc'] = trim($_POST['metric_inv_desc'] ?? '');

    $impact['metrics']['projects']['value'] = trim($_POST['metric_proj_val'] ?? '45+');
    $impact['metrics']['projects']['desc'] = trim($_POST['metric_proj_desc'] ?? '');

    $impact['metrics']['outreach']['value'] = trim($_POST['metric_out_val'] ?? '12K+');
    $impact['metrics']['outreach']['desc'] = trim($_POST['metric_out_desc'] ?? '');

    // Cập nhật PII
    $impact['pii_index']['score'] = trim($_POST['pii_score'] ?? 'Top 3');
    $impact['pii_index']['desc'] = trim($_POST['pii_desc'] ?? '');

    save_impact_info($impact);
    $_SESSION['flash_success'] = 'Đã lưu cấu hình tác động Impact thành công!';
    header("Location: admin-impact.php");
    exit;
}

$metrics = $impact['metrics'] ?? [];

admin_header("Quản Lý Impact", "impact");
?>

<!-- TOP ACTION HEADER -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-xl font-black text-[#02185D]">Quản Lý Trang CiNEC Impact</h2>
        <p class="text-xs text-slate-500">Tùy chỉnh các chỉ số tác động kinh tế xã hội, chỉ số PII và kết quả ươm tạo doanh nghiệp</p>
    </div>
    
    <div class="flex items-center gap-3">
        <a href="impact.php" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-white border border-slate-200 text-slate-700 text-xs font-bold hover:bg-slate-50 transition-all shadow-xs">
            <i data-lucide="external-link" class="w-4 h-4 text-[#05A6F5]"></i>
            <span>Xem Trang Impact</span>
        </a>
    </div>
</div>

<form action="admin-impact.php" method="POST" class="space-y-8">

    <!-- 1. TIÊU ĐỀ & THUYẾT MINH IMPACT HERO -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-xs space-y-6">
        <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
            <div class="w-10 h-10 rounded-xl bg-lime-50 text-lime-700 flex items-center justify-center font-bold">
                <i data-lucide="sparkles" class="w-5 h-5"></i>
            </div>
            <div>
                <h3 class="text-base font-black text-[#02185D]">1. Tiêu Đề & Thuyết Minh Banner Impact</h3>
                <p class="text-xs text-slate-400">Hiển thị ở phần đầu trang Impact</p>
            </div>
        </div>

        <div class="space-y-4 text-xs">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700">Tiêu Đề Chính</label>
                    <input type="text" name="hero_title" value="<?php echo htmlspecialchars($impact['hero_title'] ?? 'CiNEC Impact'); ?>" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
                <div class="space-y-1.5">
                    <label class="block font-bold text-slate-700">Tiêu Đề Phụ</label>
                    <input type="text" name="hero_subtitle" value="<?php echo htmlspecialchars($impact['hero_subtitle'] ?? 'Tác Động Hệ Sinh Thái Đổi Mới Sáng Tạo'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none">
                </div>
            </div>

            <div class="space-y-1.5">
                <label class="block font-bold text-slate-700">Đoạn Thuyết Minh Cam Kết Tác Động</label>
                <textarea name="hero_desc" rows="3" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white focus:border-[#05A6F5] outline-none leading-relaxed"><?php echo htmlspecialchars($impact['hero_desc'] ?? ''); ?></textarea>
            </div>
        </div>
    </div>

    <!-- 2. BỐN CHỈ SỐ TÁC ĐỘNG NỔI BẬT -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-xs space-y-6">
        <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#062AAD] flex items-center justify-center font-bold">
                <i data-lucide="bar-chart-3" class="w-5 h-5"></i>
            </div>
            <div>
                <h3 class="text-base font-black text-[#02185D]">2. Bốn Chỉ Số Tác Động Cốt Lõi (Core Impact Metrics)</h3>
                <p class="text-xs text-slate-400">Hiển thị trong 4 thẻ chỉ số lớn trên trang Impact</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-xs">
            <!-- Metric 1 -->
            <div class="bg-blue-50/50 p-4 rounded-2xl border border-blue-100 space-y-2">
                <label class="block font-black text-[#062AAD]">1. Doanh Nghiệp Hỗ Trợ</label>
                <input type="text" name="metric_comp_val" value="<?php echo htmlspecialchars($metrics['companies']['value'] ?? '150+'); ?>" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl font-black text-base text-[#062AAD] outline-none">
                <textarea name="metric_comp_desc" rows="2" placeholder="Mô tả..." class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-[11px] text-slate-600 outline-none"><?php echo htmlspecialchars($metrics['companies']['desc'] ?? ''); ?></textarea>
            </div>

            <!-- Metric 2 -->
            <div class="bg-emerald-50/50 p-4 rounded-2xl border border-emerald-100 space-y-2">
                <label class="block font-black text-emerald-800">2. Tổng Vốn Kết Nối</label>
                <input type="text" name="metric_inv_val" value="<?php echo htmlspecialchars($metrics['investment']['value'] ?? '$5M+'); ?>" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl font-black text-base text-emerald-700 outline-none">
                <textarea name="metric_inv_desc" rows="2" placeholder="Mô tả..." class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-[11px] text-slate-600 outline-none"><?php echo htmlspecialchars($metrics['investment']['desc'] ?? ''); ?></textarea>
            </div>

            <!-- Metric 3 -->
            <div class="bg-amber-50/50 p-4 rounded-2xl border border-amber-100 space-y-2">
                <label class="block font-black text-amber-800">3. Dự Án Ươm Tạo Thành Công</label>
                <input type="text" name="metric_proj_val" value="<?php echo htmlspecialchars($metrics['projects']['value'] ?? '45+'); ?>" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl font-black text-base text-amber-700 outline-none">
                <textarea name="metric_proj_desc" rows="2" placeholder="Mô tả..." class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-[11px] text-slate-600 outline-none"><?php echo htmlspecialchars($metrics['projects']['desc'] ?? ''); ?></textarea>
            </div>

            <!-- Metric 4 -->
            <div class="bg-purple-50/50 p-4 rounded-2xl border border-purple-100 space-y-2">
                <label class="block font-black text-purple-800">4. Sinh Viên & Thanh Niên</label>
                <input type="text" name="metric_out_val" value="<?php echo htmlspecialchars($metrics['outreach']['value'] ?? '12K+'); ?>" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl font-black text-base text-purple-700 outline-none">
                <textarea name="metric_out_desc" rows="2" placeholder="Mô tả..." class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-[11px] text-slate-600 outline-none"><?php echo htmlspecialchars($metrics['outreach']['desc'] ?? ''); ?></textarea>
            </div>
        </div>
    </div>

    <!-- 3. CHỈ SỐ PII ĐỔI MỚI SÁNG TẠO CẤP TỈNH -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-xs space-y-6">
        <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
            <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-700 flex items-center justify-center font-bold">
                <i data-lucide="award" class="w-5 h-5"></i>
            </div>
            <div>
                <h3 class="text-base font-black text-[#02185D]">3. Mục Tiêu Chỉ Số PII Đổi Mới Sáng Tạo Cấp Tỉnh</h3>
                <p class="text-xs text-slate-400">Bộ chỉ số PII (Provincial Innovation Index) tỉnh Cà Mau</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
            <div class="space-y-1.5">
                <label class="block font-bold text-slate-700">Mục Tiêu Xếp Hạng</label>
                <input type="text" name="pii_score" value="<?php echo htmlspecialchars($impact['pii_index']['score'] ?? 'Top 3'); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-black text-[#062AAD] focus:bg-white outline-none">
            </div>
            <div class="sm:col-span-2 space-y-1.5">
                <label class="block font-bold text-slate-700">Mô Tả Định Hướng Cải Thiện PII</label>
                <input type="text" name="pii_desc" value="<?php echo htmlspecialchars($impact['pii_index']['desc'] ?? ''); ?>" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl font-medium focus:bg-white outline-none">
            </div>
        </div>
    </div>

    <!-- SUBMIT BUTTON -->
    <div class="flex items-center justify-end">
        <button type="submit" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-2xl bg-[#062AAD] hover:bg-[#05A6F5] text-white text-xs font-bold transition-all shadow-md hover:-translate-y-0.5">
            <i data-lucide="save" class="w-4 h-4"></i>
            <span>Lưu Thay Đổi Impact</span>
        </button>
    </div>

</form>

<?php
admin_footer();
?>
