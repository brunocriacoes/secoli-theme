class Cart {
    products = [];
    constructor() {
        this.products = JSON.parse(localStorage.getItem("cart")) || [];
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
            quantity:[
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

        this.save();
        return false
    }

    addQuantity(id){
        // document.querySelector('.jsQuantity').innerHTML += '<div>Presunto</div>'
        this.products = this.products.map(p=>{
            if(p.id == id){
                console.log(p.quantity.reverse()[0].qtaId+1)
                p.quantity.push({
                    qtaId:p.quantity.reverse()[0].qtaId+1,
                    value: 1
                })
                this.save()
            }
            return p;
        })
    }

    

    remove(id) {
      
      this.products = this.products.filter(product => product.id !== id);
      this.save();
    }

    // atualizarQuantidade(idProduto, quantidade) {
    //   const produto = this.produtos.find(produto => produto.id === idProduto);
    //   if (produto) {
    //     produto.quantidade = quantidade;
    //     this.salvarCarrinho();
    //   }
    // }



    save() {
      localStorage.setItem('cart', JSON.stringify(this.products));
    }
    clear(){
        localStorage.setItem('cart', '[]'); 
    }

    allProducts() {
      return this.products;
    }
}
