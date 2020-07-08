<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('') }}/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ url('') }}/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <title>
    Paper Dashboard 2 by Creative Tim
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
<!--   <link href="{{ url('') }}/css/Plugin/Responsive/responsive.bootstrap4.scss" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Fixheader/fixedHeader.bootstrap4.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/jquery.dataTables.css" rel="stylesheet" /> -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!--<link href="{{ url('') }}/demo/demo.css" rel="stylesheet" />-->
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
          <h4 style="float:right; margin-right:5px">Welcome, Admin</h4>
        </div>
      </div>
    </div>
    </header>
	  
	  <div class="wrapper d-flex align-items-stretch">
	    <nav id="sidebar">
	  
      <ul class="list-unstyled components mb-5">
			<li class="active">
				<a href="./view_adminarchivedocuments.html">
					<span class="fa fa-book mr-2"></span>Archive Documents
				</a>
			</li>
			<li>
            <a href="./view_adminsearchdocuments.html">
             <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li>
         <!--  <li>
				<a href="./Filling - Admin.html">
					<span class="fas fa-folder-open mr-2"></span>Filling Documents
				</a>
			</li> -->
          <li>
			<a href="./view_adminusers.html">
				<span class="fas fa-users mr-2"></span>Users
			</a>
			</li>
          <li>
            <a href="./view_adminproducts.html">
            <span class="fas fa-random mr-2"></span>Products
            </a>
          </li>
        </ul>
      </nav>

     <div class="container-fluid">
     <div class="content">
       
	  <h2 style="margin-top:10px">Archive Documents</h2>
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
		<tr>
			<td>1</td>
			<td>IDE</td>
			<td>Sertifikasi</td>
			<td>Implementasi ATM Bersama Bank Artos</td>
			<td>
				<button type="button" class="btn-detail" data-toggle="modal" data-target="#model">Details</button>
				
				<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="left:20%; margin-top:50px">
				
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
												<select class="custom-select" id="status_select"> 
													<option value="collected">Collected</option>
													<option value="notcollected">Not Collected</option>
													<option value="postponed">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected" class="status_docs"></div>
													<div id="notcollected" class="status_docs"></div>
													<div id="postponed" class="status_docs">
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
												<select class="custom-select" id="status_select2"> 
													<option value="collected2">Collected</option>
													<option value="notcollected2">Not Collected</option>
													<option value="postponed2">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected2" class="status_docs2"></div>
													<div id="notcollected2" class="status_docs2"></div>
													<div id="postponed2" class="status_docs2">
														<br>
													<textarea placeholder="Notes" rows="2" id="comment_text2" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>BAE</td>
											<td>	
												<select class="custom-select" id="status_select3"> 
													<option value="collected3">Collected</option>
													<option value="notcollected3">Not Collected</option>
													<option value="postponed3">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected3" class="status_docs3"></div>
													<div id="notcollected3" class="status_docs3"></div>
													<div id="postponed3" class="status_docs3">
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
												<select class="custom-select" id="status_select4"> 
													<option value="collected4">Collected</option>
													<option value="notcollected4">Not Collected</option>
													<option value="postponed4">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected4" class="status_docs4"></div>
													<div id="notcollected4" class="status_docs4"></div>
													<div id="postponed4" class="status_docs4">
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
												<select class="custom-select" id="status_select5"> 
													<option value="collected5">Collected</option>
													<option value="notcollected5">Not Collected</option>
													<option value="postponed5">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected5" class="status_docs5"></div>
													<div id="notcollected5" class="status_docs5"></div>
													<div id="postponed5" class="status_docs5">
														<br>
													<textarea placeholder="Notes" rows="2" id="comment_text" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</br>
							</div>
							</div>
						</div>
					</div>					
				</div>	
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>AUF</td>
			<td>Internal Test</td>
			<td>Implementasi ATM Bersama Bank Nagari</td>
			<td>
				<button type="button" class="btn-detail" data-toggle="modal" data-target="#modal">Details</button>
				
				<!-- The Modal -->
				<div class="modal" id="modal" role="dialog" style="padding-left:17px; margin-top:100px">
				
				<!-- Modal content -->
					<div class="modal-content" style="width:80%">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATM Bersama Bank Nagari</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
									<table class="table1">
										<tr>
											<th>No</th>	
											<th>Dokumen</th>
											<th>Status</th>
										</tr>
										<tr>
											<td>1</td>
											<td>Nodin Penugasan</td>
											<td>	
												<select class="custom-select" style="margin-top:10px" style="padding:0px 2px 0px 2px" id="inputGroupSelect">
													<option value="1">Collected</option>
													<option value="2">Not Collected</option>
												</select>
												
												<button class="btn-ok" type="button" style="margin-top:0px">OK</button>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>BAKO</td>
											<td>	
												<select class="custom-select" style="margin-top:10px" style="padding:0px 2px 0px 2px" id="inputGroupSelect">
													<option value="1">Collected</option>
													<option value="2">Not Collected</option>
												</select>
												
												<button class="btn-ok" type="button" style="margin-top:0px">OK</button>
											</td>
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
		</tr>
		</tbody>
		</table>
	</br>
</div>
</div>
</div>

		<footer class="footer">
              <span class="copyright">
                Copyright ©
                <script>
                  document.write(new Date().getFullYear())
                </script>  All rights reserved
              </span>
      	</footer>

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
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Datatables/jquery.dataTables.min.js"></script>
  <!-- <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Datatables/jquery.dataTables.bootstrap4.min.js"></script> -->
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/Plugin/Datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/Plugin/Datatables/dataTables.jqueryui.min.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/responsive.bootstrap4.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/dataTables.bootstrap.js"></script>

<!-- JS Datatable pagination  -->
<script>
$(document).ready(function() {
    $('#table1').DataTable( { 
      pageSize: 8,     
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
	// Baris 1
  //hides dropdown content
  $(".status_docs").hide();
  
  //listen to dropdown for change
  $("#status_select").change(function(){
    //rehide content on change
    $('.status_docs').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });
  
  	// Baris 2
  //hides dropdown content
  $(".status_docs2").hide();

  //listen to dropdown for change
  $("#status_select2").change(function(){
    //rehide content on change
    $('.status_docs2').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

  // Baris 3
  //hides dropdown content
  $(".status_docs3").hide();

  //listen to dropdown for change
  $("#status_select3").change(function(){
    //rehide content on change
    $('.status_docs3').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

  // Baris 4
  //hides dropdown content
  $(".status_docs4").hide();

  //listen to dropdown for change
  $("#status_select4").change(function(){
    //rehide content on change
    $('.status_docs4').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

  // Baris 5
  //hides dropdown content
  $(".status_docs5").hide();

  //listen to dropdown for change
  $("#status_select5").change(function(){
    //rehide content on change
    $('.status_docs5').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });
  
});
</script>
</body>

</html>