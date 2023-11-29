
  <?php
$usuario = $_POST ['usuario'];
$contrasenia = $_POST ['contrasenia'];
session_start();
$_SESSION["usuario"]=$usuario;

$ckusuario = "Raul";
$ckcontrasenia = 1234;

if ($usuario==$ckusuario && $contrasenia==$ckcontrasenia){
  header('Location:ABM/amb.php');
}else{

  header ('Location:error_404.html');
}
?>
 
