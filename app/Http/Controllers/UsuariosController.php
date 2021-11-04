<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();

        return view('usuarios.indexU', compact('usuario'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.createU');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //con este comando podemos ver lo que se esta enviando cunado se presiona le boton enviar en createU
                //return $request -> all();
        $request->validate(
            [
                'nombreUsuario'=>'required',
                'nombre'=>'required',
                'apellido'=>'required',
                'cedula'=>'required|numeric',
                'telefono'=>'required',
                'celular'=>'required',
                'direccion'=>'required',
                'contraseña'=>'required',
                'rol'=>'required'
            ],
            [
                'nombreUsuario.required' => 'El nombre de usuario es requerido',
                'nombre.required' => 'El nombre de usuario es requerido',
                'apellido.required' => 'El apellido debe es requerido', 
                'cedula.numeric' => 'La cedula es requerido',
                'telefono.required' => 'El telefono es requerido',
                'celular.required' => 'El celular es requerido',
                'direccion.required' => 'la direccion es requerido',
                'contraseña.required' => 'La contraseña es requerido',
                'rol.required' => 'El rol es requerido', 
            ]
            );

        $usuario= new Usuario;
        $usuario->nombreUsuario = $request->nombreUsuario;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->cedula = $request->cedula;
        $usuario->telefono = $request->telefono;
        $usuario->celular = $request->celular;
        $usuario->direccion = $request->direccion;
        $usuario->contraseña = $request->contraseña;
        $usuario->rol = $request->rol;

        $usuario->save();

        return back()->with('message','El Usuario  fue creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
