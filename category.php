<?php get_header(); ?>
<div class="main-category">
	<div class="container">
		<?php un_breadcrumbs();?>
	</div>
	<div class="container main-category__container page-with-sidebar">
		<?php get_template_part('template-parts/sidebar');?>
		<div class="block-content">
			<header class="page-header">
				<h1 class="block-title"><span><?php single_cat_title();?></span></h1>
			</header>

			<div class="cat_product_wrapper">
				<div class ="cat_navigation">
					<ul>
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

				<div class="cat_product_list">
					<?php
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post(); 
								get_template_part('template-parts/product-elem');	
							endwhile;
						endif;wp_reset_postdata();
					?>
				</div>
			</div>
			

			<div class="container">
				<?php the_posts_pagination();?>
			</div>
			
			
			<div class="category-descr">
				<?php echo category_description();?>
			</div>
			
			
		</div>
	</div>
	<?php get_template_part('template-parts/gallery');?>
</div>
  <script>
  document.body.innerHTML = document.body.innerHTML.replace('Далее', '→');
	 document.body.innerHTML = document.body.innerHTML.replace('Назад', '←');  
</script>
<?php get_footer(); ?>