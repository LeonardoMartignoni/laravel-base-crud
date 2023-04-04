@extends('layouts.app')

@section('icons')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('navbar')
  @include('partials.navbar')
@endsection

@section('main-content')
  {{-- @dump($songs) --}}

  <div class="container">
    <div class="heading d-flex justify-content-between align-items-center">
      <h1 class="my-2">Songs list</h1>
      <a href="{{ route('songs.create') }}" class="btn btn-outline-dark">Create Song</a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Album</th>
          <th scope="col">Author</th>
          <th scope="col">Editor</th>
          <th scope="col">Length</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($songs as $song)
          <tr>
            <th scope="row">{{ $song['id'] }}</th>
            <td>{{ $song['title'] }}</td>
            <td>{{ $song['album'] }}</td>
            <td>{{ $song['author'] }}</td>
            <td>{{ $song['editor'] }}</td>
            <td>{{ number_format($song['length'], 2) }}</td>
            <td>
              <a href="{{ route('songs.show', $song) }}">
                <i class="bi bi-box-arrow-up-right"></i>
              </a>
              <a href="{{ route('songs.edit', $song) }}">
                <i class="bi bi-pencil-square"></i>
              </a>
            </td>
          </tr>
        @endforeach
    </table>
  </div>
@endsection
