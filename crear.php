<?php
$conn = new mysqli("mysql-florezapi.alwaysdata.net", "florezapi", "clase1234", "florezapi_pasteleria");

if($_POST){
    $cliente = $_POST['cliente'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];

    $conn->query("INSERT INTO pedidos (cliente,descripcion,direccion)
    VALUES ('$cliente','$descripcion','$direccion')");

    header("Location: index.php");
}
?>

<form method="POST">
Cliente:<br>
<input type="text" name="cliente"><br>

Descripción:<br>
<input type="text" name="descripcion"><br>

Dirección:<br>
<input type="text" name="direccion"><br><br>

<button type="submit">Guardar</button>
</form>