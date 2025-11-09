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
    $resultado = mysqli_query($con, "SELECT * FROM clientes");
    if ($resultado === FALSE) {
        echo "fallo: ";
        die(mysqli_error($con));
    }
    echo "<center>
        <h1>Actualizar Datos</h1>
        <table border='1'>
            <tr>
                <th>ID_Cliente</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Fecha_Registro</th>
            </tr>";
            while ($row = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td align=center>" . $row['ID_Cliente'] . "</td>";
                echo "<td>" . $row['Nombre'] . "</td>";
                echo "<td>" . $row['Apellido'] . "</td>";
                echo "<td>" . $row['Telefono'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Fecha_Registro'] . "</td>";
                echo "</tr>";
            }
        echo "</table>";
    
    $registros = mysqli_num_rows($resultado);
    echo "<h3>Numero de registros: " . $registros . "</h3>";
    mysqli_close($con);
    
    ?>
    <h3>Escribe el NUMERO DE CLIENTE del Registro a editar</h3>
    <form action="actualizar2_datos.php" method="POST">
        <label>ID_Cliente</label> 
        <input type="text" name="id">
        <input type="submit" value="Editar">
    </form>
    <?php
    echo "</center>";
    ?>
</body>
</html>
