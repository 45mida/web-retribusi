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
                            <h3 class="card-title">Perubahan Tim Bidang</h3>
                            <div class="card-tools">
                                <a href="/dashboard/tim/create" class="btn btn-success">Tambah Tim Bidang</a>
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
                            <h3 class="card-title">Struktur Organisasi</h3>
                        </div>
                            <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="margin: 0 auto;">
                                <thead>
                                <tr>
                                    <th scope="col" style="text-align: center">#</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Foto Diri</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($tims as $tim)
                                    <tr style="vertical-align: middle">
                                        <td style="text-align: center">{{ $loop->iteration }}</td>
                                        <td style="width: 35%">
                                            <h4>{{ $tim->nama_lengkap }}</h4>
                                        </td>
                                        <td style="width: 20%">{{ $tim->nip }}</td>
                                        <td style="width: 30%"><h6>{{ $tim->jabatan }}</h6></td>
                                        <td style="text-align: center">
                                            @if ($tim->foto_tim)
                                                <div class="rounded">
                                                    <img src="{{ asset('storage/'. $tim->foto_tim) }}" alt="Foto Pejabat" style="width: 200px; height: auto">
                                                </div>
                                            @else
                                                <img src="/images/user.png" alt="Tanpa Foto" style="width: 150px; height: auto">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/dashboard/tim/{{ $tim->id }}/edit" class="btn btn-sm btn-warning mb-3"><i class="far fa-file-edit"></i></a>
                                            <form action="/dashboard/tim/{{ $tim->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                                <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Yakin Ingin Menghapus Pejabat?')"><i class="fas fa-trash-alt"></i></button>
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