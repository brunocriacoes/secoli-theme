<?php
$promos = get_posts(array(
    'post_type' => 'post_promo',
    'posts_per_page' => -1,
));

function validar_promo($promo) {
    setup_postdata($promo);
    $text = get_post_meta( $promo->ID, 'secoli_promo_text', true );
    $link = get_post_meta( $promo->ID, 'secoli_promo_link', true );
    $data_init = get_post_meta( $promo->ID, 'secoli_promo_data_init', true );
    $data_end = get_post_meta( $promo->ID, 'secoli_promo_data_end', true );
    $data_hoje = date('Y-m-d');
    wp_reset_postdata();
    if(
        $data_hoje >= $data_init and
        $data_hoje <= $data_end
    ){
        return true;
    }else{
        return false;
    }
}
$promos = array_filter($promos, 'validar_promo');

$promos = array_values($promos);
if(isset($promos[0])){
    $promos = [$promos[0]];
}else{
    $promos = [];
}

foreach ($promos as $promo) {
    setup_postdata($promo);
    $text = get_post_meta( $promo->ID, 'secoli_promo_text', true );
    $link = get_post_meta( $promo->ID, 'secoli_promo_link', true );
    $data_init = get_post_meta( $promo->ID, 'secoli_promo_data_init', true );
    $data_end = get_post_meta( $promo->ID, 'secoli_promo_data_end', true );
    ?>

        <div class="full gradient-1 text-center promo__bg">
            <span>
                <?php echo $text ?>
            </span>
            <a class="promo__link" href="<?php echo $link ?>">
                CLIQUE AQUI E FALE COM UM DOS
                NOSSOS CONSULTORES
            </a>
        </div>

<?php
}

wp_reset_postdata();

?>