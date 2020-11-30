@extends('Templates.Manager')
@push('styles')
<!-- Select 2 -->
<link href="{{ url('') }}/css/Plugin/Select2/select2.min.css" rel="stylesheet" />
<link href="{{ url('') }}/css/Plugin/Select2/select2.full.min.css" rel="stylesheet" /> 
@endpush
@section('Welcome') 
  <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection
@section('PageTitle','Home')
@section('content')
<title>
  | {Manager} Home
</title>
    <!-- <div class="col-md-10"> -->
      <!-- <div class="card"> -->
      <div class="card-all">
      <form method="POST" action="">
        @csrf
          <div class="input-group" style="padding-top: 5px; padding-left: 5px; z-index: 1000;width: 160px;">
            <input type="checkbox" name="all" value="" style="margin-top: 7px">&nbsp 
              <div class="namaradio">Semua Tahun</div>
              <button class="btn-tahun" type="submit">Pilih</button>
          </div>
      </form>

      <form method="POST" action="/manager/home/yearly">
        <div class="input-group" style="padding-left: 170px; margin-top: -30px;">
          <select id="tahun" class="form-control select-tahun" data-placeholder="Pilih Tahun" name="tahun" id="tahun" style="height: 35px; width: 70%; background-color: transparent !important;">
            <option value="" hidden></option>
            @foreach($years as $year)
              <option value="{{ $year->tahun }}">{{ $year->tahun }}</option>
            @endforeach
          </select>
          <button class="btn-tahun" type="submit">Pilih</button>
        </div>
      </form>
    </div>
  <!-- </div> -->
    <!-- </div> -->

    <div class="tile reserved">
      <div class="body">
        <div class="title"><i class="fa fa-hourglass-half fa-lg"></i> &nbsp; Reserved</div>
      </div>
      <div class="header">
          <div class="count">{{ $preserved }}</div>
          <div class="title">Projects</div>
        <div class="progress">
          <div class="bar" style="width:{{ $percentrsrv }}%">
            <p class="percent">{{ $percentrsrv }}%</p>
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
          <div class="count">{{ $ponprogress }}</div>
          <div class="title">Projects</div>
        <div class="progress">
          <div class="bar" style="width:{{ $percentop }}%">
            <p class="percent">{{ $percentop }}%</p>
          <!-- bar on progress -->
          </div>
        <!-- progress on progress -->
        </div>
      <!-- header on progress -->
      </div>
      <!-- tile on progress -->
    </div>

    <div class="tile done">
      <div class="body">
        <div class="title"><i class="fa fa-check fa-lg"></i> &nbsp; Pengujian Done</div>
      </div>
      <div class="header">
          <div class="count">{{ $ppngdone }}</div>
          <div class="title">Projects</div>
        <div class="progress">
          <div class="bar" style="width:{{ $percentpgdn }}%">
            <p class="percent">%</p>
          <!-- bar done -->
          </div>
        <!-- progress done -->
        </div>
      <!-- header done -->
      </div>
    <!-- tile done -->
    </div>

    <div class="tile prodone">
      <div class="body">
        <div class="title"><i class="fas fa-check-double"></i> &nbsp; Project Done</div>
      </div>
      <div class="header">
          <div class="count">{{ $pprjdone }}</div>
          <div class="title">Projects</div>
        <div class="progress">
          <div class="bar" style="width:{{ $percentprdn }}%">
            <p class="percent">{{ $percentprdn }}%</p>
          <!-- bar done -->
          </div>
        <!-- progress done -->
        </div>
      <!-- header done -->
      </div>
    <!-- tile done -->
    </div>

    <div class="tile hold">
      <div class="body">
        <div class="title"><i class="fa fa-history fa-lg"></i> &nbsp; Hold</div>
      </div>
      <div class="header">
          <div class="count">{{ $phold }}</div>
          <div class="title">Projects</div>
        <div class="progress">
          <div class="bar" style="width:{{ $percenthold }}%">
            <p class="percent">{{ $percenthold }}%</p>
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
          <div class="count">{{ $pdrop }}</div>
          <div class="title">Projects</div>
        <div class="progress">
          <div class="bar" style="width:{{ $percenthold }}%">
            <p class="percent">{{ $percenthold }}%</p>
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
            <!-- <div class="card-body">  -->
              <figure class="highcharts-figure">
                 <div id="PieJenisProject"></div>
              </figure>
            <!-- </div>        -->
          <!-- ./card -->
          </div>
        <!-- ./col -->
        </div>
        <div class="col-md-6" style="margin-left:-10px">
          <div class="card card-chart">
            <!-- <div class="card-body"> -->
               <figure class="highcharts-figure">
                 <div id="BarJenisProject"></div>
              </figure>
            <!-- </div>        -->
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
<!-- <script src="{{ url('') }}/js/homemanager.js"></script> -->

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

