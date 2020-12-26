@extends('base.master')
@section('title','Liste des applications')

@section('navbar')
    @parent
@endsection


@section('content')
    <h2>La liste des applications</h2>
    @if(!empty($applications))
        <div class="row">
            @foreach($applications as $application)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $application->nom }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <h3>aucun application</h3>
    @endif
@endsection
@section('footer')
    @parent
@endsection

