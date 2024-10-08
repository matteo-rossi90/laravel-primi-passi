<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <title>Laravel - Primi passi</title>
    <style>

        ul{
            list-style-type: none;
        }
        .red {
            color: red;
        }

        .green {
            color: green;
        }

    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home')}}">Cartoleria</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container py-4">
            {{-- stampare il titolo --}}
            <h1 class="py-2">{{ $title }}</h1>

            {{--  stampare il sottotitolo --}}
            <h3 class="py-2">{{ $merch }}</h3>

            {{-- stampare gli elementi di cartoleria attraverso il foreach --}}
            <ul>
                @foreach($objects as $articolo)
                    {{-- se l'articolo è venduto sarà stampato in rosso --}}
                    @if($articolo['sold'])
                        <li class="red">{{$loop->iteration}} - {{ $articolo['name']}} - {{ $articolo['category']}}</li>
                    {{-- altrimenti in verde --}}
                    @else
                        <li class="green">{{$loop->iteration}} - {{ $articolo['name']}} - {{ $articolo['category']}}</li>
                    @endif
                @endforeach

            </ul>

        </div>

    </main>

</body>
</html>
