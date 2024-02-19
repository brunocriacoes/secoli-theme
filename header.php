<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo esc_url( get_theme_file_uri( 'assets/css/style.css' ) ); ?>">
	<link rel="stylesheet" href="<?php echo esc_url( get_theme_file_uri( 'assets/css/forms.css' ) ); ?>">
	<link rel="shortcut icon" href="<?php echo esc_url( get_theme_file_uri( 'assets/images/icon.png' ) ); ?>" type="image/x-icon">
	<title><?php wp_title(); ?></title>
	<meta property="og:title" content="<?php wp_title(); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.secoli.com.br" />
	<meta property="og:image" content="<?php echo esc_url( get_theme_file_uri( 'screenshot.png' ) ); ?>" />
	<meta property="og:description" content="Especializada em criar produtos personalizados e exclusivos">
	<meta property="og:site_name" content="Secoli">
	<meta name="description" content="Especializada em criar produtos personalizados e exclusivos ">
	<meta name="keywords" content="personalizados, brindes, Promocionais, promocional">
	<link rel=“canonical” href="https://www.secoli.com.br">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
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
</head>

<body>

	<div app-data="./media/db.json">

		<?php include __DIR__ . '/promo.php' ?>

        <div class="full">
            <div class="container">
                <div class="grid grid__menu__mobile">
                    <div>
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <div>
                        <img height="26" src="./assets/images/logo.svg" alt="logo">
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__fix">
            <div class="full header__bg">
                <div class="container">
                    <div class="grid grid__menu">
                        <a href="./index.html">
                            <img class="header__logo" src="assets/images/logo.svg" alt="logo">
                        </a>
                        <div>
                            <div class="header__none">
                                <a class="header__menu" href="./que-somos.html">A SECOLI</a>
                                <a class="header__menu" href="./blog.html">BLOG</a>
                                <a class="header__menu" href="./contato.html">CONSULTORIA PERSONALIZADA</a>
                                <a class="header__menu" href="./media/catalogo.pdf">CATÁLOGO DIGITAL</a>
                                <a class="header__menu" href="./produtos.html">PROMOÇÕES</a>
                                <a class="header__menu" href="./produtos.html">TENDÊNCIAS</a>
                                <a class="header__menu" href="./produtos.html">LINHA PREMIUM</a>
                                <a class="header__menu" href="./contato.html">CONTATO</a>
                            </div>
                            <div class="header__search__contact contatos-empilhados">
                                <form class="header__search" action="./produtos.html" method="get">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <input class="header__input" type="search" name="s" required placeholder="Buscar no site">
                                </form>
                                <a class="header__contact " href="http://" href="tel:+55112684-5500">
                                    <i class="fa-solid fa-phone"></i>
                                    <span>11 2684-5500</span>
                                </a>
                                <a class="header__contact" href="mailto:comercial@secoli.com.br">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>comercial@secoli.com.br</span>
                                </a>
                            </div>
                        </div>
                        <div>
                            <a href="./que-somos.html" class="btn header__btn__black">
                                <i class="fa-solid fa-house"></i>
                                &emsp;CONHEÇA A SECOLI
                            </a>
                            <span class="space js__space__remove"></span>
                            <a href="./carrinho.html" class="btn gradient-1">
                                <i class="fa-solid fa-cart-shopping"></i>
                                &emsp;CARRINHO
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="full category__bg">
                <div class="container">
                    <ul class="category__list">
                        <li>
                            <a href="./produtos.html">
                                <i class="fa-regular fa-image"></i>
                                TODAS AS CATEGORIAS
                            </a>
                            <ul>
                                <span>BOLSAS E SACOLAS</span>
                                <li><a href="./produtos.html">Bolsa Feminina</a></li>
                                <li><a href="./produtos.html">Bolsa Escritório</a></li>
                                <li><a href="./produtos.html">Sacola Eco</a></li>
                                <li><a href="./produtos.html">Sacola Enfeite</a></li>
                                <li><a href="./produtos.html">Sacola Eco</a></li>
                                <li><a href="./produtos.html">Sacola Enfeite</a></li>
                                <li><a href="./produtos.html">Sacola Eco</a></li>
                                <li><a href="./produtos.html">Sacola Enfeite</a></li>
                                <img src="./assets/images/img-category.png" alt="imagem Categoria">
                                <a href="./produtos.html">VER TODOS</a>
                            </ul>
                        </li>
                        <li><a href="./produtos.html"><i class="fa-regular fa-image"></i>NECESSAIRE</a></li>
                        <li><a href="./produtos.html"><i class="fa-regular fa-image"></i>BOLSAS E MOCHILAS</a></li>
                        <li><a href="./produtos.html"><i class="fa-regular fa-image"></i>CARTEIRAS</a></li>
                        <li><a href="./produtos.html"><i class="fa-regular fa-image"></i>SACOLAS</a></li>
                        <li><a href="./produtos.html"><i class="fa-regular fa-image"></i>ECOLÓGICO</a></li>
                        <li><a href="./produtos.html"><i class="fa-regular fa-image"></i>CASES E EMBALAGENS</a></li>
                        <li><a href="./produtos.html"><i class="fa-regular fa-image"></i>DESENVOLVIMENTO</a></li>
                        <li><a href="./produtos.html"><i class="fa-regular fa-image"></i>ESCRITÓRIO</a></li>
                        <li><a href="./produtos.html"><i class="fa-regular fa-image"></i>DIA-A-DIA</a></li>
                    </ul>
                </div>
            </div>
        </div>