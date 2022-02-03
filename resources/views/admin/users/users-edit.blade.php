@extends('adminlte::page')

@section('title', '- Lista de archivos')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p class="text-center text-info">Editar usuario: {{ $updateUser->name }}.</p>
    @if (session()->has('success'))
        <div class="text-center">
            <div class="alert alert-success alert-dismissable">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        </div>
    @endif

    <div class="container mt-4 mb-4">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-8">
                <h1 class="h2 mb-4">Actualiza los siguientes campos</h1>
                <form action="#" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nuevo nombre:</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Ingresa el nuevo nombre ..." value="{{ $updateUser->name }}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger alert-dismissible fade show mt-2 text-center" role="alert">
                            <strong>Oops! something went wrong</strong><br> {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror

                    <div class="form-group">
                        <label for="name">Actualizar contraseña:</label>
                        <input type="text" class="form-control" name="password" id="password"
                            placeholder="Actualizar contraseña">
                    </div>
                    @error('name')
                        <div class="alert alert-danger alert-dismissible fade show mt-2 text-center" role="alert">
                            <strong>Oops! something went wrong</strong><br> {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror

                    <hr>

                    <button type="submit" class="btn btn-primary">Actualizar &nbsp; <i class="fas fa-sync"></i></button>
                </form>
            </div>
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


@stop
