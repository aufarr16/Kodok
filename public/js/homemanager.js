  var resvprod = [];
  var progprod = [];
  var pgdnprod = [];
  var prdnprod = [];
  var holdprod = [];
  var dropprod = [];

  for(var i=0; i<pstatperprod.length; i++){
    if(i<6){ //data reserved
      resvprod.push(pstatperprod[i].jumlah_project);
    }
    else if(i>5 && i<12){ //data on progress
      progprod.push(pstatperprod[i].jumlah_project);
    }
    else if(i>11 && i<18){ //data pengujian done
      pgdnprod.push(pstatperprod[i].jumlah_project);
    }
    else if(i>17 && i<24){ //data projek done
      prdnprod.push(pstatperprod[i].jumlah_project);
    }
    else if(i>23 && i<30){ //data hold
      holdprod.push(pstatperprod[i].jumlah_project);
    }
    else if(i>29 && i<36){ //data drop
      dropprod.push(pstatperprod[i].jumlah_project);
    }
  }

var projperprod = <?php echo json_encode($projectperproduct) ?>;
var prods = <?php echo json_encode($products) ?>;
var prnames = [];
  

for(var i=0; i<prods.length; i++){
  prnames.push(prods[i].nama_product);
}

  
  