<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL MODEL & CONTROLLER</title>
    @vite('resources/js/app.js')
</head>

<body>

    <div class="container">
        <div class="row row-cols-2">
            @foreach ($movies as $movie)
                <div class="card col-6 text-center my-3">
                    <img src="" class="card-img-top" alt="COPERTINA">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="text-muted">{{ $movie->directory }}</h6>
                        <h6 class="text-muted">{{ $movie->genre }}</h6>
                        <p class="card-text">{{ $movie->description }}</p>
                        <a href="#" class="btn btn-primary">Go to streaming</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</body>

</html>
