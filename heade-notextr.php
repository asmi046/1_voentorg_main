<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head profile="http://gmpg.org/xfn/11"> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/fa/fa-viber.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/fa/font-awesome.min.css" type="text/css" media="screen" />
	
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jcarousellite.js"></script>
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
	<?php wp_head(); // API Hook ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		
		jQuery(".menuBtn").click(function(){ 
				jQuery(".menuBlk").toggle("slow", function(){});
				
		});
		
		$("#topslider").jCarouselLite({
		     btnNext: "#next",
		     btnPrev: "#prev",
			 visible: 1,
			 scroll: 1,
			 speed: 700,
			 auto: 5000
	    });
		
		 	$('.tovarInfoBtn').click(function(e) { 
			 $('#tovarInfo').attr("value", $('#maintitleblock h1').html());
			 if ($('.formBox').css("display") == "block")
			 {
				$('.formBox').css("display", "none");
			 } else
			 {
				$('.formBox').css("display", "block");
			 }
			});
		
    });
     </script>
	 
	 <script src="http://vk.com/js/api/openapi.js" type="text/javascript"></script>
</head> 
<body>
<div id="wrapper-top">
<div id="maket">
    <div id="header">
	    <a href="<?php bloginfo('url'); ?>">
			<div class = "logoWriper">
				<div id="logo">
				</div>
			</div>
		</a>
		<div id="notexth lefttext">Ждём Вас по адресу:<br><div class="bigtopmargin">г. Курск, ул. Верхняя Луговая, <br>д. 6 (2 этаж)</div><br> Тел. магазина: <br><div class="bigtopmargin"><span class="phone">8 (4712) 730 449</span> <br>e-mail: 1voentorg@bk.ru</div><br> Оптовые поставки:<br><div class="bigtopmargin"><span class="phone">8 951 084 92 33</span></div></div>
		<div id="notexth righttext"><a href = "http://1voentorg.ru/%D0%BE%D0%BF%D1%82%D0%BE%D0%B2%D1%8B%D0%B5-%D0%BF%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B8/">Мы работаем со всеми</br>регионами РФ. При заказе</br>на сумму от 10000 рублей и более</br>осуществляем доставку</br>транспортной компанией.</a><div class="bigtopmargin"></br>Оптовым покупателям - скидка</div></br><a href = "http://1voentorg.ru/%D1%80%D0%BE%D0%B7%D0%BD%D0%B8%D1%86%D0%B0/">Для розничных покупателей</br>при покупке на сумму свыше</br>400р. товар доставляется</br>курьерской службой.</a></div>
		<a href="#" id="prev"><div id="btn-left"></div></a>
		<a href="#" id="next"><div id="btn-right"></div></a>
		<div id="topslider-wrapper">
		<div id="topslider">
			<ul>
			    <li><img width="684" height="339" alt="Военные товары - Зимняя офисная куртка " src="<?php bloginfo('template_url'); ?>/images/slider-item-5.jpg"></li>
				<li><img width="684" height="339" alt="Военные товары" src="<?php bloginfo('template_url'); ?>/images/slider-item-1.jpg"></li>
				<li><img width="684" height="339" alt="Военные товары" src="<?php bloginfo('template_url'); ?>/images/slider-item-2.jpg"></li>
				<li><img width="684" height="339" alt="Военные товары" src="<?php bloginfo('template_url'); ?>/images/slider-item-3.jpg"></li>
				<li><img width="684" height="339" alt="Военные товары" src="<?php bloginfo('template_url'); ?>/images/slider-item-4.jpg"></li>
			</ul>
		</div>
		</div>
		<?php include(TEMPLATEPATH.'/searchform.php'); ?>
		
	</div>