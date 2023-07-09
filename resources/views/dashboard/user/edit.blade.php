@extends('dashboard.layouts.main')

@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Pengguna</h3>
                            <div class="card-tools">
                                <a href="/dashboard/user/" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <form method="POST" action="/dashboard/user/{{ $user->id }}">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off" autofocus value="{{ old('nama_lengkap', $user->nama_lengkap) }}">
                                                @error('nama_lengkap')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" autocomplete="off" value="{{ old('username', $user->username) }}">
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" placeholder="Jabatan" value="{{ old('jabatan', $user->jabatan) }}" autocomplete="off">
                                                @error('jabatan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Asal Dinas / UPT</label>
                                                <select name="dinasopd_id" class="form-control @error('dinasopd_id') is-invalid @enderror select2bs4" style="width: 100%;">
                                                    <option selected="selected" value="{{ old('dinasopd_id', $user->dinasopd_id) }}">--Jika Tidak Diubah, Abaikan--</option>
                                                    @foreach ($kelola as $kelolas)
                                                    <option value="{{ $kelolas->id }}">{{ $kelolas->nama_dinasopd }}</option>
                                                    @endforeach
                                                </select>
                                                @error('dinasopd_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Hak Akses</label>
                                                <select name="is_admin" class="form-control @error('is_admin') is-invalid @enderror select2bs4" style="width: 100%;">
                                                    <option selected="selected" value="{{ old('is_admin', $user->is_admin) }}">--Abaikan Jika Tidak Berubah--</option>
                                                    <option value="1">Admin</option>
                                                    <option value="0">Pengguna Dinas/UPT</option>
                                                </select>
                                                @error('is_admin')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password Wajib Diisi !" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="nohp">Nomor Hp (WA Aktif)</label>
                                                <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp" placeholder="Nomor Hp" value="{{ old('nohp', $user->nohp) }}" autocomplete="off">
                                                @error('nohp')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}" autocomplete="off">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Ubah Pengguna</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
@endsection