<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('') }}/img/frog-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    | Login
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://fonts.google.com/css?family=Balsamiq+Sans" rel="stylesheet" type="text/css"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"/>
  <!-- CSS Files -->
  <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ url('') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" >
  <link href="{{ url('') }}/css/Login.css" rel="stylesheet" >

  <style>
    body {
      background-image: url('{{ url('') }}/img/Abstract blue.jpg');
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
      <img class="content-image" src="{{ url('') }}/img/file.svg">
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
    <a href="/admin/searchdocs">
      <div class="content-overlay"></div>
      <img class="content-image" src="{{ url('') }}/img/email.svg">
      <div class="content-details fadeIn-top">
        <h3>Login as <strong>Admin</strong></h3>
        <i class="fas fa-sign-in-alt fa-2x" style="color: white"></i>
      </div>
    </a>
  </div>
</div>

</div>

<!-- Javascript -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>