@extends('layouts.main')

@section('body')

    
<div class="hero-wrap hero-wrap-2" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Beranda</a></span> <span>Tarif</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tarif / Layanan Retribusi</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-work">
    <div class="container-fluid">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-2">Daftar Tarif / Layanan Retribusi</h2>
                <span class="subheading">Berikut adalah daftar tarif barang atau jasa objek retribusi yang dikelola BAPENDA Provinsi Kalimantan Barat.</span>
                    
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <form action="/tarif" autocomplete="off">
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" placeholder="Cari Tarif atau Layanan" name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Cari Barang atau Jasa</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8" style="text-align: center">
                <a href="/pesan" class="btn btn-lg btn-warning rounded"><strong>Ajukan Pemesanan</strong></a>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        {{ $tarif->links() }}
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
        @if ($tarif->count())
            @foreach ($tarif as $tarifs)
            <div class="col-6">
                <div class="card mb-3" style="height: 240px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            @if ($tarifs->dinasopd->foto_dinasopd)
                                <img src="{{ asset('storage/'. $tarifs->dinasopd->foto_dinasopd) }}" class="img-fluid rounded-start" alt="{{ $tarifs->dinasopd->nama_dinasopd }}" style="max-height: 200px; overflow: hidden;">
                            @else
                                <img src="/images/prov_about.jpg" class="img-fluid rounded-start" alt="Tanpa Foto" style="max-height: 200px; overflow: hidden;">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Tarif {{ $tarifs->jns_layanan }}</h6>
                                <p class="card-text">Asal Dinas/UPT: <br><small>{{ $tarifs->dinasopd->nama_dinasopd }}</small></p>
                                <p class="card-text">Harga Satuan: </p>
                                <button class="btn btn-sm btn-outline-primary">Rp. {{ number_format($tarifs->tarif_total,0) }},-</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="justify-content-center col-lg-12">
            <h5 class="text-center fs-2">TIDAK ADA DATA TARIF ATAU LAYANAN</h5>
        </div>
        @endif
    </div>
    <div class="d-flex justify-content-end">
        {{ $tarif->links() }}
    </div>
</section>

<!-- Modal Pesan -->
<div class="modal fade" id="modalPesan" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modalPesan" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form name="frmPesan" id="frmPesan" class="form-horizontal" action="/tarif" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pesan Objek Retribusi</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>
                <div class="modal-body">
                <p>Silahkan lakukan pemesanan objek retribusi daerah / kekayaan daerah dan nanti akan dikonfirmasi oleh Dinas/UPT yang
                    bersangkutan.
                </p>
                    <div class="form-floating mb-3">
                        <input type="text" name="nama_pesan" class="form-control" id="floatingnama" placeholder="Nama Pemesan">
                        <label for="floatingnama">Nama Pemesan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="alamat_pesan" class="form-control" id="floatingalamat" placeholder="Alamat">
                        <label for="floatingalamat">Alamat</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="hp_pesan" class="form-control" id="floatinghp" placeholder="No. HP">
                        <label for="floatinghp">No. HP</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="org_pesan" class="form-control" id="floatingorg" placeholder="Penggunaan">
                        <label for="floatingorg">Organisasi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="lokasi_pesan" class="form-control" id="floatinglokasi" placeholder="Lokasi Pemakaian">
                        <label for="floatinglokasi">Lokasi Pemakaian</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="objek_pesan" class="form-control" id="floatingobjek" placeholder="Objek yang dipesan" autocomplete="off">
                        <label for="floatingobjek">Objek yang dipesan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="objek_dinasopd" class="form-control" id="floatingdinas" placeholder="Asal Dinas / UPT" autocomplete="off">
                        <label for="floatingdinas">Asal Dinas / UPT</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="jumlah_pesan" class="form-control" id="floatingjumlah" placeholder="Jumlah Pesan" autocomplete="off">
                                <label for="floatingjumlah">Jumlah Pesan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="tarif_total" class="form-control" id="floatingtotal" placeholder="Tarif Satuan" autocomplete="off">
                                <label for="floatingtotal">Tarif Satuan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit" id="btnpesan" class="btn btn-primary">Pesan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).on('click','.pesan',function(){
        var url = "/tarif";
        $.get(url + '/', function (data) {
            //success data
            console.log(data);
            $('#floatingobjek').val(data.floatingobjek);
            $('#floatingdinas').val(data.floatingdinas);
            $('#floatingtotal').val(data.floatingtotal);
            $('#btnpesan').val("add");
            $('#modalPesan').modal('show');
        }) 
    });
</script>
@endsection