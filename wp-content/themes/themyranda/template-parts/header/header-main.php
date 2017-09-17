<div id="masthead" class="header-main <?php header_inner_class('main'); ?>">
      <div class="header-inner flex-row container <?php flatsome_logo_position(); ?>" role="navigation">

          <!-- Logo -->
          <div id="logo" class="flex-col logo">
            <?php get_template_part('template-parts/header/partials/element','logo'); ?>
          </div>

          <!-- Mobile Left Elements -->
          <div class="flex-col show-for-medium flex-left">
            <ul class="mobile-nav nav nav-left <?php flatsome_nav_classes('main-mobile'); ?>">
              <?php flatsome_header_elements('header_mobile_elements_left','mobile'); ?>
            </ul>
          </div>

          <!-- Left Elements -->
          <div class="flex-col hide-for-medium flex-left
            <?php if(get_theme_mod('logo_position', 'left') == 'left') echo 'flex-grow'; ?>">
            <ul class="header-nav header-nav-main nav nav-left <?php flatsome_nav_classes('main'); ?>" >
              <?php flatsome_header_elements('header_elements_left'); ?>
            </ul>
          </div>

          <!-- Right Elements -->
          <div class="flex-col hide-for-medium flex-right" style="display:block;">
             
            <ul class="header-nav header-nav-main nav nav-right">
                 
                 <div class="addformobo2">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- header 1 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:560px;height:70px"
     data-ad-client="ca-pub-7006702408607161"
     data-ad-slot="6743677769"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
   </div>   
            <div id='cricapi_widget_livescores' style="width=; height=100px"></div>

<?php

	$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket/?apikey=aF3C7398qGUcxLoiHH3EM7G0DoI3');	// change with your API key
	$cricketMatches = json_decode($cricketMatchesTxt);

    foreach($cricketMatches->data as $item) {
?>

	<h4><?php echo($item->title); ?></h4>
<?php } ?>
            </ul>
          </div>

          <!-- Mobile Right Elements -->
          <div class="flex-col show-for-medium flex-right">
            <ul class="mobile-nav nav nav-right <?php flatsome_nav_classes('main-mobile'); ?>">
              <?php flatsome_header_elements('header_mobile_elements_right','mobile'); ?>
            </ul>
          </div>

      </div><!-- .header-inner -->
     
      <?php if(get_theme_mod('header_divider', 1)) { ?>
      <!-- Header divider -->
      <div class="container"><div class="top-divider full-width"></div></div>
      <?php }?>
</div><!-- .header-main -->