<?php
require '../db.php';

$message = '';

if (!empty($_post['nombre']) && !empty($_post["username"]) && !empty($_post["password"]) && !empty($_post["estado"]) && !empty($_post["id_rol"])){
 $sql = "INSERT INTO usuarios (nombre,username,password,estado,id_rol) VALUES (:nombre,:username,:password,:estado,:id_rol)";
 $stmt = $conn->prepare($sql);
 $stmt->bindParam(':nombre', $_POST['nombre']);
 $stmt->bindParam(':username', $_POST['username']);
 $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
 $stmt->bindParam(':password', $password);
 $stmt->bindParam(':estado', $_POST['estado']);
 $stmt->bindParam(':id_rol', $_POST['id_rol']);

 if($stmt->execute()){
     $message = 'Successfull';
 }else{
     $message = "A ocurrido un error";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" href="../CSS/registro.css">
</head>
<body>

<?php if (!empty($_message)): ?>
<p><?php $message ?></p>

<?php endif; ?>

<h1>Registro de usuarios</h1>
    <form action="./php/index.php" method="POST" >
        <input type="text" name="nombre" placeholder="Ingresa el nombre" required>
        <input type="text" name="username" placeholder="Ingresa el usuario" required>
        <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
        <input type="password" name="confirm_password" placeholder="Confirma tu contraseña" required>
        <input type="text" name="estado" placeholder="Ingrese el estado" required>
        <input type="number" name="id_rol" placeholder="Ingrese el rol">
        <input type="submit" value="send" />
    </form>
</body>
</html>