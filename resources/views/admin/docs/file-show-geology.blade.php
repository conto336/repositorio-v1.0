@extends('adminlte::page')

@section('title', '- Lista de archivos')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/data-tables/CSS/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/data-tables/CSS/responsive.bootstrap4.min.css') }}">
    <style>
        p {
            display: block;
        }

        table {
            overflow-x: auto;
        }

        table td {
            max-width: 150px;
            white-space: nowrap;
            text-overflow: ellipsis;
            word-break: break-all !important;
            overflow: hidden !important;
            vertical-align: middle !important;
            /* 
                        word-wrap: break-word !important;
                        max-width: 400px; */
        }

        #electronic td {
            white-space: inherit;
            overflow: hidden;
            vertical-align: middle !important;
        }

        .modal-content {
            top: 50px;
        }

    </style>
@stop

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p class="text-center text-primary"><strong>Lista de archivos en el servidor</strong>.</p>
    @if (session()->has('success'))
        <div class="text-center">
            <div class="alert alert-success alert-dismissable">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        </div>
    @endif

    <div class="card">
        <h5 class="card-header">Documentos de Ingeniería Geológica</h5>
        <div class="card-body">
            @if ($geologia > 0)
                <table id="geology" class="table table-striped dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre <i class="far fa-file-pdf head"></i></th>
                            <th>Modalidad <i class="fas fa-graduation-cap"></i></th>
                            <th>Fecha <i class="far fa-clock head"></i></th>
                            <th>Acciones <i class="fas fa-edit"></i> / <i class="fas fa-trash-alt"></th>
                        </tr>
                    </thead>
                    <tbody id="tableGeologia">
                        @foreach ($docsGeologia as $geologia)
                            <tr>
                                <td>
                                    <p class="text-mute">
                                        <img class="head" src="{{ asset('images/files.svg') }}" alt="file"
                                            width="30" />
                                        &nbsp; {{ $geologia->document->name }}
                                    </p>
                                </td>
                                <td>
                                    <p>{{ $geologia->category }}</p>
                                </td>
                                <td>
                                    <p class="text-muted">{{ $geologia->document->date }}</p>
                                </td>
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mx-auto" role="group" aria-label="First group">
                                            <form
                                                action="{{ route('admin.file-edit', [$geologia->document->id, $geologia->document->name]) }}"
                                                method="GET">
                                                <button type="submit" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit"></i></button>
                                            </form>
                                            <div class="mx-1"></div>
                                            <form action="{{ route('admin.deleteFile', $geologia->document->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-recycle"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                </table>
            @else
                <div class="text-center">
                    <h4 class="fw-bolder">No hay archivos disponibles <i class="far fa-file-pdf"></i></h4>
                </div>
            @endif
        </div>
    </div>

@stop

@section('footer')
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
    </div>
    <strong>Copyright © {{ date('Y') }} Deptarmento de Tecnología UNAN-MANAGUA.</strong> All rights reserved.
@stop

@section('js')
    <script src="{{ asset('vendor/swetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/data-tables/JS/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/data-tables/JS/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/data-tables/JS/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/data-tables/JS/responsive.bootstrap4.min.js') }}"></script>
    <script>
        function table(id) {
            $(id).DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "Ningun resultado - intenta con otro!",
                    "info": "Mostrando la  página _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "next": ">",
                        "previous": "<",
                    }
                }

            });
        }

        function actions(id) {
            $(id).click(function(e) {
                if (e.target.classList.contains("fa-recycle")) {
                    e.preventDefault();

                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: "btn btn-success ml-2",
                            cancelButton: "btn btn-danger",
                        },
                        buttonsStyling: false,
                    });

                    swalWithBootstrapButtons
                        .fire({
                            title: "Estas seguro?",
                            text: "Esta acción no se podra deshacer",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Borrar",
                            cancelButtonText: "Cancelar",
                            reverseButtons: true,
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                swalWithBootstrapButtons
                                    .fire("Borrado!", "Archivo borrado", "success")
                                    .then((result) => {
                                        if (result.isConfirmed) {
                                            e.originalEvent.path[2].submit();
                                        }
                                    });
                            } else if (
                                result.dismiss === Swal.DismissReason.cancel
                            ) {
                                swalWithBootstrapButtons.fire(
                                    "Cancelado",
                                    "Has cancelado la operación :)",
                                    "error"
                                );
                            }
                        });
                }
                if (e.target.classList.contains("btn-danger")) {
                    e.preventDefault();

                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: "btn btn-success ml-2",
                            cancelButton: "btn btn-danger",
                        },
                        buttonsStyling: false,
                    });

                    swalWithBootstrapButtons
                        .fire({
                            title: "Estas seguro?",
                            text: "Esta acción no se podra deshacer",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Borrar",
                            cancelButtonText: "Cancelar",
                            reverseButtons: true,
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                swalWithBootstrapButtons
                                    .fire("Borrado!", "Archivo borrado", "success")
                                    .then((result) => {
                                        if (result.isConfirmed) {
                                            e.originalEvent.path[1].submit();
                                        }
                                    });
                            } else if (
                                result.dismiss === Swal.DismissReason.cancel
                            ) {
                                swalWithBootstrapButtons.fire(
                                    "Cancelado",
                                    "Has cancelado la operación :)",
                                    "error"
                                );
                            }
                        });
                }
            });
        }
        $(document).ready(function() {
            actions("#tableGeologia");
            table("#geology");
        });
    </script>
@stop
