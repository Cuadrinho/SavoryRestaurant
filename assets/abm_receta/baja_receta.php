<?php
    include "../../conexion.php";
    $id = $_REQUEST["id_Impuesto"];
    $borrar = "DELETE FROM impuesto WHERE id_Impuesto = $id";
    $result=mysqli_query($conexion,$borrar);
    if ($result){
        echo"<script language='JavaScript'>
                alert('Se elimino exitosamente');
            location.assign('principal_impuesto.php');
            </script>
        ";  
    }else{
        echo"<script language='JavaScript'>
            alert('No se ha podido eliminar');
        location.assign('principal_impuesto.php');
        </script>
    ";
    }

?>
