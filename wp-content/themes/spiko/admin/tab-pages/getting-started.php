<?php
/**
 * Getting started template
 */
?>
<div id="getting_started" class="spiko-tab-pane active">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="spiko-info-title text-center"><?php echo esc_html__('Spiko Theme Configuration','spiko'); ?><?php if( !empty($spiko['Version']) ): ?> <sup id="spiko-theme-version"><?php echo esc_html( $spiko['Version'] ); ?> </sup><?php endif; ?></h1>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">

			<div class="col-md-12">
			    <div class="spiko-page" style="border: none;box-shadow: none;">
					<div class="mockup">
			    		<img src="<?php echo SPIKO_TEMPLATE_DIR_URI.'/admin/assets/img/mockup-lite.png';?>"  width="100%">
			    	</div>
				</div>	
			</div>	

		</div>
		
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-6"> 
				<div class="spiko-page">
					<div class="spiko-page-top"><?php esc_html_e( 'Additional features in Spiko Plus', 'spiko' ); ?></div>
					<div class="spiko-page-content">
						<ul class="spiko-page-list-flex">
							<li>
								<?php echo esc_html__('Unlimited slides','spiko'); ?>
							</li>
							<li>
								<?php echo esc_html__('Unlimited services','spiko'); ?>
							</li>					
							<li>
								<?php echo esc_html__('Boxed layout support','spiko'); ?>
							</li>
							<li>
								<?php echo esc_html__('Portfolio section','spiko'); ?>
							</li>
							<li>
								<?php echo esc_html__('Funfact section','spiko'); ?>
							</li>
							<li>
								<?php echo esc_html__('Google Maps section','spiko'); ?>
							</li>
							<li>
								<?php echo esc_html__('Client section','spiko'); ?>
							</li>
							<li>
								<?php echo esc_html__('Multiple Blog templates','spiko'); ?>
							</li>
						
							<li>
								<?php echo esc_html__('WPML support','spiko'); ?>
							</li>
							
							<li>
								<?php echo esc_html__('Drag and drop section orders','spiko'); ?>
							</li>
							
							<li>
								<?php echo esc_html__('Team section with grid effect','spiko'); ?>
							</li>
							
							<li>
								<?php echo esc_html__('Shop section with unlimited items','spiko'); ?>
							</li>
							<li>
								<?php echo esc_html__('Shop section with carousel effect','spiko'); ?>
							</li>
							<li>
								<?php echo esc_html__('Testimonial section with grid effect','spiko'); ?>
							</li>
							<li>
								<?php echo esc_html__('Homepage Sections Before/After Hooks','spiko'); ?>
							</li>
							
							<li>
								<?php echo esc_html__('Homepage Sections Shortcode','spiko'); ?>
							</li>
							
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6"> 
				<div class="spiko-page">
					<div class="spiko-page-top"><?php esc_html_e( 'Links to Customizer Settings', 'spiko' ); ?></div>
					<div class="spiko-page-content">
						<ul class="spiko-page-list-flex">
							<li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=title_tagline' ) ); ?>" target="_blank"><?php esc_html_e('Site Logo','spiko'); ?></a>
							</li>
							<li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=spiko_theme_panel' ) ); ?>" target="_blank"><?php esc_html_e('Blog Options','spiko'); ?></a>
							</li>
							 <li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=widgets' ) ); ?>" target="_blank"><?php esc_html_e('Footer Widgets','spiko'); ?></a>
							</li>
							<li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=section_settings' ) ); ?>" target="_blank"><?php esc_html_e('Homepage Sections','spiko'); ?></a>
							</li>
							<li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=spiko_general_settings' ) ); ?>" target="_blank"><?php esc_html_e('General Settings','spiko'); ?></a>
							</li>
							<li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=colors_back_settings' ) ); ?>" target="_blank"><?php esc_html_e('Colors & Background','spiko'); ?></a>
							</li>
							<li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=spiko_typography_setting' ) ); ?>" target="_blank"><?php esc_html_e('Typography Settings','spiko'); ?></a>
							</li>
							<li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=theme_style' ) ); ?>" target="_blank"><?php esc_html_e('Theme Style Settings','spiko'); ?></a>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="spiko-page">
					<div class="spiko-page-top"><?php esc_html_e( 'Useful Links', 'spiko' ); ?></div>
					<div class="spiko-page-content">
						<ul class="spiko-page-list-flex">
							<li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url('https://spiko.spicethemes.com/'); ?>" target="_blank"><?php echo esc_html__('Spiko Demo','spiko'); ?></a>
							</li>
							<li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url('https://spiko-pro.spicethemes.com/'); ?>" target="_blank"><?php echo esc_html__('Spiko Plus Demo','spiko'); ?></a>
							</li>

							<li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/theme/spiko/'); ?>" target="_blank"><?php echo esc_html__('Spiko Theme Support','spiko'); ?></a>
							</li>
														
						    <li> 
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/theme/spiko/reviews/#new-post'); ?>" target="_blank"><?php echo esc_html__('Your feedback is valuable to us','spiko'); ?></a>
							</li>
							
							<li>
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/spiko-plus'); ?>" target="_blank"><?php echo esc_html__('Spiko Plus Details','spiko'); ?></a>
							</li>
							
						    <li> 
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/contact/'); ?>" target="_blank"><?php echo esc_html__('Pre-sales enquiry','spiko'); ?></a>
							</li> 

							<li> 
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/spiko-free-vs-plus/'); ?>" target="_blank"><?php echo esc_html__('Free vs Plus','spiko'); ?></a>
							</li> 

							<li> 
								<a class="spiko-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/spiko-changelog/'); ?>" target="_blank"><?php echo esc_html__('Changelog','spiko'); ?></a>
							</li> 
						</ul>
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>