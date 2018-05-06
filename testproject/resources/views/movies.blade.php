@extends('layouts.app')

@section('content')
     <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            @if (count($movies) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        My Favorite Movies
                    </div>

                    <div class="panel-body">
                        @foreach ($movies as $movie)
							<div>{{ $movie->title }}, Released in {{ $movie->year }} ({{ $total = date('Y') - $movie->year }} years ago)</div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>    
    </div>
@endsection