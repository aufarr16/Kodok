{!! Form::model($model, [
	'route' => $model->exists ? ['pic.change', $model->id] : 'pic.edit',
	'method' => $model->exists ? 'PUT' : 'POST'
]) !!}
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_pic_product" style="font-weight:bolder" style="margin-top: -30px">PIC Product</label>
				<br>
				{!! Form::select('nama_user', $listproduct, null, array(
				    'class' => 'form-control selectproduct',
				    'id' => 'nama_user'', 
				    )) 
				!!}
		</div>
	</div>
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_pic_am" style="font-weight:bolder" style="margin-top: -30px">PIC Am</label>
				<br>
				{!! Form::select('nama_user', $listam, null, array(
				    'class' => 'form-control selectpic',
				    'id' => 'nama_user'', 
				    )) 
				!!}
		</div>
	</div>
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_pic_pm" style="font-weight:bolder" style="margin-top: -30px">PIC Pm</label>
				<br>
				{!! Form::select('nama_user', $listpm, null, array(
				    'class' => 'form-control selectpic',
				    'id' => 'nama_user'', 
				    )) 
				!!}
		</div>
	</div>
{!! Form::close() !!}