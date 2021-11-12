@extends('layouts.app')
@section('title', 'Post Edit')
@section('content')
<div class="wrapper">
  <h1 class="text-center">Edit Post</h1>
  <a href="/posts" class="btn btn-primary mb-3">Kembali</a>
  
  @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  <form method="POST" action="{{ url('posts', $post->id ) }}">
    @csrf
    @method('PUT')
    <div class="form-group mb-4">
        <input class="form-control mb-3" name="title" value="{{ $post->title }}" type="text" placeholder="Judul"> 
        <textarea class="form-control" name="body" type="text" placeholder="Konten">{{ $post->body }}</textarea>
    </div>
    <button class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
