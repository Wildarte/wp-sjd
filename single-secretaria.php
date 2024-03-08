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
                    <img src="https://cdn.pixabay.com/photo/2016/01/07/04/52/designer-1125324_1280.jpg" alt="">
                </div>

                <div class="info_personal">
                    <div class="head_info_personal">
                        <h3>Prefeito</h3>
                        <h2>Armando Eermelino</h2>
                    </div>

                    <p>Filho do finado Bento Camargo e Maria Ascenção Bedin Camargo, Emerson Rodrigo Camargo, conhecido em Jaboticabal e na região por Prof. Emerson, nasceu em 14 de julho de 1979, em Jaboticabal.</p>

                    <p>Emerson é graduado em Filosofia e História, Mestre em Educação e pós-graduando em Gestão Pública, curso que tem feito recentemente e o ajuda a compreender melhor os desafios da administração de uma cidade e quais os melhores caminhos para se tomar na resolução de problemas. Atualmente é professor da rede pública e privada de ensino.</p>

                    <p>Durante sua adolescência e até hoje, prof. Emerson sempre foi e se manteve engajado no assunto político, porém, sem fazer desta vocação a sua profissão. Entre os anos de 2009 e 2012 ele esteve como vereador na cidade de Jaboticabal.</p>
                </div>
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