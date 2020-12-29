@extends('base.master')
@section('title','Liste des produits')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="form-group container">
        <form action="{{route('search')}}" method="get" class="form-inline my-2 my-lg-0">
            <div class="input-group">
                <input type="search" name="search" class="form-control mr-lg-5" type="text" placeholder="Rechercher un produit..." style="width: 500px;">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary my-2 my-sm-0"><i class="fas fa-search"></i></button>
                </span>
            </div>
        </form>
    </div>
    <h2>La liste des produits</h2>
    @if(!empty($smartphones))
        <div class="row form-group container">
            <h5 class="mr-lg-5">Filtrer par prix</h5>
            <form action="{{route('smartphones.index')}}" method="get">
                <input type="number" name="min" placeholder=0 class="mr-lg-5">
                <input type="number" name="max" placeholder=9999 class="mr-lg-5">
                <button type="submit" class="btn btn-warning my-2 my-sm-0">Filtrer</button>
            </form>
        </div>
        <div class="row form-group container">
            <h5 class="mr-lg-5">Filtrer par OS</h5>
            <form action="{{route('smartphones.index')}}" method="get">
                <select name="os">
                    <option value="All" @if($os == 'All') selected @endif>-- Tous --</option>
                    @foreach($systems as $sys)
                        <option value="{{$sys}}" @if($os == $sys) selected @endif>{{$sys}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-warning my-2 my-sm-0">Filtrer</button>
            </form>
        </div>
        <div class="row">
            @foreach($smartphones as $smartphone)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        @if($smartphone->image != null)
                            <img src="{{$smartphone->image}}" alt="" class="card-img-top" height="260">
                        @endif
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