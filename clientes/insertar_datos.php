<?php
    $con = mysqli_connect("localhost","root","","barberia");
    if (!$con) {
        die("No se establecio la conexion con el servidor: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO clientes
    VALUES('$_POST[ID_Cliente]', '$_POST[Nombre]', '$_POST[Apellido]', '$_POST[Telefono]', '$_POST[Email]', '$_POST[Fecha_Registro]')";
    if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)) {
        die("Error" .mysqli_error($con));
    }
    echo "
    <center>
        <p>1 Registro Insertado</p>
        <a href='consulta_clientes.php'>Ver registros</a>
    </center>
    "
?>