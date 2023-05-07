<?php

//Configurar datos de acceso a la Base de datos
// $host = "localhost";
// $dbname = "HorasExtras";
$dbuser = "DESKTOP-TC2CTH8\doggie";
$userpass = "";

$dsn = "sqlsrv:Server=DESKTOP-TC2CTH8;Database=HorasExtras"; $dbuser; $userpass;

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
