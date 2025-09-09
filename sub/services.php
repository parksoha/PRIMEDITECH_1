<?php get_header(); ?>

<!-- 페이지 헤더 -->
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h1 class="page-title"><?php _e('Our Services', 'prmtec'); ?></h1>
            <p class="page-subtitle">
                <?php _e('Comprehensive medical technology solutions tailored to your needs', 'prmtec'); ?>
            </p>
        </div>
    </div>
</section>

<!-- 서비스 개요 섹션 -->
<section class="services-overview">
    <div class="container">
        <div class="overview-content">
            <div class="overview-text">
                <h2><?php _e('Comprehensive Healthcare Solutions', 'prmtec'); ?></h2>
                <p>
                    <?php _e('At PRIMEDITECH, we offer a complete range of medical technology services designed to enhance patient care, improve operational efficiency, and drive innovation in healthcare delivery. Our solutions are backed by cutting-edge technology and years of industry expertise.', 'prmtec'); ?>
                </p>
                <p>
                    <?php _e('From advanced medical devices to comprehensive training programs, we provide everything you need to transform your healthcare practice and deliver exceptional patient outcomes.', 'prmtec'); ?>
                </p>
            </div>
            <div class="overview-image">
                <div class="image-placeholder">
                    <i class="fas fa-stethoscope"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 주요 서비스 섹션 -->
