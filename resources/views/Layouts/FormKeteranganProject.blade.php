{!! Form::model($project, [
    'route' => ['keterangan.notes', $project->id],
    'method' => 'GET'
]) !!}

    <div class="row mt-2">
    <div class="col-md-12">
        <!-- /.card-header -->
        <div class="card card-danger card-outline">

            <div class="card-body">
                <table id="table2" class="table table-bordered table-striped">
                    <thead>
                       <tr class="text-center">
                            <th>ALASAN</th> 
                            <td>{{ $project->pketerangan_note }}</td> 
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->

    <div class="float-right d-none d-sm-inline-block">
        <strong>ALASAN</strong> <a><strong>{{ $notes }}</strong></a>
    </div>

{!! Form::close() !!}