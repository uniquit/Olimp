<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package draftly
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">


		

		<!--Nav start-->
		<header id="masthead" class="sheader site-header clearfix">
			<nav id="primary-site-navigation" class="primary-menu main-navigation clearfix">

				<a href="#" id="pull" class="smenu-hide toggle-mobile-menu menu-toggle" aria-controls="secondary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'draftly' ); ?></a>
				<div class="top-nav-wrapper">
					<div class="content-wrap">
						<div class="logo-container"> 

							<?php if ( has_custom_logo() ) : ?>
								<?php the_custom_logo(); ?>
							<?php else : ?>
								<a class="logofont" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php endif; ?>
						</div>
						<div class="center-main-menu">
							<?php
							wp_nav_menu( array(
								'theme_location'	=> 'menu-1',
								'menu_id'			=> 'primary-menu',
								'menu_class'		=> 'pmenu'
								) );
								?>
							</div>
						</div>
					</div>
				</nav>

				<div class="super-menu clearfix">
					<div class="super-menu-inner">
						<a href="#" id="pull" class="toggle-mobile-menu menu-toggle" aria-controls="secondary-menu" aria-expanded="false">

							<?php if ( has_custom_logo() ) : ?>
								<?php the_custom_logo(); ?>
							<?php else : ?>
								<a class="logofont" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php endif; ?>
						</a>
					</div>
				</div>
				<div id="mobile-menu-overlay"></div>
			</header>
			<!--Nav end-->


			<?php if ( get_theme_mod( 'only_show_header_frontpage' ) == '' ) : ?>

				<!-- Header img -->
				<?php if ( get_header_image() ) : ?>
					<div class="header-img-activated">
						<div class="content-wrap">

							<div class="bottom-header-wrapper">
								<div class="bottom-header-text">
									<?php if (get_theme_mod('header_img_text') ) : ?>
										<div class="content-wrap">
											<div class="bottom-header-title"><?php echo wp_kses_post(get_theme_mod('header_img_text')) ?></div>
										</div>
									<?php else : ?>
										<div class="content-wrap">
											<div class="bottom-header-title"><?php bloginfo( 'name' ) ?></div>
										</div>
									<?php endif; ?>
									<?php if (get_theme_mod('header_img_text_tagline') ) : ?>
										<div class="content-wrap">
											<div class="bottom-header-paragraph"><?php echo wp_kses_post(get_theme_mod('header_img_text_tagline')) ?></div>
										</div>
									<?php else : ?>
										<div class="content-wrap">
											<div class="bottom-header-paragraph"><?php bloginfo( 'description' ) ?></div>
										</div>
									<?php endif; ?> 

									<?php if (get_theme_mod('readmoretext') ) : ?>
										<div class="readmore-header">
											<a href="<?php echo wp_kses_post(get_theme_mod('readmorelink')) ?>"><?php echo wp_kses_post(get_theme_mod('readmoretext')) ?></a>
											<svg enable-background="new 0 0 50 41.5" version="1.1" viewBox="0 0 50 41.5" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
												<path d="m2.8 24.7h33.4l-10.5 10.5c-0.5 0.5-0.8 1.2-0.8 1.9s0.3 1.4 0.8 1.9l1.6 1.6c0.5 0.5 1.2 0.8 1.9 0.8s1.4-0.3 1.9-0.8l18-18c0.5-0.5 0.8-1.2 0.8-1.9s-0.3-1.4-0.8-1.9l-18-18c-0.4-0.5-1.1-0.8-1.9-0.8-0.7 0-1.4 0.3-1.9 0.8l-1.6 1.6c-0.5 0.5-0.8 1.2-0.8 1.9s0.3 1.4 0.8 1.9l10.6 10.6h-33.5c-1.5 0-2.8 1.3-2.8 2.8v2.4c0 1.5 1.3 2.7 2.8 2.7z"/>
											</svg>

										</div>
									<?php endif; ?> 

								</div>
								<img src="<?php echo esc_url(( get_header_image()) ); ?>" alt="<?php echo esc_attr(( get_bloginfo( 'title' )) ); ?>" />
							</div>
						</div>
					<?php endif; ?>
					<!-- / Header img -->

				<?php else : ?>
					<?php if ( is_front_page() ) : ?>

						<!-- Header img -->
						<?php if ( get_header_image() ) : ?>
							<div class="header-img-activated">
								<div class="content-wrap">

									<div class="bottom-header-wrapper">
										<div class="bottom-header-text">
											<?php if (get_theme_mod('header_img_text') ) : ?>
												<div class="content-wrap">
													<div class="bottom-header-title"><?php echo wp_kses_post(get_theme_mod('header_img_text')) ?></div>
												</div>
											<?php else : ?>
												<div class="content-wrap">
													<div class="bottom-header-title"><?php bloginfo( 'name' ) ?></div>
												</div>
											<?php endif; ?>
											<?php if (get_theme_mod('header_img_text_tagline') ) : ?>
												<div class="content-wrap">
													<div class="bottom-header-paragraph"><?php echo wp_kses_post(get_theme_mod('header_img_text_tagline')) ?></div>
												</div>
											<?php else : ?>
												<div class="content-wrap">
													<div class="bottom-header-paragraph"><?php bloginfo( 'description' ) ?></div>
												</div>
											<?php endif; ?>
											<?php if (get_theme_mod('readmoretext') ) : ?>
												<div class="readmore-header">
													<a href="<?php echo wp_kses_post(get_theme_mod('readmorelink')) ?>"><?php echo wp_kses_post(get_theme_mod('readmoretext')) ?></a>
													<svg enable-background="new 0 0 50 41.5" version="1.1" viewBox="0 0 50 41.5" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
														<path d="m2.8 24.7h33.4l-10.5 10.5c-0.5 0.5-0.8 1.2-0.8 1.9s0.3 1.4 0.8 1.9l1.6 1.6c0.5 0.5 1.2 0.8 1.9 0.8s1.4-0.3 1.9-0.8l18-18c0.5-0.5 0.8-1.2 0.8-1.9s-0.3-1.4-0.8-1.9l-18-18c-0.4-0.5-1.1-0.8-1.9-0.8-0.7 0-1.4 0.3-1.9 0.8l-1.6 1.6c-0.5 0.5-0.8 1.2-0.8 1.9s0.3 1.4 0.8 1.9l10.6 10.6h-33.5c-1.5 0-2.8 1.3-2.8 2.8v2.4c0 1.5 1.3 2.7 2.8 2.7z"/>
													</svg>


												</div>
											<?php endif; ?> 
										</div>
										<img src="<?php echo esc_url(( get_header_image()) ); ?>" alt="<?php echo esc_attr(( get_bloginfo( 'title' )) ); ?>" />
									</div>
								</div>

							<?php endif; ?>
							<!-- / Header img -->

						<?php endif; ?>
					<?php endif; ?>

					<?php if ( get_theme_mod( 'only_show_header_frontpage' ) == '' ) : ?>
						<?php if ( get_header_image() ) : ?>
						</div>
					<?php endif; ?>
				<?php else : ?>
					<?php if ( is_front_page() ) : ?>
						<?php if ( get_header_image() ) : ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>

			<div id="content" class="site-content clearfix">
				<div class="content-wrap">
