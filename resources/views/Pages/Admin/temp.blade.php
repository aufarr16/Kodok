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