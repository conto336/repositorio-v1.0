@extends('adminlte::page')

@section('title', '- Inicio')

@section('content_header')
<h1 class="text-primary">Panel de control DepTecnología</h1>
@stop

@section('content')
<p class="text-center">Bienvenido administrador <strong>{{ Auth::user()->name }}</strong>.</p>

@if (session()->has('success'))
<div class="text-center">
    <div class="alert alert-success alert-dismissable">
        {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
</div>
@endif

@stop
@section('footer')

<div class="pull-right hidden-xs text-primary">
    <b>Version</b> 1.0
</div>
<strong>Copyright © {{date('Y')}} Deptarmento de Tecnología UNAN-MANAGUA.</strong> All rights reserved.

@stop

@section('css')


@stop

@section('js')

@stop
