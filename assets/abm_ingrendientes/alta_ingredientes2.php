<?php
include "../../conexion.php";

$nombre = $_REQUEST['nombre_ingrediente'];
$precio = $_REQUEST['precio'];

$nombre = mysqli_real_escape_string($conexion, $nombre);
$precio = mysqli_real_escape_string($conexion, $precio);

$sql = "INSERT INTO ingredientes (Nombre, Precio) VALUES ('$nombre', '$precio')";
if (mysqli_query($conexion, $sql)) {
echo"<script language='JavaScript'>
                    alert('Fue agregado con exito');
                location.assign('principal_ingredientes.php');
                </script>
            ";  
} else {
   echo"<script language='JavaScript'>
                alert('No se ha podido agregar');
            location.assign('principal_ingredientes.php');
            </script>
        ";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
