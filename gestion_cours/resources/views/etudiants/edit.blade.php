@extends('layouts.layouts');
@section('content')
    ;

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Mettre à jour les informations de étudiant <strong>{{$etudiant->nomEtu}}</strong>
                    </div>
                    <div class="float-end">
                        <a href="{{route('etudiants.index')}}" class="btn btn-primary btn-sm">&larr; retour </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('etudiants.update', $etudiant->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row">
                            <label for="nomEtu" class="col-md-4 col-form-label text-md-end text-start">
                                Nom
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nomEtu')  is-invalid @enderror" id="nomEtu"
                                       name="nomEtu" value="{{$etudiant->nomEtu}}">
                                @if($errors->has('nomEtu'))
                                    <span class="text-danger">
                                        {{$errors->first('nomEtu')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="prenomEtu" class="col-md-4 col-form-label text-md-end text-start">
                                Prenom
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('prenomEtu')  is-invalid @enderror" id="prenomEtu"
                                       name="prenomEtu" value="{{$etudiant->prenomEtu}}">
                                @if($errors->has('prenomEtu'))
                                    <span class="text-danger">
                                        {{$errors->first('prenomEtu')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="dateNaiss" class="col-md-4 col-form-label text-md-end text-start">
                                Date de naissance
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('dateNaiss')  is-invalid @enderror" id="dateNaiss"
                                       name="dateNaiss" value="{{$etudiant->dateNaiss}}">
                                @if($errors->has('dateNaiss'))
                                    <span class="text-danger">
                                        {{$errors->first('dateNaiss')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="sexe" class="col-md-4 col-form-label text-md-end text-start">
                                Sexe
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('sexe')  is-invalid @enderror" id="sexe"
                                       name="sexe" value="{{$etudiant->sexe}}">
                                @if($errors->has('sexe'))
                                    <span class="text-danger">
                                        {{$errors->first('sexe')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-start">
                                Email
                            </label>
                            <div class="col-md-6">
                                <input type="email" class="form-control @error('email')  is-invalid @enderror" id="email"
                                       name="email" value="{{$etudiant->email}}">
                                @if($errors->has('email'))
                                    <span class="text-danger">
                                        {{$errors->first('email')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="localite" class="col-md-4 col-form-label text-md-end text-start">
                                Localité
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('localite')  is-invalid @enderror" id="localite"
                                       name="localite" value="{{$etudiant->localite}}">
                                @if($errors->has('localite'))
                                    <span class="text-danger">
                                        {{$errors->first('localite')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="tel" class="col-md-4 col-form-label text-md-end text-start">
                                Téléphone
                            </label>
                            <div class="col-md-6">
                                <input type="tel" class="form-control @error('tel')  is-invalid @enderror" id="tel"
                                       name="tel" value="{{$etudiant->tel}}">
                                @if($errors->has('tel'))
                                    <span class="text-danger">
                                        {{$errors->first('tel')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Metrre à jour le cours">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
