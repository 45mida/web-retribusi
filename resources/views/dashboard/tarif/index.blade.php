@extends('dashboard.layouts.main')

@section('container')

    @if (session()->has('Berhasil'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('Berhasil') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>        
    @endif

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Retribusi</h3>
                            <div class="card-tools">
                                <a href="/dashboard/tarif/create" class="btn btn-success">Tambah Tarif Objek Retribusi</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <section class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kategori Retribusi Terdaftar</h3>
                        </div>
                            <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="margin: 0 auto;">
                                <thead>
                                <tr>
                                    <th scope="col" style="text-align: center">#</th>
                                    <th scope="col">Nama Tarif</th>
                                    <th scope="col">Asal Dinas/UPT</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Tarif Layanan</th>
                                    <th scope="col">Tarif Sarana</th>
                                    <th scope="col">Total Tarif</th>
                                    <th scope="col">Foto Objek</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($tarif as $harga)
                                    <tr style="vertical-align: middle">
                                        <td style="text-align: center">{{ $loop->iteration }}</td>
                                        <td>{{ $harga->jns_layanan }}</td>
                                        <td>{{ $harga->dinasopd->nama_dinasopd }}</td>
                                        <td>{{ $harga->satuan }}</td>
                                        <td>Rp. {{ $harga->tarif_layanan}}</td>
                                        <td>Rp. {{ $harga->tarif_saranan}}</td>
                                        <td>Rp. {{ $harga->tarif_total}}</td>
                                        <td style="text-align: center">
                                            @if ($harga->foto_objek)
                                                <div class="rounded">
                                                    <img src="{{ asset('storage/'. $harga->foto_objek) }}" alt="Foto Objek" style="width: 200px; height: auto">
                                                </div>
                                            @else
                                                <img src="/images/prov_about.jpg" alt="Tanpa Foto" style="width: 200px; height: auto">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/dashboard/tarif/{{ $harga->id }}/edit" class="btn btn-sm btn-warning mb-3"><i class="far fa-file-edit"></i></a><br>
                                            <form action="/dashboard/tarif/{{ $harga->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                                <button class="btn btn-sm btn-danger border-0 mb-2" onclick="return confirm('Yakin Ingin Menghapus Tarif Objek Retribusi?')"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
        </div>
    </section>
@endsection