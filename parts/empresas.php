<?php

$logos = glob(__DIR__ . "/../media/clientes/*.png*");

$loop = [];
foreach ($logos as $logo){
    $loop[]=basename($logo);
}

?>

<div class="full feedback__bgb">
    <div class="container">
        <h3 class="title text-center ">
            Empresas que confiam na Secoli
        </h3>
        <span class="long-space"></span>
        <div class="slide__feedback">
            <div class="slide__feedback__inner swiper-wrapper">
                <?php foreach($loop as $c){ ?>
                    <div class="slide__feedback__iten swiper-slide">
                        <img src="<?php __F("media/clientes/{$c}") ?>" alt="destaque">
                    </div>
                <?php } ?>
            </div>
            <div class="slide__feedback__next">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
            <div class="slide__feedback__prev">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
        </div>
        <span class="long-space"></span>
        <hr>
    </div>
</div>