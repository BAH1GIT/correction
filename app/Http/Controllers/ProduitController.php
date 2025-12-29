<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits=produit::all();
        $categories=categorie::all();
        return view('produits.index',compact('produits','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produits.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'nom' =>'required|string|max:35|min:3|unique:categories,nom',
     ],[
        'nom.required'=>'Le nom de la categorie est obligatoire',
        'nom.string'=>'Le nom de la categorie doit etre une chaine de caractere',
        'nom.max'=>'Le nom de la categorie doit contenir au plus 35 caracteres',
        'nom.min'=>'Le nom de la categorie doit contenir au moins 3 caracteres',
        'nom.unique'=>'Cette categorie existe deja',
        ]);
        Categorie::create($validated);
        return redirect()->route('categorie.index')->with('success','Categorie ajoutee avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}

