@extends('base.master')

    <title>{{$smartphone->nom}} -- Editer</title>

@section('navbar')
    @parent
@endsection

@section('content')
    <h1>Modifier {{$smartphone->nom}}</h1>
    <div class="SmartphoneForm">
        <form action="{{route('smartphones.update', $smartphone->id)}}" method="post">
            {{ csrf_field()}}
            <div class="form-group row">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" value="{{$smartphone->nom}}">
            </div>
            <div class="form-group row">
                <label for="taille">Taille</label>
                <input type="text" name="taille" id="taille" value="{{$smartphone->taille}}">
            </div>
            <div class="form-group row">
                <label for="type_réseau">Réseau</label>
                <select name="type_réseau" id="type_réseau">
                    <option value="{{$smartphone->type_réseau}}"></option>
                    <option>3G</option>
                    <option>4G</option>
                    <option>5G</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="système">Système d'exploitation</label>
                <select name="système" id="système">
                    <option value="{{$smartphone->système}}"></option>
                    <option>IOS</option>
                    <option>MacOS</option>
                    <option>WatchOS</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="connectique">Connectique</label>
                <input type="text" name="connectique" id="connectique" value="{{$smartphone->connectique}}">
            </div>
            <div class="form-group row">
                <label for="autonomie">Autonomie</label>
                <input type="text" name="autonomie" id="autonomie" value="{{$smartphone->autonomie}}">
            </div>
            <div class="form-group row">
                <label for="caractéristique">Description</label>
                <textarea name="caractéristique" id="caractéristique" cols="30" rows="10" value="{{$smartphone->caractéristique}}">{{$smartphone->caractéristique}}</textarea>
            </div>
            <div class="form-group row">
                <label for="prix">Prix</label>
                <input type="number" name="prix" id="prix" value="{{$smartphone->prix}}">
            </div>
            {{method_field('PUT')}}
            <div class="text-center">
                <button class="btn btn-primary" type="submit">Modifier</button>
            </div>
        </form>
    </div>
@endsection

@section('footer')
    @parent
@endsection