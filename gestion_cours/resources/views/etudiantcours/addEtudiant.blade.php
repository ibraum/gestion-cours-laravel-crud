@extends('layouts.layouts');
@section('content')
    ;

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Ajout un étudiant à un cours
                    </div>
                    <div class="float-end">
                        <a href="{{route('etudiantcours.index')}}" class="btn btn-warning btn-sm">&larr; retour </a>
                    </div>
                </div>

                        <div class="mb-3 row mt-5">
                            <label for="nomEtu" class="col-md-4 col-form-label text-md-end text-start">
                                Choisissez le de l'étudiant(s)
                            </label>
                            <div class="col-md-6">
                                <select name="nomEtu" class="col-md-8 expand rounded" >
                                    @foreach($etudiants as $etudiant)
                                        <option value="{{$etudiant->id}}">{{$etudiant->nomEtu}}&nbsp;{{$etudiant->prenomEtu}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('nomEtu'))
                                    <span class="text-danger">
                                        {{$errors->first('nomEtu')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="card-body">
                    <form action="{{route('etudiantcours.index')}}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="libelCour" class="col-md-4 col-form-label text-md-end text-start">
                                Libellé du cour
                            </label>
                            <div class="col-md-6">
                                <select name="libelCour" class="col-md-8 expand rounded" multiple>
                                    @foreach($cours as $cour)
                                        <option value="{{$cour->id}}">{{$cour->libelCour}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('libelCour'))
                                    <span class="text-danger">
                                        {{$errors->first('libelCour')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-warning" value="Ajouter le cours">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
