<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourRequest;
use App\Http\Requests\StoreEtudiantRequest;
use App\Http\Requests\UpdateEtudiantRequest;
use App\Models\Cour;
use App\Models\Etudiant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('etudiants.index', ['etudiants' => Etudiant::latest() -> paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return View('etudiants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEtudiantRequest $request): RedirectResponse
    {
        Etudiant::create($request->all());
        return redirect()->route('etudiants.index')->withSuccess('Nouveau cour ajoute avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant) : View
    {
        return View('etudiants.show', [
            'etudiant' => $etudiant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant) : View
    {
        return View('etudiants.edit', [
            'etudiant' => $etudiant
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEtudiantRequest $request, Etudiant $etudiant) : RedirectResponse
    {
        $etudiant -> update($request->all());
        return redirect()->route("etudiants.index")->withSuccess('Information(s) de l\'étudiant sont/est mis à jour avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant) : RedirectResponse
    {
        $etudiant -> delete();
        return redirect()->route('etudiants.index')
            ->withSuccess('Etudiant supprimer avec succes');
    }

    public function ajouterCour(Request $request): RedirectResponse
    {
            $etudiant = Etudiant::findOrFail($request->input('nomEtu'));
            $etudiant->cours()->syncWithoutDetaching($request->input('cour_id',[]));
            return redirect()->route("cours.showCours", $request->input('nomEtu'))->withSuccess('Le cours a été ajouté à l\'étudiant avec succès.');
    }

}
