<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
             return view('usuario.registro');
    }


    public function create(Request $request,)
    {

     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    /*     return view('usuario.registro');
        $this->validate($request,[
            'nombre'=>'required',
            'cedula'=>'numeric|requerid',
            'telefono'=>'requerid',
            'direccion'=>'requerid',
        ]);

        Usuario::create([
            'nombre'=>$request->nombre,
            'cedula'=>$request->cedula,
            'telefono'=>$request->numero_telefono,
            'direccion'=>$request->direccion
        ]); 
        return redirect()->router('usuario.registro');  */
       $datosRegistro = request()->except('_token');
      usuario::insert($datosRegistro); 
        /*   return response()->json($datosRegistro);  */ 
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        $datos['usuario']=usuario::paginate(5);
        return view('usuario.index',$datos);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $id)
    {
       $id->delete();
         return redirect('/index'); 
    }
}
