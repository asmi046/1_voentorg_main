<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<h1 class="block-title"><span><?php printf( esc_html__( 'Результаты для: %s', 'arena' ), '<span>' . get_search_query() . '</span>' );?></span></h1>
	            <?php if(have_posts()) :  ?>
	            	<div class="products archive-products__wrap">
					<?php while(have_posts()) : the_post();
						the_post(); 
						get_template_part('template-parts/product-loop');
					endwhile; ?>
					</div>
				<?php else: ?>
				    <div id="maintitleblock">
					<b>Найденные записи:</b>
					</div>
					<div id="maintextblock">
					    По Вашему запросу ничего не найдено
					</div>
			    <?php endif; ?>
				
					<div class="container">
						<?php the_posts_pagination();?>
					</div>
                </div>
            </main>
	    </div>
        <?php //get_sidebar('left'); ?>
	    <?php //get_sidebar('right'); ?>
	</div>
</div>    
<?php get_footer(); ?>