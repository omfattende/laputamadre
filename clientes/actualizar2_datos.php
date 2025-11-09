<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con = mysqli_connect("localhost","root","","barberia");
    $CLIENTE = $_POST['id'];
    $resultado = mysqli_query($con, "SELECT * FROM clientes WHERE ID_Cliente = '$CLIENTE'");
    if ($resultado === FALSE) {
        echo "fallo: ";
        die(mysqli_error($con));
    }
    echo "<center>
        <form action='actualizar3_datos.php' method='POST'>
        <h1>Editar Datos</h1>
        <table border='0'>";
            while ($row = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>Matricula:</td> <td><input type='text' name='id' value='" . $row['ID_Cliente'] . "' readonly></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Nombre:</td> <td><input type='text' name='Nombre' value='" . $row['Nombre'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Apellido:</td> <td><input type='text' name='Apellido' value='" . $row['Apellido'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Telefono:</td> <td><input type='text' name='Telefono' value='" . $row['Telefono'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Email:</td> <td><input type='text' name='Email' value='" . $row['Email'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Fecha_Registro:</td> <td><input type='text' name='Fecha_Registro' value='" . $row['Fecha_Registro'] . "'></td>";
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