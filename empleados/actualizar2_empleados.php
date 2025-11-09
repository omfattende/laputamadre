<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../PIA/styles.css">
    <title>Document</title>
</head>
<body>
    <?php
    $con = mysqli_connect("localhost","root","","barberia");
    $EMPLEADO = $_POST['id'];
    $resultado = mysqli_query($con, "SELECT * FROM empleados WHERE ID_Empleado = '$EMPLEADO'");
    if ($resultado === FALSE) {
        echo "fallo: ";
        die(mysqli_error($con));
    }
    echo "<center>
        <form action='actualizar3_empleados.php' method='POST'>
        <h1>Editar Datos Empleado</h1>
        <table border='0'>";
            while ($row = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>ID Empleado:</td> <td><input type='text' name='id' value='" . $row['ID_Empleado'] . "' readonly></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Nombre Empleado:</td> <td><input type='text' name='Nombre_Empleado' value='" . $row['Nombre_Empleado'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Especialidad:</td> <td><input type='text' name='Especialidad' value='" . $row['Especialidad'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Fecha Contratacion:</td> <td><input type='text' name='Fecha_Contratacion' value='" . $row['Fecha_Contratacion'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Salario:</td> <td><input type='text' name='Salario' value='" . $row['Salario'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Turno:</td> <td><input type='text' name='Turno' value='" . $row['Turno'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='2'><center><input type='submit' value='Actualizar'></center></td>";
                    echo "</tr>";
            }
        echo "</table>
        </form>
        </center>";
    ?>
</body>
</html>