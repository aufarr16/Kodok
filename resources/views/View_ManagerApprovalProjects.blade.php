<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | {Manager} Approval Projects
  </title>
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
  <link href="{{ url('') }}/css/approval.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/search.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet">

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
          <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, Manager</h4>
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
          <li class="active">
            <a href="/manager/approval">
              <span class="fas fa-clipboard-check mr-2"></span>Approval Projects
            </a>
          </li>
          <li>
            <a href="/manager/searchdocs">
              <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li>
        </ul>
      </nav>

  <div class="container-fluid">
  <div class="content">
 	
	<h2 style="margin-top:10px">Approval Projects</h2>
	<div class="table-responsive-lg">
	<table class="table1" id="table1">
		<thead>
		<tr>
			<th>No</th>
			<th>Inisial</th>
			<th>Produk</th>
			<th>Jenis Project</th>
			<th>Nama Project</th>
			<th>Keterangan</th>
			<th>Docs</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		@foreach($data_approval as $dat_apr)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $dat_apr->inisial_user}}</td>
			<td>{{ $dat_apr->nama_product}}</td>
			<td>{{ $dat_apr->nama_ptype}}</td>
			<td>{{ $dat_apr->nama_project}}</td>
			<td>Request Approval {{ $dat_apr->nama_pstat}}</td>
			<td>
				<button type="button" class="btn-docs" data-toggle="modal" data-target="#modal"><i class="fa fa-search fa-lg"></i></button>
				
				<!-- The Modal -->
				<div class="modalapproval" id="modal" role="dialog">
				
				<!-- Modal content -->
					<div class="modal-contentapproval">
					<div class="modal-headerapproval">
						<a class="closeapproval" data-dismiss="modal">&times;</a>
						<h2 class="modal-titleapproval">Implementasi ATM Bersama Bank Artos</h2>
					</div>	
						<div class = "modal-bodyapproval">
							<div class = "input-groupapproval">
								<br>
									<table class="table1">
										<tr>
											<th rowspan="2">No</th>	
											<th rowspan="2">Dokumen</th>
											<th rowspan="2">Softcopy</th>
                      <th colspan="2">Hardcopy</th>
										</tr>
										<tr>
											<th>Status</th>
											<th>Notes</th>
										</tr>
										<tr>
											<td>1</td>
											<td>Nodin Penugasan</td>
											<td><a href="#" class="btnpreview" title="Preview Document"><i class="fas fa-search fa-lg icon-shadow"></i></a></td>
                      <td><small class="label lbl-collected"><i class="fas fa-thumbs-up"></i>&nbsp Collected</small></td>
                      <td>-</td>
										</tr>
										<tr>
											<td>2</td>
											<td>BAKO</td>
                      <td>-</td>
											<td><small class="label lbl-notcollected"><i class="fas fa-thumbs-down"></i>&nbsp Not Collected</small></td>
											<td>Alamat pengirim tidak ditemukan, dokumen akan dikirim kembali minggu depan (12 Juni 2020)</td>
										</tr>
									</table>
								</br>
							<!-- ./input group -->
							</div>
						<!-- ./modal body -->
						</div>
					<!-- ./modal content -->
					</div>	
				<!-- ./the modal -->
				</div>	
				
			</td>
			<td>
				<a href="#" class="btn-approve" style="height:1px width:1px"><i class="fa fa-check fa-lg"></i></a>
				<a href="#" class="btn-decline" title="Decline approval" data-toggle="modal" data-target="#modal1"><i class="fa fa-times fa-lg"></i></a>

	      <!-- The Modal -->
        <div class="modalket" id="modal1" role="dialog" style="padding-left:10px;">
                  
        <!-- Modal content -->
        <div class="modal-contentket">
	        <div class="modal-headerket">
	          <a class="closeket" data-dismiss="modal" aria-label="close">&times;</a>
	          <h5 class="modal-titleket">Implementasi ATM Bersama Fitur Standard dan Transfer pada Channel Mobile Banking Bank Artos</h5>
          </div>  	
					<div class = "modal-bodyket">
						<div class = "input-groupket">
								<label for="inisial">Alasan Decline:</label>
								<br>
								&nbsp
								<textarea id="comment_text" class="note_status" role="textbox"></textarea>
						
						<button class="btn-submitket" type="button" data-dismiss="modal">Submit</button>
						</div>
					<!-- ./modal body -->
					</div>
				<!-- ./modal content -->
				</div>
				<!-- ./modal -->
				</div>

			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<!-- Table responsive -->
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
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ url('') }}/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ url('') }}/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  
  <!-- JS Datatable    -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Datatables/jquery.dataTables.min.js"></script>
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