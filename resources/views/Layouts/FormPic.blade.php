{!! Form::model($project, [
	'route' => ['pic.change', $project->id],
	'method' => 'PUT'
]) !!}
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_pic_product" style="font-weight:bolder" style="margin-top: -30px">PIC Product</label>
				<br>
				{!! Form::select('nama_user', $currentproduct, null, array(
				    'class' => 'form-control selectproduct',
				    'id' => 'nama_user', 
				    )) 
				!!}
		</div> 
	</div>
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_pic_am" style="font-weight:bolder" style="margin-top: -30px">PIC Am</label>
				<br>
				{!! Form::select('nama_user', $currentam, null, array(
				    'class' => 'form-control selectpicam',
				    'id' => 'nama_user', 
				    )) 
				!!}
		</div>
	</div>
	<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_pic_pm" style="font-weight:bolder" style="margin-top: -30px">PIC Pm</label>
				<br>
				{!! Form::select('nama_user', $currentpm, null, array(
				    'class' => 'form-control selectpicpm',
				    'id' => 'nama_user', 
				    )) 
				!!}
		</div>
	</div>
{!! Form::close() !!}