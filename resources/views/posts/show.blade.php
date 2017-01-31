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
        </div><!-- /.blog-post -->
    </div>
@endsection