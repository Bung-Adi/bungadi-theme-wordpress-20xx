<?php get_header()?>

		<section class="titleprojects">
            <div class="container">
                <div class="titleprojects__title">
                    <?php
                        $our_title = get_the_title( get_option('page_for_posts', true) );
                    ?>
                    <h2><?php echo esc_html($our_title); ?></h2>
                </div>
            </div>
        </section>

        <section class="showprojects">
            <div class="container">
                <div class="showprojects__content">
                    <div class="wraper">
						<?php
							if(have_posts(  )){
								while(have_posts(  )){
									the_post(  );
									get_template_part( 'template-parts/content','archive' ); //now edit template-part folder edit content-archive.php
									// yang di atas bacanya wordpress ambil data dari folder 'template-parts' nama filenya depannya 'content' belakangnya 'archive'
								}
							}
						?>
                    </div>
                </div>
            </div>
        </section>
    
<?php get_footer()?>