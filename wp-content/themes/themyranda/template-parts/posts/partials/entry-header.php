<header class="entry-header">
	<div class="entry-header-text entry-header-text-top  text-<?php echo flatsome_option('blog_posts_title_align');?>">
	   	<?php get_template_part( 'template-parts/posts/partials/entry', 'title');  ?>
	</div><!-- .entry-header -->
	<div style="margin-bottom: 10px;">On <span style="color:red;"> <?php the_date();?></span> 
	<a href="#comments"><span style="padding-left: 10px;"><i class="fa fa-comment" aria-hidden="true" style="color: red;margin-right: 3px;"></i><!-- <img src="../../../img/comment.png" width="20px"> --><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?> 
		</span></a>
		<a href="https://twitter.com/orientaltimess" class="twitter-follow"><i class="fa fa-twitter" aria-hidden="true" style="color:#ff0000; margin-left:3px;"></i>OrientalTimes</a>
	</div>
    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
	<div class="entry-image relative">
	   <?php get_template_part( 'template-parts/posts/partials/entry-image', 'default'); ?>
	   <?php //get_template_part( 'template-parts/posts/partials/entry', 'post-date'); ?>
	</div><!-- .entry-image -->
	<?php } ?>
</header><!-- post-header -->



