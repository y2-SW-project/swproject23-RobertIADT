@extends('games.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            {{-- <div class="pull-left">
                <h2>Game</h2>
            </div> --}}
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('games.index') }}"> Back</a>
            </div>

            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
               <h2> {{ $game->name }} </h2>
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{-- <strong>Details:</strong> --}}
                {{ $game->detail }}
            </div>
        </div>
    </div>
@endsection