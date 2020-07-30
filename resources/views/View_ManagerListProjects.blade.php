<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | {Manager} Approval Projects
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
  <link href="{{ url('') }}/css/projects.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/approval.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/search.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Datatables/dataTables.jqueryui.min.css" rel="stylesheet">

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
          <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, Manager</h4>
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
          <li class="active">
            <a href="/manager/projects">
             <span class="fas fa-clipboard-list mr-2"></span>List Projects
            </a>
          </li>
          <li>
            <a href="/manager/assign">
             <span class="fa fa-pencil-square-o mr-2"></span>Assign Projects
            </a>
          </li>    
          <li >
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
  
  <h2 style="margin-top:10px">List Projects</h2>
  <div class="table-responsive-lg">
  <table class="table1" id="table1">
    <thead>
    <tr>
      <th>No</th>
        <th>Inisial</th>
        <th>PIC</th>
        <th>Produk</th>
        <th>Jenis Project</th>
        <th>Nama Mitra</th>
        <th>Nama Project</th>
        <th>Tanggal Assign</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>1</td>
              <td>IDE</td>
              <td>Ismi Destiawati</td>
              <td>Debit</td>
              <td>Sertifikasi</td>
              <td>Bank Nagari</td>
              <td>
                <div class="popover_parent"> 
                  <button type="button" class="btnproject" title="Lihat history PIC" data-toggle="modal" data-target="#modal1">Implementasi ATM Bersama Debit as Acquirer Bank Nagari</button>

                 <!-- The Modal -->
                  <div class="modal1" id="modal1" role="dialog" style="padding-left:17px;">
                  
                  <!-- Modal content -->
                  <div class="modal-content1">
                    <div class="modal-header">
                      <a class="close1" data-dismiss="modal" aria-label="close">&times;</a>
                      <h4 class="modal-title1">Implementasi ATM Bersama Debit as Acquirer Bank Nagari</h4>
                    </div>  
                  <div class = "modal-body1">
                    <div class="qualifications">
                        <div class="line"></div>
                        <div class="tile-outer">
                          <span class="circle">DMR</span>
                          <div class="tile">
                                <p>1 Oktober 2019 - 10 Oktober 2019</p> 
                            </div>
                        </div>
                        <div class="tile-outer">
                            <span class="circle">AUF</span>
                            <div class="tile">
                                <p>11 Oktober 2019</p> 
                            </div>
                        </div>
                        <div class="tile-outer">
                          <span class="circle">IDE</span>
                          <div class="tile">
                                <p>12 Oktober 2019 - 15 Oktober 2019</p> 
                            </div>
                        </div>
                        <div class="tile-outer">
                        </div>
                    <!-- ./qualification -->
                    </div>
                  <!-- modal body -->
                  </div>
                  <!-- modal content -->
                  </div>
                <!-- modal -->
                </div>
              <!-- popover -->
              </div>
              </td>
              <td>07 Juli 2020</td>
              <td><small class="label label-reserved"><i class="fa fa-hourglass-half fa-sm"></i>&nbsp Reserved</small></td>
    </tr>
    <tr>
              <td>2</td>
              <td>DMR</td>
              <td>Devi Mayang Sari</td>
              <td>ATMB</td>
              <td>Internal Test</td>
              <td>Standard Charterd Bank</td>
              <td>
                 <div class="popover_parent"> 
                  <button type="button" class="btnproject" title="Lihat history PIC" data-toggle="modal" data-target="#modal2">Internal Test Layanan NSICCS ATM Bersama Melalui Delivery Channel ATM Standard Chartered Bank</button>

                 <!-- The Modal -->
                  <div class="modal1" id="modal2" role="dialog" style="padding-left:17px;">
                  
                  <!-- Modal content -->
                  <div class="modal-content1">
                    <div class="modal-header">
                      <a class="close1" data-dismiss="modal">&times;</a>
                      <h4 class="modal-title1">Internal Test Layanan NSICCS ATM Bersama Melalui Delivery Channel ATM Standard Chartered Bank</h4>
                    </div>  
                  <div class = "modal-body1">
                    <div class="qualifications">
                      <div class="line"></div>
                      <div class="tile-outer">
                        <span class="circle">DMR</span>
                        <div class="tile">
                              <p>1 Oktober 2019 - 10 Oktober 2019</p> 
                          </div>
                      </div>
                      <div class="tile-outer">
                          <span class="circle">AUF</span>
                          <div class="tile">
                              <p>11 Oktober 2019</p> 
                          </div>
                      </div>
                      <div class="tile-outer">
                        <span class="circle">IDE</span>
                        <div class="tile">
                              <p>12 Oktober 2019 - 15 Oktober 2019</p> 
                          </div>
                      </div>
                      <div class="tile-outer">
                        <span class="circle">AUF</span>
                        <div class="tile">
                              <p>16 Oktober 2019 - 17 Oktober 2019</p> 
                          </div>
                      </div>
                      <div class="tile-outer">
                      </div>
                    <!-- ./qualification -->
                    </div>
                  <!-- modal body -->
                  </div>
                  <!-- modal content -->
                  </div>
                <!-- modal -->
                </div>
              <!-- popover -->
              </div>
              </td>
              <td>12 Juni 2019</td>
              <td><small class="label label-done"><i class="fa fa-check fa-sm"></i>&nbsp Pengujian Done</td>
            </tr>
            <tr>
              <td>3</td>
              <td>AUF</td>
              <td>Aufar Rizqi</td>
              <td>Debit</td>
              <td>Sertifikasi</td>
              <td>Bank QNB</td>
              <td>
                 <div class="popover_parent"> 
                  <button type="button" class="btnproject" title="Lihat history PIC" data-toggle="modal" data-target="#modal3">Implementasi ATM Bersama Debit as Acquirer Bank QNB</button>

                 <!-- The Modal -->
                  <div class="modal1" id="modal3" role="dialog" style="padding-left:17px;">
                  
                  <!-- Modal content -->
                  <div class="modal-content1">
                    <div class="modal-header">
                      <a class="close1" data-dismiss="modal">&times;</a>
                      <h4 class="modal-title1">Implementasi ATM Bersama Debit as Acquirer Bank QNB</h4>
                    </div>  
                  <div class = "modal-body1">
                    <div class="qualifications">
                      <div class="line"></div>
                      <div class="tile-outer">
                        <span class="circle">AUF</span>
                        <div class="tile">
                              <p>1 Oktober 2019 - 10 Oktober 2019</p> 
                        </div>
                      </div>
                      <div class="tile-outer">
                        <span class="circle">DMR</span>
                        <div class="tile">
                              <p>11 Oktober 2019</p> 
                        </div>
                      </div>
                      <div class="tile-outer">
                        <span class="circle">RAS</span>
                        <div class="tile">
                              <p>12 Oktober 2019 - 15 Oktober 2019</p> 
                        </div>
                      </div>
                      <div class="tile-outer">
                      </div>
                    <!-- ./qualification -->
                    </div>
                  <!-- modal body -->
                  </div>
                  <!-- modal content -->
                  </div>
                <!-- modal -->
                </div>
              <!-- popover -->
              </div>
              </td>
              <td>10 Januari 2019</td>
              <td><small class="label label-onprogress"><i class="fas fa-spinner fa-sm"></i>&nbsp On Progress</td>
            </tr>
            <tr>
              <td>4</td>
              <td>RAS</td>
              <td>Rio Ari Saputra</td>
              <td>ATMB</td>
              <td>Sertifikasi</td>
              <td>Bank DKI</td>
              <td>
                  <div class="popover_parent"> 
                  <button type="button" class="btnproject" title="Lihat history PIC" data-toggle="modal" data-target="#modal4">Implementasi ATM Bersama Channel Mobile Banking Bank DKI</button>

                  <!--  The Modal -->
                  <div class="modal1" id="modal4" role="dialog" style="padding-left:17px;">
                  
                  <!-- Modal content -->
                  <div class="modal-content1">
                    <div class="modal-header">
                      <a class="close1" data-dismiss="modal">&times;</a>
                      <h4 class="modal-title1">Implementasi ATM Bersama Channel Mobile Banking Bank DKI</h4>
                    </div>  
                  <div class = "modal-body1">
                    <div class="qualifications">
                      <div class="line"></div>
                      <div class="tile-outer">
                        <span class="circle">RAS</span>
                        <div class="tile">
                          <p>1 Oktober 2019 - 10 Oktober 2019</p> 
                        </div>
                      </div>
                      <div class="tile-outer">
                          <span class="circle">IDE</span>
                          <div class="tile">
                            <p>11 Oktober 2019</p> 
                          </div>
                      </div>
                      <div class="tile-outer">
                        <span class="circle">AUF</span>
                        <div class="tile">
                          <p>12 Oktober 2019 - 15 Oktober 2019</p> 
                        </div>
                      </div>
                      <div class="tile-outer">
                      </div>
                    <!-- ./qualification -->
                    </div>
                  <!-- modal body -->
                  </div>
                  <!-- modal content -->
                  </div>
                <!-- modal -->
                </div>
              <!-- popover -->
              </div>
              </td>
              <td>10 Februari 2019</td>
              <td><small class="label label-drop"><i class="fa fa-times fa-sm"></i>&nbsp Drop</td>
            </tr>
            <tr>
              <td>5</td>
              <td>IDE</td>
              <td>Ismi Destiawati</td>
              <td>Debit</td>
              <td>Sertifikasi</td>
              <td>Bank Panin</td>
              <td>
                 <div class="popover_parent"> 
                  <button type="button" class="btnproject" title="Lihat history PIC" data-toggle="modal" data-target="#modal5">Implementasi Debit GPN as Acquirer di Bank Panin</button>

                  <!-- The Modal -->
                  <div class="modal1" id="modal5" role="dialog" style="padding-left:17px;">
                  
                  <!-- Modal content -->
                  <div class="modal-content1">
                    <div class="modal-header">
                      <a class="close1" data-dismiss="modal">&times;</a>
                      <h4 class="modal-title1">Implementasi Debit GPN as Acquirer di Bank Panin</h4>
                    </div>  
                  <div class = "modal-body1">
                    <div class="qualifications">
                      <div class="line"></div>
                      <div class="tile-outer">
                        <span class="circle">IDE</span>
                        <div class="tile">
                              <p>1 Oktober 2019 - 10 Oktober 2019</p> 
                          </div>
                      </div>
                      <div class="tile-outer">
                          <span class="circle">RAS</span>
                          <div class="tile">
                              <p>11 Oktober 2019</p> 
                          </div>
                      </div>
                      <div class="tile-outer">
                        <span class="circle">DMR</span>
                        <div class="tile">
                              <p>12 Oktober 2019 - 15 Oktober 2019</p> 
                        </div>
                      </div>
                      <div class="tile-outer">
                      </div>
                    <!-- ./qualification -->
                    </div>
                  <!-- modal body -->
                  </div>
                  <!-- modal content -->
                  </div>
                <!-- modal -->
                </div>
              <!-- popover -->
              </div>
              </td>
              <td>10 Februari 2019</td>
              <td><small class="label label-hold"><i class="fa fa-history fa-sm"></i>&nbsp Hold</td>
            </tr>
            <tr>
              <td>6</td>
              <td>DMR</td>
              <td>Devi Mayang Sari</td>
              <td>QR</td>
              <td>Sertifikasi</td>
              <td>BJB</td>
              <td>
                 <div class="popover_parent"> 
                  <button type="button" class="btnproject" title="Lihat history PIC" data-toggle="modal" data-target="#modal5">Implementasi ATM Bersama QR MPM di BJB</button>

                  <!-- The Modal -->
                  <div class="modal1" id="modal5" role="dialog" style="padding-left:17px;">
                  
                  <!-- Modal content -->
                  <div class="modal-content1">
                    <div class="modal-header">
                      <a class="close1" data-dismiss="modal">&times;</a>
                      <h4 class="modal-title1">Implementasi ATM Bersama QR MPM di BJB</h4>
                    </div>  
                  <div class = "modal-body1">
                    <div class="qualifications">
                      <div class="line"></div>
                      <div class="tile-outer">
                        <span class="circle">IDE</span>
                        <div class="tile">
                              <p>11 November 2019 - 20 November 2019</p> 
                          </div>
                      </div>
                      <div class="tile-outer">
                          <span class="circle">RAS</span>
                          <div class="tile">
                              <p>21 November 2019</p> 
                          </div>
                      </div>
                      <div class="tile-outer">
                        <span class="circle">DMR</span>
                        <div class="tile">
                              <p>22 November 2019 - 25 November 2019</p> 
                        </div>
                      </div>
                      <div class="tile-outer">
                      </div>
                    <!-- ./qualification -->
                    </div>
                  <!-- modal body -->
                  </div>
                  <!-- modal content -->
                  </div>
                <!-- modal -->
                </div>
              <!-- popover -->
              </div>
              </td>
              <td>9 November 2019</td>
              <td><small class="label label-projectdone"><i class="fas fa-clipboard-check fa-sm"></i>&nbsp Project Done</td>
            </tr>
            

    </tbody>
  </table>
  <!-- Table responsive -->
  </div>
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
  
  <!-- JS Datatable    -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Datatables/jquery.dataTables.min.js"></script>
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