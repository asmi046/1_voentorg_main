<div id="sideleft">
    <div class = "searchleftBlk">
		<div class="title">ПОИСК ПО КАТАЛОГУ</div>
		<div class = "catSerch">
		<?php include(TEMPLATEPATH.'/searchformcat.php'); ?>
		</div>
	</div>
	<div class = "menuBtn">
		<i class="fa fa-bars" aria-hidden="true"></i> Каталог товаров
	</div>
	<div class = "menuBlk">
		<div class="title">Товары военторг</div>
		<ul>
		<?php wp_list_categories('orderby=order&title_li=&hide_empty=0&child_of=247'); ?>
		</ul>
		
		<div class="title titleMargin">Оружейный отдел</div>
		<ul>
		<?php wp_list_categories('orderby=order&title_li=&hide_empty=0&child_of=192'); ?>
		</ul>
	</div>
</div>
