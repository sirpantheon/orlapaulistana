<?php
function theme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Optionally, you can enqueue other styles or scripts here
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



/*INÍCIO ENFILEIRAR CSS*/

function orla_enqueue_styles() {
    // Enfileirando o CSS do menu sanduíche
    wp_enqueue_style('menu-sanduiche', get_template_directory_uri() . '/css/menu-sanduiche.css', array(), '1.0', 'all');
	wp_enqueue_style('dia-noite', get_template_directory_uri() . '/css/dia-noite.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
    
}
add_action('wp_enqueue_scripts', 'orla_enqueue_styles');

function load_scripts() {
    // Enfileirar o script dia-noite.js
    wp_enqueue_script('jquery');
    wp_enqueue_script('dia-noite', get_template_directory_uri() . '/js/dia-noite.js', array(), '1.0', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);
    // wp_enqueue_script('plantas-script', get_template_directory_uri() . '/js/plantas.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

/*FIM ENFILEIRAR CSS*/


/*INÍCIO ENFILEIRAR JS*/



/*FIM ENFILEIRAR JS*/


/*INÍCIO REGISTRAR TIPO DE CONTEÚDO IMAGENS E GALERIAS */

// Função para criar o Custom Post Type
function custom_post_type_imagens_galerias() {
    $labels = array(
        'name'               => 'Imagens e Galerias',
        'singular_name'      => 'Imagem ou Galeria',
        'menu_name'          => 'Imagens e Galerias',
        'name_admin_bar'     => 'Imagens e Galerias',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Conteúdo',
        'new_item'           => 'Novo Conteúdo',
        'edit_item'          => 'Editar Conteúdo',
        'view_item'          => 'Visualizar Conteúdo',
        'all_items'          => 'Todos os Conteúdos',
        'search_items'       => 'Procurar Conteúdos',
        'not_found'          => 'Nenhum Conteúdo encontrado',
        'not_found_in_trash' => 'Nenhum Conteúdo encontrado na lixeira'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false, // Definido como false para remover URLs públicas
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => false,
        'rewrite'            => false, // Sem URL acessível
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array('title', 'thumbnail') // Habilita título e imagem destacada
    );

    register_post_type('imagens_galerias', $args);
}
add_action('init', 'custom_post_type_imagens_galerias');

add_theme_support('post-thumbnails');
// require get_template_directory() . '../custom_post_type/plantas.php';
// require get_template_directory() . '../custom_post_type/galeria.php';
// require get_template_directory() . '../custom_post_type/institucional-post-type.php';
// require get_template_directory() . '../custom_post_type/legado-post-type.php';



?>

