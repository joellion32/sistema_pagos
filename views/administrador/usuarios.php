<?php
require_once 'views/layouts/header.php';
require_once 'views/layouts/lateral.php';
?>

<h1 style="text-align:center">Gestionar Usuarios</h1>
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

<!--Tabla de Usuarios-->
 <section class="content">
        <div class="row">
          <div class="col-xs-12">
                <div class="box">
                        <div class="box-header">Todos Los usuarios Registrados</div>    
                        <div class="box-body">  
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Cedula</th>
                                    <th>No. Contrato</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php while($usuario = $usuarios->fetch_object()):?>
                            <tr>
                            <td style="color:blue; font-weight:bold;"><?=$usuario->id?></td>
                            <td><?=$usuario->name?></td>
                            <td><?=$usuario->cedula?></td>
                            <td><?=$usuario->no_contrato?></td>
                            <td><a class="btn btn-primary" href="<?=base_url?>Admin/verusuario&id=<?=$usuario->id?>">Ver usuario</a></td>
                            <td><a class="btn btn-warning" href="<?=base_url?>Admin/asignar&id=<?=$usuario->id?>">Asignar Contrato</a></td>
                            <td><a href="<?=base_url?>Admin/borrar&id=<?=$usuario->id?>" class="btn btn-danger btn-small" onclick="confirm('estas seguro de que quieres eliminar');" title="eliminar">Eliminar</a></td>
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