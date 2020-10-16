	@extends('Pages.Admin.TempAdmin')
	@section('PageTitle','Mitra')
	@section('content')
	<title>
	| {Admin} Mitra
	</title>
			<div class="form-group">
				
				<button type="button" class="btn-add" data-toggle="modal" data-target="#modal" style="float:left">
					<span>Add Mitra <i class="fas fa-plus fa-lg"></i><span>
				</button>
							
				<!-- The Modal -->
				<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style="margin-left:-3px;">
				<div class="modal-dialog">
				
				<!-- Modal content -->
				<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Add New Mitra</h2>
					</div>
					
					<div class = "modal-body" id="modal-body">
						<form method="post" action="/admin/submitmitra">
						@csrf
				      <div class="form-group">
				        <div class ="input-group-addon">
										<label for="ABA" style="font-weight:bolder" style="margin-top: -30px">ABA</label>
										<br>
								</div>
					          <input type ="number" id="ABA" class="form-control @error('ABA') is-invalid @enderror" style="margin-bottom: 10px" maxlength="7" name="ABA" oninput="javascript:if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)" value="{{ old('ABA') }}">
										<br>
										@error('ABA')
										<div class="invalid-feedback flash">
											{{ $message }}
										</div>
										@enderror
					      <div class ="input-group-addon">
									<label for="nama_mitra" style="font-weight:bolder" style="margin-top: -30px">Nama Mitra</label>
									<br>
								</div>
				          <input type="text" id="nama_mitra" class="form-control @error('nama_mitra') is-invalid @enderror" style="margin-bottom: 10px" name="nama_mitra" value="{{ old('nama_mitra') }}">
				          @error('nama_mitra')
										<div class="invalid-feedback flash">
											{{ $message }}</div>
									@enderror
				      </div>
				      <div class="modal-footer" id="modal-footer">
								<button type="submit" class="btnsubmit">Submit</button>
							</div>
				    </form>
				    
					<!-- ./modal body -->
					</div>
				<!-- ./modal content -->
				</div>
				</div>
				<!-- ./modal -->
				</div>
			<!-- ./form group -->
			</div>

		<div class="table-responsive-lg">	
		<table id="table1" class="table1" style="overflow:auto">
		
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

					<button type="button" class="btn-edit" data-toggle="modal" data-target="#{{ $dat_mit->ABA }}" ><i class="fas fa-pencil-alt fa-lg"></i>
					</button>
					
					<!-- The Modal -->
					<div class="modal fade" id="{{ $dat_mit->ABA }}" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style="margin-left:-3px;">
					<div class="modal-dialog">

					<!-- Modal content -->
					<div class="modal-content">
						<div class="modal-header">
							
							<a class="close1" data-dismiss="modal">&times;</a>
							<h2 class="modal-title">Edit Mitra</h2>
							<!-- <a class="close1" data-dismiss="modal">&times;</a> -->
						</div>	
						<div class = "modal-body" id="modal-body">
							<form method="post" action="/admin/submitmitra">
							@csrf
						      <div class="form-group">
						        <div class ="input-group-addon">
											<label for="ABA" style="font-weight:bolder" style="margin-top: -30px">ABA</label>
											<br>
										</div>
						          <input type ="number" id="ABA" class="form-control @error('ABA') is-invalid @enderror" style="margin-bottom: 10px" maxlength="7" name="ABA" oninput="javascript:if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)" value="{{ old('ABA') }}">
											@error('ABA')
											<div class="invalid-feedback flash">
												{{ $message }}</div>
											@enderror
						        <div class ="input-group-addon">
											<label for="nama_mitra" style="font-weight:bolder" style="margin-top: -30px">Nama Mitra</label>
											<br>
										</div>
						          <input type="text" id="{{ $dat_mit->ABA }}" class="form-control @error('nama_mitra') is-invalid @enderror" style="margin-bottom: 10px" name="nama_mitra" value="{{ old('nama_mitra') }}">
						          @error('nama_mitra')
											<div class="invalid-feedback flash">
												{{ $message }}</div>
											@enderror
						      </div>
						      <div class="modal-footer" id="modal-footer">
										<button type="submit" class="btnsubmit">Submit</button>
									</div>
						    </form>
						</div>
					</div>
					</div>
					</div>
						<button id="{{ $dat_mit->ABA }}" type="submit" class="btn-delete delmit"><i class="fas fa-trash fa-lg"></i></button>
				</td>
				<td>{{ $dat_mit->added_by }}</td>
				<td>{{ $dat_mit->modified_by }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<!-- table responsive -->
	</div>
	@endsection

	@push('scripts')
	<script src="{{ url('') }}/js/script.js"></script>
	<script>
	$(document).ready(function() {
	    $('#table1').DataTable( { 
	        "responsive": true,
	        "processing": true,
	        "pageLength": 10, 
	        "searching": true,
	        "paging": true,
	        "info": false,         
	        "lengthChange": false,
	        "ajax":
	    } );
	    $('#search1').DataTable( {
	       	"pageLength": 10,     
	         "searching": true,
	         "paging": true, 
	         "info": true,         
	         "lengthChange":false,
	    } );
	} );
	</script>
	@endpush


<!-- ############################################################################################################################################# -->


	@extends('Pages.Admin.TempAdmin')
	@section('PageTitle','Users')

	@section('content')
	<title>
	| {Admin} Users
	</title>
	
			<div class="form-group">

				<button type="button" class="btn-add" data-toggle="modal" data-target="#modal" style="float:left">
					<span>New User <i class="fas fa-user-plus"></i><span>
				</button>
    
				<!-- The Modal -->
				<!-- <div class="modal" id="modal" role="dialog" style="padding-left:17px;"> -->
				<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style="margin-left:-3px;">
				<div class="modal-dialog">
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
								<input type="text" id="inisial_user" class="form-control @error('inisial_user') is-invalid @enderror" name="inisial_user" style="margin-bottom: 10px;text-transform: uppercase;" maxlength="3" value="{{ old('inisial_user') }}">
								@error('inisial_user')
								<div class="invalid-feedback flash">
									{{ $message }}</div>
								@enderror
							<div class ="input-group-addon">
								<label for="nama_user" style="font-weight:bolder; float: left;">Nama</label>
							</div>	
								<input type="text" id="nama_user" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" style="margin-bottom: 10px;" value="{{ old('nama_user') }}">
								@error('nama_user')
								<div class="invalid-feedback flash">
									{{ $message }}</div>
								@enderror
							<div class ="input-group-addon">						
								<label for="id_ulevel" style="font-weight:bolder;float: left;">Role</label>
							</div>
								<select id="id_ulevel" class="form control custom-select @error('id_ulevel') is-invalid @enderror" name="id_ulevel" style="height:35px; margin-bottom: 10px; width: 100%"> 
									<option value="" hidden>Pilih Role</option>
									@foreach($levels as $lvl)
										@if (old('id_ulevel') == $lvl->id_ulevel)
											<option value="{{ $lvl->id_ulevel }}" selected>{{ $lvl->nama_ulevel }}</option>
										@else 
											<option value="{{ $lvl->id_ulevel }}">{{ $lvl->nama_ulevel }}</option>
										@endif
									@endforeach
								</select>
								@error('id_ulevel')
								<div class="invalid-feedback flash">
									{{ $message }}</div>
								@enderror
							<div class ="input-group-addon">
								<label for="email_user" style="font-weight:bolder; margin-top: 10px;float:left;">Email</label>
							</div>	
								<input type="email" id="email_user" class="form-control @error('email_user') is-invalid @enderror" name="email_user" style="float: right; margin-bottom: 10px" value="{{ old('email_user') }}">
								@error('email_user')
								<div class="invalid-feedback flash">
									{{ $message }}</div>
								@enderror
						</div>
						<br>
				    <br>
				    <div class="modal-footer" id="modal-footer">
						<button type="submit" class="btnsubmit">Submit</button>
					</div>
					</form>

					<!-- ./modal body -->
					</div>
				<!-- ./modal content -->
				</div>
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
						<!-- <div class="modal" id="modal1" role="dialog"> -->
						<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style="margin-left:-3px;">
						<div class="modal-dialog">
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
										<input type="text" id="editinisial" class="form-control @error('inisial_user') is-invalid @enderror" style="margin-bottom: 10px; text-transform: uppercase;" maxlength="3" value="{{ old('inisial_user') }}">
										@error('inisial_user')
										<div class="invalid-feedback flash">
											{{ $message }}</div>
										@enderror
									<div class ="input-group-addon">
										<label for="nama" style="font-weight:bolder; float: left;">Nama</label>
									</div>	
									<input type="text" id="editnama" class="form-control @error('nama_user') is-invalid @enderror" style="margin-bottom: 10px" value="{{ old('nama_user') }}">
									@error('nama_user')
									<div class="invalid-feedback flash">
										{{ $message }}</div>
									@enderror
									<div class ="input-group-addon">						
										<label for="role" style="font-weight:bolder;float: left;">Role</label>
									</div>
										<select id="editrole" class="form control custom-select @error('id_ulevel') is-invalid @enderror" style="height:35px; margin-bottom: 10px; width:100%" value="{{ old('id_ulevel') }}"> 
											<option value="" hidden>Pilih Role</option>
											<option value="admin">Admin</option>
											<option value="manager">Manager</option>
											<option value="engineer">Engineer</option>
											<option value="guest">Guest</option>
										</select>
										<br>
									@error('id_ulevel')
									<div class="invalid-feedback flash">
										{{ $message }}</div>
									@enderror
									<div class ="input-group-addon">
										<label for="email" style="font-weight:bolder; margin-top: 10px;float:left;">Email</label>
									</div>	
										<input type="email" id="editemail" class="form-control @error('email_user') is-invalid @enderror" style="margin-bottom: 10px" value="{{ old('email_user') }}">
										@error('email_user')
										<div class="invalid-feedback flash">
											{{ $message }}</div>
										@enderror
								</div>
								<div class="modal-footer" id="modal-footer">
									<button type="submit" class="btnsubmit" id="edituser">Submit</button>
								</div>

							</form>
							<!-- ./modal body -->
							</div>
						<!-- ./modal content -->
						</div>
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

	@endsection

	@push('scripts')
	<script>
    $('#table1').DataTable( { 
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "pageLength": 10, 
        "searching": true,
        "paging": true,
        "info": false,         
        "lengthChange": false,
        ajax: "{{ route('users.table') }}",
        columns: [
        	{data: 'DT_RowIndex', name: 'id'},
        	{data: 'inisial_user', name: 'inisial_user'},
        	{data: 'nama_ulevel', name: 'nama_ulevel'},
        	{data: 'action', name: 'action'},
        	{data: 'added_by', name: 'added_by'},
        	{data: 'modified_by', name: 'modified_by'}
        ]
    });
	</script>
	@endpush


<!-- ############################################################################################################################################# -->


	@extends('Pages.Admin.TempAdmin')
	@section('PageTitle','Products')
	@section('content')
	<title>
	| {Admin} Products
	</title>
			<div class="form-group">

				<button type="button" class="btn-add" data-toggle="modal" data-target="#modal" style="float:left">
					<span>Add Products &nbsp<i class="fas fa-plus fa-lg"></i><span>
				</button>
	
				<!-- The Modal -->
				<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style="margin-left:-3px;">
				<div class="modal-dialog">

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
										<br>
									</div>
					        <input type="text" id="nama_product" class="form-control @error('nama_product') is-invalid @enderror" style="margin-bottom: 10px" name="nama_product" value="{{ old('nama_product') }}">
					        @error('nama_product')
								<div class="invalid-feedback flash">
									{{ $message }}
								</div>
							@enderror
						  </div>
						  <div class="modal-footer" id="modal-footer">
								<button type="submit" class="btnsubmit">Submit</button>
							</div>
						</form>
					
					<!-- ./modal body -->
					</div>
				<!-- ./modal content -->
				</div>
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
						<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style="margin-left:-3px;">
						<div class="modal-dialog">
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
										<label for="nama_product" style="font-weight:bolder" style="margin-top: -30px">Nama Product</label>
										<br>
									</div>
					          <input type="text" id="nama_product" class="form-control @error('nama_product') is-invalid @enderror" style="margin-bottom: 10px" name="nama_product" value="{{ old('nama_product') }}">
					          @error('nama_product')
										<div class="invalid-feedback flash">
											{{ $message }}
										</div>
										@enderror
		          </div>	
							<div class="modal-footer" id="modal-footer">
								<button type="submit" class="btnsubmit">Submit</button>
							</div>
							</form>
							<!-- ./modal content -->
							</div>
						<!-- ./modal body -->
						</div>
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
	@endsection		
 
<!-- 1410 -->
 	@extends('Templates.Admin')
	@section('PageTitle','Products')
	@section('content')
	<title>
	| {Admin} Products
	</title>
			<div class="form-group">

				<a href="{{ route('products.create') }}" type="button" class="btn-add" style="float:left">
					Add Products &nbsp<i class="fas fa-plus fa-lg"></i>
				</a>
				<!-- <a href="{{ route('products.create') }}" type="button" class="btn-add" data-toggle="modal" data-target="#modal" style="float:left">
					Add Products &nbsp<i class="fas fa-plus fa-lg"></i>
				</a> -->
	
				<!-- The Modal -->
				<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style="margin-left:-3px;">
				<div class="modal-dialog">

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
										<br>
									</div>
					        <input type="text" id="nama_product" class="form-control @error('nama_product') is-invalid @enderror" style="margin-bottom: 10px" name="nama_product" value="{{ old('nama_product') }}">
					        @error('nama_product')
								<div class="invalid-feedback flash">
									{{ $message }}
								</div>
							@enderror
						  </div>
						  <div class="modal-footer" id="modal-footer">
								<button type="submit" class="btnsubmit">Submit</button>
							</div>
						</form>
					
					<!-- ./modal body -->
					</div>
				<!-- ./modal content -->
				</div>
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
	</table>
	<!-- table responsive -->
	</div>
	@endsection		
 
 	@push('scripts')
	<script>
    $('#table1').DataTable( { 
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "pageLength": 10, 
        "searching": true,
        "paging": true,
        "info": false,         
        "lengthChange": false,
        ajax: "{{ route('products.table') }}",
        columns: [
        	{data: 'DT_RowIndex', name: 'id_product'},
        	{data: 'nama_product', name: 'nama_product'},
        	{data: 'action', name: 'action'},
        	{data: 'added_by', name: 'added_by'},
        	{data: 'modified_by', name: 'modified_by'}
        ]
    });
	</script>
	@endpush


	{!! Form::model($model, [
	'route' => 'products.store',
	'method' => 'POST'
]) !!}

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="nama_product" style="font-weight:bolder" style="margin-top: -30px">Nama Product</label>
				<br>
		</div>
		<!-- <input type="text" id="nama_product" class="form-control @error('nama_product') is-invalid @enderror" style="margin-bottom: 10px" name="nama_product" value="{{ old('nama_product') }}"> -->
		{!! Form::text('nama_product', null, ['class'=>'form-control @error('nama_product') is-invalid @enderror', 'id' =>'nama_product', 'style' =>'margin-bottom: 10px'])}
		@error('nama_product')
			<div class="invalid-feedback flash">
				{{ $message }}
			</div>
		@enderror
	</div>

{!! Form::close() !!}


<!-- ############################################################################################################################################# -->


@extends('Templates.Admin')
@push('styles')
<link href="{{ url('') }}/css/arsipadmin.css" rel="stylesheet" />
@endpush
@section('PageTitle','Archive Documents')
@section('content')
	<title>
	| {Admin} Archive Documents
	</title>
   
  <!-- <h2 style="margin-top:10px">Archive Documents</h2> -->
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
			<!-- <div class="modal" id="modal1" role="dialog" style="left:20%; margin-top:50px"> -->
			<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style="left: -323px; margin-top: 35px;">
			<div class="modal-dialog">
			<!-- Modal content -->
				<div class="modal-content">
				<div class="modal-header">
					<a class="close1" data-dismiss="modal">&times;</a>
					<h2 class="modal-title">Implementasi ATM Bersama Bank Artos</h2>
				</div>	
					<div class = "modal-body" style="padding-right:15px" id="style-7">
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
											<select class="custom-select" id="status_select1" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px"> 
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
											<select class="custom-select" id="status_select1_2" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px"> 
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
											<select class="custom-select" id="status_select1_3" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px"> 
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
											<select class="custom-select" id="status_select1_4" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px"> 
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
											<select class="custom-select" id="status_select1_5" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px"> 
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
@endsection

@push('scripts')
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
@endpush


<!-- ############################################################################################################################################ -->


@extends('Templates.Admin')
@push('styles')
<link href="{{ url('') }}/css/search.css" rel="stylesheet" />
@endpush
@section('PageTitle','Search Documents')
@section('content')
  <title>
| {Admin} Search Documents
</title>
	<div class="table-responsive-lg">	
	<table id="table1" class="table1" style="margin-top: -40px" style="overflow:auto">
	
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
			<div class="modal fade" id="{{ $dat_sdoc->id_project }}" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
			<div class="modal-dialog" style="max-width: 505px">
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
@endsection

