@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Pengajuan SPORD</h1>
    </div>

    @if (session()->has('Berhasil'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('Berhasil') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>        
    @endif

    <div class="table-responsive">
        <a href="/dashboard/dataspord/create" class="btn btn-primary mb-3">Tambah Ajuan</a>
        <table id="table" class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col" style="text-align: center">#</th>
                <th scope="col">Nama Pemilik</th>
                <th scope="col">Perusahaan/Organisasi</th>
                <th scope="col">Lokasi Kegiatan</th>
                <th scope="col">Tujuan OPD/UPT</th>
                <th scope="col">Tanggal Ajuan</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataspord as $ajuan)
                <tr style="vertical-align: middle">
                    <td style="text-align: center">{{ $loop->iteration }}</td>
                    <td>{{ $ajuan->nama }}</td>
                    <td>{{ $ajuan->organisasi }}</td>
                    <td>{{ $ajuan->lokasi }}</td>
                    <td style="word-wrap: inherit">{{ $ajuan->kelola->judul }}</td>
                    <td>{{ $ajuan->created_at }}</td>
                    <td>
                        <a href="/dashboard/dataspord/{{ $ajuan->id }}" target="_blank" class="badge bg-primary" data-toggle="tooltip" data-placement="left" title="Lihat Detail"><span data-feather="eye"></span></a>
                        <a href="mailto:{{ $ajuan->kelola->email }}" target="_blank" class="badge bg-warning" data-toggle="tooltip" data-placement="left" title="Kirim SPORD"><span data-feather="navigation"></span></a>
                        <form action="/dashboard/dataspord/{{ $ajuan->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" data-toggle="tooltip" data-placement="left" title="Hapus Ajuan" onclick="return confirm('Yakin Ingin Menghapus Ajuan?')"><span data-feather="trash-2"></span></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection