<?php
$con = mysqli_connect("localhost","root","","barberia");
if (!$con) {
    die("No se establecio la conexion con el servidor: " . mysqli_connect_error());
}
echo "<center>";
if (!$con){
    die("Conexion fallida: " . mysqli_connect_error());
} 
$sql = "DELETE FROM clientes WHERE ID_Cliente = '$_POST[ID_Cliente]'";
if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)) {
    die("Error al borrar registro: " . mysqli_error($con));
}
echo "<p>Registro Borrado</p>";
echo "<a href='consulta_clientes.php'>Ver registros</a>";
mysqli_close($con);
?>