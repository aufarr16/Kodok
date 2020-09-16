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
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet">
  <link href="{{ url('') }}/css/Plugin/Sweetalert/sweetalert2.min.css" rel="stylesheet" /></style>
  

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
       
      @if(session('status'))
          <!-- ISI SAMA FUNCTION MUNCULIN NOTIF BERHASIL -->
      @endif

	   <h2 style="margin-top:10px">Users</h2>
			<div class="form-group">

				<button type="button" class="btn-add" data-toggle="modal" data-target="#modal" style="float:left">
					<span>New User <i class="fas fa-user-plus"></i><span>
				</button>
    
				<!-- The Modal -->
				<div class="modal" id="modal" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
				<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Add New user</h2>
					</div>	
					<div class = "modal-body">

					<form method="post" action="/admin/submituser">
						@csrf
						<div class = "form-group">
							<div class ="input-group-addon">
								<label for="inisial_user" style="font-weight:bolder;float: left;">Inisial</label>
							</div>
								<input type="text" id="inisial_user" class="form-control" name="inisial_user" style="margin-bottom: 10px;text-transform: uppercase;" maxlength="3">
							<div class ="input-group-addon">
								<label for="nama_user" style="font-weight:bolder; float: left;">Nama</label>
							</div>	
								<input type="text" id="nama_user" class="form-control" name="nama_user" style="margin-bottom: 10px;">
							<div class ="input-group-addon">						
								<label for="id_ulevel" style="font-weight:bolder;float: left;">Role</label>
							</div>
								<select id="id_ulevel" class="form control" name="id_ulevel" style="height:35px;"> 
									<option value="" hidden>Pilih Role</option>
									@foreach($levels as $lvl)
									<option value="{{ $lvl->id_ulevel }}">{{ $lvl->nama_ulevel }}</option>
									@endforeach
								</select>
							<div class ="input-group-addon">
								<label for="email_user" style="font-weight:bolder; margin-top: 10px;float:left;">Email</label>
							</div>	
								<input type="email" id="email_user" class="form-control" name="email_user" style="float: right; margin-bottom: 10px">
						</div>
						<button onclick="submituser()" class="btnsubmit" type="submit">Submit</button>
					</form>

					<!-- ./modal body -->
					</div>
				<!-- ./modal content -->
				</div>
				<!-- ./modal -->
				</div>
			<!-- ./form group -->
			</div>
		<div class="table-responsive-lg">		
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
			@foreach($data_users as $dat_usr)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $dat_usr->inisial_user }}</td>
				<td>{{ $dat_usr->nama_user }}</td>
				<td>{{ $dat_usr->nama_ulevel }}</td>
				<td data-filter="false">
					<button title="edit user" class="btn-edit" data-toggle="modal" data-target="#modal1"><i class="fas fa-user-edit fa-lg"></i></button>
						<!-- The Modal -->
						<div class="modal" id="modal1" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit User</h2>
							</div>
							<div class = "modal-body">
								<form>
								<div class = "form-group">
									<div class ="input-group-addon">
										<label for="inisial" style="font-weight:bolder;float: left;">Inisial</label>
									</div>
										<input type="text" id="editinisial" class="form-control" style="margin-bottom: 10px; text-transform: uppercase;" maxlength="3">
									<div class ="input-group-addon">
										<label for="nama" style="font-weight:bolder; float: left;">Nama</label>
									</div>	
										<input type="text" id="editnama" class="form-control" style="margin-bottom: 10px">
								
									<div class ="input-group-addon">						
										<label for="role" style="font-weight:bolder;float: left;">Role</label>
									</div>
										<select id="editrole" class="form control" style="height:35px"> 
											<option value="" hidden>Pilih Role</option>
											<option value="admin">Admin</option>
											<option value="manager">Manager</option>
											<option value="engineer">Engineer</option>
											<option value="guest">Guest</option>
										</select>
									<div class ="input-group-addon">
										<label for="email" style="font-weight:bolder; margin-top: 10px;float:left;">Email</label>
									</div>	
										<input type="email" id="editemail" class="form-control" style="margin-bottom: 10px" pattern=".+@artajasa.co.id" required>
								</div>
								<button onclick="edituser()" class="btnsubmit" type="submit" id="submituser">Submit</button>

							</form>
							<!-- ./modal body -->
							</div>
						<!-- ./modal content -->
						</div>
						<!-- ./modal -->
						</div>
						<!-- <a href='#' onclick ="return confirm('Are you sure to delete this user?')" type="button" title="delete user" class="btn-delete"><i class="fas fa-trash fa-lg"></i></a -->
							<button onclick="deleteuser()" class="btn-delete" type="button" id="submituser"><i class="fas fa-trash fa-lg"></i></button>
				</td>
				<td>{{ $dat_usr->added_by }}</td>
				<td>{{ $dat_usr->modified_by }}</td>
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

