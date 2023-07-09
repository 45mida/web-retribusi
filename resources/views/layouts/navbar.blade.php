<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="images/banner_prov_kecil2.png" alt="logo banner" width="50%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="/" class="nav-link">Beranda</a></li>
                <li class="nav-item {{ Request::is('tentang') ? 'active' : '' }}"><a href="/tentang" class="nav-link">Tentang</a></li>
                <li class="nav-item {{ Request::is('tarif') ? 'active' : '' }}"><a href="/tarif" class="nav-link">Tarif</a></li>
                <li class="nav-item {{ Request::is('kelola') ? 'active' : '' }}"><a class="nav-link" href="/kelola">Kelola</a></li>
                <li class="nav-item {{ Request::is('tim') ? 'active' : '' }}"><a href="/tim" class="nav-link">Tim</a></li>
                <li class="nav-item {{ Request::is('kontak') ? 'active' : '' }}"><a href="/kontak" class="nav-link">Kontak</a></li>
                <li class="nav-item cta {{ Request::is('pesan') ? 'active' : '' }}"><a href="/pesan" class="nav-link"><span>Pesan Sesuatu...?</span></a></li>
                {{-- @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->username }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard"><small>Beranda SPORD</small></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><small>Logout</small></button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item cta {{ Request::is('login') ? 'active' : '' }}"><a href="/login" class="nav-link"><span>SPORD</span></a></li>
                @endauth --}}
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->