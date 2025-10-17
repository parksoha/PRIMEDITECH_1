<?php
/**
 * Template Name: About Page
 * Description: PRIMEDITECH About Page Template
 *
 * @package prmtec
 */

get_header();
?>

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
                    <li><a href="#about" class="sub-nav-link active" data-section="about"><?php _e('Introduction', 'prmtec'); ?></a></li>
                    <li><a href="#history" class="sub-nav-link" data-section="history"><?php _e('History', 'prmtec'); ?></a></li>
                    <li><a href="#certification" class="sub-nav-link" data-section="certification"><?php _e('Certifications', 'prmtec'); ?></a></li>
                    <li><a href="#client" class="sub-nav-link" data-section="client"><?php _e('Clients', 'prmtec'); ?></a></li>
                    <li><a href="<?php echo home_url('/facility/'); ?>" class="sub-nav-link"><?php _e('Facilities', 'prmtec'); ?></a></li>
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
                <!-- 상단 원형 요소들 -->
                <div class="values-visual">
                    <div class="value-circle innovation-circle">
                        <span class="circle-text"><?php _e('Innovation', 'prmtec'); ?></span>
                    </div>
                    <div class="value-circle excellence-circle">
                        <span class="circle-text"><?php _e('Excellence', 'prmtec'); ?></span>
                    </div>
                    <div class="value-circle agility-circle">
                        <span class="circle-text"><?php _e('Agility', 'prmtec'); ?></span>
                    </div>
                </div>

                <!-- 하단 번호 리스트 -->
                <div class="values-list">
                    <div class="value-item">
                        <div class="value-number">1</div>
                        <div class="value-content">
                            <h4 class="value-title"><?php _e('Absolute Quality Without Compromise', 'prmtec'); ?></h4>
                            <p class="value-description"><?php _e('At Primeditech, quality is non-negotiable. We implement rigorous, comprehensive quality control systems and relentless improvement practices, ensuring zero-defect precision and guaranteeing that each delivered component surpasses the highest global standards.', 'prmtec'); ?></p>
                        </div>
                    </div>
                    <div class="value-item">
                        <div class="value-number">2</div>
                        <div class="value-content">
                            <h4 class="value-title"><?php _e('Innovation‑Driven Precision Engineering', 'prmtec'); ?></h4>
                            <p class="value-description"><?php _e('By integrating cutting‑edge technologies with ongoing research and development, Primeditech achieves unmatched precision. Our innovative approach continuously evolves, addressing the ever‑changing demands of medical, aerospace, and industrial challenges.', 'prmtec'); ?></p>
                        </div>
                    </div>
                    <div class="value-item">
                        <div class="value-number">3</div>
                        <div class="value-content">
                            <h4 class="value-title"><?php _e('Customer‑Centric Adaptability', 'prmtec'); ?></h4>
                            <p class="value-description"><?php _e('We deeply understand the diverse needs of our global clients. Our adaptive, creative, and flexible mindset ensures tailored precision solutions, significantly enhancing our clients\' competitiveness while staying closely aligned with their strategic vision.', 'prmtec'); ?></p>
                        </div>
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
            </div>
            
            
            <!-- 연혁 섹션 -->
            <div class="timeline-section">
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-year">2025</div>
                        <div class="timeline-content right">
                            <h3><?php _e('PRIMEDITECH Headquarters Relocation', 'prmtec'); ?></h3>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-year">2024</div>
                        <div class="timeline-content left">
                            <h3><?php _e('Achieved Main-Biz Certification', 'prmtec'); ?></h3>
                            <p><?php _e('Pioneered domestic introduction of DMG MORI NTX500 machining center', 'prmtec'); ?></p>
                        </div>
                        <div class="timeline-image right">
                            <div class="image-placeholder">
                                <i class="fas fa-cogs"></i>
                                <span><?php _e('DMG MORI NTX500', 'prmtec'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-year">2023</div>
                        <div class="timeline-content right">
                            <h3><?php _e('Integrated Advanced Swiss Turn Equipment', 'prmtec'); ?></h3>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-year">2021</div>
                        <div class="timeline-content left">
                            <h3><?php _e('Achieved ISO 9001 and ISO 14001 certifications', 'prmtec'); ?></h3>
                        </div>
                        <div class="timeline-image right">
                            <div class="image-placeholder">
                                <i class="fas fa-certificate"></i>
                                <span><?php _e('Quality Components', 'prmtec'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-year">2020</div>
                        <div class="timeline-content right">
                            <h3><?php _e('Established In-House R&D Center', 'prmtec'); ?></h3>
                            <p><?php _e('Certified as Specialized Component Manufacturer', 'prmtec'); ?></p>
                            <p><?php _e('Integrated Advanced Swiss Turn Equipment', 'prmtec'); ?></p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-year">2019</div>
                        <div class="timeline-content left">
                            <h3><?php _e('Establishment of Primeditech Co., Ltd.', 'prmtec'); ?></h3>
                        </div>
                        <div class="timeline-image right">
                            <div class="image-placeholder">
                                <i class="fas fa-industry"></i>
                                <span><?php _e('Manufacturing Equipment', 'prmtec'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Certification 섹션 -->
    <section id="certification" class="about-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Certification', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Recognition for our commitment to excellence', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="cert-carousel" id="cert-carousel">
                <button class="cert-nav cert-prev" aria-label="<?php _e('Previous', 'prmtec'); ?>">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="cert-track-wrapper">
                    <ul class="cert-track">
                        <li class="cert-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/certification1.png" alt="<?php _e('Certification 1', 'prmtec'); ?>" class="cert-image">
                        </li>
                        <li class="cert-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/certification2.png" alt="<?php _e('Certification 2', 'prmtec'); ?>" class="cert-image">
                        </li>
                        <li class="cert-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/certification3.png" alt="<?php _e('Certification 3', 'prmtec'); ?>" class="cert-image">
                        </li>
                        <li class="cert-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/certification4.png" alt="<?php _e('Certification 4', 'prmtec'); ?>" class="cert-image">
                        </li>
                        <li class="cert-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/certification5.png" alt="<?php _e('Certification 5', 'prmtec'); ?>" class="cert-image">
                        </li>
                        <li class="cert-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/certification6.png" alt="<?php _e('Certification 6', 'prmtec'); ?>" class="cert-image">
                        </li>
                        <li class="cert-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/certification7.png" alt="<?php _e('Certification 7', 'prmtec'); ?>" class="cert-image">
                        </li>
                        <li class="cert-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/certification8.png" alt="<?php _e('Certification 8', 'prmtec'); ?>" class="cert-image">
                        </li>
                        <li class="cert-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/certification9.png" alt="<?php _e('Certification 9', 'prmtec'); ?>" class="cert-image">
                        </li>
                        <li class="cert-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/certification10.png" alt="<?php _e('Certification 10', 'prmtec'); ?>" class="cert-image">
                        </li>
                        <li class="cert-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/certification11.png" alt="<?php _e('Certification 11', 'prmtec'); ?>" class="cert-image">
                        </li>
                    </ul>
                </div>
                <button class="cert-nav cert-next" aria-label="<?php _e('Next', 'prmtec'); ?>">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <!-- 모두 보기 버튼 -->
            <div class="cert-viewall-wrap">
                <button id="cert-viewall" class="cert-viewall-btn" type="button"><?php _e('View all certifications', 'prmtec'); ?></button>
            </div>

            <!-- 전체 인증서 갤러리 (초기에 숨김) -->
            <div class="cert-gallery" id="cert-gallery" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certification1.png" alt="<?php _e('Certification 1', 'prmtec'); ?>" class="cert-gallery-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certification2.png" alt="<?php _e('Certification 2', 'prmtec'); ?>" class="cert-gallery-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certification3.png" alt="<?php _e('Certification 3', 'prmtec'); ?>" class="cert-gallery-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certification4.png" alt="<?php _e('Certification 4', 'prmtec'); ?>" class="cert-gallery-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certification5.png" alt="<?php _e('Certification 5', 'prmtec'); ?>" class="cert-gallery-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certification6.png" alt="<?php _e('Certification 6', 'prmtec'); ?>" class="cert-gallery-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certification7.png" alt="<?php _e('Certification 7', 'prmtec'); ?>" class="cert-gallery-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certification8.png" alt="<?php _e('Certification 8', 'prmtec'); ?>" class="cert-gallery-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certification9.png" alt="<?php _e('Certification 9', 'prmtec'); ?>" class="cert-gallery-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certification10.png" alt="<?php _e('Certification 10', 'prmtec'); ?>" class="cert-gallery-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certification11.png" alt="<?php _e('Certification 11', 'prmtec'); ?>" class="cert-gallery-image">
            </div>
            
            
        </div>
    </section>

    <!-- Client 섹션 -->
    <section id="client" class="about-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Our Clients', 'prmtec'); ?></h2>
            </div>
            
            <!-- 클라이언트 인트로 섹션 -->
            <div class="client-intro-section">
                <div class="client-intro-content">
                    <div class="client-intro-image">
                        <div class="image-placeholder">
                            <i class="fas fa-handshake"></i>
                            <span><?php _e('Partnership', 'prmtec'); ?></span>
                        </div>
                    </div>
                    <div class="client-intro-text">
                        <p>
                            <?php _e('PRIMEDITECH은 국내외 다양한 산업군의 고객사와 함께 성장하고 있습니다.', 'prmtec'); ?>
                        </p>
                        <p>
                            <?php _e('의료기기, 항공우주, 반도체, 로보틱스 등 고정밀 가공이 요구되는 산업 분야에서 축적된 기술력과 노하우를 바탕으로, 고객의 요구를 정확히 이해하고 최적의 솔루션을 제공합니다.', 'prmtec'); ?>
                        </p>
                        <p>
                            <?php _e('단순한 가공을 넘어, 제품의 목적과 사용 환경을 고려한 정밀한 품질과 안정적인 납기로 고객의 기대를 뛰어넘는 결과를 만들어갑니다.', 'prmtec'); ?>
                        </p>
                        <p>
                            <?php _e('PRIMEDITECH은 신뢰를 기반으로 한 장기적 파트너십을 목표로 합니다. 각 산업의 기술적 과제를 함께 해결하며, 고객의 성장과 함께 발전하는 글로벌 정밀가공 전문 기업으로 나아가고 있습니다.', 'prmtec'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- 클라이언트 로고 섹션 -->
            <div class="clients-logo-section">
                <div class="clients-logo-grid">
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client1.png" alt="<?php _e('Client 1', 'prmtec'); ?>" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client2.png" alt="<?php _e('Client 2', 'prmtec'); ?>" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client3.png" alt="<?php _e('Client 3', 'prmtec'); ?>" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client4.png" alt="<?php _e('Client 4', 'prmtec'); ?>" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client5.png" alt="<?php _e('Client 5', 'prmtec'); ?>" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client6.png" alt="<?php _e('Client 6', 'prmtec'); ?>" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client7.png" alt="<?php _e('Client 7', 'prmtec'); ?>" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client8.png" alt="<?php _e('Client 8', 'prmtec'); ?>" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client9.png" alt="<?php _e('Client 9', 'prmtec'); ?>" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client10.png" alt="<?php _e('Client 10', 'prmtec'); ?>" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client11.png" alt="<?php _e('Client 11', 'prmtec'); ?>" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client12.png" alt="<?php _e('Client 12', 'prmtec'); ?>" class="client-logo-img">
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
    
    // 인증서 캐러셀 기능
    const certCarousel = document.getElementById('cert-carousel');
    const certTrack = document.querySelector('.cert-track');
    const certPrev = document.querySelector('.cert-prev');
    const certNext = document.querySelector('.cert-next');
    const certViewAll = document.getElementById('cert-viewall');
    const certGallery = document.getElementById('cert-gallery');
    
    if (certCarousel && certTrack) {
        let currentSlide = 0;
        const totalSlides = certTrack.children.length;
        const slidesToShow = 4; // 한 번에 보여줄 슬라이드 수
        
        // 다음 버튼
        if (certNext) {
            certNext.addEventListener('click', function() {
                if (currentSlide < totalSlides - slidesToShow) {
                    currentSlide++;
                    updateCarousel();
                }
            });
        }
        
        // 이전 버튼
        if (certPrev) {
            certPrev.addEventListener('click', function() {
                if (currentSlide > 0) {
                    currentSlide--;
                    updateCarousel();
                }
            });
        }
        
        function updateCarousel() {
            const slideWidth = 100 / slidesToShow;
            const translateX = -(currentSlide * slideWidth);
            certTrack.style.transform = `translateX(${translateX}%)`;
            
            // 버튼 상태 업데이트
            if (certPrev) {
                certPrev.style.opacity = currentSlide === 0 ? '0.5' : '1';
                certPrev.style.pointerEvents = currentSlide === 0 ? 'none' : 'auto';
            }
            if (certNext) {
                certNext.style.opacity = currentSlide >= totalSlides - slidesToShow ? '0.5' : '1';
                certNext.style.pointerEvents = currentSlide >= totalSlides - slidesToShow ? 'none' : 'auto';
            }
        }
        
        // 모두 보기 버튼
        if (certViewAll && certGallery) {
            certViewAll.addEventListener('click', function() {
                const isHidden = certGallery.getAttribute('aria-hidden') === 'true';
                certGallery.setAttribute('aria-hidden', !isHidden);
                certGallery.style.display = isHidden ? 'grid' : 'none';
                this.textContent = isHidden ? '<?php _e('Hide certifications', 'prmtec'); ?>' : '<?php _e('View all certifications', 'prmtec'); ?>';
            });
        }
        
        // 초기 설정
        updateCarousel();
    }
});
</script>