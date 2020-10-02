  @extends('Pages.Manager.TempManager')

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
				<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style=" margin-top: 50px; margin-left: 5px">
				<div class="modal-dialog modal-xl" style="max-width: 750px">
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATM Bersama Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
									<table class="table1" id="search" width="unset">
										<thead>
											<tr>
												<th rowspan="2">No</th>	
												<th rowspan="2">Dokumen</th>
												<th rowspan="2">Softcopy</th>
	                      <th colspan="2" style="box-sizing: unset; margin-right: 20px">Hardcopy</th>
											</tr>

											<tr>
												<th>Status</th>
												<th style="box-sizing: unset; margin-right: 20px">Notes</th>
											</tr>
											</thead>
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
											<tr>
												<td>3</td>
												<td>BATO</td>
	                      <td>-</td>
												<td><small class="label lbl-notcollected"><i class="fas fa-thumbs-down"></i>&nbsp Not Collected</small></td>
												<td>Alamat pengirim tidak ditemukan, dokumen akan dikirim kembali minggu depan (12 Juni 2020)</td>
											</tr>
											<tr>
												<td>4</td>
												<td>BAE</td>
	                      <td>-</td>
												<td><small class="label lbl-notcollected"><i class="fas fa-thumbs-down"></i>&nbsp Not Collected</small></td>
												<td>Alamat pengirim tidak ditemukan, dokumen akan dikirim kembali minggu depan (12 Juni 2020)</td>
											</tr>
											<tr>
												<td>5</td>
												<td>BASTD</td>
	                      <td>-</td>
												<td><small class="label lbl-notcollected"><i class="fas fa-thumbs-down"></i>&nbsp Not Collected</small></td>
												<td></td>
											</tr>
											<tr>
												<td>6</td>
												<td>BASTK</td>
	                      <td>-</td>
												<td><small class="label lbl-notcollected"><i class="fas fa-thumbs-down"></i>&nbsp Not Collected</small></td>
												<td></td>
											</tr>
									</table>
							<!-- ./input group -->
							</div>
						<!-- ./modal body -->
						</div>
					<!-- ./modal content -->
					</div>	
				</div>
				<!-- ./the modal -->
				</div>	
				
			</td>
			<td>
		        <button onclick="approve()" type="button" class="btn-approve" title="Approve Project" style="height:1px width:1px"><i class="fa fa-check fa-lg"></i></button>
				<button class="btn-decline" title="Decline approval" data-toggle="modal" data-target="#modal1"><i class="fa fa-times fa-lg"></i></button>

			    <!-- The Modal -->
		        <div class="modalket fade" id="modal1" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
		        <div class="modal-dialog">

			        <!-- Modal content -->
			        <div class="modal-contentket">
				        <div class="modal-headerket">
				          <a class="closeket" data-dismiss="modal" aria-label="close">&times;</a>
				          <h5 class="modal-titleket">Implementasi ATM Bersama Fitur Standard dan Transfer pada Channel Mobile Banking Bank Artos</h5>
			          	</div>  	
						<div class = "modal-bodyket">
							<!-- <div class = "input-groupket"> -->
									<label for="inisial" style="margin-left: 180px">
									Alasan Decline:</label>
									<br>
									&nbsp
									<textarea id="alasan" class="note_status" role="textbox" style="margin-top: -25px;padding-top: 0px !important"></textarea>
							
							<!-- <button onclick="decline()" class="btn-submitket" type="button">Submit</button> -->
							<!-- </div> -->
							<div class="modal-footer" id="modal-footer">
								<button type="submit" class="btnsubmit" id="edituser">Submit</button>
							</div>
						<!-- ./modal body -->
						</div>
					<!-- ./modal content -->
					</div>
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