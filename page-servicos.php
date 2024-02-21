<?php
get_header();
//Template Name: Serviços
?>

    <main>

        <section>
            <div class="container sec-min">
                <div class="bread_crumb">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Serviços</a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <section class="destaque_news">
            <div class="container sec-min d-flex">
                <div class="head_section ">
                    <h2><span>Serviços</span></h2>
                </div>
                
                <div class="container_services">
                    <a href="" class="link_service">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-service.png" alt="">
                        <h4>RELATÓRIO DE GESTÃO ANUAL</h4>
                    </a>

                    <a href="" class="link_service">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-service2.png" alt="">
                        <h4>RELATÓRIO DE GESTÃO</h4>
                    </a>

                    <a href="" class="link_service">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-service3.png" alt="">
                        <h4>CONCURSO PÚBLICO 001/2022-P.M.SÃO JOSÉ DO DIVINO-PI</h4>
                    </a>

                    <a href="" class="link_service">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-service4.png" alt="">
                        <h4>NOTAS ELETRÔNICAS</h4>
                    </a>

                    <a href="" class="link_service">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-service5.png" alt="">
                        <h4>NOTAS ELETRÔNICAS</h4>
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div class="container sec-min">

            </div>
        </section>

    </main>

<?php get_footer(); ?>