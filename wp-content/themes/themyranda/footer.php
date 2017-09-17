<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>
</main><!-- #main -->

<footer id="footer" class="footer-wrapper">	

	<?php do_action('flatsome_footer'); ?>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>
<style>
.stuck div#masthead {
    display: none;
}
#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link {
    font-size: 14px!important;
}

#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item.mega-current-menu-item>a.mega-menu-link, #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item.mega-current-menu-ancestor>a.mega-menu-link, #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item.mega-current-page-ancestor>a.mega-menu-link {
    background: #FF0000 !important;
}
.secondary, .checkout-button, .button.checkout, .button.alt {
    background-color: #FF0000 !important;
}
.stuck li.current-dropdown>.nav-dropdown, .next-prev-thumbs li.has-dropdown:hover>.nav-dropdown, .no-js li.has-dropdown:hover>.nav-dropdown {
    left: -265px;
}
.is-outline:hover, .primary.is-outline:hover {
    color: #fff;
    background-color: #FF0000;
    border-color: #FF0000;
}
.ultimate-layouts-container h3.ultimate-layouts-title a{
	text-transform:capitalize;
}
.flex-col.hide-for-medium.flex-right {
    display: none;
}

.wpb_button, .wpb_content_element, ul.wpb_thumbnails-fluid > li {
  margin-bottom: 5px;
}
li > a {
    color: #000000;
}
ul.nav-dropdown.nav-dropdown-default{
	background-color:#000;
}
header.archive-page-header {
    display: none;
}
.nav-pagination>li>.current, .nav-pagination>li>span:hover, .nav-pagination>li>a:hover {
    border-color: #FF0000;
    background-color: #FF0000;
    color: #FFF;
}
.nav-pagination>li>.current, .nav-pagination>li>span:hover, .nav-pagination>li>a:hover {
    border-color: #FF0000;
    background-color: #FF0000;
    color: #FFF;
}
.header-ads {
    width: 500px;
    float: right;
}
#footer .menu-item-36 {
    display: none;
}
#footer a.nav-top-link {
    text-transform: uppercase;
    padding-top: 0px;
	padding-bottom: 0px;
}
.mysidebar2 .widgettitle {
    border-bottom: 2px solid #FF0000;
}
.is-divider {
    background-color: #FF0000 !important;
}
button.button.dhvc-form-submit {
    background-color: #FF0000;
}
#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link {
	background:#000000;
}
.header-bottom {
    background-color: #000 !important;
}
h1, h2, h3, h4, h5, h6 {
    color: #000;
}
.ultimate-layouts-container .ultimate-layouts-listing-wrap .ultimate-layouts-item {
	margin-bottom: 25px;
}
.ultimate-layouts-container .ultimate-layouts-picture {
    margin: 0 0 15px 0;
}
a {
	color: #000;
}
body {
    color: #000;
}

#pis_posts_in_sidebar-11, #text-13 {
    position: inherit;
}
.archive #pis_posts_in_sidebar-11 {
    position: sticky !important;
    position: webkit-sticky;
    top: 20px;
}
.mysidebar2 #pis_posts_in_sidebar-11, #text-13 {
    position: sticky !important;
    position: webkit-sticky;
    top: 20px;
}

.archive #twitter_timeline-2 {
	position: sticky !important;
    position: webkit-sticky;
    top: 20px;
}

/*.archive .widget_twitter_timeline #twitter-widget-1 {
    position: sticky !important;
    top: 20px;
}*/
/*#twitter_timeline-2 {
    position: sticky !important;
    position: webkit-sticky;
    top: 20px;
}*/


@media only screen and (max-width: 1024px) and (min-width: 768px)  {
	#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link {
		font-size: 12px !important;
		padding: 0px 12px !important;
	}
}

@media only screen and (max-width: 680px) and (min-width: 320px)  {
	.widget.posts-in-sidebar {
	  overflow-x: hidden !important;
	  overflow-y: hidden !important;
	  /*width: 100% !important;*/
	  min-width:100% !important;
	}
	.is-divider.small {
	  width: 90% !important;
	}
	.pis-thumbnail-img.wp-post-image {
		/*display:none !important;*/
		width: 100% !important; /* 80% */
	}
	.header_logo.header-logo {
		max-height: 40px !important;
	}
	._2p3a {
	  min-width: 140px !important;
	  width: 140px !important;
	  overflow:scroll !important;
	}
	.pop-inside-4.pop-inside {
	  width: 90% !important;
	}
	.fb_iframe_widget {
		min-width: 140px !important;
		width: 140px !important;
	}
	.fb-page.fb_iframe_widget iframe {
	  width: 280px !important;
	}


	/* For Home Page CSS Responsive */
	.wpb_gallery.wpb_posts_slider.wpb_content_element{ display:none; }
	.vc_gitem-animated-block { display:none; }
	.copy-custom > ul { height: 70px !important; left:0 !important; width: 100% !important;}
	#mobile-post { display:none !important; }
	.ultimate-layouts-item.hentry {margin-bottom: 14px !important;}
}

@media not all and (-webkit-min-device-pixel-ratio:0) {  
   #masthead {
		float: left !important;
		width: 100% !important;
	}  
	.pis-thumbnail-img.wp-post-image {
		width: 100% !important; /* 80% */
	}
	.pop-inside-4.pop-inside {
	  width: 90% !important;
	}
	.is-divider.small {
	  width: 90% !important;
	}
	.fb-page.fb_iframe_widget iframe {
	  width: 280px !important;
	}
	/*._2p3a {
	  min-width: 140px !important;
	  width: 140px !important;
	  overflow:scroll !important;
	}*/
	.fb_iframe_widget {
	  min-width: 140px !important;
	  width: 140px !important;
	}
	
	.header_logo.header-logo {
		max-height: 40px !important;
	}
	
	.widget.posts-in-sidebar {
	  overflow-x: hidden !important;
	  width: 100% !important;
	}
}  
</style>

</body>
</html>