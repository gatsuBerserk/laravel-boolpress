@extends('layouts.app')

@section('content')
<div class="container w-50 m-auto justify-content-center">
    <form action="{{ route("admin.posts.store") }}" method="POST">
        @csrf

        <div class="form-row align-items-center">
            <div>
                <label class="sr-only" for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci titolo">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="my-3">
                <label for="image_url">Url dell'immagine</label>
                <input type="text" name="image_url" class="form-control" id="image_url" placeholder="Inserisci URL dell'immagine">
                @error('content')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="content" class="form-label">Inserisci il contenuto del post</label>
                <textarea class="form-control" id="content" rows="10" name="content" id="decontentcription"></textarea>
                @error('content')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-2 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
  </form>
</div>

    
@endsection
