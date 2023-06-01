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
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css" type="text/css" media="screen" />
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
    <?php
		if (is_category() == true)
		{
			echo '<meta name="description" content="Магазин военного снаряжения и амуниции 1-й Военторг, раздел - '.get_category(get_query_var('cat'))->cat_name.'">';
			echo "\n";
			echo '<meta name="keywords" content="Военторг, '.get_category(get_query_var('cat'))->cat_name.'">';
			echo "\n";
		}
	?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		
		jQuery(".menuBtn").click(function(){ 
				jQuery(".menuBlk").toggle("slow", function(){});
				
		});
		
		jQuery("#topslider").jCarouselLite({
		     btnNext: "#next",
		     btnPrev: "#prev",
			 visible: 1,
			 scroll: 1,
			 speed: 700,
			 auto: 5000
	    });
		
		 	jQuery('.tovarInfoBtn').click(function(e) { 
			 jQuery('#tovarInfo').attr("value", jQuery('#maintitleblock h1').html());
			 if (jQuery('.formBox').css("display") == "block")
			 {
				jQuery('.formBox').css("display", "none");
			 } else
			 {
				jQuery('.formBox').css("display", "block");
			 }
			});
		
    });
     </script>
	 
	 <script src="http://vk.com/js/api/openapi.js" type="text/javascript"></script>
	
	
	
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
	
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164781334-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-164781334-1');
</script>
	
	<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-164781334-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

	
