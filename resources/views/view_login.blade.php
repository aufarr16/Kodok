<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <!-- <link href='https://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'> -->
  <link href='https://fonts.google.com/css?family=Balsamiq+Sans rel='stylesheet' type='text/css'>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet" >
  <link href="{{ url('') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" >
  <link href="{{ url('') }}/css/Login.css" rel="stylesheet" >
  <!-- <link href="../assets/css/plugin/bootstrap-material-design.min.css" rel="stylesheet" /> -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!--<link href="../assets/demo/demo.css" rel="stylesheet" /> -->

  	<style>
		body {
			background-image: url('{{ url('') }}/img/Abstract blue.jpg');
			background-size: 100% 100%;}
	</style>
</head>

<!-- Dialog Login-->
<div class="box">
  <h3>Login</h3>
  <form role="form" method="POST" action="https://accounts.artajasa.co.id/auth/login">
    <div class="group">      
      
      <input class="inputMaterial" type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
        
      <label><span class="icon fas fa-user fa-lg" style="position: absolute; color:#A7DCF0; margin-left: -25px"></span>Username</label>
    </div>
      <div class="group">      
      <input class="inputMaterial" type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label><span class="fas fa-unlock-alt fa-lg" style="position: absolute; color:#A7DCF0; margin-left: -25px"></span>Password</label>
    </div>
    <button class="btn-login" data-hover="GO!" type="submit" name="sign-in"><div>Ready to Work?</div></button>
    <!-- <div class="inputBox">
      <label>Username</label>
      <input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);" value="">
      <span class="underline"></span>
      
    </div>
    <div class="inputBox">
      <input type="password" name="password" required value=""
             onkeyup="this.setAttribute('value', this.value);"
             pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{14,}"
             title="Must contain at least one number and one uppercase and lowercase letter, and at least 14 or more characters">
      <label>Password</label>
    </div>
    <input type="submit" name="sign-in" value="Ready to Work"> -->
  </form>
</div>

<!-- Javascript -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>