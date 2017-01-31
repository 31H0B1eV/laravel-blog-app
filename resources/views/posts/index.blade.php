@extends ('layout')

@section('header')
    <div class="container">
        <h1 class="blog-title">Laracasts | index</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
@endsection

@section('content')

@foreach($posts as $post)
    @include('posts.post')
@endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

@endsection