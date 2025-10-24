<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package PRIMEDITECH
 * @version 1.0
 */

get_header(); ?>

<!-- 히어로 섹션 -->
<section class="hero-section" id="hero">
    <div class="hero-background">
        <div class="hero-overlay"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                <?php _e('정밀을 넘어, 신뢰를 만든다', 'prmtec'); ?>
            </h1>
            <p class="hero-subtitle">
                <?php _e('의료·항공·로보틱스·반도체 초정밀 CNC 가공. ±0.001mm 정밀도, 98% 납기 준수, 10대+ CNC 장비. 샘플부터 양산까지 PRIMEDITECH이 책임집니다.', 'prmtec'); ?>
            </p>
            <div class="hero-buttons">
                <a href="#clients" class="btn btn-primary">
                    <i class="fas fa-handshake"></i>
                    <?php _e('주요 고객사', 'prmtec'); ?>
                </a>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-secondary">
                    <i class="fas fa-envelope"></i>
                    <?php _e('견적 문의', 'prmtec'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 서비스 섹션 -->
<section class="services-section" id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('핵심 분야', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('의료·항공·로보틱스·반도체 산업을 위한 초정밀 CNC 가공 솔루션', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3 class="service-title"><?php _e('의료기기', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('의료기기 부품의 초정밀 가공으로 생명을 구하는 기술을 완성합니다', 'prmtec'); ?>
                </p>
                <a href="<?php echo home_url('/industries/medical/'); ?>" class="service-link">
                    <?php _e('자세히 보기', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-plane"></i>
                </div>
                <h3 class="service-title"><?php _e('항공우주', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('항공우주 산업의 극한 정밀도를 요구하는 부품을 완벽하게 가공합니다', 'prmtec'); ?>
                </p>
                <a href="<?php echo home_url('/industries/aerospace/'); ?>" class="service-link">
                    <?php _e('자세히 보기', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3 class="service-title"><?php _e('로보틱스', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('로봇의 정밀한 움직임을 위한 고품질 부품을 제조합니다', 'prmtec'); ?>
                </p>
                <a href="<?php echo home_url('/industries/robotics/'); ?>" class="service-link">
                    <?php _e('자세히 보기', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-microchip"></i>
                </div>
                <h3 class="service-title"><?php _e('반도체', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('반도체 제조 장비의 핵심 부품을 극한 정밀도로 가공합니다', 'prmtec'); ?>
                </p>
                <a href="<?php echo home_url('/industries/semiconductor/'); ?>" class="service-link">
                    <?php _e('자세히 보기', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 가공 프로세스 섹션 -->
<section class="process-section" id="process">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('가공 프로세스', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('체계적인 5단계 가공 프로세스로 완벽한 품질을 보장합니다', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="process-steps">
            <a href="<?php echo home_url('/services/#design'); ?>" class="process-step-link">
                <div class="process-step">
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <h3 class="step-title"><?php _e('설계 검토', 'prmtec'); ?></h3>
                        <p class="step-description">
                            <?php _e('도면 분석 및 가공 가능성 검토', 'prmtec'); ?>
                        </p>
                        <div class="step-note">
                            <i class="fa-regular fa-clock"></i>
                            <span>1일 <span class="note-sub">(영업일기준)</span></span>
                        </div>
                    </div>
                </div>
            </a>
            <div class="process-arrow" aria-hidden="true"><i class="fas fa-arrow-right"></i></div>
            
            <a href="<?php echo home_url('/services/#machining'); ?>" class="process-step-link">
                <div class="process-step">
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <h3 class="step-title"><?php _e('정밀 가공', 'prmtec'); ?></h3>
                        <p class="step-description">
                            <?php _e('5축 CNC를 이용한 초정밀 가공', 'prmtec'); ?>
                        </p>
                        <div class="step-note">
                            <i class="fa-regular fa-clock"></i>
                            <span>3-5일 <span class="note-sub">(영업일기준)</span></span>
                        </div>
                    </div>
                </div>
            </a>
            <div class="process-arrow" aria-hidden="true"><i class="fas fa-arrow-right"></i></div>
            
            <a href="<?php echo home_url('/services/#surface-treatment'); ?>" class="process-step-link">
                <div class="process-step">
                    <div class="step-number">03</div>
                    <div class="step-content">
                        <h3 class="step-title"><?php _e('전/후 처리', 'prmtec'); ?></h3>
                        <p class="step-description">
                            <?php _e('다양한 표면 처리 기술 적용', 'prmtec'); ?>
                        </p>
                        <div class="step-note">
                            <i class="fa-regular fa-clock"></i>
                            <span>2일 <span class="note-sub">(영업일기준)</span></span>
                        </div>
                    </div>
                </div>
            </a>
            <div class="process-arrow" aria-hidden="true"><i class="fas fa-arrow-right"></i></div>
            
            <a href="<?php echo home_url('/services/#quality-inspection'); ?>" class="process-step-link">
                <div class="process-step">
                    <div class="step-number">04</div>
                    <div class="step-content">
                        <h3 class="step-title"><?php _e('품질검사', 'prmtec'); ?></h3>
                        <p class="step-description">
                            <?php _e('CMM을 이용한 정밀 치수 측정', 'prmtec'); ?>
                        </p>
                        <div class="step-note">
                            <i class="fa-regular fa-clock"></i>
                            <span>1일 <span class="note-sub">(영업일기준)</span></span>
                        </div>
                    </div>
                </div>
            </a>
            <div class="process-arrow" aria-hidden="true"><i class="fas fa-arrow-right"></i></div>
            
            <div class="process-step">
                <div class="step-number">05</div>
                <div class="step-content">
                    <h3 class="step-title"><?php _e('납품', 'prmtec'); ?></h3>
                    <p class="step-description">
                        <?php _e('안전한 포장 및 정시 납품', 'prmtec'); ?>
                    </p>
                    <div class="step-note">
                        <i class="fa-regular fa-clock"></i>
                        <span>1일 <span class="note-sub">(영업일기준)</span></span>
                    </div>
                </div>
            </div>
        </div>
        <p class="process-disclaimer"><?php _e('※ 제품 사양 및 작업 난이도에 따라 일정이 달라질 수 있습니다.', 'prmtec'); ?></p>
    </div>
</section>

<!-- 협력사 섹션 -->
<section class="partners-section" id="partners">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('협력사', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('신뢰할 수 있는 파트너들과 함께 성장하는 글로벌 네트워크', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="partners-grid">
            <a href="https://prilaser.com/" class="partner-logo" target="_blank" data-tooltip="<?php _e('홈페이지로 이동', 'prmtec'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Partner1.png" alt="Partner 1" class="partner-logo-img">
            </a>
            <a href="https://pricomma.com/" class="partner-logo" target="_blank" data-tooltip="<?php _e('홈페이지로 이동', 'prmtec'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Partner2.png" alt="Partner 2" class="partner-logo-img">
            </a>
            <a href="http://bslts.com/index2.php" class="partner-logo" target="_blank" data-tooltip="<?php _e('홈페이지로 이동', 'prmtec'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Partner3.png" alt="Partner 3" class="partner-logo-img">
            </a>
            <a href="https://wecorporation.kr/" class="partner-logo" target="_blank" data-tooltip="<?php _e('홈페이지로 이동', 'prmtec'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Partner4.png" alt="Partner 4" class="partner-logo-img">
            </a>
        </div>
        
        <!-- 커서를 따라다니는 툴팁 -->
        <div id="tooltip" class="tooltip"><?php _e('홈페이지로 이동', 'prmtec'); ?></div>
    </div>
</section>

<!-- 제품 섹션 -->
<section class="products-section" id="products">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('주요 고객사', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('전 세계 다양한 산업 분야의 신뢰받는 파트너', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="clients-marquee">
            <div class="clients-track">
                <!-- 첫 번째 세트 (client1-12) -->
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client1.png" alt="Client 1" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client2.png" alt="Client 2" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client3.png" alt="Client 3" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client4.png" alt="Client 4" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client5.png" alt="Client 5" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client6.png" alt="Client 6" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client7.png" alt="Client 7" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client8.png" alt="Client 8" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client9.png" alt="Client 9" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client10.png" alt="Client 10" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client11.png" alt="Client 11" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client12.png" alt="Client 12" class="client-logo-img">
                </div>
                
                <!-- 두 번째 세트 (반복) -->
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client1.png" alt="Client 1" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client2.png" alt="Client 2" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client3.png" alt="Client 3" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client4.png" alt="Client 4" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client5.png" alt="Client 5" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client6.png" alt="Client 6" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client7.png" alt="Client 7" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client8.png" alt="Client 8" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client9.png" alt="Client 9" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client10.png" alt="Client 10" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client11.png" alt="Client 11" class="client-logo-img">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/client12.png" alt="Client 12" class="client-logo-img">
                </div>
            </div>
        </div>
        
        <div class="section-footer">
            <a href="<?php echo home_url('/clients/'); ?>" class="btn btn-primary">
                <?php _e('모든 고객사 보기', 'prmtec'); ?>
            </a>
        </div>
    </div>
</section>

<!-- 회사 소개 섹션 -->
<section class="about-section" id="about">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2 class="section-title"><?php _e('About PRIMEDITECH', 'prmtec'); ?></h2>
                <p class="about-description">
                    <?php _e('PRIMEDITECH는 의료·항공·로보틱스·반도체 산업을 위한 초정밀 CNC 가공 전문 기업입니다. ±0.001mm의 정밀도와 데이터 기반 품질 관리로 고객의 신뢰를 완성합니다.', 'prmtec'); ?>
                </p>
                <p class="about-description">
                    <?php _e('보이지 않는 정밀함으로 완벽을 만드는 기술력과 품질로 가치를 창조하는 것이 우리의 미션입니다.', 'prmtec'); ?>
                </p>
                
                <div class="about-stats">
                    <div class="stat-item">
                        <div class="stat-number">50</div>
                        <div class="stat-label"><?php _e('고객사', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">14억</div>
                        <div class="stat-label"><?php _e('수출액', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">±0.001mm</div>
                        <div class="stat-label"><?php _e('정밀도', 'prmtec'); ?></div>
                    </div>
                </div>
                
                <a href="<?php echo home_url('/about/'); ?>" class="btn btn-primary">
                    <?php _e('회사 소개', 'prmtec'); ?>
                </a>
            </div>
            
            <div class="about-image">
                <video class="about-video" autoplay muted loop playsinline>
                    <source src="<?php echo get_template_directory_uri(); ?>/img/about.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</section>


<!-- 문의 섹션 -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h2 class="section-title"><?php _e('문의하기', 'prmtec'); ?></h2>
                <p class="contact-description">
                    <?php _e('정밀 가공이 필요한 프로젝트가 있으신가요? 언제든지 문의해 주세요.', 'prmtec'); ?>
                </p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-mobile-alt"></i>
                        <div>
                            <strong><?php _e('KR Mob', 'prmtec'); ?></strong>
                            <p>010-6364-7284</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-mobile-alt"></i>
                        <div>
                            <strong><?php _e('Mob', 'prmtec'); ?></strong>
                            <p>+82 10-5956-7284</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong><?php _e('Tel', 'prmtec'); ?></strong>
                            <p>+82 31-455-2770</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong><?php _e('Email', 'prmtec'); ?></strong>
                            <p>pmkt@prmtec.com</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h3><?php _e('견적 문의', 'prmtec'); ?></h3>
                <?php
                // Contact Form 7 플러그인이 있다면 사용
                if (function_exists('wpcf7_contact_form')) {
                    echo do_shortcode('[contact-form-7 id="123" title="Contact form"]');
                } else {
                    // 기본 문의 폼
                ?>
                <form class="contact-form-element" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="<?php _e('성함', 'prmtec'); ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="<?php _e('이메일', 'prmtec'); ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="<?php _e('제목', 'prmtec'); ?>" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="<?php _e('문의 내용', 'prmtec'); ?>" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <?php _e('문의하기', 'prmtec'); ?>
                    </button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
