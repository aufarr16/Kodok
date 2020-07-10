<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('') }}/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ url('') }}/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Aleo:300,400,500,600,700,800,900" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="{{ url('') }}/css/home.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/projects.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/search.css" rel="stylesheet" />
  <link href="{{ url('') }}/style.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Responsive/responsive.bootstrap4.scss" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet"></style>
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.bootstrap4.min.css" rel="stylesheet"></style>

<!--   <link href="{{ url('') }}/css/search-engineer.css" rel="stylesheet" /> -->
  <!-- CSS Just for demo purpose, don't include it in your project -->

</head>

<!-- <body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="info">
	 <div class="logo">
       <img src="{{ url('') }}/img/document.png" width="40" height="40">
		  Welcome, Engineer 
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav"> -->
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
          <h4 style="float:right; margin-right:5px">Welcome, Admin</h4>
        </div>
      </div>
    </div>
    </header>
    
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar" class="shift">
    
      <!-- <div class=""> -->

      <ul class="list-unstyled components mb-5">
        <li>
				<a href="/admin/archive">
					<span class="fa fa-book mr-2"></span>Archive Documents
				</a>
			</li>
			<li class="active">
            <a href="/admin/searchdocs">
             <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li>
         <!--  <li>
				<a href="./Filling - Admin.html">
					<span class="fas fa-folder-open mr-2"></span>Filling Documents
				</a>
			</li> -->
          <li>
			<a href="/admin/users">
				<span class="fas fa-users mr-2"></span>Users
			</a>
			</li>
          <li>
            <a href="/admin/products">
            <span class="fas fa-random mr-2"></span>Products
            </a>
          </li>
        </ul>
      </nav>

    <div class="container-fluid">
    <div class="content">
	  
    <h2 style="margin-top:10px">Search Documents</h2>
		
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
		<tr>
			<td>1</td>
			<td>Bank Nagari</td>
			<td>Implementasi ATMB Debit Bank Nagari &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Debit Bank Nagari</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">400/ND/117/2020</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-DEBIT/223/II/2020</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2020 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-DEBIT/223/II/2020</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2020 (BAE)</td>
									</tr>
								
							</table>
						</div>
					</div>
					</div>
				</div>
			</td>
			<td>IDE</td>
			<td>2020</td>
		<tr>
			<td>2</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>6</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>7</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>8</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>9</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>10</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>11</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>12</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>13</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>14</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>15</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>17</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Bank Artos</td>
			<td>Implementasi ATMB Bank Artos &nbsp;
				<button title="Search Docs" type="button" class="button" data-toggle="modal" data-target="#model">
						<i class="fa fa-search fa-lg"></i>
					</button>
					
					<!-- The Modal -->
				<div class="modal" id="model" role="dialog" style="padding-left:17px;">
				
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATMB Bank Artos</h2>
					</div>	
						<div class = "modal-body">
							<div class = "input-group">
								<br>
							<table class="table1">
								<thead>
									<tr class="filters">
										<th>No</th>
										<th>Dokumen</th>
										<th>No.Dokumen</th>
										<th>Softcopy</th>
										<th>Hardcopy</th>
									</tr>
								</thead>
									<tr>
										<td>1</td>
										<td>Nodin Penugasan</td>
										<td><button class="btn-doc" title="Preview dokumen">442/ND/130/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>BAKO</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAKO-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAKO)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BAE</td>
										<td><button class="btn-doc" title="Preview dokumen">006/02/BAE-ATMB/223/III/2019</button></td>
										<td>	
											<button class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
											<button class="btnsend" title="Kirim ke email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
										</td>
										<td>Bantex tahun 2019 (BAE)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</td>
			<td>DMR</td>
			<td>2019</td>
		</tr>
		</tbody>
	</table>

</div>
</div>
</div>
     <footer class="footer">
              <span class="copyright">
                Copyright ©
                <script>
                  document.write(new Date().getFullYear())
                </script>  All rights reserved
              </span>
      </footer>
  <!--   Core JS Files   -->
  <script src="{{ url('') }}/js/core/jquery.min.js"></script>
  <script src="{{ url('') }}/js/core/popper.min.js"></script>
  <script src="{{ url('') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ url('') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ url('') }}/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ url('') }}/demo/demo.js"></script>
<!--   <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  <script type="text/javascript">
  </script> -->
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
      pageSize: 8,     
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