<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usuarios (nombre, apellido, usuario, email, password) VALUES(?,?,?,?,?)";

    $stmt = $mysqli ->prepare($sql);
    $stmt-> bind_param("sssss", $nombre,$apellido, $usuario, $email, $password);
    $stmt->execute();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>¡Registro Culminado!</h1>
        <p>Bienvenido <strong><?=htmlspecialchars($nombre) ?></strong>, tu registro se ha completado con exito.</p>
        <button class="boton"><a href="index.php"> Regresar al Formulario</a></button>
    </div>
    
</body>
</html>