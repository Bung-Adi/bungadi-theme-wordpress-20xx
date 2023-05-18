<?php get_header()?>

		<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/gambar/bg-heromobile.svg');">
            <div class="container">
                <div class="hero__content">
                    <div class="headline">
                        <h1>Hi, I’m Adi, a </h1>
                        <span class="hilight">
                            <span class="marker"></span>
                            <h1>Web Designer</h1>
                        </span> 
                        <h1>&nbsp;and</h1>
                        <span class="hilight">
                            <span class="marker"></span>
                            <h1>Webflow,&nbsp;</h1>
                        </span>
                        <span class="hilight">
                            <span class="marker"></span>
                            <h1>Wordpress </h1>
                        </span>
                        <span class="hilight">
                            <span class="marker"></span>
                            <h1>Developer</h1>
                        </span>
                    </div>
                    <p>
                        I design and build beautiful websites. If you need a modern and powerful website, fell free to contact me. If we are a good fit, I will give you a time and cost estimate.
                    </p>
                    <div class="button button-white">
                        <a href="#latestwork">
                            <div class="btn-content">
                                see my latest work
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="scroll-indicator">
                <div class="container">
                    <div class="scrolblock">
                        <span class="arrow"></span>
                        <h4>SCROLL&rarr;</h4>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/content', 'home'); ?>

        <section class="seemore">
            <div class="container">
                <div class="seemore__content">
                    <div class="leftcol">
                        <div class="hilight-box">
                            <span class="hilight">
                                <div class="marker"></div>
                                <h2>Interested ?</h2>
                            </span>
                        </div>
                    </div>
                    <div class="rightcol">
                        <a href="#">
                            <div class="button button-white-smol">
                                <div class="btn-content">
                                    See More Project
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="button button-gradien">
                                <div class="btn-content">
                                    Contact Me
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="what" data-aos="fade-up" >
            <div class="container">
                <div class="whatido">
                    <div class="leftcol">
                        <div class="hilight-box">
                            <span class="hilight">
                                <div class="marker"></div>
                                <h2>What I do</h2>
                            </span>
                        </div>
                    </div>
                    <div class="rightcol">
                        <h3>Design</h3>
                        <p>I design beautiful and powerful websites for modern businesses. Any business today needs a website that wins customers’ trust and helps you do your business well. I make sure your website is up to that standard.</p>
                        <h3>Development</h3>
                        <p>I build websites in Webflow where I can create responsive, powerful and fully custom websites. Plus, Webflow has an incredibly simple Content Editor for you and your team to edit website content quickly and easily. But if u preferbut if u prefer wordpress. I also can make Wordpress theme.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="tool-skill" data-aos="fade-in">
            <div class="container">
                <div class="ts-content">
                    <div class="leftcol">
                        <div class="hilight-box">
                            <span class="hilight">
                                <div class="marker"></div>
                                <h2>Tools & skills</h2>
                            </span>
                        </div>
                    </div>
                    <div class="rightcol">
                        <div class="badge-wraper">
                            <img src="<?php echo get_template_directory_uri(); ?>/gambar/icon/figma-icons.svg" alt="figma">
                            <img src="<?php echo get_template_directory_uri(); ?>/gambar/icon/photoshop-icons.svg" alt="photoshop">
                            <img src="<?php echo get_template_directory_uri(); ?>/gambar/icon/webflow-icons.svg" alt="figma">
                            <img src="<?php echo get_template_directory_uri(); ?>/gambar/icon/wordpres-icons.svg" alt="photoshop">
                            <img src="<?php echo get_template_directory_uri(); ?>/gambar/icon/html-icons.svg" alt="figma">
                            <img src="<?php echo get_template_directory_uri(); ?>/gambar/icon/css-icons.svg" alt="photoshop">
                            <img src="<?php echo get_template_directory_uri(); ?>/gambar/icon/scss-icons.svg" alt="figma">
                            <img src="<?php echo get_template_directory_uri(); ?>/gambar/icon/javascript-icons.svg" alt="photoshop">
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer()?>

