<?php
require_once 'views/layouts/header.php';
require_once 'views/layouts/lateral.php';
?>

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Actualizar Usuario</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?=base_url?>Usuario/update&id=<?=$usuarios->id?>" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" value="<?=$usuarios->name?>">
            </div>

            <div class="form-group">
            <label for="cedula">Cedula</label>
            <input type="text" name="cedula" class="form-control" id="cedula" value="<?=$usuarios->cedula?>">
            </div>

            <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" class="form-control" id="direccion" value="<?=$usuarios->direccion?>">
            </div>

             <div class="form-group">
              <label for="telefono">Telefono</label>
              <input type="text" name="telefono" class="form-control" id="telefono" value="<?=$usuarios->telefono?>">
            </div>

            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" value="<?=$usuarios->email?>">
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>


<?php require_once 'views/layouts/footer.php';?>