<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO 메타 태그 -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="PRIMEDITECH, 프리메디텍, CNC가공, 정밀가공, 의료기기, 항공우주, 로보틱스, 반도체, 초정밀가공">
    <meta name="author" content="PRIMEDITECH">
    
    <!-- Open Graph 메타 태그 -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    
    <!-- Twitter Card 메타 태그 -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
    
    <!-- 파비콘 -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
    
    <!-- 다국어 지원 -->
    <link rel="alternate" hreflang="ko" href="<?php echo home_url(); ?>">
    <link rel="alternate" hreflang="en" href="<?php echo home_url('/en/'); ?>">
    <link rel="alternate" hreflang="zh" href="<?php echo home_url('/zh/'); ?>">
    <link rel="alternate" hreflang="ja" href="<?php echo home_url('/ja/'); ?>">
    <link rel="alternate" hreflang="de" href="<?php echo home_url('/de/'); ?>">
    <link rel="alternate" hreflang="fr" href="<?php echo home_url('/fr/'); ?>">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- 스킵 링크 (접근성) -->
<a class="skip-link screen-reader-text" href="#main-content"><?php _e('Skip to content', 'prmtec'); ?></a>

<!-- 헤더 영역 -->
<header class="header" id="header">
    <div class="container">
        <div class="header-content">
            <!-- 로고 -->
            <div class="logo-section">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo home_url(); ?>" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mainlogo.png" alt="PRIMEDITECH" class="logo-image">
                    </a>
                    <?php
                }
                ?>
            </div>
            
            <!-- 네비게이션 메뉴 -->
            <nav class="main-navigation" id="main-navigation" role="navigation" aria-label="<?php _e('Primary Menu', 'prmtec'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'fallback_cb'    => 'prmtec_fallback_menu',
                ));
                ?>
            </nav>
            
            <!-- 언어 전환 및 유틸리티 -->
            <div class="header-utilities">
                <!-- 언어 전환 버튼 -->
                <div class="language-switcher">
                    <button class="lang-btn" data-lang="ko" onclick="changeLanguage('ko')">
                        <span class="lang-text">한국어</span>
                    </button>
                    <button class="lang-btn active" data-lang="en" onclick="changeLanguage('en')">
                        <span class="lang-text">English</span>
                    </button>
                </div>
                
                <!-- 모바일 메뉴 토글 버튼 -->
                <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="<?php _e('Toggle Menu', 'prmtec'); ?>" aria-expanded="false">
                    <span class="hamburger">
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    
    <!-- 모바일 메뉴 -->
    <div class="mobile-menu" id="mobile-menu" role="navigation" aria-label="<?php _e('Mobile Menu', 'prmtec'); ?>">
        <div class="mobile-menu-content">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'mobile-menu',
                'menu_class'     => 'mobile-nav-menu',
                'container'      => false,
                'fallback_cb'    => 'prmtec_fallback_menu',
            ));
            ?>
            
            <!-- 모바일 언어 전환 -->
            <div class="mobile-language-switcher">
                <?php
                if (function_exists('gtranslate_switcher')) {
                    echo gtranslate_switcher();
                } else {
                    ?>
                    <select class="mobile-language-select" onchange="changeLanguage(this.value)" aria-label="<?php _e('Select Language', 'prmtec'); ?>">
                        <option value="ko">한국어</option>
                        <option value="en">English</option>
                        <option value="zh">中文</option>
                        <option value="ja">日本語</option>
                        <option value="de">Deutsch</option>
                        <option value="fr">Français</option>
                    </select>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</header>

<!-- 메인 콘텐츠 시작 -->
<main class="main-content" id="main-content" role="main">

<?php
/**
 * 기본 메뉴 폴백 함수
 */
function prmtec_fallback_menu() {
    ?>
    <ul class="nav-menu">
        <li><a href="<?php echo home_url('/about/'); ?>"><?php _e('About', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/services/'); ?>"><?php _e('Services', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/industries/'); ?>"><?php _e('Industries', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/products/'); ?>"><?php _e('Products', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/facility/'); ?>"><?php _e('Facility', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/contact/'); ?>"><?php _e('Contact', 'prmtec'); ?></a></li>
    </ul>
    <?php
}
?>

<script>
// 언어 전환 JavaScript
function changeLanguage(lang) {
    // 모든 언어 버튼에서 active 클래스 제거
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // 클릭된 버튼에 active 클래스 추가
    document.querySelector(`[data-lang="${lang}"]`).classList.add('active');
    
    // 언어 변경 로직
    if (lang === 'ko') {
        // 한국어로 전환 - 현재 페이지에서 한국어 텍스트 표시
        document.body.setAttribute('data-lang', 'ko');
        console.log('한국어로 전환');
    } else if (lang === 'en') {
        // 영어로 전환 - 현재 페이지에서 영어 텍스트 표시
        document.body.setAttribute('data-lang', 'en');
        console.log('English로 전환');
    }
    
    // 실제 언어 전환 로직 (GTranslate 플러그인과 연동)
    if (typeof gtranslate_switcher !== 'undefined') {
        // GTranslate 플러그인이 있는 경우
        window.location.href = window.location.href.split('?')[0] + '?lang=' + lang;
    } else {
        // 클라이언트 사이드 언어 전환 (실제 구현 필요)
        // 현재는 시각적 피드백만 제공
    }
}

// 페이지 로드 시 현재 언어 설정
document.addEventListener('DOMContentLoaded', function() {
    const currentLang = document.documentElement.lang || 'ko';
    const langBtn = document.querySelector(`[data-lang="${currentLang}"]`);
    if (langBtn) {
        langBtn.classList.add('active');
    }
});
</script>