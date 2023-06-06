
<section class="slide"> 
		<div class="container">

			<div class="info-sl__slider slider">
						<?
							$pict = carbon_get_theme_option('slider_index');
							if($pict) {
								$pictIndex = 0;
								foreach($pict as $item) { 
									?>
								<div class="slider__item">
									<img src="<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0];?>" alt="">
									<? if ( !empty($item['slider_discount'])) { ?>
										<div class="info-sl__discounts">
											<? echo $item['slider_discount']; ?>
										</div>
									<? } ?>
									<div class="info-sl__text-new">  
										<h2><? echo $item['slider_title']; ?></h2>
										<p>
											<? echo $item['slider_subtitle']; ?>
										</p>
									</div>
								</div>
									<?
									$pictIndex++;
								}
							}
						?>
			</div>
</section>
