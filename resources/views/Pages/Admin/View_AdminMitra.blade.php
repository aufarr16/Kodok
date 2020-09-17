	@extends('Pages.Admin.TempAdmin')
	@section('content')
	<title>
	| {Admin} Mitra
	</title>

	<h2 style="margin-top:10px">Mitra</h2>
			<div class="form-group">

				<button type="button" class="btn-add" data-toggle="modal" data-target="#modal" style="float:left">
					<span>Add Mitra <i class="fas fa-plus fa-lg"></i><span>
				</button>
				
				<!- The Modal -->
				<div class="modal" id="modal" role="dialog" style="margin-left:350px;">
				
				<!- Modal content -->
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
				            <input type="number" id="aba" class="form-control" style="margin-bottom: 10px" min="3" max="7">
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
		<table id="table1" class="table1"  style="overflow:auto">
		
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
					<button type="button" title="edit mitra" class="btn-edit" data-toggle="modal" data-target="#{{ $dat_mit->ABA }}"><i class="fas fa-pencil-alt fa-lg"></i></button>
						<!-- The Modal -->
						<div class="modal" id="{{ $dat_mit->ABA }}" role="dialog">
						
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<a class="close1" data-dismiss="modal">&times;</a>
								<h2 class="modal-title">Edit Mitra</h2>
							</div>
							<div class = "modal-body">
								<form method="post" action="/admin/submitmitra">
								 	@csrf
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
							            <input type="text" id="{{ $dat_mit->ABA }}" class="form-control" style="margin-bottom: 10px">
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
							<button id="{{ $dat_mit->ABA }}" type="submit" class="btn-delete"><i class="fas fa-trash fa-lg"></i></button>
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