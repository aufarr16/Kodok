@extends('Templates.Admin')
<!-- @section('Welcome') 
	<h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection -->
@section('PageTitle','Products')
@section('content')
<title>
| {Admin} Products
</title>
<div class="row mt-2">
    <div class="col-md-12">
        <!-- /.card-header -->
        <div class="card card-primary card-outline">

            <div class="card-body">
                <a href="{{ route('products.create') }}" type="button" class="modal-show add-products btn btn-success" title="Add New Product" id="btn-modal" style="float:left">
                    Add Product &nbsp<i class="fas fa-plus"></i>
                </a>
                <table id="table1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Products</th>
                            <th class="text-center">Action</th>
                            <th class="text-center">Added By</th>
                            <th class="text-center">Modified By</th>                          
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection		

	@push('scripts')
<script>
$('#table1').DataTable({ 
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    ajax: "{{ route('products.table') }}",
    columns: [
    	{data: 'DT_RowIndex', name: 'id', class: 'text-center'},
    	{data: 'nama_product', name: 'nama_product', class: 'text-center'},
    	{data: 'action', name: 'action', class: 'text-center'},
    	{data: 'added_by', name: 'added_by', class: 'text-center'},
    	{data: 'modified_by', name: 'modified_by', class: 'text-center'}
    ]
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$()
	})
</script>
@endpush