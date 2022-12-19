<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="p-5 mb-4 bg-light rounded-3 text-center">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Welcome to Lara-Movies-Library</h1>
            <p class="col-md-8 fs-4">Find out our amazing movies collection</p>
            <button class="btn btn-primary btn-lg" type="button">Find out more</button>
        </div>
    </div>
    <div class="content">
        <div class="container my-5">
            <div class="row g-4">
                @forelse($movies as $movie)
                <div class="col-6">
                    <div class="card">
                        <!-- <img src="{{$movie->cover_image}}" alt="" class="card-img-top img-fluid w-50"> -->
                        <div class="card-body">
                            <h3>{{$movie->title}}</h3>
                            <p>{{$movie->original_title}}</p>
                            <p>{{$movie->date}} <span> voto: {{$movie->vote}} </span></p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p>
                        🙄 Sorry, no movies in the labrary yet.
                    </p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</body>

</html>