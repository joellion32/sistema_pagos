<?php
require_once 'models/Factura.php';
// HTML2PDF
use Spipu\Html2Pdf\Html2Pdf;

class FacturaController{

public function crear(){
Utils::administador();  
include_once 'views/facturas/crear.php';  
}

public function guardar(){
if(isset($_POST)){
$factura = new Factura();
$factura->setId_Factura($_POST['id_factura']);
$factura->setMonto($_POST['monto']);
$factura->setUser_Id($_POST['usuario_id']);
$factura->setContrato($_POST['contrato']);
$facturas = $factura->save();
} 

if($facturas){
$_SESSION['mensaje'] = 'Factura Generada Correctamente';     
}

else{
$_SESSION['error'] = 'Error al Generar la factura';    
}

header("location:".base_url."Usuario/panel");
}//cierre de la funcion guardar


public function pagar(){
Utils::usuario();    
if(isset($_GET['id'])){
$id = $_GET['id'];
$factura = new Factura();
$factura->setId($id);
$facturas = $factura->pagarfacturas();
require_once 'views/facturas/pagar.php';
}    
}


public function borrar(){
Utils::administador();    
if(isset($_GET['id'])){
$id = $_GET['id'];
$factura = new Factura();
$factura->setId($id);
$facturas = $factura->delete();  
}
if($facturas){
$_SESSION['mensaje'] = 'Factura Eliminada Correctamente';     
}

else{
$_SESSION['error'] = 'La Factura esta pagada no se puede borrar';    
}

header("location:".base_url."Admin/facturas");
}//cierre de la funcion borrar

//opcion para imrpimir
public function imprimir(){
if(isset($_GET['id'])){
$imprimir = new Html2Pdf();
$factura = new Factura();
$factura->setId($_GET['id']);
$facturas = $factura->imprimir();
ob_start();
require_once 'views/facturas/imprimir.php';
$html = ob_get_clean();

$imprimir->WriteHtml($html);
$imprimir->output('pdf_generado.pdf');
}
}//cierre de la funcion

}//cierre de la clase