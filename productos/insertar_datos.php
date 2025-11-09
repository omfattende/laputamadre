<?php
    $con = mysqli_connect("localhost","root","","barberia");
    if (!$con) {
        die("No se establecio la conexion con el servidor: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO productos
    VALUES('".$_POST['ID_Producto']."', '".$_POST['Nombre_Producto']."', '".$_POST['Categoria']."', '".$_POST['Precio_Compra']."', '".$_POST['Precio_Venta']."', '".$_POST['Stock']."')";
    if (!mysqli_query($con, $sql)) {
        die("Error: " . mysqli_error($con));
    }
    echo "
    <center>
        <p>1 Registro Insertado</p>
        <a href='consulta_productos.php'>Ver registros</a>
    </center>
    ";
?>