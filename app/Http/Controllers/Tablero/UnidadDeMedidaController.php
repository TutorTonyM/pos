<?php

namespace App\Http\Controllers\Tablero;

use App\Http\Controllers\Controller;
use App\Models\UnidadDeMedida;
use Illuminate\Http\Request;

class UnidadDeMedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenadoPor = request()->has('ordenadoPor') ? request('ordenadoPor') : 'nombre';
        $orden = request()->has('orden') ? request('orden') : 'asc';
        $unidades = UnidadDeMedida::orderBy($ordenadoPor, $orden)->paginate(10);
        $claseOrden = ['campo' => $ordenadoPor, 'clase' => $orden];
        return view('tablero.unidades.index', compact('unidades', 'claseOrden'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UnidadDeMedida  $unidadDeMedida
     * @return \Illuminate\Http\Response
     */
    public function show(UnidadDeMedida $unidadDeMedida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UnidadDeMedida  $unidadDeMedida
     * @return \Illuminate\Http\Response
     */
    public function edit(UnidadDeMedida $unidadDeMedida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UnidadDeMedida  $unidadDeMedida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnidadDeMedida $unidadDeMedida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UnidadDeMedida  $unidadDeMedida
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnidadDeMedida $unidadDeMedida)
    {
        //
    }
}
