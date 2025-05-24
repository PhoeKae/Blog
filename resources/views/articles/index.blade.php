@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 800px">
        @foreach ($articles as $article )
            <div class="card mb-4">
                <div class="card-body">
                    <h4> {{$article->title}} </h4>
                    <div class="text-muted">
                        {{ $article->created_at }}
                    </div>
                    <p>
                        {{ $article->body }}
                    </p>
                    <a href="{{ url("/articles/detail/$article->id") }} ">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection