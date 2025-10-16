</main>
<!-- 메인 콘텐츠 끝 -->

<!-- 푸터 영역 -->
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer-content">
            <!-- 회사 정보 -->
            <div class="footer-section company-info">
                <div class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mainlogo.png" alt="PRIMEDITECH" class="footer-logo-image">
                </div>
                <p>5-axis CNC precision processing company</p>
                
                <!-- 소셜 미디어 링크 -->
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Blog">
                        <i class="fas fa-blog"></i>
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
            
            <!-- 연락처 정보 -->
            <div class="footer-section contact-info">
                <h3><?php _e('Contact Info', 'prmtec'); ?></h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-mobile-alt"></i>
                        <span>KR Mob : 010-6364-7284</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Mob : +82 10-5956-7284</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>Tel : +82 31-455-2770</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>Email : pmkt@prmtec.com</span>
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
        <li><a href="<?php echo home_url('/services/'); ?>"><?php _e('Services', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/industries/'); ?>"><?php _e('Industries', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/contact/'); ?>"><?php _e('Contact', 'prmtec'); ?></a></li>
    </ul>
    <?php
}
?>
