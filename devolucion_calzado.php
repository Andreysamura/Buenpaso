<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Devolucion_Calzado</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
        <?php //parte de encabezado
        include("encabezado.php")
        ?>

<!-- Formulario de registro -->

        <section class="container bg-light">
            <div class="row">
                <div class="col-lg-5">
                    <h3 class="text-center text-muted">Devolucion de Calzado</h3>
                    <form method="POST" action="devolucion_cal.php">
                        <!--Recibrir las variables para devolucion-->
                        <?php

                            $id_venta=$_GET["id_venta"];
                            $codigo=$_GET["codcalzado"];
                            $modelo=$_GET["modelo"];
                            $talla=$_GET["talla"];
                            $tipo=$_GET["tipo"];
                            $precio=$_GET["precio"];
                            $cantidad=$_GET["cantidad"];


                        ?>
                        
                        <div class="row mb-3">
                            <label class="col-sm-10">ID de Venta</label>
                            <div class="col-sm-10">
                                <input type="text" name="id_venta" class="form-control" readonly value="<?php echo $id_venta ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Codigo de calzado</label>
                            <div class="col-sm-10">
                                <input type="text" name="codigo" class="form-control" readonly value="<?php echo $codigo ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Modelo</label>
                            <div class="col-sm-10">
                                <input type="text" name="modelo" class="form-control" readonly value="<?php echo $modelo ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Talla</label>
                            <div class="col-sm-10">
                                <input type="text" name="talla" class="form-control" readonly value="<?php echo $talla ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Tipo</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo" class="form-control" readonly value="<?php echo $tipo ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio</label>
                            <div class="col-sm-10">
                                <input type="text" name="precio" class="form-control" readonly value="<?php echo $precio ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Cantidad</label>
                            <div class="col-sm-10">
                                <input type="text" name="cantidad" class="form-control" value="<?php echo $cantidad ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Descripcion</label>
                            <div class="col-sm-10">
                                <input type="text" name="descripcion" class="form-control" placeholder="El por que de la devolucion">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Fecha devolucion</label>
                            <div class="col-sm-10">
                                <input type="date" name="fecha_devolucion" class="form-control">
                            </div>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-success">Devolver</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <footer class="container-fluid bg-light text-center p-3">
            <p>Todos los derechos reservados 2022</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
    
</html>