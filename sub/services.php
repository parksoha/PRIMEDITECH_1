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
            
            <div class="process-table-container">
                <table class="process-table">
                    <thead>
                        <tr>
                            <th class="process-header"><?php _e('PROCESS', 'prmtec'); ?></th>
                            <th class="period-header"><?php _e('PERIOD', 'prmtec'); ?></th>
                            <th class="detail-header"><?php _e('DETAIL', 'prmtec'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="process-cell"><?php _e('견적 및 상담', 'prmtec'); ?><br><span class="process-en"><?php _e('Quotation & Consultation', 'prmtec'); ?></span></td>
                            <td class="period-cell"><?php _e('1~2일', 'prmtec'); ?><br><span class="period-en"><?php _e('1-2 days', 'prmtec'); ?></span></td>
                            <td class="detail-cell"><?php _e('도면 검토 및 가공 가능성 분석, 정확한 견적서 제공', 'prmtec'); ?><br><span class="detail-en"><?php _e('Drawing review and machining feasibility analysis, accurate quotation provision', 'prmtec'); ?></span></td>
                        </tr>
                        <tr>
                            <td class="process-cell"><?php _e('가공 계획 수립', 'prmtec'); ?><br><span class="process-en"><?php _e('Machining Planning', 'prmtec'); ?></span></td>
                            <td class="period-cell"><?php _e('1~2일', 'prmtec'); ?><br><span class="period-en"><?php _e('1-2 days', 'prmtec'); ?></span></td>
                            <td class="detail-cell"><?php _e('최적의 가공 경로 설계 및 공정 계획 수립', 'prmtec'); ?><br><span class="detail-en"><?php _e('Optimal machining path design and process planning', 'prmtec'); ?></span></td>
                        </tr>
                        <tr>
                            <td class="process-cell"><?php _e('CNC 가공', 'prmtec'); ?><br><span class="process-en"><?php _e('CNC Machining', 'prmtec'); ?></span></td>
                            <td class="period-cell"><?php _e('3~10일', 'prmtec'); ?><br><span class="period-en"><?php _e('3-10 days', 'prmtec'); ?></span></td>
                            <td class="detail-cell"><?php _e('5축 CNC 장비를 이용한 고정밀 가공 (±0.001mm 정밀도)', 'prmtec'); ?><br><span class="detail-en"><?php _e('High-precision machining using 5-axis CNC equipment (±0.001mm accuracy)', 'prmtec'); ?></span></td>
                        </tr>
                        <tr>
                            <td class="process-cell"><?php _e('표면처리', 'prmtec'); ?><br><span class="process-en"><?php _e('Surface Treatment', 'prmtec'); ?></span></td>
                            <td class="period-cell"><?php _e('2~5일', 'prmtec'); ?><br><span class="period-en"><?php _e('2-5 days', 'prmtec'); ?></span></td>
                            <td class="detail-cell"><?php _e('알루미나 블라스팅, 진공 열처리, 코팅 등 표면 처리', 'prmtec'); ?><br><span class="detail-en"><?php _e('Alumina blasting, vacuum heat treatment, coating and other surface treatments', 'prmtec'); ?></span></td>
                        </tr>
                        <tr>
                            <td class="process-cell"><?php _e('품질검사 및 납품', 'prmtec'); ?><br><span class="process-en"><?php _e('Quality Inspection & Delivery', 'prmtec'); ?></span></td>
                            <td class="period-cell"><?php _e('1~2일', 'prmtec'); ?><br><span class="period-en"><?php _e('1-2 days', 'prmtec'); ?></span></td>
                            <td class="detail-cell"><?php _e('CMM을 이용한 정밀 치수 측정 및 품질 보고서 작성 후 안전 포장 납품', 'prmtec'); ?><br><span class="detail-en"><?php _e('Precise dimensional measurement using CMM, quality report preparation and safe packaging delivery', 'prmtec'); ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CNC Processing 섹션 -->
    <section id="cnc" class="services-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('CNC Processing', 'prmtec'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('PRIMEDITECH은 최신 CNC 복합 가공 설비와 5축 정밀 장비를 기반으로, 의료·항공·로보틱스·반도체 산업 등 고정밀 부품 제작에 특화된 기술력을 보유하고 있습니다. CAD/CAM 통합 시스템을 통한 자동화된 공정 제어로, ±0.005mm 수준의 정밀도를 구현합니다.', 'prmtec'); ?>
                </p>
            </div>
            
            <div class="cnc-capabilities">
                <div class="capability-grid">
                    <div class="capability-item">
                        <div class="capability-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3><?php _e('CNC 가공 공정', 'prmtec'); ?></h3>
                        <ul>
                            <li><strong><?php _e('선반 가공 (Turning)', 'prmtec'); ?></strong> — <?php _e('회전하는 소재를 절삭공구로 가공, 원통형·축형 부품에 적합 (샤프트, 노즐, 피팅류)', 'prmtec'); ?></li>
                            <li><strong><?php _e('밀링 가공 (Milling)', 'prmtec'); ?></strong> — <?php _e('고정된 소재를 회전 커터로 절삭, 평면/곡면/구멍 등 다양한 형상 가공', 'prmtec'); ?></li>
                            <li><strong><?php _e('드릴링 (Drilling)', 'prmtec'); ?></strong> — <?php _e('회전 드릴로 구멍 가공, 나사 가공 전 홀, 체결용 홀, 핀 홀 등', 'prmtec'); ?></li>
                            <li><strong><?php _e('탭핑 (Tapping)', 'prmtec'); ?></strong> — <?php _e('내부 나사산 가공(Internal Thread), 조립용 나사 체결 부품 제작', 'prmtec'); ?></li>
                            <li><strong><?php _e('복합 가공 (Turn‑Mill Complex)', 'prmtec'); ?></strong> — <?php _e('선반+밀링 동시 수행, 원통+평면 복합형 정밀 부품 및 의료/로봇 부품 제작', 'prmtec'); ?></li>
                            <li><strong><?php _e('5축 가공 (5‑Axis Machining)', 'prmtec'); ?></strong> — <?php _e('X,Y,Z + 2회전축 동시 제어, 인체 곡면형/임플란트/항공부품 등 복잡 형상 제작', 'prmtec'); ?></li>
                        </ul>
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