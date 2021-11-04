@extends('adminlte::page')

@section('title', 'PAGINA INICIO SG_SST')

@section('content_header')
    <h1>Crear categoria</h1>
@stop

@section('css')

@endsection

@section('content')

@if (session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
@endif

<form action="{{ route('usuarios.storeU') }}" method="POST">
    @csrf

    <div class="card" style="width:100%" >
        <div class="card-body justify-content-center align-items-center">
            <section class="container">

                <!--nombre Usuario-->
                <div class="mb-3 row">
                    <label for="nombreUsuario" class="col-sm-2 col-form-label">Nombre de usuario</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">
                        @if ($errors->has('nombreUsuario'))
                            <p class="text-danger">{{$errors->first('nombreUsuario')}}</p>
                        @endif
                    </div>
                </div>
                <!--nombre-->
                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nombre" name="nombre">
                        @if ($errors->has('nombre'))
                            <p class="text-danger">{{$errors->first('nombre')}}</p>
                        @endif
                    </div>
                </div>
                <!--apellido-->
                <div class="mb-3 row">
                    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="apellido" name="apellido">
                        @if ($errors->has('apellido'))
                            <p class="text-danger">{{$errors->first('apellido')}}</p>
                        @endif
                    </div>
                </div>
                <!--cedúla-->
                <div class="mb-3 row">
                    <label for="cedula" class="col-sm-2 col-form-label">Cédula</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" id="cedula" name="cedula">
                        @if ($errors->has('cedula'))
                            <p class="text-danger">{{$errors->first('cedula')}}</p>
                        @endif
                    </div>
                </div>
                <!--telefono-->
                <div class="mb-3 row">
                    <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" id="telefono" name="telefono">
                        @if ($errors->has('telefono'))
                            <p class="text-danger">{{$errors->first('telefono')}}</p>
                        @endif
                    </div>
                </div>
                <!--celular-->
                <div class="mb-3 row">
                    <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" id="celular" name="celular">
                        @if ($errors->has('celular'))
                            <p class="text-danger">{{$errors->first('celular')}}</p>
                        @endif
                    </div>
                </div>
                <!--direccion-->
                <div class="mb-3 row">
                    <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="direccion" name="direccion">
                        @if ($errors->has('direccion'))
                            <p class="text-danger">{{$errors->first('direccion')}}</p>
                        @endif
                    </div>
                </div>
                <!--contreseña-->
                <div class="mb-3 row">
                    <label for="contraseña" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" id="contraseña" name="contraseña">
                        @if ($errors->has('contraseña'))
                            <p class="text-danger">{{$errors->first('contraseña')}}</p>
                        @endif
                    </div>
                </div>
                <!--rol-->
                <div class="mb-3 row">
                    <label for="rol" class="col-sm-2 col-form-label">Rol en el sistema</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" id="rol" name="rol">
                        @if ($errors->has('rol'))
                            <p class="text-danger">{{$errors->first('rol')}}</p>
                        @endif                        
                    </div>
                </div>
            </section>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success btn-sm" href="">Guardar</button>
        </div>
    </div>

</form>
@endsection
