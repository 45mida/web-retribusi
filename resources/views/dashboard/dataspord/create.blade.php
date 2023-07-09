@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Ajuan SPORD</h1>
    </div>

    <div class="col-lg-8 mb-5">
        <form method="POST" action="/dashboard/spord">
            @csrf
            <div class="mb-3">
                <label for="kelola_id" class="form-label">OPD/UPT Tujuan</label>
                <select class="form-select @error('kelola_id') is-invalid @enderror" name="kelola_id" id="kelola_id" data-live-search="true" required>
                    <option selected value="">-- Pilih OPD/UPT --</option>
                    @foreach ($kelola as $kelola)
                        <option value="{{ $kelola->id }}">{{ $kelola->judul }}</option>
                    @endforeach
                </select>
                @error('kelola_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemilik Perusahaan/Organisasi</label>
                <select class="form-select @error('user_id') is-invalid @enderror" name="user_id" id="user_id" data-live-search="true" required>
                    <option selected value="">-- Pilih Pemilik Perusahaan/Organisasi --</option>
                    @foreach ($user as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="organisasi" class="form-label">Nama Perusahaan/Organisasi</label>
                <input type="text" class="form-control @error('organisasi') is-invalid @enderror" id="organisasi" name="organisasi" required autocomplete="off" value="{{ old('organisasi', auth()->user()->organisasi)}}">
                @error('organisasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Perusahaan/Organisasi</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autocomplete="off" value="{{ old('alamat', auth()->user()->alamat) }}">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi Kegiatan</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" required autocomplete="off" value="{{ old('lokasi') }}">
                @error('lokasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="objek1" class="form-label">Ajuan Objek Retribusi 1</label>
                <input type="text" class="form-control @error('objek1') is-invalid @enderror" id="objek1" name="objek1" required autocomplete="off" value="{{ old('objek1')}}">
                @error('objek1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="objek2" class="form-label">Ajuan Objek Retribusi 2</label>
                <input type="text" class="form-control" id="objek2" name="objek2" autocomplete="off">
                
            </div>
            <div class="mb-3">
                <label for="objek3" class="form-label">Ajuan Objek Retribusi 3</label>
                <input type="text" class="form-control" id="objek3" name="objek3" autocomplete="off">
                
            </div>
            <div class="mb-3">
                <label for="objek4" class="form-label">Ajuan Objek Retribusi 4</label>
                <input type="text" class="form-control" id="objek4" name="objek4" autocomplete="off">
                
            </div>
            <button type="submit" class="btn btn-primary">Tambah Ajuan</button>
        </form>
    </div>

@endsection