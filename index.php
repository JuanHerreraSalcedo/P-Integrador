<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/header.css">
</head>
<body>
    <form action="validar.php" method="post" >

    <h1>Inicio de sesión</h1>

    <p>Usuario <input type="text" placeholder="Ingrese su nombre" name="username"></p>
    <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="password"></p>
    <input type="submit" value="Entrar">
    </form>
</body>
</html>