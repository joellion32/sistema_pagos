<?php
require_once 'models/PagoFactura.php';
require_once 'models/Factura.php';

class PagoFacturaController{

public function guardar(){
Utils::usuario(); 
if(isset($_POST)){
$pago = new PagoFactura();
$pago->setUser_id($_POST['id_usuario']); 
$pago->setFactura_id($_POST['id_factura']);    
$pago->setTargeta($_POST['targeta']);
$pago->setFecha_Vencimiento($_POST['fecha']);
$pagos = $pago->guardar();
}

// para actualizar la accion
if(isset($_GET['id'])){
$factura = new Factura();
$factura->setId($_GET['id']);   
$pagada = $factura->accion(); 
}

// mandar mensajes
if($pagos){
$_SESSION['mensaje'] = 'La Transaccion fue hecha correctamente';  
}

else{
$_SESSION['error'] = 'Error en la transaccion intentelo mas tarde';     
}

header("location:".base_url."Usuario/panel");
}//cierre de la funcion guardar


}//cierre de la clase