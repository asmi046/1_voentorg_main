<section class="products">
			<div class="container">
				<h2>Новинки</h2>

				<div class="prod-card d-flex">

					<?
					$args = array(
						'posts_per_page' => 8,
						'cat' => 308,
					);

					$query = new WP_Query($args);

					foreach( $query->posts as $post ){
						$query->the_post();
						get_template_part('template-parts/product-elem');
					}  
					wp_reset_postdata();
					?>

				</div>

			</div>
		</section>