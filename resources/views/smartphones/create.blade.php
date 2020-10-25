<html>
    <head>
        <title>Ajouter un Produit</title>
    </head>
    <body>
        <h1>Ajouter un produit</h1>
        <form action="{{route('smartphones.store')}}" method="post">
            {!! csrf_field() !!}
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="{{old('nom')}}">
            <label for="taille">Taille</label>
            <input type="text" name="taille" id="taille" value="{{old('taille')}}">
            <label for="type_réseau">Réseau</label>
            <input type="text" name="type_réseau" id="type_réseau" value="{{old('type_réseau')}}">
            <label for="système">Système d'exploitation</label>
            <input type="text" name="système" id="système" value="{{old('système')}}">
            <label for="connectique">Connectique</label>
            <input type="text" name="connectique" id="connectique" value="{{old('connectique')}}">
            <label for="autonomie">Autonomie</label>
            <input type="text" name="autonomie" id="autonomie" value="{{old('type_réseau')}}">
            <label for="caractéristique">caractéristiques</label>
            <textarea name="caractéristique" id="caractéristique" cols="30" rows="10" value="{{old('type_réseau')}}">Description</textarea>
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="prix">
            <button type="submit">Ajouter</button>
        </form>
    </body>
</html>