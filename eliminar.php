<?php

$conn = new mysqli("mysql-florezapi.alwaysdata.net", "florezapi", "clase1234", "florezapi_pasteleria");

$id = $_GET['id'];

$conn->query("DELETE FROM pedidos WHERE id=$id");

header("Location: index.php");

?>