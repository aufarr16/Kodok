{!! Form::model($project, [
    'route' => ['adminlistprojects.detail', $project->id],
    'method' => 'GET'
]) !!}

    <div class="row mt-2">
    <div class="col-md-12">
        <!-- /.card-header -->
        <div class="card card-danger card-outline">

            <div class="card-body">
                <table id="table1" class="table table-bordered table-striped">
                    <thead>
                       <tr class="text-center">
                            <th style="width: 150px;">PIC Saat ini</th> 
                            <td>{{ $piccurrent->nama_user }}</td> 
                        </tr>
                        <tr class="text-center">
                            <th>PIC Original</th>
                            <td>{{ $picori->nama_user }}</td>
                        </tr>
                        @foreach ($historypic as $history)
                        <tr class="text-center">
                            <th>History PIC {{ $history->handover_order }}</th>
                            <td>{{ $history->nama_user }}</td>
                        </tr>
                        @endforeach
                        <tr class="text-center">
                            <th>Nama PIC Product</th>
                            <td>{{ $picproduct->nama_user }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Nama PIC PM</th>
                            <td>{{ $picpm->nama_user }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Nama PIC AM</th>
                            <td>{{ $picam->nama_user }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Progress SIT</th>
                            <td>{{ $pbn->progress_sit }}%</td>
                        </tr>
                        <tr class="text-center">
                            <th>Progress UAT</th>
                            <td>{{ $pbn->progress_uat }}%</td>
                        </tr>
                        <tr class="text-center">
                            <th>Notes Project</th>
                            <td>{{ $pbn->notes_project }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Bobot Project</th>
                            <td>{{ $pbn->bobot_project }}</td>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
{!! Form::close() !!}