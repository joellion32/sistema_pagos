<?php
require_once 'views/layouts/header.php';
require_once 'views/layouts/lateral.php';
?>

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Registrar Factura</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?=base_url?>Factura/guardar" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Id Factura</label>
              <input type="number" name="id_factura" class="form-control" id="exampleInputEmail1" placeholder="000">
              <a class="btn btn-danger" onclick="generar();">Generar Factura</a>
            </div>

              
                  <div class="form-group">
                  <?php $usuarios = Utils::showusuario()?>
                  <label for="usuario">Nombre de Usuario</label>
                  <select class="form-control" name="usuario_id" id="exampleFormControlSelect1" style="cursor:pointer;">
                  <?php while($usuario = $usuarios->fetch_object()):?>
                  <option value="<?=$usuario->id?>"><?=$usuario->name?></option>
                  <?php endwhile;?>     
                  </select>               
                  </div>


              <div class="form-group">
              <label for="exampleInputPassword1">Monto</label>
              <input type="number" name="monto" class="form-control" id="exampleInputPassword1" placeholder="RD$">
              </div>


            <div class="form-group">
                  <?php $usuarios = Utils::showusuario()?>
                  <label for="usuario">No. de Contrato</label>
                  <select class="form-control" name="contrato" id="exampleFormControlSelect1" style="cursor:pointer;">
                  <?php while($usuario = $usuarios->fetch_object()):?>
                  <option value="<?=$usuario->no_contrato?>"><?=$usuario->no_contrato?> - <?=$usuario->name?></option>
                  <?php endwhile;?>     
                  </select>               
                  </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>
      </div>


<?php require_once 'views/layouts/footer.php';?>