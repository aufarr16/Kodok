<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | {Engineer} Your Projects
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Aleo:300,400,500,600,700,800,900" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="{{ url('') }}/style.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/home.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/projects.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/search.css" rel="stylesheet" />
  <!-- <link href="{{ url('') }}/css/arsipadmin.css" rel="stylesheet" /> -->
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet">
  <link href="{{ url('') }}/css/Plugin/Sweetalert/sweetalert.min.css" rel="stylesheet" />
</head>

  <body>
	 <header class="main-header">
      <div class="custom-menu">
      <div class="row">
        <div class="col-md-6">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
         <i class="fas fa-align-justify fa-2x"></i>
        </button>
          Sistem Dokumentasi
        </div>
      <div class="col-md-6">
          <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, Engineer</h4>
        </div>
      </div>
    </div>
    </header>
	  
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <ul class="list-unstyled components mb-5">
		  <li class="active ">
            <a href="/engineer/doctools">
              <span class="fas fa-file-alt mr-2"></span>Documents & Tools
            </a>
          </li>
          <li class="active">
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false">
              <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fas fa-clipboard-list mr-2"></span>
                <span class="menu-collapsed">Projects</span>
                <span class="fa" style="padding-left: 60px"></span>
              </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
              <a href="/engineer/projects" class="list-group-item list-group-item-action">
                <span class="fas fa-tasks mr-1" style="margin-left: 13px"></span>
                  <span class="menu-collapsed" style="font-size: 14px">Your Projects</span>
              </a>
              <a href="/engineer/handover" class="list-group-item list-group-item-action">
                <span class="fas fa-stream mr-1" style="margin-left: 13px"></span>
                <span class="menu-collapsed" style="font-size: 14px">Handover Projects</span>
              </a>
            </div>  
          </li>
          <li>
            <a href="/engineer/searchdocs">
              <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li>
        </ul>
      </nav>

   	<div class="container-fluid">
      <div class="content">

	  <h2 style="margin-top:10px">Your Projects</h2>
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
            <div class="modalket" id="modal1" role="dialog" style="padding-left:10px;">
                  
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

	          <!-- modal -->
	          </div>
				</td>
				<td>
					<button title="Upload Docs" type="button" class="btn-docs" data-toggle="modal" data-target="#modal" disabled>
						<i class="fas fa-cloud-upload-alt fa-lg"></i>
					</button>
						
						<!-- The Modal -->
						<div class="modal" id="modal" role="dialog" style="padding-left:17px; margin-left: 190px; margin-top: 10px">
						

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
																	<h3 class="box-title">Form Pendaftaran</h3>
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
									
									<button type="button" class="btn-upload" data-dismiss="modal">Upload File</button>
									
								<!--./modal-body-->
								</div>
								<!--./modal content-->
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
            <div class="modalket" id="modal2" role="dialog" style="padding-left:10px;">
                  
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
              
	          <!-- modal -->
	          </div>
				</td>
				<td>
					<button title="Upload Docs" type="button" class="btn-docs" data-toggle="modal" data-target="#model">
						<i class="fas fa-cloud-upload-alt fa-lg"></i>
					</button>
						
						<!-- The Modal -->
						<div class="modal" id="model" role="dialog" style="padding-left:17px; margin-left: 190px; margin-top: 10px">
						

							<!-- Modal content -->
							<div class="modal-content">
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
																	<h3 class="box-title">Form Pendaftaran</h3>
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
										
									<button type="button" class="btn-upload" data-dismiss="modal">Upload File</button>
										
									<!--./modal-body-->
								</div>
								<!--./modal content-->
								</div>	
							<!--./the modal-->
							</div>		
				</td>
			</tr>
			</tbody>
		</table>
  	<!-- table responsive -->
	</div>
	</br>
	<!-- ./content -->
	</div>

	<!-- footer -->
  	<div class="blockquote text-right">
        <span>Copyright © 
        <script>
          document.write(new Date().getFullYear())
        </script>
        All rights reserved
      </span>
    <!-- </footer> -->
  	</div>

	<!-- ./container fluid -->
	</div>
<!-- ./wrapper -->
</div>
		
  <!--   Core JS Files   -->
  <script src="{{ url('') }}/js/core/jquery.min.js"></script>
  <script src="{{ url('') }}/js/core/popper.min.js"></script>
  <script src="{{ url('') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ url('') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Datatables/jquery.dataTables.min.js"></script>
  <!-- <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Datatables/jquery.dataTables.bootstrap4.min.js"></script> -->
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/Plugin/Datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/Plugin/Datatables/dataTables.jqueryui.min.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/responsive.bootstrap4.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/dataTables.bootstrap.js"></script>

<!-- JS Datatable pagination  -->
<script>
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
</script>
<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
</body>

</html>