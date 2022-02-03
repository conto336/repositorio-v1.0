<div class="row">
    <div class="col-sm-5 offset-sm-3">
        @if (session()->has('success'))
            <div class="text-center">
                <div class="alert alert-success alert-dismissable">
                    {{ session()->get('success') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            </div>
        @endif
        @if (session()->has('danger'))
            <div class="text-center">
                <div class="alert alert-danger alert-dismissable">
                    {{ session()->get('danger') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            </div>
        @endif
        <form method="POST" action="{{ route('admin.register-user') }}">
            @csrf
            <div class="form-group">
                <label for="name" value="{{ __('Name') }}">Nombre: </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" :value="old('name')" required
                        autofocus autocomplete=off />
                </div>
                @error('name')
                    <div class="alert alert-danger alert-dismissable">{{ $message }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="lastname" value="{{ __('Apellidos') }}">Apellidos: </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" id="lastname" name="lastname" :value="old('lastname')"
                        required autofocus autocomplete=off />
                </div>
                @error('lastname')
                    <div class="alert alert-danger alert-dismissable">{{ $message }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="carnet" value="{{ __('Carrera') }}">Selecciona la Carrera: </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-cogs"></i></span>
                    </div>
                    <select class="form-control" name="carrer" id="carrer">
                        <option selected>Seleccione la carrera...</option>
                        <option value="Electronica">Ingeniería Electrónica</option>
                        <option value="Industrial">Ingeniería Industrial</option>
                        <option value="Geologia">Ingeniería Geológica</option>
                    </select>
                </div>
                @error('carrrer')
                    <div class="alert alert-danger alert-dismissable">{{ $message }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @enderror
                @if (session()->has('warning'))
                    <div class="text-center">
                        <div class="alert alert-danger alert-dismissable">
                            {{ session()->get('warning') }}
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="carnet" value="{{ __('Carnet') }}">N° Carnet: </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
                    </div>
                    <input type="text" class="form-control" id="carnet" name="carnet" :value="old('carnet')" required
                        autofocus autocomplete="carnet" />
                </div>
                @error('carnet')
                    <div class="alert alert-danger alert-dismissable">{{ $message }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email" value="{{ __('Email') }}">Email: </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required />
                </div>
                @error('email')
                    <div class="alert alert-danger alert-dismissable">{{ $message }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="role" value="{{ __('role') }}">Rol: </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                    </div>
                    <select class="form-control" name="role" id="role">
                        <option value="user">Usuario</option>
                        <option value="ADMIN">Admin</option>
                    </select>
                </div>
                @error('role')
                    <div class="alert alert-danger alert-dismissable">{{ $message }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" value="{{ __('Password') }}">Contraseña</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" id="password" name="password" required
                        autocomplete="new-password" />
                    <div class="input-group-append">
                        <span class="input-group-text" id="password_one"><i id="eye" class="fa fa-eye"></i></span>
                    </div>
                </div>
                @error('password')
                    <div class="alert alert-danger alert-dismissable">{{ $message }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @enderror
            </div>

            <div class="form-group" id="form-group-password">
                <label for="password_confirmation" value="{{ __('Confirm Password') }}" />Confirmar
                contraseña</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" id="password_confirmation"
                        name="password_confirmation" required autocomplete="new-password" />
                    <div class="input-group-append">
                        <span class="input-group-text" id="password_two"><i id="eye_two"
                                class="fa fa-eye"></i></span>
                    </div>
                </div>
                @error('password_confirmation')
                    <div class="alert alert-danger alert-dismissable">{{ $message }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @enderror
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" id="registerUser">Registrar Usuario</button>
            </div>
        </form>

    </div>
</div>
