<?php
// Ejemplo básico de conexión a SQL Server
$serverName = "localhost"; // Nombre del servidor SQL Server
$connectionOptions = array(
    "Database" => "LIBRERIA", // Nombre de la base de datos
    "Uid" => "admin", // Usuario de SQL Server
    "PWD" => "root" // Contraseña de SQL Server
);

// Conexión a SQL Server mediante autenticación SQL
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Verificar la conexión
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
