@extends('base.master')
@section('title','Ajouter un produit')

@section('navbar')
    @parent
@endsection

@section('content')
    <h3>Ajouter un produit</h3>
    <div class="SmartphoneForm">
        <form action="{{route('smartphones.store')}}" method="post">
            {!! csrf_field() !!}
            <div class="form-group row">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" value="{{old('nom')}}">
            </div>
            <div class="form-group row">
                <label for="taille">Taille</label>
                <input type="text" name="taille" id="taille" value="{{old('taille')}}">
            </div>
            <div class="form-group row">
                <label for="type_réseau">Réseau</label>
                <select name="type_réseau" id="type_réseau">
                    <option>3G</option>
                    <option>4G</option>
                    <option>5G</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="système">Système d'exploitation</label>
                <select name="système" id="système">
                    <option>IOS</option>
                    <option>MacOS</option>
                    <option>WatchOS</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="connectique">Connectique</label>
                <input type="text" name="connectique" id="connectique" value="{{old('connectique')}}">
            </div>
            <div class="form-group row">
                <label for="autonomie">Autonomie</label>
                <input type="text" name="autonomie" id="autonomie" value="{{old('autonomie')}}">
            </div>
            <div class="form-group row">
                <label for="caractéristique">Description</label>
                <textarea name="caractéristique" id="caractéristique" cols="30" rows="10" value="{{old('caractéristique')}}" placeholder="Description"></textarea>
            </div>
            <div class="form-group row">
                <label for="prix">Prix</label>
                <input type="number" name="prix" id="prix" value="{{old('prix')}}">
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit">Ajouter</button>
            </div>
        </form>
    </div>
@endsection

@section('footer')
    @parent
@endsection