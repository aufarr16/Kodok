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
          Sistem Dokumentasi
        </div>
      <div class="col-md-6">
          <h4 style="float:right; margin-right:10px; margin-top: 5px">Welcome, Admin</h4>
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
    	<h2>@yield('PageTitle')</h2>
    		@include('Layouts.Notif')
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

	
@stack('scripts')
  <!--   Core JS Files   -->
  <script src="{{ url('') }}/js/core/jquery.min.js"></script>
  <script src="{{ url('') }}/js/core/popper.min.js"></script>
  <script src="{{ url('') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ url('') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
 
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/Plugin/Datatables/dataTables.jqueryui.min.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/responsive.bootstrap4.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/dataTables.bootstrap.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/app.js')}}"></script>
  <script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
	<script src="{{ url('') }}/js/script.js"></script>

<!-- JS Datatable pagination  -->
<script>
$(document).ready(function() {
    $('#table1').DataTable( { 
        "pageLength": 10, 
        "searching": true,
        "paging": true,
        "info": false,         
        "lengthChange":false
    } );
    $('#search1').DataTable( {
       	"pageLength": 10,     
         "searching": true,
         "paging": true, 
         "info": true,         
         "lengthChange":false,
    } );
} );
</script>

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

<!-- Hapus Data -->
<script>
$('body').on('click', '.btn-delete', function(event){
		event.preventDefault();

		var id = $(this).attr('id');

		Swal({
		  title: 'Yakin hapus data ini?',
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: 'lightgrey',
		  cancelButtonColor: 'dodgerblue',
		  confirmButtonText: 'Ya',
		  cancelButtonText: 'Tidak'
		}).then((result)=>{
			if(result.value){
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$.ajax({
					url: '/admin/delmitra/'+id,
					type: 'get',
					data: {
						'_method': 'DELETE'
					},

					success: function(response){
						// console.log(response);
						table.ajax.reload();

						Swal({
						title:'Data berhasil dihapus',
						type:'success',
						toast:true,
						showConfirmButton:false,
						position: 'top-end',
						// timer:1500,
						timerProgressBar:true,
						background:'palegreen'
						})
					},

					error: function(xhr){
						Swal({
							type: 'error',
							title: 'Oops...',
							text: 'Something went wrong!'
						})
					}
				})
			} else if (result.dismiss === 'cancel') {
				Swal({
					title:'Data tetap tersimpan',
					type:'info',
					toast:true,
					showConfirmButton:false,
					position:'top-end',
					grow:'row',
					// timer:1500,
					timerProgressBar:true,
					background:'#d6ebff'
				})
			}
		})
	})
</script>

</body>

</html>