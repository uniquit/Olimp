<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spiko
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
if (have_comments()) : ?>
    <article class="comment-section">
        <div class="comment-title">
            <h3>
                <?php
                $spiko_comment_count = get_comments_number();
                if ('1' === $spiko_comment_count) {
                    printf(
                            /* translators: 1: title. */
                            esc_html__('1 comment', 'spiko' ),
                            '<span>' . esc_html(get_the_title()) . '</span>'
                    );
                } else {
                    printf(
                            /* translators: 1: comment count number, 2: title. */
                            esc_html(_nx('%1$s comment', '%1$s comments', $spiko_comment_count, 'comments title', 'spiko' )),
                            esc_html(number_format_i18n($spiko_comment_count)),
                            '<span>' . esc_html(get_the_title()) . '</span>'
                    );
                }
                ?>
            </h3>
        </div>
        <?php
        the_comments_navigation();
        wp_list_comments('type=comment&callback=spiko_comment');
        the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if (!comments_open()) :
            ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'spiko' ); ?></p>
        <?php endif; ?>
    </article>
<?php endif;
echo '<article class="comment-form">';
  
     $fields=array(
        'author' => '<p><span class="blog-form-group your-name">
                    <input type="text" name="author" value="" size="40" class="blog-form-control" placeholder="'.__('Your Name','spiko' ).'" aria-required="true" arai-invalid="false">
                   </span></p>',
        'email' => '<p><span class="blog-form-group your-email">
                     <input type="email" name="email" value="" size="40" class="blog-form-control" placeholder="'.__('Your Email','spiko' ).'" aria-required="true" arai-invalid="false">
                   </span></p>',
       'url' => '<p>
                 <span class="blog-form-group your-subject">
                   <input type="text" name="url" value="" size="40" class="blog-form-control" placeholder="'.__('Website','spiko' ).'" aria-required="true" arai-invalid="false">
                   </span>
                </p>',
        

        );
        function spiko_fields($fields) { 
            return $fields;
        }
        add_filter('comment_form_default_fields','spiko_fields');
            $defaults = array(
            'fields'=> apply_filters( 'comment_form_default_fields', $fields ),
            'comment_field'=> '<p><span class="blog-form-group-textarea your-message">
                   <textarea id="comments" type="text" rows="4" name="comment" value="" size="40" class="blog-form-control" placeholder="'.esc_html__('Message','spiko' ).'" aria-required="true" arai-invalid="false"></textarea>
                 </span></p>',     
            'logged_in_as' => '<p class="blog-post-info-detail">' . esc_html__("Logged in as",'spiko'  ).' '.'<a href="'. esc_url(admin_url( 'profile.php' )).'">'.$user_identity.'</a>'. '<a href="'. esc_url(wp_logout_url( get_permalink() )).'" title="'.esc_html__('Log out from this Account','spiko' ).'">'.' '.esc_html__("Log out",'spiko' ).'?</a>' . '</p>',
            'id_submit'=> 'blogdetail-btn',
            'label_submit'=>esc_html__('Send Message','spiko' ),
            'comment_notes_after'=> '',
            'comment_notes_before' => '',
            'title_reply'=> '<div class="comment-title">'.esc_html__('Leave a Reply', 'spiko' ).'</div>',
            'id_form'=> 'commentform'
            );
            ob_start();
            comment_form($defaults);
        
    
echo '</article>';?>