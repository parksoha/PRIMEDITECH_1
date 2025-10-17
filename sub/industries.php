<?php
/**
 * Template Name: Industries Page
 * 
 * @package PRIMEDITECH
 */

get_header(); ?>

    <!-- 서브 네비게이션 -->
    <section class="sub-navigation">
        <div class="container">
            <nav class="sub-nav">
                <ul class="sub-nav-menu">
                    <li><a href="#medical" class="sub-nav-link active" data-section="medical"><?php _e('Medical', 'prmtec'); ?></a></li>
                    <li><a href="#industrial" class="sub-nav-link" data-section="industrial"><?php _e('Industrial', 'prmtec'); ?></a></li>
                    <li><a href="#robotics" class="sub-nav-link" data-section="robotics"><?php _e('Robotics', 'prmtec'); ?></a></li>
                    <li><a href="#aerospace" class="sub-nav-link" data-section="aerospace"><?php _e('Aerospace Components', 'prmtec'); ?></a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Medical 섹션 -->
    <section id="medical" class="industries-section active">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Medical Industry', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Precision components for life-saving medical devices and equipment', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="industry-overview">
                <div class="overview-content">
                    <div class="overview-text">
                        <h3><?php _e('Medical Device Manufacturing', 'prmtec'); ?></h3>
                        <p><?php _e('We specialize in manufacturing precision components for medical devices that require the highest levels of accuracy and reliability. Our medical-grade components are used in surgical instruments, diagnostic equipment, and implantable devices.', 'prmtec'); ?></p>
                        
                        <div class="key-features">
                            <h4><?php _e('Key Features:', 'prmtec'); ?></h4>
                            <ul>
                                <li><?php _e('Biocompatible materials (Titanium, Stainless Steel 316L)', 'prmtec'); ?></li>
                                <li><?php _e('Ultra-precise tolerances (±0.001mm)', 'prmtec'); ?></li>
                                <li><?php _e('Clean room manufacturing environment', 'prmtec'); ?></li>
                                <li><?php _e('FDA and CE compliance', 'prmtec'); ?></li>
                                <li><?php _e('Traceability and documentation', 'prmtec'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image">
                        <div class="image-placeholder">
                            <i class="fas fa-heartbeat"></i>
                            <span><?php _e('Medical Components', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="applications-grid">
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h4><?php _e('Surgical Instruments', 'prmtec'); ?></h4>
                    <p><?php _e('Precision-machined surgical tools and instruments for minimally invasive procedures.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-x-ray"></i>
                    </div>
                    <h4><?php _e('Diagnostic Equipment', 'prmtec'); ?></h4>
                    <p><?php _e('Critical components for MRI, CT, and X-ray imaging systems.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-prosthetic-hand"></i>
                    </div>
                    <h4><?php _e('Implantable Devices', 'prmtec'); ?></h4>
                    <p><?php _e('Biocompatible components for pacemakers, stents, and orthopedic implants.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h4><?php _e('Laboratory Equipment', 'prmtec'); ?></h4>
                    <p><?php _e('High-precision parts for analytical instruments and laboratory automation.', 'prmtec'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industrial 섹션 -->
    <section id="industrial" class="industries-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Industrial Applications', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Robust components for demanding industrial environments', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="industry-overview">
                <div class="overview-content">
                    <div class="overview-text">
                        <h3><?php _e('Industrial Manufacturing', 'prmtec'); ?></h3>
                        <p><?php _e('Our industrial components are designed to withstand harsh operating conditions while maintaining precision and reliability. We serve various industrial sectors with custom-engineered solutions.', 'prmtec'); ?></p>
                        
                        <div class="key-features">
                            <h4><?php _e('Key Features:', 'prmtec'); ?></h4>
                            <ul>
                                <li><?php _e('High-strength materials (Tool Steel, Inconel, Hastelloy)', 'prmtec'); ?></li>
                                <li><?php _e('Corrosion-resistant coatings', 'prmtec'); ?></li>
                                <li><?php _e('High-temperature applications', 'prmtec'); ?></li>
                                <li><?php _e('Heavy-duty construction', 'prmtec'); ?></li>
                                <li><?php _e('Custom engineering solutions', 'prmtec'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image">
                        <div class="image-placeholder">
                            <i class="fas fa-industry"></i>
                            <span><?php _e('Industrial Components', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="applications-grid">
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h4><?php _e('Manufacturing Equipment', 'prmtec'); ?></h4>
                    <p><?php _e('Precision parts for CNC machines, presses, and production equipment.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-oil-can"></i>
                    </div>
                    <h4><?php _e('Oil & Gas', 'prmtec'); ?></h4>
                    <p><?php _e('Corrosion-resistant components for drilling and refining operations.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h4><?php _e('Power Generation', 'prmtec'); ?></h4>
                    <p><?php _e('High-temperature components for turbines and power generation systems.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h4><?php _e('Automotive', 'prmtec'); ?></h4>
                    <p><?php _e('Precision components for engines, transmissions, and braking systems.', 'prmtec'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Robotics 섹션 -->
    <section id="robotics" class="industries-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Robotics & Automation', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Precision components for next-generation robotic systems', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="industry-overview">
                <div class="overview-content">
                    <div class="overview-text">
                        <h3><?php _e('Robotic Systems', 'prmtec'); ?></h3>
                        <p><?php _e('We manufacture critical components for robotic systems that require exceptional precision and reliability. Our components enable advanced automation in various industries.', 'prmtec'); ?></p>
                        
                        <div class="key-features">
                            <h4><?php _e('Key Features:', 'prmtec'); ?></h4>
                            <ul>
                                <li><?php _e('Ultra-lightweight materials (Aluminum, Carbon Fiber)', 'prmtec'); ?></li>
                                <li><?php _e('High-precision bearings and joints', 'prmtec'); ?></li>
                                <li><?php _e('Low-friction surfaces', 'prmtec'); ?></li>
                                <li><?php _e('Modular design capabilities', 'prmtec'); ?></li>
                                <li><?php _e('Real-time quality monitoring', 'prmtec'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image">
                        <div class="image-placeholder">
                            <i class="fas fa-robot"></i>
                            <span><?php _e('Robotic Components', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="applications-grid">
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-hand-paper"></i>
                    </div>
                    <h4><?php _e('Robotic Arms', 'prmtec'); ?></h4>
                    <p><?php _e('Precision joints, actuators, and end-effectors for industrial robots.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4><?php _e('Vision Systems', 'prmtec'); ?></h4>
                    <p><?php _e('Optical components and housings for machine vision applications.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-walking"></i>
                    </div>
                    <h4><?php _e('Mobile Robots', 'prmtec'); ?></h4>
                    <p><?php _e('Lightweight structural components for autonomous mobile platforms.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h4><?php _e('Sensor Integration', 'prmtec'); ?></h4>
                    <p><?php _e('Precision housings and mounts for various sensor technologies.', 'prmtec'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Aerospace Components 섹션 -->
    <section id="aerospace" class="industries-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Aerospace Components', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Mission-critical components for aerospace and defense applications', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="industry-overview">
                <div class="overview-content">
                    <div class="overview-text">
                        <h3><?php _e('Aerospace Manufacturing', 'prmtec'); ?></h3>
                        <p><?php _e('We manufacture aerospace-grade components that meet the most stringent requirements for safety, reliability, and performance. Our components are used in commercial aircraft, defense systems, and space applications.', 'prmtec'); ?></p>
                        
                        <div class="key-features">
                            <h4><?php _e('Key Features:', 'prmtec'); ?></h4>
                            <ul>
                                <li><?php _e('Aerospace-grade materials (Titanium, Inconel, Aluminum)', 'prmtec'); ?></li>
                                <li><?php _e('AS9100D certification', 'prmtec'); ?></li>
                                <li><?php _e('Non-destructive testing (NDT)', 'prmtec'); ?></li>
                                <li><?php _e('Full traceability documentation', 'prmtec'); ?></li>
                                <li><?php _e('Environmental testing capabilities', 'prmtec'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image">
                        <div class="image-placeholder">
                            <i class="fas fa-plane"></i>
                            <span><?php _e('Aerospace Components', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="applications-grid">
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h4><?php _e('Commercial Aircraft', 'prmtec'); ?></h4>
                    <p><?php _e('Structural components, fasteners, and systems for commercial aviation.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h4><?php _e('Space Systems', 'prmtec'); ?></h4>
                    <p><?php _e('Critical components for satellites, launch vehicles, and space exploration.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4><?php _e('Defense Systems', 'prmtec'); ?></h4>
                    <p><?php _e('Mission-critical components for military aircraft and defense applications.', 'prmtec'); ?></p>
                </div>
                
                <div class="application-item">
                    <div class="app-icon">
                        <i class="fas fa-helicopter"></i>
                    </div>
                    <h4><?php _e('Helicopter Systems', 'prmtec'); ?></h4>
                    <p><?php _e('Precision components for rotor systems and flight control mechanisms.', 'prmtec'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Statistics -->
    <section class="industry-stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">15+</div>
                    <div class="stat-label"><?php _e('Years in Medical', 'prmtec'); ?></div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label"><?php _e('Industrial Projects', 'prmtec'); ?></div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">200+</div>
                    <div class="stat-label"><?php _e('Robotic Systems', 'prmtec'); ?></div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label"><?php _e('Aerospace Programs', 'prmtec'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries 페이지 JavaScript -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // 서브 네비게이션 기능
        const subNavLinks = document.querySelectorAll('.sub-nav-link');
        const industriesSections = document.querySelectorAll('.industries-section');
        
        // 서브 네비게이션 클릭 이벤트
        subNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetSection = this.getAttribute('data-section');
                
                // 활성 클래스 업데이트
                subNavLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
                
                // 섹션 표시/숨김
                industriesSections.forEach(section => {
                    section.classList.remove('active');
                    if (section.id === targetSection) {
                        section.classList.add('active');
                    }
                });
                
                // 부드러운 스크롤
                const targetElement = document.getElementById(targetSection);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // 스크롤에 따른 자동 네비게이션 업데이트
        let isScrolling = false;
        window.addEventListener('scroll', function() {
            if (isScrolling) return;
            
            const scrollPosition = window.scrollY + 200; // 헤더 높이 고려
            
            industriesSections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    const sectionId = section.id;
                    const correspondingLink = document.querySelector(`[data-section="${sectionId}"]`);
                    
                    if (correspondingLink && !correspondingLink.classList.contains('active')) {
                        subNavLinks.forEach(l => l.classList.remove('active'));
                        correspondingLink.classList.add('active');
                        
                        industriesSections.forEach(s => s.classList.remove('active'));
                        section.classList.add('active');
                    }
                }
            });
        });
        
        // 초기 로드 시 첫 번째 섹션 활성화
        if (industriesSections.length > 0) {
            industriesSections.forEach((section, index) => {
                if (index === 0) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
        }
    });
    </script>

<?php get_footer(); ?>

