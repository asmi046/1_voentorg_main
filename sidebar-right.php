<div id="sideright">
    <div class="title">НОВИНКИ</div>
	    <div class="novinki">
		    <?php
				$recent = new WP_Query("cat=164&showposts=7"); 
				while($recent->have_posts()) : $recent->the_post();
			?>
			<div class = "novinkiBlk">
			<?php
				echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); 
            ?>
			
            
		    			
				<div class="nov-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			</div>
			<?php endwhile; ?>
		</div>
		
	<div class="title">АКЦИЯ</div>
	<div class="action">
		<a href="<?php echo get_the_permalink(6864); ?>">
		<img src = "<?php bloginfo('template_url'); ?>/images/sale/Office_Form_Action.jpg" title = "Скидки на комплекты офисной формы" alt = "Офисная форма ВС РФ распродажа"/>
		</a>
	<div class="nov-text">
		<a href="<?php echo get_the_permalink(6864); ?>"><?php echo get_the_title(6864); ?></a>
		<br/><br/>Вся информация по т. (4712)730-449 <br/>или e-mail: 1voentorg@bk.ru
	</div>
	
	</div>	
	<div class="title">ВИДЕО</div>
	    <div class="video"><iframe width="233" height="155" src="//www.youtube.com/embed/ccfQt1wqyGE" frameborder="0" allowfullscreen></iframe></div>
	<!--<div class="title">НОВОСТИ</div>
	<div class="news">
	    <div class="news-pre-title">Новости РГ «Силовой блок»</div>
		<div class="one-news">
		    <div class="date-news">20:15</div>
			<div class="anno-news">Полицейские получат специальную боевую подготовку</div>
		</div>
		<div class="one-news">
		    <div class="date-news">20:15</div>
			<div class="anno-news">Полицейские получат специальную боевую подготовку</div>
		</div>
	</div>-->
	
	<div id = "vkg">
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

		<!-- VK Widget -->
		<div id="vk_groups"></div>
		<script type="text/javascript">
		VK.Widgets.Group("vk_groups", {mode: 0, width: "235", height: "300", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 37640216);
		</script>
	</div>
</div>
