<?php
/*
Template Name: Página CARRINHO
*/
?>

<?php get_header() ?>


<div class="bg__card">

    <div class="long-space"></div>

    <div class="full">
        <div class="container">
            <p class="danger">
                <b>Atenção:</b>
                Caso queira alterar a quantidade, digite o valor no campo correspondente.
            </p>
        </div>
    </div>

    <div class="space"></div>

    <script>
        globalThis._app_data = globalThis.__cart
    </script>

    <form action="javascript:void(0)" method="POST" onsubmit="send_orcamento(this)" class="js-form">

        <div class="full">
            <div class="container">
                <div class="js-loop-itens-card"></div>
            </div>
        </div>

        <div class="full">
            <div class="container box__invoice">
                <div class="long-space"></div>
                <h2 class="text-center">
                    Preencha com seus dados para solicitar um orçamento
                </h2>
                <div class="space"></div>
                <div>
                    <div class="grid c-1 lg-c-2">
                        <div>
                            <label class="input__theme">
                                <span>NOME</span>
                                <input type="text" name="name" value="" placeholder="digite" required>
                            </label>
                            <div class="space"></div>
                            <label class="input__theme">
                                <span>TELEFONE</span>
                                <input type="text" name="phone" value="" placeholder="digite" required>
                            </label>
                            <div class="space"></div>
                            <label class="input__theme">
                                <span>EMAIL</span>
                                <input type="text" name="email" value="" placeholder="digite" required>
                            </label>
                            <div class="space"></div>
                            <label class="input__theme">
                                <span>CNPJ</span>
                                <input type="text" placeholder="digite" value="" name="cnpj" required>
                            </label>
                            <div class="space"></div>
                            <label class="input__theme">
                                <span>EMPRESA</span>
                                <input type="text" placeholder="digite" name="company" value="" required>
                            </label>
                        </div>
                        <label class="input__theme">
                            <textarea name="description" required placeholder="Conte-nos um pouco mais sobre seu projeto..."></textarea>
                        </label>
                    </div>
                    <div class="space"></div>
                    <div class="grid c-1 lg-c-3">
                        <button type="reset" class="btn btn__or btn_mobile_cart" onclick="cart.clear()">
                            LIMPAR CARRINHO
                        </button>
                        <a href="<?php __L('/produtos/?cat=0') ?>" class="btn gradient-1 btn_mobile_cart">
                            <i class="fa-solid fa-plus"></i>
                            <span>ESCOLHER MAIS PRODUTOS</span>
                        </a>
                        <button type="submit" class="btn gradient-1 btn__opaco btn_mobile_cart">
                            SOLICITAR ORÇAMENTO
                        </button>
                    </div>
                </div>
                <div class="long-space"></div>
            </div>
        </div>
    </form>

    <div class="full js-thank-you" hidden>
        <div class="container">
            <h1 class="title">Obrigado pelo Seu Interesse!</h1>
            <p class="text">
                Agradecemos sinceramente por nos contatar para solicitar um orçamento.
                Sua confiança em nossos serviços é muito apreciada.
            </p>
            <p class="text">
                Nossa equipe está agora a rever as informações que nos forneceu e
                a preparar uma resposta completa para atender às suas necessidades.
            </p>
            <p class="text">
                Entraremos em contacto assim que possível para discutir os detalhes e
                apresentar a melhor solução para si.
            </p>
            <p class="text">
                Mais uma vez, obrigado por considerar os nossos serviços. Estamos
                ansiosos para trabalhar consigo!
            </p>
            <p class="text">
                Atenciosamente,<br>Secoli
            </p>
        </div>
    </div>

    <div class="long-space"></div>
</div>

<?php get_footer() ?>