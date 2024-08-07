<?php get_header(); ?>

<?php

$url = API_SMARTLEAD . '/wp-json/smartlead-api/v1/categorias';

$response = file_get_contents($url);
$response = json_decode($response, true);
// $id = $_GET['cat'];

$url_prod = API_SMARTLEAD . '/wp-json/smartlead-api/v1/produtos/';

$categoriaAtual = 'Categoria atual';

foreach ($response as $c) {
    if ($id == $c['id']) {
        $categoriaAtual = $c['name'];
    }
}

$response_prod = file_get_contents($url_prod);

$response_prod = json_decode($response_prod, true);

$response_prod = array_filter($response_prod, function ($produto) {
    $termo_busca  = $_GET['s'];
    return stripos($produto['name'], $termo_busca) !== false;
});

$response_prod = array_values($response_prod);

?>

<div class="full">
    <div class="container">
        <div class="space"></div>
        <div class="grid_produtos">
            <div class="categorias">
                <strong style="cursor:pointer;">CATEGORIAS</strong>
                <div class="space"></div>
                <ul id="listaCategorias">
                    <?php foreach ($response as $cat) { ?>
                        <li id="categoriaMae">
                            <span style="cursor:pointer;">
                                <b>
                                    <a href="<?php __L('/') ?>brindes/<?php echo $cat['slug'] ?>">
                                        <?php echo $cat['name'] ?>
                                    </a>
                                </b>
                            </span>
                            <ul class="subcategorias">
                                <?php foreach ($cat["subcategories"] as $sub) { ?>
                                    <li><a href="<?php __L('/') ?>brindes/<?php echo $sub['slug'] ?>"><span><?php echo $sub['name'] ?></span></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div>
                <div class="produtos">
                    <?php if (count($response_prod) == 0) { ?>
                        <div class="msg__prod__not__found">
                            <span class="title">Nenhum Produto Encontrado</span>
                            <div class="space"></div>
                            <span class="text"> Ainda não temos produtos disponíveis nesta categoria. Estamos trabalhando constantemente para expandir nossa seleção e trazer novidades. Enquanto isso, convidamos você a explorar outras categorias ou voltar para a nossa página inicial para descobrir tudo o que oferecemos.
                                Clique aqui para voltar à página inicial</span>
                            <div class="space"></div>
                            <a class="btn gradient-1 " href="<?php __L('/') ?>brindes/0">Clique aqui para todas as categorias</a>
                        </div>
                    <?php } ?>
                    <div class="grid c-1 sm-c-2 md-c-2 lg-c-3">
                        <?php foreach ($response_prod as $produto) { ?>
                            <div class="produto">
                                <a href="<?php __L('/') ?>brinde/<?php echo $produto['slug'] ?>">
                                    <img src="https://app.secolibrindes.com.br/<?php echo $produto['photos'][0]['path'] ?>" alt="<?php echo $produto['name'] ?>" onerror="this.src='<?php __F('/assets/images/img-default.png') ?>'" />
                                </a>
                                <a href="<?php __L('/') ?>brinde/<?php echo $produto['slug'] ?>">
                                    <small> <?php echo $produto['cod'] ?> </small>
                                </a>
                                <a href="<?php __L('/') ?>brinde/<?php echo $produto['slug'] ?>">
                                    <strong>
                                        <?php echo $produto['name'] ?>
                                    </strong>
                                </a>
                                <span class="space"></span>
                                <a class="btn gradient-1" onclick="return cart.add('<?php echo $produto['id'] ?>',
												'<?php echo $produto['name'] ?>',
												'https:\/\/app.secolibrindes.com.br\/<?php echo $produto['photos'][0]['path'] ?>', '<?php echo $produto['cod'] ?>', '', 'color', '')" href="<?php __L('/') ?>carrinho">
                                    <i class="fa-solid fa-cart-plus"></i>
                                    <span>ORÇAR ESTE PRODUTO</span>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<span class="long-space"></span>

<div class="full">
    <div class="container">
        <div class="expand__produtos">
            <a class="text" href="">
                <i class="fa-regular fa-circle-down"></i>
                &nbsp;
                <span>Expandir para mais produtos</span>
            </a>
            <span class="text">Não está encontrando o que procura?</span>
            <a class="btn gradient-1 " href="<?php __F('/media/catalogo.pdf') ?>">BAIXE O CATÁLOGO DIGITAL</a>
        </div>
    </div>
</div>

<span class="long-space"></span>

<div class="full idealize__bg">
    <div class="container">
        <div class="grid c-1 lg-c-2">
            <div></div>
            <div>
                <h3 class="title">
                    Especialistas na <br />
                    criação de brindes <br />
                    personalizados.
                </h3>
                <span class="space"></span>
                <p class="text">
                    Conquistado o equilíbrio entre a mais moderna
                    tecnologia e o cuidado da manufatura artesanal,
                    a Secoli se diferencia também por sua
                    versatilidade e especialidade em criar produtos
                    personalizados exclusivos
                </p>
                <span class="long-space"></span>
                <span class="long-space"></span>
                <a class="btn gradient-1" href="<?php __L('/') ?>contato">
                    AGENDAR CONTATO
                </a>
            </div>
        </div>
    </div>
</div>

<div class="full tecnologia__bg">
    <div class="container">
        <div class="grid c-1 lg-c-2">
            <div>
                <h2 class="title">
                    Tecnologia, <br />
                    modernidade e <br />
                    pessoas.
                </h2>
                <span class="space"></span>
                <p class="text">
                    Conquistado o equilíbrio entre a mais moderna
                    tecnologia e o cuidado da manufatura artesanal,
                    a Secoli se diferencia também por sua
                    versatilidade e especialidade em criar produtos
                    personalizados exclusivos
                </p>
                <span class="long-space"></span>
                <span class="long-space"></span>
                <a class="btn gradient-1" href="<?php __L('/a-secoli') ?>">
                    CONHEÇA A SECOLI
                </a>
            </div>
        </div>
    </div>
</div>

<span class="long-space"></span>

<?php include __DIR__ . '/parts/agendar-contato.php' ?>

<?php get_footer(); ?>