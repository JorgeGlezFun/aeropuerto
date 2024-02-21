<?php

namespace App\Http\Controllers;
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
        Vuelo::create(
            [
                "codigo"=>$request->codigo,
                "compania_id"=>$request->compania_id,
                "n_asientos"=>$request->n_asientos,
                "precio"=>$request->precio,
                "aeropuerto_llegada_id"=>$request->aeropuerto_llegada_id,
                "aeropuerto_salida_id"=>$request->aeropuerto_salida_id,
                "fecha_salida"=>$request->fecha_salida,
                "fecha_llegada"=>$request->fecha_llegada
            ]
        );
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
