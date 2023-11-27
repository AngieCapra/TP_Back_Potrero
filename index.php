<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Style/header.css">
  <link rel="stylesheet" type="text/css" href="Style/index.css">
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="Style/footer.css">
  
  <title>Index</title>
</head>
<?php include ('header.php'); ?>
<body class="body">
 

  <section class="card_index">
    <div class="card">
     
      <div class="card-body">
         <img src="Assets/bufanda_rayas.png" class="card-img-top" alt="bufanda">
        <h5 class="card-title">Bufandas</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.
        </p>
        <!--href hacia la lista que se arma al solicitar la categoria especifica-->
        <a href="Ver/bufandas.php" class="btn btn_mio" type="submit">Ver Bufandas</a>
      </div>
    </div>
    <div class="card">
     
      <div class="card-body">
         <img src="Assets/campera_cuadrille.png" class="card-img-top" alt="campera">
        <h5 class="card-title">Camperas</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.
        </p>
        <!--href hacia la lista que se arma al solicitar la categoria especifica-->
         <a href="Ver/camperas.php" class="btn btn_mio" type="submit">Ver Camperas</a>
      </div>
    </div>
    <div class="card">
      
      <div class="card-body">
        <img src="Assets/gorro_lana_rayas.png" class="card-img-top" alt="gorro">
        <h5 class="card-title">Gorros</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.
        </p>
        <!--href hacia la lista que se arma al solicitar la categoria especifica-->
         <a href="Ver/gorros.php" class="btn btn_mio" type="submit">Ver Gorros</a>
      </div>
    </div>
    <div class="card">
      
      <div class="card-body">
        <img src="Assets/sweater_bordado.png" class="card-img-top" alt="sweater">
        <h5 class="card-title">Sweaters</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.
        </p>
        <!--href hacia la lista que se arma al solicitar la categoria especifica-->
         <a href="Ver/sweaters.php" class="btn btn_mio" type="submit">Ver Sweaters</a>
    </div>
  </section>

  <div class="d-grid gap-2 col-6 mx-auto">
    <!--href hacia la lista que se arma al solicitar la categoria especifica, en este caso toda-->
    <a href="Ver/todos.php" class="btn btn_mio">Ver Todos los Productos</a>
  </div>

  


</body>
<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>