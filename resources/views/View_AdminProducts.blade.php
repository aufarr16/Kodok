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
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet"><!-- </style> -->
  <link href="{{ url('') }}/css/Plugin/Toastr/toastr.min.css" rel="stylesheet" />
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

      @if(session('status'))
          <!-- ISI SAMA FUNCTION MUNCULIN NOTIF BERHASIL -->

      @endif
       
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
						<form method="post" action="/admin/submitproduct">
						@csrf
				          <div class="form-group">
				          	<div class ="input-group-addon">
								<label for="nama_product" style="font-weight:bolder" style="margin-top: -30px">Nama Product</label>
							</div>

				            <!-- <input type="text" id="nama_product" class="form-control" name="nama_product"> -->

				            <input type="text" id="name_product" class="form-control" name="nama_product">
						<!-- 	@error('nama_product')
						    <div class="alert alert-danger">{{ $message }}</div>
							@enderror -->
				            <br>
				          </div>
				         <button type="submit" class="btnsubmit">Submit</button>
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
				<th>Nama Products</th>
				<th>Action</th>
				<th>Add By</th>
				<th>Modify By</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data_products as $dat_prod)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $dat_prod->nama_product}}</td>
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
								
							<form>
							 <!-- <form class="needs-validation" novalidate> -->
					          <div class="form-group">
					          	<div class ="input-group-addon">
									<label for="namaproduct" style="font-weight:bolder" style="margin-top: -30px">Nama Product</label>
								</div>
					            <input type="text" id="edit" class="form-control">
					            <br>
					            <!-- <div class="invalid-feedback">
					              Masukkan nama produk
					            </div> -->
					          </div>
					         <button type="button" class="btnsubmit">Submit</button>
					        </form>
							<!-- ./modal content -->
							</div>
						<!-- ./modal body -->
						</div>
						<!-- modal -->
						</div>
							<!-- <a onclick ="return confirm('Are you sure to delete this product?')" href='#' type="button" title="delete products" class="btn-delete"><i class="fas fa-trash fa-lg"></i></a> -->
							<button type="button" class="btn-delete" id="deleteproduct"><i class="fas fa-trash fa-lg"></i></button>
						
				</td>
				<td>{{ $dat_prod->added_by}}</td>
				<td>{{ $dat_prod->modified_by}}</td>
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
  $("#submitproduct").on('click',function(){
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

	toastr["success"]("Data produk berhasil disimpan!")
  });

  $("#editproduct").on('click',function(){
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

	toastr["success"]("Data produk berhasil diedit")
  });
});
</script> -->
<!-- <script>
		toastr.options = {
			"closeButton" : true,
			"progressBar" : true,
			"positionClass" : "toast-bottom-right",
			"showDuration": "400",
			"hideDuration": "1000",
			"timeOut": "7000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}

</script> -->

<!-- sweetalert -->
<!-- <script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.all.min.js"></script> -->
<script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
<!-- <script>
   function alert () {
   	var name = $('#name').val();

	 	if(name ==''){
        const Toast = Swal.mixin({
		  toast: true,
		  position: 'top',
		  showConfirmButton: false,
		  timer: 4000,
		  timerProgressBar:true,
		  background:'#ffdf0069'
		   })

		Toast.fire({
		  type: 'warning',
		  title: 'Mohon isi nama produk',
		})

	    }else{
	 		const Toast = Swal.mixin({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  background:'#6adaffb8'
			})

			Toast.fire({
			  type: 'success',
			  title: 'Data produk berhasil disimpan'
			})
	 	}}
</script> -->
<!-- <script>
	function alert () {
   	var name = $('#nama_product').val();

	 if(name ==''){
       Swal.fire({
		  toast: true,
		  position: 'top',
		  showConfirmButton: false,
		  timer: 4000,
		  timerProgressBar:true,
		  // background:'lightgoldenrodyellow',
		  background:'#FFF4BD',
		  type: 'warning',
		  title: 'Mohon isi nama produk'
		})

	    }else{
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  background:'#D4F1F4',
			  type: 'success',
			  title: 'Data produk berhasil disimpan'
			})
	 	}}
</script>
<script>
   function editsubmit () {
   	var edit = $('#edit').val();

	 	if(edit ==''){
        Swal.fire({
		  toast: true,
		  position: 'top',
		  showConfirmButton: false,
		  timer: 4000,
		  timerProgressBar:true,
		  // background:'lightgoldenrodyellow',
		  background:'#FFF4BD',
		  type: 'warning',
		  title: 'Mohon isi nama produk'
		})

	    }else{
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  background:'#D4F1F4',
			  type: 'success',
			  title: 'Data produk berhasil disimpan'
			})
	 	}}
</script>

<script>
	function deleteproduct () {
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
					title:'Data produk berhasil dihapus',
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
					title:'Data produk tetap tersimpan',
					type:'info',
					toast:true,
					showConfirmButton:false,
					position:'top',
					grow:'row',
					timer:1500,
					timerProgressBar:true,
					background:'#D2FBA4'
				})
			}
		})
		}
</script> -->
</body>

</html>