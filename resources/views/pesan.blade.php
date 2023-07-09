@extends('layouts.main')

@section('body')

<div class="hero-wrap hero-wrap-2" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Beranda</a></span> <span>Pesan</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Pengajuan Pemesanan Objek Retribusi</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <div class="row d-flex mb-5 contact-info col-md-12">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Pengajuan pemesanan objek retribusi:</h2>
                <p>
                    Anda dapat melakukan pemesanan objek retribusi maksimal 4 objek dan selanjutnya setelah melakukan pemesanan, 
                    anda akan dihubungi atau dikirimkan pesan mengenai total pembayaran dan cara pembayaran agar pemesanan dapat disetujui.
                    Setelah konfirmasi dan pembayaran, objek retribusi dapat diambil di lokasi Dinas / UPT yang dituju.
                </p>
            </div>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Pemesan" required>
                            <label for="nama">Nama Pemesan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="organisasi" id="organisasi" placeholder="Organisasi" required>
                            <label for="organisasi">Organisasi</label>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Penggunaan">
                            <label for="lokasi">Lokasi Penggunaan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No HP Pemesan" required>
                            <label for="nohp">No HP Pemesan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="npwp" name="npwp" placeholder="No HP Pemesan" required>
                            <label for="npwp">N.P.W.P / N.P.W.P.R.D</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <input class="form-control" list="datalistOptions" name="objek1" id="exampleDataList" required placeholder="Cari Objek Retribusi 1 yang Dipesan">
                                <datalist id="datalistOptions">
                                    @foreach ($tarif as $tarifs)
                                        <option value="{{ $tarifs->jns_layanan }}">Satuan Rp {{$tarifs->tarif_total}}</option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" readonly id="satuan1" name="satuan1" placeholder="Harga Satuan">
                                    <label for="satuan1">Harga Satuan</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="vol1" name="vol1" required placeholder="Jumlah Pesan">
                                    <label for="vol1">Jumlah Pesan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <input class="form-control" list="datalistOptions2" name="objek2" id="exampleDataList" placeholder="Cari Objek Retribusi 2 yang Dipesan">
                                <datalist id="datalistOptions2">
                                    @foreach ($tarif as $tarifs)
                                        <option value="{{ $tarifs->jns_layanan }}">Satuan Rp {{$tarifs->tarif_total}}</option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" readonly id="satuan2" name="satuan2" placeholder="Harga Satuan">
                                    <label for="satuan2">Harga Satuan</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="vol2" name="vol2" placeholder="Jumlah Pesan">
                                    <label for="vol2">Jumlah Pesan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <input class="form-control" list="datalistOptions3" name="objek3" id="exampleDataList" placeholder="Cari Objek Retribusi 3 yang Dipesan">
                                <datalist id="datalistOptions3">
                                    @foreach ($tarif as $tarifs)
                                        <option value="{{ $tarifs->jns_layanan }}">Satuan Rp {{$tarifs->tarif_total}}</option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" readonly id="satuan3" name="satuan3" placeholder="Harga Satuan">
                                    <label for="satuan3">Harga Satuan</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="vol3" name="vol3" placeholder="Jumlah Pesan">
                                    <label for="vol3">Jumlah Pesan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <input class="form-control" list="datalistOptions4" name="objek4" id="exampleDataList" placeholder="Cari Objek Retribusi 4 yang Dipesan">
                                <datalist id="datalistOptions4">
                                    @foreach ($tarif as $tarifs)
                                        <option value="{{ $tarifs->jns_layanan }}">Satuan Rp {{$tarifs->tarif_total}}</option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" readonly id="satuan4" name="satuan4" placeholder="Harga Satuan">
                                    <label for="satuan4">Harga Satuan</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="vol4" name="vol4" placeholder="Jumlah Pesan">
                                    <label for="vol4">Jumlah Pesan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <button class="btn btn-lg btn-dark mb-2 float-right" onclick="tambah()">Hitung Total</button>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control mata-uang" name="total" id="total" readonly>                                    
                                </div>
                            </div>
                        </div>
                        <div class="row p-2">
                            <button type="reset" class="btn btn-lg btn-warning col-md-6"><strong>RESET FORM</strong></button>
                            <button type="submit" class="btn btn-lg btn-success col-md-6"><strong>AJUKAN PEMESANAN</strong></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection