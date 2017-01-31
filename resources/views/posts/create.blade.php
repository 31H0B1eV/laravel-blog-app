@extends ('layout')

@section('header')
    <div class="container">
        <h1 class="blog-title">Laracasts | create</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
@endsection

@section('content')
    <h1>Create a post</h1>

    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary pull-right">Publish</button>
        </div>

        @include('partials.errors')
    </form>
@endsection