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
@media only screen and (max-width: 1024px) and (min-width: 768px)  {
	#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link {
		font-size: 12px !important;
		padding: 0px 12px !important;
	}
}

@media not all and (-webkit-min-device-pixel-ratio:0) {  
      
}  
</style>

</body>
</html>