<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | {Manager} Search Documents
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
          <h4 style="float:right; margin-right:5px">Welcome, Manager</h4>
        </div>
      </div>
    </div>
    </header>
    
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
      <ul class="list-unstyled components mb-5">
          <li>
            <a href="/manager/home">
           <span class="fa fa-home mr-2"></span>Home
            </a>
          </li>
          <li>
            <a href="/manager/projects">
             <span class="fas fa-clipboard-list mr-2"></span>List Projects
            </a>
          </li>
          <li>
            <a href="/manager/assign">
             <span class="fa fa-pencil-square-o mr-2"></span>Assign Projects
            </a>
          </li>    
          <li>
            <a href="/manager/approval">
              <span class="fas fa-clipboard-check mr-2"></span>Approval Projects
            </a>
          </li>
          <li class="active">
            <a href="/manager/searchdocs">
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
		<tr>
			<td>1</td>
			<td>Bank Nagari</td>
			<td>Implementasi ATMB Debit Bank Nagari &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
					<i class="fa fa-search fa-lg"></i>
				</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px; margin-top: 20px">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Debit Bank Nagari</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1" id="search1">
								<thead>
									<tr>
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><a href="#" class="btn-doc" title="Preview dokumen">400/ND/117/2020</a></td>
										<td>	
											<a href="#" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></a>
											<a href="#" class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><a href="#" class="btn-doc" title="Preview dokumen">006/02/BAKO-DEBIT/223/II/2020</button></td>
										<td>	
											<a href="#" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></a>
											<a href="#" class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
										</td>
										<td>Bantex tahun 2020 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><a href="#" class="btn-doc" title="Preview dokumen">006/02/BAE-DEBIT/223/II/2020</button></td>
										<td>	
											<a href="#" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></a>
											<a href="#" class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
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
			<td>IDE</td>
			<td>2020</td>
		<tr>
			<td>2</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#modal2">
					<i class="fa fa-search fa-lg"></i>
				</button>
					
					<!-- The Modal -->
				<div class="modal" id="modal2" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1" id="search2">
								<thead>
									<tr>
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><a href="#" class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<a href="#" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></a>
											<a href="#" class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><a href="#" class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<a href="#" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></a>
											<a href="#" class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><a href="#" class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<a href="#" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></a>
											<a href="#" class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
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
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Bank DKI</td>
			<td>Implementasi Implementasi Indosat bank DKI pada Channel Internet Banking &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#modal3">
					<i class="fa fa-search fa-lg"></i>
				</button>
					
					<!-- The Modal -->
				<div class="modal" id="modal3" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi Implementasi Indosat bank DKI pada Channel Internet Banking</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1" id="search3">
								<thead>
									<tr>
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><a href="#" class="btn-doc" title="Preview dokumen">446/ND/130/2019</button></td>
										<td>	
											<a href="#" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></a>
											<a href="#" class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><a href="#" class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/228/III/2019</button></td>
										<td>	
											<a href="#" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></a>
											<a href="#" class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><a href="#" class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<a href="#" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></a>
											<a href="#" class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
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
			<td>DMR</td>
			<td>2019</td>
		</tr>
		
		</tbody>
	</table>
	<!-- table responsive -->
	</div>
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
</body>

</html>