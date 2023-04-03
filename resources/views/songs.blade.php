@extends('layouts.app')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('main-content')
  {{-- @dump($songs) --}}

  <div class="container">
    <h1 class="my-2">Songs list</h1>
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
            <td><a href="{{ route('songs.show', $song) }}">Details</a></td>
          </tr>
        @endforeach
    </table>
  </div>
@endsection
