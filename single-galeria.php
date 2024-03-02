<?php get_header(); ?>

    <main>

        <section>
            <div class="container sec-min">
                <div class="bread_crumb">
                    <ul>
                        <li><a href="<?= home_url() ?>">Home</a></li>
                        <li><?= get_the_title() ?></li>
                    </ul>
                </div>
            </div>

            <h2>Página da Galeria</h2>
        </section>

    </main>

<?php get_footer(); ?>