<?php
$con = mysqli_connect("localhost","root","","barberia");
if (!$con) {
    die("No se establecio la conexion con el servidor: " . mysqli_connect_error());
}

echo "<center>";

$ID_Producto = $_POST['ID_Producto'];
$sql = "DELETE FROM productos WHERE ID_Producto = '$ID_Producto'";

if (!mysqli_query($con, $sql)) {
    die("Error al borrar registro: " . mysqli_error($con));
}

echo "<p>Registro Borrado</p>";
echo "<a href='consulta_productos.php'>Ver registros</a>";
echo "</center>";

mysqli_close($con);
?>