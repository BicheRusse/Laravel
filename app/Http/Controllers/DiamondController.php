<?php

namespace App\Http\Controllers;

use App\Models\Diamond;
use Illuminate\Http\Request;

class DiamondController extends Controller
{
    // Affiche la liste des diamants
    public function index()
    {
        $diamonds = Diamond::all();
        return view('diamonds.index', compact('diamonds'));
    }

    // Affiche le formulaire de création
    public function create()
    {
        return view('diamonds.create');
    }

    // Stocke un diamant dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required|integer',
            'name' => 'required|string',
            'desc' => 'required|string',
            'purchase_date' => 'required|date',
        ]);

        Diamond::create($request->all());

        return redirect()->route('diamonds.index')->with('success', 'Diamond created successfully.');
    }

    // Affiche un diamant
    public function show(Diamond $diamond)
    {
        return view('diamonds.show', compact('diamond'));
    }

    // Affiche le formulaire de modification
    public function edit(Diamond $diamond)
    {
        return view('diamonds.edit', compact('diamond'));
    }

    // Met à jour un diamant
    public function update(Request $request, Diamond $diamond)
    {
        $request->validate([
            'price' => 'required|integer',
            'name' => 'required|string',
            'desc' => 'required|string',
            'purchase_date' => 'required|date',
        ]);

        $diamond->update($request->all());

        return redirect()->route('diamonds.index')->with('success', 'Diamond updated successfully.');
    }

    // Supprime un diamant
    public function destroy(Diamond $diamond)
    {
        $diamond->delete();

        return redirect()->route('diamonds.index')->with('success', 'Diamond deleted successfully.');
    }
}
