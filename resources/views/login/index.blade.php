<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in Internal Retribusi</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/internal/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../css/internal/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/internal/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition login-page">
        <div class="container align-items-center">
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <img src="/images/login-page-img.png" alt="Gambar Utama" width="90%">
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="login-box">
                        <!-- /.login-logo -->
                        <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                            <a href="#" class="h1"><b>Log in</b> Internal</a>
                        </div>
                        <div class="card-body">
                            <p class="login-box-msg">Sistem Manajemen Retribusi Internal</p>
            
                            @if (session()->has('berhasil'))
                                <div class="alert alert-success fade show" role="alert">
                                    {{ session('berhasil') }}
                                </div>
                            @endif
            
                            @if (session()->has('loginError'))
                                <div class="alert alert-danger fade show" role="alert">
                                    {{ session('loginError') }}
                                </div>
                            @endif
            
                            <form action="/login" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="nama@email.com" autofocus required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope-open-text"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Kata Sandi" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                            </form>
            
                            <div class="social-auth-links text-center mt-2 mb-3">
                                <a href="/" class="btn btn-block btn-success">
                                    <i class="fas fa-globe mr-2"></i> Website SIMETRIS
                                </a>
                                <a href="/register" class="btn btn-block btn-danger">
                                    <i class="fas fa-pen-nib mr-2"></i> Daftar Operator OPD/UPT
                                </a>
                            </div>
                            <!-- /.social-auth-links -->
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.login-box -->
                </div>
            </div>
        </div>

    <!-- jQuery -->
    <script src="../css/internal/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../css/internal/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../css/internal/dist/js/adminlte.min.js"></script>
</body>
</html>
