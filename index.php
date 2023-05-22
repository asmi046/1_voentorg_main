<?php get_header("index"); ?>
	<section class="big-slider">
	<div class="container">
		<?php if(carbon_get_theme_option('as_banner_1_link')):?>
		<a href='' class="big-slider__item" style="background-image: url(http://1voentorg.ru/wp-content/uploads/2020/05/44.png)">
			<div class="bg-yellow-block"></div>
			<div class="big-slider__item-title" style='font-size: 39px;'>МАГАЗИНЫ РАБОТАЮТ В ШТАТНОМ РЕЖИМЕ</div>
		</a>
		<?php endif;?>
			<?php if(carbon_get_theme_option('as_banner_1_link')):?>
		<a href=http://1voentorg.ru/category/каталог/одежда/одежда-ркка class="big-slider__item" style="background-image: url(http://1voentorg.ru/wp-content/uploads/2020/06/ВОЕНТОРГ-главная.jpg);">
			<div class="bg-yellow-block"></div>
			<div class="big-slider__item-title" style='font-size: 34px;'>ФОРМА ВРЕМЁН ВЕЛИКОЙ ОТЕЧЕСТВЕННОЙ ВОЙНЫ ДЛЯ ДЕТЕЙ И ВЗРОСЛЫХ</div>
		</a>
		<?php endif;?>
		
		<?php if(carbon_get_theme_option('as_banner_2_link')):?>
		<a href="http://1voentorg.ru/%d1%84%d0%be%d1%80%d0%bc%d0%b5%d0%bd%d0%bd%d0%b0%d1%8f-%d0%be%d0%b4%d0%b5%d0%b6%d0%b4%d0%b0/" class="big-slider__item" style="background-image: url(http://1voentorg.ru/wp-content/uploads/2020/06/фо.jpg);">
			<div class="bg-yellow-block"></div>
			<div class="big-slider__item-title" style='font-size: 37px;'>ФОРМЕННАЯ ОДЕЖДА</div>
		</a>
		<?php endif;?>
		<?php if(carbon_get_theme_option('as_banner_3_link')):?>
		<a href="<?php echo carbon_get_theme_option('as_banner_3_link');?>" class="big-slider__item" style="background-image: url(http://1voentorg.ru/wp-content/uploads/2020/06/ua.jpg);">
			<div class="bg-yellow-block"></div>
			<div class="big-slider__item-title"><?php echo carbon_get_theme_option('as_banner_3_text');?></div>
		</a>
		<?php endif;?>
		<?php if(carbon_get_theme_option('as_banner_4_link')):?>
			<a href="http://1voentorg.ru/%D1%84%D0%BE%D1%80%D0%BC%D0%B0-%D0%B4%D0%BB%D1%8F-%D0%BA%D0%B0%D0%B4%D0%B5%D1%82%D0%BE%D0%B2/" class="big-slider__item" style="background-image: url(http://1voentorg.ru/wp-content/uploads/2020/06/66.png);">
			<div class="bg-yellow-block"></div>
			<div class="big-slider__item-title" style='font-size: 37px;'>ФОРМА ДЛЯ КАДЕТОВ</div>
		</a>
		<?php endif;?>	
		
		
		<?php if(carbon_get_theme_option('as_banner_4_link')):?>
			<a href="http://1voentorg.ru/%D1%84%D0%BE%D1%80%D0%BC%D0%B0-%D0%BF%D1%80%D0%B5%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D1%81%D0%BA%D0%BE%D0%B3%D0%BE-%D0%BF%D0%BE%D0%BB%D0%BA%D0%B0/" class="big-slider__item" style="background-image: url(http://1voentorg.ru/wp-content/uploads/2020/06/pp.png);">
			<div class="bg-yellow-block"></div>
			<div class="big-slider__item-title" style='font-size: 37px;'>ИНДИВИДУАЛЬНЫЙ <br> ПОШИВ</div>
		</a>
		<?php endif;?>	
		
		
		
		
		<?php //if(carbon_get_theme_option('as_banner_4_link')):?>
	<!--	<a href="<?php //echo carbon_get_theme_option('as_banner_4_link');?>" class="big-slider__item" style="background-image: url(<?php// echo wp_get_attachment_image_src(carbon_get_theme_option('as_banner_4_img'), 'full')[0];?>);">
			<div class="bg-yellow-block"></div>
			<div class="big-slider__item-title"><?php //echo carbon_get_theme_option('as_banner_4_text');?></div>
		</a> -->
		<?php //endif;?>	
	</div>
	
</section>
<section class="little-sliders">
	<div class="container">
		<?php if(carbon_get_theme_option('as_little_banner_link_1')):?>
		<a href="<?php echo carbon_get_theme_option('as_little_banner_link_1');?>" class="little-sliders__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_little_banner_img_1'), 'full')[0];?>);">
			<div class="little-sliders__item-title">Костюмы для активного отдыха</div>
		</a>
		<?php endif;?>
		<?php if(carbon_get_theme_option('as_little_banner_link_2')):?>
		<a href="<?echo carbon_get_theme_option('as_little_banner_link_2')?>" class="little-sliders__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_little_banner_img_2'), 'full')[0];?>)">
			<div class="little-sliders__item-title"><?php echo carbon_get_theme_option('as_little_banner_text_2');?></div>
		</a>
		<?php endif;?>
		<?php if(carbon_get_theme_option('as_little_banner_link_3')):?>
		<a href="<?echo carbon_get_theme_option('as_little_banner_link_3')?>" class="little-sliders__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_little_banner_img_3'), 'full')[0];?>)">
			<div class="little-sliders__item-title"><?php echo carbon_get_theme_option('as_little_banner_text_3');?></div>
		</a>
		<?php endif;?>
	</div>
</section>
<section class="products-section">
	<div class="container">
		<h2 class="section-title"><span class=green> — </span> Популярные товары<span class=green> —</span> </h2>
	</div>
	<div class="container">
		<div class="products-wrapper">
			<?php 
				$args = array(
					'posts_per_page' => 4,
'cat' => 272,
				);
				$query = new WP_Query($args);
				if($query->have_posts()):
					while($query->have_posts()):
						$query->the_post();
						get_template_part('template-parts/product-loop');
					endwhile;
				endif; wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<a href="http://1voentorg.ru/category/%d1%82%d0%be%d0%b2%d0%b0%d1%80%d1%8b-%d1%81%d0%be-%d1%81%d0%ba%d0%b8%d0%b4%d0%ba%d0%be%d0%b9/">
<section class="banner-sale">
	<div class="container" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('action_img'), 'full')[0];?>)">
		<div class="banner-sale__content">
			<div class="banner-sale__content-title"><span><?php echo carbon_get_theme_option('action_zag');?></span> <?php echo carbon_get_theme_option('action_text');?></div>
		</div>
	</div>
</section></a>
<section class="products-section">
	<div class="container">
		<h2 class="section-title"><span class=green> — </span>Новинки <span class=green>— </span></h2>
	</div>
	<div class="container">
		<div class="products-wrapper">
			<?php 
				$args = array(
					'posts_per_page' => 8,
					'cat' => 292,
				);
				$query = new WP_Query($args);
				if($query->have_posts()):
					while($query->have_posts()):
						$query->the_post();
						get_template_part('template-parts/product-loop');
					endwhile;
				endif; wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>