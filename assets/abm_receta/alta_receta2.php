<?php
include "../../conexion.php";

$nombre = $_REQUEST['nombre_impuesto'];
$porcentaje = $_REQUEST['porcentaje'];

$nombre = mysqli_real_escape_string($conexion, $nombre);
$porcentaje = mysqli_real_escape_string($conexion, $porcentaje);

$sql = "INSERT INTO Impuesto (Nombre, Porcentaje) VALUES ('$nombre', '$porcentaje')";
if (mysqli_query($conexion, $sql)) {
echo"<script language='JavaScript'>
                    alert('Fue agregado con exito');
                location.assign('principal_impuesto.php');
                </script>
            ";  
} else {
   echo"<script language='JavaScript'>
                alert('No se ha podido agregar');
            location.assign('principal_impuesto.php');
            </script>
        ";
}

// Cerrar la conexión
mysqli_close($conexion);
?>

<script>
    window.location.replace("principal_impuesto.php")
</script>