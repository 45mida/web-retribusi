<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMRETDAR | Internal</title>

    <!-- Favicons -->
    <link href="/images/logo_prov_ikon.png" rel="icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/../css/internal/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/../css/internal/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/../css/internal/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/../css/internal/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/../css/internal/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/../css/internal/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/../css/internal/plugins/summernote/summernote-bs4.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="/../css/internal/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/../css/internal/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/../css/internal/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css" rel="stylesheet" /> 
    <link href="https://cdn.datatables.net/fixedcolumns/3.3.1/css/fixedColumns.bootstrap.min.css" rel="stylesheet"/> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/images/banner_prov_kecil2.png" alt="Logo">
        </div>
    
@include('dashboard.layouts.header')
    @include('dashboard.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Anda Login sebagai <strong>{{ auth()->user()->nama_lengkap }}</strong></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
        @yield('container')

    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2022 <a href="/">Retribusi, Pendapatan Lain-lain dan Dana Perimbangan</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.0
        </div>
    </footer>
    
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
        
<!-- jQuery -->
<script src="/../css/internal/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/../css/internal/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/../css/internal/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/../css/internal/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/../css/internal/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="/../css/internal/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/../css/internal/plugins/moment/moment.min.js"></script>
<script src="/../css/internal/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/../css/internal/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/../css/internal/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/../css/internal/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/../css/internal/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/../css/internal/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/../css/internal/dist/js/pages/dashboard.js"></script>
<!-- BS-Stepper -->
<script src="/../css/internal/plugins/bs-stepper/js/bs-stepper.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="/../css/internal/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/../css/internal/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/../css/internal/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/../css/internal/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/../css/internal/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/../css/internal/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/../css/internal/plugins/jszip/jszip.min.js"></script>
<script src="/../css/internal/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/../css/internal/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/../css/internal/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/../css/internal/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/../css/internal/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="/../css/internal/plugins/select2/js/select2.full.min.js"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false, "ordering": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $("#example2").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false, "ordering": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    });
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    });
</script>
</body>
</html>
