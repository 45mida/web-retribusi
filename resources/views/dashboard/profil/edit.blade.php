@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Profil {{ $user->name }}</h1>
    </div>

    @if (session()->has('Berhasil'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('Berhasil') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="col-lg-8">
        <form method="POST" action="{{ route('dashboard.profil.update') }}">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus autocomplete="off" value="{{ old('name', $user->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" autofocus autocomplete="off" value="{{ old('username', $user->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="organisasi" class="form-label">Nama Organisasi/Perusahaan</label>
                <input type="text" class="form-control" id="organisasi" name="organisasi" autofocus autocomplete="off" value="{{ old('organisasi', $user->organisasi) }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Organisasi/Perushaaan</label>
                <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off" value="{{ old('alamat', $user->alamat) }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus autocomplete="off" value="{{ old('email', $user->email) }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            @if ($user->name === 'Administrator')
            <div class="mb-3">
                <label for="password" class="form-label">Password</label><br><small style="color: red">*Minimal 5 karakter</small>
                <input type="password" class="form-control" id="password" name="password" value="12345" readonly required>
            </div>
            @else
            <div class="mb-3">
                <label for="password" class="form-label">Password</label><br><small style="color: red">*Minimal 5 karakter</small>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" autofocus autocomplete="off" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            @endif
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>
@endsection