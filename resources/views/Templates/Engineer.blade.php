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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="{{ url('') }}/style.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/home.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/projects.css" rel="stylesheet" />
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
         <h4 class="namauser">Welcome, {{ auth()->user()->nama_user }} &nbsp
          <a href="/logout" style="color: black">
            <i class="fas fa-sm fa-power-off" title="Logout" style="color: #19569A;border: 2px solid;border-radius: 5px;padding:2px"></i>
          </a>
          @if($userLevel === 5)
          <a href="/login/choose" style="color: black">
            <i class="fas fa-sm fa-share" title="Switch Role" style="color: #19569A;border: 2px solid;border-radius: 5px;padding: 2px"></i>
          </a> 
          @endif
        </h4>
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
		  		<!-- <li class="{{ Request::is('engineer/doctools') ? 'active' : '' }}">
            <a href="/engineer/doctools">
              <span class="fas fa-file-alt mr-2"></span>Documents & Tools
            </a>
          </li> -->
          <li>
          	<a class="tree-toggle nav-header d-flex">
          			<span class="fas fa-clipboard-list ">&nbsp Project On Going</span>
                <i class="fas fa-chevron-circle-down rotate" style="padding-left: 70px"></i>
            </a>
	            <ul class="nav tree" style="display: none;">
	              <li class="{{ Request::is('engineer/projects') ? 'active' : '' }}"><a class="" href="/engineer/projects">Your Project</a></li>
                <li class="{{ Request::is('engineer/handover') ? 'active' : '' }}"><a class="" href="/engineer/handover">Handover Project</a></li>
                
	            </ul>
          </li>

          <li>
            <a class="tree-toggle nav-header d-flex">
                <span class="fas fa-clipboard-list ">&nbsp Project Done</span>
                <i class="fas fa-chevron-circle-down rotate" style="padding-left: 70px"></i>
            </a>
              <ul class="nav tree" style="display: none;">
                <li class="{{ Request::is('engineer/history') ? 'active' : '' }}"><a class="" href="/engineer/history">Your Project</a></li>
                <li class="{{ Request::is('engineer/historyhover') ? 'active' : '' }}"><a class="" href="/engineer/historyhover">Handover Project</a></li>
              </ul>
          </li>
          <!-- <li class="{{ Request::is('engineer/searchdocs') ? 'active' : '' }}">
            <a href="/engineer/searchdocs">
              <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li> -->
        </ul>
      </nav>

   	<div class="container-fluid">
   	<h2>@yield('PageTitle')</h2>
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
	<!-- ./container fluid -->
	</div>
<!-- ./wrapper -->
</div>
	
	
<!--   Core JS Files   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="{{ url('') }}/js/core/popper.min.js"></script>
<script src="{{ url('') }}/js/core/bootstrap.min.js"></script>
<script src="{{ url('') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ url('') }}/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ url('') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Datatables/jquery.dataTables.min.js"></script>
<!-- <script type="text/javascript" language="javascript" src="{{ url('') }}/js/Plugin/Datatables/dataTables.jqueryui.min.js"></script> -->
<script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/responsive.bootstrap4.js"></script>
<!-- <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/dataTables.bootstrap.js"></script> -->
<script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
<script src="{{ url('') }}/js/script.js"></script>

@stack('scripts')

<!-- JS Search All -->
<script>
	$(document).ready(function(){
	  $("#myInput").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#myTable tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});
</script>

<script>
	$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

		// Dropdown menu projects
		$('.tree-toggle').click(function() {
		    $(this).parent().children('ul.tree').toggle(300);
		});

		// Rotate icon dropdown
		$(".rotate").click(function () {
		$(this).toggleClass("fas fa-chevron-circle-down fas fa-chevron-circle-up");
	})
</script>

	<!-- <script>
	  function uploadfile () {
	      Swal.fire({
	        toast: true,
	        position: 'top',
	        showConfirmButton: false,
	        timer: 4000,
	        background:'#D4F1F4',
	        type: 'success',
	        title: 'File berhasil diupload'
	      })
	    }
	</script> -->
	<!-- <script>
		function uploadfile () {
	   	var file = $('#file').val();

		 if(file == ''){
	       Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  timerProgressBar:true,
			  // background:'lightgoldenrodyellow',
			  background:'#FFF4BD',
			  type: 'warning',
			  title: 'Tidak ada file yang bisa diupload'
			})

		    }else{
		 		Swal.fire({
				  toast: true,
				  position: 'top',
				  showConfirmButton: false,
				  timer: 4000,
				  background:'#D4F1F4',
				  type: 'success',
				  title: 'File berhasil diupload'
				})
		 	}}
	</script> -->
</body>

</html>