<!-- Draw Graphs -->
<script>
  console.log("highcharts in");
  //JUMLAH PSTAT PER PRODUK
  //Proses data agar bisa msk ke highchart
  var pstatperprod = <?php echo json_encode($pstatperproduct) ?>;
  var prods = <?php echo json_encode($products) ?>;
  var prnames = [];
  var resvprod = [];
  var progprod = [];
  var pgdnprod = [];
  var prdnprod = [];
  var holdprod = [];
  var dropprod = [];
  var psprpslength = (pstatperprod.length/prods.length);

  for(var i=0; i<prods.length; i++){
    prnames.push(prods[i].nama_product);
  }

  for(var i=0; i<psprpslength; i++){
    for(var j=0;j<prods.length; j++){
      var k = (i*prods.length) + j;

      if(k < 1*prods.length){
        resvprod.push(pstatperprod[k].jumlah_project);
      }
      else if(k >= 1*prods.length && k < 2*prods.length){
        progprod.push(pstatperprod[k].jumlah_project);
      }
      else if(k >= 2*prods.length && k < 3*prods.length){
        pgdnprod.push(pstatperprod[k].jumlah_project);
      }
      else if(k >= 3*prods.length && k < 4*prods.length){
        prdnprod.push(pstatperprod[k].jumlah_project);
      }
      else if(k >= 4*prods.length && k < 5*prods.length){
        holdprod.push(pstatperprod[k].jumlah_project);
      }
      else if(k >= 5*prods.length && k < 6*prods.length){
        dropprod.push(pstatperprod[k].jumlah_project);
      }
    }
  }

  //Draw Chart
  Highcharts.chart('BarProduk', {
    colors: ['#FAD02C','#009CDF','#43B14B','#FF8000','#F51720','#52584D'],

    chart: {
      type: 'column'
    },
    title: {
      text: 'Status Project'
    },
    subtitle: {
      text: 'Berdasarkan Produk'
    },
    credits: {
      enabled: false
    },
    xAxis: {
      categories: prnames,
      crosshair: true

    },
    yAxis: {
      min: 0,
      title: {
        text: 'Jumlah Project'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:12px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        '<td style="padding:0"><b>{point.y}</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.1,
        borderWidth: 0,
        pointPlacement: -0.15

      }
    },
    series: [{
      name: 'Reserved',
      data: resvprod,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }, {
      name: 'On Progress',
      data: progprod,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }, {
      name: 'Pengujian Done',
      data: prdnprod,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }, {
      name: 'Project Done',
      data: prdnprod,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }, {
      name: 'Hold',
      data: holdprod,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }, {
      name: 'Drop',
      data: dropprod,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }]
    });
