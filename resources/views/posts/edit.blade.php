@extends('layouts.main')

@section('title')
  Home page
@endsection

@section('sidebar')

@endsection

@section('content')
  <form action="/posts/title" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <h1> Edit a posts</h1>
  </hr>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">

    </div>
    <div class="form-group">
      <label for="content">content</label>
      <textarea class="form-control" name="content" id="content" placeholder="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
