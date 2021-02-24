{!! Form::model($project, [
    'route' => ['listprojects.detail', $project->id],
    'method' => 'GET'
]) !!}
    <div class="row">
     <div class="table-responsive-lg">
    <!-- /*<table class="table table-bordered" style="margin-right: 250px; margin-left: 10px; margin-top: 0px">*/ -->
      <table class="table1 table-hover" style="margin-right: 250px; margin-left: 10px; margin-top: 0px">
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
            <td>{{ $progress->progress_sit }}</td>
        </tr>
        <tr class="text-center">
            <th>Progress UAT</th>
            <td>{{ $progress->progress_uat }}</td>
        </tr>
       </thead>
      </table>
     </div>
    </div>
{!! Form::close() !!}