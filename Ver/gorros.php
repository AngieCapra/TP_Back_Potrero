<!DOCTYPE html>
<html lang="es-ar">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gorros</title>
  <link rel="stylesheet" type="text/css" href="../Style/header.css">
  <link rel="stylesheet" type="text/css" href="../Style/ver.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../Style/footer.css">
</head>

<body>
  <?php
  include('../header.php');
  ?>
  <div class="card_index">

    <?php

    $conexion = mysqli_connect("localhost", "id21594069_angiecapra", "Palermo9???");
    mysqli_select_db($conexion, "id21594069_tu_ropa");


    $consulta = 'SELECT * FROM tu_ropa WHERE categoria="gorro"';



    $datos = mysqli_query($conexion, $consulta);


    while ($reg = mysqli_fetch_array($datos)) {
      $id = $reg['id'];
      ?>

      <div class="card">

        <div class="card-body">
          <img src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>" class="card-img-top" alt="..."
            width="100px" height="220px">

          <h5 class="card-title">
            <?php echo ucwords($reg['categoria']) ?>
          </h5>
          <p class="card-text">$
            <?php echo $reg['precio']; ?>
          </p>

          <a href="../productos.php?id=<?php echo $id; ?>" class="btn btn_mio" type="submit">Ver Producto</a>

          </a>
        </div>
      </div>

    <?php } ?>
    <div class="volver">
      <a href="../index.php" class="btn btn_mio" type="submit">Volver</a>
    </div>

  </div>


  <?php include('../footer.php'); ?>

</body>

</html>