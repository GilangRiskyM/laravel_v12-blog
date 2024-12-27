@extends('back.layout')
@section('title', 'Hapus User')
@section('content')
    <div class="row g-0">
        <div class="col-md-12 mb-3">
            <h1 class="text-center">Hapus User</h1>
        </div>
        <div class="col-md-12 my-3 text-center">
            <h3>Apakah anda yakin ingin menghapus User dibawah ini?</h3>
            <div class="alert alert-danger" role="alert">
                <h3><i class="bx bx-error"></i>Data yang dihapus tidak dapat dikembalikan!</h3>
            </div>
            <h4>
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                </table>
                <div class="mt-3">
                    <form action="{{ route('users.destroy', ['user' => $data->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('users.index') }}" class="btn btn-secondary mx-3">Kembali</a>
                        <button class="btn btn-danger mx-3" type="submit">Hapus</button>
                    </form>
                </div>
            </h4>
        </div>
    </div>
@endsection
