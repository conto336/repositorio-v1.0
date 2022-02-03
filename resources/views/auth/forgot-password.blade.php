<x-auth>
    @section('title', 'Inicia sesión')
    <body class="login-page">
        <div class="login-box">

            <div class="login-logo">
                <p><b>Departamento</b> de <br> Tecnología</p>
            </div><!-- /.login-logo -->

            <p class="login-box-msg">Restablecer contraseña</p>

            @if (session('status'))
                <div class="text-primary">
                    {{ session('status') }}
                </div>
            @endif
            
            <div class="card">
                <div class="card-body">
                    <p class="text-center text-info">
                        {{ __('Ingresa tu correo electrónico para restablecer la contraseña.') }}
                    </p>

                    <form method="POST" action="{{ route('password.email') }}">
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Correo electrónico</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp"
                                placeholder="Ingresa tu correo">
                            {{-- <small id="emailHelp" class="form-text text-muted">No compartas tu correo con nadie
                                más.</small> --}}
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Restablecer') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</x-auth>
