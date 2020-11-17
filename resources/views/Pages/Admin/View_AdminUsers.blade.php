@extends('Templates.Admin')
@section('Welcome') 
	<h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ Auth::user()['nama_user'] }}</h4>
@endsection
@section('PageTitle','Users')
@section('content')
<title>
| {Admin} Users
</title>

		<div class="form-group">
			<a href="{{ route('users.create') }}" type="button" class="modal-show add-users btn-add" title="Add New Users" id="btn-modal" style="float:left">
				Add Users &nbsp<i class="fas fa-plus fa-lg"></i>
			</a>
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
    	{data: 'nama_user', name: 'nama_user'},
    	{data: 'nama_ulevel', name: 'nama_ulevel'},
    	{data: 'action', name: 'action'},
    	{data: 'added_by', name: 'added_by'},
    	{data: 'modified_by', name: 'modified_by'}
    ]
});
</script>
@endpush