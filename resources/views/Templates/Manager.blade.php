<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Aleo:300,400,500,600,700,800,900" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="{{ url('') }}/style.css" type="text/css" rel="stylesheet">
  <link href="{{ url('') }}/css/home.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/users.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/projects.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet">
  <link href="{{ url('') }}/css/Plugin/Sweetalert/sweetalert2.min.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"> -->
  @stack('styles')
</head>

<body>
  <header class="main-header">
     <div class="custom-menu">
      <div class="row">
        <div class="col-md-6">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
         <i class="fas fa-align-justify fa-2x"></i>
        </button>
          <h4 class="namauser">Welcome, {{ auth()->user()->nama_user }} &nbsp<a href="/logout" style="color: black"><i class="fas fa-sm fa-power-off" title="Logout" style="color: #19569A;border: 2px solid;border-radius: 5px; padding: 2px"></i></a></h4>
          <!-- <div class="logout"></div> -->
        </div>
        <div class="col-md-6">
          <div class="namaweb">Sistem Dokumentasi</div>
        </div>
      </div>
    </div>
   </header>
  
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <ul class="list-unstyled components mb-5">
          <li class="{{ Request::is('manager/home') ? 'active' : '' }}">
            <a href="/manager/home">
           <span class="fa fa-home mr-2"></span>Home
            </a>
          </li>
          <li class="{{ Request::is('manager/projects') ? 'active' : '' }}">
            <a href="/manager/projects">
             <span class="fas fa-clipboard-list mr-2"></span>List Projects
            </a>
          </li>
          <li class="{{ Request::is('manager/assign') ? 'active' : '' }}">
            <a href="/manager/assign">
             <span class="fa fa-pencil-square-o mr-2"></span>Assign Projects
            </a>
          </li>    
          <li class="{{ Request::is('manager/approval') ? 'active' : '' }}">
            <a href="/manager/approval">
              <span class="fas fa-clipboard-check mr-2"></span>Approval Projects
            </a>
          </li>
          <!-- <li class="{{ Request::is('manager/searchdocs') ? 'active' : '' }}">
            <a href="/manager/searchdocs">
              <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li> -->
        </ul>
      </nav>

  <div class="container-fluid">
      <h2>@yield('PageTitle')</h2>
      @include('Layouts.Notif')
      @include('Layouts.Modal')
      @yield('content')

  <!-- footer -->
    <!-- <div class="blockquote text-left"> -->
        <footer class="footer fixed-bottom">
          <span>Copyright © 
        <script>
          document.write(new Date().getFullYear())
        </script>
        All rights reserved
      </span>
    <!-- </footer> -->
    </footer>
  <!-- ./container fluid -->
  </div>
<!-- ./wrapper -->
</div>

  <!--   Core JS Files   -->
  <script src="{{ url('') }}/js/core/jquery.min.js"></script>
  <script src="{{ url('') }}/js/core/popper.min.js"></script>
  <script src="{{ url('') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ url('') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ url('') }}/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- JS Datatable    -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
  <!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Datatables/jquery.dataTables.min.js"></script>
  <!-- <script type="text/javascript" language="javascript" src="{{ url('') }}/js/Plugin/Datatables/dataTables.jqueryui.min.js"></script> -->
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/responsive.bootstrap4.js"></script>
 <!--  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/dataTables.bootstrap.js"></script> -->
  <script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
  <script src="{{ url('') }}/js/script.js"></script>

  @stack('scripts')    

<script>
  $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
      });
  });
</script>

<script>
 function approve () {
    Swal.fire({
      title: 'Yakin approve project ini?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: 'lightgrey',
      cancelButtonColor: 'dodgerblue',
      confirmButtonText: 'Ya',
      cancelButtonText: 'Tidak'
    }).then((result)=>{
      if(result.value){
        Swal.fire({
          title:'Project berhasil diapprove',
          type:'success',
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
          type:'info',
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

</body>
</html>