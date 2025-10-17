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
    
    // 공통 CSS 파일들
    wp_enqueue_style('prmtec-common', get_template_directory_uri() . '/css/common.css', array('prmtec-style'), '1.0.0');
    wp_enqueue_style('prmtec-responsive', get_template_directory_uri() . '/css/responsive.css', array('prmtec-common'), '1.0.0');
    wp_enqueue_style('prmtec-gtranslate', get_template_directory_uri() . '/css/gtranslate.css', array('prmtec-common'), '1.0.0');
    
    // 페이지별 CSS 파일들
    if (is_front_page() || is_home()) {
        wp_enqueue_style('prmtec-main', get_template_directory_uri() . '/css/main.css', array('prmtec-common'), '1.0.0');
        wp_enqueue_style('prmtec-home', get_template_directory_uri() . '/css/home.css', array('prmtec-common'), '1.0.0');
    } else {
        // 기본 스타일과 메인 스타일 항상 로드
        wp_enqueue_style('prmtec-main', get_template_directory_uri() . '/css/main.css', array('prmtec-common'), '1.0.0');
        wp_enqueue_style('prmtec-style', get_template_directory_uri() . '/css/style.css', array('prmtec-common'), '1.0.0');
    }
    
    // 페이지별 CSS 파일들
    if (is_page('about') || is_page_template('sub/about.php')) {
        wp_enqueue_style('prmtec-about', get_template_directory_uri() . '/css/about.css', array('prmtec-common'), '1.0.0');
    }
    if (is_page('services') || is_page_template('sub/services.php')) {
        wp_enqueue_style('prmtec-services', get_template_directory_uri() . '/css/services.css', array('prmtec-common'), '1.0.0');
    }
    if (is_page('industries') || is_page_template('sub/industries.php')) {
        wp_enqueue_style('prmtec-industries', get_template_directory_uri() . '/css/industries.css', array('prmtec-common'), '1.0.0');
    }
    if (is_page('facility') || is_page_template('sub/facility.php')) {
        wp_enqueue_style('prmtec-facility', get_template_directory_uri() . '/css/facility.css', array('prmtec-common'), '1.0.0');
    }
    if (is_page('contact') || is_page_template('sub/contact.php')) {
        wp_enqueue_style('prmtec-contact', get_template_directory_uri() . '/css/contact.css', array('prmtec-common'), '1.0.0');
    }
    if (is_page('products') || is_page_template('sub/products.php')) {
        wp_enqueue_style('prmtec-products', get_template_directory_uri() . '/css/products.css', array('prmtec-common'), '1.0.0');
    }
    
    // Google Fonts
    wp_enqueue_style('prmtec-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap', array(), null);
    
    // Font Awesome
    wp_enqueue_style('prmtec-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');
    
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
 * Greenshift Animation 효과 연동
 */
