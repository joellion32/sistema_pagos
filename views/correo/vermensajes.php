<?php
require_once 'views/layouts/header.php';
require_once 'views/layouts/lateral.php';
?>

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
        <a href="<?=base_url?>Correo/crear" class="btn btn-danger btn-block margin-bottom">Enviar Mensaje o Queja</a>

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
              <li class="active"><a href="<?=base_url?>Correo/bandeja&id=<?=$_SESSION['identificar']->id?>"><i class="fa fa-inbox"></i>Mensajes
                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ver Mensajes</h3>

              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3><?=$mensajes->titulo?></h3>  
                <?php if(isset($_SESSION['admin'])):?>
                <h5>De: Usuario
                  <span class="mailbox-read-time pull-right"><?=$mensajes->fecha?></span></h5>
                  <?php else:?>
                  <h5>De: Administrador
                  <span class="mailbox-read-time pull-right"><?=$mensajes->fecha?></span></h5>
                  <?php endif?>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                    <i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                    <i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                    <i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                  <i class="fa fa-print"></i></button>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
 
                <p><?=$mensajes->descripcion?></p>

              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<?php require_once 'views/layouts/footer.php';?>      