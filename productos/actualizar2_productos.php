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
    $PRODUCTO = $_POST['id'];
    $resultado = mysqli_query($con, "SELECT * FROM productos WHERE ID_Producto = '$PRODUCTO'");
    if ($resultado === FALSE) {
        echo "fallo: ";
        die(mysqli_error($con));
    }
    echo "<center>
        <form action='actualizar3_productos.php' method='POST'>
        <h1>Editar Datos Producto</h1>
        <table border='0'>";
            while ($row = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>ID Producto:</td> <td><input type='text' name='id' value='" . $row['ID_Producto'] . "' readonly></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Nombre Producto:</td> <td><input type='text' name='Nombre_Producto' value='" . $row['Nombre_Producto'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Categoria:</td> <td><input type='text' name='Categoria' value='" . $row['Categoria'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Precio Compra:</td> <td><input type='text' name='Precio_Compra' value='" . $row['Precio_Compra'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Precio Venta:</td> <td><input type='text' name='Precio_Venta' value='" . $row['Precio_Venta'] . "'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Stock:</td> <td><input type='text' name='Stock' value='" . $row['Stock'] . "'></td>";
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