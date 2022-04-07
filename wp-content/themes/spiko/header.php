<?php
/**
 * The header for our theme
 *
 * @package spiko
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <?php if (is_singular() && pings_open(get_queried_object())) : 
            echo '<link rel="pingback" href=" '.esc_url(get_bloginfo( 'pingback_url' )).' ">';
        endif;
        wp_head(); ?>   
    </head>
<?php
if(get_theme_mod('banner_enable',true)==true) { $spiko_banner='banner'; } else { $spiko_banner='remove-banner'; }
if(get_theme_mod('spiko_layout_style', 'wide') == "boxed") { $spiko_class = "boxed"; } else { $spiko_class = "wide"; } ?>
<body <?php body_class($spiko_class." ". $spiko_banner." ".get_theme_mod('spiko_color_skin','light')); ?> >
    <?php wp_body_open(); ?>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'spiko'  ); ?></a>
               <div id="wrapper"> 
                <?php 
                global $template;
                global $woocommerce;
                        
                if ( ! function_exists( 'spiko_plus_activate' ) ):
                    do_action('spiko_preloader_feaure_section_hook');         
                    get_template_part('inc/header/header-nav');
                    if(basename($template)!='template-business.php'):
                        spiko_breadcrumbs();
                    endif;
                else:   
                    do_action('spiko_plus_preloader_feaure_section_hook');                     
                    do_action('spiko_plus_header_feaure_section_hook');
                    if(basename($template)!='template-business.php'):
                        spiko_breadcrumbs();
                    endif;
                endif;?>
                    <div id="content">