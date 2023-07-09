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
                            <h3 class="card-title">Pendaftaran Pengguna</h3>
                            <div class="card-tools">
                                <a href="/dashboard/user/create" class="btn btn-success">Tambah Pengguna</a>
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
                            <h3 class="card-title">Pengguna Terdaftar</h3>
                        </div>
                            <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="margin: 0 auto;">
                                <thead>
                                <tr>
                                    <th scope="col" style="text-align: center">#</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No. HP</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Asal Dinas/UPT</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($user->skip(1) as $user)
                                    <tr style="vertical-align: middle">
                                        <td style="text-align: center">{{ $loop->iteration }}</td>
                                        <td>{{ $user->nama_lengkap }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->nohp }}</td>
                                        <td>{{ $user->jabatan }}</td>
                                        <td>{{ $user->dinasopd->nama_dinasopd }}</td>
                                        <td>
                                            @if ($user->is_admin === 1)
                                                Admin
                                            @else
                                                Pengguna
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/dashboard/user/{{ $user->id }}/edit" class="btn btn-sm btn-warning mb-3"><i class="far fa-file-edit"></i></a>
                                            <form action="/dashboard/user/{{ $user->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                                <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Yakin Ingin Menghapus User?')"><i class="fas fa-trash-alt"></i></button>
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