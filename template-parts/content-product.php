<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package un
 */
global $post;

?>

<article class = "productParam" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="product-wrapper ">
		<?php //the_post_thumbnail( array(500, 500)); ?>
		<div class="product-wrapper__images">
			<div class="slider-for">
				<a href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>" data-lightbox="products-img" class="slider-for__img-item" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>);"></a>
				<?php if(carbon_get_the_post_meta('un_gallery_img_1')):?>
				<a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_1'), 'full')[0];?>" data-lightbox="products-img" class="slider-for__img-item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_1'), 'full')[0];?>);"></a>
				<?php endif;?>
				<?php if(carbon_get_the_post_meta('un_gallery_img_2')):?>
				<a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_2'), 'full')[0];?>" data-lightbox="products-img" class="slider-for__img-item" class="slider-for__img-item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_2'), 'full')[0];?>);"></a>
				<?php endif;?>
				<?php if(carbon_get_the_post_meta('un_gallery_img_3')):?>
				<a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_3'), 'full')[0];?>" data-lightbox="products-img" class="slider-for__img-item" class="slider-for__img-item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_3'), 'full')[0];?>);"></a>
				<?php endif;?>
				<?php if(carbon_get_the_post_meta('un_gallery_img_4')):?>
				<a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_4'), 'full')[0];?>" data-lightbox="products-img" class="slider-for__img-item" class="slider-for__img-item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_4'), 'full')[0];?>);"></a>
				<?php endif;?>
			</div>
			<div class="slider-nav">
				<div class="item" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');?>);">
				</div>
				<?php if(carbon_get_the_post_meta('un_gallery_img_1')):?>
				<div class="item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_1'), 'thumbnail')[0];?>);">
				</div>
				<?php endif;?>
				<?php if(carbon_get_the_post_meta('un_gallery_img_2')):?>
				<div class="item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_2'), 'thumbnail')[0];?>);">
				</div>
				<?php endif;?>
				<?php if(carbon_get_the_post_meta('un_gallery_img_3')):?>
				<div class="item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_3'), 'thumbnail')[0];?>);">
				</div>
				<?php endif;?>
				<?php if(carbon_get_the_post_meta('un_gallery_img_4')):?>
				<div class="item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('un_gallery_img_4'), 'thumbnail')[0];?>);">
				</div>
				<?php endif;?>
			</div>		
		</div>


		<div class="entry-content text_decoration">
		
			<h1><?php the_title(); ?></h1>
			
			<p class="sku_in_page">Артикул: <span><?php echo carbon_get_the_post_meta('sku_n')?></span></p>
			
			<div class = "tovSKU" style = "display:none;"><?php echo carbon_get_the_post_meta('sku_n')?></div>
			<div class = "tovID" style = "display:none;"><?php the_ID(); ?></div>
			
			<?php 
				if ( carbon_get_the_post_meta('un_short_derscr') ) {
			?>
				<p><?php echo apply_filters('the_content', carbon_get_the_post_meta( 'un_short_derscr' ));?></p>
			<?php
				}
			?>	

			<?php 
				if ( carbon_get_the_post_meta('un_specifications') ) {
			?>
				<p><?php echo apply_filters('the_content', carbon_get_the_post_meta( 'un_specifications' ));?></p>		
			<?php
				}
			?>	
				


			<div class="content-block content-block__price">
				<?php if(carbon_get_the_post_meta('price_old')):?>
					<span class="single-price__old"><?php echo carbon_get_the_post_meta('price_old');?> руб.</span>
				<?php endif;?>
				<?php if(carbon_get_the_post_meta('price_n')):?>
					<span class="single-price"><?php echo carbon_get_the_post_meta('price_n');?> руб.</span>
				<?php endif;?>
			</div>
			
			<div class= "by_blk">
				<a href="#" class="btn buy_btn">Добавить в корзину</a>
			</div>
		</div>

	
	</div>
	
	<div class="tovar_bottom_part text_decoration">
		<?php 
			if ( carbon_get_the_post_meta('un_derscr') || (get_the_content() !== "") ) {
		?>
			<h2>Описание</h2>
			<?php 
				if(carbon_get_the_post_meta('un_derscr'))
					echo  apply_filters('the_content', carbon_get_the_post_meta('un_derscr'));
				else 
					echo apply_filters( 'the_content', get_the_content());
			?>

		<?php
			}
		?>
		

		<?php 
			if ( carbon_get_the_post_meta('un_application') ) {
		?>
			<h2>Все характеристики</h2>
			<?php echo  apply_filters('the_content', carbon_get_the_post_meta('un_application'));?>
		
		<?php
			}
		?>

	</div>
</article><!-- #post-<?php the_ID(); ?> -->
