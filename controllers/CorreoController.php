<?php
require_once 'models/Mensaje.php';

class CorreoController{

public function bandeja(){
Utils::usuario();     
//listar mensajes    
if(isset($_GET['id'])){    
$mensaje = new Mensaje();
$mensaje->setUser_Id($_GET['id']);
$mensajes = $mensaje->mostrarmensajes();

//Contar Mensajes
$contar = new Mensaje();
$contar->setUser_Id($_GET['id']);
$contarm = $contar->mostrarmensajes();
error_reporting(0);

include_once 'views/correo/entrada.php';
}
}//cierre de la funcion    

//para ver mensajes
public function vermensaje(){
Utils::usuario();    
if(isset($_GET['id'])){
$id = $_GET['id'];    
$mensaje = new Mensaje();
$mensaje->setId($id);
$mensajes = $mensaje->mensajes();

//Contar Mensajes
$contar = new Mensaje();
$contar->setUser_Id($id);
$contarm = $contar->mostrarmensajes();
error_reporting(0);
include_once 'views/correo/vermensajes.php';   
}    
 
}//cierre de la funcion

public function crear(){
Utils::usuario();      
include_once 'views/correo/enviarmensaje.php';    
}

public function guardar(){
if(isset($_POST)){
$mensaje = new Mensaje();
$mensaje->setUser_Id($_POST['usuario_id']);
$mensaje->setTitulo($_POST['titulo']);
$mensaje->setDescripcion($_POST['descripcion']);
$mensajes = $mensaje->guardar();
}

if($mensajes){
$_SESSION['mensaje'] = 'Mensaje enviado Correctamente nos comunicaremos con usted pronto';    

if(isset($_SESSION['admin'])){
 $_SESSION['mensaje'] = 'Mensaje enviado Correctamente';    
   
}

}

else{
$_SESSION['error'] = 'Error al enviar mensaje por favor intente mas tarde';    
}
    
header("location:".base_url."Correo/bandeja&id=".$_SESSION['identificar']->id);
}//ciere de la funcion

}//cierre de la clase