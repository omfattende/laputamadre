<?php
$con = mysqli_connect("localhost","root","","barberia");
if(!$con){
    die("Conexion fallida: ".mysqli_connect_error());
}

$ID_Producto = $_POST['id'];
$Nombre_Producto = $_POST['Nombre_Producto'];
$Categoria = $_POST['Categoria'];
$Precio_Compra = $_POST['Precio_Compra'];
$Precio_Venta = $_POST['Precio_Venta'];
$Stock = $_POST['Stock'];

$sql = "UPDATE productos SET Nombre_Producto='$Nombre_Producto', Categoria='$Categoria', Precio_Compra='$Precio_Compra', Precio_Venta='$Precio_Venta', Stock='$Stock' WHERE ID_Producto='$ID_Producto'";

if(mysqli_query($con, $sql)){
    echo "Registro actualizado correctamente";
} else {
    echo "Error al actualizar: " . mysqli_error($con);
}

mysqli_close($con);
header("Location: actualizar_productos.php");
exit();
?>