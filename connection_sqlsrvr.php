<?php

//Configurar datos de acceso a la Base de datos
// $host = "localhost";
// $dbname = "HorasExtras";
$dbuser = "DESKTOP-VAAL2B5\admin";
$userpass = "";

$dsn = "sqlsrv:Server=DESKTOP-VAAL2B5\SQLEXPRESS;Database=HorasExtras";
$dbuser;
$userpass;

try {
    //Crear conexión a postgress
    $conn = new PDO($dsn);

    //Mostgrar mensaje si la conexión es correcta
    if ($conn) {
        // echo "Conectado a la base correctamente!";
        echo "\n";
    }
} catch (PDOException $e) {
    //Si hay error en la conexión mostrarlo
    echo $e->getMessage();
}
