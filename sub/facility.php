<?php
/**
 * Template Name: Facility Page
 * Description: PRIMEDITECH Facility Page Template
 *
 * @package prmtec
 */

get_header();
?>

<body class="facility-page">

<!-- 메인 콘텐츠 시작 -->
<main class="main-content" id="main-content">

    <!-- 히어로 배너 섹션 -->
    <section class="hero-banner">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title"><?php _e('Our Facility', 'prmtec'); ?></h1>
                <nav class="breadcrumb">
                    <a href="<?php echo home_url(); ?>" class="breadcrumb-item">
                        <i class="fas fa-home"></i> <?php _e('Home', 'prmtec'); ?>
                    </a>
                    <span class="breadcrumb-separator">></span>
                    <span class="breadcrumb-current"><?php _e('Facility', 'prmtec'); ?></span>
                </nav>
            </div>
        </div>
    </section>

    <!-- 서브 네비게이션 -->
    <section class="sub-navigation">
        <div class="container">
            <nav class="sub-nav">
                <ul class="sub-nav-menu">
                    <li><a href="#facility" class="sub-nav-link active" data-section="facility"><?php _e('Facility', 'prmtec'); ?></a></li>
                    <li><a href="#inspection-equipments" class="sub-nav-link" data-section="inspection-equipments"><?php _e('Inspection Equipments', 'prmtec'); ?></a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Facility 섹션 -->
    <section id="facility" class="facility-section active">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Our Facilities', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('State-of-the-art manufacturing, research, and quality control facilities', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="facility-grid">
                <div class="facility-card">
                    <div class="facility-image">
                        <div class="image-placeholder">
                            <i class="fas fa-industry"></i>
                        </div>
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title"><?php _e('Production Line A', 'prmtec'); ?></h3>
                        <p class="facility-description">
                            <?php _e('Dedicated to X-ray system manufacturing with automated assembly lines and precision quality control.', 'prmtec'); ?>
                        </p>
                        <ul class="facility-features">
                            <li><?php _e('Automated Assembly Lines', 'prmtec'); ?></li>
                            <li><?php _e('Precision Quality Control', 'prmtec'); ?></li>
                            <li><?php _e('ISO 13485 Certified', 'prmtec'); ?></li>
                            <li><?php _e('Clean Room Environment', 'prmtec'); ?></li>
                        </ul>
                        <div class="facility-specs">
                            <span class="spec-item"><?php _e('Capacity: 500 units/year', 'prmtec'); ?></span>
                            <span class="spec-item"><?php _e('Area: 2,500 sqm', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="facility-card">
                    <div class="facility-image">
                        <div class="image-placeholder">
                            <i class="fas fa-microchip"></i>
                        </div>
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title"><?php _e('Electronics Assembly', 'prmtec'); ?></h3>
                        <p class="facility-description">
                            <?php _e('State-of-the-art electronics manufacturing facility for medical device components and systems.', 'prmtec'); ?>
                        </p>
                        <ul class="facility-features">
                            <li><?php _e('SMT Assembly Lines', 'prmtec'); ?></li>
                            <li><?php _e('Automated Testing', 'prmtec'); ?></li>
                            <li><?php _e('ESD Protection', 'prmtec'); ?></li>
                            <li><?php _e('Traceability Systems', 'prmtec'); ?></li>
                        </ul>
                        <div class="facility-specs">
                            <span class="spec-item"><?php _e('Clean Room: Class 10,000', 'prmtec'); ?></span>
                            <span class="spec-item"><?php _e('Area: 1,800 sqm', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="facility-card">
                    <div class="facility-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title"><?php _e('Mechanical Workshop', 'prmtec'); ?></h3>
                        <p class="facility-description">
                            <?php _e('Precision machining and mechanical assembly facility for medical device components.', 'prmtec'); ?>
                        </p>
                        <ul class="facility-features">
                            <li><?php _e('CNC Machining Centers', 'prmtec'); ?></li>
                            <li><?php _e('Precision Assembly', 'prmtec'); ?></li>
                            <li><?php _e('Quality Inspection', 'prmtec'); ?></li>
                            <li><?php _e('Calibration Services', 'prmtec'); ?></li>
                        </ul>
                        <div class="facility-specs">
                            <span class="spec-item"><?php _e('Machines: 25+ CNC', 'prmtec'); ?></span>
                            <span class="spec-item"><?php _e('Area: 1,200 sqm', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 제조 통계 -->
            <div class="manufacturing-stats">
                <div class="section-header">
                    <h3 class="section-title"><?php _e('Manufacturing Excellence', 'prmtec'); ?></h3>
                    <p class="section-subtitle">
                        <?php _e('Our commitment to quality and efficiency in production', 'prmtec'); ?>
                    </p>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">99.8%</div>
                        <div class="stat-label"><?php _e('Quality Rate', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5,500+</div>
                        <div class="stat-label"><?php _e('Units Produced Annually', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label"><?php _e('Production Capacity', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">48hrs</div>
                        <div class="stat-label"><?php _e('Average Lead Time', 'prmtec'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inspection Equipments 섹션 -->
    <section id="inspection-equipments" class="facility-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Inspection Equipments', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Advanced inspection and testing equipment for quality assurance', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="equipment-categories">
                <div class="equipment-category">
                    <div class="category-header">
                        <i class="fas fa-search"></i>
                        <h3><?php _e('Dimensional Inspection', 'prmtec'); ?></h3>
                    </div>
                    <div class="equipment-list">
                        <div class="equipment-item">
                            <h4><?php _e('Coordinate Measuring Machine (CMM)', 'prmtec'); ?></h4>
                            <p><?php _e('High-precision 3D measurement system for dimensional inspection of medical device components.', 'prmtec'); ?></p>
                            <span class="equipment-spec"><?php _e('Accuracy: ±2μm', 'prmtec'); ?></span>
                        </div>
                        <div class="equipment-item">
                            <h4><?php _e('Optical Measurement System', 'prmtec'); ?></h4>
                            <p><?php _e('Advanced optical measurement equipment for surface inspection and quality control.', 'prmtec'); ?></p>
                            <span class="equipment-spec"><?php _e('Resolution: 0.1μm', 'prmtec'); ?></span>
                        </div>
                        <div class="equipment-item">
                            <h4><?php _e('Laser Scanning System', 'prmtec'); ?></h4>
                            <p><?php _e('High-speed laser scanning for rapid dimensional analysis and reverse engineering.', 'prmtec'); ?></p>
                            <span class="equipment-spec"><?php _e('Speed: 100,000 points/sec', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="equipment-category">
                    <div class="category-header">
                        <i class="fas fa-microscope"></i>
                        <h3><?php _e('Material Analysis', 'prmtec'); ?></h3>
                    </div>
                    <div class="equipment-list">
                        <div class="equipment-item">
                            <h4><?php _e('Scanning Electron Microscope (SEM)', 'prmtec'); ?></h4>
                            <p><?php _e('High-resolution electron microscopy for detailed material structure analysis.', 'prmtec'); ?></p>
                            <span class="equipment-spec"><?php _e('Magnification: 1,000,000x', 'prmtec'); ?></span>
                        </div>
                        <div class="equipment-item">
                            <h4><?php _e('X-Ray Diffraction (XRD)', 'prmtec'); ?></h4>
                            <p><?php _e('Crystal structure analysis and phase identification for material characterization.', 'prmtec'); ?></p>
                            <span class="equipment-spec"><?php _e('Angle Range: 3-120°', 'prmtec'); ?></span>
                        </div>
                        <div class="equipment-item">
                            <h4><?php _e('Energy Dispersive X-Ray (EDX)', 'prmtec'); ?></h4>
                            <p><?php _e('Elemental composition analysis for quality control and contamination detection.', 'prmtec'); ?></p>
                            <span class="equipment-spec"><?php _e('Elements: Li-U', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="equipment-category">
                    <div class="category-header">
                        <i class="fas fa-shield-alt"></i>
                        <h3><?php _e('Safety Testing', 'prmtec'); ?></h3>
                    </div>
                    <div class="equipment-list">
                        <div class="equipment-item">
                            <h4><?php _e('Electrical Safety Tester', 'prmtec'); ?></h4>
                            <p><?php _e('Comprehensive electrical safety testing according to IEC 60601 standards.', 'prmtec'); ?></p>
                            <span class="equipment-spec"><?php _e('Standards: IEC 60601-1', 'prmtec'); ?></span>
                        </div>
                        <div class="equipment-item">
                            <h4><?php _e('Radiation Dosimeter', 'prmtec'); ?></h4>
                            <p><?php _e('Precision radiation measurement equipment for X-ray device safety testing.', 'prmtec'); ?></p>
                            <span class="equipment-spec"><?php _e('Range: 0.1μSv-10Sv', 'prmtec'); ?></span>
                        </div>
                        <div class="equipment-item">
                            <h4><?php _e('Mechanical Strength Tester', 'prmtec'); ?></h4>
                            <p><?php _e('Load testing equipment for mechanical strength and stability verification.', 'prmtec'); ?></p>
                            <span class="equipment-spec"><?php _e('Capacity: 1000kN', 'prmtec'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 장비 통계 -->
            <div class="equipment-stats">
                <div class="section-header">
                    <h3 class="section-title"><?php _e('Equipment Excellence', 'prmtec'); ?></h3>
                    <p class="section-subtitle">
                        <?php _e('Our commitment to precision and quality in inspection', 'prmtec'); ?>
                    </p>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label"><?php _e('Inspection Equipment', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">99.9%</div>
                        <div class="stat-label"><?php _e('Measurement Accuracy', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label"><?php _e('Equipment Availability', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">ISO 17025</div>
                        <div class="stat-label"><?php _e('Calibration Certified', 'prmtec'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA 섹션 -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2><?php _e('Experience Our World-Class Facilities', 'prmtec'); ?></h2>
                <p><?php _e('Schedule a facility tour to see our advanced manufacturing and research capabilities firsthand.', 'prmtec'); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary">
                        <?php _e('Schedule Tour', 'prmtec'); ?>
                    </a>
                    <a href="<?php echo home_url('/products/'); ?>" class="btn btn-secondary">
                        <?php _e('View Products', 'prmtec'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- 메인 콘텐츠 끝 -->

<?php get_footer(); ?>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 서브 네비게이션 기능
    const subNavLinks = document.querySelectorAll('.sub-nav-link');
    const facilitySections = document.querySelectorAll('.facility-section');
    
    // 서브 네비게이션 클릭 이벤트
    subNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetSection = this.getAttribute('data-section');
            
            // 활성 클래스 업데이트
            subNavLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            
            // 섹션 표시/숨김
            facilitySections.forEach(section => {
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
        
        facilitySections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                const sectionId = section.id;
                const correspondingLink = document.querySelector(`[data-section="${sectionId}"]`);
                
                if (correspondingLink && !correspondingLink.classList.contains('active')) {
                    subNavLinks.forEach(l => l.classList.remove('active'));
                    correspondingLink.classList.add('active');
                    
                    facilitySections.forEach(s => s.classList.remove('active'));
                    section.classList.add('active');
                }
            }
        });
    });
    
    // 초기 로드 시 첫 번째 섹션 활성화
    if (facilitySections.length > 0) {
        facilitySections.forEach((section, index) => {
            if (index === 0) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });
    }
});
</script>

</body>
</html>