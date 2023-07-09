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
                            <h3 class="card-title">Pendaftaran Tarif Objek</h3>
                            <div class="card-tools">
                                <a href="/dashboard/tarif/" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <form method="POST" action="/dashboard/tarif/{{ $tarif->id }}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Asal Dinas/UPT</label>
                                                <select name="dinasopd_id" class="form-control @error('dinasopd_id') is-invalid @enderror select2bs4" style="width: 100%;">
                                                    <option selected="selected" value="{{ old('dinasopd_id', $tarif->dinasopd_id) }}">--Abaikan Jika Tidak Diubah--</option>
                                                    @foreach ($kelola as $kelolas)
                                                    <option value="{{ $kelolas->id }}">{{ $kelolas->nama_dinasopd }} -|- {{ $kelolas->jenis->nama_jenis }}</option>
                                                    @endforeach
                                                </select>
                                                @error('dinasopd_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="jns_layanan">Nama Objek Retribusi</label>
                                                <input type="text" class="form-control @error('jns_layanan') is-invalid @enderror" id="jns_layanan" value="{{ old('jns_layanan', $tarif->jns_layanan) }}" name="jns_layanan" placeholder="Nama Objek Retribusi" autocomplete="off" autofocus>
                                                @error('jns_layanan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="satuan">Satuan</label>
                                                <input type="text" class="form-control @error('satuan') is-invalid @enderror" id="satuan" value="{{ old('satuan', $tarif->satuan) }}" name="satuan" placeholder="Satuan" autocomplete="off">
                                                @error('satuan')
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
                                                <label for="tarif_layanan">Tarif Layanan</label>
                                                <input type="text" class="form-control @error('tarif_layanan') is-invalid @enderror" id="tarif_layanan" value="{{ old('tarif_layanan', $tarif->tarif_layanan) }}" name="tarif_layanan" placeholder="Tarif Layanan" value="{{ old('tarif_layanan') }}" autocomplete="off">
                                                @error('tarif_layanan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="tarif_saranan">Tarif Sarana</label>
                                                <input type="text" class="form-control @error('tarif_saranan') is-invalid @enderror" id="tarif_saranan" value="{{ old('tarif_saranan', $tarif->tarif_saranan) }}" name="tarif_saranan" placeholder="Tarif Sarana" value="{{ old('tarif_saranan') }}" autocomplete="off">
                                                @error('tarif_saranan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="tarif_total">Total Tarif</label>
                                                <input type="text" class="form-control @error('tarif_total') is-invalid @enderror" id="tarif_total" name="tarif_total" value="{{ old('tarif_total', $tarif->tarif_total) }}" placeholder="Total Tarif" value="{{ old('tarif_total') }}" autocomplete="off">
                                                @error('tarif_total')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="foto_objek">Foto Objek</label>
                                                <input type="file" class="form-control @error('foto_objek') is-invalid @enderror" id="foto_objek" name="foto_objek" autocomplete="off" onchange="document.getElementById('imgPreview').src = window.URL.createObjectURL(this.files[0])">
                                                @if ($tarif->foto_objek)
                                                    <img class="img-fluid mb-2 mt-3 col-sm-3 d-block" id="imgPreview" src="{{ asset('storage/'. $tarif->foto_objek) }}">
                                                @else
                                                    <img class="img-fluid mb-2 mt-3 col-sm-3" id="imgPreview">
                                                @endif
                                                @error('foto_objek')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Tambah Kategori Retribusi</button>
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