<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | {Engineer} Handover Projects
  </title>
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
          <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, Engineer</h4>
        </div>
      </div>
    </div>
    </header>
	  
<div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <ul class="list-unstyled components mb-5">
		  		<li class="{{ Request::is('engineer/doctools') ? 'active' : '' }}">
            <a href="/engineer/doctools">
              <span class="fas fa-file-alt mr-2"></span>Documents & Tools
            </a>
          </li>
          <li>
          	<a class="tree-toggle nav-header d-flex">
          			<span class="fas fa-clipboard-list ">&nbsp Projects</span>
                <i class="fas fa-chevron-circle-down rotate" style="padding-left: 70px"></i>
            </a>
	            <ul class="nav tree" style="display: none;">
	              <li class="{{ Request::is('engineer/projects') ? 'active' : '' }}"><a class="" href="/engineer/projects">Your Projects</a></li>
	              <li class="{{ Request::is('engineer/handover') ? 'active' : '' }}"><a class="" href="/engineer/handover">Handover</a></li>
	            </ul>
          </li>
          <li class="{{ Request::is('engineer/searchdocs') ? 'active' : '' }}">
            <a href="/engineer/searchdocs">
              <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li>
        </ul>
      </nav>

   	<div class="container-fluid">
   	<h2>@yield('PageTitle')</h2>
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
  <!-- <script type="text/javascript" language="javascript" src="{{ url('') }}/js/Plugin/Datatables/jquery.dataTables.min.js"></script> -->
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/Plugin/Datatables/dataTables.jqueryui.min.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/responsive.bootstrap4.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/dataTables.bootstrap.js"></script>

	<!-- JS Datatable pagination  -->
	<script>
	$(document).ready(function() {
	    $('#table1').DataTable( { 
	      // pageSize: 8,     
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

	<script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
	<script>
		function donehandover () {
			Swal.fire({
			  title: 'Yakin handover sudah selesai?',
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: 'lightgrey',
			  cancelButtonColor: 'dodgerblue',
			  confirmButtonText: 'Ya',
			  cancelButtonText: 'Tidak'
			}).then((result)=>{
				if(result.value){
					Swal.fire({
						title:'Handover telah selesai',
						type:'success',
						toast:true,
						showConfirmButton:false,
						position: 'top-end',
						timer:1500,
						timerProgressBar:true,
						background:'#D4F1F4'
					})

				} else if (result.dismiss === 'cancel') {
					Swal.fire({
						title:'Semangat handover',
						type:'info',
						toast:true,
						showConfirmButton:false,
						position:'top-end',
						grow:'row',
						// timer:1500,
						timerProgressBar:true,
						background:'#B4F5F0'
					})
				}
			})
			}
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