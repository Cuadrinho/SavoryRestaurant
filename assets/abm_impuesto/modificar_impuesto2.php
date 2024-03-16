<?php 
include "../../conexion.php";
    $id = $_REQUEST ['identificador'];
    $nombre = $_REQUEST['nombre_impuesto'];
    $porcentaje = $_REQUEST['porcentaje'];

    echo $nombre."<br>";
    echo $porcentaje."<br>";
    echo $id. "<br>";

    $sql = "UPDATE `impuesto` SET  `Nombre` = '$nombre', `Porcentaje` = '$porcentaje' WHERE `id_Impuesto` = $id";
     $result =  mysqli_query ($conexion,$sql);
        if ($result){
            echo"<script language='JavaScript'>
                    alert('Se actualizo con exito');
                location.assign('principal_impuesto.php');
                </script>
            ";  
        }else{
            echo"<script language='JavaScript'>
                alert('No se ha podido Actualizar');
            location.assign('principal_impuesto.php');
            </script>
        ";
        }
?>

