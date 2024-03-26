<?php
/*
    Template Name: Page Contato
*/
?>

<?php $opcoes = get_option('secoli_theme_info'); ?>

<?php get_header() ?>

<div class="full contact_banner">
    <div class="container">
        <div class="grid c-1 lg-c-2">
            <div>
                <h1 class="title">
                    Fale com a Secoli
                    agora mesmo.
                </h1>
                <p class="text">
                    Encontre as melhores formas de contato com a
                    Secoli ou deixe a sua mensagem que retornaremos em breve.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="full">
    <div class="container">
        <div class="long-space"></div>
        <h2 class=" text-center">
            Envie uma mensagem e retornaremos em breve
        </h2>
        <div class="long-space"></div>
        <form action="" method="POST">
            <div class=" grid c-1 lg-c-2">
                <label class="input__theme">
                    <span>NOME</span>
                    <input type="text" name="name" placeholder="digite" required>
                </label>
                <label class="input__theme">
                    <span>TELEFONE</span>
                    <input type="text" name="phone" placeholder="digite" required>
                </label>
                <label class="input__theme">
                    <span>EMAIL</span>
                    <input type="text" placeholder="digite" name="email" required>
                </label>
                <label class="input__theme">
                    <span>EMPRESA</span>
                    <input type="text" placeholder="digite" name="company" required>
                </label>
            </div>
            <div class="space"></div>
            <label class="input__theme">
                <span>ASSUNTO</span>
                <input type="text" placeholder="digite" name="subject" required>
            </label>
            <div class="space"></div>
            <label class="input__theme">
                <textarea name="description" placeholder="Conte-nos um pouco mais sobre seu projeto..." required></textarea>
            </label>
            <div class="space"></div>
            <div class="to-right">
                <button type="submit" class="btn gradient-1">
                    ENVIAR MENSAGEM
                </button>
            </div>
        </form>
        <div class="long-space"></div>
    </div>
</div>

<div class="full">
    <div class="container">
        <div class="long-space"></div>
        <div class="grid c-1 lg-c-2">

            <div>
                <h4 class="title">Nas redes sociais</h4>
                <div class="space"></div>
                <div>
                    <a class="share__link" href="<?php echo $opcoes['instagram'] ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a class="share__link" href="<?php echo $opcoes['twitter'] ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a class="share__link" href="<?php echo $opcoes['facebook'] ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </div>
                <div class="space"></div>
                <div>
                    <a href="https://wa.me/55<?php echo $opcoes['secoli_telefone_whatsapp'] ?>" target="_blank" class="btn gradient-1" rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp"></i>
                        &emsp;
                        <span>FALE PELO NOSSO WHATSAPP</span>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="title">Outros contatos</h4>
                <h5 class="sub-title">Telefones</h5>
                <small>Compras</small>
                <a class="contact__link " href="tel:+55<?php echo $opcoes['telefone_header'] ?>">
                    <i class="fa-solid fa-phone"></i>
                    <span>+55 <?php echo $opcoes['telefone_header'] ?></span>
                </a>
                <div class="space"></div>
                <small>Assessoria de Imprensa</small>
                <a class="contact__link " href="tel:+55<?php echo $opcoes['telefone_rodape'] ?>">
                    <i class="fa-solid fa-phone"></i>
                    <span>+55 <?php echo $opcoes['telefone_rodape'] ?></span>
                </a>
                <div class="space"></div>
                <div class="long-space"></div>
                <h5 class="sub-title">Email</h5>
                <small>Comercial</small>
                <a class="contact__link " href="mailto:contato@secoli.com.br">
                    <i class="fa-solid fa-envelope"></i>
                    <span>contato@secoli.com.br</span>
                </a>
                <div class="space"></div>
                <small>Dúvidas ou sugestões</small>
                <a class="contact__link " href="mailto:sac@secoli.com.br">
                    <i class="fa-solid fa-envelope"></i>
                    <span>sac@secoli.com.br</span>
                </a>
                <div class="space"></div>
                <small>Compras</small>
                <a class="contact__link " href="mailto:comercial@secoli.com.br">
                    <i class="fa-solid fa-envelope"></i>
                    <span>comercial@secoli.com.br</span>
                </a>
            </div>
        </div>
        <div class="long-space"></div>
    </div>
</div>

<?php get_footer() ?>