// ###########################################################################################################################################################
  //JUMLAH PSTAT PER PTYPE
  //Proses data agar bisa msk ke highchart
  var pstatperptype = <?php echo json_encode($pstatperptype) ?>;
  var ptypes = <?php echo json_encode($projtypes) ?>;
  var typenames = [];
  var resvptype = [];
  var progptype = [];
  var pgdnptype = [];
  var prdnptype = [];
  var holdptype = [];
  var dropptype = [];
  var psptlength = (pstatperptype.length/ptypes.length);

  for(var i=0; i<ptypes.length; i++){
    typenames.push(ptypes[i].nama_ptype)
  } 

  for(var i=0; i<psprpslength; i++){
    for(var j=0;j<ptypes.length; j++){
      var k = (i*ptypes.length) + j;

      if(k < 1*ptypes.length){
        resvptype.push(pstatperptype[k].jumlah_project);
      }
      else if(k >= 1*ptypes.length && k < 2*ptypes.length){
        progptype.push(pstatperptype[k].jumlah_project);
      }
      else if(k >= 2*ptypes.length && k < 3*ptypes.length){
        pgdnptype.push(pstatperptype[k].jumlah_project);
      }
      else if(k >= 3*ptypes.length && k < 4*ptypes.length){
        prdnptype.push(pstatperptype[k].jumlah_project);
      }
      else if(k >= 4*ptypes.length && k < 5*ptypes.length){
        holdptype.push(pstatperptype[k].jumlah_project);
      }
      else if(k >= 5*ptypes.length && k < 6*ptypes.length){
        dropptype.push(pstatperptype[k].jumlah_project);
      }
    }
  }

  //Draw Chart
  Highcharts.chart('BarJenisProject', {
    colors: ['#9DB6CC','#B1BC6E','#A47786','#533440','#39918C','#B68D40'],

    chart: {
      type: 'column'
    },
    title: {
      text: 'Status Project '
    },
    subtitle: {
      text: 'Berdasarkan Jenis Project'
    },
    credits: {
      enabled: false
    },
    xAxis: {
      categories: typenames,
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Jumlah Project'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:12px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        '<td style="padding:0"><b>{point.y}</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.1,
        borderWidth: 0,
        pointPlacement: 0
      }
    },
    series: [{
      name: 'Reserved',
      data: resvptype,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }, {
      name: 'On Progress',
      data: progprod,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2
  
    }, {
      name: 'Pengujian Done',
      data: prdnprod,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }, {
      name: 'Project Done',
      data: prdnprod,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }, {
      name: 'Hold',
      data: holdptype,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }, {
      name: 'Drop',
      data: dropptype,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }]
  });
// ###########################################################################################################################################################
  //JUMLAH PROJEK BY PTYPE
  //Proses Data
  var projbyptype = <?php echo json_encode($projectperptype) ?>;
  var projbyptypedata = [];

  for(var i=0; i<projbyptype.length; i++){
      var temp = [];

      temp[0] = projbyptype[i].nama_ptype;
      temp[1] = projbyptype[i].jumlah_project;

      projbyptypedata.push(temp);
  }

  //Draw Pie
  Highcharts.chart('PieJenisProject', {
    colors:['#CCAFA5','#8A9EA1','#A9BA88','#C85250','#FA7A50'],
     chart: {
      type: 'pie',
      options3d: {
        enabled: true,
        alpha: 50,
        beta: 0
      }
    },
    title: {
      text: 'Total Project'
    },
    subtitle: {
      text: 'Berdasarkan Jenis Project'
    },
    credits: {
      enabled: false
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        depth: 50,
        dataLabels: {
          enabled: true,
          format: '{point.name}'
        }
      }
    },
    series: [{
      type: 'pie',
      name: 'Total Project',
      data: projbyptypedata
    }]
  });
// ###########################################################################################################################################################
  //JUMLAH PROJEK BY PRODUCT
  //Proses Data
  var projbyprod = <?php echo json_encode($projectperproduct) ?>;
  var projbyproddata = [];

  for(var i=0; i<projbyprod.length; i++){
    var temp = [];

    temp[0] = projbyprod[i].nama_product;
    temp[1] = projbyprod[i].jumlah_project;

    projbyproddata.push(temp);
  }

  //Draw Pie
  Highcharts.chart('PieProduk', {
    colors:['#68A4F1','#319905','#E13D00','#FEDE00','#FF8300','#A5A7CF'],
    chart: {
      type: 'pie',
      options3d: {
        enabled: true,
        alpha: 50,
        beta: 0
      }
    },
    title: {
      text: 'Total Project'
    },
    subtitle: {
      text: 'Berdasarkan Produk'
    },
    credits: {
      enabled: false
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        depth: 50,
        dataLabels: {
          enabled: true,
          format: '{point.name}'
        }
      }
    },
    series: [{
      type: 'pie',
      name: 'Total Project',
      data: projbyproddata
    }]
  });
