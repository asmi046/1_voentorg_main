<section class="products">
			<div class="container">
				<h2>Популярные товары</h2>

				<div class="prod-card d-flex">

					<?
					$args = array(
						'posts_per_page' => 8,
						'post_type' => 'voen',
						'tax_query' => array(
							array(
								'taxonomy' => 'voencat',
								'field' => 'id',
								'terms' => array(4)
							)
						)
					);
					$query = new WP_Query($args);

					foreach( $query->posts as $post ){
						$query->the_post();
						get_template_part('product-elem');
					}  
					wp_reset_postdata();
					?>

				</div>

			</div>
		</section>