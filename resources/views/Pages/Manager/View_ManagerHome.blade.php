  @extends('Templates.Manager')
  @push('styles')
  <!-- Select 2 -->
  <link href="{{ url('') }}/css/Plugin/Select2/select2.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Select2/select2.full.min.css" rel="stylesheet" /> 
  @endpush
  @section('PageTitle','Home')
  @section('content')
  <title>
    | {Manager} Home
  </title>

      <div class="card-tahun">
          <div class="input-group" style="padding-top: 5px; padding-left: 5px;">
            <select id="tahun" class="form-control select-tahun" data-placeholder="Pilih Tahun" name="tahun" id="tahun" style="height: 35px; width: 70%; background-color: transparent !important;">
              <option value="" hidden></option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
            </select>
            <button onclick="getDataByYear(title)" class="btn-tahun" type="submit">Pilih</button>
          </div>
      </div>

      <div class="tile reserved">
        <div class="body">
          <div class="title"><i class="fa fa-hourglass-half fa-lg"></i> &nbsp; Reserved</div>
        </div>
        <div class="header">
            <div class="count">60</div>
            <div class="title">Projects</div>
          <div class="progress">
            <div class="bar" style="width:40%">
              <p class="percent">10%</p>
            <!-- bar done -->
            </div>
          <!-- progress done -->
          </div>
        <!-- header done -->
        </div>
      <!-- tile done -->
      </div>

      <div class="tile done">
        <div class="body">
          <div class="title"><i class="fa fa-check fa-lg"></i> &nbsp; Done</div>
        </div>
        <div class="header">
            <div class="count">100</div>
            <div class="title">Projects</div>
          <div class="progress">
            <div class="bar" style="width:40%">
              <p class="percent">40%</p>
            <!-- bar done -->
            </div>
          <!-- progress done -->
          </div>
        <!-- header done -->
        </div>
      <!-- tile done -->
      </div>

      <div class="tile onprogress">
        <div class="body">
          <div class="title"><i class="fas fa-spinner fa-lg"></i> &nbsp; On Progress</div>
        </div>
        <div class="header">
            <div class="count">160</div>
            <div class="title">Projects</div>
          <div class="progress">
            <div class="bar" style="width:60%">
              <p class="percent">60%</p>
            <!-- bar on progress -->
            </div>
          <!-- progress on progress -->
          </div>
        <!-- header on progress -->
        </div>
        <!-- tile on progress -->
      </div>
  
      <div class="tile hold">
        <div class="body">
          <div class="title"><i class="fa fa-history fa-lg"></i> &nbsp; Hold</div>
        </div>
        <div class="header">
            <div class="count">80</div>
            <div class="title">Projects</div>
          <div class="progress">
            <div class="bar" style="width:25%">
              <p class="percent">25%</p>
            <!-- bar hold -->
            </div>
          <!-- progress hold -->
          </div>
        <!-- header hold -->
        </div>
        <!-- tile hold -->
      </div>
  
      <div class="tile drop">
        <div class="body">
          <div class="title"><i class="fa fa-times fa-lg"></i> &nbsp; Drop</div>
        </div>
        <div class="header">
            <div class="count">20</div>
            <div class="title">Projects</div>
          <div class="progress">
            <div class="bar" style="width:5%">
              <p class="percent">5%</p>
            <!-- bar drop -->
            </div>
          <!-- progress drop -->
          </div>
        <!-- header drop -->
        </div>
        <!-- tile drop -->
      </div>

    <br>
    <br>
        <div class="row" style="margin-top: 60px; margin-bottom: 20px">
          <div class="col-md-6" style="margin-left:5px">
            <div class="card card-chart">
              <div class="card-body ">
                <figure class="highcharts-figure">
                   <div id="PieProduk"></div>
                </figure>
              <!-- ./card body -->
              </div>
            <!-- ./card -->
            </div>
          <!-- ./col -->
          </div>
          <div class="col-md-6" style="margin-left:-10px">
            <div class="card card-chart">
              <div class="card-body">
                 <figure class="highcharts-figure">
                   <div id="BarProduk"></div>
                </figure>
              <!-- ./card body -->
              </div>       
			      <!-- ./card -->
            </div>
          <!-- ./col -->
          </div>
        <!-- ./row -->
        </div>
        

        <div class="row" style="margin-top: 20px; margin-bottom: 20px">
          <div class="col-md-6" style="margin-left:5px">
            <div class="card card-chart">
              <div class="card-body"> 
                <figure class="highcharts-figure">
                   <div id="PieJenisProject"></div>
                </figure>
              </div>       
            <!-- ./card -->
            </div>
          <!-- ./col -->
          </div>
          <div class="col-md-6" style="margin-left:-10px">
            <div class="card card-chart">
              <div class="card-body">
                 <figure class="highcharts-figure">
                   <div id="BarJenisProject"></div>
                </figure>
              </div>       
            <!-- ./card -->
            </div>
          <!-- ./col -->
          </div>
        <!-- ./row -->
        </div>

      <div class="row" style="margin-left: -10px; margin-right: 25px; margin-top: 20px; margin-bottom: 20px">
          <div class="col-md-12" >
            <div class="card card-chart" style="margin-right: -35px; margin-top: -5px">
              <div class="card-body">
                <figure class="highcharts-figure1">
                  <div id="LoadPICstatus"></div>
                </figure>
              </div>       
            <!-- ./card -->
            </div>
          <!-- ./col -->
          </div>
        <!-- ./row -->
        </div>    

      <div class="row" style="margin-left: -10px; margin-right: 25px; margin-top: 20px; margin-bottom: 20px">
          <div class="col-md-12">
            <div class="card card-chart" style="margin-right: -35px; margin-top: -5px">
              <div class="card-body">
                <figure class="highcharts-figure1">
                  <div id="LoadPICtotal"></div>
                </figure>
              </div>       
            <!-- ./card -->
            </div>
          <!-- ./col -->
          </div>
        <!-- ./row -->
        </div>
	@endsection

  @push('scripts')
  <!--   Core JS Files   -->
  <script src="{{ url('') }}/js/core/jquery.min.js"></script>
  <!-- Highchart -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <!-- Untuk 3D Chart -->
  <script src="https://code.highcharts.com/highcharts-3d.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>

  <!--   Core JS Files  -->
  <script src="{{ url('') }}/js/core/jquery.min.js"></script>
  <script src="{{ url('') }}/js/homemanager.js"></script>

  <!-- Select 2 -->
  <script src="{{ url('') }}/css/Plugin/Select2/select2.min.js"></script>
  <script>
     $("#tahun").select2({
          allowClear: true
      });
  </script>

<!-- Sidebar collapse -->
<script>
  $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
      });
  });
</script>

@endpush