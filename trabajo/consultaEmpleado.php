<?php
require "conexion.php";

$objConexion=Conexion();

$sql="SELECT*FROM empleados";
$resultado=$objConexion->query($sql);
$cantidadEmpleados=$resultado->num_rows;
//Imprimir datos de empleados
echo "<br> La cantidad de empleados registrados es: ".$cantidadEmpleados;
echo "<br>";

while($empleados=$resultado->fetch_object()){
    echo "<br> Nombre empleado : ".$empleados->empNombre;
    echo"<br> Fecha ingreso del empleado : ".$empleados->empFechaIngreso;
    echo"<br> Genero del empleado : ".$empleados->empGenero;
    echo"<br>";



}


?>