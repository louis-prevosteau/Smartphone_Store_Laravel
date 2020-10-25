<html>
    <head>
        <title>{{$smartphone->nom}}</title>
    </head>
    <body>
        <h1>{{ $smartphone->nom }}</h1>
        <h2>{{ $smartphone->taille }}</h2>
        <p>{{ $smartphone->caractéristique }}</p>
        <h1>{{ $smartphone->prix }} Euros</h1>
    </body>
</html>