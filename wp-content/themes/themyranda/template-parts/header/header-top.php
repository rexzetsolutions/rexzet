<?php if(flatsome_has_top_bar()){ ?>
<div id="top-bar" class="header-top <?php header_inner_class('top'); ?>">
    <div class="flex-row container">
      <div class="flex-col hide-for-medium flex-left">
          <ul class="nav nav-left medium-nav-center nav-small <?php flatsome_nav_classes('top'); ?>">
              <?php flatsome_header_elements('topbar_elements_left'); ?>
          </ul>         
      </div><!-- flex-col left -->
      
      <div class="date">
	  		<?php
				date_default_timezone_set('India/Reunion'); 
				echo date('l jS, F'); ?>
      </div>
       
      <div style="position:relative;left:29%;top:2px;">
      	<!--<div class="fb-like"  data-href="https://www.facebook.com/orientaltimes1" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>-->
        <a href="https://twitter.com/orientaltimes_" class="twitter-follow"><i class="fa fa-twitter" aria-hidden="true"></i>Follow @OrientalTimes</a>
      </div> 
      
      <div class="flex-col hide-for-medium flex-center">
          <ul class="nav nav-center nav-small <?php flatsome_nav_classes('top'); ?>">
              <?php flatsome_header_elements('topbar_elements_center'); ?>
          </ul>
      </div><!-- center -->

      <div class="flex-col hide-for-medium flex-right">
         <ul class="nav top-bar-nav nav-right nav-small <?php flatsome_nav_classes('top'); ?>">
              <?php flatsome_header_elements('topbar_elements_right'); ?>
          </ul>
      </div><!-- .flex-col right -->

      <?php if(get_theme_mod('header_mobile_elements_top')) { ?>
      <div class="flex-col show-for-medium flex-grow">
          <ul class="nav nav-left medium-nav-center nav-small mobile-nav <?php flatsome_nav_classes('top'); ?>">
              <?php flatsome_header_elements('header_mobile_elements_top'); ?>
          </ul>
      </div>
      <?php } ?>

    </div><!-- .flex-row -->
</div><!-- #header-top -->
<?php } ?>