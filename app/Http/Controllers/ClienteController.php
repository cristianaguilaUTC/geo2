<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#importar el modelo cliente
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //consulta de clientes en la bdd
        $clientes=Cliente::all();
        #renderizar la vista 
        return view("clientes.index",compact("clientes"));
    }
    /** 
     * funcion que renderiza un mapa con las ubicaciones  
     */
    public function mapa()
    {
        //consulta de clientes en la bdd
        $clientes=Cliente::all();
        #renderizar la vista 
        return view("clientes.mapa",compact("clientes"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //renderizando el formulario para crear cliente
        return view("clientes.nuevo");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //capturar valores y almacenarlos en la bdd
        $datos=[
            "cedula"=>$request->cedula,
            "apellido"=>$request->apellido,
            "nombre"=>$request->nombre,
            "latitud"=>$request->latitud,
            "longitud"=>$request->longitud,
        ];
        cliente::create($datos);
        return redirect()->route("clientes.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
      $cliente = Cliente::findOrFail($id);
        return view('clientes.editar', compact('cliente'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
          $cliente = Cliente::findOrFail($id);
        $cliente->update([
            'cedula' => $request->cedula,
            'apellido' => $request->apellido,
            'nombre' => $request->nombre,
            'latitud' => $request->latitud,
            'longitud' => $request->longitud,
        ]);
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

         return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');

    }
}
