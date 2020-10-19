@extends('Templates.Admin')
@push('styles')
<link href="{{ url('') }}/css/search.css" rel="stylesheet" />
@endpush
@section('PageTitle','Search Documents')
@section('content')
  <title>
| {Admin} Search Documents
</title>

	<div class="table-responsive-lg">	
	<table id="table1" class="table1" style="margin-top: -40px" style="overflow:auto">
		<thead>
		<tr>
			<th>No</th>
			<th>Nama Mitra</th>
            <th>Jenis Project</th>
			<th>Nama Project</th>
			<th>Action</th>
			<th>PIC</th>
			<th>Tahun</th>
		</tr>
		</thead>
	</table>
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
    ajax: "{{ route('searchdocs.table') }}",
    columns: [
    	{data: 'DT_RowIndex', name: 'id_project'},
    	{data: 'nama_mitra', name: 'nama_mitra'},
        {data: 'nama_ptype', name: 'nama_ptype'},
    	{data: 'nama_project', name: 'nama_project'},
    	{data: 'action', name: 'action'},
    	{data: 'inisial_user', name: 'inisial_user'},
    	{data: 'tahun', name: 'tahun'}
    ],
    "order": [[ 6, "desc" ]]
});
</script>
@endpush


