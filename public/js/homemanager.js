function getAllData(){

}

function getDataByYear(){
  var year = $("#tahun").children("option:selected").val();
  console.log(year);
}

function showData(){

}

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
  data: [10,5,5,10,5,5],
  pointPadding: 0.1,
  borderWidth: 0,
  // pointPlacement: 0.2

}, {
  name: 'Done',
  data: [20,50,40,5,5,10],
  pointPadding: 0.1,
  borderWidth: 0,
  // pointPlacement: 0.2

}, {
  name: 'On Progress',
  data: [20,30,40,10,5,10],
  pointPadding: 0.1,
  borderWidth: 0,
  // pointPlacement: 0.2

}, {
  name: 'Hold',
  data: [30,20,40,5,10,15],
  pointPadding: 0.1,
  borderWidth: 0,
  // pointPlacement: 0.2

}, {
  name: 'Drop',
  data: [5,2,5,3,2,3],
  pointPadding: 0.1,
  borderWidth: 0,
  // pointPlacement: 0.2

}]
});

//Status project by jenis project
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
  data: [5,2,3,5,5],
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
  data: [5,30,20,5,3],
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
    ['Internal Test', 55],
    ['Sertifikasi', 152],
    ['Regresi', 68],
    ['Support', 25],
    ['QA', 18]
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
    ['ATM Bersama', 85],
    ['ATMB Debit', 107],
    ['Payment', 90],
    ['Remittance', 33],
    ['Disbursement', 27],
    ['QR Payment', 33]
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