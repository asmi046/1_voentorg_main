<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head profile="http://gmpg.org/xfn/11"> 

	<meta name="yandex-verification" content="f7bd29ab7d45e007" />
	<meta name="yandex-verification" content="43bd7abb7cacde3b" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width">
	<meta name="cmsmagazine" content="f7245597f5b3579a3db3d69ddef2a8bf" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<?php wp_head(); // API Hook ?>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:400,500" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/fa/fa-viber.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/fa/font-awesome.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-slider-style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/popular-products.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/cardinfo.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/lightbox.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.arcticmodal-0.3.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/icon.png" type="image/png">	
	
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.1.min.js"></script> -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jcarousellite.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.arcticmodal-0.3.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.inputmask.bundle.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lightbox.min.js"></script>
	<!-- <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.js"></script> -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
	<!-- <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script> -->
	<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>

	
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92461276, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92461276" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	
	
</head> 
<body>

<?php get_template_part('template-parts/header-top'); ?>

<section class="header_info">
  <div class="container">
      <a href="<?php echo home_url('/');?>" class="logo"></a>
			<form role="search" method="get" class="searchform" id="searchform" action="<?php echo home_url( '/' ) ?>" >
				<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
				<button type="submit"></button>
			</form>
      
      <div class="header__bascket-icon d-flex">
								<a href="#" class="bascket-icon-1 d-flex"></a> 
								<a href="#" class="bascket-icon-2 bascet_counter d-flex">0</a>
			</div>

      <div class="header-contacts">
					<a class=tel onclick="ym(25019384,'reachGoal','phone');ga('send', 'event', 'phone', 'click'); return true" href="tel:+74712730499">  <span class=red> 7 (4712) 730-449 </span> </a>	<div class="address">г. Курск, ул. Верхняя Луговая, 6 </div>
			</div>
			
			
			<div class="header-contacts">		
				<a class=tel onclick="ym(25019384,'reachGoal','phone');ga('send', 'event', 'phone', 'click'); return true" href="tel:+79510839956"><span class=red>+7 (951) 083-99-56 </span> </a>	<div class="address">ул. Карла Маркса, д. 66/3</div>
			</div>
  </div>
</section>

<section class="menu_section">
    <div class="header-menu">
      <div class="container">
        <?php 
            wp_nav_menu(array(
              'theme_location' => 'main-menu-2',
              'container' => false,
              'menu_class' =>"menu osnRightmenu"
            ));
        ?>
      </div>
    </div>
</section>


