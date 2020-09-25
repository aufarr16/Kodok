<!-- Admin - Product -->
@error('nama_product')
	<div class="invalid-feedback flash">
		{{ $message }}
	</div>
@enderror

<!-- Admin - Mitra -->
@if ($errors->has('ABA')) 
	<div class="invalid-feedback flash">
		{{ $errors->first('ABA') }}
	</div>
@endif

@if ($errors->has('nama_mitra'))
	<div class="invalid-feedback flash">
		{{$errors->first('nama_mitra')}}
	</div>
@endif

@if((Session::get('success')))
        <div class="alert alert-success" role="alert"> {{ Session::get('success') }}</div>
@endif