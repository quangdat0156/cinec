<?php
require_once __DIR__ . '/../includes/admin-layout.php';

$programs = get_programs();
$events = get_events(4);
$news = get_news(4);
$contacts = get_contacts();
$settings = get_settings();

// Tính toán các chỉ số phễu & thống kê
$totalContacts = count($contacts);
$newContacts = count(array_filter($contacts, fn($c) => ($c['status'] ?? '') === 'new'));
$processingContacts = count(array_filter($contacts, fn($c) => ($c['status'] ?? '') === 'processing'));
$completedContacts = count(array_filter($contacts, fn($c) => ($c['status'] ?? '') === 'completed'));
$responseRate = $totalContacts > 0 ? round((($processingContacts + $completedContacts) / $totalContacts) * 100) : 100;

admin_header("Bảng Điều Khiển & Thống Kê Gợi Ý Quản Trị", "dashboard");
?>

<!-- Chart.js Library cho biểu đồ trực quan -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="space-y-8">

    <!-- WELCOME BANNER & THÔNG BÁO NHANH -->
    <div class="bg-gradient-to-r from-[#02185D] via-[#062AAD] to-[#05A6F5] text-white rounded-3xl p-6 sm:p-8 shadow-premium relative overflow-hidden flex flex-col lg:flex-row lg:items-center justify-between gap-6">
        <!-- Ambient Glow -->
        <div class="absolute -top-24 -left-24 w-72 h-72 bg-[#05A6F5]/30 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-72 h-72 bg-[#C1FF72]/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 space-y-2.5 max-w-2xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/15 backdrop-blur-md text-[#C1FF72] text-[11px] font-bold">
                <span class="w-2 h-2 rounded-full bg-[#C1FF72] animate-pulse"></span>
                Trung tâm Điều hành Hệ sinh thái ĐMST Cà Mau
            </div>
            <h2 class="text-2xl sm:text-3xl font-black tracking-tight">
                Xin chào, <?php echo htmlspecialchars($_SESSION['cinec_admin_user'] ?? 'Administrator'); ?> 👋
            </h2>
            <p class="text-xs sm:text-sm text-slate-200 font-light leading-relaxed">
                Hệ thống đang theo dõi <strong>04 Chương trình Đổi mới sáng tạo</strong>, <strong><?php echo count(get_events()); ?> Sự kiện</strong> và <strong><?php echo $newContacts; ?> Yêu cầu tư vấn mới</strong> cần tiếp nhận xử lý trong ngày.
            </p>
        </div>

        <div class="relative z-10 flex flex-wrap items-center gap-3 shrink-0">
            <a href="contacts.php" class="px-4 py-2.5 rounded-2xl bg-white text-[#062AAD] text-xs font-bold hover:bg-slate-100 transition-all shadow-sm flex items-center gap-2 hover:-translate-y-0.5">
                <i data-lucide="inbox" class="w-4 h-4 text-[#062AAD]"></i>
                <span>Đơn mới (<?php echo $newContacts; ?>)</span>
            </a>
            <a href="events.php" class="px-4 py-2.5 rounded-2xl bg-white/15 hover:bg-white/25 text-white text-xs font-bold transition-all border border-white/20 flex items-center gap-2 hover:-translate-y-0.5">
                <i data-lucide="plus-circle" class="w-4 h-4 text-[#C1FF72]"></i>
                <span>Thêm Sự Kiện</span>
            </a>
            <a href="../index.php" target="_blank" class="px-3.5 py-2.5 rounded-2xl bg-white/10 hover:bg-white/20 text-white text-xs font-bold transition-colors border border-white/15" title="Mở trang chủ">
                <i data-lucide="external-link" class="w-4 h-4"></i>
            </a>
        </div>
    </div>

    <!-- 1. KPI THỐNG KÊ TỔNG THỂ (04 THẺ CHỈ SỐ NHANH) -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
        <a href="programs.php" class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-xs flex items-center gap-4 hover:shadow-md hover:-translate-y-0.5 transition-all group">
            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#062AAD] group-hover:bg-[#062AAD] group-hover:text-white flex items-center justify-center shrink-0 border border-blue-100 transition-colors">
                <i data-lucide="layers" class="w-6 h-6"></i>
            </div>
            <div>
                <div class="flex items-center gap-1.5">
                    <span class="text-2xl font-black text-[#02185D] block leading-none">04</span>
                    <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-1.5 py-0.5 rounded-md">100% Active</span>
                </div>
                <span class="text-xs text-slate-500 font-bold block mt-1">Chương trình ĐMST</span>
            </div>
        </a>

        <a href="events.php" class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-xs flex items-center gap-4 hover:shadow-md hover:-translate-y-0.5 transition-all group">
            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white flex items-center justify-center shrink-0 border border-emerald-100 transition-colors">
                <i data-lucide="calendar" class="w-6 h-6"></i>
            </div>
            <div>
                <div class="flex items-center gap-1.5">
                    <span class="text-2xl font-black text-[#02185D] block leading-none"><?php echo count(get_events()); ?></span>
                    <span class="text-[10px] font-bold text-blue-600 bg-blue-50 px-1.5 py-0.5 rounded-md">+2 Sắp tới</span>
                </div>
                <span class="text-xs text-slate-500 font-bold block mt-1">Sự kiện & Hội thảo</span>
            </div>
        </a>

        <a href="contacts.php" class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-xs flex items-center gap-4 hover:shadow-md hover:-translate-y-0.5 transition-all group">
            <div class="w-12 h-12 rounded-2xl bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white flex items-center justify-center shrink-0 border border-rose-100 transition-colors">
                <i data-lucide="mail" class="w-6 h-6"></i>
            </div>
            <div>
                <div class="flex items-center gap-1.5">
                    <span class="text-2xl font-black text-[#02185D] block leading-none"><?php echo $totalContacts; ?></span>
                    <span class="text-[10px] font-bold text-rose-600 bg-rose-50 px-1.5 py-0.5 rounded-md"><?php echo $newContacts; ?> Đơn mới</span>
                </div>
                <span class="text-xs text-slate-500 font-bold block mt-1">Đơn Đăng Ký & Tư Vấn</span>
            </div>
        </a>

        <a href="partners.php" class="bg-white rounded-3xl p-5 border border-slate-200/80 shadow-xs flex items-center gap-4 hover:shadow-md hover:-translate-y-0.5 transition-all group">
            <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-600 group-hover:bg-purple-600 group-hover:text-white flex items-center justify-center shrink-0 border border-purple-100 transition-colors">
                <i data-lucide="globe" class="w-6 h-6"></i>
            </div>
            <div>
                <div class="flex items-center gap-1.5">
                    <span class="text-2xl font-black text-[#02185D] block leading-none"><?php echo count(get_partners()); ?></span>
                    <span class="text-[10px] font-bold text-purple-600 bg-purple-50 px-1.5 py-0.5 rounded-md">5 Phân nhóm</span>
                </div>
                <span class="text-xs text-slate-500 font-bold block mt-1">Đối tác đồng hành</span>
            </div>
        </a>
    </div>

    <!-- 2. KHỐI GỢI Ý HÀNH ĐỘNG THÔNG MINH (ACTIONABLE RECOMMENDATIONS) -->
    <div class="bg-gradient-to-br from-white to-blue-50/40 rounded-3xl p-6 sm:p-8 border border-blue-100 shadow-xs space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-b border-blue-100/60 pb-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-2xl bg-gradient-to-tr from-[#062AAD] to-[#05A6F5] text-white flex items-center justify-center font-black shadow-sm">
                    <i data-lucide="sparkles" class="w-5 h-5 text-[#C1FF72]"></i>
                </div>
                <div>
                    <h3 class="text-base font-black text-[#02185D]">Gợi Ý Hành Động & Tối Ưu Quản Trị Hệ Sinh Thái</h3>
                    <p class="text-xs text-slate-500">Các nhiệm vụ ưu tiên và đề xuất chiến lược hỗ trợ điều hành</p>
                </div>
            </div>
            <span class="px-3 py-1 rounded-full bg-blue-100 text-[#062AAD] text-xs font-black self-start sm:self-auto">
                03 Nhiệm vụ trọng tâm
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Gợi ý 1: Xử lý đơn đăng ký mới -->
            <div class="bg-white p-5 rounded-2xl border border-rose-100 shadow-xs hover:shadow-md transition-all flex flex-col justify-between space-y-3">
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded-full bg-rose-50 text-rose-700 text-[10px] font-black uppercase tracking-wider">
                            🔴 Cần xử lý gấp
                        </span>
                        <span class="text-[11px] text-slate-400 font-medium">Hạn 24h</span>
                    </div>
                    <h4 class="text-xs font-extrabold text-[#02185D]">Phản hồi <?php echo $newContacts; ?> đơn tư vấn mới</h4>
                    <p class="text-[11px] text-slate-500 leading-relaxed">
                        Có đơn từ HTX Nuôi tôm và Startup EcoStraw đang chờ phân bổ chuyên gia cố vấn kỹ thuật và voucher chuyển đổi số.
                    </p>
                </div>
                <a href="contacts.php" class="inline-flex items-center justify-center gap-1.5 px-3 py-2 rounded-xl bg-rose-50 hover:bg-rose-100 text-rose-700 font-bold text-xs transition-colors">
                    <span>Xử lý ngay trong Hộp thư</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>

            <!-- Gợi ý 2: Mở rộng kết nối Quỹ đầu tư -->
            <div class="bg-white p-5 rounded-2xl border border-amber-100 shadow-xs hover:shadow-md transition-all flex flex-col justify-between space-y-3">
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded-full bg-amber-50 text-amber-700 text-[10px] font-black uppercase tracking-wider">
                            🟡 Chiến lược vốn mồi
                        </span>
                        <span class="text-[11px] text-slate-400 font-medium">Hành trình 4 bước</span>
                    </div>
                    <h4 class="text-xs font-extrabold text-[#02185D]">Kết nối Quỹ cho 3 Startup giai đoạn Lab</h4>
                    <p class="text-[11px] text-slate-500 leading-relaxed">
                        Chuẩn bị phiên Pitching kết nối Quỹ đầu tư VinaCapital và Do Ventures cho các dự án thủy sản công nghệ cao Cà Mau.
                    </p>
                </div>
                <a href="partners.php?category=fund" class="inline-flex items-center justify-center gap-1.5 px-3 py-2 rounded-xl bg-amber-50 hover:bg-amber-100 text-amber-700 font-bold text-xs transition-colors">
                    <span>Xem mạng lưới Quỹ đầu tư</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>

            <!-- Gợi ý 3: Đẩy mạnh truyền thông chỉ số PII & Techfest -->
            <div class="bg-white p-5 rounded-2xl border border-emerald-100 shadow-xs hover:shadow-md transition-all flex flex-col justify-between space-y-3">
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 text-[10px] font-black uppercase tracking-wider">
                            🟢 Đề án & Truyền thông
                        </span>
                        <span class="text-[11px] text-slate-400 font-medium">Chỉ số PII</span>
                    </div>
                    <h4 class="text-xs font-extrabold text-[#02185D]">Công bố Bài viết Insight & Techfest</h4>
                    <p class="text-[11px] text-slate-500 leading-relaxed">
                        Cập nhật bài viết về khung chính sách Sandbox thử nghiệm và kết quả cải thiện bộ chỉ số ĐMST (PII) tỉnh Cà Mau 2026.
                    </p>
                </div>
                <a href="news.php" class="inline-flex items-center justify-center gap-1.5 px-3 py-2 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-700 font-bold text-xs transition-colors">
                    <span>Đăng bài viết mới</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- 3. BIỂU ĐỒ PHÂN TÍCH CHUYÊN SÂU (CHARTS & ANALYTICS) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- BIỂU ĐỒ 1: PHỄU ƯƠM TẠO KHỞI NGHIỆP 4 BƯỚC (7/12 CỘT) -->
        <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/80 shadow-xs space-y-5">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div>
                    <h3 class="text-sm font-black text-[#02185D] uppercase tracking-wider">Phễu Ươm Tạo Khởi Nghiệp Liên Thông 04 Bước</h3>
                    <p class="text-xs text-slate-400">Tiến độ chuyển dịch dự án từ Săn nguồn đến Mở rộng thị trường & Gọi vốn</p>
                </div>
                <span class="px-2.5 py-1 rounded-full bg-blue-50 text-[#062AAD] text-[11px] font-extrabold">Đề án CiNEC</span>
            </div>

            <!-- Phễu chuyển đổi 4 bước (Horizontal Pipeline Funnel) -->
            <div class="space-y-3.5 text-xs">
                <!-- Bước 1 -->
                <div class="space-y-1">
                    <div class="flex justify-between font-bold text-slate-700">
                        <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-blue-500"></span> Bước 1: Săn nguồn cuộc thi & Tiền ươm tạo</span>
                        <span class="text-[#062AAD]">120 Dự án (100%)</span>
                    </div>
                    <div class="w-full h-3.5 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-[#062AAD] to-blue-500 rounded-full" style="width: 100%;"></div>
                    </div>
                </div>

                <!-- Bước 2 -->
                <div class="space-y-1">
                    <div class="flex justify-between font-bold text-slate-700">
                        <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-amber-500"></span> Bước 2: Ươm tạo kỹ thuật 6-12 tháng (Lab)</span>
                        <span class="text-amber-600">45 Dự án (37.5%)</span>
                    </div>
                    <div class="w-full h-3.5 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-amber-500 to-amber-400 rounded-full" style="width: 37.5%;"></div>
                    </div>
                </div>

                <!-- Bước 3 -->
                <div class="space-y-1">
                    <div class="flex justify-between font-bold text-slate-700">
                        <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Bước 3: Tăng tốc 3-6 tháng (Đồng tài trợ 1:1)</span>
                        <span class="text-emerald-600">18 Doanh nghiệp (15%)</span>
                    </div>
                    <div class="w-full h-3.5 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-emerald-600 to-teal-400 rounded-full" style="width: 15%;"></div>
                    </div>
                </div>

                <!-- Bước 4 -->
                <div class="space-y-1">
                    <div class="flex justify-between font-bold text-slate-700">
                        <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-purple-500"></span> Bước 4: Mở rộng thị trường & Gọi vốn Quỹ</span>
                        <span class="text-purple-600">8 Doanh nghiệp bứt phá (6.7%)</span>
                    </div>
                    <div class="w-full h-3.5 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-purple-600 to-pink-500 rounded-full" style="width: 6.7%;"></div>
                    </div>
                </div>
            </div>

            <div class="p-3 rounded-2xl bg-blue-50/70 border border-blue-100 flex items-center justify-between text-[11px] text-slate-600">
                <span>Tỷ lệ hoàn tất ươm tạo xuất sắc: <strong class="text-[#062AAD]">85.2%</strong></span>
                <span>Vốn đối ứng 1:1 đã giải ngân: <strong class="text-[#062AAD]">3.5 Tỷ VNĐ</strong></span>
            </div>
        </div>

        <!-- BIỂU ĐỒ 2: TỶ LỆ PHÂN BỔ NHU CẦU 04 CHƯƠNG TRÌNH (5/12 CỘT) -->
        <div class="lg:col-span-5 bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/80 shadow-xs space-y-4 flex flex-col justify-between">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div>
                    <h3 class="text-sm font-black text-[#02185D] uppercase tracking-wider">Phân Bổ Nhu Cầu ĐMST</h3>
                    <p class="text-xs text-slate-400">Quan tâm của doanh nghiệp & ứng viên</p>
                </div>
            </div>

            <div class="relative h-48 flex items-center justify-center">
                <canvas id="programPieChart"></canvas>
            </div>

            <div class="grid grid-cols-2 gap-2 text-[11px] pt-2 border-t border-slate-100">
                <div class="flex items-center gap-2 text-slate-600"><span class="w-2.5 h-2.5 rounded-full bg-blue-600"></span> Nền tảng (20%)</div>
                <div class="flex items-center gap-2 text-slate-600"><span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span> Khởi nghiệp (35%)</div>
                <div class="flex items-center gap-2 text-slate-600"><span class="w-2.5 h-2.5 rounded-full bg-emerald-600"></span> Doanh nghiệp số (30%)</div>
                <div class="flex items-center gap-2 text-slate-600"><span class="w-2.5 h-2.5 rounded-full bg-purple-600"></span> Nhân tài số (15%)</div>
            </div>
        </div>

    </div>

    <!-- 4. GỢI Ý CHỨC NĂNG PHÙ HỢP CẦN NÂNG CẤP TRONG TƯƠNG LAI (FEATURE ROADMAP) -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-xs space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-b border-slate-100 pb-4">
            <div>
                <h3 class="text-base font-black text-[#02185D]">Đề Xuất Các Chức Năng Nâng Cao Phù Hợp Cho Trang Quản Trị</h3>
                <p class="text-xs text-slate-500">Gợi ý lộ trình tính năng (Feature Roadmap) tối ưu cho Trung tâm ĐMST CiNEC</p>
            </div>
            <span class="px-3 py-1 rounded-full bg-purple-50 text-purple-700 text-xs font-black self-start sm:self-auto">
                Gợi ý nâng cấp
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Chức năng 1: Startup CRM -->
            <div class="p-5 rounded-2xl border border-slate-200 hover:border-[#05A6F5] hover:shadow-md transition-all space-y-3 bg-white">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#062AAD] flex items-center justify-center font-bold">
                    <i data-lucide="user-check" class="w-5 h-5"></i>
                </div>
                <div class="space-y-1">
                    <h4 class="text-xs font-black text-[#02185D]">1. Startup CRM & Theo Dõi Tiến Độ Ươm Tạo</h4>
                    <p class="text-[11px] text-slate-500 leading-relaxed">
                        Hồ sơ kỹ thuật số cho từng Startup: nhật ký tư vấn 1:1, đánh giá cột mốc KPI 90 ngày và biên bản nghiệm thu giải ngân vốn mồi.
                    </p>
                </div>
                <span class="inline-block text-[10px] font-bold text-blue-600 bg-blue-50 px-2 py-0.5 rounded">Rất khuyến nghị</span>
            </div>

            <!-- Chức năng 2: QR Check-in Sự kiện -->
            <div class="p-5 rounded-2xl border border-slate-200 hover:border-emerald-400 hover:shadow-md transition-all space-y-3 bg-white">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold">
                    <i data-lucide="qr-code" class="w-5 h-5"></i>
                </div>
                <div class="space-y-1">
                    <h4 class="text-xs font-black text-[#02185D]">2. Vé Điện Tử & Check-in Sự Kiện Bằng QR</h4>
                    <p class="text-[11px] text-slate-500 leading-relaxed">
                        Tự động gửi email vé tham dự kèm mã QR khi đăng ký sự kiện; App quét mã check-in nhanh tại cửa hội trường hội thảo CiNEC.
                    </p>
                </div>
                <span class="inline-block text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded">Tăng tính chuyên nghiệp</span>
            </div>

            <!-- Chức năng 3: Xuất báo cáo PDF/Excel -->
            <div class="p-5 rounded-2xl border border-slate-200 hover:border-amber-400 hover:shadow-md transition-all space-y-3 bg-white">
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold">
                    <i data-lucide="file-spreadsheet" class="w-5 h-5"></i>
                </div>
                <div class="space-y-1">
                    <h4 class="text-xs font-black text-[#02185D]">3. Xuất Báo Cáo Đề Án Cấp Tỉnh (PII Report)</h4>
                    <p class="text-[11px] text-slate-500 leading-relaxed">
                        Tự động tổng hợp số liệu 04 chương trình thành tệp báo cáo PDF/Excel định kỳ gửi UBND tỉnh Cà Mau và Sở Khoa học & Công nghệ.
                    </p>
                </div>
                <span class="inline-block text-[10px] font-bold text-amber-600 bg-amber-50 px-2 py-0.5 rounded">Tiết kiệm thời gian</span>
            </div>

            <!-- Chức năng 4: Mentor Matching Matrix -->
            <div class="p-5 rounded-2xl border border-slate-200 hover:border-purple-400 hover:shadow-md transition-all space-y-3 bg-white">
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold">
                    <i data-lucide="git-merge" class="w-5 h-5"></i>
                </div>
                <div class="space-y-1">
                    <h4 class="text-xs font-black text-[#02185D]">4. Ma Trận Ghép Đôi Cố Vấn (Mentor Matching)</h4>
                    <p class="text-[11px] text-slate-500 leading-relaxed">
                        Thuật toán gợi ý ghép nối chuyên gia/mentor phù hợp với lĩnh vực của startup (AI thủy sản, Nông nghiệp bồn bồn, TMĐT OCOP).
                    </p>
                </div>
                <span class="inline-block text-[10px] font-bold text-purple-600 bg-purple-50 px-2 py-0.5 rounded">Tối ưu nguồn lực</span>
            </div>

            <!-- Chức năng 5: Email Automation -->
            <div class="p-5 rounded-2xl border border-slate-200 hover:border-indigo-400 hover:shadow-md transition-all space-y-3 bg-white">
                <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold">
                    <i data-lucide="send" class="w-5 h-5"></i>
                </div>
                <div class="space-y-1">
                    <h4 class="text-xs font-black text-[#02185D]">5. Email Tự Động & Bản Tin ĐMST</h4>
                    <p class="text-[11px] text-slate-500 leading-relaxed">
                        Gửi email xác nhận đăng ký tự động và bản tin thông báo học bổng, hội thảo Techfest đến toàn bộ mạng lưới doanh nghiệp.
                    </p>
                </div>
                <span class="inline-block text-[10px] font-bold text-indigo-600 bg-indigo-50 px-2 py-0.5 rounded">Chăm sóc tự động</span>
            </div>

            <!-- Chức năng 6: Backup & Log bảo mật -->
            <div class="p-5 rounded-2xl border border-slate-200 hover:border-slate-400 hover:shadow-md transition-all space-y-3 bg-white">
                <div class="w-10 h-10 rounded-xl bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                    <i data-lucide="database-backup" class="w-5 h-5"></i>
                </div>
                <div class="space-y-1">
                    <h4 class="text-xs font-black text-[#02185D]">6. Sao Lưu Dữ Liệu & Nhật Ký Truy Cập</h4>
                    <p class="text-[11px] text-slate-500 leading-relaxed">
                        Tải về bản sao lưu SQL MySQL hosting 1-click và ghi nhận nhật ký chỉnh sửa thông tin của các tài khoản quản trị viên.
                    </p>
                </div>
                <span class="inline-block text-[10px] font-bold text-slate-600 bg-slate-100 px-2 py-0.5 rounded">An toàn dữ liệu</span>
            </div>
        </div>
    </div>

    <!-- 5. DANH SÁCH SỰ KIỆN GẦN NHẤT & ĐƠN ĐĂNG KÝ MỚI -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Left: Recent Events (6/12) -->
        <div class="lg:col-span-6 bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                <div class="flex items-center gap-2">
                    <i data-lucide="calendar" class="w-4 h-4 text-[#062AAD]"></i>
                    <h3 class="text-xs font-black text-[#02185D] uppercase tracking-wider">Sự Kiện & Lịch Hoạt Động Gần Nhất</h3>
                </div>
                <a href="events.php" class="text-xs font-bold text-[#05A6F5] hover:text-[#062AAD]">Quản lý</a>
            </div>
            <div class="space-y-3">
                <?php foreach ($events as $ev): ?>
                    <div class="p-3 rounded-2xl border border-slate-100 hover:bg-slate-50 flex items-center justify-between gap-3 transition-colors">
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#062AAD] flex flex-col justify-center items-center shrink-0 font-extrabold border border-blue-100">
                                <span class="text-xs leading-none"><?php echo $ev['date_day']; ?></span>
                                <span class="text-[8px] uppercase text-slate-400 mt-0.5"><?php echo $ev['date_month']; ?></span>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-bold text-slate-800 truncate"><?php echo htmlspecialchars($ev['title']); ?></h4>
                                <p class="text-[10px] text-slate-400 mt-0.5 truncate"><?php echo htmlspecialchars($ev['location']); ?></p>
                            </div>
                        </div>
                        <span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-600 text-[10px] font-bold shrink-0">
                            <?php echo htmlspecialchars($ev['status_text'] ?? 'Mở'); ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Right: Recent Inquiries (6/12) -->
        <div class="lg:col-span-6 bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                <div class="flex items-center gap-2">
                    <i data-lucide="mail" class="w-4 h-4 text-[#062AAD]"></i>
                    <h3 class="text-xs font-black text-[#02185D] uppercase tracking-wider">Đơn Đăng Ký Mới Cần Xử Lý</h3>
                </div>
                <a href="contacts.php" class="text-xs font-bold text-[#05A6F5] hover:text-[#062AAD]">Xem tất cả</a>
            </div>
            <div class="space-y-3">
                <?php foreach (array_slice($contacts, 0, 3) as $c): ?>
                    <div class="p-3 rounded-2xl border border-slate-100 hover:bg-slate-50 flex items-center justify-between gap-3 transition-colors">
                        <div class="min-w-0 space-y-0.5">
                            <div class="text-xs font-bold text-slate-800"><?php echo htmlspecialchars($c['fullname']); ?> - <span class="text-slate-400 font-normal"><?php echo htmlspecialchars($c['phone']); ?></span></div>
                            <p class="text-[11px] text-slate-500 truncate"><?php echo htmlspecialchars($c['program_interest'] ?? 'Tư vấn'); ?>: <?php echo htmlspecialchars($c['message']); ?></p>
                        </div>
                        <span class="px-2 py-0.5 rounded-full text-[10px] font-bold shrink-0 <?php echo ($c['status'] ?? '') === 'new' ? 'bg-rose-50 text-rose-600' : 'bg-emerald-50 text-emerald-600'; ?>">
                            <?php echo ($c['status'] ?? '') === 'new' ? 'Mới' : 'Đã xử lý'; ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

</div>

<!-- SCRIPT KHỞI TẠO BIỂU ĐỒ PIE CHART -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById('programPieChart');
        if (ctx) {
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Nền tảng ĐMST', 'Hành trình Khởi nghiệp', 'Doanh nghiệp số', 'Nhân tài số'],
                    datasets: [{
                        data: [20, 35, 30, 15],
                        backgroundColor: [
                            '#2563eb', // Blue
                            '#f59e0b', // Amber
                            '#059669', // Emerald
                            '#7c3aed'  // Purple
                        ],
                        borderWidth: 2,
                        borderColor: '#ffffff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    cutout: '70%'
                }
            });
        }
    });
</script>

<?php
admin_footer();
?>
