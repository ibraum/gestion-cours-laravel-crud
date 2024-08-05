
@extends('layouts.layouts');
@section('content');
<h3 class="mt-5">Listes des étudiants par cour</h3>
<div class="row justify-content-center text-center mt-3">
    <div class="col-md-12">
        @if($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
        @endif
        <div class="card border border-3">
            <div class="card-header">
            </div>
            <div class="card-body">
                <a href="{{route("/etudiants/addCour")}}" class="btn btn-danger btn-sn my-2 text-white">
                    <i class="bi bi-plus-circle"></i>
                    Ajouter cours à un étudiant
                </a>

                <a href="addEtudiant" class="btn btn-warning btn-sn my-2 text-dark">
                    <i class="bi bi-plus-circle"></i>
                    Ajouter un étudiant à un cour
                </a>

                @forelse($etudiants as $etudiant)
                    <h4 class="float-start text-dark fs-6">Libelé</h4>
                    <h4 class="float-start text-danger fs-3">{{$etudiant->libelCour}}</h4>

                    <table class="table table-striped table-bordered bg-warning">
                        <thead>
                        <tr>
                            <th>Numéro</th>
                            <th>Id cour</th>
                            <th>Libelé cour</th>
                            <th>Id etudiant</th>
                            <th>Nom étudiant</th>
                            <th>Prenom étudiant</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($etudiant->cours as $cour)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$etudiant->id}}</td>
                                <td>{{$etudiant->nomEtu}}</td>
                                <td>{{$etudiant->prenomEtu}}</td>
                                <td>{{$cour->id}}</td>
                                <td>{{$cour->libelCour}}</td>
                                <td>
                                    <form action="{{route('cours.destroy', $cour->id)}}" method="post" class="d-flex justify-content-between">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{route('cours.show', $cour->id)}}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-eye"></i>&nbsp;&nbsp;Show
                                        </a>

                                        <a href="{{route('cours.edit', $cour->id)}}" class="btn btn-primary btn-sm">
                                            <i class="bi bi-pencil-square"></i>&nbsp;&nbsp;Edit
                                        </a>

                                        <button type="submit" onclick="return confirm('Voulez-vous supprimer ce étudiant ?')" class="btn btn-danger btn-sm" value="Delete">
                                            <i class="bi bi-trash"></i>&nbsp;&nbsp;Delete
                                        </button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @empty
                            <tr>
                                <td colspan="9">
                                        <span class="text-danger">
                                            Pas de cours trouvé pour ce étudiant !
                                        </span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                @endforelse
            </div>
        </div>
        {{$cours->links()}}
    </div>
</div>
@endsection
