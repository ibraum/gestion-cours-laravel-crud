@extends('layouts.layouts').
@section('content').

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Ajout un cour à un étudiant
                    </div>
                    <div class="float-end">
                        <a href="{{route('etudiants.index')}}" class="btn btn-danger btn-sm">&larr; retour </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route("etudiantcours.ajouterCour", $etudiant->id)}}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="nomEtu" class="col-md-4 col-form-label text-md-end text-start">
                                Libellé du cour
                            </label>
                            <div class="col-md-6">
                                <input type="number" name="nomEtu" class="col-md-8 expand rounded" value="{{$etudiant->id}}" required readonly>
                                @if($errors->has('nomEtu'))
                                    <span class="text-danger">
                                        {{$errors->first('nomEtu')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nomEtu" class="col-md-4 col-form-label text-md-end text-start">
                                Choisissez le ou les cours a affecté(s)
                            </label>
                            <div class="col-md-6">
                                <select name="cour_id[]" multiple class="col-md-8 expand rounded" required>
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
                            <input type="submit" class="col-md-4 offset-md-5 btn btn-danger btn-sm" value="Affecter le cours à l'étudiant">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
