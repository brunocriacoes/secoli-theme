<?php

function adicionar_campos_personalizados($campos, $post_type_slug, $metabox_id, $metabox_titulo)
{
    add_action('add_meta_boxes', function () use ($campos, $post_type_slug, $metabox_id, $metabox_titulo) {
        add_meta_box(
            $metabox_id,
            $metabox_titulo,
            function ($post) use ($campos) {
                foreach ($campos as $campo) {
                    $nome_campo = $campo['nome'];
                    $label = $campo['nome'];
                    $label = explode('_', $label);
                    unset($label[0]);
                    unset($label[1]);
                    $label = implode(' ', $label);
                    $tipo_campo = $campo['tipo'];
                    $valor = get_post_meta($post->ID, $nome_campo, true);
?>
                <p>
                    <label for="<?php echo $nome_campo; ?>"><?php echo ucfirst($label); ?>:</label><br>
                    <?php if ($tipo_campo == 'text') { ?>
                        <input type="<?php echo $tipo_campo ?>" id="<?php echo $nome_campo; ?>" name="<?php echo $nome_campo; ?>" value="<?php echo esc_attr($valor); ?>" style="width:100%;">
                    <?php } ?>
                    <?php if ($tipo_campo == 'textarea') { ?>
                        <textarea id="<?php echo $nome_campo; ?>" name="<?php echo $nome_campo; ?>" rows="5" style="width:100%;"><?php echo esc_textarea($valor); ?></textarea>
                    <?php } ?>
                    <?php if ($tipo_campo == 'file') { ?>
                        <input type="text" id="custom_featured_image" name="<?php echo $nome_campo; ?>" value="<?php echo esc_attr($valor); ?>" style="width:100%;" />
                        <input type="button" id="custom_image_upload_button" class="button" value="Enviar Imagem" />
                    <?php } ?>
                </p>

                <script>
                    jQuery(document).ready(function($) {
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
            },
            $post_type_slug
        );
    });

    add_action('save_post', function ($post_id) use ($campos) {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        foreach ($campos as $campo) {
            if (isset($_POST[$campo['nome']])) {
                update_post_meta($post_id, $campo['nome'], $_POST[$campo['nome']]);
            }
        }
    });
}
