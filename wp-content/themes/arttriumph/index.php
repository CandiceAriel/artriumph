<?php
get_header();
?>
    <main id="site-content"  class="blog-post pd-10" role="main">
		<div class="section-inner thin">
            <article class="content content-archive">

                <?php 
                if( have_posts() ){
                    while(have_posts()){
                        the_post();

                        get_template_part('template-parts/content', 'collection');
                    }
                }
                ?>
            </article>

	</div><!-- .section-inner -->
</main>

<?php
get_footer();
?>
