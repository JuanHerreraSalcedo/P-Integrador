<?php
$usuario=$_POST["username"];
$contraseña=$_POST["password"];
session_start();
$_SESSION['username']=$usuario;

include('db.php');

$consulta="SELECT*FROM usuarios where username='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_rol']==1){//administrador
    header("location:home.php");
}else
if($filas['id_rol']==2){
    header("location:docente.php");
}else
if($filas['id_rol']==3){//acudiente
    header("location:acudiente.php");
}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Error al iniciar la sesión, intenta de nuevo</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);