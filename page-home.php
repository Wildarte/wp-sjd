<?php

use FakerPress\Field;

 get_header();
//Template Name: Home
?>

    <main>
        <section class="hero">
            


            <div class="fast_access access_desktop">
                <a href="" class="animate__animated animate__bounceIn">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/portal.png" alt="">
                    <p>Portal da transparência</p>
                </a>
                <a href="" class="animate__animated animate__bounceIn">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/e-sic.png" alt="">
                    <p>e-sic</p>
                </a>
                <a href="" class="animate__animated animate__bounceIn">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/links.png" alt="">
                    <p>Links Importantes</p>
                </a>
                <a href="" class="animate__animated animate__bounceIn">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/notas.png" alt="">
                    <p>Nota Fiscal eletrônica</p>
                </a>
                <a href="" class="animate__animated animate__bounceIn">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/licitacoes.png" alt="">
                    <p>Licitações</p>
                </a>
            </div>
        </section>

        <section class="access_mobile">
            <div class="fast_access">
                <a href="" class="animate__animated animate__bounceIn">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/portal.png" alt="">
                    <p>Portal da transparência</p>
                </a>
                <a href="" class="animate__animated animate__bounceIn">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/e-sic.png" alt="">
                    <p>e-sic</p>
                </a>
                <a href="" class="animate__animated animate__bounceIn">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/links.png" alt="">
                    <p>Links Importantes</p>
                </a>
                <a href="" class="animate__animated animate__bounceIn">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/notas.png" alt="">
                    <p>Nota Fiscal eletrônica</p>
                </a>
                <a href="" class="animate__animated animate__bounceIn">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/licitacoes.png" alt="">
                    <p>Licitações</p>
                </a>
            </div>
        </section>

        <section class="sec_detaque">
            <div class="container sec-default">
                <div class="head_section">
                    <h2><span>Destaque</span></h2>
                </div>

                <div class="content_destaque">
                    <div class="carousel_dest owl-carousel">

                    <?php
                        $dest_main = get_field('destaque_principal_home');
                        

                        $args = [
                            'post_type' => 'post',
                            'post__in' => $dest_main,
                        ];

                        $results = new WP_Query($args);

                        if($results->have_posts()):
                            while($results->have_posts()):
                                $results->the_post();

                                echo '<a href="'.get_the_permalink().'"><img src="'.get_the_post_thumbnail_url(null, 'large').'" alt=""></a>';

                            endwhile;
                        endif;

                        wp_reset_query();
                        wp_reset_postdata();

                    ?>
                        
                    </div>

                    <div class="sing_destaq d-flex">

                        <?php

                            $dest_outros = get_field('outros_destaques_home'); 

                            $args = [
                                'post_type' => 'post',
                                'post__in' => $dest_outros,
                            ];

                            $results = new WP_Query($args);

                            if($results->have_posts()):
                                while($results->have_posts()):
                                    $results->the_post();

                                    ?>

                                        <div class="card_destaq">
                                            <a href="<?= get_the_permalink() ?>">
                                                <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                                            </a>
                                            <div class="info_card_destaq">
                                                <h4><?= get_the_title() ?></h4>
                                                <p><?= get_the_excerpt() ?></p>

                                                <div class="over_link_card_destaq">
                                                    <a href="<?= get_the_permalink() ?>" class="link_card_destaq">Saiba Mais</a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php

                                endwhile;
                            endif;

                            wp_reset_query();
                            wp_reset_postdata();

                        ?>

                    </div>
                </div>

                <section>
                    <div class="container sec-default-middle p-10-0">
                        <div class="destaques_page owl-carousel">

                            <?php

                                $slide_imagens = get_field('slide_imagens');

                                foreach($slide_imagens as $item):

                            ?>

                            <a href="<?= $item['url_imagem'] ?>" class="">
                                <img src="<?= $item['imagem_slide'] ?>" alt="">
                            </a>

                            <?php endforeach; ?>
        
                        </div>
                    </div>
                </section>
            </div>
            
        </section>

        <section class="sec_access">
            <div class="container sec-default">
                <div class="head_section">
                    <h2><span>Acesso Rápido</span></h2>
                </div>

                <div class="d-flex fa_access">

                    <?php
                        $acesso_rapido = get_field('acesso_rapido');

                        foreach($acesso_rapido as $item):
                    ?>

                    <a href="<?= $item['url_acesso_rapido'] ?>">
                        <img src="<?= $item['imagem_acesso_rapido']['url'] ?>" alt="">
                        <p><?= $item['titulo_acesso_rapido'] ?></p>
                    </a>

                    <?php endforeach; ?>

                    
                </div>
            </div>
        </section>

        <section class="sec_news">
            <div class="container sec-default">
                <div class="head_section">
                    <h2><span>Notícias</span></h2>
                </div>

                <div class="news_post d-flex">

                    <?php

                        $args_post = [
                            'post_type' => 'post',
                            'posts_per_page' => 6,
                        ];

                        $results_post = new WP_Query($args_post);

                        if($results_post->have_posts()):
                            while($results_post->have_posts()):
                                $results_post->the_post();
                    ?>

                    <div class="card_destaq">
                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                        </a>
                        <div class="info_card_destaq">
                            <h4><?= get_the_title() ?></h4>
                            <p><?= get_the_excerpt() ?></p>

                            <div class="over_link_card_destaq">
                                <a href="<?= get_the_permalink() ?>" class="link_card_destaq">Saiba Mais</a>
                            </div>
                        </div>
                    </div>

                    <?php

                            endwhile;
                        endif;

                        wp_reset_query();
                        wp_reset_postdata();

                    ?>
                
                </div>


                <div class="d-flex over_btn_default">
                    <?php
                        
                        $template_name = 'page-noticias';
                        $page_url = get_page_url_by_template($template_name);
                        
                        if ($page_url) {
                            echo '<a href="'.$page_url.'" class="btn-default">Mais Notícias</a>';
                        }
                        
                    ?>
                </div>

            </div>
        </section>

        <section class="sec_gallery">
            <div class="container sec-default">
                <div class="head_section">
                    <h2><span>Galeria de Imagens</span></h2>
                </div>

                <div class="container_gallery">

                <?php

                    $args_galeria = [
                        'post_type' => 'galeria',
                        'posts_per_page' => 3,
                    ];

                    $results_galeria = new WP_Query($args_galeria);

                    if($results_galeria->have_posts()):
                        while($results_galeria->have_posts()):
                            $results_galeria->the_post();
                ?>

                    <a href="<?= get_permalink() ?>">
                        <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                        <div class="show_more_gallery">
                            <span>Ver Álbum</span>
                        </div>
                    </a>

                    <?php

                            endwhile;
                        endif;

                        wp_reset_query();
                        wp_reset_postdata();

                    ?>

                </div>
            </div>
        </section>


        <section class="sec_video">
            <div class="container sec-default">
                <div class="head_section">
                    <h2><span>Vídeos</span></h2>
                </div>

                <div class="container_gallery">
                    <a href="https://google.com">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/prefeitura.png" alt="">
                        <div class="show_more_gallery">
                            <span>Ver Álbum</span>
                        </div>
                    </a>
                    <a href="https://facebook.com">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/prefeitura.png" alt="">
                        <div class="show_more_gallery">
                            <span>Ver Álbum</span>
                        </div>
                    </a>
                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/prefeitura.png" alt="">
                        <div class="show_more_gallery">
                            <span>Ver Álbum</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

    </main>

<?php get_footer() ?>