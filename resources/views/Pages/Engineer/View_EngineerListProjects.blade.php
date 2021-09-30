@extends('Templates.Engineer')
@push('styles')
@endpush

@section('PageTitle','List Projects')
@section('content')


<title>
  | {Engineer} List Projects
</title>

<div class="row mt-2">
    <div class="col-md-12">
        <!-- /.card-header -->
        <div class="card card-primary card-outline">

            <div class="card-body">
                <!-- <a href="/manager/projects/export" type="button" class="btn btn-success" style="float:left">
                    Excel &nbsp<i class="fas fa-file-download"></i>
                </a> -->
                <table id="table1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Inisial</th>
                            <th class="text-center">Produk</th>
                            <th class="text-center">Jenis Project</th>
                            <th class="text-center">Nama Mitra</th>  
                            <th class="text-center">Nama Project</th>
                            <th class="text-center">Tanggal Assign</th>
                            <th class="text-center">Status</th>                          
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
  $('#table1').DataTable({ 
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    ajax: "{{ route('engineerlistprojects.table') }}",
    columns: [
      {data: 'DT_RowIndex', name: 'id', class: 'text-center'},
      {data: 'inisial_user', name: 'inisial_user', class: 'text-center'},
      {data: 'nama_product', name: 'nama_product', class: 'text-center'},
      {data: 'nama_ptype', name: 'nama_ptype', class: 'text-center'},
      {data: 'nama_mitra', name: 'nama_mitra', class: 'text-center'},
      {data: 'nama_project', name: 'nama_project', class: 'text-center'},
      {data: 'waktu', name: 'waktu', class: 'text-center'},
      {data: 'id_pstat', name: 'id_pstat', class: 'text-center'},
    ]
  });
</script>
@endpush