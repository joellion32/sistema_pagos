<?php
class Utils{

public static function deletesession($name){
if(isset($_SESSION[$name])){
$_SESSION[$name] = null;
}

return $name;
}

public static function usuario(){
if(!isset($_SESSION['identificar'])){
header("location:".base_url);    
}
}


public static function administador(){
if(!isset($_SESSION['admin'])){
header("location:".base_url);    
}

}

public static function showusuario(){
require_once 'models/User.php';
$usuario = new User();
$usuarios = $usuario->todosusuarios();

return $usuarios;
}

}//cierre de la clase