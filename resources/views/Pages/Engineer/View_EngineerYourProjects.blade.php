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
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
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
					<th style="width: 75px">Status</th>
					<th>Keterangan</th>
					<th>Action</th>
                  </tr>
                  </thead>
                  <!-- <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  </tbody> -->
                  <tfoot>
                  <tr>
                    <th>No</th>
					<th>Produk</th>
					<th>Jenis Project</th>
					<th>Nama Mitra</th>
					<th>Nama Project</th>
					<th>Tanggal Assign</th>
					<th style="width: 75px">Status</th>
					<th>Keterangan</th>
					<th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
	<div class="table-responsive-lg">
	<table class="table1" id="table1">
		<thead>
			<tr>
				<th>No</th>
				<th>Produk</th>
				<th>Jenis Project</th>
				<th>Nama Mitra</th>
				<th>Nama Project</th>
				<th>Tanggal Assign</th>
				<th style="width: 75px">Status</th>
				<th>Keterangan</th>
				<th>Action</th>
				<!-- <th>Docs</th> -->
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
  $(function () {
    $('#table1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
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
</script>
@endpush