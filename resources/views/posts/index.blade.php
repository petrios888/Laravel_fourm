@extends('layouts.main')

@section('title')
  Home pagef
@endsection

@section('sidebar')

@endsection



@section('content')
  @foreach ($posts as $post)
  <a href="/posts/title">
    <h1> {{$post->title}} </h1>
    </a>
<p> {{$post->content}} </p>
<hr>


@endforeach
@endsection
