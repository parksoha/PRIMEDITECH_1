<?php get_header(); ?>

<!-- 히어로 섹션 -->
<section class="hero-section" id="hero">
    <div class="hero-background">
        <div class="hero-overlay"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                <?php _e('Innovative Medical Technology Solutions', 'prmtec'); ?>
            </h1>
            <p class="hero-subtitle">
                <?php _e('Leading the future of healthcare with cutting-edge medical devices and technology', 'prmtec'); ?>
            </p>
            <div class="hero-buttons">
                <a href="<?php echo home_url('/about/'); ?>" class="btn btn-primary">
                    <?php _e('Learn More', 'prmtec'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 서비스 섹션 -->
<section class="services-section" id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('Our Services', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('Comprehensive medical technology solutions tailored to your needs', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <h3 class="service-title"><?php _e('Medical Devices', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('State-of-the-art medical equipment designed for precision and reliability', 'prmtec'); ?>
                </p>
                <a href="<?php echo home_url('/services/medical-devices/'); ?>" class="service-link">
                    <?php _e('Learn More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3 class="service-title"><?php _e('Professional Training', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('Comprehensive training programs for healthcare professionals', 'prmtec'); ?>
                </p>
                <a href="<?php echo home_url('/services/training/'); ?>" class="service-link">
                    <?php _e('Learn More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="service-title"><?php _e('24/7 Support', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('Round-the-clock technical support and maintenance services', 'prmtec'); ?>
                </p>
                <a href="<?php echo home_url('/services/support/'); ?>" class="service-link">
                    <?php _e('Learn More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 제품 섹션 -->
<section class="products-section" id="products">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('Featured Products', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('Discover our latest innovations in medical technology', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="products-grid">
            <?php
            // 제품 포스트 타입에서 최신 3개 제품 가져오기
            $products = new WP_Query(array(
                'post_type' => 'products',
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            
            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
            ?>
            <div class="product-card">
                <?php if (has_post_thumbnail()) : ?>
                <div class="product-image">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <?php endif; ?>
                
                <div class="product-content">
                    <h3 class="product-title"><?php the_title(); ?></h3>
                    <div class="product-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="product-link">
                        <?php _e('View Details', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
            <!-- PRIMEDITECH 핵심 제품들 -->
            <div class="product-card">
                <div class="product-image">
                    <i class="fas fa-x-ray"></i>
                </div>
                <div class="product-content">
                    <h3 class="product-title"><?php _e('PRIME-VISION X-Ray System', 'prmtec'); ?></h3>
                    <div class="product-excerpt">
                        <p><?php _e('4K 초고해상도 디지털 X-ray 시스템으로 정확한 진단을 위한 최첨단 의료영상 솔루션', 'prmtec'); ?></p>
                    </div>
                    <a href="<?php echo home_url('/products/prime-vision-xray/'); ?>" class="product-link">
                        <?php _e('View Details', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div class="product-content">
                    <h3 class="product-title"><?php _e('PRIME-MONITOR Vital System', 'prmtec'); ?></h3>
                    <div class="product-excerpt">
                        <p><?php _e('실시간 환자 모니터링 시스템으로 중환자실과 일반병실에서 24시간 환자 상태 감시', 'prmtec'); ?></p>
                    </div>
                    <a href="<?php echo home_url('/products/prime-monitor-vital/'); ?>" class="product-link">
                        <?php _e('View Details', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <i class="fas fa-microscope"></i>
                </div>
                <div class="product-content">
                    <h3 class="product-title"><?php _e('PRIME-LAB Analyzer Series', 'prmtec'); ?></h3>
                    <div class="product-excerpt">
                        <p><?php _e('정밀 검사실 분석기로 임상검사와 연구개발을 위한 고성능 실험실 장비', 'prmtec'); ?></p>
                    </div>
                    <a href="<?php echo home_url('/products/prime-lab-analyzer/'); ?>" class="product-link">
                        <?php _e('View Details', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="section-footer">
            <a href="<?php echo home_url('/products/'); ?>" class="btn btn-primary">
                <?php _e('View All Products', 'prmtec'); ?>
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
                    <?php _e('With over 15 years of experience in the medical technology industry, PRIMEDITECH has been at the forefront of innovation, providing cutting-edge solutions to healthcare professionals worldwide.', 'prmtec'); ?>
                </p>
                <p class="about-description">
                    <?php _e('Our commitment to excellence and continuous innovation has made us a trusted partner in the global healthcare community.', 'prmtec'); ?>
                </p>
                
                <div class="about-stats">
                    <div class="stat-item">
                        <div class="stat-number">18+</div>
                        <div class="stat-label"><?php _e('Years of Innovation', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">850+</div>
                        <div class="stat-label"><?php _e('Healthcare Partners', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">65+</div>
                        <div class="stat-label"><?php _e('Countries Worldwide', 'prmtec'); ?></div>
                    </div>
                </div>
                
                <a href="<?php echo home_url('/about/'); ?>" class="btn btn-primary">
                    <?php _e('Learn More About Us', 'prmtec'); ?>
                </a>
            </div>
            
            <div class="about-image">
                <div class="image-placeholder">
                    <i class="fas fa-hospital"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 뉴스/블로그 섹션 -->
<section class="news-section" id="news">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('Latest News', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('Stay updated with our latest developments and industry insights', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="news-grid">
            <?php
            // 최신 포스트 3개 가져오기
            $recent_posts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            
            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
            <article class="news-card">
                <?php if (has_post_thumbnail()) : ?>
                <div class="news-image">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <?php endif; ?>
                
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date"><?php echo get_the_date(); ?></span>
                        <span class="news-category"><?php the_category(', '); ?></span>
                    </div>
                    <h3 class="news-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <div class="news-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="news-link">
                        <?php _e('Read More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>ㅋㅋㅋ
            <!-- PRIMEDITECH 최신 뉴스 -->
            <article class="news-card">
                <div class="news-image">
                    <i class="fas fa-award"></i>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date"><?php echo date('F j, Y'); ?></span>
                        <span class="news-category"><?php _e('Awards & Recognition', 'prmtec'); ?></span>
                    </div>
                    <h3 class="news-title">
                        <a href="#"><?php _e('PRIMEDITECH Wins Global Medical Innovation Award 2024', 'prmtec'); ?></a>
                    </h3>
                    <div class="news-excerpt">
                        <p><?php _e('PRIME-VISION X-Ray System이 세계 의료기기 혁신상을 수상하며 의료영상 기술의 새로운 기준을 제시했습니다.', 'prmtec'); ?></p>
                    </div>
                    <a href="#" class="news-link">
                        <?php _e('Read More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
            
            <article class="news-card">
                <div class="news-image">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date"><?php echo date('F j, Y', strtotime('-7 days')); ?></span>
                        <span class="news-category"><?php _e('Global Expansion', 'prmtec'); ?></span>
                    </div>
                    <h3 class="news-title">
                        <a href="#"><?php _e('PRIMEDITECH Expands to European Healthcare Market', 'prmtec'); ?></a>
                    </h3>
                    <div class="news-excerpt">
                        <p><?php _e('독일, 프랑스, 네덜란드 등 유럽 주요 시장 진출을 통해 글로벌 의료기기 시장에서의 입지를 강화했습니다.', 'prmtec'); ?></p>
                    </div>
                    <a href="#" class="news-link">
                        <?php _e('Read More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
            
            <article class="news-card">
                <div class="news-image">
                    <i class="fas fa-microscope"></i>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date"><?php echo date('F j, Y', strtotime('-14 days')); ?></span>
                        <span class="news-category"><?php _e('Technology', 'prmtec'); ?></span>
                    </div>
                    <h3 class="news-title">
                        <a href="#"><?php _e('AI-Powered Diagnostic System Integration', 'prmtec'); ?></a>
                    </h3>
                    <div class="news-excerpt">
                        <p><?php _e('인공지능 기반 진단 시스템을 통합한 새로운 PRIME-AI 플랫폼을 출시하여 진단 정확도를 95% 향상시켰습니다.', 'prmtec'); ?></p>
                    </div>
                    <a href="#" class="news-link">
                        <?php _e('Read More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
            <?php endif; ?>
        </div>
        
        <div class="section-footer">
            <a href="<?php echo home_url('/news/'); ?>" class="btn btn-primary">
                <?php _e('View All News', 'prmtec'); ?>
            </a>
        </div>
    </div>
</section>

<!-- 문의 섹션 -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h2 class="section-title"><?php _e('Get in Touch', 'prmtec'); ?></h2>
                <p class="contact-description">
                    <?php _e('Ready to transform your healthcare practice? Contact us today for a consultation.', 'prmtec'); ?>
                </p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong><?php _e('Phone', 'prmtec'); ?></strong>
                            <p>+82-2-1234-5678</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong><?php _e('Email', 'prmtec'); ?></strong>
                            <p>info@prmtec.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong><?php _e('Address', 'prmtec'); ?></strong>
                            <p><?php _e('123 Medical Tech Street, Seoul, Korea', 'prmtec'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h3><?php _e('Send us a Message', 'prmtec'); ?></h3>
                <?php
                // Contact Form 7 플러그인이 있다면 사용
                if (function_exists('wpcf7_contact_form')) {
                    echo do_shortcode('[contact-form-7 id="123" title="Contact form"]');
                } else {
                    // 기본 문의 폼
                ?>
                <form class="contact-form-element" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="<?php _e('Your Name', 'prmtec'); ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="<?php _e('Your Email', 'prmtec'); ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="<?php _e('Subject', 'prmtec'); ?>" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="<?php _e('Your Message', 'prmtec'); ?>" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <?php _e('Send Message', 'prmtec'); ?>
                    </button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
