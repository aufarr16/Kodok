@extends('Templates.Manager')
@push('styles')
@endpush
@section('PageTitle','Assign Projects')
@section('content')
<title>
  | {Manager} Assign Projects
</title>
<div class="card card-lightblue card-tabs">
  <div class="card-header p-0 pt-1 border-bottom-0">
    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#new" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">New Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#handover" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="true">Handover Projects</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content" id="custom-tabs-three-tabContent">
      
      <div class="tab-pane fade active show" id="new" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
        <form method="post" action="/manager/newproject" id="my-form">
        @csrf
         <div class="form-group">
            <label for="id_user">PIC</label>
            <div class="@error('id_user') is-invalid @enderror">
              <select class="select2 form-control @error ('id_user') is-invalid @enderror" id="id_user" name="id_user" style="width: 100%;">
                <option value="">PIC</option>
                @foreach($users as $usr1)
                @if (old('id_user') == $usr1->id)
                  <option value="{{ $usr1->id }}" selected>{{ $usr1->nama_user }}</option>
                @else 
                  <option value="{{ $usr1->id }}">{{ $usr1->nama_user }}</option>
                @endif
              @endforeach
              </select>
              @error('id_user')
              <div class="invalid-feedback flash">
                {{ $message }}</div>
            @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="id_product">Produk</label>
            <div class="@error('id_product') is-invalid @enderror">
              <select class="select2 form-control-border border-width-2 form-control @error ('id_product') is-invalid @enderror" id="id_product" name="id_product" style="width: 100%;">
                <option value="" >Pilih Produk</option>
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
            <label for="id_ptype">Jenis Project</label>
            <div class="@error('id_ptype') is-invalid @enderror">
              <select class="select2 form-control-border border-width-2 form-control @error ('id_ptype') is-invalid @enderror" id="id_ptype" name="id_ptype" style="width: 100%;">
                <option value="">Pilih Jenis Project</option>
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
            <label for="id_mitra">Mitra</label>
            <div class="@error('id_mitra') is-invalid @enderror">
              <select class="select2 form-control-border border-width-2 form-control @error ('id_mitra') is-invalid @enderror" id="id_mitra" name="id_mitra" style="width: 100%;">
                <option value="">Pilih Mitra</option>
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
            <label for="nama_project">Nama Project</label>
            <input type="text" class="form-control  @error('nama_project') is-invalid @enderror" id="nama_project" placeholder="Nama Project" name="nama_project" autocomplete="off" value="{{ old('nama_project') }}" style="width: 100%;">
            @error('nama_project')
              <div class="invalid-feedback flash" style="margin-top: 2px">
                {{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-outline-primary float-right" id="btn-submit">Submit</button>
        </form> 
      </div>

      <!-- HANDOVER -->
      <div class="tab-pane fade" id="handover" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
        <form method="post" action="/manager/newhandover" id="my-handover">
        @csrf
          <div class="form-group">
            <label for="PIC2">PIC</label>
            <div class="@error('PIC2') is-invalid @enderror">
              <select class="select2 form-control-border border-width-2 form-control picAsli @error ('PIC2') is-invalid @enderror" id="PIC2" name="id_user1" style="width: 100%;" onchange="getHandoverData(id)">
              <option value="">Pilih Pic</option>
              @foreach($users as $usr2)
                @if (old('id_user1') == $usr2->id)
                  <option value="{{ $usr2->id }}" selected>{{ $usr2->nama_user }}</option>
                @else 
                  <option value="{{ $usr2->id }}">{{ $usr2->nama_user }}</option>
                @endif
              @endforeach
              </select>
              @error('PIC2')
              <div class="invalid-feedback flash" style="margin-top: 2px">
                {{ $message }}</div>
            @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="nama_project2">Nama Project</label>
            <div class="@error('nama_project2') is-invalid @enderror">
              <select class="select2 form-control-border border-width-2 form-control @error ('nama_project2') is-invalid @enderror" id="nama_project2" name="nama_project2" style="width: 100%;">
                <option value="">Pilih Nama Project</option>
                </select>
                @error('nama_project2')
                  <div class="invalid-feedback flash" style="margin-top: 2px">
                    {{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="PIChandover">PIC Handover</label>
            <div class="@error('PIChandover') is-invalid @enderror">
              <select class="select2 form-control-border border-width-2 form-control @error ('PIChandover') is-invalid @enderror" id="PIChandover" name="PIChandover" style="width: 100%;">
                <option value="">Pilih PIC Handover</option>              
                </select>
                @error('PIChandover')
                <div class="invalid-feedback flash" style="margin-top: 2px">
                  {{ $message }}</div>
                @enderror
            </div>
          </div>
            <button type="submit" class="btn btn-outline-primary float-right" id="btn-submithandover">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection
  
@push('scripts')
<script type="text/javascript">
   
    $(document).ready(function () {
    
        $("#my-form").submit(function (e) {
   
            $("#btn-submit").attr("disabled", true);
   
            return true;
    
        });
    });
</script>

<script type="text/javascript">
   
    $(document).ready(function () {
    
        $("#my-handover").submit(function (e) {
   
            $("#btn-submithandover").attr("disabled", true);
   
            return true;
    
        });
    });
</script>

@endpush