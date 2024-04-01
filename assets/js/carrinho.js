class Cart {
    products = [];
    constructor() {
        this.products = JSON.parse(localStorage.getItem("cart")) || [];
        globalThis.__cart = this.products;
        this.render()
    }

    add(id, name, image, ref, description, color, category) {
        let payload = {
            id,
            name,
            image,
            ref,
            description,
            color,
            category,
            quantity: [
                {
                    qtaId: 1,
                    value: 1
                }
            ]
        };

        const exist = this.products.find((p) => p.id === payload.id);

        if (!exist) {
            this.products.push(payload)
        }

        globalThis.__cart = this.products;

        this.save();

        return true
    }

    addQuantity(id) {
        // document.querySelector('.jsQuantity').innerHTML += '<div>Presunto</div>'
        this.products = this.products.map(p => {
            if (p.id == id) {
                console.log(p.quantity.reverse()[0].qtaId + 1)
                p.quantity.push({
                    qtaId: p.quantity.reverse()[0].qtaId + 1,
                    value: 1
                })
                this.save()
            }
            return p;
        })
        globalThis.__cart = this.products;
    }

    remove(id) {
        this.products = this.products.filter(product => product.id !== id);
        globalThis.__cart = this.products;
        this.save();
        this.render()
    }

    // atualizarQuantidade(idProduto, quantidade) {
    //   const produto = this.produtos.find(produto => produto.id === idProduto);
    //   if (produto) {
    //     produto.quantidade = quantidade;
    //     this.salvarCarrinho();
    //   }
    // }

    save() {
        globalThis.__cart = this.products;
        localStorage.setItem('cart', JSON.stringify(this.products));
    }
    clear() {
        globalThis.__cart = [];
        localStorage.setItem('cart', '[]');
        this.render()
    }

    allProducts() {
        globalThis.__cart = this.products;
        return this.products;
    }

    tpl_item(payload, i) {
        return `
        <div class="item__in__cart">
            <img class="item__in__cart__img" src="${payload.image}">
            <div>
                <small>
                    <b>Categoria</b> - <span>${payload.category}</span>
                </small>
                <h3>
                    ${payload.name}
                </h3>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde officia culpa at?
                </p>
                <p>
                    <b>REF</b> - <span>${payload.ref}</span>
                    <b>COR</b> - <span>preta</span>
                </p>
            </div>
            <div class="grid c-1 lg-c-2 jsQuantity">
                <label class="item__in__cart__input" app-repeat-cart="cart[{{index}}].quantity">
                    <b>QTA-{{index}}</b>
                    <input type="number" min="1" value="{{value}}">
                </label>
                <button class="item__in__cart__add" onclick="cart.addQuantity('{{ref}}')">
                    <i class="fa-solid fa-circle-plus"></i>
                    <span>Adicionar QTA</span>
                </button>
            </div>
            <div>
                <button class="item__in__cart__trash" onclick="cart.remove('${payload.id}')">
                    <i class="fa-regular fa-trash-can"></i>
                </button>
            </div>
        </div>
        `
    }

    render() {
        let $loop_itens = document.querySelector(".js-loop-itens-card")
        if ($loop_itens) {
            $loop_itens.innerHTML =  this.products.map(data => this.tpl_item).join('')
        }
    }

}
