<?php get_header()?>
    
		<section class="showcase">
            <div class="container">
                <div class="showcase__content">
                    <h4>project showcase</h4>
                    <?php the_title( '<h2>', '</h2>' ); ?>
                    <?php
                        $content = get_the_content();
                        $content = preg_replace('/(<)([img])(\w+)([^>]*>)/', "", $content);
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]&gt;', $content);
                    ?>
                    <p><?php echo $content; ?></p>
                </div>
            </div>
        </section>

        <section class="screenshoot">
            <div class="container container-ss">
                <div class="img-wraper">
                    <img src="<?php echo catch_that_image(); ?>" alt="project">
                </div>
            </div>
        </section>
    
<?php get_footer()?>