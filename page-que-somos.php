<?php
/*
    Template Name: Page Quem Somos
*/
?>
<?php get_header() ?>

<?php

$page = [
    "title" => "",
    "content" => ""
];
$post_id = get_the_ID();
$post = get_post($post_id);
if ($post) {
    $page['title'] =  $post->post_title;
    $page['content'] =  $post->post_content;
}


function get_blog_posts($post_type = 'post', $posts_per_page = 10)
{
    $args = array(
        'posts_per_page' => $posts_per_page,
        'post_type' => $post_type,
        'post_status' => 'publish'
    );
    $posts = new WP_Query($args);
    $blog = [];
    if ($posts->have_posts()) {
        while ($posts->have_posts()) {
            $posts->the_post();
            $blog[] = [
                "title" => get_the_title(),
                "description" => get_the_excerpt(),
                "link" => get_permalink(),
                "image" => get_the_post_thumbnail_url(get_the_ID(), 'full'),
            ];
        }
    }
    wp_reset_postdata();
    return $blog;
}
$blog = get_blog_posts();




?>

<div class="full about__banner">
    <div class="container">
        <div class="grid c-1 lg-c-2">
            <div>
                <h1 class="title">
                    Secoli Brindes,
                    conectando empresas, parceiros e pessoas.
                </h1>
                <div class="space"></div>
                <p class="text">
                    Priorizamos plena satisfação de seus clientes através do compromisso com o
                    atendimento personalizado, a excelência na
                    qualidade de seus produtos e o respeito com o cumprimento dos prazos acordados.
                </p>
                <div class="space"></div>
                <a href="<?php __L('/contato') ?>" target="_blank" rel="noopener noreferrer" class="btn gradient-1">
                    SOLICITAR UM ORÇAMENTO
                </a>
            </div>
        </div>
    </div>
</div>

<?php if (count($blog) > 0) { ?>
    <div class="full">
        <div class="container">
            <div class="long-space"></div>
            <div class="slider__blog">
                <div class="slider__blog__inner swiper-wrapper">
                    <?php foreach ($blog as $b) { ?>
                        <div class="slide__blog__iten swiper-slide">
                            <img src="<?php echo $b['image'] ?>" alt="<?php echo $b['title'] ?>" onerror="this.src='<?php __F('/assets/images/img-default.png') ?>'">
                            <div class="space"></div>
                            <h2 class="title">
                                <?php echo $b['title'] ?>
                            </h2>
                            <p class="text">
                                <?php echo $b['description'] ?>
                            </p>
                            <div class="space"></div>
                            <a href="<?php echo $b['link'] ?>" class="btn gradient-1">
                                VEJA MAIS
                            </a>
                            <div class="space"></div>
                        </div>
                    <?php } ?>
                </div>
                <div class="slider__blog__pev">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
                <div class="slider__blog__next">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
            <div class="long-space"></div>
        </div>
    </div>
<?php } ?>

<div class="full">
    <div class="container">
        <div class="space"></div>
        <div class="text text-center">
            Pioneirismo e comprometimento
        </div>
        <div class="space"></div>
        <h2 class="title text-center">
            <?php echo $page['title'] ?? '' ?>
        </h2>
        <div class="space"></div>
        <div class="w-2">
            <?php echo $page['content'] ?? '' ?>
        </div>
    </div>
</div>

<div class="full">
    <div class="container">
        <div class="long-space"></div>
        <div class="grid c-1 lg-c-3">
            <div>
                <h3 class="title__commnet">
                    NOSSA <br> MISSÃO
                </h3>
                <p class="text__commnet">
                    “Manter um ambiente de prosperidade material onde possamos desenvolver o potencial
                    humano através da criação, confecção e comercialização de produtos com alto padrão de
                    qualidade e preço justo, priorizando, o respeito ao cliente interno, externo e ao meio ambiente.”
                </p>
            </div>
            <div>
                <h3 class="title__commnet">
                    NOSSA <br> VISÃO
                </h3>
                <p class="text__commnet">
                    “Nos tornar a empresa referência em Qualidade, Criatividade e
                    Sustentabilidade no mercado de produtos promocionais.”
                </p>
            </div>
            <div>
                <h3 class="title__commnet">
                    NOSSOS <br> VALORES
                </h3>
                <p class="text__commnet">
                    “Equilíbrio, Ética, Inovação, Justiça e Sustentabilidade.”
                </p>
            </div>
        </div>
        <div class="long-space"></div>
    </div>
</div>

<?php get_footer() ?>