<?php 
	$spiko_actions = $this->recommended_actions;
	$spiko_actions_todo = get_option( 'recommended_actions', false );
?>
<div id="recommended_actions" class="spiko-tab-pane panel-close">
	<div class="action-list">
		<?php if($spiko_actions): foreach ($spiko_actions as $key => $spiko_val): ?>
		<div class="action col-md-6" id="<?php echo esc_attr($spiko_val['id']); ?>">
			<div class="action-box">
				<div class="action-watch">
				<?php if(!$spiko_val['is_done']): ?>
					<?php if(!isset($spiko_actions_todo[$spiko_val['id']]) || !$spiko_actions_todo[$spiko_val['id']]): ?>
						<span class="dashicons dashicons-visibility"></span>
					<?php else: ?>
						<span class="dashicons dashicons-hidden"></span>
					<?php endif; ?>
				<?php else: ?>
					<span class="dashicons dashicons-yes"></span>
				<?php endif; ?>
				</div>
				<div class="action-inner">
					<h3 class="action-title"><?php echo esc_html($spiko_val['title']); ?></h3>
					<div class="action-desc"><?php echo esc_html($spiko_val['desc']); ?></div>
					<?php echo wp_kses_post($spiko_val['link']); ?>
				</div>
			</div>
		</div>
		<?php endforeach; endif; ?>
	</div>
</div>