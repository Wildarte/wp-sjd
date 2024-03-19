<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title><?php wp_title('|', true, 'right'); ?> <?= bloginfo('name') ?></title>
    <?php wp_head() ?>
</head>
<body>

    <div class="over_search">
        <div class="btn_close_search">
            <i class="bi bi-x-lg"></i>
        </div>
        <form action="" class="form_search">
            <input type="search" name="" id="" placeholder="Pesquisar...">
            <button class=""><i class="bi bi-search"></i></button>
        </form>
    </div>
    
    <header class="header <?= is_front_page() == false ? "header_unposition" : "" ?>">
        <div class="top_header">
            <div class="access animate__animated animate__bounceInDown">
                <p>Acessibilidade:</p>

                <ul class="list_access">
                    <li><a href="#" class="btn_contraste"></a></li>
                    <li><a href="#">A+</a></li>
                    <li><a href="#">A-</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </div>
        <div class="bottom_header">

                <a href="<?= esc_url(home_url('/')) ?>" class="logo_header">

                    <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id , 'full');

                        if (has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        }
                    ?>
                    

                    <div class="info_logo">
                        <p><strong>Prefeitura</strong></p>
                        <p>São José do Divino</p>
                    </div>

                </a>

                <nav class="menu">
                    <div class="header_menu">
                        <a href="" class="logo_header">
                        <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id , 'full');

                            if (has_custom_logo()) {
                                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                            }
                        ?>
                            <div class="info_logo">
                                <p><strong>Prefeitura</strong></p>
                                <p>São José do Divino</p>
                            </div>
                        </a>

                        <div class="btn_close_menu">
                            <i class="bi bi-x-lg"></i>
                        </div>
                    </div>
                    
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-principal',
                            'menu_id' => 'menu-principal',
                            'container' => false,
                        ));
                    ?>

                    <div class="btn_search">
                        <i class="bi bi-search"></i>
                    </div>
                </nav>

                <div class="btn_menu">
                    <i class="bi bi-list"></i>
                </div>
        </div>
    </header>