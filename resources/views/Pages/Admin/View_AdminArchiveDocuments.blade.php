	@extends('Templates.Admin')
	@push('styles')
	<link href="{{ url('') }}/css/arsipadmin.css" rel="stylesheet" />
	@endpush
	@section('PageTitle','Archive Documents')
	@section('content')
  	<title>
    	| {Admin} Archive Documents
  	</title>
       
	  <!-- <h2 style="margin-top:10px">Archive Documents</h2> -->
		<div class="table-responsive-lg">	
		<table class="table1" id="table1" style="overflow:auto">
		<thead>
		<tr>
			<th>No</th>
			<th>Inisial</th>
			<th>Jenis Project</th>
			<th>Nama Project</th>
			<th>Status Docs</th>
		</tr>
		</thead>
		<tbody">
		@foreach($data_archive as $dat_arc)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $dat_arc->inisial_user}}</td>
			<td>{{ $dat_arc->nama_ptype}}</td>
			<td>{{ $dat_arc->nama_project}}</td>
			<td>
				<button type="button" class="btn-detail" data-toggle="modal" data-target="#modal1">Details</button>
				
				<!-- The Modal -->
				<!-- <div class="modal" id="modal1" role="dialog" style="left:20%; margin-top:50px"> -->
				<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal" aria-hidden="true" style="left: -323px; margin-top: 35px;">
				<div class="modal-dialog">
				<!-- Modal content -->
					<div class="modal-content">
					<div class="modal-header">
						<a class="close1" data-dismiss="modal">&times;</a>
						<h2 class="modal-title">Implementasi ATM Bersama Bank Artos</h2>
					</div>	
						<div class = "modal-body" style="padding-right:15px" id="style-7">
							<div class="force-overflow">
							<div class = "input-group">
								<br>
									<table class="table1 fixedHeader" style="margin:-20px 10px -20px 10px">
										<tr>
											<th>No</th>	
											<th>Dokumen</th>
											<th>Status</th>
										</tr>
										<tr>
											<td>1</td>
											<td>Nodin Penugasan</td>
											<td>	
												<select class="custom-select" id="status_select1" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px"> 
													<option value="collected1">Collected</option>
													<option value="notcollected1">Not Collected</option>
													<option value="postponed1">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected1" class="status_docs1"></div>
													<div id="notcollected1" class="status_docs1"></div>
													<div id="postponed1" class="status_docs1">
														<br>
														<textarea placeholder="Notes" rows="2" id="comment_text" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>BAKO</td>
											<td>	
												<select class="custom-select" id="status_select1_2" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px"> 
													<option value="collected1_2">Collected</option>
													<option value="notcollected1_2">Not Collected</option>
													<option value="postponed1_2">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected1_2" class="status_docs1_2"></div>
													<div id="notcollected1_2" class="status_docs1_2"></div>
													<div id="postponed1_2" class="status_docs1_2">
														<br>
														<textarea placeholder="Notes" rows="2" id="comment_text" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>BAE</td>
											<td>	
												<select class="custom-select" id="status_select1_3" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px"> 
													<option value="collected1_3">Collected</option>
													<option value="notcollected1_3">Not Collected</option>
													<option value="postponed1_3">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected1_3" class="status_docs1_3"></div>
													<div id="notcollected1_3" class="status_docs1_3"></div>
													<div id="postponed1_3" class="status_docs1_3">
														<br>
														<textarea placeholder="Notes" rows="2" id="comment_text" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>BATO</td>
											<td>	
												<select class="custom-select" id="status_select1_4" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px"> 
													<option value="collected1_4">Collected</option>
													<option value="notcollected1_4">Not Collected</option>
													<option value="postponed1_4">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected1_4" class="status_docs1_4"></div>
													<div id="notcollected1_4" class="status_docs1_4"></div>
													<div id="postponed1_4" class="status_docs1_4">
														<br>
														<textarea placeholder="Notes" rows="2" id="comment_text" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>BATO</td>
											<td>	
												<select class="custom-select" id="status_select1_5" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px"> 
													<option value="collected1_5">Collected</option>
													<option value="notcollected1_5">Not Collected</option>
													<option value="postponed1_5">Postponed</option>
												</select>
												
												<button class="btn-ok" type="button">OK</button>
													
												<div class ="output">
													<div id="collected1_5" class="status_docs1_5"></div>
													<div id="notcollected1_5" class="status_docs1_5"></div>
													<div id="postponed1_5" class="status_docs1_5">
														<br>
														<textarea placeholder="Notes" rows="2" id="comment_text" cols="36" class="note_status" role="textbox"></textarea>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</br>
							<!-- ./input group -->
							</div>
							<!-- ./force overflow -->
							</div>
						<!-- ./modal body -->
						</div>
					<!-- ./modal content -->
					</div>					
				<!-- ./modal -->
				</div>	
			</td>
		</tr>
		@endforeach
		</tbody>
		</table>
	<!-- table responsive -->
	</div>
	</br>
	@endsection

@push('scripts')
<script>
	$(document).ready(function(){
	// 1 - Baris 1
  //hides dropdown content
  $(".status_docs1").hide();
  
  //listen to dropdown for change
  $("#status_select1").change(function(){
    //rehide content on change
    $('.status_docs1').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });
  
  	// 1 - Baris 2
  //hides dropdown content
  $(".status_docs1_2").hide();

  //listen to dropdown for change
  $("#status_select1_2").change(function(){
    //rehide content on change
    $('.status_docs1_2').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

  // 1 - Baris 3
  //hides dropdown content
  $(".status_docs1_3").hide();

  //listen to dropdown for change
  $("#status_select1_3").change(function(){
    //rehide content on change
    $('.status_docs1_3').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

  // 1 - Baris 4
  //hides dropdown content
  $(".status_docs1_4").hide();

  //listen to dropdown for change
  $("#status_select1_4").change(function(){
    //rehide content on change
    $('.status_docs1_4').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

  // 1 - Baris 5
  //hides dropdown content
  $(".status_docs1_5").hide();

  //listen to dropdown for change
  $("#status_select1_5").change(function(){
    //rehide content on change
    $('.status_docs1_5').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

  // 2 - Baris 1
  //hides dropdown content
  $(".status_docs2_1").hide();

  //listen to dropdown for change
  $("#status_select2_1").change(function(){
    //rehide content on change
    $('.status_docs2_1').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

   // 2 - Baris 2
  //hides dropdown content
  $(".status_docs2_2").hide();

  //listen to dropdown for change
  $("#status_select2_2").change(function(){
    //rehide content on change
    $('.status_docs2_2').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });


});
</script>
@endpush