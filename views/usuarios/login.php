<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Oficina Virtual STDGO| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url?>assets/css/AdminLTE.min.css">
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background-image:url('https://medioambienteynaturaleza.com/wp-content/uploads/2015/08/Fondos-de-pantalla-de-naturaleza-ag.jpg')">
<div class="login-box" style="padding-top:-20px;">
  <div class="login-logo">
  <img style="width:20%;" src="<?=base_url?>assets/img/asdo.png" alt="logo">
    <br>
    <a href="#"><b style="color:#66060;">Oficina Virtual</b></a>
  </div>
  <!-- /.login-logo -->
<!--para captura de mensajes-->
<?php if(isset($_SESSION['mensaje'])):?>
<div class="alert alert-success" role="alert"><?=$_SESSION['mensaje'];?></div>
<?php endif;?>

<?php if(isset($_SESSION['error'])):?>
<div class="alert alert-danger" role="alert"><?=$_SESSION['error'];?></div>
<?php endif;?>

<?php Utils::deletesession('mensaje')?>
<?php Utils::deletesession('error')?>
<!--cierre captura de mensajes-->

  <div class="login-box-body">
    <p class="login-box-msg">Logueate para iniciar sesion</p>

    <form action="<?=base_url?>Usuario/iniciar" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br><br>

    <a href="#">He Olvidado Mi Contraseña</a><br>
    <a href="<?=base_url?>Usuario/registro" class="text-center">No estas registrado registrate</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?=base_url?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>
