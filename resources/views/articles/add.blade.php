@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 800px">

        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $err )
                    {{ $err }}
                @endforeach
            </div>
        @endif

        <form method="post">
            <h3 class="mb-4">Add Article</h3>
            @csrf
            <input type="text" name="title" placeholder="Title" class="form-control mb-2">
            <textarea type="text" name="body" placeholder="Body" class="form-control mb-2"></textarea>
            <select name="category_id" class="form-select mb-2">
               <option value="1">Movies</option>
               <option value="2">Music</option>
               <option value="3">Crypto</option>
               <option value="4">Jobs</option>
               <option value="5">Tech</option>
               <option value="6">Sport</option>
               <option value="7">Travel</option>
            </select>
            <button class="btn btn-primary">Add Article</button>
        </form>
    </div>
@endsection
