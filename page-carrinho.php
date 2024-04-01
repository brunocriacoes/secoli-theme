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

    <div class="full" app-include='data'>
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
            <form action="javascript:void(0)" method="post">
                <div class="grid c-1 lg-c-2">
                    <div>
                        <label class="input__theme">
                            <span>NOME</span>
                            <input type="text" placeholder="digite">
                        </label>
                        <div class="space"></div>
                        <label class="input__theme">
                            <span>TELEFONE</span>
                            <input type="text" placeholder="digite">
                        </label>
                        <div class="space"></div>
                        <label class="input__theme">
                            <span>EMAIL</span>
                            <input type="text" placeholder="digite">
                        </label>
                        <div class="space"></div>
                        <label class="input__theme">
                            <span>CNPJ</span>
                            <input type="text" placeholder="digite">
                        </label>
                        <div class="space"></div>
                        <label class="input__theme">
                            <span>EMPRESA</span>
                            <input type="text" placeholder="digite">
                        </label>
                    </div>
                    <label class="input__theme">
                        <textarea name="descricao" placeholder="Conte-nos um pouco mais sobre seu projeto..."></textarea>
                    </label>
                </div>
                <div class="space"></div>
                <div class="grid c-1 lg-c-3">
                    <button type="reset" class="btn btn__or" onclick="cart.clear()">
                        LIMPAR CARRINHO
                    </button>
                    <a href="./produtos.html" class="btn gradient-1 ">
                        <i class="fa-solid fa-plus"></i>
                        <span>ESCOLHER MAIS PRODUTOS</span>
                    </a>
                    <button type="submit" class="btn gradient-1 btn__opaco">
                        SOLICITAR ORÇAMENTO
                    </button>
                </div>
            </form>
            <div class="long-space"></div>
        </div>
    </div>

    <div class="long-space"></div>
</div>

<?php get_footer() ?>