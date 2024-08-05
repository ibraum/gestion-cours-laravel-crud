@extends('layouts.layouts');
@section('content')
    ;

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Ajout nouveau cour
                    </div>
                    <div class="float-end">
                        <a href="{{route('cours.index')}}" class="btn btn-success btn-sm">&larr; retour </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('cours.store')}}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="libelCour" class="col-md-4 col-form-label text-md-end text-start">
                                Nom cour
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('libelCour')  is-invalid @enderror" id="libelCour"
                                       name="libelCour" value="{{old('libelCour')}}" placeholder="Entrer le libele du cour">
                                @if($errors->has('libelCour'))
                                    <span class="text-danger">
                                        {{$errors->first('libelCour')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-md-4 col-form-label text-md-end text-start">
                                Description
                            </label>
                            <div class="col-md-6">
                            <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                                      id="description" name="description" placeholder="Description ...">
                                {{old('description')}}
                            </textarea>
                                @if($errors->has('description'))
                                    <span class="text-danger">
                                        {{$errors->first('description')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="professeur" class="col-md-4 col-form-label text-md-end text-start">
                                Professeur
                            </label>
                            <div class="col-md-6">
                                <input type="text"
                                       class="form-control @error('professeur') is-invalid @enderror" id="professeur"
                                       name="professeur" value="{{old('professeur')}}" placeholder="Chargé du cour">
                                @if($errors->has('professeur'))
                                    <span class="text-danger">
                                        {{$errors->first('professeur')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="heures" class="col-md-4 col-form-label text-md-end text-start">
                                Heures
                            </label>
                            <div class="col-md-6">
                                <input type="number"
                                       class="form-control @error('heures') is-invalid @enderror" id="heures"
                                       name="heures" value="{{old('heures')}}" placeholder="Nombres d'heures">
                                @if($errors->has('heures'))
                                    <span class="text-danger">
                                        {{$errors->first('heures')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="credit" class="col-md-4 col-form-label text-md-end text-start">
                                Crédit(s)
                            </label>
                            <div class="col-md-6">
                                <input type="number" min="1"
                                       class="form-control @error('credit') is-invalid @enderror" id="credit" name="credit"
                                       value="{{old('credit')}}" placeholder="Nombre de crédit">
                                @if($errors->has('credit'))
                                    <span class="text-danger">
                                        {{$errors->first('credit')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-success" value="Ajouter le cours">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
