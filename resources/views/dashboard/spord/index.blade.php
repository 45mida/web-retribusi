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
                            <h3 class="card-title">Data SPORD</h3>
                            <div class="card-tools">
                                <a href="/dashboard/spord/create" class="btn btn-success">Tambah SPORD</a>
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
                            <h3 class="card-title">SPORD Diajukan</h3>
                        </div>
                            <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="margin: 0 auto;">
                                <thead>
                                <tr>
                                    <th scope="col" style="text-align: center">#</th>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Organisasi</th>
                                    <th scope="col">Lokasi Penggunaan</th>
                                    <th scope="col">No. HP</th>
                                    <th scope="col">Objek Retribusi</th>
                                    <th scope="col">Jumlah Pesan</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($spord as $ajuan)
                                    <tr style="vertical-align: middle">
                                        <td style="text-align: center">{{ $loop->iteration }}</td>
                                        <td>{{ $ajuan->nama }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <form action="/dashboard/spord/{{ $ajuan->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                                <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Yakin Ingin Menghapus Pengajuan?')"><i class="fas fa-trash-alt"></i></button>
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