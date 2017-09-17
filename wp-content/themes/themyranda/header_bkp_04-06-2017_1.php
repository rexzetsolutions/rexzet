<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->


<head>
	<!-- MailMunch for https://www.orientaltimes.co -->
<!-- Paste this code right before the </head> tag on every page of your site. -->
<meta name="_mg-domain-verification" content="792afc568b7ddf645aa71bc05ccda61d" />
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#FF0000">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#FF0000">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#FF0000">
<script src="//a.mailmunch.co/app/v1/site.js" id="mailmunch-script" data-mailmunch-site-id="191309" async="async"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
    
    
    <div id="fb-root"></div>
<script>
$(window).bind("load", function() {
       $.getScript('social.js', function() {});
    });
/*(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.async=true;  
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));*/</script>
    
    
    <style>

#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link {
    font-size: 14px!important;
}
@media only screen and (max-width: 1024px) and (min-width: 768px)  {
	#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link {
		font-size: 12px !important;
		padding: 0px 12px !important;
	}
}

</style>
</head>

<body <?php body_class(); // Body classes is added from inc/helpers-frontend.php ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1708151316072589";
	  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

<div id="wrapper">

<?php do_action('flatsome_before_header'); ?>

<header id="header" class="header <?php flatsome_header_classes();  ?>">
   <div class="header-wrapper">
	<?php
		get_template_part('template-parts/header/header', 'wrapper');
	?>
   </div><!-- header-wrapper-->
</header>



<script>
/*(function()
{
  var lkqdSettings = {
    pid: 314,
    sid: 299836,
    playerContainerId: '',
    playerId: '',
    playerWidth: '300',
    playerHeight: '169',
    execution: 'outstream',
    placement: 'bottom',
    playInitiation: 'auto',
    volume: 0,
    trackImp: '',
    trackClick: '',
    custom1: '',
    custom2: '',
    custom3: '',
    pubMacros: '',
    dfp: false,
    lkqdId: new Date().getTime().toString() + Math.round(Math.random()*1000000000).toString()
  };

  var lkqdVPAID;
  var creativeData = '';
  var environmentVars = { slot: document.getElementById(lkqdSettings.playerContainerId), videoSlot: document.getElementById(lkqdSettings.playerId), videoSlotCanAutoPlay: true, lkqdSettings: lkqdSettings };

  function onVPAIDLoad()
  {
    lkqdVPAID.subscribe(function() { lkqdVPAID.startAd(); }, 'AdLoaded');
  }

  var vpaidFrame = document.createElement('iframe');
  vpaidFrame.id = lkqdSettings.lkqdId;
  vpaidFrame.name = lkqdSettings.lkqdId;
  vpaidFrame.style.display = 'none';
  var vpaidFrameLoaded = function() {
    vpaidLoader = vpaidFrame.contentWindow.document.createElement('script');
    vpaidLoader.src = 'https://ad.lkqd.net/vpaid/formats.js?pid=314&sid=299836';
    vpaidLoader.onload = function() {
      lkqdVPAID = vpaidFrame.contentWindow.getVPAIDAd();
      onVPAIDLoad();
      lkqdVPAID.handshakeVersion('2.0');
      lkqdVPAID.initAd(lkqdSettings.playerWidth, lkqdSettings.playerHeight, 'normal', 600, creativeData, environmentVars);
    };
    vpaidFrame.contentWindow.document.body.appendChild(vpaidLoader);
  };
  vpaidFrame.onload = vpaidFrameLoaded;
  vpaidFrame.onerror = vpaidFrameLoaded;
  document.documentElement.appendChild(vpaidFrame);
})();
</script>

<script>
(function()
{
  var lkqdSettings = {
    pid: 314,
    sid: 299834,
    playerContainerId: '',
    playerId: '',
    playerWidth: 480,
    playerHeight: 270,
    execution: 'outstream',
    placement: 'slider',
    playInitiation: 'auto',
    volume: 0,
    trackImp: '',
    trackClick: '',
    custom1: '',
    custom2: '',
    custom3: '',
    pubMacros: '',
    dfp: false,
    lkqdId: new Date().getTime().toString() + Math.round(Math.random()*1000000000).toString()
  };

  var lkqdVPAID;
  var creativeData = '';
  var environmentVars = { slot: document.getElementById(lkqdSettings.playerContainerId), videoSlot: document.getElementById(lkqdSettings.playerId), videoSlotCanAutoPlay: true, lkqdSettings: lkqdSettings };

  function onVPAIDLoad()
  {
    lkqdVPAID.subscribe(function() { lkqdVPAID.startAd(); }, 'AdLoaded');
  }

  var vpaidFrame = document.createElement('iframe');
  vpaidFrame.id = lkqdSettings.lkqdId;
  vpaidFrame.name = lkqdSettings.lkqdId;
  vpaidFrame.style.display = 'none';
  var vpaidFrameLoaded = function() {
    vpaidLoader = vpaidFrame.contentWindow.document.createElement('script');
    vpaidLoader.src = 'https://ad.lkqd.net/vpaid/formats.js?pid=314&sid=299834';
    vpaidLoader.onload = function() {
      lkqdVPAID = vpaidFrame.contentWindow.getVPAIDAd();
      onVPAIDLoad();
      lkqdVPAID.handshakeVersion('2.0');
      lkqdVPAID.initAd(lkqdSettings.playerWidth, lkqdSettings.playerHeight, 'normal', 600, creativeData, environmentVars);
    };
    vpaidFrame.contentWindow.document.body.appendChild(vpaidLoader);
  };
  vpaidFrame.onload = vpaidFrameLoaded;
  vpaidFrame.onerror = vpaidFrameLoaded;
  document.documentElement.appendChild(vpaidFrame);
})(); */
</script>

<?php do_action('flatsome_after_header'); ?>

<main id="main" class="<?php flatsome_main_classes();  ?>">

