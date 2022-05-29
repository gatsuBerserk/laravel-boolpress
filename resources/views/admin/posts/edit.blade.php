@extends('layouts.app')

@section('content')

<form action="{{ route('admin.posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        <div id="titleHelp" class="form-text">Inserisci un titolo che non potrai dimenticare</div>
        @error('title')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image_url">Url dell'immagine</label>
        <input type="text" name="image_url" id="image_url" value="{{$post->image_url}}">
        @error('image_url')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Inserisci il contenuto del post</label>
        <textarea class="form-control" id="content" rows="10" name="content" id="content">
            {{$post->content}}
        </textarea>
        @error('content')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    </div>

    <button type="submit" class="btn btn-primary">Modifica il post</button>
</form>
@endsection