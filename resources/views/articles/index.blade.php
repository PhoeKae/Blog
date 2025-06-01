@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 800px">

        @if (@session('info'))
        <div class="alert alert-danger">
            {{ session('info') }}
        </div>
        @endif

        @foreach ($articles as $article )

            <div class="card mb-4">
                <div class="card-body">
                    <h4> {{$article->title}} </h4>
                    <div class="text-muted">
                        <b class="text-success">User : </b> {{ $article->user->name }}
                        <b>Category : </b> {{ $article->category->name }}
                        <b>Comment : </b> {{ count($article->comments) }}
                        {{ $article->created_at }}
                    </div>
                    <p>
                        {{ $article->body }}
                    </p>
                    <a href="{{ url("/articles/detail/$article->id") }} ">View Details</a>
                </div>
            </div>
        @endforeach

        {{ $articles->links() }}
    </div>
@endsection