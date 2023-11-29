<?php

$conexion = mysqli_connect("localhost", "id21594069_angiecapra", "Palermo9???");
mysqli_select_db($conexion, "id21594069_tu_ropa");


$categoria = $_POST['categoria'];
$caracteristicas = $_POST['caracteristicas'];
$talle = $_POST['talle'];
$precio = $_POST['precio'];

$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


$consulta = "INSERT INTO tu_ropa (id,categoria,caracteristicas,talle,precio,imagen)
VALUES ('','$categoria','$caracteristicas','$talle','$precio','$imagen')";

mysqli_select_db($conexion, "tu_ropa");

mysqli_query($conexion, $consulta);

header('location: amb.php');
?>