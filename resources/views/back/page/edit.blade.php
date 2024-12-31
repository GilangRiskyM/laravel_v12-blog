@extends('back.layout')
@section('title', 'Edit Page')
@section('content')
    <div class="row g-0">
        <div class="col-md-12 mb-3">
            <h1 class="text-center">Edit Page</h1>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger mx-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-12 mb-3">
            <form action="{{ route('posts.update', ['post' => $data->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $data->title) }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ old('description', $data->description) }}">
                </div>
                @isset($data->thumbnail)
                    <img src="{{ asset('post_thumbnails' . '/' . $data->thumbnail) }}" alt="thumbnail" class="img-thumbnail"
                        width="20%">
                @endisset
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail"
                        value="{{ old('thumbnail') }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea class="form-control" id="content" name="content">{{ old('content', $data->content) }}</textarea>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="status" name="status">
                        <option value="publish" {{ old('status', $data->status) == 'publish' ? 'selected' : '' }}>
                            Publish
                        </option>
                        <option value="draft" {{ old('status', $data->status) == 'draft' ? 'selected' : '' }}>
                            Draft
                        </option>
                    </select>
                </div>
                <center>
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </center>
            </form>
        </div>
    </div>
@endsection
