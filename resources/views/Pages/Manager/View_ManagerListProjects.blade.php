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
        <!-- /.card-header -->
        <div class="card card-primary card-outline">

            <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <label>PIC</label>
                    <select data-column="1" class="form-control filter">
                      <option value="">Pilih PIC</option>
                      @foreach($pic as $p)
                        <option value="{{$p->inisial_user}}">{{$p->inisial_user}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label>Mitra</label>
                    <input data-column="4" type="search" class="form-control form-control-sm filter" placeholder aria-controls="table1">
                  </div>
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
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
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
    table.column($(this).attr("data-column")).search($(this).val()).draw();
  });

  $(".filter").keyup( function(){
    table.column($(this).attr("data-column")).search($(this).val()).draw();
  });
</script>
@endpush

