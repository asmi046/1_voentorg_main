<div class="searchWriper">
	<div class="search">
		<form action="<?php bloginfo('url'); ?>" method="get">
		<div class="search-input-left"></div>
		<input class="search-input" type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
		<input class="search-btn" type="image" src="<?php bloginfo('template_url'); ?>/images/search-btn.jpg" value="">
		</form>
	</div>
</div>