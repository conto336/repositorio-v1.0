
<div class="container">

    <div class="row">
        <div class="col section-5 section-description wow fadeIn">
            <h2>WIKIPEDIA</h2>
            <div class="divider-1 wow fadeInUp"><span></span></div>
            <h3 class="heading mt-3 text-center">En que puedo ayudarte?</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 card-margin">
            <div class="card search-form">
                <div class="card-body p-0">
                    <form action="#" id="search-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-11 col-md-6 col-sm-11 p-0">
                                        <input type="text" placeholder="Search..." class="form-control" id="searchWiki"
                                            name="search">
                                    </div>
                                    <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                        <button type="submit" class="btn btn-base" id="filter">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-margin">
                <div class="card-body">
                    <div class="row search-body">
                        <div class="col-lg-12">
                            <div class="search-result">
                                <div class="result-header">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="records" id="showResult"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="result-body">

                                    <div class="row mt-4 g-1 px-4 mb-5" id="logoWIKI">
                                        <div class="col-md-2 offset-md-5">
                                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <i
                                                    class="fab fa-wikipedia-w"></i>
                                                <div class="text-center mg-text"> <span class="mg-text">WIKIPEDIA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive" id="wikiAPI">
                                        {{-- Body table Content --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
<script{{--  src="{{ asset('js/library/wiki.js') }}" --}}>
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
                                        alt="Wiki" />
                                </div>
                            </td>
                            <td>
                                <div class="widget-26-job-title text-justify">
                                    <a href="https://es.wikipedia.org/?curid=${obj[clave].pageid}" target="_blank">
                                    ${obj[clave].title}</a>
                                    <p class="m-0"><a href="#" class="employer-name">
                                        Result of =    
                                    </a> <span class="text-muted time">${query}</span>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="widget-26-job-info text-justify">
                                    <p class="type m-0">${obj[clave].snippet}</p>
                                </div>
                            </td>
                            <td>
                        </tr>
                        `;
                        const body = bodyTable.appendChild(table);
                        body.appendChild(tbody).innerHTML = td;
                        table.setAttribute('class', 'table widget-26')
                
            }

        });
});

</script>
@endsection
