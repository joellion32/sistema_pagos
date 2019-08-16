<?php
require_once 'views/layouts/header.php';
require_once 'views/layouts/lateral.php';
?>

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

<!-- Content Header (Page header) -->
<section class="content-header">
<h1>Correo</h1>
</section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="<?=base_url?>Correo/crear" class="btn btn-danger btn-block margin-bottom">Enviar Mensaje o Queja</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="<?=base_url?>Correo/bandeja&id=<?=$_SESSION['identificar']->id?>"><i class="fa fa-inbox"></i>Mensajes
                  <span class="label label-primary pull-right"></span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
       
        <!--Seccion de Mensajes-->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Bandeja de Entrada</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Buscar">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <div class="pull-right">
                  1/10
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                 <?php while($mensaje = $mensajes->fetch_object()):?>   
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <?php if(isset($_SESSION['admin'])):?>
                    <td class="mailbox-name"><a href="<?=base_url?>Correo/vermensaje&id=<?=$mensaje->id?>">Usuario</a></td>
                    <?php else:?>
                    <td class="mailbox-name"><a href="<?=base_url?>Correo/vermensaje&id=<?=$mensaje->id?>">Administrador</a></td>
                    <?php endif;?>
                    <td class="mailbox-subject"><b><?=$mensaje->titulo?></b>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"><?=$mensaje->fecha?></td>
                  </tr>
                  <?php endwhile;?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
          </div><!--Cierre del box box primary-->
        </div><!--Cierre de la columna-->
      </div><!--Cierre del Row-->
    </section><!--Cierre del contenedor-->
<?php require_once 'views/layouts/footer.php';?>            