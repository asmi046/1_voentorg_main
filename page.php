<?php get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="container">
				<?php un_breadcrumbs();?>
			</div>
			<div class="container">
				<?php if(have_posts()) :  ?>
					<?php while(have_posts()) : the_post(); ?>
			        <h1 class="block-title"><?php the_title(); ?></h1>
					
						<?php the_content(); ?>
						<?php endwhile; ?>
					
				<?php else: ?>
                    <div id="maintitleblock">
						<b>Ничего не найдено</b>
					</div>
					<div id="maintextblock">
						По Вашему запросу ничего не найдено.					
					</div>				
				<?php endif; ?>
				</div>
		    </main>
	    </div>
         
	     <?php //get_sidebar('right'); ?>
	</div>
</div>    
<?php get_footer(); ?>