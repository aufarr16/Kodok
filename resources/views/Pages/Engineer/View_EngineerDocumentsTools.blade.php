@extends('Templates.Engineer')

@push('styles')
<link href="{{ url('') }}/css/docs-engineer.css" rel="stylesheet" />
<!-- @section('Welcome') 
<h4 style="float:right; margin-right:5px; margin-top:5px">Welcome, {{ auth()->user()->nama_user }}</h4>
@endsection -->
@section('PageTitle','Documents & Tools')
@section('content')
 <title>
  | {Engineer} Documents & Tools
</title>

	<div class="table-responsive-lg">
  	<table class="table1" id="table1" style="overflow:auto">
  		<thead>
  		<tr>
  			<th>No</th>
  			<th>Produk</th>
  			<th>Jenis Project</th>
  			<th>Nama Project</th>
  			<th>Docs</th>
  			<th>Tools</th>
  		</tr>
  		</thead>
  		<tbody>
  		<tr>
  			<td>1</td>
  			<td>ATMB</td>
  			<td>Sertifikasi</td>
  			<td>
  				Implementasi Layanan NSICCS ATM Bersama Melalui Delivery Channel ATM Standard Chartered Bank
  				<br>
  				<button onclick="createfolder()" type="button" class="btn-folder" title="Kirim ke email" id="email"><i class="fa fa-folder-open"></i>&nbsp Create Folder
          </button>
  				</br>
  			</td>
  			<td>
  					<button type="button" class="linkbtn" title="Download file ke PC">ISO8583ATMB-TRF 2.0 (20120719)</button>
  					<button type="button" class="linkbtn" title="Download file ke PC">ISO8583ATMB-STD 2.0 (20120719)</button>
  					<button type="button" class="linkbtn" title="Download file ke PC">ATM BERSAMA UAT FORM ONLINE TEST Ver 6.2.3 IBFT</button>
  			</td>
  			<td>
  					<button type="button" class="linkbtn" title="Download file ke PC">Simulator ATMB DEBIT QR v 2018.7.19.183</button>
  					<button href="#" type="button" class="linkbtn" title="Download file ke PC">Faker Terbaru v 2018.7.19.183</button>
  			</td>
  		</tr>
  		<tr>
  			<td>2</td>
  			<td>ATMB Debit</td>
  			<td>Internal Test</td>
  			<td>
  				Implementasi ATM Bersama Debit Bank CIMB NIAGA As Acquirer
  				<br>
          <button onclick="createfolder()" type="button" class="btn-folder" title="Kirim ke email" id="email"><i class="fa fa-folder-open"></i>&nbsp Create Folder
          </button>
  				</br>
  			</td>
  				<td>
  					<button href="#" type="button" class="linkbtn" title="Download file ke PC">ISO8583ATMB-TRF 2.0 (20120719)</button>
  					<button href="#" type="button" class="linkbtn" title="Download file ke PC">ISO8583ATMB-STD 2.0 (20120719)</button>
  					<button href="#" type="button" class="linkbtn" title="Download file ke PC">ATM BERSAMA UAT FORM ONLINE TEST Ver 6.2.3 IBFT</button>
  			</td>
  			<td>
  					<button href="#" type="button" class="linkbtn" title="Download file ke PC">Simulator ATMB DEBIT QR v 2018.7.19.183</button>
  					<button href="#" type="button" class="linkbtn" title="Download file ke PC">Faker Terbaru v 2018.7.19.183</button>
  			</td>
  		</tr>
  		</tbody>
  	</table>
<!-- table responsive -->
</div>
@endsection

@push('scripts')
<script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
<script>
  function createfolder () {
    Swal.fire({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000,
      background:'#D4F1F4',
      type: 'success',
      title: 'Folder berhasil dibuat'
      })
    }
</script>
<script type="text/javascript">
$('#table1').DataTable( { 
    "responsive": true,
    "processing": true,
    "serverSide": true,
    "pageLength": 10, 
    "searching": true,
});
</script>
@endpush
