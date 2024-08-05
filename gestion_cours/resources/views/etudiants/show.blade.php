@extends('layouts.layouts');
@section('content');
<div class="row justify-content-center text-center mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start text-start">
                     <div class="fs-5 fw-bold">Information sur l'étudiant</div>
                </div>
                <div class="float-end">
                    <a href="{{route('etudiants.index')}}" class="btn btn-primary btn-sm">
                        &larr; back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <label for="nomEtu" class="col-md-4 col-form-label text-end">
                        <strong>Nom </strong>
                    </label>
                    <div class="col-md-6 text-end" style="line-height: 35px;">
                        {{$etudiant->nomEtu}}
                    </div>
                </div>

                <div class="row">
                    <label for="prenomEtu" class="col-md-4 col-form-label text-md-end text-start">
                        <strong>Prénom </strong>
                    </label>
                    <div class="col-md-6 text-end" style="line-height: 35px;">
                        {{$etudiant->prenomEtu}}
                    </div>
                </div>

                <div class="row">
                    <label for="dateNaiss" class="col-md-4 col-form-label text-md-end text-start">
                        <strong>Date de naissance </strong>
                    </label>
                    <div class="col-md-6 text-end" style="line-height: 35px;">
                        {{$etudiant->dateNaiss}}
                    </div>
                </div>

                <div class="row">
                    <label for="sexe" class="col-md-4 col-form-label text-md-end text-start">
                        <strong>Sexe </strong>
                    </label>
                    <div class="col-md-6 text-end" style="line-height: 35px;">
                        {{$etudiant->sexe}}
                    </div>
                </div>

                <div class="row">
                    <label for="email" class="col-md-4 col-form-label text-md-end text-start">
                        <strong>Email </strong>
                    </label>
                    <div class="col-md-6 text-end" style="line-height: 35px;">
                        {{$etudiant->email}}
                    </div>
                </div>

                <div class="row">
                    <label for="localite" class="col-md-4 col-form-label text-md-end text-start">
                        <strong>Localité </strong>
                    </label>
                    <div class="col-md-6 text-end" style="line-height: 35px;">
                        {{$etudiant->localite}}
                    </div>
                </div>

                <div class="row">
                    <label for="tel" class="col-md-4 col-form-label text-md-end text-start">
                        <strong>Téléphone </strong>
                    </label>
                    <div class="col-md-6 text-end" style="line-height: 35px;">
                        {{$etudiant->tel}}
                    </div>
                </div>
                <a href="{{route("etudiantcours.addCour", $etudiant->id)}}" class="btn btn-primary btn-sm float-end">
                    Ajouter un ou des cours
                </a>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
