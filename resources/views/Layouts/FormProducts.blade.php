{!! Form::model($model, [
	'route' => $model->exists ? ['products.update', $model->id] : 'products.store',
	'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="nama_product" style="font-weight:bolder" style="margin-top: -30px">Nama Product</label>
				<br>
			{!! Form::text('nama_product', null,
				['class'=> 'form-control',
					'id' =>'nama_product', 
					'style' =>'margin-bottom: 10px'
				])
			!!}		
			<!-- {!!$errors->first('nama_product','<div class="invalid-feedback flash">$message</div>')!!} -->
		</div>
	</div>

{!! Form::close() !!}