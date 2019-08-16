<?php
require_once 'views/layouts/header.php';
require_once 'views/layouts/lateral.php';
?>



<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-group"></i> Datos del usuario <?=$usuarios->name?></h3>
            </div>
      <div class="box-body" style="font-size:15px; !important">
      <b>Nombre:</b><p><?=$usuarios->name?></p>

      <b>Cedula o Pasaporte:</b><p><?=$usuarios->cedula?></p>

      <b>Direccion:</b><p><?=$usuarios->direccion?></p>

      <b>Telefono:</b><p><?=$usuarios->telefono?></p>

      <b>Correo:</b><p><?=$usuarios->email?></p>

      <b>Fecha de Creacion:</b><p><?=$usuarios->fecha?></p>

      <b>Rol:</b><p><?=$usuarios->rol?></p>

      <b>No. Contrato:</b><p><?=$usuarios->no_contrato?></p>
      </div>
    </div>












<?php require_once 'views/layouts/footer.php';?>