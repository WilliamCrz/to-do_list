<?php

include_once("configuracion.php");

// Link conexion con variables
// SLink = mysqli_connect($host, $user, $password, $database);
// Link conexion con constantes mas recomendable
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

// comprobar
if (mysqli_connect_errno()) {
echo mysqli_connect_errno();
exit();
}