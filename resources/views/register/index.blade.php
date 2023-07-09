@extends('layouts.main')

@section('body')

<div class="hero-wrap hero-wrap-2" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Beranda</a></span>| <span class="mr-2"><a href="/login">SPORD</a></span>| <span>Daftar</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Pendaftaran Akun</h1>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center mt-5 mb-4">
    <div class="col-md-4 border rounded border-succes p-3">
        <main class="form-registration">
            <form class="border-primary" action="/register" method="POST">
                @csrf
                <h4 class="mb-3 fw-normal text-center">Pendaftaran Akun Pengajuan SPORD</h5>
                <div class="form-floating mb-3">
                    <label for="nama">Nama Lengkap :</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nama" placeholder="Nama Lengkap" required value="{{ old('name') }}" autofocus>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <label for="username">Username :</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <label for="email">Alamat Email :</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="nama@email.com" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <label for="password">Kata Sandi :</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Kata Sandi" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
            </form>
            <small class="d-block text-center mt-3">Sudah memiliki akun ? <a href="/login">Silahkan Login!</a></small>
        </main>
    </div>
</div>
    
@endsection