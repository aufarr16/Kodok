@extends('Templates.Engineer')
@push('styles')

@section('PageTitle', 'Upload Documents')
@section('content')
    <title>
        | {Engineer} Upload Documents
    </title>

<div class="col-md-12">
	<div class="card card-outline card-primary collapsed-card">
  		<div class="card-header">
    	<h3 class="card-title">Nota Dinas Penugasan</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <input type="hidden" name="dtype" value="1">
	            <input type="hidden" name="idproj" value="{{ $id_project }}">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
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

	<div class="row">
		<div class="col-md-6 col-sm-3 col-12">
			<div class="card card-outline card-primary collapsed-card">
				<div class="card-header">
					<h3 class="card-title">MOM Kickoff Meeting</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				      	<input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="2">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-3 col-12">
			<div class="card card-outline card-primary collapsed-card">
				<div class="card-header">
					<h3 class="card-title">MOM Pra Migrasi</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				       	<input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="8">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

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
	  	<div class="row">
		<div class="col-md-6 col-sm-3 col-12">
			<div class="card card-outline card-primary collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Jadwal Pengujian</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				      	<input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="3">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-3 col-12">
			<div class="card card-outline card-primary collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Jadwal Migrasi</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				       	<input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="9">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>
	</div>

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
	  	<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <input type="hidden" name="dtype" value="20">
	            <input type="hidden" name="idproj" value="{{ $id_project }}">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
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
		<label> Silahkan Upload</label>

		<div class="row">
		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-warning collapsed-card">
				<div class="card-header">
					<h3 class="card-title">BAE</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="6">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-warning collapsed-card">
				<div class="card-header">
					<h3 class="card-title">BAKO</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="4">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-warning collapsed-card">
				<div class="card-header">
					<h3 class="card-title">BATO</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="10">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>
		</div>

		<div class="row">
		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-warning collapsed-card">
				<div class="card-header">
					<h3 class="card-title">BASTK</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="17">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-warning collapsed-card">
				<div class="card-header">
					<h3 class="card-title">BASTD</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="16">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>
	</div>

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
		<label> Silahkan Upload</label>

		<div class="row">
		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-success collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Test Script Pra UAT</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="21">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-success collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Test Script UAT</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="22">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-success collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Test Script Stress Test 1</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="24">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>
		</div>

		<div class="row">
		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-success collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Test Script Regresi 1</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="23">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-success collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Test Script Regresi 2</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="30">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-success collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Test Script Stress Test 2</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="31">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>
		</div>

		<div class="row">
		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-success collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Form Pra TO</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="25">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-success collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Form TO</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="26">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-success collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Laporan Harian Monitoring</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="11">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>
		</div>

		<div class="row">
		<div class="col-md-4 col-sm-6 col-12">
			<div class="card card-outline card-success collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Laporan Final Monitoring</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				        <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="12">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>
		
		</div>

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
		<div class="row">
		<div class="col-md-6 col-sm-3 col-12">
			<div class="card card-outline card-primary collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Checklist Pengujian</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				      	<input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="18">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-3 col-12">
			<div class="card card-outline card-primary collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Dokumen Lain - Lain</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				       	<input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="19">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>
		</div>

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
	  	<div class="row">
		<div class="col-md-6 col-sm-3 col-12">
			<div class="card card-outline card-primary collapsed-card">
				<div class="card-header">
					<h3 class="card-title">Memo Dinas Monitoring</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				      	<input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="13">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-3 col-12">
			<div class="card card-outline card-primary collapsed-card">
				<div class="card-header">
					<h3 class="card-title">BA Serah Terima Monitoring</h3>

		    <div class="card-tools">
		      <button type="button" class="btn btn-tool" data-card-widget="collapse">
		        <i class="fas fa-plus"></i>
		      </button>
		    </div>
		    <!-- /.card-tools -->
			</div>
			<div class="card-body">
				<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
				  <div class="form-group">
				    <label for="file">File input</label>
				    <div class="input-group">
				      <div class="custom-file">
				       	<input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            		<input type="hidden" name="dtype" value="14">
	            		<input type="hidden" name="idproj" value="{{ $id_project }}">
				        <label class="custom-file-label" for="file">Choose file</label>
				      </div>
				      <div class="input-group-append">
				        <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
				</form>
			</div>
			</div>
		</div>
		</div>

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
    	<h3 class="card-title">Nodin Balasan</h3>

	    <div class="card-tools">
	      <button type="button" class="btn btn-tool" data-card-widget="collapse">
	        <i class="fas fa-plus"></i>
	      </button>
	    </div>
	    <!-- /.card-tools -->
	</div>
  		<!-- /.card-header -->
	<div class="card-body">
	  	<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <input type="hidden" name="dtype" value="15">
	            <input type="hidden" name="idproj" value="{{ $id_project }}">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
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
	  	<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <input type="hidden" name="dtype" value="27">
	            <input type="hidden" name="idproj" value="{{ $id_project }}">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
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
	  	<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <input type="hidden" name="dtype" value="28">
	            <input type="hidden" name="idproj" value="{{ $id_project }}">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
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
	  	<form action="/engineer/upload" method="POST" enctype="multipart/form-data">
	    @csrf
	    <div class="card-body">
	      <div class="form-group">
	        <label for="file">File input</label>
	        <div class="input-group">
	          <div class="custom-file">
	            <input type="file" name="uploadedfile" class="custom-file-input" id="uploadedfile">
	            <input type="hidden" name="dtype" value="29">
	            <input type="hidden" name="idproj" value="{{ $id_project }}">
	            <label class="custom-file-label" for="file">Choose file</label>
	          </div>
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-info" id="btn-submit">Submit</button>
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
