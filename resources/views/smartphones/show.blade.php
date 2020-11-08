<html>
    <head>
        <title>{{$smartphone->nom}}</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/apple-store.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('navbar')
        
        @if($action == 'delete')
            <form action="{{route('smartphones.destroy',$smartphone->id)}}" method="POST">
                {{ csrf_field()}}
                {{method_field('DELETE')}}
                <div class="text-center">
                    <button type="submit" name="delete" value="valide">Valide</button>
                    <button type="submit" name="delete" value="annule">Annule</button>
                </div>
            </form>
        @else
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $smartphone->nom }}</h1>
                <p class="card-text">{{ $smartphone->caractéristique }}</p>
                <h5>Taille : {{ $smartphone->taille }}</h5>
                <h5>Autonomie : {{ $smartphone->autonomie }}</h5>
                <h1>{{ $smartphone->prix }} €</h1>
                <a href="{{ route('smartphones.edit',$smartphone->id) }}">Editer</a>
            </div>
        </div>
        @endif
        @include('footer')
    </body>
</html>