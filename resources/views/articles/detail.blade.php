@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 800px">

            @if (@session('info'))
                <div class="alert alert-info">
                    Unauthorize To Delete.
                </div>                
            @endif

            <div class="card mb-4">
                <div class="card-body">
                    <h4> {{$article->title}} </h4>
                    <div class="text-muted">
                        <b class="text-success">User : </b> {{ $article->user->name }}
                        <b>Category : </b> {{ $article->category->name }}
                        {{ $article->created_at }}
                    </div>
                    <p>
                        {{ $article->body }}
                    </p>
                    @auth
                    <a href="{{ url("/articles/delete/$article->id") }}" class="btn btn-outline-danger">Delete</a>
                    @endauth
                </div>
            </div>
            <div class="list-group mt-4">
                <li class="list-group-item active">Comments ({{ count($article->comments) }}) </li>
                @foreach ($article->comments as $comment )
                    <li class="list-group-item">
                        @auth
                        <a href="{{ url("/comments/delete/$comment->id") }}" class="btn btn-close float-end"></a>
                        @endauth

                        <b class="text-success"> {{ $comment->user->name }} </b> -
                        {{ $comment->content }}
                    </li>                    
                @endforeach
            </div>
            @auth
            <form method="post" action="{{ url("/comments/add") }}">
                @csrf
                <input type="hidden" name="article_id" value="{{ $article->id }}" class="form-control" >
                <textarea name="content" class="form-control my-2"></textarea>
                <button class="btn btn-secondary">Add Comment</button>
            </form>
            @endauth
    </div>
@endsection