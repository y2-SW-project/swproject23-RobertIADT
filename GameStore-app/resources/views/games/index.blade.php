@extends('games.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" >
    
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
            
            </div>
            <div class="pull-right">
                {{-- link for creating new game --}}
                <a class="btn btn-success" href="{{ route('games.create') }}"> Create New Game</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        {{-- games fetched from the database using pagination, iterate using for each loop w/blade syntax --}}
        @foreach ($games as $game)
        <tr>
            <td>{{ $game->id }}</td>
            <td>{{ $game->name }}</td>
            <td>{{ $game->detail }}</td>
            <td>
                <form action="{{ route('games.destroy',$game->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('games.show',$game->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('games.edit',$game->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $games->links() }}


@endsection