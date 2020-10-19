@extends('Templates.Manager')

@push('styles')
<link href="{{ url('') }}/css/projects.css" rel="stylesheet" />
<link href="{{ url('') }}/css/approval.css" rel="stylesheet" />
<link href="{{ url('') }}/css/users.css" rel="stylesheet" />
@endpush
@section('PageTitle','Approval Projects')
@section('content')
<title>
| {Manager} Approval Projects
</title>
	
<div class="table-responsive-lg">
<table class="table1" id="table1">
	<thead>
	<tr>
		<th>No</th>
		<th>Inisial</th>
		<th>Produk</th>
		<th>Jenis Project</th>
		<th>Nama Project</th>
		<th>Keterangan</th>
		<th>Docs</th>
		<th>Action</th>
	</tr>
	</thead>
</table>
</div>
@endsection

@push('scripts')
<script src="{{ url('') }}/js/plugins/chartjs.min.js"></script>
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
    ajax: "{{ route('approval.table') }}",
    columns: [
      {data: 'DT_RowIndex', name: 'id_project'},
      {data: 'inisial_user', name: 'inisial_user'},
      {data: 'nama_product', name: 'nama_product'},
      {data: 'nama_ptype', name: 'nama_ptype'},
      {data: 'nama_project', name: 'nama_project'},
      {data: 'pketerangan_status', name: 'pketerangan_status'},
      {data: 'docs', name: 'docs'},
      {data: 'action', name: 'action'}
    ],
  });
</script>
@endpush