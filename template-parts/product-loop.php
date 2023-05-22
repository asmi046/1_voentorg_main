<div class="product-loop">
	<a href="<?php echo get_permalink();?>" class="product-loop-image__link">
		
		<?php if (carbon_get_the_post_meta('stiker')): ?>
			<span><?php // echo carbon_get_the_post_meta('stiker');?></span>
		<?php endif; ?>
		<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>" alt="" />
	</a>
	<div class="product-loop__info">
		<a href="<?php echo get_permalink();?>" class="product-loop__title"><?php the_title();?></a>
		<div class="product-loop__btn-wrap">
			<a href="<?php echo get_permalink();?>" class="product-loop__more-link">Подробнее</a>
			<div class="product-loop__price"></div>
		</div>
	</div>
	
</div>