<html>
    <head>
        <title>{{$smartphone->nom}} -- Editer</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/apple-store.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('navbar')
        <h1>Modifier {{$smartphone->nom}}</h1>
        <form action="{{route('smartphones.update', $smartphone->id)}}" method="post">
            {{ csrf_field()}}
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="{{$smartphone->nom}}">
            <label for="taille">Taille</label>
            <input type="text" name="taille" id="taille" value="{{$smartphone->taille}}">
            <label for="type_réseau">Réseau</label>
            <input type="text" name="type_réseau" id="type_réseau" value="{{$smartphone->type_réseau}}">
            <label for="système">Système d'exploitation</label>
            <input type="text" name="système" id="système" value="{{$smartphone->système}}">
            <label for="connectique">Connectique</label>
            <input type="text" name="connectique" id="connectique" value="{{$smartphone->connectique}}">
            <label for="autonomie">Autonomie</label>
            <input type="text" name="autonomie" id="autonomie" value="{{$smartphone->autonomie}}">
            <label for="caractéristique">Description</label>
            <textarea name="caractéristique" id="caractéristique" cols="30" rows="10" value="{{$smartphone->caractéristique}}">{{$smartphone->caractéristique}}</textarea>
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="prix" value="{{$smartphone->prix}}">
            {{method_field('PUT')}}
            <button type="submit">Modifier</button>
        </form>
        @include('footer')
    </body>
</html>