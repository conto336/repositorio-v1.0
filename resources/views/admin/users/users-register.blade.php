@extends('adminlte::page')

@section('title', '- Registar Usuario')

@section('content_header')
    <h1>Registro de usuarios</h1>
@stop

@section('content')

    <div class="container text-center">
        <p class="text-success h4">
            Esta función aún no esta implementada, por favor contáctate con el desarrollador del sitio.
        </p>
    </div>
   {{--  <x-form-register-user /> --}}

@stop

@section('footer')

    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
    </div>
    <strong>Copyright © {{ date('Y') }} Deptarmento de Tecnología UNAN-MANAGUA.</strong> All rights reserved.

@stop

@section('css')

@stop

@section('js')
   {{--  <script>
        function show(p, p2, e) {
            const eye = document.getElementById(p);
            const password = document.getElementById(p2)
            const eyePssword = document.getElementById(e)
            eye.addEventListener('click', (e) => {
                if (password.type === 'password') {
                    password.type = 'text';
                    eyePssword.classList.add('fa-eye-slash');
                } else {
                    password.type = 'password';
                    eyePssword.classList.remove('fa-eye-slash');
                    eyePssword.classList.add('fa-eye');
                }
            });
        }
        show('password_one', 'password', 'eye');
        show('password_two', 'password_confirmation', 'eye_two')
    </script>
    <script src="{{ asset('vendor/swetalert2/sweetalert2.all.min.js') }}"></script>

    <script>
        const password = document.getElementById("password");
        const password_confirmation = document.getElementById("password_confirmation");
        const btn_register = document.getElementById("registerUser");

        password_confirmation.addEventListener("blur", () => {
            if (password.value != password_confirmation.value) {
                btn_register.disabled = true;
                Swal.fire({
                    title: "Contraseñas deben de ser iguales y debe tener al menos 8 caracteres",
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                });
            }
        });

        password.addEventListener("change", () => {
            if (password.value <= 8) {
                btn_register.disabled = true;
                Swal.fire({
                    title: "Las contraseñas deben tener al menos 8 caracteres",
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                });
            }
        });

        btn_register.addEventListener("click", (e) => {
            e.prevenDefault();
            Swal.fire({
                title: `Esta función aún NO esta implementada. 
                        Contáctate con el desarrollador del sitio`,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
        })
    </script> --}}

@stop
