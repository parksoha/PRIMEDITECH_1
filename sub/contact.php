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
                <p><?php _e('서울특별시 강남구 테헤란로 123<br>프리메디텍 빌딩 10층', 'prmtec'); ?></p>
            </div>
            
            <div class="contact-info-card">
                <div class="info-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3><?php _e('Call Us', 'prmtec'); ?></h3>
                <p>
                    <a href="tel:+82-2-1234-5678">+82-2-1234-5678</a><br>
                    <a href="tel:+82-2-1234-5679">+82-2-1234-5679</a><br>
                    <span class="info-note"><?php _e('Mon-Fri: 9:00-18:00', 'prmtec'); ?></span>
                </p>
            </div>
            
            <div class="contact-info-card">
                <div class="info-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3><?php _e('Email Us', 'prmtec'); ?></h3>
                <p>
                    <a href="mailto:info@primeditech.com">info@primeditech.com</a><br>
                    <a href="mailto:support@primeditech.com">support@primeditech.com</a><br>
                    <a href="mailto:sales@primeditech.com">sales@primeditech.com</a>
                </p>
            </div>
            
            <div class="contact-info-card">
                <div class="info-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3><?php _e('Business Hours', 'prmtec'); ?></h3>
                <p>
                    <?php _e('Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 1:00 PM<br>Sunday: Closed<br><br>긴급상황: 24시간 대응', 'prmtec'); ?>
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
                                <p>emergency@primeditech.com</p>
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
                    <p><?php _e('서울특별시 강남구 테헤란로 123<br>프리메디텍 빌딩 10층', 'prmtec'); ?></p>
                    <p><?php _e('지하철: 강남역 2호선, 9호선<br>버스: 146, 240, 341, 360', 'prmtec'); ?></p>
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
                <a href="mailto:info@primeditech.com" class="btn btn-secondary">
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
    
    // 폼 제출 처리
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // 폼 유효성 검사
            if (validateForm()) {
                submitForm();
            }
        });
    }
    
    // 실시간 유효성 검사
    const formFields = document.querySelectorAll('input, select, textarea');
    formFields.forEach(field => {
        field.addEventListener('blur', function() {
            validateField(this);
        });
        
        field.addEventListener('input', function() {
            if (this.classList.contains('error')) {
                validateField(this);
            }
        });
    });
});

function validateForm() {
    const requiredFields = document.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!validateField(field)) {
            isValid = false;
        }
    });
    
    // 이메일 형식 검사
    const emailField = document.getElementById('email');
    if (emailField && emailField.value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailField.value)) {
            emailField.classList.add('error');
            showFieldError(emailField, '올바른 이메일 형식을 입력해주세요.');
            isValid = false;
        }
    }
    
    // 전화번호 형식 검사
    const phoneField = document.getElementById('phone');
    if (phoneField && phoneField.value) {
        const phoneRegex = /^[\d\-\+\(\)\s]+$/;
        if (!phoneRegex.test(phoneField.value)) {
            phoneField.classList.add('error');
            showFieldError(phoneField, '올바른 전화번호 형식을 입력해주세요.');
            isValid = false;
        }
    }
    
    return isValid;
}

function validateField(field) {
    const value = field.value.trim();
    const isRequired = field.hasAttribute('required');
    
    // 에러 메시지 제거
    removeFieldError(field);
    
    if (isRequired && !value) {
        field.classList.add('error');
        showFieldError(field, '필수 입력 항목입니다.');
        return false;
    }
    
    if (value) {
        field.classList.remove('error');
    }
    
    return true;
}

function showFieldError(field, message) {
    removeFieldError(field);
    
    const errorDiv = document.createElement('div');
    errorDiv.className = 'field-error';
    errorDiv.textContent = message;
    errorDiv.style.color = '#e74c3c';
    errorDiv.style.fontSize = '0.85rem';
    errorDiv.style.marginTop = '5px';
    
    field.parentNode.appendChild(errorDiv);
}

function removeFieldError(field) {
    const existingError = field.parentNode.querySelector('.field-error');
    if (existingError) {
        existingError.remove();
    }
}

function submitForm() {
    const submitBtn = document.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // 로딩 상태
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> 전송 중...';
    submitBtn.disabled = true;
    
    // 폼 데이터 수집
    const formData = new FormData(document.getElementById('contact-form'));
    formData.append('action', 'submit_contact_form');
    formData.append('nonce', '<?php echo wp_create_nonce("contact_form_nonce"); ?>');
    
    // AJAX 요청
    fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showSuccessMessage('메시지가 성공적으로 전송되었습니다!');
            document.getElementById('contact-form').reset();
        } else {
            showErrorMessage(data.data || '전송 중 오류가 발생했습니다.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showErrorMessage('네트워크 오류가 발생했습니다. 다시 시도해주세요.');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
}

function showSuccessMessage(message) {
    showNotification(message, 'success');
}

function showErrorMessage(message) {
    showNotification(message, 'error');
}

function showNotification(message, type) {
    // 기존 알림 제거
    const existingNotification = document.querySelector('.form-notification');
    if (existingNotification) {
        existingNotification.remove();
    }
    
    const notification = document.createElement('div');
    notification.className = `form-notification ${type}`;
    notification.innerHTML = `
        <div style="
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? '#009245' : '#e74c3c'};
            color: white;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            z-index: 10000;
            font-weight: 500;
            max-width: 400px;
            animation: slideIn 0.3s ease;
        ">
            <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}" style="margin-right: 10px;"></i>
            ${message}
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // 5초 후 자동 제거
    setTimeout(() => {
        if (notification.parentNode) {
            notification.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.remove();
                }
            }, 300);
        }
    }, 5000);
}

// CSS 애니메이션 추가
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
    
    .field-error {
        animation: fadeIn 0.3s ease;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-5px); }
        to { opacity: 1; transform: translateY(0); }
    }
`;
document.head.appendChild(style);
</script>

<?php get_footer(); ?>
