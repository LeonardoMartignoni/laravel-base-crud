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
          <th scope="col">Actions</th>
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
            <td class="d-flex">
              <a class="btn btn-action" href="{{ route('songs.show', $song) }}">
                <i class="bi bi-box-arrow-up-right"></i>
              </a>
              <a class="btn btn-action" href="{{ route('songs.edit', $song) }}">
                <i class="bi bi-pencil-square"></i>
              </a>
              <button type="button" class="ms-auto btn btn-action text-danger" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop{{ $song->id }}">
                <i class="bi bi-trash"></i>
              </button>
            </td>
          </tr>
        @endforeach
    </table>
  </div>
@endsection

@section('modals')
  @foreach ($songs as $song)
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
  @endforeach
@endsection
