<?php get_header() ?>

<div class="full about__banner">
    <div class="container">
        <div class="grid c-1 lg-c-2">
            <div>
                <h1 class="title">
                    Secoli Brindes,
                    conectando empresas, parceiros e pessoas.
                </h1>

            </div>
        </div>
    </div>
</div>
<div class="full">
    <div class="container">
        <div class="long-space"></div>
        <div class="grid c-1 lg-c-3">

            <?php
            if (have_posts()) {
                while (have_posts()) : the_post();
            ?>

                    <div class="slide__blog__iten swiper-slide">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="<?php the_title() ?>">
                        <div class="space"></div>
                        <h2 class="title">
                            <?php the_title() ?>
                        </h2>
                        <p class="text">
                            <?php the_excerpt() ?>
                        </p>
                        <div class="space"></div>
                        <a href="<?php the_permalink() ?>" class="btn gradient-1">
                            VEJA MAIS
                        </a>
                        <div class="space"></div>
                    </div>

            <?php
                endwhile;
            }
            ?>

        </div>
        <div class="long-space"></div>
    </div>
</div>

<?php get_footer() ?>