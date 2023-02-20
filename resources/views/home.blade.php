<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>candidature</title>

<body>

    </head>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Accueil
                <i class="fa-solid fa-house-user"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">



                </ul>

            </div>
        </div>
    </nav>


    <div class="jumbotron">
        <h1 class="display-4   text-center" >Gestion de Candidature</h1>
        <p class="lead">ISI propose un programme intense de 980 heures déroulé sur 6 à 9 mois. Parallèlement un stage
            de qualité de 3 à 6 mois pouvant déboucher sur un embauchement est garanti à chacun de ses apprenants.</p>
        <hr class="my-4">
        <div class="jumbotron">
          <div style="background:#AED6F1; border-radius:90px;padding:10px">
            <h1 style="font-size:30px; color:white" class="text-center">choisir un type de referentiel </h1>
        </div>
        </div>
<br>
        <div class="row">
            @foreach ($types as $type)
                <div class="col-md-6 text-center">
                    <a class="btn btn-primary btn-lg" href="/types/{{ $type['id'] }}" role="button">
                        {{ $type['libelle'] }}
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            @endforeach
        </div>
          


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/280d9e6bc7.js" crossorigin="anonymous"></script>
</body>

</html>
