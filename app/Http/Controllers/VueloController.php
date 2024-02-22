<?php

namespace App\Http\Controllers;

use App\Models\Aeropuerto;
use App\Models\Compania;
use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vuelos.index', ['vuelos'=>Vuelo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vuelos.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $vuelo = new Vuelo();
        $vuelo->codigo = $request->codigo;
        $vuelo->compania_id = Compania::where('nombre', $request->compania)->first()->id;
        $vuelo->n_asientos = $request->n_asientos;
        $vuelo->precio = $request->precio;
        $vuelo->aeropuerto_llegada_id = Aeropuerto::where('nombre', $request->aeropuerto_llegada)->first()->id;
        $vuelo->aeropuerto_salida_id = Aeropuerto::where('nombre', $request->aeropuerto_salida)->first()->id;
        $vuelo->fecha_llegada = $request->fecha_llegada;
        $vuelo->fecha_salida = $request->fecha_salida;

        $vuelo->save();


        session()->flash('success', 'El vuelo se ha creado correctamente.');
        return redirect()->route('vuelos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vuelo $vuelo)
    {
        return view('vuelos.show', ['vuelo' => $vuelo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vuelo $vuelo)
    {
        return view('vuelos.edit', ['vuelo' => $vuelo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vuelo $vuelo)
    {
        $vuelo->update(
            [
                'user_id'=>$request->user_id,
                'vuelo_id'=>$request->vuelo_id,
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vuelo $vuelo)
    {
        Vuelo::destroy($vuelo->id);
        return redirect()->route('vuelos.index');
    }
}
