<?php
require_once 'views/layouts/header.php';
require_once 'views/layouts/lateral.php';
?>

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Pagar Factura</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?=base_url?>PagoFactura/guardar&id=<?=$facturas->id?>" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Id Factura</label>
              <input type="number" name="id_factura" class="form-control" id="exampleInputEmail1" value="<?=$facturas->id?>" readonly>
            </div>

            <div class="form-group">
            <label for="usuario">Id usuario</label>
            <input type="text" name="id_usuario" class="form-control" id="usuario" value="<?=$_SESSION['identificar']->id?>" readonly>
            </div>


            <div class="form-group">
              <label for="exampleInputEmail1">Targeta de Credito o Debito</label>
              <input type="text" name="targeta" class="form-control" id="exampleInputEmail1" placeholder="000-000-000">
            </div>

                    
            <div class="form-group">
              <label for="exampleInputPassword1">Fecha de Vecimiento</label>
              <input type="text" name="fecha" class="form-control" id="exampleInputPassword1" value="<?=$facturas->fecha?>" readonly>
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-danger">Pagar</button>
          </div>
        </form>
      </div>


<?php require_once 'views/layouts/footer.php';?>