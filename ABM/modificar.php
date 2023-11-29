<?php
$conexion = mysqli_connect("localhost", "id21594069_angiecapra", "Palermo9???");
mysqli_select_db($conexion, "id21594069_tu_ropa");
$id = $_GET['id'];

$consulta = "SELECT * FROM tu_ropa WHERE id=$id";

$respuesta = mysqli_query($conexion, $consulta);

$datos = mysqli_fetch_array($respuesta);

?>

<!DOCTYPE html>
<html lang="es-ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../Style/amb.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&family=Montserrat&display=swap"
    rel="stylesheet">

</head>

<body>

  <?php
  $categoria = $datos["categoria"];
  $caracteristicas = $datos["caracteristicas"];
  $talle = $datos["talle"];
  $precio = $datos["precio"];
  $imagen = $datos["imagen"];
  ?>
  <h1>Modificar</h1>
  <p>Ingrese los nuevos datos del artículo <i class="bi bi-arrow-right-square"></i></p>

  <form action="" method="post" enctype="multipart/form-data">
    <label>categoria</label>
    <input type="text" name="categoria" placeholder="Categoria" value="<?php echo "$categoria"; ?>">

    <label>caracteristicas</label>
    <input type="text" name="caracteristicas" placeholder="Caracteristicas" value="<?php echo "$caracteristicas"; ?>">

    <label>talle</label>
    <input type="text" name="talle" placeholder="Talle" value="<?php echo "$talle"; ?>">

    <label>precio</label>
    <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?> ">

    <label>imagen</label>
    <input type="image" name="imagen" placeholder="Imagen" value="<?php echo base64_encode($reg['imagen']); ?>">
    <div class="botones">
      <button type="submit" name="guardar_cambios">Guardar Cambios</button>
      <button type="submit" name="cancelar" formaction="">Cancelar</button>
    </div>
  </form>

  <?php

  if (array_key_exists('guardar_cambios', $_POST)) {

    $categoria = $_POST['categoria'];
    $caracteristicas = $_POST['caracteristicas'];
    $talle = $_POST['talle'];
    $precio = $_POST['precio'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $consulta = "UPDATE tu_ropa SET categoria='$categoria', caracteristicas='$caracterisitcas', talle='$talle', precio='$precio', imagen='$imagen' WHERE id=$id";

    mysqli_query($conexion, $consulta);
    // a) rederigir a index
    header('location: amb.html');
  } ?>



</body>


</html>