@extends('adminlte::page')

@section('title', 'PAGINA INICIO SG_SST')

@section('content_header')
    <h1>Index categoria</h1>
@stop

@section('content')

<div class="card">

    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('categorias.create')}}">Agregar Categoría</a>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre de usuario</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($usuario as $usuarios)
                <tr>
                    <td>{{$usuario->nombreUsuario}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('usuarios.edit',$usuario)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('usuarios.destroy', $usuario)}}" method="POST">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>

                        </form>
                    </td>
                </tr>                        
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
