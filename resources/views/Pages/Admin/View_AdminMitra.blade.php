	@extends('Pages.Admin.TempAdmin')

	@section('content')
	<h2 style="margin-top:10px">Mitra</h2>
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