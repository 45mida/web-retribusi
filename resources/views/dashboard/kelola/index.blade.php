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
                            <h3 class="card-title">Pendaftaran Dinas/UPT</h3>
                            <div class="card-tools">
                                <a href="/dashboard/kelola/create" class="btn btn-success">Tambah Dinas/UPT</a>
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
                            <h3 class="card-title">Dinas / UPT Terdaftar</h3>
                        </div>
                            <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="margin: 0 auto;">
                                <thead>
                                <tr>
                                    <th scope="col" style="text-align: center">#</th>
                                    <th scope="col">Nama OPD/UPT</th>
                                    <th scope="col">Tahun Anggaran</th>
                                    <th scope="col">Kategori Retribusi</th>
                                    <th scope="col">Target Anggaran</th>
                                    <th scope="col">Foto OPD/UPT</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($kelola as $kelolas)
                                    <tr style="vertical-align: middle">
                                        <td style="text-align: center">{{ $loop->iteration }}</td>
                                        <td style="width: 30%"><h5>{{ $kelolas->nama_dinasopd }}</h5></td>
                                        <td><h5>{{ $kelolas->thn_anggaran }}</h5></td>
                                        <td style="width: 25%">{{ $kelolas->jenis->nama_jenis }}</td>
                                        <td><h5>Rp. {{ number_format($kelolas->target_anggaran,0) }}</h5></td>
                                        <td style="text-align: center">
                                            @if ($kelolas->foto_dinasopd)
                                                <div class="rounded">
                                                    <img src="{{ asset('storage/'. $kelolas->foto_dinasopd) }}" alt="Foto OPD/UPT" style="width: 200px; height: auto">
                                                </div>
                                            @else
                                                <img src="/images/prov_about.jpg" alt="Tanpa Foto" style="width: 200px; height: auto">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/dashboard/kelola/{{ $kelolas->id }}/edit" class="btn btn-sm btn-warning mb-3"><i class="far fa-file-edit"></i></a><br>
                                            <form action="/dashboard/kelola/{{ $kelolas->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                                <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Yakin Ingin Menghapus OPD/UPT?')"><i class="fas fa-trash-alt"></i></button>
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