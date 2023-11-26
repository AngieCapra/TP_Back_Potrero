  <!DOCTYPE html>
  <html lang="es-ar">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bufandas</title>
    <link rel="stylesheet" type="text/css" href="../Style/ver.css">

  </head>
  
  <body>
<?php
include '../header.php';
?>
  
<div class="card_index">
   
<?php

        // 1) Conexion
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "tu_ropa");

        // 2) Preparar la orden SQL
        // Sintaxis SQL SELECT
        // SELECT * FROM nombre_tabla
        // => Selecciona todos los campos de la siguiente tabla
        // SELECT campos_tabla FROM nombre_tabla
        // => Selecciona los siguientes campos de la siguiente tabla
        $consulta='SELECT * FROM tu_ropa WHERE categoria="sweater"';
        

        // 3) Ejecutar la orden y obtenemos los registros
        $datos= mysqli_query($conexion, $consulta);

        // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
        while ($reg = mysqli_fetch_array($datos)) {
         $id= $reg['id'];
          ?>
    
           <div class="card">
        
        <div class="card-body">
          <img src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>" class="card-img-top" alt="..."
              width="100px" height="220px">
           
                  <h5 class="card-title"><?php echo ucwords($reg['categoria']) ?></h5>
                <p class="card-text">$ <?php echo $reg['precio']; ?></p>
                 
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