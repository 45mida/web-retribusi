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
                                <a href="/dashboard/jenis/create" class="btn btn-success">Tambah Kategori Retribusi</a>
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
                                    <th scope="col">Nama Jenis Retribusi</th>
                                    <th scope="col">Kategori Retribusi</th>
                                    <th scope="col">Rekening Kategori</th>
                                    <th scope="col">Tahun Target</th>
                                    <th scope="col">Target Retribusi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($jenis as $kategori)
                                    <tr style="vertical-align: middle">
                                        <td style="text-align: center">{{ $loop->iteration }}</td>
                                        <td>{{ $kategori->nama_jenis }}</td>
                                        <td>{{ $kategori->jns_retribusi }}</td>
                                        <td>{{ $kategori->norek_jenis }}</td>
                                        <td>{{ $kategori->thn_target_anggaran }}</td>
                                        <td>Rp. {{ number_format($kategori->target_jns_ret,0) }}</td>
                                        <td>
                                            <a href="/dashboard/jenis/{{ $kategori->id }}/edit" class="btn btn-sm btn-warning"><i class="far fa-file-edit"></i></a>
                                            <form action="/dashboard/jenis/{{ $kategori->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                                <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Yakin Ingin Menghapus Kategori?')"><i class="fas fa-trash-alt"></i></button>
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