@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Dettaglio Progetto {{$project->title}}</h1>

        <div>
            <span class="badge text-bg-success">{{$project->type?->name}}</span>
        </div>

        <div>
            @forelse ($project?->technologies as $technology )

                <span class="badge text-bg-primary">{{$technology->name}}</span>
            @empty
                <span class="badge text-bg-warning">Questo progetto non ha Tecnologie correlate</span>

            @endforelse
        </div>

        <div>
            <p>{!! $project->description !!}</p>

            <img src="{{ asset('storage/' .  $project?->image_path ) }}" alt="">
        </div>



    </div>
@endsection
