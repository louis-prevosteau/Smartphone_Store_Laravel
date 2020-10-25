<html>
<head>
    <title>Liste des smartphones</title>
</head>
<body>
<h2>La liste des smartphones</h2>

@if(!empty($smartphones))
    <ul>
        @foreach($smartphones as $smartphone)
            <li>{{$smartphone->id}} {{$smartphone->nom}} {{$smartphone->taille}} {{$smartphone->type_réseau}} {{$smartphone->système}} {{$smartphone->connectique}} {{$smartphone->autonomie}} {{$smartphone->caractéristique}} {{$smartphone->prix}} Euros <a href="{{route('smartphones.show',$smartphone->id)}}">Voir produit</a></li>
        @endforeach
    </ul>
@else
    <h3>aucun smartphone</h3>
@endif
    <button><a href="{{route('smartphones.create')}}">Ajouter un produit</a></button>
</body>
</html>