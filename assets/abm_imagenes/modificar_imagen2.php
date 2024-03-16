<?php 
include "../../conexion.php";
if(isset($_POST["enviar"])){
    $id = $_POST ['id_Impuesto'];
    $nombre = $_POST['nombre_impuesto'];
    $porcentaje = $_POST['porcentaje'];

    $sql ="UPDATE impuesto SET Nombre='".$nombre."', Porcentaje='".$porcentaje."' WHERE id_Impuestos='".$id."'";
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
}
?>