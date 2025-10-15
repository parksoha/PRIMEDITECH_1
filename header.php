<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO 메타 태그 -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="PRIMEDITECH, 프리메디텍, 의료기기, 의료기술, 다국어">
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
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    
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
            <nav class="main-navigation" id="main-navigation">
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
                <!-- GTranslate 언어 전환 -->
                <div class="language-switcher">
                    <?php
                    if (function_exists('gtranslate_switcher')) {
                        echo gtranslate_switcher();
                    } else {
                        // GTranslate 플러그인이 없을 때 기본 언어 선택
                        ?>
                        <select class="language-select" onchange="changeLanguage(this.value)">
                            <option value="ko" <?php selected(get_locale(), 'ko_KR'); ?>>한국어</option>
                            <option value="en" <?php selected(get_locale(), 'en_US'); ?>>English</option>
                            <option value="zh" <?php selected(get_locale(), 'zh_CN'); ?>>中文</option>
                            <option value="ja" <?php selected(get_locale(), 'ja'); ?>>日本語</option>
                            <option value="de" <?php selected(get_locale(), 'de_DE'); ?>>Deutsch</option>
                            <option value="fr" <?php selected(get_locale(), 'fr_FR'); ?>>Français</option>
                        </select>
                        <?php
                    }
                    ?>
                </div>
                
                <!-- 모바일 메뉴 토글 버튼 -->
                <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="메뉴 열기/닫기">
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
    <div class="mobile-menu" id="mobile-menu">
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
                    <select class="mobile-language-select" onchange="changeLanguage(this.value)">
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
<main class="main-content" id="main-content">

<?php
/**
 * 기본 메뉴 폴백 함수
 */
function prmtec_fallback_menu() {
    ?>
    <ul class="nav-menu">
        <li><a href="<?php echo home_url('/about/'); ?>"><?php _e('About', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/facility/'); ?>"><?php _e('Facility', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/products/'); ?>"><?php _e('Products', 'prmtec'); ?></a></li>
        <li><a href="<?php echo home_url('/contact/'); ?>"><?php _e('Contact', 'prmtec'); ?></a></li>
    </ul>
    <?php
}
?>
