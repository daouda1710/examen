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
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Acceuil</a>
                </li>

        </div>
        <div class="card-header mt-4 text-center text-dark">Formation {{ $referentiel['libelle'] }}</div>

        <div class="row">
            @forelse ($referentiel->formations as $formation )
                
            <div class="col-md-6 text-center">
                {{ $formation['nom'] }}
            </div>

            <div class="col-md-6 text-center">
              duree:  {{ $formation['duree'] }} mois
            </div>

            <div class="col-md-6 text-center">
                description:  {{ $formation['description'] }}
              </div>
              <div class="card-footer">
            <a href="/formulaire/{{ $formation['id'] }}" class="btn btn-primary">s'inscrire </a>  <br>
            
              </div>
            @empty
            <div>
                <p class="text-center">formation non disponible</p>
            </div>
                
            @endforelse

        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/280d9e6bc7.js" crossorigin="anonymous"></script>
</body>

</html>
