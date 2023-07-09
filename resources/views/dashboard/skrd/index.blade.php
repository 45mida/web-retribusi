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
                            <h3 class="card-title">Penerbitan SKRD Baru</h3>
                            <div class="card-tools">
                                <a href="/dashboard/spord/create" class="btn btn-success">Tambah SKRD</a>
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
                            <h3 class="card-title">SKRD Terbit</h3>
                        </div>
                            <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="margin: 0 auto;">
                                <thead>
                                <tr>
                                    <th scope="col" style="text-align: center">No. Seri</th>
                                    <th scope="col">Tanggal Terbit</th>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">Jenis Retribusi</th>
                                    <th scope="col">Keterangan Umum</th>
                                    <th scope="col">Total Retribusi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($skrd as $skrd)
                                    <tr style="vertical-align: middle">
                                        <td>{{ $skrd->no_seri }}</td>
                                        <td>{{ $skrd->terbit_ret }}</td>
                                        <td>{{ $skrd->nama_pemesan }}</td>
                                        <td>{{ $skrd->jenis->nama_jenis }}</td>
                                        <td>{{ $skrd->keterangan }}</td>
                                        <td>Rp. {{ number_format($skrd->total,0) }}</td>
                                        <td>
                                            <a href="/dashboard/skrd/{{ $skrd->id }}/edit" class="btn btn-sm btn-warning mb-3"><i class="far fa-file-edit"></i></a><br>
                                            <form action="/dashboard/skrd/{{ $skrd->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                                <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Yakin Ingin Menghapus SKRD')"><i class="fas fa-trash-alt"></i></button>
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