@extends('adminlte::page')

@section('title', '- Lista de archivos')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p class="text-center text-info">Editar archivo:<strong>{{ $doc->name }}</strong>.</p>
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
                <form action="{{ route('admin.update-file', $doc) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Autores:</label>
                        <input type="text" class="form-control" name="authors" id="authors"
                            placeholder="Ingrese los autores ..." value="{{ $doc->$carrer->authors }}">
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
                        <label for="name">Nuevo nombre:</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Ingresa el nuevo nombre ..." value="{{ $doc->name }}">
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
                        <label for="date">Nueva fecha:</label>
                        <input type="text" class="form-control" name="date" id="date"
                            placeholder="Ingresa la nueva fecha ..." value="{{ $doc->date }}">
                    </div>
                    @error('date')
                        <div class="alert alert-danger alert-dismissible fade show mt-2 text-center" role="alert">
                            <strong>Oops! something went wrong</strong><br> {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror

                    <div class="form-group">
                        <label>Actual descripción:</label>
                        <div class="text-bold text-info">
                            {!! $doc->$carrer->description !!}
                        </div>
                        <hr />
                        <label>Nueva descripción: </label>
                        <textarea class="form-control rounded-0" id="description" name="description"
                            rows="5">{!! $doc->$carrer->description !!}</textarea>
                    </div>
                    @error('description')
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

{{-- @section('css')
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}" type="text/css">
@stop --}}

@section('js')

    <script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            uiColor: '#CCEAEE',
            language: 'es',
            width: '100%',
            height: 200,
        });

    </script>

@stop
