<x-auth>
    @section('title', 'Inicia sesión')

    <body class="login-page">
        <div class="login-box">

            <div class="login-logo">
                <p><b>Departamento</b> de <br> Tecnología</p>
            </div><!-- /.login-logo -->

                <p class="login-box-msg">Ingresa tus credenciales</p>

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label for="email" value="{{ __('Email') }}">Ingresa tu correo: </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-at"></i></div>
                        </div>
                        <input class="form-control" id="email" type="email" name="email" :value="old('email')" required
                            autofocus placeholder="Correo" />
                    </div>
                    @error('email')
                    <div class="alert alert-danger alert-dismissable mt-2">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    @enderror
                    <br>
                    <label for="password" value="{{ __('Password') }}">Ingresa tu contraseña: </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-lock"></i></div>
                        </div>
                        <input class="form-control" id="password" class="block mt-1 w-full" type="password"
                            name="password" required autocomplete="current-password" placeholder="Contraseña" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="password_"><i id="eye" class="fa fa-eye"></i></span>
                        </div>
                    </div>
                    @error('password')
                    <div class="alert alert-danger alert-dismissable mt-2">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    @enderror
                    <br>

                    <button type="submit" class="btn btn-primary btn-block btn-flat"> <i class="fa fa-sign-in"></i>
                        Ingresa</button>

                </form>
                {{-- @if (Route::has('password.request'))
                <div class="my-3">
                    <a href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                </div>
                @endif --}}

        </div>

        <script src="{{ asset('vendor/js/login.js') }}"></script>
</x-auth>
