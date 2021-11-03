@extends('adminlte::auth.login')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="contenedor">

                    <body>
                        <form class="formulario" method="POST" action="{{ route('login') }}">
                            @csrf

                            <h1>Inicio de sesión</h1>

                            <div class="contenedor">

                                <!--Ingreso Correo-->
                                <div class="">

                                    <i class="bi bi-envelope-fill icon"></i>

                                    <div class="input-contenedor">
                                        <input id="email" type="email"
                                            class=" @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Correo">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!--Ingreso de contraseña-->
                                <div class="">

                                    <i class="bbi bi-key icon"></i>

                                    <div class="input-contenedor">
                                        <input id="password" type="password" 
                                        class=" @error('password') is-invalid @enderror" name="password" 
                                        required autocomplete="current-password"
                                        placeholder="Contraseña">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!--Boton Iniciar-->
                                <div class="form-group row mb-0">
                                    <div class="col-md-20 offset-md-0">
                                        <button type="submit" class="button">
                                            {{ __('Iniciar') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Recordar contraseña') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <!--Recuerdame-->
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordarme') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <p>Al registrarse, aceptas nuestras Condiciones de uso y politicade
                                    privacidad.</p>
                                <p>¿No tienes una cuenta?<a class="link"
                                        href="{{ route('register') }}">Registrate</a></p>
                            </div>
                        </form>
                    </body>
                </div>
            </div>

        </div>

    </div>
@endsection
