<?php
// Função para enfileirar scripts e estilos
function orla_enqueue_scripts() {
    // Enfileirar o script toggle.js
    wp_enqueue_script('toggle', get_template_directory_uri() . '/js/toggle.js', array(), null, true);
    
    // Passar o caminho do diretório do tema para o JavaScript
    wp_localize_script('toggle', 'themeVars', array(
        'templateDirectoryUri' => get_template_directory_uri()
    ));
}
add_action('wp_enqueue_scripts', 'orla_enqueue_scripts');
