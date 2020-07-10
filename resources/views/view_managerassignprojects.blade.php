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
  <link rel="stylesheet" type="text/css" href="bootstrap-select.min.css">
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
  <link href="{{ url('') }}/style.css" type="text/css" rel="stylesheet">
  <link href="{{ url('') }}/css/home.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/assign.css" rel="stylesheet" />
  <!-- Select 2 -->
  <link href="{{ url('') }}/css/Plugin/Select2/select2.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Select2/select2.full.min.css" rel="stylesheet" /> 
 
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ url('') }}/demo/demo.css" rel="stylesheet" />
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
          <h4 style="float:right; margin-right:5px">Welcome, Manager</h4>
        </div>
      </div>
    </div>
    </header>
  
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <ul class="list-unstyled components mb-5">
          <li>
            <a href="/manager/home">
           <span class="fa fa-home mr-2"></span>Home
            </a>
          </li>
          <li>
            <a href="/manager/projects">
             <span class="fas fa-clipboard-list mr-2"></span>List Projects
            </a>
          </li>
          <li class="active">
            <a href="/manager/assign">
             <span class="fa fa-pencil-square-o mr-2"></span>Assign Projects
            </a>
          </li>    
          <li>
            <a href="/manager/approval">
              <span class="fas fa-clipboard-check mr-2"></span>Approval Projects
            </a>
          </li>
          <li>
            <a href="/manager/searchdocs">
              <span class="fa fa-search mr-2"></span>Search Documents
            </a>
          </li>
        </ul>
      </nav>
    
  <div class="container-fluid">
      <div class="content">

       <h2 style="margin-top:10px">Assign Projects</h2>
          <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#new">New Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#handover">Handover Projects</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="new" class="container tab-pane active">
        <form>
          <div class="form-group">
            <label for="NamaPIC" style="font-weight:bolder">PIC</label>
            <br>
            <select id="PIC" class="js-states form-control" data-placeholder="Pilih PIC" style="width:100%">
              <option value=""></option>
              <option value="IDE">Ismi Destiawati</option>
              <option value="DMR">Devi Mayang Sari</option>
              <option value="AUF">Aufar Rizqi</option>
              <option value="RAS">Rio Ari Saputra</option>
            </select>
          </div>
          <div class="form-group">
            <label for="produk" style="font-weight:bolder">Produk</label>
            <br>
            <select id="produk" class="js-states form-control" data-placeholder="Pilih Produk" style="width:100%">
              <option value=""></option>
              <option value="atmb">ATMB</option>
              <option value="debit">Debit</option>
              <option value="payment">Payment</option>
            </select>
          </div>
          <div class="form-group">
            <label for="jenisprojet" style="font-weight:bolder">Jenis Project</label>
            <br>
            <select id="jenisproject" class="js-states form-control" data-placeholder="Pilih Jenis Project" style="width:100%">
              <option value=""></option>
              <option value="internaltest">Internal Test</option>
              <option value="sertifikasi">Sertifikasi</option>
              <option value="regresi">Regresi</option>
              <option value="resertifikasi">Support</option>
              <option value="qa">QA</option>
            </select>
          </div>
          <div class="form-group">
           <label for="namamitra" style="font-weight:bolder">Nama Mitra</label>
            <br>
            <select id="namamitra" class="js-states form-control" data-placeholder="Pilih Mitra" style="width:100%">
              <option value=""></option>
              <option value="internaltest">Internal Test</option>
              <option value="sertifikasi">Sertifikasi</option>
              <option value="regresi">Regresi</option>
              <option value="resertifikasi">Support</option>
              <option value="qa">QA</option>
            </select>
          </div>          
          <div class="form-group">
            <label for="nama_project" style="font-weight:bolder">Nama Project</label>
            <br>
            <input class="input" type="text" id="nama_project" name="nama_project" required>
              <span class="underline"></span>
            <br>
          </div>

          <button type="submit" class="btn-submit">Submit</button>
        </form>
      </div>

      <div id="handover" class="container tab-pane fade">
        <form>
          <div class="form-group">
            <label for="NamaPIC" style="font-weight:bolder">PIC</label>
              <br>
              <select id="PIC2" class="js-states form-control" data-placeholder="Pilih PIC" style="width:100%">
                <option value=""></option>
                <option value="IDE">Ismi Destiawati</option>
                <option value="DMR">Devi Mayang Sari</option>
                <option value="AUF">Aufar Rizqi</option>
                <option value="RAS">Rio Ari Saputra</option>
              </select>
          </div>
          <br>
          <div class="form-group">
            <label for="produk" style="font-weight:bolder">Nama project</label>
            <br>
            <select id="nama_project2" class="js-states form-control" data-placeholder="Pilih Nama Project" style="width:100%">
              <option value=""></option>
              <option value="Implementasi Layanan NSICCS ATM Bersama Melalui Delivery Channel ATM Standard Chartered Bank">
              Implementasi Layanan NSICCS ATM Bersama Melalui Delivery Channel ATM Standard Chartered Bank</option>
              <option value="Implementasi Layanan ATM Bersama Debit Bank Nagari">Implementasi Layanan ATM Bersama Debit Bank Nagari</option>
            </select>
          </div>
          <br>
          <div class="form-group">
            <label for="PIChandover" style="font-weight:bolder">Jenis Project</label>
            <br>
            <select id="PIChandover" class="js-states form-control" data-placeholder="Pilih PIC Handover" style="width:100%">
              <option value=""></option>
              <option value="IDE">Ismi Destiawati</option>
              <option value="DMR">Devi Mayang Sari</option>
              <option value="AUF">Aufar Rizqi</option>
              <option value="RAS">Rio Ari Saputra</option>
            </select>
          </div>
                                                              
          <button type="submit" class="btn-submit">Submit</button>
        </form>
      </div>
    </div>
                       
<!-- content -->
</div>
<!-- container fluid -->
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
    
  <!--   Core JS Files  -->
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
 <!-- <script src="bootstrap-select.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
   <!--  <script src="http://harvesthq.github.io/chosen/chosen.jquery.js"></script> -->
    
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
<!-- Select 2 -->
<script src="{{ url('') }}/css/Plugin/Select2/select2.min.js"></script>
<script>
     $("#PIC").select2({
          allowClear: true
      });

     $("#produk").select2({
          allowClear: true
      });

      $("#jenisproject").select2({
          allowClear: true
      });
      $("#namamitra").select2({
          allowClear: true
      });
</script>

<script>
     $("#PIC2").select2({
          allowClear: true
      });

     $("#nama_project2").select2({
          allowClear: true
      });

      $("#PIChandover").select2({
          allowClear: true
      });

</script>
</body>

</html>