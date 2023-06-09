<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            //On récupère tous les Entreprise
    $entreprises = Entreprise::latest()->get();

    // On transmet les Entreprise à la vue
    return view("entreprise.index", compact("entreprises"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("entreprise.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // 1. La validation
        $this->validate($request, [
        'nom' => 'bail|required|string|max:255',
        "responsable" => 'bail|required',
        "telephone" => 'bail|required',
    ]);


    Entreprise::create([
        "nom" => $request->nom,
        "responsable" => $request->responsable,
        "telephone" => $request->telephone,
        "telephone2" => $request->telephone2,
        "adresse" => $request->adresse,
        "ville_id" => $request->ville_id,
        "quartier_id" => $request->quartier_id,
        "description" => $request->description,
        "user_id" => Auth::user()->id,


    ]);

    return redirect(route("entreprises.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprise)
    {
        return view("entreprise.details", compact("entreprise"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }
}
