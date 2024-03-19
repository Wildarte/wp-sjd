<?php

use FakerPress\Field;

 get_header();
//Template Name: Home
?>

    <main>
        <section class="hero" style="display: none">
            
            <div class="fast_access access_desktop">

                <?php
                    $acesso_rapido_hero = get_field('acesso_rapido_hero');
                    

                    foreach($acesso_rapido_hero as $item):
                ?>

                <a href="<?= $item['link'] ?>" class="animate__animated animate__bounceIn">
                    <img src="<?= $item['imagem'] ?>" alt="">
                    <p><?= $item['titulo'] ?></p>
                </a>

                <?php endforeach; ?>

            </div>
        </section>


        <!-- ======================== Hero dois ==================================== -->

        <style>
            /* Slideshow container */
.slideshow-container {
  width: 100%;
  position: relative;
  margin: auto;
}
.slideshow-container img{
    height: 100vh;
    width: 100%;
    object-fit: cover;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  top: 50%;
  width: 100%;
  text-align: center;
}


.text h3{
    color: #ffffff;
    font-size: 2em;
    text-shadow: 2px 2px 10px rgba(0,0,0,0.8);
    margin-top: -60px;
    opacity: 0;
    transition: all 1s;
}
.margin_down{
    opacity: 1!important;
    margin-top: 0!important;
    font-size: 4em!important;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 2.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@media(max-width: 1024px){
    .slideshow-container img{
        height: 500px;
    }
}

@media(max-width: 768px){
    .margin_down{
        opacity: 1!important;
        margin-top: 0!important;
        font-size: 3em!important;
    }
}

@media(max-width: 420px){
    .margin_down{
        opacity: 1!important;
        margin-top: 0!important;
        font-size: 2em!important;
    }
}
        </style>

        <section class="hero">
            
            <div class="slideshow-container">

                <?php

                    $slide_hero = get_field('slide_hero');

                    foreach($slide_hero as $item):

                ?>

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="<?= $item['imagem'] ?>" style="width:100%">
                    <div class="text"><h3><?= $item['texto'] ?>
                    </h3></div>
                </div>

                <?php endforeach; ?>

            </div>
                <div class="fast_access access_desktop">

                    <?php
                        $acesso_rapido_hero = get_field('acesso_rapido_hero');
                        

                        foreach($acesso_rapido_hero as $item):
                    ?>

                    <a href="<?= $item['link'] ?>" class="animate__animated animate__bounceIn">
                        <img src="<?= $item['imagem'] ?>" alt="">
                        <p><?= $item['titulo'] ?></p>
                    </a>

                    <?php endforeach; ?>

                </div>
        </section>

        <script>
            let slideIndex = 1;

showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let text_slide = document.querySelectorAll('.slideshow-container .mySlides .text')
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    text_slide[i].querySelector('h3').classList.remove('margin_down');
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(function(){
    text_slide[slideIndex-1].querySelector('h3').classList.add('margin_down');
  }, 20)
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
        </script>
        <!-- ======================== Hero dois ==================================== -->

        <section class="access_mobile">
            <div class="fast_access">
                <?php
                    $acesso_rapido_hero = get_field('acesso_rapido_hero');
                    

                    foreach($acesso_rapido_hero as $item):
                ?>

                <a href="<?= $item['link'] ?>" class="animate__animated animate__bounceIn">
                    <img src="<?= $item['imagem'] ?>" alt="">
                    <p><?= $item['titulo'] ?></p>
                </a>

                <?php endforeach; ?>
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

        <!-- 

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
        
         -->

    </main>

<?php get_footer() ?>