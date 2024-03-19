<?php
get_header();
//Template Name: Blog
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

                    <!-- 
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

                     -->
                
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