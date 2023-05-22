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


		<div class="entry-content">
			<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title tovName">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title tovName"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				// mast_posted_on();
				// mast_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
			<div class="tab_item">
				<?php 
					if(carbon_get_the_post_meta('un_derscr'))
						echo  apply_filters('the_content', carbon_get_the_post_meta('un_derscr'));
					else 
						echo apply_filters( 'the_content', get_the_content());
				?>
			</div>
				<div class = "tovSKU" style = "display:none;"><?php echo carbon_get_the_post_meta('sku_n')?></div>
				<div class = "tovID" style = "display:none;"><?php the_ID(); ?></div>
			
				<?php if(carbon_get_the_post_meta('un_growth')):?>
			<!-- <div class="content-block">
					<?php $array_un_growth = explode(',', carbon_get_the_post_meta('un_growth'));

				?>
				
				
				
				<label for="un_growth" >Рост:</label>
				
				<select name="un_growth" id="un_growth" class = "tovRost">
					<?php foreach ($array_un_growth as $un_growth):?>
						<option value="<?php echo $un_growth?>"><?php echo $un_growth?></option>
					<?php endforeach;?>
				</select>
			</div> -->
				<?php endif;?>
				<?php if(carbon_get_the_post_meta('un_size')):?>
			<!-- <div class="content-block">
					<?php $array_un_size = explode(',', carbon_get_the_post_meta('un_size'));

				?>
				<label for="un_size" >Размеры:</label>

				<select name="un_size" id="un_size" class = "tovRazmer">
					<?php foreach ($array_un_size as $un_size):?>
						<option value="<?php echo $un_size?>"><?php echo $un_size?></option>
					<?php endforeach;?>
				</select>
			</div> -->
				<?php endif;?>
				<?php if(carbon_get_the_post_meta('un_color')):?>
			<!-- <div class="content-block">
					<?php $array_un_color = explode(',', carbon_get_the_post_meta('un_color'));

				?>
				<label for="un_color" >Цвет:</label>

				<select name="un_color" id="un_color" class = "tovColor">
					<?php foreach ($array_un_color as $un_color):?>
						<option value="<?php echo $un_color?>"><?php echo $un_color?></option>
					<?php endforeach;?>
				</select>
			</div> -->
				<?php endif;?>
			<div class="content-block">
				<?php echo apply_filters('the_content', carbon_get_the_post_meta( 'un_specifications' ));?>
			</div>
			<div class="content-block">
				<?php echo apply_filters('the_content', carbon_get_the_post_meta( 'un_short_derscr' ));?>
			</div>
			<div class="content-block content-block__price">
				<?php if(carbon_get_the_post_meta('price_old')):?>
					<span class="single-price__old"><?php echo carbon_get_the_post_meta('price_old');?> руб.</span>
				<?php endif;?>
				<?php if(carbon_get_the_post_meta('price_n')):?>
					<span class="single-price"><?php echo carbon_get_the_post_meta('price_n');?> руб.</span>
				<?php endif;?>
			</div>
			<div class="btn-block">
				<div class="link-consultation button" id="order-link"><span></span>Получить консультацию</div>
			</div>
			
			<?php
			// the_content( sprintf(
			// 	wp_kses(
			// 		/* translators: %s: Name of current post. Only visible to screen readers */
			// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mast' ),
			// 		array(
			// 			'span' => array(
			// 				'class' => array(),
			// 			),
			// 		)
			// 	),
			// 	get_the_title()
			// ) );

			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mast' ),
			// 	'after'  => '</div>',
			// ) );
			?>
		</div><!-- .entry-content -->

	
	</div>
	
	<?php if(carbon_get_the_post_meta('un_derscr')||(!empty(get_the_content()))):?>
	<div class="tab-wrapper">
		<div class="tabs">
			<span class="tab">Описание</span>
			<?php if(!empty(carbon_get_the_post_meta('un_application'))):?>
				<span class="tab">Характеристики</span>
			<?php endif;?>
		</div>
		<div class="tab_content">
			<div class="tab_item">
				<?php 
					if(carbon_get_the_post_meta('un_derscr'))
						echo  apply_filters('the_content', carbon_get_the_post_meta('un_derscr'));
					else 
						echo apply_filters( 'the_content', get_the_content());
				?>
			</div>
			<div class="tab_item">
				<?php echo  apply_filters('the_content', carbon_get_the_post_meta('un_application'));?>
			</div>
		</div>
	</div>
	<?php endif;?>
</article><!-- #post-<?php the_ID(); ?> -->
