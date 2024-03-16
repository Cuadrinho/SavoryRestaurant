<?php 
include "../../conexion.php";
if(isset($_POST["enviar"])){
    $id = $_POST ['id_ingredientes'];
    $nombre = $_POST['nombre_ingrediente'];
    $precio = $_POST['precio'];

    $sql ="UPDATE `ingredientes` SET `Nombre`= '$nombre',`Precio`='$precio' WHERE `id_ingredientes`='$id";
    $result = mysqli_query ($conexion,$sql);
        if ($result){
            echo"<script language='JavaScript'>
                    alert('Se actualizo con exito');
                location.assign('principal_ingredientes.php');
                </script>
            ";  
        }else{
            echo"<script language='JavaScript'>
                alert('No se ha podido Actualizar');
            location.assign('principal_ingredientes.php');
            </script>
        ";
        }
}
?>