<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
</head>
<style>
     body{
        margin: auto;
        padding: 0;
        font-family: poppins;
     }

     h2{
        margin: auto;
     }

     .mb-3 {
            margin: 340px;
            margin-top: 93px;
            border: 2px solid black;
            border-radius: 3%;
            padding: 20px;
        }

    .mb-3 form {
        padding: 25px;
        justify-content: space-around;
    }

</style>
<body>
    <div class="mb-3">
        <h2>Modificar Impuesto</h2>
        <?php
       include "../../conexion.php";
       $id = $_REQUEST['id_ingredientes'];
       $sql1 = "SELECT * FROM ingredientes WHERE id_ingredientes ='".$id."'";
       $result = mysqli_query($conexion, $sql1);
       
       while ($datos = mysqli_fetch_assoc($result)) {
           $nombre = $datos["Nombre"];
           $porcentaje = $datos["Precio"];
           $idImpuesto = $datos["id_ingredientes"];
            ?>

        

        
        <form action="modificar_ingredientes2.php" method="post">
            <label for="exampleFormControlInput1" class="form-label">Nombre Del ingrediente</label>
            <input type="text" name="nombre_ingrediente" value="<?php echo $nombre; ?>" class="form-control" id="exampleFormControlInput1">
            <br><br>
            <label for="exampleFormControlTextarea1" class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" value="<?php echo $porcentaje; ?>" class="form-control" id="exampleFormControlInput1">
            <br><br>
            <input type="hidden" name="identificador" value="<?php echo $idImpuesto; ?>">
            <input type="submit" class="btn btn-success" name="enviar" value="Guardar">
        </form>
    </div>
    <?php
    }
    ?>
</body>
</html>