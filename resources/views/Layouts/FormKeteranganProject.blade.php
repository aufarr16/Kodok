{!! Form::model($project, [
    'route' => ['keterangan.notes', $project->id],
    'method' => 'GET'
]) !!}

    <div class="col-md-12">
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Alasan:</h5>
            {{ $project->pketerangan_note }}
        </div>    
    </div>

{!! Form::close() !!}