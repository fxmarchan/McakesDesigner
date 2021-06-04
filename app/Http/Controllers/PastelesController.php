<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\frutas;
use App\Models\insumos;
use App\Models\pasteles;
use App\Models\rellenos;
use App\Models\pedidos;

class PastelesController extends Controller
{
    public function formato()
    {
        return view('FormatoEjecutar');
    }
    public function store()
    {
        pedidos::create([
            'ID'=> request('ID'),
            'FECHAEMISION'=> request('FECHAEMISION'),
            'FECHAENTREGA' => request('FECHAENTREGA'),
            'NOMBRECLI' => request('NOMBRECLI'),
            'VENDEDOR' => request('VENDEDOR'),
            'DESCRIPCION' => request('DESCRIPCION'),
            'COBERTURA' => request('COBERTURA'),
            'DESCRIPASTEL' => request('DESCRIPASTEL'),
            'CANTIDADPORPAS' => request('CANTIDADPORPAS'),
            'PRECIOPORCION' => request('PRECIOPORCION'),
            'PRECIOTOTAL' => request('PRECIOTOTAL'),
            'DESCRIRELLENO' => request('DESCRIRELLENO'),
            'CANTPORCRELLE' => request('CANTPORCRELLE'),
            'PRECIORELLENO' => request('PRECIORELLENO'),
            'DESCRIFRUTA' => request('DESCRIFRUTA'),
            'GRAMOS' => request('GRAMOS'),
            'PRECIOFRUTA' => request('PRECIOFRUTA'),
            'TIPOINSUMO' => request('TIPOINSUMO'),
            'INSUMO' => request('INSUMO'),
            'CANTINSUMO' => request('CANTINSUMO'),
            'PRECIOINSUMO'=> request('PRECIOINSUMO'),
            'PRECIOUNINSUMO'=> request('PRECIOUNINSUMO'),
            'PRECIOPRODUCCION'=> request('PRECIOPRODUCCION'),
            'PORGANANCIA' => request('PORGANANCIA'),
            'GANANCIA' => request('GANANCIA'),
            'PRECIOFINAL' => request('PRECIOFINAL'),
            'PORCESETENTACINCO' => request('PORCESETENTACINCO'),
            'PORCEVEINTECINCO' => request('PORCEVEINTECINCO'),
            'updated_at' => request('updated_at'),
            'created_at' => request('created_at')
        ]); 
        return view('Default');
    }
    public function frutas()
    {
        $frutas = frutas::all();
        return view('frutas', compact('frutas'));
    }
    public function insumos()
    {
        $insumos = insumos::all();
        return view('insumos', compact('insumos'));
    }
    public function pasteles()
    {
        $pasteles = pasteles::all();
        return view('pasteles', compact('pasteles'));
    }
    public function rellenos()
    {
        $rellenos = rellenos::all();
        return view('rellenos', compact('rellenos'));
    }
    public function informe()
    {
        $pedidos = pedidos::all();
        return view('InformeEjecutar', compact('pedidos'));
    }
}
