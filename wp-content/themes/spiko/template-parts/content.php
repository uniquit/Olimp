<article  id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>	
	<?php
	if(has_post_thumbnail()):?>
	<figure class="post-thumbnail">
		<?php the_post_thumbnail('full',array('class'=>'img-fluid','alt'=>'blog-image'));?>			
	</figure>	
	<?php endif;?>

    <div class="post-content">
    <?php 
	if(has_post_thumbnail()) { ?> <div class="entry-date"> <span class="date"><?php echo esc_html(get_the_date()); ?></span> <?php }
	else{ ?><div class="remove-image"><span class="date"><?php echo esc_html(get_the_date()); ?></span> <?php  } ?>
		
	<?php 
	echo '</div>';?>
	<div class="entry-meta">
	<?php
	$spiko_blog_meta_sort=get_theme_mod( 'spiko_blog_meta_sort', array('blog_author','blog_category','blog_tag'));  	 
	if ( ! empty( $spiko_blog_meta_sort ) && is_array( $spiko_blog_meta_sort ) ) :
		foreach ( $spiko_blog_meta_sort as $spiko_blog_meta_sort_key => $spiko_blog_meta_sort_val ) :		
			if ( 'blog_author' === $spiko_blog_meta_sort_val ) :?>		
				<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" alt="<?php esc_attr_e('tag','spiko'); ?>"><i class="fa fa-user"></i><span class="author"><?php echo esc_html(get_the_author());?></span></a>
			<?php 
			endif;
			if ( 'blog_category' === $spiko_blog_meta_sort_val ) :
				if ( has_category() ) : 
					echo '<i class="fa fa-folder-open"></i><span class="cat-links" alt="'.esc_attr__("Categories","spiko").'">';
					the_category( ', ' );
					echo '</span>';
				endif; 
			endif;
			if ( 'blog_tag' === $spiko_blog_meta_sort_val ) :
			$spiko_tag_list = get_the_tag_list();
		        if (!empty($spiko_tag_list)) {?>
		            <i class="fa fa-tag"></i>
		            <span class="cat-links posttag"><?php the_tags('', ', ', ''); ?></span>
		    	<?php }
	    	endif;
		endforeach;
	endif;?>		
	</div>

	<header class="entry-header blog-title">
            <h4 class="entry-title blog-title"><a class="blog-title" href="<?php the_permalink();?>" alt="<?php esc_attr_e('blog-title','spiko'); ?>"><?php the_title();?></a></h4>
	</header>

	<div class="entry-content">
		<?php spiko_posted_content();?>
		 <?php
		 $spiko_button_show_hide=get_theme_mod('spiko_blog_content','excerpt');
		 if($spiko_button_show_hide=="excerpt")
		 {
		 if(get_theme_mod('spiko_enable_blog_read_button',true)==true):
		 spiko_button_title();
		 endif;
		} ?>
	</div>
</div>
</article>