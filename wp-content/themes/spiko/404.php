<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package spiko
 */
get_header();?>
<section class="section-space error-page bg-default">
            <div class="container<?php echo esc_html(spiko_container());?>">         
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="text-center">
                            <h2 class="title mb-0 count-up" data-from="0" data-to="404" data-time="2000"><?php esc_html_e('404', 'spiko' ); ?></h2>
                            <h3 class="sub-title"><?php esc_html_e('Oops! Page is not available','spiko' ); ?></h3>
                            <p><?php esc_html_e("We're not being able to find the page you're looking for",'spiko' ); ?></p>
                            <div class="mx-auto pt-4">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-small btn-default"><?php esc_html_e('Back to Homepage', 'spiko' ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </section>
<?php get_footer();?>