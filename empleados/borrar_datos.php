<?php
$con = mysqli_connect("localhost","root","","barberia");
if (!$con) {
    die("No se establecio la conexion con el servidor: " . mysqli_connect_error());
}

echo "<center>";

$ID_Empleado = $_POST['ID_Empleado'];
$sql = "DELETE FROM empleados WHERE ID_Empleado = '$ID_Empleado'";

if (!mysqli_query($con, $sql)) {
    die("Error al borrar registro: " . mysqli_error($con));
}

echo "<p>Registro Borrado</p>";
echo "<a href='consulta_empleados.php'>Ver registros</a>";
echo "</center>";

mysqli_close($con);
?>