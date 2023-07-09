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
                            <h3 class="card-title">Edit Data Kategori</h3>
                            <div class="card-tools">
                                <a href="/dashboard/jenis/" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <form method="POST" action="/dashboard/jenis/{{ $jenis->id }}">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="nama_jenis">Nama Kategori Retribusi</label>
                                                <input type="text" class="form-control @error('nama_jenis') is-invalid @enderror" id="nama_jenis" name="nama_jenis" placeholder="Nama Kategori Retribusi" autocomplete="off" value="{{ old('nama_jenis', $jenis->nama_jenis) }}" autofocus>
                                                @error('nama_jenis')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Retribusi</label>
                                                <select name="jns_retribusi" class="form-control @error('jns_retribusi') is-invalid @enderror select2bs4" style="width: 100%;">
                                                    <option selected="selected" value="{{ old('jns_retribusi', $jenis->jns_retribusi) }}">--Abaikan Jika Tidak Berubah--</option>
                                                    <option value="Retribusi Jasa Umum">Retribusi Jasa Umum</option>
                                                    <option value="Retribusi Jasa Usaha">Retribusi Jasa Usaha</option>
                                                    <option value="Retribusi Perizinan Tertentu">Retribusi Perizinan Tertentu</option>
                                                </select>
                                                @error('jns_retribusi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="norek_jenis">No. Rek. Retribusi</label>
                                                <input type="text" class="form-control @error('norek_jenis') is-invalid @enderror" id="norek_jenis" name="norek_jenis" placeholder="No. Rek. Retribusi" value="{{ old('norek_jenis', $jenis->norek_jenis) }}" autocomplete="off">
                                                @error('norek_jenis')
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
                                                <label for="thn_target_anggaran">Tahun Target Anggaran</label>
                                                <select name="thn_target_anggaran" class="form-control @error('thn_target_anggaran') is-invalid @enderror select2bs4" style="width: 100%;">
                                                    <option selected="selected" value="{{ old('thn_target_anggaran', $jenis->thn_target_anggaran) }}">--Abaikan Jika Tidak Diubah--</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                </select>
                                                @error('thn_target_anggaran')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="target_jns_ret">Target Anggaran</label>
                                                <input type="text" class="form-control @error('target_jns_ret') is-invalid @enderror" id="target_jns_ret" name="target_jns_ret" placeholder="Target Anggaran" value="{{ old('target_jns_ret', $jenis->target_jns_ret) }}" autocomplete="off">
                                                @error('target_jns_ret')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Ubah Kategori Retribusi</button>
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