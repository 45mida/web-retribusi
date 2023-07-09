@extends('layouts.main')

@section('body')

    
<div class="hero-wrap hero-wrap-2" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Beranda</a></span> <span>Kelola</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Dinas/UPT Pengelola</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-work">
    <div class="container-fluid">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-2">Dinas / UPT Pengelola Retribusi</h2>
                <span class="subheading">Berikut adalah Dinas / UPT Pengelola Retribusi yang ada di Kalimantan Barat.</span>
                    
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-md-4">
                <form action="/kelola" autocomplete="off">
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" placeholder="Cari: Dinas / UPT" name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Cari Dinas/UPT</button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @if ($kelola->count())
            @foreach ($kelola as $kelolas)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if ($kelolas->foto_dinasopd)
                        <img src="{{ asset('storage/'. $kelolas->foto_dinasopd) }}" class="card-img-top img-fluid" alt="{{ $kelolas->nama_dinasopd }}" style="max-height: 300px; overflow: hidden;">
                    @else
                        <img src="/images/prov_about.jpg" alt="Tanpa Foto" style="max-height: 300px; overflow: hidden;">
                    @endif
                    <div class="card-body">
                    <h6 class="card-title">{{ $kelolas->nama_dinasopd }}</h6>
                    <p class="card-text">{{ $kelolas->jenis->nama_jenis }}</p>
                    <a href="/pesan" class="button btn-sm btn-success text-decoration-none">Pesan Barang/Jasa</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="justify-content-center col-lg-12">
            <h5 class="text-center fs-2">TIDAK ADA DATA OPD / UPT</h5>
        </div>
        @endif
        <div class="d-flex justify-content-center">
            {{ $kelola->links() }}
        </div>
    </div>
</section>
@endsection