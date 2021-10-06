@extends('Templates.Admin')
@section('PageTitle','Export Import Data')
@section('content')
<title>
| {Admin} ExportImportData
</title>

<div class="card card-lightblue card-tabs">
  <div class="card-header p-0 pt-1 border-bottom-0">
    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#export" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Export Database</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#import" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="true">Import Database</a>
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
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <a href="/admin/export/mitra" class="btn btn-success info-box-icon"><i class="fas fa-download"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Export Mitra</strong></font></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <a href="/admin/export/product" class="btn btn-warning info-box-icon"><i class="fas fa-download" style="color:  blue"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Export Product</strong></font></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

        <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
              <a href="/admin/export/project" class="btn btn-danger info-box-icon"><i class="fas fa-download"></i></a>

            <div class="info-box-content">
              <span class="info-box-text"><font size="4"><strong>Export Project</strong></font></span>
            </div>
          <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
              <a href="/admin/export/handover" class="btn bg-purple info-box-icon"><i class="fas fa-download"></i></a>

            <div class="info-box-content">
              <span class="info-box-text"><font size="4"><strong>Export Project Handover</strong></font></span>
            </div>
          <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
              <a href="/admin/export/pketerangan" class="btn bg-pink info-box-icon"><i class="fas fa-download"></i></a>

            <div class="info-box-content">
              <span class="info-box-text"><font size="4"><strong>Export Project Keterangan</strong></font></span>
            </div>
          <!-- /.info-box-content -->
          </div>
        </div>

        </div>

        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <a href="/admin/export/pstat" class="btn bg-gray info-box-icon"><i class="fas fa-download"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Export Project Status</strong></font></span>
              </div>
            <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <a href="/admin/export/ptype" class="btn bg-navy info-box-icon"><i class="fas fa-download"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Export Type Project</strong></font></span>
              </div>
            <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <a href="/admin/export/ulevel" class="btn bg-orange info-box-icon"><i class="fas fa-download"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Export User Levels</strong></font></span>
              </div>
            <!-- /.info-box-content -->
            </div>
          </div>
            
        </div>
      </div>

      <!-- IMPORT DATABASE -->
      <div class="tab-pane fade" id="import" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
        <div class="row">

          <div class="col-md-4 col-sm-6 col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/admin/import/project" method="post" enctype="multipart/form">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box ">
              <a href="#" class="btn btn-info info-box-icon"><i class="fas fa-download"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Import User</strong></font></span>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <a href="#" class="btn btn-success info-box-icon"><i class="fas fa-download"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Import Mitra</strong></font></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <a href="#" class="btn btn-warning info-box-icon"><i class="fas fa-download"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Import Product</strong></font></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

      <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
              <a href="#" class="btn btn-danger info-box-icon"><i class="fas fa-download"></i></a>

            <div class="info-box-content">
              <span class="info-box-text"><font size="4"><strong>Import Project</strong></font></span>
            </div>
          <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
              <a href="#" class="btn bg-purple info-box-icon"><i class="fas fa-download"></i></a>

            <div class="info-box-content">
              <span class="info-box-text"><font size="4"><strong>Import Project Handover</strong></font></span>
            </div>
          <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
              <a href="#" class="btn bg-pink info-box-icon"><i class="fas fa-download"></i></a>

            <div class="info-box-content">
              <span class="info-box-text"><font size="4"><strong>Import Project Keterangan</strong></font></span>
            </div>
          <!-- /.info-box-content -->
          </div>
        </div>

        </div>

        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <a href="#" class="btn bg-gray info-box-icon"><i class="fas fa-download"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Import Project Status</strong></font></span>
              </div>
            <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <a href="#" class="btn bg-navy info-box-icon"><i class="fas fa-download"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Import Type Project</strong></font></span>
              </div>
            <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <a href="#" class="btn bg-orange info-box-icon"><i class="fas fa-download"></i></a>
              <div class="info-box-content">
                <span class="info-box-text"><font size="4"><strong>Import User Levels</strong></font></span>
              </div>
            <!-- /.info-box-content -->
            </div>
          </div>
            
        </div>
      </div>
    </div>
  </div>

</div>



@endsection

@push('scripts')

@endpush
