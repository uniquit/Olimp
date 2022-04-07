<div id="one_click_demo" class="spiko-tab-pane panel-close">
    <?php 
	$spiko_actions = $this->recommended_actions;
	$spiko_actions_todo = get_option( 'recommended_actions', false );
	$spiko_spicebox = $spiko_actions[0];
	?>
	<div class="action-list">
		<?php if($spiko_spicebox):?>
		<div class="action col-md-6" id="">
			<div class="action-box">
				<div class="action-watch">
				<?php if(!$spiko_spicebox['is_done']): ?>
					<?php if(!isset($spiko_actions_todo[$spiko_spicebox['id']]) || !$spiko_actions_todo[$spiko_spicebox['id']]): ?>
						<span class="dashicons dashicons-visibility"></span>
					<?php else: ?>
						<span class="dashicons dashicons-hidden"></span>
					<?php endif; ?>
				<?php else: ?>
					<span class="dashicons dashicons-yes"></span>
				<?php endif; ?>
				</div>
				<div class="action-inner">
					<h3 class="action-title"><?php echo esc_html($spiko_spicebox['title']); ?></h3>
					<div class="action-desc"><?php echo esc_html($spiko_spicebox['desc']); ?></div>
					<?php echo wp_kses_post($spiko_spicebox['link']); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>