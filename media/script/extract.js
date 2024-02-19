const slug = window.location.href.split('/').reverse()[0]

const prods = Array.from(document.querySelectorAll('.list_prod')).map( p => {
    console.log(p)
    return {
        slug,
        link: p.querySelector('a').href,
        img: p.querySelector('img').src,
        title: p.querySelector('.title_prod').innerHTML,
        cat_prod: p.querySelector('.cat_prod').innerHTML,
        sku: p.querySelector('.sku').innerHTML
    }
})

console.log(JSON.stringify(prods))

const blob = new Blob([JSON.stringify(prods)], { type: 'text/plain' });
const a = document.createElement('a');
a.setAttribute('download', `${slug}.json`);
a.setAttribute('href', window.URL.createObjectURL(blob));
a.click();