<?php

include "connection_sqlsrvr.php";

$dni = isset($_GET['dni']) ? trim($_GET['dni']) : '';

$query = "SELECT * FROM empleados WHERE dni = :dni";
$stmt = $conn->prepare($query);
$stmt->bindParam(":dni", $dni, PDO::PARAM_STR);
$stmt->execute();

$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

$res = [];

$res[] = $resultado;

echo json_encode($res);

?>