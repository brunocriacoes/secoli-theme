<?php get_header() ?>


<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        $title = get_the_title();
        $content = get_the_content();
        $resumo = get_the_excerpt();
        $url_imagem_destacada = get_the_post_thumbnail_url();

        // $secoli_page_foto_banner_title = get_post_meta(get_the_ID(), 'secoli_page_foto_banner_title', true);
        // $secoli_page_foto_banner_desc = get_post_meta(get_the_ID(), 'secoli_page_foto_banner_desc', true);
        // $secoli_page_foto_banner_img = get_post_meta(get_the_ID(), 'secoli_page_foto_banner_img', true);

        $secoli_page_foto_bloco1_title = get_post_meta(get_the_ID(), 'secoli_page_foto_bloco1_title', true);
        $secoli_page_foto_bloco1_desc = get_post_meta(get_the_ID(), 'secoli_page_foto_bloco1_desc', true);
        $secoli_page_foto_bloco1_img = get_post_meta(get_the_ID(), 'secoli_page_foto_bloco1_img', true);

        $secoli_page_foto_bloco2_title = get_post_meta(get_the_ID(), 'secoli_page_foto_bloco2_title', true);
        $secoli_page_foto_bloco2_desc = get_post_meta(get_the_ID(), 'secoli_page_foto_bloco2_desc', true);
        $secoli_page_foto_bloco2_img = get_post_meta(get_the_ID(), 'secoli_page_foto_bloco2_img', true);
        
        $secoli_page_foto_bloco3_title = get_post_meta(get_the_ID(), 'secoli_page_foto_bloco3_title', true);
        $secoli_page_foto_bloco3_desc = get_post_meta(get_the_ID(), 'secoli_page_foto_bloco3_desc', true);
        $secoli_page_foto_bloco3_img = get_post_meta(get_the_ID(), 'secoli_page_foto_bloco3_img', true);

    }
}

?>

<div class="full page__banner" style="--bg: url('<?php echo $url_imagem_destacada ?>')">
    <div class="container">
        <h1 class="title">
            <?php echo $title ?>
        </h1>
        <p class="text">
            <?php echo $resumo ?>
        </p>
    </div>
</div>

<div class="full">
    <div class="container">
        <div class="long-space"></div>
        <img src="<?php echo $secoli_page_foto_bloco1_img ?>" onerror="this.src='https://picsum.photos/seed/destaque/1200/700'" class="page__image_destaque">
        <div class="long-space"></div>
    </div>
</div>

<div class="full">
    <div class="container">
        <div class="text-central">
            <h2 class="title">
                <?php echo $secoli_page_foto_bloco1_title ?>
            </h2>
            <div class="space"></div>
            <p class="text">
                <?php echo $secoli_page_foto_bloco1_desc ?>
            </p>
        </div>
        <div class="long-space"></div>
    </div>
</div>

<div class="full">
    <div class="container">
        <div class="A_B">
            <img src="<?php echo $secoli_page_foto_bloco2_img ?>" onerror="this.src='https://picsum.photos/seed/foto1/500/500'">
            <div>
                <h2 class="title">
                    <?php echo $secoli_page_foto_bloco2_title ?>
                </h2>
                <div class="space"></div>
                <p class="text">
                    <?php echo $secoli_page_foto_bloco2_desc ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="long-space"></div>

<div class="full">
    <div class="container">
        <div class="B_A">
            <img src=" <?php echo $secoli_page_foto_bloco3_img ?>" onerror="this.src='https://picsum.photos/seed/foto2/520/520'">
            <div>
                <h2 class="title">
                    <?php echo $secoli_page_foto_bloco3_title ?>
                </h2>
                <div class="space"></div>
                <p class="text">
                    <?php echo $secoli_page_foto_bloco3_desc ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="long-space"></div>



<?php get_footer() ?>