<section class="main-services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('Our Main Services', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('Specialized solutions for every aspect of healthcare', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card detailed">
                <div class="service-icon">
                    <i class="fas fa-x-ray"></i>
                </div>
                <h3 class="service-title"><?php _e('Medical Imaging Systems', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('State-of-the-art imaging technology including MRI, CT, ultrasound, and X-ray systems with advanced AI-powered diagnostic capabilities.', 'prmtec'); ?>
                </p>
                <ul class="service-features">
                    <li><?php _e('High-resolution imaging', 'prmtec'); ?></li>
                    <li><?php _e('AI-powered diagnostics', 'prmtec'); ?></li>
                    <li><?php _e('3D reconstruction', 'prmtec'); ?></li>
                    <li><?php _e('Real-time analysis', 'prmtec'); ?></li>
                </ul>
                <a href="<?php echo home_url('/services/medical-imaging/'); ?>" class="service-link">
                    <?php _e('Learn More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="service-card detailed">
                <div class="service-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3 class="service-title"><?php _e('Patient Monitoring', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('Comprehensive patient monitoring solutions for critical care, intensive care units, and remote patient management.', 'prmtec'); ?>
                </p>
                <ul class="service-features">
                    <li><?php _e('Real-time vital signs', 'prmtec'); ?></li>
                    <li><?php _e('Remote monitoring', 'prmtec'); ?></li>
                    <li><?php _e('Alert systems', 'prmtec'); ?></li>
                    <li><?php _e('Data analytics', 'prmtec'); ?></li>
                </ul>
                <a href="<?php echo home_url('/services/patient-monitoring/'); ?>" class="service-link">
                    <?php _e('Learn More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="service-card detailed">
                <div class="service-icon">
                    <i class="fas fa-microscope"></i>
                </div>
                <h3 class="service-title"><?php _e('Laboratory Equipment', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('Precision laboratory instruments and diagnostic equipment for research, clinical testing, and quality control.', 'prmtec'); ?>
                </p>
                <ul class="service-features">
                    <li><?php _e('Automated analyzers', 'prmtec'); ?></li>
                    <li><?php _e('Molecular diagnostics', 'prmtec'); ?></li>
                    <li><?php _e('Quality control systems', 'prmtec'); ?></li>
                    <li><?php _e('Data management', 'prmtec'); ?></li>
                </ul>
                <a href="<?php echo home_url('/services/laboratory-equipment/'); ?>" class="service-link">
                    <?php _e('Learn More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="service-card detailed">
                <div class="service-icon">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3 class="service-title"><?php _e('Professional Training', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('Comprehensive training programs for healthcare professionals on our medical devices and technologies.', 'prmtec'); ?>
                </p>
                <ul class="service-features">
                    <li><?php _e('Hands-on training', 'prmtec'); ?></li>
                    <li><?php _e('Certification programs', 'prmtec'); ?></li>
                    <li><?php _e('Online learning', 'prmtec'); ?></li>
                    <li><?php _e('Ongoing support', 'prmtec'); ?></li>
                </ul>
                <a href="<?php echo home_url('/services/training/'); ?>" class="service-link">
                    <?php _e('Learn More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="service-card detailed">
                <div class="service-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="service-title"><?php _e('Technical Support', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('Round-the-clock technical support and maintenance services to ensure optimal performance of your equipment.', 'prmtec'); ?>
                </p>
                <ul class="service-features">
                    <li><?php _e('24/7 support', 'prmtec'); ?></li>
                    <li><?php _e('Preventive maintenance', 'prmtec'); ?></li>
                    <li><?php _e('Remote diagnostics', 'prmtec'); ?></li>
                    <li><?php _e('Parts and service', 'prmtec'); ?></li>
                </ul>
                <a href="<?php echo home_url('/services/support/'); ?>" class="service-link">
                    <?php _e('Learn More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="service-card detailed">
                <div class="service-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3 class="service-title"><?php _e('Custom Solutions', 'prmtec'); ?></h3>
                <p class="service-description">
                    <?php _e('Tailored medical technology solutions designed to meet your specific requirements and operational needs.', 'prmtec'); ?>
                </p>
                <ul class="service-features">
                    <li><?php _e('Custom development', 'prmtec'); ?></li>
                    <li><?php _e('System integration', 'prmtec'); ?></li>
                    <li><?php _e('Workflow optimization', 'prmtec'); ?></li>
                    <li><?php _e('Scalable solutions', 'prmtec'); ?></li>
                </ul>
                <a href="<?php echo home_url('/services/custom-solutions/'); ?>" class="service-link">
                    <?php _e('Learn More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 서비스 프로세스 섹션 -->
<section class="service-process">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('Our Service Process', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('How we deliver exceptional results', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3><?php _e('Consultation', 'prmtec'); ?></h3>
                    <p><?php _e('We begin with a thorough consultation to understand your specific needs, challenges, and objectives.', 'prmtec'); ?></p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3><?php _e('Solution Design', 'prmtec'); ?></h3>
                    <p><?php _e('Our experts design a customized solution that perfectly fits your requirements and operational environment.', 'prmtec'); ?></p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3><?php _e('Implementation', 'prmtec'); ?></h3>
                    <p><?php _e('We handle the complete implementation process, ensuring minimal disruption to your operations.', 'prmtec'); ?></p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3><?php _e('Training & Support', 'prmtec'); ?></h3>
                    <p><?php _e('Comprehensive training and ongoing support ensure your team can maximize the benefits of our solutions.', 'prmtec'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 산업별 솔루션 섹션 -->
<section class="industry-solutions">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('Industry Solutions', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('Specialized solutions for different healthcare sectors', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="industry-grid">
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-hospital"></i>
                </div>
                <h3><?php _e('Hospitals', 'prmtec'); ?></h3>
                <p><?php _e('Comprehensive medical technology solutions for large hospital systems and medical centers.', 'prmtec'); ?></p>
                <ul>
                    <li><?php _e('Integrated systems', 'prmtec'); ?></li>
                    <li><?php _e('Scalable solutions', 'prmtec'); ?></li>
                    <li><?php _e('Enterprise support', 'prmtec'); ?></li>
                </ul>
            </div>
            
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-clinic-medical"></i>
                </div>
                <h3><?php _e('Clinics', 'prmtec'); ?></h3>
                <p><?php _e('Efficient and cost-effective solutions designed for outpatient clinics and medical practices.', 'prmtec'); ?></p>
                <ul>
                    <li><?php _e('Compact systems', 'prmtec'); ?></li>
                    <li><?php _e('Easy operation', 'prmtec'); ?></li>
                    <li><?php _e('Quick setup', 'prmtec'); ?></li>
                </ul>
            </div>
            
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-flask"></i>
                </div>
                <h3><?php _e('Research Labs', 'prmtec'); ?></h3>
                <p><?php _e('Advanced research equipment and analytical instruments for medical research institutions.', 'prmtec'); ?></p>
                <ul>
                    <li><?php _e('Research-grade equipment', 'prmtec'); ?></li>
                    <li><?php _e('Data analysis tools', 'prmtec'); ?></li>
                    <li><?php _e('Custom configurations', 'prmtec'); ?></li>
                </ul>
            </div>
            
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-ambulance"></i>
                </div>
                <h3><?php _e('Emergency Care', 'prmtec'); ?></h3>
                <p><?php _e('Rapid-response medical technology solutions for emergency departments and urgent care facilities.', 'prmtec'); ?></p>
                <ul>
                    <li><?php _e('Rapid deployment', 'prmtec'); ?></li>
                    <li><?php _e('Portable systems', 'prmtec'); ?></li>
                    <li><?php _e('Emergency protocols', 'prmtec'); ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 고객 사례 섹션 -->
<section class="case-studies">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php _e('Success Stories', 'prmtec'); ?></h2>
            <p class="section-subtitle">
                <?php _e('Real results from our clients', 'prmtec'); ?>
            </p>
        </div>
        
        <div class="case-studies-grid">
            <div class="case-study">
                <div class="case-image">
                    <i class="fas fa-hospital"></i>
                </div>
                <div class="case-content">
                    <h3><?php _e('Seoul Medical Center', 'prmtec'); ?></h3>
                    <p class="case-description">
                        <?php _e('Implemented our advanced imaging system, resulting in 40% faster diagnosis times and improved patient outcomes.', 'prmtec'); ?>
                    </p>
                    <div class="case-results">
                        <div class="result-item">
                            <span class="result-number">40%</span>
                            <span class="result-label"><?php _e('Faster Diagnosis', 'prmtec'); ?></span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">95%</span>
                            <span class="result-label"><?php _e('Accuracy Rate', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="case-study">
                <div class="case-image">
                    <i class="fas fa-clinic-medical"></i>
                </div>
                <div class="case-content">
                    <h3><?php _e('Global Health Clinic', 'prmtec'); ?></h3>
                    <p class="case-description">
                        <?php _e('Deployed our patient monitoring system, enabling remote patient care and reducing readmission rates by 30%.', 'prmtec'); ?>
                    </p>
                    <div class="case-results">
                        <div class="result-item">
                            <span class="result-number">30%</span>
                            <span class="result-label"><?php _e('Reduced Readmissions', 'prmtec'); ?></span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">24/7</span>
                            <span class="result-label"><?php _e('Remote Monitoring', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA 섹션 -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2><?php _e('Ready to Transform Your Healthcare Practice?', 'prmtec'); ?></h2>
            <p><?php _e('Contact us today to discuss your specific needs and discover how our solutions can benefit your organization.', 'prmtec'); ?></p>
            <div class="cta-buttons">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary">
                    <?php _e('Get a Quote', 'prmtec'); ?>
                </a>
                <a href="<?php echo home_url('/products/'); ?>" class="btn btn-secondary">
                    <?php _e('View Products', 'prmtec'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
