<?php get_header("index"); ?>
<?php get_template_part('template-parts/slick-slider');?>
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
<?php get_template_part('template-parts/popular-products');?>

<?php get_template_part('template-parts/cardinfo');?>

<?php get_template_part('template-parts/favorites-products');?>
<!-- <section class="products-section"> -->

<!-- 	
	<div class="container">
		<h2 class="section-title"><span class=green> — </span> Популярные товары<span class=green> —</span> </h2>
	</div> -->

	<!-- <div class="container">
		<div class="products-wrapper"> -->
			<!-- <?php 
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
			?> -->
		<!-- </div>
	</div> -->
	
<!-- </section> -->
<a href="http://1voentorg.ru/category/%d1%82%d0%be%d0%b2%d0%b0%d1%80%d1%8b-%d1%81%d0%be-%d1%81%d0%ba%d0%b8%d0%b4%d0%ba%d0%be%d0%b9/">
<section class="banner-sale">
	<div class="container" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('action_img'), 'full')[0];?>)">
		<div class="banner-sale__content">
			<div class="banner-sale__content-title"><span><?php echo carbon_get_theme_option('action_zag');?></span> <?php echo carbon_get_theme_option('action_text');?></div>
		</div>
	</div>
</section></a>

<?php get_template_part('template-parts/new-products');?>
<!-- 
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
</section> -->
<?php get_footer(); ?>