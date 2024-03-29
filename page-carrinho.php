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

    <div class="full">
        <div class="container">
            <div>
                <div class="item__in__cart" app-repeat="cart">
                    <img class="item__in__cart__img" src="./media/catalogo/{{image}}" alt="">
                    <div>
                        <small>
                            <b>Categoria</b> - <span>{{category}}</span>
                        </small>
                        <h3>
                            {{name}}
                        </h3>
                        <p class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde officia culpa at?
                        </p>
                        <p>
                            <b>REF</b> - <span>{{ref}}</span>
                            <b>COR</b> - <span>preta</span>
                        </p>
                    </div>
                    <div class="grid c-1 lg-c-2 jsQuantity">
                        <label class="item__in__cart__input" app-repeat="cart[{{index}}].quantity">
                            <b>QTA-{{index}}</b>
                            <input type="number" min="1" value="{{value}}">
                        </label>
                        <button class="item__in__cart__add" onclick="cart.addQuantity('{{ref}}')">
                            <i class="fa-solid fa-circle-plus"></i>
                            <span>Adicionar QTA</span>
                        </button>
                    </div>
                    <div>
                        <button class="item__in__cart__trash" onclick="cart.remove('{{ref}}')">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                    </div>
                </div>
            </div>
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