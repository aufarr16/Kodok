@extends('Templates.Admin')
@push('styles')
	<link href="{{ url('') }}/css/arsipadmin.css" rel="stylesheet" />
@endpush<!-- 
@section('Welcome') 
	<h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection -->
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
	</table>
<!-- table responsive -->
</div>
</br>
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
	    ajax: "{{ route('archive.table') }}",
	    columns: [
	    	{data: 'DT_RowIndex', name: 'id'},
	    	{data: 'inisial_user', name: 'inisial_user'},
	    	{data: 'nama_ptype', name: 'nama_ptype'},
	    	{data: 'nama_project', name: 'nama_project'},
	    	{data: 'details', name: 'details'}
	    ]
	});
</script>
@endpush