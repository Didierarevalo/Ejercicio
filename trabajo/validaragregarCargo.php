<?php
require "conexion.php";

extract($_REQUEST);

$objConexion=Conexion();
$sql="INSERT INTO cargos(carNombre,carSueldo) values('$_REQUEST[Nombre]','$_REQUEST[Sueldo]')";
$resultado=$objConexion->query($sql);

if($resultado){
    echo "Cargo Registrado con Exito, te felicito";
}
else{
    echo"Problemas al insertar , pilas!!";
}

?>