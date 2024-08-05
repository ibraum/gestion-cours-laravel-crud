<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EtudiantCourController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/cours',CourController::class);
Route::resource('/etudiants', EtudiantController::class);
Route::resource('/etudiantcours', EtudiantCourController::class);

Route::get('/etudiantcours/index2', [EtudiantCourController::class, 'index2'])->name("etudiantcours.index2");

Route::get('/etudiantcours/addCour/{etudiant}', [EtudiantCourController::class, 'addCour'])->name("etudiantcours.addCour");

Route::get('/etudiantcours/addEtudiant', [EtudiantCourController::class, 'addEtudiant'])->name("etudiantcours.addEtudiant");

Route::post('/ajouterCour', [EtudiantController::class, 'ajouterCour'])->name("etudiantcours.ajouterCour");

Route::get('/cours/showEtudiants/{cour}', [CourController::class, 'showEtudiants'])->name("cours.showEtudiants");
Route::get('/cours/showCours/{etudiant}', [CourController::class, 'showCours'])->name("cours.showCours");



