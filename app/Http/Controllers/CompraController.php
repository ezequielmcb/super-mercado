<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        $compras = new Compra();
        return $compras->all(); 
    }

    public function create(Request $request)
    { 
        $compra = new Compra();
        $compra->cantidad = $request->cantidad;
        $compra->precio = $request->precio;
        $compra->id_productos = $request->id_productos;
        $compra->id_clientes = $request->id_clientes;
        $compra->save();
        return $compra;
    }

    public function show($id)
    {
        $compra = new Compra();
        return $compra->find($id);
    }

    public function update($id, Request $request)
    {
        $compra = Compra::find($id);
        $compra->cantidad = $request->cantidad;
        $compra->precio = $request->precio;
        $compra->id_productos = $request->id_productos;
        $compra->id_clientes = $request->id_clientes;
        $compra->save();
        return $compra;
    }

    public function destroy($id)
    {
        $compra = Compra::find($id);
        $compra->delete();
        return $compra;
    }
}
