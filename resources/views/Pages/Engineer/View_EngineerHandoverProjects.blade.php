@extends('Templates.Engineer')
@push('styles')
{{-- <link href="{{ url('') }}/css/yourhandoverprojects.css" rel="stylesheet" /> --}}
<!-- @section('Welcome') 
      <h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection -->
@section('PageTitle', 'Handover Projects')
@section('content')
    <title>
        | {Engineer} Handover Projects
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
                                <th class="text-center">Produk</th>
                                <th class="text-center">Jenis Project</th>
                                <th class="text-center">Nama Mitra</th>
                                <th class="text-center">Nama Project</th>
                                <th class="text-center">Tanggal Handover</th>
                                <th class="text-center" style="width: 175px">Status</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center" style="width: 170px">Action</th>
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
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

    </script>

    <script>
        $('#table1').DataTable({
           "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            ajax: "{{ route('handover.table') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id', 
                    class: 'text-center'
                },
                {
                    data: 'nama_product',
                    name: 'nama_product', 
                    class: 'text-center'
                },
                {
                    data: 'nama_ptype',
                    name: 'nama_ptype', 
                    class: 'text-center'
                },
                {
                    data: 'nama_mitra',
                    name: 'nama_mitra', 
                    class: 'text-center'
                },
                {
                    data: 'nama_project',
                    name: 'nama_project', 
                    class: 'text-center'
                },
                {
                    data: 'tanggal_assign',
                    name: 'tanggal_assign', 
                    class: 'text-center'
                },
                {
                    data: 'status',
                    name: 'status', 
                    class: 'text-center'
                },
                {
                    data: 'keterangan',
                    name: 'keterangan', 
                    class: 'text-center'
                },
                {
                    data: 'action',
                    name: 'action', 
                    class: 'text-center'
                }
            ],
            "order": [
                [5, "desc"]
            ]
        });

    </script>
@endpush
