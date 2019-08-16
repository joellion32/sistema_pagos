<?php

class PagoFactura{

public $id;    
public $user_id;  
public $factura_id;
public $targeta;
public $fecha_vencimiento;
public $db;

public function __construct(){
$this->db = Database::conexion();    
}

//METODOS GETTERS
public function getId(){
return $this->id;    
}

public function getUser_id(){
return $this->user_id;    
}

public function getFactura_id(){
return $this->factura_id;    
}

public function getTargeta(){
return $this->targeta;    
}

public function getFecha_Vencimiento(){
return $this->fecha_vencimiento;    
}

//METODOS SETTERS
public function setId($id){
$this->id = $id;    
}

public function setUser_id($user_id){
$this->user_id = $user_id;    
}

public function setFactura_id($factura_id){
$this->factura_id = $factura_id;    
}

public function setTargeta($targeta){
$this->targeta = $targeta;    
}

public function setFecha_Vencimiento($fecha_vencimiento){
$this->fecha_vencimiento = $fecha_vencimiento;    
}


public function guardar(){
$result = false;
$sql = "INSERT INTO pago_factura VALUES(NULL, {$this->getUser_id()}, {$this->getFactura_id()}, '{$this->getTargeta()}', '{$this->getFecha_Vencimiento()}', CURDATE());";    
$guardar = $this->db->query($sql);

if($guardar){
$result = true;    
}
return $result;    
}
/*-----------------------------PARTE ADMINISTRADOR-------------------------------------*/

//CONTAR FACTURAS PAGADAS
public function contarpagadas(){
$pagada = $this->db->query("SELECT COUNT(*) FROM pago_factura");
return $pagada->fetch_row();    
}

//MOSTRAR TODAS LAS FACTURAS
public function pagadaall(){
$sql = $this->db->query("SELECT pago_factura.*, facturas.id_factura FROM pago_factura INNER JOIN facturas ON pago_factura.factura_id = facturas.id");
return $sql;
}

public function delete(){
$sql = "DELETE FROM pago_factura WHERE id={$this->getId()}";
$borrar = $this->db->query($sql);

return $borrar;
}
}//CIERRE DE LA CLASE