<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Regristro</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
    <?php //parte de encabezado
    include("encabezado.php")
    ?>  
        <section class="container m-5 bg-light"> <!-- Buscador -->
            <div class="row">
                <div class="col-lg-8"> 
                    <h3 class="text-center text-muted">Regristro de usuario</h3>
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-10">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nombre Completo">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Usuario</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Crear Ususario">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Correo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Correo Electronico@">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Contraseña</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Introduce Contraseña">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Contraseña</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Confirmar Contraseña">
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary btn-success">Registrar</button>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-4 d-flex justify-content-center">
                    <img src="img/zapateria.png" width="400">
                </div>
            </div>
        </section>

        <footer class="container-fluid bg-light text-center p-3">
            <p>Todos los derechos reservados 2022</p>
    
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
    
</html>