<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>	
	<?php
	if(has_post_thumbnail()):?>
	<figure class="post-thumbnail">
		<?php the_post_thumbnail('full',array('class'=>'img-fluid','alt'=>'blog-image'));?>			
	</figure>	
	<?php endif;?>

    <div class="post-content">
    <?php if(get_theme_mod('spiko_enable_single_post_date',true) || get_theme_mod('spiko_enable_single_post_admin',true) || get_theme_mod('spiko_enable_single_post_category',true) || get_theme_mod('spiko_enable_single_post_tag',true)): ?>
		<?php
		if(get_theme_mod('spiko_enable_single_post_date',true)==true):?>
		<?php 
		if(has_post_thumbnail()) { ?> <div class="entry-date"><span class="date"><?php echo esc_html(get_the_date()); ?></span><?php }
	else{ ?><div class="remove-image"><span class="date"><?php echo esc_html(get_the_date()); ?></span> <?php  } ?>
		<?php 
		echo '</div>';
		endif;?>
    <?php if(get_theme_mod('spiko_enable_single_post_admin',true) || get_theme_mod('spiko_enable_single_post_category',true) || get_theme_mod('spiko_enable_single_post_tag',true)): ?>
		<div class="entry-meta">		
			<?php
			if(get_theme_mod('spiko_enable_single_post_admin',true)==true):?>
				<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" alt="<?php esc_attr_e('tag','spiko'); ?>"><i class="fa fa-user"></i><span class="author"><?php echo esc_html(get_the_author());?>
				</span></a>
			<?php endif;


			if(get_theme_mod('spiko_enable_single_post_category',true)==true):
			if ( has_category() ) : 
				echo '<i class="fa fa-folder-open"></i><span class="cat-links" alt="'.esc_attr__("Categories","spiko").'">';
	    		the_category( ', ' );
	    		echo '</span>';
			endif; endif;




			if (get_theme_mod('spiko_enable_single_post_tag', true) == true):
				$spiko_tag_list = get_the_tag_list();
                if (!empty($spiko_tag_list)) {
                    ?>
                    <i class="fa fa-tag"></i>
                    <span class="cat-links posttag"><?php the_tags('', ', ', ''); ?></span>
                <?php } 
            endif;?>		
		</div>
    <?php endif;?>
	
    <?php endif;?>

	<header class="entry-header blog-title">
            <h4 class="entry-title blog-title"><?php the_title();?></h4>
	</header>

	<div class="entry-content">
		<?php the_content();?>
		<?php wp_link_pages( ); ?>
	</div>
</div>
</article>