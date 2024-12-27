@extends('back.layout')
@section('title', 'Data User')
@section('content')
    <div class="row g-0">
        <div class="col-md-12 mb-3">
            <h1 class="text-center">Data User</h1>
        </div>
        @can('admin-users')
            <div class="col-3 col-md-3 mb-3">
                <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
            </div>
            <hr>
        @endcan
        <div class="col-12 col-md-12 text-center">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Waktu Daftar</th>
                            <th>Verifikasi Email</th>
                            <th>Block</th>
                            <th>Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr>
                                <td>{{ $data->firstItem() + $key }}</td>
                                <td>
                                    {{ $value->name }}
                                    <div class="small">
                                        Email : {{ $value->email }}
                                    </div>
                                </td>
                                <td>{{ $value->created_at->isoFormat('dddd, D MMMM Y') }}</td>
                                <td>
                                    @if ($value->email_verified_at)
                                        <h4>
                                            <span class="badge bg-success">Terverifikasi</span>
                                        </h4>
                                    @else
                                        <h4>
                                            <span class="badge bg-warning">Belum Terverifikasi</span>
                                        </h4>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('users.toggle-block', ['user' => $value->id]) }}">
                                        @if ($value->blocked_at != null)
                                            <h4>
                                                <span class="badge bg-danger">IYA</span>
                                            </h4>
                                        @else
                                            <h4>
                                                <span class="badge bg-success">TIDAK</span>
                                            </h4>
                                        @endif
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('users.edit', ['user' => $value->id]) }}"
                                        class="btn btn-warning">Edit</a>
                                    <a href="{{ route('users.delete', ['user' => $value->id]) }}"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
