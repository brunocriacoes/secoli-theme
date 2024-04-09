<div class="full">
	<div class="banner swiper">
		<div class="inner__banner swiper-wrapper">

			<?php
			$banners = get_posts(array(
				'post_type' => 'post_banner',
				'posts_per_page' => 3,
			));

			foreach ($banners as $banner) {
				setup_postdata($banner);
				$photo = get_the_post_thumbnail_url($banner->ID, 'full');
				$link = get_post_meta($banner->ID, '_secoli_banner_link', true);
			?>

				<div class="iten__banner swiper-slide">
					<div class="iten__bg__banner" style="background-image: url(<?php echo $photo ?>)">
						<div>
							<h2 class="title"><?php echo $banner->post_title ?></h2>
							<span class="long-space"></span>
							<a class="btn gradient-1" href="<?php echo $link ?>">SOLICITE UM CONTATO</a>
						</div>
					</div>
				</div>

			<?php
			}

			wp_reset_postdata();

			?>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</div>