<?php
/**
 * Helper functions.
 *
 * @package spiko
 */

if (!function_exists('spiko_custom_navigation')) :

    function spiko_custom_navigation() {
        echo '<div class="row justify-content-center">';
        if (!is_rtl()) {
            the_posts_pagination(array(
                'prev_text' => __('<i class="fa fa-angle-double-left"></i>', 'spiko' ),
                'next_text' => __('<i class="fa fa-angle-double-right"></i>', 'spiko' ),
            ));
        } else {
            the_posts_pagination(array(
                'prev_text' => __('<i class="fa fa-angle-double-right"></i>', 'spiko' ),
                'next_text' => __('<i class="fa fa-angle-double-left"></i>', 'spiko' ),
            ));
        }
        echo '</div>';
    }

endif;
add_action('spiko_post_navigation', 'spiko_custom_navigation');

function spiko_comment($comment, $args, $depth) {
    $tag = 'div';
    $add_below = 'comment';
    ?>
    <div class="media comment-box">
        <span class="pull-left-comment">
    <?php echo get_avatar($comment, 100, null, 'comments user', array('class' => array('img-fluid comment-img'))); ?>
        </span>
        <div class="media-body">
            <div class="comment-detail">
                <h5 class="comment-detail-title"><?php esc_html(comment_author()); ?><time class="comment-date"><?php printf(esc_html__('%1$s  %2$s', 'spiko' ), esc_html(get_comment_date()), esc_html(get_comment_time())); ?></time></h5>
    <?php comment_text(); ?>

                <div class="reply">
    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
            </div>


        </div>      

    </div>
    <?php
}

if (!function_exists('spiko_posted_content')) :

    /**
     * Content
     *
     */
    function spiko_posted_content() {
        $blog_content = get_theme_mod('spiko_blog_content', 'excerpt');
        $excerpt_length = get_theme_mod('spiko_blog_content_length', 30);

        if ('excerpt' == $blog_content) {
            $excerpt = spiko_the_excerpt(absint($excerpt_length));
            if (!empty($excerpt)) :
                ?>


                <?php
                echo wp_kses_post(wpautop($excerpt));
                ?>


            <?php endif;
        } else {
            ?>

            <?php the_content(); ?>

        <?php }
        ?>
    <?php
    }

endif;



if (!function_exists('spiko_the_excerpt')) :

    /**
     * Generate excerpt.
     *
     */
    function spiko_the_excerpt($length = 0, $post_obj = null) {

        global $post;

        if (is_null($post_obj)) {
            $post_obj = $post;
        }

        $length = absint($length);

        if (0 === $length) {
            return;
        }

        $source_content = $post_obj->post_content;

        if (!empty($post_obj->post_excerpt)) {
            $source_content = $post_obj->post_excerpt;
        }

        $source_content = preg_replace('`\[[^\]]*\]`', '', $source_content);
        $trimmed_content = wp_trim_words($source_content, $length, '&hellip;');
        return $trimmed_content;
    }

endif;

if (!function_exists('spiko_button_title')) :

    /**
     * Display Button on Archive/Blog Page 
     */
    function spiko_button_title() {
        if (get_theme_mod('spiko_enable_blog_read_button', true) == true):
            $blog_button = get_theme_mod('spiko_blog_button_title', 'READ MORE');

            if (empty($blog_button)) {
                return;
            }
            echo '<p><a href = "' . esc_url(get_the_permalink()) . '" class="btn-small">' . esc_html($blog_button) . ' <i class="fa fa-angle-double-right"></i></a></p>';

        endif;
    }

endif;

/**
 * Displays the author name
 */
function spiko_get_author_name($post) {

    $user_id = $post->post_author;
    if (empty($user_id)) {
        return;
    }

    $user_info = get_userdata($user_id);
    echo esc_html($user_info->display_name);
}

function spiko_footer_section_hook() {
    ?>
    <footer class="site-footer">  
        <div class="container">
            <?php if (is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3') | is_active_sidebar('footer-sidebar-4')): ?> 
                <?php get_template_part('sidebar', 'footer');
            endif;?>  
        </div>

        <!-- Animation lines-->
        <div _ngcontent-kga-c2="" class="lines">
            <div _ngcontent-kga-c2="" class="line"></div>
            <div _ngcontent-kga-c2="" class="line"></div>
            <div _ngcontent-kga-c2="" class="line"></div>
        </div>
        <!--/ Animation lines-->
        
        <?php if (get_theme_mod('ftr_bar_enable', true) == true): ?>
            <div class="site-info text-center">
            <?php echo wp_kses_post(get_theme_mod('footer_copyright', '<span class="copyright">'.__( 'Proudly powered by <a href="https://wordpress.org">WordPress</a> | Theme: <a href="https://spicethemes.com/spiko-wordpress-theme" rel="nofollow">Spiko</a> by <a href="https://spicethemes.com" rel="nofollow">Spicethemes</a>', 'spiko').'</span>')); ?>     
            </div>
        <?php endif; ?>
         <style type="text/css">
    <?php
    if (get_theme_mod('testimonial_image_overlay', true) != false) {
        $testimonial_overlay_section_color = get_theme_mod('testimonial_overlay_section_color', 'rgba(255,255,255,0.8)');
        ?>
        .section-space.testimonial:before {
            background-color:<?php echo esc_attr($testimonial_overlay_section_color); ?>;
        }
        
        <?php } ?>

    </style>
    </footer>
    <?php
    $scrolltotop_setting_enable = get_theme_mod('scrolltotop_setting_enable', true);
    if ($scrolltotop_setting_enable == true) {
        ?>
        <div class="scroll-up custom right"><a href="#totop"><i class="fa fa-arrow-up"></i></a></div>
    <?php }
}

add_action('spiko_footer_section_hook', 'spiko_footer_section_hook');

if ( ! function_exists( 'spiko_plus_activate' ) ):

//Container Setting For Page
function spiko_container()
{
 
$container_width= "";
return $container_width;
}

//Container Setting For Blog Post
function spiko_blog_post_container()
{

$container_width= "";
return $container_width;
}

//Conainer Setting For Single Post

function spiko_single_post_container()
{
$container_width= "";
return $container_width;
}
//Preloader feature section function
function spiko_preloader_feaure_section_fn(){
if(get_theme_mod('preloader_enable',false)==true):?>
  <div id="preloader1" class="spiko-loader">
        <div class="spiko-preloader-cube">
        <div class="spiko-cube1 spiko-cube"></div>
        <div class="spiko-cube2 spiko-cube"></div>
        <div class="spiko-cube4 spiko-cube"></div>
        <div class="spiko-cube3 spiko-cube"></div>
    </div> </div>
  <?php endif;
}
add_action('spiko_preloader_feaure_section_hook','spiko_preloader_feaure_section_fn');

//Admin customizer preview
if ( ! function_exists( 'spiko_customizer_preview_scripts' ) ) {
    function spiko_customizer_preview_scripts() {
        wp_enqueue_script( 'spiko-customizer-preview', trailingslashit( get_template_directory_uri() ) . 'inc/customizer/customizer-slider/js/customizer-preview.js', array( 'customize-preview', 'jquery' ) );
    }
}
add_action( 'customize_preview_init', 'spiko_customizer_preview_scripts' );

endif;