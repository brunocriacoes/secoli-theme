<?php
$equipes = get_posts(array(
    'post_type' => 'post_equipe',
    'posts_per_page' => -1,
));

$loop = [];

foreach($equipes as $equipe){
    setup_postdata($equipe);
    $photo = get_the_post_thumbnail_url($equipe->ID, 'full');
    $text = get_post_meta( $equipe->ID, 'secoli_equipe_text', true );
    $name = get_post_meta( $equipe->ID, 'secoli_equipe_name', true );
    $cargo = get_post_meta( $equipe->ID, 'secoli_equipe_cargo', true );

    wp_reset_postdata();
    $loop[] =[
        "photo" => $photo,
        "text" => $text,
        "name" => $name,
        "cargo" => $cargo
    ];
}
?>


<div class="full profile__bg">
		<div class="container">
			<div class="long-space"></div>
			<div class="card__profile">
				<div class="card__profile__inner swiper-wrapper">
                    <?php foreach($loop as $e){ ?>
                        <div class="card__profile__iten swiper-slide">
                            <img src="<?php echo $e['photo'] ?>" alt="avatar">
                            <p>
                                <span>
                                    <i>
                                    <?php echo $e['text'] ?>
                                    </i>
                                </span>
                            </p>
                            <span class="space"></span>
                            <p>
                                <strong><?php echo $e['name'] ?></strong>
                                <br>
                                <i><?php echo $e['cargo'] ?></i>
                            </p>
                        </div>
                    <?php } ?>
				</div>
			</div>
			<div class="pagination__profile"></div>
			<div class="long-space"></div>
		</div>
	</div>