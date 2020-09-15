<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | {Admin} Archive Documents
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
  <link href="{{ url('') }}/css/arsipadmin.css" rel="stylesheet" />
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
          <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, Admin</h4>
        </div>
      </div>
    </div>
    </header>
	  
	<div class="wrapper d-flex align-items-stretch">
	    <nav id="sidebar">
	  
      <ul class="list-unstyled components mb-5">
			<li class="active">
				<a href="/admin/archive">
					<span class="fa fa-book mr-2"></span>Archive Documents
				</a>
			</li>
			<li>
            <a href="/admin/searchdocs">
             <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li>
          <li>
			<a href="/admin/users">
				<span class="fas fa-users mr-2"></span>Users
			</a>
			</li>
          <li>
            <a href="/admin/products">
            <span class="fas fa-random mr-2"></span>Products
            </a>
          </li>
          <li>
            <a href="/admin/mitra">
            <span class="fas fa-university mr-2"></span>Mitra
            </a>
          </li>
        </ul>
      </nav>

	<div class="container-fluid">
	<div class="content">
       
	  <h2 style="margin-top:10px">Archive Documents</h2>
		<div class="table-responsive-lg">	
		<table class="table1" id="table1" style="overflow:auto">
		<thead>
		<tr>
			<th>No</th>
			<th>Inisial</th>
			<th>Jenis Project</th>
			<th>Nama Project</th>
			<th>Status Docs</th>
		</tr>
		</thead>
		<tbody">
		@foreach($data_archive as $dat_arc)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $dat_arc->inisial_user}}</td>
			<td>{{ $dat_arc->nama_ptype}}</td>
			<td>{{ $dat_arc->nama_project}}</td>
			<td>
				<button type="button" class="btn-detail" data-toggle="modal" data-target="#modal1">Details</button>
				
				<!-- The Modal -->
				<div class="modal" id="modal1" role="dialog" style="left:20%; margin-top:50px">
				
				<!-- Modal content -->
					<div class="modal-content" style="width:50%">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATM Bersama Bank Artos</h2>
					</div>	
						<div class = "modal-body" id="style-7">
							<div class="force-overflow">
							<div class = "input-group">
								<br>
									<table class="table1 fixedHeader" style="margin:-20px 10px -20px 10px">
										<tr>
											<th>No</th>	
											<th>Dokumen</th>
											<th>Status</th>
										</tr>
										<tr>
											<td>1</td>
											<td>Nodin Penugasan</td>
											<td>	
												<select class="custom-select" id="status_select1"> 
													<option value="collected1">Collected</option>
													<option value="notcollected1">Not Collected</option>
													<option value="postponed1">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected1" class="status_docs1"></div>
													<div id="notcollected1" class="status_docs1"></div>
													<div id="postponed1" class="status_docs1">
														<br>
														<textarea placeholder="Notes" rows="2" id="comment_text" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>BAKO</td>
											<td>	
												<select class="custom-select" id="status_select1_2"> 
													<option value="collected1_2">Collected</option>
													<option value="notcollected1_2">Not Collected</option>
													<option value="postponed1_2">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected1_2" class="status_docs1_2"></div>
													<div id="notcollected1_2" class="status_docs1_2"></div>
													<div id="postponed1_2" class="status_docs1_2">
														<br>
														<textarea placeholder="Notes" rows="2" id="comment_text" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>BAE</td>
											<td>	
												<select class="custom-select" id="status_select1_3"> 
													<option value="collected1_3">Collected</option>
													<option value="notcollected1_3">Not Collected</option>
													<option value="postponed1_3">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected1_3" class="status_docs1_3"></div>
													<div id="notcollected1_3" class="status_docs1_3"></div>
													<div id="postponed1_3" class="status_docs1_3">
														<br>
														<textarea placeholder="Notes" rows="2" id="comment_text" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>BATO</td>
											<td>	
												<select class="custom-select" id="status_select1_4"> 
													<option value="collected1_4">Collected</option>
													<option value="notcollected1_4">Not Collected</option>
													<option value="postponed1_4">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected1_4" class="status_docs1_4"></div>
													<div id="notcollected1_4" class="status_docs1_4"></div>
													<div id="postponed1_4" class="status_docs1_4">
														<br>
														<textarea placeholder="Notes" rows="2" id="comment_text" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>BATO</td>
											<td>	
												<select class="custom-select" id="status_select1_5"> 
													<option value="collected1_5">Collected</option>
													<option value="notcollected1_5">Not Collected</option>
													<option value="postponed1_5">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected1_5" class="status_docs1_5"></div>
													<div id="notcollected1_5" class="status_docs1_5"></div>
													<div id="postponed1_5" class="status_docs1_5">
														<br>
														<textarea placeholder="Notes" rows="2" id="comment_text" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</br>
							<!-- ./input group -->
							</div>
							<!-- ./force overflow -->
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
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
<script>
	$(document).ready(function(){
	// 1 - Baris 1
  //hides dropdown content
  $(".status_docs1").hide();
  
  //listen to dropdown for change
  $("#status_select1").change(function(){
    //rehide content on change
    $('.status_docs1').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });
  
  	// 1 - Baris 2
  //hides dropdown content
  $(".status_docs1_2").hide();

  //listen to dropdown for change
  $("#status_select1_2").change(function(){
    //rehide content on change
    $('.status_docs1_2').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

  // 1 - Baris 3
  //hides dropdown content
  $(".status_docs1_3").hide();

  //listen to dropdown for change
  $("#status_select1_3").change(function(){
    //rehide content on change
    $('.status_docs1_3').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

  // 1 - Baris 4
  //hides dropdown content
  $(".status_docs1_4").hide();

  //listen to dropdown for change
  $("#status_select1_4").change(function(){
    //rehide content on change
    $('.status_docs1_4').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

  // 1 - Baris 5
  //hides dropdown content
  $(".status_docs1_5").hide();

  //listen to dropdown for change
  $("#status_select1_5").change(function(){
    //rehide content on change
    $('.status_docs1_5').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

  // 2 - Baris 1
  //hides dropdown content
  $(".status_docs2_1").hide();

  //listen to dropdown for change
  $("#status_select2_1").change(function(){
    //rehide content on change
    $('.status_docs2_1').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

   // 2 - Baris 2
  //hides dropdown content
  $(".status_docs2_2").hide();

  //listen to dropdown for change
  $("#status_select2_2").change(function(){
    //rehide content on change
    $('.status_docs2_2').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });


});
</script>
</body>

</html>