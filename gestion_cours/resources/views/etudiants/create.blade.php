@extends('layouts.layouts');
@section('content')
    ;

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Ajout nouvel étudiant
                    </div>
                    <div class="float-end">
                        <a href="{{route('etudiants.index')}}" class="btn btn-warning text-dark btn-sm">&larr; retour </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('etudiants.store')}}" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label for="nomEtu" class="col-md-4 col-form-label text-md-end text-start">
                                Nom étudiant
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nomEtu')  is-invalid @enderror" id="nomEtu"
                                       name="nomEtu" placeholder="Entrer le nom">
                                @if($errors->has('nomEtu'))
                                    <span class="text-danger">
                                        {{$errors->first('nomEtu')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="prenomEtu" class="col-md-4 col-form-label text-md-end text-start">
                                Prénom étudiant
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('prenomEtu')  is-invalid @enderror" id="prenomEtu"
                                       name="prenomEtu" placeholder="Entrer le prenom">
                                @if($errors->has('prenomEtu'))
                                    <span class="text-danger">
                                        {{$errors->first('prenomEtu')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="dateNaiss" class="col-md-4 col-form-label text-md-end text-start">
                                Date de naissance de l'étudiant
                            </label>
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('dateNaiss')  is-invalid @enderror" id="dateNaiss"
                                       name="dateNaiss" placeholder="">
                                @if($errors->has('dateNaiss'))
                                    <span class="text-danger">
                                        {{$errors->first('dateNaiss')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="sexe" class="col-md-4 col-form-label text-md-end text-start">
                                Sexe de l'étudiant
                            </label>
                            <div class="col-md-6">
                                <select class="form-control @error('sexe')  is-invalid @enderror" id="sexe"
                                        name="sexe">
                                    <option value="">Selectionner le sexe</option>
                                    <option value="Masculin">Masculin</option>
                                    <option value="Feminin">Feminin</option>
                                </select>
                                @if($errors->has('sexe'))
                                    <span class="text-danger">
                                        {{$errors->first('sexe')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-start">
                                email de l'étudiant
                            </label>
                            <div class="col-md-6">
                                <input type="email" class="form-control @error('email')  is-invalid @enderror" id="email"
                                       name="email" placeholder="Entrer l'email">
                                @if($errors->has('email'))
                                    <span class="text-danger">
                                        {{$errors->first('email')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="localite" class="col-md-4 col-form-label text-md-end text-start">
                                Localite de l'étudiant
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('localite')  is-invalid @enderror" id="localite"
                                       name="localite" placeholder="Votre localité">
                                @if($errors->has('localite'))
                                    <span class="text-danger">
                                        {{$errors->first('localite')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="tel" class="col-md-4 col-form-label text-md-end text-start">
                                Téléphone del'étudiant
                            </label>
                            <div class="col-md-6">
                                <input type="tel" class="form-control @error('tel')  is-invalid @enderror" id="tel"
                                       name="tel" placeholder="">
                                @if($errors->has('tel'))
                                    <span class="text-danger">
                                        {{$errors->first('tel')}}
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-warning text-dark" value="Enregistrer les informations">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
