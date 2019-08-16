</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
<!-- REQUIRED JS SCRIPTS -->


<!-- jQuery 3 -->
<script src="<?=base_url?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="<?=base_url?>assets/js/adminlte.min.js"></script>

<!-- Generar Facturas -->
<script src="<?=base_url?>assets/js/generar.js"></script>

<!-- DataTables -->
<script src="<?=base_url?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});

CKEDITOR.replace( 'descripcion' );

</script>


</body>
</html>