@extends('layouts.app')

@section('content')
    <form class="formulario">
        <h1>login</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="bi bi-envelope-fill icon"></i>
                <input type="text" placeholder="Correo Electronico">
            </div>

            <div class="input-contenedor">
                <i class="bbi bi-key icon"></i>
                <input type="password" placeholder="Contraseña">
            </div>

            <input type="submit" value="Entrar" class="button">
            
            <p>Al registrarse, aceptas nuestras Condiciones de uso y politica de
                privacidad.</p>
            <p>¿No tienes una cuenta? <a class="link" href="registrate.html">Registrate</a></p>
        </div>
    </form>    
@endsection
