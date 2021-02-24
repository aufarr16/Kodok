{!! Form::model($project, [
	'route' => ['pic.change', $project->id],
	'method' => 'PUT'
]) !!}
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_pic_product" style="font-weight:bolder" style="margin-top: -30px">PIC Product</label>
				<br>
				{!! Form::select('id_pic_product', $listproduct, null, array(
				    'class' => 'form-control selectproduct',
				    'id' => 'nama_user', 
				    'placeholder' => '',
				    'style' => 'Background: #ffff', 
				    )) 
				!!}
		</div> 
	</div> 

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_pic_am" style="font-weight:bolder" style="margin-top: -30px">PIC AM</label>
				<br>
				{!! Form::select('id_pic_am', $listam, null, array(
				    'class' => 'form-control selectpicam',
				    'id' => 'nama_user',
				    'placeholder' => '', 
				    'style' => 'Background: #ffff',
				    )) 
				!!}
		</div>
	</div>

	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_pic_pm" style="font-weight:bolder" style="margin-top: -30px">PIC PM</label>
				<br>
				{!! Form::select('id_pic_pm', $listpm, null, array(
				    'class' => 'form-control selectpicpm',
				    'id' => 'nama_user',
				    'placeholder' => '',
				    'style' => 'Background: #ffff', 
				    )) 
				!!}
		</div>
	</div>
	
	
{!! Form::close() !!}