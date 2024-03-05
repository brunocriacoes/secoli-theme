<?php
$destaques = get_posts(array(
    'post_type' => 'post_prod_dest',
    'posts_per_page' => -1,
));

$loop = [];

foreach($destaques as $destaque){
    setup_postdata($destaque);
    $photo = get_the_post_thumbnail_url($destaque->ID, 'full');
    $link = get_post_meta( $destaque->ID, 'secoli_prod_dest_link', true );

    wp_reset_postdata();
    $loop[] =[
        "photo" => $photo,
        "link" => $link
    ];
}

?>

<div class="full">
		<div class="container">
			<div class="long-space"></div>
			<h3 class="title">
				Confira os destaques do mês
			</h3>
			<div class="space"></div>
			<div class="slide__destaque">
				<div class="slide__destaque__inner swiper-wrapper ">
                    <?php foreach($loop as $p){ ?>
					<div class="slide__destaque__iten swiper-slide">
						<img src="<?php echo $p['photo']?>">
						<a class="slide__destaque__btn" href="<?php echo $p['link']?>">
							Saiba mais
						</a>
					</div>
                    <?php } ?>
				</div>
				<div class="slide__destaque__next">
					<i class="fa-solid fa-chevron-right"></i>
				</div>
				<div class="slide__destaque__prev">
					<i class="fa-solid fa-chevron-left"></i>
				</div>
			</div>
			<div class="long-space"></div>
		</div>
	</div>