	@extends('Templates.Admin')
	@section('PageTitle','Products')
	@section('content')
	<title>
	| {Admin} Products
	</title>
			<div class="form-group">

				<a href="{{ route('products.create') }}" type="button" class="modal-show btn-add" title="Add New Products" id="btn-modal" style="float:left">
					Add Products &nbsp<i class="fas fa-plus fa-lg"></i>
				</a>
				<!-- <a href="{{ route('products.create') }}" type="button" class="btn-add" data-toggle="modal" data-target="#modal" style="float:left">
					Add Products &nbsp<i class="fas fa-plus fa-lg"></i>
				</a> -->
	
				
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
    $('#table1').DataTable({ 
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
	<script type="text/javascript">
		$(document).ready(function(){
			$()
		})
	</script>

	@endpush