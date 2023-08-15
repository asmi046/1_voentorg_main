<div class="cat_subcat_list">
					
					<?php
						$categories = get_categories( [
							'parent' => 247,
						] );

						if( $categories ) 
							foreach( $categories as $cat ){
					?>

						<a href="<? echo get_category_link($cat->term_id) ?>" class="cat_in_page_blk">
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