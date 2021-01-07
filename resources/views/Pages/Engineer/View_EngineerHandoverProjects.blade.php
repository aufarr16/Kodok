@extends('Templates.Engineer')
@push('styles')
<link href="{{ url('') }}/css/yourhandoverprojects.css" rel="stylesheet" />
<!-- @section('Welcome') 
  <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection -->
@section('PageTitle','Handover Projects')
@section('content')
<title>
	| {Engineer} Handover Projects
</title>

  <div class="table-responsive-lg">
	<table class="table1" id="table1">
		<thead>
			<tr>
				<th>No</th>
				<th>Produk</th>
				<th>Jenis Project</th>
				<th>Nama Mitra</th>
				<th>Nama Project</th>
				<th>Tanggal Handover</th>
				<th style="width: 75px">Status</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
		</thead>

	</table>
<!-- table responsive -->
</div>
@endsection

@push('scripts')
<script>
	$(document).ready(function(){
	  $("#myInput").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#myTable tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});
</script>

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
	    ajax: "{{ route('handover.table') }}",
	    columns: [
	    	{data: 'DT_RowIndex', name: 'id'},
	    	{data: 'nama_product', name: 'nama_product'},
	    	{data: 'nama_ptype', name: 'nama_ptype'},
	    	{data: 'nama_mitra', name: 'nama_mitra'},
	    	{data: 'nama_project', name: 'nama_project'},
	    	{data: 'tanggal_assign', name: 'tanggal_assign'},
	    	{data: 'status', name: 'status'},
	    	{data: 'keterangan', name: 'keterangan'},
	    	{data: 'action', name: 'action'}
	    ]
	    "order": [[5, "desc"]]
	});
</script>
@endpush
