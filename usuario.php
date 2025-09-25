<?php

//importar la conexion
require 'incluides/config/database.php';
$db = conectarDB();

// crear email y password
$email = "jesus@jezzoner.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

// preparar la consulta
$query = "INSERT INTO usuarios (email, password) VALUES ('{$email}', '{$passwordHash}')";

//echo $query;

// agregarlo a la base de datos
mysqli_query($db, $query);

// preparar la sentencia
//$stmt = mysqli_prepare($db, $query);
//
//// vincular los parámetros
//mysqli_stmt_bind_param($stmt, "ss", $email, $password);
//
//// ejecutar la consulta
//mysqli_stmt_execute($stmt);
//
//// cerrar la sentencia
//mysqli_stmt_close($stmt);
//
//// cerrar la conexión
//mysqli_close($db);
//echo "Usuario creado exitosamente";