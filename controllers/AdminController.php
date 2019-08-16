<?php
require_once 'models/Factura.php';
require_once 'models/User.php';
require_once 'models/PagoFactura.php';

class AdminController{

public function usuarios(){
Utils::administador();
$usuario = new User();
$usuarios = $usuario->todosusuarios();
include_once 'views/administrador/usuarios.php';
}

//MOSTRAR TODAS LAS FACTURAS REGISTRADAS
public function facturas(){
Utils::administador();
$factura = new Factura();
$facturas = $factura->todasfacturas();

//MOSTRAR LAS FACTURAS PAGADAS
$pagada = new PagoFactura();
$pagadas = $pagada->pagadaall();

include_once 'views/administrador/facturas.php';
}//cierre de la function


public function verusuario(){
Utils::administador();    
if(isset($_GET['id'])){
$id = $_GET['id'];
$usuario = new User();
$usuario->setId($id);
$usuarios = $usuario->find();
} 

require_once 'views/administrador/verusuario.php';
}

/*-----------ASIGNAR CONTRATOS-------------------*/
public function asignar(){
Utils::administador();    
if(isset($_GET['id'])){
$contrato = new User();
$contrato->setId($_GET['id']);
$contratos = $contrato->find();
require_once 'views/administrador/contrato.php';
}
}

public function guardarcontrato(){
if(isset($_POST)){
$contrato = new User();
$contrato->setId($_GET['id']);
$contrato->setNo_Contrato($_POST['contrato']);
$contratos = $contrato->gcontrato();  
} 

if($contratos){
$_SESSION['mensaje'] = 'Contrato Asignado Correctamente';    
}

else{
$_SESSION['error'] = 'Error al Asignar Contrato';    
}

header("location:".base_url."Admin/usuarios");
}
/*-----------CIERRE CONTRATOS-------------------*/

public function borrar(){
Utils::administador();    
if(isset($_GET['id'])){
$id = $_GET['id'];
$usuario = new User();
$usuario->setId($id);
$usuarios = $usuario->delete();
} 

if($usuarios){
$_SESSION['mensaje'] = 'Usuario Eliminado Correctamente';    
}

else{
$_SESSION['error'] = 'Error al Eliminar Usuario';    
}
header("location:".base_url."Admin/usuarios");
}//cierre de la funcion

public function borrarfactura(){
Utils::administador();    
if(isset($_GET['id'])){
$id = $_GET['id'];
$pago = new PagoFactura();
$pago->setId($id);
$pagos = $pago->delete();
} 

if($pagos){
$_SESSION['mensaje'] = 'Factura Eliminada Correctamente';    
}

else{
$_SESSION['error'] = 'Error al Eliminar Factura';    
}

header("location:".base_url."Admin/facturas");
}

}//Cierre de la Clase