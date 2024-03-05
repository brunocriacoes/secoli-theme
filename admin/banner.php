<?php
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Banners', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Banners', 'text_domain' ),
		'name_admin_bar'        => __( 'Banner', 'text_domain' ),
		'archives'              => __( 'Arquivo de banner', 'text_domain' ),
		'attributes'            => __( 'Atributos do banner', 'text_domain' ),
		'parent_item_colon'     => __( 'Banner pai:', 'text_domain' ),
		'all_items'             => __( 'Todos Banners', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar Novo Banner', 'text_domain' ),
		'add_new'               => __( 'Adicionar Novo', 'text_domain' ),
		'new_item'              => __( 'Novo Banner', 'text_domain' ),
		'edit_item'             => __( 'Editar Banner', 'text_domain' ),
		'update_item'           => __( 'Atualizar Banner', 'text_domain' ),
		'view_item'             => __( 'Visualizar Banner', 'text_domain' ),
		'view_items'            => __( 'Visualizar Banners', 'text_domain' ),
		'search_items'          => __( 'Pesquisar Banner', 'text_domain' ),
		'not_found'             => __( 'Não existe', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não existe na lixeira', 'text_domain' ),
		'featured_image'        => __( 'Imagem em destaque', 'text_domain' ),
		'set_featured_image'    => __( 'Definir Imagem em destaque', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagem em destaque', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagem em destaque', 'text_domain' ),
		'insert_into_item'      => __( 'Inserir no banner', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Carregado para este banner', 'text_domain' ),
		'items_list'            => __( 'listar banner', 'text_domain' ),
		'items_list_navigation' => __( 'Navegação na lista de banner', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de banners', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Banner', 'text_domain' ),
		'description'           => __( 'Criar banner do site', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_banner', $args );

}
add_action( 'init', 'custom_post_type', 0 );

add_action('add_meta_boxes', function () {
    add_meta_box(
		'secoli_banner_link', 
		'link', 
		'secoli_link_banner_callback', 
		'post_banner'
	);	
});

function secoli_link_banner_callback($post) {
	$values = get_post_meta( $post->ID, '_secoli_banner_link', true );
	?>
	<input name="secoli_banner_link" type="url" value="<?php echo esc_html($values) ?>">
	<?php
}

add_action('save_post', function ($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (isset($_POST['secoli_banner_link'])) {
        update_post_meta($post_id, '_secoli_banner_link', $_POST['secoli_banner_link']);
    }
});