<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/js/app.js')
</head>

<body>
    {{-- CARD BOOTSTRAP --}}
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
    </div>

    <main>
        <section class="container">
            <h1>BEST FILM</h1>
            <div class="row">
                @forelse($movies as $movie)
                    <div class="col-3">
                        <h5>{{ $house->reference }}</h5>
                    </div>

                @empty

                    <div class="col-12">
                        <h5>NESSUN FILM TROVATO</h5>
                    </div>
                @endforelse
            </div>
        </section>
    </main>
</body>

</html>