</head> 
<body>
  <div style="display: none;">
    <div class="box-modal" id="messgeModal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class="modalline" id="lineIcon">
      </div>

      <div class="modalline" id="lineMsg">
      </div>
    </div>
  </div>
  <div style="display: none;">
    <?php global $post;?>
    <div class="box-modal" id="orderModal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class="modalline" id="lineIcon">
        <form class="order-popup-form">
          <h2><strong>Меня интересуют:</strong></h2><br/> 
          <div class="order-popup-form__wrap">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>" alt="" class="order-modal-img"><span class = "zInput"><?php echo $post->post_title;?></span>
          <div class="character-block__wrap">
          	<?php if(carbon_get_the_post_meta('un_growth')):?>
              <div class="character-block">
                <strong>Рост:</strong><span id="character-block-growth"></span>
              </div>
	          <?php endif;?>
              <?php if(carbon_get_the_post_meta('un_size')):?>
              <div class="character-block">
                <strong>Размер:</strong><span id="character-block-size"></span>
              </div>
	          <?php endif;?>
	          <?php if(carbon_get_the_post_meta('un_color')):?>
              <div class="character-block">
                <strong>Цвет:</strong><span id="character-block-color"></span>
              </div>
		      <?php endif;?>
            </div>
          </div>
          <div class="character-block__input">
            <input type="text" id="order-popup-form-name" name="name" placeholder="Ваше имя">
          </div>
          <div class="character-block__input">
            <input type="tel" id="order-popup-form-phone" name="phone" placeholder="Ваш телефон">
          </div>
          <div class="character-block__input">
            <input type="email" id="order-popup-form-email" name="email" placeholder="Ваш email">
          </div>
          <div class="character-block__input">
            <textarea name="comment" id="order-comment" placeholder="Комментарий к заказу"></textarea>
          </div>
          <div class="character-block__input">
            <div onclick="ym(25019384,'reachGoal','send');ga('send', 'event', 'form', 'send');return true" class="link-consultation button" data-formid="Форма заказа товара" id="order-submit-link" style="    background-color: #ffcb05;
    border-color: #ffcb05;
    width: 200px;
    display: table;
    margin: auto;">Заказать</div>
          </div>
        </form>
      </div>

      <div class="modalline" id="lineMsg">
      </div>
    </div>
  </div>

    <div style="display: none;">
    <?php global $post;?>
    <div class="box-modal" id="phoneModal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class="modalline" id="lineIcon">
        <form class="order-popup-form">
          <h2><strong>Меня интересуют:</strong></h2> <span class = "zInput"></span>
          <div class="character-block__input">
            <input type="text" id="phone-popup-form-name" name="name" placeholder="Ваше имя">
          </div>
          <div class="character-block__input">
            <input type="tel" id="phone-popup-form-phone" name="phone" placeholder="Ваш телефон">
          </div>
          <div class="character-block__input">
            <div class="link-consultation button" data-formid="Форма заказа товара" id="phone-submit-link">Заказать</div>
          </div>
        </form>
      </div>

      <div class="modalline" id="lineMsg">
      </div>
    </div>
  </div>

  <div style="display: none;">
    <?php global $post;?>
    <div class="box-modal" id="order-popup">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class="modalline" id="lineIcon">
        <form class="order-popup-form">
          <div class="order-popup-form__header">
            <img class = "loadImg" src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_1'))[0];?>" alt="">
            <div class="order-popup-form__header-text">
            <h2 class = "tovName">Заголовок</h2>
            <div class="order-popup-form__price"><span class="single-price__old"><span class = "tovOldPrice">570</span> руб.</span> <span class = "tovPrice">570</span> руб.</div>
            <div class = "tovSKU" style = "display:none;"></div>
            <div class = "tovID" style = "display:none;"></div>
			</div>
          </div>
          
          <div class="character-block">
            <select name="order-popup__growth" id="order-popup__growth" class = "tovRost">
              <option selected disabled>Рост</option>
              <option value="140">140</option>
              <option value="150">150</option>
              <option value="160">160</option>
              <option value="170">170</option>
            </select>
          </div>
          <div class="character-block">
            <select name="order-popup__size" id="order-popup__size" class = "tovRazmer">
              <option selected disabled>Размер</option>
              <option value="140">140</option>
              <option value="150">150</option>
              <option value="160">160</option>
              <option value="170">170</option>
            </select>
          </div>
          <div class="character-block">
            <select name="order-popup__color" id="order-popup__color" class = "tovColor">
              <option selected disabled>Цвет</option>
              <option value="140">140</option>
              <option value="150">150</option>
              <option value="160">160</option>
              <option value="170">170</option>
            </select>
          </div>

          <div class="character-block__btn">
			<div class="more-link cancel-link">Отмена</div>
			<div class="link-consultation button toBascetInWin" id="order-submit-link">В корзину</div>
			
		  </div>
        </form>
      </div>

      <div class="modalline" id="lineMsg">
      
	  </div>
    </div>
  </div>
  
  <div class = "mobMenu">
			<div class="hamburger active mobMenuClose">
				<span class="hamburger-top"></span>
				<span class="hamburger-middle"></span>
				<span class="hamburger-bottom"></span>
			</div>
		<div class = "mobMenuListWrap">
			<ul class="mobMenuList">
				<?php
					$args = array(
								'child_of' => 247,
								'depth' => 2,
								'title_li' => ""

					);
							wp_list_categories($args);
				?>
			</ul>
		</div>
  </div>
  
  
    <div style="display: none;">
    <?php global $post;?>
    <div class="box-modal" id="toBascetModal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class="modalline" id="lineIcon">
        
      </div>

      <div class="modalline" id="lineMsg">
      </div>
    </div>
  </div>
