<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Application de gestion de cours à ESGIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body class="">

<div class="container table-bordered">
    <nav class="navbar navbar-expand-lg bg-primary rounded text-white p-3" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white fw-bold fs-4 {{'/etudiants' == request()->path() ? 'text-dark' : ''}}" id="one" aria-current="page" href="{{route('etudiants.index')}}">Etudiants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fw-bold fs-4" id="two" href="{{route('cours.index')}}">Cours</a>
                    </li>
                    <li class="nav-item  text-white fw-bold fs-4">
                        <a class="nav-link active text-white " id="three" aria-disabled="true" href="{{route('etudiantcours.index')}}">Liste des inscriptions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row justify-content-center text-center mt-3">
        <div class="col-md-12">
            @yield('content')
            <p>

            </p>
        </div>
    </div>
</div>
<script type="text/javascript">
    let one = document.getElementById("one");
    let two = document.getElementById("two");
    let three = document.getElementById("three");

    one.onclick = function () {
        one.style.color = "black";
        two.style.color = "white";
        three.style.color = "white";
    }

    two.onclick = function () {
        one.style.color = "white";
        two.style.color = "black";
        three.style.color = "white";
    }

    three.onclick = function () {
        one.style.color = "white";
        two.style.color = "white";
        three.style.color = "black";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
