@extends('Templates.Engineer')
@push('styles')
<!-- <link href="{{ url('') }}/css/yourhandoverprojects.css" rel="stylesheet" /> -->
<!-- @section('Welcome') 
  <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection -->
@section('PageTitle','Your Projects')
@section('content')
<title>
	| {Engineer} Your Projects
</title>

<div class="row mt-2">
  <div class="col-md-12">
      <!-- /.card-header -->
    <div class="card card-primary card-outline">
      <div class="card-body">
        <table id="table1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
			<th>Produk</th>
			<th>Jenis Project</th>
			<th>Nama Mitra</th>
			<th>Nama Project</th>
			<th>Tanggal Assign</th>
			<th>Status</th>
			<th>Keterangan</th>
			<th>Action</th>
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
  $(document).ready(function() {
    $('#table1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      ajax: "{{ route('projects.table') }}",
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
	    ],
	    "order": [[5, "desc"]]
    });
  });
</script>

@endpush

