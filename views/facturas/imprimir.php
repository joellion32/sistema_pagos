<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<div class="container">
    <div class="text-center">
         <h1>Factura No.<?=$facturas->id?></h1>
    </div>

     <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <!-- <h3 class="panel-title">Cabecera</h3> -->
					<hr>
                    <div class="row">
                        
                        <div class="col-md-5" style="background-color:white;">
                            <div class="form-group">
                                <b><label for="cliente" class="col-sm-2 control-label">Cliente:</label></b>
                                <div class="col-sm-10">
                                <label for="cliente" class="col-sm-2 control-label"><?=$_SESSION['identificar']->name?></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5" style="background-color:white;">
                            <div class="form-group">
                                <b><label for="cliente" class="col-sm-2 control-label">No. de Contrato:</label></b>
                                <div class="col-sm-10">
                                <label for="cliente" class="col-sm-2 control-label">  <?=$facturas->no_contrato?></label>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-4" style="background-color:white;">
                            <div class="form-group">
                              
                                <b><label for="fecha" class="col-sm-5 control-label">Fecha de vencimiento:</label></b>
                                <div class="col-sm-7">
                                <label for="cliente" class="col-sm-2 control-label">  <?=$facturas->fecha?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 target" style="background-color:white;">
                            <div class="form-group">
                                <b><label for="id" class="col-sm-3 control-label">No.Factura:</label></b>
                                <div class="col-sm-9">
                                <label for="cliente" class="col-sm-2 control-label">  <?=$facturas->id_factura?></label>                                </div>
                            </div>
                        </div>
                    </div> <!-- row -->
                    <br>
                    <div class="row">
                        <div class="col-md-6"> 
                          <address>
                           <strong class="">OFICINA VIRTUAL</strong><br class="">
                            Santo Domingo<br class="">
                            Tel: 809-215-1916<br class="">
                            Correo: oficinavirtual@hotmail.com<br class="">                          
                           </address>
                        </div>
                   </div> <!-- row -->
				</div> <!-- panel heading -->
				<div class="panel-body">
				  <h3 class="panel-title">Detalle</h3>
				  
				  <table class="table table-condensed">
					<thead>
					  <tr>
						<th class="">No. Factura</th>
						<th class="">cantidad</th>
						<th class="">precio</th>
						<th class="">tipo impuesto</th>
						<th class="">Total</th>
                        <th>Accion</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td class=""><?=$facturas->id_factura?></td>
						<td class="">1</td>
						<td class="">RD$<?=$facturas->monto?>.00</td>
						<td class="">Reducido 7%</td>
						<td class="">RD$<?=$facturas->monto?>.00</td>
                        <td><?=$facturas->accion?></td>
					  </tr>
					</tbody>
				  </table>
				</div> <!-- panel body -->
             </div> <!-- panel -->
        </div> <!-- col -->
    </div> <!-- row -->
    <div class="row text-center">
       <p class="">Sistema de Pago Todos los derechos son reservados 2018-2019</p>
    </div>
</div>    <!-- container -->

</body>
</html>