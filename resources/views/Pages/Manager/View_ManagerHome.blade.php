@extends('Templates.Manager')
@push('styles')
<!-- Select 2 -->
<!-- <link href="{{ url('') }}/css/home.css" rel="stylesheet" />
<link href="{{ url('') }}/css/Plugin/Select2/select2.full.min.css" rel="stylesheet" /> --> 
@endpush
<!-- @section('Welcome') 
  <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection -->
@section('PageTitle','Home')
@section('content')
@if($userLevel === 2)
<title>
  | {Manager} Home
</title>
@else
<title>
  | {Eksekutif} Home
</title>
@endif 

<div class="row">
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-warning">
      <span class="info-box-icon"><i class="fas fa-hourglass-half"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">&nbsp; Reserved</span>
        <span class="info-box-number">{{ $preserved }} Project</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $percentrsrv }}%"></div>
        </div>
        <span class="progress-description">
          {{ $percentrsrv }}%
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-success">
      <span class="info-box-icon"><i class="fas fa-spinner"></i></span>

      <div class="info-box-content">
        <span class="info-box-text"> &nbsp; On Progress</span>
        <span class="info-box-number">{{ $ponprogress }} Project</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $percentop }}%"></div>
        </div>
        <span class="progress-description">
          {{ $percentop }}%
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-purple">
      <span class="info-box-icon"><i class="fas fa-binoculars"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">&nbsp; Monitoring</span>
        <span class="info-box-number">{{ $pmonitor }} Project</span>

        <div class="progress">
          <div class="progress-bar" style="width:{{ $percentmntr }}%"></div>
        </div>
        <span class="progress-description">
          {{ $percentmntr }}%
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-info">
      <span class="info-box-icon"><i class="fas fa-check"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">&nbsp; Pengujian Done</span>
        <span class="info-box-number">{{ $ppngdone}} Project</span>

        <div class="progress">
          <div class="progress-bar" style="width:{{ $percentpgdn }}%"></div>
        </div>
        <span class="progress-description">
          {{ $percentpgdn }}%
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box bg-black">
      <span class="info-box-icon"><i class="fas fa-check-double"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">&nbsp; Project Done</span>
        <span class="info-box-number">{{ $pprjdone }} Project</span>

        <div class="progress">
          <div class="progress-bar" style="width:{{ $percentprdn }}%"></div>
        </div>
        <span class="progress-description">
          {{ $percentprdn }}%
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box bg-orange">
      <span class="info-box-icon"><i class="fas fa-history"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">&nbsp; Hold</span>
        <span class="info-box-number">{{ $phold }} Project</span>

        <div class="progress">
          <div class="progress-bar" style="width:{{ $percenthold }}0%"></div>
        </div>
        <span class="progress-description">
          {{ $percenthold }}%
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box bg-danger">
      <span class="info-box-icon"><i class="fas fa-times"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">&nbsp; Drop</span>
        <span class="info-box-number">{{ $pdrop }} Project</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $percentdrop }}%"></div>
        </div>
        <span class="progress-description">
          {{ $percentdrop }}%
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>

<!-- HIGHCHARTZ -->
<div class="row">
  <div class="col-md-6">
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
  <div class="col-md-6">
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


<div class="row">
  <div class="col-md-6">
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
  <div class="col-md-6">
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

<div class="row">
  <div class="col-md-12" >
    <div class="card card-chart">
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

<div class="row" >
  <div class="col-md-12">
    <div class="card card-chart">
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

