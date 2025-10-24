<?php
/**
 * Template for displaying search forms
 *
 * @package PRIMEDITECH
 * @version 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search-field" class="screen-reader-text"><?php _e('Search for:', 'prmtec'); ?></label>
    <div class="search-form-wrapper">
        <input type="search" id="search-field" class="search-field" placeholder="<?php _e('Search...', 'prmtec'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit" aria-label="<?php _e('Search', 'prmtec'); ?>">
            <i class="fas fa-search"></i>
        </button>
    </div>
</form>
