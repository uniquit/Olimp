<?php 
/**
 * Template Name: Business Template
 */
get_header();

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// For Free Version
if ( ! function_exists( 'spiko_plus_activate' ) ):

	if ( function_exists( 'spiceb_activate' ) ):

		do_action( 'spiceb_spiko_slider_action' , false);
		do_action( 'spiceb_spiko_services_action', false);
		do_action( 'spiceb_spiko_testimonial_action' ,false);
		do_action( 'spiceb_spiko_team_action' ,false);
		do_action( 'spiceb_spiko_news_action' ,false);
	else:
	?>
	<p class="spiko alert alert-warning text-center" role="alert">
	<?php echo esc_html__('This template shows the homepage sections, and to show these sections you have to activate the companion plugin.','spiko' );?>
	</p>
	<?php
	endif;

endif;

// For Pro Version
if ( function_exists( 'spiko_plus_activate' ) ):
		//$spiko_front_page = get_theme_mod('front_page_data','services,cta2,portfolio,testimonial,news,fun,team,wooproduct,client,contact');
		$spiko_front_page = get_theme_mod('front_page_data','services,cta,portfolio,testimonial,team,news,fun,wooproduct,client');
		do_action( 'spiko_plus_before_slider_section_hook', false);
		do_action( 'spiko_plus_slider_action' , false);		
		do_action( 'spiko_plus_after_slider_section_hook', false);
	    $spiko_data =is_array($spiko_front_page) ? $spiko_front_page : explode(",",$spiko_front_page);			
		if($spiko_data) 
		{
			foreach($spiko_data as $key=>$value)
			{	
                do_action( 'spiko_plus_before_'.$value.'_section_hook', false);
				
				do_action( 'spiko_plus_'.$value.'_action', false);
				
				do_action( 'spiko_plus_after_'.$value.'_section_hook', false);

			}
		}

endif;
get_footer();