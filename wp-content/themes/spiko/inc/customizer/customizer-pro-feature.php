<?php //Pro Details
function spiko_pro_feature_customizer( $wp_customize ) {
    class WP_Pro_Feature_Customize_Control extends WP_Customize_Control {
        public $type = 'new_menu';
        /**
        * Render the control's content.
        */
        public function render_content() {
        ?>
        <div class="spiko-pro-features-customizer">
            <ul class="spiko-pro-features">
                <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Advanced Hook Settings','spiko'  ); ?>
                </li>
                <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Multiple Blog Templates','spiko'  ); ?>
                </li>   
                <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Portfolio Management','spiko'  ); ?>
                </li>
                <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Slide Variations','spiko'  ); ?>
                </li>
              <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Create Unlimited Services','spiko'  ); ?>
                </li>
                 <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Callout Section','spiko'  ); ?>
                </li>
              <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Manage Contact Details','spiko'  ); ?>
                </li>
                <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Testimonial Variations','spiko'  ); ?>
                </li>
                <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Client Section','spiko'  ); ?>
                </li>
              <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Team Variations','spiko'  ); ?>
                </li>
              <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Custom Color Schemes','spiko'  ); ?>
                </li>
              <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Section Reordering','spiko'  ); ?>
                </li>
                  <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Sections Shortcode','spiko'  ); ?>
                </li>
                <li>
                    <span class="spiko-pro-label"><?php esc_html_e( 'PRO','spiko'  ); ?></span>
                    <?php esc_html_e( 'Quality Support','spiko'  ); ?>
                </li>
            </ul>
            <a target="_blank" href="<?php echo esc_url('https://spicethemes.com/spiko-plus');?>" class="spiko-pro-button button-primary"><?php esc_html_e( 'UPGRADE TO PRO','spiko'  ); ?></a>
            <hr>
        </div>
        <?php
        }
    }
    $wp_customize->add_section( 'spiko_pro_feature_section' , array(
    		'title'      => esc_html__('View PRO Details', 'spiko' ),
    		'priority'   => 1,
       	) );
    $wp_customize->add_setting(
        'upgrade_pro_feature',
        array(
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )	
    );
    $wp_customize->add_control( new WP_Pro_Feature_Customize_Control( $wp_customize, 'upgrade_pro_feature', array(
    		'section' => 'spiko_pro_feature_section',
    		'setting' => 'upgrade_pro_feature',
        ))
    );
    class WP_Feature_Document_Customize_Control extends WP_Customize_Control {
        public $type = 'new_menu';
        /**
        * Render the control's content.
        */
        public function render_content() {
        ?>
       
         <div class="spiko-pro-content">
            <ul class="spiko-pro-des">
                    <li> <?php esc_html_e('With individual hook settings, you can insert html or php code according to your needs.','spiko' );?></li>
                    <li> <?php esc_html_e('The theme comes with multiple blog templates like blog switcher, blog list view, and blog masonry etc.','spiko' );?></li>
                    <li> <?php esc_html_e('Create a professional-looking portfolio.','spiko' );?></li>
                    <li> <?php esc_html_e('PRO version comes with slide variation options, so you can adjust your content through text alignment.','spiko' );?></li>
                    <li> <?php esc_html_e('Add as many services as you like. You can even display each service on a separate page.','spiko' );?></li>       
                    <li> <?php esc_html_e('Theme comes with a beautifully designed section where you can manage your contact details.','spiko' );?></li>
                    <li> <?php esc_html_e('Show all your team members, clients, testimonials on front page.','spiko' );?></li>
                    <li> <?php esc_html_e('You can select amongst predefined color skins, or you can create your own without writing any CSS code.','spiko' );?></li>
                    <li> <?php esc_html_e('The layout manager will help you rearrange all sections.','spiko' );?></li>
                    <li> <?php esc_html_e('The theme comes with a homepage sections shortcode used to add the homepage sections in other pages with any combination.','spiko' );?></li>
                    <li> <?php esc_html_e('Translation-ready, the theme supports popular plugins WPML and Polylang.','spiko' );?></li>
                    <li> <?php esc_html_e('24/7 professional support for Google Maps.','spiko' );?></li>
                    <li> <?php esc_html_e('Dedicated support, widget and sidebar management.','spiko' );?></li>
                </ul>
         </div>
        <?php
        }
    }

    $wp_customize->add_setting(
        'spiko_pro_feature',
        array(
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )	
    );
    $wp_customize->add_control( new WP_Feature_Document_Customize_Control( $wp_customize, 'spiko_pro_feature', array(	
    		'section' => 'spiko_pro_feature_section',
    		'setting' => 'spiko_pro_feature',
        ))
    );

}
add_action( 'customize_register', 'spiko_pro_feature_customizer' ); ?>