@extends('Templates.Engineer')
@push('styles')

@section('PageTitle', 'Upload Documents')
@section('content')
    <title>
        | {Engineer} Upload Documents
    </title>

<div class="col-md-12">
	<div class="card card-outline card-primary">
	  <div class="card-header">
	    <h3 class="card-title">Silahkan Pilih Project</h3>
	  </div>
	  <form method="POST" action="{{ route('upload.file') }}" enctype="multipart/form-data">
	  	@csrf
	  	<label for="file">Choose File</label>
	  	<input id="uploadedfile" type="file" name="uploadedfile">
	  	<button type="submit" name="submit">Upload</button>
	  </form>
	<div class="card-body">
	    
	  </div>
	  <!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>
@endsection

@push('scripts')


@endpush
