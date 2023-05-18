<a href="<?php the_permalink(); ?>" class="project">
    <div class="image-wraper">
        <span class="overlay-hover-img">
            <h4>see this project &rarr;</h4>
        </span>
        
        <?php if ( has_post_thumbnail() ) { ?>
                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
        <?php }else{ ?>
                <img src="<?php echo get_template_directory_uri(); ?>/gambar/Thumbnail.jpg" alt="">
        <?php } ?>
        
    </div>
    <h3><?php the_title(); ?></h3>
</a>