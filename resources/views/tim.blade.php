@extends('layouts.main')

@section('body')

<div class="hero-wrap hero-wrap-2" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Beranda</a></span> <span>Tim</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tim Pengelola</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container-fluid col-lg-10">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-2">Tim Pengelola</h2>
                <span class="subheading">Berikut adalah tim pengelola retribusi, pendapatan lain-lain, bagi hasil pajak dana perimbangan</span>
                    
            </div>
        </div>

        <div class="row">
            @foreach ($tim as $team)
            <div class="col-lg-3  mb-3 ftco-animate">
                <div class="staff">
                    @if ($team->foto_tim)
                        <div class="img mb-4 card-img-top img-fluid" style="background-image: url({{ asset('storage/'. $team->foto_tim) }});"></div>
                    @else
                        <div class="img mb-4 card-img-top img-fluid" style="background-image: url(images/user.png);"></div>
                    @endif
                    <div class="info text-center">
                        <h3>{{ $team->nama_lengkap }}</h3>
                        <p>NIP. {{ $team->nip }}</p>
                        <span class="position">{{ $team->jabatan }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection