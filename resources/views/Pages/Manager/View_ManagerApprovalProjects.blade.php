  @extends('Pages.Manager.TempManager')

  @push('styles')
  <link href="{{ url('') }}/css/projects.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/approval.css" rel="stylesheet" />
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
		<tbody>
		@foreach($data_approval as $dat_apr)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $dat_apr->inisial_user}}</td>
			<td>{{ $dat_apr->nama_product}}</td>
			<td>{{ $dat_apr->nama_ptype}}</td>
			<td>{{ $dat_apr->nama_project}}</td>
			<td>Request Approval {{ $dat_apr->nama_pstat}}</td>
			<td>
				<button type="button" class="btn-docs" data-toggle="modal" data-target="#modal"><i class="fa fa-search fa-lg"></i></button>
				
				<!-- The Modal -->
				<div class="modalapproval" id="modal" role="dialog">
				
				<!-- Modal content -->
					<div class="modal-contentapproval">
					<div class="modal-headerapproval">
						<a class="closeapproval" data-dismiss="modal">&times;</a>
						<h2 class="modal-titleapproval">Implementasi ATM Bersama Bank Artos</h2>
					</div>	
						<div class = "modal-bodyapproval">
							<div class = "input-groupapproval">
								<br>
									<table class="table1">
										<tr>
											<th rowspan="2">No</th>	
											<th rowspan="2">Dokumen</th>
											<th rowspan="2">Softcopy</th>
                      <th colspan="2">Hardcopy</th>
										</tr>
										<tr>
											<th>Status</th>
											<th>Notes</th>
										</tr>
										<tr>
											<td>1</td>
											<td>Nodin Penugasan</td>
											<td><a href="#" class="btnpreview" title="Preview Document"><i class="fas fa-search fa-lg icon-shadow"></i></a></td>
                      <td><small class="label lbl-collected"><i class="fas fa-thumbs-up"></i>&nbsp Collected</small></td>
                      <td>-</td>
										</tr>
										<tr>
											<td>2</td>
											<td>BAKO</td>
                      <td>-</td>
											<td><small class="label lbl-notcollected"><i class="fas fa-thumbs-down"></i>&nbsp Not Collected</small></td>
											<td>Alamat pengirim tidak ditemukan, dokumen akan dikirim kembali minggu depan (12 Juni 2020)</td>
										</tr>
									</table>
								</br>
							<!-- ./input group -->
							</div>
						<!-- ./modal body -->
						</div>
					<!-- ./modal content -->
					</div>	
				<!-- ./the modal -->
				</div>	
				
			</td>
			<td>
        <button onclick="approve()" type="button" class="btn-approve" title="Approve Project" style="height:1px width:1px"><i class="fa fa-check fa-lg"></i></button>
				<button class="btn-decline" title="Decline approval" data-toggle="modal" data-target="#modal1"><i class="fa fa-times fa-lg"></i></button>

	      <!-- The Modal -->
        <div class="modalket" id="modal1" role="dialog" style="padding-left:10px;">
                  
        <!-- Modal content -->
        <div class="modal-contentket">
	        <div class="modal-headerket">
	          <a class="closeket" data-dismiss="modal" aria-label="close">&times;</a>
	          <h5 class="modal-titleket">Implementasi ATM Bersama Fitur Standard dan Transfer pada Channel Mobile Banking Bank Artos</h5>
          </div>  	
					<div class = "modal-bodyket">
						<div class = "input-groupket">
								<label for="inisial">Alasan Decline:</label>
								<br>
								&nbsp
								<textarea id="alasan" class="note_status" role="textbox"></textarea>
						
						<button onclick="decline()" class="btn-submitket" type="button">Submit</button>
						</div>
					<!-- ./modal body -->
					</div>
				<!-- ./modal content -->
				</div>
				<!-- ./modal -->
				</div>

			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<!-- Table responsive -->
	</div>
  @endsection
	