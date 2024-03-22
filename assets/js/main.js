const cart = new Cart();
var _app_data = { cart: [] };
_app_data.cart = cart.allProducts();
function agendar_contato() {
    const dialog = document.getElementById("favDialog");
    dialog.showModal();
}

function close_contato() {
    const dialog = document.getElementById("favDialog");
    dialog.close();
}

const swiper = new Swiper(".banner", {
    direction: "horizontal",
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

new Swiper(".slide__destaque", {
    direction: "horizontal",
    loop: true,
    autoplay: {
        delay: 3000,
    },
    slidesPerView: 4,
    spaceBetween: 10,

    pagination: {
        el: ".pagination__destaque",
    },

    navigation: {
        nextEl: ".slide__destaque__next",
        prevEl: ".slide__destaque__prev",
    },

    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        480: {
            slidesPerView: 3,
            spaceBetween: 30,
        },

        640: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    },
});

new Swiper(".slide__feedback", {
    direction: "horizontal",
    loop: true,
    autoplay: {
        delay: 3000,
    },
    slidesPerView: 5,
    spaceBetween: 10,

    navigation: {
        nextEl: ".slide__feedback__next",
        prevEl: ".slide__feedback__prev",
    },

    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        480: {
            slidesPerView: 3,
            spaceBetween: 30,
        },

        640: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
    },
});

new Swiper(".card__profile", {
    direction: "horizontal",
    loop: true,
    autoplay: {
        delay: 3000,
    },
    slidesPerView: 4,
    spaceBetween: 10,

    pagination: {
        el: ".pagination__profile",
    },

    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        480: {
            slidesPerView: 3,
            spaceBetween: 30,
        },

        640: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    },
});

window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
        document.querySelector(".header__none").style.display = "none";
        document.querySelector(".header__btn__black").style.display = "none";
        document.querySelector(".js__space__remove").style.display = "none";
        const contatos = document.querySelector(".header__search__contact");
        contatos.classList.add("contatos-empilhados");
    } else {
        document.querySelector(".header__none").style.display = "flex";
        document.querySelector(".header__btn__black").style.display = "flex";
        document.querySelector(".js__space__remove").style.display = "grid";
        const contatos = document.querySelector(".header__search__contact");
        contatos.classList.remove("contatos-empilhados");
    }
});

new Swiper(".slide__prod", {
    direction: "horizontal",
    slidesPerView: 3,
    spaceBetween: 10,
});

function troca_image($e) {
    let image = document.querySelector(".js-image-grande");
    image.src = $e.src;
}

// #####################################

document.querySelectorAll(".img-container").forEach((elem) => {
    let x, y, width, height;
    elem.onmouseenter = () => {
        const size = elem.getBoundingClientRect();

        x = size.x;
        y = size.y;
        width = size.width;
        height = size.height;
    };

    elem.onmousemove = (e) => {
        const horizontal = ((e.clientX - x) / width) * 100;
        const vertical = ((e.clientY - y) / height) * 100;

        elem.style.setPropert("--x", horizontal + "%");
        elem.style.setPropert("--y", vertical + "%");
    };
});

const img_container = document.getElementById("img-container");
const img = document.getElementById("featured");

img_container.addEventListener("mousemove", (e) => {
    const x = e.clientX - e.target.offsetLeft;
    const y = e.clientY - e.target.offsetTop;

    img.style.transformOrigin = `${x}px ${y}px`;
    img.style.transform = "scale(2)";

    img_container.addEventListener("mouseleave", () => {
        img.style.transformOrigin = "center";
        img.style.transform = "scale(1)";
    });
});

async function buscarDadosAPI(urlBase, parametros) {
    function construirParametrosConsulta(params) {
        return Object.keys(params)
            .map(
                (chave) =>
                    encodeURIComponent(chave) +
                    "=" +
                    encodeURIComponent(params[chave])
            )
            .join("&");
    }

    const urlComParametros =
        urlBase + "?" + construirParametrosConsulta(parametros);

    try {
        const response = await fetch(urlComParametros);

        if (!response.ok) {
            throw new Error("A requisição falhou: " + response.statusText);
        }

        const data = await response.json();
        console.log(data);
        return data;
    } catch (error) {
        console.error("Houve um problema com sua requisição:", error);
    }
}

async function addLead(event, $e) {
    event.preventDefault();
    
    let payload = {
        nome: document.querySelector(".js_lead_name").value,
        email: document.querySelector(".js_lead_email").value,
    };
    $e.reset();
    let alert = document.querySelector(".news__alert");
    let message = document.querySelector(".news__alert span");
    let addLeadApi = await buscarDadosAPI(_domain+"/wp-json/secoli/v1/lead/", payload);
    message.innerHTML = addLeadApi.message;
    alert.removeAttribute("hidden");
    console.log(addLeadApi);

    setTimeout(() => {
        alert.setAttribute("hidden", "true");
    }, 6000);
}

async function addContact(event, $e) {
    event.preventDefault();
    
    let payload = {
        nome: document.querySelector(".js_dialog_name").value,
        telefone: document.querySelector(".js_dialog_phone").value,
        email: document.querySelector(".js_dialog_email").value,
        nome_empresa: document.querySelector(".js_dialog_empresa").value,
        cnpj: document.querySelector(".js_dialog_cnpj").value,
        descricao: document.querySelector(".js_dialog_desc").value,
    };
    $e.reset();
    let alert = document.querySelector(".news__alert");
    let message = document.querySelector(".news__alert span");
    let addContactApi = await buscarDadosAPI(_domain+"/wp-json/secoli/v1/agendar-contato/", payload);
    message.innerHTML = addContactApi.message;
    alert.removeAttribute("hidden");
    console.log(payload);

    setTimeout(() => {
        alert.setAttribute("hidden", "true");
    }, 6000);
}

function mascaraCNPJ(cnpj) {
    let valor = cnpj.value.replace(/\D/g, "");
    valor = valor.substring(0, 14);
    valor = valor.replace(/^(\d{2})(\d)/, "$1.$2");
    valor = valor.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
    valor = valor.replace(/\.(\d{3})(\d)/, ".$1/$2");
    valor = valor.replace(/(\d{4})(\d)/, "$1-$2");

    cnpj.value = valor;
  }

  function mascaraTelefone(telefone) {
    let valor = telefone.value.replace(/\D/g, "");
    if (valor.length === 11) {
      valor = valor.replace(/^(\d{2})(\d{5})(\d{4})$/, "($1) $2-$3");
    } else if (valor.length === 10) {
      valor = valor.replace(/^(\d{2})(\d{4})(\d{4})$/, "$1-$2$3");
    } else {
      valor = valor.substring(0, 11);
    }

    telefone.value = valor;
  }