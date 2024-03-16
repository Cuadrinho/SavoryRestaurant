<?php
include "../../conexion.php";

$nombre = $_REQUEST['nombreC'];
$desc = $_REQUEST['desc'];

$nombre = mysqli_real_escape_string($conexion, $nombre);
$desc = mysqli_real_escape_string($conexion, $desc);

$sql = "INSERT INTO categoria (Nombre, Descripcion) VALUES ('$nombre', '$desc')";
if (mysqli_query($conexion, $sql)) {
echo"<script language='JavaScript'>
                    alert('Fue agregado con exito');
                location.assign('principal_categoria.php');
                </script>
            ";  
} else {
   echo"<script language='JavaScript'>
                alert('No se ha podido agregar');
            location.assign('principal_categoria.php');
            </script>
        ";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
