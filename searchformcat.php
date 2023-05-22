<div class="search">
    <form action="<?php bloginfo('url'); ?>" method="get">
	<div class="search-input-left"></div>
	<input class="search-input" type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
	<input class="search-btn" type="submit" value="Найти">
	</form>
</div>