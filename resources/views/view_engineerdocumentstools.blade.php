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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Aleo:300,400,500,600,700,800,900" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet">
  <link href="../assets/css/docs-engineer.css" rel="stylesheet" />
  <link href="../assets/css/home.css" rel="stylesheet" />
  <link href="../assets/css/Plugin/Datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="../assets/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet"></style>
<!--   <link href="../assets/css/Plugin/Responsive/responsive.bootstrap4.scss" rel="stylesheet" />
  <link href="../assets/css/Plugin/Fixheader/fixedHeader.bootstrap4.min.css" rel="stylesheet" />
  <link href="../assets/css/Plugin/Datatables/jquery.dataTables.css" rel="stylesheet" /> -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
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
          <h4 style="float:right; margin-right:5px">Welcome, Engineer</h4>
        </div>
      </div>
    </div>
    </header>
  
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
  
      <!-- <div class=""> -->

      <ul class="list-unstyled components mb-5">
		   <li class="active ">
            <a href="./view_engineerdocumentstools.html">
              <span class="fas fa-file-alt mr-2"></span>Documents & Tools
            </a>
          </li>
          <li>
          <li>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false">
              <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fas fa-clipboard-list mr-2"></span>
                <span class="menu-collapsed">Projects</span>
                <span class="fa" style="padding-left: 60px"></span>
              </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
              <a href="./view_engineeryourprojects.html" class="list-group-item list-group-item-action">
                <span class="fas fa-tasks mr-1" style="margin-left: 13px"></span>
                  <span class="menu-collapsed" style="font-size: 14px">Your Projects</span>
              </a>
              <a href="./view_engineerhandoverprojects.html" class="list-group-item list-group-item-action">
                <span class="fas fa-stream mr-1" style="margin-left: 13px"></span>
                <span class="menu-collapsed" style="font-size: 14px">Handover Projects</span>
              </a>
            </div>  
          </li>
          <li>
            <a href="./view_engineersearchdocuments.html">
              <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li>
      </ul>
    </nav>
    
  <div class="container-fluid">
  <div class="content">
	  <h2 style="margin-top:10px">Documents & Tools</h2>
		<!-- <form>
			<br>
			<input id="myInput" type="text" name="search" placeholder="Search" style="margin-top:-20px">
			</br>
		</form> -->
    	<table class="table1" id="table1" style="overflow:auto">
    		<thead>
    		<tr>
    			<th>No</th>
    			<th>Produk</th>
    			<th>Jenis Project</th>
    			<th>Nama Project</th>
    			<th>Docs</th>
    			<th>Tools</th>
    		</tr>
    		</thead>
    		<tbody>
    		<tr>
    			<td>1</td>
    			<td>ATMB</td>
    			<td>Sertifikasi</td>
    			<td>
    				Implementasi Layanan NSICCS ATM Bersama Melalui Delivery Channel ATM Standard Chartered Bank
    				<br>
    				<button class="btn-folder" type="button">
    					<i class="fa fa-folder-open"></i>&nbsp Create Folder
    				</button>
    				</br>
    			</td>
    			<td>
    					<button type="button" class="linkbtn" title="Download file ke PC">ISO8583ATMB-TRF 2.0 (20120719)</button>
    					<button type="button" class="linkbtn" title="Download file ke PC">ISO8583ATMB-STD 2.0 (20120719)</button>
    					<button type="button" class="linkbtn" title="Download file ke PC">ATM BERSAMA UAT FORM ONLINE TEST Ver 6.2.3 IBFT</button>
    					<!-- <a class="link" href="https://djponline.pajak.go.id/account/login">ISO8583ATMB-TRF 2.0 (20120719)</a -->
    			</td>
    			<td>
    					<!-- <a class="link" href="https://djponline.pajak.go.id/account/login">Simulator ATMB DEBIT QR v 2018.7.19.183</a> -->
    					<button type="button" class="linkbtn" title="Download file ke PC">Simulator ATMB DEBIT QR v 2018.7.19.183</button>
    					<button type="button" class="linkbtn" title="Download file ke PC">Faker Terbaru v 2018.7.19.183</button>
    			</td>
    		</tr>
    		<tr>
    			<td>2</td>
    			<td>ATMB Debit</td>
    			<td>Internal Test</td>
    			<td>
    				Implementasi ATM Bersama Debit Bank CIMB NIAGA As Acquirer
    				<br>
    				<button class="btn-folder" type="button">
    					<i class="fa fa-folder-open"></i>&nbsp Create Folder
    				</button>
    				</br>
    			</td>
    				<td>
    					<button type="button" class="linkbtn" title="Download file ke PC">ISO8583ATMB-TRF 2.0 (20120719)</button>
    					<button type="button" class="linkbtn" title="Download file ke PC">ISO8583ATMB-STD 2.0 (20120719)</button>
    					<button type="button" class="linkbtn" title="Download file ke PC">ATM BERSAMA UAT FORM ONLINE TEST Ver 6.2.3 IBFT</button>
    			</td>
    			<td>
    					<button type="button" class="linkbtn" title="Download file ke PC">Simulator ATMB DEBIT QR v 2018.7.19.183</button>
    					<button type="button" class="linkbtn" title="Download file ke PC">Faker Terbaru v 2018.7.19.183</button>
    			</td>
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
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript" language="javascript" src="../assets/js/plugins/Datatables/jquery.dataTables.min.js"></script>
  <!-- <script type="text/javascript" language="javascript" src="../assets/js/plugins/Datatables/jquery.dataTables.bootstrap4.min.js"></script> -->
  <script type="text/javascript" language="javascript" src="../assets/js/Plugin/Datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="../assets/js/Plugin/Datatables/dataTables.jqueryui.min.js"></script>
  <script type="text/javascript" language="javascript" src="../assets/js/plugins/Responsive/responsive.bootstrap4.js"></script>
  <script type="text/javascript" language="javascript" src="../assets/js/plugins/Responsive/dataTables.bootstrap.js"></script>

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
<!-- JS Search All -->
<!-- <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->
<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
</body>

</html>