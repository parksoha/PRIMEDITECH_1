<?php get_header(); ?>

<!-- 페이지 헤더 -->
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h1 class="page-title"><?php _e('Contact Us', 'prmtec'); ?></h1>
            <p class="page-subtitle">
                <?php _e('Get in touch with our team of experts', 'prmtec'); ?>
            </p>
        </div>
    </div>
</section>

<!-- 연락처 정보 섹션 -->
<section class="contact-info-section">
    <div class="container">
        <div class="contact-info-grid">
            <div class="contact-info-card">
                <div class="info-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3><?php _e('Visit Our Office', 'prmtec'); ?></h3>
                <p><?php _e('123 Medical Tech Street<br>Seoul, Korea 12345', 'prmtec'); ?></p>
            </div>
            
            <div class="contact-info-card">
                <div class="info-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3><?php _e('Call Us', 'prmtec'); ?></h3>
                <p>
                    <a href="tel:+82-2-1234-5678">+82-2-1234-5678</a><br>
                    <span class="info-note"><?php _e('Mon-Fri: 9:00-18:00', 'prmtec'); ?></span>
                </p>
            </div>
            
            <div class="contact-info-card">
                <div class="info-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3><?php _e('Email Us', 'prmtec'); ?></h3>
                <p>
                    <a href="mailto:info@prmtec.com">info@prmtec.com</a><br>
                    <a href="mailto:support@prmtec.com">support@prmtec.com</a>
                </p>
            </div>
            
            <div class="contact-info-card">
                <div class="info-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3><?php _e('Business Hours', 'prmtec'); ?></h3>
                <p>
                    <?php _e('Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 1:00 PM<br>Sunday: Closed', 'prmtec'); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 문의 폼 섹션 -->
<section class="contact-form-section">
    <div class="container">
        <div class="contact-form-content">
            <div class="form-section">
                <div class="form-header">
                    <h2><?php _e('Send us a Message', 'prmtec'); ?></h2>
                    <p><?php _e('Fill out the form below and we\'ll get back to you as soon as possible.', 'prmtec'); ?></p>
                </div>
                
                <form class="contact-form" id="contact-form" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name"><?php _e('First Name', 'prmtec'); ?> <span class="required">*</span></label>
                            <input type="text" id="first-name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name"><?php _e('Last Name', 'prmtec'); ?> <span class="required">*</span></label>
                            <input type="text" id="last-name" name="last_name" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email"><?php _e('Email Address', 'prmtec'); ?> <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone"><?php _e('Phone Number', 'prmtec'); ?></label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="company"><?php _e('Company/Organization', 'prmtec'); ?></label>
                        <input type="text" id="company" name="company">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject"><?php _e('Subject', 'prmtec'); ?> <span class="required">*</span></label>
                        <select id="subject" name="subject" required>
                            <option value=""><?php _e('Please select a subject', 'prmtec'); ?></option>
                            <option value="general"><?php _e('General Inquiry', 'prmtec'); ?></option>
                            <option value="products"><?php _e('Product Information', 'prmtec'); ?></option>
                            <option value="services"><?php _e('Service Inquiry', 'prmtec'); ?></option>
                            <option value="support"><?php _e('Technical Support', 'prmtec'); ?></option>
                            <option value="partnership"><?php _e('Partnership Opportunity', 'prmtec'); ?></option>
                            <option value="other"><?php _e('Other', 'prmtec'); ?></option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message"><?php _e('Message', 'prmtec'); ?> <span class="required">*</span></label>
                        <textarea id="message" name="message" rows="6" required placeholder="<?php _e('Please describe your inquiry in detail...', 'prmtec'); ?>"></textarea>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="privacy_policy" required>
                            <span class="checkmark"></span>
                            <?php _e('I agree to the', 'prmtec'); ?> <a href="<?php echo home_url('/privacy-policy/'); ?>" target="_blank"><?php _e('Privacy Policy', 'prmtec'); ?></a>
                        </label>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="newsletter">
                            <span class="checkmark"></span>
                            <?php _e('Subscribe to our newsletter for updates and news', 'prmtec'); ?>
                        </label>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i>
                            <?php _e('Send Message', 'prmtec'); ?>
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            <i class="fas fa-undo"></i>
                            <?php _e('Reset Form', 'prmtec'); ?>
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="contact-details-section">
                <div class="contact-details">
                    <h3><?php _e('Why Choose PRIMEDITECH?', 'prmtec'); ?></h3>
                    <ul class="benefits-list">
                        <li>
                            <i class="fas fa-check"></i>
                            <span><?php _e('15+ years of industry experience', 'prmtec'); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span><?php _e('500+ satisfied clients worldwide', 'prmtec'); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span><?php _e('24/7 technical support', 'prmtec'); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span><?php _e('Certified quality standards', 'prmtec'); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span><?php _e('Custom solutions available', 'prmtec'); ?></span>
                        </li>
                    </ul>
                </div>
                
                <div class="emergency-contact">
                    <h3><?php _e('Emergency Support', 'prmtec'); ?></h3>
                    <p><?php _e('For urgent technical issues or equipment failures:', 'prmtec'); ?></p>
                    <div class="emergency-info">
                        <div class="emergency-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong><?php _e('Emergency Hotline', 'prmtec'); ?></strong>
                                <p>+82-2-1234-9999</p>
                            </div>
                        </div>
                        <div class="emergency-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong><?php _e('Emergency Email', 'prmtec'); ?></strong>
                                <p>emergency@prmtec.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 지도 섹션 -->
