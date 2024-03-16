<?php 
include "../../conexion.php";
    $id = $_REQUEST ['identificador'];
    $precio = $_REQUEST ['precio'];
    $nombre = $_REQUEST['nombre_plato'];
    $preparacion = $_REQUEST['preparacion'];
    $imp = $_REQUEST['imp'];
    $rest = $_REQUEST['rest'];

    $sql = "UPDATE ` menu` SET `Precio` = '$precio', ` Nombre`  = '$nombre', `preparacion`  = '$preparacion', `idrestaurante` = '$rest',`id_Impuesto` = '$imp', WHERE `idmenu`  = $id";
    $result = mysqli_query ($conexion,$sql);
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

