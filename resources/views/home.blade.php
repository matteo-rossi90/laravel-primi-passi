<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    {{-- stampare il titolo --}}
    <h1>{{ $title }}</h1>

    {{--  stampare il sottotitolo --}}
    <h2>{{ $merch }}</h2>

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

</body>
</html>
