<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Treni</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <div class="container">
            <h1 class="my-3 text-center">Treni</h1>
            <div class="row g-3 justify-content-center">
                @foreach ($trainsList as $train)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$train->azienda}}</h5>
                            <h6 class="card-subtitle">{{$train->stazione_di_partenza}} - {{$train->stazione_di_arrivo}} </h6>
                            <span class="d-block card-text">Partenza: {{$train->orario_di_partenza}}</span>
                            <span class="d-block card-text">Arrivo: {{$train->orario_di_arrivo}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>