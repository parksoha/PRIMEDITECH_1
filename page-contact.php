<?php
/**
 * Template Name: Contact Page
 *
 * @package PRIMEDITECH
 * @version 1.0
 */

get_header(); ?>

<main class="main-content" id="main-content">
    <div class="container">
        <div class="contact-page-content">
            <!-- 페이지 헤더 -->
            <div class="page-header">
                <h1 class="page-title"><?php _e('Contact Us', 'prmtec'); ?></h1>
                <p class="page-subtitle">
                    <?php _e('Get in touch with our precision manufacturing experts', 'prmtec'); ?>
                </p>
            </div>
            
            <!-- 연락처 정보 -->
            <section class="contact-info-section">
                <div class="contact-info-grid">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="contact-title"><?php _e('KR Mobile', 'prmtec'); ?></h3>
                        <p class="contact-detail">010-6364-7284</p>
                    </div>
                    
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="contact-title"><?php _e('International Mobile', 'prmtec'); ?></h3>
                        <p class="contact-detail">+82 10-5956-7284</p>
                    </div>
                    
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3 class="contact-title"><?php _e('Telephone', 'prmtec'); ?></h3>
                        <p class="contact-detail">+82 31-455-2770</p>
                    </div>
                    
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="contact-title"><?php _e('Email', 'prmtec'); ?></h3>
                        <p class="contact-detail">pmkt@prmtec.com</p>
                    </div>
                </div>
            </section>
            
            <!-- 문의 폼 섹션 -->
            <section class="contact-form-section">
                <div class="contact-form-container">
                    <div class="form-header">
                        <h2><?php _e('Get a Quote', 'prmtec'); ?></h2>
                        <p><?php _e('Need precision manufacturing services? Contact us for a detailed quote.', 'prmtec'); ?></p>
                    </div>
                    
                    <div class="contact-form-wrapper">
                        <?php
                        // Contact Form 7 플러그인이 있다면 사용
                        if (function_exists('wpcf7_contact_form')) {
                            echo do_shortcode('[contact-form-7 id="123" title="Contact form"]');
                        } else {
                            // 기본 문의 폼
                        ?>
                        <form class="contact-form" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name"><?php _e('Name', 'prmtec'); ?> *</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email"><?php _e('Email', 'prmtec'); ?> *</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="company"><?php _e('Company', 'prmtec'); ?></label>
                                    <input type="text" id="company" name="company">
                                </div>
                                <div class="form-group">
                                    <label for="phone"><?php _e('Phone', 'prmtec'); ?></label>
                                    <input type="tel" id="phone" name="phone">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="subject"><?php _e('Subject', 'prmtec'); ?> *</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="message"><?php _e('Message', 'prmtec'); ?> *</label>
                                <textarea id="message" name="message" rows="6" required></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="project-details"><?php _e('Project Details', 'prmtec'); ?></label>
                                <textarea id="project-details" name="project-details" rows="4" placeholder="<?php _e('Please provide details about your project requirements, materials, quantities, and specifications.', 'prmtec'); ?>"></textarea>
                            </div>
                            
                            <div class="form-group checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="privacy" required>
                                    <span class="checkmark"></span>
                                    <?php _e('I agree to the privacy policy and terms of service', 'prmtec'); ?>
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-large">
                                <i class="fas fa-paper-plane"></i>
                                <?php _e('Send Message', 'prmtec'); ?>
                            </button>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </section>
            
            <!-- 회사 위치 -->
            <section class="location-section">
                <div class="location-content">
                    <h2><?php _e('Our Location', 'prmtec'); ?></h2>
                    <div class="location-info">
                        <div class="location-details">
                            <h3><?php _e('PRIMEDITECH Headquarters', 'prmtec'); ?></h3>
                            <p><?php _e('Located in the heart of Korea\'s precision manufacturing district', 'prmtec'); ?></p>
                            <div class="location-features">
                                <div class="feature-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span><?php _e('Strategic location for global shipping', 'prmtec'); ?></span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-industry"></i>
                                    <span><?php _e('State-of-the-art manufacturing facilities', 'prmtec'); ?></span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span><?php _e('Expert engineering team', 'prmtec'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="location-map">
                            <div class="map-placeholder">
                                <i class="fas fa-map"></i>
                                <p><?php _e('Interactive Map', 'prmtec'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- FAQ 섹션 -->
            <section class="faq-section">
                <div class="section-header">
                    <h2 class="section-title"><?php _e('Frequently Asked Questions', 'prmtec'); ?></h2>
                    <p class="section-subtitle">
                        <?php _e('Common questions about our precision manufacturing services', 'prmtec'); ?>
                    </p>
                </div>
                
                <div class="faq-grid">
                    <div class="faq-item">
                        <h3 class="faq-question"><?php _e('What is your typical lead time?', 'prmtec'); ?></h3>
                        <p class="faq-answer">
                            <?php _e('Our standard lead time is 5-7 business days for most projects, depending on complexity and quantity. Rush orders can be accommodated with shorter lead times.', 'prmtec'); ?>
                        </p>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="faq-question"><?php _e('What precision levels can you achieve?', 'prmtec'); ?></h3>
                        <p class="faq-answer">
                            <?php _e('We can achieve ±0.001mm precision using our advanced 5-axis CNC equipment and experienced machinists.', 'prmtec'); ?>
                        </p>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="fa3-question"><?php _e('Do you provide material recommendations?', 'prmtec'); ?></h3>
                        <p class="faq-answer">
                            <?php _e('Yes, our engineering team can provide material recommendations based on your application requirements and performance criteria.', 'prmtec'); ?>
                        </p>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="faq-question"><?php _e('What quality certifications do you have?', 'prmtec'); ?></h3>
                        <p class="faq-answer">
                            <?php _e('We maintain ISO 9001:2015 certification and follow strict quality control procedures throughout our manufacturing process.', 'prmtec'); ?>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>
