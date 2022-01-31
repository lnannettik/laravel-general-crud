@extends('layout.main')

@section('content')
    <div class="container">

        <h1>Players Archive</h1>
    
        @forelse ($players as $player)
            <article>
                <h3>
                    {{ $player->lastname }}
                </h3>
            </article>
            
        @empty
            <p>
                No players found
            </p>
            
        @endforelse
    
    </div>

    
@endsection