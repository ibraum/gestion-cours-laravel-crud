@extends('layouts.layouts');
@section('content');
<h3 class="mt-5">Listes des etudiants</h3>
<div class="row justify-content-center text-center mt-3">
    <div class="col-md-12">
        @if($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
        @endif
        <div class="card border border-3">
            <div class="card-header"></div>
            <div class="card-body">
                <a href="{{route('etudiants.create')}}" class="btn btn-warning btn-sn my-2 text-dark">
                    <i class="bi bi-plus-circle"></i>
                    Ajouter un étudiant
                </a>
                <table class="table table-striped table-bordered bg-warning">
                    <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de naissance</th>
                        <th>Sexe</th>
                        <th>Email</th>
                        <th>Localité</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($etudiants as $etudiant)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$etudiant->id}}</td>
                            <td>{{$etudiant->nomEtu}}</td>
                            <td>{{$etudiant->prenomEtu}}</td>
                            <td>{{$etudiant->dateNaiss}}</td>
                            <td>{{$etudiant->sexe}}</td>
                            <td>{{$etudiant->email}}</td>
                            <td>{{$etudiant->localite}}</td>
                            <td>{{$etudiant->tel}}</td>
                            <td>
                                <form action="{{route('etudiants.destroy', $etudiant->id)}}" method="post" class="d-flex justify-content-between">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{route('etudiants.show', $etudiant->id)}}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-eye"></i>&nbsp;&nbsp;Show
                                    </a>

                                    <a href="{{route('etudiants.edit', $etudiant->id)}}" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i>&nbsp;&nbsp;Edit
                                    </a>

                                    <button type="submit" onclick="return confirm('Voulez-vous supprimer ce étudiant ?')" class="btn btn-danger btn-sm" value="Delete">
                                        <i class="bi bi-trash"></i>&nbsp;&nbsp;Delete
                                    </button>

                                    <a href="{{route('cours.showCours', $etudiant->id)}}" class="btn btn-success btn-sm">
                                        <i class="bi bi-book"></i></i>&nbsp;&nbsp;Cours
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10">
                                        <span class="text-danger">
                                            Pas d'étudiant trouvé !
                                        </span>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$etudiants->links()}}
            </div>
        </div>

    </div>
</div>
@endsection
