@extends('back.layout')
@section('title', 'Hapus Page')
@section('content')
    <div class="row g-0">
        <div class="col-md-12 mb-3">
            <h1 class="text-center">Hapus Page</h1>
        </div>
        <div class="col-md-12 my-3 text-center">
            <h3>Apakah anda yakin ingin menghapus Page dibawah ini?</h3>
            <div class="alert alert-danger" role="alert">
                <h3><i class="bx bx-error"></i>Data yang dihapus tidak dapat dikembalikan!</h3>
            </div>
            <h4>
                <table class="table">
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td>{{ $data->title }}
                            <div class="small">Penulis : {{ $data->user->name }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td>{{ $data->description }}</td>
                    </tr>
                    <tr>
                        <td>Thumbnail</td>
                        <td>:</td>
                        <td>
                            <img src="{{ asset('post_thumbnails' . '/' . $data->thumbnail) }}" alt="thumbnail"
                                class="img-thumbnail" width="10%">
                        </td>
                    </tr>
                    <tr>
                        <td>Konten</td>
                        <td>:</td>
                        <td>{!! $data->content !!}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>{{ $data->status }}</td>
                    </tr>
                </table>
                <div class="mt-3">
                    <form action="{{ route('posts.destroy', ['post' => $data->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary mx-3">Kembali</a>
                        <button class="btn btn-danger mx-3" type="submit">Hapus</button>
                    </form>
                </div>
            </h4>
        </div>
    </div>
@endsection
