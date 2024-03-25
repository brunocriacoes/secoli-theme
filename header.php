<?php

$opcoes = get_option('secoli_theme_info');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('assets/css/forms.css')); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('assets/images/icon.png')); ?>" type="image/x-icon">
    <title><?php wp_title(); ?></title>
    <meta property="og:title" content="<?php wp_title(); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.secoli.com.br" />
    <meta property="og:image" content="<?php echo esc_url(get_theme_file_uri('screenshot.png')); ?>" />
    <meta property="og:description" content="Especializada em criar produtos personalizados e exclusivos">
    <meta property="og:site_name" content="Secoli">
    <meta name="description" content="Especializada em criar produtos personalizados e exclusivos ">
    <meta name="keywords" content="personalizados, brindes, Promocionais, promocional">
    <link rel=“canonical” href="https://www.secoli.com.br">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Secoli",
            "url": "http://www.secoli.com.br",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+55-XX-XXXX-XXXX",
                "contactType": "customer service",
                "areaServed": "BR",
                "availableLanguage": ["Portuguese"]
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "[Endereço da Rua]",
                "addressLocality": "[Cidade]",
                "addressRegion": "[Estado]",
                "postalCode": "[CEP]",
                "addressCountry": "BR"
            }
        }
    </script>
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
    <script>
        var _domain = '<?php echo get_site_url() ?>';
    </script>
</head>

<body>

    <div>

        <?php include __DIR__ . '/parts/promo.php' ?>

        <div class="full">
            <div class="container">
                <div class="menu__mobile">
                    <div class="grid grid__menu__mobile">
                        <label for="menu__mobile__id">
                            <i class="fa-solid fa-bars"></i>
                        </label>
                        <div>
                            <img height="26" src="<?php echo esc_url(get_theme_file_uri('/assets/images/logo.svg')); ?>" alt="logo">
                        </div>
                    </div>
                    <input id="menu__mobile__id" type="checkbox">
                    <div class="menu__itens">
                        <a href="">menu 1</a>
                        <a href="">menu 2</a>
                        <a href="">menu 3</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__fix">
            <div class="full header__bg">
                <div class="container">
                    <div class="grid grid__menu">
                        <a href="<?php __L('/') ?>">
                            <img class="header__logo" src="<?php echo esc_url(get_theme_file_uri('/assets/images/logo.svg')); ?>" alt="logo">
                        </a>
                        <div>
                            <div class="header__none">
                                <?php print_menu('menu_principal', 'header__menu') ?>
                            </div>

                            <div class="header__search__contact contatos-empilhados">
                                <form class="header__search" action="<?php __L('/produtos') ?>" method="get">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <input class="header__input" type="search" name="s" required placeholder="Buscar no site">
                                </form>
                                <a class="header__contact" href="tel:+55<?php echo $opcoes['telefone_header'] ?>">
                                    <i class="fa-solid fa-phone"></i>
                                    <span><?php echo $opcoes['telefone_header'] ?></span>
                                </a>
                                <a class="header__contact" href="mailto:<?php echo $opcoes['email_header'] ?>">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span><?php echo $opcoes['email_header'] ?></span>
                                </a>
                            </div>
                        </div>
                        <div>
                            <a href="<?php __L('/a-secoli') ?>" class="btn header__btn__black">
                                <i class="fa-solid fa-house"></i>
                                &emsp;CONHEÇA A SECOLI
                            </a>
                            <span class="space js__space__remove"></span>
                            <a href="<?php __L('/carrinho') ?>" class="btn gradient-1">
                                <i class="fa-solid fa-cart-shopping"></i>
                                &emsp;CARRINHO
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="full category__bg">
                <div class="container">
                    <?php
                    $url = API_SMARTLEAD . '/wp-json/smartlead-api/v1/categorias/';
                    $response = file_get_contents($url);

                    $response = mb_convert_encoding($response, 'UTF-8', 'ISO-8859-1');
                    $response = json_decode($response, true);

                    ?>

                    <ul class="category__list">
                        <li>
                            <a href="produtos?cat=0">
                                <i class="fa-regular fa-image"></i>
                                TODAS AS CATEGORIAS
                            </a>
                        </li>
                        <?php foreach ($response as $cat) { ?>
                            <li>
                                <a href="produtos?cat=<?php echo $cat['id'] ?>">
                                    <img class="icon_category_menu" src="<?php echo __F('assets/icons/' . $cat['id'] . '.svg') ?>" alt="">
                                    <?php echo $cat["name"] ?>
                                </a>
                                <ul>
                                    <?php foreach ($cat["subcategories"] as $sub) { ?>
                                        <li>
                                            <a href="produtos?cat=<?php echo $sub['id'] ?>">
                                                <?php echo $sub["name"] ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <img src="<?php __F('assets/images/img-category.png') ?>" alt="imagem Categoria">
                                    <a href="produtos?cat=<?php echo $cat['id'] ?>">VER TODOS</a>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>