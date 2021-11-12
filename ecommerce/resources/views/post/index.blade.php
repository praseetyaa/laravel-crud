@extends('layouts.app')
@section('title', 'Semua Post')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center">Semua Post</h1>
  <a href="/posts/create" class="btn btn-primary mb-3">Create Post</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $post->title}}</td>
        <td>{{ $post->body }}</td>
        <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a></td>
        <td>
        <form method="POST" action="{{ url('posts', $post->id ) }}">

        @csrf
        @method('DELETE')
        <td><button class="btn btn-danger">Hapus</button></td>
        
        </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
