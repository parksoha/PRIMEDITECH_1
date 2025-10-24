<?php
/**
 * The template for displaying search results pages
 *
 * @package PRIMEDITECH
 * @version 1.0
 */

get_header(); ?>

<main class="main-content" id="main-content">
    <div class="container">
        <div class="search-content">
            <header class="search-header">
                <h1 class="search-title">
                    <?php
                    printf(
                        __('Search Results for: %s', 'prmtec'),
                        '<span class="search-term">' . get_search_query() . '</span>'
                    );
                    ?>
                </h1>
            </header>
            
            <div class="search-results">
                <?php if (have_posts()) : ?>
                    <div class="search-info">
                        <p>
                            <?php
                            printf(
                                _n(
                                    'Found %d result for your search.',
                                    'Found %d results for your search.',
                                    $wp_query->found_posts,
                                    'prmtec'
                                ),
                                $wp_query->found_posts
                            );
                            ?>
                        </p>
                    </div>
                    
                    <div class="search-posts">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('search-result'); ?>>
                                <header class="search-result-header">
                                    <h2 class="search-result-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="search-result-meta">
                                        <span class="post-type">
                                            <?php echo get_post_type_object(get_post_type())->labels->singular_name; ?>
                                        </span>
                                        <span class="post-date">
                                            <i class="fas fa-calendar"></i>
                                            <?php echo get_the_date(); ?>
                                        </span>
                                    </div>
                                </header>
                                
                                <?php if (has_post_thumbnail()) : ?>
                                <div class="search-result-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                                
                                <div class="search-result-content">
                                    <div class="search-result-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    
                                    <footer class="search-result-footer">
                                        <a href="<?php the_permalink(); ?>" class="read-more">
                                            <?php _e('Read More', 'prmtec'); ?> <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </footer>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    
                    <!-- 페이지네이션 -->
                    <nav class="search-pagination">
                        <?php
                        the_posts_pagination(array(
                            'prev_text' => '<i class="fas fa-chevron-left"></i> ' . __('Previous', 'prmtec'),
                            'next_text' => __('Next', 'prmtec') . ' <i class="fas fa-chevron-right"></i>',
                        ));
                        ?>
                    </nav>
                    
                <?php else : ?>
                    <div class="no-search-results">
                        <div class="no-results-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h2><?php _e('No results found', 'prmtec'); ?></h2>
                        <p>
                            <?php
                            printf(
                                __('Sorry, no results were found for "%s". Please try again with different keywords.', 'prmtec'),
                                get_search_query()
                            );
                            ?>
                        </p>
                        
                        <!-- 검색 폼 -->
                        <div class="search-form-container">
                            <h3><?php _e('Try searching again', 'prmtec'); ?></h3>
                            <?php get_search_form(); ?>
                        </div>
                        
                        <!-- 인기 페이지 링크 -->
                        <div class="popular-pages">
                            <h3><?php _e('Popular Pages', 'prmtec'); ?></h3>
                            <ul class="popular-pages-list">
                                <li><a href="<?php echo home_url('/about/'); ?>"><?php _e('About Us', 'prmtec'); ?></a></li>
                                <li><a href="<?php echo home_url('/services/'); ?>"><?php _e('Our Services', 'prmtec'); ?></a></li>
                                <li><a href="<?php echo home_url('/products/'); ?>"><?php _e('Our Products', 'prmtec'); ?></a></li>
                                <li><a href="<?php echo home_url('/contact/'); ?>"><?php _e('Contact Us', 'prmtec'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
