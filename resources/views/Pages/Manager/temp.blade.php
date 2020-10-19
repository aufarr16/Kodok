  @extends('Pages.Manager.TempManager')
  
  @push('styles')
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
  @endpush
  @section('PageTitle','List Projects')
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
    @foreach($data_projek as $dat_proj)
    <tr>
      <td>{{ $loop->iteration}}</td>
      <td>{{ $dat_proj->inisial_user }}</td>
      <td>{{ $dat_proj->nama_user }}</td>
      <td>{{ $dat_proj->nama_product }}</td>
      <td>{{ $dat_proj->nama_ptype }}</td>
      <td>{{ $dat_proj->nama_mitra }}</td>
      <td>
        <div class="popover_parent"> 
          <button type="button" class="btnproject" title="Lihat history PIC" data-toggle="modal" data-target="#{{ $dat_proj->id_project }}">{{ $dat_proj->nama_project }}</button>

         <!-- The Modal -->
          <div class="modal1 fade" id="{{ $dat_proj->id_project }}" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
          <div class="modal-dialog modal-lg">
          <!-- Modal content -->
          <div class="modal-content1">
            <div class="modal-header">
              <a class="close1" id="{{ $dat_proj->id_project }}" data-dismiss="modal" aria-label="close">&times;</a>
              <h5 class="modal-title1">{{ $dat_proj->nama_project }}</h5>
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
                        <p>12 November 2019 - 15 Desember 2019</p> 
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
        </div>
        <!-- modal -->
        </div>
      <!-- popover -->
      </div>
      </td>
      <td>{{ $dat_proj->waktu }}</td>
      <td>
        @switch($dat_proj->id_pstat)
          @case(1)
            <small class="label label-reserved"><i class="fa fa-hourglass-half fa-sm"></i>&nbsp Reserved</small>
            @break
          @case(2)
            <small class="label label-onprogress"><i class="fas fa-spinner fa-sm"></i>&nbsp On Progress</small>
            @break
          @case(3)
            <small class="label label-done"><i class="fa fa-check fa-sm"></i>&nbsp Pengujian Done</small>
            @break
          @case(4)
            <small class="label label-projectdone"><i class="fas fa-clipboard-check fa-sm"></i>&nbsp Project Done</small>
            @break
          @case(5)
            <small class="label label-hold"><i class="fa fa-history fa-sm"></i>&nbsp Hold</small>
            @break
          @case(6)
            <small class="label label-drop"><i class="fa fa-times fa-sm"></i>&nbsp Drop</small>
            @break
          @default
            @break                
        @endswitch
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
  <!-- Table responsive -->
  </div>
  @endsection
  
  @push('scripts')
 <!--   Core JS Files   --
  <script src="{{ url('') }}/js/core/jquery.min.js"></script>
  <script src="{{ url('') }}/js/core/popper.min.js"></script>
  <script src="{{ url('') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ url('') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    --
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ url('') }}/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    --
  <script src="{{ url('') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc --
  <script src="{{ url('') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! --
  <script src="{{ url('') }}/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  
  <!-- JS Datatable    --
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/Plugin/Datatables/dataTables.jqueryui.min.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/responsive.bootstrap4.js"></script>
  <script type="text/javascript" language="javascript" src="{{ url('') }}/js/plugins/Responsive/dataTables.bootstrap.js"></script>

<!-- JS Datatable pagination  --
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
</script> -->
@endpush


<!-- ############################################################################################################################################# -->


  @extends('Templates.Manager')
  
  @push('styles')
  <link href="{{ url('') }}/css/projects.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/search.css" rel="stylesheet" />
  @endpush
  @section('PageTitle','Search Documents')
  @section('content')
  <title>
    | {Manager} Search Documents
  </title>

  <div class="table-responsive-lg"> 
    <table id="table1" class="table1" style="margin-top: -40px" style="overflow:auto">
    
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
                    <table class="table1" id="search">
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
                            <button type="button" class="btnpreview" title="Preview Document"><i class="fas fa-search fa-lg icon-shadow"></i></button>
                            <button type="button" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
                            <button onclick="sendemail()" type="button" class="btnsend" title="Kirim ke email" id="email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
                          </td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>BAKO</td>
                          <td>  
                            <button type="button" class="btnpreview" title="Preview Document"><i class="fas fa-search fa-lg icon-shadow"></i></button>
                            <button type="button" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
                            <button onclick="sendemail()" type="button" class="btnsend" title="Kirim ke email" id="email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
                          </td>
                          <td>Bantex tahun 2020 (BAKO)</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>BAE</td>
                          <td>
                            <button type="button" class="btnpreview" title="Preview Document"><i class="fas fa-search fa-lg icon-shadow"></i></button>
                            <button type="button" class="btndownload" title="Download Document"><i class="fa fa-download fa-lg icon-shadow"></i></button>
                            <button onclick="sendemail()" type="button" class="btnsend" title="Kirim ke email" id="email"><i class="fa fa-envelope fa-lg icon-shadow"></i></button>
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
  @endsection
    
@push('scripts')

@endpush


<!-- ############################################################################################################################################# -->


  @extends('Templates.Manager')

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