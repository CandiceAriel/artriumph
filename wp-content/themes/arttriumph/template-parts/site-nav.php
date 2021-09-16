<div class="site-nav">

    <?php 
		wp_nav_menu(
			array(
				'menu' => 'header',
				'container' => '',
				'theme_location' => 'header',
				'items_wrap' => '<ul id="" class="nav-list list-inline">%3$s</ul>'
			)
		);
	?>
</div><!-- .site-nav -->
