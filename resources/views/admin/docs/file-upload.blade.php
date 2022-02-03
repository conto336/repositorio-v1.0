@extends('adminlte::page')

@section('title', '- Subir archivos')

@section('content_header')
    <h1 class="text-primary">Panel de control DepTecnología</h1>
@stop



@section('content')
    <div class="text-center mb-3">
        <p><strong>Subir Archivos al servidor</strong>, tamaño maximo del archivo es :
            <strong id="maxFileSize">{{ ini_get('upload_max_filesize') }}</strong>.
        </p>
        <small class="text-danger fs-6">Los campos marcados con * son obligatorios</small>
    </div>

    <x-file-form />

    @if (session()->has('success'))
        <script src="{{ asset('vendor/swetalert2/sweetalert2.all.min.js') }}"></script>
        <script>
            Swal.fire({
                title: "Archivo subido con éxito",
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
        </script>
    @endif
@section('footer') {{-- Section footer --}}
    <div class="pull-right hidden-xs text-primary">
        <b>Version</b> 1.0
    </div>
    <strong>Copyright © {{ date('Y') }} Deptarmento de Tecnología UNAN-MANAGUA.</strong> All rights reserved.
@stop {{-- Section footer --}}

@stop

@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<style>
    #progress {
        width: 100%;
        position: relative;
        bottom: 15px;
        background-color: chartreuse;
    }

    #ui-datepicker-div {
        font-size: 12px;
    }

    #form-file {
        cursor: pointer;
    }

    #file {
        cursor: pointer;
    }

    .fa-question-circle {
        vertical-align: middle;
        cursor: pointer;
    }

    .ui-datepicker-calendar {
        display: none;
    }

</style>

@stop

@section('js')

<script src="{{ asset('vendor/js/valid-upload.js') }}"></script>
<script src="{{ asset('vendor/swetalert2/sweetalert2.all.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>
<script src="{{ asset('vendor/jquery/jquery-ui.js') }}"></script>
<script src="{{ asset('vendor/jquery/datepicker-es.js') }}"></script>

<script>
    verify('data', 'file', 'name', 'authors', 'date', 'line', 'maxFileSize', 'progress', 'resetAll', 'uploadFile');

    CKEDITOR.replace('description', {
        uiColor: '#CCEAEE',
        language: 'es',
        width: '100%',
        height: 200,
    });

    $(function() {
        $('#datepicker').datepicker($.datepicker.regional["es"]);
        $("#date").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'd M, yy',
            showButtonPanel: true,
            onClose: function(dateText, inst) {
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).val($.datepicker.formatDate('MM, yy', new Date(year, month, 1)));
            }
        });

        $("#date").focus(function() {
            $(".ui-datepicker-calendar").hide();
            $("#ui-datepicker-div").position({
                my: "center top",
                at: "center bottom",
                of: $(this)
            });
        });
    });
</script>
@stop
