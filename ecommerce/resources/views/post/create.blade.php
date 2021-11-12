@extends('layouts.app')
@section('title', 'Buat Post Baru')
@section('content')
<div class="wrapper">
    <h1 class="text-center">Buat Post Baru</h1>
    <a href="/posts" class="btn btn-primary mb-3">Kembali</a>
  
  
  @if (session('success'))
  <div class="alert alert-success" role="alert">
    🔔 {{ session('success') }}
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  <form method="POST" action="{{ url('posts') }}">
    @csrf
    <div class="form-group mb-4">
        <input class="form-control mb-3" name="title" type="text" placeholder="judul"> 
        <textarea class="form-control" name="body" type="text" placeholder="Konten"></textarea>
    </div>
    <button class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
