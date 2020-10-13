<!-- {!! Form:model($model,[
	'route'=> 'products.store',
	'method' => 'POST'
]) !!}
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="nama_product" style="font-weight:bolder" style="margin-top: -30px">Nama Product</label>
				<br>
		</div>
		<input type="text" id="nama_product" class="form-control @error('nama_product') is-invalid @enderror" style="margin-bottom: 10px" name="nama_product" value="{{ old('nama_product') }}">
		{!! Form::text('nama_product',null,[class=>'form-control @error('nama_product') is-invalid @enderror', name=>'nama_product', id=>'nama_product', style=>'margin-bottom: 10px'])}
		@error('nama_product')
			<div class="invalid-feedback flash">
				{{ $message }}
			</div>
		@enderror
	</div>
{!! Form::close() !!} -->