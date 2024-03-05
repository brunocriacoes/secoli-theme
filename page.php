<?php get_header() ?>
<div class="long-space"></div>
<?php
    if ( have_posts() ) {
        while ( have_posts() ) : the_post(); 
            ?> 
                <div class="full">
                    <div class="container">
                        <h1 class="title">
                            <?php the_title() ?>
                        </h1>
                        <div class="space"></div>
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php
            
        endwhile;
    }else {
        echo '<p>Nenhum conteúdo encontrado</p>';
    }
?>

<div class="long-space"></div>

<?php get_footer() ?>