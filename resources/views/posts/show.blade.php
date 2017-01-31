@extends('layout')

@section('header')
  <div class="container">
    <h1 class="blog-title">Laracasts | details</h1>
    <p class="lead blog-description">An example blog template built with Bootstrap.</p>
  </div>
@endsection

@section('content')
	<div class="content">
         <h1>{{ $post->title }}</h1>
         <p>{{ $post->body }}</p>
    </div>
@endsection