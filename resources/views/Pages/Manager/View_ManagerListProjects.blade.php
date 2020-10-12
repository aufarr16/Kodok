  @extends('Templates.Manager')
  
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
          <button type="button" class="btnproject" title="Lihat history PIC" data-toggle="modal" data-target="#{{ $dat_proj->id_project }}">{{ $dat_proj->nama_project}}</button>

         <!-- The Modal -->
          <div class="modal1 fade" id="{{ $dat_proj->id_project }}" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
          <div class="modal-dialog modal-lg">
          <!-- Modal content -->
          <div class="modal-content1">
            <div class="modal-header">
              <a class="close1" data-dismiss="modal" aria-label="close">&times;</a>
              <h5 class="modal-title1">Implementasi ATM Bersama Debit as Acquirer Bank Nagari</h5>
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