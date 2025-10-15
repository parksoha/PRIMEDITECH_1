<?php
/**
 * Template Name: Products Page
 * 
 * @package PRIMEDITECH
 * @since 1.0.0
 */

get_header(); ?>

<!-- 메인 콘텐츠 시작 -->
<main class="main-content" id="main-content">

    <!-- 히어로 배너 섹션 -->
    <section class="hero-banner">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title"><?php _e('Our Products', 'prmtec'); ?></h1>
                <nav class="breadcrumb">
                    <a href="<?php echo home_url(); ?>" class="breadcrumb-item">
                        <i class="fas fa-home"></i> <?php _e('Home', 'prmtec'); ?>
                    </a>
                    <span class="breadcrumb-separator">></span>
                    <span class="breadcrumb-current"><?php _e('Products', 'prmtec'); ?></span>
                </nav>
            </div>
        </div>
    </section>

    <!-- 서브 네비게이션 -->
    <section class="sub-navigation">
        <div class="container">
            <nav class="sub-nav">
                <ul class="sub-nav-menu">
                    <li><a href="#aluminium" class="sub-nav-link active" data-section="aluminium"><?php _e('Aluminium', 'prmtec'); ?></a></li>
                    <li><a href="#inconel" class="sub-nav-link" data-section="inconel"><?php _e('Inconel', 'prmtec'); ?></a></li>
                    <li><a href="#stainless-steel" class="sub-nav-link" data-section="stainless-steel"><?php _e('StainlessSteel', 'prmtec'); ?></a></li>
                    <li><a href="#peek" class="sub-nav-link" data-section="peek"><?php _e('PEEK', 'prmtec'); ?></a></li>
                    <li><a href="#polyurethane" class="sub-nav-link" data-section="polyurethane"><?php _e('Polyurethane', 'prmtec'); ?></a></li>
                    <li><a href="#titanium-alloys" class="sub-nav-link" data-section="titanium-alloys"><?php _e('TitaniumAlloys', 'prmtec'); ?></a></li>
                    <li><a href="#precision-nozzle" class="sub-nav-link" data-section="precision-nozzle"><?php _e('PrecisionNozzle', 'prmtec'); ?></a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Aluminium 섹션 -->
    <section id="aluminium" class="products-section active">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Aluminium', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('High-quality aluminium components for precision medical applications. Lightweight, durable, and corrosion-resistant materials for advanced medical devices.', 'prmtec'); ?>
                </p>
            </div>
            
            <!-- 갤러리 -->
            <div class="product-gallery">
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cube"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Aluminium Component 1', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cube"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Aluminium Component 2', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cube"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Aluminium Component 3', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cube"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Aluminium Component 4', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cube"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Aluminium Component 5', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cube"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Aluminium Component 6', 'prmtec'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inconel 섹션 -->
    <section id="inconel" class="products-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Inconel', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Premium Inconel alloys for high-temperature and corrosion-resistant medical applications. Exceptional strength and durability in demanding environments.', 'prmtec'); ?>
                </p>
            </div>
            
            <!-- 갤러리 -->
            <div class="product-gallery">
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cog"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Inconel Component 1', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cog"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Inconel Component 2', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cog"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Inconel Component 3', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cog"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Inconel Component 4', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cog"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Inconel Component 5', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cog"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Inconel Component 6', 'prmtec'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stainless Steel 섹션 -->
    <section id="stainless-steel" class="products-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Stainless Steel', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Medical-grade stainless steel components with superior biocompatibility and corrosion resistance. Ideal for surgical instruments and medical devices.', 'prmtec'); ?>
                </p>
            </div>
            
            <!-- 갤러리 -->
            <div class="product-gallery">
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Stainless Steel Component 1', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Stainless Steel Component 2', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Stainless Steel Component 3', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Stainless Steel Component 4', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Stainless Steel Component 5', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Stainless Steel Component 6', 'prmtec'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- PEEK 섹션 -->
    <section id="peek" class="products-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('PEEK', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Advanced PEEK (Polyetheretherketone) materials for high-performance medical implants and devices. Excellent biocompatibility and mechanical properties.', 'prmtec'); ?>
                </p>
            </div>
            
            <!-- 갤러리 -->
            <div class="product-gallery">
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('PEEK Component 1', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('PEEK Component 2', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('PEEK Component 3', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('PEEK Component 4', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('PEEK Component 5', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('PEEK Component 6', 'prmtec'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Polyurethane 섹션 -->
    <section id="polyurethane" class="products-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Polyurethane', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Flexible and durable polyurethane materials for medical tubing, seals, and soft components. Superior biocompatibility and chemical resistance.', 'prmtec'); ?>
                </p>
            </div>
            
            <!-- 갤러리 -->
            <div class="product-gallery">
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-square"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Polyurethane Component 1', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-square"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Polyurethane Component 2', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-square"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Polyurethane Component 3', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-square"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Polyurethane Component 4', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-square"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Polyurethane Component 5', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-square"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Polyurethane Component 6', 'prmtec'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Titanium Alloys 섹션 -->
    <section id="titanium-alloys" class="products-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Titanium Alloys', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Premium titanium alloys for orthopedic implants and surgical instruments. Exceptional strength-to-weight ratio and biocompatibility.', 'prmtec'); ?>
                </p>
            </div>
            
            <!-- 갤러리 -->
            <div class="product-gallery">
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-gem"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Titanium Alloy Component 1', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-gem"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Titanium Alloy Component 2', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-gem"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Titanium Alloy Component 3', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-gem"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Titanium Alloy Component 4', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-gem"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Titanium Alloy Component 5', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-gem"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Titanium Alloy Component 6', 'prmtec'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Precision Nozzle 섹션 -->
    <section id="precision-nozzle" class="products-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Precision Nozzle', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('High-precision nozzles for medical fluid delivery systems. Engineered for accuracy, reliability, and sterility in critical medical applications.', 'prmtec'); ?>
                </p>
            </div>
            
            <!-- 갤러리 -->
            <div class="product-gallery">
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-bullseye"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Precision Nozzle 1', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-bullseye"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Precision Nozzle 2', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-bullseye"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Precision Nozzle 3', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-bullseye"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Precision Nozzle 4', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-bullseye"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Precision Nozzle 5', 'prmtec'); ?></div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-bullseye"></i>
                        </div>
                    </div>
                    <div class="gallery-caption"><?php _e('Precision Nozzle 6', 'prmtec'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA 섹션 -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2><?php _e('Ready to Transform Your Medical Practice?', 'prmtec'); ?></h2>
                <p><?php _e('Contact our product specialists to learn more about our innovative medical technology solutions.', 'prmtec'); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary">
                        <?php _e('Request Information', 'prmtec'); ?>
                    </a>
                    <a href="<?php echo home_url('/services/'); ?>" class="btn btn-secondary">
                        <?php _e('View Services', 'prmtec'); ?>
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
    const productSections = document.querySelectorAll('.products-section');
    
    // 서브 네비게이션 클릭 이벤트
    subNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetSection = this.getAttribute('data-section');
            
            // 활성 클래스 업데이트
            subNavLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            
            // 섹션 표시/숨김
            productSections.forEach(section => {
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
        
        productSections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                const sectionId = section.id;
                const correspondingLink = document.querySelector(`[data-section="${sectionId}"]`);
                
                if (correspondingLink && !correspondingLink.classList.contains('active')) {
                    subNavLinks.forEach(l => l.classList.remove('active'));
                    correspondingLink.classList.add('active');
                    
                    productSections.forEach(s => s.classList.remove('active'));
                    section.classList.add('active');
                }
            }
        });
    });
    
    // 초기 로드 시 첫 번째 섹션 활성화
    if (productSections.length > 0) {
        productSections.forEach((section, index) => {
            if (index === 0) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });
    }
});
</script>
