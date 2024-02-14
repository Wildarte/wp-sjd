<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Prefeitura São José do Divino</title>
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
    
    <header class="header">
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
                <a href="" class="logo_header">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="">
                    <div class="info_logo">
                        <p><strong>Prefeitura</strong></p>
                        <p>São José do Divino</p>
                    </div>
                </a>

                <nav class="menu">
                    <div class="header_menu">
                        <a href="" class="logo_header">
                            <img src="assets/img/logo.png" alt="">
                            <div class="info_logo">
                                <p><strong>Prefeitura</strong></p>
                                <p>São José do Divino</p>
                            </div>
                        </a>

                        <div class="btn_close_menu">
                            <i class="bi bi-x-lg"></i>
                        </div>
                    </div>
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="">COMPETÊNCIAS E RESPONSÁVEIS</a></li>
                        <li><a href="">NOTÍCIAS</a></li>
                        <li><a href="">SERVIÇOS</a></li>
                        <li><a href="">LICITAÇÕES</a></li>
                        <li><a href="">LEGISLAÇÃO</a></li>
                    </ul>

                    <div class="btn_search">
                        <i class="bi bi-search"></i>
                    </div>
                </nav>

                <div class="btn_menu">
                    <i class="bi bi-list"></i>
                </div>
        </div>
    </header>