<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingredientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
    <script src="https://kit.fontawesome.com/d5d0dffee6.js" crossorigin="anonymous"></script>
    
    
   <style>
     body{
        margin: 0;
        padding: 0;
        font-family: poppins;
     }

    
   h1{
        margin: auto;
     }
 /* 
        .formuraio {
            margin: 150px auto;
            width: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }
*/
       
        .table {
            border: 2px solid black;
            padding: 20px;
        }

       .table th, td{
            padding: 25px;
            justify-content: space-around;
            background-color: #552531;
            border-bottom: solid 5px ##76373a;
            color: white;
        }
       #boton , a {
            text-decoration: none;
            color: white;
            margin-left: 5px ;
        }

    </style>
    <body>

    

    <?php
    include "../../conexion.php";
    ?>
    <div class="col-8 p-4 m-auto formuraio">
    <h1 >Tabla Ingredientes</h1>
    <br><br>
    <div class="container">
        <button type="button" id="boton" class="btn btn-success"  data-toggle="modalD" data-target="#user"><a href="alta_ingredientes.html"><span class="glyphicon glyphicon-plus"></span> Añadir <i class="fa fa-user-plus"></i></a></button>
    </div><br>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
         </thead>
         
            <tbody>
            <?php
                $sql1 = "SELECT * FROM ingredientes WHERE id_ingredientes IS NOT NULL ORDER BY id_ingredientes DESC";
                $consulta1 = mysqli_query($conexion, $sql1);
                if ($consulta1) {
                    while ($datos = mysqli_fetch_array($consulta1)) {
                        $id = $datos["id_ingredientes"];
                        $nombre = $datos["Nombre"];
                        $precio = $datos["Precio"];
                        echo "<tr>";
                        echo "<td>".$id."</td>";
                        echo "<td>".$nombre."</td>";
                        echo "<td>$".$precio."</td>";
                        echo "<td>";
                        echo '<a href="modificar_ingredientes.php?id_ingredientes='.$id.'" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square" style="color: #511f1f;"></i></a>';
                        echo '<a href="baja_ingredientes.php?id_ingredientes='.$id.'" title="borrar" class="btn btn-small btn-warning"><i class="fa-solid fa-trash" style="color: #511f1f;" ></i></a>';
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($conexion);
                }
                
            ?>
            </tbody>
    </table> 

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></div>
</div>

</body>
</html>