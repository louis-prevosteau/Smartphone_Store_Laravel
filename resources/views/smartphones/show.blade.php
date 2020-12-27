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
            <div class="card-body">
                <h1 class="card-title">{{ $smartphone->nom }}</h1>
                <p class="card-text">{{ $smartphone->caractéristique }}</p>
                <h5>Taille : {{ $smartphone->taille }}</h5>
                <h5>Autonomie : {{ $smartphone->autonomie }}</h5>
                <h1>{{ $smartphone->prix }} €</h1>
                @if ( $smartphone->en_vente == 1)
                    <p class="card-txt text-success font-weight-bold">Disponible</p>
                @endif
                <a href="{{ route('smartphones.edit',$smartphone->id) }}">Editer</a>
            </div>
        </div>
        @endif
@endsection

@section('footer')
    @parent
@endsection