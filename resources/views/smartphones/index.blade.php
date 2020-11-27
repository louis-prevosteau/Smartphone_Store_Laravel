@extends('base.master')
@section('title','Liste des produits')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="form-group">
        <form action="{{route('search')}}" method="get" class="form-inline my-2 my-lg-0">
            <div class="input-group">
                <input type="search" name="search" class="form-control mr-sm-2" type="text" placeholder="Rechercher un produit..." style="width: 200px;">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary my-2 my-sm-0">Rechercher</button>
                </span>
            </div>
        </form>
    </div>
    <h2>La liste des produits</h2>
    @if(!empty($smartphones))
        <div class="row">
            @foreach($smartphones as $smartphone)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('smartphones.show', $smartphone->id) }}">{{ $smartphone->nom }}</a></h5>
                            <h4>{{ $smartphone-> prix }} €</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <h3>aucun smartphone</h3>
    @endif
@endsection

@section('footer')
    @parent
@endsection