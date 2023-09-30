<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = new Producto();
        return $productos->all(); 
    }

    public function create(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();
        return $producto;
    }

    public function show($id)
    {
        $producto = new Producto();
        return $producto->find($id);
    }

    public function update($id, Request $request)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();
        return $producto;
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return $producto;
    }
}
