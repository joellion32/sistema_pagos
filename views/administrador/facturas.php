<?php
require_once 'views/layouts/header.php';
require_once 'views/layouts/lateral.php';
?>

<h1 style="text-align:center">Gestionar Facturas</h1>

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

<h3>Facturas Registradas</h3>
<!--Tabla de Usuarios-->
 <section class="content">
        <div class="row">
          <div class="col-xs-12">
                <div class="box">
                        <div class="box-header">Todas Las facturas Registradas</div>    
                        <div class="box-body">  
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Id_Factura</th>
                                    <th>Monto</th>
                                    <th>Nombre usuario</th>
                                    <th>No.de Contrato</th>
                                    <th>Fecha de Vencimiento</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php while($factura = $facturas->fetch_object()):?>
                            <tr>
                            <td style="color:red; font-weight:bold;"><?=$factura->id?></td>
                            <td><?=$factura->id_factura?></td>
                            <td>RD$<?=$factura->monto?>.00</td>
                            <td style="color:blue; font-weight:bold;"><a href="<?=base_url?>Admin/verusuario&id=<?=$factura->user_id?>"><?=$factura->name?></a></td>
                            <td><b><?=$factura->no_contrato?></b></td>
                            <td><?=$factura->fecha?></td>
                            <td><a href="<?=base_url?>Factura/borrar&id=<?=$factura->id?>" class="btn btn-danger btn-small" onclick="confirm('estas seguro de que quieres eliminar');" title="eliminar">Eliminar</a></td>
                            </tr> 
                            <?php endwhile;?>
                            </tbody>
                        </table>
                        </div>        
                        </div><!--Cierre del Box-->
                        </div><!--Cierre de la columna-->
                        </div><!--Cierre del Row-->
                        </section>
<!-----------------------------------TODAS LAS FACTURAS PAGADAS-------------------------------->

<h3>Facturas Pagadas</h3>
<!--Tabla de Usuarios-->
<section class="content">
        <div class="row">
          <div class="col-xs-12">
                <div class="box">
                        <div class="box-header">Todas Las facturas Pagadas</div>    
                        <div class="box-body">  
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Usuario_Id</th>
                                    <th>Factura_id</th>
                                    <th>Fecha</th>
                                    <th>Fecha de Vencimiento</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php while($pagada = $pagadas->fetch_object()):?>
                            <tr>
                            <td style="color:blue; font-weight:bold;"><a href="<?=base_url?>Admin/verusuario&id=<?=$pagada->user_id?>"><?=$pagada->user_id?></a></td>
                            <td style="color:red; font-weight:bold;"><?=$pagada->id_factura?></td>
                            <td><?=$pagada->fecha?></td>
                            <td><?=$pagada->fecha_vencimiento?></td>
                            <td><a href="<?=base_url?>Admin/borrarfactura&id=<?=$pagada->id?>" class="btn btn-danger btn-small" onclick="confirm('estas seguro de que quieres eliminar');" title="eliminar">Eliminar</a></td>
                            </tr> 
                            <?php endwhile;?>
                            </tbody>
                        </table>
                        </div>        
                        </div><!--Cierre del Box-->
                        </div><!--Cierre de la columna-->
                        </div><!--Cierre del Row-->
                        </section>










<?php require_once 'views/layouts/footer.php';?>