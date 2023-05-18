<footer class="footer" id="footer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/gambar/footer-bg-m.svg');">
            <div class="container">
                <div class="wtw">
                    <div class="sideone">
                        <div class="hilight-box">
                            <span class="hilight">
                                <div class="marker"></div>
                                <h2>Get in touch</h2>
                            </span>
                        </div>
                    </div>
                    <div class="sidetwo">
                        <p>If you need a modern and powerful website for your business, startup or yourself, I am available for work. You can email me directly at </p>
                        <span class="hilight-link">
                            <span class="marker"></span>
                            <a href="mailto:<?php echo get_the_author_meta( 'user_email' );?>"><?php echo get_the_author_meta( 'user_email' );?></a>
                        </span>
                        <span> &nbsp;<?php dynamic_sidebar('footer-widget'); ?></span>
                    </div>
                </div>
                <div class="copyright">
                <p>© BungAdi.com</p>
                </div>
            </div>
        </footer>
    </main>

    <?php wp_footer(); ?>
</body>
</html>