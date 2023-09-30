<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    public function index()
    {
        $trabajadores = new Trabajador();
        return $trabajadores->all(); 
    }

    public function create(Request $request)
    {
        $trabajador = new Trabajador();
        $trabajador->nombre = $request->nombre;
        $trabajador->apellido = $request->apellido;
        $trabajador->direccion = $request->direccion;
        $trabajador->email = $request->email;
        $trabajador->puesto = $request->puesto;
        $trabajador->password = $request->password;
        $trabajador->save();
        return $trabajador;
    }

    public function show($id)
    {
        $trabajador = new Trabajador();
        return $trabajador->find($id);
    }

    public function update($id, Request $request)
    {
        $trabajador = Trabajador::find($id);
        $trabajador->nombre = $request->nombre;
        $trabajador->apellido = $request->apellido;
        $trabajador->direccion = $request->direccion;
        $trabajador->email = $request->email;
        $trabajador->puesto = $request->puesto;
        $trabajador->password = $request->password;
        $trabajador->save();
        return $trabajador;
    }

    public function destroy($id)
    {
        $trabajador = Trabajador::find($id);
        $trabajador->delete();
        return $trabajador;
    }
}
