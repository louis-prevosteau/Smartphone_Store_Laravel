<html>
    <head>
        <title>Liste des smartphones</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/apple-store.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('navbar')
        <h2>La liste des produits</h2>
        @if(!empty($smartphones))
            <div class="row">
                @foreach($smartphones as $smartphone)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('smartphones.show', $smartphone->id) }}">{{ $smartphone->nom }}</a></h5>
                                <p class="card-text">{{ $smartphone->caractéristique }}</p>
                                <h4>{{ $smartphone-> prix }} €</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h3>aucun smartphone</h3>
        @endif
        @include('footer')
    </body>
</html>