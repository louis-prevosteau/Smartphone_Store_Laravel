@extends('base.master')
@section('title','Liste des produits')

@section('navbar')
    @parent
@endsection

@section('content')
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