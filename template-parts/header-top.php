<header class="header-top">
	<div class="container">
		<div class="header-top__wrapper">

		<?php wp_nav_menu( ['theme_location' => 'deader-top-menu', 'container' => false, 'menu_class' => "header-top__menu", 'menu_id' => "header-top__menu" ]); ?>

	<ul class="social-menu">
	<li><a href="<?php echo carbon_get_theme_option('vk_lnk'); ?>" style="background-image: url(<?php echo get_template_directory_uri();?>/images/icons-vk.png);"></a></li>
	<li><a href="<?php echo carbon_get_theme_option('ok_lnk'); ?>" style="background-image: url(<?php echo get_template_directory_uri();?>/images/icons-ok.png);"></a></li>
	<li><a href="<?php echo carbon_get_theme_option('tg_lnk'); ?>" style="background-image: url(<?php echo get_template_directory_uri();?>/images/icons-tg.png);"></a></li>
	</ul>
		</div>
	</div>
</header> 