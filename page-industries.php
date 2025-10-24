<?php
/**
 * Template Name: Industries Page
 *
 * @package PRIMEDITECH
 * @version 1.0
 */

get_header(); ?>

<main class="main-content" id="main-content">
    <div class="container">
        <div class="industries-page-content">
            <!-- 페이지 헤더 -->
            <div class="page-header">
                <h1 class="page-title"><?php _e('Industries', 'prmtec'); ?></h1>
                <p class="page-subtitle">
                    <?php _e('Serving diverse industries with precision manufacturing solutions', 'prmtec'); ?>
                </p>
            </div>
            
            <!-- 산업 분야 개요 -->
            <section class="industries-overview">
                <div class="overview-content">
                    <h2><?php _e('Industry Expertise', 'prmtec'); ?></h2>
                    <p>
                        <?php _e('We serve various industries including medical devices, aerospace, robotics, and semiconductor sectors with our precision manufacturing capabilities.', 'prmtec'); ?>
                    </p>
                </div>
            </section>
            
            <!-- 주요 산업 분야 -->
            <section class="main-industries">
                <div class="section-header">
                    <h2 class="section-title"><?php _e('Core Industries', 'prmtec'); ?></h2>
                </div>
                
                <div class="industries-grid">
                    <div class="industry-card" id="medical">
                        <div class="industry-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3 class="industry-title"><?php _e('Medical Devices', 'prmtec'); ?></h3>
                        <p class="industry-description">
                            <?php _e('Precision components for medical devices that save lives through advanced manufacturing technology', 'prmtec'); ?>
                        </p>
                        <div class="industry-features">
                            <h4><?php _e('Key Applications:', 'prmtec'); ?></h4>
                            <ul>
                                <li><?php _e('Surgical instruments', 'prmtec'); ?></li>
                                <li><?php _e('Diagnostic equipment', 'prmtec'); ?></li>
                                <li><?php _e('Implant components', 'prmtec'); ?></li>
                                <li><?php _e('Medical device housings', 'prmtec'); ?></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="industry-card" id="aerospace">
                        <div class="industry-icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h3 class="industry-title"><?php _e('Aerospace', 'prmtec'); ?></h3>
                        <p class="industry-description">
                            <?php _e('Ultra-precision components for aerospace applications requiring extreme precision and reliability', 'prmtec'); ?>
                        </p>
                        <div class="industry-features">
                            <h4><?php _e('Key Applications:', 'prmtec'); ?></h4>
                            <ul>
                                <li><?php _e('Aircraft components', 'prmtec'); ?></li>
                                <li><?php _e('Engine parts', 'prmtec'); ?></li>
                                <li><?php _e('Navigation systems', 'prmtec'); ?></li>
                                <li><?php _e('Structural components', 'prmtec'); ?></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="industry-card" id="robotics">
                        <div class="industry-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3 class="industry-title"><?php _e('Robotics', 'prmtec'); ?></h3>
                        <p class="industry-description">
                            <?php _e('High-quality components for robotics systems requiring precise movement and durability', 'prmtec'); ?>
                        </p>
                        <div class="industry-features">
                            <h4><?php _e('Key Applications:', 'prmtec'); ?></h4>
                            <ul>
                                <li><?php _e('Robot joints', 'prmtec'); ?></li>
                                <li><?php _e('Gripper components', 'prmtec'); ?></li>
                                <li><?php _e('Sensor housings', 'prmtec'); ?></li>
                                <li><?php _e('Control system parts', 'prmtec'); ?></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="industry-card" id="semiconductor">
                        <div class="industry-icon">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <h3 class="industry-title"><?php _e('Semiconductor', 'prmtec'); ?></h3>
                        <p class="industry-description">
                            <?php _e('Ultra-precision components for semiconductor manufacturing equipment requiring extreme precision', 'prmtec'); ?>
                        </p>
                        <div class="industry-features">
                            <h4><?php _e('Key Applications:', 'prmtec'); ?></h4>
                            <ul>
                                <li><?php _e('Wafer handling components', 'prmtec'); ?></li>
                                <li><?php _e('Process chamber parts', 'prmtec'); ?></li>
                                <li><?php _e('Vacuum system components', 'prmtec'); ?></li>
                                <li><?php _e('Precision fixtures', 'prmtec'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- 기술 역량 -->
            <section class="technical-capabilities">
                <div class="section-header">
                    <h2 class="section-title"><?php _e('Technical Capabilities', 'prmtec'); ?></h2>
                    <p class="section-subtitle">
                        <?php _e('Advanced manufacturing capabilities for diverse industry requirements', 'prmtec'); ?>
                    </p>
                </div>
                
                <div class="capabilities-grid">
                    <div class="capability-item">
                        <div class="capability-icon">
                            <i class="fas fa-ruler"></i>
                        </div>
                        <h3 class="capability-title"><?php _e('Precision Tolerance', 'prmtec'); ?></h3>
                        <p class="capability-description">
                            <?php _e('±0.001mm precision machining for ultra-precise components', 'prmtec'); ?>
                        </p>
                    </div>
                    
                    <div class="capability-item">
                        <div class="capability-icon">
                            <i class="fas fa-cube"></i>
                        </div>
                        <h3 class="capability-title"><?php _e('Complex Geometry', 'prmtec'); ?></h3>
                        <p class="capability-description">
                            <?php _e('5-axis CNC machining for complex 3D geometries', 'prmtec'); ?>
                        </p>
                    </div>
                    
                    <div class="capability-item">
                        <div class="capability-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="capability-title"><?php _e('Quality Assurance', 'prmtec'); ?></h3>
                        <p class="capability-description">
                            <?php _e('Comprehensive quality inspection and testing', 'prmtec'); ?>
                        </p>
                    </div>
                    
                    <div class="capability-item">
                        <div class="capability-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="capability-title"><?php _e('Fast Delivery', 'prmtec'); ?></h3>
                        <p class="capability-description">
                            <?php _e('98% on-time delivery rate with efficient production', 'prmtec'); ?>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>
