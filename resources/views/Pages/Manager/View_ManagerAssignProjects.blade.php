@extends('Templates.Manager')
@push('styles')
<link href="{{ url('') }}/css/assign.css" rel="stylesheet" />
<!-- <link href="{{ url('') }}/css/users.css" rel="stylesheet" /> -->
<!-- Select 2 -->
<link href="{{ url('') }}/css/Plugin/Select2/select2.min.css" rel="stylesheet" />
<link href="{{ url('') }}/css/Plugin/Select2/select2.full.min.css" rel="stylesheet" /> 
@endpush
<!-- @section('Welcome') 
<h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection -->
@section('PageTitle','Assign Projects')
@section('content')
<title>
  | {Manager} Assign Projects
</title>
    
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
          <div class="@error('id_user') is-invalid @enderror">
            <select id="id_user" class="js-states form-control @error ('id_user') is-invalid @enderror" data-placeholder="Pilih PIC" style="width:100%" name="id_user">
              <option value="" hidden>PIC</option>
              @foreach($users as $usr)
                @if (old('id_user') == $usr->id)
                  <option value="{{ $usr->id }}" selected>{{ $usr->nama_user }}</option>
                @else 
                  <option value="{{ $usr->id }}">{{ $usr->nama_user }}</option>
                @endif
              @endforeach
            </select>
             @error('id_user')
              <div class="invalid-feedback flash" style="margin-top: 2px">
                {{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="id_product" style="font-weight:bolder">Produk</label>
          <br>
          <div class="@error('id_product') is-invalid @enderror">
            <select id="id_product" class="js-states form-control @error ('id_product') is-invalid @enderror" data-placeholder="Pilih Produk" style="width:100%" name="id_product">
              <option value=""></option>
              @foreach($products as $prod)
                @if (old('id_product') == $prod->id)
                  <option value="{{ $prod->id }}" selected>{{ $prod->nama_product }}</option>
                @else 
                  <option value="{{ $prod->id }}">{{ $prod->nama_product }}</option>
                @endif
              @endforeach
            </select>
            @error('id_product')
            <div class="invalid-feedback flash" style="margin-top: 2px">
              {{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="id_ptype" style="font-weight:bolder">Jenis Project</label>
          <br>
          <div class="@error('id_ptype') is-invalid @enderror">
            <select id="id_ptype" class="js-states form-control @error ('id_ptype') is-invalid @enderror" data-placeholder="Pilih Jenis Project" style="width:100%" name="id_ptype">
              <option value=""></option>
              @foreach($ptypes as $ptype)
                @if (old('id_ptype') == $ptype->id)
                  <option value="{{ $ptype->id }}" selected>{{ $ptype->nama_ptype }}</option>
                @else 
                  <option value="{{ $ptype->id }}">{{ $ptype->nama_ptype }}</option>
                @endif
              @endforeach
            </select>
            @error('id_ptype')
            <div class="invalid-feedback flash" style="margin-top: 2px">
              {{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group">
         <label for="id_mitra" style="font-weight:bolder">Nama Mitra</label>
          <br>
          <div class="@error('id_mitra') is-invalid @enderror">
            <select id="id_mitra" class="js-states form-control @error ('id_mitra') is-invalid @enderror" data-placeholder="Pilih Mitra" style="width:100%" name="id_mitra">
              <option value=""></option>
              @foreach($mitras as $mtr)
                @if (old('id_mitra') == $mtr->id)
                  <option value="{{ $mtr->id }}" selected>{{ $mtr->nama_mitra }}</option>
                @else 
                  <option value="{{ $mtr->id }}">{{ $mtr->nama_mitra }}</option>
                @endif
              @endforeach
            </select>
            @error('id_mitra')
            <div class="invalid-feedback flash" style="margin-top: 2px">
              {{ $message }}
            </div>
            @enderror 
          </div>
        </div>
        <div class="form-group">
          <label for="nama_project" style="font-weight:bolder">Nama Project</label>
          <br>
          <input class="form-control @error('nama_project') is-invalid @enderror" type="text" id="nama_project" name="nama_project" autocomplete="off">
            <span class="underline"></span>
            @error('nama_project')
              <div class="invalid-feedback flash" style="margin-top: 2px">
                {{ $message }}</div>
            @enderror
        </div>
        <div class="modal-footer" id="modal-footer">
          <button type="submit" class="btn-submit" id="submitnew">Submit</button>
        </div>
      </form>
    </div>

    <!-- Assign Handover Project -->
    <div id="handover" class="container tab-pane fade">
      <form method="post" action="/manager/newhandover">
        @csrf
        <div class="form-group">
          <label for="PIC2" style="font-weight:bolder">PIC</label>
            <br>
            <div class="@error('PIC2') is-invalid @enderror">
              <select id="PIC2" class="js-states form-control picAsli @error ('PIC2') is-invalid @enderror" data-placeholder="Pilih PIC" style="width:100%" name="PIC2" onchange="getHandoverData(id)">
              <option value=""></option>
              @foreach($users as $usr)
                @if (old('PIC2') == $usr->id)
                  <option value="{{ $usr->id }}" selected>{{ $usr->nama_user }}</option>
                @else 
                  <option value="{{ $usr->id }}">{{ $usr->nama_user }}</option>
                @endif
              @endforeach
            </select>
             @error('PIC2')
              <div class="invalid-feedback flash" style="margin-top: 2px">
                {{ $message }}</div>
            @enderror
          </div>
        </div>
        <br>
        <div class="form-group">
          <label for="nama_project2" style="font-weight:bolder">Nama project</label>
            <br>
            <div class="@error('nama_project2') is-invalid @enderror">
              <select id="nama_project2" class="js-states form-control @error('nama_project2') is-invalid @enderror" data-placeholder="Pilih Nama Project" style="width:100%" name="id_project">
                <option value=""></option>
              </select>
                @error('nama_project2')
                  <div class="invalid-feedback flash" style="margin-top: 2px">
                    {{ $message }}</div>
                @enderror
            </div>
        </div>
        <br>
        <div class="form-group">
          <label for="PIChandover" style="font-weight:bolder">PIC Handover</label>
            <br>
            <div class="@error('PIChandover') is-invalid @enderror">
              <select id="PIChandover" class="js-states form-control @error('PIChandover') is-invalid @enderror" data-placeholder="Pilih PIC Handover" style="width:100%" name="PIChandover">
                <option value=""></option>
                
              </select>
               @error('PIChandover')
                <div class="invalid-feedback flash" style="margin-top: 2px">
                  {{ $message }}</div>
              @enderror
          </div>
        </div> 
        <div class="modal-footer" id="modal-footer">
          <button type="submit" class="btn-submit" id="submithandover">Submit</button>
        </div>          
      </form>

    <!-- ./container tab -->
    </div>
    <!-- Akhir Assign Handover Project -->

  <!-- ./tab content -->
  </div>                
@endsection
  
@push('scripts')
<!--   Core JS Files  -->
<script src="{{ url('') }}/js/core/jquery.min.js"></script>

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
    $("#id_mitra").select2({
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
<!-- <script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>\ -->

@endpush