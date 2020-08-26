<?php


function load_stylesheets(){
    wp_register_style('stylesheet',get_template_directory_uri() . '/style.css','',1,'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom',get_template_directory_uri() . '/app.css','',1,'all');
    wp_enqueue_style('custom');

    wp_enqueue_style('shop-fonts','https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap');

    wp_enqueue_style('shop-icons','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


    
}

add_action('wp_enqueue_scripts','load_stylesheets');


function load_javascript(){
    wp_register_script('custom',get_template_directory_uri() . '/app.js', 'jquery',1,true);
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts','load_javascript');

//Add suport
add_theme_support('menus');
add_theme_support('post-thumbnails');

//Register menus
register_nav_menus(
    array(
        'top-menu'=>'Top Menu',
        'footer-menu'=>'Footer Menu'
    )
    );

//Set image sizes
add_image_size('post_image',1100,550,false);


//Add widgets
register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' =>'page_sidebar',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    )
    );

register_sidebar(
    array(
        'name' => 'Blog Sidebar',
        'id' =>'blog_sidebar',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    )
    );

    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

    function wpb_list_child_pages() { 
 
        global $post; 
         
        if ( is_page() && $post->post_parent )
         
            $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
        else
            $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
         
        if ( $childpages ) {
         
            $string = '<ul>' . $childpages . '</ul>';
        }
         
        return $string;
         
        }
         
        add_shortcode('wpb_childpages', 'wpb_list_child_pages');
?>