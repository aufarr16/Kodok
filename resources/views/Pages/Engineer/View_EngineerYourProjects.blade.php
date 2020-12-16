@extends('Templates.Engineer')
@section('Welcome') 
  <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection
@section('PageTitle','Your Projects')
@section('content')
<title>
	| {Engineer} Your Projects
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
				<th>Tanggal Assign</th>
				<th style="width: 75px">Status</th>
				<th>Keterangan</th>
				<th>Docs</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td>1</td>
			<td>DEBIT</td>
			<td>Internal Test</td>
			<td>Bank Nagari</td>
			<td>Implementasi Layanan ATM Bersama Debit Bank Nagari</td>
			<td>07 April 2019</td>
			<td>
				<div class="input-group">
				<select class="custom-select" id="status_select">
					<option value="" hidden>-</option>
					<option value="onprogress">On Progress</option>
					<option value="pengujiandone">Pengujian Done</option>
					<option value="projectdone">Project Done</option>
					<option value="hold">Hold</option>
					<option value="drop">Drop</option>
				</select>
											
				<button class="btn-ok" type="button">OK</button>
				</div>
			</td>
			<td>Decline
      <button type="button" class="btn-keterangan" title="Keterangan Status" data-toggle="modal" data-target="#modal1"><i class="far fa-question-circle"></i></button>

        <!-- The Modal -->
        <div class="modalket fade" id="modal1" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style="padding-left:10px;">
					<div class="modal-dialog modal-sm">    
          <!-- Modal content -->
          <div class="modal-contentket">
              <div class="modal-headerket">
                <a class="closeket" data-dismiss="modal" aria-label="close">&times;</a>
                  <h4 class="modal-titleket">Keterangan Status</h4>
              </div>  
              <div class = "modal-bodyket">
                <span>BAKO yang diupload tidak sesuai qwertyu asdfgh zxcvbn poiuytr lkjhgf mnbvc</span> 
              <!-- modal body -->
              </div>
          <!-- modal content -->
          </div>
         </div>
          <!-- modal -->
          </div>
			</td>
			<td>
				<button title="Upload Docs" type="button" class="btn-docs" data-toggle="modal" data-target="#modal" disabled>
					<i class="fas fa-cloud-upload-alt fa-lg"></i>
				</button>
					
					<!-- The Modal -->
					<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true" >
					<div class="modal-dialog modal-xl">

						<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
							<a class="close1" data-dismiss="modal">&times;</a>
							<h2 class="modal-title">Implementasi Layanan ATM Bersama Debit Bank Nagari</h2>
						</div>	
						
						<!--Form Upload-->
						<div class = "modal-body">
							<div class = "input-group">
								<div class="container-tab">	
								
							<div class="card">
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false"> 
												<i class="fa" aria-hidden="false"></i>
												&nbsp Persiapan Pengujian
											</button>
										</h2>
									<div id="collapseOne1" class="collapse" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">
												
													<!--MOM Meeting-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">MOM Kick Off Meeting</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div> 
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
													<!--Nodin Penugasan-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Nodin Penugasan</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
													<!--Upload Jadwal-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Dokumen Jadwal</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Memo Dinas-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Memo Dinas</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Form Pendaftaran-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Pendaftaran Jaringan</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
												<!--row-->
												</div>
											
										<!--./card-content-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>
								
								<div class="card">
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo1">
												<i class="fa" aria-hidden="true"></i>
												&nbsp Laporan Harian Pengujian
											</button>
										</h2>
									<!-- </div> -->
									<div id="collapseTwo1" class="collapse show" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">
												
													<!--Form SIT-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form SIT</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div> 
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
													<!--Laporan Harian SIT-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian SIT</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Form UAT-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form UAT</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Laporan Harian UAT-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian UAT</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
													<!--Laporan Harian Regresi tahap 1-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian Regresi 1</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Laporan Harian Stress Test tahap 1-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian Stress Test 1</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Laporan Harian Regresi tahap 2-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian Regresi 2</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Laporan Harian Stress Test tahap 2-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian Stress Test 2</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
												<!--row-->
												</div>
											
										<!--./card-content-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>	
								
								<div class="card">
									
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false">
												<i class="fa" aria-hidden="false"></i>
												&nbsp Pengujian Selesai
											</button>
										</h2>
									
									<div id="collapseThree1" class="collapse" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">
												
													<!--Laporan Final Pengujian-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Final Pengujian</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div> 
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
													<!--Form BAKO-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form BAKO</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-body-->
														</div>
													<!--./box-->
													</div>
													
													<!--Form BAE-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form BAE</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-body-->
														</div>
													<!--./box-->
													</div>
													
													<!--Form BA Stress Test-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form BA Stress Test</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
												<!--row-->
												</div>
											
										<!--./card-content-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>	
								
								
								<div class="card">
									<!-- <div class="card-header" id="headingFour"> -->
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseFour1" aria-expanded="false">
												<i class="fa" aria-hidden="false"></i>
												&nbsp Migrasi
											</button>
										</h2>
									<!-- </div> -->
									<!-- <div id="collapseFour1" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample"> -->
									<div id="collapseFour1" class="collapse" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">
												
													<!--MOM migrasi-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">MOM Migrasi</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Jadwal Migrasi-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Jadwal Migrasi</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Form Permintaan Perubahan-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Permintaan Perubahan</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Form Pendaftaran Jaringan-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Pendaftaran Jaringan</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Memo Dinas-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Memo Dinas</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Form Migrasi-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Migrasi</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Form Base24-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Base24</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Form Gapura-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Gapura</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--row-->
												</div>
											
										<!--./card-content-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>	

								<div class="card">
									<!-- <div class="card-header" id="headingFive"> -->
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseFive1" aria-expanded="false">
												<i class="fa" aria-hidden="false"></i>
												&nbsp TO
											</button>
										</h2>
									<!-- </div> -->
									<!-- <div id="collapseFive1" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample"> -->
									<div id="collapseFive1" class="collapse" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">
													<!--Form Pra TO-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Pra TO</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Form TO-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form TO</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Form BATO-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form BATO</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Laporan Monitoring Harian-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Monitoring Harian</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
												<!--row-->
												</div>
											
										<!--./card-content-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>
								
								<div class="card">
									<!-- <div class="card-header" id="headingFive"> -->
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseSix1" aria-expanded="false">
												<i class="fa" aria-hidden="false"></i>
												&nbsp Project Selesai
											</button>
										</h2>
									<!-- </div> -->
									<!-- <div id="collapseFive1" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample"> -->
									<div id="collapseSix1" class="collapse" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">
												
													<!--Laporan Final Monitoring-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Final Monitoring</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Memo Dinas Monitoring-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Memo Dinas Monitoring</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--BA serah terima monitoring-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">BA Serah Terima Monitoring</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Form BA Stress Test-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form BA Stress Test</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Nodin Balasan-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Nodin Balasan</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
											
												<!--row-->
												</div>
											
										<!--./card-content-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>	
								
								<button type="button" class="btn-upload" data-dismiss="modal" 
								id="submit">Upload File</button>
								
							<!--./modal-body-->
							</div>
							<!--./modal content-->
							</div>	
							</div>
						<!--./the modal-->
						</div>						
			</td>
			
		</tr>
		<tr>
			<td>2</td>
			<td>ATMB</td>
			<td>Sertifikasi</td>
			<td>Standard Chartered Bank</td>
			<td>Implementasi Layanan NSICCS ATM Bersama Melalui Delivery Channel ATM Standard Chartered Bank</td>
			<td>07 Desember 2019</td>
			<td>
				<div class="input-group">
				<select class="custom-select" id="status_select"> 
					<option value="" hidden>-</option>
					<option value="onprogress">On Progress</option>
					<option value="pengujiandone">Pengujian Done</option>
					<option value="projectdone">Project Done</option>
					<option value="hold">Hold</option>
					<option value="drop">Drop</option>
				</select>
											
				<button class="btn-ok" type="button">OK</button>
				</div>
			</td>
			<td>Decline
      <button type="button" class="btn-keterangan" title="Keterangan Status" data-toggle="modal" data-target="#modal2"><i class="far fa-question-circle"></i></button>

        <!-- The Modal -->
        <div class="modalket fade" id="modal2" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style="padding-left:10px;">
					<div class="modal-dialog modal-sm">          
          <!-- Modal content -->
          <div class="modal-contentket">
              <div class="modal-headerket">
                <a class="closeket" data-dismiss="modal" aria-label="close">&times;</a>
                  <h4 class="modal-titleket">Keterangan Status</h4>
              </div>  
              <div class = "modal-bodyket">
                <span>BAKO 2</span> 
              <!-- modal body -->
              </div>
          <!-- modal content -->
          </div>
         </div>
          <!-- modal -->
          </div>
			</td>
			<td>
				<button title="Upload Docs" type="button" class="btn-docs" data-toggle="modal" data-target="#model">
					<i class="fas fa-cloud-upload-alt fa-lg"></i>
				</button>
					
					<!-- The Modal -->
					<div class="modal fade" id="model" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
					<div class="modal-dialog modal-xl">

						<!-- Modal content -->
						<div class="modal-content" >
						<div class="modal-header">
							<a class="close1" data-dismiss="modal">&times;</a>
							<h2 class="modal-title">Implementasi Layanan NSICCS ATM Bersama Melalui Delivery Channel ATM Standard Chartered Bank</h2>
						</div>	
						
						<!--Form Upload-->
						<div class = "modal-body">
							<div class = "input-group">
								<div class="container-tab">	
								
								 <div class="card">
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false">
												<i class="fa" aria-hidden="false"></i>
												&nbsp Persiapan Pengujian
											</button>
										</h2>
									
									<div id="collapseOne2" class="collapse" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">
												
													<!--MOM Meeting-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">MOM Kick Off Meeting</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div> 
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
													<!--Nodin Penugasan-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Nodin Penugasan</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-body-->
														</div>
													<!--./box-->
													</div>
													
													<!--Upload Jadwal-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Dokumen Jadwal</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
													<!--Memo Dinas-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Memo Dinas</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Form Pendaftaran-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Pendaftaran Jaringan</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

												<!--row-->
												</div>
											
										<!--./card-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>	
								
								<div class="card">
									<!-- <div class="card-header" id="headingTwo"> -->
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseTwo2">
												<i class="fa" aria-hidden="false"></i>
												&nbsp Laporan Harian Pengujian
											</button>
										</h2>
							
									<div id="collapseTwo2" class="collapse show" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">
												
													<!--Form SIT-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form SIT</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div> 
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
													<!--Laporan Harian SIT-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian SIT</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Form UAT-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form UAT</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Laporan Harian UAT-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian UAT</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
													<!--Laporan Harian Regresi tahap 1-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian Regresi 1</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Laporan Harian Stress Test tahap 1-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian Stress Test 1</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Laporan Harian Regresi tahap 2-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian Regresi 2</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>

													<!--Laporan Harian Stress Test tahap 2-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Harian Stress Test 2</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
												<!--row-->
												</div>
											
										<!--./card-content-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>	
								
								<div class="card">
									<!-- <div class="card-header" id="headingThree"> -->
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false">
												<i class="fa" aria-hidden="false"></i>
												&nbsp Pengujian Selesai
											</button>
										</h2>
									<div id="collapseThree2" class="collapse" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">
												
													<!--Laporan Final Pengujian-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Final Pengujian</h3>
																	<<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div> 
														<!--./box-->
														</div>
													<!--./col-->
													</div>
													
													<!--Form BAKO-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form BAKO</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-body-->
														</div>
													<!--./box-->
													</div>
													
													<!--Form BAE-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form BAE</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box-body-->
														</div>
													<!--./box-->
													</div>
													
													<!--Form BA Stress Test-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form BA Stress Test</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
												<!--row-->
												</div>
											
										<!--./card-content-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>	
								
								<div class="card">
									<!-- <div class="card-header" id="headingFour"> -->
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseFour2" aria-expanded="false">
												<i class="fa" aria-hidden="false"></i>
												&nbsp Migrasi
											</button>
										</h2>
									<div id="collapseFour2" class="collapse" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">
												
													<!--MOM migrasi-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">MOM Migrasi</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Jadwal Migrasi-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Jadwal Migrasi</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Form Permintaan Perubahan-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Permintaan Perubahan</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Form Pendaftaran Jaringan-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Pendaftaran Jaringan</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Memo Dinas-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Memo Dinas</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Form Migrasi-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Migrasi</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Form Base24-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Base24</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>

													<!--Form Gapura-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Gapura</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--row-->
												</div>
											
										<!--./card-content-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>	

								<div class="card">
									<!-- <div class="card-header" id="headingFour"> -->
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseFive2" aria-expanded="false">
												<i class="fa" aria-hidden="false"></i>
												&nbsp TO
											</button>
										</h2>
								
									<div id="collapseFive2" class="collapse" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">				
													<!--Form Pra TO-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form Pra TO</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Form TO-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form TO</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Form BATO-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form BATO</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Laporan Monitoring Harian-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Monitoring Harian</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
												<!--row-->
												</div>
											
										<!--./card-content-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>	
								
								<div class="card">
										<h2 class="m-minus">
											<button type="button" class="btn-collapse" data-toggle="collapse" data-target="#collapseSix2" aria-expanded="false">
												<i class="fa" aria-hidden="false"></i>
												&nbsp Project Selesai
											</button>
										</h2>
									<div id="collapseSix2" class="collapse" data-parent="#accordionExample">
										<div class="card-content">
									
												<!--baris pertama-->
												<div class="row">
												
													<!--Laporan Final Monitoring-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Laporan Final Monitoring</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Memo Dinas Monitoring-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Memo Dinas Monitoring</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--BA serah terima monitoring-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">BA Serah Terima Monitoring</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Form BA Stress Test-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Form BA Stress Test</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
													
													<!--Nodin Balasan-->
													<div class="col-md-3">
														<div class="box box warning">
															<div class="box-header with-border">
																<h3 class="box-title">Nodin Balasan</h3>
																	<div class="box-body">
																				<input type="file" name="filename">
																	<!--./box-body-->
																	</div>
															<!--./box-header-->
															</div>
														<!--./box--->
														</div>
													<!--./col-->
													</div>
											
												<!--row-->
												</div>
											
										<!--./card-content-->
										</div>
									<!--./collapsetwo-->
									</div>
								<!--./card-->
								</div>	
									
								<button type="button" class="btn-upload" data-dismiss="modal" id="submit">Upload File</button>
									
								<!--./modal-body-->
							</div>
							<!--./modal content-->
							</div>	
						</div>
						<!--./the modal-->
						</div>		
			</td>
		</tr>
		</tbody>
	</table>
	<!-- table responsive -->
</div>
@endsection