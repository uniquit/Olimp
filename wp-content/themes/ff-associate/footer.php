<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FF Associate
 */

	$show_content = ff_associate_gtm( 'ff_associate_show_homepage_content' );

	if ( $show_content || ! is_front_page() ) : ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- #content -->
	<?php endif; ?>

		<?php do_action( 'ff_associate_after_content' ); ?>
		
		<footer id="colophon" class="site-footer">
			<?php get_template_part( 'template-parts/footer/footer', 'widget' ); ?>

			<?php get_template_part( 'template-parts/footer/site-info' ); ?>
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<div><div class="rn-gradient-circle"></div><div class="rn-gradient-circle theme-pink"></div></div>
	<div id="scrollup" class="displaynone">
		<a title="<?php echo esc_attr__( 'Go to Top', 'ff-associate' ); ?>" class="scrollup" href="#"><i class="fas fa-angle-up"></i></a>
	</div>

	<?php wp_footer(); ?>
</body>
</html>
