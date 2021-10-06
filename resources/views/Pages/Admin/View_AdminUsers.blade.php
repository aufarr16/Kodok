@extends('Templates.Admin')
<!-- @section('Welcome') 
	<h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection -->
@section('PageTitle','Users')
@section('content')
<title>
| {Admin} Users
</title>
<div class="row mt-2">
    <div class="col-md-12">
        <!-- /.card-header -->
        <div class="card card-primary card-outline">

            <div class="card-body">
                <a href="{{ route('users.create') }}" type="button" class="modal-show add-users btn btn-success" title="Tambah User" id="btn-modal" style="float:left">
                    Tambah User &nbsp<i class="fas fa-plus"></i>
                </a>
                <table id="table1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Inisial</th>
                            <th class="text-center">PIC</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Action</th>
                            <th class="text-center">Added By</th>
                            <th class="text-center">Modified By</th>                        
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
    ajax: "{{ route('users.table') }}",
    columns: [
    	{data: 'DT_RowIndex', name: 'id', class: 'text-center'},
    	{data: 'inisial_user', name: 'inisial_user', class: 'text-center'},
    	{data: 'nama_user', name: 'nama_user', class: 'text-center'},
    	{data: 'nama_ulevel', name: 'nama_ulevel', class: 'text-center'},
    	{data: 'action', name: 'action', class: 'text-center'},
    	{data: 'added_by', name: 'added_by', class: 'text-center'},
    	{data: 'modified_by', name: 'modified_by', class: 'text-center'}
    ]
});
</script>
@endpush