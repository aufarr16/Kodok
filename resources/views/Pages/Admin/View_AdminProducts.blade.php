
	  <!-- @if(session('status'))
		  ISI SAMA FUNCTION MUNCULIN NOTIF BERHASIL

	  @endif -->
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
 