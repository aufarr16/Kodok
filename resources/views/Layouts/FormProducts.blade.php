{!! Form::model($model, [
	'route' => 'products.store',
	'method' => 'POST',
]) !!}

	<div class="form-group @error('nama_product') is-invalid @enderror">
		<div class ="input-group-addon">
			<label for="nama_product" style="font-weight:bolder" style="margin-top: -30px">Nama Product</label>
				<br>
			{!! Form::text('nama_product', null,
					['class'=>'form-control', 'id' =>'nama_product', 'style' =>'margin-bottom: 10px'])
			!!}		
		</div>
	</div>

{!! Form::close() !!}