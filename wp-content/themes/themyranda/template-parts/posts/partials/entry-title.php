<?php
/* translators: used between list items, there is a space after the comma */
?>

<h6 class="entry-category is-xsmall">
	<?php //echo get_the_category_list( __( ', ', 'flatsome' ) ); ?>
</h6>

<?php
	if(is_single()){
		echo '<h1 class="entry-title">'.get_the_title().'</h1>';
	} else{
		echo '<h1 class="entry-title"><a href="'.get_the_permalink().'" itemprop="url" rel="bookmark" class="plain">'.get_the_title().'</a></h1>';
	}
?>

<div class="entry-divider is-divider small"></div>

<div style="width= 100%" class="adsformobo">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- innerpost3 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:566px;height:90px"
     data-ad-client="ca-pub-7006702408607161"
     data-ad-slot="1358014368"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<?php echo do_shortcode("[mashshare]"); ?>

<?php if ( 'post' == get_post_type() ) : ?>
<div class="entry-meta uppercase is-xsmall">
    <?php flatsome_posted_on(); ?>
</div><!-- .entry-meta -->
<?php endif; ?>
