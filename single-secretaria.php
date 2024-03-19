<?php get_header();
?>

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
            <div class="container d-flex sec-personal">
                <div class="img_personal">
                    <?php
                            $img = get_field('foto_do_secretario');

                            $img_url = wp_get_attachment_image_url($img['id'], 'large');
                    ?>
                    <img src="<?= $img_url ?>" alt="">
                </div>

                <div class="info_personal">
                    <div class="head_info_personal">
                        <h3><?= get_field('subtitulo') ?></h3>
                        <h2><?= get_field('titulo_responsavel') ?></h2>
                    </div>

                    <div class="info_single_secretario">
                        <ul>
                            <li><i class="bi bi-clock"></i> <span><?= get_field('horario_de_funcionamento') ?></span></li>
                            <li><i class="bi bi-telephone-fill"></i> <span><?= get_field('telefone') ?></span></li>
                            <li><i class="bi bi-envelope"></i> <span><?= get_field('e-mail') ?></span></li>
                            <li><i class="bi bi-geo-alt-fill"></i> <span><?= get_field('endereco') ?></span></li>
                        </ul>
                    </div>

                    <?php
                        the_content();
                    ?>
                
            </div>
       </section>

       <section>
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

        <section>
            <div class="container sec-min"></div>
        </section>

    </main>

<?php get_footer(); ?>