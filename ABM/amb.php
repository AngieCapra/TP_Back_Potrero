<?php
session_start();
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
} else {
  header("location:login.html");
}

?>



<!DOCTYPE html>
<html lang="es-ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../Style/amb.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&family=Montserrat&display=swap" rel="stylesheet">
</head>

<?php
include ('../header.php');
  ?>

<body>

  <h1>Bienvenido
    <?php echo $usuario ?>
  </h1>

 
  <div class="card_index">
    <div class="boton_agregar">
     <button type="submit"><a href="agregar.html">Agregar ropa</a></button>
    </div>

    <?php

    $conexion = mysqli_connect("127.0.0.1", "root", "");

    mysqli_select_db($conexion, "tu_ropa");

    $consulta = "SELECT*FROM tu_ropa";

    $datos = mysqli_query($conexion, $consulta);

    while ($reg = mysqli_fetch_array($datos)) {
      $id = $reg['id']; ?>

      <div class="card">

        <div class="card-body">
          <img src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>" class="card-img-top" alt="..."
            width="100px" height="220px">

          <h5 class="card-title">
            <?php echo ucwords($reg['categoria']) ?>
          </h5>
          <div class="botones">
          <a href="modificar.php?id=<?php echo $reg['id']; ?>" class="btn btn_mio"
              type="submit">Modificar</a>
          <a href="AMB/borrar.php?id=<?php echo $reg['id']; ?>" aria-autocomplete=""class="btn btn_mio"
              type="submit">Borrar</a>
          </div>



        </div>

      </div>
    <?php } ?>
  </div>

  <?php include('./../footer.php'); ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>