<?php

function custom_image_meta_box() {
    add_meta_box(
        'custom_image_meta_box',
        'Imagem Destacada Personalizada',
        'custom_image_meta_box_callback',
        'post',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'custom_image_meta_box');


function custom_image_meta_box_callback($post) {
    $imagem_destacada_personalizada = get_post_meta($post->ID, 'custom_featured_image', true);
  
    wp_nonce_field('custom_image_meta_box', 'custom_image_meta_box_nonce');
    ?>
    <p>
        <label for="custom_featured_image"><?php _e('Faça upload de uma imagem:'); ?></label><br>
        <input type="text" id="custom_featured_image" name="custom_featured_image" value="<?php echo esc_attr($imagem_destacada_personalizada); ?>" style="width:100%;" />
        <input type="button" id="custom_image_upload_button" class="button" value="Upload" />
    </p>
    <script>
        jQuery(document).ready(function($){
            $('#custom_image_upload_button').click(function(e) {
                e.preventDefault();
                var custom_uploader = wp.media({
                    title: 'Escolha uma imagem',
                    button: {
                        text: 'Selecionar imagem'
                    },
                    multiple: false
                });
                custom_uploader.on('select', function() {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('#custom_featured_image').val(attachment.url);
                });
                custom_uploader.open();
            });
        });
    </script>
    <?php
}

function save_custom_image_meta_box($post_id) {
    if (!isset($_POST['custom_image_meta_box_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['custom_image_meta_box_nonce'], 'custom_image_meta_box')) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['custom_featured_image'])) {
        update_post_meta($post_id, 'custom_featured_image', sanitize_text_field($_POST['custom_featured_image']));
    }
}

add_action('save_post', 'save_custom_image_meta_box');
