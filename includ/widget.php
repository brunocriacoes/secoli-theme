<?php
function widget_footer() {
    register_sidebar(array(
        'name'          => esc_html__('Footer', 'text_domain'),
        'id'            => 'secoli-widget-footer',
        'description'   => esc_html__('Adicione widgets aqui.', 'text_domain'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'widget_footer');
