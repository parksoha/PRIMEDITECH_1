<?php
/**
 * Template Name: About Page
 * Description: PRIMEDITECH About Page Template
 *
 * @package prmtec
 */

get_header();
?>

<body class="about-page">

<!-- 메인 콘텐츠 시작 -->
<main class="main-content" id="main-content">

    <!-- 히어로 배너 섹션 -->
    <section class="hero-banner">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title"><?php _e('About', 'prmtec'); ?></h1>
                <nav class="breadcrumb">
                    <a href="<?php echo home_url(); ?>" class="breadcrumb-item">
                        <i class="fas fa-home"></i> <?php _e('Home', 'prmtec'); ?>
                    </a>
                    <span class="breadcrumb-separator">></span>
                    <span class="breadcrumb-current"><?php _e('About', 'prmtec'); ?></span>
                </nav>
            </div>
        </div>
    </section>

    <!-- 서브 네비게이션 -->
    <section class="sub-navigation">
        <div class="container">
            <nav class="sub-nav">
                <ul class="sub-nav-menu">
                    <li><a href="#about" class="sub-nav-link active" data-section="about"><?php _e('About', 'prmtec'); ?></a></li>
                    <li><a href="#history" class="sub-nav-link" data-section="history"><?php _e('History', 'prmtec'); ?></a></li>
                    <li><a href="#certification" class="sub-nav-link" data-section="certification"><?php _e('Certification', 'prmtec'); ?></a></li>
                    <li><a href="#client" class="sub-nav-link" data-section="client"><?php _e('Client', 'prmtec'); ?></a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- About 섹션 -->
    <section id="about" class="about-section active">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('About Us', 'prmtec'); ?></h2>
            </div>
            
            <div class="about-intro-content">
                <div class="about-intro-image">
                    <div class="image-placeholder">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <div class="about-intro-text">
                    <h3><?php _e('About PRIMEDITECH', 'prmtec'); ?></h3>
                    <p>
                        <?php _e("Primeditech is a leading force in Korea's precision engineering industry, trusted by global leaders across the medical, aerospace, and high-end industrial sectors.", 'prmtec'); ?>
                    </p>
                    <p>
                        <?php _e('With a foundation built on technical expertise and relentless innovation, we specialize in delivering high-precision components that meet the most demanding international standards.', 'prmtec'); ?>
                    </p>
                    <p>
                        <?php _e('Our team of skilled engineers and state-of-the-art manufacturing capabilities ensure that every part we produce reflects the highest level of quality, reliability, and performance.', 'prmtec'); ?>
                    </p>
                </div>
            </div>
            
            <!-- 핵심 가치 섹션 -->
            <div class="core-values">
                <div class="section-header">
                    <h3 class="section-title"><?php _e('Core Values', 'prmtec'); ?></h3>
                </div>
                
                <div class="values-visual">
                    <div class="value-ring ring-innovation"><span><?php _e('Innovation', 'prmtec'); ?></span></div>
                    <div class="value-ring ring-excellence"><span><?php _e('Excellence', 'prmtec'); ?></span></div>
                    <div class="value-ring ring-agility"><span><?php _e('Agility', 'prmtec'); ?></span></div>
                </div>

                <div class="values-list">
                    <div class="value-item">
                        <div class="value-num">1</div>
                        <div class="value-text">
                            <h4><?php _e('Absolute Quality Without Compromise', 'prmtec'); ?></h4>
                            <p><?php _e('At Primeditech, quality is non-negotiable. We implement rigorous, comprehensive quality control systems and relentless improvement practices, ensuring zero-defect precision and guaranteeing that each delivered component surpasses the highest global standards.', 'prmtec'); ?></p>
                        </div>
                    </div>
                    <div class="value-item">
                        <div class="value-num">2</div>
                        <div class="value-text">
                            <h4><?php _e('Innovation‑Driven Precision Engineering', 'prmtec'); ?></h4>
                            <p><?php _e('By integrating cutting‑edge technologies with ongoing research and development, Primeditech achieves unmatched precision. Our innovative approach continuously evolves, addressing the ever‑changing demands of medical, aerospace, and industrial challenges.', 'prmtec'); ?></p>
                        </div>
                    </div>
                    <div class="value-item">
                        <div class="value-num">3</div>
                        <div class="value-text">
                            <h4><?php _e('Customer‑Centric Adaptability', 'prmtec'); ?></h4>
                            <p><?php _e('We deeply understand the diverse needs of our global clients. Our adaptive, creative, and flexible mindset ensures tailored precision solutions, significantly enhancing our clients\' competitiveness while staying closely aligned with their strategic vision.', 'prmtec'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 회사 통계 -->
            <div class="company-stats-section">
                <div class="section-header">
                    <h3 class="section-title"><?php _e('PRIMEDITECH in Numbers', 'prmtec'); ?></h3>
                    <p class="section-subtitle">
                        <?php _e('Our achievements reflect our commitment to excellence', 'prmtec'); ?>
                    </p>
                </div>
                
                <div class="stats-grid">
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
                        <div class="stat-label"><?php _e('Countries Served', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">99.5%</div>
                        <div class="stat-label"><?php _e('Customer Satisfaction', 'prmtec'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History 섹션 -->
    <section id="history" class="about-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Our History', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('A journey of innovation and growth in medical technology', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2006</div>
                    <div class="timeline-content">
                        <h4><?php _e('Company Founded', 'prmtec'); ?></h4>
                        <p><?php _e('PRIMEDITECH 설립 및 의료기기 유통 사업 시작', 'prmtec'); ?></p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2010</div>
                    <div class="timeline-content">
                        <h4><?php _e('First Product Launch', 'prmtec'); ?></h4>
                        <p><?php _e('자체 브랜드 디지털 X-ray 시스템 출시', 'prmtec'); ?></p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2015</div>
                    <div class="timeline-content">
                        <h4><?php _e('Global Expansion', 'prmtec'); ?></h4>
                        <p><?php _e('아시아, 유럽, 중동 지역 수출 본격화 및 해외 파트너십 확대', 'prmtec'); ?></p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2018</div>
                    <div class="timeline-content">
                        <h4><?php _e('Innovation Center Established', 'prmtec'); ?></h4>
                        <p><?php _e('R&D 센터 설립 및 AI 기반 의료 영상 분석 기술 개발 시작', 'prmtec'); ?></p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2021</div>
                    <div class="timeline-content">
                        <h4><?php _e('Certification Milestone', 'prmtec'); ?></h4>
                        <p><?php _e('ISO 13485, CE, FDA 인증 획득 및 품질 관리 체계 강화', 'prmtec'); ?></p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2024</div>
                    <div class="timeline-content">
                        <h4><?php _e('Leading the Future', 'prmtec'); ?></h4>
                        <p><?php _e('AI 기반 차세대 의료기기 출시 및 글로벌 시장 점유율 확대', 'prmtec'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certification 섹션 -->
    <section id="certification" class="about-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Certifications & Quality', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Internationally recognized standards of excellence', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="certifications-grid">
                <div class="certification-card">
                    <div class="certification-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3><?php _e('ISO 13485', 'prmtec'); ?></h3>
                    <p><?php _e('Medical Devices Quality Management System', 'prmtec'); ?></p>
                    <span class="cert-year"><?php _e('Certified: 2021', 'prmtec'); ?></span>
                </div>
                
                <div class="certification-card">
                    <div class="certification-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3><?php _e('CE Marking', 'prmtec'); ?></h3>
                    <p><?php _e('European Conformity for Medical Devices', 'prmtec'); ?></p>
                    <span class="cert-year"><?php _e('Certified: 2021', 'prmtec'); ?></span>
                </div>
                
                <div class="certification-card">
                    <div class="certification-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3><?php _e('FDA Approval', 'prmtec'); ?></h3>
                    <p><?php _e('U.S. Food and Drug Administration', 'prmtec'); ?></p>
                    <span class="cert-year"><?php _e('Approved: 2022', 'prmtec'); ?></span>
                </div>
                
                <div class="certification-card">
                    <div class="certification-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                    <h3><?php _e('KFDA Registration', 'prmtec'); ?></h3>
                    <p><?php _e('Korea Food & Drug Administration', 'prmtec'); ?></p>
                    <span class="cert-year"><?php _e('Registered: 2010', 'prmtec'); ?></span>
                </div>
            </div>
            
            <!-- 품질 관리 시스템 -->
            <div class="quality-system">
                <div class="section-header">
                    <h3 class="section-title"><?php _e('Quality Management System', 'prmtec'); ?></h3>
                    <p class="section-subtitle">
                        <?php _e('Comprehensive quality assurance at every stage', 'prmtec'); ?>
                    </p>
                </div>
                
                <div class="quality-grid">
                    <div class="quality-item">
                        <div class="quality-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4><?php _e('Incoming Inspection', 'prmtec'); ?></h4>
                        <p><?php _e('모든 원자재 및 부품에 대한 철저한 입고 검사', 'prmtec'); ?></p>
                    </div>
                    <div class="quality-item">
                        <div class="quality-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4><?php _e('In-Process Control', 'prmtec'); ?></h4>
                        <p><?php _e('생산 공정 전반에 걸친 실시간 품질 모니터링', 'prmtec'); ?></p>
                    </div>
                    <div class="quality-item">
                        <div class="quality-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <h4><?php _e('Final Inspection', 'prmtec'); ?></h4>
                        <p><?php _e('출하 전 완제품에 대한 종합적인 최종 검사', 'prmtec'); ?></p>
                    </div>
                    <div class="quality-item">
                        <div class="quality-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4><?php _e('Continuous Improvement', 'prmtec'); ?></h4>
                        <p><?php _e('데이터 분석 기반의 지속적인 품질 개선 활동', 'prmtec'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client 섹션 -->
    <section id="client" class="about-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Our Clients', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Trusted partners in healthcare excellence worldwide', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="clients-grid">
                <div class="client-category">
                    <div class="category-header">
                        <i class="fas fa-hospital"></i>
                        <h4><?php _e('Major Hospitals', 'prmtec'); ?></h4>
                    </div>
                    <div class="client-list">
                        <div class="client-item">
                            <h5><?php _e('Seoul National University Hospital', 'prmtec'); ?></h5>
                            <p><?php _e('Digital X-ray Systems & PACS Integration', 'prmtec'); ?></p>
                        </div>
                        <div class="client-item">
                            <h5><?php _e('Samsung Medical Center', 'prmtec'); ?></h5>
                            <p><?php _e('Advanced Imaging Solutions', 'prmtec'); ?></p>
                        </div>
                        <div class="client-item">
                            <h5><?php _e('Asan Medical Center', 'prmtec'); ?></h5>
                            <p><?php _e('Diagnostic Equipment & Maintenance', 'prmtec'); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="client-category">
                    <div class="category-header">
                        <i class="fas fa-clinic-medical"></i>
                        <h4><?php _e('Clinics & Private Practices', 'prmtec'); ?></h4>
                    </div>
                    <div class="client-list">
                        <div class="client-item">
                            <h5><?php _e('200+ Orthopedic Clinics', 'prmtec'); ?></h5>
                            <p><?php _e('Portable X-ray Systems', 'prmtec'); ?></p>
                        </div>
                        <div class="client-item">
                            <h5><?php _e('150+ Dental Clinics', 'prmtec'); ?></h5>
                            <p><?php _e('Dental Imaging Equipment', 'prmtec'); ?></p>
                        </div>
                        <div class="client-item">
                            <h5><?php _e('100+ General Practices', 'prmtec'); ?></h5>
                            <p><?php _e('Point-of-Care Diagnostic Devices', 'prmtec'); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="client-category">
                    <div class="category-header">
                        <i class="fas fa-globe-asia"></i>
                        <h4><?php _e('International Partners', 'prmtec'); ?></h4>
                    </div>
                    <div class="client-list">
                        <div class="client-item">
                            <h5><?php _e('Middle East Healthcare Providers', 'prmtec'); ?></h5>
                            <p><?php _e('Medical Equipment Distribution', 'prmtec'); ?></p>
                        </div>
                        <div class="client-item">
                            <h5><?php _e('Southeast Asia Hospitals', 'prmtec'); ?></h5>
                            <p><?php _e('Regional Service & Support', 'prmtec'); ?></p>
                        </div>
                        <div class="client-item">
                            <h5><?php _e('European Medical Centers', 'prmtec'); ?></h5>
                            <p><?php _e('Advanced Technology Solutions', 'prmtec'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 고객 만족도 -->
            <div class="client-satisfaction">
                <div class="section-header">
                    <h3 class="section-title"><?php _e('Customer Satisfaction', 'prmtec'); ?></h3>
                    <p class="section-subtitle">
                        <?php _e('Our commitment to excellence in service and support', 'prmtec'); ?>
                    </p>
                </div>
                
                <div class="satisfaction-stats">
                    <div class="stat-item">
                        <div class="stat-number">99.5%</div>
                        <div class="stat-label"><?php _e('Customer Satisfaction Rate', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">95%</div>
                        <div class="stat-label"><?php _e('Repeat Customer Rate', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label"><?php _e('Technical Support', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">48hrs</div>
                        <div class="stat-label"><?php _e('Average Response Time', 'prmtec'); ?></div>
                    </div>
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
    const aboutSections = document.querySelectorAll('.about-section');
    
    // 서브 네비게이션 클릭 이벤트
    subNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetSection = this.getAttribute('data-section');
            
            // 활성 클래스 업데이트
            subNavLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            
            // 섹션 표시/숨김
            aboutSections.forEach(section => {
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
        
        aboutSections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                const sectionId = section.id;
                const correspondingLink = document.querySelector(`[data-section="${sectionId}"]`);
                
                if (correspondingLink && !correspondingLink.classList.contains('active')) {
                    subNavLinks.forEach(l => l.classList.remove('active'));
                    correspondingLink.classList.add('active');
                    
                    aboutSections.forEach(s => s.classList.remove('active'));
                    section.classList.add('active');
                }
            }
        });
    });
    
    // 초기 로드 시 첫 번째 섹션 활성화
    if (aboutSections.length > 0) {
        aboutSections.forEach((section, index) => {
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