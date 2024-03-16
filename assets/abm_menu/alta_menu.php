<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>altaimpuesto</title>
    <link rel="stylesheet" href="../web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../dropdown/css/style.css">
    <link rel="stylesheet" href="../theme/css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Inter+Tight:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter+Tight:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
    <link rel="preload" as="style" href="../mobirise/css/mbr-additional.css"><link rel="stylesheet" href="../mobirise/css/mbr-additional.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
</head>
<style>
     body{
        margin: auto;
        padding: 0;
        font-family: poppins;
     }

     h2 {
        text-align: center;
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

    label{
        font-size: 17px;
    }   

    
</style>
<body>
    <div class="mb-3">
        <h2>Crear Menu</h2>
        <br>
        <form action="alta_menu2.php" method="post">
            <label for="exampleFormControlInput1" class="form-label">Nombre del plato</label>
            <input type="text" name="nombre_plato" class="form-control" id="exampleFormControlInput1">
            <br><br>
            <label for="exampleFormControlInput1" class="form-label">Preparacion</label>
            <input type="text" name="preparacion" class="form-control" id="exampleFormControlInput1">
            <br><br>
            <label for="exampleFormControlTextarea1" class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" id="exampleFormControlInput1">
            <br><br>
            <div>
                <p>Tipo de Impuesto</p>
                <?php
                include "../../conexion.php";
                $sql = "SELECT id_Impuesto,Nombre FROM impuesto ORDER BY Nombre";
                $result = mysqli_query($conexion,$sql);

                ?>
                <select class="form-select" name="imp" id="idimp" aria-label="Default select example">
                <option value="0">Selecciona el impuesto</option>
                <?php
                while ($datos = mysqli_fetch_array($result)) {
                    $idImpuesto = $datos ['id_Impuesto'];
                    $nombre = $datos ['Nombre'];
                    echo "<option value='$idImpuesto'>".$nombre."</option>";
                }
                ?>
                </select>
            </div>
            <br><br>
            <div>
                <p>Restaurante</p>
                <?php

                $sql2 = "SELECT idrestaurante,Direccion FROM restaurante ORDER BY Direccion";
                $result = mysqli_query($conexion,$sql2);

                ?>
                <select class="form-select" name="rest" id="idrest" aria-label="Default select example">
                <option value="0">Selecciona el local</option>
                <?php
                while ($datos2 = mysqli_fetch_array($result)) {
                    $idrestaurante = $datos2 ['idrestaurante'];
                    $direccion = $datos2 ['Direccion'];
                    echo "<option value='$idrestaurante'>".$direccion."</option>";
                }
                ?>
            </div>
            <br><br>
            <input type="submit" class="btn btn-success" value="Crear">
        </form>
    </div>

  
</body>
</html>