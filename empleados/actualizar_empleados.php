<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../PIA/styles.css">
    <title>Document</title>
</head>
<body>
    <?php include("../../PIA/navbar.html"); ?>
    <?php
    $con = mysqli_connect("localhost","root","","barberia");
    $resultado = mysqli_query($con, "SELECT * FROM empleados");
    if ($resultado === FALSE) {
        echo "fallo: ";
        die(mysqli_error($con));
    }
    echo "<center>
        <h1>Actualizar Datos Empleados</h1>
        <table border='1'>
            <tr>
                <th>ID_Empleado</th>
                <th>Nombre_Empleado</th>
                <th>Especialidad</th>
                <th>Fecha_Contratacion</th>
                <th>Salario</th>
                <th>Turno</th>
            </tr>";
            while ($row = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td align=center>" . $row['ID_Empleado'] . "</td>";
                echo "<td>" . $row['Nombre_Empleado'] . "</td>";
                echo "<td>" . $row['Especialidad'] . "</td>";
                echo "<td>" . $row['Fecha_Contratacion'] . "</td>";
                echo "<td>" . $row['Salario'] . "</td>";
                echo "<td>" . $row['Turno'] . "</td>";
                echo "</tr>";
            }
        echo "</table>";
    echo "</center>";
    $registros = mysqli_num_rows($resultado);
    echo "<h3>Numero de registros: " . $registros . "</h3>";
    mysqli_close($con);
    
    ?>
    <h3>Escribe el NUMERO DE EMPLEADO del Registro a editar</h3>
    <form action="actualizar2_empleados.php" method="POST">
        <label>ID_Empleado</label> 
        <input type="text" name="id">
        <input type="submit" value="Editar">
    </form>
</body>
</html>