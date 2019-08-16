<?php

class Database{
  
public function conexion(){
$conexion = new mysqli("localhost" , "id8751569_root" , "root1234" , "id8751569_sistema_basura");
$conexion->query("SET NAMES utf8");
return $conexion;
}    

}