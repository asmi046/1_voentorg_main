<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main product">
			<div class="container breadcr">
				<?php un_breadcrumbs();?>
			</div>
			<div class="container">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'product' );

					// the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						// comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->   
<?php get_footer(); ?>