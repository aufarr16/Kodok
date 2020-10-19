    @extends('Templates.Guest')
    @section('PageTitle','Search Documents')
    @section('content')
    <title>
    | {Guest} Search Documents
    </title>
	 
		<div class="table-responsive-lg">
		<table class="table1" id="table1">
		
		<thead>
		<tr>
			<th>No</th>
			<th>Nama Mitra</th>
			<th>Nama Project</th>
			<th>PIC</th>
			<th>Tahun</th>
		</tr>
		</thead>
		
		<tbody>
		@foreach($data_search as $dat_sdoc)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $dat_sdoc->nama_mitra }}</td>
			<td>{{ $dat_sdoc->nama_project }} &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#{{ $dat_sdoc->id_project }}">
					<i class="fa fa-search fa-lg"></i>
				</button>
					
					<!-- The Modal -->
				<div class="modal fade" id="{{ $dat_sdoc->id_project }}" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
				<div class="modal-dialog" style="max-width: 505px">
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">{{ $dat_sdoc->nama_project }}</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1" id="search1">
								<thead>
									<tr>
										<th>No</th>
										<th>Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td>	
                      <a href="#" class="btnsend" title="Request ke admin"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td>
                      <a href="#" class="btnsend" title="Request ke admin"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
										</td>
										<td>Bantex tahun 2020 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td>
                      <a href="#" class="btnsend" title="Request ke admin"><i class="fa fa-envelope fa-lg icon-shadow"></i></a>
										</td>
										<td>Bantex tahun 2020 (BAE)</td>
									</tr>
								
							</table>
							<!-- ./input group -->
							</div>
						<!-- modal body -->
						</div>
					<!-- ./modal content -->
					</div>
				</div>
				<!-- ./modal -->
				</div>
			</td>
			<td>{{ $dat_sdoc->inisial_user}}</td>
			<td>{{ $dat_sdoc->tahun}}</td>
		</tr>
		@endforeach
		</tbody>
	</table>

	<!-- table responsive -->
	</div>
	</br>
	@endsection