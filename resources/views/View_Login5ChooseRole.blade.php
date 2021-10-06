<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('assets/img/frog-solid.svg') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | Login
  </title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
  <link href="{{ url('assets/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet" >
  <link href="{{ url('assets/Login.css') }}" rel="stylesheet" >

  <style>
    body {
      background-image: url('{{ url('assets/img/Abstract blue.jpg') }}');
      background-size: 100% 100%;}
  </style>
</head>

<div class="row role-panel">

<!-- < Role Engineer -- -->
<div class="role">
  <h3 class="title">Engineer</h3>
  <div class="chooserole">
    <a href="/engineer/projects">
      <div class="content-overlay"></div>
      <img class="content-image" src="{{ url('assets/img/file.svg') }}">
      <div class="content-details fadeIn-top">
        <h3>Login as <strong>Engineer</strong></h3>
        <i class="fas fa-sign-in-alt fa-2x" style="color: white"></i>
      </div>
    </a>
  </div>
</div>

<!-- < Role Admin -- -->
<div class="role">
  <h3 class="title">Admin</h3>
  <div class="chooserole">
    <a href="/admin/users">
      <div class="content-overlay"></div>
      <img class="content-image" src="{{ url('assets/img/email.svg') }}">
      <div class="content-details fadeIn-top">
        <h3>Login as <strong>Admin</strong></h3>
        <i class="fas fa-sign-in-alt fa-2x" style="color: white"></i>
      </div>
    </a>
  </div>
</div>

</div>

<!-- Javascript -->
