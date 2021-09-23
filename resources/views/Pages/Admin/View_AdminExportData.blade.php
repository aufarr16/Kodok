@extends('Templates.Admin')
@section('PageTitle','Export Data')
@section('content')
<title>
| {Admin} ExportData
</title>
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
      <a href="/admin/export/product" class="btn btn-warning info-box-icon"><i class="fas fa-download"></i></a>

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
@endsection

@push('scripts')

@endpush
