<div class="row">
 <div class="col-lg-12">
  <table class="table table-bordered table-hover">
   <thead>
    <tr>
     <th>No</th>
     <td>{{ $loop->iteration }}</td>
    </tr>
    <tr>
     <th>Nama User</th>
     <td>{{ $project->nama_user }}</td>
    <tr>
    <tr>
     <th>Inisial</th>
     <td>{{ $project->inisial_user }}</td>
    <tr>
    <tr>
     <th>Produk</th>
     <td>{{ $project->nama_product }}</td>
    <tr>
     <th>Jenis Project</th>
     <td>{{ $project->nama_ptype }}</td>
    </tr>
    <tr>
     <th>Nama Mitra</th>
     <td>{{ $project->nama_mitra }}</td>
    </tr>
    <tr>
     <th>Nama Project</th>
     <td>{{ $project->nama_project }}</td>
    </tr>
    <tr>
     <th>Nama PIC Product</th>
     <td>{{ $project->nama_user }}</td>
    </tr>
    <tr>
     <th>Nama PIC PM</th>
     <td>{{ $project->nama_user }}</td>
    </tr>
    <tr>
     <th>Nama PIC AM</th>
     <td>{{ $project->nama_user }}</td>
    </tr>
    <tr>
     <th>Progress SIT</th>
     <td>{{ $project->progress_sit }}</td>
    </tr>
    <tr>
     <th>Progress UAT</th>
     <td>{{ $project->progress_uat }}</td>
    </tr>
    <tr>
     <th>Tanggal Assign</th>
     <td>{{ $project->tanggal_assign}}</td>
    </tr>
    <tr>
     <th style="width: 75px">Status</th>
     <td>{{ $project->id_pstat}}</td>
    </tr>
   </thead>
  </table>
 </div>
</div>