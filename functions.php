<?php
$version = wp_get_theme()->get('Version');

    // Change dashboard Posts to Portpolio
    function adi_change_post_object() {
        $get_post_type = get_post_type_object('post');
        $labels = $get_post_type->labels;
            $labels->name = 'Portpolio';
            $labels->singular_name = 'Portpolio';
            $labels->add_new = 'Add Portpolio';
            $labels->add_new_item = 'Add Portpolio';
            $labels->edit_item = 'Edit Portpolio';
            $labels->new_item = 'Portpolio';
            $labels->view_item = 'View Portpolio';
            $labels->search_items = 'Search Portpolio';
            $labels->not_found = 'No Portpolio found';
            $labels->not_found_in_trash = 'No Portpolio found in Trash';
            $labels->all_items = 'All Portpolio';
            $labels->menu_name = 'Portpolio';
            $labels->name_admin_bar = 'Portpolio';
    }
    add_action( 'init', 'adi_change_post_object' );

    function adi_theme_support(){
        // this function adds post thumbnail
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1046, 892, array( 'center', 'center'));
        // add menu
        register_nav_menus(array('primary' => __('Primary Menu')));
    }
    add_action('after_setup_theme','adi_theme_support');

    function adi_register_styles(){
        wp_enqueue_style( 'adi-googlefonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Work+Sans:wght@700;900&display=swap',array(),$version);
        wp_enqueue_style('adi-aos','https://unpkg.com/aos@next/dist/aos.css',array(),$version);
        wp_enqueue_style('adi-style',get_template_directory_uri()."/kecap/css/style.css",array(),$version);
    }
    add_action( 'wp_enqueue_scripts', 'adi_register_styles' );

    function adi_set_excerpt_length(){
		return 25;
	}
	add_filter('excerpt_length', 'adi_set_excerpt_length');

    function catch_that_image() {
        // catch first image in a post
        global $post, $posts;
        $first_img = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content,     $matches);
        $first_img = $matches[1][0];
      
        if(empty($first_img)) {
          $first_img = get_template_directory_uri().'/gambar/img-project-ss.jpg'; ///path/to/default.png
        }
        return $first_img;
    }

    function adi_scripts_method(){
       wp_enqueue_script('adi-aos','https://unpkg.com/aos@next/dist/aos.js',array(),$version,true);
       wp_enqueue_script('adi-sc',get_template_directory_uri().'/kecap/js/script.js',array(),$version,true);
    }
    add_action( 'wp_enqueue_scripts', 'adi_scripts_method' );

    //Register Widgets
    function adi_widget_areas(){
        register_sidebar(
            array(
                'name' => 'Footer Area',
                'id' => 'footer-widget',
                'description' => 'footer widget area add any social widget or whatever',
            )
        );
    }
    add_action('widgets_init','adi_widget_areas')

?>