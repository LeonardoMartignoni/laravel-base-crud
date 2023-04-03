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
          <th scope="col">id</th>
          <th scope="col">title</th>
          <th scope="col">album</th>
          <th scope="col">author</th>
          <th scope="col">editor</th>
          <th scope="col">length</th>
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
          </tr>
        @endforeach
    </table>
  </div>
@endsection
