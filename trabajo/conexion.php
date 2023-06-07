<?php

function Conexion(){

$conexion= new mysqli("localhost","root","7830015Didier","ejercicio");
if($conexion->connect_errno){
    echo"error de conexion".$conexion->connect_erorr;
}
else{
//echo"Estamos conectados";
return $conexion;
}


}

?>