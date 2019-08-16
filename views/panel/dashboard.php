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

<!--panel para los usuarios-->
<?php if(!isset($_SESSION['admin'])):?>
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <h3><?=$contarfacturas[0]?></h3>
              <p>Facturas Registradas</p>
            </div>
            <div class="icon">
              <i class="fa fa-barcode"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$contarmensajes[0]?></h3> 
              <p>Mensajes</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
      </div><!--Cierre de Row-->


<!--Tabla de Facturas-->
 <section class="content">
        <div class="row">
          <div class="col-xs-12">
                <div class="box">
                        <div class="box-header">Todas Las Facturas Pagadas</div>    
                        <div class="box-body">  
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id_Factura</th>
                                    <th>Monto</th>
                                    <th>No. de Contrato</th>
                                    <th>Ruta de Recogida</th>
                                    <th>Fecha de Vencimiento</th>
                                    <th>Accion</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php while($factura = $facturas->fetch_object()):?>
                            <tr>
                            <td><?=$factura->id_factura?></td>
                            <td>RD$<?=$factura->monto?>.00</td>
                            <td><b><?=$factura->no_contrato?></b></td>
                            <td><b><?=$factura->direccion?></b></td>
                            <td><?=$factura->fecha?></td>
                            <td><?=$factura->accion?></td>
                            <td><a href="<?=base_url?>Factura/pagar&id=<?=$factura->id?>" class="btn btn-primary btn-small" title="pagar">Pagar</a></td>
                            <td><a href="<?=base_url?>Factura/imprimir&id=<?=$factura->id?>" class="btn btn-warning btn-small" target="_blank" title="imprimir">Impimir</a></td>
                            </tr> 
                            <?php endwhile;?>
                            </tbody>
                        </table>
                        </div>        
                        </div><!--Cierre del Box-->
                        </div><!--Cierre de la columna-->
                        </div><!--Cierre del Row-->
                        </section>
                        <?php endif;?>
                    <!--panel para los usuarios-->
<?php require_once 'views/layouts/footer.php';?>

