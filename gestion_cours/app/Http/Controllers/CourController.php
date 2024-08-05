<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourRequest;
use App\Http\Requests\StoreEtudiantRequest;
use App\Http\Requests\UpdateCourRequest;
use App\Models\Cour;
use App\Models\Etudiant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('cours.index', ['cours' => Cour::latest() -> paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return View('cours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourRequest $request): RedirectResponse
    {
        Cour::create($request->all());
        return redirect()->route('cours.index')->withSuccess('Nouveau cour ajoute avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cour $cour) : View
    {
        return View('cours.show', [
            'cour' => $cour
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cour $cour) : View
    {
        return View('cours.edit', [
            'cour' => $cour
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourRequest $request, Cour $cour) : RedirectResponse
    {
        $cour -> update($request->all());
        return redirect()->route("cours.index")->withSuccess('Cour mis à jour avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cour $cour) : RedirectResponse
    {
        $cour -> delete();
        return redirect()->route('cours.index')
            ->withSuccess('Cour supprimer avec succes');
    }

    public function addEtudiant(StoreEtudiantRequest $request, Cour $cour) : View
    {
        $cour->etudiants()->syncWithoutDetaching($request->id);

        return View("etudiantcours.index");
    }

    public function showEtudiants(Cour $cour) : View
    {
        $etudiants = $cour->etudiants;
        return View("cours.showEtudiants", ['etudiants' => $etudiants, "cour" => $cour]);
    }

    public function showCours(Etudiant $etudiant) : View
    {
        $cours = $etudiant->cours;
        return View("cours.showCours", ['cours' => $cours, "etudiant" => $etudiant]);
    }
}
