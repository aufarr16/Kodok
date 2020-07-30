<!DOCTYPE html>
<!-- <html lang="en" style="overflow-x: hidden"> -->
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | {Manager} Home
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" /> -->
  <link href="https://fonts.googleapis.com/css?family=Aleo:300,400,500,600,700,800,900" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="{{ url('') }}/style.css" type="text/css" rel="stylesheet">
  <link href="{{ url('') }}/css/home.css" rel="stylesheet" />
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
          <li class="active">
            <a href="/manager/home">
           <span class="fa fa-home mr-2"></span>Home
            </a>
          </li>
          <li>
            <a href="/manager/projects">
             <span class="fas fa-clipboard-list mr-2"></span>List Projects
            </a>
          </li>
          <li>
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
  <div class="content" style="min-height: 240vh;">
	  <h2 style="margin-top:10px; margin-bottom: 10px">Home</h2>

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
          <div class="col-md-6" >
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
        

        <div class="row" style="margin-top: 20px; margin-bottom: 20px">
          <div class="col-md-6">
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
          <div class="col-md-6">
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

      <div class="row" style="margin-right: 20px; margin-top: 20px; margin-bottom: 20px">
          <div class="col-md-12" >
            <div class="card card-chart" style="margin-right: -35px">
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

      <div class="row" style="margin-right: 20px; margin-top: 20px; margin-bottom: 20px">
          <div class="col-md-12">
            <div class="card card-chart" style="margin-right: -35px">
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
  <br>
	<!-- ./content -->
  </div>

  <!-- footer -->
  <div class="blockquote text-right" style="margin-top:-30px; ">
        <span>Copyright © 
        <script>
          document.write(new Date().getFullYear())
        </script>
        All rights reserved
      </span>
  </div>
    <!-- </footer> -->
  </div>

  <!-- ./container fluid -->
  </div>
<!-- ./wrapper -->
</div>

      <!-- <footer class="footer">
              <span class="copyright">
                Copyright ©
                <script>
                  document.write(new Date().getFullYear())
                </script>  All rights reserved
              </span>
      </footer> -->
  <!--   Core JS Files   -->
  <script src="{{ url('') }}/js/core/jquery.min.js"></script>
  <script src="{{ url('') }}/js/core/popper.min.js"></script>
  <script src="{{ url('') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ url('') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
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
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- Highchart -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <!-- Untuk 3D Chart -->
  <script src="https://code.highcharts.com/highcharts-3d.js"></script>
  <script>

  // Status project by produk
  Highcharts.chart('BarProduk', {
  colors: ['#FAD02C','#009CDF', '#43B14B','#FF8000','#F51720'],

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
    categories: [
      'ATM Bersama',
      'ATMB Debit',
      'Payment',
      'Remittance',
      'Disbursement',
      'QR Payment'
    ],
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
    data: [70,65,90,10,5,25],
    pointPadding: 0.1,
    borderWidth: 0,
    // pointPlacement: 0.2

  }, {
    name: 'Done',
    data: [20,50,40,5,2,10],
    pointPadding: 0.1,
    borderWidth: 0,
    // pointPlacement: 0.2

  }, {
    name: 'On Progress',
    data: [20,50,40,5,2,10],
    pointPadding: 0.1,
    borderWidth: 0,
    // pointPlacement: 0.2

  }, {
    name: 'Hold',
    data: [30,35,45,5,2,15],
    pointPadding: 0.1,
    borderWidth: 0,
    // pointPlacement: 0.2

  }, {
    name: 'Drop',
    data: [15,20,25,3,1,10],
    pointPadding: 0.1,
    borderWidth: 0,
    // pointPlacement: 0.2

  }]
});

 //Status porject by jenis project
    Highcharts.chart('BarJenisProject', {
    colors: ['#9DB6CC','#B1BC6E','#A47786','#533440','#39918C'],

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
    categories: [
      'Internal Test',
      'Sertifikasi',
      'Regresi',
      'Support',
      'QA'
    ],
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
    data: [30,100,20,10,6],
    pointPadding: 0.1,
    borderWidth: 0,
    // pointPlacement: 0.2

  }, {
    name: 'Done',
    data: [20,50,10,5,5],
    pointPadding: 0.1,
    borderWidth: 0,
    // pointPlacement: 0.2

  }, {
    name: 'On Progress',
    data: [20,50,10,5,5],
    pointPadding: 0.1,
    borderWidth: 0,
    // pointPlacement: 0.2

  }, {
    name: 'Hold',
    data: [5,30,45,5,3],
    pointPadding: 0.1,
    borderWidth: 0,
    // pointPlacement: 0.2

  }, {
    name: 'Drop',
    data: [5,20,25,5,0],
    pointPadding: 0.1,
    borderWidth: 0,
    // pointPlacement: 0.2

  }]
});

  // Pie Total By Jenis Project
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
    data: [
      ['Internal Test', 60],
      ['Sertifikasi', 170],
      ['Regresi', 100],
      ['Support', 25],
      ['QA', 14]
    ]
  }]
});
	
	//Pie Total By Produk
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
    data: [
      ['ATM Bersama', 135],
      ['ATMB Debit', 170],
      ['Payment', 200],
      ['Remittance', 23],
      ['Disbursement', 10],
      ['QR Payment', 60]
    ]
  }]
});
// Load PIC by Status
  Highcharts.chart('LoadPICstatus', {
  colors:['#D234B0','#278ED5','#E32227','#03D930','#FEDE00'],
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
    name: 'Reserved',
    data: [499, 715, 1064, 1292, 1440, 1760, 1356, 1485, 2164, 1941, 956, 499, 715, 1064, 1292, 1440, 1760, 1356, 1485, 2164, 1941, 956, 715, 1064, 1292, 1440, 715, 715, 1064, 1292, 1440]

  }, {
    name: 'Done',
    data: [499, 715, 1064, 1292, 1440, 1760, 1356, 1485, 2164, 1941, 956, 499, 715, 1064, 1292, 1440, 1760, 1356, 1485, 2164, 1941, 956, 715, 1064, 1292, 1440, 715, 715, 1064, 1292, 1440]

  }, {
    name: 'On Progress',
    data: [836, 788, 985, 934, 1060, 845, 1050, 1043, 912, 835, 1066, 836, 788, 985, 934, 1060, 845, 1050, 1043, 912, 835, 1066, 788, 985, 934, 1060, 845, 836, 788, 985, 934]

  }, {
    name: 'Hold',
    data: [489, 388, 393, 414, 470, 483, 590, 596, 524, 652, 489, 388, 393, 414, 470, 483, 590, 596, 524, 652, 489, 388, 393, 414, 470, 483, 590, 596, 524, 652, 414]

  }, {
    name: 'Drop',
    data: [836, 788, 985, 934, 1060, 845, 1050, 1043, 912, 835, 1066, 836, 788, 985, 934, 1060, 845, 1050, 1043, 912, 835, 1066, 788, 985, 934, 1060, 845, 836, 788, 985, 934]

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
<!-- Sidebar collapse -->
<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
</body>

</html>