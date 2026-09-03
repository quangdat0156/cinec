    </main>

    <!-- FOOTER: Nền navy đậm, 5 cột Desktop chuẩn Figma Inter 14px-16px -->
    <footer class="bg-[#02185D] text-slate-300 pt-16 pb-8 border-t border-white/10 font-sans">
        <div class="max-w-[1440px] mx-auto px-4 md:px-12 2xl:px-20">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-12 pb-12">
                
                <!-- Cột 1: Logo & Giới thiệu (3/12 cột) -->
                <div class="lg:col-span-3 space-y-6 text-left">
                    <a href="index.php" class="inline-block focus:outline-none">
                        <!-- Logo trắng CiNEC -->
                        <img src="assets/img/logo-cinec-trang.png" alt="CiNEC Logo" class="h-10 md:h-11 w-auto object-contain">
                    </a>
                    <p class="text-[14px] text-slate-300 font-normal leading-relaxed max-w-[260px]">
                        <?php echo __('footer_mission'); ?>
                    </p>
                    
                    <!-- Các icon nền tảng mạng xã hội chuẩn SVG (Facebook, LinkedIn, YouTube, TikTok, Mail) -->
                    <div class="flex items-center gap-3 pt-2">
                        <!-- Facebook -->
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-[#02185D] hover:bg-white/15 text-slate-200 hover:text-white flex items-center justify-center transition-all duration-300 border border-white/20 hover:border-white/40 shadow-2xs" aria-label="Facebook">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>

                        <!-- LinkedIn -->
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-[#02185D] hover:bg-white/15 text-slate-200 hover:text-white flex items-center justify-center transition-all duration-300 border border-white/20 hover:border-white/40 shadow-2xs" aria-label="LinkedIn">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>

                        <!-- YouTube -->
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-[#02185D] hover:bg-white/15 text-slate-200 hover:text-white flex items-center justify-center transition-all duration-300 border border-white/20 hover:border-white/40 shadow-2xs" aria-label="YouTube">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>

                        <!-- TikTok -->
                        <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-[#02185D] hover:bg-white/15 text-slate-200 hover:text-white flex items-center justify-center transition-all duration-300 border border-white/20 hover:border-white/40 shadow-2xs" aria-label="TikTok">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.24 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                        </a>

                        <!-- Email -->
                        <a href="mailto:contact@cinec.com.vn" class="w-9 h-9 rounded-full bg-[#02185D] hover:bg-white/15 text-slate-200 hover:text-white flex items-center justify-center transition-all duration-300 border border-white/20 hover:border-white/40 shadow-2xs" aria-label="Email">
                            <i data-lucide="mail" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Cột 2: VỀ CINEC (2/12 cột) -->
                <div class="lg:col-span-2 space-y-4 text-left">
                    <span class="text-[15px] font-semibold text-white uppercase tracking-wider block"><?php echo __('footer_col_about'); ?></span>
                    <ul class="space-y-2.5 text-[14px] text-slate-300 font-normal">
                        <li><a href="gioi-thieu.php" class="hover:text-white transition-colors"><?php echo __('nav_about'); ?></a></li>
                        <li><a href="gioi-thieu.php#vision" class="hover:text-white transition-colors"><?php echo current_lang() === 'en' ? 'Vision - Mission' : 'Tầm nhìn - Sứ mệnh'; ?></a></li>
                        <li><a href="gioi-thieu.php#team" class="hover:text-white transition-colors"><?php echo current_lang() === 'en' ? 'Leadership Team' : 'Đội ngũ lãnh đạo'; ?></a></li>
                        <li><a href="doi-tac.php?tab=ban-co-van" class="hover:text-white transition-colors"><?php echo current_lang() === 'en' ? 'Advisory Board' : 'Ban cố vấn'; ?></a></li>
                    </ul>
                </div>
                
                <!-- Cột 3: CHƯƠNG TRÌNH (2/12 cột) -->
                <div class="lg:col-span-2 space-y-4 text-left">
                    <span class="text-[15px] font-semibold text-white uppercase tracking-wider block"><?php echo __('footer_col_programs'); ?></span>
                    <ul class="space-y-2.5 text-[14px] text-slate-300 font-normal">
                        <li><a href="chuong-trinh-platform.php" class="hover:text-white transition-colors"><?php echo __('prog_platform_title'); ?></a></li>
                        <li><a href="chuong-trinh-journey.php" class="hover:text-white transition-colors"><?php echo __('prog_journey_title'); ?></a></li>
                        <li><a href="chuong-trinh-sme.php" class="hover:text-white transition-colors"><?php echo __('prog_sme_title'); ?></a></li>
                        <li><a href="chuong-trinh-talent.php" class="hover:text-white transition-colors"><?php echo __('prog_talent_title'); ?></a></li>
                    </ul>
                </div>
                
                <!-- Cột 4: HỖ TRỢ (2/12 cột) -->
                <div class="lg:col-span-2 space-y-4 text-left">
                    <span class="text-[15px] font-semibold text-white uppercase tracking-wider block"><?php echo __('footer_col_support'); ?></span>
                    <ul class="space-y-2.5 text-[14px] text-slate-300 font-normal">
                        <li><a href="index.php" class="hover:text-white transition-colors"><?php echo current_lang() === 'en' ? 'Innovation Services' : 'Dịch vụ ĐMST'; ?></a></li>
                        <li><a href="doi-tac.php?tab=quy-dau-tu" class="hover:text-white transition-colors"><?php echo current_lang() === 'en' ? 'Venture Capital' : 'Quỹ đầu tư'; ?></a></li>
                        <li><a href="doi-tac.php?tab=mentors" class="hover:text-white transition-colors"><?php echo current_lang() === 'en' ? 'Mentors & Booking' : 'Mentors & Đặt lịch'; ?></a></li>
                        <li><a href="doi-tac.php?tab=du-an-khoi-nghiep" class="hover:text-white transition-colors"><?php echo current_lang() === 'en' ? 'Startup Projects' : 'Dự án khởi nghiệp'; ?></a></li>
                        <li><a href="lien-he.php" class="hover:text-white transition-colors"><?php echo current_lang() === 'en' ? 'Consulting Support' : 'Liên hệ tư vấn'; ?></a></li>
                    </ul>
                </div>
                
                <!-- Cột 5: LIÊN HỆ (3/12 cột) -->
                <div class="lg:col-span-3 space-y-4 text-left">
                    <span class="text-[15px] font-semibold text-white uppercase tracking-wider block"><?php echo __('footer_col_contact'); ?></span>
                    <ul class="space-y-3 text-[14px] text-slate-300 font-normal">
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="map-pin" class="w-4 h-4 text-cyan-400 shrink-0 mt-1"></i>
                            <span class="leading-relaxed"><?php echo __('footer_address'); ?></span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i data-lucide="phone" class="w-4 h-4 text-cyan-400 shrink-0"></i>
                            <a href="tel:02903838668" class="hover:text-white transition-colors font-medium">(+84) 290 3838 668</a>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i data-lucide="mail" class="w-4 h-4 text-cyan-400 shrink-0"></i>
                            <a href="mailto:contact@cinec.com.vn" class="hover:text-white transition-colors">contact@cinec.com.vn</a>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i data-lucide="globe" class="w-4 h-4 text-cyan-400 shrink-0"></i>
                            <a href="https://cinec.com.vn" target="_blank" class="hover:text-white transition-colors">cinec.com.vn</a>
                        </li>
                    </ul>
                </div>
                
            </div>
            
            <!-- Chân trang phụ bản quyền chuẩn Figma 12px font-medium -->
            <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-[12.5px] text-slate-400 font-medium border-t border-white/10">
                <span><?php echo __('footer_rights'); ?></span>
                <div class="flex items-center gap-6">
                    <a href="#" class="hover:text-white transition-colors"><?php echo __('footer_privacy'); ?></a>
                    <a href="#" class="hover:text-white transition-colors"><?php echo __('footer_terms'); ?></a>
                </div>
            </div>
            
        </div>
    </footer>

    <!-- JAVASCRIPT TOÀN TRANG -->
    <script>
        // Khởi tạo Lucide Icons sau khi tải trang
        document.addEventListener("DOMContentLoaded", function() {
            lucide.createIcons();
            
            // Logic đổi màu và co giãn Header khi cuộn trang (Shrinking Sticky Header)
            const wrapper = document.getElementById("header-wrapper");
            const capsule = document.getElementById("header-capsule");
            window.addEventListener("scroll", () => {
                if (wrapper && capsule) {
                    if (window.scrollY > 20) {
                        wrapper.classList.remove("pt-4", "lg:pt-6");
                        wrapper.classList.add("pt-1.5", "lg:pt-2.5");
                        capsule.classList.remove("h-18", "lg:h-20");
                        capsule.classList.add("h-14", "lg:h-16");
                        capsule.classList.add("shadow-premium");
                    } else {
                        wrapper.classList.remove("pt-1.5", "lg:pt-2.5");
                        wrapper.classList.add("pt-4", "lg:pt-6");
                        capsule.classList.remove("h-14", "lg:h-16");
                        capsule.classList.add("h-18", "lg:h-20");
                        capsule.classList.remove("shadow-premium");
                    }
                }
            });
        });

        // ==========================================
        // MOBILE DRAWER LOGIC
        // ==========================================
        const mobileMenuBtn = document.getElementById("mobile-menu-btn");
        const closeDrawerBtn = document.getElementById("close-drawer-btn");
        const mobileDrawer = document.getElementById("mobile-drawer");
        const drawerOverlay = document.getElementById("drawer-overlay");
        const drawerContent = document.getElementById("drawer-content");

        function openDrawer() {
            mobileDrawer.classList.remove("pointer-events-none");
            drawerOverlay.classList.remove("bg-slate-900/0", "backdrop-blur-none");
            drawerOverlay.classList.add("bg-slate-900/40", "backdrop-blur-sm");
            drawerContent.classList.remove("translate-x-full");
            document.body.style.overflow = "hidden";
        }

        function closeDrawer() {
            mobileDrawer.classList.add("pointer-events-none");
            drawerOverlay.classList.add("bg-slate-900/0", "backdrop-blur-none");
            drawerOverlay.classList.remove("bg-slate-900/40", "backdrop-blur-sm");
            drawerContent.classList.add("translate-x-full");
            document.body.style.overflow = "";
        }

        if (mobileMenuBtn) mobileMenuBtn.addEventListener("click", openDrawer);
        if (closeDrawerBtn) closeDrawerBtn.addEventListener("click", closeDrawer);
        if (drawerOverlay) drawerOverlay.addEventListener("click", closeDrawer);

        // Accordion toggle cho mobile
        function toggleMobileAccordion() {
            const content = document.getElementById("mobile-accordion-content");
            const arrow = document.getElementById("accordion-arrow");
            if (content) {
                content.classList.toggle("hidden");
                if (arrow) arrow.classList.toggle("rotate-180");
            }
        }
    </script>
</body>
</html>
