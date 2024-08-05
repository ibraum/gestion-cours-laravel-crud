@extends('layouts.layouts');
@section('content');
<div class="row justify-content-center text-center mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Information du cours ({{$cour->libelCour}})
                </div>
                <div class="float-end">
                    <a href="{{route('cours.index')}}" class="btn btn-primary btn-sm">
                        &larr; back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <label for="libelCour" class="col-md-4 col-form-label text-md-end text-start">
                        <strong>libelé du cours </strong>
                    </label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{$cour->libelCour}}
                    </div>
                </div>

                <div class="row">
                    <label for="professeur" class="col-md-4 col-form-label text-md-end text-start">
                        <strong>Professeur </strong>
                    </label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{$cour->professeur}}
                    </div>
                </div>

                <div class="row">
                    <label for="heures" class="col-md-4 col-form-label text-md-end text-start">
                        <strong>Heures: </strong>
                    </label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{$cour->heures}}
                    </div>
                </div>

                <div class="row">
                    <label for="credit" class="col-md-4 col-form-label text-md-end text-start">
                        <strong>Credit: </strong>
                    </label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{$cour->credit}}
                    </div>
                </div>

                <div class="row">
                    <label for="description" class="col-md-4 col-form-label text-md-end text-start">
                        <strong>Description </strong>
                    </label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{$cour->description}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
