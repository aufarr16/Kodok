@extends('Templates.Engineer')
@section('Welcome') 
  <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection
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
				<!-- <th>Docs</th> -->
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
		@foreach($projects as $project)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $project->nama_product }}</td>
			<td>{{ $project->nama_ptype }}</td>
			<td>{{ $project->nama_mitra }}</td>
			<td>{{ $project->nama_project }}</td>
			<td>{{ $project->tanggal_assign}}</td>
			<td>
				<form method="POST" action="/engineer/handover/changestat">
					@method('patch')
					@csrf
					<input type="hidden" value="{{ $project->id }}" name="id">
					<select class="custom-select"name="id_pstat">
						<option value="" hidden>{{ $project->nama_pstat }}</option>
						@foreach($pstat as $stat)
							<option value="{{ $stat->id }}">{{ $stat->nama_pstat }}</option>
						@endforeach
					</select>								
			
					<button class="btn-ok" type="submit">OK</button>
				</form>
			</td>
			<td>{{ $project->pketerangan_status }}
			      <button type="button" class="btn-keterangan" title="Keterangan Status" data-toggle="modal" data-target="#modal1"><i class="far fa-question-circle"></i></button>     
			</td>	
			<td>
				<button onclick="donehandover()" type="button" class="btn-handover-done" data-dismiss="modal" id="{{ $project->id }}" title="Handover selesai"><i class="fas fa-check-circle fa-lg"></i></button>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
<!-- table responsive -->
</div>
@endsection
  <script type="text/javascript">
  $('#table1').DataTable( { 
      "responsive": true,
      "processing": true,
      "serverSide": true,
      "pageLength": 10, 
      "searching": true,
  });
  </script>
	

