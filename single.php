<?php
/**
 * The template for displaying all single posts
 *
 * @package PRIMEDITECH
 * @version 1.0
 */

get_header(); ?>

<main class="main-content" id="main-content">
    <div class="container">
        <div class="single-post-content">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                    <header class="post-header">
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <div class="post-meta">
                            <span class="post-date">
                                <i class="fas fa-calendar"></i>
                                <?php echo get_the_date(); ?>
                            </span>
                            <span class="post-author">
                                <i class="fas fa-user"></i>
                                <?php the_author(); ?>
                            </span>
                            <?php if (has_category()) : ?>
                            <span class="post-categories">
                                <i class="fas fa-folder"></i>
                                <?php the_category(', '); ?>
                            </span>
                            <?php endif; ?>
                        </div>
                    </header>
                    
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="post-featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <?php endif; ?>
                    
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    
                    <?php if (has_tag()) : ?>
                    <footer class="post-footer">
                        <div class="post-tags">
                            <strong><?php _e('Tags:', 'prmtec'); ?></strong>
                            <?php the_tags('', ', ', ''); ?>
                        </div>
                    </footer>
                    <?php endif; ?>
                </article>
                
                <!-- 네비게이션 -->
                <nav class="post-navigation">
                    <div class="nav-previous">
                        <?php previous_post_link('%link', '<i class="fas fa-arrow-left"></i> %title'); ?>
                    </div>
                    <div class="nav-next">
                        <?php next_post_link('%link', '%title <i class="fas fa-arrow-right"></i>'); ?>
                    </div>
                </nav>
                
            <?php endwhile; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
