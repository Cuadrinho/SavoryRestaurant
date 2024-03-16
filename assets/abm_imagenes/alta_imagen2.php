<?php
include "../../conexion.php";

$nombre = $_REQUEST['nombre_imagen'];
$archivo = $_REQUEST['archivo'];

$nombre = mysqli_real_escape_string($conexion, $nombre);
$archivo = mysqli_real_escape_string($conexion, $archivo);

$sql = "INSERT INTO imagenes (Imagen , Nombre ) VALUES ('$archivo', '$nombre')";
if (mysqli_query($conexion, $sql)) {
echo"<script language='JavaScript'>
                    alert('Fue agregado con exito');
                location.assign('principal_imagen.php');
                </script>
            ";  
} else {
   echo"<script language='JavaScript'>
                alert('No se ha podido agregar');
            location.assign('principal_imagen.php');
            </script>
        ";
}

// Cerrar la conexión
mysqli_close($conexion);
?>

