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
  <link href="{{ url('') }}/css/projects.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/users.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet">
  <link href="{{ url('') }}/css/Plugin/Sweetalert/sweetalert2.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
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
          <!-- @yield('Welcome') -->
         <!--  dari sini
          <div class="dropdown-logout">
  <-- <ul class="nav navbar-nav navbar-right"> -->
      <!-- <li class="dropdown"> -->
        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#19569A"><h4 class="namauser">Welcome, {{ auth()->user()->nama_user }}</h4>
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu" style="background: white">
          <li>
            <a href="http://kodok.me/" style="color: #19569A">Logout &nbsp<i class="fas fa-lg fa-sign-out-alt"></i></a>
          </li> -->
        <!-- </ul> -->
      <!-- </li> --
    </ul>
  </div>
  sampai sini -->
          <h4 class="namauser">Welcome, {{ auth()->user()->nama_user }} &nbsp<a href="http://kodok.me/" style="color: black"><i class="fas fa-sm fa-power-off" title="Logout" style="color: #19569A;border: 2px solid;border-radius: 5px;padding: 2px"></i></a>
          </h4>
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
      	<li class="{{ Request::is('admin/archive') ? 'active' : '' }}">
         <!-- <li class="{{ 'admin/archive' == request()->path() ? 'active' : '' }} "> -->
					<a href="/admin/archive" >
						<span class="fa fa-book mr-2"></span>Archive Documents
					</a>
					</li>
					<li class="{{ Request::is('admin/searchdocs') ? 'active' : '' }}">
            <a href="/admin/searchdocs">
             <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li>
          <li class="{{ Request::is('admin/users') ? 'active' : '' }}">
						<a href="/admin/users">
							<span class="fas fa-users mr-2"></span>Users
						</a>
					</li>
          <li class="{{ Request::is('admin/products') ? 'active' : '' }}">
            <a href="/admin/products">
            <span class="fas fa-random mr-2"></span>Products
            </a>
          </li>
          <li class="{{ Request::is('admin/mitra') ? 'active' : '' }}">
            <a href="/admin/mitra">
            <span class="fas fa-university mr-2"></span>Mitra
            </a>
          </li>
        </ul>
      </nav>

    <div class="container-fluid">
    	<h2 style="margin-left: 10px">@yield('PageTitle')</h2>
    		@include('Layouts.Notif')
    		@yield('content')
        @include('Layouts.Modal')
        
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
<!-- <script src="{{ url('') }}/js/core/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="{{ url('') }}/js/core/popper.min.js"></script>
<script src="{{ url('') }}/js/core/bootstrap.min.js"></script>
<script src="{{ url('') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ url('') }}/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ url('') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="{{ url('') }}/js/Plugin/Datatables/dataTables.jqueryui.min.js"></script>
<script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/responsive.bootstrap4.js"></script>
<script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/dataTables.bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="{{ url('') }}/js/app.js')}}"></script>
<script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
<script src="{{ url('') }}/js/script.js"></script>

@stack('scripts')

<!-- Sidebar -->
<script>
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
    }); 
} );
</script>

<!-- Keeping modal open after validation error -->
<script>
  @if (count($errors) > 0)
    $('#modal').modal('show');
  @endif
</script>

</body>
</html>