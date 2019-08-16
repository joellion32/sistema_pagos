
 <?php if(isset($_SESSION['admin'])):?>
  <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?=base_url?>Usuario/panel"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="<?=base_url?>Admin/usuarios"><i class="fa fa-group"></i> <span>Gestionar Usuarios</span></a></li>
        <li><a href="<?=base_url?>Factura/crear"><i class="fa fa-barcode"></i> <span>Facturas</span></a></li>
        <li><a href="<?=base_url?>Admin/facturas"><i class="fa fa-barcode"></i> <span>Gestionar Facturas</span></a></li>
        <li><a href="<?=base_url?>Correo/bandeja&id=<?=$_SESSION['identificar']->id?>"><i class="fa fa-envelope"></i> <span>Correo</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-gear"></i> <span>Opciones</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url?>Usuario/actualizar&id=<?=$_SESSION['identificar']->id?>">Actualizar Usuario</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!---------SI ES USUARIO----------->
<?php else:?>
<li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?=base_url?>Usuario/panel"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="<?=base_url?>Correo/bandeja&id=<?=$_SESSION['identificar']->id?>"><i class="fa fa-envelope"></i> <span>Correo</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-gear"></i> <span>Opciones</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url?>Usuario/actualizar&id=<?=$_SESSION['identificar']->id?>">Actualizar Usuario</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <?php endif?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content container-fluid">