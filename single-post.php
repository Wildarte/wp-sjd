<?php get_header(); ?>

    <main>

        <section>
            <div class="container sec-min">
                <div class="bread_crumb">
                    <ul>
                        <li><a href="<?= home_url() ?>">Home</a></li>
                        <li><a href=""><?= get_the_title() ?></a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container d-flex p-10">

                <div class="page_post_left">

                    <h2><?= get_the_title() ?></h2>

                    <img class="img_thumbnail" src="<?= get_the_post_thumbnail_url(null, 'large') ?>" alt="">

                    <div class="content_post">

                        <?php the_content() ?>

                    </div>

                    <section class="p-20-0">
                        <div class="container">
                            <div class="share_personal">
                                <p>Compartilhar:</p>

                                <ul class="share_list">
                                    <li>
                                        <a class="link_facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= get_the_permalink() ?>/"><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_whatsapp" href="https://wa.me/send?text=<?= get_the_permalink() ?>"><i class="bi bi-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_twitter" href="https://twitter.com/intent/tweet?url=<?= get_the_permalink() ?>&text="><i class="bi bi-twitter-x"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_email" href="mailto:?subject=<?= get_the_title() ?>&body=<?= get_the_permalink() ?>"><i class="bi bi-envelope-fill"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_linkedin" href="https://linkedin.com/shareArticle?mini=true&url=<?= get_the_permalink() ?>&title=<?= get_the_title() ?>"><i class="bi bi-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_telegram" href="https://telegram.me/share/url?url=<?= get_the_permalink() ?>&text=<?= get_the_title() ?>"><i class="bi bi-telegram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                </div>

                <div class="page_post_right">

                    <div class="block_sidebar">

                        <h4>Últimas Notícias</h4>
                        
                        <div class="links_post_right">
                            
                            <?php
                                
                                $args = [
                                    'post_type' => 'post',
                                    'posts_per_page' => 5
                                ];

                                $results = new WP_Query($args);

                                if($results->have_posts()):
                                    while($results->have_posts()):
                                        $results->the_post();

                            ?>

                                <a href="<?= get_the_permalink() ?>"><?= get_the_title(); ?></a>

                            <?php

                                    endwhile;
                                endif;

                                wp_reset_query();
                                wp_reset_postdata();

                            ?>

                        </div>

                    </div>

                    <div class="block_sidebar">

                        <h4>Acesso Rápido</h4>

                        <ul class="page_right_fast_access">
                            <?php

                                $id_home = get_page_id_by_template('page-home.php');

                                $acesso_rapido = get_field('acesso_rapido', $id_home);

                                foreach($acesso_rapido as $item):
                            ?>
                            <li>
                                <a href="<?= $item['url_acesso_rapido'] ?>">
                                    <img src="<?= $item['imagem_acesso_rapido']['url'] ?>" alt="">
                                    <?= $item['titulo_acesso_rapido'] ?>
                                </a>
                            </li>

                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>

            </div>
            
        </section>

    </main>

<?php get_footer(); ?>