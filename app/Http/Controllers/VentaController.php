<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventasventa = new Venta();
        return $ventasventa->all(); 
    }

    public function create(Request $request)
    {
        $venta = new Venta();
        $venta->id_productos = $request->id_productos;
        $venta->id_clientes = $request->id_clientes;
        $venta->id_trabajador = $request->id_trabajador;
        $venta->save();
        return $venta;
    }

    public function show($id)
    {
        $venta = new Venta();
        return $venta->find($id);
    }

    public function update($id, Request $request)
    {
        $venta = Venta::find($id);
        $venta->id_productos = $request->id_productos;
        $venta->id_clientes = $request->id_clientes;
        $venta->id_trabajador = $request->id_trabajador;
        $venta->save();
        return $venta;
    }

    public function destroy($id)
    {
        $venta = Venta::find($id);
        $venta->delete();
        return $venta;
    }
}
