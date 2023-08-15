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
				<?php get_template_part('template-parts/cat-input');?>
				
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