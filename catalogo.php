<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lista</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>

  <body> 
    <header>
        <nav class="navbar navbar-expand-lg bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/zapateria.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    El Buen Paso</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- Contenedor para generar efecto menu -->
                    <u1 class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="venta.php">Venta</a></li>
                        <li class="nav-item"><a class="nav-link" href="registro.php">Alta</a></li>
                        <li class="nav-item"><a class="nav-link" href="catalogo.php">Catalogo</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Cerrar Sesion</a></li>
                    </u1>
                </div>
            </div>
        </nav>
    </header>
    <hr>
    
    <section>

      <!-- Slide de imagenes -->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"><!-- Contenedor principals de las imagenes -->
          <div class="carousel-inner"> <!-- Contenedor interno -->
              <div class="carousel-item active"> <!-- imagen 1 -->
                  <img src="img/foto1.png" class="d-block w-100">
              </div>
              <div class="carousel-item"> <!-- imagen 2 -->
                  <img src="img/foto2.png" class="d-block w-100">
              </div>
              <div class="carousel-item"> <!-- imagen 3 -->
                  <img src="img/foto3.png" class="d-block w-100">
              </div>
              <div class="carousel-item"> <!-- imagen 4 -->
                  <img src="img/foto4.png" class="d-block w-100">
              </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
      </div>
        <!-- Fin del slide -->
     
        
        <div class="container">
            <nav class="navbar bg-light">
                <form class="container-fluid">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Buscar Producto</span>
                    <input type="text" class="form-control" placeholder="Buscar Calzado" aria-label="Username" aria-describedby="basic-addon1">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </div>
                </form>
              </nav>
        </div>
        


        <div class="container bg-light">
          <h1 class="text-center text-muted"> Listado de Calzado</h1>
                <table class="table table-hover">
                  <thead>
                    <button class="btn btn-outline-success" type="submit">Agregar</button>
                      <tr>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Talla</th>
                        <th>Precio</th>
                        <th>Opciones</th> 
                      </tr>
                  </thead>

                  <tbody>
                        <tr>
                            <td>000001</td>
                            <td>Nike Runeer</td>
                            <td>Tennis</td>
                            <td>250</td>
                            <td><a class="btn btn-danger" href="">eliminar</a>   <a class="btn btn-success"href="">modificar</a>  </td>
                        </tr>
                        <tr>
                            <td>000002</td>
                            <td>Adidas</td>
                            <td>Sandalias</td>
                            <td>750</td>
                            <td><a class="btn btn-danger" href="">eliminar</a>   <a class="btn btn-success"href="">modificar</a>  </td>
                        </tr>
                        <tr>
                            <td>000003</td>
                            <td>Puma</td>
                            <td>Tennis</td>
                            <td>1200</td>
                            <td><a class="btn btn-danger" href="">eliminar</a>   <a class="btn btn-success"href="">modificar</a>  </td>       
                        </tr>
                        <tr>
                            <td>000004</td>
                            <td>Rebook</td>
                            <td>Tennis</td>
                            <td>1650</td>
                            <td><a class="btn btn-danger" href="">eliminar</a>   <a class="btn btn-success"href="">modificar</a>  </td> 
                        </tr>
                        <tr>
                            <td>000005</td>
                            <td>Flexy</td>
                            <td>Zapato</td>
                            <td>850</td>
                            <td><a class="btn btn-danger" href="">eliminar</a>   <a class="btn btn-success"href="">modificar</a>  </td>
                        </tr>
                  </tbody>
                </table>
        </div>
    </section>
    
     <footer class="text-center text-lg-start bg-light text-muted">
         <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
           Todos los derechos reservados 2022
         </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>