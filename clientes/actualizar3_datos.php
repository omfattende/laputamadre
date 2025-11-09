<?php
$con = mysqli_connect("localhost","root","","barberia");
if(!$con){
    die("Conexion fallida: ".mysqli_connect_error());
}

$ID_Cliente = $_POST['id'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];
$Fecha_Registro = $_POST['Fecha_Registro'];

$sql = "UPDATE clientes SET Nombre='$Nombre', Apellido='$Apellido', Telefono='$Telefono', Email='$Email', Fecha_Registro='$Fecha_Registro' WHERE ID_Cliente='$ID_Cliente'";

// FALTABA ESTA LÍNEA PARA EJECUTAR LA ACTUALIZACIÓN
if(mysqli_query($con, $sql)){
    echo "Registro actualizado correctamente";
} else {
    echo "Error al actualizar: " . mysqli_error($con);
}

mysqli_close($con);
header("Location: actualizar_datos.php");
exit();
?>