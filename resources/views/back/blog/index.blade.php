@extends('back.layout')
@section('title', 'Daftar Berita')
@section('content')
    <div class="row g-0">
        <div class="col-md-12 mb-3">
            <h1 class="text-center">Daftar Berita</h1>
        </div>
        <div class="d-flex justify-content-between">
            <div class="col-3 col-md-3 mb-3">
                <a href="{{ route('blogs.create') }}" class="btn btn-primary">Tambah Berita</a>
            </div>
            <div class="col-4 col-md-4">
                <form action="{{ route('blogs.index') }}" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control ml-2" name="cari" placeholder="Kata Kunci"
                            value="{{ request('cari') }}" required>
                        <button type="submit" class="btn btn-primary"><i class='bx bx-search-alt-2'></i>Cari</button>
                        <a href="{{ route('blogs.index') }}" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="col-12 col-md-12 text-center">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr>
                                <td>{{ $data->firstItem() + $key }}</td>
                                <td>{{ $value->title }}
                                    <div class="small">
                                        Penulis : {{ $value->user->name }}
                                    </div>
                                </td>
                                <td>{{ $value->created_at->isoFormat('dddd, D MMMM Y') }}</td>
                                @if ($value->status == 'publish')
                                    <td><span class="badge text-bg-success">publish</span></td>
                                @else
                                    <td><span class="badge text-bg-warning">draft</span></td>
                                @endif
                                <td>
                                    <a href="/berita/{{ $value->slug }}" class="btn btn-info">Lihat</a>
                                    <a href="{{ route('blogs.edit', ['blog' => $value->id]) }}"
                                        class="btn btn-warning">Edit</a>
                                    <a href="{{ route('blogs.delete', ['blog' => $value->id]) }}"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-5">
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
