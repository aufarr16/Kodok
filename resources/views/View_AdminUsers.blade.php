<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | {Admin} Users
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
  <link href="{{ url('') }}/css/users.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet"></style>
<!--   <link href="{{ url('') }}/css/Plugin/Responsive/responsive.bootstrap4.scss" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Fixheader/fixedHeader.bootstrap4.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/jquery.dataTables.css" rel="stylesheet" /> -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ url('') }}/demo/demo.css" rel="stylesheet" />
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
    
      <!-- <div class=""> -->

      <ul class="list-unstyled components mb-5">
         <li>
				<a href="/admin/archive">
					<span class="fa fa-book mr-2"></span>Archive Documents
				</a>
			</li>
			<li>
            <a href="/admin/searchdocs">
             <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li>
         <!--  <li>
				<a href="./Filling - Admin.html">
					<span class="fas fa-folder-open mr-2"></span>Filling Documents
				</a>
			</li> -->
          <li class="active">
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
       
	   <h2 style="margin-top:10px">Users</h2>
			<div class="form-group">

				<button type="button" class="btn-add" data-toggle="modal" data-target="#modal" style="float:left">
					<span>New User <i class="fas fa-user-plus"></i><span>
				</button>
    
				<!-- <input id="myInput" name="search" placeholder="Search" type="text" style="margin-top:-10px; border:2px solid #ccc; border-radius:5px; font-size: 15px; width: 180px; float:right"> -->
				
				<!-- The Modal -->
				<div class="modal" id="modal" role="dialog" style="padding-left:17px; margin-top: 25px">
				
				<!-- Modal content -->
				<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Add New user</h2>
					</div>	
					<div class = "modal-body">
						<div class = "input-group">
							<div class ="input-group-addon">
								<label for="inisial" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
							</div>
								<input type="text" id="inisial" name="inisial" placeholder=" ">
						</div>
						<br>	
						<div class = "input-group">
							<div class ="input-group-addon">
								<label for="nama" style="font-weight:bolder">Nama</label>
							</div>	
								<input type="text" id="nama" name="nama" placeholder=" ">
						</div>
						<br>
						<div class = "input-group">
							<div class ="input-group-addon">						
								<label for="role" style="font-weight:bolder" style="margin:10px 50px">Role</label>
							</div>
								<select id="role" class="form control" style="height:35px"> 
									<option value="" hidden>Pilih Role</option>
									<option value="admin">Admin</option>
									<option value="manager">Manager</option>
									<option value="engineer">Engineer</option>
									<option value="guest">Guest</option>
								</select>
					
						</div>
						<br>
						<div class = "input-group">
							<div class ="input-group-addon">
								<label for="email" style="font-weight:bolder">Email</label>
							</div>	
								<input type="text" id="email" name="email" placeholder=" ">
						</div>
						<br>
					<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
					
				</div>
				</div>
				</div>
			</div>
			<!-- <input type="text" name="search" placeholder="Search" style="margin-left: 735px"> -->
		
		<table id="table1" class="table1" style="margin-top: -40px" style="overflow:auto">
		
		<thead>
			<tr>
				<th>No</th>
				<th>Inisial</th>
				<th>PIC</th>
				<th>Role</th>
				<th>Action</th>
				<th>Add By</th>
				<th>Modify By</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>IDE</td>
				<td>Ismi Destiawati</td>
				<td>Engineer</td>
				<td data-filter="false">
					<button title="edit user" class="btn-edit" data-toggle="modal" data-target="#modal1"><i class="fas fa-user-edit fa-lg"></i></button>
						<!-- <!-- The Modal -->
						<div class="modal" id="modal1" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit User</h2>
							</div>
							<div class = "modal-body">
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="inisial" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
									</div>
										<input type="text" id="inisial" name="inisial" placeholder=" ">
								</div>
								<br>	
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="nama" style="font-weight:bolder">Nama</label>
									</div>	
										<input type="text" id="nama" name="nama" placeholder=" ">
								</div>
								<br>
								<div class = "input-group">
									<div class ="input-group-addon">						
										<label for="role" style="font-weight:bolder" style="margin:10px 50px">Role</label>
									</div>
										<select id="role" name="role" style="height:35px">
											<option value="" hidden>Pilih Role</option>
											<option value="admin">Admin</option>
											<option value="manager">Manager</option>
											<option value="engineer">Engineer</option>
											<option value="guest">Guest</option>
										</select>
								</div>
								<br>
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="email" style="font-weight:bolder">Email</label>
									</div>	
										<input type="text" id="email" name="email" placeholder=" ">
								</div>
								<br>
							<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
							
							</div>
						</div>
						</div>
					<button onclick ="return confirm('Are you sure to delete this user?')" href='#' type="button" title="delete user" class="btn-delete"><i class="fas fa-trash fa-lg"></i></button>
				</td>
				<td>IDE</td>
				<td>DMR</td>
			</tr>
			<tr>
				<td>2</td>
				<td>DMR</td>
				<td>Devi Mayang Sari</td>
				<td>Admin</td>
				<td>
					<button title="edit user" class="btn-edit" data-toggle="modal" data-target="#modal2"><i class="fas fa-user-edit fa-lg"></i></button>
						<!-- <!-- The Modal -->
						<div class="modal" id="modal2" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit User</h2>
							</div>
							<div class = "modal-body">
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="inisial" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
									</div>
										<input type="text" id="inisial" name="inisial" placeholder=" ">
								</div>
								<br>	
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="nama" style="font-weight:bolder">Nama</label>
									</div>	
										<input type="text" id="nama" name="nama" placeholder=" ">
								</div>
								<br>
								<div class = "input-group">
									<div class ="input-group-addon">						
										<label for="role" style="font-weight:bolder" style="margin:10px 50px">Role</label>
									</div>
										<select id="role" name="role" style="height:35px">
											<option value="" hidden>Pilih Role</option>
											<option value="admin">Admin</option>
											<option value="manager">Manager</option>
											<option value="engineer">Engineer</option>
											<option value="guest">Guest</option>
										</select>
								</div>
								<br>
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="email" style="font-weight:bolder">Email</label>
									</div>	
										<input type="text" id="email" name="email" placeholder=" ">
								</div>
								<br>
							<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
							
							</div>
						</div>
						</div>
					<button onclick ="return confirm('Are you sure to delete this user?')" href='#' type="button"
						title="delete user" class="btn-delete"><i class="fas fa-trash fa-lg"></i></button>
				</td>
				<td>IDE</td>
				<td>DMR</td>
			</tr>
			<tr>
				<td>3</td>
				<td>RAS</td>
				<td>Rio Ari Saputra</td>
				<td>Manager</td>
				<td>
					<button class="btn-edit" title="edit user" data-toggle="modal" data-target="#modal3"><i class="fas fa-user-edit fa-lg"></i></button>
						<!-- <!-- The Modal -->
						<div class="modal" id="modal3" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit User</h2>
							</div>
							<div class = "modal-body">
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="inisial" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
									</div>
										<input type="text" id="inisial" name="inisial" placeholder=" ">
								</div>
								<br>	
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="nama" style="font-weight:bolder">Nama</label>
									</div>	
										<input type="text" id="nama" name="nama" placeholder=" ">
								</div>
								<br>
								<div class = "input-group">
									<div class ="input-group-addon">						
										<label for="role" style="font-weight:bolder" style="margin:10px 50px">Role</label>
									</div>
										<select id="role" name="role" style="height:35px">
											<option value="" hidden>Pilih Role</option>
											<option value="admin">Admin</option>
											<option value="manager">Manager</option>
											<option value="engineer">Engineer</option>
											<option value="guest">Guest</option>
										</select>
								</div>
								<br>
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="email" style="font-weight:bolder">Email</label>
									</div>	
										<input type="text" id="email" name="email" placeholder=" ">
								</div>
								<br>
							<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
							
							</div>
						</div>
						</div>
					<button onclick ="return confirm('Are you sure to delete this user?')" href='#' type="button" title="delete user" class="btn-delete"><i class="fas fa-trash fa-lg"></i></button>
				</td>
				<td>DMR</td>
				<td>IDE</td>
			</tr>
			<tr>
				<td>4</td>
				<td>AUF</td>
				<td>Aufar Rizqi</td>
				<td>Guest</td>
				<td>
					<button class="btn-edit" title="edit user" data-toggle="modal" data-target="#modal4"><i class="fas fa-user-edit fa-lg"></i></button>
						<!-- <!-- The Modal -->
						<div class="modal" id="modal4" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit User</h2>
							</div>
							<div class = "modal-body">
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="inisial" style="font-weight:bolder" style="margin-top: -30px">Inisial</label>
									</div>
										<input type="text" id="inisial" name="inisial" placeholder=" ">
								</div>
								<br>	
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="nama" style="font-weight:bolder">Nama</label>
									</div>	
										<input type="text" id="nama" name="nama" placeholder=" ">
								</div>
								<br>
								<div class = "input-group">
									<div class ="input-group-addon">						
										<label for="role" style="font-weight:bolder" style="margin:10px 50px">Role</label>
									</div>
										<select id="role" name="role" style="height:35px">
											<option value="" hidden>Pilih Role</option>
											<option value="admin">Admin</option>
											<option value="manager">Manager</option>
											<option value="engineer">Engineer</option>
											<option value="guest">Guest</option>
										</select>
								</div>
								<br>
								<div class = "input-group">
									<div class ="input-group-addon">
										<label for="email" style="font-weight:bolder">Email</label>
									</div>	
										<input type="text" id="email" name="email" placeholder=" ">
								</div>
								<br>
							<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
							
							</div>
						</div>
						</div>
					<button onclick ="return confirm('Are you sure to delete this user?')" href='#' type="button" title="delete user" class="btn-delete"><i class="fas fa-trash fa-lg"></i></button>
				</td>
				<td>RAS</td>
				<td>AUF</td>
			</tr>
		</tbody>
	</table>
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
         "paging": false, 
         "info": false,         
         "lengthChange":false
           } );
} );
</script>
<!-- JS Search All -->
<!-- <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->
<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
</body>

</html>