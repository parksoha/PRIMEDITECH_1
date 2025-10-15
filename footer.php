</main>
<!-- 메인 콘텐츠 끝 -->

<!-- 푸터 영역 -->
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer-content">
            <!-- 회사 정보 -->
            <div class="footer-section company-info">
                <h3><?php _e('PRIMEDITECH', 'prmtec'); ?></h3>
                <p><?php _e('Leading medical technology company providing innovative solutions for healthcare professionals worldwide.', 'prmtec'); ?></p>
                
                <!-- 소셜 미디어 링크 -->
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            
            <!-- 빠른 링크 -->
            <div class="footer-section quick-links">
                <h3><?php _e('Quick Links', 'prmtec'); ?></h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'footer-menu',
                    'container'      => false,
                    'fallback_cb'    => 'prmtec_footer_fallback_menu',
                ));
                ?>
            </div>
            
            <!-- 서비스 -->
            <div class="footer-section services">
                <h3><?php _e('Services', 'prmtec'); ?></h3>
                <ul class="footer-menu">
                    <li><a href="<?php echo home_url('/medical-devices/'); ?>"><?php _e('Medical Devices', 'prmtec'); ?></a></li>
                    <li><a href="<?php echo home_url('/consulting/'); ?>"><?php _e('Consulting', 'prmtec'); ?></a></li>
                    <li><a href="<?php echo home_url('/training/'); ?>"><?php _e('Training', 'prmtec'); ?></a></li>
                    <li><a href="<?php echo home_url('/support/'); ?>"><?php _e('Support', 'prmtec'); ?></a></li>
                </ul>
            </div>
            
            <!-- 연락처 정보 -->
            <div class="footer-section contact-info">
                <h3><?php _e('Contact Info', 'prmtec'); ?></h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php _e('123 Medical Tech Street, Seoul, Korea', 'prmtec'); ?></span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+82-2-1234-5678</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@prmtec.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <span><?php _e('Mon-Fri: 9:00-18:00', 'prmtec'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 푸터 하단 -->
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <div class="copyright">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('All rights reserved.', 'prmtec'); ?></p>
                </div>
                
                <div class="footer-links">
                    <a href="<?php echo home_url('/privacy-policy/'); ?>"><?php _e('Privacy Policy', 'prmtec'); ?></a>
                    <a href="<?php echo home_url('/terms-of-service/'); ?>"><?php _e('Terms of Service', 'prmtec'); ?></a>
                    <a href="<?php echo home_url('/sitemap/'); ?>"><?php _e('Sitemap', 'prmtec'); ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- 스크롤 투 탑 버튼 -->
<button class="scroll-to-top" id="scroll-to-top" aria-label="<?php _e('Scroll to top', 'prmtec'); ?>">
    <i class="fas fa-chevron-up"></i>
</button>

<!-- 채팅 플러그인 영역 -->
<div class="chat-plugin-area">
    <?php
    // Channel.io 플러그인이 있다면 여기에 표시
    if (function_exists('channel_plugin_script') || is_plugin_active('channel-io/channel_plugin.php')) {
        // Channel.io는 자동으로 로드됨
        echo '<!-- Channel.io 채팅 위젯 활성화됨 -->';
    } else {
        // Channel.io 플러그인이 없을 때 대체 채팅 위젯
        echo do_shortcode('[chat_plugin]');
    }
    ?>
</div>

<?php wp_footer(); ?>

<!-- Font Awesome 아이콘 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- 언어 전환 JavaScript -->
<script>
function changeLanguage(lang) {
    // 언어 변경 로직
    if (lang === 'ko') {
        window.location.href = '<?php echo home_url(); ?>';
    } else {
        window.location.href = '<?php echo home_url(); ?>/' + lang + '/';
    }
}

// 스크롤 투 탑 기능
document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopBtn = document.getElementById('scroll-to-top');
    
    if (scrollToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });
        
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // 모바일 메뉴 토글
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            this.classList.toggle('active');
        });
    }
});
</script>

</body>
</html>

<?php
/**
 * 푸터 메뉴 폴백 함수
 */
function prmtec_footer_fallback_menu() {
    ?>
    <ul class="footer-menu">
        <li><a href="<?php echo home_url('/about/'); ?>"><?php _e('About', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/facility/'); ?>"><?php _e('Facility', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/products/'); ?>"><?php _e('Products', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/contact/'); ?>"><?php _e('Contact', 'prmtec'); ?></a></li>
    </ul>
    <?php
}
?>
