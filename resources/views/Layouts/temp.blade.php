<div class="form-group">
		<div class ="input-group-addon">
			<label for="id_pic_am" style="font-weight:bolder" style="margin-top: -30px">PIC Am</label>
				<br>
				{!! Form::select('nama_user', $listam, null, array(
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
				{!! Form::select('nama_user', $listpm, null, array(
				    'class' => 'form-control selectpicpm',
				    'id' => 'nama_user', 
				    )) 
				!!}
		</div>
	</div>

	@if()
				{!! Form::select('nama_user', $listproduct, null, array(
				    'class' => 'form-control selectproduct',
				    'id' => 'nama_user', 
				    )) 
				!!}