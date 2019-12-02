<?php 

// Executa as funções que precisam do suporte do tema
function cs_theme_support() {
    //Cria uma tag de titulo do site
    add_theme_support( 'title-tag' ); 

    //Suporte para logotipo personalizada
    add_theme_support('custom-logo');

}
add_action('after_setup_theme', 'cs_theme_support');

if (!function_exists('wp_render_title_tag')) {
    function cs_render_title() {
        ?> <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title> <?php 
    }
    add_action('wp_head', 'cs_render_title');
}

