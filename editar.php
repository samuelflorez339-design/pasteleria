<?php
$conn = new mysqli("localhost","root","","pasteleria");

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM pedidos WHERE id=$id");
$row = $result->fetch_assoc();

if($_POST){
    $cliente = $_POST['cliente'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];

    $conn->query("UPDATE pedidos SET
    cliente='$cliente',
    descripcion='$descripcion',
    direccion='$direccion'
    WHERE id=$id");

    header("Location: index.php");
}
?>

<form method="POST">

Cliente:<br>
<input type="text" name="cliente" value="<?php echo $row['cliente']; ?>"><br>

Descripción:<br>
<input type="text" name="descripcion" value="<?php echo $row['descripcion']; ?>"><br>

Dirección:<br>
<input type="text" name="direccion" value="<?php echo $row['direccion']; ?>"><br><br>

<button type="submit">Actualizar</button>

</form>