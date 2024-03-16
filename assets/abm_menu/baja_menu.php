<?php
    include "../../conexion.php";
    $id = $_REQUEST["idmenu"];
    $borrar = "DELETE FROM menu WHERE idmenu = $id";
    $result=mysqli_query($conexion,$borrar);
    if ($result){
        echo"<script language='JavaScript'>
                alert('Se elimino exitosamente');
            location.assign('principal_menu.php');
            </script>
        ";  
    }else{
        echo"<script language='JavaScript'>
            alert('No se ha podido eliminar');
        location.assign('principal_menu.php');
        </script>
    ";
    }

?>
