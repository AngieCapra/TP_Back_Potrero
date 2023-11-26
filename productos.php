<?php
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tu_ropa");
if (!empty($_GET)) {
  $id = $_GET['id'];
}


$consulta = "SELECT * FROM tu_ropa WHERE id=$id";

$respuesta = mysqli_query($conexion, $consulta);

$datos = mysqli_fetch_array($respuesta);

?>

<!DOCTYPE html>
<html lang="es-ar">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Style/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Productos</title>

<body>
  <?php
  include('header.php');
    ?>

  

    <div class="card_index">
      <div class="card">
        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($datos['imagen']) ?>" alt="..."
          width="100px" height="170px" )>
        <div class="card-body">

          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.
          </p>

          <a href="https://mpago.la/335z4TD" target="_blank"><button class="btn btn-primary"
              type="submit">Comprar</button></a>


        </div>
      </div>
    </div>
<?php
include('footer.php');
  ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>