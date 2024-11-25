<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <section class="login-container">
        <h1 class="h1">Registro</h1>
            
            <form method="post" action="crear_eventos.php">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required> 

                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" required> 

                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required> 
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required> 

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>

                <input type="submit" value="Suscribirse" class="boton">
            </form>
        
    </main>
</body>
</html>
