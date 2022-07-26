<?php session_start(); if (@!$_SESSION["user"]) { header('location: ./'); } ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Venta</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
<?php //parte de encabezado
include("encabezado.php")
?>


            <!-- Buscador -->
            <div class="container">
                <nav class="navbar">
                    <form class="container-fluid" method="GET" action="#">
                    <div class="input-group">
                        <input type="search" class="form-control" name="busqueda" placeholder="Buscar Calzado" aria-label="Username" aria-describedby="basic-addon1">
                        <button class="btn btn-outline-success" type="submit" name="enviar">Buscar</button>
                    </div>
                    </form>
                </nav>
            </div>
            
        <section class="table-responsive">
            <div class="container">
                <div class="col-lg-11">
                    <h1 class="text-center text-muted"> Listado de Calzado Para Vender</h1>
                    <a class="btn btn-success" href="registro_venta.php">Registro de ventas</a>
                    <table class="table table-hover text-center">
                        <tr>
                            <th>Codigo</th>
                            <th>Modelo</th>
                            <th>Talla</th>
                            <th>Tipo</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Opciones</th>
                        </tr>
                            
                            <?php

                            include("conexion.php");

                            if(isset($_GET["busqueda"])){
                            $busqueda=$_GET["busqueda"];
                            $consulta="SELECT * FROM producto where modelo like '%$busqueda%' AND cantidad>=1";
                            }
                            else{
                            $consulta="SELECT * FROM producto WHERE cantidad>=1";
                            }

                            $resultado=mysqli_query($conn,$consulta);
                            if(mysqli_num_rows($resultado)>0)
                            {
                                while($fila=mysqli_fetch_assoc($resultado))
                                {
                                    echo "<tr>";
                                    echo "<td>".$fila['codcalzado']."</td>";
                                    echo "<td>".$fila['modelo']."</td>";
                                    echo "<td>".$fila['talla']."</td>";
                                    echo "<td>".$fila['tipo']."</td>";
                                    echo "<td>".$fila['precio']."</td>";
                                    echo "<td>".$fila['cantidad']."</td>";
                                    if ($_SESSION["tipo"] == 1) {
                                    echo "<td> <a class='btn btn-primary' href='venta_calzado.php?codcalzado=".$fila['codcalzado']."&modelo=".$fila['modelo']."&talla=".$fila['talla']."&tipo=".$fila['tipo']."&precio=".$fila['precio']."&cantidad=".$fila['cantidad']."'> Vender </a> </td>";
                                    echo "</tr>";
                                } else {
                                    //invitado
                                   }
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