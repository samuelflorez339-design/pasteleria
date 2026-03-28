<?php
$conn = new mysqli("localhost", "root", "", "pasteleria");

$result = $conn->query("SELECT * FROM pedidos");
?>

<h2>Lista de pedidos</h2>

<a href="crear.php">Nuevo Pedido</a>

<table border="1">
<tr>
<th>ID</th>
<th>Cliente</th>
<th>Descripción</th>
<th>Dirección</th>
<th>Acciones</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['cliente']; ?></td>
<td><?php echo $row['descripcion']; ?></td>
<td><?php echo $row['direccion']; ?></td>
<td>
<a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
<a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
</td>
</tr>

<?php } ?>

</table>