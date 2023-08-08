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

				<div class="cat_subcat_list">
					
					<?php
						$categories = get_categories( [
							'parent' => 247,
						] );

						if( $categories ) 
							foreach( $categories as $cat ){
					?>

						<a href="<? get_category_link($cat->term_id) ?>" class="cat_in_page_blk">
							<div class="catimg">
								<? 
									$img = carbon_get_term_meta($cat->term_id, "cat_preview");
									if (!empty($img)){
								?>
									<img src="<? echo wp_get_attachment_url($img); ?>" alt="<?php echo $cat->name; ?>" title="<?php echo $cat->name; ?>">
								<?php 
									} else {
								?>
									<img src="<? echo get_template_directory_uri(); ?>/images/nophoto.jpg" alt="<?php echo $cat->name; ?>" title="<?php echo $cat->name; ?>">
								<?}?>

								
							</div>

							<div class="cattext">
								<span><?php echo $cat->name; ?></span>	
							</div>
							
						</a>
								
					<?php } ?>
					
					
				</div>
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