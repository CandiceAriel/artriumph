<div class="container container-archive">
    <div class="post">
        <img  class="img-fluid post-thumb" src="<?php the_post_thumbnail_url(); ?>"/>
        <div class="media-body">
            <h3><?php the_title(); ?></h3>
            <div class="meta">
                <span><?php the_date(); ?></span>
            </div>
        </div>
    </div>
    <a class="more-link" href="<?php the_permalink(); ?>"> Read More &rarr;</a>
</div>