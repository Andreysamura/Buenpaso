<?php
//crear la variable sesion de forma global
session_start();

//recibir las dos variables: usuario y contraseña por el metodo POST

$user = $_POST["user"];
$pass = $_POST["pass"];

//llamar al archivo conexion.php
include("conexion.php");

$consulta="SELECT * FROM usuario WHERE usuario = '$user' AND contrasena ='$pass'";
$resultado=mysqli_query($conn,$consulta);

//si el resultado es mayor a cero, significa que el usuario existe
 if(mysqli_num_rows($resultado)>0)
{
    //crear variable sesion
    $_SESSION["user"]=$resultado;
    header("location: principal.php");
    
    //obtener el nombre completo de la persona que inicia sesion
    while($fila=mysqli_fetch_assoc($resultado))
    {
        //creamos una variable de sesion que se llame nombre para obtener el nombre del usuario
        $_SESSION["nombre"]=$fila['nombre'];
        //agregar una variable de sesion para obtener el tipo de usuario
        $_SESSION["tipo"]=$fila['tipo'];
    }
}
else
{
    header("location: index.php");
    //echo "<script> alert('Usuario y/o contraseña no existe, verifica tus datos'); window.location='index.php' </script>";
}
mysqli_close($conn);
?>