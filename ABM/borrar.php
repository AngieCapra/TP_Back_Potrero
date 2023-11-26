
<?php 
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tu_ropa");

$id = $_GET["id"];

$consulta = "DELETE FROM tu_ropa WHERE id=$id";
 header('location: amb.php');

?>





