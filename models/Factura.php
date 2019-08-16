<?php

class Factura{

public $id;    
public $id_factura;
public $user_id;  
public $monto;
public $contrato;
public $db;

public function __construct(){
$this->db = Database::conexion();    
}

//METODOS GETTERS
public function getId(){
return $this->id;    
}

public function getId_Factura(){
return $this->id_factura;    
}

public function getMonto(){
return $this->monto;    
}

public function getUser_Id(){
return $this->user_id;    
}

public function getContrato(){
return $this->contrato;    
}

//METODOS SETTERS
public function setId($id){
$this->id = $id;    
}

public function setId_Factura($id_factura){
$this->id_factura = $id_factura;    
}

public function setMonto($monto){
$this->monto = $monto;    
}

public function setUser_Id($user_id){
$this->user_id = $user_id;    
}

public function setContrato($contrato){
$this->contrato = $contrato;    
}

// Mostrar Factura por Id
public function mostrarfacturas(){
$sql = $this->db->query("SELECT facturas.*, users.name, users.direccion FROM facturas INNER JOIN users ON facturas.user_id= users.id WHERE users.id = {$this->getUser_Id()}");
return $sql;
}

// Mostrar Factura por Id
public function pagarfacturas(){
$pagar = $this->db->query("SELECT * FROM facturas WHERE id = {$this->getId()}");
return $pagar->fetch_object();
}

//contar facturas
public function contar(){
$result = false;    
$contar = $this->db->query("SELECT COUNT(*) AS 'TOTAL' FROM facturas WHERE user_id = {$this->getUser_Id()}");
return $contar->fetch_row();
}

public function save(){
$result = false;
$sql = "INSERT INTO facturas VALUES(NULL, '{$this->getId_Factura()}', {$this->getMonto()}, {$this->getUser_Id()}, '{$this->getContrato()}', 'NO PAGADA', CURDATE());";    
$guardar = $this->db->query($sql);

if($guardar){
$result = true;    
}
return $result;    
}

public function accion(){
$sql = "UPDATE facturas SET accion = 'PAGADA' WHERE id = {$this->getId()}"; 
$actualizar = $this->db->query($sql);
return $actualizar;   
}

public function delete(){
$sql = "DELETE FROM facturas WHERE id = {$this->getId()}";
$borrar = $this->db->query($sql);
return $borrar;    
}

// Mostrar Factura por Id e imprimir
public function imprimir(){
$imprimir = $this->db->query("SELECT * FROM facturas WHERE id = {$this->getId()}");
return $imprimir->fetch_object();
}



/*-----------------------------PARTE ADMINISTRADOR-------------------------------------*/

//CONTAR FACTURAS 
public function contarfacturas(){
$contar = $this->db->query("SELECT COUNT(*) FROM facturas");
return $contar->fetch_row();    
}
//SELECCIONAR TODAS LAS FACTURAS
public function todasfacturas(){
$facturas = $this->db->query("SELECT facturas.*, users.name FROM facturas INNER JOIN users ON facturas.user_id = users.id");
return $facturas;
}


}//cierre de la factura