<?php

echo "<h2>Recibiendo informacion del formulario de devolucion</h2>";
$id_venta=$_POST['id_venta'];
echo "El codigo del producto es: ".$id_venta."<br>";
$codigo=$_POST['codigo'];
echo "El codigo del producto es: ".$codigo."<br>";
$modelo=$_POST['modelo'];
echo "La descripcion es: ".$modelo."<br>";
$talla=$_POST['talla'];
echo  "La talla es :".$talla."<br>";
$tipo=$_POST['tipo'];
echo  "La talla es :".$tipo."<br>";
$precio=$_POST['precio'];
echo "El precio es: ".$precio."<br>";
$cantidad=$_POST['cantidad'];
echo "El cantidad es: ".$cantidad."<br>";
$fecha_del=$_POST['fecha_devolucion'];
echo "La fecha de devolucion es: ".$fecha_del."<br>";
$descripcion=$_POST['descripcion'];
echo "La descripcion es: ".$descripcion."<br>";

include("conexion.php");

$sql="INSERT INTO devolucion VALUES (id_devolucion, $id_venta, $cantidad, '$fecha_del', '$descripcion')";

//evaluar si se registro correctamente el calzado
if(mysqli_query($conn,$sql))
{
    //echo "Calzado registrado correctamente";
    //regresar a la pagina anterior
    header("location: registros_ventas.php");
}
else{
    echo "Error: ".$sql. "<br>".mysqli_error($conn);
}


?>