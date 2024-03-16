<?php
    include "../../conexion.php";
    $id = $_REQUEST["idimagenes"];
    $borrar = "DELETE FROM imagenes WHERE idimagenes = $id";
    $result=mysqli_query($conexion,$borrar);
    if ($result){
        echo"<script language='JavaScript'>
                alert('Se elimino exitosamente');
            location.assign('principal_imagen.php');
            </script>
        ";  
    }else{
        echo"<script language='JavaScript'>
            alert('No se ha podido eliminar');
        location.assign('principal_imagen.php');
        </script>
    ";
    }

?>
