<?php

$opcoes = get_option('secoli_theme_info');

?>
<div class="full news__bg">
    <div class="container">
        <h4 class="title">
            Cadastre-se e receba novidades!
        </h4>
        <p class="text">
            Receba também promoções em primeira mão.
        </p>
        <span class="space"></span>
        <form class="grid c-1 md-c-3" onsubmit="addLead(event, this)" action="javascript:void(0)">
            <div class="">
                <input class="news__input js_lead_name" type="text" name="nome" placeholder="Nome" required>
            </div>
            <div>
                <input class="news__input js_lead_email" type="email" name="email" placeholder="E-mail" required>
            </div>
            <div>
                <button class="news__btn btn gradient-1" type="submit">
                    ENVIAR &emsp;
                    <i class="fa-regular fa-paper-plane"></i>
                </button>
            </div>
            <div class="news__alert js_lead_alert" hidden><i class="fa-solid fa-circle-info"></i><span>Alert</span></div>
        </form>
    </div>
</div>

<div class="full gradient-1 footer">
    <div class="container">
        <div class="long-space"></div>
        <div class="grid c-1 md-c-5">
            <div>
                <h5 class="footer__tittle">
                    INSTITUCIONAL
                </h5>
                <span class="space"></span>
                <?php print_menu('menu_rodape_institucioanal', 'footer__link') ?>
            </div>
            <div>
                <h5 class="footer__tittle">PRODUTOS</h5>
                <span class="space"></span>
                <?php print_menu('menu_rodape_produtos', 'footer__link') ?>
            </div>
            <div>
                <h5 class="footer__tittle">
                    LINKS
                </h5>
                <span class="space"></span>
                <?php print_menu('menu_rodape_links', 'footer__link') ?>
            </div>
            <div>
                <h5 class="footer__tittle">
                    BLOG
                </h5>
                <span class="space"></span>
                <?php print_menu('menu_rodape_blog', 'footer__link') ?>
            </div>
            <div>
                <h5 class="footer__tittle">
                    INFORMAÇÕES
                </h5>
                <span class="space"></span>
                <?php print_menu('menu_rodape_informacoes', 'footer__link') ?>
                <span class="space"></span>
                <h5 class="footer__tittle">
                    CONTATOS
                </h5>
                <span class="space"></span>
                <a class="footer__link " href="tel:+55<?php echo $opcoes['telefone_rodape'] ?>">
                    +55 <?php echo $opcoes['telefone_rodape'] ?>
                </a>
                <a class="footer__link" href="mailto:<?php echo $opcoes['email_rodape'] ?>">
                    <?php echo $opcoes['email_rodape'] ?>
                </a>
                <div class="space"></div>
                <a class="footer__link footer__link__social" href="<?php echo $opcoes['instagram'] ?>" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-instagram"></i>&emsp;
                </a>
                <a class="footer__link footer__link__social" href="<?php echo $opcoes['twitter'] ?>" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-twitter"></i>&emsp;
                </a>
                <a class="footer__link footer__link__social" href="<?php echo $opcoes['facebook'] ?>" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-facebook-f"></i>&emsp;
                </a>
                <span class="space"></span>
                <p class="footer__link">© Copyright 2024</p>
            </div>
        </div>
        <div class="long-space"></div>
    </div>
</div>

</div>

<?php wp_footer(); ?>
<script src="<?php echo esc_url(get_theme_file_uri('assets/js/carrinho.js')) . '?id=fk_' . uniqid(); ?>"></script>
<script src="<?php echo esc_url(get_theme_file_uri('assets/js/app.js')) . '?id=fk_' . uniqid(); ?>"></script>
<script src="<?php echo esc_url(get_theme_file_uri('assets/js/main.js')) . '?id=fk_' . uniqid(); ?>"></script>

</body>

</html>