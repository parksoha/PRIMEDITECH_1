<?php
/**
 * Template Name: Services Page
 *
 * @package PRIMEDITECH
 * @version 1.0
 */

get_header(); ?>

<main class="main-content" id="main-content">
    <div class="container">
        <div class="services-page-content">
            <!-- 페이지 헤더 -->
            <div class="page-header">
                <h1 class="page-title"><?php _e('Our Services', 'prmtec'); ?></h1>
                <p class="page-subtitle">
                    <?php _e('Comprehensive precision manufacturing solutions for your specific needs', 'prmtec'); ?>
                </p>
            </div>
            
            <!-- 서비스 개요 -->
            <section class="services-overview">
                <div class="overview-content">
                    <h2><?php _e('Precision Manufacturing Services', 'prmtec'); ?></h2>
                    <p>
                        <?php _e('We provide comprehensive precision manufacturing services including CNC machining, surface treatment, quality inspection, and assembly. Our state-of-the-art facilities and experienced team ensure the highest quality standards for every project.', 'prmtec'); ?>
                    </p>
                </div>
            </section>
            
            <!-- 주요 서비스 -->
            <section class="main-services">
                <div class="section-header">
                    <h2 class="section-title"><?php _e('Main Services', 'prmtec'); ?></h2>
                </div>
                
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3 class="service-title"><?php _e('CNC Machining', 'prmtec'); ?></h3>
                        <p class="service-description">
                            <?php _e('High-precision CNC machining using 5-axis equipment for complex geometries and tight tolerances', 'prmtec'); ?>
                        </p>
                        <ul class="service-features">
                            <li><?php _e('5-axis CNC machining', 'prmtec'); ?></li>
                            <li><?php _e('±0.001mm precision', 'prmtec'); ?></li>
                            <li><?php _e('Complex geometry handling', 'prmtec'); ?></li>
                        </ul>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3 class="service-title"><?php _e('Surface Treatment', 'prmtec'); ?></h3>
                        <p class="service-description">
                            <?php _e('Various surface treatment technologies including anodizing, passivation, and coating', 'prmtec'); ?>
                        </p>
                        <ul class="service-features">
                            <li><?php _e('Aluminum anodizing', 'prmtec'); ?></li>
                            <li><?php _e('Stainless steel passivation', 'prmtec'); ?></li>
                            <li><?php _e('Special coating applications', 'prmtec'); ?></li>
                        </ul>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3 class="service-title"><?php _e('Quality Inspection', 'prmtec'); ?></h3>
                        <p class="service-description">
                            <?php _e('Comprehensive quality inspection using CMM and advanced measurement equipment', 'prmtec'); ?>
                        </p>
                        <ul class="service-features">
                            <li><?php _e('CMM measurement', 'prmtec'); ?></li>
                            <li><?php _e('Dimensional inspection', 'prmtec'); ?></li>
                            <li><?php _e('Quality reports', 'prmtec'); ?></li>
                        </ul>
                    </div>
                </div>
            </section>
            
            <!-- 작업 프로세스 -->
            <section class="work-process">
                <div class="section-header">
                    <h2 class="section-title"><?php _e('Work Process', 'prmtec'); ?></h2>
                    <p class="section-subtitle">
                        <?php _e('From consultation to delivery, we ensure quality at every step', 'prmtec'); ?>
                    </p>
                </div>
                
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h3 class="step-title"><?php _e('Consultation & Quotation', 'prmtec'); ?></h3>
                            <p class="step-description">
                                <?php _e('Drawing review and manufacturability analysis, accurate quotation provision', 'prmtec'); ?>
                            </p>
                            <div class="step-note">
                                <i class="fa-regular fa-clock"></i>
                                <span><?php _e('Within 24 hours', 'prmtec'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h3 class="step-title"><?php _e('Machining', 'prmtec'); ?></h3>
                            <p class="step-description">
                                <?php _e('Optimal machining path design and precision machining using high-precision CNC equipment', 'prmtec'); ?>
                            </p>
                            <div class="step-note">
                                <i class="fa-regular fa-clock"></i>
                                <span><?php _e('5 days (business days standard)', 'prmtec'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h3 class="step-title"><?php _e('Surface Treatment', 'prmtec'); ?></h3>
                            <p class="step-description">
                                <?php _e('Application of various surface treatment technologies including aluminum anodizing and stainless steel passivation', 'prmtec'); ?>
                            </p>
                            <div class="step-note">
                                <i class="fa-regular fa-clock"></i>
                                <span><?php _e('2 days (business days standard)', 'prmtec'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">04</div>
                        <div class="step-content">
                            <h3 class="step-title"><?php _e('Quality Inspection', 'prmtec'); ?></h3>
                            <p class="step-description">
                                <?php _e('Precision dimensional measurement using CMM, quality inspection and inspection report preparation', 'prmtec'); ?>
                            </p>
                            <div class="step-note">
                                <i class="fa-regular fa-clock"></i>
                                <span><?php _e('1 day (business days standard)', 'prmtec'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">05</div>
                        <div class="step-content">
                            <h3 class="step-title"><?php _e('Delivery', 'prmtec'); ?></h3>
                            <p class="step-description">
                                <?php _e('Safe packaging and on-time delivery with quality assurance', 'prmtec'); ?>
                            </p>
                            <div class="step-note">
                                <i class="fa-regular fa-clock"></i>
                                <span><?php _e('1 day (business days standard)', 'prmtec'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>
