<?php
include "../../conexion.php";

$nombre = $_REQUEST['nombre_plato'];
$preparacion = $_REQUEST['preparacion'];
$precio = $_REQUEST['precio'];
$rest = $_REQUEST ['rest'];
$imp = $_REQUEST ['imp'];

echo $nombre."<br>";
echo $preparacion."<br>";
echo $precio."<br>";
echo $rest."<br>";
echo $imp."<br>";

$nombre = mysqli_real_escape_string($conexion, $nombre);
$preparacion = mysqli_real_escape_string($conexion, $preparacion);
$precio = mysqli_real_escape_string($conexion, $precio);
$rest  = mysqli_real_escape_string($conexion, $rest);
$impo = mysqli_real_escape_string($conexion, $imp);


$sql = "INSERT INTO `menu`(`Precio`, `Nombre`, `preparacion`, `idrestaurante`, `id_Impuesto`) VALUES ('$precio','$nombre','$rest','$imp','$preparacion')";
mysqli_query($conexion, $sql);
if (isset($result)) {
echo"<script language='JavaScript'>
                    alert('Fue agregado con exito');
                location.assign('principal_menu.php');
                </script>
            ";  
} else {
   echo"<script language='JavaScript'>
                alert('No se ha podido agregar');
            location.assign('principal_menu.php');
            </script>
        ";
}

mysqli_close($conexion);
?>