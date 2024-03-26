<?php
/*
Template Name: Smartlead página produto
*/
?>

<?php get_header(); ?>
<?php
$id = $_GET['id'];
$url_prod = API_SMARTLEAD . '/wp-json/smartlead-api/v1/produto/?produto_id=' . $id;

$response_prod = file_get_contents($url_prod);

$response_prod = json_decode($response_prod, true);

?>
<span class="long-space"></span>
<div class="full">
    <div class="container">
        <div class="grid__prod">
            <div>
                <div id="img-container">
                    <img id="featured" class="js-image-grande" src="https://app.secolibrindes.com.br/<?php echo $response_prod[0]['photos'][0]['path'] ?>" alt="teste">
                </div>
                <span class="long-space"></span>
                <div class="slide__prod swiper">
                    <div class="slide__inner__prod swiper-wrapper">
                        <?php foreach ($response_prod[0]['photos'] as $f) { ?>
                            <div class=" swiper-slide">
                                <img onmouseover="troca_image(this)" src="https://app.secolibrindes.com.br/<?php echo $f['path'] ?>" alt="<?php echo $f['id'] ?>">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="title">
                    <?php echo $response_prod[0]['name'] ?>
                </h3>
                <div class="card__feature">
                    <div class="feature__header">
                        <strong>DESCRIÇÃO</strong>
                        <i class="fa-solid fa-pen-ruler"></i>
                    </div>
                    <div>
                        <span class="space"></span>
                        <p class="text">
                            <?php echo $response_prod[0]['description'] ?>
                        </p>
                        <span class="space"></span>
                        <b class="text">CARACTERÍSTICAS</b>
                        <span class="space"></span>
                        <p class="text">
                            COD
                        </p>
                        <p class="text">
                            <?php echo $response_prod[0]['cod'] ?>
                        </p>
                        <span class="space"></span>
                        <p class="text">
                            Estruturado
                        </p>
                        <p class="text">
                            <?php echo $response_prod[0]['specifications'] ?>
                        </p>
                        <span class="space"></span>
                        <p class="text">
                            Parte Interna
                        </p>
                        <p class="text">
                            <?php echo $response_prod[0]['internal_part'] ?>
                        </p>
                        <span class="space"></span>
                        <p class="text">
                            Parte Externa
                        </p>
                        <p class="text">
                            <?php echo $response_prod[0]['external_part'] ?>
                        </p>
                        <span class="space"></span>
                        <p class="text">
                            Gravações
                        </p>
                        <p class="text">
                            <?php echo $response_prod[0]['recordings'] ?>
                        </p>

                    </div>
                    <span class="long-space"></span>
                    <a class="btn gradient-1" href="">
                        <i class="fa-solid fa-cart-plus"></i>
                        <span>ORÇAR ESTE PRODUTO</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single__produto__bg">
    <div class="single__produto">
        <img src="<?php __F('media/paginas/produto/single-1.png') ?>">
        <img src="<?php __F('media/paginas/produto/single-2.png') ?>">
        <img src="<?php __F('media/paginas/produto/single-3.png') ?>">
    </div>
</div>

<div class="full gradient-1 contact__bg">
    <div class="container">

        <h2 class="title">
            Ainda tem dúvidas?
        </h2>
        <p class="text">
            Clique e fale com um de nossos consultores especialistas em brindes personalizados.
        </p>
        <span class="long-space"></span>
        <a class="btn btn__black " href="http://" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-whatsapp"></i>&emsp;
            <span>FALE AGORA</span>
        </a>
    </div>
</div>

<div class="full">
    <div class="container">
        <h2 class="title">
            Produtos relacionados
        </h2>
        <div class="slide__destaque">
            <div class="slide__destaque__inner swiper-wrapper ">
                <div class="slide__destaque__iten swiper-slide" app-repeat="destaques">
                    <img src="<?php __F('assets/images/destaque1.png') ?>" alt="destaque">
                    <a class="slide__destaque__btn" href="http://">Saiba mais</a>
                </div>
            </div>
            <div class="slide__destaque__next"><i class="fa-solid fa-chevron-right"></i></div>
            <div class="slide__destaque__prev"><i class="fa-solid fa-chevron-left"></i></div>
        </div>
    </div>
</div>

<?php get_footer() ?>