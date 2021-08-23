<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ url('assets/img/frog-solid.svg') }}">
    <!-- <title>Engineer | Dashboard</title> -->

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ url('assets/plugins/jquery-ui/jquery-ui.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/sweetalert2/sweetalert2.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ url('assets/plugins/toastr/toastr.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('assets/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    @stack('styles')
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-blue">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link">Welcome, {{ auth()->user()->nama_user }} &nbsp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout" role="button" title="Logout">
                      <i class="fas fa-power-off"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-navy elevation-4">
            <!-- Brand Logo -->
            <a href="/manager/home" class="brand-link" style="background: linear-gradient(#003371, #00478F)">
                <img src="{{ url('assets/img/frog.png') }}" alt="KODOK Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Sistem Dokumentasi</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar elevatio-2" style="background: linear-gradient(#003371, #00478F)">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        
                        <li class="nav-item">
                            <a href="/manager/home" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    HOME
                                    <i class="right fas fa-home-left"></i>
                                </p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="/manager/projects" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>
                                    List Projects
                                    <i class="fas fa-clipboard-list-left right"></i>
                                </p>
                            </a>
                        </li>
                        @if ($userLevel === 2)
                        <li class="nav-item">
                            <a href="/manager/assign" class="nav-link">
                                <i class="nav-icon fas fa-random"></i>
                                <p>
                                    Assign Projects
                                    <i class="fas fa-random-left right"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/manager/approval" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-check"></i>
                                <p>
                                    Approval Projects
                                    <i class="fas fa-clipboard-check-left right"></i>
                                </p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('PageTitle')</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                    @include('Layouts.Notif')
                    @include('Layouts.ModalList')
                    @include('Layouts.Modal')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('Layouts.Footer')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('assets/plugins/jquery-ui/jquery-ui.js') }}"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>

    <!-- Bootstrap 4 -->
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- ChartJS -->
    <script src="{{ url('assets/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- jQuery Knob Chart -->
    <script src="{{ url('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- daterangepicker -->
    <script src="{{ url('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ url('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <!-- overlayScrollbars -->
    <script src="{{ url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ url('assets/dist/js/adminlte.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('assets/dist/js/demo.js') }}"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Script JS -->
    <script src="{{ url('assets/dist/js/script.js') }}"></script>
    <script src="{{ url('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ url('assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ url('assets/dist/js/demo.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ url('assets/plugins/select2/js/select2.full.min.js') }}"></script>

</body>

</html>

@stack('scripts')

<script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>

<script>
 function approve () {
    Swal.fire({
      title: 'Yakin approve project ini?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: 'lightgrey',
      cancelButtonColor: 'dodgerblue',
      confirmButtonText: 'Ya',
      cancelButtonText: 'Tidak'
    }).then((result)=>{
      if(result.value){
        Swal.fire({
          title:'Project berhasil diapprove',
          icon:'success',
          toast:true,
          showConfirmButton:false,
          position: 'top',
          timer:1500,
          timerProgressBar:true,
          background:'#D4F1F4'
        })

      } else if (result.dismiss === 'cancel') {
        Swal.fire({
          title:'Project belum diapprove',
          icon:'info',
          toast:true,
          showConfirmButton:false,
          position:'top',
          grow:'row',
          timer:1500,
          timerProgressBar:true,
          background:'#D2FBA4'
        })
      }
    })
    }

    function decline () {
    var alasan = $('#alasan').val();

     if(alasan ==''){
         Swal.fire({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar:true,
        // background:'lightgoldenrodyellow',
        background:'#FFF4BD',
        type: 'warning',
        title: 'Mohon isi alasan'
      })

        }else{
        Swal.fire({
          toast: true,
          position: 'top',
          showConfirmButton: false,
          timer: 4000,
          background:'#D4F1F4',
          type: 'success',
          title: 'Project berhasil didecline'
        })
      }}
</script>