<?php

$conn = new mysqli("localhost","root","","pasteleria");

$id = $_GET['id'];

$conn->query("DELETE FROM pedidos WHERE id=$id");

header("Location: index.php");

?>