        <div id="latestwork">
            <?php 
                // the query
                $the_query = new WP_Query( array(
                    'posts_per_page' => 2,
                )); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <section class="latestwork" data-aos="fade-right" >
                            <div class="container">
                                <div class="project">
                                    <div class="left-part">
                                        <h4>Latest Work</h4>
                                        <h2><?php the_title(); ?></h2>
                                        <div class="tagwraper">
                                            <?php the_tags( '<p>', '</p><p>', '</p>' ) ?>
                                        </div>
                                    </div>
                                    <div class="thumbnail">
                                        <div class="thumbnail-wraper">
                                            <a href="<?php the_permalink(); ?>" class="thumb">
                                                <span class="overlay-hover-img">
                                                    <h4>see this project &rarr;</h4>
                                                </span>
                                                <?php if ( has_post_thumbnail() ) { ?>
                                                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
                                                <?php }else{ ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/gambar/Thumbnail.jpg" alt="">
                                                <?php } ?>
                                            </a>
                                            <img src="<?php echo get_template_directory_uri(); ?>/gambar/project-acen.svg" alt="" class="blob">
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="button button-gradien">
                                                <div class="btn-content">
                                                    see this project
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php __('No Portpolio'); ?></p>
            <?php endif; ?>
        </div>