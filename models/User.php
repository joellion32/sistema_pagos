<?php

class User{

public $id; 
public $no_contrato;  
public $name;
public $cedula;
public $direccion;
public $telefono;    
public $email;
public $password;
public $fecha;
public $rol;    
public $db;

public function __construct(){
$this->db = Database::conexion();    
}

//METODOS GETTERS
public function getId(){
return $this->id;    
}

public function getNo_Contrato(){
return $this->no_contrato;    
}

public function getName(){
return $this->name;    
}

public function getCedula(){
return $this->cedula;    
}

public function getDireccion(){
return $this->direccion;    
}

public function getTelefono(){
return $this->telefono;    
}

public function getEmail(){
return $this->email;    
}

public function getPassword(){
return $this->password = password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    
}





//METODOS SETTERS
public function setId($id){
$this->id = $id;    
}

public function setNo_Contrato($no_contrato){
$this->no_contrato = $this->db->real_escape_string($no_contrato);   
}

public function setName($name){
$this->name = $this->db->real_escape_string($name);    
}

public function setCedula($cedula){
$this->cedula = $this->db->real_escape_string($cedula);    
}

public function setDireccion($direccion){
$this->direccion = $this->db->real_escape_string($direccion);    
}

public function setTelefono($telefono){
$this->telefono = $this->db->real_escape_string($telefono);    
}

public function setEmail($email){
$this->email = $this->db->real_escape_string($email);    
}

public function setPassword($password){
$this->password = $password;    
}


// METODOS

//REGISTRAR
public function save(){
$result = false;
$sql = "INSERT INTO users VALUES(NULL,'NO ASIGNADO','{$this->getName()}', '{$this->getCedula()}', '{$this->getDireccion()}', '{$this->getTelefono()}', '{$this->getEmail()}', '{$this->getPassword()}', CURDATE(), 'usuario');";    
$guardar = $this->db->query($sql);
if($guardar){
$result = true;    
}
return $result;
}
//Cierre de la funcion Save

public function login(){
$result = false;  
$email = $this->email;
$password = $this->password;  
//comprobar si existe el usuario
$sql = "SELECT * FROM users WHERE email = '$email'";
$login = $this->db->query($sql);

//comprobar si el usuario esta en la db
if($login && $login->num_rows == 1){
//meter los datos en un objeto o array    
$usuario = $login->fetch_object();

//verificar password
$verify = password_verify($password, $usuario->password);

if($verify){
$result = $usuario;
}

return $result;

}// cierre de la condicion


}// cierre de la funcion login

public function mostrarusuario(){
$mostrar = $this->db->query("SELECT * FROM users WHERE id={$this->getId()}");
return $mostrar->fetch_object();    
}

public function actualizarusuario(){
$result = false;
$sql = "UPDATE users SET name='{$this->getName()}', cedula='{$this->getCedula()}', direccion='{$this->getDireccion()}', telefono='{$this->getTelefono()}', email='{$this->getEmail()}' WHERE id={$this->getId()}";    
$actualizar = $slq = $this->db->query($sql);

if($actualizar){
$result = true;
}

return $result;

}

/*-----------------------------PARTE ADMINISTRADOR-------------------------------------*/

//CONTAR USUARIOS 
public function contarusuarios(){
$usuario = $this->db->query("SELECT COUNT(*) FROM users");
return $usuario->fetch_row();    
}
//SELECCIONAR TODOS LOS USUARIOS
public function todosusuarios(){
$usuarios = $this->db->query("SELECT * FROM users ORDER BY id DESC");
return $usuarios;

}
//ELIMINAR USUARIO
public function delete(){
$sql = "DELETE FROM users WHERE id={$this->getId()}";
$borrar = $this->db->query($sql);

return $borrar;
}

//SELECCIONAR TODOS LOS POR ID
public function find(){
$usuarios = $this->db->query("SELECT * FROM users WHERE id={$this->getId()}");
return $usuarios->fetch_object();
}

//ACTUALIZAR CONTRATO
public function gcontrato(){
$result = false;
$sql = "UPDATE users SET no_contrato = '{$this->getNo_Contrato()}' WHERE id={$this->id}";
$actualizar = $this->db->query($sql);

if($actualizar){
$result = true;    
}

return $result;
}

}//cierre de la clase