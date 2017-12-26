@extends('layouts.main')

@section('title')
  All my posts
@endsection


@section('content')
    <h1> {{ $post->title}} </h1>
    </a>
  <p> {{ $post->content }} </p>
  <hr>
@endsection
