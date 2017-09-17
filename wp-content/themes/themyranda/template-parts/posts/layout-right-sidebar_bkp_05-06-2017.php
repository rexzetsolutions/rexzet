<?php 
	do_action('flatsome_before_blog');
?>

<?php if(!is_single() && flatsome_option('blog_featured') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>

<div class="row row-large <?php if(flatsome_option('blog_layout_divider')) echo 'row-divided ';?>">
	
	<div class="large-6 col">
	<?php if(!is_single() && flatsome_option('blog_featured') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			comments_template();
		} elseif(flatsome_option('blog_style_archive') && (is_archive() || is_search())){
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style_archive') );
		} else {
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style') );
		}
	?>
	</div> <!-- .large-9 -->
    
    <div class="mysidebar2 large-3 col" style="max-width:25%;">
		<?php dynamic_sidebar( 'sidebar2' ); 
		//get_sidebar('sidebar2'); ?>
	</div><!-- .post-sidebar -->

	<div class="post-sidebar large-3 col" style="max-width:25%;">
		<?php get_sidebar('sidebar'); ?>
	</div><!-- .post-sidebar -->

</div><!-- .row -->

<?php 
	do_action('flatsome_after_blog');
?>