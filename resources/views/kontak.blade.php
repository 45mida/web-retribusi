@extends('layouts.main')

@section('body')


<div class="hero-wrap hero-wrap-2" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Beranda</a></span> <span>Kontak</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Kontak Kami</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Temukan Kami di:</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-4">
                <p><span>Alamat:</span> Jl. Adi Sucipto No.50, Bangka Belitung Laut, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78242</p>
            </div>
            <div class="col-md-4">
                <p><span>Telp:</span>081256188040 / 081248472928</p>
            </div>
            <div class="col-md-4">
                <p><span>Email:</span> <a href="mailto:bapendakalbarretribusipllbhpdp@gmail.com"> bapendakalbarretribusipllbhpdp@gmail.com</a></p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1994.9081254965326!2d109.365426!3d-0.05835499999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a0ddbe5d2becc76!2sBadan%20Pengelolaan%20Keuangan%20%26%20Pendapatan%20Daerah!5e0!3m2!1sid!2sid!4v1656002727524!5m2!1sid!2sid" width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection