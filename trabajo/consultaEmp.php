<?php

require "conexion.php";

$objConexion =Conexion();


$sql = "SELECT * from empleados where empIdentificacion=12 ";
$resultado = $objConexion->query($sql);

// Imprimir en pantalla datos del empleado

if($empleados=$resultado->fetch_object()){
    echo"<br> Nombre del empleado : ".$empleados->empNombre;
    echo"<br> Fecha ingreso del empleado : ".$empleados->empFechaIngreso;
    echo"<br> Genero del empleado : ".$empleados->empGenero;
 
}
else{
echo "El empleado no existe";
}


?>