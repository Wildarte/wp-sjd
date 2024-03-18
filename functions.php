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


function get_page_url_by_template($template_name) {
    $args = array(
        'post_type'      => 'page', // Altere para 'post' se desejar buscar em posts em vez de páginas
        'post_status'    => 'publish',
        'meta_key'       => '_wp_page_template',
        'meta_value'     => $template_name . '.php' // Nome do modelo que você está procurando
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $query->the_post();
        $page_url = get_permalink();
        wp_reset_postdata();
        return $page_url;
    } else {
        return false; // Retorna falso se não encontrar nenhuma página com o modelo especificado
    }
}




// ========================== custom post type ========================================
// Função para registrar um tipo de post personalizado
function create_posttype(){
    register_post_type( 'galeria',
        array(
        'labels' => array(
        'name' => __( 'Galerias' ),
        'singular_name' => __( 'galeria' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array( 'slug' => 'galeria' ),
        'menu_position' => 5,
        'supports' => array ( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
        'menu_icon' => 'dashicons-format-gallery'
        )
    );
}
add_action ( 'init', 'create_posttype' );



function create_posttype_secretaria(){
    register_post_type( 'secretaria',
        array(
        'labels' => array(
        'name' => __( 'Secretarias' ),
        'singular_name' => __( 'secretaria' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array( 'slug' => 'secretaria' ),
        'menu_position' => 5,
        'supports' => array ( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
        'menu_icon' => 'dashicons-category'
        )
    );
}
add_action ( 'init', 'create_posttype_secretaria' );



function get_page_id_by_template($template_name) {
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => $template_name
    ));

    if (!empty($pages)) {
        return $pages[0]->ID;
    } else {
        return null;
    }
}





?>


