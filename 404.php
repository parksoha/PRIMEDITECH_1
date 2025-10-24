<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package PRIMEDITECH
 * @version 1.0
 */

get_header(); ?>

<main class="main-content" id="main-content">
    <div class="container">
        <div class="error-404-content">
            <div class="error-404">
                <div class="error-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h1 class="error-title"><?php _e('404 - Page Not Found', 'prmtec'); ?></h1>
                <p class="error-description">
                    <?php _e('Sorry, the page you are looking for could not be found.', 'prmtec'); ?>
                </p>
                
                <div class="error-actions">
                    <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                        <i class="fas fa-home"></i>
                        <?php _e('Go to Homepage', 'prmtec'); ?>
                    </a>
                    <a href="javascript:history.back()" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i>
                        <?php _e('Go Back', 'prmtec'); ?>
                    </a>
                </div>
            </div>
            
            <!-- 검색 폼 -->
            <div class="error-search">
                <h3><?php _e('Search our website', 'prmtec'); ?></h3>
                <?php get_search_form(); ?>
            </div>
            
            <!-- 인기 페이지 링크 -->
            <div class="error-popular-pages">
                <h3><?php _e('Popular Pages', 'prmtec'); ?></h3>
                <ul class="popular-pages-list">
                    <li><a href="<?php echo home_url('/about/'); ?>"><?php _e('About Us', 'prmtec'); ?></a></li>
                    <li><a href="<?php echo home_url('/services/'); ?>"><?php _e('Our Services', 'prmtec'); ?></a></li>
                    <li><a href="<?php echo home_url('/products/'); ?>"><?php _e('Our Products', 'prmtec'); ?></a></li>
                    <li><a href="<?php echo home_url('/contact/'); ?>"><?php _e('Contact Us', 'prmtec'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
