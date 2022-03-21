@extends('Templates.Admin')
@section('PageTitle','Mitra')
@section('content')
<title>
| {Admin} Mitra
</title>

<div class="row mt-2">
    <div class="col-md-12">
        <!-- /.card-header -->
        <div class="card card-primary card-outline">

            <div class="card-body">
                <a href="{{ route('mitra.create') }}" type="button" class="modal-show add-mitra btn btn-success" title="Tambah Mitra" id="btn-modal" style="float:left">
                    Tambah Mitra &nbsp<i class="fas fa-plus"></i>
                </a>
                <table id="table1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Mitra</th>
                            <th class="text-center">Action</th>
                          
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
    $('#table1').DataTable( { 
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        ajax: "{{ route('mitra.table') }}",
        columns: [
        	{data: 'DT_RowIndex', name: 'id', class: 'text-center'},
        	// {data: 'ABA', name: 'ABA'},
        	{data: 'nama_mitra', name: 'nama_mitra', class: 'text-center'},
        	{data: 'action', name: 'action', class: 'text-center'},
        	{data: 'added_by', name: 'added_by', class: 'text-center'},
        	{data: 'modified_by', name: 'modified_by', class: 'text-center'}
        ]
    });
</script>
@endpush
