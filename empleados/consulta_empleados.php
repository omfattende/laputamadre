<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Empleados</title>
    <link rel="stylesheet" href="../../PIA/styles.css">
</head>
<body>
    <?php include("../../PIA/navbar.html"); ?>
    <div class="container">
        <?php
        $con = mysqli_connect("localhost","root","","barberia");
        $resultado = mysqli_query($con, "SELECT * FROM empleados");
        if (!$resultado) {
            echo "fallo: ";
            die(mysqli_error($con));
        }
        echo "
        <center>
            <a href='consulta_empleados.php' class='update-link'>Actualizar tabla</a>
            <h1>Consulta de la tabla Empleados</h1>
            <table>
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
                    echo "<td align='center'>" . $row['ID_Empleado'] . "</td>";
                    echo "<td>" . $row['Nombre_Empleado'] . "</td>";
                    echo "<td>" . $row['Especialidad'] . "</td>";
                    echo "<td>" . $row['Fecha_Contratacion'] . "</td>";
                    echo "<td>$" . number_format($row['Salario'], 2) . "</td>";
                    echo "<td>" . $row['Turno'] . "</td>";
                    echo "</tr>";
                }
        echo "</table>";
        $registros = mysqli_num_rows($resultado);
        echo "<h3>Número de registros: " . $registros . "</h3>";

        mysqli_close($con);
        ?>
        
        <div class="nav-links">
            <ul>
                <li><a href="borrar_datos.html">Borrar datos</a></li><br>
                <li><a href="insertar_datos.html">Insertar datos</a></li><br>
                <li><a href="actualizar_empleados.php">Modificar datos</a></li>
            </ul>
        </div>
    </div>
</body>
</html>