<?php
function theme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/*INÍCIO ENFILEIRAR CSS*/

function load_scripts() {
    // Enfileirar o script dia-noite.js
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);
    wp_enqueue_script('fontawesome-js', 'https://kit.fontawesome.com/2429557911.js', array('jquery'), '5.3.3', true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
    // wp_enqueue_script('plantas-script', get_template_directory_uri() . '/js/plantas.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('post-thumbnails');

register_nav_menus( 
    array(
        "main_menu" => "Main Menu"
    )
 )












// require get_template_directory() . '../custom_post_type/plantas.php';
// require get_template_directory() . '../custom_post_type/galeria.php';
// require get_template_directory() . '../custom_post_type/institucional-post-type.php';
// require get_template_directory() . '../custom_post_type/legado-post-type.php';



?>

