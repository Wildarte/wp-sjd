<?php get_header();
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
                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/receitas.png" alt="">
                        <p>Receitas</p>
                    </a>
                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/despesas.png" alt="">
                        <p>Despesas</p>
                    </a>
                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/licitacoes-2.png" alt="">
                        <p>Licitações</p>
                    </a>
                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/contrato.png" alt="">
                        <p>Contratos</p>
                    </a>
                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/transp.png" alt="">
                        <p>Radar da Transparência</p>
                    </a>
                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/sic.png" alt="">
                        <p>e-SIC</p>
                    </a>
                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/ouvidoria.png" alt="">
                        <p>Ouvidoria</p>
                    </a>
                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/notas-2.png" alt="">
                        <p>Notas Eletrônicas</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="sec_news">
            <div class="container sec-default">
                <div class="head_section">
                    <h2><span>Notícias</span></h2>
                </div>

                <div class="news_post d-flex">

                    <div class="card_destaq">
                        <a href="">
                            <img src="https://sts-gestao.s3.amazonaws.com/uploads/noticias/074cf4154772b6f6694bf575d2580763.png" alt="">
                        </a>
                        <div class="info_card_destaq">
                            <h4>EDITAL 01/2024 JORNADA SUPLEMENTAR PARA</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquid error amet tempore voluptas minima, quia numquam dolore ad.</p>

                            <div class="over_link_card_destaq">
                                <a href="" class="link_card_destaq">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                

                    <div class="card_destaq">
                        <a href="">
                            <img src="https://sts-gestao.s3.amazonaws.com/uploads/noticias/9e3f51a589294c74177c59455e0a9558.png" alt="">
                        </a>
                        <div class="info_card_destaq">
                            <h4>EDITAL Nº 005/2023 - SECRETARIA MUNICIPAL DE ESPORTE</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquid error amet tempore voluptas minima, quia numquam dolore ad.</p>

                            <div class="over_link_card_destaq">
                                <a href="" class="link_card_destaq">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                

                    <div class="card_destaq">
                        <a href="">
                            <img src="https://sts-gestao.s3.amazonaws.com/uploads/noticias/230fdedb6bb9a0afb09e098b8cc13f41.png" alt="">
                        </a>
                        <div class="info_card_destaq">
                            <h4>PREMIAÇÃO LEITEIRA</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquid error amet tempore voluptas minima, quia numquam dolore ad.</p>

                            <div class="over_link_card_destaq">
                                <a href="" class="link_card_destaq">Saiba Mais</a>
                            </div>
                        </div>
                    </div>

                    <div class="card_destaq">
                        <a href="">
                            <img src="https://sts-gestao.s3.amazonaws.com/uploads/noticias/6ab9fe779f40b1654a7d5e220e12d4e9.png" alt="">
                        </a>
                        <div class="info_card_destaq">
                            <h4>RECADASTRAMENTO DE SERVIDORES</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquid error amet tempore voluptas minima, quia numquam dolore ad.</p>

                            <div class="over_link_card_destaq">
                                <a href="" class="link_card_destaq">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                

                    <div class="card_destaq">
                        <a href="">
                            <img src="https://sts-gestao.s3.amazonaws.com/uploads/noticias/842e973a8edf606f9873bd33592a2889.png" alt="">
                        </a>
                        <div class="info_card_destaq">
                            <h4>SELO UNICEF</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquid error amet tempore voluptas minima, quia numquam dolore ad.</p>

                            <div class="over_link_card_destaq">
                                <a href="" class="link_card_destaq">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                

                    <div class="card_destaq">
                        <a href="">
                            <img src="https://sts-gestao.s3.amazonaws.com/uploads/noticias/8b87551d4d406185ff50a5ad6da3db2e.png" alt="">
                        </a>
                        <div class="info_card_destaq">
                            <h4>DECRETO DE DESAPROPRIAÇÃO</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquid error amet tempore voluptas minima, quia numquam dolore ad.</p>

                            <div class="over_link_card_destaq">
                                <a href="" class="link_card_destaq">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                
                </div>

                <div class="d-flex over_btn_default">
                    <a href="" class="btn-default">Mais Notícias</a>
                </div>
            </div>
        </section>

        <section class="sec_gallery">
            <div class="container sec-default">
                <div class="head_section">
                    <h2><span>Galeria de Imagens</span></h2>
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