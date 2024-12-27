@extends('back.layout')
@section('title', 'Tambah User')
@section('content')
    <div class="row g-0">
        <div class="col-md-12 mb-3">
            <h1 class="text-center">Tambah User</h1>
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
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email">
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="email_verified_at" id="email_verified_at" class="form-check-input"
                        {{ old('email_verified_at') == null ? '' : 'checked' }}>
                    <label for="email_verified_at" class="form-label">Verifikasi Email</label>
                </div>
                <header>
                    <h4>Password</h4>
                    <p>
                        Silahkan isi password.
                    </p>
                </header>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" value="{{ old('password') }}" name="password"
                        id="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" value="{{ old('password_confirmation') }}"
                        name="password_confirmation" id="password_confirmation">
                </div>
                <header>
                    <h4>Permission</h4>
                    <p>
                        Tentukan Permission yang akan diberikan kepada user, biarkan tetap kosong jika user hanya sebagai
                        pengguna biasa.
                    </p>
                </header>
                @foreach ($permission as $key => $value)
                    <div class="mb-3">
                        <input type="checkbox" name="permission[]" id="{{ $value->name }}" value="{{ $value->name }}"
                            class="form-check-input"
                            {{ old('permission') && in_array($value->name, old('permission')) ? 'checked' : '' }}>
                        <label for="{{ $value->name }}" class="form-label">{{ $value->name }}</label>
                    </div>
                @endforeach
                <div class="mb-3 text-center">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
