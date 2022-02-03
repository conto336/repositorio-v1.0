<x-home>
    @section('title', 'Resultados de busqueda')
    @section('css')
        <link rel="stylesheet" href="{{ asset('vendor/plugins/data-tables/CSS/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/plugins/data-tables/CSS/responsive.bootstrap4.min.css') }}">
        <style>
            @media (max-width: 380px) {
                .head {
                    display: none !important;
                }
            }

            p {
                display: block;
            }

            table {
                overflow-x: auto;
            }

            #documents td {
                min-width: 150px;
                white-space: inherit;
                overflow: hidden;
                vertical-align: middle !important;
            }

            .modal-content {
                top: 50px;
            }

        </style>
    @endsection

    <div class="top-content section-container" id="top-content">
        <div class="container">
            <div class="row">
                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">

                    {{-- <h1 class="wow fadeIn text-content"><strong>Aquí encontrarás los documentos de graduación de
                            las siguientes carreras</strong></h1>
                    <div class="description wow fadeInLeft">
                        <p class="h3 text-content">
                            <strong>Ingenería Electrónica</strong>
                        </p>
                    </div> --}}

                    <x-navegation-menu-library />
                </div>
            </div>
        </div>
    </div>

    <!-- Section 5 -->
    <div class="section-5-container section-container mx-auto" id="section-5">

        @if ($query->count() > 0)
            <div class="card">
                <h5 class="card-header">Resultados de: {{ $name }} </h5>
                <div class="card-body">
                    <table id="documents" class="table table-striped table-bordered dt-responsive nowrap"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre <i class="far fa-file-pdf head"></i></th>
                                <th>Carrera <i class="fas fa-cogs head"></i></th>
                                <th>Fecha <i class="far fa-clock head"></i></th>
                                <th>Ver <i class="fas fa-eye head"></i>
                                    <-> Descargar <i class="fas fa-download head">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($query as $document)

                                <tr>
                                    <td>
                                        <p class="text-mute text-justify">
                                            <img class="head" src="{{ asset('images/files.svg') }}"
                                                alt="file" width="30" />
                                            &nbsp; {{ $document->name }}
                                        </p>
                                    </td>

                                    <td>
                                        <p> {{ $document->carrer }}</p>
                                    </td>

                                    <td>
                                        <p> {{ $document->date }}</p>
                                    </td>

                                    @if ($document->electronica)
                                        <td>

                                            <div class="btn-group" role="group">
                                                <a class="btn btn-primary"
                                                    href="{{ route('showFile', [$document->name, $document->id]) }}"
                                                    data-toggle="popover-hover" data-placement="left" title="Ver"
                                                    data-content="Has clic para ver el archivo en otra pestaña">
                                                    <i class="fas fa-eye"></i></a>
                                                <a class="btn btn-info" href="{{ $document->electronica->url }}"
                                                    download="{{ $document->original_name }}"
                                                    data-toggle="popover-hover" data-placement="right" title="Descargar"
                                                    data-content="Has clic para descarga directa del archivo">
                                                    <i class="fas fa-download"></i></a>

                                            </div>

                                        </td>
                                    @endif
                                    @if ($document->industrial)
                                        <td>

                                            <div class="btn-group" role="group">
                                                <a class="btn btn-primary"
                                                    href="{{ route('showFile', [$document->name, $document->id]) }}"
                                                    data-toggle="popover-hover" data-placement="left"
                                                    title="Ver"
                                                    data-content="Has clic para ver el archivo en otra pestaña">
                                                    <i class="fas fa-eye"></i></a>
                                                <a class="btn btn-info" href="{{ $document->industrial->url }}"
                                                    download="{{ $document->original_name }}"
                                                    data-toggle="popover-hover" data-placement="right" title="Descargar"
                                                    data-content="Has clic para descarga directa del archivo">
                                                    <i class="fas fa-download"></i></a>

                                            </div>

                                        </td>
                                    @endif
                                    @if ($document->geologia)
                                        <td>

                                            <div class="btn-group" role="group">
                                                <a class="btn btn-primary"
                                                    href="{{ route('showFile', [$document->name, $document->id]) }}"
                                                    data-toggle="popover-hover" data-placement="left"
                                                    title="Ver"
                                                    data-content="Has clic para ver el archivo en otra pestaña">
                                                    <i class="fas fa-eye"></i></a>
                                                <a class="btn btn-info" href="{{ $document->geologia->url }}"
                                                    download="{{ $document->original_name }}"
                                                    data-toggle="popover-hover" data-placement="right" title="Descargar"
                                                    data-content="Has clic para descarga directa del archivo">
                                                    <i class="fas fa-download"></i></a>

                                            </div>

                                        </td>
                                    @endif

                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        @else
            <div class="container">
                <div class="my-3 mx-auto">
                    <div class="alert alert-primary" role="alert">
                        <p class="h5 text-success">Sin resultados para : {{ $name }}</p>
                    </div>
                </div>
            </div>
        @endif

    </div>
    @section('js')
        <script src="{{ asset('vendor/plugins/data-tables/JS/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendor/plugins/data-tables/JS/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendor/plugins/data-tables/JS/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('vendor/plugins/data-tables/JS/responsive.bootstrap4.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#documents').DataTable({
                    responsive: true,
                    autoWidth: false,
                    searching: false,
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ registros por página",
                        "zeroRecords": "Ningun resultado - intenta con otro!",
                        "info": "Mostrando la  página _PAGE_ de _PAGES_",
                        "infoEmpty": "No hay registros disponibles",
                        "infoFiltered": "(filtrado de _MAX_ registros totales)",
                        "paginate": {
                            "next": ">",
                            "previous": "<",
                        }
                    }
                });
            });
        </script>

    @endsection
</x-home>
