@extends('layouts.app')

@section('icons')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('navbar')
  @include('partials.navbar')
@endsection

@section('main-content')
  <div class="container">
    <a href="{{ route('songs.index') }}" class="mt-4 btn btn-outline-dark"><i class="bi bi-arrow-left"></i> Back to
      songs</a>

    <h1 class="my-2">Song detail</h1>
    <div class="card" style="width: 18rem;">
      <img src="{{ $song['poster'] }}" class="card-img-top" alt="Song Poster">
      <div class="card-body">
        <h5 class="card-title">Title: {{ $song['title'] }}</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Album: {{ $song['album'] }}</li>
        <li class="list-group-item">Author: {{ $song['author'] }}</li>
        <li class="list-group-item">Editor: {{ $song['editor'] }}</li>
        <li class="list-group-item">Length: {{ $song['length'] }}</li>
      </ul>
      {{-- <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div> --}}
    </div>
  </div>
@endsection
