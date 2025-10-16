<?php
/**
 * Template Name: Services Page
 * 
 * @package PRIMEDITECH
 */

get_header(); ?>

    <!-- 서브 네비게이션 -->
    <section class="sub-navigation">
        <div class="container">
            <nav class="sub-nav">
                <ul class="sub-nav-menu">
                    <li><a href="#process" class="sub-nav-link active" data-section="process"><?php _e('Detailed Process', 'prmtec'); ?></a></li>
                    <li><a href="#cnc" class="sub-nav-link" data-section="cnc"><?php _e('CNC Processing', 'prmtec'); ?></a></li>
                    <li><a href="#surface" class="sub-nav-link" data-section="surface"><?php _e('Surface Treatment', 'prmtec'); ?></a></li>
                    <li><a href="#quality" class="sub-nav-link" data-section="quality"><?php _e('Quality Inspection', 'prmtec'); ?></a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Detailed Process 섹션 -->
    <section id="process" class="services-section active">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Detailed Process', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Our comprehensive manufacturing process ensures the highest quality and precision', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3><?php _e('Design & Planning', 'prmtec'); ?></h3>
                        <p><?php _e('Initial design analysis and manufacturing planning to optimize production efficiency and quality.', 'prmtec'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3><?php _e('Material Selection', 'prmtec'); ?></h3>
                        <p><?php _e('Careful selection of high-grade materials that meet specific industry requirements and standards.', 'prmtec'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3><?php _e('Precision Machining', 'prmtec'); ?></h3>
                        <p><?php _e('Advanced CNC machining with state-of-the-art equipment for exceptional accuracy and consistency.', 'prmtec'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3><?php _e('Quality Control', 'prmtec'); ?></h3>
                        <p><?php _e('Comprehensive testing and inspection at every stage to ensure zero-defect production.', 'prmtec'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3><?php _e('Final Inspection', 'prmtec'); ?></h3>
                        <p><?php _e('Thorough final inspection and certification before delivery to guarantee customer satisfaction.', 'prmtec'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CNC Processing 섹션 -->
    <section id="cnc" class="services-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('CNC Processing', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Advanced CNC machining capabilities for complex precision components', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="cnc-capabilities">
                <div class="capability-grid">
                    <div class="capability-item">
                        <div class="capability-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3><?php _e('5-Axis Machining', 'prmtec'); ?></h3>
                        <p><?php _e('Complex geometries and intricate designs with our advanced 5-axis CNC machines.', 'prmtec'); ?></p>
                    </div>
                    
                    <div class="capability-item">
                        <div class="capability-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h3><?php _e('Micro Machining', 'prmtec'); ?></h3>
                        <p><?php _e('Ultra-precise micro components with tolerances down to ±0.001mm for medical applications.', 'prmtec'); ?></p>
                    </div>
                    
                    <div class="capability-item">
                        <div class="capability-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3><?php _e('Swiss Turning', 'prmtec'); ?></h3>
                        <p><?php _e('High-volume production of small, complex parts with exceptional precision and efficiency.', 'prmtec'); ?></p>
                    </div>
                    
                    <div class="capability-item">
                        <div class="capability-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h3><?php _e('Multi-Material Processing', 'prmtec'); ?></h3>
                        <p><?php _e('Expertise in machining various materials including titanium, stainless steel, and exotic alloys.', 'prmtec'); ?></p>
                    </div>
                </div>
            </div>
            
            <div class="equipment-showcase">
                <h3><?php _e('Our Equipment', 'prmtec'); ?></h3>
                <div class="equipment-grid">
                    <div class="equipment-item">
                        <div class="equipment-image">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h4><?php _e('DMG MORI NTX500', 'prmtec'); ?></h4>
                        <p><?php _e('5-axis machining center for complex components', 'prmtec'); ?></p>
                    </div>
                    
                    <div class="equipment-item">
                        <div class="equipment-image">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h4><?php _e('Swiss Turn Machines', 'prmtec'); ?></h4>
                        <p><?php _e('High-precision turning for small parts', 'prmtec'); ?></p>
                    </div>
                    
                    <div class="equipment-item">
                        <div class="equipment-image">
                            <i class="fas fa-hammer"></i>
                        </div>
                        <h4><?php _e('CNC Milling Centers', 'prmtec'); ?></h4>
                        <p><?php _e('Versatile machining for various applications', 'prmtec'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Surface Treatment 섹션 -->
    <section id="surface" class="services-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Surface Treatment', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Advanced surface treatment technologies for enhanced performance and durability', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="treatment-methods">
                <div class="method-grid">
                    <div class="method-item">
                        <div class="method-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3><?php _e('Anodizing', 'prmtec'); ?></h3>
                        <p><?php _e('Aluminum anodizing for corrosion resistance and improved surface hardness.', 'prmtec'); ?></p>
                        <ul>
                            <li><?php _e('Type II Anodizing', 'prmtec'); ?></li>
                            <li><?php _e('Type III Hard Anodizing', 'prmtec'); ?></li>
                            <li><?php _e('Color Anodizing', 'prmtec'); ?></li>
                        </ul>
                    </div>
                    
                    <div class="method-item">
                        <div class="method-icon">
                            <i class="fas fa-gem"></i>
                        </div>
                        <h3><?php _e('Plating', 'prmtec'); ?></h3>
                        <p><?php _e('Electroplating services for enhanced conductivity and corrosion resistance.', 'prmtec'); ?></p>
                        <ul>
                            <li><?php _e('Nickel Plating', 'prmtec'); ?></li>
                            <li><?php _e('Chrome Plating', 'prmtec'); ?></li>
                            <li><?php _e('Gold Plating', 'prmtec'); ?></li>
                        </ul>
                    </div>
                    
                    <div class="method-item">
                        <div class="method-icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h3><?php _e('Heat Treatment', 'prmtec'); ?></h3>
                        <p><?php _e('Controlled heat treatment processes for optimal material properties.', 'prmtec'); ?></p>
                        <ul>
                            <li><?php _e('Annealing', 'prmtec'); ?></li>
                            <li><?php _e('Hardening', 'prmtec'); ?></li>
                            <li><?php _e('Tempering', 'prmtec'); ?></li>
                        </ul>
                    </div>
                    
                    <div class="method-item">
                        <div class="method-icon">
                            <i class="fas fa-spray-can"></i>
                        </div>
                        <h3><?php _e('Coating', 'prmtec'); ?></h3>
                        <p><?php _e('Specialized coating applications for specific performance requirements.', 'prmtec'); ?></p>
                        <ul>
                            <li><?php _e('PVD Coating', 'prmtec'); ?></li>
                            <li><?php _e('DLC Coating', 'prmtec'); ?></li>
                            <li><?php _e('Ceramic Coating', 'prmtec'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Inspection 섹션 -->
    <section id="quality" class="services-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Quality Inspection', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Comprehensive quality control and inspection services', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="inspection-methods">
                <div class="inspection-grid">
                    <div class="inspection-item">
                        <div class="inspection-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3><?php _e('Dimensional Inspection', 'prmtec'); ?></h3>
                        <p><?php _e('Precise measurement and verification of dimensional accuracy using advanced CMM technology.', 'prmtec'); ?></p>
                    </div>
                    
                    <div class="inspection-item">
                        <div class="inspection-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3><?php _e('Visual Inspection', 'prmtec'); ?></h3>
                        <p><?php _e('Thorough visual examination for surface defects, finish quality, and cosmetic requirements.', 'prmtec'); ?></p>
                    </div>
                    
                    <div class="inspection-item">
                        <div class="inspection-icon">
                            <i class="fas fa-magnet"></i>
                        </div>
                        <h3><?php _e('NDT Testing', 'prmtec'); ?></h3>
                        <p><?php _e('Non-destructive testing methods including magnetic particle and liquid penetrant testing.', 'prmtec'); ?></p>
                    </div>
                    
                    <div class="inspection-item">
                        <div class="inspection-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h3><?php _e('Material Testing', 'prmtec'); ?></h3>
                        <p><?php _e('Comprehensive material analysis and testing to verify composition and properties.', 'prmtec'); ?></p>
                    </div>
                </div>
            </div>
            
            <div class="quality-standards">
                <h3><?php _e('Quality Standards', 'prmtec'); ?></h3>
                <div class="standards-grid">
                    <div class="standard-item">
                        <h4><?php _e('ISO 9001:2015', 'prmtec'); ?></h4>
                        <p><?php _e('Quality Management System', 'prmtec'); ?></p>
                    </div>
                    <div class="standard-item">
                        <h4><?php _e('ISO 13485:2016', 'prmtec'); ?></h4>
                        <p><?php _e('Medical Device Quality Management', 'prmtec'); ?></p>
                    </div>
                    <div class="standard-item">
                        <h4><?php _e('AS9100D', 'prmtec'); ?></h4>
                        <p><?php _e('Aerospace Quality Management', 'prmtec'); ?></p>
                    </div>
                    <div class="standard-item">
                        <h4><?php _e('IATF 16949', 'prmtec'); ?></h4>
                        <p><?php _e('Automotive Quality Management', 'prmtec'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 서비스 페이지 JavaScript -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // 서브 네비게이션 기능
        const subNavLinks = document.querySelectorAll('.sub-nav-link');
        const servicesSections = document.querySelectorAll('.services-section');
        
        // 서브 네비게이션 클릭 이벤트
        subNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetSection = this.getAttribute('data-section');
                
                // 활성 클래스 업데이트
                subNavLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
                
                // 섹션 표시/숨김
                servicesSections.forEach(section => {
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
            
            servicesSections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    const sectionId = section.id;
                    const correspondingLink = document.querySelector(`[data-section="${sectionId}"]`);
                    
                    if (correspondingLink && !correspondingLink.classList.contains('active')) {
                        subNavLinks.forEach(l => l.classList.remove('active'));
                        correspondingLink.classList.add('active');
                        
                        servicesSections.forEach(s => s.classList.remove('active'));
                        section.classList.add('active');
                    }
                }
            });
        });
        
        // 초기 로드 시 첫 번째 섹션 활성화
        if (servicesSections.length > 0) {
            servicesSections.forEach((section, index) => {
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