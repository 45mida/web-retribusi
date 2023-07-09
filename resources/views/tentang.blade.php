@extends('layouts.main')

@section('body')


<div class="hero-wrap hero-wrap-2" style="background-image: url(images/bg_1.jpg);"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
    <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center"
            data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a
                    href="/">Beranda</a></span> <span>Tentang</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tentang Kami</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
<div class="container">
    <div class="row d-md-flex">
        <div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/about.jpg);">
        </div>
        <div class="col-md-6 ftco-animate p-md-5">
            <div class="row">
                <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="jasa-umum-tab" data-toggle="pill" href="#jasa-umum"
                    role="tab" aria-controls="jasa-umum" aria-selected="true">Jasa Umum</a>

                    <a class="nav-link" id="jasa-usaha-tab" data-toggle="pill" href="#jasa-usaha" role="tab"
                    aria-controls="jasa-usaha" aria-selected="false">Jasa Usaha</a>

                    <a class="nav-link" id="izin-tertentu-tab" data-toggle="pill" href="#izin-tertentu" role="tab"
                    aria-controls="izin-tertentu" aria-selected="false">Izin Tertentu</a>
                </div>
                </div>
                <div class="col-md-12 d-flex align-items-center">
                    <div class="tab-content ftco-animate" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="jasa-umum" role="tabpanel"
                        aria-labelledby="jasa-umum-tab">
                        <div>
                            <h2 class="mb-4">Retribusi Jasa Umum</h2>
                            <p>Merupakan Retribusi yang dikenakan atas jasa yang disediakan atau diberikan oleh Pemerintah Daerah untuk tujuan kepentingan dan kemanfaatan umum serta dapat dinikmati oleh orang pribadi atau Badan.</p>
                        </div>
                        </div>

                        <div class="tab-pane fade" id="jasa-usaha" role="tabpanel" aria-labelledby="jasa-usaha-tab">
                        <div>
                            <h2 class="mb-4">Retribusi Jasa Usaha</h2>
                            <p>Merupakan Retribusi yang dikenakan atas jasa yang disediakan atau diberikan oleh Pemerintah Daerah dengan menganut prinsip-prinsip komersial, karena pada dasarnya dapat disediakan oleh sektor swasta.</p>
                        </div>
                        </div>

                        <div class="tab-pane fade" id="izin-tertentu" role="tabpanel" aria-labelledby="izin-tertentu-tab">
                        <div>
                            <h2 class="mb-4">Retribusi Perizinan Tertentu</h2>
                            <p>Merupakan Retribusi yang dikenakan atas kegiatan tertentu Pemerintah Daerah dalam rangka pemberian izin kepada orang pribadi atau Badan yang dimaksudkan untuk pembinaan, pengaturan, pengendalinan dan pengawasan atas kegiatan, pemanfaatan ruang serta penggunaan sumberdaya alam, barang, prasarana, sarana atau fasilitas tertentu guna melindungi kepentingan umum dan menjaga kelestarian lingkungan.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<section class="ftco-section testimony-section bg-light">
    <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-2">Tentang Kami</h2>
        <span class="subheading">Bidang Retribusi, Pendapatan Lain-Lain, Bagi Hasil Pajak Dana Perimbangan</span>
        </div>
    </div>
    <div class="row justify-content-center ftco-animate">
        <div class="col-md-8">
        <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                    <div class="text text-justify">
                    <p class="mb-5">Kami mempunyai tugas menyiapkan bahan dan merumuskan kebijakan teknis di bidang retribusi, pendapatan lain-lain, bagi hasil pajak, dana perimbangan, serta bertanggung jawab memimpin pelaksanaan seluruh kegiatan pelayanan dan administrasi di bidang retribusi, pendapatan lain-lain, bagi hasil pajak, dan dana perimbangan. Bidang Retribusi memiliki fungsi sebagai berikut :</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                    <div class="text text-justify">
                    <p class="mb-1">
                        <ul>
                            <li class="mb-3">Penyusunan program kerja Bidang Retribusi, Pendapatan Lain-Lain, Bagi Hasil Pajak, Dana Perimbangan;</li>
                            <li class="mb-3">Penyiapan bahan dan perumusan kebijakan teknis di Bidang Retribusi;</li>
                            <li class="mb-3">Penyiapan bahan dan perumusan kebijakan teknis di Bidang Pendapatan Lain-Lain;</li>
                        </ul>
                    </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                    <div class="text text-justify">
                    <p class="mb-1">
                        <ul>
                            <li class="mb-3">Penyiapan bahan dan perumusan kebijakan teknis di Bidang Bagi Hasil Pajak, Dana Perimbangan;</li>
                            <li class="mb-3">Pengkoordinasian dan Fasilitasi terhadap pelaksanaan tugas dan fungsi di Bidang Retribusi Pendapatan Lain-Lain, Bagi Hasil Pajak, Dana Perimbangan;</li>
                            <li class="mb-3">Pembinaan dan Pengawasan terhadap pelaksanaan tugas dan fungsi di Bidang Retribusi, Pendapatan Lain-Lain, Bagi Hasil Pajak, Dana Perimbangan sesuai ketentuan Peraturan Perundang-Undangan;</li>
                        </ul>
                    </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                    <div class="text text-justify">
                    <p class="mb-1">
                        <ul>
                            <li class="mb-3">Penyelenggaraan unsur penunjang urusan pemerintahan Bidang Keuangan Sub Urusan Retribusi, Pendapatan Lain-Lain, Bagi Hasil Pajak, Dana Perimbangan sesuai ketentuan Peraturan Perundang-Undangan;</li>
                            <li class="mb-3">Penyelenggaraan kegiatan pelayanan dan administrasi di Bidang Retribusi, Pendapatan Lain-Lain, Bagi Hasil Pajak, Dana Perimbangan sesuai ketentuan Peraturan Perundang-Undangan;</li>
                            <li class="mb-3">Pemberian saran dan pertimbangan kepada Kepala Badan berkenaan dengan tugas dan fungsi di Bidang Retribusi, Pendapatan Lain-Lain, Bagi Hasil Pajak, Dana Perimbangan;</li>
                        </ul>
                    </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                    <div class="text text-justify">
                    <p class="mb-1">
                        <ul>
                            <li class="mb-3">Pelaksanaan evaluasi dan pelaporan terhadap pelaksanaan tugas di Bidang Retribusi, Pendapatan Lain-Lain, Bagi Hasil Pajak, Dana Perimbangan; dan</li>
                            <li class="mb-3">Pelaksanaan fungsi lain yang diberikan uleh Kepala Badan di Bidang Retribusi, Pendapatan Lain-Lain, Bagi Hasil Pajak, Dana Perimbangan sesuai ketentuan Peraturan Perundang-Undangan.</li>
                        </ul>
                    </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</section>

<section class="ftco-section ftco-work">
    <div class="container-fluid">
        <div class="row justify-content-center mb-3 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-2">Kategori Objek Retribusi</h2>
                <span class="subheading">Berikut adalah kategori yang membedakan setiap objek retribusi.</span>
                    
            </div>
        </div>
        
        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <table id="objek_detail" class="table table-sm table-striped table-hover">
                        <thead>
                            <tr style="text-align: center">
                                <th style="width: 10%">No</th>
                                <th>Kategori Retribusi</th>
                                <th>Jenis Retribusi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jenis as $jns_retri)
                            <tr>
                                <td style="text-align: center; vertical-align: middle">{{ $loop->iteration }}</td>
                                <td>
                                    <h5>{{ $jns_retri->nama_jenis }}</h5>
                                    Rekening Retribusi : {{ $jns_retri->norek_jenis }}
                                </td>
                                <td><h5>{{ $jns_retri->jns_retribusi }}</h5></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</section>

@endsection