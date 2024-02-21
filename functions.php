<?php
// Função para carregar os scripts e folhas de estilo do tema
function meu_tema_scripts() {
    // Folha de estilo principal
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.min.css', [], '1.0', false);
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', [], '1.0', false);
    wp_enqueue_style('owl-theme-default', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', [], '1.0', false);
    wp_enqueue_style('reset', get_template_directory_uri().'/assets/css/reset.css', [], '1.0', false);
    wp_enqueue_style('m-style', get_template_directory_uri().'/assets/css/style.css', [], '1.0', false);

    // Script principal
    wp_enqueue_script('m-jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', [], '1.0', true);
    wp_enqueue_script('carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', [], '1.0', true);
    wp_enqueue_script('m-script', get_template_directory_uri() . '/assets/js/script.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

// Definir o tamanho do conteúdo
if (!isset($content_width)) {
    $content_width = 800; // pixels
}

// Registrando o menu de navegação
function registrar_menus() {
    register_nav_menus(
        array(
            'menu-principal' => __('Menu Principal'),
            'menu-rodape-prefeitura' => __('Menu Prefeitura Rodapé'),
            'menu-rodape-servicos' => __('Menu Serviços Rodapé'),
            'menu-rodape-outros-acessos' => __('Menu Outros Acessos Rodapé'),
            'menu-rodape-menu' => __('Menu Menu Rodapé'),
            'menu-rodape-secretarias' => __('Menu Secretarias Rodapé'),
        )
    );
}
add_action('init', 'registrar_menus');

// Adicionar suporte para imagens destacadas
add_theme_support('post-thumbnails');

// Função para adicionar uma classe ao body do WordPress
function adicionar_classe_body($classes) {
    if (is_home() || is_front_page()) {
        $classes[] = 'pagina-inicial';
    }
    return $classes;
}
add_filter('body_class', 'adicionar_classe_body');

function meu_tema_suporte_logo() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'meu_tema_suporte_logo');

// Outras funções personalizadas aqui...

?>