<!-- Highchart -->
<script src="{{ url('assets/plugins/highcharts/highcharts.js') }}"></script>
<script src="{{ url('assets/plugins/highcharts/modules/exporting.js') }}"></script>
<script src="{{ url('assets/plugins/highcharts/modules/export-data.js') }}"></script>
<script src="{{ url('assets/plugins/highcharts/modules/accessibility.js') }}"></script>
<script src="{{ url('assets/plugins/highcharts/highcharts-3d.js') }}"></script>

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
  var mntrprod = [];
  var psprpslength = (pstatperprod.length/prods.length);

  for(var i=0; i<prods.length; i++){
    prnames.push(prods[i].nama_product);
  }

  for(var i=0; i<psprpslength; i++){
    for(var j=0;j<prods.length; j++){
      var k = (i*prods.length) + j; 

      switch(i){
        case 0:
          resvprod.push(pstatperprod[k].jumlah_project);
          break;
        case 1:
          progprod.push(pstatperprod[k].jumlah_project);
          break;
        case 2:
          pgdnprod.push(pstatperprod[k].jumlah_project);
          break;
        case 3:
          mntrprod.push(pstatperprod[k].jumlah_project);
          break;
        case 4:
          prdnprod.push(pstatperprod[k].jumlah_project);
          break;
        case 5:
          holdprod.push(pstatperprod[k].jumlah_project);
          break;
        case 6:
          dropprod.push(pstatperprod[k].jumlah_project);
          break;
      }
    }
  }

  //Draw Chart
  Highcharts.chart('BarProduk', {
    colors: ['#FAD02C','#28A745','#0091E7','BLACK','#FF8000','#E50027','#605ca8'],

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
      data: pgdnprod,
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

    }, {
      name: 'Monitoring',
      data: mntrprod,
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
  var mntrptype = [];
  var psptlength = (pstatperptype.length/ptypes.length);

  for(var i=0; i<ptypes.length; i++){
    typenames.push(ptypes[i].nama_ptype)
  } 

  for(var i=0; i<psptlength; i++){
    for(var j=0;j<ptypes.length; j++){
      var k = (i*ptypes.length) + j; 

      switch(i){
        case 0:
          resvptype.push(pstatperptype[k].jumlah_project);
          break;
        case 1:
          progptype.push(pstatperptype[k].jumlah_project);
          break;
        case 2:
          pgdnptype.push(pstatperptype[k].jumlah_project);
          break;
        case 3:
          mntrptype.push(pstatperptype[k].jumlah_project);
          break;
        case 4:
          prdnptype.push(pstatperptype[k].jumlah_project);
          break;
        case 5:
          holdptype.push(pstatperptype[k].jumlah_project);
          break;
        case 6:
          dropptype.push(pstatperptype[k].jumlah_project);
          break;
      }
    }
  }

  //Draw Chart
  Highcharts.chart('BarJenisProject', {
  colors: ['#FAD02C','#28A745','#0091E7','BLACK','#FF8000','#E50027','#605ca8'],

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
      data: progptype,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2
  
    }, {
      name: 'Pengujian Done',
      data: pgdnptype,
      pointPadding: 0.1,
      borderWidth: 0,
      // pointPlacement: 0.2

    }, {
      name: 'Project Done',
      data: prdnptype,
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

    }, {
      name: 'Monitoring',
      data: mntrptype,
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
    colors:['#F0CCB0','#B97D60','#CCAFA5','#F3BC50','#B1D8B7'],
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
    colors:['#D4BBDD','#FDBFAF','#98D7C2','#F09CA2','#D9CE88','#BCA88E','#3CACAE','#E98973','#FFB067'],
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
  var usermntr = [];
  var psuserlength = (userprojperpstat.length/userinit.length); 

  for(var i=0; i<userinit.length; i++){
    initdata.push(userinit[i].inisial_user);
  }

  for(var i=0; i<psuserlength; i++){
    for(var j=0; j<userinit.length; j++){
      var k = (psuserlength * j) + i;

      switch(i){
        case 0:
          // console.log(psuserlength)
          userresv.push(userprojperpstat[k].jumlah_projek);
          break;
        case 1:
          userprdn.push(userprojperpstat[k].jumlah_projek);
          break;
        case 2:
          userpgdn.push(userprojperpstat[k].jumlah_projek);
          break;
        case 3:
          userprog.push(userprojperpstat[k].jumlah_projek);
          break;
        case 4:
          usermntr.push(userprojperpstat[k].jumlah_projek);
          break;
        case 5:
          userhold.push(userprojperpstat[k].jumlah_projek);
          break;
        case 6:
          userdrop.push(userprojperpstat[k].jumlah_projek);
          break;
      }
    }
  }

  //Draw Chart
  Highcharts.chart('LoadPICstatus', {
    colors: ['#FAD02C','#28A745','#0091E7','BLACK','#FF8000','#E50027','#605ca8'],
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

    }, {
      name: 'Monitoring',
      data: usermntr

    }]
  });
// ###########################################################################################################################################################
  //JUMLAH PROJEK TIAP ORNG BY PTYPE
  //Proses Data 
  var userprojperptype = <?php echo json_encode($userprojectperptype) ?>;
  var userintt = [];
  var usersert = [];
  var userregr = [];
  var usersupp = [];
  var userqa = [];
  var ptuserlength = (userprojperptype.length/userinit.length);

  for(var i=0; i<ptuserlength; i++){
    for(var j=0; j<userinit.length; j++){
      var k = (ptuserlength * j) + i;

      switch(i){
        case 0:
          userintt.push(userprojperptype[k].jumlah_projek);
          break;
        case 1:
          usersert.push(userprojperptype[k].jumlah_projek);
          break;
        case 2:
          userregr.push(userprojperptype[k].jumlah_projek);
          break;
        case 3:
          usersupp.push(userprojperptype[k].jumlah_projek);
          break;
        case 4:
          userqa.push(userprojperptype[k].jumlah_projek);
          break;
      }
    }
  } 

  //Draw Chart
  Highcharts.chart('LoadPICtotal', {
    colors:['#F0CCB0','#B97D60','#CCAFA5','#F3BC50','#B1D8B7'],
    // colors:['#CCAFA5','#8A9EA1','#A9BA88','#C85250','#FA7A50'],
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
        name: 'Internal Test',
        data: userintt

      }, {
        name: 'Sertifikasi',
        data: usersert

      }, {
        name: 'Regresi',
        data: userregr

      }, {
        name: 'Support',
        data: usersupp

        }, {
        name: 'QA',
        data: userqa

    }]
  });
</script>

@endpush