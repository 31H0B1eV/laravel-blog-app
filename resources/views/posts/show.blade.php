@extends('layout')

@section('header')
  <div class="container">
    <h1 class="blog-title">Laracasts | details</h1>
    <p class="lead blog-description">An example blog template built with Bootstrap.</p>
  </div>
@endsection

@section('content')
	<div class="content">
        <div class="blog-post">
            <h2 class="blog-post-title">
              {{ $post->title }}
            </h2>
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

            <p>{{ $post->body }}</p>
            <hr>
            <div class="comment">
                <ul class="list-group">
                    @foreach($post->comments as $comment)
                        <li class="list-group-item">{{ $comment->body }}</li>    
                        <div class="text-right">
                            <p><strong>
                                {{ $comment->created_at->diffForHumans() }}
                            </strong></p>
                        </div>                    
                    @endforeach
                </ul>
            </div>
        </div><!-- /.blog-post -->
        <hr>
        {{--  Add a comment --}}
        <div class="card">
            <div class="card-block">
                <form action="/posts/{{ $post->id }}/comments" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea class="form-control" name="body" placeholder="Your comment here." required></textarea>
                    </div>
                    <div class="form-group">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Add comment</button>
                        </div>
                    </div>
                </form>
                @include('partials.errors')
            </div>
        </div>
        {{--  end of comment section --}}
    </div>
@endsection