<?php
get_header();
//Template Name: Notícias
?>

    <main>

        <section>
            <div class="container sec-min">
                <div class="bread_crumb">
                    <ul>
                        <li><a href="<?= home_url() ?>">Home</a></li>
                        <li><a href="">Notícias</a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <?php if(!is_paged()): ?>

        <section class="destaque_news">
            <div class="container sec-min d-flex">
                <div class="head_section">
                    <h2><span>Destaque</span></h2>
                </div>
                <div class="f-50">
                    <?php
                        $post_destaque = get_field('post_destaque');

                        $args = [
                            'post_type' => 'post',
                            'p' => $post_destaque,
                            'posts_per_page' => 1
                        ];

                        $result_dest = new WP_Query($args);

                        if($result_dest->have_posts()):
                            while($result_dest->have_posts()):
                                $result_dest->the_post();
                    ?>
                    <article class="post_destaque_news">
                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                            <div class="info_post_destaque_news">
                                <span><?= get_the_category()[0]->name; ?></span>
                                <h3><?= get_the_title() ?></h3>
                            </div>
                        </a>
                    </article>

                    <?php endwhile; endif; wp_reset_query(); wp_reset_postdata(); ?>

                </div>

                <div class="f-50 left_destaque_news">

                    <?php
                            $dois_destaque = get_field('dois_destaques');

                            $args = [
                                'post_type' => 'post',
                                'post__in' => $dois_destaque,
                                'posts_per_page' => 2
                            ];
    
                            $result_dest2 = new WP_Query($args);
    
                            if($result_dest2->have_posts()):
                                while($result_dest2->have_posts()):
                                    $result_dest2->the_post();
                    ?>

                    <article class="post_destaque_news card_dest_half">
                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                            <div class="info_post_destaque_news">
                                <span><?= get_the_category()[0]->name; ?></span>
                                <h3><?= get_the_title(); ?></h3>
                            </div>
                        </a>
                    </article>

                    <?php
                        endwhile; endif; wp_reset_query(); wp_reset_postdata();
                    ?>

                </div>
            </div>
        </section>

        <section>
            <div class="container sec-default-middle">
                <div class="destaques_page owl-carousel">
                    
                    <?php

                        $slide_imagens = get_field('slide_imagens', get_page_id_by_template('page-home.php'));

                        foreach($slide_imagens as $item):

                        ?>

                        <a href="<?= $item['url_imagem'] ?>" class="">
                            <img src="<?= $item['imagem_slide'] ?>" alt="">
                        </a>

                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <?php endif; ?>

        <section class="sec_news">
            <div class="container sec-default-middle">

                <div class="news_post d-flex">
                    <div class="head_section">
                        <h2><span>Últimas Notícias</span></h2>
                    </div>

                    <?php

                        if(have_posts()):
                            while(have_posts()):
                                the_post();

                    ?>

                    <div class="card_destaq">
                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                        </a>
                        <div class="info_card_destaq">
                            <h4><?= get_the_title() ?></h4>
                            <p><?= get_the_excerpt() ?></p>

                            <div class="over_link_card_destaq">
                                <a href="<?= get_the_permalink(); ?>" class="link_card_destaq">Saiba Mais</a>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; endif; ?>

                
                </div>

                <div class="d-flex over_btn_default pagination_page">
                <?php
                // Verifica se existem posts paginados
                if ( $wp_query->max_num_pages > 1 ) :
                ?>
                    <nav class="pagination">
                        <?php
                        // Gera os links de paginação
                        echo paginate_links( array(
                            'prev_text' => __('« Anterior'),
                            'next_text' => __('Próximo »'),
                        ) );
                        ?>
                    </nav>
                <?php endif; ?>

                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>