<?php
include ('conexion.php');

$id = $_POST['id_producto'];
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql="INSERT INTO tienda  VALUES ('".$id."', '".$producto."', '".$precio."', '".$cantidad."')";
$query=mysqli_query($conexion, $sql);

if($query)
{
    header("location:compras.php");
}

?>
