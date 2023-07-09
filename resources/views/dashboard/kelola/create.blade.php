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
                            <h3 class="card-title">Pendaftaran Pengguna</h3>
                            <div class="card-tools">
                                <a href="/dashboard/kelola/" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <form method="POST" action="/dashboard/kelola" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="nama_dinasopd">Nama Dinas/UPT</label>
                                                <input type="text" class="form-control @error('nama_dinasopd') is-invalid @enderror" id="nama_dinasopd" name="nama_dinasopd" placeholder="Nama Dinas/UPT" autocomplete="off" autofocus>
                                                @error('nama_dinasopd')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori Retribusi</label>
                                                <select name="jenis_id" class="form-control @error('jenis_id') is-invalid @enderror select2bs4" style="width: 100%;">
                                                    <option selected="selected">Pilih Ketgori Retribusi</option>
                                                    @foreach ($jenis as $kategori)
                                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_jenis }}</option>
                                                    @endforeach
                                                </select>
                                                @error('jenis_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="thn_anggaran">Tahun Anggaran</label>
                                                <input type="text" class="form-control @error('thn_anggaran') is-invalid @enderror" id="thn_anggaran" name="thn_anggaran" placeholder="Tahun Anggaran" autocomplete="off">
                                                @error('thn_anggaran')
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
                                                <label for="target_anggaran">Target Anggaran</label>
                                                <input type="text" class="form-control @error('target_anggaran') is-invalid @enderror" id="target_anggaran" name="target_anggaran" placeholder="Target Anggaran" value="{{ old('target_anggaran') }}" autocomplete="off">
                                                @error('target_anggaran')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="foto_dinasopd">Foto Dinas/UPT</label>
                                                <input type="file" class="form-control @error('foto_dinasopd') is-invalid @enderror" id="foto_dinasopd" name="foto_dinasopd" placeholder="Foto Dinas/UPT" autocomplete="off" onchange="document.getElementById('imgPreview').src = window.URL.createObjectURL(this.files[0])">
                                                <img class="img-fluid mb-2 mt-3 col-sm-3" id="imgPreview">
                                                @error('foto_dinasopd')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Tambah Dinas/UPT</button>
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