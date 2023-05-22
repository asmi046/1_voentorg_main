<footer class="footer">
  <div class="container">
    <div class="footer-block">
      <div class="footer-title"><span class=red> — </span>Информация<span class=red> — </span></div>
      <ul>
        <li><a href="<?php echo get_the_permalink(7);?>">О нас</a></li>
        <li><a href="<?php echo get_the_permalink(4325);?>">Оптовые поставки</a></li>
        <li><a href="<?php echo get_the_permalink(19966);?>">Производство</a></li>
      </ul>
    </div>
    <div class="footer-block">
      <div class="footer-title"><span class=red> — </span>Каталог товаров<span class=red> — </span></div>
      
	   <?php 
		wp_nav_menu(array(
			'theme_location' => 'main-menu-2',
			'container' => false,
			'menu_class' =>"menuPodval"
		));
	  ?>
	  <!--
	  <ul>
        <li><a href="#">Форма юнармейца</a></li>
        <li><a href="#">Спецсредства</a></li>
        <li><a href="#">Головные уборы</a></li>
        <li><a href="#">Обувь</a></li>
        <li><a href="#">Камуфляжные костюмы</a></li>
        <li><a href="#">Спортивное оружие</a></li>
        <li><a href="#">Вышивка шевронов</a></li>
      </ul>
	  -->
	  
    </div>
    <div class="footer-block">
		<div class="footer-title"><span class=red> — </span>Мы в соцсетях<span class=red> — </span></div>
      <ul class="social-menu">
        <li><a href="<?php echo carbon_get_theme_option('vk_lnk'); ?>" style="background-image: url(<?php echo get_template_directory_uri();?>/images/vk.svg);"></a></li>
        <li><a href="<?php echo carbon_get_theme_option('ok_lnk'); ?>" style="background-image: url(<?php echo get_template_directory_uri();?>/images/ok.svg);"></a></li>
        <li><a href="<?php echo carbon_get_theme_option('in_lnk'); ?>" style="background-image: url(<?php echo get_template_directory_uri();?>/images/instagram.svg);"></a></li>
      </ul>
    </div>
    <div class="footer-block">
     
    <!--  <a onclick="ym(25019384,'reachGoal','phone');ga('send', 'event', 'phone', 'click') return true" href="tel:<?php// echo str_replace(array('(', ')', ' ', '-', '_'), '', carbon_get_theme_option('as_phone'))?>" class="footer-phone"><?php// echo carbon_get_theme_option('as_phone');?></a>  -->
		<div class="footer-title"><span class=red> — </span>Контакты<span class=red> — </span></div>
      <a class=tel_bot onclick="ym(25019384,'reachGoal','phone');ga('send', 'event', 'phone', 'click') return true" href="tel:+79513112124
" class="footer-phone">+7 (951) 311 21 24 <br>
		  +7 (4712) 730-449  <br>
		<div class="footer-address adr_b"> г. Курск, ул. Верхняя Луговая, 6
(с 9:00 до 19:00)</div> <br>
		  
		 +7 (951) 083 99 56 <br>
	<div class="footer-address adr_b">	  г. Курск, ул. Карла Маркса, д. 66/3
(с 9:00 до 19:00) </div><br>
		   
</a>
		
		
    </div>
  </div>
</footer>
  <?php wp_footer(); ?>


</div>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter25019384 = new Ya.Metrika({id:25019384,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/25019384" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>