<?php
$page_title = "Các Chương Trình Thành Phần Đổi Mới Sáng Tạo Cà Mau";
require_once 'config/db.php';
require_once 'includes/header.php';

$programs_list = $mockPrograms;
?>

<!-- MAIN PROGRAMS HUB PAGE -->
<div class="bg-[#FAFCFF] min-h-screen pt-28 pb-16">
    <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20 space-y-12">

        <!-- BREADCRUMB & HERO HEADER -->
        <div class="space-y-4 text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-[#062AAD] font-extrabold text-body-xs uppercase tracking-wider">
                <i data-lucide="layers" class="w-4 h-4"></i>
                Hệ Thống Tích Hợp 04 Chương Trình Thành Phần
            </div>
            
            <h1 class="text-h3 md:text-h1 font-extrabold text-[#02185D] tracking-tight">
                Chương Trình Đổi Mới Sáng Tạo & Khởi Nghiệp Cà Mau
            </h1>
            
            <p class="text-body-xs md:text-body-sm text-slate-600 leading-relaxed font-normal">
                Hệ thống 04 chương trình thành phần vận hành như một hệ thống tích hợp thúc đẩy thể chế, khởi nghiệp, chuyển đổi số doanh nghiệp và phát triển nhân tài tỉnh Cà Mau.
            </p>

            <!-- STATS COUNTER BADGES -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-4 max-w-3xl mx-auto">
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-2xs text-center space-y-1">
                    <div class="text-h4 font-black text-[#062AAD]">Sandbox</div>
                    <div class="text-[10px] text-slate-400 font-bold uppercase">Khung thử nghiệm</div>
                </div>
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-2xs text-center space-y-1">
                    <div class="text-h4 font-black text-amber-600">4 Bước</div>
                    <div class="text-[10px] text-slate-400 font-bold uppercase">Hành trình Khởi nghiệp</div>
                </div>
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-2xs text-center space-y-1">
                    <div class="text-h4 font-black text-emerald-600">Voucher CĐS</div>
                    <div class="text-[10px] text-slate-400 font-bold uppercase">Doanh nghiệp số & OCOP</div>
                </div>
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-2xs text-center space-y-1">
                    <div class="text-h4 font-black text-purple-600">Học bổng</div>
                    <div class="text-[10px] text-slate-400 font-bold uppercase">Nhân tài số Cà Mau</div>
                </div>
            </div>
        </div>

        <!-- SUMMARY COMPARISON TABLE MATCHING DOCUMENT IMAGE -->
        <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm space-y-6 overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-h4 font-extrabold text-[#02185D]">Bảng Tổng Hợp 04 Chương Trình Thành Phần</h2>
                    <p class="text-body-xs text-slate-500">Cấu trúc tích hợp theo Đề án Đổi mới sáng tạo và Phát triển hệ sinh thái tỉnh Cà Mau</p>
                </div>
                <span class="hidden sm:inline-block px-3 py-1 bg-blue-50 text-[#062AAD] text-[11px] font-bold rounded-full">
                    Hệ thống đồng bộ
                </span>
            </div>

            <!-- Table Responsive -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-body-xs">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200 text-[#02185D] font-extrabold uppercase text-[11px]">
                            <th class="py-3.5 px-4 w-12 text-center">STT</th>
                            <th class="py-3.5 px-4 w-56">Tên chương trình</th>
                            <th class="py-3.5 px-4 min-w-[320px]">Nội dung chủ yếu</th>
                            <th class="py-3.5 px-4 min-w-[240px]">Đối tượng thụ hưởng</th>
                            <th class="py-3.5 px-4 w-40 text-center">Trọng tâm thực thi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 font-normal text-slate-700">
                        <!-- Program 1 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-4 px-4 font-bold text-center text-[#062AAD]">1</td>
                            <td class="py-4 px-4 font-bold text-[#02185D]">
                                Nền tảng Đổi mới sáng tạo<br>
                                <span class="text-[11px] text-slate-400 font-normal">(Ca Mau Innovation Platform)</span>
                            </td>
                            <td class="py-4 px-4 leading-relaxed">
                                Khung chính sách và Quy chế sandbox; nền tảng dữ liệu phục vụ ra quyết định; đo và cải thiện Chỉ số PII; truyền thông, cộng đồng; mạng lưới chuyên gia và các hội đồng tư vấn.
                            </td>
                            <td class="py-4 px-4 text-slate-600">
                                Toàn hệ sinh thái: doanh nghiệp, tổ chức, học sinh, sinh viên, người dân
                            </td>
                            <td class="py-4 px-4 text-center font-extrabold text-blue-600">
                                Thể chế & PII
                            </td>
                        </tr>

                        <!-- Program 2 -->
                        <tr class="hover:bg-slate-50/60 transition-colors bg-amber-50/20">
                            <td class="py-4 px-4 font-bold text-center text-amber-600">2</td>
                            <td class="py-4 px-4 font-bold text-[#02185D]">
                                Hành trình Khởi nghiệp<br>
                                <span class="text-[11px] text-slate-400 font-normal">(Khởi nghiệp - Ươm tạo - Tăng tốc Cà Mau)</span>
                            </td>
                            <td class="py-4 px-4 leading-relaxed">
                                Quy trình hỗ trợ liên thông gồm 04 bước:<br>
                                (1) Tìm nguồn từ cuộc thi + tiền ươm tạo;<br>
                                (2) Ươm tạo 6-12 tháng với lab dùng chung;<br>
                                (3) Tăng tốc 3-6 tháng + đồng tài trợ 1:1;<br>
                                (4) Kết nối, mở rộng quy mô, vốn, thị trường.
                            </td>
                            <td class="py-4 px-4 text-slate-600">
                                Cá nhân, nhóm, doanh nghiệp khởi nghiệp từ ý tưởng đến tăng trưởng
                            </td>
                            <td class="py-4 px-4 text-center font-extrabold text-amber-600">
                                4 Bước liên thông
                            </td>
                        </tr>

                        <!-- Program 3 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-4 px-4 font-bold text-center text-emerald-600">3</td>
                            <td class="py-4 px-4 font-bold text-[#02185D]">
                                Doanh nghiệp số<br>
                                <span class="text-[11px] text-slate-400 font-normal">(Ca Mau Digital SME)</span>
                            </td>
                            <td class="py-4 px-4 leading-relaxed">
                                Voucher chuyển đổi số gắn nhà cung cấp được thẩm định + mentor + KPI sau 90 ngày; ứng dụng AI, dữ liệu, thương mại điện tử, logistics số; nâng giá trị OCOP.
                            </td>
                            <td class="py-4 px-4 text-slate-600">
                                Doanh nghiệp nhỏ và vừa, hợp tác xã, hộ kinh doanh, chủ thể OCOP, doanh nghiệp 1 người (OPC)
                            </td>
                            <td class="py-4 px-4 text-center font-extrabold text-emerald-600">
                                Voucher CĐS & OCOP
                            </td>
                        </tr>

                        <!-- Program 4 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-4 px-4 font-bold text-center text-purple-600">4</td>
                            <td class="py-4 px-4 font-bold text-[#02185D]">
                                Nhân tài số<br>
                                <span class="text-[11px] text-slate-400 font-normal">(Ca Mau Talent)</span>
                            </td>
                            <td class="py-4 px-4 leading-relaxed">
                                Học bổng tài năng theo nhóm năng lực; giáo dục khởi nghiệp và đại học khởi nghiệp; mạng lưới nhân tài trong và ngoài tỉnh; kinh tế sáng tạo.
                            </td>
                            <td class="py-4 px-4 text-slate-600">
                                Thanh niên, sinh viên, kỹ sư, nhà nghiên cứu, freelancer, maker
                            </td>
                            <td class="py-4 px-4 text-center font-extrabold text-purple-600">
                                Học bổng & Tri thức
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 4 PROGRAM DETAILED CARDS GRID -->
        <div class="space-y-8">
            <div class="flex items-center justify-between">
                <h2 class="text-h3 font-extrabold text-[#02185D]">Chi Tiết 04 Chương Trình Thành Phần</h2>
                <span class="text-body-xs text-slate-500 font-medium hidden sm:inline-block">Bấm vào chương trình để xem đầy đủ quy trình</span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <?php foreach ($programs_list as $key => $prog): ?>
                    <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between space-y-6 group">
                        
                        <div class="space-y-5">
                            <!-- Header Card: Badge & Title -->
                            <div class="flex items-start justify-between gap-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-2xl <?php echo $prog['bg_light']; ?> <?php echo $prog['text_color']; ?> flex items-center justify-center shrink-0 border <?php echo $prog['border_color']; ?> shadow-2xs">
                                        <i data-lucide="<?php echo $prog['icon']; ?>" class="w-6 h-6"></i>
                                    </div>
                                    <div>
                                        <span class="text-[11px] font-black uppercase tracking-wider <?php echo $prog['text_color']; ?> block">
                                            <?php echo $prog['sub_title']; ?>
                                        </span>
                                        <h3 class="text-h4 font-extrabold text-[#02185D] group-hover:text-[#062AAD] transition-colors">
                                            <?php echo $prog['title']; ?>
                                        </h3>
                                    </div>
                                </div>
                                
                                <div class="text-right shrink-0">
                                    <span class="text-[11px] font-extrabold px-3 py-1 rounded-full <?php echo $prog['bg_light']; ?> <?php echo $prog['text_color']; ?> block border <?php echo $prog['border_color']; ?>">
                                        <?php echo $prog['badge']; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Core Function -->
                            <div class="bg-slate-50 rounded-2xl p-4 border border-slate-100 space-y-1">
                                <span class="text-[10px] font-black text-slate-400 uppercase tracking-wider block">NỘI DUNG CHỦ YẾU</span>
                                <p class="text-body-xs font-semibold text-slate-800 leading-relaxed">
                                    <?php echo $prog['short_desc']; ?>
                                </p>
                            </div>

                            <!-- Target Audience -->
                            <div class="space-y-1.5">
                                <span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider block">Đối tượng thụ hưởng:</span>
                                <p class="text-body-xs text-slate-600 bg-slate-100/70 p-3 rounded-xl border border-slate-200/50">
                                    <i data-lucide="users" class="w-3.5 h-3.5 text-[#062AAD] inline-block mr-1"></i>
                                    <?php echo $prog['target_audience']; ?>
                                </p>
                            </div>

                            <!-- Core Activities preview -->
                            <div class="space-y-2">
                                <span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider block">Nội dung hoạt động trọng tâm:</span>
                                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-body-xs text-slate-600">
                                    <?php foreach ($prog['core_activities'] as $act): ?>
                                        <li class="flex items-center gap-2">
                                            <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500 shrink-0"></i>
                                            <span class="font-medium text-[12px] truncate"><?php echo $act['title']; ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Card Action -->
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-4">
                            <!-- Metrics summary -->
                            <div class="flex items-center gap-4">
                                <?php foreach (array_slice($prog['key_metrics'], 0, 2) as $met): ?>
                                    <div>
                                        <div class="text-body-xs font-black text-[#062AAD]"><?php echo $met['number']; ?></div>
                                        <div class="text-[10px] text-slate-400 font-medium"><?php echo $met['label']; ?></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <a href="<?php echo $prog['slug']; ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-to-r <?php echo $prog['color']; ?> text-white font-extrabold text-body-xs hover:shadow-lg transition-all duration-300 group-hover:scale-105">
                                <span>Xem chi tiết</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- CTA REGISTRATION FOOTER BANNER -->
        <div class="relative rounded-3xl overflow-hidden bg-gradient-to-r from-[#062AAD] via-[#02185D] to-[#05A6F5] text-white p-8 md:p-12 shadow-2xl">
            <div class="relative z-10 max-w-3xl space-y-4">
                <span class="inline-block px-3 py-1 rounded-full bg-white/20 backdrop-blur-md text-white font-extrabold text-[11px] uppercase tracking-wider">
                    Đổi mới sáng tạo & Khởi nghiệp Cà Mau
                </span>
                <h2 class="text-h3 md:text-h2 font-extrabold leading-tight">
                    Đồng Hành Cùng 04 Chương Trình Đổi Mới Sáng Tạo Tỉnh Cà Mau
                </h2>
                <p class="text-body-xs md:text-body-sm text-slate-200 font-light leading-relaxed">
                    Liên hệ với Ban quản lý chương trình CINEC để nhận hướng dẫn đăng ký tham gia các gói hỗ trợ Voucher Chuyển đổi số, Ươm tạo startup, Học bổng tài năng hoặc Khung thử nghiệm Sandbox.
                </p>
                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="lien-he.php" class="inline-flex items-center gap-2 bg-white text-[#062AAD] font-extrabold text-body-sm px-6 py-3 rounded-full hover:bg-slate-100 transition-colors shadow-lg">
                        <span>Đăng ký tham gia ngay</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                    <a href="gioi-thieu.php" class="inline-flex items-center gap-2 border border-white/40 text-white font-bold text-body-sm px-6 py-3 rounded-full hover:bg-white/10 transition-colors">
                        <span>Tìm hiểu Đề án Đổi mới sáng tạo Cà Mau</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
