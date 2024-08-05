<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use App\Models\Etudiant;
use App\Models\EtudiantCour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EtudiantCourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return View("etudiantcours.index",  ['cours' => Cour::all(), 'etudiants' => Etudiant::all()]);
    }

    public function index2() : View
    {
        return View("etudiantcours.index2",  ['etudiants' => Etudiant::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EtudiantCour $etudiantCour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EtudiantCour $etudiantCour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EtudiantCour $etudiantCour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Cour $cour) : redirectresponse
    {
        $etudiant = Etudiant::find($request->input('etu_id'));
        $etudiant->cours()->detach($request->input('cour_id'));

        return redirect()->route('cours.showCours', $request->input('etu_id'))
            ->withSuccess("Cour retiré à l'étudiant avec success");
    }

    public function addEtudiant() : View
    {
        return View("etudiantcours.addEtudiant", ['cours' => Cour::all(), 'etudiants' => Etudiant::all()]);
    }


    public function addCour(Etudiant $etudiant) : View
    {
        return View("etudiantcours.addCour", ['cours' => Cour::all(), 'etudiant' => $etudiant]);
    }

}
