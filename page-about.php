<?php
/**
 * Template Name: About Page
 *
 * @package PRIMEDITECH
 * @version 1.0
 */

get_header(); ?>

<main class="main-content" id="main-content">
    <div class="container">
        <div class="about-page-content">
            <!-- 페이지 헤더 -->
            <div class="page-header">
                <h1 class="page-title"><?php _e('About PRIMEDITECH', 'prmtec'); ?></h1>
                <p class="page-subtitle">
                    <?php _e('Leading precision engineering company trusted by global leaders in medical, aerospace, and advanced industrial sectors', 'prmtec'); ?>
                </p>
            </div>
            
            <!-- 회사 소개 섹션 -->
            <section class="company-intro">
                <div class="intro-content">
                    <div class="intro-text">
                        <h2><?php _e('About PRIMEDITECH', 'prmtec'); ?></h2>
                        <p>
                            <?php _e('PRIMEDITECH is a leading company in Korea\'s precision engineering industry, trusted by global leaders in medical, aerospace, and advanced industrial sectors.', 'prmtec'); ?>
                        </p>
                        <p>
                            <?php _e('Through a foundation built on technical expertise and continuous innovation, we specialize in providing high-precision components that meet the most demanding international standards.', 'prmtec'); ?>
                        </p>
                        <p>
                            <?php _e('Through our skilled engineering team and state-of-the-art manufacturing capabilities, we ensure that every component we produce reflects the highest levels of quality, reliability, and performance.', 'prmtec'); ?>
                        </p>
                    </div>
                    <div class="intro-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about-company.jpg" alt="PRIMEDITECH Company" class="company-image">
                    </div>
                </div>
            </section>
            
            <!-- 핵심 가치 섹션 -->
            <section class="core-values">
                <div class="section-header">
                    <h2 class="section-title"><?php _e('Core Values', 'prmtec'); ?></h2>
                    <p class="section-subtitle">
                        <?php _e('The principles that guide our commitment to excellence', 'prmtec'); ?>
                    </p>
                </div>
                
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3 class="value-title"><?php _e('Excellence', 'prmtec'); ?></h3>
                        <p class="value-description">
                            <?php _e('Absolute Quality Without Compromise', 'prmtec'); ?>
                        </p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="value-title"><?php _e('Innovation', 'prmtec'); ?></h3>
                        <p class="value-description">
                            <?php _e('Innovation-Driven Precision Engineering', 'prmtec'); ?>
                        </p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="value-title"><?php _e('Agility', 'prmtec'); ?></h3>
                        <p class="value-description">
                            <?php _e('Customer-Centric Adaptability', 'prmtec'); ?>
                        </p>
                    </div>
                </div>
            </section>
            
            <!-- 회사 통계 -->
            <section class="company-stats">
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label"><?php _e('Global Customers', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">14억</div>
                        <div class="stat-label"><?php _e('Export Revenue', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">±0.001mm</div>
                        <div class="stat-label"><?php _e('Precision Level', 'prmtec'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label"><?php _e('On-time Delivery', 'prmtec'); ?></div>
                    </div>
                </div>
            </section>
            
            <!-- 팀 섹션 -->
            <section class="team-section">
                <div class="section-header">
                    <h2 class="section-title"><?php _e('Our Team', 'prmtec'); ?></h2>
                    <p class="section-subtitle">
                        <?php _e('Expert engineers and professionals dedicated to precision manufacturing', 'prmtec'); ?>
                    </p>
                </div>
                
                <div class="team-grid">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team-member1.jpg" alt="Team Member" class="member-photo">
                        </div>
                        <div class="member-info">
                            <h3 class="member-name"><?php _e('Engineering Team', 'prmtec'); ?></h3>
                            <p class="member-role"><?php _e('Precision Engineering Specialists', 'prmtec'); ?></p>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <div class="member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team-member2.jpg" alt="Team Member" class="member-photo">
                        </div>
                        <div class="member-info">
                            <h3 class="member-name"><?php _e('Quality Control Team', 'prmtec'); ?></h3>
                            <p class="member-role"><?php _e('Quality Assurance Experts', 'prmtec'); ?></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>
