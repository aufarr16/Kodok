<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | {Admin} Mitra
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
  <!-- <link href="{{ url('') }}/css/Plugin/Toastr/toastr.min.css" rel="stylesheet" /> -->
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
          <li>
            <a href="/admin/products">
            <span class="fas fa-random mr-2"></span>Products
            </a>
          </li>
          <li class="active">
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
       
	   <h2 style="margin-top:10px">Mitra</h2>
			<div class="form-group">

				<button type="button" class="btn-add" data-toggle="modal" data-target="#modal" style="float:left">
					<span>Add Mitra <i class="fas fa-plus fa-lg"></i><span>
				</button>
				
				<!-- The Modal -->
				<div class="modal" id="modal" role="dialog" style="margin-left:350px;">
				
				<!-- Modal content -->
				<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Add New Mitra</h2>
					</div>	
					<div class = "modal-body">
						<form method="post" action="/admin/submitmitra">
						@csrf
				          <div class="form-group">
				          	<div class ="input-group-addon">
								<label for="ABA" style="font-weight:bolder" style="margin-top: -30px">ABA</label>
							</div>
				            <!-- <input type="number" id="aba" class="form-control" style="margin-bottom: 10px" min="3" max="7"> -->
				             <input type ="number" id="ABA" class="form-control" style="margin-bottom: 10px" maxlength = "7" name="ABA"
				             oninput="javascript:if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
				            <br>
				
				            <div class ="input-group-addon">
								<label for="nama_mitra" style="font-weight:bolder" style="margin-top: -30px">Nama Mitra</label>
							</div>
				            <input type="text" id="nama_mitra" class="form-control" style="margin-bottom: 10px" name="nama_mitra">
				            <br>
				          </div>
				         <button onclick="submitmitra()" type="submit" class="btnsubmit">Submit</button>
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
				<th>ABA</th>
				<th>Nama Mitra</th>
				<th>Action</th>
				<th>Add By</th>
				<th>Modify By</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data_mitra as $dat_mit)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $dat_mit->ABA }}</td>
				<td>{{ $dat_mit->nama_mitra }}</td>
				<td data-filter="false">
					<button type="button" title="edit mitra" class="btn-edit" data-toggle="modal" data-target="#modal1"><i class="fas fa-pencil-alt fa-lg"></i></button>
						<!-- The Modal -->
						<div class="modal" id="modal1" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit Mitra</h2>
							</div>
							<div class = "modal-body">
								<form method="post" action="/admin/submitmitra">
						          <div class="form-group">
						          	<div class ="input-group-addon">
										<label for="namaproduct" style="font-weight:bolder;float:left;">ABA</label>
									</div>
						            <input type="number" id="editaba" class="form-control" style="margin-bottom: 10px" maxlength = "7"
				             		oninput="javascript:if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
						            <br>
						            
						            <div class ="input-group-addon">
										<label for="namaproduct" style="font-weight:bolder;float:left;">Nama Mitra</label>
									</div>
						            <input type="text" id="editmitra" class="form-control" style="margin-bottom: 10px">
						            <br>

						          </div>
						         <button onclick="submitedit()" type="submit" class="btnsubmit">Submit</button>
						        </form>
					
							<!-- ./modal body -->
							</div>
						<!-- ./modal content -->
						</div>
						<!-- ./modal -->
						</div>
							<!-- <a href='#' onclick="return confirm('Are you sure wanna delete this mitra?')" type="button" class="btn-delete dialog-box" title="Delete mitra"><i class="fas fa-trash fa-lg"></i></a> -->
							 <button onclick="deletemitra()" type="button" class="btn-delete"><i class="fas fa-trash fa-lg"></i></button>
				</td>
				<td>{{ $dat_mit->added_by }}</td>
				<td>{{ $dat_mit->modified_by }}</td>
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
  $("#submitmitra").on('click',function(){
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

	toastr["success"]("Data mitra berhasil ditambahkan!")
  });

  $("#editmitra").on('click',function(){
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

	toastr["success"]("Data mitra berhasil diedit!")
  });
});
</script> -->
<script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
<script>
	function submitmitra () {
   	var aba = $('#ABA').val();
   	var nama_mitra = $('#nama_mitra').val();

	 if(ABA == ''){
       Swal.fire({
		  toast: true,
		  position: 'top',
		  showConfirmButton: false,
		  timer: 4000,
		  timerProgressBar:true,
		  // background:'lightgoldenrodyellow',
		  background:'#FFF4BD',
		  type: 'warning',
		  title: 'Mohon isi data ABA'
		})
       	}else if (nama_mitra == ''){
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  timerProgressBar:true,
			  // background:'lightgoldenrodyellow',
			  background:'#FFF4BD',
			  type: 'warning',
			  title: 'Mohon isi nama mitra'
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

	function submitedit () {
   	var editaba = $('#editaba').val();
   	var editmitra = $('#editmitra').val();

	 if(editaba == ''){
       Swal.fire({
		  toast: true,
		  position: 'top',
		  showConfirmButton: false,
		  timer: 4000,
		  timerProgressBar:true,
		  // background:'lightgoldenrodyellow',
		  background:'#FFF4BD',
		  type: 'warning',
		  title: 'Mohon isi data ABA'
		})
       	}else if (editmitra == ''){
	 		Swal.fire({
			  toast: true,
			  position: 'top',
			  showConfirmButton: false,
			  timer: 4000,
			  timerProgressBar:true,
			  // background:'lightgoldenrodyellow',
			  background:'#FFF4BD',
			  type: 'warning',
			  title: 'Mohon isi nama mitra'
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

	 	function deletemitra () {
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
					title:'Data mitra berhasil dihapus',
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
					title:'Data mitra tetap tersimpan',
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
</script>
</body>

</html>