<section class="map-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('Find Us', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('Visit our headquarters in Seoul', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="map-container">
            <div class="map-placeholder">
                <i class="fas fa-map-marked-alt"></i>
                <p><?php _e('Interactive Map Coming Soon', 'prmtec'); ?></p>
                <div class="map-info">
                    <h4><?php _e('PRIMEDITECH Headquarters', 'prmtec'); ?></h4>
                    <p><?php _e('123 Medical Tech Street, Seoul, Korea 12345', 'prmtec'); ?></p>
                    <p><?php _e('Nearest Subway: Gangnam Station (Line 2, 9)', 'prmtec'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ 섹션 -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('Frequently Asked Questions', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('Quick answers to common questions', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    <h3><?php _e('How quickly can you respond to inquiries?', 'prmtec'); ?></h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p><?php _e('We typically respond to all inquiries within 24 hours during business days. For urgent matters, please call our emergency hotline.', 'prmtec'); ?></p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3><?php _e('Do you provide international shipping?', 'prmtec'); ?></h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p><?php _e('Yes, we ship our products worldwide to over 50 countries. Shipping costs and delivery times vary by location.', 'prmtec'); ?></p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3><?php _e('What kind of support do you offer?', 'prmtec'); ?></h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p><?php _e('We provide comprehensive support including installation, training, maintenance, and 24/7 technical support for all our products.', 'prmtec'); ?></p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3><?php _e('Can you customize solutions for our specific needs?', 'prmtec'); ?></h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p><?php _e('Absolutely! We specialize in creating custom medical technology solutions tailored to your specific requirements and operational environment.', 'prmtec'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA 섹션 -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2><?php _e('Ready to Get Started?', 'prmtec'); ?></h2>
            <p><?php _e('Contact us today to discuss your medical technology needs and discover how we can help transform your healthcare practice.', 'prmtec'); ?></p>
            <div class="cta-buttons">
                <a href="tel:+82-2-1234-5678" class="btn btn-primary">
                    <i class="fas fa-phone"></i>
                    <?php _e('Call Now', 'prmtec'); ?>
                </a>
                <a href="mailto:info@prmtec.com" class="btn btn-secondary">
                    <i class="fas fa-envelope"></i>
                    <?php _e('Email Us', 'prmtec'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// FAQ 토글 기능
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-question i');
        
        question.addEventListener('click', function() {
            const isOpen = item.classList.contains('active');
            
            // 모든 FAQ 아이템 닫기
            faqItems.forEach(faqItem => {
                faqItem.classList.remove('active');
                faqItem.querySelector('.faq-answer').style.maxHeight = null;
                faqItem.querySelector('.faq-question i').style.transform = 'rotate(0deg)';
            });
            
            // 클릭한 아이템이 닫혀있었다면 열기
            if (!isOpen) {
                item.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});

// 폼 제출 처리
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // 폼 유효성 검사
    if (validateForm()) {
        // 폼 제출 로직 (실제 구현 시 WordPress AJAX 사용)
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> 전송 중...';
        submitBtn.disabled = true;
        
        // 시뮬레이션 (실제로는 AJAX 요청)
        setTimeout(() => {
            alert('메시지가 성공적으로 전송되었습니다!');
            this.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 2000);
    }
});

function validateForm() {
    const requiredFields = document.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            field.classList.add('error');
            isValid = false;
        } else {
            field.classList.remove('error');
        }
    });
    
    return isValid;
}
</script>

<?php get_footer(); ?>
