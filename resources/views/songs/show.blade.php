@extends('layouts.app')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('main-content')
  <div class="container">
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
