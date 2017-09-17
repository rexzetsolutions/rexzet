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
    background: red !important;
}
.secondary, .checkout-button, .button.checkout, .button.alt {
    background-color: red !important;
}
.stuck li.current-dropdown>.nav-dropdown, .next-prev-thumbs li.has-dropdown:hover>.nav-dropdown, .no-js li.has-dropdown:hover>.nav-dropdown {
    left: -265px;
}
.is-outline:hover, .primary.is-outline:hover {
    color: #fff;
    background-color: red;
    border-color: red;
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
	background-color:#00000;
}
header.archive-page-header {
    display: none;
}
.nav-pagination>li>.current, .nav-pagination>li>span:hover, .nav-pagination>li>a:hover {
    border-color: red;
    background-color: red;
    color: #FFF;
}
.nav-pagination>li>.current, .nav-pagination>li>span:hover, .nav-pagination>li>a:hover {
    border-color: red;
    background-color: red;
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
    border-bottom: 2px solid red;
}
.is-divider {
    background-color: red !important;
}
button.button.dhvc-form-submit {
    background-color: red;
}

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
		width: 80% !important;
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

}

@media not all and (-webkit-min-device-pixel-ratio:0) {  
   #masthead {
		float: left !important;
		width: 100% !important;
	}  
	.pis-thumbnail-img.wp-post-image {
		width: 80% !important;
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