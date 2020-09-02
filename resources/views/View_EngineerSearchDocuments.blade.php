<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | Engineer} Search Documents
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Aleo:300,400,500,600,700,800,900" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="{{ url('') }}/css/home.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/projects.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/search.css" rel="stylesheet" />
  <link href="{{ url('') }}/style.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Responsive/responsive.bootstrap4.scss" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet"></style>
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.bootstrap4.min.css" rel="stylesheet"></style>
  <link href="{{ url('') }}/css/Plugin/Sweetalert/sweetalert2.min.css" rel="stylesheet" />

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
          <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome,Engineer</h4>
        </div>
      </div>
    </div>
    </header>
    
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
	  
      <!-- <div class=""> -->

      <ul class="list-unstyled components mb-5">
      	<li>
            <a href="/engineer/doctools">
              <span class="fas fa-file-alt mr-2"></span>Documents & Tools
            </a>
          </li>
          <li>
          <li>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false">
              <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fas fa-clipboard-list mr-2"></span>
                <span class="menu-collapsed">Projects</span>
                <span class="fa" style="padding-left: 60px"></span>
              </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
              <a href="/engineer/projects" class="list-group-item list-group-item-action">
                <span class="fas fa-tasks mr-1" style="margin-left: 13px"></span>
                  <span class="menu-collapsed" style="font-size: 14px">Your Projects</span>
              </a>
              <a href="/engineer/handover" class="list-group-item list-group-item-action">
                <span class="fas fa-stream mr-1" style="margin-left: 13px"></span>
                <span class="menu-collapsed" style="font-size: 14px">Handover Projects</span>
              </a>
            </div>  
          </li>
          <li class="active">
            <a href="/engineer/searchdocs">
              <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li>
        </ul>
      </nav>

    <div class="container-fluid">
    <div class="content">
	  
    <h2 style="margin-top:10px">Search Documents</h2>
		<div class="table-responsive-lg">
		<table class="table1" id="table1">
		
		<thead>
		<tr>
			<th>No</th>
			<th>Nama Mitra</th>
			<th>Nama Project</th>
			<th>PIC</th>
			<th>Tahun</th>
		</tr>
		</thead>
		
		<tbody>
		@foreach($data_search as $dat_sdoc)	
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $dat_sdoc->nama_mitra }}</td>
			<td>{{ $dat_sdoc->nama_project }} &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#{{ $dat_sdoc->id_project }}">
					<i class="fa fa-search fa-lg"></i>
				</button>
					
					<!-- The Modal -->
				<div class="modal" id="{{ $dat_sdoc->id_project }}" role="dialog" style="padding-left:17px; margin-top: 20px">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">{{ $dat_sdoc->nama_project }}</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1" id="search1">
								<thead>
									<tr>
										<th>No</th>
										<th>Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td>	
										  <button type="button" class="btnpreview" title="Preview Document"><i class="fas fa-search fa-lg icon-shadow"></i></button>
                      <button type="button" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button onclick="sendemail()" type="button" class="btnsend" title="Kirim ke email" id="email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td>	
											<button type="button" class="btnpreview" title="Preview Document"><i class="fas fa-search fa-lg icon-shadow"></i></button>
                      <button type="button" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button onclick="sendemail()" type="button" class="btnsend" title="Kirim ke email" id="email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2020 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td>	
											<button type="button" class="btnpreview" title="Preview Document"><i class="fas fa-search fa-lg icon-shadow"></i></button>
                      <button type="button" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button onclick="sendemail()" type="button" class="btnsend" title="Kirim ke email" id="email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2020 (BAE)</td>
									</tr>
								
							</table>
							<!-- ./input group -->
							</div>
						<!-- modal body -->
						</div>
					<!-- ./modal content -->
					</div>
				<!-- ./modal -->
				</div>
			</td>
			<td>{{ $dat_sdoc->inisial_user}}</td>
			<td>{{ $dat_sdoc->tahun}}</td>
		</tr>
		@endforeach		
		</tbody>
	</table>

	<!-- table responsive -->
	</div>
	</br>
	<!-- ./content -->
	</div>

	<!-- footer -->
  	<div class="blockquote text-right">
        <span>Copyright © 
        <script>
          document.write(new Date().getFullYear())
        </script>
        All rights reserved
      </span>
    <!-- </footer> -->
  	</div>

	<!-- ./container fluid -->
	</div>
<!-- ./wrapper -->
</div>
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

<!-- JS Datatable pagination  -->
<script>
$(document).ready(function() {
    $('#table1').DataTable( { 
      //pageSize: 8,     
      	"pageLength":10,
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
    $('#search2').DataTable( {
       "pageLength": 10,     
         "searching": true,
         "paging": true, 
         "info": true,         
         "lengthChange":false,
           } );
    $('#search3').DataTable( {
       "pageLength": 10,     
         "searching": true,
         "paging": true, 
         "info": true,         
         "lengthChange":false,
           } );
    $('#search4').DataTable( {
       "pageLength": 10,     
         "searching": true,
         "paging": true, 
         "info": true,         
         "lengthChange":false,
           } );
    $('#search5').DataTable( {
       "pageLength": 10,     
         "searching": true,
         "paging": true, 
         "info": true,         
         "lengthChange":false,
           } );
   
} );
</script>
<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
<script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
<script>
  function sendemail () {
      Swal.fire({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 4000,
        background:'#D4F1F4',
        type: 'success',
        title: 'Email berhasil dikirim'
      })
    }

</script>
</body>

</html>