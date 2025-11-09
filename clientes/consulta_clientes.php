<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../PIA/styles.css">
    <title>Document</title>
    <style>
        li{
            list-style-type: none;
        }
    </style>
</head>
<body>
    <?php include("../../PIA/navbar.html"); ?>
    <?php
    $con = mysqli_connect("localhost","root","","barberia");
    $resultado = mysqli_query($con, "SELECT * FROM clientes");
    if (!$resultado) {
        echo "fallo: ";
        die(mysqli_error($con));
    }
    echo "<center>
    <br>
        <a href='consulta_clientes.php' class='update-link'>Actualizar tabla</a>
        <h1>Consulta de la tabla datos de Clientes</h1>
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
    
    echo "<center>";
    ?>
    <div class="nav-links">
    <ul>
        <li><a href="borrar_datos.html">Borrar datos</a></li><br>
        <li><a href="insertar_datos.html">Insertar_datos datos</a></li><br>
        <li><a href="actualizar_datos.php">Modificar datos</a></li>
    </ul>
    </div>
</body>
</html>
