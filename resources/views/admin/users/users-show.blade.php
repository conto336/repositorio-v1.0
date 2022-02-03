@extends('adminlte::page')

@section('title', '- Lista de archivos')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')

<div class="list-group list-group-flush mb-3">

    <div class="list-group-item px-0 d-flex align-items-center">

        <figure class="avatar">
            <span class="avatar-title bg-primary-bright text-primary rounded">
                <i class="fas fa-list-ul"></i>
            </span>
        </figure>

        <div class="flex-grow-1">
            <p class="text-center text-primary"><strong>Lista de usuarios</strong>.</p>
        </div>
    </div>
    @if (session()->has('success'))
    <div class="text-center">
        <div class="alert alert-success alert-dismissable">
            <b>{{ session()->get('success') }}</b>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    </div>
    @endif

    @if (session()->has('danger'))
    <div class="text-center">
        <div class="alert alert-danger alert-dismissable">
            <b>{{ session()->get('danger') }}</b>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    </div>
    @endif
</div>

<div class="card">
    <h5 class="card-header">Usuarios de Ingeniería Electrónica</h5>
    <div class="card-body">
        <table id="electronica" class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre <i class="far fa-user"></i></th>
                    <th>Correo <i class="fas fa-at"></i></th>
                    <th>Carnet <i class="fas fa-id-card"></i>
                    <th>Acciones <i class="fas fa-edit"></i> - <i class="fas fa-recycle"></i></th>
                </tr>
            </thead>
            <tbody id="tableElectronica">
                @foreach ($userElectronica as $user)
                <tr>
                    <td>
                        <p class="text-mute"> <img class="head" src="{{ asset('images/user.png') }}" alt="file"
                                width="30" />
                            {{ $user->name }}
                        </p>
                    </td>
                    <td>
                        <p>{{ $user->email}}</p>
                    </td>
                    <td>
                        <p class="text-muted">{{ $user->carnet }}</p>
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="First group">
                            <form action="{{ route('profile.show') }}" method="GET">
                                <div class="mx-1">
                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit"></i></button>
                                </div>
                            </form>
                            <form action="{{ route('admin.delete-user', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="mx-1">
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fas fa-recycle"></i></button>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
</div>

<div class="card">
    <h5 class="card-header">Usuarios de Ingeniería Industrial</h5>
    <div class="card-body">
        <table id="industrial" class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre <i class="far fa-user"></i></th>
                    <th>Correo <i class="fas fa-at"></i></th>
                    <th>Carnet <i class="fas fa-id-card"></i>
                    <th>Acciones <i class="fas fa-edit"></i> - <i class="fas fa-recycle"></i></th>
                </tr>
            </thead>
            <tbody id="tableElectronica">
                @foreach ($userIndustrial as $user)
                <tr>
                    <td>
                        <p class="text-mute"> <img class="head" src="{{ asset('images/user.png') }}" alt="file"
                                width="30" />
                            {{ $user->name }}
                        </p>
                    </td>
                    <td>
                        <p>{{ $user->email}}</p>
                    </td>
                    <td>
                        <p class="text-muted">{{ $user->carnet }}</p>
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="First group">
                            <form action="{{-- route('admin.edit-user', $user) --}}" method="GET">
                                <div class="mx-1">
                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit"></i></button>
                                </div>
                            </form>
                            <form action="{{ route('admin.delete-user', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="mx-1">
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fas fa-recycle"></i></button>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
</div>

<div class="card">
    <h5 class="card-header">Usuarios de Ingeniería Geológica</h5>
    <div class="card-body">
        <table id="geologia" class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre <i class="far fa-user"></i></th>
                    <th>Correo <i class="fas fa-at"></i></th>
                    <th>Carnet <i class="fas fa-id-card"></i>
                    <th>Acciones <i class="fas fa-edit"></i> - <i class="fas fa-recycle"></i></th>
                </tr>
            </thead>
            <tbody id="tableElectronica">
                @foreach ($userGeologia as $user)
                <tr>
                    <td>
                        <p class="text-mute"> <img class="head" src="{{ asset('images/user.png') }}" alt="file"
                                width="30" />
                            {{ $user->name }}
                        </p>
                    </td>
                    <td>
                        <p>{{ $user->email}}</p>
                    </td>
                    <td>
                        <p class="text-muted">{{ $user->carnet }}</p>
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="First group">
                            <form action="{{-- route('admin.edit-user', $user) --}}" method="GET">
                                <div class="mx-1">
                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit"></i></button>
                                </div>
                            </form>
                            <form action="{{ route('admin.delete-user', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="mx-1">
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fas fa-recycle"></i></button>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
</div>

@stop

@section('footer')

<div class="pull-right hidden-xs">
    <b>Version</b> 1.0
</div>
<strong>Copyright © {{ date('Y') }} Deptarmento de Tecnología UNAN-MANAGUA.</strong> All rights reserved.

@stop

@section('css')
<style>
    i {
        margin: 5px;
    }

</style>

<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('vendor/plugins/data-tables/CSS/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/plugins/data-tables/CSS/responsive.bootstrap4.min.css') }}">
@stop

@section('js')
<script src="{{ asset('vendor/plugins/data-tables/JS/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/data-tables/JS/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/data-tables/JS/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/data-tables/JS/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/swetalert2/sweetalert2.all.min.js') }}"></script>
{{--    <script src="{{ asset('js/table-user.js') }}"></script> --}}
<script>
    function table(id) {
        $(id).DataTable({
            responsive: true,
            autoWidth: false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No hay Usuarios registrados",
                "info": "Mostrando la  página _PAGE_ de _PAGES_",
                "infoEmpty": "Sin registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": ">",
                    "previous": "<",
                }
            }
        });
    }
    $(document).ready(table('#electronica'));
    $(document).ready(table('#industrial'));
    $(document).ready(table('#geologia'));

</script>

@stop
