@extends('Templates.Admin')
@section('PageTitle','Mitra')
@section('content')
<title>
| {Admin} Mitra
</title>
@include('Layouts.ModalMitra')
		<div class="form-group">
			<a href="{{ route('mitra.create') }}" type="button" class="modal-show add-mitra btn-add" title="Add New Mitra" id="btn-modal" style="float:left">
				Add Mitra &nbsp<i class="fas fa-plus fa-lg"></i>
			</a>
			<!-- <button type="button" class="btn-add" data-toggle="modal" data-target="#modal" style="float:left">
				<span>Add Mitra <i class="fas fa-plus fa-lg"></i><span>
			</button> -->
						
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
			<th>Added By</th>
			<th>Modified By</th>
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
    ajax: "{{ route('mitra.table') }}",
    columns: [
    	{data: 'DT_RowIndex', name: 'ABA'},
    	{data: 'ABA', name: 'ABA'},
    	{data: 'nama_mitra', name: 'nama_mitra'},
    	{data: 'action', name: 'action'},
    	{data: 'added_by', name: 'added_by'},
    	{data: 'modified_by', name: 'modified_by'}
    ]
});
</script>
<!-- <script>
@if (count($errors) > 0)
    $('#modal').modal('show');
@endif
</script> -->
@endpush
