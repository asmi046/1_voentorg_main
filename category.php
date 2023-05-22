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

			<div class ="dosCat">
					<?php
						if ( !empty($cat) ) :
						  $args = array(
							'title_li' => null,
							'child_of' => $cat,
							'depth' => 1,
							'echo' => 0,
							'hide_empty' => 0,
							'show_count' => 0,
							'show_option_none' => ""
						  );
						  echo "<ul>".wp_list_categories($args)."</ul>";
						endif;
					?>
				</div>
			<div class="products archive-products__wrap">
				<?php
		    if ( have_posts() ) :
			/* Start the Loop */
				while ( have_posts() ) :
					the_post(); 
					get_template_part('template-parts/product-loop');

					?>

			<?php	
				endwhile;
			endif;wp_reset_postdata();
		?>
			</div>
			
			
			<div class="category-descr">
				<?php echo category_description();?>
			</div>
			
			<div class="container">
				<?php the_posts_pagination();?>
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