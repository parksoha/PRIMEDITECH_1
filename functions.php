<?php
/**
 * PRIMEDITECH Custom Theme Functions
 * 
 * @package PRIMEDITECH
 * @version 1.0
 */

// 테마 보안 강화
if (!defined('ABSPATH')) {
    exit;
}

/**
 * 테마 설정
 */
function prmtec_theme_setup() {
    // 다국어 지원
    load_theme_textdomain('prmtec', get_template_directory() . '/languages');
    
    // HTML5 지원
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // 포스트 썸네일 지원
    add_theme_support('post-thumbnails');
    
    // 커스텀 로고 지원
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // 메뉴 등록
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'prmtec'),
        'footer'  => __('Footer Menu', 'prmtec'),
    ));
    
    // 문서 제목 태그 지원
    add_theme_support('title-tag');
    
    // RSS 피드 링크 지원
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'prmtec_theme_setup');

/**
 * 스타일과 스크립트 로드
 */
function prmtec_scripts() {
    // 메인 스타일시트
    wp_enqueue_style('prmtec-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // 추가 CSS 파일들
    wp_enqueue_style('prmtec-main', get_template_directory_uri() . '/css/main.css', array('prmtec-style'), '1.0.0');
    wp_enqueue_style('prmtec-responsive', get_template_directory_uri() . '/css/responsive.css', array('prmtec-main'), '1.0.0');
    wp_enqueue_style('prmtec-gtranslate', get_template_directory_uri() . '/css/gtranslate.css', array('prmtec-main'), '1.0.0');
    
    // Google Fonts
    wp_enqueue_style('prmtec-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap', array(), null);
    
    // JavaScript 파일들
    wp_enqueue_script('prmtec-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('prmtec-gtranslate', get_template_directory_uri() . '/js/gtranslate.js', array('jquery'), '1.0.0', true);
    
    // WordPress 기본 jQuery 사용
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'prmtec_scripts');

/**
 * GTranslate 플러그인 연동
 */
function prmtec_gtranslate_integration() {
    // GTranslate 플러그인이 활성화되어 있는지 확인
    if (function_exists('gtranslate_switcher')) {
        // GTranslate 스타일과 스크립트 로드
        wp_enqueue_style('gtranslate-style', 'https://cdn.gtranslate.net/widgets/latest/css/flags.css', array(), null);
        wp_enqueue_script('gtranslate-script', 'https://cdn.gtranslate.net/widgets/latest/float.js', array(), null, true);
        
        // GTranslate 설정
        add_action('wp_footer', 'prmtec_gtranslate_config');
    }
}
add_action('wp_enqueue_scripts', 'prmtec_gtranslate_integration');

/**
 * GTranslate 설정
 */
function prmtec_gtranslate_config() {
    if (function_exists('gtranslate_switcher')) {
        ?>
        <script>
        window.gtranslateSettings = {
            "default_language": "ko",
            "languages": ["ko", "en", "zh", "ja", "de", "fr"],
            "wrapper_selector": ".gtranslate_wrapper",
            "flag_style": "3d",
            "flag_size": 16,
            "flag_alt": true
        };
        </script>
        <?php
    }
}

/**
 * 위젯 영역 등록
 */
function prmtec_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'prmtec'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'prmtec'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'prmtec'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here.', 'prmtec'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'prmtec'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here.', 'prmtec'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'prmtec'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here.', 'prmtec'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'prmtec_widgets_init');

/**
 * 커스텀 포스트 타입 등록 (필요시)
 */
function prmtec_custom_post_types() {
    // 서비스 포스트 타입
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'prmtec'),
            'singular_name' => __('Service', 'prmtec'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-admin-tools',
    ));
    
    // 제품 포스트 타입
    register_post_type('products', array(
        'labels' => array(
            'name' => __('Products', 'prmtec'),
            'singular_name' => __('Product', 'prmtec'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-products',
    ));
}
add_action('init', 'prmtec_custom_post_types');

/**
 * 관리자 메뉴 추가
 */
function prmtec_admin_menu() {
    add_menu_page(
        __('PRIMEDITECH Settings', 'prmtec'),
        __('PRIMEDITECH', 'prmtec'),
        'manage_options',
        'prmtec-settings',
        'prmtec_admin_page',
        'dashicons-admin-site-alt3',
        30
    );
}
add_action('admin_menu', 'prmtec_admin_menu');

/**
 * 관리자 페이지 콜백
 */
function prmtec_admin_page() {
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <div class="card">
            <h2><?php _e('Theme Information', 'prmtec'); ?></h2>
            <p><?php _e('PRIMEDITECH Custom Theme v1.0', 'prmtec'); ?></p>
            <p><?php _e('Multilingual Support: Korean, English, Chinese, Japanese, German, French', 'prmtec'); ?></p>
        </div>
        
        <div class="card">
            <h2><?php _e('GTranslate Plugin Status', 'prmtec'); ?></h2>
            <?php if (function_exists('gtranslate_switcher')): ?>
                <p style="color: green;">✓ GTranslate Plugin is active</p>
            <?php else: ?>
                <p style="color: red;">✗ GTranslate Plugin is not active</p>
            <?php endif; ?>
        </div>
    </div>
    <?php
}

/**
 * 커스터마이저 설정
 */
function prmtec_customize_register($wp_customize) {
    // 색상 설정
    $wp_customize->add_setting('primary_color', array(
        'default' => '#2c5aa0',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label' => __('Primary Color', 'prmtec'),
        'section' => 'colors',
        'settings' => 'primary_color',
    )));
}
add_action('customize_register', 'prmtec_customize_register');

/**
 * 보안 강화
 */
// 파일 편집 비활성화
if (!defined('DISALLOW_FILE_EDIT')) {
    define('DISALLOW_FILE_EDIT', true);
}

// XML-RPC 비활성화
add_filter('xmlrpc_enabled', '__return_false');

// WordPress 버전 숨기기
remove_action('wp_head', 'wp_generator');

/**
 * 성능 최적화
 */
// 이모지 스크립트 제거
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// 불필요한 메타 태그 제거
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
?>
