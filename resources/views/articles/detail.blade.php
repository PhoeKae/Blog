@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 800px">
            <div class="card mb-4">
                <div class="card-body">
                    <h4> {{$article->title}} </h4>
                    <div class="text-muted">
                        {{ $article->created_at }}
                    </div>
                    <p>
                        {{ $article->body }}
                    </p>
                    <a href="#">Delete</a>
                </div>
            </div>
    </div>
@endsection