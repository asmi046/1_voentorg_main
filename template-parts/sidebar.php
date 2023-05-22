<aside class="sidebar">
	<div class="category_list">
		<?php 
		$current_category = get_queried_object()->cat_ID;
		$class_active = '';
		// echo '<pre>';
		// var_dump($current_category);
		// echo '</pre>';
		$categories = get_categories(array(
			'parent' => 247,
			'orderby' => 'name',
			'hide_empty' => 0,
		));
		if($categories) :
			?>
			<ul>
			<?php
			foreach ($categories as $cat) :
				// echo '<pre>';
				// var_dump($cat);
				// echo '</pre>';
				if($current_category == $cat->cat_ID) {
					$class_active = 'active';
				}
				?>

				<li class="<?php echo $class_active?>"><a href="<?php echo get_category_link($cat->cat_ID)?>"><?php echo $cat->name?></a></li>
				<?php
				$class_active = '';
			endforeach;
			?>
			</ul>
			<?php
		endif; wp_reset_postdata();
		?>
	</div>
</aside>