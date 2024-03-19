<?php
$anuncios = get_posts(array(
    'post_type' => 'post_anuncio',
    'posts_per_page' => -1,
));

$loop = [];

foreach($anuncios as $anuncio){
    setup_postdata($anuncio);
    $photo = get_the_post_thumbnail_url($anuncio->ID, 'full');
    $link = get_post_meta( $anuncio->ID, 'secoli_anuncio_link', true );

    wp_reset_postdata();
    $loop[] =[
        "photo" => $photo,
        "link" => $link,
    ];
}
$indice = array_rand($loop);
var_dump($indice);
?>

<div class="full">
    <div class="container">
        <div>
            <a href="<?php echo $loop[$indice]['link'] ?>">
                <img width="100%" src="<?php echo $loop[$indice]['photo'] ?>" alt="publicidade">
            </a>
        </div>
    </div>
</div>