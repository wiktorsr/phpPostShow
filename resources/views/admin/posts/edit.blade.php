@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Edytowanie posta</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_posts_update', $post) }}" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="title" class="form-label">Tytuł</label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="thumbnail">Miniaturka</label>
                            <img style="max-height: 100px;" src="{{ $imagePath }}" class="img-fluid"/>
                            <input type="file" class="form-control" name="thumbnail"/>
                        </div>
                        <div class="col-md-6">
                            <label for="description" class="form-label">Opis</label>
                            <input type="text" class="form-control" name="description" value="{{ $post->description }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="content">Zawartość</label>
                            <textarea class="form-control" name="content" rows="6" required>{{ $post->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Dodaj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection