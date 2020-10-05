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