@extends('Templates.Engineer')
@push('styles')

@section('PageTitle', 'Upload Documents')
@section('content')
    <title>
        | {Engineer} Upload Documents
    </title>

<div class="card card-lightblue card-tabs">
  <div class="card-header p-0 pt-1 border-bottom-0">
    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#export" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Nodin dari Div Terkait</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#import" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="true">Risalah Rapat dan Daftar Hadir</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#import" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="true">Jadwal Pengujian</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#import" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="true">Laporan Harian</a>
      </li>

    </ul>
  </div>
  <div class="card-body">
    <!-- EXPORT DATABASE -->
    <div class="tab-content" id="custom-tabs-three-tabContent">
      <div class="tab-pane fade active show" id="export" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box ">
              <a href="/admin/export/user" class="btn btn-info info-box-icon"><i class="fas fa-download"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Export User</strong></font></span>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
      </div>

      <!-- IMPORT DATABASE -->
      <div class="tab-pane fade" id="import" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
        <div class="row">

          <div class="col-md-12">
            <!-- general form elements -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>






<div class="col-md-12">
	<div class="card card-outline card-primary collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">Nodin dari Div Terkait</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>
<!-- Risalah Rapat dan Daftar Hadir -->
	<div class="card card-outline card-primary collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">Risalah Rapat dan Daftar Hadir</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>

	<!-- Jadwal Pengujian -->
	<div class="card card-outline card-info collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">Jadwal Pengujian</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>

		<!-- Laporan Harian -->
	<div class="card card-outline card-danger collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">Laporan Harian</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>

			<!-- Berita Acara (BA) -->
	<div class="card card-outline card-warning collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">Berita Acara (BA)</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>

				<!-- Form Pengujian -->
	<div class="card card-outline card-success collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">Form Pengujian</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>

	<!-- Dokumen Lainnya -->
	<div class="card card-outline card-primary collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">Dokumen Lainnya</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>

		<!-- Memo Dinas dari SDTL -->
	<div class="card card-outline card-info collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">Memo Dinas dari SDTL</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>

			<!-- Nodin dari ITO1 -->
	<div class="card card-outline card-danger collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">Nodin dari ITO1</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>

				<!-- chat -->
	<div class="card card-outline card-warning collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">chat</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>

	<!-- log -->
	<div class="card card-outline card-success collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">log</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>

		<!-- report -->
	<div class="card card-outline card-primary collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">report</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="#" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info">Submit</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  	</form>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Document</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
                <tr>
                	<td class="text-center">hahah</td>
                	<td class="text-center">hahaha.pdf</td>
                </tr>
            </tbody>
        </table>
	</div>
	</div>
</div>
@endsection

@push('scripts')


@endpush
