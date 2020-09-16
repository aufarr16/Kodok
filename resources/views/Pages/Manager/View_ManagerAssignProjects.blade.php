  @extends('Pages.Manager.TempManager')

  @push('styles')
  <link href="{{ url('') }}/css/assign.css" rel="stylesheet" />
  <!-- Select 2 -->
  <link href="{{ url('') }}/css/Plugin/Select2/select2.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/Plugin/Select2/select2.full.min.css" rel="stylesheet" /> 
  @endpush

  @section('content')
  <title>
    | {Manager} Assign Projects
  </title>
      
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
              <select id="nama_project2" class="js-states form-control" data-placeholder="Pilih Nama Project" style="width:100%" name="id_project">
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
@endsection
    
@push('scripts')
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
@endpush