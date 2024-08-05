@extends('layouts.layouts');
@section('content')
    ;

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Mettre à jour un cour
                    </div>
                    <div class="float-end">
                        <a href="{{route('cours.index')}}" class="btn btn-primary btn-sm">&larr; retour </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('cours.update', $cour->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row">
                            <label for="libelCour" class="col-md-4 col-form-label text-md-end text-start">
                                Nom cour
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('libelCour')  is-invalid @enderror" id="libelCour"
                                       name="libelCour" value="{{$cour->libelCour}}">
                                @if($errors->has('libelCour'))
                                    <span class="text-danger">
                                        {{$errors->first('libelCour')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-md-4 col-form-label text-md-end text-start">
                                description
                            </label>
                            <div class="col-md-6">
                            <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                                      id="description" name="description">
                                {{$cour->description}}
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
                                       name="professeur" value="{{$cour->professeur}}">
                                @if($errors->has('professeur'))
                                    <span class="text-danger">
                                        {{$errors->first('professeur')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="credit" class="col-md-4 col-form-label text-md-end text-start">
                                Heures
                            </label>
                            <div class="col-md-6">
                                <input type="number" min="1"
                                       class="form-control @error('heures') is-invalid @enderror" id="heures" name="heures"
                                       value="{{$cour->heures}}">
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
                                       class="form-control @error('credits') is-invalid @enderror" id="credit" name="credit"
                                       value="{{$cour->credit}}">
                                @if($errors->has('credit'))
                                    <span class="text-danger">
                                        {{$errors->first('credit')}}
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
