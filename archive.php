<?php
/**
 * The template for displaying archive pages
 *
 * @package PRIMEDITECH
 * @version 1.0
 */

get_header(); ?>

<main class="main-content" id="main-content">
    <div class="container">
        <div class="archive-content">
            <header class="archive-header">
                <h1 class="archive-title">
                    <?php
                    if (is_category()) {
                        single_cat_title();
                    } elseif (is_tag()) {
                        single_tag_title();
                    } elseif (is_author()) {
                        the_author();
                    } elseif (is_date()) {
                        if (is_year()) {
                            echo get_the_date('Y');
                        } elseif (is_month()) {
                            echo get_the_date('F Y');
                        } elseif (is_day()) {
                            echo get_the_date();
                        }
                    } else {
                        _e('Archives', 'prmtec');
                    }
                    ?>
                </h1>
                <?php if (category_description() || tag_description()) : ?>
                <div class="archive-description">
                    <?php echo category_description() . tag_description(); ?>
                </div>
                <?php endif; ?>
            </header>
            
            <div class="archive-posts">
                <?php if (have_posts()) : ?>
                    <div class="posts-grid">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                                
                                <div class="post-content">
                                    <header class="post-header">
                                        <h2 class="post-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-date">
                                                <i class="fas fa-calendar"></i>
                                                <?php echo get_the_date(); ?>
                                            </span>
                                            <span class="post-author">
                                                <i class="fas fa-user"></i>
                                                <?php the_author(); ?>
                                            </span>
                                        </div>
                                    </header>
                                    
                                    <div class="post-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    
                                    <footer class="post-footer">
                                        <a href="<?php the_permalink(); ?>" class="read-more">
                                            <?php _e('Read More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </footer>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    
                    <!-- 페이지네이션 -->
                    <nav class="pagination">
                        <?php
                        the_posts_pagination(array(
                            'prev_text' => '<i class="fas fa-chevron-left"></i> ' . __('Previous', 'prmtec'),
                            'next_text' => __('Next', 'prmtec') . ' <i class="fas fa-chevron-right"></i>',
                        ));
                        ?>
                    </nav>
                    
                <?php else : ?>
                    <div class="no-posts">
                        <h2><?php _e('No posts found', 'prmtec'); ?></h2>
                        <p><?php _e('Sorry, no posts were found in this archive.', 'prmtec'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
