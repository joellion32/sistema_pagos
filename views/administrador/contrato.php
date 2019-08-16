<?php
require_once 'views/layouts/header.php';
require_once 'views/layouts/lateral.php';
?>


<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Asignar Contrato</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?=base_url?>Admin/guardarcontrato&id=<?=$contratos->id?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre Usuario</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" value="<?=$contratos->name?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No. Contrato</label>

                  <div class="col-sm-10">
                    <input type="text" name="contrato" class="form-control" id="inputPassword3" placeholder="No. Contrato" required>
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>













<?php require_once 'views/layouts/footer.php';?>