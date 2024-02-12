<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commune;
use App\Models\Departement;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $communes = Commune::all();
        $departements = Departement::all();
        // $communes = Commune::simplePaginate(7);
        return view("communes.index",compact('communes','departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = Departement::all();
        return view('communes.create', compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|unique:communes,nom'
        ]);
        Commune::create([
            'nom' => $request->nom,
            'id_departement' => $request->id_departement,
       ]);
        return redirect()->route('communes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Commune $commune)
    {
        return view('communes.show',compact('commune'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commune $commune)
    {
        $departements = Departement::all();
        return view('communes.edit',compact('commune','departements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commune $commune)
    {
        $commune->update($request->all());
        return redirect()->route('communes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commune $commune)
    {
        $commune->delete();
        return redirect()->route('communes.index');
    }
}
