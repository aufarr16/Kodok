@extends('Templates.Admin')
@push('styles')
@endpush

@section('PageTitle','Approval Documents')
@section('content')
<title>
| {Admin} Approval Projects
</title>
<div class="row mt-2">
    <div class="col-md-12">
        <!-- /.card-header -->
        <div class="card card-primary card-outline">
            <div class="card-body">
                <table id="table1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Inisial</th>
                            <th class="text-center">Produk</th>
                            <th class="text-center">Jenis Project</th>
                            <th class="text-center" style="width: 300px">Nama Project</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">PIC Approve</th> 
                            <th class="text-center" style="width: 75px">Action</th> 
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
    ajax: "{{ route('approve.table') }}",
    columns: [
      {data: 'DT_RowIndex', name: 'id_project', class: 'text-center'},
      {data: 'inisial_user', name: 'inisial_user', class: 'text-center'},
      {data: 'nama_product', name: 'nama_product', class: 'text-center'},
      {data: 'nama_ptype', name: 'nama_ptype', class: 'text-center'},
      {data: 'nama_project', name: 'nama_project', class: 'text-center'},
      {data: 'pketerangan_status', name: 'pketerangan_status', class: 'text-center'},
      {data: 'approver_document', name: 'approver_document', class: 'text-center'},
      // {data: 'docs', name: 'docs'},
      {data: 'action', name: 'action', class: 'text-center'}
    ],
  });
</script>
@endpush