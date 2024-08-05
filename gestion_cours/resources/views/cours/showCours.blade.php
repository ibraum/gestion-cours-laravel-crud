
@extends('layouts.layouts');
@section('content');
<h3 class="mt-5">Listes des cours de l'étudiant <h2 class="text-danger fw-bolder">{{$etudiant->nomEtu}}&nbsp;{{$etudiant->prenomEtu}}</h2> </h3>
<div class="row justify-content-center text-center mt-3">
    <div class="col-md-12">
        @if($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
        @endif
        <div class="card border border-3">
            <div class="card-header">
                <a href="{{route('etudiants.edit', $etudiant->id)}}" class="btn btn-warning float-start border border-2 border-dark">
                    <i class="bi bi-pencil-square"></i>&nbsp;&nbsp;Edit les informations de l'étudiant concerné
                </a>
                <a href="{{route("etudiants.index")}}" class="btn btn-primary float-end">&larr; retour</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered bg-warning">
                    <thead>
                    <tr>
                        <th>Nbr de cours</th>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Professeur</th>
                        <th>Heures</th>
                        <th>Crédits</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($cours as $cour)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$cour->id}}</td>
                            <td>{{$cour->libelCour}}</td>
                            <td>{{$cour->professeur}}</td>
                            <td>{{$cour->heures}}</td>
                            <td>{{$cour->credit}}</td>
                            <td>
                                <form action="{{route('etudiantcours.destroy', $cour->id)}}" method="post" class="d-flex justify-content-between">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{route('cours.show', $cour->id)}}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-eye"></i>&nbsp;&nbsp;Show
                                    </a>

                                    <a href="{{route('cours.edit', $cour->id)}}" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i>&nbsp;&nbsp;Edit
                                    </a>
                                    <input type="number" name="cour_id" hidden  value="{{$cour->id}}">
                                    <input type="number" name="etu_id" hidden value="{{$etudiant->id}}">

                                    <button type="submit" onclick="return confirm('Voulez-vous supprimer ce cour de l\'étudiant?')" class="btn btn-danger btn-sm" value="Delete">
                                        <i class="bi bi-trash"></i>&nbsp;&nbsp;Delete
                                    </button>

                                    <a href="{{route('cours.showEtudiants', $cour->id)}}" class="btn btn-success btn-sm">
                                        <i class="bi bi-person"></i>&nbsp;&nbsp;Etudiants
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">
                                        <span class="text-danger">
                                            Pas de cours trouvé !
                                        </span>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
