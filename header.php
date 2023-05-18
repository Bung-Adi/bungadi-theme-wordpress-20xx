<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>  
    <meta charset="<?php bloginfo('charset'); ?>">  
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/gambar/Favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/gambar/Webclip.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/gambar/Webclip.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/gambar/Webclip.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/gambar/Webclip.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
</head>
<body>
    
    <div class="loader">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <main class="main">
        <header class="navbar">
            <div class="container">
                <div class="navbar__flex">
                    <a href="<?php echo home_url('/'); ?>" class="navbar__brand">
                        <img src="<?php echo get_template_directory_uri(); ?>/gambar/Logo.svg" alt="BungAdi">
                    </a>
                    <div class="navbar__menu has-fade">       
                    <?php
                        $menuParameters = array(
                            'menu'            => 'primary',
                            'menu_class'      => '',
                            'items_wrap'      => '%3$s',
                            'theme_location'  => 'primary',
                            'container'       => false,
                            'echo'            => false,
                            'depth'           => 0, // 1 = no dropdowns, 2 = with dropdowns.
                            'fallback_cb'     => '__return_empty_string',
                        );
                        echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?>
                        <a href="#footer">
                            <div class="button button-cta">
                                <div class="btn-content">
                                    contact me
                                </div>
                            </div>
                        </a>
                    </div>
                    <a href="#" id="btnBurger" class="navbar__burger" title="menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </header>