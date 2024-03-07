<?php 

include __DIR__ . "/includ/factor-cunston-posts.php";
include __DIR__ . "/includ/factor-meta-box.php";
include __DIR__ . "/includ/widget.php";

include __DIR__ . "/admin/config.php";
include __DIR__ . "/admin/banner.php";
include __DIR__ . "/admin/promo.php";
include __DIR__ . "/admin/prod_destaque.php";
include __DIR__ . "/admin/equipe.php";
include __DIR__ . "/admin/anuncio.php";

add_theme_support('post-thumbnails');


function __F($path){
    echo esc_url( get_theme_file_uri( $path ) ); 
}

function meu_tema_suporte_menu() {
    register_nav_menus(
      array(
        'menu_principal' => 'Menu Principal',
        'menu_rodape_institucioanal' => 'Institucioanal',
        'menu_rodape_produtos' => 'Produtos',
        'menu_rodape_links' => 'Links',
        'menu_rodape_blog' => 'Blog',
        'menu_rodape_informacoes' => 'Informações'
      )
    );
  }
  add_action('after_setup_theme', 'meu_tema_suporte_menu');

  function print_menu($nome, $seletor) {
    $locations = get_nav_menu_locations();
    $menu_id = $locations[$nome];
    $menu_items = wp_get_nav_menu_items($menu_id);
    foreach ($menu_items as $menu_item) {
        echo '<a href="' . $menu_item->url . '" class="'.$seletor.'" >' . $menu_item->title . '</a>';
    }
  }
