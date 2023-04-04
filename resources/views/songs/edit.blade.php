@extends('layouts.app')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('main-content')
  <div class="container">
    <h1 class="my-2">Modify song {{ $song->title }}</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('songs.update', $song) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="row g-3">
        <div class="col-6">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control @error('title') border border-danger @enderror">
        </div>
        <div class="col-6">
          <label for="album" class="form-label">Album</label>
          <input type="text" name="album" class="form-control @error('album') border border-danger @enderror">
        </div>
        <div class="col-6">
          <label for="author" class="form-label">Author</label>
          <input type="text" name="author" class="form-control @error('author') border border-danger @enderror">
        </div>
        <div class="col-6">
          <label for="editor" class="form-label">Editor</label>
          <input type="text" name="editor" class="form-control @error('editor') border border-danger @enderror">
        </div>
        <div class="col-6">
          <label for="length" class="form-label">Length</label>
          <input type="number" step="0.01" name="length"
            class="form-control @error('length') border border-danger @enderror">
        </div>
        <div class="col-6">
          <label for="poster" class="form-label">Poster</label>
          <input type="text" name="poster" class="form-control @error('poster') border border-danger @enderror">
        </div>
        <div class="col-12">
          <button type="submit" class="d-block ms-auto btn btn-outline-dark">Save Changes</button>
        </div>
      </div>

    </form>
  </div>
@endsection
