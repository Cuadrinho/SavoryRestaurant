<?php
    include "../../conexion.php";
    $id = $_REQUEST["id_ingredientes"];
    $borrar = "DELETE FROM ingredientes WHERE id_ingredientes = $id";
    $result=mysqli_query($conexion,$borrar);
    if ($result){
        echo"<script language='JavaScript'>
                alert('Se elimino exitosamente');
            location.assign('principal_ingredientes.php');
            </script>
        ";  
    }else{
        echo"<script language='JavaScript'>
            alert('No se ha podido eliminar');
        location.assign('principal_ingredientes.php');
        </script>
    ";
    }

?>
