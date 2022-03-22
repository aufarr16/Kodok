{!! Form::model($project, [
    'route' => ['keterangan.notes', $project->id],
    'method' => 'GET'
]) !!}

    <div class="col-md-12">
        <div class="callout callout-info" class="text-center">
            <h5>Alasan : </h5>
            {{ $project->pketerangan_note }}
        </div>    
    </div>

{!! Form::close() !!}