<?php
/**
 * The sidebar containing the main widget area
 *
 * @package PRIMEDITECH
 * @version 1.0
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="widget-area sidebar" role="complementary">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>
