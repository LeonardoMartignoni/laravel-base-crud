@extends('layouts.app')

@section('icons')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('navbar')
  @include('partials.navbar')
@endsection

@section('main-content')
  <div class="container">
    <div class="button-actions d-flex gap-3 mt-4">
      <a href="{{ route('songs.index') }}" class="btn btn-outline-dark"><i class="bi bi-arrow-left"></i> Back to
        songs</a>
      <a class="btn btn-outline-dark" href="{{ route('songs.edit', $song) }}">
        <i class="bi bi-pencil-square"> Edit this song</i>
      </a>
      <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop{{ $song->id }}">
        <i class="bi bi-trash"> Delete this song</i>
      </button>
    </div>

    <h1 class="my-4">Song detail</h1>
    <span class="d-block"><strong>Poster image:</strong></span>
    <img class="w-25" src="{{ $song->poster }}" alt="Song poster">
    <div class="row g-3 mt-2">
      <div class="col-6">
        <span><strong>Title:</strong> {{ $song->title }}</span>
      </div>
      <div class="col-6">
        <span><strong>Album:</strong> {{ $song->album }}</span>
      </div>
      <div class="col-6">
        <span><strong>Author:</strong> {{ $song->author }}</span>
      </div>
      <div class="col-6">
        <span><strong>Editor:</strong> {{ $song->editor }}</span>
      </div>
      <div class="col-6">
        <span><strong>Length:</strong> {{ $song->length }}</span>
      </div>
      <div class="col-6">
        <span><strong>Poster link:</strong> {{ $song->poster }}</span>
      </div>
    </div>


    {{-- <div class="card" style="width: 18rem;">
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
    </div> --}}

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop{{ $song->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete confirmation</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to delete this element? <br>
            The action is irreversible.
            <br><br>
            You are deleting this element:
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Album</th>
                  <th scope="col">Author</th>
                  <th scope="col">Editor</th>
                  <th scope="col">Length</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{ $song['id'] }}</th>
                  <td>{{ $song['title'] }}</td>
                  <td>{{ $song['album'] }}</td>
                  <td>{{ $song['author'] }}</td>
                  <td>{{ $song['editor'] }}</td>
                  <td>{{ number_format($song['length'], 2) }}</td>
                </tr>
                <tr>
              </tbody>
            </table>
            <span></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <form class="delete-form" action="{{ route('songs.destroy', $song->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
