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
    $resultado = mysqli_query($con, "SELECT * FROM productos");
    if ($resultado === FALSE) {
        echo "fallo: ";
        die(mysqli_error($con));
    }
    echo "<center>
        <h1>Actualizar Datos Productos</h1>
        <table border='1'>
            <tr>
                <th>ID_Producto</th>
                <th>Nombre_Producto</th>
                <th>Categoria</th>
                <th>Precio_Compra</th>
                <th>Precio_Venta</th>
                <th>Stock</th>
            </tr>";
            while ($row = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td align=center>" . $row['ID_Producto'] . "</td>";
                echo "<td>" . $row['Nombre_Producto'] . "</td>";
                echo "<td>" . $row['Categoria'] . "</td>";
                echo "<td>$" . $row['Precio_Compra'] . "</td>";
                echo "<td>$" . $row['Precio_Venta'] . "</td>";
                echo "<td>" . $row['Stock'] . "</td>";
                echo "</tr>";
            }
        echo "</table>";
    echo "</center>";
    $registros = mysqli_num_rows($resultado);
    echo "<h3>Numero de registros: " . $registros . "</h3>";
    mysqli_close($con);
    
    ?>
    <h3>Escribe el NUMERO DE PRODUCTO del Registro a editar</h3>
    <form action="actualizar2_productos.php" method="POST">
        <label>ID_Producto</label> 
        <input type="text" name="id">
        <input type="submit" value="Editar">
    </form>
</body>
</html>