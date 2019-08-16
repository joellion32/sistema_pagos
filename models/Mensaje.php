<?php

class Mensaje{

public $id;    
public $titulo;
public $descripcion;
public $user_id;  
public $db;    

public function __construct(){
$this->db = Database::conexion();    
}


//Metodos GETTERS 

public function getId(){
return $this->id;

}

public function getTitulo(){
return $this->titulo;

}

public function getDescripcion(){
return $this->descripcion;

}

public function getUser_Id(){
return $this->user_id;

}

//METODOS SETTERS

public function setId($id){
$this->id = $id;

}

public function setTitulo($titulo){
$this->titulo = $titulo;

}

public function setDescripcion($descripcion){
$this->descripcion = $descripcion;

}

public function setUser_Id($user_id){
$this->user_id = $user_id;

}

// Mostrar Mensajes por Id de usuario
public function mostrarmensajes(){
$sql = $this->db->query("SELECT * FROM mensajes WHERE user_id = {$this->getUser_Id()}");
return $sql;
}

//contar mensajes
public function contarmensajes(){
$mensaje = $this->db->query("SELECT COUNT(*) AS 'TOTAL' FROM mensajes WHERE user_id = {$this->getUser_Id()}");
return $mensaje->fetch_row();
}

// Mostrar Mensajes por Id
public function mensajes(){
$mensaje = $this->db->query("SELECT * FROM mensajes WHERE id = {$this->getId()}");
return $mensaje->fetch_object();
}

//guardar mensajes
public function guardar(){
$result = false;
$sql = "INSERT INTO mensajes VALUES(NULL,'{$this->getTitulo()}', '{$this->getDescripcion()}', {$this->getUser_Id()}, CURDATE());";    
$guardar = $this->db->query($sql);

if($guardar){
 $result = true;   
}
return $result;
}



}//cierre de la clase