<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/dashboard" class="brand-link mb-5 mt-3">
            <img src="/images/banner_prov_kecil2-wht.png" alt="Logo" class="brand-image" style="opacity: .9">
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/images/user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('dashboard.profil.edit') }}" class="d-block {{ Request::is('dashboard/profil*') ? 'active' : '' }}">{{ Str::upper(auth()->user()->username) }}</a>
            </div>
        </div>

        <div class="form-inline">
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item mb-3">
                    <a class="nav-link btn btn-success text-decoration-none" href="/" target="_blank">
                    Lihat Website Utama
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i> <p> Beranda</p>
                    </a>
                </li>
                @can('admin')
                <li class="nav-item">
                    <a href="/dashboard/user" class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-friends"></i> <p> Data Pengguna</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/kelola" class="nav-link {{ Request::is('dashboard/kelola*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-city"></i> <p> Data Dinas / UPT</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p> Data Retribusi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard/jenis" class="nav-link {{ Request::is('dashboard/jenis*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-money-check"></i> <p>Jenis Retribusi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/tarif" class="nav-link {{ Request::is('dashboard/tarif*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-money-bill"></i> <p>Tarif Retribusi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/tim" class="nav-link {{ Request::is('dashboard/tim*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users-cog"></i> <p>Tim Struktural</p>
                    </a>
                </li>
                @endcan
                <li class="nav-item">
                    <a href="/dashboard/spord" class="nav-link {{ Request::is('dashboard/spord*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-mail-bulk"></i> <p>Data SPORD</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/skrd" class="nav-link {{ Request::is('dashboard/skrd*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-copy"></i> <p>Data SKRD</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/sts" class="nav-link {{ Request::is('dashboard/sts*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i> <p>Data STS</p>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-light w-100"><i class="nav-icon fas fa-sign-out-alt"></i> Keluar</button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>