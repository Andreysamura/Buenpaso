<?php session_start(); if (@!$_SESSION["user"]) { header('location: ./'); } ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro_Venta</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
<?php //parte de encabezado
include("encabezado.php")
?>

        <section class="table-responsive">        
            <div class="container">
                <div class="col-lg-11">
                    <h1 class="text-center text-muted">Lista de ventas registradas</h1>
                    <a class="btn btn-success" href='venta.php'>Regresar</a>
                        <table class="table table-hover text-center">
                            <tr>
                                <th>ID</th>
                                <th>Codigo Calzado</th>
                                <th>Cliente</th>
                                <th>Modelo</th>
                                <th>Talla</th>
                                <th>Tipo</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Fecha Registro</th>
                                <th>Opciones</th>
                            </tr>
                            <?php

                            include("conexion.php");

                            if(isset($_GET["busqueda"])){
                            $busqueda=$_GET["busqueda"];
                            $consulta="SELECT * FROM venta where modelo like '%$busqueda%'";
                            }
                            else{
                            $consulta="SELECT * FROM venta";
                            }

                            $resultado=mysqli_query($conn,$consulta);
                            if(mysqli_num_rows($resultado)>0)
                            {
                                while($fila=mysqli_fetch_assoc($resultado))
                                {
                                    echo "<tr>";
                                    echo "<td>".$fila['id_venta']."</td>";
                                    echo "<td>".$fila['id_calzado']."</td>";
                                    echo "<td>".$fila['nombre_cliente']."</td>";
                                    echo "<td>".$fila['modelo']."</td>";
                                    echo "<td>".$fila['talla']."</td>";
                                    echo "<td>".$fila['tipo']."</td>";
                                    echo "<td>".$fila['precio']."</td>";
                                    echo "<td>".$fila['cantidad']."</td>";
                                    echo "<td>".$fila['fecha_registro']."</td>";
                                    echo "<td><a class='btn btn-primary' href='devolucion_calzado.php?id_venta=".$fila['id_venta']."&codcalzado=".$fila['id_calzado']."&modelo=".$fila['modelo']."&talla=".$fila['talla']."&tipo=".$fila['tipo']."&precio=".$fila['precio']."&cantidad=".$fila['cantidad']."'> Devolucion </a></td>";
                                    echo "</tr>";
                                }
                            }else
                            {
                                echo "Sin resultados";
                            }

                            ?>

                        </table>
                </div>
            </div>      
        </section>
        


    <footer class="container-fluid bg-light text-center p-3">
        <p>Todos los derechos reservados 2022</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>