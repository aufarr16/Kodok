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

<div class="wrap">
   <div class="search">
     <div class=labelprojects>Search:</div>
      <input id="myInput" type="textprojects" style="margin-top: -10px; width: 165px">
     </button>
   </div>
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
				<th>Tanggal Handover</th>
				<th style="width: 75px">Status</th>
				<th>Keterangan</th>
				<!-- <th>Docs</th> -->
				<th>Action</th>
			</tr>
		</thead>

		<tbody id="myTable">
		@foreach($projects as $project)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $project->nama_product }}</td>
			<td>{{ $project->nama_ptype }}</td>
			<td>{{ $project->nama_mitra }}</td>
			<td>{{ $project->nama_project }}</td>
			<td>{{ $project->tanggal_assign}}</td>
			<td style="width: 12%">

				<div class="input-group">
					<select class="custom-select" id="status_select" name="id_pstat">
						<option value="" hidden>{{ $project->nama_pstat }}</option>
						@foreach($pstat as $stat)
							<option value="{{ $stat->id }}">{{ $stat->nama_pstat }}</option>
						@endforeach  
					</select>
															
				<button class="btn-ok" type="button">OK</button>
				</div>
			</td>
			<td style="width: 1%">{{ $project->pketerangan_status }}
			      <button type="button" class="btn-keterangan" title="Keterangan Status" data-toggle="modal" data-target="#modal1"><i class="far fa-question-circle"></i></button>     
			</td>	
			<td>
				<button onclick="donehandover()" type="button" class="btn-handover-done" data-dismiss="modal" id="submithandover" title="Handover selesai"><i class="fas fa-check-circle fa-lg"></i></button>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
<!-- table responsive -->
</div>
@endsection

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
<!-- <script>
	$(document).ready(function() {
	    $('#table1').DataTable( { 
	      // pageSize: 8,     
	        "pageLength": 10, 
	         "searching": true,
	         "paging": true,
	         "info": false,         
	         "lengthChange":false
	           } );
	} );
</script> -->
	

