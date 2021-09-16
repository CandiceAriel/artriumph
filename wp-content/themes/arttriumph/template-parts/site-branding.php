<div class="site-branding">
    <?php
        if(function_exists('the_custom_logo')){
           $custom_logo_id =  get_theme_mod('custom_logo');
           $logo = wp_get_attachment_image_src($custom_logo_id);

           wp_nav_menu(
			array(
				'menu' => 'logo',
				'container' => '',
				'theme_location' => 'logo',
				'items_wrap' => '<a class="" href="#>%3$s</a>'
			)
		);
        }
    ?>
</div><!-- .site-nav -->
