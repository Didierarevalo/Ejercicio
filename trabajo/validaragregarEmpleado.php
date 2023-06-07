<?php
require "conexion.php";

extract($_REQUEST);

$objConexion=Conexion();
$sql="INSERT INTO empleados(empIdentificacion,empNombre,empFechaIngreso,empCorreo,empGenero,empCargo) values('$_REQUEST[Identificacion]','$_REQUEST[Nombre]','$_REQUEST[FechaIngreso]','$_REQUEST[Correo]','$_REQUEST[Genero]','$_REQUEST[Cargo]')";
$resultado=$objConexion->query($sql);

if($resultado){
    echo "Empleado Registrado con Exito, te felicito";
}
else{
    echo"Problemas al insertar , pilas!!";
}

?>