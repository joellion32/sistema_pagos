<?php
require_once 'models/User.php';
require_once 'models/Factura.php';
require_once 'models/Mensaje.php';
require_once 'models/PagoFactura.php';

class UsuarioController{
public function index(){
require_once 'views/home.php';
}   

public function registro(){
require_once 'views/usuarios/registrar.php';   
}

public function registrar(){
if(isset($_POST)){
$usuario = new User();
$usuario->setName($_POST['nombre']);
$usuario->setCedula($_POST['cedula']); 
$usuario->setDireccion($_POST['direccion']); 
$usuario->setTelefono($_POST['telefono']);  
$usuario->setEmail($_POST['email']);
$usuario->setPassword($_POST['password']);
$guardar = $usuario->save();

if($guardar){
$_SESSION['mensaje'] = 'Usuario Registrado Correctamente';  
header("location:".base_url."Usuario/login");  
}

else{
$_SESSION['error'] = 'Error al Registrar Usuario';
header("location:".base_url."Usuario/registro");    
}

} 


}//cierre de la clase

public function login(){
require_once 'views/usuarios/login.php';   
}

//para inciar la session
public function iniciar(){
if(isset($_POST)){    
$usuario = new User();
$usuario->setEmail($_POST['email']);
$usuario->setPassword($_POST['password']);
$identificar = $usuario->login();

}
// para guardar los datos del usuario el una session objeto
if($identificar && is_object($identificar)){
$_SESSION['identificar'] = $identificar;  
header("location:" .base_url."Usuario/panel");   
}


else{
$_SESSION['error'] = "Error al iniciar sesion email o contraseña son incorrectos"; 
header("location:" .base_url."Usuario/login");      
}

//para verificar si el usuario es administrador
if($identificar->rol == 'admin'){
$_SESSION['admin'] = true;
}


}//cierre de la funcion iniciar

public function logout(){
if(isset($_SESSION['identificar'])){
unset($_SESSION['identificar']);
} 
if(isset($_SESSION['admin'])){
unset($_SESSION['admin']);
} 

header("location:" .base_url);
}

/*----------------------------------------------------------------------------*/
// LADO DEL PANEL DE ADMINISTRACION DE USUARIO

public function panel(){
Utils::usuario(); 
$id = $_SESSION['identificar']->id;

if(!isset($_SESSION['admin'])){

//Listar Facturas
$factura = new Factura();
$factura->setUser_Id($id);
$facturas = $factura->mostrarfacturas();

//Contar Facturas
$contarf = new Factura();
$contarf->setUser_Id($id);
$contarfacturas = $contarf->contar();

//Contar Mensajes
$contarm = new Mensaje();
$contarm->setUser_Id($id);
$contarmensajes = $contarm->contarmensajes();

require_once 'views/panel/dashboard.php';
}
/*--------------------------PARTE DEL ADMINISTRADOR----------------------*/
else{
Utils::administador();    
// contar facturas registradas    
$contarfactura = new Factura();
$contarfacturas = $contarfactura->contarfacturas();

//contar facturas pagadas
$contarpagada = new PagoFactura();
$contarpagadas = $contarpagada->contarpagadas();

//contar usuarios
$contarusuario = new User();
$contarusuarios = $contarusuario->contarusuarios();

//contar mensajes
$contarm = new Mensaje();
$contarm->setUser_Id($id);
$contarmensajes = $contarm->contarmensajes();

//SACAR TODAS LAS FACTURAS
$pagada = new PagoFactura();
$pagadas = $pagada->pagadaall();
require_once 'views/administrador/panel.php';    
}

}//cierre de la funcion panel



//mostrar datos del usuario
public function actualizar(){
if(isset($_GET['id'])){
$id = $_GET['id'];
$usuario = new User();
$usuario->setId($id);
$usuarios = $usuario->mostrarusuario();    
}    
require_once 'views/usuarios/actualizar.php';   
}

//actualizar datos del usuario
public function update(){
if(isset($_GET['id'])){
$id = $_GET['id'];
}

$usuario = new User();
$usuario->setId($id);
$usuario->setName($_POST['nombre']);
$usuario->setCedula($_POST['cedula']);
$usuario->setDireccion($_POST['direccion']);
$usuario->setTelefono($_POST['telefono']);
$usuario->setEmail($_POST['email']);
$usuarios = $usuario->actualizarusuario();

if($usuarios){
$_SESSION['mensaje'] = 'Usuario actualizado correctamente';    
}

else{ 
$_SESSION['error'] = 'Error al actualizar usuario';    

}

header("location:".base_url."Usuario/panel");
}



}//cierre de la clase