<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billete;
use App\Models\User;
use App\Models\Vuelo;

class BilleteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('billetes.index', ['billetes'=>Billete::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('billetes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
/*     public function store(Request $request)
    {
        Billete::create(
            [
                'user_id'=>$request->user_id,
                'vuelo_id'=>$request->vuelo_id,
            ]);
        return redirect()->route('billetes.index');
    } */

    public function store(Request $request)
    {
    // Buscar el vuelo por su código
    $vuelo = Vuelo::where('codigo', $request->codigo_vuelo)->first();

    // Crear un nuevo billete
    $billete = new Billete();
    $billete->vuelo_id = $vuelo->id;
    $billete->user_id = User::where('name', $request->name)->first()->id;
    // Asignar otros datos del billete si es necesario
    $billete->save();

    // Redirigir a la página de detalles del billete o a donde sea necesario
    return redirect()->route('billetes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Billete $billete)
    {
        return view('billetes.show', ['billete' => $billete]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Billete $billete)
    {
        return view('billetes.edit', ['billete' => $billete]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Billete $billete)
    {
        $billete->update(
            [
                'user_id'=>$request->user_id,
                'vuelo_id'=>$request->vuelo_id,
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Billete $billete)
    {
        Billete::destroy($billete->id);
        return redirect()->route('billetes.index');
    }
}
