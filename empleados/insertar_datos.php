<?php
    $con = mysqli_connect("localhost","root","","barberia");
    if (!$con) {
        die("No se establecio la conexion con el servidor: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO empleados
    VALUES('".$_POST['ID_Empleado']."', '".$_POST['Nombre_Empleado']."', '".$_POST['Especialidad']."', '".$_POST['Fecha_Contratacion']."', '".$_POST['Salario']."', '".$_POST['Turno']."')";
    if (!mysqli_query($con, $sql)) {
        die("Error: " . mysqli_error($con));
    }
    echo "
    <center>
        <p>1 Registro Insertado</p>
        <a href='consulta_empleados.php'>Ver registros</a>
    </center>
    ";
?>