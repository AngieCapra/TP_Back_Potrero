<?php
$conexion = mysqli_connect("localhost", "id21594069_angiecapra", "Palermo9???");
mysqli_select_db($conexion, "id21594069_tu_ropa");

$id = $_GET["id"];

$consulta = "DELETE FROM tu_ropa WHERE id=$id";
header('location: amb.php');

?>