function prmtec_greenshift_animation_integration() {
    // Greenshift 플러그인이 활성화되어 있는지 확인
    if (is_plugin_active('greenshift-animation-and-page-builder-blocks/greenshift.php') || function_exists('gspb_get_version')) {
        // Greenshift 애니메이션 스크립트 로드
        wp_enqueue_script('greenshift-swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.0', true);
        wp_enqueue_script('greenshift-scroll-timeline', get_template_directory_uri() . '/js/scroll-timeline.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('greenshift-interaction', get_template_directory_uri() . '/js/interaction-layer.js', array('jquery'), '1.0.0', true);
        
        // Greenshift 애니메이션 설정
        add_action('wp_footer', 'prmtec_greenshift_config');
    }
}
add_action('wp_enqueue_scripts', 'prmtec_greenshift_animation_integration');

/**
 * Greenshift 애니메이션 설정
 */
function prmtec_greenshift_config() {
    if (is_plugin_active('greenshift-animation-and-page-builder-blocks/greenshift.php')) {
        ?>
        <script>
        // Greenshift 애니메이션 초기화
        document.addEventListener('DOMContentLoaded', function() {
            // 스크롤 애니메이션 설정
            if (typeof gsap !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);
                
                // 섹션별 페이드인 애니메이션
                gsap.utils.toArray('.service-card, .product-card, .news-card').forEach(function(element) {
                    gsap.fromTo(element, 
                        { opacity: 0, y: 50 },
                        { 
                            opacity: 1, 
                            y: 0, 
                            duration: 0.8,
                            scrollTrigger: {
                                trigger: element,
                                start: "top 80%",
                                end: "bottom 20%",
                                toggleActions: "play none none reverse"
                            }
                        }
                    );
                });
                
                // 통계 숫자 카운트업 애니메이션
                gsap.utils.toArray('.stat-number').forEach(function(element) {
                    const endValue = parseInt(element.textContent.replace(/\D/g, ''));
                    gsap.fromTo(element, 
                        { textContent: 0 },
                        { 
                            textContent: endValue,
                            duration: 2,
                            ease: "power2.out",
                            snap: { textContent: 1 },
                            scrollTrigger: {
                                trigger: element,
                                start: "top 80%",
                                toggleActions: "play none none reverse"
                            }
                        }
                    );
                });
            }
        });
        </script>
        <?php
    }
}

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
    
    // 산업별 포트폴리오 포스트 타입
    register_post_type('industries', array(
        'labels' => array(
            'name' => __('Industries', 'prmtec'),
            'singular_name' => __('Industry', 'prmtec'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-building',
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
        
        <div class="card">
            <h2><?php _e('Channel.io Plugin Status', 'prmtec'); ?></h2>
            <?php if (function_exists('channel_plugin_script') || is_plugin_active('channel-io/channel_plugin.php')): ?>
                <p style="color: green;">✓ Channel.io Plugin is active</p>
                <p><strong><?php _e('Plugin Key', 'prmtec'); ?>:</strong> <?php echo get_option('channel_plugin_key', 'Not configured'); ?></p>
            <?php else: ?>
                <p style="color: red;">✗ Channel.io Plugin is not active</p>
                <p><?php _e('Please install and configure Channel.io plugin for chat functionality.', 'prmtec'); ?></p>
            <?php endif; ?>
        </div>
        
        <div class="card">
            <h2><?php _e('WP Statistics Plugin Status', 'prmtec'); ?></h2>
            <?php if (is_plugin_active('wp-statistics/wp-statistics.php') || function_exists('wp_statistics_install')): ?>
                <p style="color: green;">✓ WP Statistics Plugin is active</p>
                <p><?php _e('Real-time visitor tracking and analytics enabled.', 'prmtec'); ?></p>
            <?php else: ?>
                <p style="color: red;">✗ WP Statistics Plugin is not active</p>
                <p><?php _e('Please install WP Statistics plugin for visitor analytics.', 'prmtec'); ?></p>
            <?php endif; ?>
        </div>
        
        <div class="card">
            <h2><?php _e('Greenshift Animation Plugin Status', 'prmtec'); ?></h2>
            <?php if (is_plugin_active('greenshift-animation-and-page-builder-blocks/greenshift.php') || function_exists('gspb_get_version')): ?>
                <p style="color: green;">✓ Greenshift Animation Plugin is active</p>
                <p><?php _e('Advanced animations and page builder blocks available.', 'prmtec'); ?></p>
            <?php else: ?>
                <p style="color: red;">✗ Greenshift Animation Plugin is not active</p>
                <p><?php _e('Please install Greenshift plugin for enhanced animations.', 'prmtec'); ?></p>
            <?php endif; ?>
        </div>
        
        <div class="card">
            <h2><?php _e('Recommended Plugins Summary', 'prmtec'); ?></h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-top: 1rem;">
                <div>
                    <h4><?php _e('Essential Plugins', 'prmtec'); ?></h4>
                    <ul>
                        <li>✅ GTranslate</li>
                        <li>✅ Channel.io</li>
                        <li>✅ WP Statistics</li>
                        <li>✅ Contact Form 7</li>
                    </ul>
                </div>
                <div>
                    <h4><?php _e('Enhanced Features', 'prmtec'); ?></h4>
                    <ul>
                        <li>✅ Greenshift Animation</li>
                        <li>✅ Yoast SEO</li>
                        <li>✅ Elementor</li>
                        <li>✅ WP Rocket</li>
                    </ul>
                </div>
            </div>
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
 * Channel.io 채팅 위젯 연동
 */
function prmtec_channel_io_integration() {
    // Channel.io 플러그인이 활성화되어 있는지 확인
    if (function_exists('channel_plugin_script') || is_plugin_active('channel-io/channel_plugin.php')) {
        // Channel.io 스크립트와 스타일 로드
        wp_enqueue_style('channel-io-icons', 'https://cdn.channel.io/plugin/channel-icons.css', array(), '6.8.3');
        wp_enqueue_script('channel-io-plugin', 'https://cdn.channel.io/plugin/channel_plugin_script.js', array(), '6.8.3', true);
        
        // Channel.io 설정
        add_action('wp_footer', 'prmtec_channel_io_config');
    }
}
add_action('wp_enqueue_scripts', 'prmtec_channel_io_integration');

/**
 * WP Statistics 플러그인 연동
 */
function prmtec_wp_statistics_integration() {
    // WP Statistics 플러그인이 활성화되어 있는지 확인
    if (is_plugin_active('wp-statistics/wp-statistics.php') || function_exists('wp_statistics_install')) {
        // WP Statistics 자동 통계 수집 활성화
        add_action('wp_head', 'prmtec_wp_statistics_tracker');
        
        // 관리자 페이지에 통계 표시
        add_action('wp_dashboard_setup', 'prmtec_statistics_dashboard_widget');
    }
}
add_action('wp_enqueue_scripts', 'prmtec_wp_statistics_integration');

/**
 * WP Statistics 트래커 코드
 */
function prmtec_wp_statistics_tracker() {
    if (is_plugin_active('wp-statistics/wp-statistics.php')) {
        // WP Statistics 자동 트래킹 (플러그인이 자동으로 처리)
        echo '<!-- WP Statistics Tracking Active -->';
    }
}

/**
 * WP Statistics 대시보드 위젯
 */
function prmtec_statistics_dashboard_widget() {
    if (current_user_can('manage_options') && is_plugin_active('wp-statistics/wp-statistics.php')) {
        wp_add_dashboard_widget(
            'prmtec_statistics_widget',
            __('PRIMEDITECH Website Statistics', 'prmtec'),
            'prmtec_statistics_widget_content'
        );
    }
}

/**
 * 통계 위젯 콘텐츠
 */
function prmtec_statistics_widget_content() {
    if (is_plugin_active('wp-statistics/wp-statistics.php')) {
        echo '<div class="prmtec-stats-widget">';
        echo '<h4>' . __('Today\'s Visitors', 'prmtec') . '</h4>';
        echo '<p>' . __('Real-time visitor tracking active', 'prmtec') . '</p>';
        echo '<p><a href="' . admin_url('admin.php?page=wp-statistics/overview') . '">' . __('View Full Statistics', 'prmtec') . '</a></p>';
        echo '</div>';
    }
}

/**
 * Channel.io 설정
 */
function prmtec_channel_io_config() {
    if (function_exists('channel_plugin_script') || is_plugin_active('channel-io/channel_plugin.php')) {
        ?>
        <script>
        window.channelPluginSettings = {
            "pluginKey": "YOUR_CHANNEL_PLUGIN_KEY", // 실제 키로 교체 필요
            "memberId": "<?php echo get_current_user_id(); ?>",
            "memberName": "<?php echo wp_get_current_user()->display_name; ?>",
            "memberEmail": "<?php echo wp_get_current_user()->user_email; ?>",
            "language": "<?php echo get_locale(); ?>",
            "hideDefaultLauncher": false,
            "zIndex": 999999
        };
        
        (function() {
            var w = window;
            if (w.ChannelIO) {
                return (window.console.error || window.console.log || function(){})('ChannelIO script included twice.');
            }
            var ch = function() {
                ch.c(arguments);
            };
            ch.q = [];
            ch.c = function(args) {
                ch.q.push(args);
            };
            w.ChannelIO = ch;
            function l() {
                if (w.ChannelIOInitialized) {
                    return;
                }
                w.ChannelIOInitialized = true;
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = 'https://cdn.channel.io/plugin/channel_plugin_script.js';
                s.charset = 'UTF-8';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
            if (document.readyState === 'complete') {
                l();
            } else if (window.attachEvent) {
                window.attachEvent('onload', l);
            } else {
                window.addEventListener('DOMContentLoaded', l, false);
                window.addEventListener('load', l, false);
            }
        })();
        </script>
        <?php
    }
}

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
