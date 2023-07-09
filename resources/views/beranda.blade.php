@extends('layouts.main')

@section('body')

    <div class="hero-wrap">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">
                <div class="one-forth ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '40%' }">
                    <h1 class="mb-4"> Selamat Datang di 
                    <strong class="typewrite" data-period="3000" data-type='[ "SIMETRIS", "Sistem Informasi Promosi Retribusi", "Media Promosi Retribusi KalBar" ]'>
                        <span class="wrap"></span>
                    </strong>
                    </h1>
                    <p class="mb-md-5 mb-sm-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">SIMETRIS merupakan Sistem Informasi Promosi Retribusi dari BAPENDA Provinsi Kalimantan Barat bidang Retribusi, Izin Tertentu dan Pendapatan Lain-lain.
                        <br> SIMETRIS menjadi media promosi dan pemesanan retribusi bagi masyarakat Kalimantan Barat mengenai kekayaan daerah dan usaha daerah di Kalimantan Barat.
                    </p>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="/tarif" class="btn btn-primary px-4 py-2">Barang dan Jasa</a></p>
                </div>
                <div class="one-half mt-5">
                    <div class="slider-carousel owl-carousel">
                        <div class="item">
                            <img src="images/home/1.png" class="img-fluid img"alt="">
                        </div>
                        <div class="item">
                            <img src="images/home/2.png" class="img-fluid img"alt="">
                        </div>
                        <div class="item">
                            <img src="images/home/3.png" class="img-fluid img"alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <h3>Ada yang ingin anda pesan...?</h3>
                    <form action="/tarif" autocomplete="off">
                        <div class="input-group mb-3 ">
                            <input type="text" class="form-control" placeholder=" Cari Barang atau Jasa Retribusi" name="search" value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Cari Barang / Jasa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <section class="ftco-quote">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
                    <div class="heading-section heading-section-dark mb-5 ftco-animate">
                        <h2 class="mb-2">Bagaimana cara pesan ?</h2>
                    </div>
                    <div class="ftco-animate">
                        <p>
                            Anda dapat mencari jenis barang atau jasa tertentu yang ingin anda gunakan pada form searcing di atas. 
                            Sejumlah tarif untuk barang atau jasa tertentu dapat anda akses pada menu <a href="/tarif" class="btn btn-xs btn-primary">Tarif</a> 
                            dan langsung dapat mencari dan memesan barang atau jasa yang diinginkan.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 py-5 pl-md-5">
                    <div class="heading-section mb-5 ftco-animate">
                        <h2 class="mb-2">Apa yang terjadi setelah pesan ?</h2>
                    </div>
                        <p>Anda dapat langsung menyelesaikan administrasi pemesanan barang atau jasa setelah mendapatkan konfirmasi dari OPD / UPT yang bersangkutan. 
                            Setelah itu anda dapat datang ke lokasi OPD/UPT tersebut untuk mengambil barang atau konfirmasi jasa yang digunakan.</p>
                </div>
            </div>
        </div>
    </section>
    

    <style>
    @media (max-width: 768px) {
        .carousel-inner .carousel-item > div {
            display: none;
        }
        .carousel-inner .carousel-item > div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    /* display 3 */
    @media (min-width: 768px) {
        
        .carousel-inner .carousel-item-right.active,
        .carousel-inner .carousel-item-next {
        transform: translateX(33.333%);
        }
        
        .carousel-inner .carousel-item-left.active, 
        .carousel-inner .carousel-item-prev {
        transform: translateX(-33.333%);
        }
    }

    .carousel-inner .carousel-item-right,
    .carousel-inner .carousel-item-left{ 
    transform: translateX(0);
    }
    </style>
    <section class="ftco-section">
        <h2 class="text-center mb-3">Dinas / UPT Pengelola</h2>
        <p class="text-center mb-3">Berikut adalah beberapa Dinas / UPT pengelola retribusi <br>
        <a href="/kelola" class="btn btn-primary text-center mt-3">Selengkapnya</a></p>
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-80" data-ride="carousel">
                <div class="carousel-inner w-80" role="listbox">
                    @foreach ($kelola->chunk(3) as $dinas)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        @foreach($dinas as $kelolas)
                        <div class="col-md-4">
                            <div class="card card-body">
                                @if ($kelolas->foto_dinasopd)
                                    <img src="{{ asset('storage/'. $kelolas->foto_dinasopd) }}" alt="{{ $kelolas->nama_dinasopd }}" style="max-height: 300px; overflow: hidden;">
                                @else
                                    <img src="/images/prov_about.jpg" alt="Tanpa Foto" style="max-height: 300px; overflow: hidden;">
                                @endif
                                <h5 class="card-title">{{ $kelolas->nama_dinasopd }}</h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <script>
    $('#recipeCarousel').carousel({
    interval: 6000
    })

    $('.carousel .carousel-item').each(function(){
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
        next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        for (var i=0;i<minPerSlide;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            
            next.children(':first-child').clone().appendTo($(this));
        }
    });
    </script>
@endsection