<header class="header">
	<div class="header-top">
		<div class="container">
			<div class="hamburger">
				<span class="hamburger-top"></span>
				<span class="hamburger-middle"></span>
				<span class="hamburger-bottom"></span>
			</div>
      <?php wp_nav_menu(array(
        'theme_location' => 'top-menu',
        'container' => false,
        'menu_class' => '',
		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li class = "mobCat">Каталог продукции</li></ul>',
      ));?>
		</div>
	</div>
	<div class="header-bottom">
	
  <?php get_template_part('template-parts/header-top'); ?>

    <!-- <div class=top_line>	
			<div class=top_line_cont>
				<div class='men_all top_line_menu_menu'> <a href="http://1voentorg.ru/оптовые-поставки/">Оптовые поставки</a> <a href="http://1voentorg.ru/производство/">Производство </a><a href="http://1voentorg.ru/контакты/"> Наши магазины </a></div>
			<ul class="social-menu top_line_menu">
        <li><a href="https://vk.com/onevoentorg" style="background-image: url(http://1voentorg.ru/wp-content/themes/voentorg/images/vk.svg);"></a></li>
        <li><a href="https://ok.ru/profile/571716606301" style="background-image: url(http://1voentorg.ru/wp-content/themes/voentorg/images/ok.svg);"></a></li>
        <li><a href="https://www.instagram.com/1voentorg/" style="background-image: url(http://1voentorg.ru/wp-content/themes/voentorg/images/instagram.svg);"></a></li>
      </ul>
			</div>
		</div> -->

		<div class="container" id=fix_menu>
			<a href="<?php echo home_url('/');?>" class="logo"></a>
			<div class='men_all disnon'> <a href="http://1voentorg.ru/оптовые-поставки/">Оптовые поставки</a> <a href="http://1voentorg.ru/производство/">Производство </a><a href="http://1voentorg.ru/контакты/"> Контакты </a></div>
			
			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
				<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
				<input type="submit" id="searchsubmit" value="Искать" />
			</form>
		<div>
			
				<div>
					
			<img style='display: inline-block; padding-right: 15px;' src="http://1voentorg.ru/wp-content/uploads/2020/06/time.png" /><div style='display: inline-block;'>
					
					 <span class='' style="font-family: 'Fira Sans Condensed', sans-serif;     font-size: 15px;">Время работы магазинов: <br>
			Ежедневно с 9:00 до 19:00</span>
					</div></div>
			</div>
			
			
				<div class="header-contacts">
			<!--	<a onclick="ym(25019384,'reachGoal','phone');ga('send', 'event', 'form', 'send'); return true" href="tel:<?php //echo str_replace(array('(', ')', ' ', '-', '_'), '', carbon_get_theme_option('as_phone'))?>"> +79513112124 <?php //echo carbon_get_theme_option('as_phone');?></a> -->
					<a class=tel onclick="ym(25019384,'reachGoal','phone');ga('send', 'event', 'phone', 'click'); return true" href="tel:+74712730499">  <span class=red> 7 (4712) 730-449 </span> </a>	<div class="address">г. Курск, ул. Верхняя Луговая, 6 </div>
				
			
				
			
			</div>
			
			
			<div class="header-contacts">
			<!--	<a onclick="ym(25019384,'reachGoal','phone');ga('send', 'event', 'form', 'send'); return true" href="tel:<?php //echo str_replace(array('(', ')', ' ', '-', '_'), '', carbon_get_theme_option('as_phone'))?>"> +79513112124 <?php //echo carbon_get_theme_option('as_phone');?></a> -->
					
			
				
				<a class=tel onclick="ym(25019384,'reachGoal','phone');ga('send', 'event', 'phone', 'click'); return true" href="tel:+79510839956"><span class=red>+7 (951) 083-99-56 </span> </a>	<div class="address">ул. Карла Маркса, д. 66/3 (9:00 - 19:00) </div>
			
				
				
			
			</div>
			
			
			
		
		</div>
	
	</div>
<li class="mobCat" id=mobile_catalog_show><div class="hamburger">
				<span class="hamburger-top"></span>
				<span class="hamburger-middle"></span>
				<span class="hamburger-bottom"></span>
			</div><div style='display: inline-block;
    padding-bottom: 0px;
    vertical-align: top;
    padding-top: 12px;
    padding-left: 30px'>	
	Каталог продукции</div></li>
	<div class="header-menu">
		<div class="container">
			<ul class="menu">
				<!-- <li class="menu-item-has-children menu-catalog"> -->
					<!-- <a href="#">Каталог товаров <span></span></a> -->
					<?php 
						$args = array(
							'child_of' => 247,
							'depth' => 2,
							'title_li' => '<span class="catalog-title">Каталог товаров  <div class="hamburger">
				<span class="hamburger-top"></span>
				<span class="hamburger-middle"></span>
				<span class="hamburger-bottom"></span>
			</div></span>',

						);
						wp_list_categories($args);
					?>
				<!-- </li> -->
				<!-- <li><a href="#">Форма юнармейца</a></li>
				<li><a href="#">Спецсредства</a></li>
				<li><a href="#">Головные уборы</a></li>
				<li><a href="#">Новинки</a></li> -->
			</ul>
			<div class="hamburger">
				<span class="hamburger-top"></span>
				<span class="hamburger-middle"></span>
				<span class="hamburger-bottom"></span>
			</div>

      <?php 
		wp_nav_menu(array(
			'theme_location' => 'main-menu-2',
			'container' => false,
			'menu_class' =>"menu osnRightmenu"
		));
	  ?>
		</div>
	</div>
</header>

