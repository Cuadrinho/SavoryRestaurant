
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
    <script src="https://kit.fontawesome.com/d5d0dffee6.js" crossorigin="anonymous"></script>
    
    
   <style>
     body{
        margin: 0;
        padding: 0;
        font-family: poppins;
     }

    
   h1{
        margin: 25px;
        text-align: center;
     }
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
            text-align: center;

        }
       #boton , a {
            text-decoration: none;
            color: white;
            margin-left: 5px ;

        }
        .footer {
            padding: 1em 0;
            background-color: #552531;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
            height: 10%;
        }
        .footer p{
            color: white;
        }


        nav {
            background-color: #76373a;
            color: #fff;
        }

        
        nav ul {
            text-align: right;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
        justify-content: flex-end;
         display: inline-block;
        }

        nav ul li a {
            display: block;
            justify-content: flex-end;
            padding: 20px 10px;
            color: #fff;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #de8556;
        }
    </style>
    <body>
    <?php
    include "../../conexion.php";
    ?>
    <nav>
        <ul>
            <li><a href="../../index.html">Inicio</a></li>
            <li><a href="../../menu.html">Menu</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="../../formulario.html">Contacto</a></li>
        </ul>
    </nav>
    <div class="col-10 p-6 m-auto formuraio">
    <h1 >Tabla Menu</h1>
    <br><br>
    <div class="container-button">
        <button type="button" id="boton" class="btn btn-success"  data-toggle="modalD" data-target="#user"><a href="alta_menu.php"><span class="glyphicon glyphicon-plus"></span> Añadir <i class="fa fa-user-plus"></i></a></button>
    </div><br>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Menu</th>
                    <th scope="col">Restaurante</th>
                    <th scope="col">Impuestos</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Preparacion</th>
                    <th scope="col">Acciones</th>   
                </tr>
         </thead>
         
            <tbody>
            <?php
                $sql1 = "SELECT menu.idmenu,restaurante.Direccion,impuesto.Porcentaje, menu.Precio,menu.Nombre,menu.preparacion FROM menu INNER JOIN impuesto ON menu.Id_Impuesto = impuesto.id_Impuesto INNER JOIN restaurante ON menu.idrestaurante = restaurante.idrestaurante;
                ";
                $consulta1 = mysqli_query($conexion, $sql1);
                if ($consulta1) {
                    while ($datos = mysqli_fetch_array($consulta1)) {
                        $id = $datos["idmenu"];
                        $idimpuesto = $datos["Porcentaje"];
                        $idrestaurante = $datos["Direccion"];
                        $nombre = $datos["Nombre"];
                        $precio = $datos["Precio"];
                        $preparacion = $datos["preparacion"];
                        echo "<tr>";
                        echo "<td>".$id."</td>";
                        echo "<td>".$idrestaurante."</td>";
                        echo "<td>".$idimpuesto."</td>";
                        echo "<td>".$nombre."</td>";
                        echo "<td>$".$precio."</td>";
                        echo "<td>".$preparacion."</td>";
                        echo "<td>";
                        echo '<a href="modificar_menu.php?idmenu='.$id.'" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square" style="color: #511f1f;"></i></a>';
                        echo '<a href="baja_menu.php?idmenu='.$id.'" title="borrar" class="btn btn-small btn-warning"><i class="fa-solid fa-trash" style="color: #511f1f;" ></i></a>';
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

<div class="footer">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2025 SavoryExpress- Todo los derechos reservados</p>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></div>


</body>
</html>