<!-- Toastr Alert -->
<!-- <script src="{{ url('') }}/js/plugins/Toastr/toastr.min.js"></script>
<script>
 $(document).ready(function(){
  $("#submituser").on('click',function(){
    toastr.options = {
	  "closeButton": true,
	  "debug": false,
	  "newestOnTop": false,
	  "progressBar": true,
	  "positionClass": "toast-top-right",
	  "preventDuplicates": false,
	  "onclick": null,
	  "showDuration": "300",
	  "hideDuration": "1000",
	  "timeOut": "5000",
	  "extendedTimeOut": "1000",
	  "showEasing": "swing",
	  "hideEasing": "linear",
	  "showMethod": "fadeIn",
	  "hideMethod": "fadeOut"
	}

	toastr["success"]("Data user berhasil ditambahkan!")
  });

  $("#edituser").on('click',function(){
    toastr.options = {
	  "closeButton": true,
	  "debug": false,
	  "newestOnTop": false,
	  "progressBar": true,
	  "positionClass": "toast-top-right",
	  "preventDuplicates": false,
	  "onclick": null,
	  "showDuration": "300",
	  "hideDuration": "1000",
	  "timeOut": "5000",
	  "extendedTimeOut": "1000",
	  "showEasing": "swing",
	  "hideEasing": "linear",
	  "showMethod": "fadeIn",
	  "hideMethod": "fadeOut"
	}

	toastr["success"]("Data user berhasil diedit!")
  });
});
</script> -->
<script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
<script>
	function submituser () {
   	var inisial = $('#inisial_user').val();
   	var nama = $('#nama_user').val();
   	var role = $('#id_ulevel').val();
   	var email = $('#email_user').val();

	 if(inisial == ''){
       Swal.fire({
		  toast: true,
		  position: 'top',
		  showConfirmButton: false,
		  timer: 4000,
		  timerProgressBar:true,
		  // background:'lightgoldenrodyellow',
		  background:'#FFF4BD',
		  type: 'warning',
		  title: 'Mohon isi inisial'
		})
       	}else if (nama == ''){
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  timerProgressBar:true,
			  // background:'lightgoldenrodyellow',
			  background:'#FFF4BD',
			  type: 'warning',
			  title: 'Mohon isi nama user'
			})
		}else if (role == ''){
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  timerProgressBar:true,
			  // background:'lightgoldenrodyellow',
			  background:'#FFF4BD',
			  type: 'warning',
			  title: 'Mohon isi role user'
			})
		}else if (email == ''){
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  timerProgressBar:true,
			  // background:'lightgoldenrodyellow',
			  background:'#FFF4BD',
			  type: 'warning',
			  title: 'Mohon isi email user'
			})
	    }else{
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  background:'#D4F1F4',
			  type: 'success',
			  title: 'Data mitra berhasil disimpan'
			})
	 	}}

	function edituser () {
   	var editinisial = $('#editinisial').val();
   	var editnama = $('#editnama').val();
   	var editrole = $('#editrole').val();
   	var editemail = $('#editemail').val();

	 if(editinisial == ''){
       Swal.fire({
		  toast: true,
		  position: 'top',
		  showConfirmButton: false,
		  timer: 4000,
		  timerProgressBar:true,
		  // background:'lightgoldenrodyellow',
		  background:'#FFF4BD',
		  type: 'warning',
		  title: 'Mohon isi inisial'
		})
       	}else if (editnama == ''){
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  timerProgressBar:true,
			  // background:'lightgoldenrodyellow',
			  background:'#FFF4BD',
			  type: 'warning',
			  title: 'Mohon isi nama user'
			})
		}else if (editrole == ''){
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  timerProgressBar:true,
			  // background:'lightgoldenrodyellow',
			  background:'#FFF4BD',
			  type: 'warning',
			  title: 'Mohon isi role user'
			})
		}else if (editemail == ''){
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  timerProgressBar:true,
			  // background:'lightgoldenrodyellow',
			  background:'#FFF4BD',
			  type: 'warning',
			  title: 'Mohon isi email user'
			})
	    }else{
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  background:'#D4F1F4',
			  type: 'success',
			  title: 'Data user berhasil disimpan'
			})
	 	}}

	 	function deleteuser () {
		Swal.fire({
		  title: 'Yakin hapus data ini?',
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: 'lightgrey',
		  cancelButtonColor: 'dodgerblue',
		  confirmButtonText: 'Ya',
		  cancelButtonText: 'Tidak'
		}).then((result)=>{
			if(result.value){
				Swal.fire({
					title:'Data user berhasil dihapus',
					type:'success',
					toast:true,
					showConfirmButton:false,
					position: 'top',
					timer:1500,
					timerProgressBar:true,
					background:'#D4F1F4'
				})

			} else if (result.dismiss === 'cancel') {
				Swal.fire({
					title:'Data user tetap tersimpan',
					type:'info',
					toast:true,
					showConfirmButton:false,
					position:'top',
					grow:'row',
					// timer:1500,
					timerProgressBar:true,
					background:'#D2FBA4'
				})
			}
		})
		}
</script>
</body>

</html>