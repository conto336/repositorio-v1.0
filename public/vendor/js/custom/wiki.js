var clave;
var query = '';
var cont = 0;

document.getElementById('searchWiki').addEventListener('change', () => {
    query = document.getElementById('searchWiki').value;
    cont++
    if (cont > 1) {
        document.getElementById('wikiAPI').innerHTML = '';
    }
    if (document.getElementById('searchWiki').value === '') {
        document.getElementById('logoWIKI').innerHTML = `
        <div class="col-md-2 offset-md-5">
            <div class="card-inner p-3 d-flex flex-column align-items-center"> <i
                    class="fab fa-wikipedia-w"></i>
                <div class="text-center mg-text"> <span
                        class="mg-text">WIKIPEDIA</span>
                </div>
            </div>
        </div>
        `;
        document.getElementById('showResult').innerHTML = `Mostrando: <b>0</b> resultados`
    }
})
document.getElementById('filter').addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById('logoWIKI').innerHTML = '';
    let url =
        `https://es.wikipedia.org/w/api.php?action=query&list=search&srprop=snippet&format=json&origin=*&utf8=&srsearch=${query }`;
    fetch(url, {
            method: 'GET',
        }).then(res => res.json())
        .then(res => {
            const obj = res.query.search;
            const key = Object.keys(obj);
            document.getElementById('showResult').innerHTML =
                `Mostrando: <b>${key.length}</b> resultados`
            for (let i = 0; i < key.length; i++) {
                clave = key[i];
                const bodyTable = document.getElementById('wikiAPI');
                const table = document.createElement('TABLE');
                const tbody = document.createElement('TBODY');

                let td = `
                        <tr>
                            <td>
                                <div class="widget-26-job-emp-img">
                                    <img src="/images/www.svg"
                                        alt="Company" />
                                </div>
                            </td>
                            <td>
                                <div class="widget-26-job-title">
                                    <a href="https://es.wikipedia.org/?curid=${obj[clave].pageid}" target="_blank">
                                    ${obj[clave].title}</a>
                                    <p class="m-0"><a href="#" class="employer-name">
                                        Result of =    
                                    </a> <span class="text-muted time">${query}</span>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="widget-26-job-info">
                                    <p class="type m-0">${obj[clave].snippet}</p>
                                </div>
                            </td>
                            <td>
                        </tr>
                        `;
                bodyTable.setAttribute('class', 'table widget-26')
                bodyTable.appendChild(table).appendChild(tbody).innerHTML = td;
            }

        });
});