// ###########################################################################################################################################################
  //JUMLAH PROJEK TIAP ORNG BY PSTAT
  //Proses Data
  var userprojperpstat = <?php echo json_encode($userprojectperpstat) ?>;
  var userinit = <?php echo json_encode($inuser) ?>;
  var initdata = [];
  var userresv = [];
  var userprog = [];
  var userpgdn = [];
  var userprdn = [];
  var userhold = [];
  var userdrop = [];
  var psuserlength = (userprojperpstat.length/userinit.length); 

  for(var i=0; i<userinit.length; i++){
    initdata.push(userinit[i].inisial_user);
  }

  for(var i=0; i<psuserlength; i++){
    for(var j=0; j<userinit.length; j++){
      var k = (psuserlength * j) + i;

      if(i == 0){
        userresv.push(userprojperpstat[k].jumlah_projek);
      }
      else if(i == 1){
        userprdn.push(userprojperpstat[k].jumlah_projek);
      }
      else if(i == 2){
        userpgdn.push(userprojperpstat[k].jumlah_projek);
      }
      else if(i == 3){
        userprog.push(userprojperpstat[k].jumlah_projek);
      }
      else if(i == 4){
        userhold.push(userprojperpstat[k].jumlah_projek);
      }
      else if(i == 5){
        userdrop.push(userprojperpstat[k].jumlah_projek);
      }
    }
  }
  
  //Draw Chart
  Highcharts.chart('LoadPICstatus', {
    colors:['#D234B0','#E32227','#278ED5','#03D930','#FEDE00','#98705D'],
    chart: {
      type: 'column'
    },
    title: {
      text: 'Load PIC'
    },
    credits: {
      enabled: false
    },
    subtitle: {
      text: 'Berdasarkan Status Projects'
    },
    xAxis: {
      categories: initdata,
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Projects'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:16px; font-weight:bolder">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        '<td style="padding:0"><b>{point.y}</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0,
        pointPlacement: -0.1
      }
    },
    series: [{
      name: 'Reserved',
      data: userresv

    }, {
      name: 'On Progress',
      data: userprog

    }, {
      name: 'Pengujian Done',
      data: userpgdn

    }, {
      name: 'Project Done',
      data: userprdn

    }, {
      name: 'Hold',
      data: userhold

    }, {
      name: 'Drop',
      data: userdrop

    }]
  });

  // Total projects by PIC
  Highcharts.chart('LoadPICtotal', {
    colors:['#A47786','#79A9F5','#CA6902','#F2CC98','#73B03A'],
    chart: {
      type: 'column'
    },
    title: {
      text: 'Load PIC'
    },
    credits: {
      enabled: false
    },
    subtitle: {
      text: 'Berdasarkan Jenis Projects'
    },
    xAxis: {
      categories: [
        'AAN',
        'ADT',
        'AFH',
        'AMR',
        'ARE',
        'AUF',
        'DFA',
        'DMR',
        'EGW',
        'FYS',
        'HMW',
        'HSO',
        'IDE',
        'IDO',
        'INA',
        'MAD',
        'MAD',
        'MDI',
        'MMP',
        'MWA',
        'NSP',
        'PDP',
        'QAM',
        'RAM',
        'RAS',
        'RMT',
        'SHI',
        'TRH',
        'UPI',
        'YBP',
        'YKS'
      ],
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Projects'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:16px; font-weight:bolder">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        '<td style="padding:0"><b>{point.y}</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0,
        pointPlacement: -0.1
      }
    },
    series: [{
        name: 'Internal Test',
        data: [499, 715, 1064, 1292, 1440, 1760, 1356, 1485, 2164, 1941, 956, 499, 715, 1064, 1292, 1440, 1760, 1356, 1485, 2164, 1941, 956, 715, 1064, 1292, 1440, 715, 715, 1064, 1292, 1440]

      }, {
        name: 'Sertifikasi',
        data: [836, 788, 985, 934, 1060, 845, 1050, 1043, 912, 835, 1066, 836, 788, 985, 934, 1060, 845, 1050, 1043, 912, 835, 1066, 788, 985, 934, 1060, 845, 836, 788, 985, 934]

      }, {
        name: 'Regresi',
        data: [836, 788, 985, 934, 1060, 845, 1050, 1043, 912, 835, 1066, 836, 788, 985, 934, 1060, 845, 1050, 1043, 912, 835, 1066, 788, 985, 934, 1060, 845, 836, 788, 985, 934]

      }, {
        name: 'Support',
        data: [489, 388, 393, 414, 470, 483, 590, 596, 524, 652, 489, 388, 393, 414, 470, 483, 590, 596, 524, 652, 489, 388, 393, 414, 470, 483, 590, 596, 524, 652, 414]

        }, {
        name: 'QA',
        data: [499, 715, 1064, 1292, 1440, 1760, 1356, 1485, 2164, 1941, 956, 499, 715, 1064, 1292, 1440, 1760, 1356, 1485, 2164, 1941, 956, 715, 1064, 1292, 1440, 715, 715, 1064, 1292, 1440]

    }]
  });
</script>


@endpush