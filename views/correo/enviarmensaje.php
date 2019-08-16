<?php
require_once 'views/layouts/header.php';
require_once 'views/layouts/lateral.php';
?>

<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-md-3">
        <a href="<?=base_url?>correo/bandeja&id=<?=$_SESSION['identificar']->id?>" class="btn btn-danger btn-block margin-bottom">Volver a Bandeja</a>

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
              <li class="active"><a href="<?=base_url?>correo/bandeja&id=<?=$_SESSION['identificar']->id?>"><i class="fa fa-inbox"></i>Mensajes
                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
        <!-- /.col -->
        <?php if(isset($_SESSION['admin'])):?>
        <div class="col-md-9">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Enviar Mensaje</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?=base_url?>Correo/guardar" method="POST" class="form-horizontal">
              <div class="box-body">
              <?php $usuarios = Utils::showusuario()?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Para</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="usuario_id" id="exampleFormControlSelect1">
                  <?php while($usuario = $usuarios->fetch_object()):?>
                  <option value="<?=$usuario->id?>"><?=$usuario->name?></option>
                  <?php endwhile?>
                  </select> 
                  </div>
                </div>

                <div class="form-group">
                  <label for="titulo" class="col-sm-2 control-label">Titulo</label>

                  <div class="col-sm-10">
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo del Mensaje">
                  </div>
                </div>
                <!--CK EDITOR-->
                <textarea name="descripcion"></textarea>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Enviar Mensaje</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            </div>
            <!-- /.box-header -->
          <?php else:?>
          <!---------PARTE DE USUARIO---------->
            <div class="col-md-9">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Enviar Mensaje</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?=base_url?>Correo/guardar" method="POST" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Para</label>
                  <div class="col-sm-10">
                    <input type="number" name="usuario_id" class="form-control" id="inputEmail3" placeholder="Email" value="9" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="titulo" class="col-sm-2 control-label">Titulo</label>

                  <div class="col-sm-10">
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo del Mensaje">
                  </div>
                </div>
                <!--CK EDITOR-->
                <textarea name="descripcion"></textarea>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Enviar Mensaje a Administrador</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            </div>
            <!-- /.box-header -->

            <?php endif;?>
<?php require_once 'views/layouts/footer.php';?>  