    <footer class="footer">
        <div class="container d-flex content_footer">
            <div class="f-25">
                <h3>Prefeitura</h3>

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-rodape-prefeitura',
                        'menu_id' => 'menu-rodape-prefeitura',
                        'container' => false,
                    ));
                ?>
            </div>

            <div class="f-25">
                <h3>Serviços</h3>

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-rodape-servicos',
                        'menu_id' => 'menu-rodape-servicos',
                        'container' => false,
                    ));
                ?>
            </div>

            <div class="f-25">
                <h3>Outros Acessos</h3>

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-rodape-outros-acessos',
                        'menu_id' => 'menu-rodape-outros-acessos',
                        'container' => false,
                    ));
                ?>
            </div>

            <div class="f-25">
                <h3>Menu</h3>

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-rodape-menu',
                        'menu_id' => 'menu-rodape-menu',
                        'container' => false,
                    ));
                ?>
            </div>
        </div>
        <div class="middle_footer">
            <div class="container">
                <h3>Secretarias</h3>

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-rodape-menu',
                        'menu_id' => 'menu-rodape-menu',
                        'menu_class' => 'ul_line',
                        'container' => 'ul',
                    ));
                ?>
            </div>
        </div>
        <div class="bottom_footer">
            <div class="container d-flex content_bottom_footer">
                <div class="f-33 col_bottom_footer">
                    <a href="<?= home_url() ?>" class="logo_header">
                        <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id , 'full');

                            if (has_custom_logo()) {
                                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                            }
                        ?>
                        <div class="info_logo">
                            <p><strong>Prefeitura</strong></p>
                            <p>São José do Divino</p>
                        </div>
                    </a>
                </div>
                <div class="f-33 col_bottom_footer">
                    <div class="location_footer">
                        <span><i class="bi bi-geo-alt-fill"></i></span>
                        <p>AVENIDA MANOEL DÍVINO - PREFEITURA MUNICIPAL DE SÃO JOSÉ DO DIVINO - PI</p>
                    </div>
                </div>
                <div class="f-33 col_bottom_footer">
                    <div class="location_footer">
                        <span><i class="bi bi-envelope"></i></span>
                        <ul>
                            <li><a href="">prefeitura@saojosedodivino.pi.gov.br</a></li>
                            <li><a href="">86-98194-2918</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="down_footer">
            <p>© Copryright - 2024. Todos os direitos reservados</p>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>

</body>
</html>