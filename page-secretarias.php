<?php get_header();
//Template Name: Secretarias
?>

    <main>

        <section>
            <div class="container sec-min">
                <div class="bread_crumb">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Secretarias</a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <section class="destaque_news">
            <div class="container sec-min d-flex">
                <div class="head_section">
                    <h2><span>Secretarias</span></h2>
                </div>
                
                <div class="container_comp">

                    <?php

                        $args = [
                            'post_type' => 'secretaria',
                            'posts_per_page' => -1
                        ];

                        $results = new WP_Query($args);

                        if($results->have_posts()):
                            while($results->have_posts()):
                                $results->the_post();

                    ?>

                    <div class="over_card_comp">
                        <div class="card_comp">
                            
                            <?php

                                $custom_fields = get_post_custom(get_the_ID());

                                //var_dump($custom_fields);

                                $titulo_responsavel = $custom_fields['titulo_responsavel'][0];
                                $subtitulo = $custom_fields['subtitulo'][0];
                                $horario_de_funcionamento = $custom_fields['horario_de_funcionamento'][0];
                                $telefone = $custom_fields['telefone'][0];
                                $email = $custom_fields['e-mail'][0];
                                $endereco = $custom_fields['endereco'][0];
                                $img_id = $custom_fields['foto_do_secretario'][0];
                                $img_url = wp_get_attachment_image_src($img_id, 'full')[0];


                            ?>

                            <div class="left_card_comp">
                                <img src="<?= $img_url ?>" alt="">
                            </div>
                            <div class="right_card_comp">
                                <div class="head_card_comp">
                                    <h3><?= $subtitulo ?></h3>

                                    <span class="btn_close_card_comp">
                                        <i class="bi bi-x-lg"></i>
                                    </span>
                                </div>
    
                                <ul>
                                    <li><i class="bi bi-person-fill"></i> <span><?= $titulo_responsavel ?></span></li>
                                    <li><i class="bi bi-clock"></i> <span><?= $horario_de_funcionamento ?></span></li>
                                    <li><i class="bi bi-telephone-fill"></i> <span><?= $telefone ?></span></li>
                                    <li><i class="bi bi-envelope"></i> <span><?= $email ?></span></li>
                                    <li><i class="bi bi-geo-alt-fill"></i> <span><?= $endereco ?></span></li>
                                </ul>
    
                                <div class="card_comp_more">
                                    <a href="<?= get_the_permalink() ?>" class="btn_card_comp_more" style="width: 100%">
                                        Ver Mais
                                    </a>
                                    <a href="<?= get_the_permalink() ?>" class="btn_card_comp_more_mobile" style="width: 100%">
                                        Ver Mais
                                    </a>
                                </div>
    
                                <div class="desc_card_comp">
                                <?php
                                    the_content();
                                ?>
                                </div>
    
                            </div>
                        </div>
                    </div>

                    <?php
                        endwhile; endif;
                        wp_reset_query(); wp_reset_postdata();

                    ?>
                    
                </div>
            </div>
        </section>

        <section>
            <div class="container sec-min"></div>
        </section>

    </main>

<?php get_footer(); ?>