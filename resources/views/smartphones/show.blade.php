@extends('base.master')

@if($action == 'delete')
    <title>Supprimer {{$smartphone->nom}}</title>
@else
    <title>{{$smartphone->nom}}</title>
@endif

@section('navbar')
    @parent
@endsection

@section('content')
    @if($action == 'delete')
            <form action="{{route('smartphones.destroy',$smartphone->id)}}" method="POST">
                {{ csrf_field()}}
                {{method_field('DELETE')}}
                <div class="text-center">
                    <button type="submit" name="delete" value="valide" class="btn btn-danger">Valide</button>
                </div>
            </form>
        @else
        <div class="card">
            @if($smartphone->image != null)
                <img src="{{$smartphone->image}}" alt="" class="card-img-top" height="400">
            @endif
            <div class="card-body">
                <div class="row">
                    <h1 class="card-title col">{{ $smartphone->nom }}</h1>
                    <a href="{{ route('smartphones.edit',$smartphone->id) }}" class="col">Editer</a>
                </div>
                <p class="card-text">{{ $smartphone->caractéristique }}</p>
                <h5>Taille : {{ $smartphone->taille }}</h5>
                <h5>Autonomie : {{ $smartphone->autonomie }}</h5>
                <h1>{{ $smartphone->prix }} €</h1>
                @if ( $smartphone->en_vente == 1)
                    <p class="card-txt text-success font-weight-bold">Disponible</p>
                @else
                    <p class="card-txt text-danger font-weight-bold">Indisponible</p>
                @endif
            </div>
        </div>
        @endif
@endsection

@section('footer')
    @parent
@endsection