<?php
require "../trabajo/conexion.php";
$objConection=Conexion();

$sql="SELECT idCargo,carNombre FROM cargos";
$resultado=$objConection -> query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container text-center ">
        <form action="../trabajo/controlador/validaragregarEmpleado.php" class="color">
        <h1>Agregar Empleado</h1>
        <p>Identificacion del Empleado: </p>
        <input type="number" name="Identificacion" required placeholder>
        <p>Nombre Empleado:</p>
        <input type="text" name="Nombre" required placeholder>
        <p>Fecha Ingreso</p>
        <input type="date" name="FechaIngreso" required placeholder>
        <p>Correo</p>
        <input type="email" name="Correo">
        <p>Genero</p>
        <select name="Genero" id="Genero" required placeholder>
            <option value="0">Seleccione</option>
            <option value="1">Femenino</option>
            <option value="2">Masculino</option>
        </select>
        <p>Cargo</p>
            <select name="Cargo" id="Cargo" required placeholder>
            <option value="0">Seleccione</option>
            <?php
            while ($cargo = $resultado->fetch_object()){
            ?>
            <option value="<?php echo $cargo->idCargo?>"> <?php echo $cargo->carNombre?> </option>
            <?php
            }
            ?>
        </select>
        <br>
        <br>
        <p><a class="cargo" href="../trabajo/cargosNuevos.php">Agregar Cargo</a><p>

        <button type="submit">Enviar</button>

        </form>

    </div>
    
    <form action="" method="post"></form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>