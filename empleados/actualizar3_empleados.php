<?php
$con = mysqli_connect("localhost","root","","barberia");
if(!$con){
    die("Conexion fallida: ".mysqli_connect_error());
}

$ID_Empleado = $_POST['id'];
$Nombre_Empleado = $_POST['Nombre_Empleado'];
$Especialidad = $_POST['Especialidad'];
$Fecha_Contratacion = $_POST['Fecha_Contratacion'];
$Salario = $_POST['Salario'];
$Turno = $_POST['Turno'];

$sql = "UPDATE empleados SET Nombre_Empleado='$Nombre_Empleado', Especialidad='$Especialidad', Fecha_Contratacion='$Fecha_Contratacion', Salario='$Salario', Turno='$Turno' WHERE ID_Empleado='$ID_Empleado'";

if(mysqli_query($con, $sql)){
    echo "Registro actualizado correctamente";
} else {
    echo "Error al actualizar: " . mysqli_error($con);
}

mysqli_close($con);
header("Location: actualizar_empleados.php");
exit();
?>