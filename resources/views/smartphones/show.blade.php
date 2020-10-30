<html>
    <head>
        <title>{{$smartphone->nom}}</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/apple-store.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('navbar')
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $smartphone->nom }}</h1>
                <p class="card-text">{{ $smartphone->caractéristique }}</p>
                <h5>Taille : {{ $smartphone->taille }}</h5>
                <h5>Autonomie : {{ $smartphone->autonomie }}</h5>
                <h1>{{ $smartphone->prix }} €</h1>
                <a href="{{ route('smartphones.edit',$smartphone->id) }}">Editer</a>
                <form action="{{route('smartphones.destroy', $smartphone->id)}}" method="post">
                    <input class="btn btn-danger" type="submit" value="Supprimer">
                </form>
            </div>
        </div>
        @include('footer')
    </body>
</html>