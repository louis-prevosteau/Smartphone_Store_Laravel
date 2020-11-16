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
            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" value="{{old('nom')}}" class="rounded">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="taille">Taille</label>
                        <input type="text" name="taille" id="taille" value="{{old('taille')}}" class="rounded">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="type_réseau">Réseau</label>
                        <select name="type_réseau" id="type_réseau" class="rounded">
                            <option>3G</option>
                            <option>4G</option>
                            <option>5G</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="système">Système d'exploitation</label>
                        <select name="système" id="système" class="rounded">
                            <option>IOS</option>
                            <option>MacOS</option>
                            <option>WatchOS</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <label for="connectique">Connectique</label>
                        <input type="text" name="connectique" id="connectique" value="{{old('connectique')}}" class="rounded">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="autonomie">Autonomie</label>
                        <input type="text" name="autonomie" id="autonomie" value="{{old('autonomie')}}" class="rounded">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="caractéristique">Description</label>
                        <textarea name="caractéristique" id="caractéristique" cols="30" rows="10" value="{{old('caractéristique')}}" placeholder="Description" class="rounded"></textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="prix">Prix</label>
                        <input type="number" name="prix" id="prix" value="{{old('prix')}}" class="rounded">
                    </div>
                </div>
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