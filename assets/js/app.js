var _app_data = {}

async function load_data_app() {
    const _load = document.querySelector('[app-data]')
    if (_load) {
        const file_name = _load.getAttribute("app-data")
        const get_data = await (await fetch(file_name)).json()
        return get_data
    }
    return {}
}

function navigationString(stringNavigation) {
    try {
        return eval('_app_data.' + stringNavigation);
    } catch (error) {
        return undefined;
    }
}


function repeat(obj) {
    const _repeats = document.querySelectorAll('[app-repeat]')
    Array.from(_repeats).forEach(function ($e) {
        $e.setAttribute('hidden', '')
        let _tmp_name = $e.getAttribute("app-repeat")

        if (navigationString(_tmp_name)) {
            Array.from(navigationString(_tmp_name)).forEach((c, i) => {
                let $copy = document.createElement($e.localName)
                if ($e.getAttribute("class")) {
                    $copy.setAttribute('class', $e.getAttribute("class"))
                }
                c.index = i
                $copy.innerHTML = blade($e.innerHTML, c)
                $e.parentNode.append($copy)
            })
        }
        $e.remove()
    })
}

function values(obj) {
    const _repeats = document.querySelectorAll('[app-value]')
    Array.from(_repeats).forEach(function ($e) {
        $e.innerHTML = blade($e.innerHTML, obj)
    })
}

function includes() {
    const _includes = document.querySelectorAll('[app-include]')
    Array.from(_includes).forEach(function ($e) {
        const file_name = $e.getAttribute("app-include")
        fetch(file_name)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Falha ao carregar o arquivo: ' + file_name)
                }
                return response.text();
            })
            .then(content => {
                $e.innerHTML = content;
            })
            .catch(error => {
                console.error(error)
            });
    })
}

function blade(string, dados) {
    return string.replace(/{{(.*?)}}/g, (match, p1) => {
        const chaves = p1.trim().split('.')
        let valor = dados
        for (const chave of chaves) {
            valor = valor[chave]
            if (valor === undefined) {
                return match
            }
        }
        return valor
    })
}

; (async () => {
    _app_data = {...(await load_data_app()),..._app_data}
    repeat(_app_data)
    repeat(_app_data)
    values(_app_data)
    includes()
})()

function Vu( data ) {
    repeat(data)
    repeat(data)
    values(data)
}


