<?php
/**
 * The template for displaying comments
 *
 * @package PRIMEDITECH
 * @version 1.0
 */

// If the current post is protected by a password and the visitor has not provided the password, return early.
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ('1' === $comments_number) {
                printf(
                    _x('One thought on &ldquo;%s&rdquo;', 'comments title', 'prmtec'),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf(
                    _nx(
                        '%1$s thought on &ldquo;%2$s&rdquo;',
                        '%1$s thoughts on &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'prmtec'
                    ),
                    number_format_i18n($comments_number),
                    '<span>' . get_the_title() . '</span>'
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size' => 50,
            ));
            ?>
        </ol>

        <?php
        // Are there comments to navigate through?
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
        <nav id="comment-nav-below" class="navigation comment-navigation">
            <h2 class="screen-reader-text"><?php _e('Comment navigation', 'prmtec'); ?></h2>
            <div class="nav-links">
                <div class="nav-previous"><?php previous_comments_link(__('Older Comments', 'prmtec')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments', 'prmtec')); ?></div>
            </div>
        </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note.
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
    ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'prmtec'); ?></p>
    <?php endif; ?>

    <?php
    comment_form(array(
        'title_reply'          => __('Leave a Comment', 'prmtec'),
        'title_reply_to'       => __('Leave a Reply to %s', 'prmtec'),
        'cancel_reply_link'    => __('Cancel Reply', 'prmtec'),
        'label_submit'         => __('Post Comment', 'prmtec'),
        'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun', 'prmtec') . '</label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>',
        'must_log_in'          => '<p class="must-log-in">' . sprintf(
            __('You must be <a href="%s">logged in</a> to post a comment.', 'prmtec'),
            wp_login_url(apply_filters('the_permalink', get_permalink()))
        ) . '</p>',
        'logged_in_as'         => '<p class="logged-in-as">' . sprintf(
            __('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'prmtec'),
            get_edit_user_link(),
            $user_identity,
            wp_logout_url(apply_filters('the_permalink', get_permalink()))
        ) . '</p>',
    ));
    ?>
</div>
