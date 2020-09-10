<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | {Manager} Assign Projects
  </title>  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
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
  <!-- Toastr -->
  <link href="{{ url('') }}/css/Plugin/Toastr/toastr.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Sweetalert/sweetalert2.min.css" rel="stylesheet" />
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

      @if(session('status'))
          <!-- ISI SAMA FUNCTION MUNCULIN NOTIF BERHASIL -->
      @endif

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
        <form method="post" action="/manager/newproject">
          @csrf
          <div class="form-group">
            <label for="id_user" style="font-weight:bolder">PIC</label>
            <br>
            <select id="id_user" class="js-states form-control" data-placeholder="Pilih PIC" style="width:100%" name="id_user">
              <option value=""></option>
              @foreach($users as $usr)
              <option value="{{ $usr->id_user }}">{{ $usr->nama_user }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_product" style="font-weight:bolder">Produk</label>
            <br>
            <select id="id_product" class="js-states form-control" data-placeholder="Pilih Produk" style="width:100%" name="id_product">
              <option value=""></option>
              @foreach($products as $prod)
              <option value="{{ $prod->id_product }}">{{ $prod->nama_product }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_ptype" style="font-weight:bolder">Jenis Project</label>
            <br>
            <select id="id_ptype" class="js-states form-control" data-placeholder="Pilih Jenis Project" style="width:100%" name="id_ptype">
              <option value=""></option>
              @foreach($ptypes as $ptype)
              <option value="{{ $ptype->id_ptype }}">{{ $ptype->nama_ptype }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
           <label for="ABA" style="font-weight:bolder">Nama Mitra</label>
            <br>
            <select id="ABA" class="js-states form-control" data-placeholder="Pilih Mitra" style="width:100%" name="ABA">
              <option value=""></option>
              @foreach($mitras as $mtr)
              <option value="{{ $mtr->ABA }}">{{ $mtr->nama_mitra }}</option>
              @endforeach
            </select>
          </div>          
          <div class="form-group">
            <label for="nama_project" style="font-weight:bolder">Nama Project</label>
            <br>
            <input class="form-control" type="text" id="nama_project" name="nama_project" autocomplete="off">
              <span class="underline"></span>
          </div>

          <button onclick="submitproject()" type="submit" class="btn-submit" id="submitnew">Submit</button>
        </form>
      </div>

      <!-- Assign Handover Project -->
      <div id="handover" class="container tab-pane fade">
        <form method="post" action="/manager/newhandover">
          @csrf
          <div class="form-group">
            <label for="PIC2" style="font-weight:bolder">PIC</label>
              <br>
              <select id="PIC2" class="js-states form-control picAsli" data-placeholder="Pilih PIC" style="width:100%">
                <option value=""></option>
                @foreach($users as $usr)
                <option value="{{ $usr->id_user }}">{{ $usr->nama_user }}</option>
                @endforeach
              </select>
          </div>
          <br>
          <div class="form-group">
            <label for="nama_project2" style="font-weight:bolder">Nama project</label>
              <br>
              <select id="nama_project2" class="js-states form-control proj_hv" data-placeholder="Pilih Nama Project" style="width:100%" name="id_project">
                <option value=""></option> 
              </select>
          </div>
          <br>
          <div class="form-group">
            <label for="PIChandover" style="font-weight:bolder">PIC Handover</label>
              <br>
              <select id="PIChandover" class="js-states form-control" data-placeholder="Pilih PIC Handover" style="width:100%" name="id_user">
                <option value=""></option>
                @foreach($users as $usr)
                <option value="{{ $usr->id_user }}">{{ $usr->nama_user }}</option>
                @endforeach
              </select>
          </div>                          
          <button onclick="submithandover()" type="submit" class="btn-submit" id="submithandover">Submit</button>
        </form>

      <!-- ./container tab -->
      </div>
      <!-- Akhir Assign Handover Project -->

    <!-- ./tab content -->
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
     $("#id_user").select2({
          allowClear: true
      });

     $("#id_product").select2({
          allowClear: true
      });

      $("#id_ptype").select2({
          allowClear: true
      });
      $("#ABA").select2({
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

<!-- Toastr Alert -->
<!-- <script src="{{ url('') }}/js/plugins/Toastr/toastr.min.js"></script>
<script>
 $(document).ready(function(){
  $("#submitnew").on('click',function(){
    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

  toastr["success"]("Data project berhasil ditambahkan!")
  });

  $("#submithandover").on('click',function(){
    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

  toastr["success"]("Data handover project berhasil diedit!")
  });
});
</script> -->
<!-- <script>
  $('#submitnew').on('click',function(e) {
    
    event.preventDefault();
var form = this;
    
        swal({
  title: "Are you sure?",
  text: "All data related to this AMC ID will be parmanently deleted",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, DELETE it!",
  cancelButtonText: "No, cancel please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    form.submit();
    } else {
    swal("Cancelled", "AMC Record is safe :)", "error");
  
  }
});
});
</script> -->
<script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>\
<script src="{{ url('') }}/js/script.js"></script>
<script>
   function submitproject () {
    var user = $('#id_user').val();
    var product = $('#id_product').val();
    var type = $('#id_ptype').val();
    var ABA = $('#ABA').val();
    var project = $('#nama_project').val();

   if(user == ''){
       Swal.fire({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 4000,
      timerProgressBar:true,
      // background:'lightgoldenrodyellow',
      background:'#FFF4BD',
      type: 'warning',
      title: 'Mohon pilih PIC'
    })
        }else if (product == ''){
      Swal.fire({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar:true,
        // background:'lightgoldenrodyellow',
        background:'#FFF4BD',
        type: 'warning',
        title: 'Mohon pilih produk'
      })
    }else if (type == ''){
      Swal.fire({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar:true,
        // background:'lightgoldenrodyellow',
        background:'#FFF4BD',
        type: 'warning',
        title: 'Mohon pilih tipe project'
      })
    }else if (ABA == ''){
      Swal.fire({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar:true,
        // background:'lightgoldenrodyellow',
        background:'#FFF4BD',
        type: 'warning',
        title: 'Mohon pilih mitra'
      })
    }else if (project == ''){
      Swal.fire({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar:true,
        // background:'lightgoldenrodyellow',
        background:'#FFF4BD',
        type: 'warning',
        title: 'Mohon isi nama project'
      })
      }else{
      Swal.fire({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 4000,
        background:'#D4F1F4',
        type: 'success',
        title: 'Data mitra berhasil disimpan'
    })
    }}

    function submithandover () {
    var PIC2 = $('#PIC2').val();
    var nama_project2 = $('#nama_project2').val();
    var PIChandover = $('#PIChandover').val();
    if(PIC2 == ''){
       Swal.fire({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 4000,
      timerProgressBar:true,
      // background:'lightgoldenrodyellow',
      background:'#FFF4BD',
      type: 'warning',
      title: 'Mohon pilih PIC utama'
    })
      }else if (nama_project2 == ''){
      Swal.fire({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar:true,
        // background:'lightgoldenrodyellow',
        background:'#FFF4BD',
        type: 'warning',
        title: 'Mohon pilih nama project'
      })
      }else if (PIChandover == ''){
      Swal.fire({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar:true,
        // background:'lightgoldenrodyellow',
        background:'#FFF4BD',
        type: 'warning',
        title: 'Mohon pilih PIC handover'
      })
      }else{
      Swal.fire({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 4000,
        background:'#D4F1F4',
        type: 'success',
        title: 'Data mitra berhasil disimpan'
    })
    }}
</script>
</body>

</html>