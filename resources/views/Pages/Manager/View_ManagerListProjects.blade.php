@extends('Templates.Manager')
@push('styles')
<!-- CSS Files -->
<link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet" />
<link href="{{ url('') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
<link href="{{ url('') }}/style.css" type="text/css" rel="stylesheet">
<link href="{{ url('') }}/css/home.css" rel="stylesheet" />
<link href="{{ url('') }}/css/projects.css" rel="stylesheet" />
<link href="{{ url('') }}/css/approval.css" rel="stylesheet" />
<link href="{{ url('') }}/css/search.css" rel="stylesheet" />
<link href="{{ url('') }}/css/Plugin/Datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="{{ url('') }}/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet">
@endpush
<!-- @section('Welcome') 
  <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection -->
@section('PageTitle','List Projects')
@section('content')
<title>
  | {Manager} List Projects
</title>
<a href="/manager/projects/export" class="btn btn-success" style="z-index:3; margin-top:-10px">
  <i class="fas fa-file-download"></i>&nbsp Excel
</a>
<div class="table-responsive-lg" style="margin-top: -20px">
<table class="table1" id="table1">
  <thead>
  <tr>
    <th>No</th>
    <th>Inisial</th>
    <th>Produk</th>
    <th>Jenis Project</th>
    <th>Nama Mitra</th>
    <th>Nama Project</th>
    <th>Tanggal Assign</th>
    <th>Status</th>
  </tr>
  </thead>
</table>
<!-- Table responsive -->
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
    ajax: "{{ route('listprojects.table') }}",
    columns: [
      {data: 'DT_RowIndex', name: 'id'},
      {data: 'inisial_user', name: 'inisial_user'},
      {data: 'nama_product', name: 'nama_product'},
      {data: 'nama_ptype', name: 'nama_ptype'},
      {data: 'nama_mitra', name: 'nama_mitra'},
      {data: 'nama_project', name: 'nama_project'},
      {data: 'waktu', name: 'waktu'},
      {data: 'id_pstat', name: 'id_pstat'}
    ],
    "order": [[ 6, "desc" ], [ 0, "asc" ]]
  });
</script>
@endpush