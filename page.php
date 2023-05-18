<?php get_header(); ?>

        <section class="topbg">
            <div class="container">
                <div class="topbg__title">
                    <h2><?php the_title();?></h2>
                </div>
            </div>
		</section>

		<section class="contentarea">
            <div class="container">
                <div class="showprojects__content">
                    <div class="yourcontent">
                        <?php
                            if(have_posts(  )){
                                while(have_posts(  )){
                                    the_post(  );
                                    get_template_part( 'template-parts/content','page' ); //now edit template-part folder edit content-page.php
                                    // yang di atas bacanya wordpress ambil data dari folder 'template-parts' nama filenya depannya 'content' belakangnya 'page'
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>