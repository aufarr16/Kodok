{!! Form::model($project, [
    'route' => ['listprojects.detail', $project->id],
    'method' => 'GET'
]) !!}
    <div class="row">
     <div class="col-lg-12">
      <table class="table table-bordered table-hover">
       <thead>
        <tr>
         <th>PIC Saat ini</th> 
         <td>{{ $piccurrent->nama_user }}</td> 
        </tr>
        <tr>
        <tr>
         <th>PIC Original</th>
         <td>{{ $picori->nama_user }}</td>
        </tr>
        <tr>
         <th>Nama PIC Product</th>
         <td>{{ $picproduct->nama_user }}</td>
        </tr>
        <tr>
         <th>HistoryPIC</th>
         @foreach ($historypic as $history)
         <td>{{ $history->nama_user }}</td>
         @endforeach
        </tr>
        <tr>
         <th>Nama PIC PM</th>
         <td>{{ $picpm->nama_user }}</td>
        </tr>
        <tr>
         <th>Nama PIC AM</th>
         <td>{{ $picam->nama_user }}</td>
        </tr>
        <tr>
         <th>Progress SIT</th>
         <td>{{ $progress->progress_sit }}</td>
        </tr>
        <tr>
         <th>Progress UAT</th>
         <td>{{ $progress->progress_uat }}</td>
        </tr>
       </thead>
      </table>
     </div>
    </div>
{!! Form::close() !!}