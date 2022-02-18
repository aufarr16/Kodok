@extends('Templates.Manager')
@push('styles')
@endpush
<!-- @section('Welcome') 
  <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection -->
@section('PageTitle','List Projects')
@section('content')

@if($userLevel === 2)
<title>
  | {Manager} List Projects
</title>
@elseif($userLevel === 9)
<title>
  | {Eksekutif} List Projects
</title>
@endif 
<div class="row mt-2">
<div class="col-md-12">
  <div class="card card-outline card-primary collapsed-card">
    <div class="card-header">
    <h3 class="card-title">Filter List Project</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-plus"></i>
      </button>
    </div>
      <!-- /.card-tools -->
    </div>
    
      <div class="card-body">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="form-group">
              <label>PIC</label>
                <select class="select2 form-control filter" data-column="1" style="width: 100%;">
                  <option value="">-</option>
                  @foreach($pic as $p)
                    <option value="{{$p->inisial_user}}">{{$p->inisial_user}}</option>
                  @endforeach
                </select>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-12">
            <div class="form-group">
              <label>Product</label>
                <select class="select2 form-control filter" data-column="2" style="width: 100%;">
                  <option value="">-</option>
                  @foreach($prod as $pr)
                    <option value="{{$pr->nama_product}}">{{$pr->nama_product}}</option>
                  @endforeach
                </select>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-12">
            <div class="form-group">
              <label>Mitra</label>
                <select class="select2 form-control filter" data-column="4" style="width: 100%;">
                  <option value="">-</option>
                  @foreach($mitra as $mtr)
                    <option value="{{$mtr->nama_mitra}}">{{$mtr->nama_mitra}}</option>
                  @endforeach
                </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <label>Project</label>
            <input data-column="5" type="search" class="form-control filter" placeholder aria-controls="table1">
          </div>

          <div class="col-md-4 col-sm-6 col-12">
            <div class="form-group">
              <label>Jenis Project</label>
                <select class="select2 form-control filter" data-column="3" style="width: 100%;">
                  <option value="">-</option>
                  @foreach($ptype as $pty)
                    <option value="{{$pty->nama_ptype}}">{{$pty->nama_ptype}}</option>
                  @endforeach
                </select>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-12">
            <div class="form-group">
              <label>Status</label>
                <select class="select2 form-control filter" data-column="7" style="width: 100%;">
                  <option value="">-</option>
                  @foreach($pstat as $pst)
                    <option value="{{$pst->nama_pstat}}">{{$pst->nama_pstat}}</option>
                  @endforeach
                </select>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- /.card-header -->
  <div class="card card-primary card-outline">
    <div class="card-body">
      <a href="/manager/projects/export" type="button" class="btn btn-success" style="float:left">
          Excel &nbsp<i class="fas fa-file-download"></i>
      </a>
      <table id="table1" class="table table-bordered table-hover">
          <thead>
              <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Inisial</th>
                  <th class="text-center">Produk</th>
                  <th class="text-center">Jenis Project</th>
                  <th class="text-center">Nama Mitra</th>  
                  <th class="text-center" style="width: 300px">Nama Project</th>
                  <th class="text-center">Tanggal Assign</th>
                  <th class="text-center">Status</th>
                  @if($userLevel === 2)
                  <th class="text-center" style="width: 75px">Action</th>
                  @endif                           
              </tr>
          </thead>
      </table>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
<!-- /.col -->
</div>
</div>
@endsection

@push('scripts')
<script>
  var table = $('#table1').DataTable({ 
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    ajax: "{{ route('listprojects.table') }}",
    columns: [
      {data: 'DT_RowIndex', name: 'id', class: 'text-center'},
      {data: 'inisial_user', name: 'inisial_user', class: 'text-center'},
      {data: 'nama_product', name: 'nama_product', class: 'text-center'},
      {data: 'nama_ptype', name: 'nama_ptype', class: 'text-center'},
      {data: 'nama_mitra', name: 'nama_mitra', class: 'text-center'},
      {data: 'nama_project', name: 'nama_project', class: 'text-center'},
      {data: 'waktu', name: 'waktu', class: 'text-center'},
      {data: 'id_pstat', name: 'id_pstat', class: 'text-center'},
      @if($userLevel === 2)
      {data: 'action', name: 'action', class: 'text-center'}
      @endif 
    ]
  });

  $(".filter").change( function(){
    // console.log($(this).val())
    table.column($(this).attr("data-column")).search($(this).val()).draw();
  });

  $(".filter").keyup( function(){
    // console.log($(this).val())
    table.column($(this).attr("data-column")).search($(this).val()).draw();
  });
</script>
@endpush

