<?php
session_start();

$stmt = $conn->prepare("SELECT * FROM PRODUCTOS");
$stmt->execute();
$result = $stmt->get_result();

$productos = $result->fetch_assoc();
$_SESSION["productos"] = $productos;
?>