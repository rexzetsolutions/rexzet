<?php

$align = 'small-text-center';
if ( get_theme_mod( 'footer_bottom_align' ) == 'center' ) {
  $align = 'text-center';
}

ob_start();
do_action( 'flatsome_absolute_footer_secondary' );
$flatsome_absolute_footer_secondary = trim( ob_get_clean() );
$flatsome_footer_right_text = trim( get_theme_mod( 'footer_right_text' ) );

?>

<div class="absolute-footer <?php echo flatsome_option('footer_bottom_text'); ?> medium-text-center <?php echo $align;?>">
  <div class="container clearfix">

    <?php if ( $flatsome_footer_right_text || $flatsome_absolute_footer_secondary ) : ?>
      <div class="footer-secondary pull-right">
        <?php if ( $flatsome_footer_right_text ) : ?>
          <div class="footer-text inline-block small-block">
            <?php echo do_shortcode($flatsome_footer_right_text); ?>
          </div>
        <?php endif; ?>
        <?php echo $flatsome_absolute_footer_secondary; ?>
      </div><!-- -right -->
    <?php endif; ?>

    <div class="footer-primary pull-left">
      <?php if ( has_nav_menu( 'footer' ) ) : ?>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'menu_class' => 'links footer-nav uppercase',
          'depth' => 1,
          'fallback_cb' => false,
        ) );
        ?>
      <?php endif; ?>
      <div class="copyright-footer">
        <?php echo do_shortcode( get_theme_mod( 'footer_left_text', 'Copyright [ux_current_year] &copy; <strong>UX Themes</strong>' ) ); ?>
      </div>
      <?php do_action( 'flatsome_absolute_footer_primary' ); ?>
    </div>
    <div class="copy-custom">
                
        
      <p>
     
        &copy; Copyright 2017 <a href="https://orientaltimes.in"><strong>Oriental Times India</strong></a> All Rights Reserved.
      </p>
       
      <ul class="nav nav-left medium-nav-center nav-small  nav-divided" style="width:30%;position:relative;left:10%;margin-top:5px;padding-bottom:0px;height:22px;">
      <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-37"><a href="/about-us/" class="nav-top-link">About Us</a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-38"><a href="/advertise-with-us/" class="nav-top-link">Advertise With Us</a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-39"><a href="/contact-us/" class="nav-top-link">Contact Us</a></li>
    </ul>
      
      <!--<ul class="nav nav-left medium-nav-center nav-small <?php //flatsome_nav_classes('top'); ?>" style="width:40%;position:relative;left:10%;margin-top:5px;padding-bottom:0px;height:22px;">
              <?php //flatsome_header_elements('topbar_elements_left'); ?>
          </ul> -->
    </div>
    <!-- .left -->
  </div><!-- .container -->
</div><!-- .absolute-footer -->
