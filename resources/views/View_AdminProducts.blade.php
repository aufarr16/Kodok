<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | {Admin} Products
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
          <li>
			<a href="/admin/users">
				<span class="fas fa-users mr-2"></span>Users
			</a>
			</li>
          <li class="active">
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
       
	   <h2 style="margin-top:10px">Products</h2>
			<div class="form-group">

				<button type="button" class="btn-add" data-toggle="modal" data-target="#modal" style="float:left">
					<span>Add Products &nbsp<i class="fas fa-plus fa-lg"></i><span>
				</button>
    
				<!-- The Modal -->
				<div class="modal" id="modal" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
				<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Add New Products</h2>
					</div>	
					<div class = "modal-body">
						
						<div class = "input-group">
							<div class ="input-group-addon">
								<label for="namaproduct" style="font-weight:bolder" style="margin-top: -30px">Nama Product</label>
							</div>
								<input type="text" id="namaproduct" name="namaproduct" placeholder=" ">
						</div>
						<br>
					<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
					<!-- ./modal body -->
					</div>
				<!-- ./modal content -->
				</div>
				<!-- ./modal -->
				</div>
			<!-- ./form group -->
			</div>
			
		<table id="table1" class="table1" style="margin-top: -40px" style="overflow:auto">
		
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Products</th>
				<th>Action</th>
				<th>Add By</th>
				<th>Modify By</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>ATM Bersama</td>
				<td data-filter="false">
					<button title="edit products" class="btn-edit" data-toggle="modal" data-target="#modal1"><i class="fas fa-pencil-alt fa-lg"></i></button>
						<!-- The Modal -->
						<div class="modal" id="modal1" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit Products</h2>
							</div>
							<div class = "modal-body">
								
							<div class = "input-group">
								<div class ="input-group-addon">						
									<label for="nama_products" style="font-weight:bolder" style="margin:10px 50px">Nama Products</label>
								</div>
								<input type="text" id="nama" name="nama" placeholder=" ">
							</div>
							<br>	
							<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
							<!-- ./modal content -->
							</div>
						<!-- ./modal body -->
						</div>
						<!-- modal -->
						</div>
							<a onclick ="return confirm('Are you sure to delete this product?')" href='#' type="button" title="delete products" class="btn-delete"><i class="fas fa-trash fa-lg"></i></a>
						
				</td>
				<td>IDE</td>
				<td>DMR</td>
			</tr>
			<tr>
				<td>2</td>
				<td>ATMB Debit</td>
				<td data-filter="false">
					<button title="edit products" class="btn-edit" data-toggle="modal" data-target="#modal2"><i class="fas fa-pencil-alt fa-lg"></i></i></button>
						<!-- The Modal -->
						<div class="modal" id="modal2" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit Products</h2>
							</div>
							<div class = "modal-body">
								
							<div class = "input-group">
								<div class ="input-group-addon">						
									<label for="nama_products" style="font-weight:bolder" style="margin:10px 50px">Nama Products</label>
								</div>
								<input type="text" id="nama" name="nama" placeholder=" ">
							</div>
							<br>	
							<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
							<!-- ./modal content -->
							</div>
						<!-- ./modal body -->
						</div>
						<!-- modal -->
						</div>
						<a onclick ="return confirm('Are you sure to delete this product?')" href='#' type="button" title="delete products" class="btn-delete"><i class="fas fa-trash fa-lg"></i></a>
				</td>
				<td>DMR</td>
				<td>IDE</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Payment</td>
				<td data-filter="false">
					<button title="edit products" class="btn-edit" data-toggle="modal" data-target="#modal3"><i class="fas fa-pencil-alt fa-lg"></i></i></button>
						<!-- The Modal -->
						<div class="modal" id="modal3" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit Products</h2>
							</div>
							<div class = "modal-body">
								
							<div class = "input-group">
								<div class ="input-group-addon">						
									<label for="nama_products" style="font-weight:bolder" style="margin:10px 50px">Nama Products</label>
								</div>
								<input type="text" id="nama" name="nama" placeholder=" ">
							</div>
							<br>	
							<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
							
							<!-- ./modal content -->
							</div>
						<!-- ./modal body -->
						</div>
						<!-- modal -->
						</div>
						<a onclick ="return confirm('Are you sure to delete this product?')" href='#' type="button" title="delete products" class="btn-delete"><i class="fas fa-trash fa-lg"></i></a>
				</td>
				<td>RAS</td>
				<td>AUF</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Remittance</td>
				<td data-filter="false">
					<button title="edit products" class="btn-edit" data-toggle="modal" data-target="#modal4"><i class="fas fa-pencil-alt fa-lg"></i></i></button>
						<!-- The Modal -->
						<div class="modal" id="modal4" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit Products</h2>
							</div>
							<div class = "modal-body">
								
							<div class = "input-group">
								<div class ="input-group-addon">						
									<label for="nama_products" style="font-weight:bolder" style="margin:10px 50px">Nama Products</label>
								</div>
								<input type="text" id="nama" name="nama" placeholder=" ">
							</div>
							<br>	
							<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
							<!-- ./modal content -->
							</div>
						<!-- ./modal body -->
						</div>
						<!-- modal -->
						</div>
						<a onclick ="return confirm('Are you sure to delete this product?')" href='#' type="button" title="delete products" class="btn-delete"><i class="fas fa-trash fa-lg"></i></a>
				</td>
				<td>AUF</td>
				<td>RAS</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Disbursement</td>
				<td data-filter="false">
					<button title="edit products" class="btn-edit" data-toggle="modal" data-target="#modal5"><i class="fas fa-pencil-alt fa-lg"></i></i></button>
						<!-- The Modal -->
						<div class="modal" id="modal5" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit Products</h2>
							</div>
							<div class = "modal-body">
								
							<div class = "input-group">
								<div class ="input-group-addon">						
									<label for="nama_products" style="font-weight:bolder" style="margin:10px 50px">Nama Products</label>
								</div>
								<input type="text" id="nama" name="nama" placeholder=" ">
							</div>
							<br>	
							<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
							
							<!-- ./modal content -->
							</div>
						<!-- ./modal body -->
						</div>
						<!-- modal -->
						</div>
						<a onclick ="return confirm('Are you sure to delete this product?')" href='#' type="button" title="delete products" class="btn-delete"><i class="fas fa-trash fa-lg"></i></a>
				</td>
				<td>IDE</td>
				<td>DMR</td>
			</tr>
			<tr>
				<td>6</td>
				<td>QR Payment</td>
				<td data-filter="false">
					<button title="edit products" class="btn-edit" data-toggle="modal" data-target="#modal6"><i class="fas fa-pencil-alt fa-lg"></i></i></button>
						<!-- The Modal -->
						<div class="modal" id="modal6" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit Products</h2>
							</div>
							<div class = "modal-body">
								
							<div class = "input-group">
								<div class ="input-group-addon">						
									<label for="nama_products" style="font-weight:bolder" style="margin:10px 50px">Nama Products</label>
								</div>
								<input type="text" id="nama" name="nama" placeholder=" ">
							</div>
							<br>	
							<button class="btnsubmit" type="button" data-dismiss="modal">Submit</button>
							
							<!-- ./modal content -->
							</div>
						<!-- ./modal body -->
						</div>
						<!-- modal -->
						</div>
						<a onclick ="return confirm('Are you sure to delete this product?')" href='#' type="button" title="delete products" class="btn-delete"><i class="fas fa-trash fa-lg"></i></a>
				</td>
				<td>IDE</td>
				<td>DMR</td>
			</tr>
		</tbody>
	</table>
	<!-- ./content -->
	</div>
	<!-- ./container fluid -->
	</div>
<!-- ./wrapper -->
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
      pageSize: 8,     
         "searching": true,
         "paging": false, 
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