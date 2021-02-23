{!! Form::model($project, [
    'route' => ['listprojects.detail', $project->id],
    'method' => 'GET'
]) !!}
    <div class="row">
     <div class="table-responsive-lg">
      <table class="table1 table-hover">
       <thead>
        <tr class="text-center">
            <th>PIC Saat ini</th> 
            <td>{{ $piccurrent->nama_user }}</td> 
        </tr>
        <tr class="text-center">
            <th>PIC Original</th>
            <td>{{ $picori->nama_user }}</td>
        </tr>
        @foreach ($historypic as $history)
        <tr class="text-center">
            <th>HistoryPIC</th>
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